~�W<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:95:"SELECT reactvn_posts.* FROM reactvn_posts WHERE ID IN (471,460,450,423,414,406,391,377,371,360)";s:11:"last_result";a:10:{i:0;O:8:"stdClass":23:{s:2:"ID";s:3:"360";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2016-02-22 16:24:54";s:13:"post_date_gmt";s:19:"2016-02-22 16:24:54";s:12:"post_content";s:9124:"<h2>The Problem with Data Fetching in React</h2>

As React has grown in popularity, the scale and complexity of the projects built with React has grown along with it. React is primarily a view layer library. This has caused some teams to hit unknown territory or limitations while building projects that require a different infrastructure. Facebook has been proactive in offering support and guidance during these growing pains.

<h3>Flux</h3>

One of the early growing pains for developers using React was event handling. Facebook responded to this issue by publishing Flux, which is an abstract pattern that encouraged unidirectional data flow for handling events in React.

I’ll assume some familiarity with Flux, so I won’t discuss the details of it in this article. In case you aren’t familiar with this topic, you can give a reading to this article by Sandeep Panda or take a look at this page about Flux.

Flux has taken the React ecosystem to the next level. As developers started to get more familiar with Flux, some issues emerged. Flux has been great for managing data as application state, but populating the initial state into an application has been a source of friction.

There are several challenges surrounding Flux’s data initialization. Do stores call the server and populate themselves? Do we use rehydrate methods from the dispatcher? Do we call a bunch of actions on the server to populate the stores? How do we do this asynchronously and load all our data on the server in an isomorphic app before returning a response?

<h2>What Is Relay?</h2>

Relay is a new React Data fetching framework published by Facebook. Relay aims to provide a clear solution to all of these data-fetching problems.

Relay has a few main selling points:

<ul>
    <li>Declarative: This is also a main feature of React. Relay leverage a declarative code style definition for data dependencies, which is very similar to how view components are defined. This is a refreshing change from traditional imperative data-fetching APIs.</li>

    <li>Collocation: Data dependency definitions live alongside component definitions, which makes it much easier to reason about what data a UI component requires to render. This makes troubleshooting a project’s code a lot easier. Looking at a file that contains a React component definition, it’s immediately obvious what data it needs to function.</li>

    <li>Mutations: Mutations enable an experience of seamless modification to data which a React view is subscribed to and also populates those modifications to the data persistence layer.</li>
</ul>

<h3>Relay vs Flux</h3>

Flux is an abstract idea whereas Relay is an implementation inspired by that idea. Relay is built on the concepts of Flux and has the same concepts of dispatcher, actions, and stores, but they are represented a bit differently. Relay has a new concept called ‘Higher Order Components’ and we’ll expand on this topic in the remainder of the article.

At this stage, it’s still unclear if Relay will replace or coincide with existing Flux implementations. For example, Redux, a popular Flux implementation, also leverage ‘Higher Order Components’. Trying to use both Redux and Relay will cause a conflict over which framework is bound to a UI component. There is currently an ongoing discussion regarding Redux’s relationship with Relay.

<h2>Higher Order Components</h2>

Higher Order components or HOCs are defined in the same way as regular React components. HOCs wrap child UI components. The HOC will execute its queries and then render the child UI component, passing the query data in as props. The Flux flow is now managed by the HOC and the latter will act as a dispatcher. It has methods like setQueryParams() that can be considered as a Flux action. Calling <code>setQueryParams()</code> triggers the Flux flow. The queries defined in the HOC are updated, new data is fetched and the data is persisted in the HOC. The HOC is acting as a Flux store by persisting this data.

Below is a simplified example of a ProfilePicture component and a complimentary HOC. Imagine that we have ProfilePicture defined to render user avatars throughout our project. We need to fetch the data to display the user avatar. We then create a Relay HOC to query the user profile pictures from a database. The HOC passes this query data to the child ProfilePicture component:

<pre class="line-numbers language-javascript"><code class='language-javascript'>class ProfilePicture extends React.Component {
  // A standard Profile Picture component
}

// This is our Higher Order Component. It fetches the data to pass
// as props to Profile Picture
module.exports = Relay.createContainer(ProfilePicture, {
  fragments: {
    user: () => Relay.QL`
      fragment on User {
        profilePicture(size: $size) {
          uri,
        },
      }
    `,
  },
});</code></pre>

Our ProfilePicture component will then get some new local functions passed in as props. This essentially is how Relay triggers the Flux flow. The component calls these Relay prop functions, which is equivalent to a Flux action call. This causes Relay to fetch the latest data requested. Once done it populates its internal store and passes that down to the HOC’s child view component as props.

<h2>GraphQL</h2>

The above example may look a bit strange, particularly this part:

<pre class="line-numbers language-javascript"><code class='language-javascript'>Relay.QL`
      fragment on User {
        profilePicture(size: $size) {
          uri,
        },
      }
    `,</code></pre>

Much of the magic behind Relay is powered by GraphQL. GraphQL is a new query language from Facebook that specializes in operating on graph data structures. Discussing GraphQL in depth is outside the scope of this article, however you can deepen this topic by reading the Relay documentation which covers it. An existing project will not be set up to work with GraphQL right out of the box. The first recommended steps to getting started with Relay are:

<ul>
<li>Create a GraphQL Schema</li>
<li>Create a GraphQL Server</li>
</ul>

It should be noted that it may take a considerable amount of work to convert an existing project to a GraphQL Schema and set up or modify an existing server to be GraphQL-friendly. When starting a project from scratch, it might make more sense to use Relay immediately. Facebook provides a Relay Starter Kit that looks like a great solution for getting up and running with Relay and GraphQL on a new project.

<h2>Relay Without GraphQL</h2>

With all of the extra overhead required to set up GraphQL, Facebook’s Relay might not be the right tool for existing projects. Luckily, there is another Relay-inspired library out there that may be a better fit for these projects called react-transmit. react-transmit is an open source project that aims to be a “Relay-inspired library based on Promises instead of GraphQL.”

If we update the profile example from above to use react-trasmit then we have the following code:

<pre class="line-numbers language-javascript"><code class='language-javascript'>// Import Transmit
import Transmit from "react-transmit";

class ProfilePicture extends React.Component {
  // A standard Profile Picture component
}

// This is our Higher Order Component. It fetches the data to pass
// as props to Profile Picture
Transmit.createContainer(ProfilePicture, {
  fragments: {
    user: (userId) => {
      return new Promise(function(resolve, reject) { 
          // Do some Ajax here and resolve the promise
      });
    }
  },
});</code></pre>

The react-transmit example looks very similar to the Relay example. However, in this instance the user fragment is now a function that returns a Promise instead of a GraphQL query.

<h2>Current State of Relay</h2>

Facebook has released an open source “technical preview” of Relay. They have some great examples in the repository that show how to work with Relay and a very detailed documentation section.

It doesn’t seem that Relay is suitable for isomorphic applications at this time. There is no way to tell Relay to wait until all of the data dependencies have been loaded before rendering its child view, something that is needed on the server. In case you’re interested, there is an ongoing discussion regarding how Relay will work on the server. At the moment, this is a pattern that react-transmit is more suited to at the current time.

As for Relay’s future, its roadmap aims to provide a few key features soon:

Adapters for other data storage types so there is no hard dependency on GraphQL.
Better isomorphic support, as discussed earlier.

<h2>Conclusions</h2>

In this article, we’ve discussed a new React complementary framework called Relay. Relay is built on some of the same concepts of Flux and powered by GraphQL. As I mentioned, Relay might not be a good choice for already existing projects. However, this framework is quite new and I expect it to become better and better at every release.

Now, it’s your turn. Did you know Relay? Have you ever adopted it in one of your projects?";s:10:"post_title";s:30:"React Data Fetching with Relay";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:30:"react-data-fetching-with-relay";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2016-02-22 16:24:54";s:17:"post_modified_gmt";s:19:"2016-02-22 16:24:54";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:27:"http://scriptsvn.com/?p=360";s:10:"menu_order";s:1:"5";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"1";}i:1;O:8:"stdClass":23:{s:2:"ID";s:3:"371";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2016-02-23 02:19:15";s:13:"post_date_gmt";s:19:"2016-02-23 02:19:15";s:12:"post_content";s:7472:"In SitePoint’s forums I stumbled across a thread entitled So Many Frameworks where Guido, confused at the sheer number of options available, was asking which JavaScript framework he should adopt to make his application more dynamic. Given what I’ve been seeing in the industry and having used it myself, I stated that React had already won the client-side war. Fighting words like those need a bit more explaining, so here goes.

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
Be sure to let me know in the comments below.";s:10:"post_title";s:56:"Client-Side War: ReactJS take down Angular JS & Ember JS";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:53:"client-side-war-reactjs-take-down-angular-js-ember-js";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2016-02-23 02:19:15";s:17:"post_modified_gmt";s:19:"2016-02-23 02:19:15";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:27:"http://scriptsvn.com/?p=371";s:10:"menu_order";s:1:"4";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}i:2;O:8:"stdClass":23:{s:2:"ID";s:3:"377";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2016-02-23 09:28:51";s:13:"post_date_gmt";s:19:"2016-02-23 09:28:51";s:12:"post_content";s:4178:"React Native is a collection of JavaScript and Objective-C code plus supporting tools that allow to create, run, and debug native iOS applications.
In order to reach the point where we can actually start working on our first React Native application, some preparation is necessary.
On your development machine, the following components need to be made available:
<ul>
 	<li>Homebrew</li>
 	<li>io.js</li>
 	<li>Watchman</li>
 	<li>Google Chrome</li>
 	<li>React Native CLI</li>
</ul>
<h3>Installing Homebrew</h3>
<em>Homebrew</em> is a package manager for Mac OSX. We will use it to subsequently install most of the software tools we need.
In order to install and set up Homebrew, open a Terminal shell window and run the following command:
<pre class="line-numbers language-markup"><code>ruby -e "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install)"</code></pre>
For further information, visit the Homebrew homepage at <a href="http://brew.sh" target="_blank">http://brew.sh</a>
<h3>Installing io.js</h3>
<em>io.js</em> is a moderm fork of Node.js, the popular server-side JavaScript runtime enviroment. React Native ships with some helper tools that are written for io.js. Also, we will regularly use the Node.js/io.js package manager, <code>NPM</code>, to install the React Native command line tool and other dependencies
We are not going to install io.js directly. Instead, wee will use Homebrew to install nvm, the Node Version Manager.
<code>nvm</code> is a nifty little tool that takes the hassle out of managing parallel installs of different versions of Node.js and/or io.js. With it, you can install as many versions of Node.js and io.js as you wish, and quickly switch to the version you want to actually use for a given project.
In order to install and set up <code>nvm</code>, open a Terminal window and run the following command:
<pre class="line-numbers language-markup"><code>brew install nvm</code></pre>
After install completed, create or open file $HOME/.bashrc, and add the following lines at the begining:
<pre class="line-numbers language-bash"><code class="language-bash">export NVM_DIR=~/.nvm
source $(brew --prefix nvm)/nvm.sh</code></pre>
Restart terminal and you now have <code>nvm</code> enabled in your Terminal session. Using nvm, we can now install io.js, follow this commands:
<pre class="line-numbers language-bash"><code class="language-bash">nvm install iojs
nvm alias default iojs</code></pre>
This commands will install and setup the most recent stable version of io.js, plus the maching version of <code>npm</code>, the Node Package Manager, and make this setup the default.
<h3>Installing Watchman</h3>
React Native uses Watchman to monitor and react to changes in source code files. This is explained more detail in a next post.

In order to install and setup Watch man, open a Terminal window and run the following command:
<pre class="line-numbers language-markup"><code>brew install --HEAD watchman</code></pre>
<h3>Install Google Chrome</h3>
Google Chrome isn't strictly necessary to create applications with React Native, but it allows to debug them during development. The details are explained in a next post.
Head over to <a href="https://www.google.com/chrome/browser/desktop/index.html">Chrome Desktop</a> to download the latest version.
<h3>Install the React Native CLI</h3>
The React Native Command Line Interface (CLI) is a small io.js helper script that allows to setup new React Native projects.
In order to install and setup React Native CLI, open a Terminal window and run the following command:
<pre class="line-numbers language-markup"><code>npm install -g react-native-cli</code></pre>
<em>(Sometimes we need use sudo for solve some permission error)</em>
With this, we are good to go to create our first application.
<blockquote>You might also want to install IDE. While Xcode is part of our development environment, it's certainly not the most well-suited JavaScript editor out there. Check out some our good IDE: Atom (<a href="http://atom.io">http://atom.io</a>), IntellJIDE CE (<a href="http:jetbrains.com">http:jetbrains.com</a>)</blockquote>";s:10:"post_title";s:46:"React Native#1 - Setup development evirontment";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:43:"react-native1-setup-development-evirontment";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2016-08-01 09:04:07";s:17:"post_modified_gmt";s:19:"2016-08-01 09:04:07";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:27:"http://scriptsvn.com/?p=377";s:10:"menu_order";s:1:"2";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"1";}i:3;O:8:"stdClass":23:{s:2:"ID";s:3:"391";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2016-02-24 02:35:51";s:13:"post_date_gmt";s:19:"2016-02-24 02:35:51";s:12:"post_content";s:7321:"In this article, we will create a very simple application and make it run in the iOS simulator. By doing so, we are using a whole lot of different components that in total allow use to end up with a working app. Once our app runs, we will look under the hood in order to understand all those components and get a feeling for the inner workings of React Native applications. These insights form the basis that allows us to build more complex applications while truly understanding what we are doing.
<h2>Creating the app structure</h2>
Open a new Terminal window. On the command prompt, type the following and hit enter:
<pre class="line-numbers language-markup"><code>react-native init HelloWorld</code></pre>
This result in some work being done which gives you a new folder named <code>HelloWord</code>. We will analyze its contents later - for now, we want to get our feet wet as quickly as possible.
<h2>Start the app</h2>
Start Xcode®, choose <code>File ▶ Open…</code> from the menu bar, navigate to the <code>HelloWorld</code> folder, and open
file <code>HelloWorld.xcodeproj.</code>
Then, choose <code>Product ▶ Destination</code> from the menu bar, and from the list beneath <code>iOS Simulator,
</code>choose <code>iPhone 6.</code>
Now, hit <code>⌘-R </code>in order to build and run the application. This will open two new windows: a terminal
window that talks about the <em>React packager,</em> and the iOS simulator which shows a visually rather
unimpressive app that greets you with a <code>Welcome to React Native! </code>message.
<blockquote>In case you get an ugly red error screen in the iOS Simulator that says Could not connect to
development server, then proceed as follows: - Switch to a Terminal window - cd to the root folder
of the Hello World project - Run npm start and keep the Terminal open</blockquote>
An awful lot of very interesting things just happened in order to display this simulator screen, and
dissecting all the components involved and analyzing all the ways these components interact with
each other will be a very exciting trip down the rabbit hole that is React Native - but, not yet. First
the doing, then the explanations.
<h2>Working on the Code</h2>
As said, a lot of different components are involved that make up our application, but front and
center is the JavaScript code that defines and manages the user interface of our app - after all, the
central idea behind React Native is the ability to write native apps with JavaScript. So let’s look at
the JavaScript behind HelloWorld.
Fire up the editor or IDE you decided to use and point it at the HelloWorld folder you created. In it,
you will find a file named index.ios.js which you need to open in your editor.
<blockquote>In Xcode®, you probably saw a file named main.jsbundle. For now, this is <strong>not</strong> what we are looking
for.</blockquote>
It’s immediately obvious that this is the file behind the UI we see in the simulator:
<pre class="line-numbers language-javascript"><code class="language-javascript">/**
 * Sample React Native App
 * https://github.com/facebook/react-native
 */
'use strict';
import React, {
  AppRegistry,
  Component,
  StyleSheet,
  Text,
  View
} from 'react-native';

class HelloWord extends Component {
  render() {
    return (
      
        
          Welcome to React Native!
        
        
          To get started, edit index.ios.js
        
        
          Press Cmd+R to reload,{'n'}
          Cmd+D or shake for dev menu
        
      
    );
  }
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    justifyContent: 'center',
    alignItems: 'center',
    backgroundColor: '#F5FCFF',
  },
  welcome: {
    fontSize: 20,
    textAlign: 'center',
    margin: 10,
  },
  instructions: {
    textAlign: 'center',
    color: '#333333',
    marginBottom: 5,
  },
});

