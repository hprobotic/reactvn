]�W<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:50:"SELECT * FROM reactvn_posts WHERE ID = 618 LIMIT 1";s:11:"last_result";a:1:{i:0;O:8:"stdClass":23:{s:2:"ID";s:3:"618";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2016-08-15 10:07:09";s:13:"post_date_gmt";s:19:"2016-08-15 03:07:09";s:12:"post_content";s:37797:"Python <a href="https://twistedmatrix.com/trac/">Twisted</a> will <a href="http://twistedmatrix.com/pipermail/twisted-python/2016-July/030535.html">support HTTP 2 in its web server</a>. HTTP2 is not available by default, to get it you need to install <a href="https://github.com/python-hyper/hyper-h2">hyper-h2</a> (just run<code>pip install twisted[h2]</code>). This is really big and exciting news for whole Python ecosystem so it’s worth seeing how it works and how difficult or easy it is to set up.

In this post I’m going to build some simple Twisted website serving content over HTTP 2 and then create a client connecting to this sample site. Will there be any big difference in performance between HTTP 2 and HTTP 1.1? Will my demo site work quicker in HTTP2?

<h2 id="hello-http2">Hello HTTP2</h2>

Let’s start with saying “Hello world!” in HTTP 2 from Python Twisted.

<a href="https://twistedmatrix.com/documents/current/web/howto/using-twistedweb.html">Twisted web server</a> already supports Python 3 so you can use 3 no problem. For this blog post I’m going to use Python 3.4.3. I’m assuming you have Twisted 16.3.0 with all HTTP2 dependencies installed. There is some minor bug in parsing optional dependencies in Python 3, so if you’re using 3 you may need to install “h2” and “priority” packages from pip manually instead of running <code>pip install twisted[h2]</code>.

Our website will serve content over HTTPS. While HTTP2 protocol itself does not require TLS, most client implementations (especially mainstream browsers) do require HTTPS. This means we need to start building our website with getting self signed certificates for local development. To generate self signed certificate you need to run following command:

<figure class="highlight">

<pre><code class="language-bash" data-lang="bash"><span class="c"># generate private key</span>
<span class="gp">$ </span>openssl genrsa &gt; privkey.pem
<span class="c"># generate certificate that will be stored in cert.pem file</span>
<span class="gp">$ </span>openssl req -new -x509 -key privkey.pem -out cert.pem -days 365 -nodes</code></pre>

</figure>After running above command you’ll need to fill out some details about you. You can ignore most of it or set some fake values, but keep in mind that some clients will refuse to connect if common name is not set to host name. Remember to put “localhost” if openssl asks you about “common name”.

Now that we have our ssl certificates let’s build simple “hello world” Twisted resource serving HTTP2 over HTTPS.

Our resource will be really simplest possible and it will look like this:

<figure class="highlight">

<pre><code class="language-python" data-lang="python"><span class="k">class</span> <span class="nc">Index</span><span class="p">(</span><span class="n">Resource</span><span class="p">):</span>
    <span class="n">isLeaf</span> <span class="o">=</span> <span class="bp">True</span>

    <span class="k">def</span> <span class="nf">render_GET</span><span class="p">(</span><span class="bp">self</span><span class="p">,</span> <span class="n">request</span><span class="p">):</span>
        <span class="k">return</span> <span class="n">b</span><span class="s">"hello world (in HTTP2)"</span></code></pre>

</figure>Above code creates simple resource that will handle all request to root of website.

We now need to tell Twisted to listen on some specific port and serve our resource there using TLS. To actually launch our site on connection speaking SSL we’ll use <a href="https://twistedmatrix.com/documents/current/core/howto/endpoints.html">Twisted endpoints</a>. Endpoints are the recommended approach to do SSL in Twisted. In the past you could use Twisted DefaultSSLContextFactory, but this API is going to be deprecated in future releases. Factory misses lots of SSL features, is insecure and it won’t work properly with HTTP 2.

Here’s how you properly create instance of https website in Twisted:

<figure class="highlight">

<pre><code class="language-python" data-lang="python"><span class="c"># create instance of our web resource Index is instance of twisted.web.Resource</span>
<span class="n">site</span> <span class="o">=</span> <span class="n">server</span><span class="o">.</span><span class="n">Site</span><span class="p">(</span><span class="n">Index</span><span class="p">())</span>

<span class="c"># specify port and certificate</span>
<span class="n">endpoint_spec</span> <span class="o">=</span> <span class="s">"ssl:port=8080:privateKey=privkey.pem:certKey=cert.pem"</span>

<span class="c"># create listening endpoint</span>
<span class="n">server</span> <span class="o">=</span> <span class="n">endpoints</span><span class="o">.</span><span class="n">serverFromString</span><span class="p">(</span><span class="n">reactor</span><span class="p">,</span> <span class="n">endpoint_spec</span><span class="p">)</span>

<span class="c"># start listening serving site in specified way</span>
<span class="n">server</span><span class="o">.</span><span class="n">listen</span><span class="p">(</span><span class="n">site</span><span class="p">)</span></code></pre>

</figure>Full hello world example will look like this:

<figure class="highlight">

<pre><code class="language-python" data-lang="python"><span class="kn">import</span> <span class="nn">sys</span>

<span class="kn">from</span> <span class="nn">twisted.web</span> <span class="kn">import</span> <span class="n">server</span>
<span class="kn">from</span> <span class="nn">twisted.web.resource</span> <span class="kn">import</span> <span class="n">Resource</span>
<span class="kn">from</span> <span class="nn">twisted.internet</span> <span class="kn">import</span> <span class="n">reactor</span>
<span class="kn">from</span> <span class="nn">twisted.python</span> <span class="kn">import</span> <span class="n">log</span>

<span class="kn">from</span> <span class="nn">twisted.internet</span> <span class="kn">import</span> <span class="n">endpoints</span>

<span class="k">class</span> <span class="nc">Index</span><span class="p">(</span><span class="n">Resource</span><span class="p">):</span>
    <span class="n">isLeaf</span> <span class="o">=</span> <span class="bp">True</span>

    <span class="k">def</span> <span class="nf">render_GET</span><span class="p">(</span><span class="bp">self</span><span class="p">,</span> <span class="n">request</span><span class="p">):</span>
        <span class="k">return</span> <span class="n">b</span><span class="s">"hello world (in HTTP2)"</span>


<span class="k">if</span> <span class="n">__name__</span> <span class="o">==</span> <span class="s">"__main__"</span><span class="p">:</span>
    <span class="n">log</span><span class="o">.</span><span class="n">startLogging</span><span class="p">(</span><span class="n">sys</span><span class="o">.</span><span class="n">stdout</span><span class="p">)</span>
    <span class="n">site</span> <span class="o">=</span> <span class="n">server</span><span class="o">.</span><span class="n">Site</span><span class="p">(</span><span class="n">Index</span><span class="p">())</span>
    <span class="n">endpoint_spec</span> <span class="o">=</span> <span class="s">"ssl:port=8080:privateKey=privkey.pem:certKey=cert.pem"</span>
    <span class="n">server</span> <span class="o">=</span> <span class="n">endpoints</span><span class="o">.</span><span class="n">serverFromString</span><span class="p">(</span><span class="n">reactor</span><span class="p">,</span> <span class="n">endpoint_spec</span><span class="p">)</span>
    <span class="n">server</span><span class="o">.</span><span class="n">listen</span><span class="p">(</span><span class="n">site</span><span class="p">)</span>
    <span class="n">reactor</span><span class="o">.</span><span class="n">run</span><span class="p">()</span></code></pre>

</figure>So now we have Twisted server that has some alleged HTTP 2 support, but how do we actually test it? Obviously we need some HTTP2 client. One such client is curl. Unfortunately by default curl does not come with HTTP2 support. To be able to use HTTP2 you need to install optional dependencies and compile from source passing flag telling curl2 to compile with HTTP2 support. This is <a href="https://serversforhackers.com/video/curl-with-http2-support">nicely described here</a>, or <a href="https://blog.cloudflare.com/tools-for-debugging-testing-and-using-http-2/">also here</a>.

After installing curl you can test your website like this

<figure class="highlight">

<pre><code class="language-python" data-lang="python"><span class="c"># remember about passing certificate to curl (--cacert option)</span>
<span class="o">&gt;</span> <span class="n">curl2</span> <span class="o">--</span><span class="n">http2</span> <span class="n">https</span><span class="p">:</span><span class="o">//</span><span class="n">localhost</span><span class="p">:</span><span class="mi">8080</span> <span class="o">-</span><span class="n">v</span> <span class="o">--</span><span class="n">cacert</span> <span class="n">cert</span><span class="o">.</span><span class="n">pem</span>
<span class="o">...</span>
<span class="n">Using</span> <span class="n">HTTP2</span><span class="p">,</span> <span class="n">server</span> <span class="n">supports</span> <span class="n">multi</span><span class="o">-</span><span class="n">use</span>
<span class="o">*</span> <span class="n">Connection</span> <span class="n">state</span> <span class="n">changed</span> <span class="p">(</span><span class="n">HTTP</span><span class="o">/</span><span class="mi">2</span> <span class="n">confirmed</span><span class="p">)</span>
<span class="o">*</span> <span class="n">TCP_NODELAY</span> <span class="nb">set</span>
<span class="o">*</span> <span class="n">Copying</span> <span class="n">HTTP</span><span class="o">/</span><span class="mi">2</span> <span class="n">data</span> <span class="ow">in</span> <span class="n">stream</span> <span class="nb">buffer</span> <span class="n">to</span> <span class="n">connection</span> <span class="nb">buffer</span> <span class="n">after</span> <span class="n">upgrade</span><span class="p">:</span> <span class="nb">len</span><span class="o">=</span><span class="mi">0</span>
<span class="o">*</span> <span class="n">Using</span> <span class="n">Stream</span> <span class="n">ID</span><span class="p">:</span> <span class="mi">1</span> <span class="p">(</span><span class="n">easy</span> <span class="n">handle</span> <span class="mh">0x16b2bc0</span><span class="p">)</span>
<span class="o">&gt;</span> <span class="n">GET</span> <span class="o">/</span> <span class="n">HTTP</span><span class="o">/</span><span class="mf">1.1</span>
<span class="o">&gt;</span> <span class="n">Host</span><span class="p">:</span> <span class="n">localhost</span><span class="p">:</span><span class="mi">8080</span>
<span class="o">&gt;</span> <span class="n">User</span><span class="o">-</span><span class="n">Agent</span><span class="p">:</span> <span class="n">curl</span><span class="o">/</span><span class="mf">7.49</span><span class="o">.</span><span class="mi">1</span>
<span class="o">&gt;</span> <span class="n">Accept</span><span class="p">:</span> <span class="o">*/*</span></code></pre>

</figure>You can see curl reports that it uses HTTP2 on connection level but then actual request part is HTTP 1.1. This is expected. HTTP2 does not change HTTP semantics, all HTTP verbs, headers etc is valid in HTTP2. Majority of HTTP2 happens on TCP connection level.

In your server logs you should see following messages:

<figure class="highlight">

<pre><code class="language-python" data-lang="python"><span class="o">&gt;</span> <span class="n">python</span> <span class="n">hello</span><span class="o">.</span><span class="n">py</span> 
<span class="mi">2016</span><span class="o">-</span><span class="mo">07</span><span class="o">-</span><span class="mi">27</span> <span class="mi">13</span><span class="p">:</span><span class="mi">20</span><span class="p">:</span><span class="mi">16</span><span class="o">+</span><span class="mo">0200</span> <span class="p">[</span><span class="o">-</span><span class="p">]</span> <span class="n">Log</span> <span class="n">opened</span><span class="o">.</span>
<span class="mi">2016</span><span class="o">-</span><span class="mo">07</span><span class="o">-</span><span class="mi">27</span> <span class="mi">13</span><span class="p">:</span><span class="mi">20</span><span class="p">:</span><span class="mi">16</span><span class="o">+</span><span class="mo">0200</span> <span class="p">[</span><span class="o">-</span><span class="p">]</span> <span class="n">Site</span> <span class="p">(</span><span class="n">TLS</span><span class="p">)</span> <span class="n">starting</span> <span class="n">on</span> <span class="mi">8080</span>
<span class="mi">2016</span><span class="o">-</span><span class="mo">07</span><span class="o">-</span><span class="mi">27</span> <span class="mi">13</span><span class="p">:</span><span class="mi">20</span><span class="p">:</span><span class="mi">16</span><span class="o">+</span><span class="mo">0200</span> <span class="p">[</span><span class="o">-</span><span class="p">]</span> <span class="n">Starting</span> <span class="n">factory</span> <span class="o">&lt;</span><span class="n">twisted</span><span class="o">.</span><span class="n">web</span><span class="o">.</span><span class="n">server</span><span class="o">.</span><span class="n">Site</span> <span class="nb">object</span> <span class="n">at</span> <span class="mh">0x7f263f172e80</span><span class="o">&gt;</span>
<span class="mi">2016</span><span class="o">-</span><span class="mo">07</span><span class="o">-</span><span class="mi">27</span> <span class="mi">13</span><span class="p">:</span><span class="mi">20</span><span class="p">:</span><span class="mi">18</span><span class="o">+</span><span class="mo">0200</span> <span class="p">[</span><span class="o">-</span><span class="p">]</span> <span class="s">"-"</span> <span class="o">-</span> <span class="o">-</span> <span class="p">[</span><span class="mi">27</span><span class="o">/</span><span class="n">Jul</span><span class="o">/</span><span class="mi">2016</span><span class="p">:</span><span class="mi">11</span><span class="p">:</span><span class="mi">20</span><span class="p">:</span><span class="mi">18</span> <span class="o">+</span><span class="mo">0000</span><span class="p">]</span> <span class="s">"GET / HTTP/2"</span> <span class="mi">200</span> <span class="mi">22</span> <span class="s">"-"</span> <span class="s">"curl/7.49.1"</span></code></pre>

</figure>This line <code>"-" - - [27/Jul/2016:11:20:18 +0000] "GET / HTTP/2" 200 22 "-" "curl/7.49.1"</code> tells you that server used HTTP 2 when responding to curl request.

<h2 id="hello-world-in-chrome">Hello world in Chrome</h2>

Why did I use curl and not just plain browser such as Chrome? The problem is that Chrome is super restrictive in HTTP 2 support. Chrome requires all connections to use ALPN protocol negotiation. This is<a href="https://www.nginx.com/blog/supporting-http2-google-chrome-users/">discussed in detail here</a> and <a href="https://ma.ttias.be/day-google-chrome-disables-http2-nearly-everyone-may-31st-2016/">here</a>. To support ALPN your system has to have OpenSSL version above 1.0.2. At the moment of writing vast majority of Linux systems dont have OpenSSL 1.0.2 installed. Only Ubuntu 16.04 comes with OpenSSL 1.0.2. If you’re on Linux Upgrading your OpenSSL system wide is not a trivial task. I’m not sure about Mac OS or Widows or other OS-es. I recommend you check your openssl version yourself, if it’s above 1.0.2 you’re good to go testing in Chrome. Otherwise I created simple <a href="https://github.com/pawelmhm/sf-books-http2/blob/master/Dockerfile">Dockerfile here</a> using Ubuntu 16.04 and installing all dependencies, there’s also associated<a href="https://github.com/pawelmhm/sf-books-http2/blob/master/Makefile">makefile here</a> that tells you how to build and run docker image.

Once you have all dependencies, you also need to make Chrome accept your fake self signed certificate. Steps how to accomplish this are <a href="http://stackoverflow.com/a/15076602/1757620">described here</a>

As you see making HTTP2 work in Chrome is not a trivial task. Once you’re ready you can test HTTP2 support by opening dev tools. Enabling ‘protocol’ column will allow you to see version of protocol used in connection, e.g. your dev tools should show something like this:

<a href="https://pawelmhm.github.io/assets/h2_screen.png"><img src="https://pawelmhm.github.io/assets/h2_screen.png" /></a>

<h2 id="benchmark-http2-vs-http11">Benchmark HTTP2 vs HTTP1.1</h2>

Now that we know how to serve working (and secure) HTTP2 website with Twisted we can move to some more interesting things and compare differences between HTTP1.1 and HTTP2. Does it really matter if site is HTTP2 or HTTP1.1? Is there any real need to bother about HTTP2?

To try out things I’m going to build super simple online book store HTTP API. My book store will have 3000 science fiction books in store including classics by Ray Bradbury and Frank Herbert. I extracted data from goodreads.com with some trivial Scrapy project. You can <a href="https://raw.githubusercontent.com/pawelmhm/sf-books-http2/master/books.json">download data from here</a>. My bookstore will have initial page that lists all book ids in JSON. Each book will then have it’s own page where you can see some page details. Client will randomly first request index list and it will then visit each specific page to see what’s there. One client will parse HTTP1.1, other one will parse HTTP2. Which one will be quicker?

My API will look like this:

<figure class="highlight">

<pre><code class="language-python" data-lang="python"><span class="c"># server.py</span>
<span class="kn">import</span> <span class="nn">json</span>
<span class="kn">import</span> <span class="nn">sys</span>

<span class="kn">from</span> <span class="nn">twisted.web</span> <span class="kn">import</span> <span class="n">server</span>
<span class="kn">from</span> <span class="nn">twisted.web.resource</span> <span class="kn">import</span> <span class="n">Resource</span>
<span class="kn">from</span> <span class="nn">twisted.internet</span> <span class="kn">import</span> <span class="n">reactor</span>
<span class="kn">from</span> <span class="nn">twisted.python</span> <span class="kn">import</span> <span class="n">log</span>

<span class="kn">from</span> <span class="nn">twisted.internet</span> <span class="kn">import</span> <span class="n">endpoints</span>


<span class="k">def</span> <span class="nf">load_stock</span><span class="p">():</span>
    <span class="c"># load data from JSON</span>
    <span class="k">with</span> <span class="nb">open</span><span class="p">(</span><span class="s">"books.json"</span><span class="p">)</span> <span class="k">as</span> <span class="n">stock_file</span><span class="p">:</span>
        <span class="k">return</span> <span class="n">json</span><span class="o">.</span><span class="n">load</span><span class="p">(</span><span class="n">stock_file</span><span class="p">)</span>

<span class="n">BOOKS</span> <span class="o">=</span> <span class="n">load_stock</span><span class="p">()</span>


<span class="k">class</span> <span class="nc">Index</span><span class="p">(</span><span class="n">Resource</span><span class="p">):</span>
    <span class="s">"""Serve all book ids.
    """</span>
    <span class="k">def</span> <span class="nf">render_GET</span><span class="p">(</span><span class="bp">self</span><span class="p">,</span> <span class="n">request</span><span class="p">):</span>
        <span class="k">return</span> <span class="n">json</span><span class="o">.</span><span class="n">dumps</span><span class="p">(</span><span class="nb">list</span><span class="p">(</span><span class="n">BOOKS</span><span class="o">.</span><span class="n">keys</span><span class="p">()))</span><span class="o">.</span><span class="n">encode</span><span class="p">(</span><span class="s">"utf8"</span><span class="p">)</span>


<span class="k">class</span> <span class="nc">Book</span><span class="p">(</span><span class="n">Resource</span><span class="p">):</span>
    <span class="s">"""Return detailed data about each book.
    """</span>
    <span class="n">isLeaf</span> <span class="o">=</span> <span class="bp">True</span>

    <span class="k">def</span> <span class="nf">render_GET</span><span class="p">(</span><span class="bp">self</span><span class="p">,</span> <span class="n">request</span><span class="p">):</span>
        <span class="n">book_id</span> <span class="o">=</span> <span class="n">request</span><span class="o">.</span><span class="n">args</span><span class="o">.</span><span class="n">get</span><span class="p">(</span><span class="n">b</span><span class="s">"id"</span><span class="p">)</span>
        <span class="n">book</span> <span class="o">=</span> <span class="n">BOOKS</span><span class="o">.</span><span class="n">get</span><span class="p">(</span><span class="n">book_id</span><span class="p">[</span><span class="mi">0</span><span class="p">]</span><span class="o">.</span><span class="n">decode</span><span class="p">(</span><span class="s">"utf8"</span><span class="p">))</span>
        <span class="k">if</span> <span class="ow">not</span> <span class="n">book</span><span class="p">:</span>
            <span class="n">request</span><span class="o">.</span><span class="n">setResponseCode</span><span class="p">(</span><span class="mi">404</span><span class="p">)</span>
            <span class="k">return</span> <span class="n">b</span><span class="s">""</span>
        <span class="k">return</span> <span class="n">json</span><span class="o">.</span><span class="n">dumps</span><span class="p">(</span><span class="n">book</span><span class="p">)</span><span class="o">.</span><span class="n">encode</span><span class="p">(</span><span class="s">"utf8"</span><span class="p">)</span>


<span class="k">if</span> <span class="n">__name__</span> <span class="o">==</span> <span class="s">"__main__"</span><span class="p">:</span>
    <span class="n">log</span><span class="o">.</span><span class="n">startLogging</span><span class="p">(</span><span class="n">sys</span><span class="o">.</span><span class="n">stdout</span><span class="p">)</span>
    <span class="n">root</span> <span class="o">=</span> <span class="n">Resource</span><span class="p">()</span>
    <span class="n">root</span><span class="o">.</span><span class="n">putChild</span><span class="p">(</span><span class="n">b</span><span class="s">""</span><span class="p">,</span> <span class="n">Index</span><span class="p">())</span>
    <span class="n">root</span><span class="o">.</span><span class="n">putChild</span><span class="p">(</span><span class="n">b</span><span class="s">"book"</span><span class="p">,</span> <span class="n">Book</span><span class="p">())</span>
    <span class="n">site</span> <span class="o">=</span> <span class="n">server</span><span class="o">.</span><span class="n">Site</span><span class="p">(</span><span class="n">root</span><span class="p">)</span>
    <span class="n">endpoint_spec</span> <span class="o">=</span> <span class="s">"ssl:port=8080:privateKey=privkey.pem:certKey=cert.pem"</span>
    <span class="n">server</span> <span class="o">=</span> <span class="n">endpoints</span><span class="o">.</span><span class="n">serverFromString</span><span class="p">(</span><span class="n">reactor</span><span class="p">,</span> <span class="n">endpoint_spec</span><span class="p">)</span>
    <span class="n">server</span><span class="o">.</span><span class="n">listen</span><span class="p">(</span><span class="n">site</span><span class="p">)</span>
    <span class="n">reactor</span><span class="o">.</span><span class="n">run</span><span class="p">()</span></code></pre>

</figure>If you’d like to launch this server with me you can find <a href="https://github.com/pawelmhm/sf-books-http2">all materials here</a>

Now let’s see how HTTP1.1 client will perform when trying to crawl our SF bookstore. The client is going to be plain synchronous script using python-requests. It will first visit initial page with all book ids. After fetching all book ids it will request each book details page and read response. HTTP1.1 client will reuse one TCP connection. It will send ‘connection: keep-alive’ header and all requests will be send one after another within one TCP connection.

<figure class="highlight">

<pre><code class="language-python" data-lang="python"><span class="kn">import</span> <span class="nn">json</span>
<span class="kn">import</span> <span class="nn">requests</span>

<span class="n">s</span> <span class="o">=</span> <span class="n">requests</span><span class="o">.</span><span class="n">Session</span><span class="p">()</span>
<span class="n">url</span> <span class="o">=</span> <span class="s">'https://localhost:8080'</span>
<span class="n">resp</span> <span class="o">=</span> <span class="n">s</span><span class="o">.</span><span class="n">get</span><span class="p">(</span><span class="n">url</span><span class="p">,</span> <span class="n">verify</span><span class="o">=</span><span class="s">"cert.pem"</span><span class="p">)</span>
<span class="n">index_data</span> <span class="o">=</span> <span class="n">json</span><span class="o">.</span><span class="n">loads</span><span class="p">(</span><span class="n">resp</span><span class="o">.</span><span class="n">text</span><span class="p">)</span>

<span class="n">responses</span> <span class="o">=</span> <span class="p">[]</span>

<span class="k">for</span> <span class="n">_id</span> <span class="ow">in</span> <span class="n">index_data</span><span class="p">:</span>
    <span class="n">book_details_path</span> <span class="o">=</span> <span class="s">"/book?id={}"</span><span class="o">.</span><span class="n">format</span><span class="p">(</span><span class="n">_id</span><span class="p">)</span>
    <span class="n">response</span> <span class="o">=</span> <span class="n">s</span><span class="o">.</span><span class="n">get</span><span class="p">(</span><span class="n">url</span> <span class="o">+</span> <span class="n">book_details_path</span><span class="p">,</span> <span class="n">verify</span><span class="o">=</span><span class="s">"cert.pem"</span><span class="p">)</span>
    <span class="n">body</span> <span class="o">=</span> <span class="n">json</span><span class="o">.</span><span class="n">loads</span><span class="p">(</span><span class="n">response</span><span class="o">.</span><span class="n">text</span><span class="p">)</span>
    <span class="n">responses</span><span class="o">.</span><span class="n">append</span><span class="p">(</span><span class="n">body</span><span class="p">)</span>

<span class="k">assert</span> <span class="nb">len</span><span class="p">(</span><span class="n">responses</span><span class="p">)</span> <span class="o">==</span> <span class="mi">3000</span></code></pre>

</figure>Running above client on my test server produces following metrics:

<figure class="highlight">

<pre><code class="language-python" data-lang="python"><span class="n">User</span> <span class="n">time</span> <span class="p">(</span><span class="n">seconds</span><span class="p">):</span> <span class="mf">4.09</span>
<span class="n">System</span> <span class="n">time</span> <span class="p">(</span><span class="n">seconds</span><span class="p">):</span> <span class="mf">0.15</span>
<span class="n">Percent</span> <span class="n">of</span> <span class="n">CPU</span> <span class="n">this</span> <span class="n">job</span> <span class="n">got</span><span class="p">:</span> <span class="mi">72</span><span class="o">%</span>
<span class="n">Elapsed</span> <span class="p">(</span><span class="n">wall</span> <span class="n">clock</span><span class="p">)</span> <span class="n">time</span> <span class="p">(</span><span class="n">h</span><span class="p">:</span><span class="n">mm</span><span class="p">:</span><span class="n">ss</span> <span class="ow">or</span> <span class="n">m</span><span class="p">:</span><span class="n">ss</span><span class="p">):</span> <span class="mi">0</span><span class="p">:</span><span class="mf">05.84</span></code></pre>

</figure>This means that client needed around 5 seconds to process our sf website.

Now let’s try HTTP2 client. In essence it will do same thing as HTTP1.1 client, it will connect to initial index page, fetch all books ids and request one book after another. The only difference is that the client will use <a href="https://http2.github.io/faq/#why-is-http2-multiplexed">HTTP2 multiplexing</a>. This means that instead of sending requests one after another and waiting for responses we’ll send multiple requests at once and then we’ll fetch responses. HTTP 1.1 allows you to reuse TCP connection but the process is:

<figure class="highlight">

<pre><code class="language-python" data-lang="python"><span class="o">====</span> <span class="n">start</span> <span class="n">connection</span> <span class="o">====</span> 
<span class="n">send</span> <span class="n">request</span> <span class="mi">1</span> <span class="o">--&gt;</span> <span class="n">wait</span> <span class="k">for</span> <span class="n">response</span> <span class="o">--&gt;</span> <span class="n">receive</span> <span class="n">response</span> <span class="mi">1</span> <span class="o">--&gt;</span> <span class="n">send</span> <span class="n">request</span> <span class="mi">2</span> <span class="o">...</span>
<span class="o">====</span> <span class="n">end</span> <span class="n">connection</span> <span class="o">====</span></code></pre>

</figure>from what I understand in HTTP2 the process is more like

<figure class="highlight">

<pre><code class="language-python" data-lang="python"><span class="o">====</span> <span class="n">start</span> <span class="n">connection</span> <span class="o">====</span> 
<span class="n">send</span> <span class="n">request</span> <span class="mi">1</span><span class="p">,</span> <span class="n">send</span> <span class="n">request</span> <span class="mi">2</span><span class="p">,</span> <span class="n">send</span> <span class="n">request</span> <span class="mi">3</span> <span class="o">--&gt;</span> <span class="n">wait</span> <span class="k">for</span> <span class="n">responses</span> <span class="o">--&gt;</span> <span class="n">receive</span> <span class="n">response</span> <span class="mi">1</span><span class="p">,</span> <span class="mi">2</span><span class="p">,</span> <span class="mi">3</span>
<span class="o">====</span> <span class="n">end</span> <span class="n">connection</span> <span class="o">====</span></code></pre>

</figure>In HTTP1.1 if you have one slow response it will block connection. In HTTP2 you can send multiple requests to your server over one connection at the same time and then fetch responses as they arrive from origin.

To use HTTP2 to its full capabilities our client is going to send multiple requests over one connection and then fetch responses. It will split initial list of 3000 books into chunks of 100 urls. For every chunk it will start with sending 100 requests. In next step it will iterate over connection stream ids and fetch responses.

I’m going to use <a href="https://github.com/Lukasa/hyper">python-hyper</a> as underlying client library. Twisted does not yet support HTTP2 client side, but work on supporting it is in progress.

<figure class="highlight">

<pre><code class="language-python" data-lang="python"><span class="kn">import</span> <span class="nn">json</span>
<span class="kn">from</span> <span class="nn">hyper</span> <span class="kn">import</span> <span class="n">HTTPConnection</span>

<span class="n">conn</span> <span class="o">=</span> <span class="n">HTTPConnection</span><span class="p">(</span><span class="s">'localhost:8080'</span><span class="p">,</span> <span class="n">secure</span><span class="o">=</span><span class="bp">True</span><span class="p">)</span>
<span class="n">conn</span><span class="o">.</span><span class="n">request</span><span class="p">(</span><span class="s">'GET'</span><span class="p">,</span> <span class="s">'/'</span><span class="p">)</span>
<span class="n">resp</span> <span class="o">=</span> <span class="n">conn</span><span class="o">.</span><span class="n">get_response</span><span class="p">()</span>

<span class="c"># process initial page with book ids</span>
<span class="n">index_data</span> <span class="o">=</span> <span class="n">json</span><span class="o">.</span><span class="n">loads</span><span class="p">(</span><span class="n">resp</span><span class="o">.</span><span class="n">read</span><span class="p">()</span><span class="o">.</span><span class="n">decode</span><span class="p">(</span><span class="s">"utf8"</span><span class="p">))</span>

<span class="n">responses</span> <span class="o">=</span> <span class="p">[]</span>
<span class="n">chunk_size</span> <span class="o">=</span> <span class="mi">100</span>

<span class="c"># split initial set of urls into chunks of 100 items</span>
<span class="k">for</span> <span class="n">i</span> <span class="ow">in</span> <span class="nb">range</span><span class="p">(</span><span class="mi">0</span><span class="p">,</span> <span class="nb">len</span><span class="p">(</span><span class="n">index_data</span><span class="p">),</span> <span class="n">chunk_size</span><span class="p">):</span>
    <span class="n">request_ids</span> <span class="o">=</span> <span class="p">[]</span>

    <span class="c"># make requests</span>
    <span class="k">for</span> <span class="n">_id</span> <span class="ow">in</span> <span class="n">index_data</span><span class="p">[</span><span class="n">i</span><span class="p">:</span><span class="n">i</span><span class="o">+</span><span class="n">chunk_size</span><span class="p">]:</span>
        <span class="n">book_details_path</span> <span class="o">=</span> <span class="s">"/book?id={}"</span><span class="o">.</span><span class="n">format</span><span class="p">(</span><span class="n">_id</span><span class="p">)</span>
        <span class="n">request_id</span> <span class="o">=</span> <span class="n">conn</span><span class="o">.</span><span class="n">request</span><span class="p">(</span><span class="s">'GET'</span><span class="p">,</span> <span class="n">book_details_path</span><span class="p">)</span>
        <span class="n">request_ids</span><span class="o">.</span><span class="n">append</span><span class="p">(</span><span class="n">request_id</span><span class="p">)</span>

    <span class="c"># get responses</span>
    <span class="k">for</span> <span class="n">req_id</span> <span class="ow">in</span> <span class="n">request_ids</span><span class="p">:</span>
        <span class="n">response</span> <span class="o">=</span> <span class="n">conn</span><span class="o">.</span><span class="n">get_response</span><span class="p">(</span><span class="n">req_id</span><span class="p">)</span>
        <span class="n">body</span> <span class="o">=</span> <span class="n">json</span><span class="o">.</span><span class="n">loads</span><span class="p">(</span><span class="n">response</span><span class="o">.</span><span class="n">read</span><span class="p">()</span><span class="o">.</span><span class="n">decode</span><span class="p">(</span><span class="s">"utf8"</span><span class="p">))</span>
        <span class="n">responses</span><span class="o">.</span><span class="n">append</span><span class="p">(</span><span class="n">body</span><span class="p">)</span>

<span class="k">assert</span> <span class="nb">len</span><span class="p">(</span><span class="n">responses</span><span class="p">)</span> <span class="o">==</span> <span class="mi">3000</span></code></pre>

</figure>What kind of performance can we expect from HTTP2 client?

<figure class="highlight">

<pre><code class="language-python" data-lang="python"><span class="n">User</span> <span class="n">time</span> <span class="p">(</span><span class="n">seconds</span><span class="p">):</span> <span class="mf">1.41</span>
<span class="n">System</span> <span class="n">time</span> <span class="p">(</span><span class="n">seconds</span><span class="p">):</span> <span class="mf">0.04</span>
<span class="n">Percent</span> <span class="n">of</span> <span class="n">CPU</span> <span class="n">this</span> <span class="n">job</span> <span class="n">got</span><span class="p">:</span> <span class="mi">41</span><span class="o">%</span>
<span class="n">Elapsed</span> <span class="p">(</span><span class="n">wall</span> <span class="n">clock</span><span class="p">)</span> <span class="n">time</span> <span class="p">(</span><span class="n">h</span><span class="p">:</span><span class="n">mm</span><span class="p">:</span><span class="n">ss</span> <span class="ow">or</span> <span class="n">m</span><span class="p">:</span><span class="n">ss</span><span class="p">):</span> <span class="mi">0</span><span class="p">:</span><span class="mf">03.53</span></code></pre>

</figure>To sum up HTTP2 client is faster, but it also works slightly differently. If you were to use HTTP2 in same way as HTTP1.1 (just send one request after another within one connection) performance difference would be small or non-existent. It’s also worth noting that I didnt go into details of other HTTP2 improvements (such as headers compression or server push). These other benefits of HTTP2 are certainly equally important as multiplexing of messages over one connection. I’m not sure if you can use server push from Twisted though.

<p style="text-align: right;"><strong>pawelmhm.github.io</strong></p>";s:10:"post_title";s:32:"Building HTTP 2 server in Python";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:32:"building-http-2-server-in-python";s:7:"to_ping";s:0:"";s:6:"pinged";s:84:"
https://ma.ttias.be/day-google-chrome-disables-http2-nearly-everyone-may-31st-2016/";s:13:"post_modified";s:19:"2016-08-15 10:08:49";s:17:"post_modified_gmt";s:19:"2016-08-15 03:08:49";s:21:"post_content_filtered";s:38096:"Python <a href="https://twistedmatrix.com/trac/">Twisted</a> will <a href="http://twistedmatrix.com/pipermail/twisted-python/2016-July/030535.html">support HTTP 2 in its web server</a>. HTTP2 is not available by default, to get it you need to install <a href="https://github.com/python-hyper/hyper-h2">hyper-h2</a> (just run<code class="highlighter-rouge">pip install twisted[h2]</code>). This is really big and exciting news for whole Python ecosystem so it’s worth seeing how it works and how difficult or easy it is to set up.

In this post I’m going to build some simple Twisted website serving content over HTTP 2 and then create a client connecting to this sample site. Will there be any big difference in performance between HTTP 2 and HTTP 1.1? Will my demo site work quicker in HTTP2?
<h2 id="hello-http2">Hello HTTP2</h2>
Let’s start with saying “Hello world!” in HTTP 2 from Python Twisted.

<a href="https://twistedmatrix.com/documents/current/web/howto/using-twistedweb.html">Twisted web server</a> already supports Python 3 so you can use 3 no problem. For this blog post I’m going to use Python 3.4.3. I’m assuming you have Twisted 16.3.0 with all HTTP2 dependencies installed. There is some minor bug in parsing optional dependencies in Python 3, so if you’re using 3 you may need to install “h2” and “priority” packages from pip manually instead of running <code class="highlighter-rouge">pip install twisted[h2]</code>.

Our website will serve content over HTTPS. While HTTP2 protocol itself does not require TLS, most client implementations (especially mainstream browsers) do require HTTPS. This means we need to start building our website with getting self signed certificates for local development. To generate self signed certificate you need to run following command:

<figure class="highlight">
<pre><code class="language-bash" data-lang="bash"><span class="c"># generate private key</span>
<span class="gp">$ </span>openssl genrsa &gt; privkey.pem
<span class="c"># generate certificate that will be stored in cert.pem file</span>
<span class="gp">$ </span>openssl req -new -x509 -key privkey.pem -out cert.pem -days 365 -nodes</code></pre>
</figure>After running above command you’ll need to fill out some details about you. You can ignore most of it or set some fake values, but keep in mind that some clients will refuse to connect if common name is not set to host name. Remember to put “localhost” if openssl asks you about “common name”.

Now that we have our ssl certificates let’s build simple “hello world” Twisted resource serving HTTP2 over HTTPS.

Our resource will be really simplest possible and it will look like this:

<figure class="highlight">
<pre><code class="language-python" data-lang="python"><span class="k">class</span> <span class="nc">Index</span><span class="p">(</span><span class="n">Resource</span><span class="p">):</span>
    <span class="n">isLeaf</span> <span class="o">=</span> <span class="bp">True</span>

    <span class="k">def</span> <span class="nf">render_GET</span><span class="p">(</span><span class="bp">self</span><span class="p">,</span> <span class="n">request</span><span class="p">):</span>
        <span class="k">return</span> <span class="n">b</span><span class="s">"hello world (in HTTP2)"</span></code></pre>
</figure>Above code creates simple resource that will handle all request to root of website.

We now need to tell Twisted to listen on some specific port and serve our resource there using TLS. To actually launch our site on connection speaking SSL we’ll use <a href="https://twistedmatrix.com/documents/current/core/howto/endpoints.html">Twisted endpoints</a>. Endpoints are the recommended approach to do SSL in Twisted. In the past you could use Twisted DefaultSSLContextFactory, but this API is going to be deprecated in future releases. Factory misses lots of SSL features, is insecure and it won’t work properly with HTTP 2.

Here’s how you properly create instance of https website in Twisted:

<figure class="highlight">
<pre><code class="language-python" data-lang="python"><span class="c"># create instance of our web resource Index is instance of twisted.web.Resource</span>
<span class="n">site</span> <span class="o">=</span> <span class="n">server</span><span class="o">.</span><span class="n">Site</span><span class="p">(</span><span class="n">Index</span><span class="p">())</span>

<span class="c"># specify port and certificate</span>
<span class="n">endpoint_spec</span> <span class="o">=</span> <span class="s">"ssl:port=8080:privateKey=privkey.pem:certKey=cert.pem"</span>

<span class="c"># create listening endpoint</span>
<span class="n">server</span> <span class="o">=</span> <span class="n">endpoints</span><span class="o">.</span><span class="n">serverFromString</span><span class="p">(</span><span class="n">reactor</span><span class="p">,</span> <span class="n">endpoint_spec</span><span class="p">)</span>

<span class="c"># start listening serving site in specified way</span>
<span class="n">server</span><span class="o">.</span><span class="n">listen</span><span class="p">(</span><span class="n">site</span><span class="p">)</span></code></pre>
</figure>Full hello world example will look like this:

<figure class="highlight">
<pre><code class="language-python" data-lang="python"><span class="kn">import</span> <span class="nn">sys</span>

<span class="kn">from</span> <span class="nn">twisted.web</span> <span class="kn">import</span> <span class="n">server</span>
<span class="kn">from</span> <span class="nn">twisted.web.resource</span> <span class="kn">import</span> <span class="n">Resource</span>
<span class="kn">from</span> <span class="nn">twisted.internet</span> <span class="kn">import</span> <span class="n">reactor</span>
<span class="kn">from</span> <span class="nn">twisted.python</span> <span class="kn">import</span> <span class="n">log</span>

<span class="kn">from</span> <span class="nn">twisted.internet</span> <span class="kn">import</span> <span class="n">endpoints</span>

<span class="k">class</span> <span class="nc">Index</span><span class="p">(</span><span class="n">Resource</span><span class="p">):</span>
    <span class="n">isLeaf</span> <span class="o">=</span> <span class="bp">True</span>

    <span class="k">def</span> <span class="nf">render_GET</span><span class="p">(</span><span class="bp">self</span><span class="p">,</span> <span class="n">request</span><span class="p">):</span>
        <span class="k">return</span> <span class="n">b</span><span class="s">"hello world (in HTTP2)"</span>


<span class="k">if</span> <span class="n">__name__</span> <span class="o">==</span> <span class="s">"__main__"</span><span class="p">:</span>
    <span class="n">log</span><span class="o">.</span><span class="n">startLogging</span><span class="p">(</span><span class="n">sys</span><span class="o">.</span><span class="n">stdout</span><span class="p">)</span>
    <span class="n">site</span> <span class="o">=</span> <span class="n">server</span><span class="o">.</span><span class="n">Site</span><span class="p">(</span><span class="n">Index</span><span class="p">())</span>
    <span class="n">endpoint_spec</span> <span class="o">=</span> <span class="s">"ssl:port=8080:privateKey=privkey.pem:certKey=cert.pem"</span>
    <span class="n">server</span> <span class="o">=</span> <span class="n">endpoints</span><span class="o">.</span><span class="n">serverFromString</span><span class="p">(</span><span class="n">reactor</span><span class="p">,</span> <span class="n">endpoint_spec</span><span class="p">)</span>
    <span class="n">server</span><span class="o">.</span><span class="n">listen</span><span class="p">(</span><span class="n">site</span><span class="p">)</span>
    <span class="n">reactor</span><span class="o">.</span><span class="n">run</span><span class="p">()</span></code></pre>
</figure>So now we have Twisted server that has some alleged HTTP 2 support, but how do we actually test it? Obviously we need some HTTP2 client. One such client is curl. Unfortunately by default curl does not come with HTTP2 support. To be able to use HTTP2 you need to install optional dependencies and compile from source passing flag telling curl2 to compile with HTTP2 support. This is <a href="https://serversforhackers.com/video/curl-with-http2-support">nicely described here</a>, or <a href="https://blog.cloudflare.com/tools-for-debugging-testing-and-using-http-2/">also here</a>.

After installing curl you can test your website like this

<figure class="highlight">
<pre><code class="language-python" data-lang="python"><span class="c"># remember about passing certificate to curl (--cacert option)</span>
<span class="o">&gt;</span> <span class="n">curl2</span> <span class="o">--</span><span class="n">http2</span> <span class="n">https</span><span class="p">:</span><span class="o">//</span><span class="n">localhost</span><span class="p">:</span><span class="mi">8080</span> <span class="o">-</span><span class="n">v</span> <span class="o">--</span><span class="n">cacert</span> <span class="n">cert</span><span class="o">.</span><span class="n">pem</span>
<span class="o">...</span>
<span class="n">Using</span> <span class="n">HTTP2</span><span class="p">,</span> <span class="n">server</span> <span class="n">supports</span> <span class="n">multi</span><span class="o">-</span><span class="n">use</span>
<span class="o">*</span> <span class="n">Connection</span> <span class="n">state</span> <span class="n">changed</span> <span class="p">(</span><span class="n">HTTP</span><span class="o">/</span><span class="mi">2</span> <span class="n">confirmed</span><span class="p">)</span>
<span class="o">*</span> <span class="n">TCP_NODELAY</span> <span class="nb">set</span>
<span class="o">*</span> <span class="n">Copying</span> <span class="n">HTTP</span><span class="o">/</span><span class="mi">2</span> <span class="n">data</span> <span class="ow">in</span> <span class="n">stream</span> <span class="nb">buffer</span> <span class="n">to</span> <span class="n">connection</span> <span class="nb">buffer</span> <span class="n">after</span> <span class="n">upgrade</span><span class="p">:</span> <span class="nb">len</span><span class="o">=</span><span class="mi">0</span>
<span class="o">*</span> <span class="n">Using</span> <span class="n">Stream</span> <span class="n">ID</span><span class="p">:</span> <span class="mi">1</span> <span class="p">(</span><span class="n">easy</span> <span class="n">handle</span> <span class="mh">0x16b2bc0</span><span class="p">)</span>
<span class="o">&gt;</span> <span class="n">GET</span> <span class="o">/</span> <span class="n">HTTP</span><span class="o">/</span><span class="mf">1.1</span>
<span class="o">&gt;</span> <span class="n">Host</span><span class="p">:</span> <span class="n">localhost</span><span class="p">:</span><span class="mi">8080</span>
<span class="o">&gt;</span> <span class="n">User</span><span class="o">-</span><span class="n">Agent</span><span class="p">:</span> <span class="n">curl</span><span class="o">/</span><span class="mf">7.49</span><span class="o">.</span><span class="mi">1</span>
<span class="o">&gt;</span> <span class="n">Accept</span><span class="p">:</span> <span class="o">*/*</span></code></pre>
</figure>You can see curl reports that it uses HTTP2 on connection level but then actual request part is HTTP 1.1. This is expected. HTTP2 does not change HTTP semantics, all HTTP verbs, headers etc is valid in HTTP2. Majority of HTTP2 happens on TCP connection level.

In your server logs you should see following messages:

<figure class="highlight">
<pre><code class="language-python" data-lang="python"><span class="o">&gt;</span> <span class="n">python</span> <span class="n">hello</span><span class="o">.</span><span class="n">py</span> 
<span class="mi">2016</span><span class="o">-</span><span class="mo">07</span><span class="o">-</span><span class="mi">27</span> <span class="mi">13</span><span class="p">:</span><span class="mi">20</span><span class="p">:</span><span class="mi">16</span><span class="o">+</span><span class="mo">0200</span> <span class="p">[</span><span class="o">-</span><span class="p">]</span> <span class="n">Log</span> <span class="n">opened</span><span class="o">.</span>
<span class="mi">2016</span><span class="o">-</span><span class="mo">07</span><span class="o">-</span><span class="mi">27</span> <span class="mi">13</span><span class="p">:</span><span class="mi">20</span><span class="p">:</span><span class="mi">16</span><span class="o">+</span><span class="mo">0200</span> <span class="p">[</span><span class="o">-</span><span class="p">]</span> <span class="n">Site</span> <span class="p">(</span><span class="n">TLS</span><span class="p">)</span> <span class="n">starting</span> <span class="n">on</span> <span class="mi">8080</span>
<span class="mi">2016</span><span class="o">-</span><span class="mo">07</span><span class="o">-</span><span class="mi">27</span> <span class="mi">13</span><span class="p">:</span><span class="mi">20</span><span class="p">:</span><span class="mi">16</span><span class="o">+</span><span class="mo">0200</span> <span class="p">[</span><span class="o">-</span><span class="p">]</span> <span class="n">Starting</span> <span class="n">factory</span> <span class="o">&lt;</span><span class="n">twisted</span><span class="o">.</span><span class="n">web</span><span class="o">.</span><span class="n">server</span><span class="o">.</span><span class="n">Site</span> <span class="nb">object</span> <span class="n">at</span> <span class="mh">0x7f263f172e80</span><span class="o">&gt;</span>
<span class="mi">2016</span><span class="o">-</span><span class="mo">07</span><span class="o">-</span><span class="mi">27</span> <span class="mi">13</span><span class="p">:</span><span class="mi">20</span><span class="p">:</span><span class="mi">18</span><span class="o">+</span><span class="mo">0200</span> <span class="p">[</span><span class="o">-</span><span class="p">]</span> <span class="s">"-"</span> <span class="o">-</span> <span class="o">-</span> <span class="p">[</span><span class="mi">27</span><span class="o">/</span><span class="n">Jul</span><span class="o">/</span><span class="mi">2016</span><span class="p">:</span><span class="mi">11</span><span class="p">:</span><span class="mi">20</span><span class="p">:</span><span class="mi">18</span> <span class="o">+</span><span class="mo">0000</span><span class="p">]</span> <span class="s">"GET / HTTP/2"</span> <span class="mi">200</span> <span class="mi">22</span> <span class="s">"-"</span> <span class="s">"curl/7.49.1"</span></code></pre>
</figure>This line <code class="highlighter-rouge">"-" - - [27/Jul/2016:11:20:18 +0000] "GET / HTTP/2" 200 22 "-" "curl/7.49.1"</code> tells you that server used HTTP 2 when responding to curl request.
<h2 id="hello-world-in-chrome">Hello world in Chrome</h2>
Why did I use curl and not just plain browser such as Chrome? The problem is that Chrome is super restrictive in HTTP 2 support. Chrome requires all connections to use ALPN protocol negotiation. This is<a href="https://www.nginx.com/blog/supporting-http2-google-chrome-users/">discussed in detail here</a> and <a href="https://ma.ttias.be/day-google-chrome-disables-http2-nearly-everyone-may-31st-2016/">here</a>. To support ALPN your system has to have OpenSSL version above 1.0.2. At the moment of writing vast majority of Linux systems dont have OpenSSL 1.0.2 installed. Only Ubuntu 16.04 comes with OpenSSL 1.0.2. If you’re on Linux Upgrading your OpenSSL system wide is not a trivial task. I’m not sure about Mac OS or Widows or other OS-es. I recommend you check your openssl version yourself, if it’s above 1.0.2 you’re good to go testing in Chrome. Otherwise I created simple <a href="https://github.com/pawelmhm/sf-books-http2/blob/master/Dockerfile">Dockerfile here</a> using Ubuntu 16.04 and installing all dependencies, there’s also associated<a href="https://github.com/pawelmhm/sf-books-http2/blob/master/Makefile">makefile here</a> that tells you how to build and run docker image.

Once you have all dependencies, you also need to make Chrome accept your fake self signed certificate. Steps how to accomplish this are <a href="http://stackoverflow.com/a/15076602/1757620">described here</a>

As you see making HTTP2 work in Chrome is not a trivial task. Once you’re ready you can test HTTP2 support by opening dev tools. Enabling ‘protocol’ column will allow you to see version of protocol used in connection, e.g. your dev tools should show something like this:

<a href="https://pawelmhm.github.io/assets/h2_screen.png"><img src="https://pawelmhm.github.io/assets/h2_screen.png" /></a>
<h2 id="benchmark-http2-vs-http11">Benchmark HTTP2 vs HTTP1.1</h2>
Now that we know how to serve working (and secure) HTTP2 website with Twisted we can move to some more interesting things and compare differences between HTTP1.1 and HTTP2. Does it really matter if site is HTTP2 or HTTP1.1? Is there any real need to bother about HTTP2?

To try out things I’m going to build super simple online book store HTTP API. My book store will have 3000 science fiction books in store including classics by Ray Bradbury and Frank Herbert. I extracted data from goodreads.com with some trivial Scrapy project. You can <a href="https://raw.githubusercontent.com/pawelmhm/sf-books-http2/master/books.json">download data from here</a>. My bookstore will have initial page that lists all book ids in JSON. Each book will then have it’s own page where you can see some page details. Client will randomly first request index list and it will then visit each specific page to see what’s there. One client will parse HTTP1.1, other one will parse HTTP2. Which one will be quicker?

My API will look like this:

<figure class="highlight">
<pre><code class="language-python" data-lang="python"><span class="c"># server.py</span>
<span class="kn">import</span> <span class="nn">json</span>
<span class="kn">import</span> <span class="nn">sys</span>

<span class="kn">from</span> <span class="nn">twisted.web</span> <span class="kn">import</span> <span class="n">server</span>
<span class="kn">from</span> <span class="nn">twisted.web.resource</span> <span class="kn">import</span> <span class="n">Resource</span>
<span class="kn">from</span> <span class="nn">twisted.internet</span> <span class="kn">import</span> <span class="n">reactor</span>
<span class="kn">from</span> <span class="nn">twisted.python</span> <span class="kn">import</span> <span class="n">log</span>

<span class="kn">from</span> <span class="nn">twisted.internet</span> <span class="kn">import</span> <span class="n">endpoints</span>


<span class="k">def</span> <span class="nf">load_stock</span><span class="p">():</span>
    <span class="c"># load data from JSON</span>
    <span class="k">with</span> <span class="nb">open</span><span class="p">(</span><span class="s">"books.json"</span><span class="p">)</span> <span class="k">as</span> <span class="n">stock_file</span><span class="p">:</span>
        <span class="k">return</span> <span class="n">json</span><span class="o">.</span><span class="n">load</span><span class="p">(</span><span class="n">stock_file</span><span class="p">)</span>

<span class="n">BOOKS</span> <span class="o">=</span> <span class="n">load_stock</span><span class="p">()</span>


<span class="k">class</span> <span class="nc">Index</span><span class="p">(</span><span class="n">Resource</span><span class="p">):</span>
    <span class="s">"""Serve all book ids.
    """</span>
    <span class="k">def</span> <span class="nf">render_GET</span><span class="p">(</span><span class="bp">self</span><span class="p">,</span> <span class="n">request</span><span class="p">):</span>
        <span class="k">return</span> <span class="n">json</span><span class="o">.</span><span class="n">dumps</span><span class="p">(</span><span class="nb">list</span><span class="p">(</span><span class="n">BOOKS</span><span class="o">.</span><span class="n">keys</span><span class="p">()))</span><span class="o">.</span><span class="n">encode</span><span class="p">(</span><span class="s">"utf8"</span><span class="p">)</span>


<span class="k">class</span> <span class="nc">Book</span><span class="p">(</span><span class="n">Resource</span><span class="p">):</span>
    <span class="s">"""Return detailed data about each book.
    """</span>
    <span class="n">isLeaf</span> <span class="o">=</span> <span class="bp">True</span>

    <span class="k">def</span> <span class="nf">render_GET</span><span class="p">(</span><span class="bp">self</span><span class="p">,</span> <span class="n">request</span><span class="p">):</span>
        <span class="n">book_id</span> <span class="o">=</span> <span class="n">request</span><span class="o">.</span><span class="n">args</span><span class="o">.</span><span class="n">get</span><span class="p">(</span><span class="n">b</span><span class="s">"id"</span><span class="p">)</span>
        <span class="n">book</span> <span class="o">=</span> <span class="n">BOOKS</span><span class="o">.</span><span class="n">get</span><span class="p">(</span><span class="n">book_id</span><span class="p">[</span><span class="mi">0</span><span class="p">]</span><span class="o">.</span><span class="n">decode</span><span class="p">(</span><span class="s">"utf8"</span><span class="p">))</span>
        <span class="k">if</span> <span class="ow">not</span> <span class="n">book</span><span class="p">:</span>
            <span class="n">request</span><span class="o">.</span><span class="n">setResponseCode</span><span class="p">(</span><span class="mi">404</span><span class="p">)</span>
            <span class="k">return</span> <span class="n">b</span><span class="s">""</span>
        <span class="k">return</span> <span class="n">json</span><span class="o">.</span><span class="n">dumps</span><span class="p">(</span><span class="n">book</span><span class="p">)</span><span class="o">.</span><span class="n">encode</span><span class="p">(</span><span class="s">"utf8"</span><span class="p">)</span>


<span class="k">if</span> <span class="n">__name__</span> <span class="o">==</span> <span class="s">"__main__"</span><span class="p">:</span>
    <span class="n">log</span><span class="o">.</span><span class="n">startLogging</span><span class="p">(</span><span class="n">sys</span><span class="o">.</span><span class="n">stdout</span><span class="p">)</span>
    <span class="n">root</span> <span class="o">=</span> <span class="n">Resource</span><span class="p">()</span>
    <span class="n">root</span><span class="o">.</span><span class="n">putChild</span><span class="p">(</span><span class="n">b</span><span class="s">""</span><span class="p">,</span> <span class="n">Index</span><span class="p">())</span>
    <span class="n">root</span><span class="o">.</span><span class="n">putChild</span><span class="p">(</span><span class="n">b</span><span class="s">"book"</span><span class="p">,</span> <span class="n">Book</span><span class="p">())</span>
    <span class="n">site</span> <span class="o">=</span> <span class="n">server</span><span class="o">.</span><span class="n">Site</span><span class="p">(</span><span class="n">root</span><span class="p">)</span>
    <span class="n">endpoint_spec</span> <span class="o">=</span> <span class="s">"ssl:port=8080:privateKey=privkey.pem:certKey=cert.pem"</span>
    <span class="n">server</span> <span class="o">=</span> <span class="n">endpoints</span><span class="o">.</span><span class="n">serverFromString</span><span class="p">(</span><span class="n">reactor</span><span class="p">,</span> <span class="n">endpoint_spec</span><span class="p">)</span>
    <span class="n">server</span><span class="o">.</span><span class="n">listen</span><span class="p">(</span><span class="n">site</span><span class="p">)</span>
    <span class="n">reactor</span><span class="o">.</span><span class="n">run</span><span class="p">()</span></code></pre>
</figure>If you’d like to launch this server with me you can find <a href="https://github.com/pawelmhm/sf-books-http2">all materials here</a>

Now let’s see how HTTP1.1 client will perform when trying to crawl our SF bookstore. The client is going to be plain synchronous script using python-requests. It will first visit initial page with all book ids. After fetching all book ids it will request each book details page and read response. HTTP1.1 client will reuse one TCP connection. It will send ‘connection: keep-alive’ header and all requests will be send one after another within one TCP connection.

<figure class="highlight">
<pre><code class="language-python" data-lang="python"><span class="kn">import</span> <span class="nn">json</span>
<span class="kn">import</span> <span class="nn">requests</span>

<span class="n">s</span> <span class="o">=</span> <span class="n">requests</span><span class="o">.</span><span class="n">Session</span><span class="p">()</span>
<span class="n">url</span> <span class="o">=</span> <span class="s">'https://localhost:8080'</span>
<span class="n">resp</span> <span class="o">=</span> <span class="n">s</span><span class="o">.</span><span class="n">get</span><span class="p">(</span><span class="n">url</span><span class="p">,</span> <span class="n">verify</span><span class="o">=</span><span class="s">"cert.pem"</span><span class="p">)</span>
<span class="n">index_data</span> <span class="o">=</span> <span class="n">json</span><span class="o">.</span><span class="n">loads</span><span class="p">(</span><span class="n">resp</span><span class="o">.</span><span class="n">text</span><span class="p">)</span>

<span class="n">responses</span> <span class="o">=</span> <span class="p">[]</span>

<span class="k">for</span> <span class="n">_id</span> <span class="ow">in</span> <span class="n">index_data</span><span class="p">:</span>
    <span class="n">book_details_path</span> <span class="o">=</span> <span class="s">"/book?id={}"</span><span class="o">.</span><span class="n">format</span><span class="p">(</span><span class="n">_id</span><span class="p">)</span>
    <span class="n">response</span> <span class="o">=</span> <span class="n">s</span><span class="o">.</span><span class="n">get</span><span class="p">(</span><span class="n">url</span> <span class="o">+</span> <span class="n">book_details_path</span><span class="p">,</span> <span class="n">verify</span><span class="o">=</span><span class="s">"cert.pem"</span><span class="p">)</span>
    <span class="n">body</span> <span class="o">=</span> <span class="n">json</span><span class="o">.</span><span class="n">loads</span><span class="p">(</span><span class="n">response</span><span class="o">.</span><span class="n">text</span><span class="p">)</span>
    <span class="n">responses</span><span class="o">.</span><span class="n">append</span><span class="p">(</span><span class="n">body</span><span class="p">)</span>

<span class="k">assert</span> <span class="nb">len</span><span class="p">(</span><span class="n">responses</span><span class="p">)</span> <span class="o">==</span> <span class="mi">3000</span></code></pre>
</figure>Running above client on my test server produces following metrics:

<figure class="highlight">
<pre><code class="language-python" data-lang="python"><span class="n">User</span> <span class="n">time</span> <span class="p">(</span><span class="n">seconds</span><span class="p">):</span> <span class="mf">4.09</span>
<span class="n">System</span> <span class="n">time</span> <span class="p">(</span><span class="n">seconds</span><span class="p">):</span> <span class="mf">0.15</span>
<span class="n">Percent</span> <span class="n">of</span> <span class="n">CPU</span> <span class="n">this</span> <span class="n">job</span> <span class="n">got</span><span class="p">:</span> <span class="mi">72</span><span class="o">%</span>
<span class="n">Elapsed</span> <span class="p">(</span><span class="n">wall</span> <span class="n">clock</span><span class="p">)</span> <span class="n">time</span> <span class="p">(</span><span class="n">h</span><span class="p">:</span><span class="n">mm</span><span class="p">:</span><span class="n">ss</span> <span class="ow">or</span> <span class="n">m</span><span class="p">:</span><span class="n">ss</span><span class="p">):</span> <span class="mi">0</span><span class="p">:</span><span class="mf">05.84</span></code></pre>
</figure>This means that client needed around 5 seconds to process our sf website.

Now let’s try HTTP2 client. In essence it will do same thing as HTTP1.1 client, it will connect to initial index page, fetch all books ids and request one book after another. The only difference is that the client will use <a href="https://http2.github.io/faq/#why-is-http2-multiplexed">HTTP2 multiplexing</a>. This means that instead of sending requests one after another and waiting for responses we’ll send multiple requests at once and then we’ll fetch responses. HTTP 1.1 allows you to reuse TCP connection but the process is:

<figure class="highlight">
<pre><code class="language-python" data-lang="python"><span class="o">====</span> <span class="n">start</span> <span class="n">connection</span> <span class="o">====</span> 
<span class="n">send</span> <span class="n">request</span> <span class="mi">1</span> <span class="o">--&gt;</span> <span class="n">wait</span> <span class="k">for</span> <span class="n">response</span> <span class="o">--&gt;</span> <span class="n">receive</span> <span class="n">response</span> <span class="mi">1</span> <span class="o">--&gt;</span> <span class="n">send</span> <span class="n">request</span> <span class="mi">2</span> <span class="o">...</span>
<span class="o">====</span> <span class="n">end</span> <span class="n">connection</span> <span class="o">====</span></code></pre>
</figure>from what I understand in HTTP2 the process is more like

<figure class="highlight">
<pre><code class="language-python" data-lang="python"><span class="o">====</span> <span class="n">start</span> <span class="n">connection</span> <span class="o">====</span> 
<span class="n">send</span> <span class="n">request</span> <span class="mi">1</span><span class="p">,</span> <span class="n">send</span> <span class="n">request</span> <span class="mi">2</span><span class="p">,</span> <span class="n">send</span> <span class="n">request</span> <span class="mi">3</span> <span class="o">--&gt;</span> <span class="n">wait</span> <span class="k">for</span> <span class="n">responses</span> <span class="o">--&gt;</span> <span class="n">receive</span> <span class="n">response</span> <span class="mi">1</span><span class="p">,</span> <span class="mi">2</span><span class="p">,</span> <span class="mi">3</span>
<span class="o">====</span> <span class="n">end</span> <span class="n">connection</span> <span class="o">====</span></code></pre>
</figure>In HTTP1.1 if you have one slow response it will block connection. In HTTP2 you can send multiple requests to your server over one connection at the same time and then fetch responses as they arrive from origin.

To use HTTP2 to its full capabilities our client is going to send multiple requests over one connection and then fetch responses. It will split initial list of 3000 books into chunks of 100 urls. For every chunk it will start with sending 100 requests. In next step it will iterate over connection stream ids and fetch responses.

I’m going to use <a href="https://github.com/Lukasa/hyper">python-hyper</a> as underlying client library. Twisted does not yet support HTTP2 client side, but work on supporting it is in progress.

<figure class="highlight">
<pre><code class="language-python" data-lang="python"><span class="kn">import</span> <span class="nn">json</span>
<span class="kn">from</span> <span class="nn">hyper</span> <span class="kn">import</span> <span class="n">HTTPConnection</span>

<span class="n">conn</span> <span class="o">=</span> <span class="n">HTTPConnection</span><span class="p">(</span><span class="s">'localhost:8080'</span><span class="p">,</span> <span class="n">secure</span><span class="o">=</span><span class="bp">True</span><span class="p">)</span>
<span class="n">conn</span><span class="o">.</span><span class="n">request</span><span class="p">(</span><span class="s">'GET'</span><span class="p">,</span> <span class="s">'/'</span><span class="p">)</span>
<span class="n">resp</span> <span class="o">=</span> <span class="n">conn</span><span class="o">.</span><span class="n">get_response</span><span class="p">()</span>

<span class="c"># process initial page with book ids</span>
<span class="n">index_data</span> <span class="o">=</span> <span class="n">json</span><span class="o">.</span><span class="n">loads</span><span class="p">(</span><span class="n">resp</span><span class="o">.</span><span class="n">read</span><span class="p">()</span><span class="o">.</span><span class="n">decode</span><span class="p">(</span><span class="s">"utf8"</span><span class="p">))</span>

<span class="n">responses</span> <span class="o">=</span> <span class="p">[]</span>
<span class="n">chunk_size</span> <span class="o">=</span> <span class="mi">100</span>

<span class="c"># split initial set of urls into chunks of 100 items</span>
<span class="k">for</span> <span class="n">i</span> <span class="ow">in</span> <span class="nb">range</span><span class="p">(</span><span class="mi">0</span><span class="p">,</span> <span class="nb">len</span><span class="p">(</span><span class="n">index_data</span><span class="p">),</span> <span class="n">chunk_size</span><span class="p">):</span>
    <span class="n">request_ids</span> <span class="o">=</span> <span class="p">[]</span>

    <span class="c"># make requests</span>
    <span class="k">for</span> <span class="n">_id</span> <span class="ow">in</span> <span class="n">index_data</span><span class="p">[</span><span class="n">i</span><span class="p">:</span><span class="n">i</span><span class="o">+</span><span class="n">chunk_size</span><span class="p">]:</span>
        <span class="n">book_details_path</span> <span class="o">=</span> <span class="s">"/book?id={}"</span><span class="o">.</span><span class="n">format</span><span class="p">(</span><span class="n">_id</span><span class="p">)</span>
        <span class="n">request_id</span> <span class="o">=</span> <span class="n">conn</span><span class="o">.</span><span class="n">request</span><span class="p">(</span><span class="s">'GET'</span><span class="p">,</span> <span class="n">book_details_path</span><span class="p">)</span>
        <span class="n">request_ids</span><span class="o">.</span><span class="n">append</span><span class="p">(</span><span class="n">request_id</span><span class="p">)</span>

    <span class="c"># get responses</span>
    <span class="k">for</span> <span class="n">req_id</span> <span class="ow">in</span> <span class="n">request_ids</span><span class="p">:</span>
        <span class="n">response</span> <span class="o">=</span> <span class="n">conn</span><span class="o">.</span><span class="n">get_response</span><span class="p">(</span><span class="n">req_id</span><span class="p">)</span>
        <span class="n">body</span> <span class="o">=</span> <span class="n">json</span><span class="o">.</span><span class="n">loads</span><span class="p">(</span><span class="n">response</span><span class="o">.</span><span class="n">read</span><span class="p">()</span><span class="o">.</span><span class="n">decode</span><span class="p">(</span><span class="s">"utf8"</span><span class="p">))</span>
        <span class="n">responses</span><span class="o">.</span><span class="n">append</span><span class="p">(</span><span class="n">body</span><span class="p">)</span>

<span class="k">assert</span> <span class="nb">len</span><span class="p">(</span><span class="n">responses</span><span class="p">)</span> <span class="o">==</span> <span class="mi">3000</span></code></pre>
</figure>What kind of performance can we expect from HTTP2 client?

<figure class="highlight">
<pre><code class="language-python" data-lang="python"><span class="n">User</span> <span class="n">time</span> <span class="p">(</span><span class="n">seconds</span><span class="p">):</span> <span class="mf">1.41</span>
<span class="n">System</span> <span class="n">time</span> <span class="p">(</span><span class="n">seconds</span><span class="p">):</span> <span class="mf">0.04</span>
<span class="n">Percent</span> <span class="n">of</span> <span class="n">CPU</span> <span class="n">this</span> <span class="n">job</span> <span class="n">got</span><span class="p">:</span> <span class="mi">41</span><span class="o">%</span>
<span class="n">Elapsed</span> <span class="p">(</span><span class="n">wall</span> <span class="n">clock</span><span class="p">)</span> <span class="n">time</span> <span class="p">(</span><span class="n">h</span><span class="p">:</span><span class="n">mm</span><span class="p">:</span><span class="n">ss</span> <span class="ow">or</span> <span class="n">m</span><span class="p">:</span><span class="n">ss</span><span class="p">):</span> <span class="mi">0</span><span class="p">:</span><span class="mf">03.53</span></code></pre>
</figure>To sum up HTTP2 client is faster, but it also works slightly differently. If you were to use HTTP2 in same way as HTTP1.1 (just send one request after another within one connection) performance difference would be small or non-existent. It’s also worth noting that I didnt go into details of other HTTP2 improvements (such as headers compression or server push). These other benefits of HTTP2 are certainly equally important as multiplexing of messages over one connection. I’m not sure if you can use server push from Twisted though.
<p style="text-align: right;"><strong>pawelmhm.github.io</strong></p>";s:11:"post_parent";s:1:"0";s:4:"guid";s:25:"http://reactvn.net/?p=618";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}}s:8:"col_info";a:23:{i:0;O:8:"stdClass":13:{s:4:"name";s:2:"ID";s:7:"orgname";s:2:"ID";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:3;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:49699;s:4:"type";i:8;s:8:"decimals";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:11:"post_author";s:7:"orgname";s:11:"post_author";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:49193;s:4:"type";i:8;s:8:"decimals";i:0;}i:2;O:8:"stdClass":13:{s:4:"name";s:9:"post_date";s:7:"orgname";s:9:"post_date";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:16513;s:4:"type";i:12;s:8:"decimals";i:0;}i:3;O:8:"stdClass":13:{s:4:"name";s:13:"post_date_gmt";s:7:"orgname";s:13:"post_date_gmt";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:129;s:4:"type";i:12;s:8:"decimals";i:0;}i:4;O:8:"stdClass":13:{s:4:"name";s:12:"post_content";s:7:"orgname";s:12:"post_content";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:37797;s:6:"length";i:4294967295;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:5;O:8:"stdClass":13:{s:4:"name";s:10:"post_title";s:7:"orgname";s:10:"post_title";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:32;s:6:"length";i:262140;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:6;O:8:"stdClass":13:{s:4:"name";s:12:"post_excerpt";s:7:"orgname";s:12:"post_excerpt";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:262140;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:7;O:8:"stdClass":13:{s:4:"name";s:11:"post_status";s:7:"orgname";s:11:"post_status";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:7;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:16385;s:4:"type";i:253;s:8:"decimals";i:0;}i:8;O:8:"stdClass":13:{s:4:"name";s:14:"comment_status";s:7:"orgname";s:14:"comment_status";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:4;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:9;O:8:"stdClass":13:{s:4:"name";s:11:"ping_status";s:7:"orgname";s:11:"ping_status";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:4;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:10;O:8:"stdClass":13:{s:4:"name";s:13:"post_password";s:7:"orgname";s:13:"post_password";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:11;O:8:"stdClass":13:{s:4:"name";s:9:"post_name";s:7:"orgname";s:9:"post_name";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:32;s:6:"length";i:800;s:9:"charsetnr";i:45;s:5:"flags";i:16393;s:4:"type";i:253;s:8:"decimals";i:0;}i:12;O:8:"stdClass":13:{s:4:"name";s:7:"to_ping";s:7:"orgname";s:7:"to_ping";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:262140;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:13;O:8:"stdClass":13:{s:4:"name";s:6:"pinged";s:7:"orgname";s:6:"pinged";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:84;s:6:"length";i:262140;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:14;O:8:"stdClass":13:{s:4:"name";s:13:"post_modified";s:7:"orgname";s:13:"post_modified";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:129;s:4:"type";i:12;s:8:"decimals";i:0;}i:15;O:8:"stdClass":13:{s:4:"name";s:17:"post_modified_gmt";s:7:"orgname";s:17:"post_modified_gmt";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:129;s:4:"type";i:12;s:8:"decimals";i:0;}i:16;O:8:"stdClass":13:{s:4:"name";s:21:"post_content_filtered";s:7:"orgname";s:21:"post_content_filtered";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:38096;s:6:"length";i:4294967295;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:17;O:8:"stdClass":13:{s:4:"name";s:11:"post_parent";s:7:"orgname";s:11:"post_parent";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:49193;s:4:"type";i:8;s:8:"decimals";i:0;}i:18;O:8:"stdClass":13:{s:4:"name";s:4:"guid";s:7:"orgname";s:4:"guid";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:25;s:6:"length";i:1020;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:19;O:8:"stdClass":13:{s:4:"name";s:10:"menu_order";s:7:"orgname";s:10:"menu_order";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:11;s:9:"charsetnr";i:63;s:5:"flags";i:32769;s:4:"type";i:3;s:8:"decimals";i:0;}i:20;O:8:"stdClass":13:{s:4:"name";s:9:"post_type";s:7:"orgname";s:9:"post_type";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:4;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:16393;s:4:"type";i:253;s:8:"decimals";i:0;}i:21;O:8:"stdClass":13:{s:4:"name";s:14:"post_mime_type";s:7:"orgname";s:14:"post_mime_type";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:400;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:22;O:8:"stdClass":13:{s:4:"name";s:13:"comment_count";s:7:"orgname";s:13:"comment_count";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:32769;s:4:"type";i:8;s:8:"decimals";i:0;}}s:8:"num_rows";i:1;s:10:"return_val";i:1;}