^�W<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:50:"SELECT * FROM reactvn_posts WHERE ID = 111 LIMIT 1";s:11:"last_result";a:1:{i:0;O:8:"stdClass":23:{s:2:"ID";s:3:"111";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-10-23 02:51:41";s:13:"post_date_gmt";s:19:"2015-10-23 02:51:41";s:12:"post_content";s:13562:"Ruby is a programming language designed by Yukihiro “Matz” Matsumoto, with a focus on programmers productivity and fun. The author stated it himself many times in interviews and talks, such as Google Tech Talk in 2008: “I hope to see Ruby help every programmer in the world to be productive, and to enjoy programming, and to be happy. That is the primary purpose of Ruby language.”
<!--more-->

I believe Matz did a great job in achieving his goals. Let’s have a look at some of the things that Ruby got right. This short list can serve either as a reminder for those who already know Ruby, or as a set of arguments for convincing you that it’s worth investing your time to learn Ruby, if you haven’t done so yet.

<h3>Object model</h3>

“Everything is an object” - you have probably heard this statement repeated over and over for every object oriented language, like Java or C#, only to find out later that these languages have many exception to this rule, such as primitive types - numbers or boolean values. Ruby’s object model, greatly inspired by Smalltalk, is different. Numbers, boolean values, string literals etc. are all objects. You can call methods on them:

<pre class="codeblock js-code-is-hidden"><code class="language-ruby">5.even?                     # => false 
1.upto(4).to_a              # => [1, 2, 3, 4]
"A string literal".length   # => 16</code></pre>

You can list their methods:

<pre class="codeblock js-code-is-hidden"><code class="language-ruby">42.methods
=> [:to_s,
 :inspect,
 :-@,
 :+,
 :-,
 :*,
 :/,
 :div,
 :%,
...
</code></pre>

You can also check their class:

<pre class="codeblock js-code-is-hidden"><code class="language-ruby">1.class     # => Fixnum
1.3.class   # => Float
true.class  # => TrueClass
</code></pre>

What might be suprising at first if you’re new to Ruby, is that classes are objects too! They are instances of the class Class:

<pre class="codeblock js-code-is-hidden"><code class="language-ruby">
Fixnum.is_a?(Object)  # => true
Fixnum.class          # => Class
</code></pre>

We can inspect the inheritance hierarchy of Class using ancestors method:

<pre class="codeblock js-code-is-hidden"><code>Class.ancestors   # => [Class, Module, Object, Kernel, BasicObject]</code></pre>

So, does it all mean that really everything is an object? Well, even in Ruby there are some exceptions. Perhaps the most notable are methods and blocks. They are not objects themselves, but they can be wrapped by one (Proc).

<h3>Metaprogramming</h3>

Metaprogramming is a technique that allows programs to manipulate themselves or another programs at a runtime. In other words, metaprogramming makes it possible to write programs that write programs. Thanks to its dynamic nature and expressive syntax, Ruby’s metaprogramming capabilities are truly astounding. With these techniques we can write programs that are cleaner and easier to mantain. Here are some examples of things we can do in Ruby:

<h3>Singleton methods</h3>

Ruby allows you to define a method, that is available only for a specific object. We call these methods singleton methods. When you add such method to an object, it can be invoked only from this particular object. Other instances of the same class can’t access it. Let’s see it in action:

<pre class="codeblock js-code-is-hidden"><code class="language-ruby">
object = Object.new           # => #<Object:0x00000001671b68> 
my_object = Object.new        # => #<Object:0x0000000168b9a0> 

def my_object.custom_method
  "Singleton method called"
end

my_object.custom_method       # => "Singleton method called" 
object.custom_method          # => NameError: undefined local variable or method `object' for main:Object
</code></pre>

In the above example we created two instances of class Object. Next, we’ve added a method, called custom_method to one of them - my_object. Finally, we verified that the method is indeed available only for the object it was defined for. The other instance throws an exception when we try to invoke custom_method on it.

<h3>method_missing</h3>

Ruby gives you a way of handling calls to methods that don’t really exist. To understand how it works, let’s first have a look at the method lookup path. When object receives a message, Ruby searches for a right method in the following order:

singleton class
class
modules (starting from the one included last)
superclass
superclass’ modules
repeating steps 4 and 5 until the BasicObject (or Object, for Ruby versions below 1.9) is reached
If the invoked method can’t be found, the dispatch starts again. This time, however, it looks for a special method, called method_missing. Once it’s found, the method_missing is called with following arguments:

original method name
parameters passed to originally called method
block passed to the original method
Let’s see it in action:

class A
  def method_missing(method, *args, &amp;block)
    "method_missing captured a call to #{method} with arguments: #{args.join(', ')}"
  end
end

obj = A.new

obj.random_method(1, 'abc', true)

<h1>=> "method_missing captured a call to random_method with arguments: 1, abc, true"</h1>

This technique allows you to ‘create’ methods dynamically. An example of method_missing usage in practice can be (now deprecated) Rails dynamic finders, such as find_by_name`.

<h3>Writing code dynamically</h3>

It’s possible to write a code that writes code. For example, imagine that you need your object to have a few methods that have a very similar behavior. You can create these methods using define_method:

class A
  METHOD_NAMES = ['abc', 'def', 'ghi', 'jkl', 'mno']

METHOD_NAMES.each do |name|
    define_method(name) do |arg|
      "Called method #{name} with argument: #{arg}"
    end
  end
end

obj = A.new
obj.abc(42)        # => "Called method abc with argument: 42"
obj.mno('arg')     # => "Called method mno with argument: arg"

<h3>Note about risks</h3>

Metaprogrammin adds great flexibility to the language. It allows us to write more with less code. It can help in reducing repetition or just writing cleaner and more concise code. We can’t, however, forget that all these posiibilities come at a certain cost. With great power comes great responsibility. While properly used metaprogramming techniques can save you much effort, overusing them can give the opposite results. You might end up with a code that is complex and difficult to debug. Use above techniques with care!

<h3>Modules</h3>

Ruby’s modules are perhaps one of the language’s most powerful features. They allow to modify class hierarchy dynamically at runtime. Let’s create a very simple module M:

module M
  def mod_method
    "Module method invoked"
  end
end
Module methods can be mixed in as a class methods, using extend keyword:

class A
  extend M
end

A.mod_method    # => "Module method invoked"
or as instance methods, with include keyword:

class B
  include M
end

B.new.mod_method    # => "Module method invoked"
Mixins are very clean and elegant equivalents of multiple inheritance or traits found in another languages.

<h3>Blocks, Procs and lambdas</h3>

Blocks in Ruby are, in simple terms, a chunks of code grouped together by enclosing braces or a pair of do-end keywords. They can be passed to methods, which can call a block using yield statement. When the block is passed to method, it’s not executed immediately. Instead, the context in which it was encountered by Ruby interpreter is remembered (self, local variables etc.). When it’s then called from within the method, it is executed in that context. This concept is called closure in computer science. Let’s see a live example:

var = "something"

def meth
  var = "something else"
  yield
end

meth { puts var }   # => "something"
Passing blocks to methods is a very common practice in Ruby. For example, it’s the most typical way of iterating over collections.

squares = [1, 2, 3].map{|i| i**2}         # => [1, 4, 9]

even = [1,2,3,4,5,6].select{|i| i.even?}  # => [2, 4, 6]
This syntax feels very natural and is extremely expressive.

So far we’ve been passing anonymous blocks to the methods when they were called. While it’s a very useful and simple technique, there are times where it would be more convenient to store the block in a variable and be able to reuse it later. Ruby has a feature that allows you to do just that. You can wrap your blocks of code into Proc, making it first-class object.

square = Proc.new do |i|
  i**2
end

class Array
  def iterate(my_proc)
    self.each_with_index do |element, index|
      self[index] = my_proc.call(element)
    end
  end
end

[1, 2, 3, 4].call(square)    # => [1, 4, 9, 16]
There’s one more construct in Ruby that is very similar to Proc. It’s called lambda. Let’s first look at the usage of lambda and then talk about how it’s different from Proc

square_lambda = lambda{|i| i**2}

class Array
  def iterate(my_proc)
    self.each_with_index do |element, index|
      self[index] = my_proc.call(element)
    end
  end
end

[1, 2, 3, 4].call(square_lambda)    # => [1, 4, 9, 16]
As you can see, lambas can be used in pretty much the same way as Procs. There are, however, two main differences. First, Procs don’t check the number of arguments passed, while lambdas do.

print_numbers_proc = Proc.new {|a, b| "Your numbers are: #{a} and #{b}"}
print_numbers_lambda = lambda {|a, b| "Your numbers are: #{a} and #{b}"}

print_numbers_proc.call(1,2)     # => "Your numbers are: 1 and 2"
print_numbers_proc.call(1)       # => "Your numbers are: 1 and "

print_numbers_lambda.call(1,2)   # => "Your numbers are: 1 and 2"
print_numbers_lambda.call(1)     # => ArgumentError: wrong number of arguments (1 for 2)
The second difference is in the way return works in both of them. If you execute lambda containing return instruction from within a method, execution flow will be continued from the line right after the lambda was called. In case of Proc, return will finish execution of the outer method. As always, let’s see an example:

def test_lambda_return
  lambda {
    return "inside lambda"
  }.call
  return "inside test_lambda_return method"
end

def test_proc_return
  Proc.new {
    return "inside Proc"
  }.call
  return "inside test_proc_return method"
end

test_lambda_return     #=> "inside test_lambda_return method"
test_proc_return       #=> "inside Proc"

<h3>Emphasis on testing</h3>

Ruby community puts large emphasis on using methodologies that are supposed to ensure good code quality. Perhaps the most popular of such development processes is Test Driven Development, or TDD in short. One of the best resources for people who start to learn ruby is RubyKoans. It teaches you Ruby by writing tests, so by the time you become proficient in writing Ruby code, you also know how to test it.

The emphasis on testing can also be seen in abundance of tools designed for this purpose. Most popular testing frameworks include RSpec, Minitest and Test::Unit. For mocking you can use Rspec-mocks or Mocha. Simulating a browser is possible with Capybara or Webrat. And that’s just a tip of the iceberg.

<h3>Libraries</h3>

The power of a language lies not only within the language itself, but also the community built around it. Ruby has a thriving community, that creates a lot of great open-source libraries distributed as gems.

The most popular Ruby-based library, and also the one that contributed greatly to its popularity, is of course Rails. However, it’s not the only web framework written in Ruby. Two other most notable examples are Sinatra and Padrino. More exhaustive list of Ruby web frameworks can be found here.

What if you’re not looking for a web framework, but and ORM library? You can choose from ActiveRecord, Sequel, DataMapper or Squeel.

Need background jobs in your app? Have a look at Resque, Delayed Job or sidekiq.

The list could go on and on.

Whatever you’re looking for, thare’s a good chance that there’s already at least one library that will help you solve your problem with ease.

When you find the gem you would like to use in your project, installation is also a breeze. Either run gem install gem_name, or add the gem to you Gemfile and run bundle install command, if you’re using Bundler. It doesn’t get any simpler than this!

<h3>Syntax</h3>

Last but not least, one of the things I love about Ruby is its syntax. It’s elegant and feels very natural. Blocks, implicit return and dynamic typing result in uncluttered, clean and expressive code. A great thing about Ruby syntax is multitude of syntactic sugar - construct that serve a purpose of making the code easier and faster to write and read, while not necessarily following normal rules.

Below I listed a couple of interesting Ruby syntax elements:

common usage of blocks
optional return statements - last statement value in a method is returned by default
shorthand for one line conditional statements
do_something if condition
instead of

if condition
  do_something
end
multiple assignment
def my_method(*args)
  first_name, last_name = args
end

my_method('Han', 'Solo')
one line rescue - you can use rescue statement after single line instruction to provide return value in case an exception is thrown
arr.count rescue 0
optional brackets in method calls - help in writing code that reads more like natural language

convention naming rules for different variable types allow you to know the variable’s scope just by looking at its name

local_variable
@instance_variable
@@class_variable
$global_variable
by";s:10:"post_title";s:21:"Ruby - the good parts";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:19:"ruby-the-good-parts";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-10-23 02:51:41";s:17:"post_modified_gmt";s:19:"2015-10-23 02:51:41";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:27:"http://scriptsvn.com/?p=111";s:10:"menu_order";s:2:"15";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}}s:8:"col_info";a:23:{i:0;O:8:"stdClass":13:{s:4:"name";s:2:"ID";s:7:"orgname";s:2:"ID";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:3;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:49699;s:4:"type";i:8;s:8:"decimals";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:11:"post_author";s:7:"orgname";s:11:"post_author";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:49193;s:4:"type";i:8;s:8:"decimals";i:0;}i:2;O:8:"stdClass":13:{s:4:"name";s:9:"post_date";s:7:"orgname";s:9:"post_date";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:16513;s:4:"type";i:12;s:8:"decimals";i:0;}i:3;O:8:"stdClass":13:{s:4:"name";s:13:"post_date_gmt";s:7:"orgname";s:13:"post_date_gmt";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:129;s:4:"type";i:12;s:8:"decimals";i:0;}i:4;O:8:"stdClass":13:{s:4:"name";s:12:"post_content";s:7:"orgname";s:12:"post_content";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:13562;s:6:"length";i:4294967295;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:5;O:8:"stdClass":13:{s:4:"name";s:10:"post_title";s:7:"orgname";s:10:"post_title";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:21;s:6:"length";i:262140;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:6;O:8:"stdClass":13:{s:4:"name";s:12:"post_excerpt";s:7:"orgname";s:12:"post_excerpt";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:262140;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:7;O:8:"stdClass":13:{s:4:"name";s:11:"post_status";s:7:"orgname";s:11:"post_status";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:7;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:16385;s:4:"type";i:253;s:8:"decimals";i:0;}i:8;O:8:"stdClass":13:{s:4:"name";s:14:"comment_status";s:7:"orgname";s:14:"comment_status";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:4;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:9;O:8:"stdClass":13:{s:4:"name";s:11:"ping_status";s:7:"orgname";s:11:"ping_status";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:4;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:10;O:8:"stdClass":13:{s:4:"name";s:13:"post_password";s:7:"orgname";s:13:"post_password";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:11;O:8:"stdClass":13:{s:4:"name";s:9:"post_name";s:7:"orgname";s:9:"post_name";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:800;s:9:"charsetnr";i:45;s:5:"flags";i:16393;s:4:"type";i:253;s:8:"decimals";i:0;}i:12;O:8:"stdClass":13:{s:4:"name";s:7:"to_ping";s:7:"orgname";s:7:"to_ping";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:262140;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:13;O:8:"stdClass":13:{s:4:"name";s:6:"pinged";s:7:"orgname";s:6:"pinged";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:262140;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:14;O:8:"stdClass":13:{s:4:"name";s:13:"post_modified";s:7:"orgname";s:13:"post_modified";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:129;s:4:"type";i:12;s:8:"decimals";i:0;}i:15;O:8:"stdClass":13:{s:4:"name";s:17:"post_modified_gmt";s:7:"orgname";s:17:"post_modified_gmt";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:129;s:4:"type";i:12;s:8:"decimals";i:0;}i:16;O:8:"stdClass":13:{s:4:"name";s:21:"post_content_filtered";s:7:"orgname";s:21:"post_content_filtered";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:4294967295;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:17;O:8:"stdClass":13:{s:4:"name";s:11:"post_parent";s:7:"orgname";s:11:"post_parent";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:49193;s:4:"type";i:8;s:8:"decimals";i:0;}i:18;O:8:"stdClass":13:{s:4:"name";s:4:"guid";s:7:"orgname";s:4:"guid";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:27;s:6:"length";i:1020;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:19;O:8:"stdClass":13:{s:4:"name";s:10:"menu_order";s:7:"orgname";s:10:"menu_order";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:2;s:6:"length";i:11;s:9:"charsetnr";i:63;s:5:"flags";i:32769;s:4:"type";i:3;s:8:"decimals";i:0;}i:20;O:8:"stdClass":13:{s:4:"name";s:9:"post_type";s:7:"orgname";s:9:"post_type";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:4;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:16393;s:4:"type";i:253;s:8:"decimals";i:0;}i:21;O:8:"stdClass":13:{s:4:"name";s:14:"post_mime_type";s:7:"orgname";s:14:"post_mime_type";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:400;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:22;O:8:"stdClass":13:{s:4:"name";s:13:"comment_count";s:7:"orgname";s:13:"comment_count";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:32769;s:4:"type";i:8;s:8:"decimals";i:0;}}s:8:"num_rows";i:1;s:10:"return_val";i:1;}