AppRegistry.registerComponent('HelloWord', () =&gt; HelloWord);
</code></pre>
Clearly, this is JavaScript code, but if you haven’t followed the latest developments in the JS world or if you did not yet play around with the “normal” React framework, then some parts of this code might look a bit odd. Not that this should stop us from fiddling around!
Change line 19 from
<pre class="line-numbers language-markup"><code>Welcome to React Native!</code></pre>
to
<pre class="line-numbers language-markup"><code>Howdy World</code></pre>
Then switch back to the iOS Simulator window and hit <strong>⌘-R</strong>. The UI of our app will refresh and display the new text.
Now, if you heaven't done any native iOS app development before, hitting <em>Refresh</em> and seeing the changes you did to the code reflected in the Simulator probably doesn't feel like a big deal, but it actually is. The same procedure for an Objective-C or Swift based application involves a recompilation of the changed source code and a rebuild of the application that is then completely restarted in the Simulator. That doesn't only sound like it takes longer, it does take longer.
Once again, the explanation for why and how this "refresh" workflow actually works will follow later.
It would be great if we could make our app do something. Let's try to add a text input field for entering a name and change the behaviour of our app in a way that makes it greet the name we enter - if this doesn't secure us the #1 spot in Appstore charts, then I don't know what will.

What we need in order to achieve this functionality is:
a) An additional UI element plus styling that allows to input text
b) A function that handles the text that is input
c) A way to output the input text within the greet text element.
After that, the result should look like this:

