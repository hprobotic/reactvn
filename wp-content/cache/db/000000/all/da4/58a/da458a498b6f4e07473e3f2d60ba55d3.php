��W<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:67:"SELECT reactvn_posts.* FROM reactvn_posts WHERE ID IN (406,391,377)";s:11:"last_result";a:3:{i:0;O:8:"stdClass":23:{s:2:"ID";s:3:"377";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2016-02-23 09:28:51";s:13:"post_date_gmt";s:19:"2016-02-23 09:28:51";s:12:"post_content";s:4178:"React Native is a collection of JavaScript and Objective-C code plus supporting tools that allow to create, run, and debug native iOS applications.
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
<blockquote>You might also want to install IDE. While Xcode is part of our development environment, it's certainly not the most well-suited JavaScript editor out there. Check out some our good IDE: Atom (<a href="http://atom.io">http://atom.io</a>), IntellJIDE CE (<a href="http:jetbrains.com">http:jetbrains.com</a>)</blockquote>";s:10:"post_title";s:46:"React Native#1 - Setup development evirontment";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:43:"react-native1-setup-development-evirontment";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2016-08-01 09:04:07";s:17:"post_modified_gmt";s:19:"2016-08-01 09:04:07";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:27:"http://scriptsvn.com/?p=377";s:10:"menu_order";s:1:"2";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"1";}i:1;O:8:"stdClass":23:{s:2:"ID";s:3:"391";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2016-02-24 02:35:51";s:13:"post_date_gmt";s:19:"2016-02-24 02:35:51";s:12:"post_content";s:7321:"In this article, we will create a very simple application and make it run in the iOS simulator. By doing so, we are using a whole lot of different components that in total allow use to end up with a working app. Once our app runs, we will look under the hood in order to understand all those components and get a feeling for the inner workings of React Native applications. These insights form the basis that allows us to build more complex applications while truly understanding what we are doing.
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
</code></pre>";s:10:"post_title";s:68:"React Native#2: Create first native iOS application use React Native";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:66:"react-native2-create-first-native-ios-application-use-react-native";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2016-08-01 09:05:04";s:17:"post_modified_gmt";s:19:"2016-08-01 09:05:04";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"https://scriptsvn.com/?p=391";s:10:"menu_order";s:1:"3";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"1";}i:2;O:8:"stdClass":23:{s:2:"ID";s:3:"406";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2016-02-24 08:12:46";s:13:"post_date_gmt";s:19:"2016-02-24 08:12:46";s:12:"post_content";s:0:"";s:10:"post_title";s:51:"React Native#3: React Native architecture explained";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:49:"react-native3-react-native-architecture-explained";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2016-08-01 09:03:10";s:17:"post_modified_gmt";s:19:"2016-08-01 09:03:10";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"https://scriptsvn.com/?p=406";s:10:"menu_order";s:1:"1";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}}s:8:"col_info";a:23:{i:0;O:8:"stdClass":13:{s:4:"name";s:2:"ID";s:7:"orgname";s:2:"ID";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:3;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:49699;s:4:"type";i:8;s:8:"decimals";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:11:"post_author";s:7:"orgname";s:11:"post_author";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:49193;s:4:"type";i:8;s:8:"decimals";i:0;}i:2;O:8:"stdClass":13:{s:4:"name";s:9:"post_date";s:7:"orgname";s:9:"post_date";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:16513;s:4:"type";i:12;s:8:"decimals";i:0;}i:3;O:8:"stdClass":13:{s:4:"name";s:13:"post_date_gmt";s:7:"orgname";s:13:"post_date_gmt";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:129;s:4:"type";i:12;s:8:"decimals";i:0;}i:4;O:8:"stdClass":13:{s:4:"name";s:12:"post_content";s:7:"orgname";s:12:"post_content";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:7321;s:6:"length";i:4294967295;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:5;O:8:"stdClass":13:{s:4:"name";s:10:"post_title";s:7:"orgname";s:10:"post_title";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:68;s:6:"length";i:262140;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:6;O:8:"stdClass":13:{s:4:"name";s:12:"post_excerpt";s:7:"orgname";s:12:"post_excerpt";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:262140;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:7;O:8:"stdClass":13:{s:4:"name";s:11:"post_status";s:7:"orgname";s:11:"post_status";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:7;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:16385;s:4:"type";i:253;s:8:"decimals";i:0;}i:8;O:8:"stdClass":13:{s:4:"name";s:14:"comment_status";s:7:"orgname";s:14:"comment_status";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:4;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:9;O:8:"stdClass":13:{s:4:"name";s:11:"ping_status";s:7:"orgname";s:11:"ping_status";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:4;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:10;O:8:"stdClass":13:{s:4:"name";s:13:"post_password";s:7:"orgname";s:13:"post_password";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:11;O:8:"stdClass":13:{s:4:"name";s:9:"post_name";s:7:"orgname";s:9:"post_name";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:66;s:6:"length";i:800;s:9:"charsetnr";i:45;s:5:"flags";i:16393;s:4:"type";i:253;s:8:"decimals";i:0;}i:12;O:8:"stdClass":13:{s:4:"name";s:7:"to_ping";s:7:"orgname";s:7:"to_ping";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:262140;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:13;O:8:"stdClass":13:{s:4:"name";s:6:"pinged";s:7:"orgname";s:6:"pinged";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:262140;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:14;O:8:"stdClass":13:{s:4:"name";s:13:"post_modified";s:7:"orgname";s:13:"post_modified";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:129;s:4:"type";i:12;s:8:"decimals";i:0;}i:15;O:8:"stdClass":13:{s:4:"name";s:17:"post_modified_gmt";s:7:"orgname";s:17:"post_modified_gmt";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:129;s:4:"type";i:12;s:8:"decimals";i:0;}i:16;O:8:"stdClass":13:{s:4:"name";s:21:"post_content_filtered";s:7:"orgname";s:21:"post_content_filtered";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:4294967295;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:17;O:8:"stdClass":13:{s:4:"name";s:11:"post_parent";s:7:"orgname";s:11:"post_parent";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:49193;s:4:"type";i:8;s:8:"decimals";i:0;}i:18;O:8:"stdClass":13:{s:4:"name";s:4:"guid";s:7:"orgname";s:4:"guid";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:28;s:6:"length";i:1020;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:19;O:8:"stdClass":13:{s:4:"name";s:10:"menu_order";s:7:"orgname";s:10:"menu_order";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:11;s:9:"charsetnr";i:63;s:5:"flags";i:32769;s:4:"type";i:3;s:8:"decimals";i:0;}i:20;O:8:"stdClass":13:{s:4:"name";s:9:"post_type";s:7:"orgname";s:9:"post_type";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:4;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:16393;s:4:"type";i:253;s:8:"decimals";i:0;}i:21;O:8:"stdClass":13:{s:4:"name";s:14:"post_mime_type";s:7:"orgname";s:14:"post_mime_type";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:400;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:22;O:8:"stdClass":13:{s:4:"name";s:13:"comment_count";s:7:"orgname";s:13:"comment_count";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:32769;s:4:"type";i:8;s:8:"decimals";i:0;}}s:8:"num_rows";i:3;s:10:"return_val";i:3;}