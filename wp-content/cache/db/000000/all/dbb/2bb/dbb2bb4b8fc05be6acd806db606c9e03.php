]�W<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:50:"SELECT * FROM reactvn_posts WHERE ID = 360 LIMIT 1";s:11:"last_result";a:1:{i:0;O:8:"stdClass":23:{s:2:"ID";s:3:"360";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2016-02-22 16:24:54";s:13:"post_date_gmt";s:19:"2016-02-22 16:24:54";s:12:"post_content";s:9124:"<h2>The Problem with Data Fetching in React</h2>

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

Now, it’s your turn. Did you know Relay? Have you ever adopted it in one of your projects?";s:10:"post_title";s:30:"React Data Fetching with Relay";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:30:"react-data-fetching-with-relay";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2016-02-22 16:24:54";s:17:"post_modified_gmt";s:19:"2016-02-22 16:24:54";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:27:"http://scriptsvn.com/?p=360";s:10:"menu_order";s:1:"5";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"1";}}s:8:"col_info";a:23:{i:0;O:8:"stdClass":13:{s:4:"name";s:2:"ID";s:7:"orgname";s:2:"ID";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:3;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:49699;s:4:"type";i:8;s:8:"decimals";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:11:"post_author";s:7:"orgname";s:11:"post_author";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:49193;s:4:"type";i:8;s:8:"decimals";i:0;}i:2;O:8:"stdClass":13:{s:4:"name";s:9:"post_date";s:7:"orgname";s:9:"post_date";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:16513;s:4:"type";i:12;s:8:"decimals";i:0;}i:3;O:8:"stdClass":13:{s:4:"name";s:13:"post_date_gmt";s:7:"orgname";s:13:"post_date_gmt";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:129;s:4:"type";i:12;s:8:"decimals";i:0;}i:4;O:8:"stdClass":13:{s:4:"name";s:12:"post_content";s:7:"orgname";s:12:"post_content";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:9124;s:6:"length";i:4294967295;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:5;O:8:"stdClass":13:{s:4:"name";s:10:"post_title";s:7:"orgname";s:10:"post_title";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:30;s:6:"length";i:262140;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:6;O:8:"stdClass":13:{s:4:"name";s:12:"post_excerpt";s:7:"orgname";s:12:"post_excerpt";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:262140;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:7;O:8:"stdClass":13:{s:4:"name";s:11:"post_status";s:7:"orgname";s:11:"post_status";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:7;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:16385;s:4:"type";i:253;s:8:"decimals";i:0;}i:8;O:8:"stdClass":13:{s:4:"name";s:14:"comment_status";s:7:"orgname";s:14:"comment_status";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:4;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:9;O:8:"stdClass":13:{s:4:"name";s:11:"ping_status";s:7:"orgname";s:11:"ping_status";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:4;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:10;O:8:"stdClass":13:{s:4:"name";s:13:"post_password";s:7:"orgname";s:13:"post_password";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:11;O:8:"stdClass":13:{s:4:"name";s:9:"post_name";s:7:"orgname";s:9:"post_name";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:30;s:6:"length";i:800;s:9:"charsetnr";i:45;s:5:"flags";i:16393;s:4:"type";i:253;s:8:"decimals";i:0;}i:12;O:8:"stdClass":13:{s:4:"name";s:7:"to_ping";s:7:"orgname";s:7:"to_ping";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:262140;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:13;O:8:"stdClass":13:{s:4:"name";s:6:"pinged";s:7:"orgname";s:6:"pinged";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:262140;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:14;O:8:"stdClass":13:{s:4:"name";s:13:"post_modified";s:7:"orgname";s:13:"post_modified";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:129;s:4:"type";i:12;s:8:"decimals";i:0;}i:15;O:8:"stdClass":13:{s:4:"name";s:17:"post_modified_gmt";s:7:"orgname";s:17:"post_modified_gmt";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:129;s:4:"type";i:12;s:8:"decimals";i:0;}i:16;O:8:"stdClass":13:{s:4:"name";s:21:"post_content_filtered";s:7:"orgname";s:21:"post_content_filtered";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:4294967295;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:17;O:8:"stdClass":13:{s:4:"name";s:11:"post_parent";s:7:"orgname";s:11:"post_parent";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:49193;s:4:"type";i:8;s:8:"decimals";i:0;}i:18;O:8:"stdClass":13:{s:4:"name";s:4:"guid";s:7:"orgname";s:4:"guid";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:27;s:6:"length";i:1020;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:19;O:8:"stdClass":13:{s:4:"name";s:10:"menu_order";s:7:"orgname";s:10:"menu_order";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:11;s:9:"charsetnr";i:63;s:5:"flags";i:32769;s:4:"type";i:3;s:8:"decimals";i:0;}i:20;O:8:"stdClass":13:{s:4:"name";s:9:"post_type";s:7:"orgname";s:9:"post_type";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:4;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:16393;s:4:"type";i:253;s:8:"decimals";i:0;}i:21;O:8:"stdClass":13:{s:4:"name";s:14:"post_mime_type";s:7:"orgname";s:14:"post_mime_type";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:400;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:22;O:8:"stdClass":13:{s:4:"name";s:13:"comment_count";s:7:"orgname";s:13:"comment_count";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:32769;s:4:"type";i:8;s:8:"decimals";i:0;}}s:8:"num_rows";i:1;s:10:"return_val";i:1;}