<a href="https://scriptsvn.com/wp-content/uploads/2016/02/Screenshot-2016-02-24-14.34.29.png" rel="attachment wp-att-404"><img src="http://scriptsvn.com/wp-content/uploads/2016/02/Screenshot-2016-02-24-14.34.29.png" alt="React-native-helloworld" /></a>
Here is final code in index.ios.js that is needed:
<pre class="line-numbers language-javascript"><code class="language-javascript">/**
 * Sample React Native App
 * https://github.com/facebook/react-native
 */
'use strict';
import React, {
  AppRegistry,
  Component,
  StyleSheet,
  Text,
  TextInput,
  View,
} from 'react-native';

var HelloWord = React.createClass ({
  getInitialState: function() {
    return {name: 'Scripter'};
  },
  onNameChanged: function(event) {
    this.setState({ name: event.nativeEvent.text })
  },
  render: function() {
    return (
      
        
        
          Howdy {this.state.name}
        
        
          To get started, edit index.ios.js
        
        
          Press Cmd+R to reload,{'n'}
          Cmd+D or shake for dev menu
        
      
    );
  }
})
const styles = StyleSheet.create({
  container: {
    flex: 1,
    justifyContent: 'center',
    alignItems: 'center',
    backgroundColor: '#F5FCFF',
  },
  welcome: {
    fontSize: 20,
    textAlign: 'center',
    margin: 10,
  },
  instructions: {
    textAlign: 'center',
    color: '#333333',
    marginBottom: 5,
  },
});

AppRegistry.registerComponent('HelloWord', () =&gt; HelloWord);
</code></pre>";s:10:"post_title";s:68:"React Native#2: Create first native iOS application use React Native";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:66:"react-native2-create-first-native-ios-application-use-react-native";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2016-08-01 09:05:04";s:17:"post_modified_gmt";s:19:"2016-08-01 09:05:04";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"https://scriptsvn.com/?p=391";s:10:"menu_order";s:1:"3";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"1";}i:4;O:8:"stdClass":23:{s:2:"ID";s:3:"406";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2016-02-24 08:12:46";s:13:"post_date_gmt";s:19:"2016-02-24 08:12:46";s:12:"post_content";s:0:"";s:10:"post_title";s:51:"React Native#3: React Native architecture explained";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:49:"react-native3-react-native-architecture-explained";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2016-08-01 09:03:10";s:17:"post_modified_gmt";s:19:"2016-08-01 09:03:10";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"https://scriptsvn.com/?p=406";s:10:"menu_order";s:1:"1";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}i:5;O:8:"stdClass":23:{s:2:"ID";s:3:"414";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2016-04-26 17:20:46";s:13:"post_date_gmt";s:19:"2016-04-26 17:20:46";s:12:"post_content";s:2261:"<h2>Description</h2>
Build the application interface using Interface Builder, and learn how to adjust interface elements with the Size Inspector and Auto Layout constraints.
<h1>Learning Outcomes</h1>
<ul>
 	<li>Describe the Model-View-Controller pattern and identify the view and controller in an Xcode project.</li>
 	<li>Analyze a user interface and subdivide it into components.</li>
 	<li>Assemble an iOS app interface using Interface Builder.</li>
 	<li>Use Auto Layout constraints to position multiple interface elements.</li>
 	<li>Experiment with Interface Builder previews.</li>
