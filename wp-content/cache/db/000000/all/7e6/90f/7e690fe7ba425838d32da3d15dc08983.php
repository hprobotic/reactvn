]�W<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:50:"SELECT * FROM reactvn_posts WHERE ID = 598 LIMIT 1";s:11:"last_result";a:1:{i:0;O:8:"stdClass":23:{s:2:"ID";s:3:"598";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2016-08-12 11:48:18";s:13:"post_date_gmt";s:19:"2016-08-12 04:48:18";s:12:"post_content";s:9899:"In addition to utilizing the HTTP verbs appropriately, resource naming is arguably the most debated and most important concept to grasp when creating an understandable, easily leveraged Web service API. When resources are named well, an API is intuitive and easy to use. Done poorly, that same API can feel klutzy and be difficult to use and understand. Below are a few tips to get you going when creating the resource URIs for your new API.

Essentially, a RESTful API ends up being simply a collection of URIs, HTTP calls to those URIs and some JSON and/or XML representations of resources, many of which will contain relational links. The RESTful principal of addressability is covered by the URIs. Each resource has its own address or URI—every interesting piece of information the server can provide is exposed as a resource. The constraint of uniform interface is partially addressed by the combination of URIs and HTTP verbs, and using them in line with the standards and conventions.

In deciding what resources are within your system, name them as nouns as opposed to verbs or actions. In other words, a RESTful URI should refer to a resource that is a thing instead of referring to an action. Nouns have properties as verbs do not, just another distinguishing factor.

Some example resources are:

<ul>
    <li>Users of the system.</li>
    <li>Courses in which a student is enrolled.</li>
    <li>A user's timeline of posts.</li>
    <li>The users that follow another user.</li>
    <li>An article about horseback riding.</li>
</ul>

Each resource in a service suite will have at least one URI identifying it. And it's best when that URI makes sense and adequately describes the resource. URIs should follow a predictable, hierarchical structure to enhance understandability and, therefore, usability: predictable in the sense that they're consistent, hierarchical in the sense that data has structure—relationships. This is not a REST rule or constraint, but it enhances the API.

RESTful APIs are written for consumers. The name and structure of URIs should convey meaning to those consumers. It's often difficult to know what the data boundaries should be, but with understanding of your data, you most-likely are equipped to take a stab and what makes sense to return as a representation to your clients. Design for your clients, not for your data.

Let's say we're describing an order system with customers, orders, line items, products, etc. Consider the URIs involved in describing the resources in this service suite:

<h3>Resource URI Examples</h3>

To insert (create) a new customer in the system, we might use:
<em>POST http://www.example.com/customers</em>

To read a customer with Customer ID# 33245:
<em>GET http://www.example.com/customers/33245</em> The same URI would be used for PUT and DELETE, to update and delete, respectively.

Here are proposed URIs for products:
<em>POST http://www.example.com/products</em> for creating a new product.

<em>GET|PUT|DELETE http://www.example.com/products/66432</em>
for reading, updating, deleting product 66432, respectively.

Now, here is where it gets fun... What about creating a new order for a customer? One option might be: POST http://www.example.com/orders And that could work to create an order, but it's arguably outside the context of a customer.

Because we want to create an order for a customer (note the relationship), this URI perhaps is not as intuitive as it could be. It could be argued that the following URI would offer better clarity: <em>POST http://www.example.com/customers/33245/orders</em> Now we know we're creating an order for customer ID# 33245.

Now what would the following return?
<em>GET http://www.example.com/customers/33245/orders</em>
Probably a list of orders that customer #33245 has created or owns. Note: we may choose to not support DELETE or PUT for that url since it's operating on a collection.

Now, to continue the hierarchical concept, what about the following URI?
<em>POST http://www.example.com/customers/33245/orders/8769/lineitems</em>
That might add a line item to order #8769 (which is for customer #33245). Right! GET for that URI might return all the line items for that order. However, if line items don't make sense only in customer context or also make sense outside the context of a customer, we would offer a POST www.example.com/orders/8769/lineitems URI.

Along those lines, because there may be multiple URIs for a given resource, we might also offer a GET http://www.example.com/orders/8769 URI that supports retrieving an order by number without having to know the customer number.

To go one layer deeper in the hierarchy:
<em>GET http://www.example.com/customers/33245/orders/8769/lineitems/1</em>
Might return only the first line item in that same order.

By now you can see how the hierarchy concept works. There aren't any hard and fast rules, only make sure the imposed structure makes sense to consumers of your services. As with everything in the craft of Software Development, naming is critical to success.

Look at some widely used APIs to get the hang of this and leverage the intuition of your teammates to refine your API resource URIs. Some example APIs are:

<ul>
    <li>Twitter: https://dev.twitter.com/docs/api</li>
    <li>Facebook: http://developers.facebook.com/docs/reference/api/</li>
    <li>LinkedIn: https://developer.linkedin.com/apis</li>
</ul>

<h3>Resource Naming Anti-Patterns</h3>

While we've discussed some examples of appropriate resource names, sometimes it's informative to see some anti-patterns. Below are some examples of poor RESTful resource URIs seen in the "wild." These are examples of what not to do!

First up, often services use a single URI to specify the service interface, using query-string parameters to specify the requested operation and/or HTTP verb. For example to update customer with ID 12345, the request for a JSON body might be:

<em>GET http://api.example.com/services?op=update_customer&amp;id=12345&amp;format=json</em>

By now, you're above doing this. Even though the 'services' URL node is a noun, this URL is not self- descriptive as the URI hierarchy is the same for all requests. Plus, it uses GET as the HTTP verb even though we're performing an update. This is counter-intuitive and is painful (even dangerous) to use as a client.

Here's another example following the same operation of updating a customer:

<em>GET http://api.example.com/update_customer/12345</em>

And its evil twin:

<em>GET http://api.example.com/customers/12345/update</em>

You'll see this one a lot as you visit other developer's service suites. Note that the developer is attempting to create RESTful resource names and has made some progress. But you're better than this —able to identify the verb phrase in the URL. Notice that we don't need to use the 'update' verb phrase in the URL because we can rely on the HTTP verb to inform that operation. Just to clarify, the following resource URL is redundant:

<em>PUT http://api.example.com/customers/12345/update</em>

With both PUT and 'update' in the request, we're offering to confuse our service consumers! Is 'update' the resource? So, we've spent some time beating the horse at this point. I'm certain you understand...

<h3>Pluralization</h3>

Let's talk about the debate between the pluralizers and the "singularizers"... Haven't heard of that debate? It does exist. Essentially, it boils down to this question...

Should URI nodes in your hierarchy be named using singular or plural nouns? For example, should your URI for retrieving a representation of a customer resource look like this:

<em>GET http://www.example.com/customer/33245</em> or: <em>GET http://www.example.com/customers/33245</em>

There are good arguments on both sides, but the commonly-accepted practice is to always use plurals in node names to keep your API URIs consistent across all HTTP methods. The reasoning is based on the concept that customers are a collection within the service suite and the ID (e.g. 33245) refers to one of those customers in the collection.

Using this rule, an example multi-node URI using pluralization would look like (emphasis added):

<em>GET http://www.example.com/<strong>customers</strong>/33245/<strong>orders</strong>/8769/<strong>lineitems</strong>/1</em>

with 'customers', 'orders', and 'lineitems' URI nodes all being their plural forms.

This implies that you only really need two base URLs for each root resource. One for creation of the resource within a collection and the second for reading, updating and deleting the resource by its identifier. For example the creation case, using customers as the example, is handled by the following URL:

<em>POST http://www.example.com/customers</em>

And the read, update and delete cases are handled by the following:

<em>GET|PUT|DELETE http://www.example.com/customers/{id}</em>

As mentioned earlier, there may be multiple URIs for a given resource, but as a minimum full CRUD capabilities are aptly handled with two simple URIs.

You ask if there is a case where pluralization doesn't make sense. Well, yes, in fact there is. When there isn't a collection concept in play. In other words, it's acceptable to use a singularized resource name when there can only be one of the resource—it's a singleton resource. For example, if there was a single, overarching configuration resource, you might use a singularized noun to represent that:

<em>GET|PUT|DELETE http://www.example.com/configuration</em>

Note the lack of a configuration ID and usage of POST verb. And say that there was only one configuration per customer, then the URL might be:

<em>GET|PUT|DELETE http://www.example.com/customers/12345/configuration</em>

Again, no ID for the configuration and no POST verb usage. Although, I'm sure that in both of these cases POST usage might be argued to be valid. Well... OK.";s:10:"post_title";s:25:"Rest API: Resource Naming";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:15:"resource-naming";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2016-08-12 11:48:49";s:17:"post_modified_gmt";s:19:"2016-08-12 04:48:49";s:21:"post_content_filtered";s:9987:"In addition to utilizing the HTTP verbs appropriately, resource naming is arguably the most debated and most important concept to grasp when creating an understandable, easily leveraged Web service API. When resources are named well, an API is intuitive and easy to use. Done poorly, that same API can feel klutzy and be difficult to use and understand. Below are a few tips to get you going when creating the resource URIs for your new API.

Essentially, a RESTful API ends up being simply a collection of URIs, HTTP calls to those URIs and some JSON and/or XML representations of resources, many of which will contain relational links. The RESTful principal of addressability is covered by the URIs. Each resource has its own address or URI—every interesting piece of information the server can provide is exposed as a resource. The constraint of uniform interface is partially addressed by the combination of URIs and HTTP verbs, and using them in line with the standards and conventions.

In deciding what resources are within your system, name them as nouns as opposed to verbs or actions. In other words, a RESTful URI should refer to a resource that is a thing instead of referring to an action. Nouns have properties as verbs do not, just another distinguishing factor.

Some example resources are:
<ul>
 	<li>Users of the system.</li>
 	<li>Courses in which a student is enrolled.</li>
 	<li>A user's timeline of posts.</li>
 	<li>The users that follow another user.</li>
 	<li>An article about horseback riding.</li>
</ul>
Each resource in a service suite will have at least one URI identifying it. And it's best when that URI makes sense and adequately describes the resource. URIs should follow a predictable, hierarchical structure to enhance understandability and, therefore, usability: predictable in the sense that they're consistent, hierarchical in the sense that data has structure—relationships. This is not a REST rule or constraint, but it enhances the API.

RESTful APIs are written for consumers. The name and structure of URIs should convey meaning to those consumers. It's often difficult to know what the data boundaries should be, but with understanding of your data, you most-likely are equipped to take a stab and what makes sense to return as a representation to your clients. Design for your clients, not for your data.

Let's say we're describing an order system with customers, orders, line items, products, etc. Consider the URIs involved in describing the resources in this service suite:
<h3>Resource URI Examples</h3>
To insert (create) a new customer in the system, we might use:
<em>POST http://www.example.com/customers</em>

To read a customer with Customer ID# 33245:
<em>GET http://www.example.com/customers/33245</em> The same URI would be used for PUT and DELETE, to update and delete, respectively.

Here are proposed URIs for products:
<em>POST http://www.example.com/products</em> for creating a new product.

<em>GET|PUT|DELETE http://www.example.com/products/66432</em>
for reading, updating, deleting product 66432, respectively.

Now, here is where it gets fun... What about creating a new order for a customer? One option might be: POST http://www.example.com/orders And that could work to create an order, but it's arguably outside the context of a customer.

Because we want to create an order for a customer (note the relationship), this URI perhaps is not as intuitive as it could be. It could be argued that the following URI would offer better clarity: <em>POST http://www.example.com/customers/33245/orders</em> Now we know we're creating an order for customer ID# 33245.

Now what would the following return?
<em>GET http://www.example.com/customers/33245/orders</em>
Probably a list of orders that customer #33245 has created or owns. Note: we may choose to not support DELETE or PUT for that url since it's operating on a collection.

Now, to continue the hierarchical concept, what about the following URI?
<em>POST http://www.example.com/customers/33245/orders/8769/lineitems</em>
That might add a line item to order #8769 (which is for customer #33245). Right! GET for that URI might return all the line items for that order. However, if line items don't make sense only in customer context or also make sense outside the context of a customer, we would offer a POST www.example.com/orders/8769/lineitems URI.

Along those lines, because there may be multiple URIs for a given resource, we might also offer a GET http://www.example.com/orders/8769 URI that supports retrieving an order by number without having to know the customer number.

To go one layer deeper in the hierarchy:
<em>GET http://www.example.com/customers/33245/orders/8769/lineitems/1</em>
Might return only the first line item in that same order.

By now you can see how the hierarchy concept works. There aren't any hard and fast rules, only make sure the imposed structure makes sense to consumers of your services. As with everything in the craft of Software Development, naming is critical to success.

Look at some widely used APIs to get the hang of this and leverage the intuition of your teammates to refine your API resource URIs. Some example APIs are:
<ul>
 	<li>Twitter: https://dev.twitter.com/docs/api</li>
 	<li>Facebook: http://developers.facebook.com/docs/reference/api/</li>
 	<li>LinkedIn: https://developer.linkedin.com/apis</li>
</ul>
<h3>Resource Naming Anti-Patterns</h3>
While we've discussed some examples of appropriate resource names, sometimes it's informative to see some anti-patterns. Below are some examples of poor RESTful resource URIs seen in the "wild." These are examples of what not to do!

First up, often services use a single URI to specify the service interface, using query-string parameters to specify the requested operation and/or HTTP verb. For example to update customer with ID 12345, the request for a JSON body might be:

<em>GET http://api.example.com/services?op=update_customer&amp;id=12345&amp;format=json</em>

By now, you're above doing this. Even though the 'services' URL node is a noun, this URL is not self- descriptive as the URI hierarchy is the same for all requests. Plus, it uses GET as the HTTP verb even though we're performing an update. This is counter-intuitive and is painful (even dangerous) to use as a client.

Here's another example following the same operation of updating a customer:

<em>GET http://api.example.com/update_customer/12345</em>

And its evil twin:

<em>GET http://api.example.com/customers/12345/update</em>

You'll see this one a lot as you visit other developer's service suites. Note that the developer is attempting to create RESTful resource names and has made some progress. But you're better than this —able to identify the verb phrase in the URL. Notice that we don't need to use the 'update' verb phrase in the URL because we can rely on the HTTP verb to inform that operation. Just to clarify, the following resource URL is redundant:

<em>PUT http://api.example.com/customers/12345/update</em>

With both PUT and 'update' in the request, we're offering to confuse our service consumers! Is 'update' the resource? So, we've spent some time beating the horse at this point. I'm certain you understand...
<h3>Pluralization</h3>
Let's talk about the debate between the pluralizers and the "singularizers"... Haven't heard of that debate? It does exist. Essentially, it boils down to this question...

Should URI nodes in your hierarchy be named using singular or plural nouns? For example, should your URI for retrieving a representation of a customer resource look like this:

<em>GET http://www.example.com/customer/33245</em> or: <em>GET http://www.example.com/customers/33245</em>

There are good arguments on both sides, but the commonly-accepted practice is to always use plurals in node names to keep your API URIs consistent across all HTTP methods. The reasoning is based on the concept that customers are a collection within the service suite and the ID (e.g. 33245) refers to one of those customers in the collection.

Using this rule, an example multi-node URI using pluralization would look like (emphasis added):

<em>GET http://www.example.com/<strong>customers</strong>/33245/<strong>orders</strong>/8769/<strong>lineitems</strong>/1</em>

with 'customers', 'orders', and 'lineitems' URI nodes all being their plural forms.

This implies that you only really need two base URLs for each root resource. One for creation of the resource within a collection and the second for reading, updating and deleting the resource by its identifier. For example the creation case, using customers as the example, is handled by the following URL:

<em>POST http://www.example.com/customers</em>

And the read, update and delete cases are handled by the following:

<em>GET|PUT|DELETE http://www.example.com/customers/{id}</em>

As mentioned earlier, there may be multiple URIs for a given resource, but as a minimum full CRUD capabilities are aptly handled with two simple URIs.

You ask if there is a case where pluralization doesn't make sense. Well, yes, in fact there is. When there isn't a collection concept in play. In other words, it's acceptable to use a singularized resource name when there can only be one of the resource—it's a singleton resource. For example, if there was a single, overarching configuration resource, you might use a singularized noun to represent that:

<em>GET|PUT|DELETE http://www.example.com/configuration</em>

Note the lack of a configuration ID and usage of POST verb. And say that there was only one configuration per customer, then the URL might be:

<em>GET|PUT|DELETE http://www.example.com/customers/12345/configuration</em>

Again, no ID for the configuration and no POST verb usage. Although, I'm sure that in both of these cases POST usage might be argued to be valid. Well... OK.";s:11:"post_parent";s:1:"0";s:4:"guid";s:25:"http://reactvn.net/?p=598";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}}s:8:"col_info";a:23:{i:0;O:8:"stdClass":13:{s:4:"name";s:2:"ID";s:7:"orgname";s:2:"ID";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:3;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:49699;s:4:"type";i:8;s:8:"decimals";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:11:"post_author";s:7:"orgname";s:11:"post_author";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:49193;s:4:"type";i:8;s:8:"decimals";i:0;}i:2;O:8:"stdClass":13:{s:4:"name";s:9:"post_date";s:7:"orgname";s:9:"post_date";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:16513;s:4:"type";i:12;s:8:"decimals";i:0;}i:3;O:8:"stdClass":13:{s:4:"name";s:13:"post_date_gmt";s:7:"orgname";s:13:"post_date_gmt";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:129;s:4:"type";i:12;s:8:"decimals";i:0;}i:4;O:8:"stdClass":13:{s:4:"name";s:12:"post_content";s:7:"orgname";s:12:"post_content";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:9899;s:6:"length";i:4294967295;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:5;O:8:"stdClass":13:{s:4:"name";s:10:"post_title";s:7:"orgname";s:10:"post_title";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:25;s:6:"length";i:262140;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:6;O:8:"stdClass":13:{s:4:"name";s:12:"post_excerpt";s:7:"orgname";s:12:"post_excerpt";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:262140;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:7;O:8:"stdClass":13:{s:4:"name";s:11:"post_status";s:7:"orgname";s:11:"post_status";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:7;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:16385;s:4:"type";i:253;s:8:"decimals";i:0;}i:8;O:8:"stdClass":13:{s:4:"name";s:14:"comment_status";s:7:"orgname";s:14:"comment_status";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:4;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:9;O:8:"stdClass":13:{s:4:"name";s:11:"ping_status";s:7:"orgname";s:11:"ping_status";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:4;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:10;O:8:"stdClass":13:{s:4:"name";s:13:"post_password";s:7:"orgname";s:13:"post_password";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:11;O:8:"stdClass":13:{s:4:"name";s:9:"post_name";s:7:"orgname";s:9:"post_name";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:15;s:6:"length";i:800;s:9:"charsetnr";i:45;s:5:"flags";i:16393;s:4:"type";i:253;s:8:"decimals";i:0;}i:12;O:8:"stdClass":13:{s:4:"name";s:7:"to_ping";s:7:"orgname";s:7:"to_ping";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:262140;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:13;O:8:"stdClass":13:{s:4:"name";s:6:"pinged";s:7:"orgname";s:6:"pinged";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:262140;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:14;O:8:"stdClass":13:{s:4:"name";s:13:"post_modified";s:7:"orgname";s:13:"post_modified";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:129;s:4:"type";i:12;s:8:"decimals";i:0;}i:15;O:8:"stdClass":13:{s:4:"name";s:17:"post_modified_gmt";s:7:"orgname";s:17:"post_modified_gmt";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:129;s:4:"type";i:12;s:8:"decimals";i:0;}i:16;O:8:"stdClass":13:{s:4:"name";s:21:"post_content_filtered";s:7:"orgname";s:21:"post_content_filtered";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:9987;s:6:"length";i:4294967295;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:17;O:8:"stdClass":13:{s:4:"name";s:11:"post_parent";s:7:"orgname";s:11:"post_parent";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:49193;s:4:"type";i:8;s:8:"decimals";i:0;}i:18;O:8:"stdClass":13:{s:4:"name";s:4:"guid";s:7:"orgname";s:4:"guid";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:25;s:6:"length";i:1020;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:19;O:8:"stdClass":13:{s:4:"name";s:10:"menu_order";s:7:"orgname";s:10:"menu_order";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:11;s:9:"charsetnr";i:63;s:5:"flags";i:32769;s:4:"type";i:3;s:8:"decimals";i:0;}i:20;O:8:"stdClass":13:{s:4:"name";s:9:"post_type";s:7:"orgname";s:9:"post_type";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:4;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:16393;s:4:"type";i:253;s:8:"decimals";i:0;}i:21;O:8:"stdClass":13:{s:4:"name";s:14:"post_mime_type";s:7:"orgname";s:14:"post_mime_type";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:400;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:22;O:8:"stdClass":13:{s:4:"name";s:13:"comment_count";s:7:"orgname";s:13:"comment_count";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:32769;s:4:"type";i:8;s:8:"decimals";i:0;}}s:8:"num_rows";i:1;s:10:"return_val";i:1;}