]�W<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:50:"SELECT * FROM reactvn_posts WHERE ID = 327 LIMIT 1";s:11:"last_result";a:1:{i:0;O:8:"stdClass":23:{s:2:"ID";s:3:"327";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2016-02-22 14:33:16";s:13:"post_date_gmt";s:19:"2016-02-22 14:33:16";s:12:"post_content";s:8005:"Angular 2 was released a couple of months back and a beta version is just a couple of weeks old. Trust me, I can tell your thoughts about this change. You are probably asking yourself (or actually your computer screen) why on earth would the Angular team make such a huge jump. After all, you are (or at least you think you are) fine with what you already have in Angular 1.

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

Just as we saw in this guide, you can just use Angular 2 from scratch, write Angular 1 in Angular 2 form or gradually leverage ngUpgrade to upgrade your existing.";s:10:"post_title";s:49:"Seamless Ways to Upgrade Angular 1.x to Angular 2";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:49:"seamless-ways-to-upgrade-angular-1-x-to-angular-2";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2016-02-22 14:33:16";s:17:"post_modified_gmt";s:19:"2016-02-22 14:33:16";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:27:"http://scriptsvn.com/?p=327";s:10:"menu_order";s:1:"9";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}}s:8:"col_info";a:23:{i:0;O:8:"stdClass":13:{s:4:"name";s:2:"ID";s:7:"orgname";s:2:"ID";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:3;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:49699;s:4:"type";i:8;s:8:"decimals";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:11:"post_author";s:7:"orgname";s:11:"post_author";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:49193;s:4:"type";i:8;s:8:"decimals";i:0;}i:2;O:8:"stdClass":13:{s:4:"name";s:9:"post_date";s:7:"orgname";s:9:"post_date";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:16513;s:4:"type";i:12;s:8:"decimals";i:0;}i:3;O:8:"stdClass":13:{s:4:"name";s:13:"post_date_gmt";s:7:"orgname";s:13:"post_date_gmt";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:129;s:4:"type";i:12;s:8:"decimals";i:0;}i:4;O:8:"stdClass":13:{s:4:"name";s:12:"post_content";s:7:"orgname";s:12:"post_content";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:8005;s:6:"length";i:4294967295;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:5;O:8:"stdClass":13:{s:4:"name";s:10:"post_title";s:7:"orgname";s:10:"post_title";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:49;s:6:"length";i:262140;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:6;O:8:"stdClass":13:{s:4:"name";s:12:"post_excerpt";s:7:"orgname";s:12:"post_excerpt";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:262140;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:7;O:8:"stdClass":13:{s:4:"name";s:11:"post_status";s:7:"orgname";s:11:"post_status";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:7;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:16385;s:4:"type";i:253;s:8:"decimals";i:0;}i:8;O:8:"stdClass":13:{s:4:"name";s:14:"comment_status";s:7:"orgname";s:14:"comment_status";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:4;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:9;O:8:"stdClass":13:{s:4:"name";s:11:"ping_status";s:7:"orgname";s:11:"ping_status";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:4;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:10;O:8:"stdClass":13:{s:4:"name";s:13:"post_password";s:7:"orgname";s:13:"post_password";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:11;O:8:"stdClass":13:{s:4:"name";s:9:"post_name";s:7:"orgname";s:9:"post_name";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:49;s:6:"length";i:800;s:9:"charsetnr";i:45;s:5:"flags";i:16393;s:4:"type";i:253;s:8:"decimals";i:0;}i:12;O:8:"stdClass":13:{s:4:"name";s:7:"to_ping";s:7:"orgname";s:7:"to_ping";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:262140;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:13;O:8:"stdClass":13:{s:4:"name";s:6:"pinged";s:7:"orgname";s:6:"pinged";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:262140;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:14;O:8:"stdClass":13:{s:4:"name";s:13:"post_modified";s:7:"orgname";s:13:"post_modified";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:129;s:4:"type";i:12;s:8:"decimals";i:0;}i:15;O:8:"stdClass":13:{s:4:"name";s:17:"post_modified_gmt";s:7:"orgname";s:17:"post_modified_gmt";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:129;s:4:"type";i:12;s:8:"decimals";i:0;}i:16;O:8:"stdClass":13:{s:4:"name";s:21:"post_content_filtered";s:7:"orgname";s:21:"post_content_filtered";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:4294967295;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:17;O:8:"stdClass":13:{s:4:"name";s:11:"post_parent";s:7:"orgname";s:11:"post_parent";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:49193;s:4:"type";i:8;s:8:"decimals";i:0;}i:18;O:8:"stdClass":13:{s:4:"name";s:4:"guid";s:7:"orgname";s:4:"guid";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:27;s:6:"length";i:1020;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:19;O:8:"stdClass":13:{s:4:"name";s:10:"menu_order";s:7:"orgname";s:10:"menu_order";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:11;s:9:"charsetnr";i:63;s:5:"flags";i:32769;s:4:"type";i:3;s:8:"decimals";i:0;}i:20;O:8:"stdClass":13:{s:4:"name";s:9:"post_type";s:7:"orgname";s:9:"post_type";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:4;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:16393;s:4:"type";i:253;s:8:"decimals";i:0;}i:21;O:8:"stdClass":13:{s:4:"name";s:14:"post_mime_type";s:7:"orgname";s:14:"post_mime_type";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:400;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:22;O:8:"stdClass":13:{s:4:"name";s:13:"comment_count";s:7:"orgname";s:13:"comment_count";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:32769;s:4:"type";i:8;s:8:"decimals";i:0;}}s:8:"num_rows";i:1;s:10:"return_val";i:1;}