</ul>
<h1>Opening</h1>
Once we have a clear idea for an app, how do we start building the user interface?
<h1>Agenda</h1>
<ul>
 	<li>Present the concepts of Model-View-Controller, focusing on views and view controllers, and how they work together to presnet the UI of an iOS app.</li>
 	<li>With Interface Builder, use the Object Library (⌥⌘L) to add a Label for displaying the elapsed time, and change its contents to 00:00.0</li>
 	<li>Use the attributes Inspector() and Size Inspector to adjust the Label position, size, color and typeface.</li>
 	<li>Add constraints to the Label by Control-dragging upwards from the Label to the main view, add selecting Center Horizontally in Container to create a Center X Alignment constraint. Use the Pin tool to create a top Vertical Space constraint.</li>
 	<li>Resolve any constraint issue using the menu item Editor&gt; Resolve Auto Layout Issues &gt; Update Frames (Command + shift + =)</li>
 	<li>Use the Object Library (Command + Shift + L) again to add two Buttons, labeled Start and Stop, to the main view. Adjust their size and position with the Size Inspector (Command + Shift + 5).</li>
 	<li>Add a Center Y Aligment constraint to the Buttons by Control-dragging from the Start button to the Stop button, and select Center Y. Add a Vertical Space constraint by Control-dragging downward from the Start button to the main view, and selecting Bottom Space to Bottom Layout Guide.</li>
 	<li>Add Center X Aligment constraints to both buttons by select them both together(Command + Click), and using the Align tool to select Horizontal Center in Container and Use Current Canvas Value.</li>
