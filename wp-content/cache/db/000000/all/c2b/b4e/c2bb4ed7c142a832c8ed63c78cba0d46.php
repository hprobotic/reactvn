)�W<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:71:"SELECT reactvn_posts.* FROM reactvn_posts WHERE ID IN (355,350,345,327)";s:11:"last_result";a:4:{i:0;O:8:"stdClass":23:{s:2:"ID";s:3:"327";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2016-02-22 14:33:16";s:13:"post_date_gmt";s:19:"2016-02-22 14:33:16";s:12:"post_content";s:8005:"Angular 2 was released a couple of months back and a beta version is just a couple of weeks old. Trust me, I can tell your thoughts about this change. You are probably asking yourself (or actually your computer screen) why on earth would the Angular team make such a huge jump. After all, you are (or at least you think you are) fine with what you already have in Angular 1.

Give your code editor a little break so we can discuss on why this jump is necessary and ways we can jump and not fall.

<h2>Why Turn to Angular 2?</h2>

Angular 1.x is fine and here to stay but Angular 2 is better. Do you think the Angular team are just jobless and work on creating something useless? No of course! So sit tight so we can talk about it.

The fact that Angular 2 exists does not mean Angular 1 will be deprecated or lack support. We know how it goes in IT generally, people still use IE 8, older versions of Android, Web Forms for .Net developers, etc. This is why Angular 1, for the time being is still here to stay.

Having made this point, let us actually take a look at why you should start considering Angular 2.

<h3>Performance</h3>

Performance is always the first point when talking about benefits of Angular 2. The reason being that critics were on the team’s neck concerning the speed and performance of Angular 1 even as mush. This could be found mostly in Angular’s data binding concept.

Angular 2 had better strategies and concepts to improve the performance of web applications made with Angular.

<h3>Better Mobile Support</h3>

Angular 1.x was not built with mobile support in mind, but fortunately frameworks like Ionic found favor in them.

Angular was implemented in frameworks like Ionic in a hard manner which was detrimental to the user’s experience and performance of the application in general.

With all this terrible experience, Angular 2 was designed to be better and ready for any thing coming its way that is mobile oriented.

<h3>Better Learning Path</h3>

It took me three weeks to wrap my head around the concept of Angular 1 but it took my co-developer who never used Angular 1 four days to understand Angular 2.
If you have looked at an Angular 2 app file, you should recognize this:

<pre class="line-numbers language-javascript"><code class='language-javascript'>import {Component} from 'angular2/core';

@Component({
    selector: 'my-app',
    template: '<h1>{{ title }}</h1>'
})

export class AppComponent { 
    title = "My First Angular 2 App"
}</code></pre>

Looking at this piece of code, might get you intimidated at first but there is nothing more to Angular 2 than just that (and a more of it when your app grows). If you understand that basic syntax, you are good to go.

On the other hand, compare it with the way we learned Angular 1.x. The docs were crazy. There were tons of complicated documentations to study. It took me three weeks to wrap my head around the concept of Angular 1 but it took my co-developer who never used Angular 1 four days to understand Angular 2.

<h3>The Future</h3>

Angular 2 uses all the promising features the web as a whole is coming up with. ES2015 also known as ES6 is the major ECMAScript version for Angular implemented with TypeScript.

Web Components are the future of the Web and if you are not planning to accept that yet, then you are driving on the wrong lane.

<h2>Upgrading to Angular 2</h2>

Upgrading to Angular 2 is quite an easy step to take, but one that should be made carefully.

There are two major ways to feel the taste of Angular 2 in your project. Which you use depends on whatever requirements your project has. The angular team have provided two paths to this:

<h3>ngForward</h3>

ng-forward-logo

ngForward is not a real upgrade framework for Angular 2 but instead we can use it to create Angular 1 apps that look like Angular 2.

If you still feel uncomfortable upgrading your existing application to Angular 2, you can fall to ngForward to feel the taste and sweetness of the good tidings Angular 2 brings but still remain in your comfort zone.

You can either re-write your angular app gradually to look as if it was written in Angular 2 or add features in an Angular 2 manner leaving the existing project untouched. Another benefit that comes with this is that it prepares you and your team for the future even when you choose to hold onto the past for a little bit longer.

I will guide you through a basic setup to use ngForward but in order to be on track, have a look at the Quick Start for Angular 2.

In your existing Angular 1.x (should be 1.3+) app run:

<pre class="line-numbers language-markup"><code>npm i --save ng-forward@latest reflect-metadata </code></pre>

This installs the latest version of ngForward and also the reflect-metadatamodule. Now prepare your index.html to look like what we have below:

<pre class="line-numbers language-php"><code class='language-php'><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />

    <title>Ng-Forward Sample</title>

    <link rel="stylesheet" href="styles.css" />

    <script data-require="angular.js@1.4.7" data-semver="1.4.7" src="https://code.angularjs.org/1.4.7/angular.js"></script>
    <script data-require="ui-router@0.2.15" data-semver="0.2.15" src="https://rawgit.com/angular-ui/ui-router/0.2.15/release/angular-ui-router.js"></script>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/systemjs/0.18.4/system.js"></script>
    <script src="config.js"></script>

    <script>
      //bootstrap the Angular2 application
      System.import('app').catch(console.log.bind(console));
    </script>
  </head>

  <body>
    <app>Loading...</app>
  </body>

</html></code></pre>

Notice the config.js we are referencing. We can create it now:

<pre class="line-numbers language-javascript"><code class='language-javascript'>System.config({
  defaultJSExtensions: true,
  transpiler: 'typescript',
  typescriptOptions: {
    emitDecoratorMetadata: true
  },
  map: {
    'ng-forward': 'https://gist.githubusercontent.com/timkindberg/d93ab6e17fc07b4db7e9/raw/b311a63e0e96078774e69f26d8e8805b7c8b0dd2/ng-forward.0.0.1-alpha.10.js',
    'typescript': 'https://raw.githubusercontent.com/Microsoft/TypeScript/master/lib/typescript.js',
  },
  paths: {
    app: 'src'
  },
  packages: {
    app: {
      main: 'app.ts',
      defaultExtension: 'ts',
    }
  }
});</code></pre>

If you took time to review the Quick Start as I suggested, you won’t be lost with the configuration. SystemJS is used to load the Angular application after it has been bootstrapped as we will soon see. Finally in our app.ts, we can code like it’s Angular 2.

<pre class="line-numbers language-javascript"><code class='language-javascript'>import {Component,  bootstrap} from 'ng-forward';

@Component({
    selector: 'my-app',
    template: '<h1>{{title}}</h1>'
})
class AppComponent { 
    title = "My First Angular 2 App"
}
bootstrap(AppComponent);</code></pre>

You can view a detailed demo here

<h3>ngUpgrade</h3>

Writing an Angular 1.x app that looks like Angular 2 is not good enough. We need the real stuff. The challenge then becomes that with a large existing Angular 1.x project, it becomes really difficult to re-write all our app to Angular 2, and even using ngForward would not be ideal. This is where ngUpgrade comes to our aid. ngUpgrade is the real stuff.

Unlike ngForward, ngUpgrade was covered clearly in the Angular 2 docs. If you fall in the category of developers that will take this path, then spare few minutes and digest this.

We’ll also be writing more articles on upgrading to Angular 2 and we’ll focus more on ngUpgrade in a future article.

<h2>Final Remarks</h2>

One thing I have observed as an experienced Angular developer is that the Angular team has a good habit of providing tons of option to solve a single problem.

Just as we saw in this guide, you can just use Angular 2 from scratch, write Angular 1 in Angular 2 form or gradually leverage ngUpgrade to upgrade your existing.";s:10:"post_title";s:49:"Seamless Ways to Upgrade Angular 1.x to Angular 2";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:49:"seamless-ways-to-upgrade-angular-1-x-to-angular-2";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2016-02-22 14:33:16";s:17:"post_modified_gmt";s:19:"2016-02-22 14:33:16";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:27:"http://scriptsvn.com/?p=327";s:10:"menu_order";s:1:"9";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}i:1;O:8:"stdClass":23:{s:2:"ID";s:3:"345";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2016-02-22 15:58:48";s:13:"post_date_gmt";s:19:"2016-02-22 15:58:48";s:12:"post_content";s:19090:"<h2>Introduction</h2>

In case you haven't read our previous benchmarks article, here is what we did: we took a sample implementation of DBMonster along with the excellent benchmark scripts and tools from this post, reimplemented it for use with different DOM libraries, ran the scripts and collected the results. For this post we have also extended browser-perf to generate memory usage statistics.

We will submit our additions to browser-perf for review, which is why we haven't linked to the original browser-perf repo above.
What follows is an overview of the contenders. Or you can jump straight to the results.

<h3>Angular.js 1.x</h3>

The venerable Angular 1.x library is part of an opinionated but powerful framework that saw its initial release in the year 2009. Since then it has gathered a tremendous following and inspired many other libraries. Often criticized for being hard to integrate into existing projects, and questioned for its performance in certain use cases, it is still used in many high-ranking websites. Angular extends standard HTML with custom tags and a template syntax (which form the view). Controllers are defined following a series of strict API requirements that include the use of dependency injection. Data binding and model changes are handled through a digest cycle. The digest cycle is the method Angular uses to detect changes in the model that trigger changes in the view. This method has particular performance characteristics as can be seen in the results below.

<h3>An Angular 1.x view template:</h3>

<pre class="line-numbers language-php"><code class='language-php'><td ng-repeat="query in database.topFiveQueries"
    ng-class="getClassName(query)">

    <div class="popover left">
        <div class="popover-content">

        </div>
        <div class="arrow"></div>
    </div>
</td></code></pre>

And part of the associated JavaScript code, including dependency injection semantics:

<pre class="line-numbers language-javascript"><code class='language-javascript'>dbmonControllers.controller('MainController', ['$scope', '$timeout',
    function($scope, $timeout) {
        $scope.loadCount = 0;
        $scope.databases = {};

        $scope.getClassName = function(query) {
            var className = "elapsed short";
            if (query.elapsed >= 10.0) {
                className = "elapsed warn_long";
            } else if (query.elapsed >= 1.0) {
                className = "elapsed warn";
            }
            return "Query " + className;
        };
        //(...)
    }
);</code></pre>

<h3>Angular.js 2</h3>

The still-in-flux Angular 2 library has recently been declared in beta state. Still under heavy scrutiny by many developers that do not consider a breaking change to be the right way to fix all of Angular 1.x problems, Angular 2 carries on with its opinionated approach. TypeScript is now favored (but not required) over JavaScript and a new template syntax is now required. The digest cycle was replaced by the use of a change detection algorithm that walks the DOM tree. Other optimizations allow Angular 2 to detect precisely when the model has changed (in contrast to the need to explicitly tell Angular 1 so in certain cases).

<h3>An Angular 2 view template:</h3>

<pre class="line-numbers language-php"><code class='language-php'><td *ngFor="#query of database.topFiveQueries"
    [ngClass]="getClassName(query)">

    <div class="popover left">
        <div class="popover-content">

        </div>
        <div class="arrow"></div>
    </div>
</td></code></pre>

And its associated JavaScript code:

<pre class="line-numbers language-javascript"><code class='language-javascript'>app.AppComponent = ng.core
    .Component({
      selector: 'my-app',
      templateUrl: './app/component.html'
      //directives: [angular.NgFor]
    })
    .Class({
        //(...)
        getClassName: function(query) {
            var className = "elapsed short";
            if (query.elapsed >= 10.0) {
                className = "elapsed warn_long";
            } else if (query.elapsed >= 1.0) {
                className = "elapsed warn";
            }
            return "Query " + className;
        }
    ]);</code></pre>

Our Angular 2 DBMonster code was developed using JavaScript rather than the recommended TypeScript to reuse as much code as possible from other versions of the benchmark. Angular 2 code is more idiomatic using TypeScript and was developed with its features in mind.

<h2><h3>Virtual DOM</h3></h2>

Virtual DOM is an independent implementation of React's tree-diffing algorithm. It provides an API that allows users to describe a DOM tree directly in JavaScript. JSX is not used.

<pre class="line-numbers language-javascript"><code class='language-javascript'>function renderQuery(query) {
    var className = "elapsed short";
    if (query.elapsed >= 10.0) {
        className = "elapsed warn_long";
    } else if (query.elapsed >= 1.0) {
        className = "elapsed warn";
    }

    return h('td', { className: 'Query ' + className }, [
        query.elapsed ? formatElapsed(query.elapsed) : '',
        h('div', { className: 'popover left' }, [
            h('div', { className: 'popover-content' }, query.query),
            h('div', { className: 'arrow' })
        ])
    ]);
}</code></pre>

<h3>Mithril.js</h3>

A React-like library aimed at being simple, small and fast. It provides a convenient API to describe DOM-trees in JavaScript, and a preprocessor to turn DOM-tree API-calls into simple JSON objects for additional speed. The API for DOM-trees is similar to that of Virtual DOM, and the required controller/view objects are simple enough to be integrated easily into existing bodies of code. Much like Angular 1, it requires changes to the DOM tree made outside library boundaries to be notified for redrawing. Data-binding is performed through a properties system.

<pre class="line-numbers language-javascript"><code class='language-javascript'>function renderQuery(query) {
    var className = "elapsed short";
    if (query.elapsed >= 10.0) {
        className = "elapsed warn_long";
    } else if (query.elapsed >= 1.0) {
        className = "elapsed warn";
    }

    return m('td', { className: 'Query ' + className }, [
        query.elapsed ? formatElapsed(query.elapsed) : '',
        m('div', { className: 'popover left' }, [
            m('div', { className: 'popover-content' }, query.query),
            m('div', { className: 'arrow' })
        ])
    ]);
}</code></pre>

<h3>cito.js</h3>

A minimalist Virtual DOM-like library. A virtual DOM is constructed from plain JSON-like objects. A simple call tells the library to compare the existing tree to a new one and perform the necessary updates.

<pre class="line-numbers language-javascript"><code class='language-javascript'>function renderQuery(query) {
    var className = "elapsed short";
    if (query.elapsed >= 10.0) {
        className = "elapsed warn_long";
    } else if (query.elapsed >= 1.0) {
        className = "elapsed warn";
    }

    return {
        tag: 'td',
        attrs: { 'class': 'Query ' + className },
        children: [
            query.elapsed ? formatElapsed(query.elapsed) : '',
            {
                tag: 'div',
                attrs: { 'class': 'popover left' },
                children: [
                    {
                        tag: 'div',
                        attrs: { 'class': 'popover-content' },
                        children: query.query.toString()
                    }, {
                        tag: 'div',
                        attrs: { 'class': 'arrow' }
                    }
                ]
            }
        ]
    };
}</code></pre>

<h3>Ember 1</h3>

Another powerful and opinionated framework. Ember makes use of their own template language which allows for easy differentiation between static and dynamic parts of the DOM. Their diffing algorithm is optimized to take this into account. Data binding is handled through a properties system.

An Ember view using its template syntax:

<pre class="line-numbers language-javascript"><code class='language-javascript'>
  <td class="Query ">

    <div class="popover left">
      <div class="popover-content"></div>
      <div class="arrow"></div>
    </div>
  </td></code></pre>

And its associated JavaScript code:

<pre class="line-numbers language-javascript"><code class='language-javascript'>export default Ember.Component.extend({
  tagName: 'tr',

  queries: function() {
    var samples = this.get('attrs.db.value.samples');
    return samples[samples.length - 1].queries;
  }.property('attrs.db'),

  topFiveQueries: function() {
    var queries = this.get('queries');
    var topFiveQueries = queries.slice(0, 5);

    while (topFiveQueries.length < 5) {
      topFiveQueries.push({ query: "" });
    }

    return topFiveQueries.map(function(query, index) {
      return {
        key: index+'',
        query: query.query,
        elapsed: query.elapsed ? formatElapsed(query.elapsed) : '',
        className: elapsedClass(query.elapsed)
      };
    });
  }.property('queries'),

  //(...)
});</code></pre>

<h3>Ember 2</h3>

This newer version of Ember removes many deprecated parts of the library and serves as a cleanup of the API. Most of the other benefits of Ember 2 can also be found in Ember 1.13+ releases.

The Ember 2 code in this article is 100% compatible with the Ember 1.x version, so no example is provided here.

<h3>React.js</h3>

Facebook's popular library is gaining ground day-by-day. Its simple integration model, flexibility and speed make it a no-brainer for many projects. The crux of React is its smart diffing algorithm: a virtual tree is constructed by making JavaScript calls. When a new DOM tree is constructed, React can find the optimal number of operations to transform the old tree into the new one. React is usually paired with the JSX preprocessor, which allows an extended form of HTML to be embedded in JavaScript to describe components in a convenient way.

<pre class="line-numbers language-javascript"><code class='language-javascript'>var Query = React.createClass({
  render: function() {
    var className = "elapsed short";
    if (this.props.elapsed >= 10.0) {
      className = "elapsed warn_long";
    }
    else if (this.props.elapsed >= 1.0) {
      className = "elapsed warn";
    }

    return (
      <td className={"Query " + className}>
        {this.props.elapsed ? formatElapsed(this.props.elapsed) : ''}
        <div className="popover left">
          <div className="popover-content">{this.props.query}</div>
          <div className="arrow"/>
        </div>
      </td>
    );
  }
})</code></pre>

<h3>Incremental DOM</h3>

A Google project, Incremental DOM aims to develop a memory-efficient library that can perform in-place updates of the DOM tree. It is intended to be used as a compilation target for different template languages. In practice, its API is similar to that of Virtual DOM, Mithril or cito.js. The main benefit of a memory efficient approach is reduced waits during garbage collection cycles. This can result in improved performance and fewer dropped frames during rendering.

<pre class="line-numbers language-javascript"><code class='language-javascript'>function renderQuery(query) {
    var className = "elapsed short";
    if (query.elapsed >= 10.0) {
        className = "elapsed warn_long";
    } else if (query.elapsed >= 1.0) {
        className = "elapsed warn";
    }

    elementOpen('td', null, null, 'class', "Query " + className);
        text(query.elapsed ? formatElapsed(query.elapsed) : '');
        elementOpen('div', null, ['class', 'popover left']);
            elementOpen('div', null, ['class', 'popover-content']);
                text(query.query);
            elementClose('div');
            elementVoid('div', null, ['class', 'arrow']);
        elementClose('div');
    elementClose('td');
}</code></pre>

<h2>The Results</h2>

Here are the summarized results of our tests:

Major GC collection times Angular 1.x results make this graph hard to read. Angular 1.x performance problems are known and it shows in this graph. Major GC collections take several times longer compared to the alternatives. As expected, lightweight libraries such as mithril and cito.js shine here, but the absolute winner is Virtual DOM. Incremental DOM is also among the winners. The difference between Angular 1 and 2 is outstanding. It appears a big break was necessary to fix many of the shortcomings Angular 1 had.

Minor GC collection times Incremental DOM shines here. Being developed for lower memory use pays off. React is a surprise as well, sporting excellent results in spite of its two-copies virtual DOM algorithm. The one that draws the attention is Virtual DOM, with its independent React-like virtual dom implementation: it shows longer pauses that React. This is probably the result of the optimizations Facebook developers have done over time to React. Angular 1.x is still the slowest and the difference with Angular 2 is still surprising. Ember 1 and 2 are the next in the pack in front of Angular 1. The difference between Ember 1 and 2 is significant. It appears many optimizations have been carried out under the hood.

Layout times This graph shows the time spent by the browser doing re-layout operations (i.e. creating an internal representation of the DOM tree after changes). I find it surprising that cito.js is the slowest in this case. Subjective performance would tell otherwise, as both cito.js and Incremental DOM feel quite snappy when interacting directly with the browser. Ember 1 and 2 are the next in the pack, and in this case the subjective feeling matches with the result. React is black-magic in this case, being the fastest. Incremental DOM sits somewhere in the middle along with the rest.

Paint times This graph is almost a copy of the previous one. It shows the amount of time spent rasterizing the elements in the internal DOM tree of the browser. There is not much to add here other than restate that the subjective feeling for Incremental DOM and cito.js does not match what is shown in the graph (really, try it!).

FPS Deviation among most libraries is small in this graph, so one would expect hands-on usage to be pretty much the same for all of them except one (Angular 1). This is not the case. Even though Angular 1.x does feel sluggish compared to the pack, the difference between cito.js and Incremental DOM compared to the others is much bigger than it would appear. There must be something else going on behind the scenes (or this metric is either not measured correctly or useless).

Dropped frame counts This chart shows the number of frames that take longer than 16.6ms to be drawn. They account for stuttering and other non-smooth behavior so it is an important metric for the subjective feeling of an application. Ember 1 and 2 are outshined by almost all of the other libraries. Incremental DOM, on the other hand, shines again, followed closely by Mithril and React. Again the results for cito.js are odd. We will review our testing environment to make sure background processes are not affecting these results.

Total JavaScript execution times This graph shows the total amount of time spent by the browser executing JavaScript code. Ember 1 and 2 are the slowest here, followed closely by Angular 1.x. Again the difference between Angular 1 and 2 is abysmal. In my limited experience with Angular 2, I would say it is a step in the right direction. Incremental DOM and React shine here, followed closely by Mithril and Virtual DOM. If it serves as any indication, when it comes to CPU metrics, React appears to be the most balanced, scoring wins and near wins in several benchmarks.

Max heap size Average heap use These two graphs are deeply related so there is only one paragraph for both of them. Both show the amount of memory used by the browser when running the benchmark. The first one shows the maximum size of the heap, including unused free space; while the second shows an average of the amount of memory used only by active objects. They look mostly the same. In general, Incremental DOM used the least amount of memory, followed closely by React (a real surprise!). React optimizations have paid off and it still looks as all-around balanced library. Mithril, cito.js and Virtual DOM all do very well in these tests. Again, of note are the improvements when going from Angular 1 to Angular 2. Angular 2 has improved every single metric when compared to Angular 1, and in a significant way. Angular 1 almost doubles the memory use of its follower.

Check out the full code for all tests.

<h3>Aside: React at Auth0</h3>

At Auth0 we care about maintainability and performance. We routinely look at competing solutions to find out the right tool for the job. For our Passwordless Lock library, we found that React has great performance characteristics, allows for an easy integration path, and results in clean, readable code. At the same time, it sports an active community that allows our developers to quickly and easily find how to get the job done. If you are interested in seeing how we use React, check out the source!

<h3>Conclusion</h3>

We are consistently surprised by the results of the Incremental DOM library. Not only in numbers, but also in the way it feels faster than the alternatives. Google has done a tremendous job optimizing its internals to produce a faster and leaner library. The only other library the has achieved this subjective feeling of speed is cito.js. In the case of cito.js we are concerned by its apparent lack of development activity at GitHub. When it comes to bigger frameworks, we cannot recommend React enough. It sports the right balance of performance, memory use, support and community mindshare. Mithril.js surprised us with its ease of use and great performance. We consider it to be a rightful contender to React, with an all-around great balance between speed, memory usage and ease of use. Between the bigger frameworks, both Angular and Ember are good choices. We consider them great for many use cases: in particular, for developers that adhere to their specific ideologies (if you like TypeScript, you will love Angular 2 as a library that is developed for it from the ground-up). Lastly, Angular 1.x performance issues are by know known by all developers. If you want to use it, take this into consideration. In particular, consider that Angular 2 is significantly better than Angular 1 in every metric (to be fair, Angular 1 and 2 are different enough to be considered totally different libraries, only inspired by similar concepts).

Some oddities in the results (for instance cito.js appearing slower in dropped frame counts and FPS counts when subjective tests tell otherwise) make us think something else is going on behind the scenes, so take these results as what they are: a small and probably biased sample. Our methodology and testing tools probably need an improvement.

Let us know in the comments what you think! Cheers!";s:10:"post_title";s:82:"More Benchmarks: Virtual DOM vs Angular 1 & 2 vs Mithril.js vs cito.js vs The Rest";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:79:"more-benchmarks-virtual-dom-vs-angular-1-2-vs-mithril-js-vs-cito-js-vs-the-rest";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2016-02-22 15:58:48";s:17:"post_modified_gmt";s:19:"2016-02-22 15:58:48";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:27:"http://scriptsvn.com/?p=345";s:10:"menu_order";s:1:"8";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}i:2;O:8:"stdClass":23:{s:2:"ID";s:3:"350";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2016-02-22 16:14:18";s:13:"post_date_gmt";s:19:"2016-02-22 16:14:18";s:12:"post_content";s:7160:"A ‘Bounce Rate‘ is simply the percentage of users who visit your site and then navigate away after viewing just a single page.

You can make use of Google Analytics to determine the bounce rate of your site and therefore the percentage of users that are actually clicking away from your site after viewing only one page.

Bounce rate is an important consideration, not only in terms of user engagement and experience, but also SEO. If you’re interested in the bounce rate from an SEO perspective, then it’s worth also having a read of The Top WordPress SEO Plugins Reviewed.

Bounce rate is a serious issue for many sites, but there are effective methods which can be employed to reduce it. Below, I’ll show you how to reduce bounce rate on your WordPress site with methods that really work.

<h2>Reducing Bounce Rate</h2>

<a href="https://scriptsvn.com/wp-content/uploads/2016/02/1455900640Bounce-Rate-1024x327.png" rel="attachment wp-att-351"><img src="http://scriptsvn.com/wp-content/uploads/2016/02/1455900640Bounce-Rate-1024x327.png" alt="1455900640Bounce-Rate-1024x327"  class="alignnone size-medium wp-image-351" /></a>
Bounce Rate

<h3>1. Increase Site Speed</h3>

Internet users are becoming less tolerant of slow loading sites all of the time. A report by Sean Work shows that 47% of consumers expect a web page to load in 2 seconds or less, 40% of people abandon a website that takes more than 3 seconds to load, a one second delay in page response can result in a 7% reduction in conversions, and that if an e-commerce site is making $100,000 per day, a one second page delay could potentially cost it $2.5 million in lost sales every year.

If you are the only provider of a specific service or type of content, and you don’t particularly care about the user-experience you’re providing, then you might consider ignoring your site loading speed. Otherwise, speed up your site as much as you can and don’t expect users to sit around waiting for your site to complete loading (they actually won’t) if sluggish.

See my article on 12 Ways to Speed up Your WordPress Website for more information.

<h3>2. Provide Quality Content</h3>

Provision of quality content is no doubt the most crucial factor when it comes to the success of a site. Providing poor content will not only increase the bounce rate on your site, but will also make you lose the trust and confidence in your users.

When users visit a site and can’t get what they want, they leave and search for other places to get it, and they tend not to return.

<h3>3. Long Articles Should be Split Into Parts</h3>

People tend to be time-poor and want concise, informative articles without unnecessary padding and irrelevant information. Give them what they want, in a form that can be quickly and easily understood and they will stay around and take more interest in your content.

<h3>4. You Don’t Have to Use Pop Ups</h3>

Pop-ups may increase subscription rates and conversions but they also run a high risk of annoying people. I myself immediately close a pop-up and navigate away from a site if I come across one.

There are plenty of alternative ways of presenting call to actions, perhaps a short announcement or subscription widget. You can also conduct A/B split testing to see what works best for your site.

<h3>5. Improve Site’s Mobile Responsiveness</h3>

With a rapidly growing number of visitors accessing the web via smartphones and tablets, you should really prepare your WordPress site to work just perfectly on small screen sizes.

This shouldn’t be a problem, as you can easily handle this by choosing themes that are responsive. If you can’t afford a paid responsive theme, trust me, you’ll find hundreds of free themes that are responsive. Check out this recent post by Tahir Taous which covers 10 of the Most Popular Free WordPress Themes.

<h3>6. External Links Should Be Opened in a New Tab</h3>

You don’t really want to send visitors away with your own links right? So when making reference to resources outside your site, you should ensure they really see the resources “outside” your site.

One method that is commonly used is to set the target attribute in links to _blank, this will ensure users are redirected to a new tab when they click on the links, instead of opening the link in the same page with your site. This method is often the subject of hot debate, but it’s something a lot of people do.

<pre class="line-numbers language-php"><code><a href="https://link_here" target="_blank"> Some text here </a></code></pre>

<h3>7. Site Design and User Experience</h3>

Let’s imagine we open a site with the goal of reading a post or checking out their services and as we land on the site we’re welcomed with a completely yellow background, red text, and a header high enough to house your photo album.

If you’re like me, then you won’t think twice before navigating away from the site.

Site design is a very crucial element that should be well taken care of. Even if your content is not perfect, trust me, if your site is clean and pleasing, you might encourage users to stick around and check out other pages on your website.

<h3>8. Link to Internal Content and Show Related Posts</h3>

This is no doubt a good way to keep users on your site. Rather than linking to external resources all the time, referring to the ones you have on your site is good.

When users finish reading a post on your site, what do they do next? Stick around or go back to where they came from? Even though great content encourages users to read more, you have to make it as simple as possible, especially when they are interested in staying.

A plugin like YARRP will help achieve this goal without any stress.

<h3>9. Handle Ads Wisely</h3>

I understand you have to generate some revenue from your site, but if you don’t do this wisely, you might be losing in two ways: reduction in revenue and reduction in the amount of users and their time onsite.

You don’t really want to make visitors wonder what is an ad and what is the real content. Retain just a very few ads on your homepage, or better still if possible have none. On your post pages, arrange the ads the best way you can, text ads would be perfect.

<h3>10. Provide Clear Navigation</h3>

Assuming you build your business website using WordPress, creating clear and understandable navigation in the header area is ideal. If you can’t provide a clear path through your site for users, they’ll leave and go somewhere else.

For example, when users are only interested in seeing your portfolio to decide if you’d be great to work with, implementing a bad navigation system will have them searching for other alternatives in no time.

Make sure your navigation is clear and easy to access, understandable and not confusing.

<h3>Conclusion</h3>

Keep this in mind, bounce rate reduction doesn’t happen overnight. It is a consistent gradual process, and effective application of the strategies explained above can effectively reduce it on your site.

Perhaps you have an additional tip for reducing bounce rates? Please share using the comments section below.";s:10:"post_title";s:59:"10 Tips for Reducing the Bounce Rate on Your WordPress Site";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:59:"10-tips-for-reducing-the-bounce-rate-on-your-wordpress-site";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2016-02-22 16:14:18";s:17:"post_modified_gmt";s:19:"2016-02-22 16:14:18";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:27:"http://scriptsvn.com/?p=350";s:10:"menu_order";s:1:"7";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}i:3;O:8:"stdClass":23:{s:2:"ID";s:3:"355";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2016-02-22 16:19:24";s:13:"post_date_gmt";s:19:"2016-02-22 16:19:24";s:12:"post_content";s:6166:"React is mostly coded by Igor Wiedler, who is also a prominent contributor to the Silex framework. While reading through the React examples, it really does look similar to Node.js.

Like Node.js, you’re encouraged to write your applications to execute asynchronously. For those who may not be familiar with asynchronous programming, the server answers requests with a single thread but uses worker threads for time-consuming tasks like writing to a file, reading from a database, retrieving results from the Twitter API, etc. When the task is finished, the worker returns the result to the main thread which finalizes the request. This style of programming can give an enormous speed boost.
<h3>Getting React</h3>
React is available with Composer through Packagist (if you’re not familiar with working with Composer, check out my previous article). To install React, create a new composer.json file with the following content:
<pre class="line-numbers language-markup"><code class="language-markup">{
  "require": {
    "react/react": "0.2.*"
  }
}</code></pre>
Open a console, navigate to where the file is, and run php composer install. React and its dependencies will be retrieved and can then be used by including the <code>vendor/autoload.php</code> file.
<h3>Creating a Simple Server</h3>
With Node.js you create a server script yourself instead of using a server application like Apache or Nginx. You set up an event function, define a port which your server will listen to, and then wait for requests. With each request the event function is executed. This is the same in React.

This example is taken from the the React project’s README.md file:
<pre class="line-numbers language-javascript"><code class="language-javascript">&lt;?php require_once 'vendor/autoload.php'; $i = 0; $app = function ($request, $response) use (&amp;$i) { $i++; $text = "This is request number $i.n"; $headers = array('Content-Type' =&gt; 'text/plain');

    $response-&gt;writeHead(200, $headers);
    $response-&gt;end($text);
};

$loop = ReactEventLoopFactory::create();
$socket = new ReactSocketServer($loop);
$http = new ReactHttpServer($socket);

$http-&gt;on('request', $app);

$socket-&gt;listen(1337);
$loop-&gt;run();</code></pre>
First it includes the Composer autoloader file, and then sets the variable $i to zero which will be used to count the requests. Then, something that is not an overly common practice in the PHP community, our event function which will handle all incoming requests is stored to a variable. The function sets the response’s headers and prints the number of handled requests.

The script creates an event loop that handles unblocked I/O for us, a socket, and then the server. Finally, the event function is assigned, the socket is set to listen on port 1337, and the event loop is run.

If you save the code as server.php and run it from the command line with php server.php, and then navigate your browser to http://localhost:1337, you’ll see the response. Don’t forget to check your command line to see how many requests have been handled!
<h3>Exploring React Further</h3>
React can do much more than act as an HTTP server. We can use it for some much cooler things. Think of this example: you’re a spy for the CIA and you want to transfer data to your boss. The boss creates a server, you connect as a client via a socket, and everything you type is then logged in the server’s log.

Support for sockets is handled by the socket component in React, and for this example you don’t need the full React library. The following composer.json should be sufficient:
<pre class="line-numbers language-markup"><code class="language-markup">{
  "require": {
    "react/socket": "0.2.*"
  }
}</code></pre>
And this is the example code:
<pre class="line-numbers language-php"><code class="language-php">&lt;?php require_once 'vendor/autoload.php'; $loop = ReactEventLoopFactory::create(); $socket = new ReactSocketServer($loop); $socket-&gt;on('connection', function ($conn) use ($loop) {
  $conn-&gt;write("Successfully connected to the writing servern");
  echo 'client connected';
  $dataStream = new ReactStreamStream(fopen('data.txt', 'w'), $loop);

  $conn-&gt;on('data', function($data) use ($conn, $dataStream) {
    $dataStream-&gt;write($data);
  });

  $conn-&gt;on('end', function() {
    echo 'connection closed';
  });
});

$socket-&gt;listen(4000);
$loop-&gt;run();</code></pre>
We create an event loop again and then create a socket. When the connection event is emitted, we print a message to the console. We create a new writing stream and name it $dataStream and when we receive data, we push it down the stream and the data will be written to our file. When the client disconnects, the stream is closed.

After running php server.php you can connect by using nc localhost 4000. Everything you type and press enter afterwards is logged to data.txt.
<h3>Who Would Use React?</h3>
So React offers some really awesome functionality, but why would you use a younger library that’s not yet stable instead the more mature Node.js, which also has a big community? I was thinking this myself, so I asked Igor Wiedler:

I wouldn’t really recommend running react in production at this point. Some of the lower level parts are quite stable, the higher level stuff not so much. The target audience right now is people who like to experiment with cutting-edge technologies and aren’t afraid to debug stuff when it breaks. I particular: I’m interested in having new libraries based on the react event loop, so that they can be used together.
<h3>Conclusion</h3>
Is React an interesting project? I think so, even if it just ports Node.js’ functionality, it does so in a cool way, and who would have thought that it was even possible to do such things in PHP? At least I didn’t.

React seems like a promising project, even while it’s not production-ready yet, it seems to have some cool features and a good developer to maintain it. Of course I can’t explain every aspect of React in this short article, so if you want to learn more about React:";s:10:"post_title";s:21:"A First Look at React";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:21:"a-first-look-at-react";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2016-08-01 08:51:33";s:17:"post_modified_gmt";s:19:"2016-08-01 08:51:33";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:27:"http://scriptsvn.com/?p=355";s:10:"menu_order";s:1:"6";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}}s:8:"col_info";a:23:{i:0;O:8:"stdClass":13:{s:4:"name";s:2:"ID";s:7:"orgname";s:2:"ID";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:3;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:49699;s:4:"type";i:8;s:8:"decimals";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:11:"post_author";s:7:"orgname";s:11:"post_author";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:49193;s:4:"type";i:8;s:8:"decimals";i:0;}i:2;O:8:"stdClass":13:{s:4:"name";s:9:"post_date";s:7:"orgname";s:9:"post_date";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:16513;s:4:"type";i:12;s:8:"decimals";i:0;}i:3;O:8:"stdClass":13:{s:4:"name";s:13:"post_date_gmt";s:7:"orgname";s:13:"post_date_gmt";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:129;s:4:"type";i:12;s:8:"decimals";i:0;}i:4;O:8:"stdClass":13:{s:4:"name";s:12:"post_content";s:7:"orgname";s:12:"post_content";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:19090;s:6:"length";i:4294967295;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:5;O:8:"stdClass":13:{s:4:"name";s:10:"post_title";s:7:"orgname";s:10:"post_title";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:82;s:6:"length";i:262140;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:6;O:8:"stdClass":13:{s:4:"name";s:12:"post_excerpt";s:7:"orgname";s:12:"post_excerpt";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:262140;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:7;O:8:"stdClass":13:{s:4:"name";s:11:"post_status";s:7:"orgname";s:11:"post_status";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:7;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:16385;s:4:"type";i:253;s:8:"decimals";i:0;}i:8;O:8:"stdClass":13:{s:4:"name";s:14:"comment_status";s:7:"orgname";s:14:"comment_status";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:4;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:9;O:8:"stdClass":13:{s:4:"name";s:11:"ping_status";s:7:"orgname";s:11:"ping_status";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:4;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:10;O:8:"stdClass":13:{s:4:"name";s:13:"post_password";s:7:"orgname";s:13:"post_password";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:11;O:8:"stdClass":13:{s:4:"name";s:9:"post_name";s:7:"orgname";s:9:"post_name";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:79;s:6:"length";i:800;s:9:"charsetnr";i:45;s:5:"flags";i:16393;s:4:"type";i:253;s:8:"decimals";i:0;}i:12;O:8:"stdClass":13:{s:4:"name";s:7:"to_ping";s:7:"orgname";s:7:"to_ping";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:262140;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:13;O:8:"stdClass":13:{s:4:"name";s:6:"pinged";s:7:"orgname";s:6:"pinged";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:262140;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:14;O:8:"stdClass":13:{s:4:"name";s:13:"post_modified";s:7:"orgname";s:13:"post_modified";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:129;s:4:"type";i:12;s:8:"decimals";i:0;}i:15;O:8:"stdClass":13:{s:4:"name";s:17:"post_modified_gmt";s:7:"orgname";s:17:"post_modified_gmt";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:129;s:4:"type";i:12;s:8:"decimals";i:0;}i:16;O:8:"stdClass":13:{s:4:"name";s:21:"post_content_filtered";s:7:"orgname";s:21:"post_content_filtered";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:4294967295;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:17;O:8:"stdClass":13:{s:4:"name";s:11:"post_parent";s:7:"orgname";s:11:"post_parent";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:49193;s:4:"type";i:8;s:8:"decimals";i:0;}i:18;O:8:"stdClass":13:{s:4:"name";s:4:"guid";s:7:"orgname";s:4:"guid";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:27;s:6:"length";i:1020;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:19;O:8:"stdClass":13:{s:4:"name";s:10:"menu_order";s:7:"orgname";s:10:"menu_order";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:11;s:9:"charsetnr";i:63;s:5:"flags";i:32769;s:4:"type";i:3;s:8:"decimals";i:0;}i:20;O:8:"stdClass":13:{s:4:"name";s:9:"post_type";s:7:"orgname";s:9:"post_type";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:4;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:16393;s:4:"type";i:253;s:8:"decimals";i:0;}i:21;O:8:"stdClass":13:{s:4:"name";s:14:"post_mime_type";s:7:"orgname";s:14:"post_mime_type";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:400;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:22;O:8:"stdClass":13:{s:4:"name";s:13:"comment_count";s:7:"orgname";s:13:"comment_count";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:32769;s:4:"type";i:8;s:8:"decimals";i:0;}}s:8:"num_rows";i:4;s:10:"return_val";i:4;}