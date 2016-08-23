^�W<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:50:"SELECT * FROM reactvn_posts WHERE ID = 124 LIMIT 1";s:11:"last_result";a:1:{i:0;O:8:"stdClass":23:{s:2:"ID";s:3:"124";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-11-12 02:09:18";s:13:"post_date_gmt";s:19:"2015-11-12 02:09:18";s:12:"post_content";s:13837:"##1. Introduction A short while ago, our team had to choose a technology for Wix's flagship product, the html wysiwyg website editor. It is a large single-page application, with complex flows, communication with other iframes and servers, and a lot of user experiences. This product is developed by more than 40 developers. The choices were ReactJS or AngularJS. We had experience with both, and were struggling between the ease-of-use of Angular declarative programming and the simplicity of React. We started a proof of concept that ultimately drove us to form a tie breaker. This article is about the comparison… and the tie breaker.<!--more-->

<h3 id="1-1-packaging">1.1 Packaging</h3>

Packaging is the ability to run and deploy your code in the way you want it. In order to achieve fast loading time, we want to load the bare minimum at first and continue on demand. This also gives us the ability to continue to develop new features without slowly degrading the load time.

Angular provides a very limited ability to do so (mostly html templates) and when we tweaked it to do what we wanted, it looked like assembly code.

In short, we found Angular to be too opinionated and too rigid. React doesn't care, it's plain JS and allows us to use requirejs to lazy load pieces of code. It also allows for working with other solutions like webpack.

<em>Winner: React</em>

<h3 id="1-2-learning-curve">1.2 Learning curve</h3>

Everybody knows about the bumpy road to mastering Angular: it's quick to get started, then it improves and deteriorates as you go along, a lot like marriage…

We found that you can learn React to a high standard in just a week. It takes some time to get used to the one-way flow, especially for web developers, but once you do, it's very lucid.

The lifecycle of Angular is complex, and to master it, you really need to read the code. Compile and link are not intuitive, and specific cases can be confusing (recursion in compile, collisions between directives). React, on the other hand, has only a few lifecycle methods, and they are self explanatory. The best feature we found with React is that never, even once, did we have to read its code.

<em>Winner: React</em>

<h3 id="1-3-abstraction">1.3 Abstraction</h3>

Good abstraction is priceless. Abstraction provides fast development and hides details that are not necessary for the developer using a library.

We found Angular's abstraction to be leaky. This means that in order to actually work with it, you need to understand the underlying model. This is why so many people need to debug the internals of Angular when debugging their code.

There are concepts that are exposed in order to treat the leaks, for example, directive priority. But how do I control priorities when using directives from different 3rd party vendors? Why should I care? Why is it that different directives sometimes don't work nicely together on the same html node? Why do I need to know about digest cycles?

React's abstraction results in it being less flexible in parts, like not being able to add attributes to html tags, or a single tag for a component. This is solved by React's implementation of mixins (that allow overlap only on lifecycle methods, and have a predictable execution order) and the fact that it doesn't leak (like I mentioned above, we never had to open it's code).

<em>Winner: React</em>

<h3 id="1-4-model-complexity">1.4 Model complexity</h3>

By model complexity, I'm referring to how you structure the data model that is later represented by the view.

Angular's performance is sensitive when dealing with scope because of copy-n-compare. This means that you cannot use large models. This has pros and cons. Pros, as it makes the code simpler and more testable; but cons, as it forces you to break down stuff that you'd normally use, and rebuild it back up (for server request for example).

React gives you the freedom to choose, without the performance penalty. The outcome really depends on whether you're a good coder or a bad coder.

<em>Winner: tie</em>

<h3 id="1-5-debugging">1.5 Debugging</h3>

When something doesn't work, we all start the tedious task of debugging. I'll separate this into two main scenarios - figuring why your logic is not working, and understanding the outputted HTML along with what generated it.

Angular is an event driven system, which is always easier to write and harder to debug as the stack-traces end up longer and different than what you'd expect. However Angular does a good job of providing constructs that are logical, like services. If used correctly, they make the code easier to test and debug, but any good programmer will try to separate code and logic with or without them.

When something doesn't work in Angular directives, one option is to re-write the code in a different way because there's so much magic going on. Another option is to debug Angular's code - not a trivial task.

React has two main scenarios - updating the model/doing other actions as a result of user events; and the one-way rendering flow which is always the same. This means that there are fewer places to look for your bugs and the stack traces have clear distinction between React's code, and your own. They normally don't mix. React also has less magic, and it's all concentrated in one place - the vDom comparison. It is a closed black box but in our experience, it worked as expected.

When talking about understanding the HTML, and back-tracing to the code, the story is the opposite. In React, it is hard to compare your code to the resulting HTML. Even when using jsx, you can hardly compare them as "if" and "repeat" control flows break the HTML fragments into tiny chunks of templates. In Angular, however, the result closely resembles the HTML template.

<em>Winner JS: React</em> <em>Winner HTML: Angular</em>

<h3 id="1-6-binding">1.6 Binding</h3>

In Angular, you can only bind to scope. This means that in complex scenarios like binding to a server/async service, or when binding to a large model, you will need to have an intermediate model in the way, plus you will need to deal with digest cycles and with explicit watches.

In contrast, React only provides syntactic sugar for binding that is called valueLink (a single attribute for both "value" and "onChange" properties). This concept is so simple that it doesn't sound like it will do the job, yet it does. And if you understand it well, you will be able to create your own linkState or similar functions that will answer all of your binding needs.

<em>Winner: React</em>

<h3 id="1-7-performance-tweaking">1.7 Performance tweaking</h3>

React makes it simple to control the performance. If you implement shouldComponentUpdate, you can choose which comparison you prefer - model or presentation. If your model is small, just let React do the comparison on the vDom. If your model is complex, or you create a lot of DOM, you can optimize it by a custom implementation of this function, where you can devise your own mechanisms for dirty-checking that can be very efficient.

In Angular, however, you need to start counting scopes (there are numerous utilities that do it for you), and in some cases, you just have to implement the internals of a component in pure js and wrap it in Angular for convenience. The evidence of this is the amount of articles you can find about Angular performance tweaking…

<em>Winner: React</em>

<h3 id="1-8-code-re-use">1.8 Code re-use</h3>

Angular gets points for having sooo much stuff ready for it out there, however it's not trivial to use Angular libraries from more than one provider due to namespace and priority collisions. React lets you manage it the way you like. Saying that, Angular is still stronger in the market and has more ready-made stuff to offer.

<em>Winner: tie</em>

<h3 id="1-9-templating">1.9 Templating</h3>

I saved the most important one for last… Even though most of the Angular or React articles discuss directives or data-flows, the reality is that when writing an online service, 80% of what you are doing is writing UI. I call them panels, the building blocks of application logic. They contain a lot of information and custom flows, and are built using ready-made building blocks, but they are not generally re-usable, and they are the bulk of what our users see and interact with. React does poor job with those. When writing a repeater it will look backwards:

<pre class="line-numbers"><code class="language-php">var createItem = function(itemText) {
  return <li>{itemText}</li>;
};
return <ul>{this.props.items.map(createItem)}</ul></code></pre>

Whereas in Angular it will look like:

<pre class="line-numbers"><code class="language-php"><ul>
<li ng-repeat="item in items">{{item}}</li>
</ul></code></pre>

How much better is that? (Answer: a lot). So Angular is a clear winner in this section.

<em>Winner: Angular</em>

##2. The tie-breaker - React-templates So, how do we resolve this debate? How can we get all of the benefits of React stated above, but not miss out on this great, super-important feature of Angular? We decided to give it a go and solve it for React.

The design consideration for the tool were:

<ul>
    <li>Any valid HTML file is a valid reactTemplate, almost. We keep event notation camelCase like React, and also the notation for no-value attributes like disabled (true/false values will determine whether they appear in the actual DOM)</li>
    <li>Switch from html context to js context with curly braces, and inside directives</li>
    <li>Conversion should not be in runtime, so it doesn't affect performance. No additional objects for scope or runtime code, use only js native constructs (closures, methods, native expressions) to achieve this functionality</li>
    <li>Make the generated code as human parse-able as possible</li>
    <li>Directives are inspired by Angularjs and should be obvious to people with prior Angular experience</li>
    <li>Keep it small and simple. Directives need justification to be added (the entire converter is 350 lines of code)</li>
</ul>

And the result is the <a href="http://wix.github.io/react-templates/">amazing React templates</a>. We've got all of Angular templating values with the simplicity of React! We get complete separation between presentation and logic, declarative writing of panels, and to make it even more useful, we've added module loader support (either AMD or CommonJS) to allow reuse of other components within the templates themselves. Let's see a few examples to show how simple this is.

###2.1 Collection iteration

[html]{item} at index {itemIndex}[/html]

Note: <code>itemIndex</code> is derived from the name item, to allow using indices of nested repeaters

###2.2 If statement

<pre class="line-numbers"><code class='language-php'><label rt-if="this.hasError()">
  {this.getError()}
</label></code></pre>

Note: this is a true <code>if</code>, meaning that will not render the node at all if the expression is false.

###2.3 Syntactic sugars - rt-class, rt-scope, expressions in attributes

<pre class="line-numbers"><code class="language-php"><div rt-scope="this.getUserDetails() as theUser" title="{theUser.loginName}">
Real Name: {theUser.firstName} {theUser.lastName}<br/>
Login: {theUser.loginName}
Last paid at: <span rt-class="{status:true, overdue:this.isUserOverdue(theUser)}">{theUser.lastPaid}</span>
</div></code></pre>

Note: We've been really careful not to create too many of these, as we wanted to keep it simple. Only the stuff that adds a lot of value has been added.

###2.4 Transclusion
[html]&lt;div&gt;{this.props.children}&lt;/div&gt;[/html]
Note: Really simple…

<h3 id="2-5-handling-events">2.5 Handling events</h3>

<pre class='line-numbers'><code class='language-php'><div>
  <div rt-repeat="task in tasks" style="font-weight:{task.selected ? ‘bold’ : ‘normal’ }" onClick="() => this.toggleTask(task)">{task.title}</div>
  <button onClick="{this.save}">Save</button>
</div>
</code></pre>

Note: This is one of the nicest things in React templates. We generate methods for you, so that you don't need to store anything on DOM or work with indices. You can just write your logic code and work with your objects. There are 2 options supported: lambda expression, or if the {} notation is used, it is an expression that should return a pointer to a function. And lastly, every custom attribute for custom control that starts with on and a camelCase event name can work with both notations.

###2.5 Loading resources for the templates

<pre class="line-numbers"><code class='language-php' ><rt-require dependency="./utils/translate" as="tr"/>
<rt-require dependency="./comps/colorPicker" as="colorPicker"/>
<form>
  {tr(‘Enter_Your_Name’)}: <input type="text" valueLink="{this.linkState(‘name’)}"/>
  {tr(‘Choose_Favorite_Color’)}: <colorPicker valueLink="{this.linkState(‘favColor’)}"/>
</form>
</code></pre>

###2.6 Other goodies The style attribute (just) works as in html. This means that there is no need to translate the keys to camelCase (as required by React), and you can, like everywhere else, use the {} notation to insert an expression. "class" attribute also works (without the need to call it "className").

##3. Summary Both frameworks are awesome, and it's hard to decide which to use. Angular is very opinionated, which can be great if it fits your development scenario. React gives you freedom and simplicity, but lacks the declarative power of Angular. However, when using react-templates, you'll get to use a lot of the stuff we love about Angular, but without the messy stuff. For people that are strong in vanillajs, have complex projects, care about file packaging or want to use a framework in conjunction with other libraries, we believe that React + react-templates is a winning solution.";s:10:"post_title";s:44:"Compare: Angular vs. React  - what is better";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:39:"compare-angular-vs-react-what-is-better";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-11-12 02:09:18";s:17:"post_modified_gmt";s:19:"2015-11-12 02:09:18";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:27:"http://scriptsvn.com/?p=124";s:10:"menu_order";s:2:"14";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}}s:8:"col_info";a:23:{i:0;O:8:"stdClass":13:{s:4:"name";s:2:"ID";s:7:"orgname";s:2:"ID";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:3;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:49699;s:4:"type";i:8;s:8:"decimals";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:11:"post_author";s:7:"orgname";s:11:"post_author";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:49193;s:4:"type";i:8;s:8:"decimals";i:0;}i:2;O:8:"stdClass":13:{s:4:"name";s:9:"post_date";s:7:"orgname";s:9:"post_date";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:16513;s:4:"type";i:12;s:8:"decimals";i:0;}i:3;O:8:"stdClass":13:{s:4:"name";s:13:"post_date_gmt";s:7:"orgname";s:13:"post_date_gmt";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:129;s:4:"type";i:12;s:8:"decimals";i:0;}i:4;O:8:"stdClass":13:{s:4:"name";s:12:"post_content";s:7:"orgname";s:12:"post_content";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:13837;s:6:"length";i:4294967295;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:5;O:8:"stdClass":13:{s:4:"name";s:10:"post_title";s:7:"orgname";s:10:"post_title";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:44;s:6:"length";i:262140;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:6;O:8:"stdClass":13:{s:4:"name";s:12:"post_excerpt";s:7:"orgname";s:12:"post_excerpt";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:262140;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:7;O:8:"stdClass":13:{s:4:"name";s:11:"post_status";s:7:"orgname";s:11:"post_status";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:7;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:16385;s:4:"type";i:253;s:8:"decimals";i:0;}i:8;O:8:"stdClass":13:{s:4:"name";s:14:"comment_status";s:7:"orgname";s:14:"comment_status";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:4;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:9;O:8:"stdClass":13:{s:4:"name";s:11:"ping_status";s:7:"orgname";s:11:"ping_status";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:4;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:10;O:8:"stdClass":13:{s:4:"name";s:13:"post_password";s:7:"orgname";s:13:"post_password";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:11;O:8:"stdClass":13:{s:4:"name";s:9:"post_name";s:7:"orgname";s:9:"post_name";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:39;s:6:"length";i:800;s:9:"charsetnr";i:45;s:5:"flags";i:16393;s:4:"type";i:253;s:8:"decimals";i:0;}i:12;O:8:"stdClass":13:{s:4:"name";s:7:"to_ping";s:7:"orgname";s:7:"to_ping";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:262140;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:13;O:8:"stdClass":13:{s:4:"name";s:6:"pinged";s:7:"orgname";s:6:"pinged";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:262140;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:14;O:8:"stdClass":13:{s:4:"name";s:13:"post_modified";s:7:"orgname";s:13:"post_modified";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:129;s:4:"type";i:12;s:8:"decimals";i:0;}i:15;O:8:"stdClass":13:{s:4:"name";s:17:"post_modified_gmt";s:7:"orgname";s:17:"post_modified_gmt";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:129;s:4:"type";i:12;s:8:"decimals";i:0;}i:16;O:8:"stdClass":13:{s:4:"name";s:21:"post_content_filtered";s:7:"orgname";s:21:"post_content_filtered";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:4294967295;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:17;O:8:"stdClass":13:{s:4:"name";s:11:"post_parent";s:7:"orgname";s:11:"post_parent";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:49193;s:4:"type";i:8;s:8:"decimals";i:0;}i:18;O:8:"stdClass":13:{s:4:"name";s:4:"guid";s:7:"orgname";s:4:"guid";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:27;s:6:"length";i:1020;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:19;O:8:"stdClass":13:{s:4:"name";s:10:"menu_order";s:7:"orgname";s:10:"menu_order";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:2;s:6:"length";i:11;s:9:"charsetnr";i:63;s:5:"flags";i:32769;s:4:"type";i:3;s:8:"decimals";i:0;}i:20;O:8:"stdClass":13:{s:4:"name";s:9:"post_type";s:7:"orgname";s:9:"post_type";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:4;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:16393;s:4:"type";i:253;s:8:"decimals";i:0;}i:21;O:8:"stdClass":13:{s:4:"name";s:14:"post_mime_type";s:7:"orgname";s:14:"post_mime_type";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:400;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:22;O:8:"stdClass":13:{s:4:"name";s:13:"comment_count";s:7:"orgname";s:13:"comment_count";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:32769;s:4:"type";i:8;s:8:"decimals";i:0;}}s:8:"num_rows";i:1;s:10:"return_val";i:1;}