</ul>";s:10:"post_title";s:18:"Stopwatch Lesson 1";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:18:"stopwatch-lesson-1";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2016-08-01 09:03:04";s:17:"post_modified_gmt";s:19:"2016-08-01 09:03:04";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"https://scriptsvn.com/?p=414";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}i:6;O:8:"stdClass":23:{s:2:"ID";s:3:"423";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2016-05-15 08:44:10";s:13:"post_date_gmt";s:19:"2016-05-15 08:44:10";s:12:"post_content";s:13268:"Các thiết kế mẫu có thể coi là các chính sách bảo hiểm cho việc phát triển phầm mềm. Các chính sách bảo hiểm hoạt động bằng cách trao đổi một phần nhỏ chi phí trong hiện tại để tránh việc tiêu tốn nhiều chi phí hơn cho các rủi ro có thể phát sinh trong tương lai. Ví dụ, những khoản bản chi trả cho bảo hiểm để phòng trường hợp chiếc xe bị đánh cắp, tiêu một vài phần trăm giá trị của chiếc xe, nhưng khi chiếc xe bị đánh cắp, thì tổng thiệt hại của bạn sẽ được giảm thiểu tối đa. Bạn vẫn gặp phải phiền phức vì chiếc xe đã bị đánh cắp, nhưng ít nhất thì bạn cũng sẽ không phải chịu thêm các mất mát tài chính - điều này có phải là rất tốt phải không?.

Trong phát triển phần mềm, các thiết kế mẫu là sự đảm bảo chống lại việc bạn sẽ phải tiêu tốn rất rất nhiều thời gian để giải quyết các vấn đề. Cái mà bạn phải chi trả (cho chế độ bảo hiểm này) là phải bỏ ra thêm thời gian để làm cho code của bạn thực sự mềm dẻo ngay bây giờ, và tất nhiên trong tương lai, thứ mà bạn nhận lại đó sẽ là tránh được đau đớn cũng như tiết kiệm thời gian trong quá trình tái sử dụng hoặc thay đổi cách mà phần mềm sẽ hoạt động. Giống như bảo hiểm thật sự, bạn có thể sẽ không nhận được bất cứ lợi ích nào cả nếu như ứng dụng hoạt động hoàn hảo và chẳng có vấn đề gì sảy ra, nhưng bạn biết đấy trong phát triển phần mềm, thật hiếm khi một ứng dụng có thể hoạt động hoàn hảo trong suốt vòng đời của nó, sẽ luôn có những vấn đề phát sinh mà bạn chẳng thể đoán định được. Do đó việc đầu tư vào việc tối ưu mã luôn là một đầu tư xứng đáng

Đây là một se-ri dành cho những nhà lập trình chuyên nghiệp. Tôi tập trung vào xây dựng các ứng dụng đáp ứng các thiết kế mẫu và tập trung vào những đoạn mã mẫu thay cho việc trìu tượng hóa chúng thông qua các mô tả. Tôi diễn giải điều quan trọng nhất trong các thiết kế mẫu và thể hiện cách mà nó đã được ứng dụng vào iOS sử dụng Swift. Một số mẫu tôi giới thiệu ở đây đã được áp dụng trong các class của Cocoa framework, và tôi sẽ chỉ bạn các sử dụng chúng để tạo thêm những ứng dụng mạnh mẽ và mềm dẻo.

Bằng việc dành thời gian để hoàn thành việc theo dõi và thực hành theo se-ri này, bạn sẽ hiểu được những thiết kế mẫu quan trọng nhất trong việc phát triển phần mềm hiện đại, các vấn đề cần giải quyết, cũng như làm thế nào để ứng dụng chúng trong các dự án Swift của bạn.
<h2>Đặt các thiết kế mẫu vào đúng hoàn cảnh</h2>
Hầu hết các lập trình viên giàu kinh nghiệm đều đã có một tập hợp các quy ước, khung sườn để xây dựng một phong các viết mã của riêng họ. Những điều này là các chính sách bảo hiểm chống lại việc tái lặp lại các sai lầm của các dự án trước đó. Ví dụ, nếu bạn đã phải dành cả tuần để giải quyết một thay đổi phút 90 của cấu trúc dự liệu, thì sau đó bạn tiếp tục bạn sẽ dành thêm một chút thời gian trong các dự án sắp tới để đảm bảo rằng các thành phần phụ thuộc của cấu trúc dữ liệu không bị "hard-coded" trong ứng dụng, kể cả khi bạn không biết rằng liệu cấu trúc có cần thay đổi nữa hay không. Bạn thấy đấy, bạn chỉ phải "chi trả" một phần nhỏ ngay bây giờ để tránh những tổn thất nặng nề trong tương lai

Bạn có lẽ vẫn có những thay đổi, nhưng quá trình này sẽ dễ chịu hơn nhiều, giống như quá trình đi chọn mua một chiếc xe để thay thế sẽ dễ chịu hơn khi công ty bảo hiểm chấp nhận chi trả toàn bộ chi phí

Có hai vấn đề với cùng một chiến lược. Vấn đề đầu tiên là <em>sự mâu thuẫn</em>. Các lập trình viên với cùng các kinh nghiệm có thể sẽ có những cái nhìn khác nhau về cùng một vấn đề và sẽ không đồng thuận với giải pháp tốt nhất

Vấn đề thứ hai là các chiến lực được cung cấp bởi các kinh nghiệm cá nhân, mà có thể được kết hợp với những cảm xúc mạnh mẽ. Mô tả sự khó khăn của việc giải quyết vấn đề hiếm khi bao gồm cả những đau đớn và khổ sở mà bạn phải chịu đựng, và nó làm cho việc thuyết phục người khác xây dựng các biện pháp phòng ngừa càng thêm khó khăn. Nó cũng rất khó để trở nên khách quan trong việc đánh giá mức độ nghiêm trọng của vấn đề. Những trải nghiệm tồi tệ lại tiếp tục, và bạn có thể sẽ rất khó để tìm được sự đồng ý hỗ trợ cho việc tạo ra các thay đổi nhằm tránh các vấn đề mà bạn đã gặp phải trong các dự án trước đây.
<h2>Giới thiệu các thiết kế mẫu (Design Patterns)</h2>
Một <em>thiết kế mẫu</em> xác định một vấn đề phát triển phần mềm thông dụng và cung cấp một giải pháp để giải quyết nó, chứ không phải là các phương pháp tôi đã mô tả trước đây nhưng là nó được thể thiện khách quan, thích hợp..

Các chiến lược mà các mẫu thiết kế được môt tả để làm việc, điều đó có nghĩa là bạn có thể so sánh cách tiếp cận của riêng bạn với chúng. Và từ khi chúng có thể đảm bảo các vấn đề chung, bạn thấy rằng có nhiều mẫu giúp ích cho việc giải quyết các vấn đề của bạn mà không tốn nhiều thời gian và công sức (??)

Hầu hết các thiết kế mẫu khác trong sê-ri này được bắt nguồn từ cuốn sách có tên là "Design Patterns: Elements of Reuseable Object-Oriented Software" được viết bởi nhóm tác giả: Erich Gamma, Richard Helm, Ralp Johnson, và John Vlissides (NXB: Addison-Wesley, 1995). Các tác giả này được biết đến với tên gọi Gang of Four (GOF), và các gmẫu họ trình bày trở thành những thành phần quan trọng nhất và trở thành nền móng trong phát triển phần mềm hiện đại.

Cuốn sách của GoF rất đáng giá nhưng có phần học trong tự nhiên (The GoF book is worth reading but is somewhat academic in nature). Thiết kế các mẫu đã được trình bày trừu tượng mà không cần tham chiếu đến một ngôn ngữ lập trình hay nền tảng nào. Sự trừu tượng này làm nó khó để sử dụng; nó có thể trở nên khó khăn để tìm ra đâu là nơi một mẫu được miêu tả một vấn đề mà nó có liên quan và khó khăn để chắc chắn rằng bạn đã thực hiện đúng các giải pháp

Mục tiêu của tôi trong sê-ri này là đặt các thiết kế mẫu vào đúng hoàn cảnh và cung cấp cho bạn tất cả các thông tin bạn cần để dễ dàng nhận biết và áp dụng các mẫu bạn cần, đồng thời thực hiện nó ngay trên Swift, nhờ đó bạn có thể dễ dàng áp dụng trực tiếp vào dự án của bạn
<h2>Hiểu về Cấu trúc của một Thiết kế Mẫu</h2>
Phần lớn thiết kế mẫu áp dụng cho một nhóm nhỏ của đối tượng trong ứng dụng và giải quyết một vấn đề phát sinh khi một đối tượng-được biết đến với tên gọi là một thành phần-cần để thực hiện một hoạt động trên một hoặc nhiều đối tượng trong ứng dụng.

Dành cho mỗi thiết kế mẫu trong se-ri này. Tôi trình bày vấn đề mà mẫu giải quyết, giải thích cách mẫu hoạt động và chỉ cho bạn làm thế làm nào để ứng dụng mẫu sử dụng Swift. Tôi cũng sẽ trình bày các biến thể phổ biến và mô tả các lỗi thường gặp đối với từng mẫu.
<h2>Các thiết kế mẫu (design patterns) đáng giá bao nhiêu</h2>
Rất dễ để thuyết phục mọi người đồng ý rằng các thiết kế mẫu là điều tốt. Mọi người hiểu được sự hấp dẫn của giải pháp được sự dụng để giải quyết ở vô số các dự án để giải quyết các vấn đề khó khăn. Nó khó hơn nhiều việc cung cấp cho một lập trình viên khác trong đội của bạn chính xác mẫu nào nên được chọn sự dụng trong một dự án.

Bạn có thể đánh giá một chính sách bảo hiểm được đại diện bằng tiền bặc bằng cách tự hỏi bản thân một số câu hỏi dưới đây:
<ul>
 	<li>Liệu sẽ có điều tồi tệ nào ảnh hưởng đến tôi?</li>
 	<li>Những điều tồi tệ có thường xuyên sảy ra không?</li>
 	<li>Liệu chi phí cho vấn đề này có thực sự chỉ bằng một phần nhỏ nếu điều tồi tệ sảy ra?</li>
</ul>
These simple questions make it easy to understand that there is no point in buying car insurance if
you don’t have a car or if there are no car thieves in your town. They also highlight the poor value
in paying $10,000 per year to insure an $11,000 car unless you anticipate multiple thefts (in which
case, you might also consider moving to a different area).

Những câu hỏi đơn giản khiến làm cho bạn dễ dàng nhận ra rằng chẳng có lý do gì để bạn mua bảo hiểm ô tô nếu bạn không có một chiếc xe hoặc chẳng có một chiếc xe nào bị lấy cắp trong thị trấn. Họ cũng làm nỏi bật giá trị ít ỏi khi thanh toán $10,000 một năm để bảo hiểm một chiếc xe có giá trị $11,000 trừ khi bạn dự đoán rằng sẽ có nhiều vụ trộm cắp (trong trường hợp này, tôi cũng có thể xem xét đến việc di chuyển đến một địa điểm khác)

Điểm này rõ ràng dù cho nó chỉ là một cái nhìn rất đơn giản về bảo hiểm: đừng mua một chính sách bảo hiểm trừ khi nó cung cấp một vài lợi ích. Điều tương tự cũng chính xác trong việc thiết kế mẫu: Đừng lựa chọn một mẫu nào trừ khi nó cung cấp cho bạn một vài giá trị mà bạn có thể định lượng và ghép nối với những thứ khác. Các câu hỏi cần thiết để xác định giá trị của một thiết kế mẫu cũng gần tương tự:
<ul>
 	<li>Mẫu mà bạn muốn sử dụng liệu có thể giải quyết vấn đề mà tôi có thể gặp phải?</li>
 	<li>Vấn đề này có thường xuyên sảy ra không?</li>
 	<li>Liệu vấn đề trong tương lại có đủ nghiêm trọng để tôi phải dành thời gian làm việc với các thiết kế mẫu hôm nay?</li>
</ul>
Thự sự thì khó để trả lời những câu hỏi này. Không có các bảng tính toán mức độ rủi ro trong phát triển phần mềm, và nó trở nên khó khăn để ước lượng cần bao nhiêu công sức trong tương lại để sửa một vấn đề (loại trừ trường hợp vấn đề đó sẽ không sảy ra).

Để thay thế, tôi có thể dễ dàng tập trung ngay vào các lợi ích mà một mẫu có thể cung cấp. Ví dụ, các mẫu có thể tăng số khả năng module hóa của một ứng dụng thường làm giảm tối thiểu ảnh hưởng của một thay đổi trong tương lai, nhưng một module ứng dụng có ít thành phần liên kết chặt chẽ, nó có nghĩa là nó dễ dàng để cô lập các đơn vị mã. Khiến các đơn vị mã trở lên độc lập là bước khởi đầu của cho kiểm thử từng phần, và tất nhiên một lợi ích rõ ràng ngay lập tức nữa của việc sử dụng thiết kế mẫu của bạn dễ được kiểm tra, và nâng cấp.

Thiết kế mẫu làm tăng số lượng sự trìu tượng trong một ứng dụng cho phép các tính năng mới được thêm vào với ít công sức và mã lặp lại hơn. Hầu hết mọi người có thể đồng ý việc phát triển nhanh và dễ hơn là một điều đáng giá, dẫu cho có thể họ sẽ đánh giá thấp vấn đề mà mẫu có thể giải quyết hoặc chống lại
<h2>Sự dụng một thiết kế mẫu sau khi vấn đề phát sinh</h2>
<h2>Những giới hạn của các thiết kế mẫu</h2>";s:10:"post_title";s:93:"Hiểu đúng về các thiết kế mẫu (Design Patterns) trong phát triển phần mềm";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:71:"hieu-dung-ve-cac-thiet-ke-mau-design-patterns-trong-phat-trien-phan-mem";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2016-08-01 09:01:47";s:17:"post_modified_gmt";s:19:"2016-08-01 09:01:47";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"https://scriptsvn.com/?p=423";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}i:7;O:8:"stdClass":23:{s:2:"ID";s:3:"450";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2016-05-21 03:57:54";s:13:"post_date_gmt";s:19:"2016-05-21 03:57:54";s:12:"post_content";s:9388:"The log message is arguably the most important part of a commit, because it’s the only place that captures not only what was changed, but why.

What goes into a good message? First, it needs to be short, and not just because brevity is the soul of wit. Most of the time, you’ll be viewing commit messages in the context of Git’s commit log, where there’s often not a lot of space to display text.

Think of the commit log as a newsfeed for your project, in which the log message is the headline for each commit. Have you ever skimmed the headlines in a newspaper (or, for a more current example, BuzzFeed) and come away thinking you’d gotten a summary of what was happening in the world? A good headline doesn’t have to tell the whole story, but it should tell you enough to know what the story is about before you read it.

If you’re working by yourself, or closely with one or two collaborators, the log may seem interesting just for historical purposes, because you would have been there for most of the commits. But in Git repositories with a lot of collaborators, the commit log can be more valuable as a way of knowing what happened when you weren’t looking.

Commit messages can, strictly speaking, span multiple lines, and can be as long or as detailed as you want. Git doesn’t place any hard limit on what goes into a commit message, and in fact, if a given commit does call for additional context, you can add additional paragraphs to a message, like so:
<pre class="line-numbers language-markup"><code class="language-markup">Updated Ruby on Rails version because security

Bumped Rails version to 3.2.11 to fix JSON security bug. 
See also http://weblog.rubyonrails.org/2013/1/8/Rails-3-2-11-3-1-10-3-0-19-and-2-3-15-have-been-released/
</code></pre>
Note that although this message contains a lot more context than just one line, the first line is important because only the first line will be shown in the log:
<pre class="line-numbers language-markup"><code class="language-markup">commit f0c8f185e677026f0832a9c13ab72322773ad9cf
Author: David Demaree 
Date:   Sat Jan 3 15:49:03 2013 -0500

Updated Ruby on Rails version because security
</code></pre>
Like a good headline, the first line here summarizes the reason for the commit; the rest of the message goes into more detail.
<h3>Writing commit messages in your favorite text editor</h3>
Although the examples in this book all have you type your message inline, using the --message or -m argument to git commit, you may be more comfortable writing in your preferred text editor. Git integrates nicely with many popular editors, both on the command line (e.g., Vim, Emacs) or more modern, graphical apps like Atom, Sublime Text, or TextMate. With an editor configured, you can omit the --message flag and Git will hand off a draft commit message to that other program for authoring. When you’re done, you can usually just close the window and Git will automatically pick up the message you entered.

To take advantage of this sweet integration, first you’ll need to configure Git to use your editor (specifically, your editor’s command-line program, if it has one). Here, I’m telling Git to hand off commit messages to Atom:
<pre class="line-numbers language-markup"><code>$: git config --global core.editor "atom --wait"</code></pre>
Every text editor has a slightly different set of arguments or options to pass in to integrate nicely with Git. (As you can see here, we had to pass the --wait option to Atom to get it to work.) GitHub’s help documentation has a good, <a href="http://bkaprt.com/gfh/05-05/">brief guide to setting up several popular editors.</a>
<h3>Elements of commit message style</h3>
There are few hard rules for crafting effective commit messages—just lots of guidelines and good practices, which, if you were to try to follow all of them all of the time, would quickly tie your mind in knots.

To ease the way, here are a few guidelines I’d recommend always following.
<h4>BE USEFUL</h4>
The purpose of a commit message is to summarize a change. But the purpose of summarizing a change is to help you and your team understand what is going on in your project. The information you put into a message, therefore, should be valuable and useful to the people who will read it.

As fun as it is to use the commit message space for cursing—at a bug, or Git, or your own clumsiness—avoid editorializing. Avoid the temptation to write a commit message like “Aaaaahhh stupid bugs.” Instead, take a deep breath, grab a coffee or some herbal tea or do whatever you need to do to clear your head. Then write a message that describes what changed in the commit, as clearly and succinctly as you can.

In addition to a short, clear description, when a commit is relevant to some piece of information in another system—for instance, if it fixes a bug logged in your bug tracker—it’s also common to include the issue or bug number, like so:
<pre class="line-numbers language-markup"><code>Replace jQuery onReady listener with plain JS; fixes #1357</code></pre>
Some bug trackers (including the one built into every GitHub project) can even be hooked into Git so that commit messages like this one will automatically mark the bug numbered 1357 as done as soon as the commit with this message is merged into master.
<h4>BE DETAILED (ENOUGH)</h4>
As a recovering software engineer, I understand the temptation to fill the commit message—and emails, and status reports, and stand-up meetings—with nerdy details. I love nerdy details. However, while some details are important for understanding a change, there’s almost always a more general reason for a change that can be explained more succinctly. Besides, there’s often not enough room to list every single detail about a change and still yield a commit log that’s easy to scan in a Terminal window. Finding simpler ways to describe something doesn’t just make the changes you’ve made more comprehensible to your teammates; it’s also a great way to save space.

A good rule of thumb is to keep the “subject” portion of your commit messages to one line, or about 70 characters. If there are important details worth including in the message, but that don’t need to be in the subject line, remember you can still include them as a separate paragraph.
<h4>BE CONSISTENT</h4>
However you and your colleagues decide to write commit messages, your commit log will be more valuable if you all try to follow a similar set of rules. Commit messages are too short to require an elaborate style guide, but having a conversation to establish some conventions, or making a short wiki page with some examples of particularly good (or bad) commit messages, will help things run more smoothly.
<h4>USE THE ACTIVE VOICE</h4>
The commit log isn’t a list of static things; it’s a list of changes. It’s a list of actions you (or someone) have taken that have resulted in versions of your work. Although it may be tempting to use a commit message to label a version of the work—“Version 1.0,” “Jan 24th deliverable”—there are other, better ways of doing that. Besides, it’s all too easy to end up in an embarrassing situation like this:
<ul>
 	<li>Making the last homepage update before releasing the new site</li>
</ul>
<pre class="line-numbers language-markup"><code>$: git commit -m "Version 1.0"</code></pre>
<ul>
 	<li>Ten minutes later, after discovering a typo in your CSS</li>
</ul>
<pre class="line-numbers language-markup"><code>$: git commit -m "Version 1.0 (really)"</code></pre>
<ul>
 	<li>Forty minutes later, after discovering another typo</li>
</ul>
<pre class="line-numbers language-markup"><code>$: git commit -m "Version 1.0 (oh FFS)"</code></pre>
Describing changes is not only the most correct format for a commit message, but it’s also one of the easiest rules to stick to. Rather than concern yourself with abstract questions like whether a given commit is the release version of a thing, you can focus on a much simpler story: I just did a thing, and this is the thing I just did.

Those “Version 1.0” commits, therefore, could be described much more simply and accurately:
<pre class="line-numbers language-markup"><code class="language-markup">$: git commit -m "Update homepage for launch"
$: git commit -m "Fix typo in screen.scss"
$: git commit -m "Fix misspelled name on about page"</code></pre>
I also recommend picking a tense and sticking with it, for consistency’s sake. I tend to use the imperative present tense to describe commits: Fix misspelled name on About page rather than fixed or fixing. There’s nothing wrong with fixed or fixing, except that they’re slightly longer. If another style works better for you or your team, go for it—just try to go for it consistently.

What happens if your commit message style isn’t consistent? Your Git repo will collapse into itself and all of your work will be ruined. Kidding! People are fallible, lapses will happen, and a little bit of nonsense in your logs is inevitable. Note, though, that following style rules like these gets easier the more practice you get. Aim to write the best commit messages you can, and your logs will be better and more valuable for it.

<hr />

David Demaree@alistapart.com - The Art of the Commit";s:10:"post_title";s:21:"The Art of the Commit";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:21:"the-art-of-the-commit";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2016-08-01 08:59:18";s:17:"post_modified_gmt";s:19:"2016-08-01 08:59:18";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"https://scriptsvn.com/?p=450";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}i:8;O:8:"stdClass":23:{s:2:"ID";s:3:"460";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2016-05-22 10:51:51";s:13:"post_date_gmt";s:19:"2016-05-22 10:51:51";s:12:"post_content";s:2348:"<h4>1. Please describe your financial need and explain the specific circumstances that motivate your request for financial aid. (50-300 words)</h4>
<blockquote>I’m an undergraduate student from Vietnam and want to learn Machine Learning. I think it will be beneficial for my thesis work. But I’ve no job of my own to carry the expanses to pay for the certificate of this course. I earn money by teaching students in various institutions. As a matter of fact it is a part time earning. In this circumstance, it is very much difficult for me to gather such amount of money for the certificate. So I’m badly in need of this financial aid.</blockquote>
<h4>2. Please tell us why you are taking this course. What is your interest in this field? How would a Course Certificate be valuable to you? (50-300 words)</h4>
<blockquote>I’m taking this course for my thesis work actually. My thesis field is on—“Semantic Parsing in Natural Language Processing in a view of Machine Learning Approach”. In graduate research level, this certificate will be valuable in my higher study education regarding in this field and I want to continue my research in Machine Learning field in future.</blockquote>
<h4>3. When participating in this course, how do you intend to demonstrate academic integrity and contribute to the course’s community? (50-300 words)</h4>
<blockquote>I’ll keep track in this field and try to make some contribution in Machine Learning. I’m studying in Computer Science field and I also want to continue my education in Machine Learning in graduate level. I interested in keep contact with this community and want to make contribution along with them.</blockquote>
Đây là email phản hồi từ Coursera sau khi submit thành công khóa: <a href="https://www.coursera.org/specializations/data-structures-algorithms">Data Structures and Algorithms</a>

<a href="https://scriptsvn.com/wp-content/uploads/2016/05/Screen-Shot-2016-05-22-at-7.11.39-PM.png"><img class="alignnone size-full wp-image-464" src="https://scriptsvn.com/wp-content/uploads/2016/05/Screen-Shot-2016-05-22-at-7.11.39-PM.png" alt="Screen Shot 2016-05-22 at 7.11.39 PM" width="1361" height="807" /></a>

Lưu ý chỉ gửi apply xin miễn phí khi thực sự thấy cần thiết. Làm nhiều lần liên tục sẽ bị khóa tài khoản";s:10:"post_title";s:94:"Cách trả lời các câu hỏi để nhận được khóa học miễn phí của Coursera";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:68:"cach-tra-loi-cac-cau-hoi-de-nhan-duoc-khoa-hoc-mien-phi-cua-coursera";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2016-08-01 08:57:27";s:17:"post_modified_gmt";s:19:"2016-08-01 08:57:27";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"https://scriptsvn.com/?p=460";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}i:9;O:8:"stdClass":23:{s:2:"ID";s:3:"471";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2016-05-23 03:09:59";s:13:"post_date_gmt";s:19:"2016-05-23 03:09:59";s:12:"post_content";s:2827:"Alright, so there were many times when I needed to have a bunch of development domains pointed to localhost, i.e 127.0.0.1. It’s usually fine to use something like <code>http://127.0.0.1:3000</code> (hey Rails!), or even <code>mysite.dev</code> as a custom entry in <code>/etc/hosts</code> file. But what if you need a dynamically changing domain names? Think of <code>*.dev</code>. Well, you can obviously keep adding more stuff to hosts file, but that’s a pretty big hassle. We need a DNS server!

About a year ago I found this nice little DNS server – <a href="https://github.com/robbiev/devdns">devdns</a>. It’s written in Go and could be easily grabbed as a binary from github. Why devdns? I kind of liked the idea that it was designed to do only one thing – respond with 127.0.0.1 to all type A queries and NXDOMAIN to any other query. Right after I found it I decided that having localhost hardcoded is not super useful, so I forked the repo and <a href="https://github.com/robbiev/devdns/pull/3">added the ability</a> to specify which IP address should be used by default.

How to use it? First, you might want to see how domain name resolves to an IP address:
<pre class="line-numbers language-markup"><code class="language-markup">$ resolveip foobar.dev
resolveip: Unable to find hostid for 'foobar.dev': host not found</code></pre>
The error above indicates that we can’t resolve the requested domain name. To make that happen, we will use OSX’s resolver mechanism. Given that our desired domain is .dev, you’ll need to create a resolver config file:
<pre class="line-numbers language-markup"><code class="language-markup">$ sudo mkdir -p /etc/resolver
$ sudo nano /etc/resolver/dev</code></pre>
And specify contents for the dev file:
<pre class="line-numbers language-markup"><code class="language-markup">nameserver 127.0.0.1
port 5300</code></pre>
So now we just need to start the dns server:
<pre class="line-numbers language-markup"><code class="language-markup">$ devdns 
2015/12/09 20:48:45 Listening on 127.0.0.1:5300, resolving to 127.0.0.1</code></pre>
And voila, it works!:

$ resolveip foobar.dev
IP address of foobar.dev is 127.0.0.1
Once you decide that you need to resolve the *.dev domains to another IP address, all you have to do is to restart local DNS server with the following flag:
<pre class="line-numbers language-markup"><code class="language-markup"># lets resolve all *.dev domains to docker-machine's VM
$ devdns -ip="192.168.99.100"</code></pre>
And now our domain name should resolve to a different IP address:
<pre class="line-numbers language-markup"><code class="language-markup">$ resolveip foobar.dev
IP address of foobar.dev is 192.168.99.100</code></pre>
Originally posted at http://sosedoff.com/2015/12/09/dns-for-local-development.html";s:10:"post_title";s:25:"DNS for local development";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:25:"dns-for-local-development";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2016-08-01 08:56:08";s:17:"post_modified_gmt";s:19:"2016-08-01 08:56:08";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"https://scriptsvn.com/?p=471";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}}s:8:"col_info";a:23:{i:0;O:8:"stdClass":13:{s:4:"name";s:2:"ID";s:7:"orgname";s:2:"ID";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:3;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:49699;s:4:"type";i:8;s:8:"decimals";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:11:"post_author";s:7:"orgname";s:11:"post_author";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:49193;s:4:"type";i:8;s:8:"decimals";i:0;}i:2;O:8:"stdClass":13:{s:4:"name";s:9:"post_date";s:7:"orgname";s:9:"post_date";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:16513;s:4:"type";i:12;s:8:"decimals";i:0;}i:3;O:8:"stdClass":13:{s:4:"name";s:13:"post_date_gmt";s:7:"orgname";s:13:"post_date_gmt";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:129;s:4:"type";i:12;s:8:"decimals";i:0;}i:4;O:8:"stdClass":13:{s:4:"name";s:12:"post_content";s:7:"orgname";s:12:"post_content";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:13268;s:6:"length";i:4294967295;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:5;O:8:"stdClass":13:{s:4:"name";s:10:"post_title";s:7:"orgname";s:10:"post_title";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:94;s:6:"length";i:262140;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:6;O:8:"stdClass":13:{s:4:"name";s:12:"post_excerpt";s:7:"orgname";s:12:"post_excerpt";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:262140;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:7;O:8:"stdClass":13:{s:4:"name";s:11:"post_status";s:7:"orgname";s:11:"post_status";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:7;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:16385;s:4:"type";i:253;s:8:"decimals";i:0;}i:8;O:8:"stdClass":13:{s:4:"name";s:14:"comment_status";s:7:"orgname";s:14:"comment_status";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:4;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:9;O:8:"stdClass":13:{s:4:"name";s:11:"ping_status";s:7:"orgname";s:11:"ping_status";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:4;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:10;O:8:"stdClass":13:{s:4:"name";s:13:"post_password";s:7:"orgname";s:13:"post_password";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:11;O:8:"stdClass":13:{s:4:"name";s:9:"post_name";s:7:"orgname";s:9:"post_name";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:71;s:6:"length";i:800;s:9:"charsetnr";i:45;s:5:"flags";i:16393;s:4:"type";i:253;s:8:"decimals";i:0;}i:12;O:8:"stdClass":13:{s:4:"name";s:7:"to_ping";s:7:"orgname";s:7:"to_ping";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:262140;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:13;O:8:"stdClass":13:{s:4:"name";s:6:"pinged";s:7:"orgname";s:6:"pinged";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:262140;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:14;O:8:"stdClass":13:{s:4:"name";s:13:"post_modified";s:7:"orgname";s:13:"post_modified";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:129;s:4:"type";i:12;s:8:"decimals";i:0;}i:15;O:8:"stdClass":13:{s:4:"name";s:17:"post_modified_gmt";s:7:"orgname";s:17:"post_modified_gmt";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:129;s:4:"type";i:12;s:8:"decimals";i:0;}i:16;O:8:"stdClass":13:{s:4:"name";s:21:"post_content_filtered";s:7:"orgname";s:21:"post_content_filtered";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:4294967295;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:17;O:8:"stdClass":13:{s:4:"name";s:11:"post_parent";s:7:"orgname";s:11:"post_parent";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:49193;s:4:"type";i:8;s:8:"decimals";i:0;}i:18;O:8:"stdClass":13:{s:4:"name";s:4:"guid";s:7:"orgname";s:4:"guid";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:28;s:6:"length";i:1020;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:19;O:8:"stdClass":13:{s:4:"name";s:10:"menu_order";s:7:"orgname";s:10:"menu_order";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:11;s:9:"charsetnr";i:63;s:5:"flags";i:32769;s:4:"type";i:3;s:8:"decimals";i:0;}i:20;O:8:"stdClass":13:{s:4:"name";s:9:"post_type";s:7:"orgname";s:9:"post_type";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:4;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:16393;s:4:"type";i:253;s:8:"decimals";i:0;}i:21;O:8:"stdClass":13:{s:4:"name";s:14:"post_mime_type";s:7:"orgname";s:14:"post_mime_type";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:400;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:22;O:8:"stdClass":13:{s:4:"name";s:13:"comment_count";s:7:"orgname";s:13:"comment_count";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:32769;s:4:"type";i:8;s:8:"decimals";i:0;}}s:8:"num_rows";i:10;s:10:"return_val";i:10;}