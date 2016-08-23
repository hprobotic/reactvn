��W<?php exit; ?>a:1:{s:7:"content";O:8:"stdClass":23:{s:2:"ID";s:3:"371";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2016-02-23 02:19:15";s:13:"post_date_gmt";s:19:"2016-02-23 02:19:15";s:12:"post_content";s:7472:"In SitePoint’s forums I stumbled across a thread entitled So Many Frameworks where Guido, confused at the sheer number of options available, was asking which JavaScript framework he should adopt to make his application more dynamic. Given what I’ve been seeing in the industry and having used it myself, I stated that React had already won the client-side war. Fighting words like those need a bit more explaining, so here goes.

React is not just the hot new kid on the block, but a unifying paradigm. It can serve as a foundational technology for web applications that we can build on top of with confidence, knowing that it will not be replaced next month by its hotter cousin. Let’s take a look at React’s place among the current crop of MVC frameworks, exploring its strengths and ending with a prediction about where JavaScript development is headed in the future.

<h3>Client-Side MVC</h3>

For the past few years many smart people have been trying to build the perfect framework for making single-page apps — applications rendered by JavaScript which have improved perceived performance by responding instantly to user input and data changes over time. Guillermo Rauch’s article 7 Principles of Rich Web Applications is one of the best rationales for why this is important and the things we should consider when building them.

You can find examples of how these types of applications are built at TodoMVC, as the name suggests they have traditionally been made up of Models, Views and Controllers.

React enters from left of stage

When React was first announced it looked a little odd. It focused solely on the View layer, and had no Models or Controllers. The code examples were written in a strange syntax called JSX which appeared to many like a backwards step towards Ye’ Olden Days where it was common to mix HTML and JavaScript together.

No information was given on how you should structure your application other than that of a component hierarchy — composable chunks of UI that could re-render efficiently whenever state changed. React took a few notable stances against popular ideas that existed in this space, features like two-way data binding and templating were blasted as bad ideas that are best avoided.

<h3>
Widespread Adoption</h3>

React quickly achieved critical mass. It’s hard to find JavaScript related mailing lists, conferences or meetups that don’t mention React these days. All of the local development teams in my city seem to be adopting React and contrary to other popular frameworks the verdict seems unanimous — everyone who I’ve spoken with has touted the merits of one-way data flow, component hierarchies and simple explicit renders, making the task simpler and the code more predictable.

React’s adoption has been surprising to me because of how volatile the JavaScript scene is. We rarely so broadly agree on anything. There are pockets of people loyal to one framework but most of us have jumped from framework to framework getting frustrated along the way with certain patterns that introduce complexity and bugs. I haven’t yet heard of a single case of people moving away from React due to these frustrations, not since jQuery has it seemed like we have had such a clear winner out in front.

<h3>You Had One Job React, One Job.</h3>

Its focus on the view layer means that it’s considerably less opinionated than other frameworks that attempt to solve every problem. Its wafer thin API means that there’s really not much to learn and it doesn’t warrant more than a handful of pages of documentation. This is a great help to those learning and it makes development simpler too, as you don’t have much cognitive overhead. Wherever possible, React opts for plain JavaScript constructs and language features rather than custom APIs or templating languages.

This design is also attractive to JavaScript developers who seem to favor focused utility libraries such as Underscore and Moment which do one thing well, very much the Unix philosophy. Doing one thing well has also allowed room for people interested in the project to contribute their own pieces to the React ecosystem. As a result of this projects like React Router, Redux and CSS Modules have arisen.

<h3>React Components Are Simple</h3>

Components are responsible for small isolated chunks of UI, they accept data and render consistently, every time. Front-end developers, back-end developers and designers can easily understand and contribute to components because they look like HTML and the minimal API footprint means that you can learn what you need to know about components in a day and start contributing right away.

<h3>Server Rendered HTML</h3>

React makes server-side rendering trivial because components can be thought of as functions that take data and return HTML. This design makes it easy to integrate server-side rendering into any server-side programming language or framework.

In the early days of client-side MVC we broke the web with things like hashbang routing and huge loading times before anything made its way to the screen. We also broke search engine crawlers by rendering everything with JavaScript when the page had loaded. Since then we’ve learned from our mistakes and are taking these core tenets of the web seriously again — URLs, server rendered HTML and fast load times. React shines here where other frameworks have struggled.

<h3>DOM Updates Are Messy</h3>

Backbone was an important milestone for JavaScript. As the first and most prominent effort to bring MVC to the client-side, it showed us a new way that we could structure our applications. One of the first things it mentioned in its documentation is that it’s a bad idea to maintain your state in the DOM. When the DOM remains the source of truth your app quickly becomes brittle and hard to follow. It becomes impossible to know which piece of code changed which element. Backbone encouraged an ideal of always re-rendering views based on the current state of the world, React enforces this same idea with it’s pattern of one-way data flow.

React components don’t define the transition between states. Instead, they explicitly render the view based on their current state, completely eliminating this task of manually tweaking the DOM. Its one-way data flow prevents the DOM from being the source of truth.

Admittedly, this makes certain tasks such as animation more difficult because those are cases where you do want to define transitions between states. For the vast majority of cases though, it’s much simpler to only concern yourself with the final state of how the component should be rendered.

<h3>The Future</h3>

React will continue to grow in popularity and we’ll see more supporting tools and projects. As the ecosystem around React matures, the library may change but the core ideas of one-way data flow, component hierarchies, explicit renders and virtual DOM reconciliation will live on.

React Native has shown how a simple view layer can be re-purposed to construct other types of UI as well. There’s been a shift in the industry towards this pattern of building UI’s and it’s not going away any time soon.

In short, React has won and the future is bright.

<h3>Thoughts?</h3>

Do you agree that the principles of React will live on, or will we find a better idea next month?
Have you started using React? What are your thoughts so far?
Be sure to let me know in the comments below.";s:10:"post_title";s:56:"Client-Side War: ReactJS take down Angular JS & Ember JS";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:53:"client-side-war-reactjs-take-down-angular-js-ember-js";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2016-02-23 02:19:15";s:17:"post_modified_gmt";s:19:"2016-02-23 02:19:15";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:27:"http://scriptsvn.com/?p=371";s:10:"menu_order";s:1:"4";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}}