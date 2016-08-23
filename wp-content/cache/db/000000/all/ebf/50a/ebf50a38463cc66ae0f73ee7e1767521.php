^�W<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:49:"SELECT * FROM reactvn_posts WHERE ID = 55 LIMIT 1";s:11:"last_result";a:1:{i:0;O:8:"stdClass":23:{s:2:"ID";s:2:"55";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-10-08 07:10:00";s:13:"post_date_gmt";s:19:"2015-10-08 07:10:00";s:12:"post_content";s:32432:"AngularJS is an amazing JavaScript framework for building rich client-side applications but the truth is many developers don’t use the built-in router. They instead use the AngularUI project’s UI-Router because it has two important features: multiple views and nested views. This article explains these features and why they are important and shows you a real-world example of using these features together.<!--more-->

<h2>Why You Should Use UI-Router</h2>

<h3>Multiple Views</h3>

Most applications can be broken up into regions. At a minimum, applications usually have a header, a main content area, and a footer.

Commonly, applications may have an additional sidebar on the left or right side of the page as shown below.

<a href="http://www.funnyant.com/wp-content/uploads/2014/12/multiple-views-sketch.jpg"><img class="alignnone size-full wp-image-909" src="http://www.funnyant.com/wp-content/uploads/2014/12/multiple-views-sketch.jpg" alt="multiple-views-sketch" width="2048" height="1536" /></a>

In most use cases, all of these regions (views) are shown on the page at the same time. With the built-in AngularJS router, <code>ngRoute</code>, only one view (<code>ng-view</code>) is allowed per page. This limitation causes people to use includes (ng-include) or other workarounds to create a layout or master page for their application. UI-Router supports multiple views and each can have it’s own corresponding Controller so that each of these regions can be encapsulated and reused throughout the application if needed.

<h3>Nested Views</h3>

The common example of a nested view in applications is a master/detail or, more specifically, a list/detail page. Many applications show a list of items then when you click on an item you see the detail for that item. Taking this example further, you might then click an edit link when viewing the item’s details that takes you to an editable form for the item (see the diagram below to visualize).

<a href="http://www.funnyant.com/wp-content/uploads/2014/12/master-detail-sketch.jpg"><img class="alignnone size-full wp-image-907" src="http://www.funnyant.com/wp-content/uploads/2014/12/master-detail-sketch.jpg" alt="master-detail-sketch" width="2048" height="1536" /></a>

This scenario is easily achieved with the built-in AngularJS router, <code>ngRoute</code>, if the list and detail are on separate pages (or views as they are called in AngularJS). However, if you want the list to remain on the page while you show the detail to the right or below the list this becomes more challenging. To be clear, this requirement can be achieved with <code>ngRoute</code> by sharing a single view with two controllers: one for the list and one for the detail and hiding and showing the detail as needed. The result is not ideal because we would like the list and detail to each have their own controller and view with only one responsibility (showing a list or showing item details). By encapsulating these user interface areas in their own view we can have a more composable UI that allows us to bring the pieces together or break them apart as needed to meet requirements. Nested views enable us to not only bring these views together at the same time but also to nest a view inside another view as is done in the list/detail example.

<h2>History</h2>

When AngularJS was first released <code>ngRoute</code> had a similar feature set as other routers at the time, such as the router included in the Backbone.js library as well as the stand-alone routing libraries History.js and Sammy.js. In summary, they mapped a route or URL to JavaScript code that needed to be run when the URL changes and added entries to the browsers history appropriately so that the back button didn’t break.

Eventually competing JavaScript MV* frameworks like Ember.js and Durandal.js innovated and came out with more robust routers that supported multiple views and nested views and implemented the state machine design pattern internally.

AngularJS responded to this by removing <code>ngRoute</code> out of the core angular.js download in version 1.1.6 (most people just say version 1.2). It is still available for download from the<a href="http://angularjs.org/">AngularJS site</a> but is no longer in the core.

The AngularJS community responded and the most popular library that emerged was the AngularUI project’s UI-Router.

The AngularJS team which for several months (as a consultant) included Rob Eisenberg, the Durandal.js and Aurelia (nextgen Durandal) creator, has been working on a rewrite of the Router for the future version of AngularJS 2.0 and have stated it will eventually be ported back into a point release of AngularJS version 1.3 which was just recently released.

If you want more details about the history and the pros and cons of various routers the <a href="https://docs.google.com/document/d/1I3UC0RrgCh9CKrLxeE4sxwmNSBl3oSXQGt9g3KZnTJI/edit#heading=h.xgjl2srtytjt">public design document for the AngularJS 2.0 router is available here</a> Note that you’ll need to click the green button labeled “suggesting” and choose “viewing” as shown below to make it legible.

<a href="http://www.funnyant.com/wp-content/uploads/2014/12/angularjs-router-design-document-1.png"><img class="alignnone size-full wp-image-898" src="http://www.funnyant.com/wp-content/uploads/2014/12/angularjs-router-design-document-1.png" alt="angularjs-router-design-document-1" width="2734" height="840" /></a>

<a href="http://www.funnyant.com/wp-content/uploads/2014/12/angularjs-router-design-document-2.png"><img class="alignnone size-full wp-image-899" src="http://www.funnyant.com/wp-content/uploads/2014/12/angularjs-router-design-document-2.png" alt="angularjs-router-design-document-2" width="1906" height="704" /></a>

<h2>Install</h2>

To use the UI-Router with version 1.2.x or 1.3.x of AngularJS you can do one of the following to get the javascript source code:

<h4>download</h4>

download the <a href="https://angular-ui.github.io/ui-router/release/angular-ui-router.js">release</a> or <a href="https://angular-ui.github.io/ui-router/release/angular-ui-router.min.js">minified</a> versions

<h4>bower install</h4>

<pre><code>$ bower install angular-ui-router
</code></pre>

<h4>npm install</h4>

<pre><code>$ bower install angular-ui-router
</code></pre>

<h3>Include script tag</h3>

Include angular-ui-router.js or angular-ui-router.min.js in your index.html, after the Angular script tag (see below)

<pre><code class="language-php"><script src="//ajax.googleapis.com/ajax/libs/angularjs/1.1.5/angular.min.js"></script><script src="js/angular-ui-router.min.js"></script>
</code></pre>

<h3>Include Dependency</h3>

Include the ‘ui.router’ dependency in your main AngularJS module.

<pre><code class="language-js">var myApp = angular.module('myApp', ['ui.router']);
</code></pre>

Notice the module name is <code>ui.router</code> not <code>ui-router</code> (using the hyphen is a common mistake).

<h2>Router as State Machine</h2>

UI-Router introduces a state machine design pattern abstraction on top of a traditional router. Routes are referred to as <code>states</code> and the URL becomes simply a property of the state.

<pre><code class=" language-js">var app = angular.module('demo', ['ui.router']);
 
app.config(['$stateProvider', '$urlRouterProvider', function($stateProvider, $urlRouterProvider) {
    $urlRouterProvider.otherwise('/');
 
    $stateProvider
        .state('home', {
            url:'/',
            templateUrl: 'templates/home.html',
            controller: 'HomeController'
        })
        .state('about', {
            url:'/about',
            templateUrl: 'templates/about.html',
            controller: 'AboutController'
        })
 
}]);</code></pre>

When you create links you can simply refer to the <code>state</code> name inside a <code>ui-sref</code> directive instead of using the <code>URL</code>.

So this:

<div class="wp_syntax">
<table>
<tbody>
<tr class="alt-table-row">
<td class="code">
<pre class="html4strict"> &lt;a ui-sref="home"&gt;Home&lt;/a&gt;</pre>
</td>
</tr>
</tbody>
</table>
</div>

Renders:

<div class="wp_syntax">
<table>
<tbody>
<tr>
<td class="code">
<pre class="html4strict"> &lt;a href="#/"&gt;Home&lt;/a&gt;</pre>
</td>
</tr>
</tbody>
</table>
</div>

In the example above <code>ui-sref</code> can be understood as follows: <code>ui</code> is the directive prefix for all AngularUI project directives and <code>sref</code> is a play on the traditional <code>href</code> of an HTML anchor tag and stands for state ref.

<h4>In the Controller</h4>

Here is an example of how to do a redirect in a Controller to a <code>state</code>.

<div class="wp_syntax">
<table>
<tbody>
<tr class="alt-table-row">
<td class="code">
<pre class="javascriapt">$scope.redirectToAbout = function(){
    $state.go('about'); 
}</pre>
</td>
</tr>
</tbody>
</table>
</div>

<h3>$routeProvider becomes $stateProvider</h3>

The AngularJS service injected to provide routing which is <code>$routeProvider</code> with <code>ngRoute</code>becomes <code>$stateProvider</code> when using the UI-Router.

<h3>$urlRouterProvider</h3>

The <code>$urlRouterProvider</code> is there for two main purposes. To establish a default route for URLs that don’t have a specific route.

<div class="wp_syntax">
<table>
<tbody>
<tr>
<td class="code">
<pre class="javascript">app.config(['$stateProvider', '$urlRouterProvider', function($stateProvider, $urlRouterProvider) {
    $urlRouterProvider.otherwise('/');
    ...
}]);</pre>
</td>
</tr>
</tbody>
</table>
</div>

To allow developers to listen for a window location change and redirect to a route that has a<code>state</code> defined.

<div class="wp_syntax">
<table>
<tbody>
<tr class="alt-table-row">
<td class="code">
<pre class="javascript">app.config(['$stateProvider', '$urlRouterProvider', function($stateProvider, $urlRouterProvider) {
    $urlRouterProvider
        .when('/legacy-route', {
            redirectTo: '/'
        });
}]);</pre>
</td>
</tr>
</tbody>
</table>
</div>

In summary, <code>$urlRouterProvider</code> lets you handle cases where the state machine abstraction of the $stateProvider doesn’t make sense.

So now that you’ve got the basics of the UI-Router lets get back to those features that make it better than <code>ngRoute</code>.

<h2>UI-Router in Action</h2>

We will look at an example of nested views first then we’ll look an example of multiple views. After we get our heads around each we’ll put the two features together to show how they can be used in a real-world application.

<h3>Nested Views with UI-Router</h3>

Here is a list/detail example of nested views using UI-Router. The example displays a list of TV shows.

<a href="http://www.funnyant.com/wp-content/uploads/2014/12/angularjs-ui-router-nested-views-1.png"><img class="size-full wp-image-904" src="http://www.funnyant.com/wp-content/uploads/2014/12/angularjs-ui-router-nested-views-1.png" alt="angularjs-ui-router-nested-views-1" width="742" height="398" /></a>

If you click on a row you’ll see a detailed description for the selected show.

<a href="http://www.funnyant.com/wp-content/uploads/2014/12/angularjs-ui-router-nested-views-2.png"><img class="alignnone size-full wp-image-905" src="http://www.funnyant.com/wp-content/uploads/2014/12/angularjs-ui-router-nested-views-2.png" alt="angularjs-ui-router-nested-views-2" width="778" height="854" /></a>

<div class="clearfix"></div>

<h3>Application Shell (index.html)</h3>

AngularJS applications are single-page application where views are inserted into a shell page. Here is our shell page index.html.

<div class="wp_syntax">
<table>
<tbody>
<tr>
<td class="code">
<pre class="html4strict">&lt;!doctype html&gt;
&lt;html id="data-ng-app" data-ng-app="demo"&gt;
    &lt;head&gt;
        &lt;meta charset="utf-8"&gt;
        &lt;title&gt;ui router demo&lt;/title&gt;
        &lt;style type="text/css"&gt;
            .selected{background-color: #efefef; width:120px; } 
            .detail{width: 300px;margin: 30px;border-top: 1px solid #efefef;}
        &lt;/style&gt;
        &lt;!-- IE8-HTML5: https://code.google.com/p/html5shiv/ --&gt;
        &lt;script src="js/libs/html5shiv.js"&gt;&lt;/script&gt;
 
    &lt;/head&gt;
    &lt;body id="index"&gt;
 
        &lt;!-- Angular UI Router Directive for template insertion --&gt;
        &lt;div id="content" ui-view&gt;&lt;/div&gt;
 
        &lt;script src="js/libs/angular.js"&gt;&lt;/script&gt;
        &lt;script src="js/libs/underscore.js"&gt;&lt;/script&gt;
        &lt;script src="js/libs/angular-ui-router.js"&gt;&lt;/script&gt;        
        &lt;script src="js/main.js"&gt;&lt;/script&gt;      
    &lt;/body&gt;
&lt;/html&gt;</pre>
</td>
</tr>
</tbody>
</table>
</div>

The <code>&lt;div id="content" ui-view&gt;&lt;/div&gt;</code> will have the first level or parent view (in our example shows.html) placed inside of it by the UI-Router.

<h4>Home page view (templates/shows.html)</h4>

The list view is shows.html.

<div class="wp_syntax">
<table>
<tbody>
<tr class="alt-table-row">
<td class="code">
<pre class="html4strict">&lt;ul&gt;
    &lt;li ui-sref-active="selected" ng-repeat="show in shows"&gt;
        &lt;a ui-sref="shows.detail({id: show.id})"&gt;{{show.name}}&lt;/a&gt;
    &lt;/li&gt;
&lt;/ul&gt;
 
&lt;div class="detail" ui-view&gt;&lt;/div&gt;</pre>
</td>
</tr>
</tbody>
</table>
</div>

As mentioned before the index.html page has a <code>ui-view</code> attribute directive into which this view (shows.html) is rendered when the corresponding route is requested.

Notice how there is another <code>ui-view</code> nested inside this shows.html view. This <code>ui-view</code> is where a child view of the parent ‘shows’ view is rendered. In this example shows-detail.html is the child view.

<h4>Shows detail view (templates/shows-detail.html)</h4>

The detail view is shows-detail.html

<div class="wp_syntax">
<table>
<tbody>
<tr>
<td class="code">
<pre class="html4strict">&lt;h3&gt;{{selectedShow.name}}&lt;/h3&gt;
&lt;p&gt;
    {{selectedShow.description}}
&lt;/p&gt;
&lt;/code&gt;</pre>
</td>
</tr>
</tbody>
</table>
</div>

<h3>Controllers</h3>

And there is a corresponding controller for each view.

<h4>ShowsController</h4>

The <code>ShowsController</code> loads an in-memory array of shows from the <code>ShowsService</code>.

<div class="wp_syntax">
<table>
<tbody>
<tr class="alt-table-row">
<td class="code">
<pre class="javascript">app.controller('ShowsController', ['$scope','ShowsService', function($scope, ShowsService) {
    $scope.shows = ShowsService.list();
 }]);</pre>
</td>
</tr>
</tbody>
</table>
</div>

<h4>ShowsDetailController</h4>

The <code>ShowsDetailController</code> looks up the show by id using the <code>ShowsService</code> and sets it as the <code>selectedShow</code> on the <code>$scope</code>.

<pre><code class="language-js">app.controller('ShowsDetailController', ['$scope','$stateParams', 'ShowsService', function($scope, $stateParams, ShowsService) {
        $scope.selectedShow = ShowsService.find($stateParams.id);
 }]);</code></pre>

<h3>Configuration</h3>

We need to configure the UI-Router using the <code>$stateProvider</code>.

When we define a state as <code>'parentstatename.childstatename'</code> the convention of simply adding the period when defining the state name tells UI-Router that the child state is nested under the parent state.

<pre><code class="language-js"> app.config(['$stateProvider', '$urlRouterProvider', function($stateProvider, $urlRouterProvider) {
    $urlRouterProvider.otherwise('/shows');
 
    $stateProvider
        .state('shows', {
            url:'/shows',
            templateUrl: 'templates/shows.html',
            controller: 'ShowsController'
        })
        .state('shows.detail', {
            url: '/detail/:id',
            templateUrl: 'templates/shows-detail.html',
            controller: 'ShowsDetailController'
        });
}]);</code></pre>

What is really great about nested views is that the list controller just has implementation details regarding the list and the detail controller is only concerned with showing details.

To show how decoupled these are we only need to change the routing configuration to not nest the details and we have two separate virtual pages (one for list and one for details). More specifically, we’ll change the state name <code>'shows.detail'</code> to <code>'detail'</code>.

<pre><code class="language-js line-numbers">$stateProvider
    .state('shows', {
        url:'/shows',
        templateUrl: 'templates/shows.html',
        controller: 'ShowsController'
    })
    .state('detail', {
        url: '/detail/:id',
        templateUrl: 'templates/shows-detail.html',
        controller: 'ShowsDetailController'
    });
    ...</code></pre>

And change the link to the state from <code>&lt;a ui-sref="shows.detail({id: show.id})"&gt;{{show.name}}&lt;/a&gt;</code> to <code>&lt;a ui-sref="detail({id: show.id})"&gt;{{show.name}}&lt;/a&gt;</code>

Now our example will display the views separately as if they are two separate pages.

<h3>Service</h3>

The <code>ShowsService</code> is our data access layer in this example and just keeps an in-memory array and uses underscore.js to easily work with the collection.

<pre><code class="language-js">app.factory('ShowsService',function(){
    var shows = [{
        id: 1,
        name: 'Walking Dead',
        description: 'The Walking Dead is an American post-apocalyptic horror drama television series developed by Frank Darabont. It is based on the comic book series of the same name by Robert Kirkman, Tony Moore, and Charlie Adlard. It stars Andrew Lincoln as sheriff's deputy Rick Grimes, who awakens from a coma to find a post-apocalyptic world dominated by flesh-eating zombies.'
    },
    {
        id: 2,
        name: 'Breaking Bad',
        description: 'Breaking Bad is an American crime drama television series created and produced by Vince Gilligan. The show originally aired on the AMC network for five seasons, from January 20, 2008 to September 29, 2013. The main character is Walter White (Bryan Cranston), a struggling high school chemistry teacher who is diagnosed with inoperable lung cancer at the beginning of the series.'   
    },
    {
        id: 3,
        name: '7D', 
        description: 'The 7D is an American animated television series produced by Disney Television Animation, and broadcast on Disney XD starting in July 7, 2014. It is a re-imagining of the titular characters from the 1937 film Snow White and the Seven Dwarfs by Walt Disney Productions'
    }];
 
 
    return {
        list: function(){
            return shows;
        },
        find: function(id){
            return _.find(shows, function(show){return show.id == id});
        }
    }
 });
</code></pre>

<h3>Multiple Views with UI-Router</h3>

Below is an example of several regions on a page including a header, content, and footer being managed on a page with UI-Router using multiple views.

<a href="http://www.funnyant.com/wp-content/uploads/2014/12/angularjs-ui-router-multiple-views-1.png"><img class="size-full wp-image-901" src="http://www.funnyant.com/wp-content/uploads/2014/12/angularjs-ui-router-multiple-views-1.png" alt="angularjs-ui-router-multiple-views-1" width="652" height="452" /></a>

There is some primary navigation and various content is filled into the regions depending on the virtual page the user navigates to in the application.

<a href="http://www.funnyant.com/wp-content/uploads/2014/12/angularjs-ui-router-multiple-views-2.png"><img class="alignleft size-full wp-image-902" src="http://www.funnyant.com/wp-content/uploads/2014/12/angularjs-ui-router-multiple-views-2.png" alt="angularjs-ui-router-multiple-views-2" width="718" height="466" /></a>

<div class="clearfix"></div>

<h4>Application Shell (index.html)</h4>

<pre><code class="language-html"><!DOCTYPE html>
 <html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Index</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
 
 
    </head>
    <body ng-app="demo">
 
       <div ui-view="header"></div>
       <div ui-view="content"></div>
       <div ui-view="footer"></div>
 
    <script src="/js/bower_components/angular/angular.js"></script>
    <script src="/js/bower_components/angular-ui-router/release/angular-ui-router.js"></script>
    <script src="/js/main.js"></script>
 
    </body>
</html>
</code></pre>

Notice the <code>ui-view</code> attribute directives have names assigned to them: header, content, and footer. These names are referenced when we configure the router to say which view/template and controller to use for each region of the page.

<h4>Templates/Views</h4>

The templates are straight-forward to keep the example simple. Header.html has some navigation that uses the <code>ui-sref</code> directive to navigate to various application states/routes.

<h4>partials/header.html</h4>

<code>wp_content()</code> and <code>wp_footer()</code>,

<pre><code><div class="ul"><li><a ng-href="/">Home</a></li><li ui-sref-active="active"><a ui-sref="dashboard">Dashboard</a></li><li ui-sref-active="active"><a ui-sref="campaigns">Campaigns</a></li></div></code></pre>

<h4>partials/content.html</h4>

<div class="wp_syntax">
<table>
<tbody>
<tr>
<td class="code">
<pre class="html4strict">&lt;p&gt;This is the default content.&lt;/p&gt;</pre>
</td>
</tr>
</tbody>
</table>
</div>

<h4>partials/footer.html</h4>

<div class="wp_syntax">
<table>
<tbody>
<tr class="alt-table-row">
<td class="code">
<pre class="html4strict">&lt;p&gt;This is the footer.&lt;/p&gt;</pre>
</td>
</tr>
</tbody>
</table>
</div>

<h4>partials/dashboard.html</h4>

<div class="wp_syntax">
<table>
<tbody>
<tr>
<td class="code">
<pre class="html4strict">&lt;h2&gt;Dashboard&lt;/h2&gt;</pre>
</td>
</tr>
</tbody>
</table>
</div>

<h4>partials/campaigns.html</h4>

<div class="wp_syntax">
<table>
<tbody>
<tr class="alt-table-row">
<td class="code">
<pre class="html4strict">&lt;h2&gt;Campaigns&lt;/h2&gt;</pre>
</td>
</tr>
</tbody>
</table>
</div>

The dashboard and campaigns view templates are used to replace the default content in content.html when the corresponding routes are requested.

<h3>Configuration</h3>

As in the previous example we use the $stateProvider to configure the states (routes).

The key takeaway below is to notice that instead of having one <code>templateUrl</code> and<code>controller</code> per <code>URL</code> you instead have a collection of <code>views</code> each with its own<code>templateUrl</code> and <code>controller.</code>

So this:

<pre><code class="javascript">.state('home',{
        url: '/',
        templateUrl: '/templates/partials/header.html',
        controller: 'HomeController'
    })</code></pre>

Becomes:

<div class="wp_syntax">
<table>
<tbody>
<tr class="alt-table-row">
<td class="code">
<pre class="javascript">.state('home',{
        url: '/',
        views: {
            'header': {
                templateUrl: '/templates/partials/header.html',
                controller: 'HeaderController'
            },
            'content': {
                templateUrl: '/templates/partials/content.html',
                controller: 'ContentController' 
            },
            'footer': {
                templateUrl: '/templates/partials/footer.html',
                controller: 'FooterController'
            }
        }
    })</pre>
</td>
</tr>
</tbody>
</table>
</div>

Here is the full code for the example (note: controllers are not needed for the example I just put them in above for completeness).

<div class="wp_syntax">
<table>
<tbody>
<tr>
<td class="code">
<pre class="javascript">var app = angular.module('demo', ['ui.router']);
 
app.config(function($stateProvider, $urlRouterProvider){
 
    $urlRouterProvider.otherwise('/');
 
    $stateProvider
    .state('home',{
        url: '/',
        views: {
            'header': {
                templateUrl: '/templates/partials/header.html'
            },
            'content': {
                templateUrl: '/templates/partials/content.html' 
            },
            'footer': {
                templateUrl: '/templates/partials/footer.html'
            }
        }
    })
 
    .state('dashboard', {
        url: '/dashboard',
        views: {
            'header': {
                templateUrl: '/templates/partials/header.html'
            },
            'content': {
                templateUrl: 'templates/dashboard.html',
                controller: 'DashboardController'
            }
        }
 
    })
 
    .state('campaigns', {
        url: '/campaigns',
        views: {
            'content': {
                templateUrl: 'templates/campaigns.html',
                controller: 'CampaignController'
            },
            'footer': {
                templateUrl: '/templates/partials/footer.html'
            }
        }
 
    })
});</pre>
</td>
</tr>
</tbody>
</table>
</div>

The other thing to notice is that if I don’t fill in a region with a view then it will not be shown when the user navigates to that route. This is not ideal and makes us repeat ourselves quite a bit so in the next section we will look at how to remove this repetition by using the nested views we saw earlier.

<h3>Multiple Views and Nested View with UI-Router</h3>

Now that we understand each of these powerful features lets bring them together to give you a better idea of how you might want to set-up a real-world application.

<h4>Configuration</h4>

We’ll start with the configuration since the view templates are the same as in the multiple views example.

<div class="wp_syntax">
<table>
<tbody>
<tr class="alt-table-row">
<td class="code">
<pre class="javascript">var app = angular.module('demo', ['ui.router']);
 
app.config(function($stateProvider, $urlRouterProvider){
 
    $urlRouterProvider.otherwise('/');
 
    $stateProvider
    .state('app',{
        url: '/',
        views: {
            'header': {
                templateUrl: '/templates/partials/header.html'
            },
            'content': {
                templateUrl: '/templates/partials/content.html' 
            },
            'footer': {
                templateUrl: '/templates/partials/footer.html'
            }
        }
    })
 
    .state('app.dashboard', {
        url: 'dashboard',
        views: {
            'content@': {
                templateUrl: 'templates/dashboard.html',
                controller: 'DashboardController'
            }
        }
 
    })
 
    .state('app.campaigns', {
        url: 'campaigns',
        views: {
            'content@': {
                templateUrl: 'templates/campaigns.html',
                controller: 'CampaignController'
            }
        }
 
    })
 
    .state('app.subscribers', {
        url: 'subscribers',
        views: {
            'content@': {
                templateUrl: 'templates/subscribers.html',
                controller: 'SubscriberController'      
            }
        }
 
    })
    .state('app.subscribers.detail', {
        url: '/:id',
        /*
        templateUrl: 'templates/partials/subscriber-detail.html',
        controller: 'SubscriberDetailController'
        */
 
        views: {
            'detail@app.subscribers': {
                templateUrl: 'templates/partials/subscriber-detail.html',
                controller: 'SubscriberDetailController'        
            }
        }
 
    });
 
});</pre>
</td>
</tr>
</tbody>
</table>
</div>

We create a default state (route) at <code>/</code> named <code>app</code>. In this <code>app</code> state we can define the default content for our header and footer regions. Then if we make every other page in the application a nested view under the <code>app</code> by using the dot syntax for example <code>app.campaigns</code>. Notice we only need to replace the <code>content</code> region (<code>ui-view='content'</code>) unless we need to change the header or footer because these views are nested under the default app state.

<h3>State names</h3>

The most difficult concept to grasp in the code above is the state
name syntax with the <code>@</code> in the middle. The syntax for the state name can be explained as follows:

Two questions need to be answered when writing a state-name:

<ol>
    <li>What is the name of the view (region) I want to replace with my template when this route is requested: view-name? More specifically, this is the value of the ui-view attribute directives. Here are some examples of ui-view directives and their corresponding view-name:
<ul>
    <li><code>ui-view='content'</code> = content</li>
    <li><code>ui-view='header'</code> = header</li>
    <li><code>ui-view='footer'</code> = footer</li>
</ul>
</li>
    <li>Where can I find the ui-view with that view-name?
<ul>
    <li>this location is not expressed as a templateUrl but instead as the state that contains that template</li>
    <li>when the template ui-view with the view-name is in the application shell template (index.html) because index.html is not defined in any state you should leave name the state as empty string (”) or nothing</li>
</ul>
</li>
</ol>

Putting this together, the syntax is <code>question1@question2</code> or more specifically <code>view-name@state-name</code>.

So if you need to find the content view-name in index.html it would be:
<code>'content@'</code>

<ul>
    <li>See the second bullet under #2 about leaving the state blank when the view-name is in the shell page (index.html).</li>
</ul>

If you need to find the content view-name in subscribers.html it would be:
<code>'detail@app.subscribers'</code>

<div class="clearfix"></div>

<h4>Application Shell (index.html)</h4>

The shell page doesn’t change from the previous example and simply defines named views for each region of the page: header, footer, and content.

<h4>Views/Templates</h4>

<h4>Header (partials/header.html)</h4>

The header has updated <code>ui-sref</code> references to the nested states for example <code>.campaigns</code>with the period not <code>campaigns</code>. Note the parent state is inferred when we say <code>.campaigns</code>.

<code>

<div class="ul">
    <li><a ng-href="/">Home</a></li>    
    <li ui-sref-active="active"><a ui-sref=".dashboard">Dashboard</a></li>
    <li ui-sref-active="active"><a ui-sref=".campaigns">Campaigns</a></li>
    <li ui-sref-active="active"><a ui-sref=".subscribers">Subscribers</a></li>
</div>

</code>

<div class="wp_syntax">
<table>
<tbody>
<tr>
<td class="code">
<pre class="html4strict">&lt;div class="ul"&gt;
    &lt;li&gt;&lt;a ng-href="/"&gt;Home&lt;/a&gt;&lt;/li&gt;    
    &lt;li ui-sref-active="active"&gt;&lt;a ui-sref=".dashboard"&gt;Dashboard&lt;/a&gt;&lt;/li&gt;
    &lt;li ui-sref-active="active"&gt;&lt;a ui-sref=".campaigns"&gt;Campaigns&lt;/a&gt;&lt;/li&gt;
    &lt;li ui-sref-active="active"&gt;&lt;a ui-sref=".subscribers"&gt;Subscribers&lt;/a&gt;&lt;/li&gt;
&lt;/div&gt;</pre>
</td>
</tr>
</tbody>
</table>
</div>

Below are the other new subscriber templates in the example.

<h4>partials/subscribers.html</h4>

<div class="wp_syntax">
<table>
<tbody>
<tr class="alt-table-row">
<td class="code">
<pre class="html4strict">&lt;h2&gt;Subscribers&lt;/h2&gt;
 
&lt;ul&gt;
    &lt;li ng-repeat="subscriber in subscribers"&gt;
 
        &lt;a ui-sref=".detail({id: subscriber.id})" &gt; {{subscriber.name}}&lt;/a&gt;
        {{subscriber.email}}
    &lt;/li&gt;
&lt;/ul&gt;
 
&lt;div ui-view="detail"&gt;&lt;/div&gt;</pre>
</td>
</tr>
</tbody>
</table>
</div>

<h4>partials/subscriber-detail.html</h4>

<div class="wp_syntax">
<table>
<tbody>
<tr>
<td class="code">
<pre class="html4strict">{{selected.description}}</pre>
</td>
</tr>
</tbody>
</table>
</div>

<h3>Conclusion</h3>

The syntax for the state names is difficult to grasp but the benefits of having a robust router which allows you to compose your user interface from well encapsulated view/controller pairs is worth it in my mind. So please feel free to take the last example as a starting point for the shell of your application and run with it to build an amazing and much more maintainable application. Let me know if you are or are not already using the UI-Router and what other questions you have about it.";s:10:"post_title";s:72:"UI-Router: Why many developers don’t use AngularJS’s built-in router";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:65:"ui-router-why-many-developers-dont-use-angularjss-built-in-router";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-10-08 07:10:00";s:17:"post_modified_gmt";s:19:"2015-10-08 07:10:00";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:26:"http://scriptsvn.com/?p=55";s:10:"menu_order";s:2:"18";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}}s:8:"col_info";a:23:{i:0;O:8:"stdClass":13:{s:4:"name";s:2:"ID";s:7:"orgname";s:2:"ID";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:2;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:49699;s:4:"type";i:8;s:8:"decimals";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:11:"post_author";s:7:"orgname";s:11:"post_author";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:49193;s:4:"type";i:8;s:8:"decimals";i:0;}i:2;O:8:"stdClass":13:{s:4:"name";s:9:"post_date";s:7:"orgname";s:9:"post_date";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:16513;s:4:"type";i:12;s:8:"decimals";i:0;}i:3;O:8:"stdClass":13:{s:4:"name";s:13:"post_date_gmt";s:7:"orgname";s:13:"post_date_gmt";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:129;s:4:"type";i:12;s:8:"decimals";i:0;}i:4;O:8:"stdClass":13:{s:4:"name";s:12:"post_content";s:7:"orgname";s:12:"post_content";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:32432;s:6:"length";i:4294967295;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:5;O:8:"stdClass":13:{s:4:"name";s:10:"post_title";s:7:"orgname";s:10:"post_title";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:72;s:6:"length";i:262140;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:6;O:8:"stdClass":13:{s:4:"name";s:12:"post_excerpt";s:7:"orgname";s:12:"post_excerpt";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:262140;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:7;O:8:"stdClass":13:{s:4:"name";s:11:"post_status";s:7:"orgname";s:11:"post_status";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:7;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:16385;s:4:"type";i:253;s:8:"decimals";i:0;}i:8;O:8:"stdClass":13:{s:4:"name";s:14:"comment_status";s:7:"orgname";s:14:"comment_status";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:4;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:9;O:8:"stdClass":13:{s:4:"name";s:11:"ping_status";s:7:"orgname";s:11:"ping_status";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:4;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:10;O:8:"stdClass":13:{s:4:"name";s:13:"post_password";s:7:"orgname";s:13:"post_password";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:11;O:8:"stdClass":13:{s:4:"name";s:9:"post_name";s:7:"orgname";s:9:"post_name";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:65;s:6:"length";i:800;s:9:"charsetnr";i:45;s:5:"flags";i:16393;s:4:"type";i:253;s:8:"decimals";i:0;}i:12;O:8:"stdClass":13:{s:4:"name";s:7:"to_ping";s:7:"orgname";s:7:"to_ping";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:262140;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:13;O:8:"stdClass":13:{s:4:"name";s:6:"pinged";s:7:"orgname";s:6:"pinged";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:262140;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:14;O:8:"stdClass":13:{s:4:"name";s:13:"post_modified";s:7:"orgname";s:13:"post_modified";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:129;s:4:"type";i:12;s:8:"decimals";i:0;}i:15;O:8:"stdClass":13:{s:4:"name";s:17:"post_modified_gmt";s:7:"orgname";s:17:"post_modified_gmt";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:129;s:4:"type";i:12;s:8:"decimals";i:0;}i:16;O:8:"stdClass":13:{s:4:"name";s:21:"post_content_filtered";s:7:"orgname";s:21:"post_content_filtered";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:4294967295;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:17;O:8:"stdClass":13:{s:4:"name";s:11:"post_parent";s:7:"orgname";s:11:"post_parent";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:49193;s:4:"type";i:8;s:8:"decimals";i:0;}i:18;O:8:"stdClass":13:{s:4:"name";s:4:"guid";s:7:"orgname";s:4:"guid";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:26;s:6:"length";i:1020;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:19;O:8:"stdClass":13:{s:4:"name";s:10:"menu_order";s:7:"orgname";s:10:"menu_order";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:2;s:6:"length";i:11;s:9:"charsetnr";i:63;s:5:"flags";i:32769;s:4:"type";i:3;s:8:"decimals";i:0;}i:20;O:8:"stdClass":13:{s:4:"name";s:9:"post_type";s:7:"orgname";s:9:"post_type";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:4;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:16393;s:4:"type";i:253;s:8:"decimals";i:0;}i:21;O:8:"stdClass":13:{s:4:"name";s:14:"post_mime_type";s:7:"orgname";s:14:"post_mime_type";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:400;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:22;O:8:"stdClass":13:{s:4:"name";s:13:"comment_count";s:7:"orgname";s:13:"comment_count";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:32769;s:4:"type";i:8;s:8:"decimals";i:0;}}s:8:"num_rows";i:1;s:10:"return_val";i:1;}