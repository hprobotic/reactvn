B�W<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:95:"SELECT reactvn_posts.* FROM reactvn_posts WHERE ID IN (625,621,618,615,611,604,598,594,589,584)";s:11:"last_result";a:10:{i:0;O:8:"stdClass":23:{s:2:"ID";s:3:"584";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2016-08-12 11:31:53";s:13:"post_date_gmt";s:19:"2016-08-12 04:31:53";s:12:"post_content";s:1681:"The REST architectural style describes six constraints. These constraints, applied to the architecture, were originally communicated by Roy Fielding in his doctoral dissertation (<a href="http://www.ics.uci.edu/~fielding/pubs/dissertation/rest_arch_style.htm">see detail</a>) and defines the basis of RESTful-style.

[embed]https://www.youtube.com/watch?v=llpr5924N7E[/embed]

<strong>The six constraints are: (click the constraint to read more)</strong>

<ul id="constraint-accordian">
    <li><a href="http://www.restapitutorial.com/lessons/whatisrest.html#" data-toggle="collapse" data-target="#uniform-interface" data-parent="#constraint-accordian">Uniform Interface</a></li>
    <li><a href="http://www.restapitutorial.com/lessons/whatisrest.html#" data-toggle="collapse" data-target="#stateless" data-parent="#constraint-accordian">Stateless</a></li>
    <li><a href="http://www.restapitutorial.com/lessons/whatisrest.html#" data-toggle="collapse" data-target="#cacheable" data-parent="#constraint-accordian">Cacheable</a></li>
    <li><a href="http://www.restapitutorial.com/lessons/whatisrest.html#" data-toggle="collapse" data-target="#client-server" data-parent="#constraint-accordian">Client-Server</a></li>
    <li><a href="http://www.restapitutorial.com/lessons/whatisrest.html#" data-toggle="collapse" data-target="#layered-system" data-parent="#constraint-accordian">Layered System</a></li>
    <li><a href="http://www.restapitutorial.com/lessons/whatisrest.html#" data-toggle="collapse" data-target="#code-on-demand" data-parent="#constraint-accordian">Code on Demand (optional)</a></li>
</ul>

<p style="text-align: right;"><strong>Restapitutorial.com</strong></p>";s:10:"post_title";s:23:"Rest API: What Is REST?";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:21:"rest-api-what-is-rest";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2016-08-12 11:33:31";s:17:"post_modified_gmt";s:19:"2016-08-12 04:33:31";s:21:"post_content_filtered";s:1680:"The REST architectural style describes six constraints. These constraints, applied to the architecture, were originally communicated by Roy Fielding in his doctoral dissertation (<a href="http://www.ics.uci.edu/~fielding/pubs/dissertation/rest_arch_style.htm">see detail</a>) and defines the basis of RESTful-style.

[embed]https://www.youtube.com/watch?v=llpr5924N7E[/embed]

<strong>The six constraints are: (click the constraint to read more)</strong>
<ul id="constraint-accordian">
 	<li><a href="http://www.restapitutorial.com/lessons/whatisrest.html#" data-toggle="collapse" data-target="#uniform-interface" data-parent="#constraint-accordian">Uniform Interface</a></li>
 	<li><a href="http://www.restapitutorial.com/lessons/whatisrest.html#" data-toggle="collapse" data-target="#stateless" data-parent="#constraint-accordian">Stateless</a></li>
 	<li><a href="http://www.restapitutorial.com/lessons/whatisrest.html#" data-toggle="collapse" data-target="#cacheable" data-parent="#constraint-accordian">Cacheable</a></li>
 	<li><a href="http://www.restapitutorial.com/lessons/whatisrest.html#" data-toggle="collapse" data-target="#client-server" data-parent="#constraint-accordian">Client-Server</a></li>
 	<li><a href="http://www.restapitutorial.com/lessons/whatisrest.html#" data-toggle="collapse" data-target="#layered-system" data-parent="#constraint-accordian">Layered System</a></li>
 	<li><a href="http://www.restapitutorial.com/lessons/whatisrest.html#" data-toggle="collapse" data-target="#code-on-demand" data-parent="#constraint-accordian">Code on Demand (optional)</a></li>
</ul>
<p style="text-align: right;"><strong>Restapitutorial.com</strong></p>";s:11:"post_parent";s:1:"0";s:4:"guid";s:25:"http://reactvn.net/?p=584";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"1";}i:1;O:8:"stdClass":23:{s:2:"ID";s:3:"589";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2016-08-12 11:34:31";s:13:"post_date_gmt";s:19:"2016-08-12 04:34:31";s:12:"post_content";s:9844:"Whether it's technically RESTful or not (according to the six constraints mentioned previously), here are a few recommended REST-like concepts. These six quick tips will result in better, more usable services.

<h2>Use HTTP Verbs to Make Your Requests Mean Something</h2>

API consumers are capable of sending GET, POST, PUT, and DELETE verbs, which greatly enhance the clarity of a given request.

Generally, the four primary HTTP verbs are used as follows:

<dl>
    <dt>GET</dt>
    <dd>Read a specific resource (by an identifier) or a collection of resources.</dd>
    <dt>PUT</dt>
    <dd>Update a specific resource (by an identifier) or a collection of resources. Can also be used to create a specific resource if the resource identifier is know before-hand.</dd>
    <dt>DELETE</dt>
    <dd>Remove/delete a specific resource by an identifier.</dd>
    <dt>POST</dt>
    <dd>Create a new resource. Also a catch-all verb for operations that don't fit into the other categories.</dd>
</dl>

<h3>Note</h3>

GET requests must not change any underlying resource data. Measurements and tracking which update data may still occur, but the resource data identified by the URI should not change.

<h2>Provide Sensible Resource Names</h2>

Producing a great API is 80% art and 20% science. Creating a URL hierarchy representing sensible resources is the art part. Having sensible resource names (which are just URL paths, such as /customers/12345/orders) improves the clarity of what a given request does.

Appropriate resource names provide context for a service request, increasing understandability of the API. Resources are viewed hierarchically via their URI names, offering consumers a friendly, easily-understood hierarchy of resources to leverage in their applications.

Here are some quick-hit rules for URL path (resource name) design:

<ul>
    <li>Use identifiers in your URLs instead of in the query-string. Using URL query-string parameters is fantastic for filtering, but not for resource names.
<ul>
    <li><strong>Good:</strong> /users/12345</li>
    <li><strong>Poor:</strong> /api?type=user&amp;id=23</li>
</ul>
</li>
    <li>Leverage the hierarchical nature of the URL to imply structure.</li>
    <li>Design for your clients, not for your data.</li>
    <li>Resource names should be nouns. Avoid verbs as resource names, to improve clarity. Use the HTTP methods to specify the verb portion of the request.</li>
    <li>Use plurals in URL segments to keep your API URIs consistent across all HTTP methods, using the collection metaphor.
<ul>
    <li><strong>Recommended:</strong> /customers/33245/orders/8769/lineitems/1</li>
    <li><strong>Not:</strong> /customer/33245/order/8769/lineitem/1</li>
</ul>
</li>
    <li>Avoid using collection verbiage in URLs. For example 'customer_list' as a resource. Use pluralization to indicate the collection metaphor (e.g. customers vs. customer_list).</li>
    <li>Use lower-case in URL segments, separating words with underscores ('_') or hyphens ('-'). Some servers ignore case so it's best to be clear.</li>
    <li>Keep URLs as short as possible, with as few segments as makes sense.</li>
</ul>

<h2>Use HTTP Response Codes to Indicate Status</h2>

Response status codes are part of the HTTP specification. There are quite a number of them to address the most common situations. In the spirit of having our RESTful services embrace the HTTP specification, our Web APIs should return relevant HTTP status codes. For example, when a resource is successfully created (e.g. from a POST request), the API should return HTTP status code 201. A list of valid <a href="http://www.restapitutorial.com/httpstatuscodes.html">HTTP status codes</a> is available <a href="http://www.restapitutorial.com/httpstatuscodes.html">here</a> which lists detailed descriptions of each.

Suggested usages for the "Top 10" HTTP Response Status Codes are as follows:

<dl>
    <dt>200 OK</dt>
    <dd>General success status code. This is the most common code. Used to indicate success.</dd>
    <dt>201 CREATED</dt>
    <dd>Successful creation occurred (via either POST or PUT). Set the Location header to contain a link to the newly-created resource (on POST). Response body content may or may not be present.</dd>
    <dt>204 NO CONTENT</dt>
    <dd>Indicates success but nothing is in the response body, often used for DELETE and PUT operations.</dd>
    <dt>400 BAD REQUEST</dt>
    <dd>General error for when fulfilling the request would cause an invalid state. Domain validation errors, missing data, etc. are some examples.</dd>
    <dt>401 UNAUTHORIZED</dt>
    <dd>Error code response for missing or invalid authentication token.</dd>
    <dt>403 FORBIDDEN</dt>
    <dd>Error code for when the user is not authorized to perform the operation or the resource is unavailable for some reason (e.g. time constraints, etc.).</dd>
    <dt>404 NOT FOUND</dt>
    <dd>Used when the requested resource is not found, whether it doesn't exist or if there was a 401 or 403 that, for security reasons, the service wants to mask.</dd>
    <dt>405 METHOD NOT ALLOWED</dt>
    <dd>Used to indicate that the requested URL exists, but the requested HTTP method is not applicable. For example, POST <em>/users/12345</em> where the API doesn't support creation of resources this way (with a provided ID). The Allow HTTP header must be set when returning a 405 to indicate the HTTP methods that are supported. In the previous case, the header would look like "Allow: GET, PUT, DELETE"</dd>
    <dt>409 CONFLICT</dt>
    <dd>Whenever a resource conflict would be caused by fulfilling the request. Duplicate entries, such as trying to create two customers with the same information, and deleting root objects when cascade-delete is not supported are a couple of examples.</dd>
    <dt>500 INTERNAL SERVER ERROR</dt>
    <dd>Never return this intentionally. The general catch-all error when the server-side throws an exception. Use this only for errors that the consumer cannot address from their end.</dd>
</dl>

<h2>Offer Both JSON and XML</h2>

Favor JSON support unless you're in a highly-standardized and regulated industry that requires XML, schema validation and namespaces, and offer both JSON and XML unless the costs are staggering. Ideally, let consumers switch between formats using the HTTP Accept header, or by just changing an extension from .xml to .json on the URL.

Be aware that as soon as we start talking about XML support, we start talking about schemas for validation, namespaces, etc. Unless required by your industry, avoid supporting all that complexity initially, if ever. JSON is designed to be simple, terse and functional. Make your XML look like that if you can.

In other words, make the XML that is returned more JSON-like — simple and easy to read, without the schema and namespace details present, just data and links. If it ends up being more complex than this, the cost of XML will be staggering. In my experience no one has used XML responses anyway for the last several years, it's just too expensive to consume.

Note that <a href="http://json-schema.org/">JSON-Schema</a> offers schema-style validation capabilities, if you need that sort of thing.

<h2>Create Fine-Grained Resources</h2>

When starting out, it's best to create APIs that mimic the underlying application domain or database architecture of your system. Eventually, you'll want aggregate services that utilize multiple underlying resources to reduce chattiness. However, it's much easier to create larger resources later from individual resources than it is to create fine-grained or individual resources from larger aggregates. Make it easy on yourself and start with small, easily defined resources, providing CRUD functionality on those. You can create those use-case-oriented, chattiness-reducing resources later.

<h2>Consider Connectedness</h2>

One of the principles of REST is connectedness—via hypermedia links (search HATEOAS). While services are still useful without them, APIs become more self-descriptive and discoverable when links are returned in the response. At the very least, a 'self' link reference informs clients how the data was or can be retrieved. Additionally, utilize the HTTP Location header to contain a link on resource creation via POST (or PUT). For collections returned in a response that support pagination, 'first', 'last', 'next' and 'prev' links at a minimum are very helpful.

Regarding linking formats, there are many. The HTTP Web Linking Specification (<a href="http://tools.ietf.org/search/rfc5988">RFC5988</a>) explains a link as follows:

<blockquote>a link is a typed connection between two resources that are identified by Internationalised Resource Identifiers (IRIs) [<a href="http://tools.ietf.org/search/rfc3987">RFC3987</a>], and is comprised of:
<ul>
    <li>A context IRI,</li>
    <li>a link relation type</li>
    <li>a target IRI, and</li>
    <li>optionally, target attributes.</li>
</ul>
A link can be viewed as a statement of the form "{context IRI} has a {relation type} resource at {target IRI}, which has {target attributes}."</blockquote>

At the very least, place links in the HTTP Link header as recommended in the specification, or embrace a JSON representation of this HTTP link style (such as Atom-style links, see: <a href="http://tools.ietf.org/search/rfc4287#section-4.2.7">RFC4287</a>) in your JSON representations. Later, you can layer in more complex linking styles such as <a href="http://stateless.co/hal_specification.html">HAL+JSON</a>, <a href="https://github.com/kevinswiber/siren">Siren</a>, <a href="http://amundsen.com/media-types/collection/">Collection+JSON</a>, and/or <a href="http://json-ld.org/">JSON-LD</a>, etc. as your REST APIs become more mature.

<p style="text-align: right;"><strong>restapitutorial.com</strong></p>";s:10:"post_title";s:20:"REST API: Quick Tips";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:19:"rest-api-quick-tips";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2016-08-12 11:35:16";s:17:"post_modified_gmt";s:19:"2016-08-12 04:35:16";s:21:"post_content_filtered";s:9828:"Whether it's technically RESTful or not (according to the six constraints mentioned previously), here are a few recommended REST-like concepts. These six quick tips will result in better, more usable services.
<h2>Use HTTP Verbs to Make Your Requests Mean Something</h2>
API consumers are capable of sending GET, POST, PUT, and DELETE verbs, which greatly enhance the clarity of a given request.

Generally, the four primary HTTP verbs are used as follows:
<dl>
 	<dt>GET</dt>
 	<dd>Read a specific resource (by an identifier) or a collection of resources.</dd>
 	<dt>PUT</dt>
 	<dd>Update a specific resource (by an identifier) or a collection of resources. Can also be used to create a specific resource if the resource identifier is know before-hand.</dd>
 	<dt>DELETE</dt>
 	<dd>Remove/delete a specific resource by an identifier.</dd>
 	<dt>POST</dt>
 	<dd>Create a new resource. Also a catch-all verb for operations that don't fit into the other categories.</dd>
</dl>
<h3>Note</h3>
GET requests must not change any underlying resource data. Measurements and tracking which update data may still occur, but the resource data identified by the URI should not change.
<h2>Provide Sensible Resource Names</h2>
Producing a great API is 80% art and 20% science. Creating a URL hierarchy representing sensible resources is the art part. Having sensible resource names (which are just URL paths, such as /customers/12345/orders) improves the clarity of what a given request does.

Appropriate resource names provide context for a service request, increasing understandability of the API. Resources are viewed hierarchically via their URI names, offering consumers a friendly, easily-understood hierarchy of resources to leverage in their applications.

Here are some quick-hit rules for URL path (resource name) design:
<ul>
 	<li>Use identifiers in your URLs instead of in the query-string. Using URL query-string parameters is fantastic for filtering, but not for resource names.
<ul>
 	<li><strong>Good:</strong> /users/12345</li>
 	<li><strong>Poor:</strong> /api?type=user&amp;id=23</li>
</ul>
</li>
 	<li>Leverage the hierarchical nature of the URL to imply structure.</li>
 	<li>Design for your clients, not for your data.</li>
 	<li>Resource names should be nouns. Avoid verbs as resource names, to improve clarity. Use the HTTP methods to specify the verb portion of the request.</li>
 	<li>Use plurals in URL segments to keep your API URIs consistent across all HTTP methods, using the collection metaphor.
<ul>
 	<li><strong>Recommended:</strong> /customers/33245/orders/8769/lineitems/1</li>
 	<li><strong>Not:</strong> /customer/33245/order/8769/lineitem/1</li>
</ul>
</li>
 	<li>Avoid using collection verbiage in URLs. For example 'customer_list' as a resource. Use pluralization to indicate the collection metaphor (e.g. customers vs. customer_list).</li>
 	<li>Use lower-case in URL segments, separating words with underscores ('_') or hyphens ('-'). Some servers ignore case so it's best to be clear.</li>
 	<li>Keep URLs as short as possible, with as few segments as makes sense.</li>
</ul>
<h2>Use HTTP Response Codes to Indicate Status</h2>
Response status codes are part of the HTTP specification. There are quite a number of them to address the most common situations. In the spirit of having our RESTful services embrace the HTTP specification, our Web APIs should return relevant HTTP status codes. For example, when a resource is successfully created (e.g. from a POST request), the API should return HTTP status code 201. A list of valid <a href="http://www.restapitutorial.com/httpstatuscodes.html">HTTP status codes</a> is available <a href="http://www.restapitutorial.com/httpstatuscodes.html">here</a> which lists detailed descriptions of each.

Suggested usages for the "Top 10" HTTP Response Status Codes are as follows:
<dl>
 	<dt>200 OK</dt>
 	<dd>General success status code. This is the most common code. Used to indicate success.</dd>
 	<dt>201 CREATED</dt>
 	<dd>Successful creation occurred (via either POST or PUT). Set the Location header to contain a link to the newly-created resource (on POST). Response body content may or may not be present.</dd>
 	<dt>204 NO CONTENT</dt>
 	<dd>Indicates success but nothing is in the response body, often used for DELETE and PUT operations.</dd>
 	<dt>400 BAD REQUEST</dt>
 	<dd>General error for when fulfilling the request would cause an invalid state. Domain validation errors, missing data, etc. are some examples.</dd>
 	<dt>401 UNAUTHORIZED</dt>
 	<dd>Error code response for missing or invalid authentication token.</dd>
 	<dt>403 FORBIDDEN</dt>
 	<dd>Error code for when the user is not authorized to perform the operation or the resource is unavailable for some reason (e.g. time constraints, etc.).</dd>
 	<dt>404 NOT FOUND</dt>
 	<dd>Used when the requested resource is not found, whether it doesn't exist or if there was a 401 or 403 that, for security reasons, the service wants to mask.</dd>
 	<dt>405 METHOD NOT ALLOWED</dt>
 	<dd>Used to indicate that the requested URL exists, but the requested HTTP method is not applicable. For example, POST <em>/users/12345</em> where the API doesn't support creation of resources this way (with a provided ID). The Allow HTTP header must be set when returning a 405 to indicate the HTTP methods that are supported. In the previous case, the header would look like "Allow: GET, PUT, DELETE"</dd>
 	<dt>409 CONFLICT</dt>
 	<dd>Whenever a resource conflict would be caused by fulfilling the request. Duplicate entries, such as trying to create two customers with the same information, and deleting root objects when cascade-delete is not supported are a couple of examples.</dd>
 	<dt>500 INTERNAL SERVER ERROR</dt>
 	<dd>Never return this intentionally. The general catch-all error when the server-side throws an exception. Use this only for errors that the consumer cannot address from their end.</dd>
</dl>
<h2>Offer Both JSON and XML</h2>
Favor JSON support unless you're in a highly-standardized and regulated industry that requires XML, schema validation and namespaces, and offer both JSON and XML unless the costs are staggering. Ideally, let consumers switch between formats using the HTTP Accept header, or by just changing an extension from .xml to .json on the URL.

Be aware that as soon as we start talking about XML support, we start talking about schemas for validation, namespaces, etc. Unless required by your industry, avoid supporting all that complexity initially, if ever. JSON is designed to be simple, terse and functional. Make your XML look like that if you can.

In other words, make the XML that is returned more JSON-like — simple and easy to read, without the schema and namespace details present, just data and links. If it ends up being more complex than this, the cost of XML will be staggering. In my experience no one has used XML responses anyway for the last several years, it's just too expensive to consume.

Note that <a href="http://json-schema.org/">JSON-Schema</a> offers schema-style validation capabilities, if you need that sort of thing.
<h2>Create Fine-Grained Resources</h2>
When starting out, it's best to create APIs that mimic the underlying application domain or database architecture of your system. Eventually, you'll want aggregate services that utilize multiple underlying resources to reduce chattiness. However, it's much easier to create larger resources later from individual resources than it is to create fine-grained or individual resources from larger aggregates. Make it easy on yourself and start with small, easily defined resources, providing CRUD functionality on those. You can create those use-case-oriented, chattiness-reducing resources later.
<h2>Consider Connectedness</h2>
One of the principles of REST is connectedness—via hypermedia links (search HATEOAS). While services are still useful without them, APIs become more self-descriptive and discoverable when links are returned in the response. At the very least, a 'self' link reference informs clients how the data was or can be retrieved. Additionally, utilize the HTTP Location header to contain a link on resource creation via POST (or PUT). For collections returned in a response that support pagination, 'first', 'last', 'next' and 'prev' links at a minimum are very helpful.

Regarding linking formats, there are many. The HTTP Web Linking Specification (<a href="http://tools.ietf.org/search/rfc5988">RFC5988</a>) explains a link as follows:
<blockquote>a link is a typed connection between two resources that are identified by Internationalised Resource Identifiers (IRIs) [<a href="http://tools.ietf.org/search/rfc3987">RFC3987</a>], and is comprised of:
<ul>
 	<li>A context IRI,</li>
 	<li>a link relation type</li>
 	<li>a target IRI, and</li>
 	<li>optionally, target attributes.</li>
</ul>
A link can be viewed as a statement of the form "{context IRI} has a {relation type} resource at {target IRI}, which has {target attributes}."</blockquote>
At the very least, place links in the HTTP Link header as recommended in the specification, or embrace a JSON representation of this HTTP link style (such as Atom-style links, see: <a href="http://tools.ietf.org/search/rfc4287#section-4.2.7">RFC4287</a>) in your JSON representations. Later, you can layer in more complex linking styles such as <a href="http://stateless.co/hal_specification.html">HAL+JSON</a>, <a href="https://github.com/kevinswiber/siren">Siren</a>, <a href="http://amundsen.com/media-types/collection/">Collection+JSON</a>, and/or <a href="http://json-ld.org/">JSON-LD</a>, etc. as your REST APIs become more mature.
<p style="text-align: right;"><strong>restapitutorial.com</strong></p>";s:11:"post_parent";s:1:"0";s:4:"guid";s:25:"http://reactvn.net/?p=589";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}i:2;O:8:"stdClass":23:{s:2:"ID";s:3:"594";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2016-08-12 11:41:09";s:13:"post_date_gmt";s:19:"2016-08-12 04:41:09";s:12:"post_content";s:9369:"<div class="row">
<div class="span12">

The HTTP verbs comprise a major portion of our “uniform interface” constraint and provide us the action counterpart to the noun-based resource. The primary or most-commonly-used HTTP verbs (or methods, as they are properly called) are POST, GET, PUT, PATCH, and DELETE. These correspond to create, read, update, and delete (or CRUD) operations, respectively. There are a number of other verbs, too, but are utilized less frequently. Of those less-frequent methods, OPTIONS and HEAD are used more often than others.

Below is a table summarizing recommended return values of the primary HTTP methods in combination with the resource URIs:
<table class="table table-striped table-bordered">
<thead>
<tr>
<th>HTTP Verb</th>
<th>CRUD</th>
<th>Entire Collection (e.g. /customers)</th>
<th>Specific Item (e.g. /customers/{id})</th>
</tr>
</thead>
<tbody>
<tr>
<td>POST</td>
<td>Create</td>
<td>201 (Created), 'Location' header with link to /customers/{id} containing new ID.</td>
<td>404 (Not Found), 409 (Conflict) if resource already exists..</td>
</tr>
<tr>
<td>GET</td>
<td>Read</td>
<td>200 (OK), list of customers. Use pagination, sorting and filtering to navigate big lists.</td>
<td>200 (OK), single customer. 404 (Not Found), if ID not found or invalid.</td>
</tr>
<tr>
<td>PUT</td>
<td>Update/Replace</td>
<td>404 (Not Found), unless you want to update/replace every resource in the entire collection.</td>
<td>200 (OK) or 204 (No Content). 404 (Not Found), if ID not found or invalid.</td>
</tr>
<tr>
<td>PATCH</td>
<td>Update/Modify</td>
<td>404 (Not Found), unless you want to modify the collection itself.</td>
<td>200 (OK) or 204 (No Content). 404 (Not Found), if ID not found or invalid.</td>
</tr>
<tr>
<td>DELETE</td>
<td>Delete</td>
<td>404 (Not Found), unless you want to delete the whole collection—not often desirable.</td>
<td>200 (OK). 404 (Not Found), if ID not found or invalid.</td>
</tr>
</tbody>
</table>
</div>
</div>

<div class="row">
<div class="span12">

Below is a more-detailed discussion of the main HTTP methods.
<h3>POST</h3>
The POST verb is most-often utilized to **create** new resources. In particular, it's used to create subordinate resources. That is, subordinate to some other (e.g. parent) resource. In other words, when creating a new resource, POST to the parent and the service takes care of associating the new resource with the parent, assigning an ID (new resource URI), etc.

On successful creation, return HTTP status 201, returning a Location header with a link to the newly-created resource with the 201 HTTP status.

POST is neither safe nor idempotent. It is therefore recommended for non-idempotent resource requests. Making two identical POST requests will most-likely result in two resources containing the same information.

<strong>Examples:</strong>
<ul>
    <li><em>POST http://www.example.com/customers</em></li>
    <li><em>POST http://www.example.com/customers/12345/orders</em></li>
</ul>
<h3>GET</h3>
The HTTP GET method is used to **read** (or retrieve) a representation of a resource. In the “happy” (or non-error) path, GET returns a representation in XML or JSON and an HTTP response code of 200 (OK). In an error case, it most often returns a 404 (NOT FOUND) or 400 (BAD REQUEST).

According to the design of the HTTP specification, GET (along with HEAD) requests are used only to read data and not change it. Therefore, when used this way, they are considered safe. That is, they can be called without risk of data modification or corruption—calling it once has the same effect as calling it 10 times, or none at all. Additionally, GET (and HEAD) is idempotent, which means that making multiple identical requests ends up having the same result as a single request.

Do not expose unsafe operations via GET—it should never modify any resources on the server.

<strong>Examples:</strong>
<ul>
    <li><em>GET http://www.example.com/customers/12345</em></li>
    <li><em>GET http://www.example.com/customers/12345/orders</em></li>
    <li><em>GET http://www.example.com/buckets/sample</em></li>
</ul>
<h3>PUT</h3>
PUT is most-often utilized for **update** capabilities, PUT-ing to a known resource URI with the request body containing the newly-updated representation of the original resource.

However, PUT can also be used to create a resource in the case where the resource ID is chosen by the client instead of by the server. In other words, if the PUT is to a URI that contains the value of a non-existent resource ID. Again, the request body contains a resource representation. Many feel this is convoluted and confusing. Consequently, this method of creation should be used sparingly, if at all.

Alternatively, use POST to create new resources and provide the client-defined ID in the body representation—presumably to a URI that doesn't include the ID of the resource (see POST below).

On successful update, return 200 (or 204 if not returning any content in the body) from a PUT. If using PUT for create, return HTTP status 201 on successful creation. A body in the response is optional—providing one consumes more bandwidth. It is not necessary to return a link via a Location header in the creation case since the client already set the resource ID.

PUT is not a safe operation, in that it modifies (or creates) state on the server, but it is idempotent. In other words, if you create or update a resource using PUT and then make that same call again, the resource is still there and still has the same state as it did with the first call.

If, for instance, calling PUT on a resource increments a counter within the resource, the call is no longer idempotent. Sometimes that happens and it may be enough to document that the call is not idempotent. However, it's recommended to keep PUT requests idempotent. It is strongly recommended to use POST for non-idempotent requests.

<strong>Examples:</strong>
<ul>
    <li><em>PUT http://www.example.com/customers/12345</em></li>
    <li><em>PUT http://www.example.com/customers/12345/orders/98765</em></li>
    <li><em>PUT http://www.example.com/buckets/secret_stuff</em></li>
</ul>
<h3>PATCH</h3>
</div>
PATCH is used for **modify** capabilities. The PATCH request only needs to contain the changes to the resource, not the complete resource.

This resembles PUT, but the body contains a set of instructions describing how a resource currently residing on the server should be modified to produce a new version. This means that the PATCH body should not just be a modified part of the resource, but in some kind of patch language like JSON Patch or XML Patch.

PATCH is neither safe nor idempotent. However, a PATCH request can be issued in such a way as to be idempotent, which also helps prevent bad outcomes from collisions between two PATCH requests on the same resource in a similar time frame. Collisions from multiple PATCH requests may be more dangerous than PUT collisions because some patch formats need to operate from a known base-point or else they will corrupt the resource. Clients using this kind of patch application should use a conditional request such that the request will fail if the resource has been updated since the client last accessed the resource. For example, the client can use a strong ETag in an If-Match header on the PATCH request.

<strong>Examples:</strong>
<ul>
    <li><em>PATCH http://www.example.com/customers/12345</em></li>
    <li><em>PATCH http://www.example.com/customers/12345/orders/98765</em></li>
    <li><em>PATCH http://www.example.com/buckets/secret_stuff</em></li>
</ul>
<h3>DELETE</h3>
DELETE is pretty easy to understand. It is used to **delete** a resource identified by a URI.

On successful deletion, return HTTP status 200 (OK) along with a response body, perhaps the representation of the deleted item (often demands too much bandwidth), or a wrapped response (see Return Values below). Either that or return HTTP status 204 (NO CONTENT) with no response body. In other words, a 204 status with no body, or the JSEND-style response and HTTP status 200 are the recommended responses.

HTTP-spec-wise, DELETE operations are idempotent. If you DELETE a resource, it's removed. Repeatedly calling DELETE on that resource ends up the same: the resource is gone. If calling DELETE say, decrements a counter (within the resource), the DELETE call is no longer idempotent. As mentioned previously, usage statistics and measurements may be updated while still considering the service idempotent as long as no resource data is changed. Using POST for non-idempotent resource requests is recommended.

There is a caveat about DELETE idempotence, however. Calling DELETE on a resource a second time will often return a 404 (NOT FOUND) since it was already removed and therefore is no longer findable. This, by some opinions, makes DELETE operations no longer idempotent, however, the end-state of the resource is the same. Returning a 404 is acceptable and communicates accurately the status of the call.

<strong>Examples:</strong>
<ul>
    <li><em>DELETE http://www.example.com/customers/12345</em></li>
    <li><em>DELETE http://www.example.com/customers/12345/orders</em></li>
    <li><em>DELETE http://www.example.com/bucket/sample</em></li>
</ul>
<p style="text-align: right;"><strong>restapitutorial.com</strong></p>

</div>";s:10:"post_title";s:39:"Using HTTP Methods for RESTful Services";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:39:"using-http-methods-for-restful-services";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2016-08-12 11:41:49";s:17:"post_modified_gmt";s:19:"2016-08-12 04:41:49";s:21:"post_content_filtered";s:9469:"<div class="row">
<div class="span12">

The HTTP verbs comprise a major portion of our “uniform interface” constraint and provide us the action counterpart to the noun-based resource. The primary or most-commonly-used HTTP verbs (or methods, as they are properly called) are POST, GET, PUT, PATCH, and DELETE. These correspond to create, read, update, and delete (or CRUD) operations, respectively. There are a number of other verbs, too, but are utilized less frequently. Of those less-frequent methods, OPTIONS and HEAD are used more often than others.

Below is a table summarizing recommended return values of the primary HTTP methods in combination with the resource URIs:
<table class="table table-striped table-bordered">
<thead>
<tr>
<th>HTTP Verb</th>
<th>CRUD</th>
<th>Entire Collection (e.g. /customers)</th>
<th>Specific Item (e.g. /customers/{id})</th>
</tr>
</thead>
<tbody>
<tr>
<td>POST</td>
<td>Create</td>
<td>201 (Created), 'Location' header with link to /customers/{id} containing new ID.</td>
<td>404 (Not Found), 409 (Conflict) if resource already exists..</td>
</tr>
<tr>
<td>GET</td>
<td>Read</td>
<td>200 (OK), list of customers. Use pagination, sorting and filtering to navigate big lists.</td>
<td>200 (OK), single customer. 404 (Not Found), if ID not found or invalid.</td>
</tr>
<tr>
<td>PUT</td>
<td>Update/Replace</td>
<td>404 (Not Found), unless you want to update/replace every resource in the entire collection.</td>
<td>200 (OK) or 204 (No Content). 404 (Not Found), if ID not found or invalid.</td>
</tr>
<tr>
<td>PATCH</td>
<td>Update/Modify</td>
<td>404 (Not Found), unless you want to modify the collection itself.</td>
<td>200 (OK) or 204 (No Content). 404 (Not Found), if ID not found or invalid.</td>
</tr>
<tr>
<td>DELETE</td>
<td>Delete</td>
<td>404 (Not Found), unless you want to delete the whole collection—not often desirable.</td>
<td>200 (OK). 404 (Not Found), if ID not found or invalid.</td>
</tr>
</tbody>
</table>
</div>
</div>
<div class="row">
<div class="span12">

Below is a more-detailed discussion of the main HTTP methods.
<h3>POST</h3>
The POST verb is most-often utilized to **create** new resources. In particular, it's used to create subordinate resources. That is, subordinate to some other (e.g. parent) resource. In other words, when creating a new resource, POST to the parent and the service takes care of associating the new resource with the parent, assigning an ID (new resource URI), etc.

On successful creation, return HTTP status 201, returning a Location header with a link to the newly-created resource with the 201 HTTP status.

POST is neither safe nor idempotent. It is therefore recommended for non-idempotent resource requests. Making two identical POST requests will most-likely result in two resources containing the same information.

<strong>Examples:</strong>
<ul>
 	<li><em>POST http://www.example.com/customers</em></li>
 	<li><em>POST http://www.example.com/customers/12345/orders</em></li>
</ul>
<h3>GET</h3>
The HTTP GET method is used to **read** (or retrieve) a representation of a resource. In the “happy” (or non-error) path, GET returns a representation in XML or JSON and an HTTP response code of 200 (OK). In an error case, it most often returns a 404 (NOT FOUND) or 400 (BAD REQUEST).

According to the design of the HTTP specification, GET (along with HEAD) requests are used only to read data and not change it. Therefore, when used this way, they are considered safe. That is, they can be called without risk of data modification or corruption—calling it once has the same effect as calling it 10 times, or none at all. Additionally, GET (and HEAD) is idempotent, which means that making multiple identical requests ends up having the same result as a single request.

Do not expose unsafe operations via GET—it should never modify any resources on the server.

<strong>Examples:</strong>
<ul>
 	<li><em>GET http://www.example.com/customers/12345</em></li>
 	<li><em>GET http://www.example.com/customers/12345/orders</em></li>
 	<li><em>GET http://www.example.com/buckets/sample</em></li>
</ul>
<h3>PUT</h3>
PUT is most-often utilized for **update** capabilities, PUT-ing to a known resource URI with the request body containing the newly-updated representation of the original resource.

However, PUT can also be used to create a resource in the case where the resource ID is chosen by the client instead of by the server. In other words, if the PUT is to a URI that contains the value of a non-existent resource ID. Again, the request body contains a resource representation. Many feel this is convoluted and confusing. Consequently, this method of creation should be used sparingly, if at all.

Alternatively, use POST to create new resources and provide the client-defined ID in the body representation—presumably to a URI that doesn't include the ID of the resource (see POST below).

On successful update, return 200 (or 204 if not returning any content in the body) from a PUT. If using PUT for create, return HTTP status 201 on successful creation. A body in the response is optional—providing one consumes more bandwidth. It is not necessary to return a link via a Location header in the creation case since the client already set the resource ID.

PUT is not a safe operation, in that it modifies (or creates) state on the server, but it is idempotent. In other words, if you create or update a resource using PUT and then make that same call again, the resource is still there and still has the same state as it did with the first call.

If, for instance, calling PUT on a resource increments a counter within the resource, the call is no longer idempotent. Sometimes that happens and it may be enough to document that the call is not idempotent. However, it's recommended to keep PUT requests idempotent. It is strongly recommended to use POST for non-idempotent requests.

<strong>Examples:</strong>
<ul>
 	<li><em>PUT http://www.example.com/customers/12345</em></li>
 	<li><em>PUT http://www.example.com/customers/12345/orders/98765</em></li>
 	<li><em>PUT http://www.example.com/buckets/secret_stuff</em></li>
</ul>
<h3>PATCH</h3>
</div>
PATCH is used for **modify** capabilities. The PATCH request only needs to contain the changes to the resource, not the complete resource.

This resembles PUT, but the body contains a set of instructions describing how a resource currently residing on the server should be modified to produce a new version. This means that the PATCH body should not just be a modified part of the resource, but in some kind of patch language like JSON Patch or XML Patch.

PATCH is neither safe nor idempotent. However, a PATCH request can be issued in such a way as to be idempotent, which also helps prevent bad outcomes from collisions between two PATCH requests on the same resource in a similar time frame. Collisions from multiple PATCH requests may be more dangerous than PUT collisions because some patch formats need to operate from a known base-point or else they will corrupt the resource. Clients using this kind of patch application should use a conditional request such that the request will fail if the resource has been updated since the client last accessed the resource. For example, the client can use a strong ETag in an If-Match header on the PATCH request.

<strong>Examples:</strong>
<ul>
 	<li><em>PATCH http://www.example.com/customers/12345</em></li>
 	<li><em>PATCH http://www.example.com/customers/12345/orders/98765</em></li>
 	<li><em>PATCH http://www.example.com/buckets/secret_stuff</em></li>
</ul>
<h3>DELETE</h3>
DELETE is pretty easy to understand. It is used to **delete** a resource identified by a URI.

On successful deletion, return HTTP status 200 (OK) along with a response body, perhaps the representation of the deleted item (often demands too much bandwidth), or a wrapped response (see Return Values below). Either that or return HTTP status 204 (NO CONTENT) with no response body. In other words, a 204 status with no body, or the JSEND-style response and HTTP status 200 are the recommended responses.

HTTP-spec-wise, DELETE operations are idempotent. If you DELETE a resource, it's removed. Repeatedly calling DELETE on that resource ends up the same: the resource is gone. If calling DELETE say, decrements a counter (within the resource), the DELETE call is no longer idempotent. As mentioned previously, usage statistics and measurements may be updated while still considering the service idempotent as long as no resource data is changed. Using POST for non-idempotent resource requests is recommended.

There is a caveat about DELETE idempotence, however. Calling DELETE on a resource a second time will often return a 404 (NOT FOUND) since it was already removed and therefore is no longer findable. This, by some opinions, makes DELETE operations no longer idempotent, however, the end-state of the resource is the same. Returning a 404 is acceptable and communicates accurately the status of the call.

<strong>Examples:</strong>
<ul>
 	<li><em>DELETE http://www.example.com/customers/12345</em></li>
 	<li><em>DELETE http://www.example.com/customers/12345/orders</em></li>
 	<li><em>DELETE http://www.example.com/bucket/sample</em></li>
</ul>
<p style="text-align: right;"><strong>restapitutorial.com</strong></p>

</div>";s:11:"post_parent";s:1:"0";s:4:"guid";s:25:"http://reactvn.net/?p=594";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}i:3;O:8:"stdClass":23:{s:2:"ID";s:3:"598";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2016-08-12 11:48:18";s:13:"post_date_gmt";s:19:"2016-08-12 04:48:18";s:12:"post_content";s:9899:"In addition to utilizing the HTTP verbs appropriately, resource naming is arguably the most debated and most important concept to grasp when creating an understandable, easily leveraged Web service API. When resources are named well, an API is intuitive and easy to use. Done poorly, that same API can feel klutzy and be difficult to use and understand. Below are a few tips to get you going when creating the resource URIs for your new API.

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

Again, no ID for the configuration and no POST verb usage. Although, I'm sure that in both of these cases POST usage might be argued to be valid. Well... OK.";s:11:"post_parent";s:1:"0";s:4:"guid";s:25:"http://reactvn.net/?p=598";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}i:4;O:8:"stdClass":23:{s:2:"ID";s:3:"604";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2016-08-12 11:54:05";s:13:"post_date_gmt";s:19:"2016-08-12 04:54:05";s:12:"post_content";s:68158:"<div class="span12">

This page is created from HTTP status code information found at <a href="http://www.ietf.org/assignments/http-status-codes/http-status-codes.xml" target="_blank">ietf.org</a> and <a href="http://en.wikipedia.org/wiki/HTTP_status_code" target="_blank">Wikipedia</a> by <strong>Restapitutorial.com</strong>

</div>

<div class="row">
<div class="span12">
<h2><a data-toggle="collapse" data-target="#1xx">1xx Informational</a></h2>
<div id="1xx" class="collapse">

This class of status code indicates a provisional response, consisting only of the Status-Line and optional headers, and is terminated by an empty line. There are no required headers for this class of status code. Since HTTP/1.0 did not define any 1xx status codes, servers MUST NOT send a 1xx response to an HTTP/1.0 client except under experimental conditions.

A client MUST be prepared to accept one or more 1xx status responses prior to a regular response, even if the client does not expect a 100 (Continue) status message. Unexpected 1xx status responses MAY be ignored by a user agent.

Proxies MUST forward 1xx responses, unless the connection between the proxy and its client has been closed, or unless the proxy itself requested the generation of the 1xx response. (For example, if a proxy adds a "Expect: 100-continue" field when it forwards a request, then it need not forward the corresponding 100 (Continue) response(s).)
<h3>Wikipedia</h3>
Request received, continuing process.

This class of status code indicates a provisional response, consisting only of the Status-Line and optional headers, and is terminated by an empty line. Since HTTP/1.0 did not define any 1xx status codes, servers must not send a 1xx response to an HTTP/1.0 client except under experimental conditions.

</div>
</div>
</div>

<div class="row">
<div class="span4">

<a data-toggle="collapse" data-target="#continue">100 Continue</a>
<div id="continue" class="collapse">

The client SHOULD continue with its request. This interim response is used to inform the client that the initial part of the request has been received and has not yet been rejected by the server. The client SHOULD continue by sending the remainder of the request or, if the request has already been completed, ignore this response. The server MUST send a final response after the request has been completed. See section 8.2.3 for detailed discussion of the use and handling of this status code.
<h3>Wikipedia</h3>
This means that the server has received the request headers, and that the client should proceed to send the request body (in the case of a request for which a body needs to be sent; for example, a POST request). If the request body is large, sending it to a server when a request has already been rejected based upon inappropriate headers is inefficient. To have a server check if the request could be accepted based on the request's headers alone, a client must send Expect: 100-continue as a header in its initial request and check if a 100 Continue status code is received in response before continuing (or receive 417 Expectation Failed and not continue).

</div>
</div>
<div class="span4">

<a href="http://s.codepen.io/boomerang/9ccbeb56cdb6968eb970fe7c235f1eb61470977616195/index.html#" data-toggle="collapse" data-target="#switching_protocols">101 Switching Protocols</a>
<div id="switching_protocols" class="collapse">

The server understands and is willing to comply with the client's request, via the Upgrade message header field (section 14.42), for a change in the application protocol being used on this connection. The server will switch protocols to those defined by the response's Upgrade header field immediately after the empty line which terminates the 101 response.

The protocol SHOULD be switched only when it is advantageous to do so. For example, switching to a newer version of HTTP is advantageous over older versions, and switching to a real-time, synchronous protocol might be advantageous when delivering resources that use such features.
<h3>Wikipedia</h3>
This means the requester has asked the server to switch protocols and the server is acknowledging that it will do so.

</div>
</div>
<div class="span4">

<a href="http://s.codepen.io/boomerang/9ccbeb56cdb6968eb970fe7c235f1eb61470977616195/index.html#" data-toggle="collapse" data-target="#processing">102 Processing (WebDAV)</a>
<div id="processing" class="collapse">

The 102 (Processing) status code is an interim response used to inform the client that the server has accepted the complete request, but has not yet completed it. This status code SHOULD only be sent when the server has a reasonable expectation that the request will take significant time to complete. As guidance, if a method is taking longer than 20 seconds (a reasonable, but arbitrary value) to process the server SHOULD return a 102 (Processing) response. The server MUST send a final response after the request has been completed.

Methods can potentially take a long period of time to process, especially methods that support the Depth header. In such cases the client may time-out the connection while waiting for a response. To prevent this the server may return a 102 (Processing) status code to indicate to the client that the server is still processing the method.
<h3>Wikipedia</h3>
As a WebDAV request may contain many sub-requests involving file operations, it may take a long time to complete the request. This code indicates that the server has received and is processing the request, but no response is available yet. This prevents the client from timing out and assuming the request was lost.

</div>
</div>
</div>

<div class="row">
<div class="span12">
<h2><a data-toggle="collapse" data-target="#2xx">2xx Success</a></h2>
<div id="2xx" class="collapse">

This class of status code indicates that the client's request was successfully received, understood, and accepted.
<h3>Wikipedia</h3>
This class of status codes indicates the action requested by the client was received, understood, accepted and processed successfully.

</div>
</div>
</div>

<div class="row">
<div class="span4">

<i class="icon-star"></i><a data-toggle="collapse" data-target="#ok">200 OK</a>
<div id="ok" class="collapse">

The request has succeeded. The information returned with the response is dependent on the method used in the request, for example:
<ul>
    <li>GET an entity corresponding to the requested resource is sent in the response;</li>
    <li>HEAD the entity-header fields corresponding to the requested resource are sent in the response without any message-body;</li>
    <li>POST an entity describing or containing the result of the action;</li>
    <li>TRACE an entity containing the request message as received by the end server.</li>
</ul>
<h3>Wikipedia</h3>
Standard response for successful HTTP requests. The actual response will depend on the request method used. In a GET request, the response will contain an entity corresponding to the requested resource. In a POST request the response will contain an entity describing or containing the result of the action.

<i class="icon-star"></i>General status code. Most common code used to indicate success.

</div>
</div>
<div class="span4">

<i class="icon-star"></i><a data-toggle="collapse" data-target="#created">201 Created</a>
<div id="created" class="collapse">

The request has been fulfilled and resulted in a new resource being created. The newly created resource can be referenced by the URI(s) returned in the entity of the response, with the most specific URI for the resource given by a Location header field. The response SHOULD include an entity containing a list of resource characteristics and location(s) from which the user or user agent can choose the one most appropriate. The entity format is specified by the media type given in the Content-Type header field. The origin server MUST create the resource before returning the 201 status code. If the action cannot be carried out immediately, the server SHOULD respond with 202 (Accepted) response instead.

A 201 response MAY contain an ETag response header field indicating the current value of the entity tag for the requested variant just created, see section 14.19.
<h3>Wikipedia</h3>
The request has been fulfilled and resulted in a new resource being created.

<i class="icon-star"></i>Successful creation occurred (via either POST or PUT). Set the Location header to contain a link to the newly-created resource (on POST). Response body content may or may not be present.

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#accepted">202 Accepted</a>
<div id="accepted" class="collapse">

The request has been accepted for processing, but the processing has not been completed. The request might or might not eventually be acted upon, as it might be disallowed when processing actually takes place. There is no facility for re-sending a status code from an asynchronous operation such as this.

The 202 response is intentionally non-committal. Its purpose is to allow a server to accept a request for some other process (perhaps a batch-oriented process that is only run once per day) without requiring that the user agent's connection to the server persist until the process is completed. The entity returned with this response SHOULD include an indication of the request's current status and either a pointer to a status monitor or some estimate of when the user can expect the request to be fulfilled.
<h3>Wikipedia</h3>
The request has been accepted for processing, but the processing has not been completed. The request might or might not eventually be acted upon, as it might be disallowed when processing actually takes place.

</div>
</div>
</div>

<div class="row">
<div class="span4">

<a data-toggle="collapse" data-target="#nainfo">203 Non-Authoritative Information</a>
<div id="nainfo" class="collapse">

The returned metainformation in the entity-header is not the definitive set as available from the origin server, but is gathered from a local or a third-party copy. The set presented MAY be a subset or superset of the original version. For example, including local annotation information about the resource might result in a superset of the metainformation known by the origin server. Use of this response code is not required and is only appropriate when the response would otherwise be 200 (OK).
<h3>Wikipedia</h3>
The server successfully processed the request, but is returning information that may be from another source.

Not present in HTTP/1.0: available since HTTP/1.1

</div>
</div>
<div class="span4">

<i class="icon-star"></i><a data-toggle="collapse" data-target="#nocontent">204 No Content</a>
<div id="nocontent" class="collapse">

The server has fulfilled the request but does not need to return an entity-body, and might want to return updated metainformation. The response MAY include new or updated metainformation in the form of entity-headers, which if present SHOULD be associated with the requested variant.

If the client is a user agent, it SHOULD NOT change its document view from that which caused the request to be sent. This response is primarily intended to allow input for actions to take place without causing a change to the user agent's active document view, although any new or updated metainformation SHOULD be applied to the document currently in the user agent's active view.

The 204 response MUST NOT include a message-body, and thus is always terminated by the first empty line after the header fields.
<h3>Wikipedia</h3>
The server successfully processed the request, but is not returning any content.

<i class="icon-star"></i>Status when wrapped responses (e.g. JSEND) are not used and nothing is in the body (e.g. DELETE).

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#resetcontent">205 Reset Content</a>
<div id="resetcontent" class="collapse">

The server has fulfilled the request and the user agent SHOULD reset the document view which caused the request to be sent. This response is primarily intended to allow input for actions to take place via user input, followed by a clearing of the form in which the input is given so that the user can easily initiate another input action. The response MUST NOT include an entity.
<h3>Wikipedia</h3>
The server successfully processed the request, but is not returning any content. Unlike a 204 response, this response requires that the requester reset the document view.

</div>
</div>
</div>

<div class="row">
<div class="span4">

<a data-toggle="collapse" data-target="#partialcontent">206 Partial Content</a>
<div id="partialcontent" class="collapse">

The server has fulfilled the partial GET request for the resource. The request MUST have included a Range header field (section 14.35) indicating the desired range, and MAY have included an If-Range header field (section 14.27) to make the request conditional.

The response MUST include the following header fields:
<ul>
    <li>Either a Content-Range header field (section 14.16) indicating the range included with this response, or a multipart/byteranges Content-Type including Content-Range fields for each part. If a Content-Length header field is present in the response, its value MUST match the actual number of OCTETs transmitted in the message-body.</li>
    <li>Date</li>
    <li>ETag and/or Content-Location, if the header would have been sent in a 200 response to the same request</li>
    <li>Expires, Cache-Control, and/or Vary, if the field-value might differ from that sent in any previous response for the same variant</li>
</ul>
If the 206 response is the result of an If-Range request that used a strong cache validator (see section 13.3.3), the response SHOULD NOT include other entity-headers. If the response is the result of an If-Range request that used a weak validator, the response MUST NOT include other entity-headers; this prevents inconsistencies between cached entity-bodies and updated headers. Otherwise, the response MUST include all of the entity-headers that would have been returned with a 200 (OK) response to the same request.

A cache MUST NOT combine a 206 response with other previously cached content if the ETag or Last-Modified headers do not match exactly, see 13.5.4.

A cache that does not support the Range and Content-Range headers MUST NOT cache 206 (Partial) responses.
<h3>Wikipedia</h3>
The server is delivering only part of the resource due to a range header sent by the client. The range header is used by tools like wget to enable resuming of interrupted downloads, or split a download into multiple simultaneous streams.

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#multi_status">207 Multi-Status (WebDAV)</a>
<div id="multi_status" class="collapse">

The 207 (Multi-Status) status code provides status for multiple independent operations (see section 11 for more information).
<h3>Wikipedia</h3>
The message body that follows is an XML message and can contain a number of separate response codes, depending on how many sub-requests were made.

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#already_reported">208 Already Reported (WebDAV)</a>
<div id="already_reported" class="collapse">

The 208 (Already Reported) status code can be used inside a DAV: propstat response element to avoid enumerating the internal members of multiple bindings to the same collection repeatedly. For each binding to a collection inside the request's scope, only one will be reported with a 200 status, while subsequent DAV:response elements for all other bindings will use the 208 status, and no DAV:response elements for their descendants are included.
<h3>Wikipedia</h3>
The members of a DAV binding have already been enumerated in a previous reply to this request, and are not being included again.

</div>
</div>
</div>

<div class="row">
<div class="span4">

<a data-toggle="collapse" data-target="#im_used">226 IM Used</a>
<div id="im_used" class="collapse">

The server has fulfilled a GET request for the resource, and the response is a representation of the result of one or more instance-manipulations applied to the current instance. The actual current instance might not be available except by combining this response with other previous or future responses, as appropriate for the specific instance-manipulation(s). If so, the headers of the resulting instance are the result of combining the headers from the status-226 response and the other instances, following the rules in section 13.5.3 of the HTTP/1.1 specification.

The request MUST have included an A-IM header field listing at least one instance-manipulation. The response MUST include an Etag header field giving the entity tag of the current instance.

A response received with a status code of 226 MAY be stored by a cache and used in reply to a subsequent request, subject to the HTTP expiration mechanism and any Cache-Control headers, and to the requirements in section 10.6.

A response received with a status code of 226 MAY be used by a cache, in conjunction with a cache entry for the base instance, to create a cache entry for the current instance.
<h3>Wikipedia</h3>
The server has fulfilled a GET request for the resource, and the response is a representation of the result of one or more instance-manipulations applied to the current instance.

</div>
</div>
<div class="span8"></div>
</div>

<div class="row">
<div class="span12">
<h2><a data-toggle="collapse" data-target="#3xx">3xx Redirection</a></h2>
<div id="3xx" class="collapse">

This class of status code indicates that further action needs to be taken by the user agent in order to fulfill the request. The action required MAY be carried out by the user agent without interaction with the user if and only if the method used in the second request is GET or HEAD. A client SHOULD detect infinite redirection loops, since such loops generate network traffic for each redirection.
<blockquote><strong>Note:</strong> previous versions of this specification recommended a maximum of five redirections. Content developers should be aware that there might be clients that implement such a fixed limitation.</blockquote>
<h3>Wikipedia</h3>
The client must take additional action to complete the request.

This class of status code indicates that further action needs to be taken by the user agent in order to fulfil the request. The action required may be carried out by the user agent without interaction with the user if and only if the method used in the second request is GET or HEAD. A user agent should not automatically redirect a request more than five times, since such redirections usually indicate an infinite loop.

</div>
</div>
</div>

<div class="row">
<div class="span4">

<a data-toggle="collapse" data-target="#multiplechoices">300 Multiple Choices</a>
<div id="multiplechoices" class="collapse">

The requested resource corresponds to any one of a set of representations, each with its own specific location, and agent- driven negotiation information (section 12) is being provided so that the user (or user agent) can select a preferred representation and redirect its request to that location.

Unless it was a HEAD request, the response SHOULD include an entity containing a list of resource characteristics and location(s) from which the user or user agent can choose the one most appropriate. The entity format is specified by the media type given in the Content- Type header field. Depending upon the format and the capabilities of the user agent, selection of the most appropriate choice MAY be performed automatically. However, this specification does not define any standard for such automatic selection.

If the server has a preferred choice of representation, it SHOULD include the specific URI for that representation in the Location field; user agents MAY use the Location field value for automatic redirection. This response is cacheable unless indicated otherwise.
<h3>Wikipedia</h3>
Indicates multiple options for the resource that the client may follow. It, for instance, could be used to present different format options for video, list files with different extensions, or word sense disambiguation.

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#movepermanently">301 Moved Permanently</a>
<div id="movepermanently" class="collapse">

The requested resource has been assigned a new permanent URI and any future references to this resource SHOULD use one of the returned URIs. Clients with link editing capabilities ought to automatically re-link references to the Request-URI to one or more of the new references returned by the server, where possible. This response is cacheable unless indicated otherwise.

The new permanent URI SHOULD be given by the Location field in the response. Unless the request method was HEAD, the entity of the response SHOULD contain a short hypertext note with a hyperlink to the new URI(s).

If the 301 status code is received in response to a request other than GET or HEAD, the user agent MUST NOT automatically redirect the request unless it can be confirmed by the user, since this might change the conditions under which the request was issued.
<blockquote><strong>Note:</strong> When automatically redirecting a POST request after receiving a 301 status code, some existing HTTP/1.0 user agents will erroneously change it into a GET request.</blockquote>
<h3>Wikipedia</h3>
This and all future requests should be directed to the given URI.

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#found">302 Found</a>
<div id="found" class="collapse">

The requested resource resides temporarily under a different URI. Since the redirection might be altered on occasion, the client SHOULD continue to use the Request-URI for future requests. This response is only cacheable if indicated by a Cache-Control or Expires header field.

The temporary URI SHOULD be given by the Location field in the response. Unless the request method was HEAD, the entity of the response SHOULD contain a short hypertext note with a hyperlink to the new URI(s).

If the 302 status code is received in response to a request other than GET or HEAD, the user agent MUST NOT automatically redirect the request unless it can be confirmed by the user, since this might change the conditions under which the request was issued.
<blockquote><strong>Note:</strong> RFC 1945 and RFC 2068 specify that the client is not allowed to change the method on the redirected request. However, most existing user agent implementations treat 302 as if it were a 303 response, performing a GET on the Location field-value regardless of the original request method. The status codes 303 and 307 have been added for servers that wish to make unambiguously clear which kind of reaction is expected of the client.</blockquote>
<h3>Wikipedia</h3>
This is an example of industry practice contradicting the standard.[2] The HTTP/1.0 specification (RFC 1945) required the client to perform a temporary redirect (the original describing phrase was "Moved Temporarily"), but popular browsers implemented 302 with the functionality of a 303 See Other. Therefore, HTTP/1.1 added status codes 303 and 307 to distinguish between the two behaviours. However, some Web applications and frameworks use the 302 status code as if it were the 303.

</div>
</div>
</div>

<div class="row">
<div class="span4">

<a data-toggle="collapse" data-target="#see_other">303 See Other</a>
<div id="see_other" class="collapse">

The response to the request can be found under a different URI and SHOULD be retrieved using a GET method on that resource. This method exists primarily to allow the output of a POST-activated script to redirect the user agent to a selected resource. The new URI is not a substitute reference for the originally requested resource. The 303 response MUST NOT be cached, but the response to the second (redirected) request might be cacheable.

The different URI SHOULD be given by the Location field in the response. Unless the request method was HEAD, the entity of the response SHOULD contain a short hypertext note with a hyperlink to the new URI(s).
<blockquote>Note: Many pre-HTTP/1.1 user agents do not understand the 303 status. When interoperability with such clients is a concern, the 302 status code may be used instead, since most user agents react to a 302 response as described here for 303.</blockquote>
<h3>Wikipedia</h3>
The response to the request can be found under another URI using a GET method. When received in response to a POST (or PUT/DELETE), it should be assumed that the server has received the data and the redirect should be issued with a separate GET message.

Since HTTP/1.1

</div>
</div>
<div class="span4">

<i class="icon-star"></i><a data-toggle="collapse" data-target="#not_modified">304 Not Modified</a>
<div id="not_modified" class="collapse">

If the client has performed a conditional GET request and access is allowed, but the document has not been modified, the server SHOULD respond with this status code. The 304 response MUST NOT contain a message-body, and thus is always terminated by the first empty line after the header fields.

The response MUST include the following header fields:
<ul>
    <li>Date, unless its omission is required by section 14.18.1</li>
</ul>
If a clockless origin server obeys these rules, and proxies and clients add their own Date to any response received without one (as already specified by [RFC 2068], section 14.19), caches will operate correctly.
<ul>
    <li>ETag and/or Content-Location, if the header would have been sent in a 200 response to the same request</li>
    <li>Expires, Cache-Control, and/or Vary, if the field-value might differ from that sent in any previous response for the same variant</li>
</ul>
If the conditional GET used a strong cache validator (see section 13.3.3), the response SHOULD NOT include other entity-headers. Otherwise (i.e., the conditional GET used a weak validator), the response MUST NOT include other entity-headers; this prevents inconsistencies between cached entity-bodies and updated headers.

If a 304 response indicates an entity not currently cached, then the cache MUST disregard the response and repeat the request without the conditional.

If a cache uses a received 304 response to update a cache entry, the cache MUST update the entry to reflect any new field values given in the response.
<h3>Wikipedia</h3>
Indicates the resource has not been modified since last requested. Typically, the HTTP client provides a header like the If-Modified-Since header to provide a time against which to compare. Using this saves bandwidth and reprocessing on both the server and client, as only the header data must be sent and received in comparison to the entirety of the page being re-processed by the server, then sent again using more bandwidth of the server and client.

<i class="icon-star"></i>Used for conditional GET calls to reduce band-width usage. If used, must set the Date, Content-Location, ETag headers to what they would have been on a regular GET call. There must be no body on the response.

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#use_proxy">305 Use Proxy</a>
<div id="use_proxy" class="collapse">

The requested resource MUST be accessed through the proxy given by the Location field. The Location field gives the URI of the proxy. The recipient is expected to repeat this single request via the proxy. 305 responses MUST only be generated by origin servers.
<blockquote>Note: RFC 2068 was not clear that 305 was intended to redirect a single request, and to be generated by origin servers only. Not observing these limitations has significant security consequences.</blockquote>
<h3>Wikipedia</h3>
Many HTTP clients (such as Mozilla and Internet Explorer) do not correctly handle responses with this status code, primarily for security reasons.

</div>
</div>
</div>

<div class="row">
<div class="span4">

<a data-toggle="collapse" data-target="#306unused">306 (Unused)</a>
<div id="306unused" class="collapse">

The 306 status code was used in a previous version of the specification, is no longer used, and the code is reserved.
<h3>Wikipedia</h3>
No longer used. Originally meant "Subsequent requests should use the specified proxy."

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#temp_redirect">307 Temporary Redirect</a>
<div id="temp_redirect" class="collapse">

The requested resource resides temporarily under a different URI. Since the redirection MAY be altered on occasion, the client SHOULD continue to use the Request-URI for future requests. This response is only cacheable if indicated by a Cache-Control or Expires header field.

The temporary URI SHOULD be given by the Location field in the response. Unless the request method was HEAD, the entity of the response SHOULD contain a short hypertext note with a hyperlink to the new URI(s) , since many pre-HTTP/1.1 user agents do not understand the 307 status. Therefore, the note SHOULD contain the information necessary for a user to repeat the original request on the new URI.

If the 307 status code is received in response to a request other than GET or HEAD, the user agent MUST NOT automatically redirect the request unless it can be confirmed by the user, since this might change the conditions under which the request was issued.
<h3>Wikipedia</h3>
In this case, the request should be repeated with another URI; however, future requests can still use the original URI. In contrast to 302, the request method should not be changed when reissuing the original request. For instance, a POST request must be repeated using another POST request.

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#perm_redirect">308 Permanent Redirect (experiemental)</a>
<div id="perm_redirect" class="collapse">
<h3>Wikipedia</h3>
The request, and all future requests should be repeated using another URI. 307 and 308 (as proposed) parallel the behaviours of 302 and 301, but do not require the HTTP method to change. So, for example, submitting a form to a permanently redirected resource may continue smoothly.

</div>
</div>
</div>

<div class="row">
<div class="span12">
<h2><a href="http://s.codepen.io/boomerang/9ccbeb56cdb6968eb970fe7c235f1eb61470977616195/index.html#" data-toggle="collapse" data-target="#4xx">4xx Client Error</a></h2>
<div id="4xx" class="collapse">

The 4xx class of status code is intended for cases in which the client seems to have erred. Except when responding to a HEAD request, the server SHOULD include an entity containing an explanation of the error situation, and whether it is a temporary or permanent condition. These status codes are applicable to any request method. User agents SHOULD display any included entity to the user.

If the client is sending data, a server implementation using TCP SHOULD be careful to ensure that the client acknowledges receipt of the packet(s) containing the response, before the server closes the input connection. If the client continues sending data to the server after the close, the server's TCP stack will send a reset packet to the client, which may erase the client's unacknowledged input buffers before they can be read and interpreted by the HTTP application.
<h3>Wikipedia</h3>
The 4xx class of status code is intended for cases in which the client seems to have erred. Except when responding to a HEAD request, the server should include an entity containing an explanation of the error situation, and whether it is a temporary or permanent condition. These status codes are applicable to any request method. User agents should display any included entity to the user.

</div>
</div>
</div>

<div class="row">
<div class="span4">

<i class="icon-star"></i><a data-toggle="collapse" data-target="#bad_request">400 Bad Request</a>
<div id="bad_request" class="collapse">

The request could not be understood by the server due to malformed syntax. The client SHOULD NOT repeat the request without modifications.
<h3>Wikipedia</h3>
The request cannot be fulfilled due to bad syntax.

<i class="icon-star"></i>General error when fulfilling the request would cause an invalid state. Domain validation errors, missing data, etc. are some examples.

</div>
</div>
<div class="span4">

<i class="icon-star"></i><a data-toggle="collapse" data-target="#unauthorized">401 Unauthorized</a>
<div id="unauthorized" class="collapse">

The request requires user authentication. The response MUST include a WWW-Authenticate header field (section 14.47) containing a challenge applicable to the requested resource. The client MAY repeat the request with a suitable Authorization header field (section 14.8). If the request already included Authorization credentials, then the 401 response indicates that authorization has been refused for those credentials. If the 401 response contains the same challenge as the prior response, and the user agent has already attempted authentication at least once, then the user SHOULD be presented the entity that was given in the response, since that entity might include relevant diagnostic information. HTTP access authentication is explained in "HTTP Authentication: Basic and Digest Access Authentication".
<h3>Wikipedia</h3>
Similar to 403 Forbidden, but specifically for use when authentication is possible but has failed or not yet been provided. The response must include a WWW-Authenticate header field containing a challenge applicable to the requested resource. See Basic access authentication and Digest access authentication.

<i class="icon-star"></i>Error code response for missing or invalid authentication token.

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#pmt_required">402 Payment Required</a>
<div id="pmt_required" class="collapse">

This code is reserved for future use.
<h3>Wikipedia</h3>
Reserved for future use. The original intention was that this code might be used as part of some form of digital cash or micropayment scheme, but that has not happened, and this code is not usually used. As an example of its use, however, Apple's MobileMe service generates a 402 error ("httpStatusCode:402" in the Mac OS X Console log) if the MobileMe account is delinquent.

</div>
</div>
</div>

<div class="row">
<div class="span4">

<i class="icon-star"></i><a data-toggle="collapse" data-target="#forbidden">403 Forbidden</a>
<div id="forbidden" class="collapse">

The server understood the request, but is refusing to fulfill it. Authorization will not help and the request SHOULD NOT be repeated. If the request method was not HEAD and the server wishes to make public why the request has not been fulfilled, it SHOULD describe the reason for the refusal in the entity. If the server does not wish to make this information available to the client, the status code 404 (Not Found) can be used instead.
<h3>Wikipedia</h3>
The request was a legal request, but the server is refusing to respond to it. Unlike a 401 Unauthorized response, authenticating will make no difference.

<i class="icon-star"></i>Error code for user not authorized to perform the operation or the resource is unavailable for some reason (e.g. time constraints, etc.).

</div>
</div>
<div class="span4">

<i class="icon-star"></i><a data-toggle="collapse" data-target="#not_found">404 Not Found</a>
<div id="not_found" class="collapse">

The server has not found anything matching the Request-URI. No indication is given of whether the condition is temporary or permanent. The 410 (Gone) status code SHOULD be used if the server knows, through some internally configurable mechanism, that an old resource is permanently unavailable and has no forwarding address. This status code is commonly used when the server does not wish to reveal exactly why the request has been refused, or when no other response is applicable.
<h3>Wikipedia</h3>
The requested resource could not be found but may be available again in the future. Subsequent requests by the client are permissible.

<i class="icon-star"></i>Used when the requested resource is not found, whether it doesn't exist or if there was a 401 or 403 that, for security reasons, the service wants to mask.

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#method_no_allowed">405 Method Not Allowed</a>
<div id="method_no_allowed" class="collapse">

The method specified in the Request-Line is not allowed for the resource identified by the Request-URI. The response MUST include an Allow header containing a list of valid methods for the requested resource.
<h3>Wikipedia</h3>
A request was made of a resource using a request method not supported by that resource; for example, using GET on a form which requires data to be presented via POST, or using PUT on a read-only resource.

</div>
</div>
</div>

<div class="row">
<div class="span4">

<a data-toggle="collapse" data-target="#not_acceptable">406 Not Acceptable</a>
<div id="not_acceptable" class="collapse">

The resource identified by the request is only capable of generating response entities which have content characteristics not acceptable according to the accept headers sent in the request.

Unless it was a HEAD request, the response SHOULD include an entity containing a list of available entity characteristics and location(s) from which the user or user agent can choose the one most appropriate. The entity format is specified by the media type given in the Content-Type header field. Depending upon the format and the capabilities of the user agent, selection of the most appropriate choice MAY be performed automatically. However, this specification does not define any standard for such automatic selection.
<blockquote>Note: HTTP/1.1 servers are allowed to return responses which are not acceptable according to the accept headers sent in the request. In some cases, this may even be preferable to sending a 406 response. User agents are encouraged to inspect the headers of an incoming response to determine if it is acceptable.</blockquote>
If the response could be unacceptable, a user agent SHOULD temporarily stop receipt of more data and query the user for a decision on further actions.
<h3>Wikipedia</h3>
The requested resource is only capable of generating content not acceptable according to the Accept headers sent in the request.

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#proxy_auth_rqd">407 Proxy Authentication Required</a>
<div id="proxy_auth_rqd" class="collapse">

This code is similar to 401 (Unauthorized), but indicates that the client must first authenticate itself with the proxy. The proxy MUST return a Proxy-Authenticate header field (section 14.33) containing a challenge applicable to the proxy for the requested resource. The client MAY repeat the request with a suitable Proxy-Authorization header field (section 14.34). HTTP access authentication is explained in "HTTP Authentication: Basic and Digest Access Authentication".
<h3>Wikipedia</h3>
The client must first authenticate itself with the proxy.

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#request_timeout">408 Request Timeout</a>
<div id="request_timeout" class="collapse">

The client did not produce a request within the time that the server was prepared to wait. The client MAY repeat the request without modifications at any later time.
<h3>Wikipedia</h3>
The server timed out waiting for the request. According to W3 HTTP specifications: "The client did not produce a request within the time that the server was prepared to wait. The client MAY repeat the request without modifications at any later time."

</div>
</div>
</div>

<div class="row">
<div class="span4">

<i class="icon-star"></i><a data-toggle="collapse" data-target="#conflict">409 Conflict</a>
<div id="conflict" class="collapse">

The request could not be completed due to a conflict with the current state of the resource. This code is only allowed in situations where it is expected that the user might be able to resolve the conflict and resubmit the request. The response body SHOULD include enough information for the user to recognize the source of the conflict. Ideally, the response entity would include enough information for the user or user agent to fix the problem; however, that might not be possible and is not required.

Conflicts are most likely to occur in response to a PUT request. For example, if versioning were being used and the entity being PUT included changes to a resource which conflict with those made by an earlier (third-party) request, the server might use the 409 response to indicate that it can't complete the request. In this case, the response entity would likely contain a list of the differences between the two versions in a format defined by the response Content-Type.
<h3>Wikipedia</h3>
Indicates that the request could not be processed because of conflict in the request, such as an edit conflict.

<i class="icon-star"></i>Whenever a resource conflict would be caused by fulfilling the request. Duplicate entries and deleting root objects when cascade-delete is not supported are a couple of examples.

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#gone">410 Gone</a>
<div id="gone" class="collapse">

The requested resource is no longer available at the server and no forwarding address is known. This condition is expected to be considered permanent. Clients with link editing capabilities SHOULD delete references to the Request-URI after user approval. If the server does not know, or has no facility to determine, whether or not the condition is permanent, the status code 404 (Not Found) SHOULD be used instead. This response is cacheable unless indicated otherwise.

The 410 response is primarily intended to assist the task of web maintenance by notifying the recipient that the resource is intentionally unavailable and that the server owners desire that remote links to that resource be removed. Such an event is common for limited-time, promotional services and for resources belonging to individuals no longer working at the server's site. It is not necessary to mark all permanently unavailable resources as "gone" or to keep the mark for any length of time -- that is left to the discretion of the server owner.
<h3>Wikipedia</h3>
Indicates that the resource requested is no longer available and will not be available again. This should be used when a resource has been intentionally removed and the resource should be purged. Upon receiving a 410 status code, the client should not request the resource again in the future. Clients such as search engines should remove the resource from their indices. Most use cases do not require clients and search engines to purge the resource, and a "404 Not Found" may be used instead.

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#length_rqd">411 Length Required</a>
<div id="length_rqd" class="collapse">

The server refuses to accept the request without a defined Content- Length. The client MAY repeat the request if it adds a valid Content-Length header field containing the length of the message-body in the request message.
<h3>Wikipedia</h3>
The request did not specify the length of its content, which is required by the requested resource.

</div>
</div>
</div>

<div class="row">
<div class="span4">

<a data-toggle="collapse" data-target="#precondition_failed">412 Precondition Failed</a>
<div id="precondition_failed" class="collapse">

The precondition given in one or more of the request-header fields evaluated to false when it was tested on the server. This response code allows the client to place preconditions on the current resource metainformation (header field data) and thus prevent the requested method from being applied to a resource other than the one intended.
<h3>Wikipedia</h3>
The server does not meet one of the preconditions that the requester put on the request.

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#request_entity_too_large">413 Request Entity Too Large</a>
<div id="request_entity_too_large" class="collapse">

The server is refusing to process a request because the request entity is larger than the server is willing or able to process. The server MAY close the connection to prevent the client from continuing the request.

If the condition is temporary, the server SHOULD include a Retry- After header field to indicate that it is temporary and after what time the client MAY try again.
<h3>Wikipedia</h3>
The request is larger than the server is willing or able to process.

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#request_uri_too_long">414 Request-URI Too Long</a>
<div id="request_uri_too_long" class="collapse">

The server is refusing to service the request because the Request-URI is longer than the server is willing to interpret. This rare condition is only likely to occur when a client has improperly converted a POST request to a GET request with long query information, when the client has descended into a URI "black hole" of redirection (e.g., a redirected URI prefix that points to a suffix of itself), or when the server is under attack by a client attempting to exploit security holes present in some servers using fixed-length buffers for reading or manipulating the Request-URI.
<h3>Wikipedia</h3>
The URI provided was too long for the server to process.

</div>
</div>
</div>

<div class="row">
<div class="span4">

<a data-toggle="collapse" data-target="#unsupported_media_type">415 Unsupported Media Type</a>
<div id="unsupported_media_type" class="collapse">

The server is refusing to service the request because the entity of the request is in a format not supported by the requested resource for the requested method.
<h3>Wikipedia</h3>
The request entity has a media type which the server or resource does not support. For example, the client uploads an image as image/svg+xml, but the server requires that images use a different format.

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#requested_range_not_satisfiable">416 Requested Range Not Satisfiable</a>
<div id="requested_range_not_satisfiable" class="collapse">

A server SHOULD return a response with this status code if a request included a Range request-header field (section 14.35), and none of the range-specifier values in this field overlap the current extent of the selected resource, and the request did not include an If-Range request-header field. (For byte-ranges, this means that the first- byte-pos of all of the byte-range-spec values were greater than the current length of the selected resource.)

When this status code is returned for a byte-range request, the response SHOULD include a Content-Range entity-header field specifying the current length of the selected resource (see section 14.16). This response MUST NOT use the multipart/byteranges content- type.
<h3>Wikipedia</h3>
The client has asked for a portion of the file, but the server cannot supply that portion. For example, if the client asked for a part of the file that lies beyond the end of the file.

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#expectation_failed">417 Expectation Failed</a>
<div id="expectation_failed" class="collapse">

The expectation given in an Expect request-header field (see section 14.20) could not be met by this server, or, if the server is a proxy, the server has unambiguous evidence that the request could not be met by the next-hop server.
<h3>Wikipedia</h3>
The server cannot meet the requirements of the Expect request-header field.

</div>
</div>
</div>

<div class="row">
<div class="span4">

<a data-toggle="collapse" data-target="#teapot">418 I'm a teapot (RFC 2324)</a>
<div id="teapot" class="collapse">
<h3>Wikipedia</h3>
This code was defined in 1998 as one of the traditional IETF April Fools' jokes, in RFC 2324, Hyper Text Coffee Pot Control Protocol, and is not expected to be implemented by actual HTTP servers. However, known implementations do exist. An Nginx HTTP server uses this code to simulate goto-like behaviour in its configuration.

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#enhance_your_calm">420 Enhance Your Calm (Twitter)</a>
<div id="enhance_your_calm" class="collapse">
<h3>Wikipedia</h3>
Returned by the Twitter Search and Trends API when the client is being rate limited. Likely a reference to this number's association with marijuana. Other services may wish to implement the 429 Too Many Requests response code instead.

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#unprocessable_entity">422 Unprocessable Entity (WebDAV)</a>
<div id="unprocessable_entity" class="collapse">

The 422 (Unprocessable Entity) status code means the server understands the content type of the request entity (hence a 415(Unsupported Media Type) status code is inappropriate), and the syntax of the request entity is correct (thus a 400 (Bad Request) status code is inappropriate) but was unable to process the contained instructions. For example, this error condition may occur if an XML request body contains well-formed (i.e., syntactically correct), but semantically erroneous, XML instructions.
<h3>Wikipedia</h3>
The request was well-formed but was unable to be followed due to semantic errors.

</div>
</div>
</div>

<div class="row">
<div class="span4">

<a data-toggle="collapse" data-target="#locked">423 Locked (WebDAV)</a>
<div id="locked" class="collapse">

The 423 (Locked) status code means the source or destination resource of a method is locked. This response SHOULD contain an appropriate precondition or postcondition code, such as 'lock-token-submitted' or 'no-conflicting-lock'.
<h3>Wikipedia</h3>
The resource that is being accessed is locked.

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#failed_dependency">424 Failed Dependency (WebDAV)</a>
<div id="failed_dependency" class="collapse">

The 424 (Failed Dependency) status code means that the method could not be performed on the resource because the requested action depended on another action and that action failed. For example, if a command in a PROPPATCH method fails, then, at minimum, the rest of the commands will also fail with 424 (Failed Dependency).
<h3>Wikipedia</h3>
The request failed due to failure of a previous request (e.g. a PROPPATCH).

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#adv_collections_expired">425 Reserved for WebDAV</a>
<div id="adv_collections_expired" class="collapse">

Slein, J., Whitehead, E.J., et al., "WebDAV Advanced Collections Protocol", Work In Progress.
<h3>Wikipedia</h3>
Defined in drafts of "WebDAV Advanced Collections Protocol", but not present in "Web Distributed Authoring and Versioning (WebDAV) Ordered Collections Protocol".

</div>
</div>
</div>

<div class="row">
<div class="span4">

<a data-toggle="collapse" data-target="#upgrade_required">426 Upgrade Required</a>
<div id="upgrade_required" class="collapse">

Reliable, interoperable negotiation of Upgrade features requires an unambiguous failure signal. The 426 Upgrade Required status code allows a server to definitively state the precise protocol extensions a given resource must be served with.
<h3>Wikipedia</h3>
The client should switch to a different protocol such as TLS/1.0.

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#precondition_required">428 Precondition Required</a>
<div id="precondition_required" class="collapse">

The 428 status code indicates that the origin server requires the request to be conditional.

Its typical use is to avoid the "lost update" problem, where a client GETs a resource's state, modifies it, and PUTs it back to the server, when meanwhile a third party has modified the state on the server, leading to a conflict. By requiring requests to be conditional, the server can assure that clients are working with the correct copies.

Responses using this status code SHOULD explain how to resubmit the request successfully.

The 428 status code is optional; clients cannot rely upon its use to prevent "lost update" conflicts.
<h3>Wikipedia</h3>
The origin server requires the request to be conditional. Intended to prevent "the "lost update" problem, where a client GETs a resource's state, modifies it, and PUTs it back to the server, when meanwhile a third party has modified the state on the server, leading to a conflict.

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#too_many_requests">429 Too Many Requests</a>
<div id="too_many_requests" class="collapse">

The 429 status code indicates that the user has sent too many requests in a given amount of time ("rate limiting").

The response representations SHOULD include details explaining the condition, and MAY include a Retry-After header indicating how long to wait before making a new request.

When a server is under attack or just receiving a very large number of requests from a single party, responding to each with a 429 status code will consume resources.

Therefore, servers are not required to use the 429 status code; when limiting resource usage, it may be more appropriate to just drop connections, or take other steps.
<h3>Wikipedia</h3>
The user has sent too many requests in a given amount of time. Intended for use with rate limiting schemes.

</div>
</div>
</div>

<div class="row">
<div class="span4">

<a data-toggle="collapse" data-target="#request_header_fields_too_large">431 Request Header Fields Too Large</a>
<div id="request_header_fields_too_large" class="collapse">

The 431 status code indicates that the server is unwilling to process the request because its header fields are too large. The request MAY be resubmitted after reducing the size of the request header fields.

It can be used both when the set of request header fields in total are too large, and when a single header field is at fault. In the latter case, the response representation SHOULD specify which header field was too large.

Servers are not required to use the 431 status code; when under attack, it may be more appropriate to just drop connections, or take other steps.
<h3>Wikipedia</h3>
The server is unwilling to process the request because either an individual header field, or all the header fields collectively, are too large.

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#no_response_nginx">444 No Response (Nginx)</a>
<div id="no_response_nginx" class="collapse">
<h3>Wikipedia</h3>
An Nginx HTTP server extension. The server returns no information to the client and closes the connection (useful as a deterrent for malware).

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#retry_with">449 Retry With (Microsoft)</a>
<div id="retry_with" class="collapse">
<h3>Wikipedia</h3>
A Microsoft extension. The request should be retried after performing the appropriate action.

</div>
</div>
</div>

<div class="row">
<div class="span4">

<a data-toggle="collapse" data-target="#blocked_by_windows_parental">450 Blocked by Windows Parental Controls (Microsoft)</a>
<div id="blocked_by_windows_parental" class="collapse">
<h3>Wikipedia</h3>
A Microsoft extension. This error is given when Windows Parental Controls are turned on and are blocking access to the given webpage.

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#unavailable_for_legal_reasons">451 Unavailable For Legal Reasons</a>
<div id="unavailable_for_legal_reasons" class="collapse">
<h3>Wikipedia</h3>
Intended to be used when resource access is denied for legal reasons, e.g. censorship or government-mandated blocked access. A reference to the 1953 dystopian novel Fahrenheit 451, where books are outlawed, and the autoignition temperature of paper, 451°F.

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#client_closed_request">499 Client Closed Request (Nginx)</a>
<div id="client_closed_request" class="collapse">
<h3>Wikipedia</h3>
An Nginx HTTP server extension. This code is introduced to log the case when the connection is closed by client while HTTP server is processing its request, making server unable to send the HTTP header back.

</div>
</div>
<div class="span4"></div>
</div>

<div class="row">
<div class="span12">
<h2><a href="http://s.codepen.io/boomerang/9ccbeb56cdb6968eb970fe7c235f1eb61470977616195/index.html#" data-toggle="collapse" data-target="#5xx">5xx Server Error</a></h2>
<div id="5xx" class="collapse">

Response status codes beginning with the digit "5" indicate cases in which the server is aware that it has erred or is incapable of performing the request. Except when responding to a HEAD request, the server SHOULD include an entity containing an explanation of the error situation, and whether it is a temporary or permanent condition. User agents SHOULD display any included entity to the user. These response codes are applicable to any request method.
<h3>Wikipedia</h3>
The server failed to fulfill an apparently valid request.

Response status codes beginning with the digit "5" indicate cases in which the server is aware that it has encountered an error or is otherwise incapable of performing the request. Except when responding to a HEAD request, the server should include an entity containing an explanation of the error situation, and indicate whether it is a temporary or permanent condition. Likewise, user agents should display any included entity to the user. These response codes are applicable to any request method.

</div>
</div>
</div>

<div class="row">
<div class="span4">

<i class="icon-star"></i><a data-toggle="collapse" data-target="#internal_server_error">500 Internal Server Error</a>
<div id="internal_server_error" class="collapse">

The server encountered an unexpected condition which prevented it from fulfilling the request.
<h3>Wikipedia</h3>
A generic error message, given when no more specific message is suitable.

<i class="icon-star"></i>The general catch-all error when the server-side throws an exception.

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#not_implemented">501 Not Implemented</a>
<div id="not_implemented" class="collapse">

The server does not support the functionality required to fulfill the request. This is the appropriate response when the server does not recognize the request method and is not capable of supporting it for any resource.
<h3>Wikipedia</h3>
The server either does not recognise the request method, or it lacks the ability to fulfill the request.

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#bad_gateway">502 Bad Gateway</a>
<div id="bad_gateway" class="collapse">

The server, while acting as a gateway or proxy, received an invalid response from the upstream server it accessed in attempting to fulfill the request.
<h3>Wikipedia</h3>
The server was acting as a gateway or proxy and received an invalid response from the upstream server.

</div>
</div>
</div>

<div class="row">
<div class="span4">

<a data-toggle="collapse" data-target="#service_unavailable">503 Service Unavailable</a>
<div id="service_unavailable" class="collapse">

The server is currently unable to handle the request due to a temporary overloading or maintenance of the server. The implication is that this is a temporary condition which will be alleviated after some delay. If known, the length of the delay MAY be indicated in a Retry-After header. If no Retry-After is given, the client SHOULD handle the response as it would for a 500 response.
<blockquote>Note: The existence of the 503 status code does not imply that a server must use it when becoming overloaded. Some servers may wish to simply refuse the connection.</blockquote>
<h3>Wikipedia</h3>
The server is currently unavailable (because it is overloaded or down for maintenance). Generally, this is a temporary state.

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#gateway_timeout">504 Gateway Timeout</a>
<div id="gateway_timeout" class="collapse">

The server, while acting as a gateway or proxy, did not receive a timely response from the upstream server specified by the URI (e.g. HTTP, FTP, LDAP) or some other auxiliary server (e.g. DNS) it needed to access in attempting to complete the request.
<blockquote>Note: Note to implementors: some deployed proxies are known to return 400 or 500 when DNS lookups time out.</blockquote>
<h3>Wikipedia</h3>
The server was acting as a gateway or proxy and did not receive a timely response from the upstream server.

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#version_not_supported">505 HTTP Version Not Supported</a>
<div id="version_not_supported" class="collapse">

The server does not support, or refuses to support, the HTTP protocol version that was used in the request message. The server is indicating that it is unable or unwilling to complete the request using the same major version as the client, as described in section 3.1, other than with this error message. The response SHOULD contain an entity describing why that version is not supported and what other protocols are supported by that server.
<h3>Wikipedia</h3>
The server does not support the HTTP protocol version used in the request.

</div>
</div>
</div>

<div class="row">
<div class="span4">

<a data-toggle="collapse" data-target="#variant_also_negotiates">506 Variant Also Negotiates (Experimental)</a>
<div id="variant_also_negotiates" class="collapse">

The 506 status code indicates that the server has an internal configuration error: the chosen variant resource is configured to engage in transparent content negotiation itself, and is therefore not a proper end point in the negotiation process.
<h3>Wikipedia</h3>
Transparent content negotiation for the request results in a circular reference.

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#insufficient_storage">507 Insufficient Storage (WebDAV)</a>
<div id="insufficient_storage" class="collapse">

The 507 (Insufficient Storage) status code means the method could not be performed on the resource because the server is unable to store the representation needed to successfully complete the request. This condition is considered to be temporary. If the request that received this status code was the result of a user action, the request MUST NOT be repeated until it is requested by a separate user action.
<h3>Wikipedia</h3>
The server is unable to store the representation needed to complete the request.

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#loop_detected">508 Loop Detected (WebDAV)</a>
<div id="loop_detected" class="collapse">

The 508 (Loop Detected) status code indicates that the server terminated an operation because it encountered an infinite loop while processing a request with "Depth: infinity". This status indicates that the entire operation failed.
<h3>Wikipedia</h3>
The server detected an infinite loop while processing the request (sent in lieu of 208).

</div>
</div>
</div>

<div class="row">
<div class="span4">

<a data-toggle="collapse" data-target="#bandwidth_limit_exceeded">509 Bandwidth Limit Exceeded (Apache)</a>
<div id="bandwidth_limit_exceeded" class="collapse">
<h3>Wikipedia</h3>
This status code, while used by many servers, is not specified in any RFCs.

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#not_extended">510 Not Extended</a>
<div id="not_extended" class="collapse">

The policy for accessing the resource has not been met in the request. The server should send back all the information necessary for the client to issue an extended request. It is outside the scope of this specification to specify how the extensions inform the client.

If the 510 response contains information about extensions that were not present in the initial request then the client MAY repeat the request if it has reason to believe it can fulfill the extension policy by modifying the request according to the information provided in the 510 response. Otherwise the client MAY present any entity included in the 510 response to the user, since that entity may include relevant diagnostic information.
<h3>Wikipedia</h3>
Further extensions to the request are required for the server to fulfill it.

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#net_authn_required">511 Network Authentication Required</a>
<div id="net_authn_required" class="collapse">

The 511 status code indicates that the client needs to authenticate to gain network access.

The response representation SHOULD contain a link to a resource that allows the user to submit credentials (e.g. with a HTML form).

Note that the 511 response SHOULD NOT contain a challenge or the login interface itself, because browsers would show the login interface as being associated with the originally requested URL, which may cause confusion.

The 511 status SHOULD NOT be generated by origin servers; it is intended for use by intercepting proxies that are interposed as a means of controlling access to the network.

Responses with the 511 status code MUST NOT be stored by a cache.

The 511 status code is designed to mitigate problems caused by "captive portals" to software (especially non-browser agents) that is expecting a response from the server that a request was made to, not the intervening network infrastructure. It is not intended to encouraged deployment of captive portals, only to limit the damage caused by them.

A network operator wishing to require some authentication, acceptance of terms or other user interaction before granting access usually does so by identifing clients who have not done so ("unknown clients") using their MAC addresses.

Unknown clients then have all traffic blocked, except for that on TCP port 80, which is sent to a HTTP server (the "login server") dedicated to "logging in" unknown clients, and of course traffic to the login server itself.

In common use, a response carrying the 511 status code will not come from the origin server indicated in the request's URL. This presents many security issues; e.g., an attacking intermediary may be inserting cookies into the original domain's name space, may be observing cookies or HTTP authentication credentials sent from the user agent, and so on.

However, these risks are not unique to the 511 status code; in other words, a captive portal that is not using this status code introduces the same issues.

Also, note that captive portals using this status code on an SSL or TLS connection (commonly, port 443) will generate a certificate error on the client.
<h3>Wikipedia</h3>
The client needs to authenticate to gain network access. Intended for use by intercepting proxies used to control access to the network (e.g., "captive portals" used to require agreement to Terms of Service before granting full Internet access via a Wi-Fi hotspot).

</div>
</div>
</div>

<div class="row">
<div class="span4">

<a data-toggle="collapse" data-target="#network_read_timeout">598 Network read timeout error</a>
<div id="network_read_timeout" class="collapse">
<h3>Wikipedia</h3>
This status code is not specified in any RFCs, but is used by some HTTP proxies to signal a network read timeout behind the proxy to a client in front of the proxy.

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#network_connect_timeout">599 Network connect timeout error</a>
<div id="network_connect_timeout" class="collapse">
<h3>Wikipedia</h3>
This status code is not specified in any RFCs, but is used by some HTTP proxies to signal a network connect timeout behind the proxy to a client in front of the proxy.

</div>
</div>
<div class="span4"></div>
</div>

<div class="row"></div>";s:10:"post_title";s:17:"HTTP Status Codes";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:17:"http-status-codes";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2016-08-12 11:55:30";s:17:"post_modified_gmt";s:19:"2016-08-12 04:55:30";s:21:"post_content_filtered";s:69122:"<div class="span12">

This page is created from HTTP status code information found at <a href="http://www.ietf.org/assignments/http-status-codes/http-status-codes.xml" target="_blank">ietf.org</a> and <a href="http://en.wikipedia.org/wiki/HTTP_status_code" target="_blank">Wikipedia</a> by <strong>Restapitutorial.com</strong>

</div>
<div class="row">
<div class="span12">
<h2><a data-toggle="collapse" data-target="#1xx">1xx Informational</a></h2>
<div id="1xx" class="collapse">

This class of status code indicates a provisional response, consisting only of the Status-Line and optional headers, and is terminated by an empty line. There are no required headers for this class of status code. Since HTTP/1.0 did not define any 1xx status codes, servers MUST NOT send a 1xx response to an HTTP/1.0 client except under experimental conditions.

A client MUST be prepared to accept one or more 1xx status responses prior to a regular response, even if the client does not expect a 100 (Continue) status message. Unexpected 1xx status responses MAY be ignored by a user agent.

Proxies MUST forward 1xx responses, unless the connection between the proxy and its client has been closed, or unless the proxy itself requested the generation of the 1xx response. (For example, if a proxy adds a "Expect: 100-continue" field when it forwards a request, then it need not forward the corresponding 100 (Continue) response(s).)
<h3>Wikipedia</h3>
Request received, continuing process.

This class of status code indicates a provisional response, consisting only of the Status-Line and optional headers, and is terminated by an empty line. Since HTTP/1.0 did not define any 1xx status codes, servers must not send a 1xx response to an HTTP/1.0 client except under experimental conditions.

</div>
</div>
</div>
<div class="row">
<div class="span4">

<a data-toggle="collapse" data-target="#continue">100 Continue</a>
<div id="continue" class="collapse">

The client SHOULD continue with its request. This interim response is used to inform the client that the initial part of the request has been received and has not yet been rejected by the server. The client SHOULD continue by sending the remainder of the request or, if the request has already been completed, ignore this response. The server MUST send a final response after the request has been completed. See section 8.2.3 for detailed discussion of the use and handling of this status code.
<h3>Wikipedia</h3>
This means that the server has received the request headers, and that the client should proceed to send the request body (in the case of a request for which a body needs to be sent; for example, a POST request). If the request body is large, sending it to a server when a request has already been rejected based upon inappropriate headers is inefficient. To have a server check if the request could be accepted based on the request's headers alone, a client must send Expect: 100-continue as a header in its initial request and check if a 100 Continue status code is received in response before continuing (or receive 417 Expectation Failed and not continue).

</div>
</div>
<div class="span4">

<a href="http://s.codepen.io/boomerang/9ccbeb56cdb6968eb970fe7c235f1eb61470977616195/index.html#" data-toggle="collapse" data-target="#switching_protocols">101 Switching Protocols</a>
<div id="switching_protocols" class="collapse">

The server understands and is willing to comply with the client's request, via the Upgrade message header field (section 14.42), for a change in the application protocol being used on this connection. The server will switch protocols to those defined by the response's Upgrade header field immediately after the empty line which terminates the 101 response.

The protocol SHOULD be switched only when it is advantageous to do so. For example, switching to a newer version of HTTP is advantageous over older versions, and switching to a real-time, synchronous protocol might be advantageous when delivering resources that use such features.
<h3>Wikipedia</h3>
This means the requester has asked the server to switch protocols and the server is acknowledging that it will do so.

</div>
</div>
<div class="span4">

<a href="http://s.codepen.io/boomerang/9ccbeb56cdb6968eb970fe7c235f1eb61470977616195/index.html#" data-toggle="collapse" data-target="#processing">102 Processing (WebDAV)</a>
<div id="processing" class="collapse">

The 102 (Processing) status code is an interim response used to inform the client that the server has accepted the complete request, but has not yet completed it. This status code SHOULD only be sent when the server has a reasonable expectation that the request will take significant time to complete. As guidance, if a method is taking longer than 20 seconds (a reasonable, but arbitrary value) to process the server SHOULD return a 102 (Processing) response. The server MUST send a final response after the request has been completed.

Methods can potentially take a long period of time to process, especially methods that support the Depth header. In such cases the client may time-out the connection while waiting for a response. To prevent this the server may return a 102 (Processing) status code to indicate to the client that the server is still processing the method.
<h3>Wikipedia</h3>
As a WebDAV request may contain many sub-requests involving file operations, it may take a long time to complete the request. This code indicates that the server has received and is processing the request, but no response is available yet. This prevents the client from timing out and assuming the request was lost.

</div>
</div>
</div>
<div class="row">
<div class="span12">
<h2><a data-toggle="collapse" data-target="#2xx">2xx Success</a></h2>
<div id="2xx" class="collapse">

This class of status code indicates that the client's request was successfully received, understood, and accepted.
<h3>Wikipedia</h3>
This class of status codes indicates the action requested by the client was received, understood, accepted and processed successfully.

</div>
</div>
</div>
<div class="row">
<div class="span4">

<i class="icon-star"></i><a data-toggle="collapse" data-target="#ok">200 OK</a>
<div id="ok" class="collapse">

The request has succeeded. The information returned with the response is dependent on the method used in the request, for example:
<ul>
 	<li>GET an entity corresponding to the requested resource is sent in the response;</li>
 	<li>HEAD the entity-header fields corresponding to the requested resource are sent in the response without any message-body;</li>
 	<li>POST an entity describing or containing the result of the action;</li>
 	<li>TRACE an entity containing the request message as received by the end server.</li>
</ul>
<h3>Wikipedia</h3>
Standard response for successful HTTP requests. The actual response will depend on the request method used. In a GET request, the response will contain an entity corresponding to the requested resource. In a POST request the response will contain an entity describing or containing the result of the action.

<i class="icon-star"></i>General status code. Most common code used to indicate success.

</div>
</div>
<div class="span4">

<i class="icon-star"></i><a data-toggle="collapse" data-target="#created">201 Created</a>
<div id="created" class="collapse">

The request has been fulfilled and resulted in a new resource being created. The newly created resource can be referenced by the URI(s) returned in the entity of the response, with the most specific URI for the resource given by a Location header field. The response SHOULD include an entity containing a list of resource characteristics and location(s) from which the user or user agent can choose the one most appropriate. The entity format is specified by the media type given in the Content-Type header field. The origin server MUST create the resource before returning the 201 status code. If the action cannot be carried out immediately, the server SHOULD respond with 202 (Accepted) response instead.

A 201 response MAY contain an ETag response header field indicating the current value of the entity tag for the requested variant just created, see section 14.19.
<h3>Wikipedia</h3>
The request has been fulfilled and resulted in a new resource being created.

<i class="icon-star"></i>Successful creation occurred (via either POST or PUT). Set the Location header to contain a link to the newly-created resource (on POST). Response body content may or may not be present.

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#accepted">202 Accepted</a>
<div id="accepted" class="collapse">

The request has been accepted for processing, but the processing has not been completed. The request might or might not eventually be acted upon, as it might be disallowed when processing actually takes place. There is no facility for re-sending a status code from an asynchronous operation such as this.

The 202 response is intentionally non-committal. Its purpose is to allow a server to accept a request for some other process (perhaps a batch-oriented process that is only run once per day) without requiring that the user agent's connection to the server persist until the process is completed. The entity returned with this response SHOULD include an indication of the request's current status and either a pointer to a status monitor or some estimate of when the user can expect the request to be fulfilled.
<h3>Wikipedia</h3>
The request has been accepted for processing, but the processing has not been completed. The request might or might not eventually be acted upon, as it might be disallowed when processing actually takes place.

</div>
</div>
</div>
<div class="row">
<div class="span4">

<a data-toggle="collapse" data-target="#nainfo">203 Non-Authoritative Information</a>
<div id="nainfo" class="collapse">

The returned metainformation in the entity-header is not the definitive set as available from the origin server, but is gathered from a local or a third-party copy. The set presented MAY be a subset or superset of the original version. For example, including local annotation information about the resource might result in a superset of the metainformation known by the origin server. Use of this response code is not required and is only appropriate when the response would otherwise be 200 (OK).
<h3>Wikipedia</h3>
The server successfully processed the request, but is returning information that may be from another source.

Not present in HTTP/1.0: available since HTTP/1.1

</div>
</div>
<div class="span4">

<i class="icon-star"></i><a data-toggle="collapse" data-target="#nocontent">204 No Content</a>
<div id="nocontent" class="collapse">

The server has fulfilled the request but does not need to return an entity-body, and might want to return updated metainformation. The response MAY include new or updated metainformation in the form of entity-headers, which if present SHOULD be associated with the requested variant.

If the client is a user agent, it SHOULD NOT change its document view from that which caused the request to be sent. This response is primarily intended to allow input for actions to take place without causing a change to the user agent's active document view, although any new or updated metainformation SHOULD be applied to the document currently in the user agent's active view.

The 204 response MUST NOT include a message-body, and thus is always terminated by the first empty line after the header fields.
<h3>Wikipedia</h3>
The server successfully processed the request, but is not returning any content.

<i class="icon-star"></i>Status when wrapped responses (e.g. JSEND) are not used and nothing is in the body (e.g. DELETE).

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#resetcontent">205 Reset Content</a>
<div id="resetcontent" class="collapse">

The server has fulfilled the request and the user agent SHOULD reset the document view which caused the request to be sent. This response is primarily intended to allow input for actions to take place via user input, followed by a clearing of the form in which the input is given so that the user can easily initiate another input action. The response MUST NOT include an entity.
<h3>Wikipedia</h3>
The server successfully processed the request, but is not returning any content. Unlike a 204 response, this response requires that the requester reset the document view.

</div>
</div>
</div>
<div class="row">
<div class="span4">

<a data-toggle="collapse" data-target="#partialcontent">206 Partial Content</a>
<div id="partialcontent" class="collapse">

The server has fulfilled the partial GET request for the resource. The request MUST have included a Range header field (section 14.35) indicating the desired range, and MAY have included an If-Range header field (section 14.27) to make the request conditional.

The response MUST include the following header fields:
<ul>
 	<li>Either a Content-Range header field (section 14.16) indicating the range included with this response, or a multipart/byteranges Content-Type including Content-Range fields for each part. If a Content-Length header field is present in the response, its value MUST match the actual number of OCTETs transmitted in the message-body.</li>
 	<li>Date</li>
 	<li>ETag and/or Content-Location, if the header would have been sent in a 200 response to the same request</li>
 	<li>Expires, Cache-Control, and/or Vary, if the field-value might differ from that sent in any previous response for the same variant</li>
</ul>
If the 206 response is the result of an If-Range request that used a strong cache validator (see section 13.3.3), the response SHOULD NOT include other entity-headers. If the response is the result of an If-Range request that used a weak validator, the response MUST NOT include other entity-headers; this prevents inconsistencies between cached entity-bodies and updated headers. Otherwise, the response MUST include all of the entity-headers that would have been returned with a 200 (OK) response to the same request.

A cache MUST NOT combine a 206 response with other previously cached content if the ETag or Last-Modified headers do not match exactly, see 13.5.4.

A cache that does not support the Range and Content-Range headers MUST NOT cache 206 (Partial) responses.
<h3>Wikipedia</h3>
The server is delivering only part of the resource due to a range header sent by the client. The range header is used by tools like wget to enable resuming of interrupted downloads, or split a download into multiple simultaneous streams.

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#multi_status">207 Multi-Status (WebDAV)</a>
<div id="multi_status" class="collapse">

The 207 (Multi-Status) status code provides status for multiple independent operations (see section 11 for more information).
<h3>Wikipedia</h3>
The message body that follows is an XML message and can contain a number of separate response codes, depending on how many sub-requests were made.

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#already_reported">208 Already Reported (WebDAV)</a>
<div id="already_reported" class="collapse">

The 208 (Already Reported) status code can be used inside a DAV: propstat response element to avoid enumerating the internal members of multiple bindings to the same collection repeatedly. For each binding to a collection inside the request's scope, only one will be reported with a 200 status, while subsequent DAV:response elements for all other bindings will use the 208 status, and no DAV:response elements for their descendants are included.
<h3>Wikipedia</h3>
The members of a DAV binding have already been enumerated in a previous reply to this request, and are not being included again.

</div>
</div>
</div>
<div class="row">
<div class="span4">

<a data-toggle="collapse" data-target="#im_used">226 IM Used</a>
<div id="im_used" class="collapse">

The server has fulfilled a GET request for the resource, and the response is a representation of the result of one or more instance-manipulations applied to the current instance. The actual current instance might not be available except by combining this response with other previous or future responses, as appropriate for the specific instance-manipulation(s). If so, the headers of the resulting instance are the result of combining the headers from the status-226 response and the other instances, following the rules in section 13.5.3 of the HTTP/1.1 specification.

The request MUST have included an A-IM header field listing at least one instance-manipulation. The response MUST include an Etag header field giving the entity tag of the current instance.

A response received with a status code of 226 MAY be stored by a cache and used in reply to a subsequent request, subject to the HTTP expiration mechanism and any Cache-Control headers, and to the requirements in section 10.6.

A response received with a status code of 226 MAY be used by a cache, in conjunction with a cache entry for the base instance, to create a cache entry for the current instance.
<h3>Wikipedia</h3>
The server has fulfilled a GET request for the resource, and the response is a representation of the result of one or more instance-manipulations applied to the current instance.

</div>
</div>
<div class="span8"></div>
</div>
<div class="row">
<div class="span12">
<h2><a data-toggle="collapse" data-target="#3xx">3xx Redirection</a></h2>
<div id="3xx" class="collapse">

This class of status code indicates that further action needs to be taken by the user agent in order to fulfill the request. The action required MAY be carried out by the user agent without interaction with the user if and only if the method used in the second request is GET or HEAD. A client SHOULD detect infinite redirection loops, since such loops generate network traffic for each redirection.
<blockquote><strong>Note:</strong> previous versions of this specification recommended a maximum of five redirections. Content developers should be aware that there might be clients that implement such a fixed limitation.</blockquote>
<h3>Wikipedia</h3>
The client must take additional action to complete the request.

This class of status code indicates that further action needs to be taken by the user agent in order to fulfil the request. The action required may be carried out by the user agent without interaction with the user if and only if the method used in the second request is GET or HEAD. A user agent should not automatically redirect a request more than five times, since such redirections usually indicate an infinite loop.

</div>
</div>
</div>
<div class="row">
<div class="span4">

<a data-toggle="collapse" data-target="#multiplechoices">300 Multiple Choices</a>
<div id="multiplechoices" class="collapse">

The requested resource corresponds to any one of a set of representations, each with its own specific location, and agent- driven negotiation information (section 12) is being provided so that the user (or user agent) can select a preferred representation and redirect its request to that location.

Unless it was a HEAD request, the response SHOULD include an entity containing a list of resource characteristics and location(s) from which the user or user agent can choose the one most appropriate. The entity format is specified by the media type given in the Content- Type header field. Depending upon the format and the capabilities of the user agent, selection of the most appropriate choice MAY be performed automatically. However, this specification does not define any standard for such automatic selection.

If the server has a preferred choice of representation, it SHOULD include the specific URI for that representation in the Location field; user agents MAY use the Location field value for automatic redirection. This response is cacheable unless indicated otherwise.
<h3>Wikipedia</h3>
Indicates multiple options for the resource that the client may follow. It, for instance, could be used to present different format options for video, list files with different extensions, or word sense disambiguation.

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#movepermanently">301 Moved Permanently</a>
<div id="movepermanently" class="collapse">

The requested resource has been assigned a new permanent URI and any future references to this resource SHOULD use one of the returned URIs. Clients with link editing capabilities ought to automatically re-link references to the Request-URI to one or more of the new references returned by the server, where possible. This response is cacheable unless indicated otherwise.

The new permanent URI SHOULD be given by the Location field in the response. Unless the request method was HEAD, the entity of the response SHOULD contain a short hypertext note with a hyperlink to the new URI(s).

If the 301 status code is received in response to a request other than GET or HEAD, the user agent MUST NOT automatically redirect the request unless it can be confirmed by the user, since this might change the conditions under which the request was issued.
<blockquote><strong>Note:</strong> When automatically redirecting a POST request after receiving a 301 status code, some existing HTTP/1.0 user agents will erroneously change it into a GET request.</blockquote>
<h3>Wikipedia</h3>
This and all future requests should be directed to the given URI.

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#found">302 Found</a>
<div id="found" class="collapse">

The requested resource resides temporarily under a different URI. Since the redirection might be altered on occasion, the client SHOULD continue to use the Request-URI for future requests. This response is only cacheable if indicated by a Cache-Control or Expires header field.

The temporary URI SHOULD be given by the Location field in the response. Unless the request method was HEAD, the entity of the response SHOULD contain a short hypertext note with a hyperlink to the new URI(s).

If the 302 status code is received in response to a request other than GET or HEAD, the user agent MUST NOT automatically redirect the request unless it can be confirmed by the user, since this might change the conditions under which the request was issued.
<blockquote><strong>Note:</strong> RFC 1945 and RFC 2068 specify that the client is not allowed to change the method on the redirected request. However, most existing user agent implementations treat 302 as if it were a 303 response, performing a GET on the Location field-value regardless of the original request method. The status codes 303 and 307 have been added for servers that wish to make unambiguously clear which kind of reaction is expected of the client.</blockquote>
<h3>Wikipedia</h3>
This is an example of industry practice contradicting the standard.[2] The HTTP/1.0 specification (RFC 1945) required the client to perform a temporary redirect (the original describing phrase was "Moved Temporarily"), but popular browsers implemented 302 with the functionality of a 303 See Other. Therefore, HTTP/1.1 added status codes 303 and 307 to distinguish between the two behaviours. However, some Web applications and frameworks use the 302 status code as if it were the 303.

</div>
</div>
</div>
<div class="row">
<div class="span4">

<a data-toggle="collapse" data-target="#see_other">303 See Other</a>
<div id="see_other" class="collapse">

The response to the request can be found under a different URI and SHOULD be retrieved using a GET method on that resource. This method exists primarily to allow the output of a POST-activated script to redirect the user agent to a selected resource. The new URI is not a substitute reference for the originally requested resource. The 303 response MUST NOT be cached, but the response to the second (redirected) request might be cacheable.

The different URI SHOULD be given by the Location field in the response. Unless the request method was HEAD, the entity of the response SHOULD contain a short hypertext note with a hyperlink to the new URI(s).
<blockquote>Note: Many pre-HTTP/1.1 user agents do not understand the 303 status. When interoperability with such clients is a concern, the 302 status code may be used instead, since most user agents react to a 302 response as described here for 303.</blockquote>
<h3>Wikipedia</h3>
The response to the request can be found under another URI using a GET method. When received in response to a POST (or PUT/DELETE), it should be assumed that the server has received the data and the redirect should be issued with a separate GET message.

Since HTTP/1.1

</div>
</div>
<div class="span4">

<i class="icon-star"></i><a data-toggle="collapse" data-target="#not_modified">304 Not Modified</a>
<div id="not_modified" class="collapse">

If the client has performed a conditional GET request and access is allowed, but the document has not been modified, the server SHOULD respond with this status code. The 304 response MUST NOT contain a message-body, and thus is always terminated by the first empty line after the header fields.

The response MUST include the following header fields:
<ul>
 	<li>Date, unless its omission is required by section 14.18.1</li>
</ul>
If a clockless origin server obeys these rules, and proxies and clients add their own Date to any response received without one (as already specified by [RFC 2068], section 14.19), caches will operate correctly.
<ul>
 	<li>ETag and/or Content-Location, if the header would have been sent in a 200 response to the same request</li>
 	<li>Expires, Cache-Control, and/or Vary, if the field-value might differ from that sent in any previous response for the same variant</li>
</ul>
If the conditional GET used a strong cache validator (see section 13.3.3), the response SHOULD NOT include other entity-headers. Otherwise (i.e., the conditional GET used a weak validator), the response MUST NOT include other entity-headers; this prevents inconsistencies between cached entity-bodies and updated headers.

If a 304 response indicates an entity not currently cached, then the cache MUST disregard the response and repeat the request without the conditional.

If a cache uses a received 304 response to update a cache entry, the cache MUST update the entry to reflect any new field values given in the response.
<h3>Wikipedia</h3>
Indicates the resource has not been modified since last requested. Typically, the HTTP client provides a header like the If-Modified-Since header to provide a time against which to compare. Using this saves bandwidth and reprocessing on both the server and client, as only the header data must be sent and received in comparison to the entirety of the page being re-processed by the server, then sent again using more bandwidth of the server and client.

<i class="icon-star"></i>Used for conditional GET calls to reduce band-width usage. If used, must set the Date, Content-Location, ETag headers to what they would have been on a regular GET call. There must be no body on the response.

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#use_proxy">305 Use Proxy</a>
<div id="use_proxy" class="collapse">

The requested resource MUST be accessed through the proxy given by the Location field. The Location field gives the URI of the proxy. The recipient is expected to repeat this single request via the proxy. 305 responses MUST only be generated by origin servers.
<blockquote>Note: RFC 2068 was not clear that 305 was intended to redirect a single request, and to be generated by origin servers only. Not observing these limitations has significant security consequences.</blockquote>
<h3>Wikipedia</h3>
Many HTTP clients (such as Mozilla and Internet Explorer) do not correctly handle responses with this status code, primarily for security reasons.

</div>
</div>
</div>
<div class="row">
<div class="span4">

<a data-toggle="collapse" data-target="#306unused">306 (Unused)</a>
<div id="306unused" class="collapse">

The 306 status code was used in a previous version of the specification, is no longer used, and the code is reserved.
<h3>Wikipedia</h3>
No longer used. Originally meant "Subsequent requests should use the specified proxy."

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#temp_redirect">307 Temporary Redirect</a>
<div id="temp_redirect" class="collapse">

The requested resource resides temporarily under a different URI. Since the redirection MAY be altered on occasion, the client SHOULD continue to use the Request-URI for future requests. This response is only cacheable if indicated by a Cache-Control or Expires header field.

The temporary URI SHOULD be given by the Location field in the response. Unless the request method was HEAD, the entity of the response SHOULD contain a short hypertext note with a hyperlink to the new URI(s) , since many pre-HTTP/1.1 user agents do not understand the 307 status. Therefore, the note SHOULD contain the information necessary for a user to repeat the original request on the new URI.

If the 307 status code is received in response to a request other than GET or HEAD, the user agent MUST NOT automatically redirect the request unless it can be confirmed by the user, since this might change the conditions under which the request was issued.
<h3>Wikipedia</h3>
In this case, the request should be repeated with another URI; however, future requests can still use the original URI. In contrast to 302, the request method should not be changed when reissuing the original request. For instance, a POST request must be repeated using another POST request.

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#perm_redirect">308 Permanent Redirect (experiemental)</a>
<div id="perm_redirect" class="collapse">
<h3>Wikipedia</h3>
The request, and all future requests should be repeated using another URI. 307 and 308 (as proposed) parallel the behaviours of 302 and 301, but do not require the HTTP method to change. So, for example, submitting a form to a permanently redirected resource may continue smoothly.

</div>
</div>
</div>
<div class="row">
<div class="span12">
<h2><a href="http://s.codepen.io/boomerang/9ccbeb56cdb6968eb970fe7c235f1eb61470977616195/index.html#" data-toggle="collapse" data-target="#4xx">4xx Client Error</a></h2>
<div id="4xx" class="collapse">

The 4xx class of status code is intended for cases in which the client seems to have erred. Except when responding to a HEAD request, the server SHOULD include an entity containing an explanation of the error situation, and whether it is a temporary or permanent condition. These status codes are applicable to any request method. User agents SHOULD display any included entity to the user.

If the client is sending data, a server implementation using TCP SHOULD be careful to ensure that the client acknowledges receipt of the packet(s) containing the response, before the server closes the input connection. If the client continues sending data to the server after the close, the server's TCP stack will send a reset packet to the client, which may erase the client's unacknowledged input buffers before they can be read and interpreted by the HTTP application.
<h3>Wikipedia</h3>
The 4xx class of status code is intended for cases in which the client seems to have erred. Except when responding to a HEAD request, the server should include an entity containing an explanation of the error situation, and whether it is a temporary or permanent condition. These status codes are applicable to any request method. User agents should display any included entity to the user.

</div>
</div>
</div>
<div class="row">
<div class="span4">

<i class="icon-star"></i><a data-toggle="collapse" data-target="#bad_request">400 Bad Request</a>
<div id="bad_request" class="collapse">

The request could not be understood by the server due to malformed syntax. The client SHOULD NOT repeat the request without modifications.
<h3>Wikipedia</h3>
The request cannot be fulfilled due to bad syntax.

<i class="icon-star"></i>General error when fulfilling the request would cause an invalid state. Domain validation errors, missing data, etc. are some examples.

</div>
</div>
<div class="span4">

<i class="icon-star"></i><a data-toggle="collapse" data-target="#unauthorized">401 Unauthorized</a>
<div id="unauthorized" class="collapse">

The request requires user authentication. The response MUST include a WWW-Authenticate header field (section 14.47) containing a challenge applicable to the requested resource. The client MAY repeat the request with a suitable Authorization header field (section 14.8). If the request already included Authorization credentials, then the 401 response indicates that authorization has been refused for those credentials. If the 401 response contains the same challenge as the prior response, and the user agent has already attempted authentication at least once, then the user SHOULD be presented the entity that was given in the response, since that entity might include relevant diagnostic information. HTTP access authentication is explained in "HTTP Authentication: Basic and Digest Access Authentication".
<h3>Wikipedia</h3>
Similar to 403 Forbidden, but specifically for use when authentication is possible but has failed or not yet been provided. The response must include a WWW-Authenticate header field containing a challenge applicable to the requested resource. See Basic access authentication and Digest access authentication.

<i class="icon-star"></i>Error code response for missing or invalid authentication token.

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#pmt_required">402 Payment Required</a>
<div id="pmt_required" class="collapse">

This code is reserved for future use.
<h3>Wikipedia</h3>
Reserved for future use. The original intention was that this code might be used as part of some form of digital cash or micropayment scheme, but that has not happened, and this code is not usually used. As an example of its use, however, Apple's MobileMe service generates a 402 error ("httpStatusCode:402" in the Mac OS X Console log) if the MobileMe account is delinquent.

</div>
</div>
</div>
<div class="row">
<div class="span4">

<i class="icon-star"></i><a data-toggle="collapse" data-target="#forbidden">403 Forbidden</a>
<div id="forbidden" class="collapse">

The server understood the request, but is refusing to fulfill it. Authorization will not help and the request SHOULD NOT be repeated. If the request method was not HEAD and the server wishes to make public why the request has not been fulfilled, it SHOULD describe the reason for the refusal in the entity. If the server does not wish to make this information available to the client, the status code 404 (Not Found) can be used instead.
<h3>Wikipedia</h3>
The request was a legal request, but the server is refusing to respond to it. Unlike a 401 Unauthorized response, authenticating will make no difference.

<i class="icon-star"></i>Error code for user not authorized to perform the operation or the resource is unavailable for some reason (e.g. time constraints, etc.).

</div>
</div>
<div class="span4">

<i class="icon-star"></i><a data-toggle="collapse" data-target="#not_found">404 Not Found</a>
<div id="not_found" class="collapse">

The server has not found anything matching the Request-URI. No indication is given of whether the condition is temporary or permanent. The 410 (Gone) status code SHOULD be used if the server knows, through some internally configurable mechanism, that an old resource is permanently unavailable and has no forwarding address. This status code is commonly used when the server does not wish to reveal exactly why the request has been refused, or when no other response is applicable.
<h3>Wikipedia</h3>
The requested resource could not be found but may be available again in the future. Subsequent requests by the client are permissible.

<i class="icon-star"></i>Used when the requested resource is not found, whether it doesn't exist or if there was a 401 or 403 that, for security reasons, the service wants to mask.

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#method_no_allowed">405 Method Not Allowed</a>
<div id="method_no_allowed" class="collapse">

The method specified in the Request-Line is not allowed for the resource identified by the Request-URI. The response MUST include an Allow header containing a list of valid methods for the requested resource.
<h3>Wikipedia</h3>
A request was made of a resource using a request method not supported by that resource; for example, using GET on a form which requires data to be presented via POST, or using PUT on a read-only resource.

</div>
</div>
</div>
<div class="row">
<div class="span4">

<a data-toggle="collapse" data-target="#not_acceptable">406 Not Acceptable</a>
<div id="not_acceptable" class="collapse">

The resource identified by the request is only capable of generating response entities which have content characteristics not acceptable according to the accept headers sent in the request.

Unless it was a HEAD request, the response SHOULD include an entity containing a list of available entity characteristics and location(s) from which the user or user agent can choose the one most appropriate. The entity format is specified by the media type given in the Content-Type header field. Depending upon the format and the capabilities of the user agent, selection of the most appropriate choice MAY be performed automatically. However, this specification does not define any standard for such automatic selection.
<blockquote>Note: HTTP/1.1 servers are allowed to return responses which are not acceptable according to the accept headers sent in the request. In some cases, this may even be preferable to sending a 406 response. User agents are encouraged to inspect the headers of an incoming response to determine if it is acceptable.</blockquote>
If the response could be unacceptable, a user agent SHOULD temporarily stop receipt of more data and query the user for a decision on further actions.
<h3>Wikipedia</h3>
The requested resource is only capable of generating content not acceptable according to the Accept headers sent in the request.

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#proxy_auth_rqd">407 Proxy Authentication Required</a>
<div id="proxy_auth_rqd" class="collapse">

This code is similar to 401 (Unauthorized), but indicates that the client must first authenticate itself with the proxy. The proxy MUST return a Proxy-Authenticate header field (section 14.33) containing a challenge applicable to the proxy for the requested resource. The client MAY repeat the request with a suitable Proxy-Authorization header field (section 14.34). HTTP access authentication is explained in "HTTP Authentication: Basic and Digest Access Authentication".
<h3>Wikipedia</h3>
The client must first authenticate itself with the proxy.

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#request_timeout">408 Request Timeout</a>
<div id="request_timeout" class="collapse">

The client did not produce a request within the time that the server was prepared to wait. The client MAY repeat the request without modifications at any later time.
<h3>Wikipedia</h3>
The server timed out waiting for the request. According to W3 HTTP specifications: "The client did not produce a request within the time that the server was prepared to wait. The client MAY repeat the request without modifications at any later time."

</div>
</div>
</div>
<div class="row">
<div class="span4">

<i class="icon-star"></i><a data-toggle="collapse" data-target="#conflict">409 Conflict</a>
<div id="conflict" class="collapse">

The request could not be completed due to a conflict with the current state of the resource. This code is only allowed in situations where it is expected that the user might be able to resolve the conflict and resubmit the request. The response body SHOULD include enough information for the user to recognize the source of the conflict. Ideally, the response entity would include enough information for the user or user agent to fix the problem; however, that might not be possible and is not required.

Conflicts are most likely to occur in response to a PUT request. For example, if versioning were being used and the entity being PUT included changes to a resource which conflict with those made by an earlier (third-party) request, the server might use the 409 response to indicate that it can't complete the request. In this case, the response entity would likely contain a list of the differences between the two versions in a format defined by the response Content-Type.
<h3>Wikipedia</h3>
Indicates that the request could not be processed because of conflict in the request, such as an edit conflict.

<i class="icon-star"></i>Whenever a resource conflict would be caused by fulfilling the request. Duplicate entries and deleting root objects when cascade-delete is not supported are a couple of examples.

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#gone">410 Gone</a>
<div id="gone" class="collapse">

The requested resource is no longer available at the server and no forwarding address is known. This condition is expected to be considered permanent. Clients with link editing capabilities SHOULD delete references to the Request-URI after user approval. If the server does not know, or has no facility to determine, whether or not the condition is permanent, the status code 404 (Not Found) SHOULD be used instead. This response is cacheable unless indicated otherwise.

The 410 response is primarily intended to assist the task of web maintenance by notifying the recipient that the resource is intentionally unavailable and that the server owners desire that remote links to that resource be removed. Such an event is common for limited-time, promotional services and for resources belonging to individuals no longer working at the server's site. It is not necessary to mark all permanently unavailable resources as "gone" or to keep the mark for any length of time -- that is left to the discretion of the server owner.
<h3>Wikipedia</h3>
Indicates that the resource requested is no longer available and will not be available again. This should be used when a resource has been intentionally removed and the resource should be purged. Upon receiving a 410 status code, the client should not request the resource again in the future. Clients such as search engines should remove the resource from their indices. Most use cases do not require clients and search engines to purge the resource, and a "404 Not Found" may be used instead.

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#length_rqd">411 Length Required</a>
<div id="length_rqd" class="collapse">

The server refuses to accept the request without a defined Content- Length. The client MAY repeat the request if it adds a valid Content-Length header field containing the length of the message-body in the request message.
<h3>Wikipedia</h3>
The request did not specify the length of its content, which is required by the requested resource.

</div>
</div>
</div>
<div class="row">
<div class="span4">

<a data-toggle="collapse" data-target="#precondition_failed">412 Precondition Failed</a>
<div id="precondition_failed" class="collapse">

The precondition given in one or more of the request-header fields evaluated to false when it was tested on the server. This response code allows the client to place preconditions on the current resource metainformation (header field data) and thus prevent the requested method from being applied to a resource other than the one intended.
<h3>Wikipedia</h3>
The server does not meet one of the preconditions that the requester put on the request.

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#request_entity_too_large">413 Request Entity Too Large</a>
<div id="request_entity_too_large" class="collapse">

The server is refusing to process a request because the request entity is larger than the server is willing or able to process. The server MAY close the connection to prevent the client from continuing the request.

If the condition is temporary, the server SHOULD include a Retry- After header field to indicate that it is temporary and after what time the client MAY try again.
<h3>Wikipedia</h3>
The request is larger than the server is willing or able to process.

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#request_uri_too_long">414 Request-URI Too Long</a>
<div id="request_uri_too_long" class="collapse">

The server is refusing to service the request because the Request-URI is longer than the server is willing to interpret. This rare condition is only likely to occur when a client has improperly converted a POST request to a GET request with long query information, when the client has descended into a URI "black hole" of redirection (e.g., a redirected URI prefix that points to a suffix of itself), or when the server is under attack by a client attempting to exploit security holes present in some servers using fixed-length buffers for reading or manipulating the Request-URI.
<h3>Wikipedia</h3>
The URI provided was too long for the server to process.

</div>
</div>
</div>
<div class="row">
<div class="span4">

<a data-toggle="collapse" data-target="#unsupported_media_type">415 Unsupported Media Type</a>
<div id="unsupported_media_type" class="collapse">

The server is refusing to service the request because the entity of the request is in a format not supported by the requested resource for the requested method.
<h3>Wikipedia</h3>
The request entity has a media type which the server or resource does not support. For example, the client uploads an image as image/svg+xml, but the server requires that images use a different format.

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#requested_range_not_satisfiable">416 Requested Range Not Satisfiable</a>
<div id="requested_range_not_satisfiable" class="collapse">

A server SHOULD return a response with this status code if a request included a Range request-header field (section 14.35), and none of the range-specifier values in this field overlap the current extent of the selected resource, and the request did not include an If-Range request-header field. (For byte-ranges, this means that the first- byte-pos of all of the byte-range-spec values were greater than the current length of the selected resource.)

When this status code is returned for a byte-range request, the response SHOULD include a Content-Range entity-header field specifying the current length of the selected resource (see section 14.16). This response MUST NOT use the multipart/byteranges content- type.
<h3>Wikipedia</h3>
The client has asked for a portion of the file, but the server cannot supply that portion. For example, if the client asked for a part of the file that lies beyond the end of the file.

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#expectation_failed">417 Expectation Failed</a>
<div id="expectation_failed" class="collapse">

The expectation given in an Expect request-header field (see section 14.20) could not be met by this server, or, if the server is a proxy, the server has unambiguous evidence that the request could not be met by the next-hop server.
<h3>Wikipedia</h3>
The server cannot meet the requirements of the Expect request-header field.

</div>
</div>
</div>
<div class="row">
<div class="span4">

<a data-toggle="collapse" data-target="#teapot">418 I'm a teapot (RFC 2324)</a>
<div id="teapot" class="collapse">
<h3>Wikipedia</h3>
This code was defined in 1998 as one of the traditional IETF April Fools' jokes, in RFC 2324, Hyper Text Coffee Pot Control Protocol, and is not expected to be implemented by actual HTTP servers. However, known implementations do exist. An Nginx HTTP server uses this code to simulate goto-like behaviour in its configuration.

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#enhance_your_calm">420 Enhance Your Calm (Twitter)</a>
<div id="enhance_your_calm" class="collapse">
<h3>Wikipedia</h3>
Returned by the Twitter Search and Trends API when the client is being rate limited. Likely a reference to this number's association with marijuana. Other services may wish to implement the 429 Too Many Requests response code instead.

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#unprocessable_entity">422 Unprocessable Entity (WebDAV)</a>
<div id="unprocessable_entity" class="collapse">

The 422 (Unprocessable Entity) status code means the server understands the content type of the request entity (hence a 415(Unsupported Media Type) status code is inappropriate), and the syntax of the request entity is correct (thus a 400 (Bad Request) status code is inappropriate) but was unable to process the contained instructions. For example, this error condition may occur if an XML request body contains well-formed (i.e., syntactically correct), but semantically erroneous, XML instructions.
<h3>Wikipedia</h3>
The request was well-formed but was unable to be followed due to semantic errors.

</div>
</div>
</div>
<div class="row">
<div class="span4">

<a data-toggle="collapse" data-target="#locked">423 Locked (WebDAV)</a>
<div id="locked" class="collapse">

The 423 (Locked) status code means the source or destination resource of a method is locked. This response SHOULD contain an appropriate precondition or postcondition code, such as 'lock-token-submitted' or 'no-conflicting-lock'.
<h3>Wikipedia</h3>
The resource that is being accessed is locked.

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#failed_dependency">424 Failed Dependency (WebDAV)</a>
<div id="failed_dependency" class="collapse">

The 424 (Failed Dependency) status code means that the method could not be performed on the resource because the requested action depended on another action and that action failed. For example, if a command in a PROPPATCH method fails, then, at minimum, the rest of the commands will also fail with 424 (Failed Dependency).
<h3>Wikipedia</h3>
The request failed due to failure of a previous request (e.g. a PROPPATCH).

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#adv_collections_expired">425 Reserved for WebDAV</a>
<div id="adv_collections_expired" class="collapse">

Slein, J., Whitehead, E.J., et al., "WebDAV Advanced Collections Protocol", Work In Progress.
<h3>Wikipedia</h3>
Defined in drafts of "WebDAV Advanced Collections Protocol", but not present in "Web Distributed Authoring and Versioning (WebDAV) Ordered Collections Protocol".

</div>
</div>
</div>
<div class="row">
<div class="span4">

<a data-toggle="collapse" data-target="#upgrade_required">426 Upgrade Required</a>
<div id="upgrade_required" class="collapse">

Reliable, interoperable negotiation of Upgrade features requires an unambiguous failure signal. The 426 Upgrade Required status code allows a server to definitively state the precise protocol extensions a given resource must be served with.
<h3>Wikipedia</h3>
The client should switch to a different protocol such as TLS/1.0.

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#precondition_required">428 Precondition Required</a>
<div id="precondition_required" class="collapse">

The 428 status code indicates that the origin server requires the request to be conditional.

Its typical use is to avoid the "lost update" problem, where a client GETs a resource's state, modifies it, and PUTs it back to the server, when meanwhile a third party has modified the state on the server, leading to a conflict. By requiring requests to be conditional, the server can assure that clients are working with the correct copies.

Responses using this status code SHOULD explain how to resubmit the request successfully.

The 428 status code is optional; clients cannot rely upon its use to prevent "lost update" conflicts.
<h3>Wikipedia</h3>
The origin server requires the request to be conditional. Intended to prevent "the "lost update" problem, where a client GETs a resource's state, modifies it, and PUTs it back to the server, when meanwhile a third party has modified the state on the server, leading to a conflict.

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#too_many_requests">429 Too Many Requests</a>
<div id="too_many_requests" class="collapse">

The 429 status code indicates that the user has sent too many requests in a given amount of time ("rate limiting").

The response representations SHOULD include details explaining the condition, and MAY include a Retry-After header indicating how long to wait before making a new request.

When a server is under attack or just receiving a very large number of requests from a single party, responding to each with a 429 status code will consume resources.

Therefore, servers are not required to use the 429 status code; when limiting resource usage, it may be more appropriate to just drop connections, or take other steps.
<h3>Wikipedia</h3>
The user has sent too many requests in a given amount of time. Intended for use with rate limiting schemes.

</div>
</div>
</div>
<div class="row">
<div class="span4">

<a data-toggle="collapse" data-target="#request_header_fields_too_large">431 Request Header Fields Too Large</a>
<div id="request_header_fields_too_large" class="collapse">

The 431 status code indicates that the server is unwilling to process the request because its header fields are too large. The request MAY be resubmitted after reducing the size of the request header fields.

It can be used both when the set of request header fields in total are too large, and when a single header field is at fault. In the latter case, the response representation SHOULD specify which header field was too large.

Servers are not required to use the 431 status code; when under attack, it may be more appropriate to just drop connections, or take other steps.
<h3>Wikipedia</h3>
The server is unwilling to process the request because either an individual header field, or all the header fields collectively, are too large.

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#no_response_nginx">444 No Response (Nginx)</a>
<div id="no_response_nginx" class="collapse">
<h3>Wikipedia</h3>
An Nginx HTTP server extension. The server returns no information to the client and closes the connection (useful as a deterrent for malware).

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#retry_with">449 Retry With (Microsoft)</a>
<div id="retry_with" class="collapse">
<h3>Wikipedia</h3>
A Microsoft extension. The request should be retried after performing the appropriate action.

</div>
</div>
</div>
<div class="row">
<div class="span4">

<a data-toggle="collapse" data-target="#blocked_by_windows_parental">450 Blocked by Windows Parental Controls (Microsoft)</a>
<div id="blocked_by_windows_parental" class="collapse">
<h3>Wikipedia</h3>
A Microsoft extension. This error is given when Windows Parental Controls are turned on and are blocking access to the given webpage.

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#unavailable_for_legal_reasons">451 Unavailable For Legal Reasons</a>
<div id="unavailable_for_legal_reasons" class="collapse">
<h3>Wikipedia</h3>
Intended to be used when resource access is denied for legal reasons, e.g. censorship or government-mandated blocked access. A reference to the 1953 dystopian novel Fahrenheit 451, where books are outlawed, and the autoignition temperature of paper, 451°F.

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#client_closed_request">499 Client Closed Request (Nginx)</a>
<div id="client_closed_request" class="collapse">
<h3>Wikipedia</h3>
An Nginx HTTP server extension. This code is introduced to log the case when the connection is closed by client while HTTP server is processing its request, making server unable to send the HTTP header back.

</div>
</div>
<div class="span4"></div>
</div>
<div class="row">
<div class="span12">
<h2><a href="http://s.codepen.io/boomerang/9ccbeb56cdb6968eb970fe7c235f1eb61470977616195/index.html#" data-toggle="collapse" data-target="#5xx">5xx Server Error</a></h2>
<div id="5xx" class="collapse">

Response status codes beginning with the digit "5" indicate cases in which the server is aware that it has erred or is incapable of performing the request. Except when responding to a HEAD request, the server SHOULD include an entity containing an explanation of the error situation, and whether it is a temporary or permanent condition. User agents SHOULD display any included entity to the user. These response codes are applicable to any request method.
<h3>Wikipedia</h3>
The server failed to fulfill an apparently valid request.

Response status codes beginning with the digit "5" indicate cases in which the server is aware that it has encountered an error or is otherwise incapable of performing the request. Except when responding to a HEAD request, the server should include an entity containing an explanation of the error situation, and indicate whether it is a temporary or permanent condition. Likewise, user agents should display any included entity to the user. These response codes are applicable to any request method.

</div>
</div>
</div>
<div class="row">
<div class="span4">

<i class="icon-star"></i><a data-toggle="collapse" data-target="#internal_server_error">500 Internal Server Error</a>
<div id="internal_server_error" class="collapse">

The server encountered an unexpected condition which prevented it from fulfilling the request.
<h3>Wikipedia</h3>
A generic error message, given when no more specific message is suitable.

<i class="icon-star"></i>The general catch-all error when the server-side throws an exception.

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#not_implemented">501 Not Implemented</a>
<div id="not_implemented" class="collapse">

The server does not support the functionality required to fulfill the request. This is the appropriate response when the server does not recognize the request method and is not capable of supporting it for any resource.
<h3>Wikipedia</h3>
The server either does not recognise the request method, or it lacks the ability to fulfill the request.

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#bad_gateway">502 Bad Gateway</a>
<div id="bad_gateway" class="collapse">

The server, while acting as a gateway or proxy, received an invalid response from the upstream server it accessed in attempting to fulfill the request.
<h3>Wikipedia</h3>
The server was acting as a gateway or proxy and received an invalid response from the upstream server.

</div>
</div>
</div>
<div class="row">
<div class="span4">

<a data-toggle="collapse" data-target="#service_unavailable">503 Service Unavailable</a>
<div id="service_unavailable" class="collapse">

The server is currently unable to handle the request due to a temporary overloading or maintenance of the server. The implication is that this is a temporary condition which will be alleviated after some delay. If known, the length of the delay MAY be indicated in a Retry-After header. If no Retry-After is given, the client SHOULD handle the response as it would for a 500 response.
<blockquote>Note: The existence of the 503 status code does not imply that a server must use it when becoming overloaded. Some servers may wish to simply refuse the connection.</blockquote>
<h3>Wikipedia</h3>
The server is currently unavailable (because it is overloaded or down for maintenance). Generally, this is a temporary state.

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#gateway_timeout">504 Gateway Timeout</a>
<div id="gateway_timeout" class="collapse">

The server, while acting as a gateway or proxy, did not receive a timely response from the upstream server specified by the URI (e.g. HTTP, FTP, LDAP) or some other auxiliary server (e.g. DNS) it needed to access in attempting to complete the request.
<blockquote>Note: Note to implementors: some deployed proxies are known to return 400 or 500 when DNS lookups time out.</blockquote>
<h3>Wikipedia</h3>
The server was acting as a gateway or proxy and did not receive a timely response from the upstream server.

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#version_not_supported">505 HTTP Version Not Supported</a>
<div id="version_not_supported" class="collapse">

The server does not support, or refuses to support, the HTTP protocol version that was used in the request message. The server is indicating that it is unable or unwilling to complete the request using the same major version as the client, as described in section 3.1, other than with this error message. The response SHOULD contain an entity describing why that version is not supported and what other protocols are supported by that server.
<h3>Wikipedia</h3>
The server does not support the HTTP protocol version used in the request.

</div>
</div>
</div>
<div class="row">
<div class="span4">

<a data-toggle="collapse" data-target="#variant_also_negotiates">506 Variant Also Negotiates (Experimental)</a>
<div id="variant_also_negotiates" class="collapse">

The 506 status code indicates that the server has an internal configuration error: the chosen variant resource is configured to engage in transparent content negotiation itself, and is therefore not a proper end point in the negotiation process.
<h3>Wikipedia</h3>
Transparent content negotiation for the request results in a circular reference.

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#insufficient_storage">507 Insufficient Storage (WebDAV)</a>
<div id="insufficient_storage" class="collapse">

The 507 (Insufficient Storage) status code means the method could not be performed on the resource because the server is unable to store the representation needed to successfully complete the request. This condition is considered to be temporary. If the request that received this status code was the result of a user action, the request MUST NOT be repeated until it is requested by a separate user action.
<h3>Wikipedia</h3>
The server is unable to store the representation needed to complete the request.

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#loop_detected">508 Loop Detected (WebDAV)</a>
<div id="loop_detected" class="collapse">

The 508 (Loop Detected) status code indicates that the server terminated an operation because it encountered an infinite loop while processing a request with "Depth: infinity". This status indicates that the entire operation failed.
<h3>Wikipedia</h3>
The server detected an infinite loop while processing the request (sent in lieu of 208).

</div>
</div>
</div>
<div class="row">
<div class="span4">

<a data-toggle="collapse" data-target="#bandwidth_limit_exceeded">509 Bandwidth Limit Exceeded (Apache)</a>
<div id="bandwidth_limit_exceeded" class="collapse">
<h3>Wikipedia</h3>
This status code, while used by many servers, is not specified in any RFCs.

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#not_extended">510 Not Extended</a>
<div id="not_extended" class="collapse">

The policy for accessing the resource has not been met in the request. The server should send back all the information necessary for the client to issue an extended request. It is outside the scope of this specification to specify how the extensions inform the client.

If the 510 response contains information about extensions that were not present in the initial request then the client MAY repeat the request if it has reason to believe it can fulfill the extension policy by modifying the request according to the information provided in the 510 response. Otherwise the client MAY present any entity included in the 510 response to the user, since that entity may include relevant diagnostic information.
<h3>Wikipedia</h3>
Further extensions to the request are required for the server to fulfill it.

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#net_authn_required">511 Network Authentication Required</a>
<div id="net_authn_required" class="collapse">

The 511 status code indicates that the client needs to authenticate to gain network access.

The response representation SHOULD contain a link to a resource that allows the user to submit credentials (e.g. with a HTML form).

Note that the 511 response SHOULD NOT contain a challenge or the login interface itself, because browsers would show the login interface as being associated with the originally requested URL, which may cause confusion.

The 511 status SHOULD NOT be generated by origin servers; it is intended for use by intercepting proxies that are interposed as a means of controlling access to the network.

Responses with the 511 status code MUST NOT be stored by a cache.

The 511 status code is designed to mitigate problems caused by "captive portals" to software (especially non-browser agents) that is expecting a response from the server that a request was made to, not the intervening network infrastructure. It is not intended to encouraged deployment of captive portals, only to limit the damage caused by them.

A network operator wishing to require some authentication, acceptance of terms or other user interaction before granting access usually does so by identifing clients who have not done so ("unknown clients") using their MAC addresses.

Unknown clients then have all traffic blocked, except for that on TCP port 80, which is sent to a HTTP server (the "login server") dedicated to "logging in" unknown clients, and of course traffic to the login server itself.

In common use, a response carrying the 511 status code will not come from the origin server indicated in the request's URL. This presents many security issues; e.g., an attacking intermediary may be inserting cookies into the original domain's name space, may be observing cookies or HTTP authentication credentials sent from the user agent, and so on.

However, these risks are not unique to the 511 status code; in other words, a captive portal that is not using this status code introduces the same issues.

Also, note that captive portals using this status code on an SSL or TLS connection (commonly, port 443) will generate a certificate error on the client.
<h3>Wikipedia</h3>
The client needs to authenticate to gain network access. Intended for use by intercepting proxies used to control access to the network (e.g., "captive portals" used to require agreement to Terms of Service before granting full Internet access via a Wi-Fi hotspot).

</div>
</div>
</div>
<div class="row">
<div class="span4">

<a data-toggle="collapse" data-target="#network_read_timeout">598 Network read timeout error</a>
<div id="network_read_timeout" class="collapse">
<h3>Wikipedia</h3>
This status code is not specified in any RFCs, but is used by some HTTP proxies to signal a network read timeout behind the proxy to a client in front of the proxy.

</div>
</div>
<div class="span4">

<a data-toggle="collapse" data-target="#network_connect_timeout">599 Network connect timeout error</a>
<div id="network_connect_timeout" class="collapse">
<h3>Wikipedia</h3>
This status code is not specified in any RFCs, but is used by some HTTP proxies to signal a network connect timeout behind the proxy to a client in front of the proxy.

</div>
</div>
<div class="span4"></div>
</div>
<div class="row"></div>";s:11:"post_parent";s:1:"0";s:4:"guid";s:25:"http://reactvn.net/?p=604";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}i:5;O:8:"stdClass":23:{s:2:"ID";s:3:"611";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2016-08-12 14:21:28";s:13:"post_date_gmt";s:19:"2016-08-12 07:21:28";s:12:"post_content";s:3404:"<p class="qtext_para">Besides questions for general programming knowledge, here are a couple of ones that are quite good. Please note that answering all five means <i>awesome </i>and this list should not be taken as a <i>must-know</i>.</p>

<ol>
    <li><b>Can you explain the difference between </b><b><i>call</i></b><b> and </b><b><i>apply </i></b><b>to me</b><b><i>?</i></b>
The answer to this question is a bit of a factoid, so that if someone can answer it, it won't give you any information, but if they cannot, it will give a truckload. Almost all JavaScript programmer that has written a library or two (which most curious ones will, after programming it a few years) will know this.
Addendum: Several people are calling #1 into question. I must be very clear here that I stand firm on this one. If you haven't used apply, you are most likely missing out on the most powerful and overlooked aspects of the language. It's also an indicator that you haven't tried your hand at building a library yet, because when building libraries, apply and call are very commonly used.</li>
    <li><b>Can you explain </b><b><i>map </i></b><b>to me</b><b><i>?</i></b>
Map is a an extremely useful functional programming concept that any compsci person will know. If someone doesn't know this, it's a sign that they lack an understanding of computer science and/or lack an understanding of the language. In addition, the explanation itself will give you a sense of how much the person knows about the language just in the way they talk. If the person does well on this question, ask about <i>reduce</i> as a followup. If you do not know what map is, it means that you have done <i>zero</i> functional programming and you're missing out. Severely.</li>
    <li><b>Can you explain </b><b><i>bind </i></b><b>to me</b><b><i>?</i></b>
This is a really great question, because it delves into the concept of this. You can basically drill the interviewee for quite some time on this, as it is a very large subject. You'll get a good sense of a programmer by having this discussion.</li>
    <li><b>Can you explain how </b><b><i>closures</i></b><b> work to me</b><b><i>?</i></b>
This is a great question to ask programmers that claim to be experienced in general, but not with JavaScript. Closures are a general programming concept that is extraordinarily important in JavaScript. If they understand closures well, they will learn JavaScript pretty quickly.</li>
    <li><b>Can you please tell me a story about a JavaScript performance problem that you've encountered and how you approached solving it?</b>
This will tell you a lot about how much programming a person has actually done, in their own words. A big one to keep an eye out for is that they should be praising the Google Developer tools, and not rely too much on theoretical time complexity.</li>
</ol>

<p style="text-align: right;"><a id="__w2_FzoRPMU_link" class="user" href="https://www.quora.com/profile/Mattias-Petter-Johansson" target="_blank">Mattias Petter Johansson</a><span id="__w2_MsfnTjT_bio" class="IdentitySig ActorNameSig IdentityNameSig">, <span id="__w2_MsfnTjT_link"><span id="__w2_MsfnTjT_sig" class="IdentitySig ActorNameSig IdentityNameSig"><span id="__w2_AY8bfZe_text_snip" class="expanded_q_text"><span id="__w2_AY8bfZe_text_snip_content"><span class="rendered_qtext">Developer at Spotify</span></span></span></span></span></span></p>";s:10:"post_title";s:49:"Judge a JavaScript programmer by only 5 questions";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:49:"judge-a-javascript-programmer-by-only-5-questions";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2016-08-12 14:34:02";s:17:"post_modified_gmt";s:19:"2016-08-12 07:34:02";s:21:"post_content_filtered";s:3408:"<p class="qtext_para">Besides questions for general programming knowledge, here are a couple of ones that are quite good. Please note that answering all five means <i>awesome </i>and this list should not be taken as a <i>must-know</i>.</p>

<ol>
 	<li><b>Can you explain the difference between </b><b><i>call</i></b><b> and </b><b><i>apply </i></b><b>to me</b><b><i>?</i></b>
The answer to this question is a bit of a factoid, so that if someone can answer it, it won't give you any information, but if they cannot, it will give a truckload. Almost all JavaScript programmer that has written a library or two (which most curious ones will, after programming it a few years) will know this.
Addendum: Several people are calling #1 into question. I must be very clear here that I stand firm on this one. If you haven't used apply, you are most likely missing out on the most powerful and overlooked aspects of the language. It's also an indicator that you haven't tried your hand at building a library yet, because when building libraries, apply and call are very commonly used.</li>
 	<li><b>Can you explain </b><b><i>map </i></b><b>to me</b><b><i>?</i></b>
Map is a an extremely useful functional programming concept that any compsci person will know. If someone doesn't know this, it's a sign that they lack an understanding of computer science and/or lack an understanding of the language. In addition, the explanation itself will give you a sense of how much the person knows about the language just in the way they talk. If the person does well on this question, ask about <i>reduce</i> as a followup. If you do not know what map is, it means that you have done <i>zero</i> functional programming and you're missing out. Severely.</li>
 	<li><b>Can you explain </b><b><i>bind </i></b><b>to me</b><b><i>?</i></b>
This is a really great question, because it delves into the concept of this. You can basically drill the interviewee for quite some time on this, as it is a very large subject. You'll get a good sense of a programmer by having this discussion.</li>
 	<li><b>Can you explain how </b><b><i>closures</i></b><b> work to me</b><b><i>?</i></b>
This is a great question to ask programmers that claim to be experienced in general, but not with JavaScript. Closures are a general programming concept that is extraordinarily important in JavaScript. If they understand closures well, they will learn JavaScript pretty quickly.</li>
 	<li><b>Can you please tell me a story about a JavaScript performance problem that you've encountered and how you approached solving it?</b>
This will tell you a lot about how much programming a person has actually done, in their own words. A big one to keep an eye out for is that they should be praising the Google Developer tools, and not rely too much on theoretical time complexity.</li>
</ol>
<p style="text-align: right;"><a id="__w2_FzoRPMU_link" class="user" href="https://www.quora.com/profile/Mattias-Petter-Johansson" target="_blank">Mattias Petter Johansson</a><span id="__w2_MsfnTjT_bio" class="IdentitySig ActorNameSig IdentityNameSig">, <span id="__w2_MsfnTjT_link"><span id="__w2_MsfnTjT_sig" class="IdentitySig ActorNameSig IdentityNameSig"><span id="__w2_AY8bfZe_text_snip" class="expanded_q_text"><span id="__w2_AY8bfZe_text_snip_content"><span class="rendered_qtext">Developer at Spotify</span></span></span></span></span></span></p>";s:11:"post_parent";s:1:"0";s:4:"guid";s:25:"http://reactvn.net/?p=611";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}i:6;O:8:"stdClass":23:{s:2:"ID";s:3:"615";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2016-08-12 14:40:02";s:13:"post_date_gmt";s:19:"2016-08-12 07:40:02";s:12:"post_content";s:3200:"I have two main suggestions here:

<b>Study and Learn From Other People's Code</b>

First, in all my years of software development (30+ years), the single most important learning tool to me in all the languages I've learned has been to study and learn from other people's code.

Ideally, you want to be exposed to well written pieces of code that illustrate good design patterns and tools and techniques that you have not yet seen before.  But, you can actually learn from pretty much any code, even poorly written code (where you're more likely to learn things NOT to do).

In the Javascript world, pick up any third party library that seems useful and interesting to you such as jQuery, Angular, Underscore, Backbone, Modernizr, Async, etc...  Write some code using it (the non-minimized version).  Then, step through some of it's major functions in the debugger and see how to code works and is written.  Within seconds, you will likely see design patterns and techniques you aren't normally accustomed to. Understand those.   Ask yourself why they are doing it that way and what advantages is it giving them.

Now, build an extension to that module.  Understand how the extension mechanism works and is architected.

Load a copy of the library into your code editor and just page down through it.  Look for new top level patterns that you aren't accustomed to. When you see one, stop and study it and understand what it's doing and why.

<b>Read and Answer Javascript Questions on Forums</b>

Then, second subscribe to the Javascript tag on StackOverflow and browse through questions and answers with that tag at least once a day.  There's a huge amount of Q&amp;A there.  It's noisy (there's a lot of not very useful stuff), but there are gems there too and there are very smart people providing answers.  And, bad answers will usually get quickly downvoted or removed so there's a useful filter on the information too.

You should be able to page through the titles and find several very useful answers every day that teach you things you did not know.  If you're really committed to learning, you can even start trying to answer questions.  This will cause you to have to try to solve someone else's problem and solve it in a way that community thinks is good code.  And, then you'll get feedback on how you did.  This is more time consuming, but if you put the effort in, it's very productive.  I find it better than reading books because every question is a real problem that someone else has that you're actually trying to solve and you get some feedback on how you did.

<p style="text-align: right;"><span class="feed_item_answer_user"><span id="zFlFAM"><a id="__w2_hf8O2zY_link" class="user" href="https://www.quora.com/profile/John-Friend" target="_blank">John Friend</a><span id="__w2_ObHVKiu_bio" class="IdentitySig ActorNameSig IdentityNameSig">, <span id="__w2_ObHVKiu_link"><span id="__w2_ObHVKiu_sig" class="IdentitySig ActorNameSig IdentityNameSig"><span id="__w2_UkILZvj_text_snip" class="expanded_q_text"><span id="__w2_UkILZvj_text_snip_content"><span class="rendered_qtext">CTO, multiple startup guy</span></span></span></span></span></span></span></span></p>";s:10:"post_title";s:37:"How do I become better at JavaScript?";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:36:"how-do-i-become-better-at-javascript";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2016-08-12 14:40:02";s:17:"post_modified_gmt";s:19:"2016-08-12 07:40:02";s:21:"post_content_filtered";s:3218:"I have two main suggestions here:

<b>Study and Learn From Other People's Code</b>

First, in all my years of software development (30+ years), the single most important learning tool to me in all the languages I've learned has been to study and learn from other people's code.

Ideally, you want to be exposed to well written pieces of code that illustrate good design patterns and tools and techniques that you have not yet seen before.  But, you can actually learn from pretty much any code, even poorly written code (where you're more likely to learn things NOT to do).

In the Javascript world, pick up any third party library that seems useful and interesting to you such as jQuery, Angular, Underscore, Backbone, Modernizr, Async, etc...  Write some code using it (the non-minimized version).  Then, step through some of it's major functions in the debugger and see how to code works and is written.  Within seconds, you will likely see design patterns and techniques you aren't normally accustomed to. Understand those.   Ask yourself why they are doing it that way and what advantages is it giving them.

Now, build an extension to that module.  Understand how the extension mechanism works and is architected.

Load a copy of the library into your code editor and just page down through it.  Look for new top level patterns that you aren't accustomed to. When you see one, stop and study it and understand what it's doing and why.

<b>Read and Answer Javascript Questions on Forums</b>

Then, second subscribe to the Javascript tag on StackOverflow and browse through questions and answers with that tag at least once a day.  There's a huge amount of Q&amp;A there.  It's noisy (there's a lot of not very useful stuff), but there are gems there too and there are very smart people providing answers.  And, bad answers will usually get quickly downvoted or removed so there's a useful filter on the information too.

You should be able to page through the titles and find several very useful answers every day that teach you things you did not know.  If you're really committed to learning, you can even start trying to answer questions.  This will cause you to have to try to solve someone else's problem and solve it in a way that community thinks is good code.  And, then you'll get feedback on how you did.  This is more time consuming, but if you put the effort in, it's very productive.  I find it better than reading books because every question is a real problem that someone else has that you're actually trying to solve and you get some feedback on how you did.
<p style="text-align: right;"><span class="feed_item_answer_user"><span id="zFlFAM"><a id="__w2_hf8O2zY_link" class="user" href="https://www.quora.com/profile/John-Friend" target="_blank">John Friend</a><span id="__w2_ObHVKiu_bio" class="IdentitySig ActorNameSig IdentityNameSig">, <span id="__w2_ObHVKiu_link"><span id="__w2_ObHVKiu_sig" class="IdentitySig ActorNameSig IdentityNameSig"><span id="__w2_UkILZvj_text_snip" class="expanded_q_text"><span id="__w2_UkILZvj_text_snip_content"><span class="rendered_qtext">CTO, multiple startup guy</span></span></span></span></span></span></span></span></p>";s:11:"post_parent";s:1:"0";s:4:"guid";s:25:"http://reactvn.net/?p=615";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}i:7;O:8:"stdClass":23:{s:2:"ID";s:3:"618";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2016-08-15 10:07:09";s:13:"post_date_gmt";s:19:"2016-08-15 03:07:09";s:12:"post_content";s:37797:"Python <a href="https://twistedmatrix.com/trac/">Twisted</a> will <a href="http://twistedmatrix.com/pipermail/twisted-python/2016-July/030535.html">support HTTP 2 in its web server</a>. HTTP2 is not available by default, to get it you need to install <a href="https://github.com/python-hyper/hyper-h2">hyper-h2</a> (just run<code>pip install twisted[h2]</code>). This is really big and exciting news for whole Python ecosystem so it’s worth seeing how it works and how difficult or easy it is to set up.

In this post I’m going to build some simple Twisted website serving content over HTTP 2 and then create a client connecting to this sample site. Will there be any big difference in performance between HTTP 2 and HTTP 1.1? Will my demo site work quicker in HTTP2?

<h2 id="hello-http2">Hello HTTP2</h2>

Let’s start with saying “Hello world!” in HTTP 2 from Python Twisted.

<a href="https://twistedmatrix.com/documents/current/web/howto/using-twistedweb.html">Twisted web server</a> already supports Python 3 so you can use 3 no problem. For this blog post I’m going to use Python 3.4.3. I’m assuming you have Twisted 16.3.0 with all HTTP2 dependencies installed. There is some minor bug in parsing optional dependencies in Python 3, so if you’re using 3 you may need to install “h2” and “priority” packages from pip manually instead of running <code>pip install twisted[h2]</code>.

Our website will serve content over HTTPS. While HTTP2 protocol itself does not require TLS, most client implementations (especially mainstream browsers) do require HTTPS. This means we need to start building our website with getting self signed certificates for local development. To generate self signed certificate you need to run following command:

<figure class="highlight">

<pre><code class="language-bash" data-lang="bash"><span class="c"># generate private key</span>
<span class="gp">$ </span>openssl genrsa &gt; privkey.pem
<span class="c"># generate certificate that will be stored in cert.pem file</span>
<span class="gp">$ </span>openssl req -new -x509 -key privkey.pem -out cert.pem -days 365 -nodes</code></pre>

</figure>After running above command you’ll need to fill out some details about you. You can ignore most of it or set some fake values, but keep in mind that some clients will refuse to connect if common name is not set to host name. Remember to put “localhost” if openssl asks you about “common name”.

Now that we have our ssl certificates let’s build simple “hello world” Twisted resource serving HTTP2 over HTTPS.

Our resource will be really simplest possible and it will look like this:

<figure class="highlight">

<pre><code class="language-python" data-lang="python"><span class="k">class</span> <span class="nc">Index</span><span class="p">(</span><span class="n">Resource</span><span class="p">):</span>
    <span class="n">isLeaf</span> <span class="o">=</span> <span class="bp">True</span>

    <span class="k">def</span> <span class="nf">render_GET</span><span class="p">(</span><span class="bp">self</span><span class="p">,</span> <span class="n">request</span><span class="p">):</span>
        <span class="k">return</span> <span class="n">b</span><span class="s">"hello world (in HTTP2)"</span></code></pre>

</figure>Above code creates simple resource that will handle all request to root of website.

We now need to tell Twisted to listen on some specific port and serve our resource there using TLS. To actually launch our site on connection speaking SSL we’ll use <a href="https://twistedmatrix.com/documents/current/core/howto/endpoints.html">Twisted endpoints</a>. Endpoints are the recommended approach to do SSL in Twisted. In the past you could use Twisted DefaultSSLContextFactory, but this API is going to be deprecated in future releases. Factory misses lots of SSL features, is insecure and it won’t work properly with HTTP 2.

Here’s how you properly create instance of https website in Twisted:

<figure class="highlight">

<pre><code class="language-python" data-lang="python"><span class="c"># create instance of our web resource Index is instance of twisted.web.Resource</span>
<span class="n">site</span> <span class="o">=</span> <span class="n">server</span><span class="o">.</span><span class="n">Site</span><span class="p">(</span><span class="n">Index</span><span class="p">())</span>

<span class="c"># specify port and certificate</span>
<span class="n">endpoint_spec</span> <span class="o">=</span> <span class="s">"ssl:port=8080:privateKey=privkey.pem:certKey=cert.pem"</span>

<span class="c"># create listening endpoint</span>
<span class="n">server</span> <span class="o">=</span> <span class="n">endpoints</span><span class="o">.</span><span class="n">serverFromString</span><span class="p">(</span><span class="n">reactor</span><span class="p">,</span> <span class="n">endpoint_spec</span><span class="p">)</span>

<span class="c"># start listening serving site in specified way</span>
<span class="n">server</span><span class="o">.</span><span class="n">listen</span><span class="p">(</span><span class="n">site</span><span class="p">)</span></code></pre>

</figure>Full hello world example will look like this:

<figure class="highlight">

<pre><code class="language-python" data-lang="python"><span class="kn">import</span> <span class="nn">sys</span>

<span class="kn">from</span> <span class="nn">twisted.web</span> <span class="kn">import</span> <span class="n">server</span>
<span class="kn">from</span> <span class="nn">twisted.web.resource</span> <span class="kn">import</span> <span class="n">Resource</span>
<span class="kn">from</span> <span class="nn">twisted.internet</span> <span class="kn">import</span> <span class="n">reactor</span>
<span class="kn">from</span> <span class="nn">twisted.python</span> <span class="kn">import</span> <span class="n">log</span>

<span class="kn">from</span> <span class="nn">twisted.internet</span> <span class="kn">import</span> <span class="n">endpoints</span>

<span class="k">class</span> <span class="nc">Index</span><span class="p">(</span><span class="n">Resource</span><span class="p">):</span>
    <span class="n">isLeaf</span> <span class="o">=</span> <span class="bp">True</span>

    <span class="k">def</span> <span class="nf">render_GET</span><span class="p">(</span><span class="bp">self</span><span class="p">,</span> <span class="n">request</span><span class="p">):</span>
        <span class="k">return</span> <span class="n">b</span><span class="s">"hello world (in HTTP2)"</span>


<span class="k">if</span> <span class="n">__name__</span> <span class="o">==</span> <span class="s">"__main__"</span><span class="p">:</span>
    <span class="n">log</span><span class="o">.</span><span class="n">startLogging</span><span class="p">(</span><span class="n">sys</span><span class="o">.</span><span class="n">stdout</span><span class="p">)</span>
    <span class="n">site</span> <span class="o">=</span> <span class="n">server</span><span class="o">.</span><span class="n">Site</span><span class="p">(</span><span class="n">Index</span><span class="p">())</span>
    <span class="n">endpoint_spec</span> <span class="o">=</span> <span class="s">"ssl:port=8080:privateKey=privkey.pem:certKey=cert.pem"</span>
    <span class="n">server</span> <span class="o">=</span> <span class="n">endpoints</span><span class="o">.</span><span class="n">serverFromString</span><span class="p">(</span><span class="n">reactor</span><span class="p">,</span> <span class="n">endpoint_spec</span><span class="p">)</span>
    <span class="n">server</span><span class="o">.</span><span class="n">listen</span><span class="p">(</span><span class="n">site</span><span class="p">)</span>
    <span class="n">reactor</span><span class="o">.</span><span class="n">run</span><span class="p">()</span></code></pre>

</figure>So now we have Twisted server that has some alleged HTTP 2 support, but how do we actually test it? Obviously we need some HTTP2 client. One such client is curl. Unfortunately by default curl does not come with HTTP2 support. To be able to use HTTP2 you need to install optional dependencies and compile from source passing flag telling curl2 to compile with HTTP2 support. This is <a href="https://serversforhackers.com/video/curl-with-http2-support">nicely described here</a>, or <a href="https://blog.cloudflare.com/tools-for-debugging-testing-and-using-http-2/">also here</a>.

After installing curl you can test your website like this

<figure class="highlight">

<pre><code class="language-python" data-lang="python"><span class="c"># remember about passing certificate to curl (--cacert option)</span>
<span class="o">&gt;</span> <span class="n">curl2</span> <span class="o">--</span><span class="n">http2</span> <span class="n">https</span><span class="p">:</span><span class="o">//</span><span class="n">localhost</span><span class="p">:</span><span class="mi">8080</span> <span class="o">-</span><span class="n">v</span> <span class="o">--</span><span class="n">cacert</span> <span class="n">cert</span><span class="o">.</span><span class="n">pem</span>
<span class="o">...</span>
<span class="n">Using</span> <span class="n">HTTP2</span><span class="p">,</span> <span class="n">server</span> <span class="n">supports</span> <span class="n">multi</span><span class="o">-</span><span class="n">use</span>
<span class="o">*</span> <span class="n">Connection</span> <span class="n">state</span> <span class="n">changed</span> <span class="p">(</span><span class="n">HTTP</span><span class="o">/</span><span class="mi">2</span> <span class="n">confirmed</span><span class="p">)</span>
<span class="o">*</span> <span class="n">TCP_NODELAY</span> <span class="nb">set</span>
<span class="o">*</span> <span class="n">Copying</span> <span class="n">HTTP</span><span class="o">/</span><span class="mi">2</span> <span class="n">data</span> <span class="ow">in</span> <span class="n">stream</span> <span class="nb">buffer</span> <span class="n">to</span> <span class="n">connection</span> <span class="nb">buffer</span> <span class="n">after</span> <span class="n">upgrade</span><span class="p">:</span> <span class="nb">len</span><span class="o">=</span><span class="mi">0</span>
<span class="o">*</span> <span class="n">Using</span> <span class="n">Stream</span> <span class="n">ID</span><span class="p">:</span> <span class="mi">1</span> <span class="p">(</span><span class="n">easy</span> <span class="n">handle</span> <span class="mh">0x16b2bc0</span><span class="p">)</span>
<span class="o">&gt;</span> <span class="n">GET</span> <span class="o">/</span> <span class="n">HTTP</span><span class="o">/</span><span class="mf">1.1</span>
<span class="o">&gt;</span> <span class="n">Host</span><span class="p">:</span> <span class="n">localhost</span><span class="p">:</span><span class="mi">8080</span>
<span class="o">&gt;</span> <span class="n">User</span><span class="o">-</span><span class="n">Agent</span><span class="p">:</span> <span class="n">curl</span><span class="o">/</span><span class="mf">7.49</span><span class="o">.</span><span class="mi">1</span>
<span class="o">&gt;</span> <span class="n">Accept</span><span class="p">:</span> <span class="o">*/*</span></code></pre>

</figure>You can see curl reports that it uses HTTP2 on connection level but then actual request part is HTTP 1.1. This is expected. HTTP2 does not change HTTP semantics, all HTTP verbs, headers etc is valid in HTTP2. Majority of HTTP2 happens on TCP connection level.

In your server logs you should see following messages:

<figure class="highlight">

<pre><code class="language-python" data-lang="python"><span class="o">&gt;</span> <span class="n">python</span> <span class="n">hello</span><span class="o">.</span><span class="n">py</span> 
<span class="mi">2016</span><span class="o">-</span><span class="mo">07</span><span class="o">-</span><span class="mi">27</span> <span class="mi">13</span><span class="p">:</span><span class="mi">20</span><span class="p">:</span><span class="mi">16</span><span class="o">+</span><span class="mo">0200</span> <span class="p">[</span><span class="o">-</span><span class="p">]</span> <span class="n">Log</span> <span class="n">opened</span><span class="o">.</span>
<span class="mi">2016</span><span class="o">-</span><span class="mo">07</span><span class="o">-</span><span class="mi">27</span> <span class="mi">13</span><span class="p">:</span><span class="mi">20</span><span class="p">:</span><span class="mi">16</span><span class="o">+</span><span class="mo">0200</span> <span class="p">[</span><span class="o">-</span><span class="p">]</span> <span class="n">Site</span> <span class="p">(</span><span class="n">TLS</span><span class="p">)</span> <span class="n">starting</span> <span class="n">on</span> <span class="mi">8080</span>
<span class="mi">2016</span><span class="o">-</span><span class="mo">07</span><span class="o">-</span><span class="mi">27</span> <span class="mi">13</span><span class="p">:</span><span class="mi">20</span><span class="p">:</span><span class="mi">16</span><span class="o">+</span><span class="mo">0200</span> <span class="p">[</span><span class="o">-</span><span class="p">]</span> <span class="n">Starting</span> <span class="n">factory</span> <span class="o">&lt;</span><span class="n">twisted</span><span class="o">.</span><span class="n">web</span><span class="o">.</span><span class="n">server</span><span class="o">.</span><span class="n">Site</span> <span class="nb">object</span> <span class="n">at</span> <span class="mh">0x7f263f172e80</span><span class="o">&gt;</span>
<span class="mi">2016</span><span class="o">-</span><span class="mo">07</span><span class="o">-</span><span class="mi">27</span> <span class="mi">13</span><span class="p">:</span><span class="mi">20</span><span class="p">:</span><span class="mi">18</span><span class="o">+</span><span class="mo">0200</span> <span class="p">[</span><span class="o">-</span><span class="p">]</span> <span class="s">"-"</span> <span class="o">-</span> <span class="o">-</span> <span class="p">[</span><span class="mi">27</span><span class="o">/</span><span class="n">Jul</span><span class="o">/</span><span class="mi">2016</span><span class="p">:</span><span class="mi">11</span><span class="p">:</span><span class="mi">20</span><span class="p">:</span><span class="mi">18</span> <span class="o">+</span><span class="mo">0000</span><span class="p">]</span> <span class="s">"GET / HTTP/2"</span> <span class="mi">200</span> <span class="mi">22</span> <span class="s">"-"</span> <span class="s">"curl/7.49.1"</span></code></pre>

</figure>This line <code>"-" - - [27/Jul/2016:11:20:18 +0000] "GET / HTTP/2" 200 22 "-" "curl/7.49.1"</code> tells you that server used HTTP 2 when responding to curl request.

<h2 id="hello-world-in-chrome">Hello world in Chrome</h2>

Why did I use curl and not just plain browser such as Chrome? The problem is that Chrome is super restrictive in HTTP 2 support. Chrome requires all connections to use ALPN protocol negotiation. This is<a href="https://www.nginx.com/blog/supporting-http2-google-chrome-users/">discussed in detail here</a> and <a href="https://ma.ttias.be/day-google-chrome-disables-http2-nearly-everyone-may-31st-2016/">here</a>. To support ALPN your system has to have OpenSSL version above 1.0.2. At the moment of writing vast majority of Linux systems dont have OpenSSL 1.0.2 installed. Only Ubuntu 16.04 comes with OpenSSL 1.0.2. If you’re on Linux Upgrading your OpenSSL system wide is not a trivial task. I’m not sure about Mac OS or Widows or other OS-es. I recommend you check your openssl version yourself, if it’s above 1.0.2 you’re good to go testing in Chrome. Otherwise I created simple <a href="https://github.com/pawelmhm/sf-books-http2/blob/master/Dockerfile">Dockerfile here</a> using Ubuntu 16.04 and installing all dependencies, there’s also associated<a href="https://github.com/pawelmhm/sf-books-http2/blob/master/Makefile">makefile here</a> that tells you how to build and run docker image.

Once you have all dependencies, you also need to make Chrome accept your fake self signed certificate. Steps how to accomplish this are <a href="http://stackoverflow.com/a/15076602/1757620">described here</a>

As you see making HTTP2 work in Chrome is not a trivial task. Once you’re ready you can test HTTP2 support by opening dev tools. Enabling ‘protocol’ column will allow you to see version of protocol used in connection, e.g. your dev tools should show something like this:

<a href="https://pawelmhm.github.io/assets/h2_screen.png"><img src="https://pawelmhm.github.io/assets/h2_screen.png" /></a>

<h2 id="benchmark-http2-vs-http11">Benchmark HTTP2 vs HTTP1.1</h2>

Now that we know how to serve working (and secure) HTTP2 website with Twisted we can move to some more interesting things and compare differences between HTTP1.1 and HTTP2. Does it really matter if site is HTTP2 or HTTP1.1? Is there any real need to bother about HTTP2?

To try out things I’m going to build super simple online book store HTTP API. My book store will have 3000 science fiction books in store including classics by Ray Bradbury and Frank Herbert. I extracted data from goodreads.com with some trivial Scrapy project. You can <a href="https://raw.githubusercontent.com/pawelmhm/sf-books-http2/master/books.json">download data from here</a>. My bookstore will have initial page that lists all book ids in JSON. Each book will then have it’s own page where you can see some page details. Client will randomly first request index list and it will then visit each specific page to see what’s there. One client will parse HTTP1.1, other one will parse HTTP2. Which one will be quicker?

My API will look like this:

<figure class="highlight">

<pre><code class="language-python" data-lang="python"><span class="c"># server.py</span>
<span class="kn">import</span> <span class="nn">json</span>
<span class="kn">import</span> <span class="nn">sys</span>

<span class="kn">from</span> <span class="nn">twisted.web</span> <span class="kn">import</span> <span class="n">server</span>
<span class="kn">from</span> <span class="nn">twisted.web.resource</span> <span class="kn">import</span> <span class="n">Resource</span>
<span class="kn">from</span> <span class="nn">twisted.internet</span> <span class="kn">import</span> <span class="n">reactor</span>
<span class="kn">from</span> <span class="nn">twisted.python</span> <span class="kn">import</span> <span class="n">log</span>

<span class="kn">from</span> <span class="nn">twisted.internet</span> <span class="kn">import</span> <span class="n">endpoints</span>


<span class="k">def</span> <span class="nf">load_stock</span><span class="p">():</span>
    <span class="c"># load data from JSON</span>
    <span class="k">with</span> <span class="nb">open</span><span class="p">(</span><span class="s">"books.json"</span><span class="p">)</span> <span class="k">as</span> <span class="n">stock_file</span><span class="p">:</span>
        <span class="k">return</span> <span class="n">json</span><span class="o">.</span><span class="n">load</span><span class="p">(</span><span class="n">stock_file</span><span class="p">)</span>

<span class="n">BOOKS</span> <span class="o">=</span> <span class="n">load_stock</span><span class="p">()</span>


<span class="k">class</span> <span class="nc">Index</span><span class="p">(</span><span class="n">Resource</span><span class="p">):</span>
    <span class="s">"""Serve all book ids.
    """</span>
    <span class="k">def</span> <span class="nf">render_GET</span><span class="p">(</span><span class="bp">self</span><span class="p">,</span> <span class="n">request</span><span class="p">):</span>
        <span class="k">return</span> <span class="n">json</span><span class="o">.</span><span class="n">dumps</span><span class="p">(</span><span class="nb">list</span><span class="p">(</span><span class="n">BOOKS</span><span class="o">.</span><span class="n">keys</span><span class="p">()))</span><span class="o">.</span><span class="n">encode</span><span class="p">(</span><span class="s">"utf8"</span><span class="p">)</span>


<span class="k">class</span> <span class="nc">Book</span><span class="p">(</span><span class="n">Resource</span><span class="p">):</span>
    <span class="s">"""Return detailed data about each book.
    """</span>
    <span class="n">isLeaf</span> <span class="o">=</span> <span class="bp">True</span>

    <span class="k">def</span> <span class="nf">render_GET</span><span class="p">(</span><span class="bp">self</span><span class="p">,</span> <span class="n">request</span><span class="p">):</span>
        <span class="n">book_id</span> <span class="o">=</span> <span class="n">request</span><span class="o">.</span><span class="n">args</span><span class="o">.</span><span class="n">get</span><span class="p">(</span><span class="n">b</span><span class="s">"id"</span><span class="p">)</span>
        <span class="n">book</span> <span class="o">=</span> <span class="n">BOOKS</span><span class="o">.</span><span class="n">get</span><span class="p">(</span><span class="n">book_id</span><span class="p">[</span><span class="mi">0</span><span class="p">]</span><span class="o">.</span><span class="n">decode</span><span class="p">(</span><span class="s">"utf8"</span><span class="p">))</span>
        <span class="k">if</span> <span class="ow">not</span> <span class="n">book</span><span class="p">:</span>
            <span class="n">request</span><span class="o">.</span><span class="n">setResponseCode</span><span class="p">(</span><span class="mi">404</span><span class="p">)</span>
            <span class="k">return</span> <span class="n">b</span><span class="s">""</span>
        <span class="k">return</span> <span class="n">json</span><span class="o">.</span><span class="n">dumps</span><span class="p">(</span><span class="n">book</span><span class="p">)</span><span class="o">.</span><span class="n">encode</span><span class="p">(</span><span class="s">"utf8"</span><span class="p">)</span>


<span class="k">if</span> <span class="n">__name__</span> <span class="o">==</span> <span class="s">"__main__"</span><span class="p">:</span>
    <span class="n">log</span><span class="o">.</span><span class="n">startLogging</span><span class="p">(</span><span class="n">sys</span><span class="o">.</span><span class="n">stdout</span><span class="p">)</span>
    <span class="n">root</span> <span class="o">=</span> <span class="n">Resource</span><span class="p">()</span>
    <span class="n">root</span><span class="o">.</span><span class="n">putChild</span><span class="p">(</span><span class="n">b</span><span class="s">""</span><span class="p">,</span> <span class="n">Index</span><span class="p">())</span>
    <span class="n">root</span><span class="o">.</span><span class="n">putChild</span><span class="p">(</span><span class="n">b</span><span class="s">"book"</span><span class="p">,</span> <span class="n">Book</span><span class="p">())</span>
    <span class="n">site</span> <span class="o">=</span> <span class="n">server</span><span class="o">.</span><span class="n">Site</span><span class="p">(</span><span class="n">root</span><span class="p">)</span>
    <span class="n">endpoint_spec</span> <span class="o">=</span> <span class="s">"ssl:port=8080:privateKey=privkey.pem:certKey=cert.pem"</span>
    <span class="n">server</span> <span class="o">=</span> <span class="n">endpoints</span><span class="o">.</span><span class="n">serverFromString</span><span class="p">(</span><span class="n">reactor</span><span class="p">,</span> <span class="n">endpoint_spec</span><span class="p">)</span>
    <span class="n">server</span><span class="o">.</span><span class="n">listen</span><span class="p">(</span><span class="n">site</span><span class="p">)</span>
    <span class="n">reactor</span><span class="o">.</span><span class="n">run</span><span class="p">()</span></code></pre>

</figure>If you’d like to launch this server with me you can find <a href="https://github.com/pawelmhm/sf-books-http2">all materials here</a>

Now let’s see how HTTP1.1 client will perform when trying to crawl our SF bookstore. The client is going to be plain synchronous script using python-requests. It will first visit initial page with all book ids. After fetching all book ids it will request each book details page and read response. HTTP1.1 client will reuse one TCP connection. It will send ‘connection: keep-alive’ header and all requests will be send one after another within one TCP connection.

<figure class="highlight">

<pre><code class="language-python" data-lang="python"><span class="kn">import</span> <span class="nn">json</span>
<span class="kn">import</span> <span class="nn">requests</span>

<span class="n">s</span> <span class="o">=</span> <span class="n">requests</span><span class="o">.</span><span class="n">Session</span><span class="p">()</span>
<span class="n">url</span> <span class="o">=</span> <span class="s">'https://localhost:8080'</span>
<span class="n">resp</span> <span class="o">=</span> <span class="n">s</span><span class="o">.</span><span class="n">get</span><span class="p">(</span><span class="n">url</span><span class="p">,</span> <span class="n">verify</span><span class="o">=</span><span class="s">"cert.pem"</span><span class="p">)</span>
<span class="n">index_data</span> <span class="o">=</span> <span class="n">json</span><span class="o">.</span><span class="n">loads</span><span class="p">(</span><span class="n">resp</span><span class="o">.</span><span class="n">text</span><span class="p">)</span>

<span class="n">responses</span> <span class="o">=</span> <span class="p">[]</span>

<span class="k">for</span> <span class="n">_id</span> <span class="ow">in</span> <span class="n">index_data</span><span class="p">:</span>
    <span class="n">book_details_path</span> <span class="o">=</span> <span class="s">"/book?id={}"</span><span class="o">.</span><span class="n">format</span><span class="p">(</span><span class="n">_id</span><span class="p">)</span>
    <span class="n">response</span> <span class="o">=</span> <span class="n">s</span><span class="o">.</span><span class="n">get</span><span class="p">(</span><span class="n">url</span> <span class="o">+</span> <span class="n">book_details_path</span><span class="p">,</span> <span class="n">verify</span><span class="o">=</span><span class="s">"cert.pem"</span><span class="p">)</span>
    <span class="n">body</span> <span class="o">=</span> <span class="n">json</span><span class="o">.</span><span class="n">loads</span><span class="p">(</span><span class="n">response</span><span class="o">.</span><span class="n">text</span><span class="p">)</span>
    <span class="n">responses</span><span class="o">.</span><span class="n">append</span><span class="p">(</span><span class="n">body</span><span class="p">)</span>

<span class="k">assert</span> <span class="nb">len</span><span class="p">(</span><span class="n">responses</span><span class="p">)</span> <span class="o">==</span> <span class="mi">3000</span></code></pre>

</figure>Running above client on my test server produces following metrics:

<figure class="highlight">

<pre><code class="language-python" data-lang="python"><span class="n">User</span> <span class="n">time</span> <span class="p">(</span><span class="n">seconds</span><span class="p">):</span> <span class="mf">4.09</span>
<span class="n">System</span> <span class="n">time</span> <span class="p">(</span><span class="n">seconds</span><span class="p">):</span> <span class="mf">0.15</span>
<span class="n">Percent</span> <span class="n">of</span> <span class="n">CPU</span> <span class="n">this</span> <span class="n">job</span> <span class="n">got</span><span class="p">:</span> <span class="mi">72</span><span class="o">%</span>
<span class="n">Elapsed</span> <span class="p">(</span><span class="n">wall</span> <span class="n">clock</span><span class="p">)</span> <span class="n">time</span> <span class="p">(</span><span class="n">h</span><span class="p">:</span><span class="n">mm</span><span class="p">:</span><span class="n">ss</span> <span class="ow">or</span> <span class="n">m</span><span class="p">:</span><span class="n">ss</span><span class="p">):</span> <span class="mi">0</span><span class="p">:</span><span class="mf">05.84</span></code></pre>

</figure>This means that client needed around 5 seconds to process our sf website.

Now let’s try HTTP2 client. In essence it will do same thing as HTTP1.1 client, it will connect to initial index page, fetch all books ids and request one book after another. The only difference is that the client will use <a href="https://http2.github.io/faq/#why-is-http2-multiplexed">HTTP2 multiplexing</a>. This means that instead of sending requests one after another and waiting for responses we’ll send multiple requests at once and then we’ll fetch responses. HTTP 1.1 allows you to reuse TCP connection but the process is:

<figure class="highlight">

<pre><code class="language-python" data-lang="python"><span class="o">====</span> <span class="n">start</span> <span class="n">connection</span> <span class="o">====</span> 
<span class="n">send</span> <span class="n">request</span> <span class="mi">1</span> <span class="o">--&gt;</span> <span class="n">wait</span> <span class="k">for</span> <span class="n">response</span> <span class="o">--&gt;</span> <span class="n">receive</span> <span class="n">response</span> <span class="mi">1</span> <span class="o">--&gt;</span> <span class="n">send</span> <span class="n">request</span> <span class="mi">2</span> <span class="o">...</span>
<span class="o">====</span> <span class="n">end</span> <span class="n">connection</span> <span class="o">====</span></code></pre>

</figure>from what I understand in HTTP2 the process is more like

<figure class="highlight">

<pre><code class="language-python" data-lang="python"><span class="o">====</span> <span class="n">start</span> <span class="n">connection</span> <span class="o">====</span> 
<span class="n">send</span> <span class="n">request</span> <span class="mi">1</span><span class="p">,</span> <span class="n">send</span> <span class="n">request</span> <span class="mi">2</span><span class="p">,</span> <span class="n">send</span> <span class="n">request</span> <span class="mi">3</span> <span class="o">--&gt;</span> <span class="n">wait</span> <span class="k">for</span> <span class="n">responses</span> <span class="o">--&gt;</span> <span class="n">receive</span> <span class="n">response</span> <span class="mi">1</span><span class="p">,</span> <span class="mi">2</span><span class="p">,</span> <span class="mi">3</span>
<span class="o">====</span> <span class="n">end</span> <span class="n">connection</span> <span class="o">====</span></code></pre>

</figure>In HTTP1.1 if you have one slow response it will block connection. In HTTP2 you can send multiple requests to your server over one connection at the same time and then fetch responses as they arrive from origin.

To use HTTP2 to its full capabilities our client is going to send multiple requests over one connection and then fetch responses. It will split initial list of 3000 books into chunks of 100 urls. For every chunk it will start with sending 100 requests. In next step it will iterate over connection stream ids and fetch responses.

I’m going to use <a href="https://github.com/Lukasa/hyper">python-hyper</a> as underlying client library. Twisted does not yet support HTTP2 client side, but work on supporting it is in progress.

<figure class="highlight">

<pre><code class="language-python" data-lang="python"><span class="kn">import</span> <span class="nn">json</span>
<span class="kn">from</span> <span class="nn">hyper</span> <span class="kn">import</span> <span class="n">HTTPConnection</span>

<span class="n">conn</span> <span class="o">=</span> <span class="n">HTTPConnection</span><span class="p">(</span><span class="s">'localhost:8080'</span><span class="p">,</span> <span class="n">secure</span><span class="o">=</span><span class="bp">True</span><span class="p">)</span>
<span class="n">conn</span><span class="o">.</span><span class="n">request</span><span class="p">(</span><span class="s">'GET'</span><span class="p">,</span> <span class="s">'/'</span><span class="p">)</span>
<span class="n">resp</span> <span class="o">=</span> <span class="n">conn</span><span class="o">.</span><span class="n">get_response</span><span class="p">()</span>

<span class="c"># process initial page with book ids</span>
<span class="n">index_data</span> <span class="o">=</span> <span class="n">json</span><span class="o">.</span><span class="n">loads</span><span class="p">(</span><span class="n">resp</span><span class="o">.</span><span class="n">read</span><span class="p">()</span><span class="o">.</span><span class="n">decode</span><span class="p">(</span><span class="s">"utf8"</span><span class="p">))</span>

<span class="n">responses</span> <span class="o">=</span> <span class="p">[]</span>
<span class="n">chunk_size</span> <span class="o">=</span> <span class="mi">100</span>

<span class="c"># split initial set of urls into chunks of 100 items</span>
<span class="k">for</span> <span class="n">i</span> <span class="ow">in</span> <span class="nb">range</span><span class="p">(</span><span class="mi">0</span><span class="p">,</span> <span class="nb">len</span><span class="p">(</span><span class="n">index_data</span><span class="p">),</span> <span class="n">chunk_size</span><span class="p">):</span>
    <span class="n">request_ids</span> <span class="o">=</span> <span class="p">[]</span>

    <span class="c"># make requests</span>
    <span class="k">for</span> <span class="n">_id</span> <span class="ow">in</span> <span class="n">index_data</span><span class="p">[</span><span class="n">i</span><span class="p">:</span><span class="n">i</span><span class="o">+</span><span class="n">chunk_size</span><span class="p">]:</span>
        <span class="n">book_details_path</span> <span class="o">=</span> <span class="s">"/book?id={}"</span><span class="o">.</span><span class="n">format</span><span class="p">(</span><span class="n">_id</span><span class="p">)</span>
        <span class="n">request_id</span> <span class="o">=</span> <span class="n">conn</span><span class="o">.</span><span class="n">request</span><span class="p">(</span><span class="s">'GET'</span><span class="p">,</span> <span class="n">book_details_path</span><span class="p">)</span>
        <span class="n">request_ids</span><span class="o">.</span><span class="n">append</span><span class="p">(</span><span class="n">request_id</span><span class="p">)</span>

    <span class="c"># get responses</span>
    <span class="k">for</span> <span class="n">req_id</span> <span class="ow">in</span> <span class="n">request_ids</span><span class="p">:</span>
        <span class="n">response</span> <span class="o">=</span> <span class="n">conn</span><span class="o">.</span><span class="n">get_response</span><span class="p">(</span><span class="n">req_id</span><span class="p">)</span>
        <span class="n">body</span> <span class="o">=</span> <span class="n">json</span><span class="o">.</span><span class="n">loads</span><span class="p">(</span><span class="n">response</span><span class="o">.</span><span class="n">read</span><span class="p">()</span><span class="o">.</span><span class="n">decode</span><span class="p">(</span><span class="s">"utf8"</span><span class="p">))</span>
        <span class="n">responses</span><span class="o">.</span><span class="n">append</span><span class="p">(</span><span class="n">body</span><span class="p">)</span>

<span class="k">assert</span> <span class="nb">len</span><span class="p">(</span><span class="n">responses</span><span class="p">)</span> <span class="o">==</span> <span class="mi">3000</span></code></pre>

</figure>What kind of performance can we expect from HTTP2 client?

<figure class="highlight">

<pre><code class="language-python" data-lang="python"><span class="n">User</span> <span class="n">time</span> <span class="p">(</span><span class="n">seconds</span><span class="p">):</span> <span class="mf">1.41</span>
<span class="n">System</span> <span class="n">time</span> <span class="p">(</span><span class="n">seconds</span><span class="p">):</span> <span class="mf">0.04</span>
<span class="n">Percent</span> <span class="n">of</span> <span class="n">CPU</span> <span class="n">this</span> <span class="n">job</span> <span class="n">got</span><span class="p">:</span> <span class="mi">41</span><span class="o">%</span>
<span class="n">Elapsed</span> <span class="p">(</span><span class="n">wall</span> <span class="n">clock</span><span class="p">)</span> <span class="n">time</span> <span class="p">(</span><span class="n">h</span><span class="p">:</span><span class="n">mm</span><span class="p">:</span><span class="n">ss</span> <span class="ow">or</span> <span class="n">m</span><span class="p">:</span><span class="n">ss</span><span class="p">):</span> <span class="mi">0</span><span class="p">:</span><span class="mf">03.53</span></code></pre>

</figure>To sum up HTTP2 client is faster, but it also works slightly differently. If you were to use HTTP2 in same way as HTTP1.1 (just send one request after another within one connection) performance difference would be small or non-existent. It’s also worth noting that I didnt go into details of other HTTP2 improvements (such as headers compression or server push). These other benefits of HTTP2 are certainly equally important as multiplexing of messages over one connection. I’m not sure if you can use server push from Twisted though.

<p style="text-align: right;"><strong>pawelmhm.github.io</strong></p>";s:10:"post_title";s:32:"Building HTTP 2 server in Python";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:32:"building-http-2-server-in-python";s:7:"to_ping";s:0:"";s:6:"pinged";s:84:"
https://ma.ttias.be/day-google-chrome-disables-http2-nearly-everyone-may-31st-2016/";s:13:"post_modified";s:19:"2016-08-15 10:08:49";s:17:"post_modified_gmt";s:19:"2016-08-15 03:08:49";s:21:"post_content_filtered";s:38096:"Python <a href="https://twistedmatrix.com/trac/">Twisted</a> will <a href="http://twistedmatrix.com/pipermail/twisted-python/2016-July/030535.html">support HTTP 2 in its web server</a>. HTTP2 is not available by default, to get it you need to install <a href="https://github.com/python-hyper/hyper-h2">hyper-h2</a> (just run<code class="highlighter-rouge">pip install twisted[h2]</code>). This is really big and exciting news for whole Python ecosystem so it’s worth seeing how it works and how difficult or easy it is to set up.

In this post I’m going to build some simple Twisted website serving content over HTTP 2 and then create a client connecting to this sample site. Will there be any big difference in performance between HTTP 2 and HTTP 1.1? Will my demo site work quicker in HTTP2?
<h2 id="hello-http2">Hello HTTP2</h2>
Let’s start with saying “Hello world!” in HTTP 2 from Python Twisted.

<a href="https://twistedmatrix.com/documents/current/web/howto/using-twistedweb.html">Twisted web server</a> already supports Python 3 so you can use 3 no problem. For this blog post I’m going to use Python 3.4.3. I’m assuming you have Twisted 16.3.0 with all HTTP2 dependencies installed. There is some minor bug in parsing optional dependencies in Python 3, so if you’re using 3 you may need to install “h2” and “priority” packages from pip manually instead of running <code class="highlighter-rouge">pip install twisted[h2]</code>.

Our website will serve content over HTTPS. While HTTP2 protocol itself does not require TLS, most client implementations (especially mainstream browsers) do require HTTPS. This means we need to start building our website with getting self signed certificates for local development. To generate self signed certificate you need to run following command:

<figure class="highlight">
<pre><code class="language-bash" data-lang="bash"><span class="c"># generate private key</span>
<span class="gp">$ </span>openssl genrsa &gt; privkey.pem
<span class="c"># generate certificate that will be stored in cert.pem file</span>
<span class="gp">$ </span>openssl req -new -x509 -key privkey.pem -out cert.pem -days 365 -nodes</code></pre>
</figure>After running above command you’ll need to fill out some details about you. You can ignore most of it or set some fake values, but keep in mind that some clients will refuse to connect if common name is not set to host name. Remember to put “localhost” if openssl asks you about “common name”.

Now that we have our ssl certificates let’s build simple “hello world” Twisted resource serving HTTP2 over HTTPS.

Our resource will be really simplest possible and it will look like this:

<figure class="highlight">
<pre><code class="language-python" data-lang="python"><span class="k">class</span> <span class="nc">Index</span><span class="p">(</span><span class="n">Resource</span><span class="p">):</span>
    <span class="n">isLeaf</span> <span class="o">=</span> <span class="bp">True</span>

    <span class="k">def</span> <span class="nf">render_GET</span><span class="p">(</span><span class="bp">self</span><span class="p">,</span> <span class="n">request</span><span class="p">):</span>
        <span class="k">return</span> <span class="n">b</span><span class="s">"hello world (in HTTP2)"</span></code></pre>
</figure>Above code creates simple resource that will handle all request to root of website.

We now need to tell Twisted to listen on some specific port and serve our resource there using TLS. To actually launch our site on connection speaking SSL we’ll use <a href="https://twistedmatrix.com/documents/current/core/howto/endpoints.html">Twisted endpoints</a>. Endpoints are the recommended approach to do SSL in Twisted. In the past you could use Twisted DefaultSSLContextFactory, but this API is going to be deprecated in future releases. Factory misses lots of SSL features, is insecure and it won’t work properly with HTTP 2.

Here’s how you properly create instance of https website in Twisted:

<figure class="highlight">
<pre><code class="language-python" data-lang="python"><span class="c"># create instance of our web resource Index is instance of twisted.web.Resource</span>
<span class="n">site</span> <span class="o">=</span> <span class="n">server</span><span class="o">.</span><span class="n">Site</span><span class="p">(</span><span class="n">Index</span><span class="p">())</span>

<span class="c"># specify port and certificate</span>
<span class="n">endpoint_spec</span> <span class="o">=</span> <span class="s">"ssl:port=8080:privateKey=privkey.pem:certKey=cert.pem"</span>

<span class="c"># create listening endpoint</span>
<span class="n">server</span> <span class="o">=</span> <span class="n">endpoints</span><span class="o">.</span><span class="n">serverFromString</span><span class="p">(</span><span class="n">reactor</span><span class="p">,</span> <span class="n">endpoint_spec</span><span class="p">)</span>

<span class="c"># start listening serving site in specified way</span>
<span class="n">server</span><span class="o">.</span><span class="n">listen</span><span class="p">(</span><span class="n">site</span><span class="p">)</span></code></pre>
</figure>Full hello world example will look like this:

<figure class="highlight">
<pre><code class="language-python" data-lang="python"><span class="kn">import</span> <span class="nn">sys</span>

<span class="kn">from</span> <span class="nn">twisted.web</span> <span class="kn">import</span> <span class="n">server</span>
<span class="kn">from</span> <span class="nn">twisted.web.resource</span> <span class="kn">import</span> <span class="n">Resource</span>
<span class="kn">from</span> <span class="nn">twisted.internet</span> <span class="kn">import</span> <span class="n">reactor</span>
<span class="kn">from</span> <span class="nn">twisted.python</span> <span class="kn">import</span> <span class="n">log</span>

<span class="kn">from</span> <span class="nn">twisted.internet</span> <span class="kn">import</span> <span class="n">endpoints</span>

<span class="k">class</span> <span class="nc">Index</span><span class="p">(</span><span class="n">Resource</span><span class="p">):</span>
    <span class="n">isLeaf</span> <span class="o">=</span> <span class="bp">True</span>

    <span class="k">def</span> <span class="nf">render_GET</span><span class="p">(</span><span class="bp">self</span><span class="p">,</span> <span class="n">request</span><span class="p">):</span>
        <span class="k">return</span> <span class="n">b</span><span class="s">"hello world (in HTTP2)"</span>


<span class="k">if</span> <span class="n">__name__</span> <span class="o">==</span> <span class="s">"__main__"</span><span class="p">:</span>
    <span class="n">log</span><span class="o">.</span><span class="n">startLogging</span><span class="p">(</span><span class="n">sys</span><span class="o">.</span><span class="n">stdout</span><span class="p">)</span>
    <span class="n">site</span> <span class="o">=</span> <span class="n">server</span><span class="o">.</span><span class="n">Site</span><span class="p">(</span><span class="n">Index</span><span class="p">())</span>
    <span class="n">endpoint_spec</span> <span class="o">=</span> <span class="s">"ssl:port=8080:privateKey=privkey.pem:certKey=cert.pem"</span>
    <span class="n">server</span> <span class="o">=</span> <span class="n">endpoints</span><span class="o">.</span><span class="n">serverFromString</span><span class="p">(</span><span class="n">reactor</span><span class="p">,</span> <span class="n">endpoint_spec</span><span class="p">)</span>
    <span class="n">server</span><span class="o">.</span><span class="n">listen</span><span class="p">(</span><span class="n">site</span><span class="p">)</span>
    <span class="n">reactor</span><span class="o">.</span><span class="n">run</span><span class="p">()</span></code></pre>
</figure>So now we have Twisted server that has some alleged HTTP 2 support, but how do we actually test it? Obviously we need some HTTP2 client. One such client is curl. Unfortunately by default curl does not come with HTTP2 support. To be able to use HTTP2 you need to install optional dependencies and compile from source passing flag telling curl2 to compile with HTTP2 support. This is <a href="https://serversforhackers.com/video/curl-with-http2-support">nicely described here</a>, or <a href="https://blog.cloudflare.com/tools-for-debugging-testing-and-using-http-2/">also here</a>.

After installing curl you can test your website like this

<figure class="highlight">
<pre><code class="language-python" data-lang="python"><span class="c"># remember about passing certificate to curl (--cacert option)</span>
<span class="o">&gt;</span> <span class="n">curl2</span> <span class="o">--</span><span class="n">http2</span> <span class="n">https</span><span class="p">:</span><span class="o">//</span><span class="n">localhost</span><span class="p">:</span><span class="mi">8080</span> <span class="o">-</span><span class="n">v</span> <span class="o">--</span><span class="n">cacert</span> <span class="n">cert</span><span class="o">.</span><span class="n">pem</span>
<span class="o">...</span>
<span class="n">Using</span> <span class="n">HTTP2</span><span class="p">,</span> <span class="n">server</span> <span class="n">supports</span> <span class="n">multi</span><span class="o">-</span><span class="n">use</span>
<span class="o">*</span> <span class="n">Connection</span> <span class="n">state</span> <span class="n">changed</span> <span class="p">(</span><span class="n">HTTP</span><span class="o">/</span><span class="mi">2</span> <span class="n">confirmed</span><span class="p">)</span>
<span class="o">*</span> <span class="n">TCP_NODELAY</span> <span class="nb">set</span>
<span class="o">*</span> <span class="n">Copying</span> <span class="n">HTTP</span><span class="o">/</span><span class="mi">2</span> <span class="n">data</span> <span class="ow">in</span> <span class="n">stream</span> <span class="nb">buffer</span> <span class="n">to</span> <span class="n">connection</span> <span class="nb">buffer</span> <span class="n">after</span> <span class="n">upgrade</span><span class="p">:</span> <span class="nb">len</span><span class="o">=</span><span class="mi">0</span>
<span class="o">*</span> <span class="n">Using</span> <span class="n">Stream</span> <span class="n">ID</span><span class="p">:</span> <span class="mi">1</span> <span class="p">(</span><span class="n">easy</span> <span class="n">handle</span> <span class="mh">0x16b2bc0</span><span class="p">)</span>
<span class="o">&gt;</span> <span class="n">GET</span> <span class="o">/</span> <span class="n">HTTP</span><span class="o">/</span><span class="mf">1.1</span>
<span class="o">&gt;</span> <span class="n">Host</span><span class="p">:</span> <span class="n">localhost</span><span class="p">:</span><span class="mi">8080</span>
<span class="o">&gt;</span> <span class="n">User</span><span class="o">-</span><span class="n">Agent</span><span class="p">:</span> <span class="n">curl</span><span class="o">/</span><span class="mf">7.49</span><span class="o">.</span><span class="mi">1</span>
<span class="o">&gt;</span> <span class="n">Accept</span><span class="p">:</span> <span class="o">*/*</span></code></pre>
</figure>You can see curl reports that it uses HTTP2 on connection level but then actual request part is HTTP 1.1. This is expected. HTTP2 does not change HTTP semantics, all HTTP verbs, headers etc is valid in HTTP2. Majority of HTTP2 happens on TCP connection level.

In your server logs you should see following messages:

<figure class="highlight">
<pre><code class="language-python" data-lang="python"><span class="o">&gt;</span> <span class="n">python</span> <span class="n">hello</span><span class="o">.</span><span class="n">py</span> 
<span class="mi">2016</span><span class="o">-</span><span class="mo">07</span><span class="o">-</span><span class="mi">27</span> <span class="mi">13</span><span class="p">:</span><span class="mi">20</span><span class="p">:</span><span class="mi">16</span><span class="o">+</span><span class="mo">0200</span> <span class="p">[</span><span class="o">-</span><span class="p">]</span> <span class="n">Log</span> <span class="n">opened</span><span class="o">.</span>
<span class="mi">2016</span><span class="o">-</span><span class="mo">07</span><span class="o">-</span><span class="mi">27</span> <span class="mi">13</span><span class="p">:</span><span class="mi">20</span><span class="p">:</span><span class="mi">16</span><span class="o">+</span><span class="mo">0200</span> <span class="p">[</span><span class="o">-</span><span class="p">]</span> <span class="n">Site</span> <span class="p">(</span><span class="n">TLS</span><span class="p">)</span> <span class="n">starting</span> <span class="n">on</span> <span class="mi">8080</span>
<span class="mi">2016</span><span class="o">-</span><span class="mo">07</span><span class="o">-</span><span class="mi">27</span> <span class="mi">13</span><span class="p">:</span><span class="mi">20</span><span class="p">:</span><span class="mi">16</span><span class="o">+</span><span class="mo">0200</span> <span class="p">[</span><span class="o">-</span><span class="p">]</span> <span class="n">Starting</span> <span class="n">factory</span> <span class="o">&lt;</span><span class="n">twisted</span><span class="o">.</span><span class="n">web</span><span class="o">.</span><span class="n">server</span><span class="o">.</span><span class="n">Site</span> <span class="nb">object</span> <span class="n">at</span> <span class="mh">0x7f263f172e80</span><span class="o">&gt;</span>
<span class="mi">2016</span><span class="o">-</span><span class="mo">07</span><span class="o">-</span><span class="mi">27</span> <span class="mi">13</span><span class="p">:</span><span class="mi">20</span><span class="p">:</span><span class="mi">18</span><span class="o">+</span><span class="mo">0200</span> <span class="p">[</span><span class="o">-</span><span class="p">]</span> <span class="s">"-"</span> <span class="o">-</span> <span class="o">-</span> <span class="p">[</span><span class="mi">27</span><span class="o">/</span><span class="n">Jul</span><span class="o">/</span><span class="mi">2016</span><span class="p">:</span><span class="mi">11</span><span class="p">:</span><span class="mi">20</span><span class="p">:</span><span class="mi">18</span> <span class="o">+</span><span class="mo">0000</span><span class="p">]</span> <span class="s">"GET / HTTP/2"</span> <span class="mi">200</span> <span class="mi">22</span> <span class="s">"-"</span> <span class="s">"curl/7.49.1"</span></code></pre>
</figure>This line <code class="highlighter-rouge">"-" - - [27/Jul/2016:11:20:18 +0000] "GET / HTTP/2" 200 22 "-" "curl/7.49.1"</code> tells you that server used HTTP 2 when responding to curl request.
<h2 id="hello-world-in-chrome">Hello world in Chrome</h2>
Why did I use curl and not just plain browser such as Chrome? The problem is that Chrome is super restrictive in HTTP 2 support. Chrome requires all connections to use ALPN protocol negotiation. This is<a href="https://www.nginx.com/blog/supporting-http2-google-chrome-users/">discussed in detail here</a> and <a href="https://ma.ttias.be/day-google-chrome-disables-http2-nearly-everyone-may-31st-2016/">here</a>. To support ALPN your system has to have OpenSSL version above 1.0.2. At the moment of writing vast majority of Linux systems dont have OpenSSL 1.0.2 installed. Only Ubuntu 16.04 comes with OpenSSL 1.0.2. If you’re on Linux Upgrading your OpenSSL system wide is not a trivial task. I’m not sure about Mac OS or Widows or other OS-es. I recommend you check your openssl version yourself, if it’s above 1.0.2 you’re good to go testing in Chrome. Otherwise I created simple <a href="https://github.com/pawelmhm/sf-books-http2/blob/master/Dockerfile">Dockerfile here</a> using Ubuntu 16.04 and installing all dependencies, there’s also associated<a href="https://github.com/pawelmhm/sf-books-http2/blob/master/Makefile">makefile here</a> that tells you how to build and run docker image.

Once you have all dependencies, you also need to make Chrome accept your fake self signed certificate. Steps how to accomplish this are <a href="http://stackoverflow.com/a/15076602/1757620">described here</a>

As you see making HTTP2 work in Chrome is not a trivial task. Once you’re ready you can test HTTP2 support by opening dev tools. Enabling ‘protocol’ column will allow you to see version of protocol used in connection, e.g. your dev tools should show something like this:

<a href="https://pawelmhm.github.io/assets/h2_screen.png"><img src="https://pawelmhm.github.io/assets/h2_screen.png" /></a>
<h2 id="benchmark-http2-vs-http11">Benchmark HTTP2 vs HTTP1.1</h2>
Now that we know how to serve working (and secure) HTTP2 website with Twisted we can move to some more interesting things and compare differences between HTTP1.1 and HTTP2. Does it really matter if site is HTTP2 or HTTP1.1? Is there any real need to bother about HTTP2?

To try out things I’m going to build super simple online book store HTTP API. My book store will have 3000 science fiction books in store including classics by Ray Bradbury and Frank Herbert. I extracted data from goodreads.com with some trivial Scrapy project. You can <a href="https://raw.githubusercontent.com/pawelmhm/sf-books-http2/master/books.json">download data from here</a>. My bookstore will have initial page that lists all book ids in JSON. Each book will then have it’s own page where you can see some page details. Client will randomly first request index list and it will then visit each specific page to see what’s there. One client will parse HTTP1.1, other one will parse HTTP2. Which one will be quicker?

My API will look like this:

<figure class="highlight">
<pre><code class="language-python" data-lang="python"><span class="c"># server.py</span>
<span class="kn">import</span> <span class="nn">json</span>
<span class="kn">import</span> <span class="nn">sys</span>

<span class="kn">from</span> <span class="nn">twisted.web</span> <span class="kn">import</span> <span class="n">server</span>
<span class="kn">from</span> <span class="nn">twisted.web.resource</span> <span class="kn">import</span> <span class="n">Resource</span>
<span class="kn">from</span> <span class="nn">twisted.internet</span> <span class="kn">import</span> <span class="n">reactor</span>
<span class="kn">from</span> <span class="nn">twisted.python</span> <span class="kn">import</span> <span class="n">log</span>

<span class="kn">from</span> <span class="nn">twisted.internet</span> <span class="kn">import</span> <span class="n">endpoints</span>


<span class="k">def</span> <span class="nf">load_stock</span><span class="p">():</span>
    <span class="c"># load data from JSON</span>
    <span class="k">with</span> <span class="nb">open</span><span class="p">(</span><span class="s">"books.json"</span><span class="p">)</span> <span class="k">as</span> <span class="n">stock_file</span><span class="p">:</span>
        <span class="k">return</span> <span class="n">json</span><span class="o">.</span><span class="n">load</span><span class="p">(</span><span class="n">stock_file</span><span class="p">)</span>

<span class="n">BOOKS</span> <span class="o">=</span> <span class="n">load_stock</span><span class="p">()</span>


<span class="k">class</span> <span class="nc">Index</span><span class="p">(</span><span class="n">Resource</span><span class="p">):</span>
    <span class="s">"""Serve all book ids.
    """</span>
    <span class="k">def</span> <span class="nf">render_GET</span><span class="p">(</span><span class="bp">self</span><span class="p">,</span> <span class="n">request</span><span class="p">):</span>
        <span class="k">return</span> <span class="n">json</span><span class="o">.</span><span class="n">dumps</span><span class="p">(</span><span class="nb">list</span><span class="p">(</span><span class="n">BOOKS</span><span class="o">.</span><span class="n">keys</span><span class="p">()))</span><span class="o">.</span><span class="n">encode</span><span class="p">(</span><span class="s">"utf8"</span><span class="p">)</span>


<span class="k">class</span> <span class="nc">Book</span><span class="p">(</span><span class="n">Resource</span><span class="p">):</span>
    <span class="s">"""Return detailed data about each book.
    """</span>
    <span class="n">isLeaf</span> <span class="o">=</span> <span class="bp">True</span>

    <span class="k">def</span> <span class="nf">render_GET</span><span class="p">(</span><span class="bp">self</span><span class="p">,</span> <span class="n">request</span><span class="p">):</span>
        <span class="n">book_id</span> <span class="o">=</span> <span class="n">request</span><span class="o">.</span><span class="n">args</span><span class="o">.</span><span class="n">get</span><span class="p">(</span><span class="n">b</span><span class="s">"id"</span><span class="p">)</span>
        <span class="n">book</span> <span class="o">=</span> <span class="n">BOOKS</span><span class="o">.</span><span class="n">get</span><span class="p">(</span><span class="n">book_id</span><span class="p">[</span><span class="mi">0</span><span class="p">]</span><span class="o">.</span><span class="n">decode</span><span class="p">(</span><span class="s">"utf8"</span><span class="p">))</span>
        <span class="k">if</span> <span class="ow">not</span> <span class="n">book</span><span class="p">:</span>
            <span class="n">request</span><span class="o">.</span><span class="n">setResponseCode</span><span class="p">(</span><span class="mi">404</span><span class="p">)</span>
            <span class="k">return</span> <span class="n">b</span><span class="s">""</span>
        <span class="k">return</span> <span class="n">json</span><span class="o">.</span><span class="n">dumps</span><span class="p">(</span><span class="n">book</span><span class="p">)</span><span class="o">.</span><span class="n">encode</span><span class="p">(</span><span class="s">"utf8"</span><span class="p">)</span>


<span class="k">if</span> <span class="n">__name__</span> <span class="o">==</span> <span class="s">"__main__"</span><span class="p">:</span>
    <span class="n">log</span><span class="o">.</span><span class="n">startLogging</span><span class="p">(</span><span class="n">sys</span><span class="o">.</span><span class="n">stdout</span><span class="p">)</span>
    <span class="n">root</span> <span class="o">=</span> <span class="n">Resource</span><span class="p">()</span>
    <span class="n">root</span><span class="o">.</span><span class="n">putChild</span><span class="p">(</span><span class="n">b</span><span class="s">""</span><span class="p">,</span> <span class="n">Index</span><span class="p">())</span>
    <span class="n">root</span><span class="o">.</span><span class="n">putChild</span><span class="p">(</span><span class="n">b</span><span class="s">"book"</span><span class="p">,</span> <span class="n">Book</span><span class="p">())</span>
    <span class="n">site</span> <span class="o">=</span> <span class="n">server</span><span class="o">.</span><span class="n">Site</span><span class="p">(</span><span class="n">root</span><span class="p">)</span>
    <span class="n">endpoint_spec</span> <span class="o">=</span> <span class="s">"ssl:port=8080:privateKey=privkey.pem:certKey=cert.pem"</span>
    <span class="n">server</span> <span class="o">=</span> <span class="n">endpoints</span><span class="o">.</span><span class="n">serverFromString</span><span class="p">(</span><span class="n">reactor</span><span class="p">,</span> <span class="n">endpoint_spec</span><span class="p">)</span>
    <span class="n">server</span><span class="o">.</span><span class="n">listen</span><span class="p">(</span><span class="n">site</span><span class="p">)</span>
    <span class="n">reactor</span><span class="o">.</span><span class="n">run</span><span class="p">()</span></code></pre>
</figure>If you’d like to launch this server with me you can find <a href="https://github.com/pawelmhm/sf-books-http2">all materials here</a>

Now let’s see how HTTP1.1 client will perform when trying to crawl our SF bookstore. The client is going to be plain synchronous script using python-requests. It will first visit initial page with all book ids. After fetching all book ids it will request each book details page and read response. HTTP1.1 client will reuse one TCP connection. It will send ‘connection: keep-alive’ header and all requests will be send one after another within one TCP connection.

<figure class="highlight">
<pre><code class="language-python" data-lang="python"><span class="kn">import</span> <span class="nn">json</span>
<span class="kn">import</span> <span class="nn">requests</span>

<span class="n">s</span> <span class="o">=</span> <span class="n">requests</span><span class="o">.</span><span class="n">Session</span><span class="p">()</span>
<span class="n">url</span> <span class="o">=</span> <span class="s">'https://localhost:8080'</span>
<span class="n">resp</span> <span class="o">=</span> <span class="n">s</span><span class="o">.</span><span class="n">get</span><span class="p">(</span><span class="n">url</span><span class="p">,</span> <span class="n">verify</span><span class="o">=</span><span class="s">"cert.pem"</span><span class="p">)</span>
<span class="n">index_data</span> <span class="o">=</span> <span class="n">json</span><span class="o">.</span><span class="n">loads</span><span class="p">(</span><span class="n">resp</span><span class="o">.</span><span class="n">text</span><span class="p">)</span>

<span class="n">responses</span> <span class="o">=</span> <span class="p">[]</span>

<span class="k">for</span> <span class="n">_id</span> <span class="ow">in</span> <span class="n">index_data</span><span class="p">:</span>
    <span class="n">book_details_path</span> <span class="o">=</span> <span class="s">"/book?id={}"</span><span class="o">.</span><span class="n">format</span><span class="p">(</span><span class="n">_id</span><span class="p">)</span>
    <span class="n">response</span> <span class="o">=</span> <span class="n">s</span><span class="o">.</span><span class="n">get</span><span class="p">(</span><span class="n">url</span> <span class="o">+</span> <span class="n">book_details_path</span><span class="p">,</span> <span class="n">verify</span><span class="o">=</span><span class="s">"cert.pem"</span><span class="p">)</span>
    <span class="n">body</span> <span class="o">=</span> <span class="n">json</span><span class="o">.</span><span class="n">loads</span><span class="p">(</span><span class="n">response</span><span class="o">.</span><span class="n">text</span><span class="p">)</span>
    <span class="n">responses</span><span class="o">.</span><span class="n">append</span><span class="p">(</span><span class="n">body</span><span class="p">)</span>

<span class="k">assert</span> <span class="nb">len</span><span class="p">(</span><span class="n">responses</span><span class="p">)</span> <span class="o">==</span> <span class="mi">3000</span></code></pre>
</figure>Running above client on my test server produces following metrics:

<figure class="highlight">
<pre><code class="language-python" data-lang="python"><span class="n">User</span> <span class="n">time</span> <span class="p">(</span><span class="n">seconds</span><span class="p">):</span> <span class="mf">4.09</span>
<span class="n">System</span> <span class="n">time</span> <span class="p">(</span><span class="n">seconds</span><span class="p">):</span> <span class="mf">0.15</span>
<span class="n">Percent</span> <span class="n">of</span> <span class="n">CPU</span> <span class="n">this</span> <span class="n">job</span> <span class="n">got</span><span class="p">:</span> <span class="mi">72</span><span class="o">%</span>
<span class="n">Elapsed</span> <span class="p">(</span><span class="n">wall</span> <span class="n">clock</span><span class="p">)</span> <span class="n">time</span> <span class="p">(</span><span class="n">h</span><span class="p">:</span><span class="n">mm</span><span class="p">:</span><span class="n">ss</span> <span class="ow">or</span> <span class="n">m</span><span class="p">:</span><span class="n">ss</span><span class="p">):</span> <span class="mi">0</span><span class="p">:</span><span class="mf">05.84</span></code></pre>
</figure>This means that client needed around 5 seconds to process our sf website.

Now let’s try HTTP2 client. In essence it will do same thing as HTTP1.1 client, it will connect to initial index page, fetch all books ids and request one book after another. The only difference is that the client will use <a href="https://http2.github.io/faq/#why-is-http2-multiplexed">HTTP2 multiplexing</a>. This means that instead of sending requests one after another and waiting for responses we’ll send multiple requests at once and then we’ll fetch responses. HTTP 1.1 allows you to reuse TCP connection but the process is:

<figure class="highlight">
<pre><code class="language-python" data-lang="python"><span class="o">====</span> <span class="n">start</span> <span class="n">connection</span> <span class="o">====</span> 
<span class="n">send</span> <span class="n">request</span> <span class="mi">1</span> <span class="o">--&gt;</span> <span class="n">wait</span> <span class="k">for</span> <span class="n">response</span> <span class="o">--&gt;</span> <span class="n">receive</span> <span class="n">response</span> <span class="mi">1</span> <span class="o">--&gt;</span> <span class="n">send</span> <span class="n">request</span> <span class="mi">2</span> <span class="o">...</span>
<span class="o">====</span> <span class="n">end</span> <span class="n">connection</span> <span class="o">====</span></code></pre>
</figure>from what I understand in HTTP2 the process is more like

<figure class="highlight">
<pre><code class="language-python" data-lang="python"><span class="o">====</span> <span class="n">start</span> <span class="n">connection</span> <span class="o">====</span> 
<span class="n">send</span> <span class="n">request</span> <span class="mi">1</span><span class="p">,</span> <span class="n">send</span> <span class="n">request</span> <span class="mi">2</span><span class="p">,</span> <span class="n">send</span> <span class="n">request</span> <span class="mi">3</span> <span class="o">--&gt;</span> <span class="n">wait</span> <span class="k">for</span> <span class="n">responses</span> <span class="o">--&gt;</span> <span class="n">receive</span> <span class="n">response</span> <span class="mi">1</span><span class="p">,</span> <span class="mi">2</span><span class="p">,</span> <span class="mi">3</span>
<span class="o">====</span> <span class="n">end</span> <span class="n">connection</span> <span class="o">====</span></code></pre>
</figure>In HTTP1.1 if you have one slow response it will block connection. In HTTP2 you can send multiple requests to your server over one connection at the same time and then fetch responses as they arrive from origin.

To use HTTP2 to its full capabilities our client is going to send multiple requests over one connection and then fetch responses. It will split initial list of 3000 books into chunks of 100 urls. For every chunk it will start with sending 100 requests. In next step it will iterate over connection stream ids and fetch responses.

I’m going to use <a href="https://github.com/Lukasa/hyper">python-hyper</a> as underlying client library. Twisted does not yet support HTTP2 client side, but work on supporting it is in progress.

<figure class="highlight">
<pre><code class="language-python" data-lang="python"><span class="kn">import</span> <span class="nn">json</span>
<span class="kn">from</span> <span class="nn">hyper</span> <span class="kn">import</span> <span class="n">HTTPConnection</span>

<span class="n">conn</span> <span class="o">=</span> <span class="n">HTTPConnection</span><span class="p">(</span><span class="s">'localhost:8080'</span><span class="p">,</span> <span class="n">secure</span><span class="o">=</span><span class="bp">True</span><span class="p">)</span>
<span class="n">conn</span><span class="o">.</span><span class="n">request</span><span class="p">(</span><span class="s">'GET'</span><span class="p">,</span> <span class="s">'/'</span><span class="p">)</span>
<span class="n">resp</span> <span class="o">=</span> <span class="n">conn</span><span class="o">.</span><span class="n">get_response</span><span class="p">()</span>

<span class="c"># process initial page with book ids</span>
<span class="n">index_data</span> <span class="o">=</span> <span class="n">json</span><span class="o">.</span><span class="n">loads</span><span class="p">(</span><span class="n">resp</span><span class="o">.</span><span class="n">read</span><span class="p">()</span><span class="o">.</span><span class="n">decode</span><span class="p">(</span><span class="s">"utf8"</span><span class="p">))</span>

<span class="n">responses</span> <span class="o">=</span> <span class="p">[]</span>
<span class="n">chunk_size</span> <span class="o">=</span> <span class="mi">100</span>

<span class="c"># split initial set of urls into chunks of 100 items</span>
<span class="k">for</span> <span class="n">i</span> <span class="ow">in</span> <span class="nb">range</span><span class="p">(</span><span class="mi">0</span><span class="p">,</span> <span class="nb">len</span><span class="p">(</span><span class="n">index_data</span><span class="p">),</span> <span class="n">chunk_size</span><span class="p">):</span>
    <span class="n">request_ids</span> <span class="o">=</span> <span class="p">[]</span>

    <span class="c"># make requests</span>
    <span class="k">for</span> <span class="n">_id</span> <span class="ow">in</span> <span class="n">index_data</span><span class="p">[</span><span class="n">i</span><span class="p">:</span><span class="n">i</span><span class="o">+</span><span class="n">chunk_size</span><span class="p">]:</span>
        <span class="n">book_details_path</span> <span class="o">=</span> <span class="s">"/book?id={}"</span><span class="o">.</span><span class="n">format</span><span class="p">(</span><span class="n">_id</span><span class="p">)</span>
        <span class="n">request_id</span> <span class="o">=</span> <span class="n">conn</span><span class="o">.</span><span class="n">request</span><span class="p">(</span><span class="s">'GET'</span><span class="p">,</span> <span class="n">book_details_path</span><span class="p">)</span>
        <span class="n">request_ids</span><span class="o">.</span><span class="n">append</span><span class="p">(</span><span class="n">request_id</span><span class="p">)</span>

    <span class="c"># get responses</span>
    <span class="k">for</span> <span class="n">req_id</span> <span class="ow">in</span> <span class="n">request_ids</span><span class="p">:</span>
        <span class="n">response</span> <span class="o">=</span> <span class="n">conn</span><span class="o">.</span><span class="n">get_response</span><span class="p">(</span><span class="n">req_id</span><span class="p">)</span>
        <span class="n">body</span> <span class="o">=</span> <span class="n">json</span><span class="o">.</span><span class="n">loads</span><span class="p">(</span><span class="n">response</span><span class="o">.</span><span class="n">read</span><span class="p">()</span><span class="o">.</span><span class="n">decode</span><span class="p">(</span><span class="s">"utf8"</span><span class="p">))</span>
        <span class="n">responses</span><span class="o">.</span><span class="n">append</span><span class="p">(</span><span class="n">body</span><span class="p">)</span>

<span class="k">assert</span> <span class="nb">len</span><span class="p">(</span><span class="n">responses</span><span class="p">)</span> <span class="o">==</span> <span class="mi">3000</span></code></pre>
</figure>What kind of performance can we expect from HTTP2 client?

<figure class="highlight">
<pre><code class="language-python" data-lang="python"><span class="n">User</span> <span class="n">time</span> <span class="p">(</span><span class="n">seconds</span><span class="p">):</span> <span class="mf">1.41</span>
<span class="n">System</span> <span class="n">time</span> <span class="p">(</span><span class="n">seconds</span><span class="p">):</span> <span class="mf">0.04</span>
<span class="n">Percent</span> <span class="n">of</span> <span class="n">CPU</span> <span class="n">this</span> <span class="n">job</span> <span class="n">got</span><span class="p">:</span> <span class="mi">41</span><span class="o">%</span>
<span class="n">Elapsed</span> <span class="p">(</span><span class="n">wall</span> <span class="n">clock</span><span class="p">)</span> <span class="n">time</span> <span class="p">(</span><span class="n">h</span><span class="p">:</span><span class="n">mm</span><span class="p">:</span><span class="n">ss</span> <span class="ow">or</span> <span class="n">m</span><span class="p">:</span><span class="n">ss</span><span class="p">):</span> <span class="mi">0</span><span class="p">:</span><span class="mf">03.53</span></code></pre>
</figure>To sum up HTTP2 client is faster, but it also works slightly differently. If you were to use HTTP2 in same way as HTTP1.1 (just send one request after another within one connection) performance difference would be small or non-existent. It’s also worth noting that I didnt go into details of other HTTP2 improvements (such as headers compression or server push). These other benefits of HTTP2 are certainly equally important as multiplexing of messages over one connection. I’m not sure if you can use server push from Twisted though.
<p style="text-align: right;"><strong>pawelmhm.github.io</strong></p>";s:11:"post_parent";s:1:"0";s:4:"guid";s:25:"http://reactvn.net/?p=618";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}i:8;O:8:"stdClass":23:{s:2:"ID";s:3:"621";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2016-08-15 14:14:18";s:13:"post_date_gmt";s:19:"2016-08-15 07:14:18";s:12:"post_content";s:163645:"This list initially was a clone of stackoverflow - List of Freely Available Programming Books by George Stocker. Now updated, with dead links gone and new content.

<h3>Index</h3>

<ul>
<li><a href="#ada">Ada</a></li>
<li><a href="#agda">Agda</a></li>
<li><a href="#alef">Alef</a></li>
<li><a href="#android">Android</a></li>
<li><a href="#apl">APL</a></li>
<li><a href="#arduino">Arduino</a></li>
<li><a href="#aspnet-mvc">ASP.NET MVC</a></li>
<li><a href="#assembly-language">Assembly Language</a></li>
<li><a href="#non-x86">Non-X86</a></li>
<li><a href="#autohotkey">AutoHotkey</a></li>
<li><a href="#autotools">Autotools</a></li>
<li><a href="#awk">Awk</a></li>
<li><a href="#bash">Bash</a></li>
<li><a href="#basic">Basic</a></li>
<li><a href="#beta">BETA</a></li>
<li><a href="#c">C</a></li>
<li><a href="#c-sharp">C#</a></li>
<li><a href="#c-1">C++</a></li>
<li><a href="#chapel">Chapel</a></li>
<li><a href="#cilk">Cilk</a></li>
<li><a href="#clojure">Clojure</a></li>
<li><a href="#cobol">COBOL</a></li>
<li><a href="#coffeescript">CoffeeScript</a></li>
<li><a href="#coldfusion">ColdFusion</a></li>
<li><a href="#cool">Cool</a></li>
<li><a href="#coq">Coq</a></li>
<li><a href="#cuda">CUDA</a></li>
<li><a href="#d">D</a></li>
<li><a href="#dart">Dart</a></li>
<li><a href="#db2">DB2</a></li>
<li><a href="#delphi--pascal">Delphi / Pascal</a></li>
<li><a href="#dtrace">DTrace</a></li>
<li><a href="#elasticsearch">Elasticsearch</a></li>
<li><a href="#elixir">Elixir</a></li>
<li><a href="#emacs">Emacs</a></li>
<li><a href="#embedded-systems">Embedded Systems</a></li>
<li><a href="#erlang">Erlang</a></li>
<li><a href="#f-sharp">F#</a></li>
<li><a href="#firefox-os">Firefox OS</a></li>
<li><a href="#forcecom">Force.com</a></li>
<li><a href="#forth">Forth</a></li>
<li><a href="#fortran">Fortran</a></li>
<li><a href="#freebsd">FreeBSD</a></li>
<li><a href="#git">Git</a></li>
<li><a href="#go">Go</a></li>
<li><a href="#graphical-user-interfaces">Graphical user interfaces</a></li>
<li><a href="#graphics-programming">Graphics Programming</a></li>
<li><a href="#groovy">Groovy</a></li>
<li><a href="#gradle">Gradle</a></li>
<li><a href="#grails">Grails</a></li>
<li><a href="#spock-framework">Spock Framework</a></li>
<li><a href="#hadoop">Hadoop</a></li>
<li><a href="#haskell">Haskell</a></li>
<li><a href="#haxe">Haxe</a></li>
<li><a href="#html--css">HTML / CSS</a></li>
<li><a href="#bootstrap">Bootstrap</a></li>
<li><a href="#http">HTTP</a></li>
<li><a href="#icon">Icon</a></li>
<li><a href="#ios">iOS</a></li>
<li><a href="#iot">IoT</a></li>
<li><a href="#isabellehol">Isabelle/HOL</a></li>
<li><a href="#j">J</a></li>
<li><a href="#java">Java</a></li>
<li><a href="#jasperreports">JasperReports</a></li>
<li><a href="#spring">Spring</a></li>
<li><a href="#spring-boot">Spring Boot</a></li>
<li><a href="#spring-security">Spring Security</a></li>
<li><a href="#wicket">Wicket</a></li>
<li><a href="#javascript">JavaScript</a></li>
<li><a href="#javascript-frameworks">Javascript frameworks</a></li>
<li><a href="#nodejs">Node.js</a></li>
<li><a href="#jenkins">Jenkins</a></li>
<li><a href="#julia">Julia</a></li>
<li><a href="#language-agnostic">Language Agnostic</a></li>
<li><a href="#algorithms--data-structures">Algorithms &amp; Datastructures</a></li>
<li><a href="#cellular-automata">Cellular Automata</a></li>
<li><a href="#cloud-computing">Cloud Computing</a></li>
<li><a href="#competitive-programming">Competitive Programming</a></li>
<li><a href="#compiler-design">Compiler Design</a></li>
<li><a href="#database">Database</a></li>
<li><a href="#datamining">Datamining</a></li>
<li><a href="#information-retrieval">Information Retrieval</a></li>
<li><a href="#licensing">Licensing</a></li>
<li><a href="#machine-learning">Machine Learning</a></li>
<li><a href="#mathematics">Mathematics</a></li>
<li><a href="#misc">Misc</a></li>
<li><a href="#mooc">MOOC</a></li>
<li><a href="#networking">Networking</a></li>
<li><a href="#open-source-ecosystem">Open Source Ecosystem</a></li>
<li><a href="#operating-systems">Operating systems</a></li>
<li><a href="#parallel-programming">Parallel Programming</a></li>
<li><a href="#partial-evaluation">Partial Evaluation</a></li>
<li><a href="#professional-development">Professional Development</a></li>
<li><a href="#programming-paradigms">Programming Paradigms</a></li>
<li><a href="#regular-expressions">Regular Expressions</a></li>
<li><a href="#reverse-engineering">Reverse Engineering</a></li>
<li><a href="#security">Security</a></li>
<li><a href="#software-architecture">Software Architecture</a></li>
<li><a href="#standards">Standards</a></li>
<li><a href="#theoretical-computer-science">Theoretical Computer Science</a></li>
<li><a href="#web-performance">Web Performance</a></li>
<li><a href="#latex--tex">LaTeX / TeX</a></li>
<li><a href="#latex">LaTeX</a></li>
<li><a href="#tex">TeX</a></li>
<li><a href="#limbo">Limbo</a></li>
<li><a href="#linux">Linux</a></li>
<li><a href="#lisp">Lisp</a></li>
<li><a href="#livecode">Livecode</a></li>
<li><a href="#lua">Lua</a></li>
<li><a href="#markdown">MarkDown</a></li>
<li><a href="#mathematica">Mathematica</a></li>
<li><a href="#matlab">MATLAB</a></li>
<li><a href="#maven">Maven</a></li>
<li><a href="#mercurial">Mercurial</a></li>
<li><a href="#mercury">Mercury</a></li>
<li><a href="#meta-lists">Meta-Lists</a></li>
<li><a href="#mysql">MySQL</a></li>
<li><a href="#neo4j">Neo4J</a></li>
<li><a href="#net-framework">.NET Framework</a></li>
<li><a href="#nosql">NoSQL</a></li>
<li><a href="#oberon">Oberon</a></li>
<li><a href="#objective-c">Objective-C</a></li>
<li><a href="#ocaml">OCaml</a></li>
<li><a href="#octave">Octave</a></li>
<li><a href="#opengl-es">OpenGL ES</a></li>
<li><a href="#openmp">OpenMP</a></li>
<li><a href="#openresty">OpenResty</a></li>
<li><a href="#openscad">OpenSCAD</a></li>
<li><a href="#oracle-plsql">Oracle PL/SQL</a></li>
<li><a href="#oracle-server">Oracle Server</a></li>
<li><a href="#parrot--perl-6">Parrot / Perl 6</a></li>
<li><a href="#pc-bsd">PC-BSD</a></li>
<li><a href="#perl">Perl</a></li>
<li><a href="#php">PHP</a></li>
<li><a href="#picolisp">PicoLisp</a></li>
<li><a href="#postgresql">PostgreSQL</a></li>
<li><a href="#powershell">PowerShell</a></li>
<li><a href="#processing">Processing</a></li>
<li><a href="#prolog">Prolog</a></li>
<li><a href="#constraint-logic-programming-extended-prolog">Constraint Logic Programming</a></li>
<li><a href="#purescript">PureScript</a></li>
<li><a href="#python">Python</a></li>
<li><a href="#django">Django</a></li>
<li><a href="#flask">Flask</a></li>
<li><a href="#kivy">Kivy</a></li>
<li><a href="#pandas">Pandas</a></li>
<li><a href="#pyramid">Pyramid</a></li>
<li><a href="#qml">QML</a></li>
<li><a href="#r">R</a></li>
<li><a href="#racket">Racket</a></li>
<li><a href="#raspberry-pi">Raspberry Pi</a></li>
<li><a href="#rebol">REBOL</a></li>
<li><a href="#ruby">Ruby</a></li>
<li><a href="#rspec">RSpec</a></li>
<li><a href="#ruby-on-rails">Ruby on Rails</a></li>
<li><a href="#sinatra">Sinatra</a></li>
<li><a href="#rust">Rust</a></li>
<li><a href="#sage">Sage</a></li>
<li><a href="#scala">Scala</a></li>
<li><a href="#lift">Lift</a></li>
<li><a href="#play-scala">Play Scala</a></li>
<li><a href="#scheme">Scheme</a></li>
<li><a href="#scilab">Scilab</a></li>
<li><a href="#scratch">Scratch</a></li>
<li><a href="#sed">Sed</a></li>
<li><a href="#self">Self</a></li>
<li><a href="#smalltalk">Smalltalk</a></li>
<li><a href="#spark">Spark</a></li>
<li><a href="#sql-implementation-agnostic">SQL (implementation agnostic)</a></li>
<li><a href="#sql-server">SQL Server</a></li>
<li><a href="#standard-ml">Standard ML</a></li>
<li><a href="#subversion">Subversion</a></li>
<li><a href="#swift">Swift</a></li>
<li><a href="#tcl">Tcl</a></li>
<li><a href="#teradata">Teradata</a></li>
<li><a href="#tizen">Tizen</a></li>
<li><a href="#tla">TLA</a></li>
<li><a href="#typescript">TypeScript</a></li>
<li><a href="#unix">Unix</a></li>
<li><a href="#verilog">Verilog</a></li>
<li><a href="#vhdl">VHDL</a></li>
<li><a href="#vim">Vim</a></li>
<li><a href="#visual-basic">Visual Basic</a></li>
<li><a href="#visual-prolog">Visual Prolog</a></li>
<li><a href="#web-services">Web Services</a></li>
<li><a href="#windows-8">Windows 8</a></li>
<li><a href="#windows-phone">Windows Phone</a></li>
<li><a href="#workflow">Workflow</a></li>
<li><a href="#xbase-dbase--clipper--harbour">xBase (dBase / Clipper / Harbour)</a></li>
</ul>

<h3>Meta-Lists</h3>

<ul>
<li><a href="http://www.atariarchives.org">atariarchives.org</a> atariarchives.org makes books, information, and software for Atari and other classic computers available on the Web.</li>
<li><a href="https://www.bento.io">Bento</a></li>
<li><a href="http://bitsavers.trailing-edge.com">Bitsavers.org</a></li>
<li><a href="http://bookboon.com/en/it-programming-ebooks">Bookboon: IT &amp; Programming</a></li>
<li><a href="https://dzone.com/refcardz">Cheat Sheets (Free)</a></li>
<li><a href="http://codingus.blogspot.in">Codingus</a></li>
<li><a href="http://conceptf1.blogspot.com/2013/11/list-of-freely-available-programming.html">conceptf1.blogspot.com</a></li>
<li><a href="http://stephane.ducasse.free.fr/FreeBooks.html">Free Smalltalk Books, collected by Stéphane Ducasse</a></li>
<li><a href="http://www.freetechbooks.com">Free Tech Books</a></li>
<li><a href="http://hackershelf.com/browse/">Hacker Shelf</a></li>
<li><a href="http://www.redbooks.ibm.com">IBM Redbooks</a></li>
<li><a href="http://www.infoq.com/minibooks/">InfoQ Minibooks</a></li>
<li><a href="http://www.intechopen.com/subjects/computer-and-information-science">InTech: Computer and Information Science</a></li>
<li><a href="https://github.com/revolunet/JSbooks">JSBooks - directory of free javascript ebooks</a></li>
<li><a href="https://learnxinyminutes.com">Learn X in Y minutes</a></li>
<li><a href="https://www.learneroo.com/modules/12/nodes/96">Learneroo Resources to Learn Programming</a></li>
<li><a href="https://blogs.msdn.microsoft.com/mssmallbiz/2014/07/07/largest-collection-of-free-microsoft-ebooks-ever-including-windows-8-1-windows-8-windows-7-office-2013-office-365-office-2010-sharepoint-2013-dynamics-crm-powershell-exchange-server-lync-2/">Microsoft Guides to Software</a></li>
<li><a href="https://mva.microsoft.com/ebooks">Microsoft Press: Free E-Books</a></li>
<li><a href="https://blogs.msdn.microsoft.com/mssmallbiz/2012/07/27/large-collection-of-free-microsoft-ebooks-for-you-including-sharepoint-visual-studio-windows-phone-windows-8-office-365-office-2010-sql-server-2012-azure-and-more/">Microsoft Technologies 1, including books on Windows Azure, SharePoint, Visual Studio Guide, Windows phone development, ASP.net, Office365, etc. collection by Eric Ligman</a></li>
<li><a href="https://blogs.msdn.microsoft.com/mssmallbiz/2012/07/30/another-large-collection-of-free-microsoft-ebooks-and-resource-kits-for-you-including-sharepoint-2013-office-2013-office-365-duet-2-0-azure-cloud-windows-phone-lync-dynamics-crm-and-more/">Microsoft Technologies 2, including books on Windows Azure, SharePoint, Visual Studio Guide, Windows phone development, ASP.net, etc. collection by Eric Ligman</a></li>
<li><a href="http://commons.oreilly.com/wiki/index.php/O%27Reilly_Commons">O'Reilly's Commons</a></li>
<li><a href="http://www.oreilly.com/openbook/">O'Reilly's Open Books Project</a></li>
<li><a href="https://github.com/papers-we-love/papers-we-love">Papers we love</a></li>
<li><a href="http://www.red-gate.com/community/books/index">Red Gate Books</a></li>
<li><a href="http://stephane.ducasse.free.fr/FreeBooks/">Stef's Free Online Smalltalk Books</a></li>
<li><a href="http://www.techbooksforfree.com">TechBooksForFree.com</a></li>
<li><a href="http://stackoverflow.com/questions/388242/the-definitive-c-book-guide-and-list">The Definitive C++ Book Guide and List</a></li>
<li><a href="http://theassayer.org">Theassayer.org</a></li>
<li><a href="http://www.tutorialspoint.com">tutorialspoint</a></li>
<li><a href="https://en.wikibooks.org/wiki/Category%3aComputer_programming">Wikibooks: Programming</a></li>
</ul>

<h3>Graphics Programming</h3>

<ul>
<li><a href="https://en.wikibooks.org/wiki/Blender_3D%3A_Noob_to_Pro">Blender 3D: Noob to Pro</a></li>
<li><a href="http://user.xmission.com/~legalize/book/download/index.html">DirectX manual</a> (draft)</li>
<li><a href="https://developer.nvidia.com/gpugems/GPUGems/gpugems_pref01.html">GPU Gems</a></li>
<li><a href="http://www.gamedev.net/page/resources/_/technical/graphics-programming-and-theory/graphics-programming-black-book-r1698">Graphics Programming Black Book</a></li>
<li><a href="http://gimp-savvy.com/BOOK/index.html">Grokking the GIMP</a></li>
<li><a href="https://open.gl">Introduction to Modern OpenGL</a></li>
<li><a href="http://learnopengl.com">Learn OpenGL</a> - Joey de Vries</li>
<li><a href="https://web.archive.org/web/20150225192611/http://www.arcsynthesis.org/gltut/index.html">Learning Modern 3D Graphics Programming</a> (draft)</li>
<li><a href="http://www.songho.ca/opengl/index.html">OpenGL</a> - Concepts and illustrations.</li>
<li><a href="http://fly.srk.fer.hr/~unreal/theredbook/">OpenGL Programming Guide (The Red Book)</a></li>
<li><a href="http://www.realtimerendering.com/resources/shaderx/">ShaderX series</a></li>
<li><a href="http://www.opengl-tutorial.org">Tutorials for modern OpenGL</a></li>
</ul>

<h3>Graphical User Interfaces</h3>

<ul>
<li><a href="http://anniversary.smashingmagazine.com/best-of-smashing-magazine.zip">Best of Smashing Magazine</a></li>
<li><a href="https://developer.gnome.org/gtkmm-tutorial/stable/">Programming with gtkmm 3</a></li>
<li><a href="http://searchuserinterfaces.com/book/">Search User Interfaces</a> - Marti A. Hearst</li>
<li><a href="http://www.flashbulbinteraction.com/WTS.html">Working through Screens</a> - Jacob Burghardt</li>
</ul>

<h3>Language Agnostic</h3>

<h4>Algorithms &amp; Data Structures</h4>

<ul>
<li><a href="http://dces.essex.ac.uk/staff/rpoli/gp-field-guide/toc.html">A Field Guide To Genetic Programming</a></li>
<li><a href="http://code.google.com/p/graphbook/">Algorithmic Graph Theory</a></li>
<li><a href="http://algs4.cs.princeton.edu/home/">Algorithms, 4th Edition</a> - Robert Sedgewick and Kevin Wayne</li>
<li><a href="https://archive.org/details/Algorithms_And_Automatic_Computing_Machines">Algorithms and Automatic Computing Machines (1963)</a> - B. A. Trakhtenbrot</li>
<li><a href="https://www.math.upenn.edu/~wilf/AlgoComp.pdf">Algorithms and Complexity</a> (PDF)</li>
<li><a href="http://jeffe.cs.illinois.edu/teaching/algorithms/">Algorithms Course Materials</a> - Jeff Erickson</li>
<li><a href="http://www.cse.iitd.ernet.in/~ssen/csl356/admin356.html">Analysis and Design of Algorithms</a> - Sandeep Sen, IIT Delhi</li>
<li><a href="http://visualgo.net">Animated Algorithm and Data Structure Visualization</a> (Resource)</li>
<li><a href="http://cslibrary.stanford.edu/110/BinaryTrees.pdf">Binary Trees</a> (PDF)</li>
<li><a href="http://www.cleveralgorithms.com/nature-inspired/">Clever Algorithms</a></li>
<li><a href="http://csunplugged.org/books/">CS Unplugged: Computer Science without a computer</a></li>
<li><a href="http://www.cse.iitd.ernet.in/~suban/cs130/index.html">Data Structures</a> - Prof. Subhashis Banerjee, IIT Delhi</li>
<li><a href="http://dotnetslackers.com/projects/Data-Structures-And-Algorithms/">Data Structures and Algorithms: Annotated Reference with Examples</a> - G. Barnett and L. Del Tongo</li>
<li><a href="https://www.syncfusion.com/resources/techportal/ebooks/datastructurespart1">Data Structures Succinctly Part 1, Syncfusion</a> (PDF, Kindle) <em>(Just fill the fields with any values)</em></li>
<li><a href="https://www.syncfusion.com/resources/techportal/ebooks/datastructurespart2">Data Structures Succinctly Part 2, Syncfusion</a> (PDF, Kindle) <em>(Just fill the fields with any values)</em></li>
<li><a href="https://github.com/liuxinyu95/AlgoXY">Elementary Algorithms</a> - Larry LIU Xinyu</li>
<li><a href="http://infolab.stanford.edu/~ullman/focs.html">Foundations of Computer Science</a> - Al Aho and Jeff Ullman</li>
<li><a href="https://cs.brown.edu/~rt/gdhandbook/">Handbook of Graph Drawing and Visualization</a></li>
<li><a href="https://larc.unt.edu/ian/books/free/license.html">Lectures Notes on Algorithm Analysis and Computational Complexity (Fourth Edition)</a> - Ian Parberry (use form at bottom of license)</li>
<li><a href="http://people.mpi-inf.mpg.de/~mehlhorn/LEDAbook.html">LEDA: A Platform for Combinatorial and Geometric Computing</a></li>
<li><a href="http://cslibrary.stanford.edu/103/LinkedListBasics.pdf">Linked List Basics</a> (PDF)</li>
<li><a href="http://cslibrary.stanford.edu/105/LinkedListProblems.pdf">Linked List Problems</a> (PDF)</li>
<li><a href="http://www.jjj.de/fxt/fxtbook.pdf">Matters Computational: Ideas, Algorithms, Source Code</a> (PDF)</li>
<li><a href="http://www.aupress.ca/index.php/books/120226">Open Data Structures: An Introduction</a> - Pat Morin</li>
<li><a href="http://planning.cs.uiuc.edu">Planning Algorithms</a></li>
<li><a href="https://larc.unt.edu/ian/books/free/license.html">Problems on Algorithms (Second Edition)</a> - Ian Parberry (use form at bottom of license)</li>
<li><a href="http://www.cs.cmu.edu/~rwh/theses/okasaki.pdf">Purely Functional Data Structures</a> (PDF)</li>
<li><a href="http://www.inf.fh-flensburg.de/lang/algorithmen/sortieren/algoen.htm">Sequential and parallel sorting algorithms</a></li>
<li><a href="http://igm.univ-mlv.fr/~mac/REC/text-algorithms.pdf">Text Algorithms</a> (PDF)</li>
<li><a href="http://www8.cs.umu.se/kurser/TDBAfl/VT06/algorithms/BOOK/BOOK/BOOK.HTM">The Algorithm Design Manual</a></li>
<li><a href="http://www.cs.utsa.edu/~wagner/knuth/">The Art of Computer Programming</a> - Donald Knuth (fascicles, mostly volume 4)</li>
<li><a href="http://www.designofapproxalgs.com/book.pdf">The Design of Approximation Algorithms</a> (PDF)</li>
<li><a href="http://cslibrary.stanford.edu/109/TreeListRecursion.pdf">The Great Tree List Recursion Problem</a> (PDF)</li>
<li><a href="http://greenteapress.com/complexity/">Think Complexity</a> (PDF)</li>
</ul>

<h4>Cellular Automata</h4>

<ul>
<li><a href="https://www.wolframscience.com/nksonline/toc.html">A New Kind of Science</a> - Stephen Wolfram</li>
<li><a href="http://uncomp.uwe.ac.uk/genaro/Cellular_Automata_Repository/Books.html">Cellular Automata Books</a></li>
</ul>

<h4>Cloud Computing</h4>

<ul>
<li><a href="http://www.microsoft.com/en-us/download/details.aspx?id=29263">Multi-tenant Applications for the Cloud, 3rd Edition</a></li>
<li><a href="http://docs.openstack.org/ops/">OpenStack Operations Guide</a></li>
</ul>

<h4>Competitive Programming</h4>

<ul>
<li><a href="https://sites.google.com/site/stevenhalim/">Competitive Programming, 1st Edition</a> (PDF)</li>
</ul>

<h4>Compiler Design</h4>

<ul>
<li><a href="http://www.network-theory.co.uk/docs/gccintro/">An Introduction to GCC</a> - Brian Gough</li>
<li><a href="http://www.diku.dk/~torbenm/Basics/">Basics of Compiler Design (Anniversary Edition)</a> - Torben Mogensen</li>
<li><a href="http://www.ethoberon.ethz.ch/WirthPubl/CBEAll.pdf">Compiler Construction</a> (PDF)</li>
<li><a href="http://www.holub.com/software/compiler.design.in.c.html">Compiler Design in C</a> - Allen Holub, Prentice Hall, 1990</li>
<li><a href="http://elvis.rowan.edu/~bergmann/books/c_cpp/">Compiler Design: Theory, Tools, and Examples, C/C++ Edition</a> - Seth D. Bergmann</li>
<li><a href="http://elvis.rowan.edu/~bergmann/books/java/">Compiler Design: Theory, Tools, and Examples, Java Edition</a> - Seth D. Bergmann</li>
<li><a href="http://lampwww.epfl.ch/~schinz/thesis-final-A4.pdf">Compiling Scala for the Java Virtual Machine</a> - Michel Schinz (PDF)</li>
<li><a href="http://www.chilton-computing.org.uk/acl/literature/books/compilingtechniques/overview.htm">Compiling Techniques</a> - F.R.A. Hopgood, Macdonald, 1969</li>
<li><a href="http://research.microsoft.com/en-us/um/people/simonpj/Papers/pj-lester-book/">Implementing Functional Languages: A Tutorial</a> - Simon Peyton Jones, David Lester</li>
<li><a href="http://www.stack.nl/~marcov/compiler.pdf">Let's Build a Compiler</a> (PDF)</li>
<li><a href="http://www.iecc.com/linker/">Linkers and Loaders</a> - John R. Levine</li>
<li><a href="http://web.stanford.edu/class/archive/cs/cs143/cs143.1128/">Practical and Theoretical Aspects of Compiler Construction</a> (class lectures and slides)</li>
</ul>

<h4>Computer Vision</h4>

<ul>
<li><a href="http://homepages.inf.ed.ac.uk/rbf/BOOKS/BANDB/bandb.htm">Computer Vision</a> - Dana Ballard, Chris Brown</li>
<li><a href="http://szeliski.org/Book/">Computer Vision: Algorithms and Applications</a> - Richard Szeliski</li>
<li><a href="http://www.computervisionmodels.com">Computer Vision: Models, Learning, and Inference</a> - Simon J.D. Prince</li>
<li><a href="http://programmingcomputervision.com">Programming Computer Vision with Python</a> - Jan Erik Solem</li>
</ul>

<h4>Database</h4>

<ul>
<li><a href="http://shop.oreilly.com/product/0636920022640.do">Big Data Now: Current Perspectives from O'Reilly Radar</a></li>
<li><a href="http://www.dcs.warwick.ac.uk/~hugh/TTM/Database-Explorations-revision-2.pdf">Database Explorations</a> (PDF)</li>
<li><a href="http://public.dhe.ibm.com/software/dw/db2/express-c/wiki/Database_fundamentals.pdf">Database Fundamentals</a> (PDF)</li>
<li><a href="http://www.dcs.warwick.ac.uk/~hugh/TTM/DTATRM.pdf">Databases, Types, and The Relational Model: The Third Manifesto</a> (PDF)</li>
<li><a href="http://webdam.inria.fr/Alice/">Foundations of Databases</a></li>
<li><a href="http://www.redbook.io">Readings in Database Systems, 5th Ed.</a></li>
<li><a href="http://people.cs.aau.dk/~csj/Thesis/">Temporal Database Management</a> - Christian S. Jensen</li>
<li><a href="http://web.cecs.pdx.edu/~maier/TheoryBook/TRD.html">The Theory of Relational Databases</a></li>
<li><a href="http://www.oreilly.com/data/free/what-is-database-design-anyway.csp">What is Database Design, Anyway?</a></li>
</ul>

<h4>Datamining</h4>

<ul>
<li><a href="http://guidetodatamining.com">A Programmer's Guide to Data Mining</a> - Ron Zacharski (Draft)</li>
<li><a href="http://www.oreilly.com/data/free/data-jujitsu.csp">Data Jujitsu: The Art of Turning Data into Product</a> <em>(Just fill the fields with any values)</em></li>
<li><a href="https://en.wikibooks.org/wiki/Data_Mining_Algorithms_In_R">Data Mining Algorithms In R</a></li>
<li><a href="http://arxiv.org/pdf/1206.1754v2.pdf">Internet Advertising: An Interplay among Advertisers, Online Publishers, Ad Exchanges and Web Users</a> (PDF)</li>
<li><a href="https://docs.google.com/file/d/0B6iefdnF22XQeVZDSkxjZ0Z5VUE/edit?pli=1">Introduction to Data Science</a> - Jeffrey Stanton</li>
<li><a href="http://www.mmds.org">Mining of Massive Datasets</a></li>
<li><a href="http://schoolofdata.org/handbook/">School of Data Handbook</a></li>
<li><a href="http://www.intechopen.com/books/theory-and-applications-for-advanced-text-mining">Theory and Applications for Advanced Text Mining</a></li>
</ul>

<h4>Information Retrieval</h4>

<ul>
<li><a href="http://www.csee.umbc.edu/csee/research/cadip/readings/IR.report.120600.book.pdf">Information Retrieval: A Survey</a> (PDF)</li>
<li><a href="http://nlp.stanford.edu/IR-book/information-retrieval-book.html">Introduction to Information Retrieval</a></li>
</ul>

<h4>Licensing</h4>

<ul>
<li><a href="http://www.aliprandi.org/cc-user-guide/">Creative Commons: a user guide</a> - Simone Aliprandi</li>
<li><a href="http://www.thepublicdomain.org/download/">The Public Domain: Enclosing the Commons of the Mind</a> - James Boyle</li>
</ul>

<h4>Machine Learning</h4>

<ul>
<li><a href="http://www.dkriesel.com/en/science/neural_networks">A Brief Introduction to Neural Networks</a></li>
<li><a href="http://ciml.info/dl/v0_9/ciml-v0_9-all.pdf">A Course in Machine Learning</a> (PDF)</li>
<li><a href="https://www.ics.uci.edu/~welling/teaching/ICS273Afall11/IntroMLBook.pdf">A First Encounter with Machine Learning</a> (PDF)</li>
<li><a href="http://www-bcf.usc.edu/~gareth/ISL/">An Introduction to Statistical Learning</a> - Gareth James, Daniela Witten, Trevor Hastie and Robert Tibshirani</li>
<li><a href="http://web4.cs.ucl.ac.uk/staff/D.Barber/pmwiki/pmwiki.php?n=Brml.HomePage">Bayesian Reasoning and Machine Learning</a></li>
<li><a href="http://www.deeplearningbook.org">Deep Learning</a> - Ian Goodfellow, Yoshua Bengio and Aaron Courville</li>
<li><a href="http://www.gaussianprocess.org/gpml/">Gaussian Processes for Machine Learning</a></li>
<li><a href="http://www.inference.phy.cam.ac.uk/itila/">Information Theory, Inference, and Learning Algorithms</a></li>
<li><a href="http://arxiv.org/abs/0904.3664v1">Introduction to Machine Learning</a> - Amnon Shashua</li>
<li><a href="http://www.iro.umontreal.ca/~bengioy/papers/ftml_book.pdf">Learning Deep Architectures for AI</a> (PDF)</li>
<li><a href="http://www.intechopen.com/books/machine_learning">Machine Learning</a></li>
<li><a href="http://www1.maths.leeds.ac.uk/~charles/statlog/">Machine Learning, Neural and Statistical Classification</a></li>
<li><a href="http://neuralnetworksanddeeplearning.com">Neural Networks and Deep Learning</a></li>
<li><a href="http://idiom.ucsd.edu/~rlevy/pmsl_textbook/text.html">Probabilistic Models in the Study of Language</a> (Draft, with R code)</li>
<li><a href="http://webdocs.cs.ualberta.ca/~sutton/book/ebook/the-book.html">Reinforcement Learning: An Introduction</a></li>
<li><a href="http://www-stat.stanford.edu/~tibs/ElemStatLearn/">The Elements of Statistical Learning</a> - Trevor Hastie, Robert Tibshirani, and Jerome Friedman</li>
<li><a href="http://www.e-booksdirectory.com/details.php?ebook=9575">The LION Way: Machine Learning plus Intelligent Optimization</a></li>
<li><a href="http://thepythongamebook.com/en%3Astart">The Python Game Book</a></li>
</ul>

<h4>Mathematics</h4>

<ul>
<li><a href="http://linear.ups.edu">A First Course in Linear Algebra</a> - Robert A. Beezer</li>
<li><a href="http://www.math.stonybrook.edu/~aknapp/download/a2-alg-inside.pdf">Advanced Algebra</a> - Anthony W. Knapp (PDF)</li>
<li><a href="http://www.math.stonybrook.edu/~aknapp/download/b2-alg-inside.pdf">Basic Algebra</a> - Anthony W. Knapp (PDF)</li>
<li><a href="https://github.com/CamDavidsonPilon/Probabilistic-Programming-and-Bayesian-Methods-for-Hackers">Bayesian Methods for Hackers</a> - Cameron Davidson-Pilon</li>
<li><a href="http://www.gutenberg.org/ebooks/33283">Calculus Made Easy</a> - Silvanus P. Thompson (PDF)</li>
<li><a href="http://category-theory.mitpress.mit.edu">Category Theory for the Sciences</a></li>
<li><a href="http://www.ck12.org/book/Probability-and-Statistics---Advanced-%2528Second-Edition%2529/">CK-12 Probability and Statistics - Advanced</a></li>
<li><a href="http://cnx.org/contents/5e0744f9-9e79-4348-9237-ed012213a2d6%4040.9">Collaborative Statistics</a></li>
<li><a href="http://web.mit.edu/hyperbook/Patrikalakis-Maekawa-Cho/">Computational Geometry</a></li>
<li><a href="http://vassarstats.net/textbook/">Concepts &amp; Applications of Inferential Statistics</a></li>
<li><a href="http://tutorial.math.lamar.edu/download.aspx">Differential Equations</a> - Paul Dawkins (PDF, use form to download)</li>
<li><a href="http://home.iitk.ac.in/%7Earlal/book/mth202.pdf">Discrete Mathematics</a> - Dr. Arbind K Lal, IIT Kanpur (PDF)</li>
<li><a href="http://ramanujan.math.trinity.edu/wtrench/texts/TRENCH_DIFF_EQNS_I.PDF">Elementary Differential Equations</a> - William F. Trench (PDF)</li>
<li><a href="http://cs.gmu.edu/~sean/book/metaheuristics/">Essentials of Metaheuristics</a> - Sean Luke</li>
<li><a href="http://compalg.inf.elte.hu/~tony/Oktatas/TDK/FINAL/">Graph Theory</a></li>
<li><a href="http://www.dartmouth.edu/~chance/teaching_aids/books_articles/probability_book/book.html">Introduction to Probability</a> - Charles M. Grinstead and J. Laurie Snell</li>
<li><a href="http://ocw.mit.edu/courses/mathematics/18-05-introduction-to-probability-and-statistics-spring-2014/">Introduction to Probability and Statistics Spring 2014</a></li>
<li><a href="http://people.math.umass.edu/~lavine/Book/book.html">Introduction to Statistical Thought</a> - Michael Lavine</li>
<li><a href="https://github.com/rlabbe/Kalman-and-Bayesian-Filters-in-Python">Kalman and Bayesian Filters in Python</a></li>
<li><a href="http://www.or.deis.unibo.it/knapsack.html">Knapsack Problems - Algorithms and Computer Implementations</a> - Silvano Martello and Paolo Toth</li>
<li><a href="http://home.iitk.ac.in/~psraj/mth102/lecture_notes.html">Lecture Notes of Linear Algebra</a> - Dr. P. Shunmugaraj, IIT Kanpur (PDF)</li>
<li><a href="http://home.iitk.ac.in/~arlal/book/nptel/pdf/book_linear.pdf">Linear Algebra</a> - Dr. Arbind K Lal, IIT Kanpur (PDF)</li>
<li><a href="https://www.math.ucdavis.edu/~linear/linear-guest.pdf">Linear Algebra</a> (PDF)</li>
<li><a href="https://en.wikibooks.org/wiki/Linear_Algebra">Linear Algebra: An Introduction to Mathematical Discourse</a> - Jim Hefferon</li>
<li><a href="https://www.math.byu.edu/klkuttle/linearalgebra.pdf">Linear Algebra, Theory And Applications</a> - Kenneth Kuttler (PDF)</li>
<li><a href="http://www.ii.uib.no/~michal/und/i227/book/book.pdf">Mathematical Logic - an Introduction</a> (PDF)</li>
<li><a href="http://home.iitk.ac.in/~psraj/mth101/">Mathematics, MTS 101A</a> - P. Shunmugaraj, IIT Kanpur</li>
<li><a href="http://www.math.cornell.edu/~bterrell/dn.pdf">Notes on Diﬀerential Equations</a> - Robert E. Terrell (PDF)</li>
<li><a href="https://github.com/holdenlee/number-theory">Number Theory</a> - Holden Lee MIT</li>
<li><a href="https://www.openintro.org/stat/textbook.php">OpenIntro Statistics</a></li>
<li><a href="https://en.wikibooks.org/wiki/Ordinary_Differential_Equations">Ordinary Differential Equations</a></li>
<li><a href="http://mathematica.stackexchange.com/questions/16485/are-you-interested-in-purchasing-david-wagners-power-programming-with-mathemat/22724">Power Programming with Mathematica</a> - David B. Wagner</li>
<li><a href="http://statistics.zone">Probability and Statistics Cookbook</a></li>
<li><a href="http://wiki.stat.ucla.edu/socr/index.php/Probability_and_statistics_EBook">Probability and Statistics EBook</a></li>
<li><a href="http://www.statisticsdonewrong.com">Statistics Done Wrong</a> - Alex Reinhart</li>
<li><a href="http://www.greenteapress.com/thinkbayes/">Think Bayes: Bayesian Statistics Made Simple</a> - Allen B. Downey</li>
<li><a href="http://greenteapress.com/thinkstats/">Think Stats: Probability and Statistics for Programmers</a> - Allen B. Downey (using Python)</li>
</ul>

<h4>Mathematics For Computer Science</h4>

<ul>
<li><a href="http://cglab.ca/~michiel/DiscreteStructures/">Discrete Structures for Computer Science: Counting, Recursion, and Probability</a> - Michiel Smid</li>
</ul>

<h4>Misc</h4>

<ul>
<li><a href="https://leanpub.com/97-Things-Every-Programmer-Should-Know-Extended">97 Things Every Programmer Should Know - Extended</a></li>
<li><a href="http://ieeexplore.ieee.org/stamp/stamp.jsp?reload=true&amp;arnumber=6773024&amp;tp=">A Mathematical Theory of Communication</a> - Claude E.Shannon</li>
<li><a href="https://www.ansible.com/blog/free-ansible-book">Ansible Up &amp; Running (first three chapters)</a> <em>(account required)</em></li>
<li><a href="http://asteriskdocs.org/en/3rd_Edition/asterisk-book-html-chunk/index.html">Asterisk™: The Definitive Guide</a></li>
<li><a href="http://www.tec-it.com/download/PDF/Barcode_Reference_EN.pdf">Barcode Overview</a> (PDF)</li>
<li><a href="http://www.wisdom.weizmann.ac.il/~playbook/">Come, Let's Play: Scenario-Based Programming Using Live Sequence Charts</a></li>
<li><a href="http://www.usingcsp.com/cspbook.pdf">Communicating Sequential Processes</a> - Tony Hoare (PDF)</li>
<li><a href="http://scpd.stanford.edu/knuth/index.jsp">Computer Musings</a> (lectures by Donald Knuth)</li>
<li><a href="https://www.cs.hmc.edu/csforall/">CS For All</a></li>
<li><a href="http://hintjens.com/books">Culture \&amp; Empire: Digital Revolution</a> (PDF)</li>
<li><a href="http://designingforperformance.com">Designing for Performance</a> - Lara Hogan</li>
<li><a href="http://designinginterfaces.com">Designing Interfaces</a> - Jennifer Tidwell</li>
<li><a href="http://devdocs.io">DevDocs</a> - Documents for Developers in 1 place</li>
<li><a href="http://www.ibm.com/ibm/devops/us/en/resources/dummiesbooks/">DevOps For Dummies (IBM Edition)</a> (PDF)</li>
<li><a href="http://www.sp4comm.org">Digital Signal Processing For Communications</a></li>
<li><a href="http://www.dspguide.com">Digital Signal Processing For Engineers and Scientists</a></li>
<li><a href="http://book.mixu.net/distsys/single-page.html">Distributed systems for fun and profit</a></li>
<li><a href="http://odewahn.github.io/docker-jumpstart/">Docker Jumpstart</a></li>
<li><a href="http://www.lulu.com/shop/http://www.lulu.com/shop/luis-enr%C3%ADquez-a/dynamic-linked-libraries-paradigms-of-the-gpl-license-in-contemporary-software/ebook/product-21419788.html">"DYNAMIC LINKED LIBRARIES": Paradigms of the GPL license in contemporary software</a> - Luis A. Enríquez</li>
<li><a href="http://jpaulmorrison.com/fbp/">Flow based Programming</a></li>
<li><a href="http://openmymind.net/FoundationsOfProgramming.pdf">Foundations of Programming</a> (PDF)</li>
<li><a href="http://gameprogrammingpatterns.com">Game Programming Patterns</a> - Bob Nystrom</li>
<li><a href="http://gettingreal.37signals.com">Getting Real</a></li>
<li><a href="http://www.lulu.com/shop/ed-johnson/hacknot-essays-on-software-development/ebook/product-17544641.html">Hacknot: Essays on Software Development</a> - Ed Johnson</li>
<li><a href="http://bit.ly/hpc12">High-Performance Scientific Computing</a> (class lectures and slides)</li>
<li><a href="http://www.fastchip.net/howcomputerswork/p1.html">How Computers Work</a> - R. Young</li>
<li><a href="http://softwarebyrob.wpengine.netdna-cdn.com/assets/Software_by_Rob%20_How_to_Become_a%20_Programmer_1.0.pdf">How to Become a Programmer</a> (PDF)</li>
<li><a href="http://openbookproject.net/thinkcs/">How to Think Like a Computer Scientist</a> - Peter Wentworth, Jeffrey Elkner, Allen B. Downey, and Chris Meyers</li>
<li><a href="http://www.amibug.com/iamabug/p01.html">I Am A Bug</a></li>
<li><a href="http://homepages.inf.ed.ac.uk/rbf/BOOKS/PHILLIPS/">Image Processing in C: Analyzing and Enhancing Digital Images</a> - Dwayne Phillips</li>
<li><a href="http://florida.theorangegrove.org/og/file/49843a6a-9a9d-4bad-b4d4-d053f9cdf73e/1/InfoTechNetworkedEconomy.pdf">Information Technology and the Networked Economy</a> (PDF)</li>
<li><a href="https://www.gitbook.com/book/scemama/irpf90/details">IRPF90 Fortran code generator</a> - Anthony Scemama</li>
<li><a href="https://pine.fm/LearnToProgram/">Learn to Program</a></li>
<li><a href="https://blog.openshift.com/learning-30-technologies-in-30-days-a-developer-challenge/">Learning 30 Technologies in 30 Days: A Developer Challenge</a> - Shekhar Gulati</li>
<li><a href="http://patterns.dataincubator.org/book/">Linked Data Patterns: A pattern catalogue for modelling, publishing, and consuming Linked Data</a> - Leigh Dodds, Ian Davis</li>
<li><a href="http://worrydream.com/#!/MagicInk">Magic Ink: Information Software and The Graphical Interface</a> - Bret Victor</li>
<li><a href="https://leanpub.com/mobiledevelopersguide">Mobile Developer's Guide to the Galaxy</a></li>
<li><a href="http://www.wisdom.weizmann.ac.il/~harel/reactive_systems.html">Modeling Reactive Systems with Statecharts</a></li>
<li><a href="http://www.digibarn.com/collections/posters/tongues/">Mother Tongues of Computer Languages</a> (PNG)</li>
<li><a href="http://www.cs.cornell.edu/home/kleinber/networks-book/">Networks, Crowds, and Markets: Reasoning About a Highly Connected World</a></li>
<li><a href="http://win.ua.ac.be/~sdemey/">Object-Oriented Reengineering Patterns</a> - Serge Demeyer, Stéphane Ducasse and Oscar Nierstrasz</li>
<li><a href="https://github.com/oreillymedia/open_government">Open Government;Collaboration, Transparency, and Participation in Practice</a></li>
<li><a href="https://www.packtpub.com/packt/offers/free-learning">Packt Publishing: A free book every day</a> - (PDF, ePub, Mobi, Kindle) <em>(account required)</em></li>
<li><a href="https://leanpub.com/PDQ">PDQ: Pretty Darn Quick: An Agile, All-Purpose Methodology</a> - Jeff Franz-Lien</li>
<li><a href="http://www.cse.buffalo.edu/~rapaport/Papers/phics.pdf">Philosophy of Computer Science</a> (PDF)</li>
<li><a href="http://www.libpng.org/pub/png/book/">PNG: The Definitive Guide</a></li>
<li><a href="http://cslibrary.stanford.edu/102/PointersAndMemory.pdf">Pointers And Memory</a> (PDF)</li>
<li><a href="http://ocw.mit.edu/resources/res-6-004-principles-of-computer-system-design-an-introduction-spring-2009/online-textbook/part_ii_open_5_0.pdf">Principles of Computer System Design </a> (PDF)</li>
<li><a href="http://programmersmotivation.com">Programmer's Motivation for Beginners</a></li>
<li><a href="http://unicodebook.readthedocs.org">Programming with Unicode</a></li>
<li><a href="http://www.ethoberon.ethz.ch">Project Oberon</a> (PDF)</li>
<li><a href="https://leanpub.com/manualToAutomatedWithSeleniumIDEAndSahi">Record-Playback Test Automation: Sahi &amp; Selenium IDE: Critical Evaluation of Record-Playback Automation Tools</a> - Shashikant Jagtap</li>
<li><a href="http://www.cl.cam.ac.uk/~rja14/book.html">Security Engineering</a></li>
<li><a href="http://www.smallmemory.com/book.html">Small Memory Software</a></li>
<li><a href="http://commons.oreilly.com/wiki/index.php/SVG_Essentials">SVG Essentials</a></li>
<li><a href="http://ai.stanford.edu/~nilsson/QAI/qai.pdf">The Quest for Artificial Intelligence: A History of Ideas and Achievements</a> - Nils J. Nilsson (PDF)</li>
</ul>

<h4>MOOC</h4>

<ul>
<li><a href="https://www.coursera.org">Coursera</a></li>
<li><a href="https://www.edx.org">edX</a></li>
<li><a href="https://www.futurelearn.com">FutureLearn</a></li>
<li><a href="http://ocw.mit.edu">MIT OCW</a></li>
<li><a href="https://open.hpi.de">openHPI</a></li>
<li><a href="https://courses.platzi.com">Platzi</a></li>
<li><a href="https://www.udacity.com">Udacity</a></li>
</ul>

<h4>Networking</h4>

<ul>
<li><a href="http://chimera.labs.oreilly.com/books/1234000001739">802.11ac: A Survival Guide</a> - Matthew Gast</li>
<li><a href="http://intronetworks.cs.luc.edu">An Introduction to Computer Networks</a> (HTML, PDF, Kindle)</li>
<li><a href="http://ocw.mit.edu/courses/electrical-engineering-and-computer-science/6-02-introduction-to-eecs-ii-digital-communication-systems-fall-2012/readings/">Bits, Signals, and Packets: An Introduction to Digital Communications and Networks</a></li>
<li><a href="http://hintjens.wdfiles.com/local--files/main%3Afiles/cc1pe.pdf">Code Connected vol.1</a> (PDF) (book on ZeroMQ)</li>
<li><a href="http://cnp3book.info.ucl.ac.be/1st/html/index.html">Computer Networking : Principles, Protocols and Practice</a> (HTML, ePub, PDF, Kindle)</li>
<li><a href="http://chimera.labs.oreilly.com/books/1230000000545/index.html">High-Performance Browser Networking</a></li>
<li><a href="https://www.syncfusion.com/resources/techportal/ebooks/http">HTTP Succinctly, Syncfusion</a> (PDF, Kindle) <em>(Just fill the fields with any values)</em></li>
<li><a href="http://daniel.haxx.se/http2/">HTTP2 Explained</a> - Daniel Stenberg</li>
<li><a href="http://www.tcpipguide.com/free/t_toc.htm">The TCP/IP Guide</a></li>
<li><a href="https://web.archive.org/web/20080401000000*/http://www.3com.com/other/pdfs/infra/corpinfo/en_US/501302.pdf">Understanding IP Addressing: Everything you ever wanted to know</a> (PDF)</li>
<li><a href="http://zguide.zeromq.org/page%3Aall">ZeroMQ Guide</a></li>
</ul>

<h4>Open Source Ecosystem</h4>

<ul>
<li><a href="http://datajournalismhandbook.org">Data Journalism Handbook</a></li>
<li><a href="https://archive.org/details/faif-2.0">Free as in Freedom</a> (PDF)</li>
<li><a href="http://shop.fsf.org/product/free-software-free-society-2/">Free Software, Free Society</a></li>
<li><a href="http://public.dhe.ibm.com/software/dw/db2/express-c/wiki/Getting_started_with_open_source_development_p2.pdf">Getting started with Open source development</a> (PDF)</li>
<li><a href="https://opensource.com/resources/ebook/how-get-started-open-source">How to get started with open source</a> (ePub &amp; ODT)</li>
<li><a href="http://dreamsongs.com/IHE/IHE.html">Innovation Happens Elsewhere</a></li>
<li><a href="http://open-advice.org">Open Advice: FOSS: What We Wish We Had Known When We Started</a></li>
<li><a href="http://producingoss.com">Producing Open Source Software</a></li>
<li><a href="http://www.aosabook.org/en/index.html">The Architecture of Open Source Applications: Vol. 1: Elegance, Evolution, and a Few Fearless Hacks; Vol. 2: Structure, Scale, and a Few More Feerless Hacks</a></li>
<li><a href="http://artofcommunityonline.org/Art_of_Community_Second_Edition.pdf">The Art of Community</a> - Jono Bacon (PDF)</li>
<li><a href="http://www.catb.org/esr/writings/cathedral-bazaar/">The Cathedral and the Bazaar</a> - Eric S. Raymond</li>
<li><a href="http://futureoftheinternet.org">The Future of the Internet</a></li>
<li><a href="http://www.theopensourceway.org/book/">The Open Source Way</a></li>
<li><a href="http://cyber.law.harvard.edu/wealth_of_networks/Main_Page">The Wealth of Networks: How Social Production Transforms Markets and Freedom</a> - Yochai Benkler</li>
</ul>

<h4>Operating systems</h4>

<ul>
<li><a href="http://www.bottomupcs.com">Computer Science from the Bottom Up</a></li>
<li><a href="https://github.com/SamyPesse/How-to-Make-a-Computer-Operating-System">How to Make a Computer Operating System (Work in Progress)</a></li>
<li><a href="https://gustavus.edu/mcs/max/os-book/">Operating Systems and Middleware</a> (PDF and LaTeX)</li>
<li><a href="http://pages.cs.wisc.edu/~remzi/OSTEP/">Operating Systems: Three Easy Pieces</a> (PDF)</li>
<li><a href="http://www.nobius.org/~dbg/practical-file-system-design.pdf">Practical File System Design: The Be File System</a> - Dominic Giampaolo (PDF)</li>
<li><a href="http://catb.org/esr/writings/taoup/html/">The Art of Unix Programming</a> - Eric S. Raymond</li>
<li><a href="https://github.com/rumpkernel/book">The Design and Implementation of the Anykernel and Rump Kernels</a> - Antti Kantee</li>
<li><a href="https://littleosbook.github.io">The little book about OS development</a> - Erik Helin, Adam Renberg</li>
<li><a href="http://greenteapress.com/semaphores/">The Little Book of Semaphores</a> - Allen B. Downey</li>
<li><a href="http://www.greenteapress.com/thinkos/index.html">Think OS: A Brief Introduction to Operating Systems</a> - Allen B. Downey (PDF)</li>
<li><a href="http://www.compsci.hunter.cuny.edu/~sweiss/course_materials/unix_lecture_notes.php">UNIX Application and System Programming, lecture notes</a> - Prof. Stewart Weiss (PDF)</li>
<li><a href="https://pdos.csail.mit.edu/6.828/2012/xv6.html">Xv6, a simple Unix-like teaching operating system</a></li>
</ul>

<h4>Parallel Programming</h4>

<ul>
<li><a href="http://cnx.org/contents/bb821554-7f76-44b1-89e7-8a2a759d1347%405.2">High Performance Computing</a> - Charles Severance &amp; Kevin Dowd (PDF, ePUB)</li>
<li><a href="https://computing.llnl.gov/?set=training&amp;page=index">High Performance Computing Training</a> (LLNL materials)</li>
<li><a href="http://bit.ly/hpc12">High-Performance Scientific Computing</a> (class lectures and slides)</li>
<li><a href="http://pages.tacc.utexas.edu/~eijkhout/istc/istc.html">Introduction to High-Performance Scientific Computing</a> - Victor Eijkhout</li>
<li><a href="https://computing.llnl.gov/tutorials/parallel_comp/">Introduction to Parallel Computing</a> - Blaise Barney</li>
<li><a href="https://www.kernel.org/pub/linux/kernel/people/paulmck/perfbook/perfbook.html">Is Parallel Programming Hard, And, If So, What Can You Do About It?</a> - Paul E. McKenney</li>
<li><a href="http://heather.cs.ucdavis.edu/parprocbook">Programming on Parallel Machines; GPU, Multicore, Clusters and More</a> - Norm Matloff</li>
<li><a href="https://www.fixstars.com/en/opencl/book/OpenCLProgrammingBook/contents/">The OpenCL Programming Book</a></li>
</ul>

<h4>Partial Evaluation</h4>

<ul>
<li><a href="http://www.itu.dk/people/sestoft/pebook/">Partial Evaluation and Automatic Program Generation</a> - (PDF) Jones, Gomard and Sestoft</li>
</ul>

<h4>Professional Development</h4>

<ul>
<li><a href="http://chimera.labs.oreilly.com/books/1234000001813/index.html">Apprenticeship Patterns: Guidance for the Aspiring Software Craftsman</a> - David H. Hoover and Adewale Oshineye</li>
<li><a href="http://download.red-gate.com/ebooks/DotNet/Confessions_IT_Manager.zip">Confessions of an IT Manager</a> <em>(RedGate, By Phil Factor)</em></li>
<li><a href="http://download.red-gate.com/ebooks/DJRTD_eBook.pdf">Don't Just Roll the Dice</a> (PDF) <em>(RedGate, By Neil Davidson)</em></li>
<li><a href="https://leanpub.com/dowhatyoulove/read">How to Do What You Love &amp; Earn What You’re Worth as a Programmer</a> <em>(Leanpub, By Reginald Braithwaite)</em></li>
<li><a href="http://mixmastamyk.bitbucket.org/pro_soft_dev/">Professional Software Development For Students</a> - Mike G. Miller</li>
<li><a href="https://leanpub.com/shippingsoftware/read">What I've Learned From Failure</a> <em>(Leanpub, By Reginald Braithwaite)</em></li>
<li><a href="https://leanpub.com/nightowls/read">Why programmers work at night</a> <em>(Leanpub, By Swizec Teller)</em></li>
</ul>

<h4>Programming Paradigms</h4>

<ul>
<li><a href="http://www.cl.cam.ac.uk/teaching/Lectures/funprog-jrh-1996/">Introduction to Functional Programming</a> - J. Harrison</li>
<li><a href="https://www.gitbook.com/book/drboolean/mostly-adequate-guide/details">Mostly Adequate Guide to Functional Programming</a></li>
<li><a href="https://www.cs.kent.ac.uk/people/staff/sjt/TTFP/">Type Theory and Functional Programming</a></li>
</ul>

<h4>Regular Expressions</h4>

<ul>
<li><a href="http://regex.learncodethehardway.org/book/">Learn Regex The Hard Way</a> - Zed. A. Shaw</li>
<li><a href="http://www.rexegg.com">RexEgg</a></li>
<li><a href="http://www.codeproject.com/Articles/9099/The-Minute-Regex-Tutorial">The 30 Minute Regex Tutorial</a> - Jim Hollenhorst</li>
<li><a href="https://leanpub.com/bastards-regexes">The Bastards Book of Regular Expressions: Finding Patterns in Everyday Text</a> - Dan Nguyen</li>
</ul>

<h4>Reverse Engineering</h4>

<ul>
<li><a href="http://bioshacking.blogspot.co.uk/2012/02/bios-disassembly-ninjutsu-uncovered-1st.html">BIOS Disassembly Ninjutsu Uncovered 1st Edition</a> - Darmawan Salihun (PDF)</li>
<li><a href="https://www.nostarch.com/xboxfree/">Hacking the Xbox: An Introduction to Reverse Engineering</a> - Andrew "bunnie" Huang</li>
<li><a href="https://github.com/iosre/iOSAppReverseEngineering">iOS App Reverse Engineering</a> (PDF)</li>
<li><a href="http://beginners.re">Reverse Engineering for Beginners</a> - Dennis Yurichev (PDF)</li>
</ul>

<h4>Security</h4>

<ul>
<li><a href="https://www.crypto101.io">Crypto 101 - Crypto for everyone</a></li>
<li><a href="https://unglue.it/work/141611/">CryptoParty Handbook</a></li>
<li><a href="http://cacr.uwaterloo.ca/hac/index.html">Handbook of Applied Cryptography</a></li>
<li><a href="https://github.com/MHM5000/pass">How to deal with Passwords</a></li>
<li><a href="http://ptgmedia.pearsoncmg.com/images/0131407333/downloads/0131407333.pdf">Intrusion Detection Systems with Snort</a> (PDF)</li>
<li><a href="https://www.feistyduck.com/library/openssl-cookbook/">OpenSSL Cookbook</a></li>
<li><a href="http://www.troyhunt.com/2011/12/free-ebook-owasp-top-10-for-net.html">OWASP Top 10 for .NET Developers</a></li>
<li><a href="http://www.cl.cam.ac.uk/~rja14/book.html">Security Engineering</a></li>
</ul>

<h4>Software Architecture</h4>

<ul>
<li><a href="https://launchschool.com/books/agile_planning">Agile Planning: From Ideas to Story Cards</a> - Launch School</li>
<li><a href="http://www.ics.uci.edu/~fielding/pubs/dissertation/top.htm">Architectural Styles and the Design of Network-based Software Architectures</a> - Roy Thomas Fielding</li>
<li><a href="http://smartbear.com/lp/ebook/collaborator/secrets-of-peer-code-review/">Best Kept Secrets of Peer Code Review</a></li>
<li><a href="http://www.dataorienteddesign.com/dodmain/dodmain.html">Data-Oriented Design</a></li>
<li><a href="http://www.infoq.com/minibooks/domain-driven-design-quickly">Domain Driven Design Quickly</a></li>
<li><a href="http://dslbook.org">DSL Engineering: Designing, Implementing and Using Domain-Specific Languages</a> - Markus Voelter</li>
<li><a href="http://elliottback.com/wp/essential-skills-for-agile-development/">Essential Skills for Agile Development</a></li>
<li><a href="http://www.computer.org/portal/web/swebok">Guide to the Software Engineering Body of Knowledge</a></li>
<li><a href="http://www.htdp.org">How to Design Programs</a></li>
<li><a href="http://mindprod.com/jgloss/unmain.html">How to Write Unmaintainable Code</a></li>
<li><a href="http://www.infoq.com/minibooks/kanban-scrum-minibook">Kanban and Scrum - making the most of both</a></li>
<li><a href="https://leanpub.com/kanbanforskeptics">Kanban for skeptics</a> (Leanpub, by Nick Oostvogels)</li>
<li><a href="http://downloads.nakedobjects.net/resources/Pawson%20thesis.pdf">Naked objects</a> - Richard Pawson (PDF)</li>
<li><a href="https://pages.apigee.com/oauth-big-picture-ebook.html">OAuth - The Big Picture</a></li>
<li><a href="http://scg.unibe.ch/download/oorp/">Object-Oriented Reengineering Patterns</a> - S. Demeyer, S. Ducasse and O. Nierstrasz</li>
<li><a href="https://leanpub.com/Practicing-DDD">Practicing Domain-Driven Design</a> - Scott Millett</li>
<li><a href="http://www.infoq.com/minibooks/scrum-xp-from-the-trenches-2">Scrum and XP from the Trenches</a></li>
<li><a href="http://www.bon-method.com/book_print_a4.pdf">Seamless Object-Oriented Software Architecture</a> (PDF)</li>
<li><a href="http://philip.greenspun.com/seia/">Software Engineering for Internet Applications</a></li>
<li><a href="http://apigee.com/about/blog/technology/announcement-free-ebook-web-api-design">Web API Design</a></li>
<li><a href="https://launchschool.com/books/working_with_apis">Working with Web APIs</a> - Launch School</li>
<li><a href="https://leanpub.com/yourapiisbad">Your API Is Bad</a> <em>(Leanpub, by Paddy Foran)</em></li>
</ul>

<h4>Standards</h4>

<ul>
<li><a href="http://refspecs.linuxfoundation.org/lsb.shtml">Linux Standard Base</a></li>
<li><a href="https://github.com/geoff-codes/posix-standard">UNIX - The POSIX Standard - IEEE Std 1003.1</a></li>
</ul>

<h4>Theoretical Computer Science</h4>

<ul>
<li><a href="http://mfleck.cs.illinois.edu/building-blocks/index.html">Building Blocks for Theoretical Computer Science</a> - Margaret M. Fleck</li>
<li><a href="http://www.tac.mta.ca/tac/reprints/articles/22/tr22.pdf">Category Theory for Computing Science</a> (PDF)</li>
<li><a href="http://homotopytypetheory.org/book/">Homotopy Type Theory: Univalent Foundations of Mathematics</a> (PDF)</li>
<li><a href="http://www.cse.iitd.ernet.in/~suban/CSL102/">Introduction to Computer Science</a> - Prof. Subhashis Banerjee, IIT Delhi</li>
<li><a href="http://www.computingbook.org">Introduction to Computing</a></li>
<li><a href="http://cglab.ca/~michiel/TheoryOfComputation/">Introduction to Theory of Computation</a> - Anil Maheshwari and Michiel Smid (PDF)</li>
<li><a href="http://cs.brown.edu/people/jes/book/">Models of Computation</a> - John E. Savage</li>
<li><a href="http://www.cs.cmu.edu/~rwh/plbook/book.pdf">Practical Foundations for Programming Languages, Preview</a> - Robert Harper (PDF)</li>
<li><a href="https://web.archive.org/web/20150418034451/http://www.cs.jhu.edu/~scott/pl/book/dist/">Principles of Programming Languages</a> - Scott F. Smith</li>
<li><a href="http://papl.cs.brown.edu/2014/index.html">Programming and Programming Languages</a> - Shriram Krishnamurthi</li>
<li><a href="http://www.cse.chalmers.se/research/group/logic/book/">Programming in Martin-Löf's Type Theory</a> - Bengt Nordstroem</li>
<li><a href="http://cs.brown.edu/~sk/Publications/Books/ProgLangs/">Programming Languages: Application and Interpretation (2nd Edition)</a></li>
<li><a href="http://www.daimi.au.dk/~bra8130/Wiley_book/wiley.html">Semantics with Applications: A Formal Introduction</a> - Hanne Riis Nielson, Flemming Nielson</li>
<li><a href="https://mitpress.mit.edu/sicp/">Structure and Interpretation of Computer Programs</a></li>
<li><a href="http://sarabander.github.io/sicp/html/index.xhtml">Structure and Interpretation of Computer Programs</a></li>
<li><a href="http://www.greenteapress.com/compmod/">Think Complexity</a> - Allen B. Downey</li>
</ul>

<h4>Web Performance</h4>

<ul>
<li><a href="http://www.bookofspeed.com">Book of Speed</a> - Stoyan Stefanov</li>
<li><a href="http://chimera.labs.oreilly.com/books/1230000000545/index.html">High Performance Browser Networking</a> - Ilya Grigorik</li>
<li><a href="http://carlos.bueno.org/optimization/mature-optimization.pdf">Mature Optimization</a> - Carlos Bueno (PDF)</li>
</ul>

<h3>Ada</h3>

<ul>
<li><a href="http://www.cs.uni.edu/~mccormic/4740/guide-c2ada.pdf">A Guide to Ada for C and C++ Programmers</a> (PDF)</li>
<li><a href="http://www.adapower.com/pdfs/AdaDistilled07-27-2003.pdf">Ada Distilled</a> (PDF)</li>
<li><a href="https://en.wikibooks.org/wiki/Ada_Programming">Ada Programming</a></li>
<li><a href="http://www.ada-auth.org/standards/12rm/RM-Final.pdf">Ada Reference Manual - ISO/IEC 8652:2012(E) Language and Standard Libraries</a> (PDF)</li>
<li><a href="http://www.pegasoft.ca/resources/boblap/book.html">The Big Online Book of Linux Ada Programming</a></li>
</ul>

<h3>Agda</h3>

<ul>
<li><a href="http://people.inf.elte.hu/divip/AgdaTutorial/Index.html">Agda Tutorial</a></li>
</ul>

<h3>Alef</h3>

<ul>
<li><a href="http://doc.cat-v.org/plan_9/2nd_edition/papers/alef/ref">Alef Language Reference Manual</a></li>
</ul>

<h3>Android</h3>

<ul>
<li><a href="https://www.agiledroid.com">Agile Android Software Development</a> - Etienne Savard (PDF, epub, mobi)</li>
<li><a href="http://www.techotopia.com/index.php/Android_4_App_Development_Essentials">Android 4 App Development Essentials</a></li>
<li><a href="http://eduonix.com/offers/Android_ebook_free_offer.html">Android Programming Guide for Beginners</a> (PDF - need email confirmation)</li>
<li><a href="https://www.syncfusion.com/resources/techportal/ebooks/android">Android Programming Succinctly, Syncfusion</a> (<a href="https://www.syncfusion.com/Account/Logon?ReturnUrl=%2fresources%2ftechportal%2febooks%2fandroid">PDF</a>, <a href="https://www.syncfusion.com/Account/Logon?ReturnUrl=%2fresources%2ftechportal%2febooks%2fandroid">Kindle</a>) <em>(Just fill the fields with any values)</em></li>
<li><a href="https://github.com/codepath/android_guides/wiki">CodePath Android Cliffnotes</a></li>
<li><a href="http://www.coreservlets.com/android-tutorial/">Coreservlets Android Programming Tutorial</a></li>
<li><a href="http://www.vogella.com/tutorials/android.html">Expert Android and Eclipse development knowledge</a></li>
<li><a href="https://developer.android.com/training/index.html">Google Android Developer Training</a></li>
<li><a href="https://blog.stylingandroid.com">Styling Android</a></li>
<li><a href="https://commonsware.com/Android/4-2-free">The Busy Coder's Guide to Android Development</a> (PDF - older versions)</li>
<li><a href="http://www.tutorialspoint.com/android/android_tutorial.pdf">Tutorial Point Android Tutorial</a> (PDF)</li>
</ul>

<h3>APL</h3>

<ul>
<li><a href="http://aplwiki.com/BooksAndPublications#A_Practical_Introduction_to_APL1_.26_APL2">A Practical Introduction to APL1 &amp; APL2</a></li>
<li><a href="http://aplwiki.com/BooksAndPublications#A_Practical_Introduction_to_APL3_.26_APL4">A Practical Introduction to APL3 &amp; APL4</a></li>
<li><a href="http://www.dyalog.com/mastering-dyalog-apl.htm">Mastering Dyalog APL</a> (PDF)</li>
</ul>

<h3>Arduino</h3>

<ul>
<li><a href="http://www.lulu.com/shop/brian-evans/arduino-programming-notebook/ebook/product-18598708.html">Arduino Programming Notebook</a> - Brian Evans</li>
<li><a href="http://playground.arduino.cc/Main/ManualsAndCurriculum">Introduction to Arduino</a></li>
<li><a href="http://www.introtoarduino.com">Introduction to Arduino : A piece of cake!</a> - Alan G. Smith</li>
</ul>

<h3>ASP.NET MVC</h3>

<ul>
<li><a href="http://mvcmusicstore.codeplex.com">ASP.NET MVC Music Store</a></li>
</ul>

<h3>Assembly Language</h3>

<ul>
<li><a href="https://github.com/dennis714/RE-for-beginners">An introduction to reverse engineering for beginners</a></li>
<li><a href="https://www.syncfusion.com/resources/techportal/details/ebooks/assemblylanguage">Assembly Language Succinctly</a> (PDF)</li>
<li><a href="http://drpaulcarter.com/pcasm/">PC Assembly Language</a> - P. A. Carter</li>
<li><a href="http://blog.hit.edu.cn/jsx/upload/AT%EF%BC%86TAssemblyLanguage.pdf">Professional Assembly Language</a> (PDF)</li>
<li><a href="http://mirror.unicorncloud.org/savannah-nongnu//pgubook/ProgrammingGroundUp-1-0-booksize.pdf">Programming from the Ground Up</a> (PDF)</li>
<li><a href="http://www.ctyme.com/rbrown.htm">Ralf Brown's Interrupt List</a></li>
<li><a href="http://www.agner.org/optimize/">Software optimization resources</a> A. Fog</li>
<li><a href="https://courses.engr.illinois.edu/ece390/books/artofasm/artofasm.html">The Art of Assembly Language Programming</a></li>
<li><a href="http://www.atariarchives.org/2bml/">The Second Book Of Machine Language</a></li>
<li><a href="http://vendu.twodots.nl/wizardcode.html">Wizard Code</a></li>
<li><a href="https://en.wikibooks.org/wiki/X86_Assembly">x86 Assembly</a></li>
</ul>

<h4>Non-X86</h4>

<ul>
<li><a href="http://skilldrick.github.io/easy6502/">Easy 6502</a> - Nick Morgan</li>
<li><a href="http://www.worldofspectrum.org/infoseekid.cgi?id=2000227">Machine Code for Beginners [Z80 and 6502 CPUs]</a> - Lisa Watts and Mike Wharton (PDF)</li>
<li><a href="https://archive.org/details/ataribooks-machine-language-for-beginners">Machine Language for Beginners</a> - Richard Mansfield [6502 CPU]</li>
<li><a href="http://chortle.ccsu.edu/AssemblyTutorial/index.html">Programmed Introduction to MIPS Assembly Language</a></li>
</ul>

<h3>AutoHotkey</h3>

<ul>
<li><a href="http://ahkscript.github.io/ahkbook/index.html">AHKbook - the book for AutoHotkey</a></li>
<li><a href="https://autohotkey.com/docs/AutoHotkey.htm">AutoHotkey Official Documentation</a> (<a href="https://autohotkey.com/download/1.1/AutoHotkeyHelp.zip">CHM</a>)</li>
</ul>

<h3>Autotools</h3>

<ul>
<li><a href="https://autotools.io/index.html">Autotools Mythbuster</a></li>
<li><a href="http://sourceware.org/autobook/">GNU Autoconf, Automake and Libtool</a></li>
</ul>

<h3>Awk</h3>

<ul>
<li><a href="http://www.math.utah.edu/docs/info/gawk_toc.html">A User's Guide for GNU AWK</a></li>
<li><a href="https://en.wikibooks.org/wiki/An_Awk_Primer">An Awk Primer</a></li>
<li><a href="http://www.grymoire.com/Unix/Awk.html">Awk</a> - Bruce Barnett</li>
</ul>

<h3>Bash</h3>

<ul>
<li><a href="http://tldp.org/LDP/abs/html/">Advanced Bash-Scripting Guide</a> - M. Cooper</li>
<li><a href="http://www.tldp.org/LDP/Bash-Beginners-Guide/html/">Bash Guide for Beginners</a> - M. Garrels</li>
<li><a href="http://tldp.org/HOWTO/Bash-Prog-Intro-HOWTO.html">BASH Programming</a></li>
<li><a href="http://www.gnu.org/software/bash/manual/bashref.html">Bash Reference Manual</a></li>
<li><a href="http://mywiki.wooledge.org/BashGuide">BashGuide</a></li>
<li><a href="http://conqueringthecommandline.com/book/frontmatter">Conquering the Command Line</a> - Mark Bates</li>
<li><a href="http://www.hypexr.org/bash_tutorial.php">Getting Started with BASH</a></li>
<li><a href="http://google-styleguide.googlecode.com/svn/trunk/shell.xml">Google Shell Style Guide</a></li>
<li><a href="https://launchschool.com/books/command_line">Introduction to the Command Line</a> - Launch School</li>
<li><a href="http://linux-training.be/linuxfun.pdf">Linux Fundamentals</a> - Paul Cobbaut (PDF)</li>
<li><a href="http://www.freeos.com/guides/lsst/">Linux Shell Scripting Tutorial - A Beginner's Handbook</a></li>
<li><a href="http://www.bash.academy">The Bash Academy</a></li>
<li><a href="http://learncodethehardway.org/cli/book/">The Command Line Crash Course</a> Z. A. Shaw</li>
<li><a href="http://linuxcommand.org/lc3_writing_shell_scripts.php">Writing Shell Scripts</a> - William E. Shotts, Jr.</li>
</ul>

<h3>Basic</h3>

<ul>
<li><a href="http://10print.org">10 PRINT CHR$(205.5+RND(1)); : GOTO 10</a> - Nick Montfort, Patsy Baudoin, John Bell,Ian Bogost, Jeremy Douglass, Mark C. Marino, Michael Mateas, Casey Reas, Mark Sample, Noah Vawter</li>
<li><a href="http://beginnersguidetogambas.com">A beginner's guide to Gambas</a></li>
<li><a href="https://en.wikibooks.org/wiki/Category%3ABASIC_programming_language">BASIC programming language - Wikibooks</a></li>
<li><a href="http://howtogambas.org/index.php?page=cedi">How To Gambas3 Guides</a></li>
<li><a href="http://www.jes.com/pb/">Pick/Basic: A Programmer's Guide</a> - Jonathan E. Sisk</li>
<li><a href="http://www.techotopia.com/index.php/Visual_Basic_Essentials">Visual Basic Essentials</a></li>
</ul>

<h3>BETA</h3>

<ul>
<li><a href="http://www.daimi.au.dk/~beta/Books/">Object-Oriented Programming in the BETA Programming Language</a> - Ole Lehrmann Madsen, Birger Møller-Pedersen, Kristen Nygaard</li>
</ul>

<h3>C</h3>

<ul>
<li><a href="http://home.netcom.com/~tjensen/ptr/pointers.htm">A Tutorial on Pointers and Arrays in C</a></li>
<li><a href="http://beej.us/guide/bgc/">Beej's Guide to C Programming</a> - B. Hall</li>
<li><a href="http://beej.us/guide/bgnet/">Beej's Guide to Network Programming - Using Internet Sockets</a> - B. Hall</li>
<li><a href="http://www.buildyourownlisp.com">Build Your Own Lisp</a></li>
<li><a href="https://en.wikibooks.org/wiki/Programming%3AC">C Programming</a> - Wikibooks</li>
<li><a href="http://www.slideshare.net/olvemaudal/deep-c">Deep C</a></li>
<li><a href="http://cslibrary.stanford.edu/101/EssentialC.pdf">Essential C</a> (PDF)</li>
<li><a href="http://c.learncodethehardway.org/book/">Learn C The Hard Way</a></li>
<li><a href="http://icube-icps.unistra.fr/img_auth.php/d/db/ModernC.pdf">Modern C</a> (PDF)</li>
<li><a href="http://www.planetpdf.com/codecuts/pdfs/ooc.pdf">Object-Oriented Programming With ANSI-C</a> (PDF)</li>
<li><a href="http://ee.hawaii.edu/~tep/EE160/Book/PDF/">Programming in C</a> - Bharat Kinariwala &amp; Tep Dobry</li>
<li><a href="http://publications.gbdirect.co.uk/c_book/">The C book</a></li>
<li><a href="http://www.finseth.com/craft/">The Craft of Text Editing or A Cookbook for an Emacs</a> - Craig A. Finseth</li>
<li><a href="http://www.crasseux.com/books/ctut.pdf">The GNU C Programming Tutorial</a> (PDF)</li>
<li><a href="http://littleosbook.github.io">The little book about OS development</a> - Erik Helin, Adam Renberg</li>
<li><a href="http://www.knosof.co.uk/cbook/cbook.html">The New C Standard - An Annotated Reference</a></li>
<li><a href="http://www.coranac.com/tonc/text/toc.htm">TONC GBA Programming - Game Boy Advance Development</a></li>
<li><a href="http://www.bitsinthewind.com/about-dac/publications/using-c-on-the-unix-system">Using C on the UNIX System</a> - David A. Curry</li>
</ul>

<h3>C Sharp</h3>

<ul>
<li><a href="http://www.ghielectronics.com/downloads/FEZ/Beginners%20guide%20to%20NETMF.pdf">Beginners Guide to C# and the.NET Micro Framework</a> (PDF)</li>
<li><a href="http://www.techotopia.com/index.php/C_Sharp_Essentials">C# Essentials</a></li>
<li><a href="https://en.wikibooks.org/wiki/C_Sharp_Programming">C# Programming - Wikibook</a></li>
<li><a href="http://www.csharpcourse.com">C# Yellow Book</a> (intro to programming)</li>
<li><a href="https://developer.xamarin.com/guides/xamarin-forms/creating-mobile-apps-xamarin-forms/">Creating Mobile Apps with Xamarin.Forms C#</a></li>
<li><a href="http://www.brpreiss.com/books/opus6/">Data Structures and Algorithms with Object-Oriented Design Patterns in C#</a></li>
<li><a href="https://damieng.com/blog/2007/11/08/dissecting-a-c-application-inside-sharpdevelop">Dissecting a C# Application</a> - Christian Holm, Bernhard Spuida, Mike Kruger</li>
<li><a href="http://www.introprogramming.info/english-intro-csharp-book/read-online/">Fundamentals of Computer Programming with C#</a> - Svetlin Nakov</li>
<li><a href="http://www.introtorx.com">Introduction to Rx</a></li>
<li><a href="http://www.albahari.com/threading/">Threading in C#</a></li>
</ul>

<h3>C++</h3>

<ul>
<li><a href="https://fbb-git.github.io/cppannotations/">C++ Annotations</a></li>
<li><a href="http://staff.ppu.edu/dkhalid/O'Reilly%20-%20C++%20Cookbook%20%282007%29.pdf">C++ Cookbook</a> (PDF)</li>
<li><a href="http://www.computer-books.us/cpp_0010.php">C++ GUI Programming With Qt 3</a></li>
<li><a href="https://www.syncfusion.com/resources/techportal/ebooks/cplusplus">C++ Succinctly, Syncfusion</a> (PDF, Kindle) <em>(Just fill the fields with any values)</em></li>
<li><a href="http://www.bordoon.com/cplusplus/book_wrapper.html">C++ Tricks</a></li>
<li><a href="http://web.stanford.edu/class/cs106x/">CS106X Programming Abstractions in C++</a></li>
<li><a href="http://finance.bi.no/~bernt/gcc_prog/recipes/">Financial Numerical Recipes in C++</a> - Bernt Arne Ødegaard</li>
<li><a href="http://gameprogrammingpatterns.com">Game Programming Patterns</a></li>
<li><a href="https://google.github.io/styleguide/cppguide.html">Google's C++ Style Guide</a></li>
<li><a href="http://greenteapress.com/thinkcpp/index.html">How To Think Like a Computer Scientist: C++ Version</a> - Allen B. Downey</li>
<li><a href="http://ptgmedia.pearsoncmg.com/images/9780131879058/downloads/0131879057_Ezust_book.pdf">Introduction to Design Patterns in C++ with Qt</a> (PDF)</li>
<li><a href="http://www.stroustrup.com/JSF-AV-rules.pdf">Joint Strike Fighter, C++ Coding Standards, by Bjarne Stroustrup</a> (PDF)</li>
<li><a href="http://www.learncpp.com">Learn C++.</a> (PDF, Online)</li>
<li><a href="http://www.jjj.de/fxt/fxtbook.pdf">Matters Computational: Ideas, Algorithms, Source Code, by Jorg Arndt</a> (PDF)</li>
<li><a href="http://opendatastructures.org/ods-cpp.pdf">Open Data Structures (In C++)</a> (PDF)</li>
<li><a href="http://cis.stvincent.edu/html/tutorials/swd/">Software Design Using C++</a> - Br. David Carlson and Br. Isidore Minerd</li>
<li><a href="http://www.agner.org/optimize/">Software optimization resources by Agner Fog</a></li>
<li><a href="http://theboostcpplibraries.com">The Boost C++ libraries</a></li>
<li><a href="http://rooksguide.org/2013/11/26/version-1-0-is-out/">The Rook's Guide to C++</a> (PDF)</li>
<li><a href="https://www.gitbook.com/book/alexastva/the-ultimate-question-of-programming-refactoring-/details">The Ultimate Question of Programming, Refactoring, and Everything</a></li>
<li><a href="http://www.mindviewinc.com/downloads/TICPP-2nd-ed-Vol-one.zip">Thinking in C++, Second Edition, Vol. 1.</a> - Bruce Eckel <a href="http://www.mindviewinc.com/downloads/TICPP-2nd-ed-Vol-two.zip">(Vol. 2)</a> (ZIP)</li>
</ul>

<h3>Chapel</h3>

<ul>
<li><a href="http://faculty.knox.edu/dbunde/teaching/chapel/">Chapel Tutorial</a></li>
<li><a href="http://cs.colby.edu/kgburke/?resource=chapelTutorial">Chapel Tutorial for Programmers</a></li>
</ul>

<h3>Cilk</h3>

<ul>
<li><a href="http://supertech.csail.mit.edu/cilk/manual-5.4.6.pdf">Cilk 5.4.6 Reference Manual</a> (PDF)</li>
</ul>

<h3>Clojure</h3>

<ul>
<li><a href="http://www.unexpected-vortices.com/clojure/brief-beginners-guide/">A Brief Beginner’s Guide To Clojure</a></li>
<li><a href="http://java.ociweb.com/mark/clojure/article.html">Clojure - Functional Programming for the JVM</a> - R. Mark Volkmann</li>
<li><a href="http://clojure.org/cheatsheet">Clojure Cheat Sheet</a></li>
<li><a href="https://github.com/clojure-cookbook/clojure-cookbook">Clojure Cookbook</a></li>
<li><a href="http://yogthos.github.io/ClojureDistilled.html">Clojure Distilled Beginner Guide</a></li>
<li><a href="http://www.braveclojure.com">Clojure for the Brave and True</a></li>
<li><a href="http://daly.axiom-developer.org/clojure.pdf">Clojure in Small Pieces</a> - Rich Hickey (PDF)</li>
<li><a href="http://clojurekoans.com">Clojure Koans</a></li>
<li><a href="https://en.wikibooks.org/wiki/Clojure_Programming">Clojure Programming</a></li>
<li><a href="http://clojurescriptkoans.com">ClojureScript Koans</a></li>
<li><a href="http://data-sorcery.org/contents/">Data Sorcery with Clojure</a></li>
<li><a href="https://github.com/magomimmo/modern-cljs">Modern cljs</a></li>
<li><a href="http://www.sicpdistilled.com">SICP Distilled - An idiosyncratic tour of SICP in Clojure</a></li>
<li><a href="https://github.com/bbatsov/clojure-style-guide">The Clojure Style Guide</a></li>
</ul>

<h3>COBOL</h3>

<ul>
<li><a href="http://yusman.staff.gunadarma.ac.id/Downloads/files/33460/COBOL_Programming_Fundamental.pdf">COBOL Programming Fundamental</a> (PDF)</li>
<li><a href="http://www-01.ibm.com/support/docview.wss?uid=swg27036733">Enterprise COBOL for z/OS documentation library</a></li>
<li><a href="http://www-03.ibm.com/systems/z/education/skills_coursematerials.html#COBOL">Introduction to the COBOL Language</a></li>
<li><a href="http://opencobol.add1tocobol.com/OpenCOBOL%20Programmers%20Guide.pdf">OpenCOBOL 1.1 - Programmer's Guide</a> (PDF)</li>
</ul>

<h3>CoffeeScript</h3>

<ul>
<li><a href="https://coffeescript-cookbook.github.io">CoffeeScript Cookbook</a></li>
<li><a href="https://leanpub.com/coffeescript-ristretto/read">CoffeeScript Ristretto</a> - Reginald Braithwaite</li>
<li><a href="http://hardrockcoffeescript.org">Hard Rock CoffeeScript</a></li>
<li><a href="http://autotelicum.github.io/Smooth-CoffeeScript/SmoothCoffeeScript.html">Smooth CoffeeScript</a></li>
<li><a href="http://arcturo.github.io/library/coffeescript/">The Little Book on CoffeeScript</a></li>
</ul>

<h3>ColdFusion</h3>

<ul>
<li><a href="https://github.com/mhenke/CFML-in-100-minutes/blob/master/cfml100mins.markdown">CFML In 100 Minutes</a> - J. Casimir</li>
<li><a href="http://learncfinaweek.com">Learn CF in a Week</a></li>
</ul>

<h3>Cool</h3>

<ul>
<li><a href="https://www.eecis.udel.edu/~cavazos/cisc672/docs/cool-manual.pdf">CoolAid: The Cool 2013 Reference Manual</a> (PDF)</li>
</ul>

<h3>Coq</h3>

<ul>
<li><a href="http://adam.chlipala.net/cpdt/html/toc.html">Certified Programming with Dependent Types</a></li>
<li><a href="http://www.cis.upenn.edu/~bcpierce/sf/">Software Foundations</a></li>
</ul>

<h3>CUDA</h3>

<ul>
<li><a href="http://www.nvidia.com/content/cudazone/download/OpenCL/NVIDIA_OpenCL_ProgrammingGuide.pdf">OpenCL Programming Guide for CUDA Architecture</a> (PDF)</li>
</ul>

<h3>D</h3>

<ul>
<li><a href="https://github.com/PhilippeSigaud/D-templates-tutorial">D Templates Tutorial</a></li>
<li><a href="http://ddili.org/ders/d.en/">Programming in D</a></li>
</ul>

<h3>Dart</h3>

<ul>
<li><a href="http://shop.oreilly.com/product/0636920025887.do">What is Dart?</a></li>
</ul>

<h3>DB2</h3>

<ul>
<li><a href="http://public.dhe.ibm.com/software/dw/db2/express-c/wiki/Getting_Started_with_DB2_Express_v9.7_p4.pdf">Getting started with DB2 Express-C</a> (PDF)</li>
<li><a href="http://public.dhe.ibm.com/software/dw/db2/express-c/wiki/Getting_Started_with_IBM_Data_Studio_for_DB2_p3.pdf">Getting started with IBM Data Studio for DB2</a> (PDF)</li>
<li><a href="http://public.dhe.ibm.com/software/dw/db2/express-c/wiki/Getting_Started_with_DB2_App_Dev_p2.pdf">Getting started with IBM DB2 development</a> (PDF)</li>
</ul>

<h3>Delphi / Pascal</h3>

<ul>
<li><a href="http://www.marcocantu.com/epascal/">Essential Pascal Version 1 and 2</a> - M. Cantù</li>
<li><a href="http://ftp.icm.edu.pl/packages/fpc/docs-pdf/ref.pdf">Free Pascal: Reference guide</a> (PDF)</li>
</ul>

<h3>DTrace</h3>

<ul>
<li><a href="http://dtrace.org/guide/preface.html">IllumOS Dynamic Tracing Guide</a></li>
</ul>

<h3>Elasticsearch</h3>

<ul>
<li><a href="https://www.elastic.co/guide/en/elasticsearch/guide/current/index.html">Elasticsearch: The Definitive Guide</a> (<a href="https://github.com/elastic/elasticsearch-definitive-guide">fork it on GH</a>)</li>
<li><a href="http://exploringelasticsearch.com">Exploring Elasticsearch</a></li>
</ul>

<h3>Elixir</h3>

<ul>
<li><a href="https://github.com/seven1m/30-days-of-elixir">30 Days of Elixir</a> - Tim Morgan (HTML)</li>
<li><a href="https://elixirschool.com">Elixir School</a> (HTML)</li>
<li><a href="http://chimera.labs.oreilly.com/books/1234000001642/index.html">Études for Elixir</a> (HTML)</li>
<li><a href="http://elixir-lang.org/getting-started/introduction.html">Getting Started Guide</a> (HTML)</li>
<li><a href="http://learningelixir.joekain.com">Learning Elixir</a> - Joseph Kain Blog (HTML)</li>
</ul>

<h3>Emacs</h3>

<ul>
<li><a href="https://www.gnu.org/software/emacs/manual/html_node/eintr/index.html">An Introduction to Programming in Emacs Lisp, 3rd Edition</a></li>
<li><a href="http://www.gnu.org/software/emacs/manual/elisp.html">GNU Emacs Lisp Reference Manual</a></li>
<li><a href="http://shop.fsf.org/product/Emacs_Manual_24/">GNU Emacs Manual, 17th Edition, v. 24.2</a></li>
</ul>

<h3>Embedded Systems</h3>

<ul>
<li><a href="http://www.learn-c.com">Control and Embedded Systems</a> (HTML)</li>
<li><a href="http://www.cs.indiana.edu/~geobrown/book.pdf">Discovering the STM32 Microcontroller</a> (PDF)</li>
<li><a href="http://www.embeddedrelated.com/showarticle/453.php">Introduction to Microcontrollers</a> (HTML)</li>
</ul>

<h3>Erlang</h3>

<ul>
<li><a href="http://www.erlang.org/download/erlang-book-part1.pdf">Concurrent Programming in ERLANG</a> (PDF)</li>
<li><a href="https://github.com/esl/erlang-handbook/raw/master/output/ErlangHandbook.pdf">Erlang Handbook</a> (PDF)</li>
<li><a href="https://en.wikibooks.org/wiki/Erlang_Programming">Erlang Programming</a> (HTML)</li>
<li><a href="http://chimera.labs.oreilly.com/books/1234000000726/index.html">Études for Erlang</a> - J. David Eisenberg</li>
<li><a href="http://www.erlang.org/doc/getting_started/users_guide.html">Getting Started with Erlang User's Guide</a> (HTML)</li>
<li><a href="http://learnyousomeerlang.com">Learn You Some Erlang For Great Good</a> - Frederic Trottier-Hebert</li>
<li><a href="http://www.erlang.org/download/armstrong_thesis_2003.pdf">Making reliable distributed systems in the presence of software errors</a> - Joe Armstrong (PDF)</li>
<li><a href="https://s3.amazonaws.com/erlang-in-anger/text.v1.0.3.pdf">Stuff Goes Bad: Erlang in Anger</a> - Fred Herbert (PDF)</li>
</ul>

<h3>F Sharp</h3>

<ul>
<li><a href="https://en.wikibooks.org/wiki/F_Sharp_Programming">F# Programming</a> in Wikibooks</li>
<li><a href="https://www.syncfusion.com/resources/techportal/ebooks/fsharp">F# Succinctly, SyncFusion</a> (PDF, Kindle) <em>(Just fill the fields with any values)</em></li>
<li><a href="http://www.itu.dk/courses/BPRD/E2009/plcsd-1-2.pdf">Programming Language Concepts for Software Developers</a> (PDF)</li>
<li><a href="https://msdn.microsoft.com/en-us/library/hh314518.aspx">Real World Functional Programming</a> (MSDN Chapters)</li>
</ul>

<h3>Firefox OS</h3>

<ul>
<li><a href="https://leanpub.com/quickguidefirefoxosdevelopment">Quick Guide For Firefox OS App Development: Creating HTML5 based apps for Firefox OS</a> - Andre Garzia</li>
</ul>

<h3>Force.com</h3>

<ul>
<li><a href="http://developer.force.com/workbook">Developer Workbooks</a></li>
<li><a href="https://developer.salesforce.com/page/Force_Platform_Fundamentals">Force.com Fundamentals</a></li>
<li><a href="http://www.lulu.com/shop/salesforcecom/forcecom-platform-fundamentals/ebook/product-17381451.html">Force.com Platform Fundamentals: An Introduction to Custom Application Development in the Cloud</a></li>
<li><a href="https://web.archive.org/web/20131209081736/http://media.developerforce.com/workbooks/HerokuPostgres_Workbooks_Web_Final.pdf">Heroku Postgres</a> (PDF)</li>
</ul>

<h3>Forth</h3>

<ul>
<li><a href="http://hackershelf.com/book/482/a-beginners-guide-to-forth/">A Beginner's Guide to Forth</a></li>
<li><a href="http://ficl.sourceforge.net/pdf/Forth_Primer.pdf">And so Forth...</a> (PDF)</li>
<li><a href="http://www.mpeforth.com/arena/ProgramForth.pdf">Programming Forth</a> (PDF)</li>
<li><a href="http://home.iae.nl/users/mhx/sf.html">Starting Forth</a></li>
<li><a href="http://thinking-forth.sourceforge.net">Thinking Forth</a></li>
<li><a href="http://www.ultratechnology.com/forth.htm">Thoughtful Programming and Forth</a></li>
</ul>

<h3>Fortran</h3>

<ul>
<li><a href="https://en.wikibooks.org/wiki/Category%3AFortran_programming_language">Fortran programming language - Wikibooks</a></li>
<li><a href="http://people.cs.vt.edu/~asandu/Deposit/Fortran95_notes.pdf">Introduction to fortran 95 and numerical computing: a jump-start for scientists and engineers</a> (PDF)</li>
<li><a href="http://www.mrao.cam.ac.uk/~rachael/compphys/SelfStudyF95.pdf">Self Study Guide: Programming in Fortran 95</a> (PDF)</li>
</ul>

<h3>FreeBSD</h3>

<ul>
<li><a href="http://www.freebsd.org/docs/books.html">Books and Articles from FreeBSD Site</a></li>
<li><a href="http://www.lemis.com/grog/Documentation/CFBSD/">The Complete FreeBSD</a></li>
</ul>

<h3>Git</h3>

<ul>
<li><a href="http://marc.helbling.fr/2014/09/practical-git-introduction">A practical git introduction</a></li>
<li><a href="http://marklodato.github.io/visual-git-guide/index-en.html">A Visual Git Reference</a> - Mark Lodato</li>
<li><a href="http://blog.anvard.org/conversational-git/">Conversational Git</a></li>
<li><a href="http://rogerdudler.github.io/git-guide/">git - the simple guide</a></li>
<li><a href="http://eagain.net/articles/git-for-computer-scientists/">Git for Computer Scientists</a></li>
<li><a href="https://jwiegley.github.io/git-from-the-bottom-up/">Git From The Bottom Up</a> - J. Wiegley</li>
<li><a href="http://gitimmersion.com">Git Immersion</a></li>
<li><a href="http://cbx33.github.io/gitt/index.html">Git In The Trenches</a></li>
<li><a href="https://github.com/pluralsight/git-internals-pdf/raw/master/drafts/peepcode-git.pdf">Git internals</a> - Scott Chacon (PDF)</li>
<li><a href="http://www-cs-students.stanford.edu/~blynn/gitmagic/">Git Magic</a></li>
<li><a href="http://chimera.labs.oreilly.com/books/1230000000561/index.html">Git Pocket Guide</a> - Richard E. Silverman</li>
<li><a href="http://gitref.org">Git Reference</a></li>
<li><a href="https://www.syncfusion.com/resources/techportal/ebooks/git">Git Succinctly, Syncfusion</a> (PDF, Kindle) <em>(Just fill the fields with any values)</em></li>
<li><a href="http://documentup.com/skwp/git-workflows-book">Git Workflows</a></li>
<li><a href="https://github.com/tiimgreen/github-cheat-sheet">GitHub Cheat Sheet</a> - Tim Green (Markdown)</li>
<li><a href="https://launchschool.com/books/git">Intoduction to Git and Github</a> - Launch School</li>
<li><a href="https://www.learnenough.com/git-tutorial">Learn Enough Git to be Dangerous</a> - Michael Hartl</li>
<li><a href="http://www.git-tower.com/learn/git/ebook/command-line/introduction">Learn Git - Learn Version Control with Git</a> - Tobias Günther</li>
<li><a href="http://git-scm.com/book/en/v2">Pro Git</a> - Scott Chacon</li>
<li><a href="https://leanpub.com/progitreedited">Pro Git Reedited</a> - Jon Forrest</li>
<li><a href="http://think-like-a-git.net">Think Like (a) Git: A Guide for the Perplexed</a></li>
<li><a href="http://ericsink.com/vcbe/">Version Control by Example (Mercurial, Subversion, Verasity)</a></li>
</ul>

<h3>Go</h3>

<ul>
<li><a href="http://www.golang-book.com">An Introduction to Programming in Go</a></li>
<li><a href="https://astaxie.gitbooks.io/build-web-application-with-golang/content/en/">Build Web Application with Golang</a></li>
<li><a href="https://codegangsta.gitbooks.io/building-web-apps-with-go/content/">Building Web Apps with Go</a></li>
<li><a href="https://golang.org/doc/effective_go.html">Effective Go</a></li>
<li><a href="http://www.golangbootcamp.com/book">Go Bootcamp</a> - Matt Aimonetti</li>
<li><a href="https://gobyexample.com">Go by Example</a></li>
<li><a href="https://miek.nl/go/">Learning Go</a></li>
<li><a href="http://go-book.appspot.com">Let's learn Go!</a></li>
<li><a href="https://jan.newmarch.name/go/">Network programming with Go</a></li>
<li><a href="https://leanpub.com/gocrypto/read">Practical Cryptography With Go</a></li>
<li><a href="http://tour.golang.org">The Go Tutorial</a></li>
<li><a href="https://github.com/karlseguin/the-little-go-book">The Little Go Book</a></li>
</ul>

<h3>Groovy</h3>

<h4>Gradle</h4>

<ul>
<li><a href="http://spring.io/guides/gs/gradle/">Building Java Projects with Gradle</a></li>
<li><a href="https://docs.gradle.org/current/userguide/userguide.html">Gradle User Guide</a> - Hans Dockter, Adam Murdoch (<a href="https://docs.gradle.org/current/userguide/userguide.pdf">PDF</a>)</li>
</ul>

<h4>Grails</h4>

<ul>
<li><a href="http://www.infoq.com/minibooks/grails-getting-started">Getting Started with Grails</a></li>
<li><a href="http://grails.asia/grails-tutorial-for-beginners/">Grails Tutorial for Beginners</a></li>
<li><a href="http://grails.github.io/grails-doc/latest/">The Grails Framework - Reference Documentation</a> - Graeme Rocher, Peter Ledbrook, Marc Palmer, Jeff Brown, Luke Daley, Burt Beckwith, Lari Hotari (<a href="http://grails.github.io/grails-doc/latest/guide/single.pdf">PDF</a>)</li>
</ul>

<h4>Spock Framework</h4>

<ul>
<li><a href="https://spockframework.github.io/spock/docs/current/index.html">Spock Framework Reference Documentation</a> - Peter Niederwieser</li>
<li><a href="http://edgibbs.com/spock-intro-a-bdd-testing-framework-in-groovy/">Spock Intro</a> - Ed Gibbs</li>
</ul>

<h3>Hadoop</h3>

<ul>
<li><a href="http://www.cloudera.com/content/www/en-us/resources/aboutcloudera/cloudera-impala-ebook.html">Cloudera Impala</a> - John Russel</li>
<li><a href="http://lintool.github.io/MapReduceAlgorithms/MapReduce-book-final.pdf">Data-Intensive Text Processing with MapReduce</a> (Jimmy Lin and Chris Dyer) (PDF)</li>
<li><a href="http://hadoopilluminated.com/index.html">Hadoop Illuminated</a> - Mark Kerzner &amp; Sujee Maniyam</li>
<li><a href="http://chimera.labs.oreilly.com/books/1234000001811/index.html">Programming Pig</a> - Alan Gates</li>
</ul>

<h3>Haskell</h3>

<ul>
<li><a href="https://www.haskell.org/tutorial/">A Gentle Introduction to Haskell</a></li>
<li><a href="http://www.cs.utexas.edu/~wcook/anatomy/">Anatomy of Programming Languages</a> - William R. Cook</li>
<li><a href="http://vis.renci.org/jeff/2009/01/16/beautiful-code-compelling-evidence/">Beautiful Code, Compelling Evidence</a> (PDF)</li>
<li><a href="http://www.andres-loeh.de/ExploringGH.pdf">Exploring Generic Haskell</a> - Andres Löh (PDF)</li>
<li><a href="http://www.happylearnhaskelltutorial.com">Happy Learn Haskell Tutorial</a></li>
<li><a href="http://www.yesodweb.com/book-1.2">Haskell and Yesod</a></li>
<li><a href="http://lisperati.com/haskell/">Haskell no panic</a></li>
<li><a href="http://yannesposito.com/Scratch/fr/blog/Yesod-tutorial-for-newbies/">Haskell web Programming</a> (Yesod tutorial)</li>
<li><a href="http://www.seas.upenn.edu/~cis194/spring13/">Introduction to Haskell</a> - Brent Yorgey</li>
<li><a href="http://yannesposito.com/Scratch/en/blog/Haskell-the-Hard-Way/">Learn Haskell Fast and Hard</a></li>
<li><a href="http://learnyouahaskell.com">Learn You a Haskell for Great Good</a> - Miran Lipovaca</li>
<li><a href="http://chimera.labs.oreilly.com/books/1230000000929/index.html">Parallel and Concurrent Programming in Haskell</a> - Simon Marlow</li>
<li><a href="http://book.realworldhaskell.org">Real World Haskell</a></li>
<li><a href="http://www.sthaskell.com">Speeding Through Haskell</a></li>
<li><a href="https://fldit-www.cs.uni-dortmund.de/~peter/PS07/HR.pdf">The Haskell Road to Logic, Math and Programming</a> (PDF)</li>
<li><a href="http://haskell.cs.yale.edu/?post_type=publication&amp;p=112">The Haskell School of Music</a> (PDF) (work in progress)</li>
<li><a href="https://en.wikibooks.org/wiki/Haskell">Wikibook Haskell</a></li>
<li><a href="http://hal3.name/docs/daume02yaht.pdf">Yet Another Haskell Tutorial</a> (PDF)</li>
</ul>

<h3>Haxe</h3>

<ul>
<li><a href="https://github.com/markknol/flambe-guide/wiki">Flambe Handbook</a></li>
<li><a href="https://matthijskamstra.github.io/haxejs/">Haxe and JavaScript</a> - Matthijs Kamstra (wikibook)</li>
<li><a href="http://haxe.org/documentation/introduction/">Haxe Manual</a> - Haxe Foundation (PDF, HTML)</li>
<li><a href="http://haxeflixel.com/documentation/haxeflixel-handbook/">HaxeFlixel Handbook</a> (HTML)</li>
<li><a href="http://wiki.ktxsoftware.com/wiki/Home">Kha Handbook</a></li>
<li><a href="https://www.gitbook.com/book/openfl/openfl-documentation/details">OpenFL Handbook</a></li>
</ul>

<h3>HTML / CSS</h3>

<ul>
<li><a href="http://learn.shayhowe.com/html-css/">A beginner's guide to HTML&amp;CSS</a></li>
<li><a href="http://marksheet.io">A free guide to learn HTML and CSS</a></li>
<li><a href="http://adaptivewebdesign.info/1st-edition/">Adaptive Web Design</a> - Aaron Gustafson</li>
<li><a href="http://learn.shayhowe.com/advanced-html-css/">An advanced guide to HTML&amp;CSS</a></li>
<li><a href="http://learnjs.io/canvassing/read">Canvassing</a></li>
<li><a href="http://mdo.github.io/code-guide/">Code Guide: Standards for developing flexible, durable, and sustainable HTML and CSS</a> - Mark Otto</li>
<li><a href="http://diveintohtml5.info">Dive Into HTML5</a> - Mark Pilgrim (<a href="http://mislav.net/2011/10/dive-into-html5/">PDF</a>)</li>
<li><a href="https://dash.generalassemb.ly">GA Dash</a></li>
<li><a href="http://google-styleguide.googlecode.com/svn/trunk/htmlcssguide.xml">Google's HTML/CSS Style Guide</a></li>
<li><a href="http://joshondesign.com/p/books/canvasdeepdive/toc.html">HTML Canvas Deep Dive</a> - Josh Marinacci</li>
<li><a href="http://www.htmldog.com">HTML Dog Tutorials</a></li>
<li><a href="http://chimera.labs.oreilly.com/books/1234000001654/index.html">HTML5 Canvas</a> - Steve Fulton &amp; Jeff Fulton</li>
<li><a href="http://chimera.labs.oreilly.com/books/1234000000770/index.html">HTML5 for Publishers</a> - Sanders Kleinfeld</li>
<li><a href="http://html5forwebdesigners.com">HTML5 For Web Designers</a> - Jeremy Keith</li>
<li><a href="https://leanpub.com/html5shootemupinanafternoon/read">HTML5 Shoot 'em Up in an Afternoon</a> - Bryan Bibat</li>
<li><a href="http://learnlayout.com">Learn CSS Layout</a></li>
<li><a href="http://book.mixu.net/css/">Learn CSS Layout the pedantic way</a></li>
<li><a href="http://maintainablecss.com">MaintainableCSS</a></li>
<li><a href="http://apress.jensimmons.com/v5/pro-html5-programming/ch0.html">Pro HTML5 Programming</a></li>
<li><a href="https://smacss.com">Scalable and Modular Architecture for CSS</a> - Jonathan Snook</li>
<li><a href="http://chimera.labs.oreilly.com/books/1234000001552">Web Audio API</a> - Boris Smus</li>
</ul>

<h4>Bootstrap</h4>

<ul>
<li><a href="https://www.syncfusion.com/resources/techportal/ebooks/twitterbootstrap3">Twitter Bootstrap 3 Succinctly</a> (PDF, Kindle) <em>(Just fill the fields with any values)</em></li>
<li><a href="https://www.syncfusion.com/resources/techportal/ebooks/twitterbootstrap">Twitter Bootstrap Succinctly</a> (PDF, Kindle) <em>(Just fill the fields with any values)</em></li>
</ul>

<h4>HTTP</h4>

<ul>
<li><a href="https://launchschool.com/books/http">Introduction to HTTP</a> - Launch School</li>
</ul>

<h3>Icon</h3>

<ul>
<li><a href="http://www.cs.arizona.edu/icon/ibsale.htm">The Implementation of the Icon Programming Language</a></li>
</ul>

<h3>iOS</h3>

<ul>
<li><a href="http://cocoadevcentral.com">Cocoa Dev Central</a></li>
<li><a href="http://www.techotopia.com/index.php/IOS_8_App_Development_Essentials">iOS 8 App Development Essentials</a></li>
<li><a href="https://www.syncfusion.com/resources/techportal/ebooks/ios">iOS Succinctly, Syncfusion</a> (PDF, Kindle) <em>(Just fill the fields with any values)</em></li>
<li><a href="http://nshipster.com/#archive">NSHipster</a> (Resource)</li>
<li><a href="https://developer.apple.com/library/prerelease/ios/referencelibrary/GettingStarted/DevelopiOSAppsSwift/index.html">Start Developing iOS Apps (Swift)</a> (HTML)</li>
<li><a href="http://everythingcomputerscience.com/books/RoadMapiOS.pdf">Start Developing iOS Apps Today (Objective-C) - Last updated 22.10.2013</a> (PDF)</li>
</ul>

<h3>IoT</h3>

<ul>
<li><a href="https://github.com/marcozennaro/IPv6-WSN-book/tree/master/Releases">IoT in five days- V1.1</a> (PDF, EPUB)</li>
</ul>

<h3>Isabelle/HOL</h3>

<ul>
<li><a href="http://www21.in.tum.de/~nipkow/Concrete-Semantics/">Concrete Semantics - A Proof Assistant Approach by Tobias Nipkow and Gerwin Klein</a> (PDF)</li>
<li><a href="http://isabelle.in.tum.de/doc/tutorial.pdf">Isabelle/HOL - A Proof Assistant for Higher-Order Logic by Tobias Nipkow and Lawrence C. Paulson and Markus Wenzel</a> (PDF)</li>
</ul>

<h3>J</h3>

<ul>
<li><a href="http://www.jsoftware.com/books/pdf/arithmetic.pdf">Arithmetic by Kenneth E Iverson</a> (PDF)</li>
<li><a href="http://www.jsoftware.com/books/pdf/brief.pdf">Brief Reference by Chris Burke and Clifford Reiter</a> (PDF)</li>
<li><a href="http://www.jsoftware.com/books/pdf/calculus.pdf">Calculus by Kenneth E Iverson</a> (PDF)</li>
<li><a href="http://www.jsoftware.com/papers/camn.htm">Computers and Mathematical Notation by Kenneth E Iverson</a></li>
<li><a href="http://www.jsoftware.com/books/pdf/cmc.pdf">Concrete Math Companion by Kenneth E Iverson</a> (PDF)</li>
<li><a href="http://www.jsoftware.com/books/pdf/easyj.pdf">Easy J by Linda Alvord, Norman Thomson</a> (PDF, <a href="http://www.jsoftware.com/books/doc/easyj_doc.zip">Word DOC</a>)</li>
<li><a href="http://www.jsoftware.com/books/pdf/expmath.pdf">Exploring Math by Kenneth E Iverson</a> (PDF)</li>
<li><a href="http://www.jsoftware.com/help/jforc/contents.htm">J for C Programmers by Henry Rich</a></li>
<li><a href="http://www.jsoftware.com/help/primer/contents.htm">J Primer</a></li>
<li><a href="http://www.jsoftware.com/help/learning/contents.htm">Learning J by Roger Stokes- online</a></li>
<li><a href="http://www.jsoftware.com/books/pdf/mftl.zip">Math for the Layman by Kenneth E Iverson</a> (zipped html+images)</li>
</ul>

<h3>Java</h3>

<ul>
<li><a href="http://www.mat.uniroma2.it/~picard/SMC/didattica/materiali_did/Java/Java_3D/Java_3D_Programming.pdf">3D Programming in Java</a> - Daniel Selman (PDF)</li>
<li><a href="http://ptgmedia.pearsoncmg.com/images/0131478303/downloads/Iverson_book.pdf">Apache Jakarta Commons: Reusable Java Components</a> - Will Iverson (PDF)</li>
<li><a href="http://artint.info/html/ArtInt.html">Artificial Intelligence - Foundation of Computational Agents</a></li>
<li><a href="http://www.mkyong.com">Category wise tutorials - J2EE</a></li>
<li><a href="http://pdf.coreservlets.com">Core Servlets and JavaServer Pages</a> - Marty Hall and Larry Brown</li>
<li><a href="http://www.brpreiss.com/books/opus5/html/page9.html">Data Structures and Algorithms with Object-Oriented Design Patterns in Java</a></li>
<li><a href="http://dept.cs.williams.edu/~bailey/JavaStructures/Book_files/JavaStructures.pdf">Data Structures in Java for the Principled Programmer</a> (PDF)</li>
<li><a href="https://google.github.io/styleguide/javaguide.html">Google's Java Style Guide</a></li>
<li><a href="http://chortle.ccsu.edu/java5/index.html">Introduction to Computer science using Java</a></li>
<li><a href="http://introcs.cs.princeton.edu/java/home/">Introduction to Programming in Java</a> - Robert Sedgewick and Kevin Wayne</li>
<li><a href="http://math.hws.edu/javanotes/">Introduction to Programming Using Java</a> - David J. Eck</li>
<li><a href="http://www.jaasbook.com">JAAS in Action</a></li>
<li><a href="http://www.oracle.com/events/global/en/java-outreach/resources/java-a-beginners-guide-1720064.pdf">Java: A Beginner's Guide</a> - Oracle (PDF)</li>
<li><a href="http://ptgmedia.pearsoncmg.com/images/013143697X/downloads/013143697X_book.pdf">Java Application Development on Linux by Carl Albing and Michael Schwarz (PDF)</a> (PDF)</li>
<li><a href="http://myflex.org/books/java4kids/java4kids.htm">Java Programming for Kids, Parents and Grandparents</a> - Yakov Fain</li>
<li><a href="http://chimera.labs.oreilly.com/books/1234000001805/index.html">Learning Java (4th Edition)</a> - Patrick Niemeyer</li>
<li><a href="http://nioframework.sourceforge.net/NIO_Paper.pdf">NIO Framework</a> (PDF)</li>
<li><a href="http://pub.bruckner.cz/titles/oop">OOP - Learn Object Oriented Thinking &amp; Programming</a> - Rudolf Pecinovsky</li>
<li><a href="http://opendatastructures.org/ods-java.pdf">Open Data Structures (in Java)</a> (PDF)</li>
<li><a href="http://njbartlett.name/osgibook.html">OSGi in Practice</a> - N. Bartlett (PDF)</li>
<li><a href="http://www.cafeconleche.org/books/xmljava/">Processing XML with Java (A Guide to SAX, DOM, JDOM, JAXP, and TrAX)</a> - Elliotte Rusty Harold</li>
<li><a href="http://docs.oracle.com/javase/tutorial/">Sun's Java Tutorials</a></li>
<li><a href="https://leanpub.com/itext_pdfabc">The ABC of PDF with iText: PDF Syntax essentials</a></li>
<li><a href="http://docs.oracle.com/javaee/6/tutorial/doc/javaeetutorial6.pdf">The Java EE6 Tutorial</a> (PDF)</li>
<li><a href="https://docs.oracle.com/javaee/7/JEETT.pdf">The Java EE7 Tutorial</a> (PDF)</li>
<li><a href="http://docs.oracle.com/javase/specs/">The Java Language Specification</a> - James Gosling, Bill Joy, Guy Steele, Gilad Bracha</li>
<li><a href="http://download.oracle.com/javase/tutorial/">The Java Tutorial 4th Edition</a> - Sharon Zakhour, Scott Hommel, Jacob Royal, Isaac Rabinovitch, Tom Risser, Mark Hoeber</li>
<li><a href="http://greenteapress.com/thinkapjava/">Think Java: How to Think Like a Computer Scientist</a> - Allen B. Downey</li>
<li><a href="http://www.mindview.net/Books/TIJ/">Thinking in Java</a></li>
<li><a href="http://interactivepython.org/runestone/static/java4python/index.html">Welcome to Java for Python Programmers</a> - Brad Miller</li>
<li><a href="http://javaworkshop.sourceforge.net">Welcome to the Java Workshop</a> - An Apache Project</li>
<li><a href="https://leanpub.com/whatsnewinjava8/read">What's New in Java 8</a> - Adam L. Davis</li>
</ul>

<h4>JasperReports</h4>

<ul>
<li><a href="http://jasperreports.sourceforge.net/JasperReports-Ultimate-Guide-3.pdf">The JasperReports Ultimate Guide, Third Edition</a> (PDF)</li>
</ul>

<h4>Spring</h4>

<ul>
<li><a href="http://docs.spring.io/spring/docs/current/spring-framework-reference/html/">Spring Framework Reference Documentation</a> - Rod Johnson, Juergen Hoeller, Keith Donald, Colin Sampaleanu, Rob Harrop, Thomas Risberg, Alef Arendsen, Darren Davison, Dmitriy Kopylenko, Mark Pollack, Thierry Templier, Erwin Vervaet, Portia Tung, Ben Hale, Adrian Colyer, John Lewis, Costin Leau, Mark Fisher, Sam Brannen, Ramnivas Laddad, Arjen Poutsma, Chris Beams, Tareq Abedrabbo, Andy Clement, Dave Syer, Oliver Gierke, Rossen Stoyanchev, Phillip Webb, Rob Winch, Brian Clozel, Stephane Nicoll, Sebastien Deleuze (<a href="http://docs.spring.io/spring/docs/current/spring-framework-reference/pdf/spring-framework-reference.pdf">PDF</a>)</li>
</ul>

<h4>Spring Boot</h4>

<ul>
<li><a href="http://docs.spring.io/spring-boot/docs/current/reference/html/">Spring Boot Reference Guide</a> - Phillip Webb, Dave Syer, Josh Long, Stéphane Nicoll, Rob Winch, Andy Wilkinson, Marcel Overdijk, Christian Dupuis (<a href="http://docs.spring.io/spring-boot/docs/current/reference/pdf/spring-boot-reference.pdf">PDF</a>, <a href="http://docs.spring.io/spring-boot/docs/current/reference/epub/spring-boot-reference.epub">EPUB</a>)</li>
</ul>

<h4>Spring Security</h4>

<ul>
<li><a href="http://docs.spring.io/spring-security/site/docs/current/reference/htmlsingle/">Spring Security Reference</a> - Ben Alex, Luke Taylor, Rob Winch</li>
</ul>

<h4>Wicket</h4>

<ul>
<li><a href="http://wicket.apache.org/learn/#guide">Official Free Online Guide for Apache Wicket framework</a></li>
</ul>

<h3>JavaScript</h3>

<ul>
<li><a href="http://www.2ality.com/2013/06/basic-javascript.html">Basic JavaScript for the impatient programmer</a> - Dr. Axel Rauschmayer</li>
<li><a href="https://github.com/tooling/book-of-modern-frontend-tooling">Book of Modern Frontend Tooling</a></li>
<li><a href="http://www.crockford.com/javascript/">Crockford's JavaScript</a> - Douglas Crockford</li>
<li><a href="http://devdocs.io">Dev Docs</a></li>
<li><a href="http://addyosmani.github.io/backbone-fundamentals/">Developing Backbone.js Applications</a> - Addy Osmani</li>
<li><a href="http://eloquentjavascript.net">Eloquent JavaScript 2nd edition</a> - Marijn Haverbeke</li>
<li><a href="http://exploringjs.com/es6/">Exploring ES6</a> - Dr. Axel Rauschmayer</li>
<li><a href="https://github.com/google/styleguide/blob/gh-pages/javascriptguide.xml">Google JavaScript Style Guide</a></li>
<li><a href="http://read.humanjavascript.com">Human Javascript</a></li>
<li><a href="https://leanpub.com/javascript-allonge/read">JavaScript Allongé</a> - Reginald Braithwaite</li>
<li><a href="http://media.wiley.com/product_ancillary/28/07645334/DOWNLOAD/all.pdf">JavaScript Bible</a> (PDF)</li>
<li><a href="http://www.javascriptenlightenment.com">JavaScript Enlightenment</a> - Cody Lindley</li>
<li><a href="http://jsforcats.com">JavaScript For Cats</a></li>
<li><a href="http://nicholasjohnson.com/javascript-book/">JavaScript Fundamentals, Plus a Dash Of JQuery - for dinner ladies</a></li>
<li><a href="http://bonsaiden.github.io/JavaScript-Garden/">JavaScript Garden</a> (Maintained by Tim Ruffles)</li>
<li><a href="http://shichuan.github.io/javascript-patterns/">JavaScript Patterns Collection</a> - Shi Chuan</li>
<li><a href="https://leanpub.com/javascript-spessore/read">JavaScript Spessore</a> - Reginald Braithwaite</li>
<li><a href="https://www.syncfusion.com/resources/techportal/ebooks/javascript">Javascript Succinctly, Syncfusion</a> (PDF, Kindle) <em>(Just fill the fields with any values)</em></li>
<li><a href="https://github.com/braziljs/js-the-right-way">JavaScript the Right Way</a></li>
<li><a href="http://jqfundamentals.com">jQuery Fundamentals</a> (starts with JavaScript basics)</li>
<li><a href="http://markdaggett.com/images/ExpertJavaScript-ch6.pdf">JS Robots</a> (PDF)</li>
<li><a href="https://leanpub.com/leaflet-tips-and-tricks">Leaflet Tips and Tricks: Interactive Maps Made Easy</a> - Malcolm Maclean</li>
<li><a href="http://codecombat.com">Learn to Code JavaScript by Playing a Game</a></li>
<li><a href="http://addyosmani.com/resources/essentialjsdesignpatterns/book/">Learning JavaScript Design Patterns</a> - Addy Osmani</li>
<li><a href="http://www.noelrappin.com">Managing Space and Time with JavaScript - Book 1: The Basics</a> - Noel Rappin</li>
<li><a href="https://leanpub.com/marionetteexpose">Marionette Exposé: Learn to write modular Javascript applicatons using Backbone Marionette and RequireJS/AMD</a> - Jack Killilea</li>
<li><a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide">Mozilla Developer Network's JavaScript Guide</a></li>
<li><a href="http://chimera.labs.oreilly.com/books/1234000000262/">O'Reilly Programming JavaScript Applications</a></li>
<li><a href="https://leanpub.com/ohmyjs/read">Oh My JS</a> <em>(Leanpub, by Azat Mardanov)</em></li>
<li><a href="http://addyosmani.com/largescalejavascript/">Patterns For Large-Scale JavaScript Application Architecture</a> - Addy Osmani</li>
<li><a href="http://speakingjs.com/es5/">Speaking JavaScript</a> - Dr. Axel Rauschmayer</li>
<li><a href="http://javascript.info">The JavaScript Tutorial</a></li>
<li><a href="http://chimera.labs.oreilly.com/books/1234000001655">The Problem with Native JavaScript APIs</a> (PDF)</li>
<li><a href="https://leanpub.com/understandinges6/read">Understanding ECMAScript 6</a> <em>(Leanpub, by Nicholas C. Zakas)</em></li>
<li><a href="http://robotlolita.me/2011/10/09/understanding-javascript-oop.html">Understanding JavaScript OOP</a> <em>(Sorella)</em></li>
<li><a href="https://github.com/getify/You-Dont-Know-JS">You Don't Know JS</a></li>
</ul>

<h4>Javascript Frameworks</h4>

For resources on Angular, Backbone, D3, Dojo, Ember, Express, jQuery, Knockout, Meteor, React and any other JS toolkit/framework, please refer to <a href="/javascript-frameworks-resources.md">Javascript Frameworks Resources and Tutorials</a>.

<h4>Node.js</h4>

<ul>
<li><a href="https://nikhilm.github.io/uvbook/">An Introduction to libuv</a> - Nikhil Marathe (<a href="http://nikhilm.github.io/uvbook/An%20Introduction%20to%20libuv.pdf">PDF</a> - <a href="http://nikhilm.github.io/uvbook/An%20Introduction%20to%20libuv.epub">ePub</a>)</li>
<li><a href="https://web.archive.org/web/20150327025334/https://leanpub.com/jsfun/read">JavaScript and Node FUNdamentals</a> - Azat Mardanov <em>(Leanpub)</em></li>
<li><a href="http://book.mixu.net/node/">Mixu's Node Book</a></li>
<li><a href="http://chimera.labs.oreilly.com/books/1234000001808/index.html">Node: Up and Running</a> - Tom Hughes-Croucher</li>
<li><a href="https://www.syncfusion.com/resources/techportal/ebooks/nodejs">Node.js Succinctly, Syncfusion</a> (PDF, Kindle) <em>(Just fill the fields with any values)</em></li>
<li><a href="http://nodebeginner.org">The Node Beginner Book</a></li>
</ul>

<h3>Jenkins</h3>

<ul>
<li><a href="http://www.wakaleo.com/books/jenkins-the-definitive-guide">Jenkins: The Definitive Guide</a> (PDF)</li>
</ul>

<h3>Julia</h3>

<ul>
<li><a href="https://en.wikibooks.org/wiki/Introducing_Julia">Introducing Julia wikibook</a></li>
<li><a href="http://samuelcolvin.github.io/JuliaByExample">Julia by Example</a> - Samuel Colvin (GitHub repo)</li>
<li><a href="https://learnxinyminutes.com/docs/julia">Learn Julia in Y minutes</a> - Leah Hanson</li>
<li><a href="http://quant-econ.net/jl/learning_julia.html">Programming in Julia</a> - Thomas J. Sargent and John Stachurski</li>
<li><a href="http://bogumilkaminski.pl/files/julia_express.pdf">The Julia Express</a> - Bogomił Kamiński (PDF)</li>
</ul>

<h3>LaTeX / TeX</h3>

<h4>LaTeX</h4>

<ul>
<li><a href="http://latex.knobs-dials.com">Arbirtrary LaTex Reference</a></li>
<li><a href="https://en.wikibooks.org/wiki/LaTeX">LaTeX Wikibook</a></li>
<li><a href="https://tobi.oetiker.ch/lshort/lshort.pdf">The Not So Short Introduction to LaTeX</a> (PDF)</li>
</ul>

<h4>TeX</h4>

<ul>
<li><a href="http://pgfplots.sourceforge.net/TeX-programming-notes.pdf">Notes On Programming in TeX</a> - Christian Feursänger (PDF)</li>
<li><a href="http://eijkhout.net/texbytopic/texbytopic.html">TeX by Topic, A TeXnician's Reference</a> - Victor Eijkhout</li>
<li><a href="https://www.gnu.org/software/teximpatient/">TeX for the Impatient</a> - Paul Abrahams, Kathryn Hargreaves, and Karl Berry</li>
</ul>

<h3>Limbo</h3>

<ul>
<li><a href="http://doc.cat-v.org/inferno/books/inferno_programming_with_limbo/">Inferno Programming With Limbo</a></li>
</ul>

<h3>Linux</h3>

<ul>
<li><a href="https://en.wikibooks.org/wiki/Ad_Hoc_Data_Analysis_From_The_Unix_Command_Line">Ad Hoc Data Analysis From The Unix Command Line</a></li>
<li><a href="http://www.linuxfromscratch.org/alfs/download.html">Automated Linux From Scratch</a></li>
<li><a href="http://ubuntu-manual.org">Getting Started with Ubuntu</a></li>
<li><a href="http://www.sourceware.org/autobook/download.html">GNU Autoconf, Automake and Libtool</a></li>
<li><a href="http://www.linuxtopia.org/online_books/gui_toolkit_guides/gtk+_gnome_application_development/">GTK+/Gnome Application Development</a></li>
<li><a href="http://www.linuxfromscratch.org/hlfs/download.html">Hardened Linux From Scratch</a></li>
<li><a href="https://www.learnenough.com/command-line-tutorial">Learn Enough Command Line to Be Dangerous</a> - Michael Hartl</li>
<li><a href="http://www.oreilly.com/openbook/debian/book/index.html">Learning Debian GNU/Linux</a></li>
<li><a href="http://thegeekstuff.s3.amazonaws.com/files/linux-101-hacks.zip">Linux 101 Hacks</a> - Ramesh Natarajan (PDF)</li>
<li><a href="http://www.linuxtopia.org/online_books/linux_administrators_security_guide/index.html">Linux Administrator's Security Guide</a></li>
<li><a href="http://lartc.org">Linux Advanced Routing &amp; Traffic Control HOWTO</a></li>
<li><a href="http://linuxclusters.com/compute_clusters.html">Linux Compute Clusters</a></li>
<li><a href="http://www.xml.com/ldd/chapter/book/index.html">Linux Device Drivers, 2nd Edition</a></li>
<li><a href="http://lwn.net/Kernel/LDD3/">Linux Device Drivers, Third Edition</a> - Jonathan Corbet, Alessandro Rubini, and Greg Kroah-Hartman</li>
<li><a href="http://www.linuxfromscratch.org/lfs/view/stable/">Linux from Scratch</a></li>
<li><a href="https://www.gitbook.com/book/0xax/linux-insides/details">Linux Inside</a></li>
<li><a href="http://www.kroah.com/lkn/">Linux Kernel in a Nutshell</a></li>
<li><a href="http://lnag.sourceforge.net">Linux Newbie Administrator Guide</a></li>
<li><a href="http://www.linuxtopia.org/LinuxSecurity/index.html">Linux Security for Beginners</a></li>
<li><a href="https://www.syncfusion.com/resources/techportal/ebooks/linux">Linux Succinctly, Syncfusion</a> (PDF, Kindle) <em>(Just fill the fields with any values)</em></li>
<li><a href="http://download.openvz.org/doc/OpenVZ-Users-Guide.pdf">OpenVZ Linux virtualization</a> (PDF)</li>
<li><a href="https://jan.newmarch.name/LinuxSound/index.html">Programming and Using Linux Sound - in depth</a></li>
<li><a href="http://www.techotopia.com/index.php/Red_Hat_Enterprise_Linux_6_Essentials">Red Hat Enterprise Linux 6 Essentials</a></li>
<li><a href="http://www.dwheeler.com/secure-programs/">Secure Programming HOWTO - Creating Secure Software</a> - D. A. Wheeler (HTML, PDF)</li>
<li><a href="https://debian-handbook.info">The Debian Administrator's Handbook</a></li>
<li><a href="http://linuxcommand.org/tlcl.php">The Linux Command Line</a> (PDF)</li>
<li><a href="http://ptgmedia.pearsoncmg.com/imprint_downloads/informit/perens/0130091154.pdf">The Linux Development Platform</a> (PDF)</li>
<li><a href="http://tldp.org/LDP/lkmpg/2.6/html/">The Linux Kernel Module Programming Guide</a></li>
<li><a href="http://www.tldp.org/LDP/sag/html/index.html">The Linux System Administrator's Guide</a></li>
<li><a href="http://python-gtk-3-tutorial.readthedocs.org/en/latest/">The Python GTK+ 3 Tutorial</a></li>
<li><a href="http://www.ubuntupocketguide.com/index_main.html">Ubuntu Pocket Guide and Reference</a></li>
<li><a href="https://help.ubuntu.com/16.04/serverguide/serverguide.pdf">Ubuntu Server Guide</a> (PDF)</li>
<li><a href="http://upstart.ubuntu.com/cookbook/">Upstart Intro, Cookbook and Best Practises</a></li>
<li><a href="http://www.akkadia.org/drepper/cpumemory.pdf">What Every Programmer Should Know About Memory</a> (PDF)</li>
</ul>

<h3>Lisp</h3>

<ul>
<li><a href="http://franz.com/resources/educational_resources/cooper.book.pdf">Basic Lisp Techniques</a> - David J. Cooper, Jr. (PDF)</li>
<li><a href="http://www.lisperati.com/casting.html">Casting Spels in Lisp</a></li>
<li><a href="http://www.cs.cmu.edu/~dst/LispBook/">Common Lisp: A Gentle Introduction to Symbolic Computation</a> - David S. Touretzky (PDF, PS)</li>
<li><a href="http://www.cse.buffalo.edu/~shapiro/Commonlisp/">Common Lisp: An Interactive Approach</a> - Stuart C. Shapiro</li>
<li><a href="http://clqr.boundp.org">Common Lisp Quick Reference</a></li>
<li><a href="http://www.cs.cmu.edu/Groups/AI/html/cltl/mirrors.html">Common Lisp the Language, 2nd Edition</a></li>
<li><a href="http://google-styleguide.googlecode.com/svn/trunk/lispguide.xml">Google's Common Lisp Style Guide</a></li>
<li><a href="http://www.civilized.com/files/lispbook.pdf">Interpreting LISP</a> - Gary D. Knott (PDF)</li>
<li><a href="http://learnlispthehardway.org/book/">Learn Lisp The Hard Way</a> - Colin J.E. Lupton</li>
<li><a href="http://letoverlambda.com/index.cl/">Let Over Lambda - 50 Years of Lisp</a> - D. Hoyte</li>
<li><a href="https://leanpub.com/lisphackers">Lisp Hackers: Interviews with 100x More Productive Programmers</a> - Vsevolod Dyomkin</li>
<li><a href="https://github.com/google/lisp-koans">Lisp Koans</a></li>
<li><a href="https://leanpub.com/lispwebtales">Lisp Web Tales</a></li>
<li><a href="http://www.sussex.ac.uk/informatics/">Natural Language Processing in Lisp</a></li>
<li><a href="http://www.paulgraham.com/onlisp.html">On Lisp</a> - P. Graham</li>
<li><a href="http://www.gigamonkeys.com/book/">Practical Common Lisp</a> - P. Seibel</li>
<li><a href="hhttp://www.bcl.hamilton.ie/~nmh/t3x.org/zzz/sketchy-lisp.zip">Sketchy LISP</a> - Nils Holm (ZIP)</li>
<li><a href="http://mitpress.mit.edu/sicp/">Structure and Interpretation of Computer Programs</a></li>
<li><a href="https://psg.com/~dlamkins/sl/">Successful Lisp: How to Understand and Use Common Lisp</a> - David Lamkins</li>
<li><a href="http://www.dreamsongs.com/Files/HOPL2-Uncut.pdf">The Evolution of Lisp</a> - Guy L. Steele Jr., Richard P. Gabriel (PDF)</li>
</ul>

<h3>Livecode</h3>

<ul>
<li><a href="http://www.scribd.com/doc/216789127/LiveCode-userguide">LiveCode userguide</a> (PDF)</li>
</ul>

<h3>Lua</h3>

<ul>
<li><a href="http://www.lua.org/manual/5.1/">Lua 5.1 Reference Manual</a></li>
<li><a href="http://www.lua.org/gems/">Programming Gems</a></li>
<li><a href="https://en.wikibooks.org/wiki/Lua_Programming">Wikibook</a></li>
</ul>

<h3>Markdown</h3>

<ul>
<li><a href="https://www.gitbook.com/book/gitbookio/markdown/details">Learn Markdown</a> - Sammy P., Aaron O. (PDF) (EPUB) (MOBI)</li>
</ul>

<h3>Mathematica</h3>

<ul>
<li><a href="http://www.cis.upenn.edu/~jean/math-basics.pdf">Basics of Algebra, Topology, and Differential Calculus</a> (PDF)</li>
<li><a href="http://www.mathprogramming-intro.org">Mathematica® programming: an advanced introduction by Leonid Shifrin</a></li>
<li><a href="http://reference.wolfram.com/legacy/v5_2/">Stephen Wolfram's The Mathematica Book</a></li>
<li><a href="http://chortle.ccsu.edu/VectorLessons/index.html">Vector Math for 3d Computer Graphics</a></li>
<li><a href="http://www.wolfram.com/learningcenter/tutorialcollection/">Wolfram Mathematica Tutorial Collection</a></li>
</ul>

<h3>MATLAB</h3>

<ul>
<li><a href="http://www.science.smith.edu/~jcardell/Courses/EGR326/Intro-to-MATLAB.pdf">An Interactive Introduction to MATLAB</a> (PDF)</li>
<li><a href="http://www.maths.dundee.ac.uk/software/MatlabNotes.pdf">An Introduction to MATLAB</a> (PDF)</li>
<li><a href="http://www.intechopen.com/books/applications-of-matlab-in-science-and-engineering">Applications of MATLAB in Science and Engineering</a></li>
<li><a href="http://www.mathworks.com/moler/exm/index.html?requestedDomain=www.mathworks.com&amp;nocookie=true">Experiments with MATLAB</a></li>
<li><a href="http://cnx.org/featureContent/mfiles">Freshman Engineering Problem Solving with MATLAB</a></li>
<li><a href="http://www.mathworks.com/tutorials">Interactive Tutorials for MATLAB, Simulink, Signal Processing, Controls, and Computational Mathematics</a></li>
<li><a href="http://www.intechopen.com/books/matlab-a-fundamental-tool-for-scientific-computing-and-engineering-applications-volume-1">MATLAB - A Fundamental Tool for Scientific Computing and Engineering Applications - Volume 1</a></li>
<li><a href="http://www.intechopen.com/books/matlab-a-ubiquitous-tool-for-the-practical-engineer">MATLAB - A Ubiquitous Tool for the Practical Engineer</a></li>
<li><a href="http://www.intechopen.com/books/matlab-for-engineers-applications-in-control-electrical-engineering-it-and-robotics">MATLAB for Engineers: Applications in Control, Electrical Engineering, IT and Robotics</a></li>
<li><a href="https://en.wikibooks.org/wiki/MATLAB_Programming">MATLAB Programming</a></li>
<li><a href="https://www.syncfusion.com/resources/techportal/ebooks/matlab">MATLAB Succinctly, Syncfusion</a> (PDF, Kindle) <em>(Just fill the fields with any values)</em></li>
<li><a href="http://www.mathworks.com/moler/index_ncm.html?requestedDomain=www.mathworks.com&amp;nocookie=true">Numerical Computing with MATLAB</a></li>
<li><a href="http://greenteapress.com/matlab/index.html">Physical Modeling in MATLAB</a> - Alan B. Downey</li>
</ul>

<h3>Maven</h3>

<ul>
<li><a href="http://books.sonatype.com/m2eclipse-book/reference/">Developing with Eclipse and Maven</a></li>
<li><a href="http://books.sonatype.com/mvnex-book/reference/public-book.html">Maven by Example</a></li>
<li><a href="http://books.sonatype.com/mvnref-book/reference/public-book.html">Maven: The Complete Reference</a></li>
<li><a href="http://books.sonatype.com/nexus-book/reference/">Repository Management with Nexus</a></li>
</ul>

<h3>Mercurial</h3>

<ul>
<li><a href="http://hginit.com">HGInit - Mercurial Tutorial by Joel Spolsky</a></li>
<li><a href="http://hgbook.red-bean.com">Mercurial: The Definitive Guide</a></li>
</ul>

<h3>Mercury</h3>

<ul>
<li><a href="http://www.mercurylang.org/information/doc-release/user_guide.pdf">The Mercury Users' Guide</a> (PDF)</li>
</ul>

<h3>MySQL</h3>

<ul>
<li><a href="http://www.techotopia.com/index.php/MySQL_Essentials">MySQL Essentials</a></li>
<li><a href="http://downloads.mysql.com/docs/mysql-tutorial-excerpt-5.1-en.pdf">MySQL Tutorial Excerpt</a> (PDF)</li>
</ul>

<h3>Neo4J</h3>

<ul>
<li><a href="http://info.neotechnology.com/rs/neotechnology/images/GraphDatabases.pdf">Graph Databases</a> (PDF)</li>
<li><a href="http://neo4j.com/books/graph-databases/">Graph Databases 2nd edition</a> <em>(account required)</em></li>
</ul>

<h3>.NET Framework</h3>

<ul>
<li><a href="http://weblogs.asp.net/zeeshanhirani/my-christmas-present-to-the-entity-framework-community">Entity Framework</a></li>
<li><a href="https://en.wikibooks.org/wiki/Game_Creation_with_XNA">Game Creation with XNA</a></li>
<li><a href="http://foxcentral.net/microsoft/NETforVFPDevelopers.htm">.NET for Visual FoxPro Developers</a></li>
<li><a href="http://download.red-gate.com/ebooks/DotNet/Perf_Test_and_opt_eBook.zip">.NET Performance Testing and Optimization - The Complete Guide</a> <em>(RedGate, By Paul Glavich and Chris Farrell)</em></li>
<li><a href="http://download.red-gate.com/ebooks/DotNet/Under_the_Hood_of_.NET_Management.pdf">Under the Hood of .NET Memory Management</a> (PDF) <em>(RedGate, By Chris Farrell and Nick Harrison)</em></li>
<li><a href="http://www.infoq.com/minibooks/vsnettt">Visual Studio .NET Tips and Tricks</a> (VS 2003-2005 only)</li>
</ul>

<h3>NoSQL</h3>

<ul>
<li><a href="http://guide.couchdb.org">CouchDB: The Definitive Guide</a></li>
<li><a href="http://publications.lib.chalmers.se/records/fulltext/155048.pdf">Extracting Data from NoSQL Databases: A Step towards Interactive Visual Analysis of NoSQL Data</a> - Petter Nasholm (PDF)</li>
<li><a href="http://graphdatabases.com">Graph Databases</a></li>
<li><a href="https://github.com/chicagoruby/MongoDB_Koans">MongoDB Koans</a></li>
<li><a href="https://www.syncfusion.com/resources/techportal/ebooks/mongodb">MongoDB Succinctly, Syncfusion</a> (PDF, Kindle) <em>(Just fill the fields with any values)</em></li>
<li><a href="http://www.christof-strauch.de/nosqldbs.pdf">NoSQL Databases</a> - Christof Strauch (PDF)</li>
<li><a href="http://openmymind.net/2011/3/28/The-Little-MongoDB-Book/">The Little MongoDB Book</a></li>
<li><a href="http://openmymind.net/2012/1/23/The-Little-Redis-Book/">The Little Redis Book</a> - K. Seguin (PDF, Epub)</li>
<li><a href="http://littleriakbook.com">The Little Riak Book</a></li>
</ul>

<h3>Oberon</h3>

<ul>
<li><a href="http://www.ethoberon.ethz.ch/WirthPubl/">Algorithms and Data-Structures</a></li>
<li><a href="http://ssw.jku.at/Research/Books/Oberon2.pdf">Object-Oriented Programming in Oberon-2</a> (PDF)</li>
<li><a href="http://www.ethoberon.ethz.ch">Programming in Oberon</a> (PDF)</li>
</ul>

<h3>Objective-C</h3>

<ul>
<li><a href="http://google-styleguide.googlecode.com/svn/trunk/objcguide.xml">Google's Objective-C Style Guide</a></li>
<li><a href="https://developer.apple.com/library/ios/documentation/Cocoa/Conceptual/OOP_ObjC/Introduction/Introduction.html#//apple_ref/doc/uid/TP40005149">Object-Oriented Programming with Objective-C</a></li>
<li><a href="https://www.syncfusion.com/resources/techportal/ebooks/objective-c">Objective-C Succinctly, Syncfusion</a> (PDF, Kindle) <em>(Just fill the fields with any values)</em></li>
<li><a href="https://developer.apple.com/library/mac/documentation/Cocoa/Conceptual/ProgrammingWithObjectiveC/Introduction/Introduction.html">Programming With Objective-C</a></li>
<li><a href="http://tryobjectivec.codeschool.com">Try Objective-C Book</a></li>
</ul>

<h3>OCaml</h3>

<ul>
<li><a href="http://caml.inria.fr/pub/docs/oreilly-book/">Developing Applications With Objective Caml</a></li>
<li><a href="https://realworldocaml.org/v1/en/html/">Real World OCaml</a></li>
<li><a href="http://greenteapress.com/thinkocaml/index.html">Think OCaml</a> - Allen B. Downey and Nicholas Monje</li>
<li><a href="http://ocaml.github.io/ocamlunix/">Unix System Programming in OCaml</a></li>
<li><a href="http://pauillac.inria.fr/~remy/cours/appsem/">Using, Understanding, and Unraveling The OCaml Language: From Practice to Theory and vice versa</a> - Didier Rémy</li>
</ul>

<h3>Octave</h3>

<ul>
<li><a href="https://en.wikibooks.org/wiki/Octave_Programming_Tutorial">Octave Programming</a></li>
</ul>

<h3>OpenGL ES</h3>

<ul>
<li><a href="http://chimera.labs.oreilly.com/books/1234000001814/index.html">iPhone 3D Programming - Developing Graphical Applications with OpenGL ES</a> - Philip Rideout</li>
</ul>

<h3>OpenMP</h3>

<ul>
<li><a href="http://www2.cs.uh.edu/~estrabd/openmp-combined.pdf">A Guide To OpenMP</a> (PDF)</li>
<li><a href="http://www.openmp.org/mp-documents/OpenMP4.0.0.pdf">OpenMP Application Programming Interface Standard Version 4.0</a> (PDF)</li>
</ul>

<h3>OpenResty</h3>

<ul>
<li><a href="https://www.gitbook.com/book/openresty/programming-openresty/details">Programming OpenResty</a></li>
</ul>

<h3>OpenSCAD</h3>

<ul>
<li><a href="https://en.wikibooks.org/wiki/OpenSCAD_User_Manual">OpenSCAD User Manual</a></li>
</ul>

<h3>Oracle Server</h3>

<ul>
<li><a href="http://tahiti.oracle.com">Oracle's Guides and Manuals</a></li>
</ul>

<h3>Parrot / Perl 6</h3>

<ul>
<li><a href="https://en.wikibooks.org/wiki/Perl_6_Programming">Perl 6 Programming</a></li>
<li><a href="https://github.com/perl6/book/">Using Perl 6</a> (work in progress)</li>
</ul>

<h3>PC-BSD</h3>

<ul>
<li><a href="http://wiki.pcbsd.org/index.php/PC-BSD%C2%AE_Users_Handbook">PC-BSD® Users Handbook</a></li>
</ul>

<h3>Perl</h3>

<ul>
<li><a href="https://www.perl.org/books/beginning-perl/">Beginning Perl</a></li>
<li><a href="http://perlhacks.com/dmp.pdf">Data Munging with Perl</a> (PDF)</li>
<li><a href="http://www.masonbook.com/book/">Embedding Perl in HTML with Mason</a> - D. Rolsky, K. Williams</li>
<li><a href="http://cslibrary.stanford.edu/108/EssentialPerl.pdf">Essential Perl</a> (PDF)</li>
<li><a href="http://www.billhails.net/Book/">Exploring Programming Language Architecture in Perl</a></li>
<li><a href="http://www.extremeperl.org/bk/home">Extreme Perl</a> - R. Nagier (HTML, PDF)</li>
<li><a href="http://hop.perl.plover.com/book/">Higher-Order Perl</a> - M. J. Dominus (PDF)</li>
<li><a href="https://www.perl.org/books/impatient-perl/">Impatient Perl</a></li>
<li><a href="http://www.greenteapress.com/perl/">Learning Perl The Hard Way</a></li>
<li><a href="http://chimera.labs.oreilly.com/books/1234000001527">Mastering Perl</a> - brian d foy</li>
<li><a href="http://www.onyxneon.com/books/modern_perl/">Modern Perl 5</a></li>
<li><a href="http://lwp.interglacial.com/index.html">Perl &amp; LWP</a></li>
<li><a href="http://www.faqs.org/docs/perl5int/">Perl 5 Internals</a></li>
<li><a href="http://www.globalspin.com/thebook/">Perl for the Web</a> - C. Radcliff</li>
<li><a href="http://perltraining.com.au/notes.html">Perl Training Australia - Course Notes</a></li>
<li><a href="http://handbook.plackperl.org">Plack Handbook</a></li>
<li><a href="http://modperlbook.org">Practical mod_perl</a> - Stas Bekman, Eric Cholet</li>
<li><a href="https://github.com/PerlGameDev/SDL_Manual">SDL::Manual Writing Games in Perl</a></li>
<li><a href="http://template-toolkit.org/docs/index.html">Template Toolkit Documentation</a></li>
<li><a href="https://github.com/castaway/dbix-class-book">The DBIx-Class Book</a></li>
<li><a href="http://sourceforge.net/projects/pdl/files/PDL_2013/PDL-Book/PDL-Book-20130322.pdf/download">The PDL Book</a> (PDF)</li>
<li><a href="http://www.oreilly.com/openbook/webclient/">Web Client Programming with Perl</a></li>
</ul>

<h3>PHP</h3>

<ul>
<li>CakePHP Framework</li>
<li><a href="http://book.cakephp.org/2.0/_downloads/en/CakePHPCookbook.pdf">CakePHP Cookbook 2.x</a> (PDF)</li>
<li>Drupal Framework</li>
<li>Drupal 7</li>
<li><a href="https://www.drupal.org/files/tiny-book-of-rules.pdf">The Tiny Book of Rules</a> (PDF)</li>
<li><a href="http://www.hackingwithphp.com">Hacking with PHP</a></li>
<li>Laravel Framework</li>
<li>Laravel 3</li>
<li><a href="http://daylerees.com/codehappy">Laravel: Code Happy</a> - Dayle Rees</li>
<li>Laravel 4</li>
<li><a href="http://daylerees.com/codebright">Laravel: Code Bright</a> - Dayle Rees</li>
<li>Laravel 5</li>
<li><a href="https://leanpub.com/laravel-5">Laravel 5.x Official Documentation. Synced Daily</a></li>
<li><a href="http://www.laravelbestpractices.com">Laravel Best Practices</a></li>
<li><a href="https://daylerees.com/codesmart/">Laravel: Code Smart</a> - Dayle Rees</li>
<li><a href="https://leanpub.com/laravelcollectionsunraveled">Laravel Collections Unraveled</a></li>
<li><a href="http://www.informit.com/content/images/013147149X/downloads/013147149X_book.pdf">PHP 5 Power Programming</a> (PDF)</li>
<li><a href="https://phpbestpractices.org">PHP Best Practices</a></li>
<li><a href="http://www.phpinternalsbook.com">PHP Internals Book</a></li>
<li><a href="http://daylerees.com/php-pandas/">PHP Pandas</a> - Dayle Rees</li>
<li><a href="https://en.wikibooks.org/wiki/PHP_Programming">PHP Programming</a></li>
<li><a href="http://phpsec.org/projects/guide/">PHP Security Guide</a></li>
<li><a href="http://www.phptherightway.com">PHP: The Right Way</a></li>
<li><a href="http://www.hackingwithphp.com">Practical PHP Programming</a></li>
<li><a href="http://www.giorgiosironi.com/2009/12/practical-php-testing-is-here.html">Practical PHP Testing</a></li>
<li><a href="https://phpsecurity.readthedocs.org/en/latest/">Survive The Deep End: PHP Security</a></li>
<li>Symfony Framework</li>
<li><a href="http://symfony.com/doc/2.8/book/">The Symfony Book 2.x</a></li>
<li><a href="http://symfony.com/doc/master/book/">The Symfony Book 3.x</a></li>
<li><a href="https://paragonie.com/book/pecl-libsodium">Using Libsodium in PHP Projects</a></li>
</ul>

<h3>PicoLisp</h3>

<ul>
<li><a href="https://github.com/tj64/picolisp-by-example">PicoLisp by Example</a></li>
<li><a href="https://github.com/tj64/picolisp-works">PicoLisp Works</a></li>
</ul>

<h3>PostgreSQL</h3>

<ul>
<li><a href="http://www.postgresql.org/docs/">Postgres Official Documentation</a></li>
<li><a href="https://www.syncfusion.com/resources/techportal/ebooks/postgres">Postgres Succinctly</a> (PDF, Kindle) <em>(Just fill the fields with any values)</em></li>
<li><a href="http://www.faqs.org/docs/ppbook/book1.htm">Practical PostgreSQL</a></li>
</ul>

<h3>PowerShell</h3>

<ul>
<li><a href="https://www.gitbook.com/book/devopscollective/creating-html-reports-in-powershell/details">Creating HTML Reports in PowerShell</a> (PDF,ePub,HTML)</li>
<li><a href="https://www.gitbook.com/book/devopscollective/devops-the-ops-perspective/details">DevOps: The Ops Perspective</a> (PDF, ePub, MOBI)</li>
<li><a href="https://www.gitbook.com/book/devopscollective/ditch-excel-making-historical-trend-reports-in-po/details">Ditch Excel: Making Historical &amp; Trend Reports in PowerShell</a>(PDF, ePub, MOBI)</li>
<li><a href="https://www.gitbook.com/book/devopscollective/a-unix-person-s-guide-to-powershell/details">Introduction to PowerShell for Unix People</a> (PDF, ePub, HTML)</li>
<li><a href="http://www.ravichaganti.com//blog/wp-content/uploads/2010/12/A%20layman's%20guide%20to%20PowerShell%202.0%20remoting-v2.pdf">Layman’s Guide to PowerShell 2.0 remoting</a> (PDF)</li>
<li><a href="http://powershell.com/cs/login.aspx?ReturnUrl=%2fcs%2fblogs%2febook%2fdefault.aspx">Mastering PowerShell</a></li>
<li><a href="http://www.jonathanmedd.net/wp-content/uploads/2010/09/PowerShell_2_One_Cmdlet_at_a_Time.pdf">PowerShell 2.0 – One CMDLET At A Time</a> (PDF)</li>
<li><a href="https://www.syncfusion.com/resources/techportal/ebooks/powershell">PowerShell Succinctly, Syncfusion</a> (PDF, Kindle) <em>(Just fill the fields with any values)</em></li>
<li><a href="https://www.gitbook.com/book/devopscollective/secrets-of-powershell-remoting/details">Secrets of PowerShell Remoting</a> (PDF, ePub, MOBI)</li>
<li><a href="https://www.gitbook.com/book/devopscollective/the-big-book-of-powershell-error-handling/details">The Big Book of PowerShell Error Handling</a> (PDF, ePub, MOBI)</li>
<li><a href="https://www.gitbook.com/book/devopscollective/the-big-book-of-powershell-gotchas/details">The Big Book of PowerShell Gotchas</a> (PDF, ePub, MOBI)</li>
<li><a href="https://www.penflip.com/powershellorg/the-dsc-book">The DSC Book</a> (PDF, ePub, HTML)</li>
<li><a href="https://www.gitbook.com/book/devopscollective/the-monad-manifesto-annotated/details">The Monad Manifesto - Annotated</a> (PDF, ePub, MOBI)</li>
<li><a href="https://www.gitbook.com/book/devopscollective/why-powershell-/details">Why PowerShell?</a> (PDF, ePub, MOBI)</li>
<li><a href="https://www.gitbook.com/book/devopscollective/windows-powershell-networking-guide/details">Windows PowerShell Networking Guide</a> (PDF, ePub, MOBI)</li>
</ul>

<h3>Processing</h3>

<ul>
<li><a href="http://natureofcode.com/book/">The Nature of Code: Simulating Natural Systems with Processing</a></li>
</ul>

<h3>Prolog</h3>

<ul>
<li><a href="http://www.amzi.com/AdventureInProlog/">Adventure in Prolog</a></li>
<li><a href="http://bookboon.com/en/applications-of-prolog-ebook">Applications of Prolog</a></li>
<li><a href="http://arxiv.org/abs/0911.2899">Coding Guidelines for Prolog</a> - Michael A. Covington, Roberto Bagnara, Richard A. O'Keefe, Jan Wielemaker, Simon Price</li>
<li><a href="http://www.cis.upenn.edu/~matuszek/Concise%20Guides/Concise%20Prolog.html">Concise Intro to Prolog</a></li>
<li><a href="http://www.amzi.com/ExpertSystemsInProlog/">Expert Systems in Prolog</a></li>
<li><a href="http://www.gprolog.org/manual/gprolog.pdf">GNU Prolog Manual</a> (PDF)</li>
<li><a href="http://www.j-paine.org/prolog/mathnotes/files/pms/pms.html">Introduction to Prolog for Mathematicians</a> - J. Ireson-Ireson-Paine</li>
<li><a href="http://www.learnprolognow.org">Learn Prolog Now!</a></li>
<li><a href="http://www.ida.liu.se/~ulfni53/lpp/">Logic, Programming and Prolog (2ed)</a></li>
<li><a href="http://cs.union.edu/~striegnk/courses/nlp-with-prolog/html/">Natural Language Processing Techniques in Prolog</a> - P. Blackburn, K. Striegnitz</li>
<li><a href="http://www.mtome.com/Publications/PNLA/pnla-digital.html">Prolog and Natural - Language Analysis</a> - Fernando C. N. Pereira, Stuart M. Shieber</li>
<li><a href="https://sites.google.com/site/prologforprogrammers/">Prolog for Programmers</a></li>
<li><a href="https://sites.google.com/site/prologsite/prolog-problems">Prolog Problems</a> - Werner Hett</li>
<li><a href="http://bookboon.com/en/prolog-techniques-applications-of-prolog-ebook">Prolog Techniques</a></li>
<li><a href="http://www.cpp.edu/~jrfisher/www/prolog_tutorial/contents.html">Prolog Tutorial</a></li>
<li><a href="http://www.cs.bris.ac.uk/~flach/SimplyLogical.html">Simply Logical</a> - P. Flach (HTML, PDF)</li>
<li><a href="https://dtai.cs.kuleuven.be/ppcbook/">The First 10 Prolog Programming Contests</a> - Bart Demoen, Phuong-Lan Nguyen, Tom Schrijvers, Remko Tronçon</li>
<li><a href="http://wambook.sourceforge.net">Warren's Abstract Machine: A Tutorial Reconstruction</a> - Hassan A¨it-Kaci</li>
</ul>

<h4>Constraint Logic Programming (extended Prolog)</h4>

<ul>
<li><a href="http://anclp.pl">A Gentle Guide to Constraint Logic Programming via ECLiPSe</a></li>
</ul>

<h3>PureScript</h3>

<ul>
<li><a href="https://leanpub.com/purescript/read">PureScript By Example</a> - Phil Freeman</li>
</ul>

<h3>Python</h3>

<ul>
<li><a href="https://en.wikibooks.org/wiki/A_Beginner%27s_Python_Tutorial">A Beginner's Python Tutorial</a></li>
<li><a href="https://github.com/RafeKettler/magicmethods">A Guide to Python's Magic Methods</a> - Rafe Kettler</li>
<li><a href="http://automatetheboringstuff.com/chapter0/">Automate the Boring Stuff</a> - Al Sweigart</li>
<li><a href="http://biopython.org/DIST/docs/tutorial/Tutorial.pdf">Biopython</a> (PDF)</li>
<li><a href="http://www.itmaybeahack.com/book/oodesign-python-2.1/latex/BuildingSkillsinOODesign.pdf">Building Skills in Object-Oriented Design (Python)</a> (PDF) (2.1.1)</li>
<li><a href="http://www.itmaybeahack.com/book/python-2.6/latex/BuildingSkillsinPython.pdf">Building Skills in Python</a> (PDF) (2.6)</li>
<li><a href="http://python.swaroopch.com">Byte of Python</a> (3.5.1)</li>
<li><a href="http://python.net/~goodger/projects/pycon/2007/idiomatic/handout.html">Code Like a Pythonista: Idiomatic Python</a></li>
<li><a href="https://www.codecademy.com/learn/python">CodeCademy Python</a></li>
<li><a href="http://composingprograms.com">Composing Programs</a> (3.x)</li>
<li><a href="http://www.brpreiss.com/books/opus7/html/book.html">Data Structures and Algorithms in Python</a> - B. R. Preiss</li>
<li><a href="http://www.diveintopython.net">Dive into Python</a> - Mark Pilgrim (2.3)</li>
<li><a href="http://getpython3.com/diveintopython3/">Dive into Python 3</a> - Mark Pilgrim (3.0)</li>
<li><a href="http://www.fullstackpython.com">Full Stack Python</a></li>
<li><a href="https://developers.google.com/edu/python/">Google's Python Class</a> (2.4 - 2.x)</li>
<li><a href="https://github.com/google/styleguide">Google's Python Style Guide</a></li>
<li><a href="http://inventwithpython.com/hacking/chapters/">Hacking Secret Cyphers with Python</a> - Al Sweigart (3.3)</li>
<li><a href="http://ianozsvald.com/HighPerformancePythonfromTrainingatEuroPython2011_v0.2.pdf">High Performance Python</a> (PDF)</li>
<li><a href="http://docs.python-guide.org/en/latest/">Hitchhiker's Guide to Python!</a> (2.6)</li>
<li><a href="http://www.greenteapress.com/thinkpython/thinkCSpy/">How to Think Like a Computer Scientist: Learning with Python</a> - Allen B. Downey, Jeff Elkner and Chris Meyers (2.4)</li>
<li><a href="http://interactivepython.org/courselib/static/thinkcspy/index.html">How to Think Like a Computer Scientist: Learning with Python, Interactive Edition</a> (3.2)</li>
<li><a href="http://book.pythontips.com/en/latest/index.html#">Intermediate Python</a> - Muhammad Yasoob Ullah Khalid (1st edition)</li>
<li><a href="http://python-ebook.blogspot.co.uk">Introduction to Programming Using Python</a> - Cody Jackson (1st edition) (2.3)</li>
<li><a href="http://opentechschool.github.io/python-beginners/en/">Introduction to Programming with Python</a> (3.3)</li>
<li><a href="http://kracekumar.com/post/71171551647/introduction-to-python">Introduction to python</a> - Kracekumar (2.7.3)</li>
<li><a href="http://inventwithpython.com/chapters/">Invent Your Own Computer Games With Python</a> - Al Sweigart (3.1)</li>
<li><a href="http://learnpythonbreakpython.com">Learn Python, Break Python</a></li>
<li><a href="https://learnxinyminutes.com/docs/python/">Learn Python in Y minutes</a></li>
<li><a href="http://learnpythonthehardway.org/book/">Learn Python The Hard Way</a> (2.5 - 2.6)</li>
<li><a href="https://www.ida.liu.se/~732A47/literature/PythonBook.pdf">Learn to Program Using Python</a> - Cody Jackson (PDF)</li>
<li><a href="http://www.freenetpages.co.uk/hp/alan.gauld/">Learning to Program</a> (2.3)</li>
<li><a href="http://python.cs.southern.edu/pythonbook/pythonbook.pdf">Learning to Program with Python</a> - Richard L. Halterman (PDF) (3.2)</li>
<li><a href="https://github.com/jrjohansson/scientific-python-lectures">Lectures on scientific computing with python</a> - J.R. Johansson (2.7)</li>
<li><a href="http://inventwithpython.com/pygame/chapters/">Making Games with Python &amp; Pygame</a> - Al Sweigart (2.7)</li>
<li><a href="http://www.clips.ua.ac.be/sites/default/files/modeling-creativity.pdf">Modeling Creativity: Case Studies in Python</a> - Tom D. De Smedt (PDF)</li>
<li><a href="http://www.nltk.org/book/">Natural Language Processing with Python</a> (2.5)</li>
<li><a href="https://en.wikibooks.org/wiki/Non-Programmer%27s_Tutorial_for_Python_2.6">Non-Programmer's Tutorial for Python 2.6</a> (2.6)</li>
<li><a href="https://en.wikibooks.org/wiki/Non-Programmer%27s_Tutorial_for_Python_3">Non-Programmer's Tutorial for Python 3</a> (3.3)</li>
<li><a href="http://python3porting.com">Porting to Python 3: An In-Depth Guide</a> (2.6 - 2.x &amp; 3.1 - 3.x)</li>
<li><a href="https://launchpadlibrarian.net/165489933/PracticalProgrammingPython2014.pdf">Practical Programming in Python</a> - Jeffrey Elkner (PDF)</li>
<li><a href="http://interactivepython.org/runestone/static/pythonds/index.html">Problem Solving with Algorithms and Data Structure using Python</a> - Bradley N. Miller and David L. Ranum</li>
<li><a href="http://programarcadegames.com">Program Arcade Games With Python And Pygame</a> (3.3)</li>
<li><a href="http://programmingcomputervision.com/downloads/ProgrammingComputerVision_CCdraft.pdf">Programming Computer Vision with Python</a> (PDF)</li>
<li><a href="https://docs.python.org/2/download.html">Python 2 Official Documentation</a> (PDF, HTML, TEXT) (2.x)</li>
<li><a href="http://infohost.nmt.edu/tcc/help/pubs/python/web/">Python 2.7 quick reference</a> - New Mexico Tech (2.7)</li>
<li><a href="https://docs.python.org/3/download.html">Python 3 Official Documentation</a> (PDF, EPUB, HTML, TEXT) (3.x)</li>
<li><a href="http://chimera.labs.oreilly.com/books/1230000000393/index.html">Python Cookbook</a> - David Beazley</li>
<li><a href="http://www.kevinsheppard.com/images/0/09/Python_introduction.pdf">Python for Econometrics</a> - Kevin Sheppard (PDF) (2.7.5)</li>
<li><a href="http://www.pythonlearn.com/book.php">Python for Informatics: Exploring Information</a> (2.7.5)</li>
<li><a href="http://pymbook.readthedocs.org/en/latest/">Python for you and me</a> (2.7.3)</li>
<li><a href="http://pymbook.readthedocs.org/en/py3/">Python for you and me</a> (3.x)</li>
<li><a href="http://docs.python-guide.org/en/latest/">Python Guide</a></li>
<li><a href="http://safehammad.com/downloads/python-idioms-2014-01-16.pdf">Python Idioms</a> (PDF)</li>
<li><a href="http://www.greenteapress.com/pythonhydro/pythonhydro.html">Python in Hydrology</a> - Sat Kumar Tomer</li>
<li><a href="https://github.com/gregmalcolm/python_koans">Python Koans</a> (2.7 or 3.x)</li>
<li><a href="https://pymotw.com/2/">Python Module of the Week</a></li>
<li><a href="http://anandology.com/python-practice-book/index.html">Python Practice Book</a> (2.7.1)</li>
<li><a href="http://pythonpracticeprojects.com">Python Practice Projects</a></li>
<li><a href="https://upload.wikimedia.org/wikipedia/commons/9/91/Python_Programming.pdf">Python Programming</a> (PDF) (2.6)</li>
<li><a href="http://scipy-lectures.github.io">Python Scientific Lecture Notes</a></li>
<li><a href="http://info.baustatik.uni-due.de/Lehre/CM-AOS/Scripts/Abaqus/Python%20Scripting%20for%20Computational%20Science.pdf">Python Scripting for Computational Science</a> - Hans Petter Langtangen (PDF)</li>
<li><a href="http://effbot.org/librarybook/">Python Standard Library</a> - Fredrik Lundh</li>
<li><a href="http://www.briggs.net.nz/snake-wrangling-for-kids.html">Snake Wrangling For Kids</a> (3.x)</li>
<li><a href="http://chimera.labs.oreilly.com/books/1234000000754/index.html">Test-Driven Web Development with Python</a> (3.3 - 3.x)</li>
<li><a href="http://gnosis.cx/TPiP/">Text Processing in Python</a> - David Mertz (2.3 - 2.x)</li>
<li><a href="http://www.jython.org/jythonbook/en/1.0">The Definitive Guide to Jython, Python for the Java Platform</a> - Josh Juneau, Jim Baker, Victor Ng, Leo Soto, Frank Wierzbicki (2.5)</li>
<li><a href="http://docs.quantifiedcode.com/python-anti-patterns/">The Little Book of Python Anti-Patterns</a> (<a href="https://github.com/quantifiedcode/python-anti-patterns">Source</a>)</li>
<li><a href="http://niche-canada.org/research/niche-digital-infrastructure-project/the-programming-historian/">The Programming Historian</a> - William J. Turkel, Adam Crymble and Alan MacEachern</li>
<li><a href="http://mirnazim.org/writings/python-ecosystem-introduction/">The Python Ecosystem: An Introduction</a></li>
<li><a href="http://www.greenteapress.com/thinkpython/">Think Python</a> - Allen B. Downey (2.x &amp; 3.0)</li>
<li><a href="http://web2py.com/book">Web2py: Complete Reference Manual, 6th Edition (pre-release)</a> (2.5 - 2.x)</li>
<li><a href="http://interactivepython.org/runestone/static/pythonds/index.html">Welcome to Problem Solving with Algorithms and Data Structures</a> - Brad Miller and David Ranum</li>
<li><a href="https://en.wikibooks.org/wiki/Python_Programming">Wikibooks: Python Programming</a> (2.7)</li>
</ul>

<h4>Django</h4>

<ul>
<li><a href="https://media.readthedocs.org/pdf/django/1.5.x/django.pdf">Django Official Documentation</a> (PDF) (1.5)</li>
<li><a href="https://media.readthedocs.org/pdf/django/1.7.x/django.pdf">Django Official Documentation</a> (PDF) (1.7)</li>
<li><a href="https://media.readthedocs.org/pdf/django/1.9.x/django.pdf">Django Official Documentation</a> (PDF) (1.9)</li>
<li><a href="http://agiliq.com/books/djenofdjango/">Djen of Django</a></li>
<li><a href="http://www.effectivedjango.com">Effective Django</a> (1.5)</li>
<li><a href="http://masteringdjango.com">Mastering Django</a> (1.8)</li>
<li><a href="http://www.tangowithdjango.com/book17/">Tango With Django</a> (1.7)</li>
<li><a href="http://chimera.labs.oreilly.com/books/1234000000754/index.html">Test-Driven Web Development with Python</a> (1.8)</li>
</ul>

<h4>Flask</h4>

<ul>
<li><a href="https://exploreflask.com">Explore Flask</a> - Robert Picard</li>
<li><a href="http://flask.pocoo.org/docs/0.10/tutorial/">Flask Microframework</a></li>
<li><a href="http://blog.miguelgrinberg.com/post/the-flask-mega-tutorial-part-i-hello-world">The Flask Mega-Tutorial</a> - Miguel Grinberg (0.9)</li>
</ul>

<h4>Kivy</h4>

<ul>
<li><a href="http://kivy.org/docs/pdf/Kivy-latest.pdf">Kivy Programming Guide</a> (PDF)</li>
</ul>

<h4>Pandas</h4>

<ul>
<li><a href="https://bitbucket.org/hrojas/learn-pandas">Learn Pandas</a> - Hernan Rojas (0.13.0)</li>
</ul>

<h4>Pyramid</h4>

<ul>
<li><a href="http://docs.pylonsproject.org/projects/pyramid-tutorials/en/latest/humans/index.html">Pyramid for humans</a></li>
</ul>

<h3>QML</h3>

<ul>
<li><a href="http://qmlbook.github.io">Qt5 Cadaques</a> - Juergen Bocklage-Ryannel and Johan Thelin (HTML, PDF, ePub) (work in progress)</li>
</ul>

<h3>R</h3>

<ul>
<li><a href="http://adv-r.had.co.nz">Advanced R Programming</a> - Hadley Wickham</li>
<li><a href="http://cran.r-project.org/web/packages/IPSUR/vignettes/IPSUR.pdf">Introduction to Probability and Statistics Using R</a> - G. Jay Kerns (PDF)</li>
<li><a href="http://health.adelaide.edu.au/psychology/ccs/teaching/lsr/">Learning Statistics with R</a> - Daniel Navarro</li>
<li><a href="https://github.com/yuanlisky/learnR">learnR</a> - (Work in Progress) - Kun Ren</li>
<li><a href="http://cran.r-project.org/doc/contrib/Faraway-PRA.pdf">Practical Regression and Anova using R</a> - Julian J. Faraway (PDF)</li>
<li><a href="http://www.columbia.edu/~cjd11/charles_dimaggio/DIRE/resources/spatialEpiBook.pdf">R for spatial analysis</a> (PDF)</li>
<li><a href="http://www.johndcook.com/blog/r_language_for_programmers/">R language for Programmers</a> - John D. Cook</li>
<li><a href="http://r-pkgs.had.co.nz">R packages</a> - Hadley Wickham</li>
<li><a href="http://www.columbia.edu/~cjd11/charles_dimaggio/DIRE/resources/R/practicalsBookNoAns.pdf">R practicals</a> (PDF)</li>
<li><a href="https://en.wikibooks.org/wiki/R_Programming">R Programming</a></li>
<li><a href="https://leanpub.com/rprogramming">R Programming for Data Science</a> (Needs valid email)</li>
<li><a href="https://www.syncfusion.com/resources/techportal/ebooks/rsuccinctly">R Succinctly, Syncfusion</a> (PDF, Kindle) <em>(Just fill the fields with any values)</em></li>
<li><a href="http://www.burns-stat.com/pages/Tutor/R_inferno.pdf">The R Inferno</a> - Patrick Burns (PDF)</li>
<li><a href="http://stat.ethz.ch/R-manual/R-patched/doc/html/">The R Language</a></li>
<li><a href="http://cran.r-project.org/manuals.html">The R Manuals</a></li>
</ul>

<h3>Racket</h3>

<ul>
<li><a href="http://www.ccs.neu.edu/home/matthias/HtDP2e/">How to Design Programs 2e</a></li>
<li><a href="http://cs.brown.edu/courses/cs173/2012/book/index.html">Programming Languages: Application and Interpretation</a></li>
<li><a href="http://it-ebooks.info/book/2628/">Realm of Racket</a></li>
<li><a href="http://docs.racket-lang.org/guide/index.html">The Racket Guide</a></li>
</ul>

<h3>Raspberry Pi</h3>

<ul>
<li><a href="https://leanpub.com/RPiMRE">Raspberry Pi: Measure, Record, Explore</a></li>
<li><a href="http://www.cs.unca.edu/~bruce/Fall14/360/RPiUsersGuide.pdf">Raspberry Pi Users Guide</a> - Eben Upton (PDF)</li>
</ul>

<h3>REBOL</h3>

<ul>
<li><a href="http://www.lulu.com/shop/nick-antonaccio/learn-rebol/ebook/product-17383182.html">Learn REBOL</a> - Nick Antonaccio</li>
</ul>

<h3>Ruby</h3>

<ul>
<li><a href="https://github.com/bbatsov/ruby-style-guide">A community-driven Ruby style guide</a></li>
<li><a href="https://www.codecademy.com/learn/ruby">CodeCademy Ruby</a></li>
<li><a href="https://leanpub.com/developing-games-with-ruby/read">Developing Games With Ruby</a></li>
<li><a href="http://goo.gl/1qrMUN">I Love Ruby</a></li>
<li><a href="https://launchschool.com/books/ruby">Introduction to Programming with Ruby</a> - Launch School</li>
<li><a href="http://jasonkim.ca/projects/just_enough_ruby_to_get_by/">Just Enough Ruby to Get By</a></li>
<li><a href="http://learnrubythehardway.org/book/">Learn Ruby the hard way</a></li>
<li><a href="http://pine.fm/LearnToProgram/">Learn to Program, by Chris Pine</a></li>
<li><a href="http://www.humblelittlerubybook.com">Mr. Neighborly's Humble Little Ruby Book</a></li>
<li><a href="https://launchschool.com/books/oo_ruby">Object Oriented Programming with Ruby</a> - Launch School</li>
<li><a href="https://github.com/elm-city-craftworks/practicing-ruby-manuscripts">Practicing Ruby</a></li>
<li><a href="http://ruby-doc.com/docs/ProgrammingRuby/">Programming Ruby</a></li>
<li><a href="http://www.techotopia.com/index.php/Ruby_Essentials">Ruby Essentials</a></li>
<li><a href="http://ruby-hacking-guide.github.io">Ruby Hacking Guide</a></li>
<li><a href="https://www.ruby-lang.org/en/documentation/quickstart/">Ruby in Twenty Minutes</a></li>
<li><a href="http://www.rubykoans.com">Ruby Koans</a></li>
<li><a href="http://rubylearning.com">Ruby Learning</a></li>
<li><a href="http://www.linuxtopia.org/online_books/programming_books/ruby_tutorial/">Ruby Programming</a></li>
<li><a href="http://www.rubyist.net/~slagell/ruby/">Ruby User's Guide</a></li>
<li><a href="http://ruby.bastardsbook.com">The Bastards Book of Ruby</a></li>
<li><a href="http://www.caliban.org/ruby/rubyguide.shtml">The Unofficial Ruby Usage Guide (at Google)</a> - Ian Macdonald</li>
<li><a href="http://poignant.guide">Why's (Poignant) Guide to Ruby</a></li>
</ul>

<h4>RSpec</h4>

<ul>
<li><a href="http://betterspecs.org">Better Specs (RSpec Guidelines with Ruby)</a></li>
</ul>

<h4>Ruby on Rails</h4>

<ul>
<li><a href="https://github.com/bbatsov/rails-style-guide">A community-driven Rails style guide</a></li>
<li><a href="http://apionrails.icalialabs.com/book">Building REST APIs with Rails</a></li>
<li><a href="https://leanpub.com/combinators/read">Kestrels, Quirky Birds, and Hopeless Egocentricity</a></li>
<li><a href="http://www.thinkful.com/learn/ruby-on-rails-tutorial/">Learn Ruby on Rails as You Modify a Craigslist Clone</a></li>
<li><a href="http://objectsonrails.com">Objects on Rails</a></li>
<li><a href="http://guides.railsgirls.com">Rails Girls Guides</a></li>
<li><a href="http://www.xyzpub.com/en/ruby-on-rails/3.2/">Ruby on Rails 3.2 - Step by Step</a></li>
<li><a href="http://www.xyzpub.com/en/ruby-on-rails/4.0/">Ruby on Rails 4.0 Guide</a></li>
<li><a href="http://guides.rubyonrails.org">Ruby on Rails Guides</a></li>
<li><a href="https://www.railstutorial.org/book/">Ruby on Rails Tutorial: Learn Rails By Example</a></li>
<li><a href="https://github.com/alindeman/upgradingtorails4">Upgrading to Rails 4</a></li>
</ul>

<h4>Sinatra</h4>

<ul>
<li><a href="https://github.com/sinatra/sinatra-book">Sinatra Book</a></li>
</ul>

<h3>Rust</h3>

<ul>
<li><a href="http://rustbyexample.com">Rust by Example</a></li>
<li><a href="http://www.rustforrubyists.com/book/index.html">Rust for Rubyists</a></li>
<li><a href="http://doc.rust-lang.org/book/">The Rust Programming Language</a></li>
<li><a href="https://doc.rust-lang.org/nomicon/">The Rustonomicon</a></li>
<li><a href="http://www.oreilly.com/programming/free/files/why-rust.pdf">Why Rust?</a> (PDF)</li>
</ul>

<h3>Sage</h3>

<ul>
<li><a href="http://wstein.org/books/sagebook/sagebook.pdf">Sage for Power Users</a> - William Stein (PDF)</li>
<li><a href="http://www.sagemath.org/doc/">The Sage Manuals</a></li>
</ul>

<h3>Scala</h3>

<ul>
<li><a href="http://www.scala-lang.org/docu/files/ScalaTutorial.pdf">A Scala Tutorial for Java programmers</a> (PDF)</li>
<li><a href="http://naildrivin5.com/scalatour/">Another tour of Scala</a></li>
<li><a href="https://github.com/alexanderfefelov/eai-patterns-with-actor-model">EAI Patterns with Actor Model</a> - Vaughn Vernon</li>
<li><a href="https://twitter.github.io/effectivescala/">Effective Scala</a></li>
<li><a href="http://matt.might.net/articles/learning-scala-in-small-bites/">Learning Scala in small bites</a></li>
<li><a href="http://eed3si9n.com/learning-scalaz/">Learning Scalaz</a></li>
<li><a href="https://github.com/leithaus/XTrace/tree/monadic/src/main/book/content/">Pro Scala: Monadic Design Patterns for the Web</a></li>
<li><a href="http://homepages.cwi.nl/~ai/MScThesis-A-Izmaylova.pdf">Program Transformation in Scala</a> - Anastasia Izmaylova (PDF)</li>
<li><a href="http://www.artima.com/pins1ed/">Programming in Scala, First Edition</a> - by M. Odersky, L. Spoon, B. Venners</li>
<li><a href="http://aperiodic.net/phil/scala/s-99/">S-99: Ninety-Nine Scala Problems</a> - Phil! Gold</li>
<li><a href="http://www.scala-lang.org/old/sites/default/files/FrederikThesis.pdf">Scala &amp; Design Patterns: Exploring Language Expressivity</a> - Fredrik Skeel Løkke (PDF)</li>
<li><a href="http://www.scala-lang.org/docu/files/ScalaByExample.pdf">Scala By Example</a> - M. Odersky (PDF)</li>
<li><a href="http://examples.oreilly.com/9781449339616-files/Scala_Cookbook_bonus_chapters.pdf">Scala Cookbook: Bonus Chapters</a> - Alvin Alexander (PDF)</li>
<li><a href="https://github.com/garu/scala-for-perl5-programmers">Scala for Perl 5 Programmers</a> - Breno G. de Oliveira</li>
<li><a href="http://www.typesafe.com/resources/e-books">Scala for the Impatient (A1 Scala Level chapters)</a> - Cay S. Horstmann</li>
<li><a href="http://twitter.github.io/scala_school/">Scala School by Twitter</a></li>
<li><a href="http://www.tutorialspoint.com/scala/scala_tutorial.pdf">Scala Tutorial</a> (PDF)</li>
<li><a href="http://eed3si9n.com/tetrix-in-scala-html5-book">tetrix in Scala</a></li>
<li><a href="http://danielwestheide.com/scala/neophytes.html">The Neophyte's Guide to Scala</a> - Daniel Westheide</li>
<li><a href="https://github.com/leithaus/XTrace/tree/monadic/src/main/book/content/">Xtrace</a></li>
</ul>

<h4>Lift</h4>

<ul>
<li><a href="http://exploring.liftweb.net">Exploring Lift</a> (published earlier as "The Definitive Guide to Lift", <a href="http://groups.google.com/group/the-lift-book">PDF</a>)</li>
<li><a href="https://github.com/tjweir/liftbook">Lift</a></li>
<li><a href="http://chimera.labs.oreilly.com/books/1234000000030/index.html">Lift Cookbook</a> - Richard Dallaway</li>
<li><a href="http://simply.liftweb.net/Simply_Lift.pdf">Simply Lift</a> - David Pollak (PDF)</li>
</ul>

<h4>Play Scala</h4>

<ul>
<li><a href="http://alvinalexander.com/scala/scala-cookbook-play-framework-recipes-pdf-ebook">Play Framework Recipes</a> - Alvin Alexander</li>
</ul>

<h3>Scheme</h3>

<ul>
<li><a href="https://panicz.github.io/pamphlet/">A Pamphlet Against R. Computational Intelligence in Guile Scheme</a></li>
<li><a href="http://www.cs.rpi.edu/academics/courses/fall00/ai/scheme/reference/schintro-v14/schintro_toc.html">An Introduction to Scheme and its Implementation</a></li>
<li><a href="https://gustavus.edu/+max/concrete-abstractions.html">Concrete Abstractions: An Introduction to Computer Science Using Scheme</a> - M. Hailperin, B. Kaiser, K. Knight</li>
<li><a href="http://htdp.org">How to Design Programs</a></li>
<li><a href="http://www.cs.hut.fi/Studies/T-93.210/schemetutorial/">Scheme Tutorial</a></li>
<li><a href="http://www.cs.berkeley.edu/~bh/ss-toc2.html">Simply Scheme: Introducing Computer Science</a> - B. Harvey, M. Wright</li>
<li><a href="https://mitpress.mit.edu/sicp/full-text/book/book.html">Structure and Interpretation of Computer Programs</a></li>
<li><a href="http://www.ccs.neu.edu/home/dorai/t-y-scheme/t-y-scheme.html">Teach Yourself Scheme in Fixnum Days</a></li>
<li><a href="http://www.scheme.com/tspl3/">The Scheme Programming Language: Edition 3</a> - <a href="http://www.scheme.com/tspl4/">The Scheme Programming Language: Edition 4</a></li>
<li><a href="https://en.wikibooks.org/wiki/Write_Yourself_a_Scheme_in_48_Hours">Write Yourself a Scheme in 48 Hours</a></li>
</ul>

<h3>Scilab</h3>

<ul>
<li><a href="http://forge.scilab.org/index.php/p/docintrotoscilab/downloads/">Introduction to Scilab</a></li>
<li><a href="http://forge.scilab.org/index.php/p/docprogscilab/downloads/">Programming in Scilab</a></li>
<li><a href="http://forge.scilab.org/index.php/p/docsciextensions/downloads/">Writing Scilab Extensions</a></li>
</ul>

<h3>Scratch</h3>

<ul>
<li><a href="http://stwww.weizmann.ac.il/g-cs/scratch/scratch_en.html">Computer Science Concepts in Scratch</a></li>
</ul>

<h3>Sed</h3>

<ul>
<li><a href="http://www.grymoire.com/Unix/Sed.html">Sed - An Introduction and Tutorial</a></li>
</ul>

<h3>Self</h3>

<ul>
<li><a href="http://handbook.selflanguage.org/current/">The Self Handbook</a></li>
</ul>

<h3>Smalltalk</h3>

<ul>
<li><a href="http://www.canol.info/books/computer_programming_using_gnu_smalltalk/">Computer Programming using GNU Smalltalk</a> (PDF)</li>
<li><a href="http://files.pharo.org/books/deep-into-pharo/">Deep into Pharo</a></li>
<li><a href="http://book.seaside.st/book/table-of-contents">Dynamic Web Development with Seaside</a> - S. Ducasse, L. Renggli, C. D. Shaffer, R. Zaccone</li>
<li><a href="http://files.pharo.org/books/numerical-methods/">Numerical Methods with Pharo</a></li>
<li><a href="http://pharobyexample.org">Pharo by Example</a> (Smalltalk DE)</li>
<li><a href="http://files.pharo.org/books/enterprise-pharo/">Pharo Enterprise: a Web Perspective</a></li>
<li><a href="http://www.squeakbyexample.org">Squeak By Example</a> (Smalltalk IDE)</li>
<li><a href="http://stephane.ducasse.free.fr/FreeBooks.html">Stef's Free Online Smalltalk Books</a> (meta-list)</li>
</ul>

<h3>Spark</h3>

<ul>
<li><a href="https://www.gitbook.com/book/databricks/databricks-spark-knowledge-base/details">Databricks Spark Knowledge Base</a></li>
<li><a href="https://www.gitbook.com/book/databricks/databricks-spark-reference-applications/details">Databricks Spark Reference Applications</a></li>
<li><a href="https://www.gitbook.com/book/jaceklaskowski/mastering-apache-spark/details">Mastering Apache Spark</a></li>
</ul>

<h3>SQL (implementation agnostic)</h3>

<ul>
<li><a href="https://leanpub.com/aprimeronsql">A Primer on SQL, Second Edition</a></li>
<li><a href="http://www.cs.arizona.edu/people/rts/publications.html">Developing Time-Oriented Database Applications in SQL</a></li>
<li><a href="http://sql.learncodethehardway.org">Learn SQL The Hard Way</a></li>
<li><a href="http://philip.greenspun.com/sql/">SQL For Web Nerds</a></li>
<li><a href="http://use-the-index-luke.com">Use The Index, Luke!: A Guide To SQL Database Performance</a></li>
</ul>

<h3>SQL Server</h3>

<ul>
<li><a href="http://www.red-gate.com/community/books/ssc-7">Best of SQLServerCentral.com Vol 7</a> *(RedGate, By SQLServerCentral Authors)</li>
<li><a href="http://www.red-gate.com/community/books/sql-server-maintenance-plans">Brad's Sure Guide to SQL Server Maintenance Plans</a> <em>(RedGate, By Brad McGehee)</em></li>
<li><a href="http://download.red-gate.com/ebooks/SQL/defensive-database-programming.pdf">Defensive Database Programming</a> (PDF) <em>(RedGate, By Alex Kuznetsov)</em></li>
<li><a href="http://www.red-gate.com/community/books/exceptional-dba-book">How to Become an Exceptional DBA</a> <em>(RedGate, By Brad McGehee)</em></li>
<li><a href="http://www.red-gate.com/products/sql-development/sql-prompt/entrypage/sql-query-optimizer-ebook3">Inside the SQL Server Query Optimizer</a> <em>(RedGate, By Benjamin Nevarez)</em></li>
<li><a href="http://social.technet.microsoft.com/wiki/contents/articles/11608.e-book-gallery-for-microsoft-technologies-en.aspx#IntroducingMicrosoftSQLServer2008R2">Introducing Microsoft SQL Server 2008 R2</a></li>
<li><a href="http://social.technet.microsoft.com/wiki/contents/articles/11608.e-book-gallery-for-microsoft-technologies-en.aspx#IntroducingMicrosoftSQLServer2012">Introducing Microsoft SQL Server 2012</a></li>
<li><a href="http://blogs.msdn.com/b/microsoft_press/archive/2014/04/02/free-ebook-introducing-microsoft-sql-server-2014.aspx">Introducing Microsoft SQL Server 2014</a></li>
<li><a href="http://www.red-gate.com/community/books/mastering-sql-server-profiler">Mastering SQL Server Profiler</a> <em>(RedGate, By Brad McGehee)</em></li>
<li><a href="http://www.red-gate.com/community/books/dynamic-management-views">Performance Tuning with SQL Server Dynamic Management Views</a> <em>(RedGate, By Tim Ford and Louis Davidson)</em></li>
<li><a href="http://www.red-gate.com/community/books/protecting-data">Protecting SQL Server Data</a> <em>(RedGate, By John Magnabosco)</em></li>
<li><a href="http://social.technet.microsoft.com/wiki/contents/articles/11608.e-book-gallery-for-microsoft-technologies-en.aspx#SQLServer2012Tutorials%3AReportingServices">SQL Server 2012 Tutorials: Reporting Services</a></li>
<li><a href="http://www.red-gate.com/community/books/sql-server-backup-and-restore">SQL Server Backup and Restore</a> <em>(RedGate, By Shawn McGehee)</em></li>
<li><a href="http://www.red-gate.com/community/books/sql-server-concurrency">SQL Server Concurrency: Locking, Blocking and Row Versioning</a> <em>(RedGate, By Kalen Delaney)</em></li>
<li><a href="http://download.red-gate.com/ebooks/SQL/sql-server-execution-plans.pdf">SQL Server Execution Plans</a> (PDF) <em>(RedGate, By Grant Fritchey)</em></li>
<li><a href="http://download.red-gate.com/ebooks/SQL/eBOOK_SQLServerExecutionPlans_2Ed_G_Fritchey.pdf">SQL Server Execution Plans, Second Edition</a> (PDF) <em>(RedGate, By Grant Fritchey)</em></li>
<li><a href="http://www.red-gate.com/community/books/sql-server-hardware">SQL Server Hardware</a> <em>(RedGate, By Glenn Berry)</em></li>
<li><a href="http://www.red-gate.com/community/books/sql-server-statistics">SQL Server Statistics</a> <em>(RedGate, By Holger Schmeling)</em></li>
<li><a href="http://www.red-gate.com/community/books/sql-server-stumpers-v5">SQL Server Stumpers Vol.5</a> <em>(RedGate, By SQLServerCentral Authors)</em></li>
<li><a href="http://www.red-gate.com/community/books/sql-server-tacklebox">SQL Server Tacklebox</a> <em>(RedGate, By Rodney Landrum)</em></li>
<li><a href="http://www.red-gate.com/community/books/sql-server-transaction-log-management">SQL Server Transaction Log Management</a> <em>(RedGate, By Tony Davis and Gail Shaw)</em></li>
<li><a href="http://www.red-gate.com/community/books/art-of-filestream">The Art of SQL Server FILESTREAM</a> <em>(RedGate, By Jacob Sebastian and Sven Aelterman)</em></li>
<li><a href="http://www.red-gate.com/community/books/accidental-dba">Troubleshooting SQL Server: A Guide for the Accidental DBA</a> <em>(RedGate, By Jonathan Kehayias and Ted Krueger)</em></li>
</ul>

<h3>Standard ML</h3>

<ul>
<li><a href="http://homepages.inf.ed.ac.uk/stg/NOTES/">Programming in Standard ML '97</a> - Stephen Gilmore, University of Edinburgh</li>
<li><a href="http://www.cs.cmu.edu/~rwh/smlbook/">Programming in Standard ML, Draft</a> - Robert Harper</li>
</ul>

<h3>Subversion</h3>

<ul>
<li><a href="http://ptgmedia.pearsoncmg.com/images/0131855182/downloads/Nagel_book.pdf">Subversion Version Control</a> (PDF)</li>
<li><a href="http://svnbook.red-bean.com">Version Control with Subversion</a></li>
</ul>

<h3>Swift</h3>

<ul>
<li><a href="https://www.hackingwithswift.com">Hacking with Swift</a></li>
<li><a href="http://books.aidanf.net/learn-swift">Learn Swift</a></li>
<li><a href="https://developer.apple.com/library/prerelease/ios/documentation/Swift/Conceptual/Swift_Programming_Language/index.html">The Swift Programming Language</a> (HTML)</li>
<li><a href="https://itunes.apple.com/us/book/swift-programming-language/id881256329?mt=11">The Swift Programming Language</a> (iBook)</li>
<li><a href="https://itunes.apple.com/us/book/using-swift-cocoa-objective/id888894773?mt=11">Using Swift with Cocoa and Objective-C</a> (iBook)</li>
</ul>

<h3>Tcl</h3>

<ul>
<li><a href="https://en.wikibooks.org/wiki/Programming%3ATcl">Tcl Programming</a> - Richard.Suchenwirth, et. al.</li>
<li><a href="http://www.invece.org/tclwise/index.html">TclWise</a> - Salvatore Sanfilippo</li>
</ul>

<h3>Teradata</h3>

<ul>
<li><a href="http://www.info.teradata.com">Teradata Books</a></li>
</ul>

<h3>Tizen</h3>

<ul>
<li><a href="https://developer.tizen.org/sites/default/files/blogs/tizenfordummiesmainchangelist.pdf">Tizen for Dummies</a> - Jon Lansdell, Cheng Luo, Michelle Somersville (PDF)</li>
</ul>

<h3>TLA</h3>

<ul>
<li><a href="http://research.microsoft.com/en-us/um/people/lamport/tla/book.html">Specifying Systems: The TLA+ Language and Tools for Hardware and Software Engineers</a> - Leslie Lamport (Postscript or PDF)</li>
</ul>

<h3>TypeScript</h3>

<ul>
<li><a href="https://basarat.gitbooks.io/typescript/">TypeScript Deep Dive</a></li>
<li><a href="http://www.infoq.com/minibooks/typescript-c-sharp-programmers">TypeScript for C# Programmers</a></li>
<li><a href="https://www.syncfusion.com/resources/techportal/ebooks/typescript">TypeScript Succinctly, Syncfusion</a> (PDF, Kindle) <em>(Just fill the fields with any values)</em></li>
</ul>

<h3>Unix</h3>

<ul>
<li><a href="http://www.oliverelliott.org/article/computing/tut_unix/">An Introduction to Unix</a></li>
<li><a href="http://www.lemis.com/grog/Documentation/Lions/">Commentary on the Sixth Edition UNIX Operating System</a> - J. Lions</li>
<li><a href="http://www.cs.bu.edu/teaching/unix/reference/">UNIX Commands and Concepts</a> - Robert I. Pitts</li>
<li><a href="http://web.stanford.edu/class/cs124/kwc-unix-for-poets.pdf">Unix for Poets</a> - Kenneth Ward Church (PDF)</li>
<li><a href="http://cb.vu/unixtoolbox.xhtml">Unix Toolbox</a> - Colin Barschel</li>
<li><a href="http://www.ee.surrey.ac.uk/Teaching/Unix/">UNIX Tutorial for Beginners</a></li>
</ul>

<h3>Verilog</h3>

<ul>
<li><a href="http://www.asic-world.com/verilog/veritut.html">Verilog Tutorial</a></li>
</ul>

<h3>VHDL</h3>

<ul>
<li><a href="https://github.com/fabriziotappero/Free-Range-VHDL-book">Free Range VHDL</a> - Bryan Mealy, Fabrizio Tappero (TeX and PDF)</li>
<li><a href="http://www.seas.upenn.edu/~ese171/vhdl/vhdl_primer.html">VHDL Tutorial</a></li>
<li><a href="http://hep.uchicago.edu/~tangjian/SVT_sub/FTK_ATLAS/AUX/vhdl-tutorial.pdf">VHDL Tutorial</a> - Peter J. Ashenden (PDF)</li>
<li><a href="http://esd.cs.ucr.edu/labs/tutorial/">VHDL Tutorial: Learn By Example</a></li>
</ul>

<h3>Vim</h3>

<ul>
<li><a href="http://www.swaroopch.com/notes/vim/">A Byte of Vim</a></li>
<li><a href="http://yannesposito.com/Scratch/en/blog/Learn-Vim-Progressively/">Learn Vim Progressively</a></li>
<li><a href="http://learnvimscriptthehardway.stevelosh.com">Learn Vimscript the Hard Way</a></li>
<li><a href="https://leanpub.com/VimLikeAPro">Use Vim Like A Pro</a> <em>(Leanpub, by Tim Ottinger)</em></li>
<li><a href="http://www.truth.sk/vim/vimbook-OPL.pdf">Vi Improved -- Vim</a> - Steve Oualline (PDF)</li>
<li><a href="http://ebooksgo.org">Vim Recipes</a> (PDF)</li>
<li><a href="http://vimregex.com">Vim Regular Expressions 101</a></li>
</ul>

<h3>Visual Basic</h3>

<ul>
<li><a href="http://www.techotopia.com/index.php/Visual_Basic_Essentials">Visual Basic Essentials</a></li>
</ul>

<h3>Visual Prolog</h3>

<ul>
<li><a href="http://wiki.visual-prolog.com/index.php?title=A_Beginners_Guide_to_Visual_Prolog">A Beginners' Guide to Visual Prolog</a></li>
<li><a href="http://wiki.visual-prolog.com/index.php?title=Visual_Prolog_for_Tyros">Visual Prolog for Tyros</a></li>
</ul>

<h3>Web Services</h3>

<ul>
<li><a href="http://restfulwebapis.org/RESTful_Web_Services.pdf">RESTful Web Services</a> (PDF)</li>
</ul>

<h3>Windows 8</h3>

<ul>
<li><a href="http://blogs.msdn.com/b/microsoft_press/archive/2012/10/29/free-ebook-programming-windows-8-apps-with-html-css-and-javascript.aspx">Programming Windows 8 Apps with HTML, CSS, and JavaScript (v1)</a></li>
<li><a href="http://blogs.msdn.com/b/microsoft_press/archive/2013/10/29/free-ebook-programming-windows-store-apps-with-html-css-and-javascript-second-edition-second-preview.aspx">Programming Windows 8 Apps with HTML, CSS, and JavaScript (v2, incomplete)</a></li>
</ul>

<h3>Windows Phone</h3>

<ul>
<li><a href="http://coolthingoftheday.blogspot.co.uk/2012/05/free-ebook-guidance-advanced-windows.html">Developing An Advanced Windows Phone 7.5 App That Connects To The Cloud</a></li>
<li><a href="https://www.syncfusion.com/resources/techportal/ebooks/windowsphone8">Windows Phone 8 Development Succinctly</a> - Matteo Pagani (PDF)</li>
<li><a href="http://channel9.msdn.com/Series/Windows-Phone-8-1-Development-for-Absolute-Beginners">Windows Phone 8.1 Development for Absolute Beginners</a></li>
<li><a href="http://www.robmiles.com/c-yellow-book/">Windows Phone Programming Blue Book</a></li>
</ul>

<h3>Workflow</h3>

<ul>
<li><a href="https://leanpub.com/declarepeaceonvms">Declare Peace on Virtual Machines. A guide to simplifying vm-based development on a Mac</a></li>
</ul>

<h3>xBase (dBase / Clipper / Harbour)</h3>

<ul>
<li><a href="https://en.wikibooks.org/wiki/Application_Development_with_Harbour">Application Development with Harbour</a></li>
<li><a href="http://www.ousob.com/ng/clguide/">CA-Clipper 5.2 Norton Guide</a></li>
<li><a href="https://en.wikibooks.org/wiki/Clipper_Tutorial%3A_a_Guide_to_Open_Source_Clipper(s)">Clipper Tutorial: a Guide to Open Source Clipper(s)</a></li>
</ul>";s:10:"post_title";s:22:"Free programming books";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:22:"free-programming-books";s:7:"to_ping";s:0:"";s:6:"pinged";s:41:"
http://www.thepublicdomain.org/download/";s:13:"post_modified";s:19:"2016-08-15 14:26:55";s:17:"post_modified_gmt";s:19:"2016-08-15 07:26:55";s:21:"post_content_filtered";s:136115:"This list initially was a clone of stackoverflow - List of Freely Available Programming Books by George Stocker. Now updated, with dead links gone and new content.

### Index

* [Ada](#ada)
* [Agda](#agda)
* [Alef](#alef)
* [Android](#android)
* [APL](#apl)
* [Arduino](#arduino)
* [ASP.NET MVC](#aspnet-mvc)
* [Assembly Language](#assembly-language)
* [Non-X86](#non-x86)
* [AutoHotkey](#autohotkey)
* [Autotools](#autotools)
* [Awk](#awk)
* [Bash](#bash)
* [Basic](#basic)
* [BETA](#beta)
* [C](#c)
* [C#](#c-sharp)
* [C++](#c-1)
* [Chapel](#chapel)
* [Cilk](#cilk)
* [Clojure](#clojure)
* [COBOL](#cobol)
* [CoffeeScript](#coffeescript)
* [ColdFusion](#coldfusion)
* [Cool](#cool)
* [Coq](#coq)
* [CUDA](#cuda)
* [D](#d)
* [Dart](#dart)
* [DB2](#db2)
* [Delphi / Pascal](#delphi--pascal)
* [DTrace](#dtrace)
* [Elasticsearch](#elasticsearch)
* [Elixir](#elixir)
* [Emacs](#emacs)
* [Embedded Systems](#embedded-systems)
* [Erlang](#erlang)
* [F#](#f-sharp)
* [Firefox OS](#firefox-os)
* [Force.com](#forcecom)
* [Forth](#forth)
* [Fortran](#fortran)
* [FreeBSD](#freebsd)
* [Git](#git)
* [Go](#go)
* [Graphical user interfaces](#graphical-user-interfaces)
* [Graphics Programming](#graphics-programming)
* [Groovy](#groovy)
* [Gradle](#gradle)
* [Grails](#grails)
* [Spock Framework](#spock-framework)
* [Hadoop](#hadoop)
* [Haskell](#haskell)
* [Haxe](#haxe)
* [HTML / CSS](#html--css)
* [Bootstrap](#bootstrap)
* [HTTP](#http)
* [Icon](#icon)
* [iOS](#ios)
* [IoT](#iot)
* [Isabelle/HOL](#isabellehol)
* [J](#j)
* [Java](#java)
* [JasperReports](#jasperreports)
* [Spring](#spring)
* [Spring Boot](#spring-boot)
* [Spring Security](#spring-security)
* [Wicket](#wicket)
* [JavaScript](#javascript)
* [Javascript frameworks](#javascript-frameworks)
* [Node.js](#nodejs)
* [Jenkins](#jenkins)
* [Julia](#julia)
* [Language Agnostic](#language-agnostic)
* [Algorithms &amp; Datastructures](#algorithms--data-structures)
* [Cellular Automata](#cellular-automata)
* [Cloud Computing](#cloud-computing)
* [Competitive Programming](#competitive-programming)
* [Compiler Design](#compiler-design)
* [Database](#database)
* [Datamining](#datamining)
* [Information Retrieval](#information-retrieval)
* [Licensing](#licensing)
* [Machine Learning](#machine-learning)
* [Mathematics](#mathematics)
* [Misc](#misc)
* [MOOC](#mooc)
* [Networking](#networking)
* [Open Source Ecosystem](#open-source-ecosystem)
* [Operating systems](#operating-systems)
* [Parallel Programming](#parallel-programming)
* [Partial Evaluation](#partial-evaluation)
* [Professional Development](#professional-development)
* [Programming Paradigms](#programming-paradigms)
* [Regular Expressions](#regular-expressions)
* [Reverse Engineering](#reverse-engineering)
* [Security](#security)
* [Software Architecture](#software-architecture)
* [Standards](#standards)
* [Theoretical Computer Science](#theoretical-computer-science)
* [Web Performance](#web-performance)
* [LaTeX / TeX](#latex--tex)
* [LaTeX](#latex)
* [TeX](#tex)
* [Limbo](#limbo)
* [Linux](#linux)
* [Lisp](#lisp)
* [Livecode](#livecode)
* [Lua](#lua)
* [MarkDown](#markdown)
* [Mathematica](#mathematica)
* [MATLAB](#matlab)
* [Maven](#maven)
* [Mercurial](#mercurial)
* [Mercury](#mercury)
* [Meta-Lists](#meta-lists)
* [MySQL](#mysql)
* [Neo4J](#neo4j)
* [.NET Framework](#net-framework)
* [NoSQL](#nosql)
* [Oberon](#oberon)
* [Objective-C](#objective-c)
* [OCaml](#ocaml)
* [Octave](#octave)
* [OpenGL ES](#opengl-es)
* [OpenMP](#openmp)
* [OpenResty](#openresty)
* [OpenSCAD](#openscad)
* [Oracle PL/SQL](#oracle-plsql)
* [Oracle Server](#oracle-server)
* [Parrot / Perl 6](#parrot--perl-6)
* [PC-BSD](#pc-bsd)
* [Perl](#perl)
* [PHP](#php)
* [PicoLisp](#picolisp)
* [PostgreSQL](#postgresql)
* [PowerShell](#powershell)
* [Processing](#processing)
* [Prolog](#prolog)
* [Constraint Logic Programming](#constraint-logic-programming-extended-prolog)
* [PureScript](#purescript)
* [Python](#python)
* [Django](#django)
* [Flask](#flask)
* [Kivy](#kivy)
* [Pandas](#pandas)
* [Pyramid](#pyramid)
* [QML](#qml)
* [R](#r)
* [Racket](#racket)
* [Raspberry Pi](#raspberry-pi)
* [REBOL](#rebol)
* [Ruby](#ruby)
* [RSpec](#rspec)
* [Ruby on Rails](#ruby-on-rails)
* [Sinatra](#sinatra)
* [Rust](#rust)
* [Sage](#sage)
* [Scala](#scala)
* [Lift](#lift)
* [Play Scala](#play-scala)
* [Scheme](#scheme)
* [Scilab](#scilab)
* [Scratch](#scratch)
* [Sed](#sed)
* [Self](#self)
* [Smalltalk](#smalltalk)
* [Spark](#spark)
* [SQL (implementation agnostic)](#sql-implementation-agnostic)
* [SQL Server](#sql-server)
* [Standard ML](#standard-ml)
* [Subversion](#subversion)
* [Swift](#swift)
* [Tcl](#tcl)
* [Teradata](#teradata)
* [Tizen](#tizen)
* [TLA](#tla)
* [TypeScript](#typescript)
* [Unix](#unix)
* [Verilog](#verilog)
* [VHDL](#vhdl)
* [Vim](#vim)
* [Visual Basic](#visual-basic)
* [Visual Prolog](#visual-prolog)
* [Web Services](#web-services)
* [Windows 8](#windows-8)
* [Windows Phone](#windows-phone)
* [Workflow](#workflow)
* [xBase (dBase / Clipper / Harbour)](#xbase-dbase--clipper--harbour)

### Meta-Lists

* [atariarchives.org](http://www.atariarchives.org) atariarchives.org makes books, information, and software for Atari and other classic computers available on the Web.
* [Bento](https://www.bento.io)
* [Bitsavers.org](http://bitsavers.trailing-edge.com)
* [Bookboon: IT &amp; Programming](http://bookboon.com/en/it-programming-ebooks)
* [Cheat Sheets (Free)](https://dzone.com/refcardz)
* [Codingus](http://codingus.blogspot.in)
* [conceptf1.blogspot.com](http://conceptf1.blogspot.com/2013/11/list-of-freely-available-programming.html)
* [Free Smalltalk Books, collected by Stéphane Ducasse](http://stephane.ducasse.free.fr/FreeBooks.html)
* [Free Tech Books](http://www.freetechbooks.com)
* [Hacker Shelf](http://hackershelf.com/browse/)
* [IBM Redbooks](http://www.redbooks.ibm.com)
* [InfoQ Minibooks](http://www.infoq.com/minibooks/)
* [InTech: Computer and Information Science](http://www.intechopen.com/subjects/computer-and-information-science)
* [JSBooks - directory of free javascript ebooks](https://github.com/revolunet/JSbooks)
* [Learn X in Y minutes](https://learnxinyminutes.com)
* [Learneroo Resources to Learn Programming](https://www.learneroo.com/modules/12/nodes/96)
* [Microsoft Guides to Software](https://blogs.msdn.microsoft.com/mssmallbiz/2014/07/07/largest-collection-of-free-microsoft-ebooks-ever-including-windows-8-1-windows-8-windows-7-office-2013-office-365-office-2010-sharepoint-2013-dynamics-crm-powershell-exchange-server-lync-2/)
* [Microsoft Press: Free E-Books](https://mva.microsoft.com/ebooks)
* [Microsoft Technologies 1, including books on Windows Azure, SharePoint, Visual Studio Guide, Windows phone development, ASP.net, Office365, etc. collection by Eric Ligman](https://blogs.msdn.microsoft.com/mssmallbiz/2012/07/27/large-collection-of-free-microsoft-ebooks-for-you-including-sharepoint-visual-studio-windows-phone-windows-8-office-365-office-2010-sql-server-2012-azure-and-more/)
* [Microsoft Technologies 2, including books on Windows Azure, SharePoint, Visual Studio Guide, Windows phone development, ASP.net, etc. collection by Eric Ligman](https://blogs.msdn.microsoft.com/mssmallbiz/2012/07/30/another-large-collection-of-free-microsoft-ebooks-and-resource-kits-for-you-including-sharepoint-2013-office-2013-office-365-duet-2-0-azure-cloud-windows-phone-lync-dynamics-crm-and-more/)
* [O'Reilly's Commons](http://commons.oreilly.com/wiki/index.php/O%27Reilly_Commons)
* [O'Reilly's Open Books Project](http://www.oreilly.com/openbook/)
* [Papers we love](https://github.com/papers-we-love/papers-we-love)
* [Red Gate Books](http://www.red-gate.com/community/books/index)
* [Stef's Free Online Smalltalk Books](http://stephane.ducasse.free.fr/FreeBooks/)
* [TechBooksForFree.com](http://www.techbooksforfree.com)
* [The Definitive C++ Book Guide and List](http://stackoverflow.com/questions/388242/the-definitive-c-book-guide-and-list)
* [Theassayer.org](http://theassayer.org)
* [tutorialspoint](http://www.tutorialspoint.com)
* [Wikibooks: Programming](https://en.wikibooks.org/wiki/Category%3aComputer_programming)

### Graphics Programming

* [Blender 3D: Noob to Pro](https://en.wikibooks.org/wiki/Blender_3D%3A_Noob_to_Pro)
* [DirectX manual](http://user.xmission.com/~legalize/book/download/index.html) (draft)
* [GPU Gems](https://developer.nvidia.com/gpugems/GPUGems/gpugems_pref01.html)
* [Graphics Programming Black Book](http://www.gamedev.net/page/resources/_/technical/graphics-programming-and-theory/graphics-programming-black-book-r1698)
* [Grokking the GIMP](http://gimp-savvy.com/BOOK/index.html)
* [Introduction to Modern OpenGL](https://open.gl)
* [Learn OpenGL](http://learnopengl.com) - Joey de Vries
* [Learning Modern 3D Graphics Programming](https://web.archive.org/web/20150225192611/http://www.arcsynthesis.org/gltut/index.html) (draft)
* [OpenGL](http://www.songho.ca/opengl/index.html) - Concepts and illustrations.
* [OpenGL Programming Guide (The Red Book)](http://fly.srk.fer.hr/~unreal/theredbook/)
* [ShaderX series](http://www.realtimerendering.com/resources/shaderx/)
* [Tutorials for modern OpenGL](http://www.opengl-tutorial.org)

### Graphical User Interfaces

* [Best of Smashing Magazine](http://anniversary.smashingmagazine.com/best-of-smashing-magazine.zip)
* [Programming with gtkmm 3](https://developer.gnome.org/gtkmm-tutorial/stable/)
* [Search User Interfaces](http://searchuserinterfaces.com/book/) - Marti A. Hearst
* [Working through Screens](http://www.flashbulbinteraction.com/WTS.html) - Jacob Burghardt

### Language Agnostic

#### Algorithms &amp; Data Structures

* [A Field Guide To Genetic Programming](http://dces.essex.ac.uk/staff/rpoli/gp-field-guide/toc.html)
* [Algorithmic Graph Theory](http://code.google.com/p/graphbook/)
* [Algorithms, 4th Edition](http://algs4.cs.princeton.edu/home/) - Robert Sedgewick and Kevin Wayne
* [Algorithms and Automatic Computing Machines (1963)](https://archive.org/details/Algorithms_And_Automatic_Computing_Machines) - B. A. Trakhtenbrot
* [Algorithms and Complexity](https://www.math.upenn.edu/~wilf/AlgoComp.pdf) (PDF)
* [Algorithms Course Materials](http://jeffe.cs.illinois.edu/teaching/algorithms/) - Jeff Erickson
* [Analysis and Design of Algorithms](http://www.cse.iitd.ernet.in/~ssen/csl356/admin356.html) - Sandeep Sen, IIT Delhi
* [Animated Algorithm and Data Structure Visualization](http://visualgo.net) (Resource)
* [Binary Trees](http://cslibrary.stanford.edu/110/BinaryTrees.pdf) (PDF)
* [Clever Algorithms](http://www.cleveralgorithms.com/nature-inspired/)
* [CS Unplugged: Computer Science without a computer](http://csunplugged.org/books/)
* [Data Structures](http://www.cse.iitd.ernet.in/~suban/cs130/index.html) - Prof. Subhashis Banerjee, IIT Delhi
* [Data Structures and Algorithms: Annotated Reference with Examples](http://dotnetslackers.com/projects/Data-Structures-And-Algorithms/) - G. Barnett and L. Del Tongo
* [Data Structures Succinctly Part 1, Syncfusion](https://www.syncfusion.com/resources/techportal/ebooks/datastructurespart1) (PDF, Kindle) *(Just fill the fields with any values)*
* [Data Structures Succinctly Part 2, Syncfusion](https://www.syncfusion.com/resources/techportal/ebooks/datastructurespart2) (PDF, Kindle) *(Just fill the fields with any values)*
* [Elementary Algorithms](https://github.com/liuxinyu95/AlgoXY) - Larry LIU Xinyu
* [Foundations of Computer Science](http://infolab.stanford.edu/~ullman/focs.html) - Al Aho and Jeff Ullman
* [Handbook of Graph Drawing and Visualization](https://cs.brown.edu/~rt/gdhandbook/)
* [Lectures Notes on Algorithm Analysis and Computational Complexity (Fourth Edition)](https://larc.unt.edu/ian/books/free/license.html) - Ian Parberry (use form at bottom of license)
* [LEDA: A Platform for Combinatorial and Geometric Computing](http://people.mpi-inf.mpg.de/~mehlhorn/LEDAbook.html)
* [Linked List Basics](http://cslibrary.stanford.edu/103/LinkedListBasics.pdf) (PDF)
* [Linked List Problems](http://cslibrary.stanford.edu/105/LinkedListProblems.pdf) (PDF)
* [Matters Computational: Ideas, Algorithms, Source Code](http://www.jjj.de/fxt/fxtbook.pdf) (PDF)
* [Open Data Structures: An Introduction](http://www.aupress.ca/index.php/books/120226) - Pat Morin
* [Planning Algorithms](http://planning.cs.uiuc.edu)
* [Problems on Algorithms (Second Edition)](https://larc.unt.edu/ian/books/free/license.html) - Ian Parberry (use form at bottom of license)
* [Purely Functional Data Structures](http://www.cs.cmu.edu/~rwh/theses/okasaki.pdf) (PDF)
* [Sequential and parallel sorting algorithms](http://www.inf.fh-flensburg.de/lang/algorithmen/sortieren/algoen.htm)
* [Text Algorithms](http://igm.univ-mlv.fr/~mac/REC/text-algorithms.pdf) (PDF)
* [The Algorithm Design Manual](http://www8.cs.umu.se/kurser/TDBAfl/VT06/algorithms/BOOK/BOOK/BOOK.HTM)
* [The Art of Computer Programming](http://www.cs.utsa.edu/~wagner/knuth/) - Donald Knuth (fascicles, mostly volume 4)
* [The Design of Approximation Algorithms](http://www.designofapproxalgs.com/book.pdf) (PDF)
* [The Great Tree List Recursion Problem](http://cslibrary.stanford.edu/109/TreeListRecursion.pdf) (PDF)
* [Think Complexity](http://greenteapress.com/complexity/) (PDF)

#### Cellular Automata

* [A New Kind of Science](https://www.wolframscience.com/nksonline/toc.html) - Stephen Wolfram
* [Cellular Automata Books](http://uncomp.uwe.ac.uk/genaro/Cellular_Automata_Repository/Books.html)

#### Cloud Computing

* [Multi-tenant Applications for the Cloud, 3rd Edition](http://www.microsoft.com/en-us/download/details.aspx?id=29263)
* [OpenStack Operations Guide](http://docs.openstack.org/ops/)

#### Competitive Programming

* [Competitive Programming, 1st Edition](https://sites.google.com/site/stevenhalim/) (PDF)

#### Compiler Design

* [An Introduction to GCC](http://www.network-theory.co.uk/docs/gccintro/) - Brian Gough
* [Basics of Compiler Design (Anniversary Edition)](http://www.diku.dk/~torbenm/Basics/) - Torben Mogensen
* [Compiler Construction](http://www.ethoberon.ethz.ch/WirthPubl/CBEAll.pdf) (PDF)
* [Compiler Design in C](http://www.holub.com/software/compiler.design.in.c.html) - Allen Holub, Prentice Hall, 1990
* [Compiler Design: Theory, Tools, and Examples, C/C++ Edition](http://elvis.rowan.edu/~bergmann/books/c_cpp/) - Seth D. Bergmann
* [Compiler Design: Theory, Tools, and Examples, Java Edition](http://elvis.rowan.edu/~bergmann/books/java/) - Seth D. Bergmann
* [Compiling Scala for the Java Virtual Machine](http://lampwww.epfl.ch/~schinz/thesis-final-A4.pdf) - Michel Schinz (PDF)
* [Compiling Techniques](http://www.chilton-computing.org.uk/acl/literature/books/compilingtechniques/overview.htm) - F.R.A. Hopgood, Macdonald, 1969
* [Implementing Functional Languages: A Tutorial](http://research.microsoft.com/en-us/um/people/simonpj/Papers/pj-lester-book/) - Simon Peyton Jones, David Lester
* [Let's Build a Compiler](http://www.stack.nl/~marcov/compiler.pdf) (PDF)
* [Linkers and Loaders](http://www.iecc.com/linker/) - John R. Levine
* [Practical and Theoretical Aspects of Compiler Construction](http://web.stanford.edu/class/archive/cs/cs143/cs143.1128/) (class lectures and slides)

#### Computer Vision

* [Computer Vision](http://homepages.inf.ed.ac.uk/rbf/BOOKS/BANDB/bandb.htm) - Dana Ballard, Chris Brown
* [Computer Vision: Algorithms and Applications](http://szeliski.org/Book/) - Richard Szeliski
* [Computer Vision: Models, Learning, and Inference](http://www.computervisionmodels.com) - Simon J.D. Prince
* [Programming Computer Vision with Python](http://programmingcomputervision.com) - Jan Erik Solem

#### Database

* [Big Data Now: Current Perspectives from O'Reilly Radar](http://shop.oreilly.com/product/0636920022640.do)
* [Database Explorations](http://www.dcs.warwick.ac.uk/~hugh/TTM/Database-Explorations-revision-2.pdf) (PDF)
* [Database Fundamentals](http://public.dhe.ibm.com/software/dw/db2/express-c/wiki/Database_fundamentals.pdf) (PDF)
* [Databases, Types, and The Relational Model: The Third Manifesto](http://www.dcs.warwick.ac.uk/~hugh/TTM/DTATRM.pdf) (PDF)
* [Foundations of Databases](http://webdam.inria.fr/Alice/)
* [Readings in Database Systems, 5th Ed.](http://www.redbook.io)
* [Temporal Database Management](http://people.cs.aau.dk/~csj/Thesis/) - Christian S. Jensen
* [The Theory of Relational Databases](http://web.cecs.pdx.edu/~maier/TheoryBook/TRD.html)
* [What is Database Design, Anyway?](http://www.oreilly.com/data/free/what-is-database-design-anyway.csp)

#### Datamining

* [A Programmer's Guide to Data Mining](http://guidetodatamining.com) - Ron Zacharski (Draft)
* [Data Jujitsu: The Art of Turning Data into Product](http://www.oreilly.com/data/free/data-jujitsu.csp) *(Just fill the fields with any values)*
* [Data Mining Algorithms In R](https://en.wikibooks.org/wiki/Data_Mining_Algorithms_In_R)
* [Internet Advertising: An Interplay among Advertisers, Online Publishers, Ad Exchanges and Web Users](http://arxiv.org/pdf/1206.1754v2.pdf) (PDF)
* [Introduction to Data Science](https://docs.google.com/file/d/0B6iefdnF22XQeVZDSkxjZ0Z5VUE/edit?pli=1) - Jeffrey Stanton
* [Mining of Massive Datasets](http://www.mmds.org)
* [School of Data Handbook](http://schoolofdata.org/handbook/)
* [Theory and Applications for Advanced Text Mining](http://www.intechopen.com/books/theory-and-applications-for-advanced-text-mining)

#### Information Retrieval

* [Information Retrieval: A Survey](http://www.csee.umbc.edu/csee/research/cadip/readings/IR.report.120600.book.pdf) (PDF)
* [Introduction to Information Retrieval](http://nlp.stanford.edu/IR-book/information-retrieval-book.html)

#### Licensing

* [Creative Commons: a user guide](http://www.aliprandi.org/cc-user-guide/) - Simone Aliprandi
* [The Public Domain: Enclosing the Commons of the Mind](http://www.thepublicdomain.org/download/) - James Boyle

#### Machine Learning

* [A Brief Introduction to Neural Networks](http://www.dkriesel.com/en/science/neural_networks)
* [A Course in Machine Learning](http://ciml.info/dl/v0_9/ciml-v0_9-all.pdf) (PDF)
* [A First Encounter with Machine Learning](https://www.ics.uci.edu/~welling/teaching/ICS273Afall11/IntroMLBook.pdf) (PDF)
* [An Introduction to Statistical Learning](http://www-bcf.usc.edu/~gareth/ISL/) - Gareth James, Daniela Witten, Trevor Hastie and Robert Tibshirani
* [Bayesian Reasoning and Machine Learning](http://web4.cs.ucl.ac.uk/staff/D.Barber/pmwiki/pmwiki.php?n=Brml.HomePage)
* [Deep Learning](http://www.deeplearningbook.org) - Ian Goodfellow, Yoshua Bengio and Aaron Courville
* [Gaussian Processes for Machine Learning](http://www.gaussianprocess.org/gpml/)
* [Information Theory, Inference, and Learning Algorithms](http://www.inference.phy.cam.ac.uk/itila/)
* [Introduction to Machine Learning](http://arxiv.org/abs/0904.3664v1) - Amnon Shashua
* [Learning Deep Architectures for AI](http://www.iro.umontreal.ca/~bengioy/papers/ftml_book.pdf) (PDF)
* [Machine Learning](http://www.intechopen.com/books/machine_learning)
* [Machine Learning, Neural and Statistical Classification](http://www1.maths.leeds.ac.uk/~charles/statlog/)
* [Neural Networks and Deep Learning](http://neuralnetworksanddeeplearning.com)
* [Probabilistic Models in the Study of Language](http://idiom.ucsd.edu/~rlevy/pmsl_textbook/text.html) (Draft, with R code)
* [Reinforcement Learning: An Introduction](http://webdocs.cs.ualberta.ca/~sutton/book/ebook/the-book.html)
* [The Elements of Statistical Learning](http://www-stat.stanford.edu/~tibs/ElemStatLearn/) - Trevor Hastie, Robert Tibshirani, and Jerome Friedman
* [The LION Way: Machine Learning plus Intelligent Optimization](http://www.e-booksdirectory.com/details.php?ebook=9575)
* [The Python Game Book](http://thepythongamebook.com/en%3Astart)

#### Mathematics

* [A First Course in Linear Algebra](http://linear.ups.edu) - Robert A. Beezer
* [Advanced Algebra](http://www.math.stonybrook.edu/~aknapp/download/a2-alg-inside.pdf) - Anthony W. Knapp (PDF)
* [Basic Algebra](http://www.math.stonybrook.edu/~aknapp/download/b2-alg-inside.pdf) - Anthony W. Knapp (PDF)
* [Bayesian Methods for Hackers](https://github.com/CamDavidsonPilon/Probabilistic-Programming-and-Bayesian-Methods-for-Hackers) - Cameron Davidson-Pilon
* [Calculus Made Easy](http://www.gutenberg.org/ebooks/33283) - Silvanus P. Thompson (PDF)
* [Category Theory for the Sciences](http://category-theory.mitpress.mit.edu)
* [CK-12 Probability and Statistics - Advanced](http://www.ck12.org/book/Probability-and-Statistics---Advanced-%2528Second-Edition%2529/)
* [Collaborative Statistics](http://cnx.org/contents/5e0744f9-9e79-4348-9237-ed012213a2d6%4040.9)
* [Computational Geometry](http://web.mit.edu/hyperbook/Patrikalakis-Maekawa-Cho/)
* [Concepts &amp; Applications of Inferential Statistics](http://vassarstats.net/textbook/)
* [Differential Equations](http://tutorial.math.lamar.edu/download.aspx) - Paul Dawkins (PDF, use form to download)
* [Discrete Mathematics](http://home.iitk.ac.in/%7Earlal/book/mth202.pdf) - Dr. Arbind K Lal, IIT Kanpur (PDF)
* [Elementary Differential Equations](http://ramanujan.math.trinity.edu/wtrench/texts/TRENCH_DIFF_EQNS_I.PDF) - William F. Trench (PDF)
* [Essentials of Metaheuristics](http://cs.gmu.edu/~sean/book/metaheuristics/) - Sean Luke
* [Graph Theory](http://compalg.inf.elte.hu/~tony/Oktatas/TDK/FINAL/)
* [Introduction to Probability](http://www.dartmouth.edu/~chance/teaching_aids/books_articles/probability_book/book.html) - Charles M. Grinstead and J. Laurie Snell
* [Introduction to Probability and Statistics Spring 2014](http://ocw.mit.edu/courses/mathematics/18-05-introduction-to-probability-and-statistics-spring-2014/)
* [Introduction to Statistical Thought](http://people.math.umass.edu/~lavine/Book/book.html) - Michael Lavine
* [Kalman and Bayesian Filters in Python](https://github.com/rlabbe/Kalman-and-Bayesian-Filters-in-Python)
* [Knapsack Problems - Algorithms and Computer Implementations](http://www.or.deis.unibo.it/knapsack.html) - Silvano Martello and Paolo Toth
* [Lecture Notes of Linear Algebra](http://home.iitk.ac.in/~psraj/mth102/lecture_notes.html) - Dr. P. Shunmugaraj, IIT Kanpur (PDF)
* [Linear Algebra](http://home.iitk.ac.in/~arlal/book/nptel/pdf/book_linear.pdf) - Dr. Arbind K Lal, IIT Kanpur (PDF)
* [Linear Algebra](https://www.math.ucdavis.edu/~linear/linear-guest.pdf) (PDF)
* [Linear Algebra: An Introduction to Mathematical Discourse](https://en.wikibooks.org/wiki/Linear_Algebra) - Jim Hefferon
* [Linear Algebra, Theory And Applications](https://www.math.byu.edu/klkuttle/linearalgebra.pdf) - Kenneth Kuttler (PDF)
* [Mathematical Logic - an Introduction](http://www.ii.uib.no/~michal/und/i227/book/book.pdf) (PDF)
* [Mathematics, MTS 101A](http://home.iitk.ac.in/~psraj/mth101/) - P. Shunmugaraj, IIT Kanpur
* [Notes on Diﬀerential Equations](http://www.math.cornell.edu/~bterrell/dn.pdf) - Robert E. Terrell (PDF)
* [Number Theory](https://github.com/holdenlee/number-theory) - Holden Lee MIT
* [OpenIntro Statistics](https://www.openintro.org/stat/textbook.php)
* [Ordinary Differential Equations](https://en.wikibooks.org/wiki/Ordinary_Differential_Equations)
* [Power Programming with Mathematica](http://mathematica.stackexchange.com/questions/16485/are-you-interested-in-purchasing-david-wagners-power-programming-with-mathemat/22724) - David B. Wagner
* [Probability and Statistics Cookbook](http://statistics.zone)
* [Probability and Statistics EBook](http://wiki.stat.ucla.edu/socr/index.php/Probability_and_statistics_EBook)
* [Statistics Done Wrong](http://www.statisticsdonewrong.com) - Alex Reinhart
* [Think Bayes: Bayesian Statistics Made Simple](http://www.greenteapress.com/thinkbayes/) - Allen B. Downey
* [Think Stats: Probability and Statistics for Programmers](http://greenteapress.com/thinkstats/) - Allen B. Downey (using Python)

#### Mathematics For Computer Science

* [Discrete Structures for Computer Science: Counting, Recursion, and Probability](http://cglab.ca/~michiel/DiscreteStructures/) - Michiel Smid

#### Misc

* [97 Things Every Programmer Should Know - Extended](https://leanpub.com/97-Things-Every-Programmer-Should-Know-Extended)
* [A Mathematical Theory of Communication](http://ieeexplore.ieee.org/stamp/stamp.jsp?reload=true&amp;arnumber=6773024&amp;tp=) - Claude E.Shannon
* [Ansible Up &amp; Running (first three chapters)](https://www.ansible.com/blog/free-ansible-book) *(account required)*
* [Asterisk™: The Definitive Guide](http://asteriskdocs.org/en/3rd_Edition/asterisk-book-html-chunk/index.html)
* [Barcode Overview](http://www.tec-it.com/download/PDF/Barcode_Reference_EN.pdf) (PDF)
* [Come, Let's Play: Scenario-Based Programming Using Live Sequence Charts](http://www.wisdom.weizmann.ac.il/~playbook/)
* [Communicating Sequential Processes](http://www.usingcsp.com/cspbook.pdf) - Tony Hoare (PDF)
* [Computer Musings](http://scpd.stanford.edu/knuth/index.jsp) (lectures by Donald Knuth)
* [CS For All](https://www.cs.hmc.edu/csforall/)
* [Culture \&amp; Empire: Digital Revolution](http://hintjens.com/books) (PDF)
* [Designing for Performance](http://designingforperformance.com) - Lara Hogan
* [Designing Interfaces](http://designinginterfaces.com) - Jennifer Tidwell
* [DevDocs](http://devdocs.io) - Documents for Developers in 1 place
* [DevOps For Dummies (IBM Edition)](http://www.ibm.com/ibm/devops/us/en/resources/dummiesbooks/) (PDF)
* [Digital Signal Processing For Communications](http://www.sp4comm.org)
* [Digital Signal Processing For Engineers and Scientists](http://www.dspguide.com)
* [Distributed systems for fun and profit](http://book.mixu.net/distsys/single-page.html)
* [Docker Jumpstart](http://odewahn.github.io/docker-jumpstart/)
* ["DYNAMIC LINKED LIBRARIES": Paradigms of the GPL license in contemporary software](http://www.lulu.com/shop/http://www.lulu.com/shop/luis-enr%C3%ADquez-a/dynamic-linked-libraries-paradigms-of-the-gpl-license-in-contemporary-software/ebook/product-21419788.html) - Luis A. Enríquez
* [Flow based Programming](http://jpaulmorrison.com/fbp/)
* [Foundations of Programming](http://openmymind.net/FoundationsOfProgramming.pdf) (PDF)
* [Game Programming Patterns](http://gameprogrammingpatterns.com) - Bob Nystrom
* [Getting Real](http://gettingreal.37signals.com)
* [Hacknot: Essays on Software Development](http://www.lulu.com/shop/ed-johnson/hacknot-essays-on-software-development/ebook/product-17544641.html) - Ed Johnson
* [High-Performance Scientific Computing](http://bit.ly/hpc12) (class lectures and slides)
* [How Computers Work](http://www.fastchip.net/howcomputerswork/p1.html) - R. Young
* [How to Become a Programmer](http://softwarebyrob.wpengine.netdna-cdn.com/assets/Software_by_Rob%20_How_to_Become_a%20_Programmer_1.0.pdf) (PDF)
* [How to Think Like a Computer Scientist](http://openbookproject.net/thinkcs/) - Peter Wentworth, Jeffrey Elkner, Allen B. Downey, and Chris Meyers
* [I Am A Bug](http://www.amibug.com/iamabug/p01.html)
* [Image Processing in C: Analyzing and Enhancing Digital Images](http://homepages.inf.ed.ac.uk/rbf/BOOKS/PHILLIPS/) - Dwayne Phillips
* [Information Technology and the Networked Economy](http://florida.theorangegrove.org/og/file/49843a6a-9a9d-4bad-b4d4-d053f9cdf73e/1/InfoTechNetworkedEconomy.pdf) (PDF)
* [IRPF90 Fortran code generator](https://www.gitbook.com/book/scemama/irpf90/details) - Anthony Scemama
* [Learn to Program](https://pine.fm/LearnToProgram/)
* [Learning 30 Technologies in 30 Days: A Developer Challenge](https://blog.openshift.com/learning-30-technologies-in-30-days-a-developer-challenge/) - Shekhar Gulati
* [Linked Data Patterns: A pattern catalogue for modelling, publishing, and consuming Linked Data](http://patterns.dataincubator.org/book/) - Leigh Dodds, Ian Davis
* [Magic Ink: Information Software and The Graphical Interface](http://worrydream.com/#!/MagicInk) - Bret Victor
* [Mobile Developer's Guide to the Galaxy](https://leanpub.com/mobiledevelopersguide)
* [Modeling Reactive Systems with Statecharts](http://www.wisdom.weizmann.ac.il/~harel/reactive_systems.html)
* [Mother Tongues of Computer Languages](http://www.digibarn.com/collections/posters/tongues/) (PNG)
* [Networks, Crowds, and Markets: Reasoning About a Highly Connected World](http://www.cs.cornell.edu/home/kleinber/networks-book/)
* [Object-Oriented Reengineering Patterns](http://win.ua.ac.be/~sdemey/) - Serge Demeyer, Stéphane Ducasse and Oscar Nierstrasz
* [Open Government;Collaboration, Transparency, and Participation in Practice](https://github.com/oreillymedia/open_government)
* [Packt Publishing: A free book every day](https://www.packtpub.com/packt/offers/free-learning) - (PDF, ePub, Mobi, Kindle) *(account required)*
* [PDQ: Pretty Darn Quick: An Agile, All-Purpose Methodology](https://leanpub.com/PDQ) - Jeff Franz-Lien
* [Philosophy of Computer Science](http://www.cse.buffalo.edu/~rapaport/Papers/phics.pdf) (PDF)
* [PNG: The Definitive Guide](http://www.libpng.org/pub/png/book/)
* [Pointers And Memory](http://cslibrary.stanford.edu/102/PointersAndMemory.pdf) (PDF)
* [Principles of Computer System Design ](http://ocw.mit.edu/resources/res-6-004-principles-of-computer-system-design-an-introduction-spring-2009/online-textbook/part_ii_open_5_0.pdf) (PDF)
* [Programmer's Motivation for Beginners](http://programmersmotivation.com)
* [Programming with Unicode](http://unicodebook.readthedocs.org)
* [Project Oberon](http://www.ethoberon.ethz.ch) (PDF)
* [Record-Playback Test Automation: Sahi &amp; Selenium IDE: Critical Evaluation of Record-Playback Automation Tools](https://leanpub.com/manualToAutomatedWithSeleniumIDEAndSahi) - Shashikant Jagtap
* [Security Engineering](http://www.cl.cam.ac.uk/~rja14/book.html)
* [Small Memory Software](http://www.smallmemory.com/book.html)
* [SVG Essentials](http://commons.oreilly.com/wiki/index.php/SVG_Essentials)
* [The Quest for Artificial Intelligence: A History of Ideas and Achievements](http://ai.stanford.edu/~nilsson/QAI/qai.pdf) - Nils J. Nilsson (PDF)

#### MOOC

* [Coursera](https://www.coursera.org)
* [edX](https://www.edx.org)
* [FutureLearn](https://www.futurelearn.com)
* [MIT OCW](http://ocw.mit.edu)
* [openHPI](https://open.hpi.de)
* [Platzi](https://courses.platzi.com)
* [Udacity](https://www.udacity.com)

#### Networking

* [802.11ac: A Survival Guide](http://chimera.labs.oreilly.com/books/1234000001739) - Matthew Gast
* [An Introduction to Computer Networks](http://intronetworks.cs.luc.edu) (HTML, PDF, Kindle)
* [Bits, Signals, and Packets: An Introduction to Digital Communications and Networks](http://ocw.mit.edu/courses/electrical-engineering-and-computer-science/6-02-introduction-to-eecs-ii-digital-communication-systems-fall-2012/readings/)
* [Code Connected vol.1](http://hintjens.wdfiles.com/local--files/main%3Afiles/cc1pe.pdf) (PDF) (book on ZeroMQ)
* [Computer Networking : Principles, Protocols and Practice](http://cnp3book.info.ucl.ac.be/1st/html/index.html) (HTML, ePub, PDF, Kindle)
* [High-Performance Browser Networking](http://chimera.labs.oreilly.com/books/1230000000545/index.html)
* [HTTP Succinctly, Syncfusion](https://www.syncfusion.com/resources/techportal/ebooks/http) (PDF, Kindle) *(Just fill the fields with any values)*
* [HTTP2 Explained](http://daniel.haxx.se/http2/) - Daniel Stenberg
* [The TCP/IP Guide](http://www.tcpipguide.com/free/t_toc.htm)
* [Understanding IP Addressing: Everything you ever wanted to know](https://web.archive.org/web/20080401000000*/http://www.3com.com/other/pdfs/infra/corpinfo/en_US/501302.pdf) (PDF)
* [ZeroMQ Guide](http://zguide.zeromq.org/page%3Aall)

#### Open Source Ecosystem

* [Data Journalism Handbook](http://datajournalismhandbook.org)
* [Free as in Freedom](https://archive.org/details/faif-2.0) (PDF)
* [Free Software, Free Society](http://shop.fsf.org/product/free-software-free-society-2/)
* [Getting started with Open source development](http://public.dhe.ibm.com/software/dw/db2/express-c/wiki/Getting_started_with_open_source_development_p2.pdf) (PDF)
* [How to get started with open source](https://opensource.com/resources/ebook/how-get-started-open-source) (ePub &amp; ODT)
* [Innovation Happens Elsewhere](http://dreamsongs.com/IHE/IHE.html)
* [Open Advice: FOSS: What We Wish We Had Known When We Started](http://open-advice.org)
* [Producing Open Source Software](http://producingoss.com)
* [The Architecture of Open Source Applications: Vol. 1: Elegance, Evolution, and a Few Fearless Hacks; Vol. 2: Structure, Scale, and a Few More Feerless Hacks](http://www.aosabook.org/en/index.html)
* [The Art of Community](http://artofcommunityonline.org/Art_of_Community_Second_Edition.pdf) - Jono Bacon (PDF)
* [The Cathedral and the Bazaar](http://www.catb.org/esr/writings/cathedral-bazaar/) - Eric S. Raymond
* [The Future of the Internet](http://futureoftheinternet.org)
* [The Open Source Way](http://www.theopensourceway.org/book/)
* [The Wealth of Networks: How Social Production Transforms Markets and Freedom](http://cyber.law.harvard.edu/wealth_of_networks/Main_Page) - Yochai Benkler

#### Operating systems

* [Computer Science from the Bottom Up](http://www.bottomupcs.com)
* [How to Make a Computer Operating System (Work in Progress)](https://github.com/SamyPesse/How-to-Make-a-Computer-Operating-System)
* [Operating Systems and Middleware](https://gustavus.edu/mcs/max/os-book/) (PDF and LaTeX)
* [Operating Systems: Three Easy Pieces](http://pages.cs.wisc.edu/~remzi/OSTEP/) (PDF)
* [Practical File System Design: The Be File System](http://www.nobius.org/~dbg/practical-file-system-design.pdf) - Dominic Giampaolo (PDF)
* [The Art of Unix Programming](http://catb.org/esr/writings/taoup/html/) - Eric S. Raymond
* [The Design and Implementation of the Anykernel and Rump Kernels](https://github.com/rumpkernel/book) - Antti Kantee
* [The little book about OS development](https://littleosbook.github.io) - Erik Helin, Adam Renberg
* [The Little Book of Semaphores](http://greenteapress.com/semaphores/) - Allen B. Downey
* [Think OS: A Brief Introduction to Operating Systems](http://www.greenteapress.com/thinkos/index.html) - Allen B. Downey (PDF)
* [UNIX Application and System Programming, lecture notes](http://www.compsci.hunter.cuny.edu/~sweiss/course_materials/unix_lecture_notes.php) - Prof. Stewart Weiss (PDF)
* [Xv6, a simple Unix-like teaching operating system](https://pdos.csail.mit.edu/6.828/2012/xv6.html)

#### Parallel Programming

* [High Performance Computing](http://cnx.org/contents/bb821554-7f76-44b1-89e7-8a2a759d1347%405.2) - Charles Severance &amp; Kevin Dowd (PDF, ePUB)
* [High Performance Computing Training](https://computing.llnl.gov/?set=training&amp;page=index) (LLNL materials)
* [High-Performance Scientific Computing](http://bit.ly/hpc12) (class lectures and slides)
* [Introduction to High-Performance Scientific Computing](http://pages.tacc.utexas.edu/~eijkhout/istc/istc.html) - Victor Eijkhout
* [Introduction to Parallel Computing](https://computing.llnl.gov/tutorials/parallel_comp/) - Blaise Barney
* [Is Parallel Programming Hard, And, If So, What Can You Do About It?](https://www.kernel.org/pub/linux/kernel/people/paulmck/perfbook/perfbook.html) - Paul E. McKenney
* [Programming on Parallel Machines; GPU, Multicore, Clusters and More](http://heather.cs.ucdavis.edu/parprocbook) - Norm Matloff
* [The OpenCL Programming Book](https://www.fixstars.com/en/opencl/book/OpenCLProgrammingBook/contents/)

#### Partial Evaluation

* [Partial Evaluation and Automatic Program Generation](http://www.itu.dk/people/sestoft/pebook/) - (PDF) Jones, Gomard and Sestoft

#### Professional Development

* [Apprenticeship Patterns: Guidance for the Aspiring Software Craftsman](http://chimera.labs.oreilly.com/books/1234000001813/index.html) - David H. Hoover and Adewale Oshineye
* [Confessions of an IT Manager](http://download.red-gate.com/ebooks/DotNet/Confessions_IT_Manager.zip) *(RedGate, By Phil Factor)*
* [Don't Just Roll the Dice](http://download.red-gate.com/ebooks/DJRTD_eBook.pdf) (PDF) *(RedGate, By Neil Davidson)*
* [How to Do What You Love &amp; Earn What You’re Worth as a Programmer](https://leanpub.com/dowhatyoulove/read) *(Leanpub, By Reginald Braithwaite)*
* [Professional Software Development For Students](http://mixmastamyk.bitbucket.org/pro_soft_dev/) - Mike G. Miller
* [What I've Learned From Failure](https://leanpub.com/shippingsoftware/read) *(Leanpub, By Reginald Braithwaite)*
* [Why programmers work at night](https://leanpub.com/nightowls/read) *(Leanpub, By Swizec Teller)*

#### Programming Paradigms

* [Introduction to Functional Programming](http://www.cl.cam.ac.uk/teaching/Lectures/funprog-jrh-1996/) - J. Harrison
* [Mostly Adequate Guide to Functional Programming](https://www.gitbook.com/book/drboolean/mostly-adequate-guide/details)
* [Type Theory and Functional Programming](https://www.cs.kent.ac.uk/people/staff/sjt/TTFP/)

#### Regular Expressions

* [Learn Regex The Hard Way](http://regex.learncodethehardway.org/book/) - Zed. A. Shaw
* [RexEgg](http://www.rexegg.com)
* [The 30 Minute Regex Tutorial](http://www.codeproject.com/Articles/9099/The-Minute-Regex-Tutorial) - Jim Hollenhorst
* [The Bastards Book of Regular Expressions: Finding Patterns in Everyday Text](https://leanpub.com/bastards-regexes) - Dan Nguyen

#### Reverse Engineering

* [BIOS Disassembly Ninjutsu Uncovered 1st Edition](http://bioshacking.blogspot.co.uk/2012/02/bios-disassembly-ninjutsu-uncovered-1st.html) - Darmawan Salihun (PDF)
* [Hacking the Xbox: An Introduction to Reverse Engineering](https://www.nostarch.com/xboxfree/) - Andrew "bunnie" Huang
* [iOS App Reverse Engineering](https://github.com/iosre/iOSAppReverseEngineering) (PDF)
* [Reverse Engineering for Beginners](http://beginners.re) - Dennis Yurichev (PDF)

#### Security

* [Crypto 101 - Crypto for everyone](https://www.crypto101.io)
* [CryptoParty Handbook](https://unglue.it/work/141611/)
* [Handbook of Applied Cryptography](http://cacr.uwaterloo.ca/hac/index.html)
* [How to deal with Passwords](https://github.com/MHM5000/pass)
* [Intrusion Detection Systems with Snort](http://ptgmedia.pearsoncmg.com/images/0131407333/downloads/0131407333.pdf) (PDF)
* [OpenSSL Cookbook](https://www.feistyduck.com/library/openssl-cookbook/)
* [OWASP Top 10 for .NET Developers](http://www.troyhunt.com/2011/12/free-ebook-owasp-top-10-for-net.html)
* [Security Engineering](http://www.cl.cam.ac.uk/~rja14/book.html)

#### Software Architecture

* [Agile Planning: From Ideas to Story Cards](https://launchschool.com/books/agile_planning) - Launch School
* [Architectural Styles and the Design of Network-based Software Architectures](http://www.ics.uci.edu/~fielding/pubs/dissertation/top.htm) - Roy Thomas Fielding
* [Best Kept Secrets of Peer Code Review](http://smartbear.com/lp/ebook/collaborator/secrets-of-peer-code-review/)
* [Data-Oriented Design](http://www.dataorienteddesign.com/dodmain/dodmain.html)
* [Domain Driven Design Quickly](http://www.infoq.com/minibooks/domain-driven-design-quickly)
* [DSL Engineering: Designing, Implementing and Using Domain-Specific Languages](http://dslbook.org) - Markus Voelter
* [Essential Skills for Agile Development](http://elliottback.com/wp/essential-skills-for-agile-development/)
* [Guide to the Software Engineering Body of Knowledge](http://www.computer.org/portal/web/swebok)
* [How to Design Programs](http://www.htdp.org)
* [How to Write Unmaintainable Code](http://mindprod.com/jgloss/unmain.html)
* [Kanban and Scrum - making the most of both](http://www.infoq.com/minibooks/kanban-scrum-minibook)
* [Kanban for skeptics](https://leanpub.com/kanbanforskeptics) (Leanpub, by Nick Oostvogels)
* [Naked objects](http://downloads.nakedobjects.net/resources/Pawson%20thesis.pdf) - Richard Pawson (PDF)
* [OAuth - The Big Picture](https://pages.apigee.com/oauth-big-picture-ebook.html)
* [Object-Oriented Reengineering Patterns](http://scg.unibe.ch/download/oorp/) - S. Demeyer, S. Ducasse and O. Nierstrasz
* [Practicing Domain-Driven Design](https://leanpub.com/Practicing-DDD) - Scott Millett
* [Scrum and XP from the Trenches](http://www.infoq.com/minibooks/scrum-xp-from-the-trenches-2)
* [Seamless Object-Oriented Software Architecture](http://www.bon-method.com/book_print_a4.pdf) (PDF)
* [Software Engineering for Internet Applications](http://philip.greenspun.com/seia/)
* [Web API Design](http://apigee.com/about/blog/technology/announcement-free-ebook-web-api-design)
* [Working with Web APIs](https://launchschool.com/books/working_with_apis) - Launch School
* [Your API Is Bad](https://leanpub.com/yourapiisbad) *(Leanpub, by Paddy Foran)*

#### Standards

* [Linux Standard Base](http://refspecs.linuxfoundation.org/lsb.shtml)
* [UNIX - The POSIX Standard - IEEE Std 1003.1](https://github.com/geoff-codes/posix-standard)

#### Theoretical Computer Science

* [Building Blocks for Theoretical Computer Science](http://mfleck.cs.illinois.edu/building-blocks/index.html) - Margaret M. Fleck
* [Category Theory for Computing Science](http://www.tac.mta.ca/tac/reprints/articles/22/tr22.pdf) (PDF)
* [Homotopy Type Theory: Univalent Foundations of Mathematics](http://homotopytypetheory.org/book/) (PDF)
* [Introduction to Computer Science](http://www.cse.iitd.ernet.in/~suban/CSL102/) - Prof. Subhashis Banerjee, IIT Delhi
* [Introduction to Computing](http://www.computingbook.org)
* [Introduction to Theory of Computation](http://cglab.ca/~michiel/TheoryOfComputation/) - Anil Maheshwari and Michiel Smid (PDF)
* [Models of Computation](http://cs.brown.edu/people/jes/book/) - John E. Savage
* [Practical Foundations for Programming Languages, Preview](http://www.cs.cmu.edu/~rwh/plbook/book.pdf) - Robert Harper (PDF)
* [Principles of Programming Languages](https://web.archive.org/web/20150418034451/http://www.cs.jhu.edu/~scott/pl/book/dist/) - Scott F. Smith
* [Programming and Programming Languages](http://papl.cs.brown.edu/2014/index.html) - Shriram Krishnamurthi
* [Programming in Martin-Löf's Type Theory](http://www.cse.chalmers.se/research/group/logic/book/) - Bengt Nordstroem
* [Programming Languages: Application and Interpretation (2nd Edition)](http://cs.brown.edu/~sk/Publications/Books/ProgLangs/)
* [Semantics with Applications: A Formal Introduction](http://www.daimi.au.dk/~bra8130/Wiley_book/wiley.html) - Hanne Riis Nielson, Flemming Nielson
* [Structure and Interpretation of Computer Programs](https://mitpress.mit.edu/sicp/)
* [Structure and Interpretation of Computer Programs](http://sarabander.github.io/sicp/html/index.xhtml)
* [Think Complexity](http://www.greenteapress.com/compmod/) - Allen B. Downey

#### Web Performance

* [Book of Speed](http://www.bookofspeed.com) - Stoyan Stefanov
* [High Performance Browser Networking](http://chimera.labs.oreilly.com/books/1230000000545/index.html) - Ilya Grigorik
* [Mature Optimization](http://carlos.bueno.org/optimization/mature-optimization.pdf) - Carlos Bueno (PDF)

### Ada

* [A Guide to Ada for C and C++ Programmers](http://www.cs.uni.edu/~mccormic/4740/guide-c2ada.pdf) (PDF)
* [Ada Distilled](http://www.adapower.com/pdfs/AdaDistilled07-27-2003.pdf) (PDF)
* [Ada Programming](https://en.wikibooks.org/wiki/Ada_Programming)
* [Ada Reference Manual - ISO/IEC 8652:2012(E) Language and Standard Libraries](http://www.ada-auth.org/standards/12rm/RM-Final.pdf) (PDF)
* [The Big Online Book of Linux Ada Programming](http://www.pegasoft.ca/resources/boblap/book.html)

### Agda

* [Agda Tutorial](http://people.inf.elte.hu/divip/AgdaTutorial/Index.html)

### Alef

* [Alef Language Reference Manual](http://doc.cat-v.org/plan_9/2nd_edition/papers/alef/ref)

### Android

* [Agile Android Software Development](https://www.agiledroid.com) - Etienne Savard (PDF, epub, mobi)
* [Android 4 App Development Essentials](http://www.techotopia.com/index.php/Android_4_App_Development_Essentials)
* [Android Programming Guide for Beginners](http://eduonix.com/offers/Android_ebook_free_offer.html) (PDF - need email confirmation)
* [Android Programming Succinctly, Syncfusion](https://www.syncfusion.com/resources/techportal/ebooks/android) ([PDF](https://www.syncfusion.com/Account/Logon?ReturnUrl=%2fresources%2ftechportal%2febooks%2fandroid), [Kindle](https://www.syncfusion.com/Account/Logon?ReturnUrl=%2fresources%2ftechportal%2febooks%2fandroid)) *(Just fill the fields with any values)*
* [CodePath Android Cliffnotes](https://github.com/codepath/android_guides/wiki)
* [Coreservlets Android Programming Tutorial](http://www.coreservlets.com/android-tutorial/)
* [Expert Android and Eclipse development knowledge](http://www.vogella.com/tutorials/android.html)
* [Google Android Developer Training](https://developer.android.com/training/index.html)
* [Styling Android](https://blog.stylingandroid.com)
* [The Busy Coder's Guide to Android Development](https://commonsware.com/Android/4-2-free) (PDF - older versions)
* [Tutorial Point Android Tutorial](http://www.tutorialspoint.com/android/android_tutorial.pdf) (PDF)

### APL

* [A Practical Introduction to APL1 &amp; APL2](http://aplwiki.com/BooksAndPublications#A_Practical_Introduction_to_APL1_.26_APL2)
* [A Practical Introduction to APL3 &amp; APL4](http://aplwiki.com/BooksAndPublications#A_Practical_Introduction_to_APL3_.26_APL4)
* [Mastering Dyalog APL](http://www.dyalog.com/mastering-dyalog-apl.htm) (PDF)

### Arduino

* [Arduino Programming Notebook](http://www.lulu.com/shop/brian-evans/arduino-programming-notebook/ebook/product-18598708.html) - Brian Evans
* [Introduction to Arduino](http://playground.arduino.cc/Main/ManualsAndCurriculum)
* [Introduction to Arduino : A piece of cake!](http://www.introtoarduino.com) - Alan G. Smith

### ASP.NET MVC

* [ASP.NET MVC Music Store](http://mvcmusicstore.codeplex.com)

### Assembly Language

* [An introduction to reverse engineering for beginners](https://github.com/dennis714/RE-for-beginners)
* [Assembly Language Succinctly](https://www.syncfusion.com/resources/techportal/details/ebooks/assemblylanguage) (PDF)
* [PC Assembly Language](http://drpaulcarter.com/pcasm/) - P. A. Carter
* [Professional Assembly Language](http://blog.hit.edu.cn/jsx/upload/AT%EF%BC%86TAssemblyLanguage.pdf) (PDF)
* [Programming from the Ground Up](http://mirror.unicorncloud.org/savannah-nongnu//pgubook/ProgrammingGroundUp-1-0-booksize.pdf) (PDF)
* [Ralf Brown's Interrupt List](http://www.ctyme.com/rbrown.htm)
* [Software optimization resources](http://www.agner.org/optimize/) A. Fog
* [The Art of Assembly Language Programming](https://courses.engr.illinois.edu/ece390/books/artofasm/artofasm.html)
* [The Second Book Of Machine Language](http://www.atariarchives.org/2bml/)
* [Wizard Code](http://vendu.twodots.nl/wizardcode.html)
* [x86 Assembly](https://en.wikibooks.org/wiki/X86_Assembly)

#### Non-X86

* [Easy 6502](http://skilldrick.github.io/easy6502/) - Nick Morgan
* [Machine Code for Beginners [Z80 and 6502 CPUs]](http://www.worldofspectrum.org/infoseekid.cgi?id=2000227) - Lisa Watts and Mike Wharton (PDF)
* [Machine Language for Beginners](https://archive.org/details/ataribooks-machine-language-for-beginners) - Richard Mansfield [6502 CPU]
* [Programmed Introduction to MIPS Assembly Language](http://chortle.ccsu.edu/AssemblyTutorial/index.html)

### AutoHotkey

* [AHKbook - the book for AutoHotkey](http://ahkscript.github.io/ahkbook/index.html)
* [AutoHotkey Official Documentation](https://autohotkey.com/docs/AutoHotkey.htm) ([CHM](https://autohotkey.com/download/1.1/AutoHotkeyHelp.zip))

### Autotools

* [Autotools Mythbuster](https://autotools.io/index.html)
* [GNU Autoconf, Automake and Libtool](http://sourceware.org/autobook/)

### Awk

* [A User's Guide for GNU AWK](http://www.math.utah.edu/docs/info/gawk_toc.html)
* [An Awk Primer](https://en.wikibooks.org/wiki/An_Awk_Primer)
* [Awk](http://www.grymoire.com/Unix/Awk.html) - Bruce Barnett

### Bash

* [Advanced Bash-Scripting Guide](http://tldp.org/LDP/abs/html/) - M. Cooper
* [Bash Guide for Beginners](http://www.tldp.org/LDP/Bash-Beginners-Guide/html/) - M. Garrels
* [BASH Programming](http://tldp.org/HOWTO/Bash-Prog-Intro-HOWTO.html)
* [Bash Reference Manual](http://www.gnu.org/software/bash/manual/bashref.html)
* [BashGuide](http://mywiki.wooledge.org/BashGuide)
* [Conquering the Command Line](http://conqueringthecommandline.com/book/frontmatter) - Mark Bates
* [Getting Started with BASH](http://www.hypexr.org/bash_tutorial.php)
* [Google Shell Style Guide](http://google-styleguide.googlecode.com/svn/trunk/shell.xml)
* [Introduction to the Command Line](https://launchschool.com/books/command_line) - Launch School
* [Linux Fundamentals](http://linux-training.be/linuxfun.pdf) - Paul Cobbaut (PDF)
* [Linux Shell Scripting Tutorial - A Beginner's Handbook](http://www.freeos.com/guides/lsst/)
* [The Bash Academy](http://www.bash.academy)
* [The Command Line Crash Course](http://learncodethehardway.org/cli/book/) Z. A. Shaw
* [Writing Shell Scripts](http://linuxcommand.org/lc3_writing_shell_scripts.php) - William E. Shotts, Jr.

### Basic

* [10 PRINT CHR$(205.5+RND(1)); : GOTO 10](http://10print.org) - Nick Montfort, Patsy Baudoin, John Bell,Ian Bogost, Jeremy Douglass, Mark C. Marino, Michael Mateas, Casey Reas, Mark Sample, Noah Vawter
* [A beginner's guide to Gambas](http://beginnersguidetogambas.com)
* [BASIC programming language - Wikibooks](https://en.wikibooks.org/wiki/Category%3ABASIC_programming_language)
* [How To Gambas3 Guides](http://howtogambas.org/index.php?page=cedi)
* [Pick/Basic: A Programmer's Guide](http://www.jes.com/pb/) - Jonathan E. Sisk
* [Visual Basic Essentials](http://www.techotopia.com/index.php/Visual_Basic_Essentials)

### BETA

* [Object-Oriented Programming in the BETA Programming Language](http://www.daimi.au.dk/~beta/Books/) - Ole Lehrmann Madsen, Birger Møller-Pedersen, Kristen Nygaard

### C

* [A Tutorial on Pointers and Arrays in C](http://home.netcom.com/~tjensen/ptr/pointers.htm)
* [Beej's Guide to C Programming](http://beej.us/guide/bgc/) - B. Hall
* [Beej's Guide to Network Programming - Using Internet Sockets](http://beej.us/guide/bgnet/) - B. Hall
* [Build Your Own Lisp](http://www.buildyourownlisp.com)
* [C Programming](https://en.wikibooks.org/wiki/Programming%3AC) - Wikibooks
* [Deep C](http://www.slideshare.net/olvemaudal/deep-c)
* [Essential C](http://cslibrary.stanford.edu/101/EssentialC.pdf) (PDF)
* [Learn C The Hard Way](http://c.learncodethehardway.org/book/)
* [Modern C](http://icube-icps.unistra.fr/img_auth.php/d/db/ModernC.pdf) (PDF)
* [Object-Oriented Programming With ANSI-C](http://www.planetpdf.com/codecuts/pdfs/ooc.pdf) (PDF)
* [Programming in C](http://ee.hawaii.edu/~tep/EE160/Book/PDF/) - Bharat Kinariwala &amp; Tep Dobry
* [The C book](http://publications.gbdirect.co.uk/c_book/)
* [The Craft of Text Editing or A Cookbook for an Emacs](http://www.finseth.com/craft/) - Craig A. Finseth
* [The GNU C Programming Tutorial](http://www.crasseux.com/books/ctut.pdf) (PDF)
* [The little book about OS development](http://littleosbook.github.io) - Erik Helin, Adam Renberg
* [The New C Standard - An Annotated Reference](http://www.knosof.co.uk/cbook/cbook.html)
* [TONC GBA Programming - Game Boy Advance Development](http://www.coranac.com/tonc/text/toc.htm)
* [Using C on the UNIX System](http://www.bitsinthewind.com/about-dac/publications/using-c-on-the-unix-system) - David A. Curry

### C Sharp

* [Beginners Guide to C# and the.NET Micro Framework](http://www.ghielectronics.com/downloads/FEZ/Beginners%20guide%20to%20NETMF.pdf) (PDF)
* [C# Essentials](http://www.techotopia.com/index.php/C_Sharp_Essentials)
* [C# Programming - Wikibook](https://en.wikibooks.org/wiki/C_Sharp_Programming)
* [C# Yellow Book](http://www.csharpcourse.com) (intro to programming)
* [Creating Mobile Apps with Xamarin.Forms C#](https://developer.xamarin.com/guides/xamarin-forms/creating-mobile-apps-xamarin-forms/)
* [Data Structures and Algorithms with Object-Oriented Design Patterns in C#](http://www.brpreiss.com/books/opus6/)
* [Dissecting a C# Application](https://damieng.com/blog/2007/11/08/dissecting-a-c-application-inside-sharpdevelop) - Christian Holm, Bernhard Spuida, Mike Kruger
* [Fundamentals of Computer Programming with C#](http://www.introprogramming.info/english-intro-csharp-book/read-online/) - Svetlin Nakov
* [Introduction to Rx](http://www.introtorx.com)
* [Threading in C#](http://www.albahari.com/threading/)

### C++

* [C++ Annotations](https://fbb-git.github.io/cppannotations/)
* [C++ Cookbook](http://staff.ppu.edu/dkhalid/O'Reilly%20-%20C++%20Cookbook%20%282007%29.pdf) (PDF)
* [C++ GUI Programming With Qt 3](http://www.computer-books.us/cpp_0010.php)
* [C++ Succinctly, Syncfusion](https://www.syncfusion.com/resources/techportal/ebooks/cplusplus) (PDF, Kindle) *(Just fill the fields with any values)*
* [C++ Tricks](http://www.bordoon.com/cplusplus/book_wrapper.html)
* [CS106X Programming Abstractions in C++](http://web.stanford.edu/class/cs106x/)
* [Financial Numerical Recipes in C++](http://finance.bi.no/~bernt/gcc_prog/recipes/) - Bernt Arne Ødegaard
* [Game Programming Patterns](http://gameprogrammingpatterns.com)
* [Google's C++ Style Guide](https://google.github.io/styleguide/cppguide.html)
* [How To Think Like a Computer Scientist: C++ Version](http://greenteapress.com/thinkcpp/index.html) - Allen B. Downey
* [Introduction to Design Patterns in C++ with Qt](http://ptgmedia.pearsoncmg.com/images/9780131879058/downloads/0131879057_Ezust_book.pdf) (PDF)
* [Joint Strike Fighter, C++ Coding Standards, by Bjarne Stroustrup](http://www.stroustrup.com/JSF-AV-rules.pdf) (PDF)
* [Learn C++.](http://www.learncpp.com) (PDF, Online)
* [Matters Computational: Ideas, Algorithms, Source Code, by Jorg Arndt](http://www.jjj.de/fxt/fxtbook.pdf) (PDF)
* [Open Data Structures (In C++)](http://opendatastructures.org/ods-cpp.pdf) (PDF)
* [Software Design Using C++](http://cis.stvincent.edu/html/tutorials/swd/) - Br. David Carlson and Br. Isidore Minerd
* [Software optimization resources by Agner Fog](http://www.agner.org/optimize/)
* [The Boost C++ libraries](http://theboostcpplibraries.com)
* [The Rook's Guide to C++](http://rooksguide.org/2013/11/26/version-1-0-is-out/) (PDF)
* [The Ultimate Question of Programming, Refactoring, and Everything](https://www.gitbook.com/book/alexastva/the-ultimate-question-of-programming-refactoring-/details)
* [Thinking in C++, Second Edition, Vol. 1.](http://www.mindviewinc.com/downloads/TICPP-2nd-ed-Vol-one.zip) - Bruce Eckel [(Vol. 2)](http://www.mindviewinc.com/downloads/TICPP-2nd-ed-Vol-two.zip) (ZIP)

### Chapel

* [Chapel Tutorial](http://faculty.knox.edu/dbunde/teaching/chapel/)
* [Chapel Tutorial for Programmers](http://cs.colby.edu/kgburke/?resource=chapelTutorial)

### Cilk

* [Cilk 5.4.6 Reference Manual](http://supertech.csail.mit.edu/cilk/manual-5.4.6.pdf) (PDF)

### Clojure

* [A Brief Beginner’s Guide To Clojure](http://www.unexpected-vortices.com/clojure/brief-beginners-guide/)
* [Clojure - Functional Programming for the JVM](http://java.ociweb.com/mark/clojure/article.html) - R. Mark Volkmann
* [Clojure Cheat Sheet](http://clojure.org/cheatsheet)
* [Clojure Cookbook](https://github.com/clojure-cookbook/clojure-cookbook)
* [Clojure Distilled Beginner Guide](http://yogthos.github.io/ClojureDistilled.html)
* [Clojure for the Brave and True](http://www.braveclojure.com)
* [Clojure in Small Pieces](http://daly.axiom-developer.org/clojure.pdf) - Rich Hickey (PDF)
* [Clojure Koans](http://clojurekoans.com)
* [Clojure Programming](https://en.wikibooks.org/wiki/Clojure_Programming)
* [ClojureScript Koans](http://clojurescriptkoans.com)
* [Data Sorcery with Clojure](http://data-sorcery.org/contents/)
* [Modern cljs](https://github.com/magomimmo/modern-cljs)
* [SICP Distilled - An idiosyncratic tour of SICP in Clojure](http://www.sicpdistilled.com)
* [The Clojure Style Guide](https://github.com/bbatsov/clojure-style-guide)

### COBOL

* [COBOL Programming Fundamental](http://yusman.staff.gunadarma.ac.id/Downloads/files/33460/COBOL_Programming_Fundamental.pdf) (PDF)
* [Enterprise COBOL for z/OS documentation library](http://www-01.ibm.com/support/docview.wss?uid=swg27036733)
* [Introduction to the COBOL Language](http://www-03.ibm.com/systems/z/education/skills_coursematerials.html#COBOL)
* [OpenCOBOL 1.1 - Programmer's Guide](http://opencobol.add1tocobol.com/OpenCOBOL%20Programmers%20Guide.pdf) (PDF)

### CoffeeScript

* [CoffeeScript Cookbook](https://coffeescript-cookbook.github.io)
* [CoffeeScript Ristretto](https://leanpub.com/coffeescript-ristretto/read) - Reginald Braithwaite
* [Hard Rock CoffeeScript](http://hardrockcoffeescript.org)
* [Smooth CoffeeScript](http://autotelicum.github.io/Smooth-CoffeeScript/SmoothCoffeeScript.html)
* [The Little Book on CoffeeScript](http://arcturo.github.io/library/coffeescript/)

### ColdFusion

* [CFML In 100 Minutes](https://github.com/mhenke/CFML-in-100-minutes/blob/master/cfml100mins.markdown) - J. Casimir
* [Learn CF in a Week](http://learncfinaweek.com)

### Cool

* [CoolAid: The Cool 2013 Reference Manual](https://www.eecis.udel.edu/~cavazos/cisc672/docs/cool-manual.pdf) (PDF)

### Coq

* [Certified Programming with Dependent Types](http://adam.chlipala.net/cpdt/html/toc.html)
* [Software Foundations](http://www.cis.upenn.edu/~bcpierce/sf/)

### CUDA

* [OpenCL Programming Guide for CUDA Architecture](http://www.nvidia.com/content/cudazone/download/OpenCL/NVIDIA_OpenCL_ProgrammingGuide.pdf) (PDF)

### D

* [D Templates Tutorial](https://github.com/PhilippeSigaud/D-templates-tutorial)
* [Programming in D](http://ddili.org/ders/d.en/)

### Dart

* [What is Dart?](http://shop.oreilly.com/product/0636920025887.do)

### DB2

* [Getting started with DB2 Express-C](http://public.dhe.ibm.com/software/dw/db2/express-c/wiki/Getting_Started_with_DB2_Express_v9.7_p4.pdf) (PDF)
* [Getting started with IBM Data Studio for DB2](http://public.dhe.ibm.com/software/dw/db2/express-c/wiki/Getting_Started_with_IBM_Data_Studio_for_DB2_p3.pdf) (PDF)
* [Getting started with IBM DB2 development](http://public.dhe.ibm.com/software/dw/db2/express-c/wiki/Getting_Started_with_DB2_App_Dev_p2.pdf) (PDF)

### Delphi / Pascal

* [Essential Pascal Version 1 and 2](http://www.marcocantu.com/epascal/) - M. Cantù
* [Free Pascal: Reference guide](http://ftp.icm.edu.pl/packages/fpc/docs-pdf/ref.pdf) (PDF)

### DTrace

* [IllumOS Dynamic Tracing Guide](http://dtrace.org/guide/preface.html)

### Elasticsearch

* [Elasticsearch: The Definitive Guide](https://www.elastic.co/guide/en/elasticsearch/guide/current/index.html) ([fork it on GH](https://github.com/elastic/elasticsearch-definitive-guide))
* [Exploring Elasticsearch](http://exploringelasticsearch.com)

### Elixir

* [30 Days of Elixir](https://github.com/seven1m/30-days-of-elixir) - Tim Morgan (HTML)
* [Elixir School](https://elixirschool.com) (HTML)
* [Études for Elixir](http://chimera.labs.oreilly.com/books/1234000001642/index.html) (HTML)
* [Getting Started Guide](http://elixir-lang.org/getting-started/introduction.html) (HTML)
* [Learning Elixir](http://learningelixir.joekain.com) - Joseph Kain Blog (HTML)

### Emacs

* [An Introduction to Programming in Emacs Lisp, 3rd Edition](https://www.gnu.org/software/emacs/manual/html_node/eintr/index.html)
* [GNU Emacs Lisp Reference Manual](http://www.gnu.org/software/emacs/manual/elisp.html)
* [GNU Emacs Manual, 17th Edition, v. 24.2](http://shop.fsf.org/product/Emacs_Manual_24/)

### Embedded Systems

* [Control and Embedded Systems](http://www.learn-c.com) (HTML)
* [Discovering the STM32 Microcontroller](http://www.cs.indiana.edu/~geobrown/book.pdf) (PDF)
* [Introduction to Microcontrollers](http://www.embeddedrelated.com/showarticle/453.php) (HTML)

### Erlang

* [Concurrent Programming in ERLANG](http://www.erlang.org/download/erlang-book-part1.pdf) (PDF)
* [Erlang Handbook](https://github.com/esl/erlang-handbook/raw/master/output/ErlangHandbook.pdf) (PDF)
* [Erlang Programming](https://en.wikibooks.org/wiki/Erlang_Programming) (HTML)
* [Études for Erlang](http://chimera.labs.oreilly.com/books/1234000000726/index.html) - J. David Eisenberg
* [Getting Started with Erlang User's Guide](http://www.erlang.org/doc/getting_started/users_guide.html) (HTML)
* [Learn You Some Erlang For Great Good](http://learnyousomeerlang.com) - Frederic Trottier-Hebert
* [Making reliable distributed systems in the presence of software errors](http://www.erlang.org/download/armstrong_thesis_2003.pdf) - Joe Armstrong (PDF)
* [Stuff Goes Bad: Erlang in Anger](https://s3.amazonaws.com/erlang-in-anger/text.v1.0.3.pdf) - Fred Herbert (PDF)

### F Sharp

* [F# Programming](https://en.wikibooks.org/wiki/F_Sharp_Programming) in Wikibooks
* [F# Succinctly, SyncFusion](https://www.syncfusion.com/resources/techportal/ebooks/fsharp) (PDF, Kindle) *(Just fill the fields with any values)*
* [Programming Language Concepts for Software Developers](http://www.itu.dk/courses/BPRD/E2009/plcsd-1-2.pdf) (PDF)
* [Real World Functional Programming](https://msdn.microsoft.com/en-us/library/hh314518.aspx) (MSDN Chapters)

### Firefox OS

* [Quick Guide For Firefox OS App Development: Creating HTML5 based apps for Firefox OS](https://leanpub.com/quickguidefirefoxosdevelopment) - Andre Garzia

### Force.com

* [Developer Workbooks](http://developer.force.com/workbook)
* [Force.com Fundamentals](https://developer.salesforce.com/page/Force_Platform_Fundamentals)
* [Force.com Platform Fundamentals: An Introduction to Custom Application Development in the Cloud](http://www.lulu.com/shop/salesforcecom/forcecom-platform-fundamentals/ebook/product-17381451.html)
* [Heroku Postgres](https://web.archive.org/web/20131209081736/http://media.developerforce.com/workbooks/HerokuPostgres_Workbooks_Web_Final.pdf) (PDF)

### Forth

* [A Beginner's Guide to Forth](http://hackershelf.com/book/482/a-beginners-guide-to-forth/)
* [And so Forth...](http://ficl.sourceforge.net/pdf/Forth_Primer.pdf) (PDF)
* [Programming Forth](http://www.mpeforth.com/arena/ProgramForth.pdf) (PDF)
* [Starting Forth](http://home.iae.nl/users/mhx/sf.html)
* [Thinking Forth](http://thinking-forth.sourceforge.net)
* [Thoughtful Programming and Forth](http://www.ultratechnology.com/forth.htm)

### Fortran

* [Fortran programming language - Wikibooks](https://en.wikibooks.org/wiki/Category%3AFortran_programming_language)
* [Introduction to fortran 95 and numerical computing: a jump-start for scientists and engineers](http://people.cs.vt.edu/~asandu/Deposit/Fortran95_notes.pdf) (PDF)
* [Self Study Guide: Programming in Fortran 95](http://www.mrao.cam.ac.uk/~rachael/compphys/SelfStudyF95.pdf) (PDF)

### FreeBSD

* [Books and Articles from FreeBSD Site](http://www.freebsd.org/docs/books.html)
* [The Complete FreeBSD](http://www.lemis.com/grog/Documentation/CFBSD/)

### Git

* [A practical git introduction](http://marc.helbling.fr/2014/09/practical-git-introduction)
* [A Visual Git Reference](http://marklodato.github.io/visual-git-guide/index-en.html) - Mark Lodato
* [Conversational Git](http://blog.anvard.org/conversational-git/)
* [git - the simple guide](http://rogerdudler.github.io/git-guide/)
* [Git for Computer Scientists](http://eagain.net/articles/git-for-computer-scientists/)
* [Git From The Bottom Up](https://jwiegley.github.io/git-from-the-bottom-up/) - J. Wiegley
* [Git Immersion](http://gitimmersion.com)
* [Git In The Trenches](http://cbx33.github.io/gitt/index.html)
* [Git internals](https://github.com/pluralsight/git-internals-pdf/raw/master/drafts/peepcode-git.pdf) - Scott Chacon (PDF)
* [Git Magic](http://www-cs-students.stanford.edu/~blynn/gitmagic/)
* [Git Pocket Guide](http://chimera.labs.oreilly.com/books/1230000000561/index.html) - Richard E. Silverman
* [Git Reference](http://gitref.org)
* [Git Succinctly, Syncfusion](https://www.syncfusion.com/resources/techportal/ebooks/git) (PDF, Kindle) *(Just fill the fields with any values)*
* [Git Workflows](http://documentup.com/skwp/git-workflows-book)
* [GitHub Cheat Sheet](https://github.com/tiimgreen/github-cheat-sheet) - Tim Green (Markdown)
* [Intoduction to Git and Github](https://launchschool.com/books/git) - Launch School
* [Learn Enough Git to be Dangerous](https://www.learnenough.com/git-tutorial) - Michael Hartl
* [Learn Git - Learn Version Control with Git](http://www.git-tower.com/learn/git/ebook/command-line/introduction) - Tobias Günther
* [Pro Git](http://git-scm.com/book/en/v2) - Scott Chacon
* [Pro Git Reedited](https://leanpub.com/progitreedited) - Jon Forrest
* [Think Like (a) Git: A Guide for the Perplexed](http://think-like-a-git.net)
* [Version Control by Example (Mercurial, Subversion, Verasity)](http://ericsink.com/vcbe/)

### Go

* [An Introduction to Programming in Go](http://www.golang-book.com)
* [Build Web Application with Golang](https://astaxie.gitbooks.io/build-web-application-with-golang/content/en/)
* [Building Web Apps with Go](https://codegangsta.gitbooks.io/building-web-apps-with-go/content/)
* [Effective Go](https://golang.org/doc/effective_go.html)
* [Go Bootcamp](http://www.golangbootcamp.com/book) - Matt Aimonetti
* [Go by Example](https://gobyexample.com)
* [Learning Go](https://miek.nl/go/)
* [Let's learn Go!](http://go-book.appspot.com)
* [Network programming with Go](https://jan.newmarch.name/go/)
* [Practical Cryptography With Go](https://leanpub.com/gocrypto/read)
* [The Go Tutorial](http://tour.golang.org)
* [The Little Go Book](https://github.com/karlseguin/the-little-go-book)

### Groovy

#### Gradle

* [Building Java Projects with Gradle](http://spring.io/guides/gs/gradle/)
* [Gradle User Guide](https://docs.gradle.org/current/userguide/userguide.html) - Hans Dockter, Adam Murdoch ([PDF](https://docs.gradle.org/current/userguide/userguide.pdf))

#### Grails

* [Getting Started with Grails](http://www.infoq.com/minibooks/grails-getting-started)
* [Grails Tutorial for Beginners](http://grails.asia/grails-tutorial-for-beginners/)
* [The Grails Framework - Reference Documentation](http://grails.github.io/grails-doc/latest/) - Graeme Rocher, Peter Ledbrook, Marc Palmer, Jeff Brown, Luke Daley, Burt Beckwith, Lari Hotari ([PDF](http://grails.github.io/grails-doc/latest/guide/single.pdf))

#### Spock Framework

* [Spock Framework Reference Documentation](https://spockframework.github.io/spock/docs/current/index.html) - Peter Niederwieser
* [Spock Intro](http://edgibbs.com/spock-intro-a-bdd-testing-framework-in-groovy/) - Ed Gibbs

### Hadoop

* [Cloudera Impala](http://www.cloudera.com/content/www/en-us/resources/aboutcloudera/cloudera-impala-ebook.html) - John Russel
* [Data-Intensive Text Processing with MapReduce](http://lintool.github.io/MapReduceAlgorithms/MapReduce-book-final.pdf) (Jimmy Lin and Chris Dyer) (PDF)
* [Hadoop Illuminated](http://hadoopilluminated.com/index.html) - Mark Kerzner &amp; Sujee Maniyam
* [Programming Pig](http://chimera.labs.oreilly.com/books/1234000001811/index.html) - Alan Gates

### Haskell

* [A Gentle Introduction to Haskell](https://www.haskell.org/tutorial/)
* [Anatomy of Programming Languages](http://www.cs.utexas.edu/~wcook/anatomy/) - William R. Cook
* [Beautiful Code, Compelling Evidence](http://vis.renci.org/jeff/2009/01/16/beautiful-code-compelling-evidence/) (PDF)
* [Exploring Generic Haskell](http://www.andres-loeh.de/ExploringGH.pdf) - Andres Löh (PDF)
* [Happy Learn Haskell Tutorial](http://www.happylearnhaskelltutorial.com)
* [Haskell and Yesod](http://www.yesodweb.com/book-1.2)
* [Haskell no panic](http://lisperati.com/haskell/)
* [Haskell web Programming](http://yannesposito.com/Scratch/fr/blog/Yesod-tutorial-for-newbies/) (Yesod tutorial)
* [Introduction to Haskell](http://www.seas.upenn.edu/~cis194/spring13/) - Brent Yorgey
* [Learn Haskell Fast and Hard](http://yannesposito.com/Scratch/en/blog/Haskell-the-Hard-Way/)
* [Learn You a Haskell for Great Good](http://learnyouahaskell.com) - Miran Lipovaca
* [Parallel and Concurrent Programming in Haskell](http://chimera.labs.oreilly.com/books/1230000000929/index.html) - Simon Marlow
* [Real World Haskell](http://book.realworldhaskell.org)
* [Speeding Through Haskell](http://www.sthaskell.com)
* [The Haskell Road to Logic, Math and Programming](https://fldit-www.cs.uni-dortmund.de/~peter/PS07/HR.pdf) (PDF)
* [The Haskell School of Music](http://haskell.cs.yale.edu/?post_type=publication&amp;p=112) (PDF) (work in progress)
* [Wikibook Haskell](https://en.wikibooks.org/wiki/Haskell)
* [Yet Another Haskell Tutorial](http://hal3.name/docs/daume02yaht.pdf) (PDF)

### Haxe

* [Flambe Handbook](https://github.com/markknol/flambe-guide/wiki)
* [Haxe and JavaScript](https://matthijskamstra.github.io/haxejs/) - Matthijs Kamstra (wikibook)
* [Haxe Manual](http://haxe.org/documentation/introduction/) - Haxe Foundation (PDF, HTML)
* [HaxeFlixel Handbook](http://haxeflixel.com/documentation/haxeflixel-handbook/) (HTML)
* [Kha Handbook](http://wiki.ktxsoftware.com/wiki/Home)
* [OpenFL Handbook](https://www.gitbook.com/book/openfl/openfl-documentation/details)

### HTML / CSS

* [A beginner's guide to HTML&amp;CSS](http://learn.shayhowe.com/html-css/)
* [A free guide to learn HTML and CSS](http://marksheet.io)
* [Adaptive Web Design](http://adaptivewebdesign.info/1st-edition/) - Aaron Gustafson
* [An advanced guide to HTML&amp;CSS](http://learn.shayhowe.com/advanced-html-css/)
* [Canvassing](http://learnjs.io/canvassing/read)
* [Code Guide: Standards for developing flexible, durable, and sustainable HTML and CSS](http://mdo.github.io/code-guide/) - Mark Otto
* [Dive Into HTML5](http://diveintohtml5.info) - Mark Pilgrim ([PDF](http://mislav.net/2011/10/dive-into-html5/))
* [GA Dash](https://dash.generalassemb.ly)
* [Google's HTML/CSS Style Guide](http://google-styleguide.googlecode.com/svn/trunk/htmlcssguide.xml)
* [HTML Canvas Deep Dive](http://joshondesign.com/p/books/canvasdeepdive/toc.html) - Josh Marinacci
* [HTML Dog Tutorials](http://www.htmldog.com)
* [HTML5 Canvas](http://chimera.labs.oreilly.com/books/1234000001654/index.html) - Steve Fulton &amp; Jeff Fulton
* [HTML5 for Publishers](http://chimera.labs.oreilly.com/books/1234000000770/index.html) - Sanders Kleinfeld
* [HTML5 For Web Designers](http://html5forwebdesigners.com) - Jeremy Keith
* [HTML5 Shoot 'em Up in an Afternoon](https://leanpub.com/html5shootemupinanafternoon/read) - Bryan Bibat
* [Learn CSS Layout](http://learnlayout.com)
* [Learn CSS Layout the pedantic way](http://book.mixu.net/css/)
* [MaintainableCSS](http://maintainablecss.com)
* [Pro HTML5 Programming]( http://apress.jensimmons.com/v5/pro-html5-programming/ch0.html)
* [Scalable and Modular Architecture for CSS](https://smacss.com) - Jonathan Snook
* [Web Audio API](http://chimera.labs.oreilly.com/books/1234000001552) - Boris Smus

#### Bootstrap

* [Twitter Bootstrap 3 Succinctly](https://www.syncfusion.com/resources/techportal/ebooks/twitterbootstrap3) (PDF, Kindle) *(Just fill the fields with any values)*
* [Twitter Bootstrap Succinctly](https://www.syncfusion.com/resources/techportal/ebooks/twitterbootstrap) (PDF, Kindle) *(Just fill the fields with any values)*

#### HTTP

* [Introduction to HTTP](https://launchschool.com/books/http) - Launch School

### Icon

* [The Implementation of the Icon Programming Language](http://www.cs.arizona.edu/icon/ibsale.htm)

### iOS

* [Cocoa Dev Central](http://cocoadevcentral.com)
* [iOS 8 App Development Essentials](http://www.techotopia.com/index.php/IOS_8_App_Development_Essentials)
* [iOS Succinctly, Syncfusion](https://www.syncfusion.com/resources/techportal/ebooks/ios) (PDF, Kindle) *(Just fill the fields with any values)*
* [NSHipster](http://nshipster.com/#archive) (Resource)
* [Start Developing iOS Apps (Swift)](https://developer.apple.com/library/prerelease/ios/referencelibrary/GettingStarted/DevelopiOSAppsSwift/index.html) (HTML)
* [Start Developing iOS Apps Today (Objective-C) - Last updated 22.10.2013](http://everythingcomputerscience.com/books/RoadMapiOS.pdf) (PDF)

### IoT

* [IoT in five days- V1.1](https://github.com/marcozennaro/IPv6-WSN-book/tree/master/Releases) (PDF, EPUB)

### Isabelle/HOL

* [Concrete Semantics - A Proof Assistant Approach by Tobias Nipkow and Gerwin Klein](http://www21.in.tum.de/~nipkow/Concrete-Semantics/) (PDF)
* [Isabelle/HOL - A Proof Assistant for Higher-Order Logic by Tobias Nipkow and Lawrence C. Paulson and Markus Wenzel](http://isabelle.in.tum.de/doc/tutorial.pdf) (PDF)

### J

* [Arithmetic by Kenneth E Iverson](http://www.jsoftware.com/books/pdf/arithmetic.pdf) (PDF)
* [Brief Reference by Chris Burke and Clifford Reiter](http://www.jsoftware.com/books/pdf/brief.pdf) (PDF)
* [Calculus by Kenneth E Iverson](http://www.jsoftware.com/books/pdf/calculus.pdf) (PDF)
* [Computers and Mathematical Notation by Kenneth E Iverson](http://www.jsoftware.com/papers/camn.htm)
* [Concrete Math Companion by Kenneth E Iverson](http://www.jsoftware.com/books/pdf/cmc.pdf) (PDF)
* [Easy J by Linda Alvord, Norman Thomson](http://www.jsoftware.com/books/pdf/easyj.pdf) (PDF, [Word DOC](http://www.jsoftware.com/books/doc/easyj_doc.zip))
* [Exploring Math by Kenneth E Iverson](http://www.jsoftware.com/books/pdf/expmath.pdf) (PDF)
* [J for C Programmers by Henry Rich](http://www.jsoftware.com/help/jforc/contents.htm)
* [J Primer](http://www.jsoftware.com/help/primer/contents.htm)
* [Learning J by Roger Stokes- online](http://www.jsoftware.com/help/learning/contents.htm)
* [Math for the Layman by Kenneth E Iverson](http://www.jsoftware.com/books/pdf/mftl.zip) (zipped html+images)

### Java

* [3D Programming in Java](http://www.mat.uniroma2.it/~picard/SMC/didattica/materiali_did/Java/Java_3D/Java_3D_Programming.pdf) - Daniel Selman (PDF)
* [Apache Jakarta Commons: Reusable Java Components](http://ptgmedia.pearsoncmg.com/images/0131478303/downloads/Iverson_book.pdf) - Will Iverson (PDF)
* [Artificial Intelligence - Foundation of Computational Agents](http://artint.info/html/ArtInt.html)
* [Category wise tutorials - J2EE](http://www.mkyong.com)
* [Core Servlets and JavaServer Pages](http://pdf.coreservlets.com) - Marty Hall and Larry Brown
* [Data Structures and Algorithms with Object-Oriented Design Patterns in Java](http://www.brpreiss.com/books/opus5/html/page9.html)
* [Data Structures in Java for the Principled Programmer](http://dept.cs.williams.edu/~bailey/JavaStructures/Book_files/JavaStructures.pdf) (PDF)
* [Google's Java Style Guide](https://google.github.io/styleguide/javaguide.html)
* [Introduction to Computer science using Java](http://chortle.ccsu.edu/java5/index.html)
* [Introduction to Programming in Java](http://introcs.cs.princeton.edu/java/home/) - Robert Sedgewick and Kevin Wayne
* [Introduction to Programming Using Java](http://math.hws.edu/javanotes/) - David J. Eck
* [JAAS in Action](http://www.jaasbook.com)
* [Java: A Beginner's Guide](http://www.oracle.com/events/global/en/java-outreach/resources/java-a-beginners-guide-1720064.pdf) - Oracle (PDF)
* [Java Application Development on Linux by Carl Albing and Michael Schwarz (PDF)](http://ptgmedia.pearsoncmg.com/images/013143697X/downloads/013143697X_book.pdf) (PDF)
* [Java Programming for Kids, Parents and Grandparents](http://myflex.org/books/java4kids/java4kids.htm) - Yakov Fain
* [Learning Java (4th Edition)](http://chimera.labs.oreilly.com/books/1234000001805/index.html) - Patrick Niemeyer
* [NIO Framework](http://nioframework.sourceforge.net/NIO_Paper.pdf) (PDF)
* [OOP - Learn Object Oriented Thinking &amp; Programming](http://pub.bruckner.cz/titles/oop) - Rudolf Pecinovsky
* [Open Data Structures (in Java)](http://opendatastructures.org/ods-java.pdf) (PDF)
* [OSGi in Practice](http://njbartlett.name/osgibook.html) - N. Bartlett (PDF)
* [Processing XML with Java (A Guide to SAX, DOM, JDOM, JAXP, and TrAX)](http://www.cafeconleche.org/books/xmljava/) - Elliotte Rusty Harold
* [Sun's Java Tutorials](http://docs.oracle.com/javase/tutorial/)
* [The ABC of PDF with iText: PDF Syntax essentials](https://leanpub.com/itext_pdfabc)
* [The Java EE6 Tutorial](http://docs.oracle.com/javaee/6/tutorial/doc/javaeetutorial6.pdf) (PDF)
* [The Java EE7 Tutorial](https://docs.oracle.com/javaee/7/JEETT.pdf) (PDF)
* [The Java Language Specification](http://docs.oracle.com/javase/specs/) - James Gosling, Bill Joy, Guy Steele, Gilad Bracha
* [The Java Tutorial 4th Edition](http://download.oracle.com/javase/tutorial/) - Sharon Zakhour, Scott Hommel, Jacob Royal, Isaac Rabinovitch, Tom Risser, Mark Hoeber
* [Think Java: How to Think Like a Computer Scientist](http://greenteapress.com/thinkapjava/) - Allen B. Downey
* [Thinking in Java](http://www.mindview.net/Books/TIJ/)
* [Welcome to Java for Python Programmers](http://interactivepython.org/runestone/static/java4python/index.html) - Brad Miller
* [Welcome to the Java Workshop](http://javaworkshop.sourceforge.net) - An Apache Project
* [What's New in Java 8](https://leanpub.com/whatsnewinjava8/read) - Adam L. Davis

#### JasperReports

* [The JasperReports Ultimate Guide, Third Edition](http://jasperreports.sourceforge.net/JasperReports-Ultimate-Guide-3.pdf) (PDF)

#### Spring

* [Spring Framework Reference Documentation](http://docs.spring.io/spring/docs/current/spring-framework-reference/html/) - Rod Johnson, Juergen Hoeller, Keith Donald, Colin Sampaleanu, Rob Harrop, Thomas Risberg, Alef Arendsen, Darren Davison, Dmitriy Kopylenko, Mark Pollack, Thierry Templier, Erwin Vervaet, Portia Tung, Ben Hale, Adrian Colyer, John Lewis, Costin Leau, Mark Fisher, Sam Brannen, Ramnivas Laddad, Arjen Poutsma, Chris Beams, Tareq Abedrabbo, Andy Clement, Dave Syer, Oliver Gierke, Rossen Stoyanchev, Phillip Webb, Rob Winch, Brian Clozel, Stephane Nicoll, Sebastien Deleuze ([PDF](http://docs.spring.io/spring/docs/current/spring-framework-reference/pdf/spring-framework-reference.pdf))

#### Spring Boot

* [Spring Boot Reference Guide](http://docs.spring.io/spring-boot/docs/current/reference/html/) - Phillip Webb, Dave Syer, Josh Long, Stéphane Nicoll, Rob Winch, Andy Wilkinson, Marcel Overdijk, Christian Dupuis ([PDF](http://docs.spring.io/spring-boot/docs/current/reference/pdf/spring-boot-reference.pdf), [EPUB](http://docs.spring.io/spring-boot/docs/current/reference/epub/spring-boot-reference.epub))

#### Spring Security

* [Spring Security Reference](http://docs.spring.io/spring-security/site/docs/current/reference/htmlsingle/) - Ben Alex, Luke Taylor, Rob Winch

#### Wicket

* [Official Free Online Guide for Apache Wicket framework](http://wicket.apache.org/learn/#guide)

### JavaScript

* [Basic JavaScript for the impatient programmer](http://www.2ality.com/2013/06/basic-javascript.html) - Dr. Axel Rauschmayer
* [Book of Modern Frontend Tooling](https://github.com/tooling/book-of-modern-frontend-tooling)
* [Crockford's JavaScript](http://www.crockford.com/javascript/) - Douglas Crockford
* [Dev Docs](http://devdocs.io)
* [Developing Backbone.js Applications](http://addyosmani.github.io/backbone-fundamentals/) - Addy Osmani
* [Eloquent JavaScript 2nd edition](http://eloquentjavascript.net) - Marijn Haverbeke
* [Exploring ES6](http://exploringjs.com/es6/) - Dr. Axel Rauschmayer
* [Google JavaScript Style Guide](https://github.com/google/styleguide/blob/gh-pages/javascriptguide.xml)
* [Human Javascript](http://read.humanjavascript.com)
* [JavaScript Allongé](https://leanpub.com/javascript-allonge/read) - Reginald Braithwaite
* [JavaScript Bible](http://media.wiley.com/product_ancillary/28/07645334/DOWNLOAD/all.pdf) (PDF)
* [JavaScript Enlightenment](http://www.javascriptenlightenment.com) - Cody Lindley
* [JavaScript For Cats](http://jsforcats.com)
* [JavaScript Fundamentals, Plus a Dash Of JQuery - for dinner ladies](http://nicholasjohnson.com/javascript-book/)
* [JavaScript Garden](http://bonsaiden.github.io/JavaScript-Garden/) (Maintained by Tim Ruffles)
* [JavaScript Patterns Collection](http://shichuan.github.io/javascript-patterns/) - Shi Chuan
* [JavaScript Spessore](https://leanpub.com/javascript-spessore/read) - Reginald Braithwaite
* [Javascript Succinctly, Syncfusion](https://www.syncfusion.com/resources/techportal/ebooks/javascript) (PDF, Kindle) *(Just fill the fields with any values)*
* [JavaScript the Right Way](https://github.com/braziljs/js-the-right-way)
* [jQuery Fundamentals](http://jqfundamentals.com) (starts with JavaScript basics)
* [JS Robots](http://markdaggett.com/images/ExpertJavaScript-ch6.pdf) (PDF)
* [Leaflet Tips and Tricks: Interactive Maps Made Easy](https://leanpub.com/leaflet-tips-and-tricks) - Malcolm Maclean
* [Learn to Code JavaScript by Playing a Game](http://codecombat.com)
* [Learning JavaScript Design Patterns](http://addyosmani.com/resources/essentialjsdesignpatterns/book/) - Addy Osmani
* [Managing Space and Time with JavaScript - Book 1: The Basics](http://www.noelrappin.com) - Noel Rappin
* [Marionette Exposé: Learn to write modular Javascript applicatons using Backbone Marionette and RequireJS/AMD](https://leanpub.com/marionetteexpose) - Jack Killilea
* [Mozilla Developer Network's JavaScript Guide](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide)
* [O'Reilly Programming JavaScript Applications](http://chimera.labs.oreilly.com/books/1234000000262/)
* [Oh My JS](https://leanpub.com/ohmyjs/read) *(Leanpub, by Azat Mardanov)*
* [Patterns For Large-Scale JavaScript Application Architecture](http://addyosmani.com/largescalejavascript/) - Addy Osmani
* [Speaking JavaScript](http://speakingjs.com/es5/) - Dr. Axel Rauschmayer
* [The JavaScript Tutorial](http://javascript.info)
* [The Problem with Native JavaScript APIs](http://chimera.labs.oreilly.com/books/1234000001655) (PDF)
* [Understanding ECMAScript 6](https://leanpub.com/understandinges6/read) *(Leanpub, by Nicholas C. Zakas)*
* [Understanding JavaScript OOP](http://robotlolita.me/2011/10/09/understanding-javascript-oop.html) *(Sorella)*
* [You Don't Know JS](https://github.com/getify/You-Dont-Know-JS)

#### Javascript Frameworks

For resources on Angular, Backbone, D3, Dojo, Ember, Express, jQuery, Knockout, Meteor, React and any other JS toolkit/framework, please refer to [Javascript Frameworks Resources and Tutorials](/javascript-frameworks-resources.md).

#### Node.js

* [An Introduction to libuv](https://nikhilm.github.io/uvbook/) - Nikhil Marathe ([PDF](http://nikhilm.github.io/uvbook/An%20Introduction%20to%20libuv.pdf) - [ePub](http://nikhilm.github.io/uvbook/An%20Introduction%20to%20libuv.epub))
* [JavaScript and Node FUNdamentals](https://web.archive.org/web/20150327025334/https://leanpub.com/jsfun/read) - Azat Mardanov *(Leanpub)*
* [Mixu's Node Book](http://book.mixu.net/node/)
* [Node: Up and Running](http://chimera.labs.oreilly.com/books/1234000001808/index.html) - Tom Hughes-Croucher
* [Node.js Succinctly, Syncfusion](https://www.syncfusion.com/resources/techportal/ebooks/nodejs) (PDF, Kindle) *(Just fill the fields with any values)*
* [The Node Beginner Book](http://nodebeginner.org)

### Jenkins

* [Jenkins: The Definitive Guide](http://www.wakaleo.com/books/jenkins-the-definitive-guide) (PDF)

### Julia

* [Introducing Julia wikibook](https://en.wikibooks.org/wiki/Introducing_Julia)
* [Julia by Example](http://samuelcolvin.github.io/JuliaByExample) - Samuel Colvin (GitHub repo)
* [Learn Julia in Y minutes](https://learnxinyminutes.com/docs/julia) - Leah Hanson
* [Programming in Julia](http://quant-econ.net/jl/learning_julia.html) - Thomas J. Sargent and John Stachurski
* [The Julia Express](http://bogumilkaminski.pl/files/julia_express.pdf) - Bogomił Kamiński (PDF)

### LaTeX / TeX

#### LaTeX

* [Arbirtrary LaTex Reference](http://latex.knobs-dials.com)
* [LaTeX Wikibook](https://en.wikibooks.org/wiki/LaTeX)
* [The Not So Short Introduction to LaTeX](https://tobi.oetiker.ch/lshort/lshort.pdf) (PDF)

#### TeX

* [Notes On Programming in TeX](http://pgfplots.sourceforge.net/TeX-programming-notes.pdf) - Christian Feursänger (PDF)
* [TeX by Topic, A TeXnician's Reference](http://eijkhout.net/texbytopic/texbytopic.html) - Victor Eijkhout
* [TeX for the Impatient](https://www.gnu.org/software/teximpatient/) - Paul Abrahams, Kathryn Hargreaves, and Karl Berry

### Limbo

* [Inferno Programming With Limbo](http://doc.cat-v.org/inferno/books/inferno_programming_with_limbo/)

### Linux

* [Ad Hoc Data Analysis From The Unix Command Line](https://en.wikibooks.org/wiki/Ad_Hoc_Data_Analysis_From_The_Unix_Command_Line)
* [Automated Linux From Scratch](http://www.linuxfromscratch.org/alfs/download.html)
* [Getting Started with Ubuntu](http://ubuntu-manual.org)
* [GNU Autoconf, Automake and Libtool](http://www.sourceware.org/autobook/download.html)
* [GTK+/Gnome Application Development](http://www.linuxtopia.org/online_books/gui_toolkit_guides/gtk+_gnome_application_development/)
* [Hardened Linux From Scratch](http://www.linuxfromscratch.org/hlfs/download.html)
* [Learn Enough Command Line to Be Dangerous](https://www.learnenough.com/command-line-tutorial) - Michael Hartl
* [Learning Debian GNU/Linux](http://www.oreilly.com/openbook/debian/book/index.html)
* [Linux 101 Hacks](http://thegeekstuff.s3.amazonaws.com/files/linux-101-hacks.zip) - Ramesh Natarajan (PDF)
* [Linux Administrator's Security Guide](http://www.linuxtopia.org/online_books/linux_administrators_security_guide/index.html)
* [Linux Advanced Routing &amp; Traffic Control HOWTO](http://lartc.org)
* [Linux Compute Clusters](http://linuxclusters.com/compute_clusters.html)
* [Linux Device Drivers, 2nd Edition](http://www.xml.com/ldd/chapter/book/index.html)
* [Linux Device Drivers, Third Edition](http://lwn.net/Kernel/LDD3/) - Jonathan Corbet, Alessandro Rubini, and Greg Kroah-Hartman
* [Linux from Scratch](http://www.linuxfromscratch.org/lfs/view/stable/)
* [Linux Inside](https://www.gitbook.com/book/0xax/linux-insides/details)
* [Linux Kernel in a Nutshell](http://www.kroah.com/lkn/)
* [Linux Newbie Administrator Guide](http://lnag.sourceforge.net)
* [Linux Security for Beginners](http://www.linuxtopia.org/LinuxSecurity/index.html)
* [Linux Succinctly, Syncfusion](https://www.syncfusion.com/resources/techportal/ebooks/linux) (PDF, Kindle) *(Just fill the fields with any values)*
* [OpenVZ Linux virtualization](http://download.openvz.org/doc/OpenVZ-Users-Guide.pdf) (PDF)
* [Programming and Using Linux Sound - in depth](https://jan.newmarch.name/LinuxSound/index.html)
* [Red Hat Enterprise Linux 6 Essentials](http://www.techotopia.com/index.php/Red_Hat_Enterprise_Linux_6_Essentials)
* [Secure Programming HOWTO - Creating Secure Software](http://www.dwheeler.com/secure-programs/) - D. A. Wheeler (HTML, PDF)
* [The Debian Administrator's Handbook](https://debian-handbook.info)
* [The Linux Command Line](http://linuxcommand.org/tlcl.php) (PDF)
* [The Linux Development Platform](http://ptgmedia.pearsoncmg.com/imprint_downloads/informit/perens/0130091154.pdf) (PDF)
* [The Linux Kernel Module Programming Guide](http://tldp.org/LDP/lkmpg/2.6/html/)
* [The Linux System Administrator's Guide](http://www.tldp.org/LDP/sag/html/index.html)
* [The Python GTK+ 3 Tutorial](http://python-gtk-3-tutorial.readthedocs.org/en/latest/)
* [Ubuntu Pocket Guide and Reference](http://www.ubuntupocketguide.com/index_main.html)
* [Ubuntu Server Guide](https://help.ubuntu.com/16.04/serverguide/serverguide.pdf) (PDF)
* [Upstart Intro, Cookbook and Best Practises](http://upstart.ubuntu.com/cookbook/)
* [What Every Programmer Should Know About Memory](http://www.akkadia.org/drepper/cpumemory.pdf) (PDF)

### Lisp

* [Basic Lisp Techniques](http://franz.com/resources/educational_resources/cooper.book.pdf) - David J. Cooper, Jr. (PDF)
* [Casting Spels in Lisp](http://www.lisperati.com/casting.html)
* [Common Lisp: A Gentle Introduction to Symbolic Computation](http://www.cs.cmu.edu/~dst/LispBook/) - David S. Touretzky (PDF, PS)
* [Common Lisp: An Interactive Approach](http://www.cse.buffalo.edu/~shapiro/Commonlisp/) - Stuart C. Shapiro
* [Common Lisp Quick Reference](http://clqr.boundp.org)
* [Common Lisp the Language, 2nd Edition](http://www.cs.cmu.edu/Groups/AI/html/cltl/mirrors.html)
* [Google's Common Lisp Style Guide](http://google-styleguide.googlecode.com/svn/trunk/lispguide.xml)
* [Interpreting LISP](http://www.civilized.com/files/lispbook.pdf) - Gary D. Knott (PDF)
* [Learn Lisp The Hard Way](http://learnlispthehardway.org/book/) - Colin J.E. Lupton
* [Let Over Lambda - 50 Years of Lisp](http://letoverlambda.com/index.cl/) - D. Hoyte
* [Lisp Hackers: Interviews with 100x More Productive Programmers](https://leanpub.com/lisphackers) - Vsevolod Dyomkin
* [Lisp Koans](https://github.com/google/lisp-koans)
* [Lisp Web Tales](https://leanpub.com/lispwebtales)
* [Natural Language Processing in Lisp](http://www.sussex.ac.uk/informatics/)
* [On Lisp](http://www.paulgraham.com/onlisp.html) - P. Graham
* [Practical Common Lisp](http://www.gigamonkeys.com/book/) - P. Seibel
* [Sketchy LISP](hhttp://www.bcl.hamilton.ie/~nmh/t3x.org/zzz/sketchy-lisp.zip) - Nils Holm (ZIP)
* [Structure and Interpretation of Computer Programs](http://mitpress.mit.edu/sicp/)
* [Successful Lisp: How to Understand and Use Common Lisp](https://psg.com/~dlamkins/sl/) - David Lamkins
* [The Evolution of Lisp](http://www.dreamsongs.com/Files/HOPL2-Uncut.pdf) - Guy L. Steele Jr., Richard P. Gabriel (PDF)

### Livecode

* [LiveCode userguide](http://www.scribd.com/doc/216789127/LiveCode-userguide) (PDF)

### Lua

* [Lua 5.1 Reference Manual](http://www.lua.org/manual/5.1/)
* [Programming Gems](http://www.lua.org/gems/)
* [Wikibook](https://en.wikibooks.org/wiki/Lua_Programming)

### Markdown

* [Learn Markdown](https://www.gitbook.com/book/gitbookio/markdown/details) - Sammy P., Aaron O. (PDF) (EPUB) (MOBI)

### Mathematica

* [Basics of Algebra, Topology, and Differential Calculus](http://www.cis.upenn.edu/~jean/math-basics.pdf) (PDF)
* [Mathematica® programming: an advanced introduction by Leonid Shifrin](http://www.mathprogramming-intro.org)
* [Stephen Wolfram's The Mathematica Book](http://reference.wolfram.com/legacy/v5_2/)
* [Vector Math for 3d Computer Graphics](http://chortle.ccsu.edu/VectorLessons/index.html)
* [Wolfram Mathematica Tutorial Collection](http://www.wolfram.com/learningcenter/tutorialcollection/)

### MATLAB

* [An Interactive Introduction to MATLAB](http://www.science.smith.edu/~jcardell/Courses/EGR326/Intro-to-MATLAB.pdf) (PDF)
* [An Introduction to MATLAB](http://www.maths.dundee.ac.uk/software/MatlabNotes.pdf) (PDF)
* [Applications of MATLAB in Science and Engineering](http://www.intechopen.com/books/applications-of-matlab-in-science-and-engineering)
* [Experiments with MATLAB](http://www.mathworks.com/moler/exm/index.html?requestedDomain=www.mathworks.com&amp;nocookie=true)
* [Freshman Engineering Problem Solving with MATLAB](http://cnx.org/featureContent/mfiles)
* [Interactive Tutorials for MATLAB, Simulink, Signal Processing, Controls, and Computational Mathematics](http://www.mathworks.com/tutorials)
* [MATLAB - A Fundamental Tool for Scientific Computing and Engineering Applications - Volume 1](http://www.intechopen.com/books/matlab-a-fundamental-tool-for-scientific-computing-and-engineering-applications-volume-1)
* [MATLAB - A Ubiquitous Tool for the Practical Engineer](http://www.intechopen.com/books/matlab-a-ubiquitous-tool-for-the-practical-engineer)
* [MATLAB for Engineers: Applications in Control, Electrical Engineering, IT and Robotics](http://www.intechopen.com/books/matlab-for-engineers-applications-in-control-electrical-engineering-it-and-robotics)
* [MATLAB Programming](https://en.wikibooks.org/wiki/MATLAB_Programming)
* [MATLAB Succinctly, Syncfusion](https://www.syncfusion.com/resources/techportal/ebooks/matlab) (PDF, Kindle) *(Just fill the fields with any values)*
* [Numerical Computing with MATLAB](http://www.mathworks.com/moler/index_ncm.html?requestedDomain=www.mathworks.com&amp;nocookie=true)
* [Physical Modeling in MATLAB](http://greenteapress.com/matlab/index.html) - Alan B. Downey

### Maven

* [Developing with Eclipse and Maven](http://books.sonatype.com/m2eclipse-book/reference/)
* [Maven by Example](http://books.sonatype.com/mvnex-book/reference/public-book.html)
* [Maven: The Complete Reference](http://books.sonatype.com/mvnref-book/reference/public-book.html)
* [Repository Management with Nexus](http://books.sonatype.com/nexus-book/reference/)

### Mercurial

* [HGInit - Mercurial Tutorial by Joel Spolsky](http://hginit.com)
* [Mercurial: The Definitive Guide](http://hgbook.red-bean.com)

### Mercury

* [The Mercury Users' Guide](http://www.mercurylang.org/information/doc-release/user_guide.pdf) (PDF)

### MySQL

* [MySQL Essentials](http://www.techotopia.com/index.php/MySQL_Essentials)
* [MySQL Tutorial Excerpt](http://downloads.mysql.com/docs/mysql-tutorial-excerpt-5.1-en.pdf) (PDF)

### Neo4J

* [Graph Databases](http://info.neotechnology.com/rs/neotechnology/images/GraphDatabases.pdf) (PDF)
* [Graph Databases 2nd edition](http://neo4j.com/books/graph-databases/) *(account required)*

### .NET Framework

* [Entity Framework](http://weblogs.asp.net/zeeshanhirani/my-christmas-present-to-the-entity-framework-community)
* [Game Creation with XNA](https://en.wikibooks.org/wiki/Game_Creation_with_XNA)
* [.NET for Visual FoxPro Developers](http://foxcentral.net/microsoft/NETforVFPDevelopers.htm)
* [.NET Performance Testing and Optimization - The Complete Guide](http://download.red-gate.com/ebooks/DotNet/Perf_Test_and_opt_eBook.zip) *(RedGate, By Paul Glavich and Chris Farrell)*
* [Under the Hood of .NET Memory Management](http://download.red-gate.com/ebooks/DotNet/Under_the_Hood_of_.NET_Management.pdf) (PDF) *(RedGate, By Chris Farrell and Nick Harrison)*
* [Visual Studio .NET Tips and Tricks](http://www.infoq.com/minibooks/vsnettt) (VS 2003-2005 only)

### NoSQL

* [CouchDB: The Definitive Guide](http://guide.couchdb.org)
* [Extracting Data from NoSQL Databases: A Step towards Interactive Visual Analysis of NoSQL Data](http://publications.lib.chalmers.se/records/fulltext/155048.pdf) - Petter Nasholm (PDF)
* [Graph Databases](http://graphdatabases.com)
* [MongoDB Koans](https://github.com/chicagoruby/MongoDB_Koans)
* [MongoDB Succinctly, Syncfusion](https://www.syncfusion.com/resources/techportal/ebooks/mongodb) (PDF, Kindle) *(Just fill the fields with any values)*
* [NoSQL Databases](http://www.christof-strauch.de/nosqldbs.pdf) - Christof Strauch (PDF)
* [The Little MongoDB Book](http://openmymind.net/2011/3/28/The-Little-MongoDB-Book/)
* [The Little Redis Book](http://openmymind.net/2012/1/23/The-Little-Redis-Book/) - K. Seguin (PDF, Epub)
* [The Little Riak Book](http://littleriakbook.com)

### Oberon

* [Algorithms and Data-Structures](http://www.ethoberon.ethz.ch/WirthPubl/)
* [Object-Oriented Programming in Oberon-2](http://ssw.jku.at/Research/Books/Oberon2.pdf) (PDF)
* [Programming in Oberon](http://www.ethoberon.ethz.ch) (PDF)

### Objective-C

* [Google's Objective-C Style Guide](http://google-styleguide.googlecode.com/svn/trunk/objcguide.xml)
* [Object-Oriented Programming with Objective-C](https://developer.apple.com/library/ios/documentation/Cocoa/Conceptual/OOP_ObjC/Introduction/Introduction.html#//apple_ref/doc/uid/TP40005149)
* [Objective-C Succinctly, Syncfusion](https://www.syncfusion.com/resources/techportal/ebooks/objective-c) (PDF, Kindle) *(Just fill the fields with any values)*
* [Programming With Objective-C](https://developer.apple.com/library/mac/documentation/Cocoa/Conceptual/ProgrammingWithObjectiveC/Introduction/Introduction.html)
* [Try Objective-C Book](http://tryobjectivec.codeschool.com)

### OCaml

* [Developing Applications With Objective Caml](http://caml.inria.fr/pub/docs/oreilly-book/)
* [Real World OCaml](https://realworldocaml.org/v1/en/html/)
* [Think OCaml](http://greenteapress.com/thinkocaml/index.html) - Allen B. Downey and Nicholas Monje
* [Unix System Programming in OCaml](http://ocaml.github.io/ocamlunix/)
* [Using, Understanding, and Unraveling The OCaml Language: From Practice to Theory and vice versa](http://pauillac.inria.fr/~remy/cours/appsem/) - Didier Rémy

### Octave

* [Octave Programming](https://en.wikibooks.org/wiki/Octave_Programming_Tutorial)

### OpenGL ES

* [iPhone 3D Programming - Developing Graphical Applications with OpenGL ES](http://chimera.labs.oreilly.com/books/1234000001814/index.html) - Philip Rideout

### OpenMP

* [A Guide To OpenMP](http://www2.cs.uh.edu/~estrabd/openmp-combined.pdf) (PDF)
* [OpenMP Application Programming Interface Standard Version 4.0](http://www.openmp.org/mp-documents/OpenMP4.0.0.pdf) (PDF)

### OpenResty

* [Programming OpenResty](https://www.gitbook.com/book/openresty/programming-openresty/details)

### OpenSCAD

* [OpenSCAD User Manual](https://en.wikibooks.org/wiki/OpenSCAD_User_Manual)

### Oracle Server

* [Oracle's Guides and Manuals](http://tahiti.oracle.com)

### Parrot / Perl 6

* [Perl 6 Programming](https://en.wikibooks.org/wiki/Perl_6_Programming)
* [Using Perl 6](https://github.com/perl6/book/) (work in progress)

### PC-BSD

* [PC-BSD® Users Handbook](http://wiki.pcbsd.org/index.php/PC-BSD%C2%AE_Users_Handbook)

### Perl

* [Beginning Perl](https://www.perl.org/books/beginning-perl/)
* [Data Munging with Perl](http://perlhacks.com/dmp.pdf) (PDF)
* [Embedding Perl in HTML with Mason](http://www.masonbook.com/book/) - D. Rolsky, K. Williams
* [Essential Perl](http://cslibrary.stanford.edu/108/EssentialPerl.pdf) (PDF)
* [Exploring Programming Language Architecture in Perl](http://www.billhails.net/Book/)
* [Extreme Perl](http://www.extremeperl.org/bk/home) - R. Nagier (HTML, PDF)
* [Higher-Order Perl](http://hop.perl.plover.com/book/) - M. J. Dominus (PDF)
* [Impatient Perl](https://www.perl.org/books/impatient-perl/)
* [Learning Perl The Hard Way](http://www.greenteapress.com/perl/)
* [Mastering Perl](http://chimera.labs.oreilly.com/books/1234000001527) - brian d foy
* [Modern Perl 5](http://www.onyxneon.com/books/modern_perl/)
* [Perl &amp; LWP](http://lwp.interglacial.com/index.html)
* [Perl 5 Internals](http://www.faqs.org/docs/perl5int/)
* [Perl for the Web](http://www.globalspin.com/thebook/) - C. Radcliff
* [Perl Training Australia - Course Notes](http://perltraining.com.au/notes.html)
* [Plack Handbook](http://handbook.plackperl.org)
* [Practical mod_perl](http://modperlbook.org) - Stas Bekman, Eric Cholet
* [SDL::Manual Writing Games in Perl](https://github.com/PerlGameDev/SDL_Manual)
* [Template Toolkit Documentation](http://template-toolkit.org/docs/index.html)
* [The DBIx-Class Book](https://github.com/castaway/dbix-class-book)
* [The PDL Book](http://sourceforge.net/projects/pdl/files/PDL_2013/PDL-Book/PDL-Book-20130322.pdf/download) (PDF)
* [Web Client Programming with Perl](http://www.oreilly.com/openbook/webclient/)

### PHP

* CakePHP Framework
* [CakePHP Cookbook 2.x](http://book.cakephp.org/2.0/_downloads/en/CakePHPCookbook.pdf) (PDF)
* Drupal Framework
* Drupal 7
* [The Tiny Book of Rules](https://www.drupal.org/files/tiny-book-of-rules.pdf) (PDF)
* [Hacking with PHP](http://www.hackingwithphp.com)
* Laravel Framework
* Laravel 3
* [Laravel: Code Happy](http://daylerees.com/codehappy) - Dayle Rees
* Laravel 4
* [Laravel: Code Bright](http://daylerees.com/codebright) - Dayle Rees
* Laravel 5
* [Laravel 5.x Official Documentation. Synced Daily](https://leanpub.com/laravel-5)
* [Laravel Best Practices](http://www.laravelbestpractices.com)
* [Laravel: Code Smart](https://daylerees.com/codesmart/) - Dayle Rees
* [Laravel Collections Unraveled](https://leanpub.com/laravelcollectionsunraveled)
* [PHP 5 Power Programming](http://www.informit.com/content/images/013147149X/downloads/013147149X_book.pdf) (PDF)
* [PHP Best Practices](https://phpbestpractices.org)
* [PHP Internals Book](http://www.phpinternalsbook.com)
* [PHP Pandas](http://daylerees.com/php-pandas/) - Dayle Rees
* [PHP Programming](https://en.wikibooks.org/wiki/PHP_Programming)
* [PHP Security Guide](http://phpsec.org/projects/guide/)
* [PHP: The Right Way](http://www.phptherightway.com)
* [Practical PHP Programming](http://www.hackingwithphp.com)
* [Practical PHP Testing](http://www.giorgiosironi.com/2009/12/practical-php-testing-is-here.html)
* [Survive The Deep End: PHP Security](https://phpsecurity.readthedocs.org/en/latest/)
* Symfony Framework
* [The Symfony Book 2.x](http://symfony.com/doc/2.8/book/)
* [The Symfony Book 3.x](http://symfony.com/doc/master/book/)
* [Using Libsodium in PHP Projects](https://paragonie.com/book/pecl-libsodium)

### PicoLisp

* [PicoLisp by Example](https://github.com/tj64/picolisp-by-example)
* [PicoLisp Works](https://github.com/tj64/picolisp-works)

### PostgreSQL

* [Postgres Official Documentation](http://www.postgresql.org/docs/)
* [Postgres Succinctly](https://www.syncfusion.com/resources/techportal/ebooks/postgres) (PDF, Kindle) *(Just fill the fields with any values)*
* [Practical PostgreSQL](http://www.faqs.org/docs/ppbook/book1.htm)

### PowerShell

* [Creating HTML Reports in PowerShell](https://www.gitbook.com/book/devopscollective/creating-html-reports-in-powershell/details) (PDF,ePub,HTML)
* [DevOps: The Ops Perspective](https://www.gitbook.com/book/devopscollective/devops-the-ops-perspective/details) (PDF, ePub, MOBI)
* [Ditch Excel: Making Historical &amp; Trend Reports in PowerShell](https://www.gitbook.com/book/devopscollective/ditch-excel-making-historical-trend-reports-in-po/details)(PDF, ePub, MOBI)
* [Introduction to PowerShell for Unix People](https://www.gitbook.com/book/devopscollective/a-unix-person-s-guide-to-powershell/details) (PDF, ePub, HTML)
* [Layman’s Guide to PowerShell 2.0 remoting](http://www.ravichaganti.com//blog/wp-content/uploads/2010/12/A%20layman's%20guide%20to%20PowerShell%202.0%20remoting-v2.pdf) (PDF)
* [Mastering PowerShell](http://powershell.com/cs/login.aspx?ReturnUrl=%2fcs%2fblogs%2febook%2fdefault.aspx)
* [PowerShell 2.0 – One CMDLET At A Time](http://www.jonathanmedd.net/wp-content/uploads/2010/09/PowerShell_2_One_Cmdlet_at_a_Time.pdf) (PDF)
* [PowerShell Succinctly, Syncfusion](https://www.syncfusion.com/resources/techportal/ebooks/powershell) (PDF, Kindle) *(Just fill the fields with any values)*
* [Secrets of PowerShell Remoting](https://www.gitbook.com/book/devopscollective/secrets-of-powershell-remoting/details) (PDF, ePub, MOBI)
* [The Big Book of PowerShell Error Handling](https://www.gitbook.com/book/devopscollective/the-big-book-of-powershell-error-handling/details) (PDF, ePub, MOBI)
* [The Big Book of PowerShell Gotchas](https://www.gitbook.com/book/devopscollective/the-big-book-of-powershell-gotchas/details) (PDF, ePub, MOBI)
* [The DSC Book](https://www.penflip.com/powershellorg/the-dsc-book) (PDF, ePub, HTML)
* [The Monad Manifesto - Annotated](https://www.gitbook.com/book/devopscollective/the-monad-manifesto-annotated/details) (PDF, ePub, MOBI)
* [Why PowerShell?](https://www.gitbook.com/book/devopscollective/why-powershell-/details) (PDF, ePub, MOBI)
* [Windows PowerShell Networking Guide](https://www.gitbook.com/book/devopscollective/windows-powershell-networking-guide/details) (PDF, ePub, MOBI)

### Processing

* [The Nature of Code: Simulating Natural Systems with Processing](http://natureofcode.com/book/)

### Prolog

* [Adventure in Prolog](http://www.amzi.com/AdventureInProlog/)
* [Applications of Prolog](http://bookboon.com/en/applications-of-prolog-ebook)
* [Coding Guidelines for Prolog](http://arxiv.org/abs/0911.2899) - Michael A. Covington, Roberto Bagnara, Richard A. O'Keefe, Jan Wielemaker, Simon Price
* [Concise Intro to Prolog](http://www.cis.upenn.edu/~matuszek/Concise%20Guides/Concise%20Prolog.html)
* [Expert Systems in Prolog](http://www.amzi.com/ExpertSystemsInProlog/)
* [GNU Prolog Manual](http://www.gprolog.org/manual/gprolog.pdf) (PDF)
* [Introduction to Prolog for Mathematicians](http://www.j-paine.org/prolog/mathnotes/files/pms/pms.html) - J. Ireson-Ireson-Paine
* [Learn Prolog Now!](http://www.learnprolognow.org)
* [Logic, Programming and Prolog (2ed)](http://www.ida.liu.se/~ulfni53/lpp/)
* [Natural Language Processing Techniques in Prolog](http://cs.union.edu/~striegnk/courses/nlp-with-prolog/html/) - P. Blackburn, K. Striegnitz
* [Prolog and Natural - Language Analysis](http://www.mtome.com/Publications/PNLA/pnla-digital.html) - Fernando C. N. Pereira, Stuart M. Shieber
* [Prolog for Programmers](https://sites.google.com/site/prologforprogrammers/)
* [Prolog Problems](https://sites.google.com/site/prologsite/prolog-problems) - Werner Hett
* [Prolog Techniques](http://bookboon.com/en/prolog-techniques-applications-of-prolog-ebook)
* [Prolog Tutorial](http://www.cpp.edu/~jrfisher/www/prolog_tutorial/contents.html)
* [Simply Logical](http://www.cs.bris.ac.uk/~flach/SimplyLogical.html) - P. Flach (HTML, PDF)
* [The First 10 Prolog Programming Contests](https://dtai.cs.kuleuven.be/ppcbook/) - Bart Demoen, Phuong-Lan Nguyen, Tom Schrijvers, Remko Tronçon
* [Warren's Abstract Machine: A Tutorial Reconstruction](http://wambook.sourceforge.net) - Hassan A¨it-Kaci

#### Constraint Logic Programming (extended Prolog)

* [A Gentle Guide to Constraint Logic Programming via ECLiPSe](http://anclp.pl)

### PureScript

* [PureScript By Example](https://leanpub.com/purescript/read) - Phil Freeman

### Python

* [A Beginner's Python Tutorial](https://en.wikibooks.org/wiki/A_Beginner%27s_Python_Tutorial)
* [A Guide to Python's Magic Methods](https://github.com/RafeKettler/magicmethods) - Rafe Kettler
* [Automate the Boring Stuff](http://automatetheboringstuff.com/chapter0/) - Al Sweigart
* [Biopython](http://biopython.org/DIST/docs/tutorial/Tutorial.pdf) (PDF)
* [Building Skills in Object-Oriented Design (Python)](http://www.itmaybeahack.com/book/oodesign-python-2.1/latex/BuildingSkillsinOODesign.pdf) (PDF) (2.1.1)
* [Building Skills in Python](http://www.itmaybeahack.com/book/python-2.6/latex/BuildingSkillsinPython.pdf) (PDF) (2.6)
* [Byte of Python](http://python.swaroopch.com) (3.5.1)
* [Code Like a Pythonista: Idiomatic Python](http://python.net/~goodger/projects/pycon/2007/idiomatic/handout.html)
* [CodeCademy Python](https://www.codecademy.com/learn/python)
* [Composing Programs](http://composingprograms.com) (3.x)
* [Data Structures and Algorithms in Python](http://www.brpreiss.com/books/opus7/html/book.html) - B. R. Preiss
* [Dive into Python](http://www.diveintopython.net) - Mark Pilgrim (2.3)
* [Dive into Python 3](http://getpython3.com/diveintopython3/) - Mark Pilgrim (3.0)
* [Full Stack Python](http://www.fullstackpython.com)
* [Google's Python Class](https://developers.google.com/edu/python/) (2.4 - 2.x)
* [Google's Python Style Guide](https://github.com/google/styleguide)
* [Hacking Secret Cyphers with Python](http://inventwithpython.com/hacking/chapters/) - Al Sweigart (3.3)
* [High Performance Python](http://ianozsvald.com/HighPerformancePythonfromTrainingatEuroPython2011_v0.2.pdf) (PDF)
* [Hitchhiker's Guide to Python!](http://docs.python-guide.org/en/latest/) (2.6)
* [How to Think Like a Computer Scientist: Learning with Python](http://www.greenteapress.com/thinkpython/thinkCSpy/) - Allen B. Downey, Jeff Elkner and Chris Meyers (2.4)
* [How to Think Like a Computer Scientist: Learning with Python, Interactive Edition](http://interactivepython.org/courselib/static/thinkcspy/index.html) (3.2)
* [Intermediate Python](http://book.pythontips.com/en/latest/index.html#) - Muhammad Yasoob Ullah Khalid (1st edition)
* [Introduction to Programming Using Python](http://python-ebook.blogspot.co.uk) - Cody Jackson (1st edition) (2.3)
* [Introduction to Programming with Python](http://opentechschool.github.io/python-beginners/en/) (3.3)
* [Introduction to python](http://kracekumar.com/post/71171551647/introduction-to-python) - Kracekumar (2.7.3)
* [Invent Your Own Computer Games With Python](http://inventwithpython.com/chapters/) - Al Sweigart (3.1)
* [Learn Python, Break Python](http://learnpythonbreakpython.com)
* [Learn Python in Y minutes](https://learnxinyminutes.com/docs/python/)
* [Learn Python The Hard Way](http://learnpythonthehardway.org/book/) (2.5 - 2.6)
* [Learn to Program Using Python](https://www.ida.liu.se/~732A47/literature/PythonBook.pdf) - Cody Jackson (PDF)
* [Learning to Program](http://www.freenetpages.co.uk/hp/alan.gauld/) (2.3)
* [Learning to Program with Python](http://python.cs.southern.edu/pythonbook/pythonbook.pdf) - Richard L. Halterman (PDF) (3.2)
* [Lectures on scientific computing with python](https://github.com/jrjohansson/scientific-python-lectures) - J.R. Johansson (2.7)
* [Making Games with Python &amp; Pygame](http://inventwithpython.com/pygame/chapters/) - Al Sweigart (2.7)
* [Modeling Creativity: Case Studies in Python](http://www.clips.ua.ac.be/sites/default/files/modeling-creativity.pdf) - Tom D. De Smedt (PDF)
* [Natural Language Processing with Python](http://www.nltk.org/book/) (2.5)
* [Non-Programmer's Tutorial for Python 2.6](https://en.wikibooks.org/wiki/Non-Programmer%27s_Tutorial_for_Python_2.6) (2.6)
* [Non-Programmer's Tutorial for Python 3](https://en.wikibooks.org/wiki/Non-Programmer%27s_Tutorial_for_Python_3) (3.3)
* [Porting to Python 3: An In-Depth Guide](http://python3porting.com) (2.6 - 2.x &amp; 3.1 - 3.x)
* [Practical Programming in Python](https://launchpadlibrarian.net/165489933/PracticalProgrammingPython2014.pdf) - Jeffrey Elkner (PDF)
* [Problem Solving with Algorithms and Data Structure using Python](http://interactivepython.org/runestone/static/pythonds/index.html) - Bradley N. Miller and David L. Ranum
* [Program Arcade Games With Python And Pygame](http://programarcadegames.com) (3.3)
* [Programming Computer Vision with Python](http://programmingcomputervision.com/downloads/ProgrammingComputerVision_CCdraft.pdf) (PDF)
* [Python 2 Official Documentation](https://docs.python.org/2/download.html) (PDF, HTML, TEXT) (2.x)
* [Python 2.7 quick reference](http://infohost.nmt.edu/tcc/help/pubs/python/web/) - New Mexico Tech (2.7)
* [Python 3 Official Documentation](https://docs.python.org/3/download.html) (PDF, EPUB, HTML, TEXT) (3.x)
* [Python Cookbook](http://chimera.labs.oreilly.com/books/1230000000393/index.html) - David Beazley
* [Python for Econometrics](http://www.kevinsheppard.com/images/0/09/Python_introduction.pdf) - Kevin Sheppard (PDF) (2.7.5)
* [Python for Informatics: Exploring Information](http://www.pythonlearn.com/book.php) (2.7.5)
* [Python for you and me](http://pymbook.readthedocs.org/en/latest/) (2.7.3)
* [Python for you and me](http://pymbook.readthedocs.org/en/py3/) (3.x)
* [Python Guide](http://docs.python-guide.org/en/latest/)
* [Python Idioms](http://safehammad.com/downloads/python-idioms-2014-01-16.pdf) (PDF)
* [Python in Hydrology](http://www.greenteapress.com/pythonhydro/pythonhydro.html) - Sat Kumar Tomer
* [Python Koans](https://github.com/gregmalcolm/python_koans) (2.7 or 3.x)
* [Python Module of the Week](https://pymotw.com/2/)
* [Python Practice Book](http://anandology.com/python-practice-book/index.html) (2.7.1)
* [Python Practice Projects](http://pythonpracticeprojects.com)
* [Python Programming](https://upload.wikimedia.org/wikipedia/commons/9/91/Python_Programming.pdf) (PDF) (2.6)
* [Python Scientific Lecture Notes](http://scipy-lectures.github.io)
* [Python Scripting for Computational Science](http://info.baustatik.uni-due.de/Lehre/CM-AOS/Scripts/Abaqus/Python%20Scripting%20for%20Computational%20Science.pdf) - Hans Petter Langtangen (PDF)
* [Python Standard Library](http://effbot.org/librarybook/) - Fredrik Lundh
* [Snake Wrangling For Kids](http://www.briggs.net.nz/snake-wrangling-for-kids.html) (3.x)
* [Test-Driven Web Development with Python](http://chimera.labs.oreilly.com/books/1234000000754/index.html) (3.3 - 3.x)
* [Text Processing in Python](http://gnosis.cx/TPiP/) - David Mertz (2.3 - 2.x)
* [The Definitive Guide to Jython, Python for the Java Platform](http://www.jython.org/jythonbook/en/1.0) - Josh Juneau, Jim Baker, Victor Ng, Leo Soto, Frank Wierzbicki (2.5)
* [The Little Book of Python Anti-Patterns](http://docs.quantifiedcode.com/python-anti-patterns/) ([Source](https://github.com/quantifiedcode/python-anti-patterns))
* [The Programming Historian](http://niche-canada.org/research/niche-digital-infrastructure-project/the-programming-historian/) - William J. Turkel, Adam Crymble and Alan MacEachern
* [The Python Ecosystem: An Introduction](http://mirnazim.org/writings/python-ecosystem-introduction/)
* [Think Python](http://www.greenteapress.com/thinkpython/) - Allen B. Downey (2.x &amp; 3.0)
* [Web2py: Complete Reference Manual, 6th Edition (pre-release)](http://web2py.com/book) (2.5 - 2.x)
* [Welcome to Problem Solving with Algorithms and Data Structures](http://interactivepython.org/runestone/static/pythonds/index.html) - Brad Miller and David Ranum
* [Wikibooks: Python Programming](https://en.wikibooks.org/wiki/Python_Programming) (2.7)

#### Django

* [Django Official Documentation](https://media.readthedocs.org/pdf/django/1.5.x/django.pdf) (PDF) (1.5)
* [Django Official Documentation](https://media.readthedocs.org/pdf/django/1.7.x/django.pdf) (PDF) (1.7)
* [Django Official Documentation](https://media.readthedocs.org/pdf/django/1.9.x/django.pdf) (PDF) (1.9)
* [Djen of Django](http://agiliq.com/books/djenofdjango/)
* [Effective Django](http://www.effectivedjango.com) (1.5)
* [Mastering Django](http://masteringdjango.com) (1.8)
* [Tango With Django](http://www.tangowithdjango.com/book17/) (1.7)
* [Test-Driven Web Development with Python](http://chimera.labs.oreilly.com/books/1234000000754/index.html) (1.8)

#### Flask

* [Explore Flask](https://exploreflask.com) - Robert Picard
* [Flask Microframework](http://flask.pocoo.org/docs/0.10/tutorial/)
* [The Flask Mega-Tutorial](http://blog.miguelgrinberg.com/post/the-flask-mega-tutorial-part-i-hello-world) - Miguel Grinberg (0.9)

#### Kivy

* [Kivy Programming Guide](http://kivy.org/docs/pdf/Kivy-latest.pdf) (PDF)

#### Pandas

* [Learn Pandas](https://bitbucket.org/hrojas/learn-pandas) - Hernan Rojas (0.13.0)

#### Pyramid

* [Pyramid for humans](http://docs.pylonsproject.org/projects/pyramid-tutorials/en/latest/humans/index.html)

### QML

* [Qt5 Cadaques](http://qmlbook.github.io) - Juergen Bocklage-Ryannel and Johan Thelin (HTML, PDF, ePub) (work in progress)

### R

* [Advanced R Programming](http://adv-r.had.co.nz) - Hadley Wickham
* [Introduction to Probability and Statistics Using R](http://cran.r-project.org/web/packages/IPSUR/vignettes/IPSUR.pdf) - G. Jay Kerns (PDF)
* [Learning Statistics with R](http://health.adelaide.edu.au/psychology/ccs/teaching/lsr/) - Daniel Navarro
* [learnR](https://github.com/yuanlisky/learnR) - (Work in Progress) - Kun Ren
* [Practical Regression and Anova using R](http://cran.r-project.org/doc/contrib/Faraway-PRA.pdf) - Julian J. Faraway (PDF)
* [R for spatial analysis](http://www.columbia.edu/~cjd11/charles_dimaggio/DIRE/resources/spatialEpiBook.pdf) (PDF)
* [R language for Programmers](http://www.johndcook.com/blog/r_language_for_programmers/) - John D. Cook
* [R packages](http://r-pkgs.had.co.nz) - Hadley Wickham
* [R practicals](http://www.columbia.edu/~cjd11/charles_dimaggio/DIRE/resources/R/practicalsBookNoAns.pdf) (PDF)
* [R Programming](https://en.wikibooks.org/wiki/R_Programming)
* [R Programming for Data Science](https://leanpub.com/rprogramming) (Needs valid email)
* [R Succinctly, Syncfusion](https://www.syncfusion.com/resources/techportal/ebooks/rsuccinctly) (PDF, Kindle) *(Just fill the fields with any values)*
* [The R Inferno](http://www.burns-stat.com/pages/Tutor/R_inferno.pdf) - Patrick Burns (PDF)
* [The R Language](http://stat.ethz.ch/R-manual/R-patched/doc/html/)
* [The R Manuals](http://cran.r-project.org/manuals.html)

### Racket

* [How to Design Programs 2e](http://www.ccs.neu.edu/home/matthias/HtDP2e/)
* [Programming Languages: Application and Interpretation](http://cs.brown.edu/courses/cs173/2012/book/index.html)
* [Realm of Racket](http://it-ebooks.info/book/2628/)
* [The Racket Guide](http://docs.racket-lang.org/guide/index.html)

### Raspberry Pi

* [Raspberry Pi: Measure, Record, Explore](https://leanpub.com/RPiMRE)
* [Raspberry Pi Users Guide](http://www.cs.unca.edu/~bruce/Fall14/360/RPiUsersGuide.pdf) - Eben Upton (PDF)

### REBOL

* [Learn REBOL](http://www.lulu.com/shop/nick-antonaccio/learn-rebol/ebook/product-17383182.html) - Nick Antonaccio

### Ruby

* [A community-driven Ruby style guide](https://github.com/bbatsov/ruby-style-guide)
* [CodeCademy Ruby](https://www.codecademy.com/learn/ruby)
* [Developing Games With Ruby](https://leanpub.com/developing-games-with-ruby/read)
* [I Love Ruby](http://goo.gl/1qrMUN)
* [Introduction to Programming with Ruby](https://launchschool.com/books/ruby) - Launch School
* [Just Enough Ruby to Get By](http://jasonkim.ca/projects/just_enough_ruby_to_get_by/)
* [Learn Ruby the hard way](http://learnrubythehardway.org/book/)
* [Learn to Program, by Chris Pine](http://pine.fm/LearnToProgram/)
* [Mr. Neighborly's Humble Little Ruby Book](http://www.humblelittlerubybook.com)
* [Object Oriented Programming with Ruby](https://launchschool.com/books/oo_ruby) - Launch School
* [Practicing Ruby](https://github.com/elm-city-craftworks/practicing-ruby-manuscripts)
* [Programming Ruby](http://ruby-doc.com/docs/ProgrammingRuby/)
* [Ruby Essentials](http://www.techotopia.com/index.php/Ruby_Essentials)
* [Ruby Hacking Guide](http://ruby-hacking-guide.github.io)
* [Ruby in Twenty Minutes](https://www.ruby-lang.org/en/documentation/quickstart/)
* [Ruby Koans](http://www.rubykoans.com)
* [Ruby Learning](http://rubylearning.com)
* [Ruby Programming](http://www.linuxtopia.org/online_books/programming_books/ruby_tutorial/)
* [Ruby User's Guide](http://www.rubyist.net/~slagell/ruby/)
* [The Bastards Book of Ruby](http://ruby.bastardsbook.com)
* [The Unofficial Ruby Usage Guide (at Google)](http://www.caliban.org/ruby/rubyguide.shtml) - Ian Macdonald
* [Why's (Poignant) Guide to Ruby](http://poignant.guide)

#### RSpec

* [Better Specs (RSpec Guidelines with Ruby)](http://betterspecs.org)

#### Ruby on Rails

* [A community-driven Rails style guide](https://github.com/bbatsov/rails-style-guide)
* [Building REST APIs with Rails](http://apionrails.icalialabs.com/book)
* [Kestrels, Quirky Birds, and Hopeless Egocentricity](https://leanpub.com/combinators/read)
* [Learn Ruby on Rails as You Modify a Craigslist Clone](http://www.thinkful.com/learn/ruby-on-rails-tutorial/)
* [Objects on Rails](http://objectsonrails.com)
* [Rails Girls Guides](http://guides.railsgirls.com)
* [Ruby on Rails 3.2 - Step by Step](http://www.xyzpub.com/en/ruby-on-rails/3.2/)
* [Ruby on Rails 4.0 Guide](http://www.xyzpub.com/en/ruby-on-rails/4.0/)
* [Ruby on Rails Guides](http://guides.rubyonrails.org)
* [Ruby on Rails Tutorial: Learn Rails By Example](https://www.railstutorial.org/book/)
* [Upgrading to Rails 4](https://github.com/alindeman/upgradingtorails4)

#### Sinatra

* [Sinatra Book](https://github.com/sinatra/sinatra-book)

### Rust

* [Rust by Example](http://rustbyexample.com)
* [Rust for Rubyists](http://www.rustforrubyists.com/book/index.html)
* [The Rust Programming Language](http://doc.rust-lang.org/book/)
* [The Rustonomicon](https://doc.rust-lang.org/nomicon/)
* [Why Rust?](http://www.oreilly.com/programming/free/files/why-rust.pdf) (PDF)

### Sage

* [Sage for Power Users](http://wstein.org/books/sagebook/sagebook.pdf) - William Stein (PDF)
* [The Sage Manuals](http://www.sagemath.org/doc/)

### Scala

* [A Scala Tutorial for Java programmers](http://www.scala-lang.org/docu/files/ScalaTutorial.pdf) (PDF)
* [Another tour of Scala](http://naildrivin5.com/scalatour/)
* [EAI Patterns with Actor Model](https://github.com/alexanderfefelov/eai-patterns-with-actor-model) - Vaughn Vernon
* [Effective Scala](https://twitter.github.io/effectivescala/)
* [Learning Scala in small bites](http://matt.might.net/articles/learning-scala-in-small-bites/)
* [Learning Scalaz](http://eed3si9n.com/learning-scalaz/)
* [Pro Scala: Monadic Design Patterns for the Web](https://github.com/leithaus/XTrace/tree/monadic/src/main/book/content/)
* [Program Transformation in Scala](http://homepages.cwi.nl/~ai/MScThesis-A-Izmaylova.pdf) - Anastasia Izmaylova (PDF)
* [Programming in Scala, First Edition](http://www.artima.com/pins1ed/) - by M. Odersky, L. Spoon, B. Venners
* [S-99: Ninety-Nine Scala Problems](http://aperiodic.net/phil/scala/s-99/) - Phil! Gold
* [Scala &amp; Design Patterns: Exploring Language Expressivity](http://www.scala-lang.org/old/sites/default/files/FrederikThesis.pdf) - Fredrik Skeel Løkke (PDF)
* [Scala By Example](http://www.scala-lang.org/docu/files/ScalaByExample.pdf) - M. Odersky (PDF)
* [Scala Cookbook: Bonus Chapters](http://examples.oreilly.com/9781449339616-files/Scala_Cookbook_bonus_chapters.pdf) - Alvin Alexander (PDF)
* [Scala for Perl 5 Programmers](https://github.com/garu/scala-for-perl5-programmers) - Breno G. de Oliveira
* [Scala for the Impatient (A1 Scala Level chapters)](http://www.typesafe.com/resources/e-books) - Cay S. Horstmann
* [Scala School by Twitter](http://twitter.github.io/scala_school/)
* [Scala Tutorial](http://www.tutorialspoint.com/scala/scala_tutorial.pdf) (PDF)
* [tetrix in Scala](http://eed3si9n.com/tetrix-in-scala-html5-book)
* [The Neophyte's Guide to Scala](http://danielwestheide.com/scala/neophytes.html) - Daniel Westheide
* [Xtrace](https://github.com/leithaus/XTrace/tree/monadic/src/main/book/content/)

#### Lift

* [Exploring Lift](http://exploring.liftweb.net) (published earlier as "The Definitive Guide to Lift", [PDF](http://groups.google.com/group/the-lift-book))
* [Lift](https://github.com/tjweir/liftbook)
* [Lift Cookbook](http://chimera.labs.oreilly.com/books/1234000000030/index.html) - Richard Dallaway
* [Simply Lift](http://simply.liftweb.net/Simply_Lift.pdf) - David Pollak (PDF)

#### Play Scala

* [Play Framework Recipes](http://alvinalexander.com/scala/scala-cookbook-play-framework-recipes-pdf-ebook) - Alvin Alexander

### Scheme

* [A Pamphlet Against R. Computational Intelligence in Guile Scheme](https://panicz.github.io/pamphlet/)
* [An Introduction to Scheme and its Implementation](http://www.cs.rpi.edu/academics/courses/fall00/ai/scheme/reference/schintro-v14/schintro_toc.html)
* [Concrete Abstractions: An Introduction to Computer Science Using Scheme](https://gustavus.edu/+max/concrete-abstractions.html) - M. Hailperin, B. Kaiser, K. Knight
* [How to Design Programs](http://htdp.org)
* [Scheme Tutorial](http://www.cs.hut.fi/Studies/T-93.210/schemetutorial/)
* [Simply Scheme: Introducing Computer Science](http://www.cs.berkeley.edu/~bh/ss-toc2.html) - B. Harvey, M. Wright
* [Structure and Interpretation of Computer Programs](https://mitpress.mit.edu/sicp/full-text/book/book.html)
* [Teach Yourself Scheme in Fixnum Days](http://www.ccs.neu.edu/home/dorai/t-y-scheme/t-y-scheme.html)
* [The Scheme Programming Language: Edition 3](http://www.scheme.com/tspl3/) - [The Scheme Programming Language: Edition 4](http://www.scheme.com/tspl4/)
* [Write Yourself a Scheme in 48 Hours](https://en.wikibooks.org/wiki/Write_Yourself_a_Scheme_in_48_Hours)

### Scilab

* [Introduction to Scilab](http://forge.scilab.org/index.php/p/docintrotoscilab/downloads/)
* [Programming in Scilab](http://forge.scilab.org/index.php/p/docprogscilab/downloads/)
* [Writing Scilab Extensions](http://forge.scilab.org/index.php/p/docsciextensions/downloads/)

### Scratch

* [Computer Science Concepts in Scratch](http://stwww.weizmann.ac.il/g-cs/scratch/scratch_en.html)

### Sed

* [Sed - An Introduction and Tutorial](http://www.grymoire.com/Unix/Sed.html)

### Self

* [The Self Handbook](http://handbook.selflanguage.org/current/)

### Smalltalk

* [Computer Programming using GNU Smalltalk](http://www.canol.info/books/computer_programming_using_gnu_smalltalk/) (PDF)
* [Deep into Pharo](http://files.pharo.org/books/deep-into-pharo/)
* [Dynamic Web Development with Seaside](http://book.seaside.st/book/table-of-contents) - S. Ducasse, L. Renggli, C. D. Shaffer, R. Zaccone
* [Numerical Methods with Pharo](http://files.pharo.org/books/numerical-methods/)
* [Pharo by Example](http://pharobyexample.org) (Smalltalk DE)
* [Pharo Enterprise: a Web Perspective](http://files.pharo.org/books/enterprise-pharo/)
* [Squeak By Example](http://www.squeakbyexample.org) (Smalltalk IDE)
* [Stef's Free Online Smalltalk Books](http://stephane.ducasse.free.fr/FreeBooks.html) (meta-list)

### Spark

* [Databricks Spark Knowledge Base](https://www.gitbook.com/book/databricks/databricks-spark-knowledge-base/details)
* [Databricks Spark Reference Applications](https://www.gitbook.com/book/databricks/databricks-spark-reference-applications/details)
* [Mastering Apache Spark](https://www.gitbook.com/book/jaceklaskowski/mastering-apache-spark/details)

### SQL (implementation agnostic)

* [A Primer on SQL, Second Edition](https://leanpub.com/aprimeronsql)
* [Developing Time-Oriented Database Applications in SQL](http://www.cs.arizona.edu/people/rts/publications.html)
* [Learn SQL The Hard Way](http://sql.learncodethehardway.org)
* [SQL For Web Nerds](http://philip.greenspun.com/sql/)
* [Use The Index, Luke!: A Guide To SQL Database Performance](http://use-the-index-luke.com)

### SQL Server

* [Best of SQLServerCentral.com Vol 7](http://www.red-gate.com/community/books/ssc-7) *(RedGate, By SQLServerCentral Authors)
* [Brad's Sure Guide to SQL Server Maintenance Plans](http://www.red-gate.com/community/books/sql-server-maintenance-plans) *(RedGate, By Brad McGehee)*
* [Defensive Database Programming](http://download.red-gate.com/ebooks/SQL/defensive-database-programming.pdf) (PDF) *(RedGate, By Alex Kuznetsov)*
* [How to Become an Exceptional DBA](http://www.red-gate.com/community/books/exceptional-dba-book) *(RedGate, By Brad McGehee)*
* [Inside the SQL Server Query Optimizer](http://www.red-gate.com/products/sql-development/sql-prompt/entrypage/sql-query-optimizer-ebook3) *(RedGate, By Benjamin Nevarez)*
* [Introducing Microsoft SQL Server 2008 R2](http://social.technet.microsoft.com/wiki/contents/articles/11608.e-book-gallery-for-microsoft-technologies-en.aspx#IntroducingMicrosoftSQLServer2008R2)
* [Introducing Microsoft SQL Server 2012](http://social.technet.microsoft.com/wiki/contents/articles/11608.e-book-gallery-for-microsoft-technologies-en.aspx#IntroducingMicrosoftSQLServer2012)
* [Introducing Microsoft SQL Server 2014](http://blogs.msdn.com/b/microsoft_press/archive/2014/04/02/free-ebook-introducing-microsoft-sql-server-2014.aspx)
* [Mastering SQL Server Profiler](http://www.red-gate.com/community/books/mastering-sql-server-profiler) *(RedGate, By Brad McGehee)*
* [Performance Tuning with SQL Server Dynamic Management Views](http://www.red-gate.com/community/books/dynamic-management-views) *(RedGate, By Tim Ford and Louis Davidson)*
* [Protecting SQL Server Data](http://www.red-gate.com/community/books/protecting-data) *(RedGate, By John Magnabosco)*
* [SQL Server 2012 Tutorials: Reporting Services](http://social.technet.microsoft.com/wiki/contents/articles/11608.e-book-gallery-for-microsoft-technologies-en.aspx#SQLServer2012Tutorials%3AReportingServices)
* [SQL Server Backup and Restore](http://www.red-gate.com/community/books/sql-server-backup-and-restore) *(RedGate, By Shawn McGehee)*
* [SQL Server Concurrency: Locking, Blocking and Row Versioning](http://www.red-gate.com/community/books/sql-server-concurrency) *(RedGate, By Kalen Delaney)*
* [SQL Server Execution Plans](http://download.red-gate.com/ebooks/SQL/sql-server-execution-plans.pdf) (PDF) *(RedGate, By Grant Fritchey)*
* [SQL Server Execution Plans, Second Edition](http://download.red-gate.com/ebooks/SQL/eBOOK_SQLServerExecutionPlans_2Ed_G_Fritchey.pdf) (PDF) *(RedGate, By Grant Fritchey)*
* [SQL Server Hardware](http://www.red-gate.com/community/books/sql-server-hardware) *(RedGate, By Glenn Berry)*
* [SQL Server Statistics](http://www.red-gate.com/community/books/sql-server-statistics) *(RedGate, By Holger Schmeling)*
* [SQL Server Stumpers Vol.5](http://www.red-gate.com/community/books/sql-server-stumpers-v5) *(RedGate, By SQLServerCentral Authors)*
* [SQL Server Tacklebox](http://www.red-gate.com/community/books/sql-server-tacklebox) *(RedGate, By Rodney Landrum)*
* [SQL Server Transaction Log Management](http://www.red-gate.com/community/books/sql-server-transaction-log-management) *(RedGate, By Tony Davis and Gail Shaw)*
* [The Art of SQL Server FILESTREAM](http://www.red-gate.com/community/books/art-of-filestream) *(RedGate, By Jacob Sebastian and Sven Aelterman)*
* [Troubleshooting SQL Server: A Guide for the Accidental DBA](http://www.red-gate.com/community/books/accidental-dba) *(RedGate, By Jonathan Kehayias and Ted Krueger)*

### Standard ML

* [Programming in Standard ML '97](http://homepages.inf.ed.ac.uk/stg/NOTES/) - Stephen Gilmore, University of Edinburgh
* [Programming in Standard ML, Draft](http://www.cs.cmu.edu/~rwh/smlbook/) - Robert Harper

### Subversion

* [Subversion Version Control](http://ptgmedia.pearsoncmg.com/images/0131855182/downloads/Nagel_book.pdf) (PDF)
* [Version Control with Subversion](http://svnbook.red-bean.com)

### Swift

* [Hacking with Swift](https://www.hackingwithswift.com)
* [Learn Swift](http://books.aidanf.net/learn-swift)
* [The Swift Programming Language](https://developer.apple.com/library/prerelease/ios/documentation/Swift/Conceptual/Swift_Programming_Language/index.html) (HTML)
* [The Swift Programming Language](https://itunes.apple.com/us/book/swift-programming-language/id881256329?mt=11) (iBook)
* [Using Swift with Cocoa and Objective-C](https://itunes.apple.com/us/book/using-swift-cocoa-objective/id888894773?mt=11) (iBook)

### Tcl

* [Tcl Programming](https://en.wikibooks.org/wiki/Programming%3ATcl) - Richard.Suchenwirth, et. al.
* [TclWise](http://www.invece.org/tclwise/index.html) - Salvatore Sanfilippo

### Teradata

* [Teradata Books](http://www.info.teradata.com)

### Tizen

* [Tizen for Dummies](https://developer.tizen.org/sites/default/files/blogs/tizenfordummiesmainchangelist.pdf) - Jon Lansdell, Cheng Luo, Michelle Somersville (PDF)

### TLA

* [Specifying Systems: The TLA+ Language and Tools for Hardware and Software Engineers](http://research.microsoft.com/en-us/um/people/lamport/tla/book.html) - Leslie Lamport (Postscript or PDF)

### TypeScript

* [TypeScript Deep Dive](https://basarat.gitbooks.io/typescript/)
* [TypeScript for C# Programmers](http://www.infoq.com/minibooks/typescript-c-sharp-programmers)
* [TypeScript Succinctly, Syncfusion](https://www.syncfusion.com/resources/techportal/ebooks/typescript) (PDF, Kindle) *(Just fill the fields with any values)*

### Unix

* [An Introduction to Unix](http://www.oliverelliott.org/article/computing/tut_unix/)
* [Commentary on the Sixth Edition UNIX Operating System](http://www.lemis.com/grog/Documentation/Lions/) - J. Lions
* [UNIX Commands and Concepts](http://www.cs.bu.edu/teaching/unix/reference/) - Robert I. Pitts
* [Unix for Poets](http://web.stanford.edu/class/cs124/kwc-unix-for-poets.pdf) - Kenneth Ward Church (PDF)
* [Unix Toolbox](http://cb.vu/unixtoolbox.xhtml) - Colin Barschel
* [UNIX Tutorial for Beginners](http://www.ee.surrey.ac.uk/Teaching/Unix/)

### Verilog

* [Verilog Tutorial](http://www.asic-world.com/verilog/veritut.html)

### VHDL

* [Free Range VHDL](https://github.com/fabriziotappero/Free-Range-VHDL-book) - Bryan Mealy, Fabrizio Tappero (TeX and PDF)
* [VHDL Tutorial](http://www.seas.upenn.edu/~ese171/vhdl/vhdl_primer.html)
* [VHDL Tutorial](http://hep.uchicago.edu/~tangjian/SVT_sub/FTK_ATLAS/AUX/vhdl-tutorial.pdf) - Peter J. Ashenden (PDF)
* [VHDL Tutorial: Learn By Example](http://esd.cs.ucr.edu/labs/tutorial/)

### Vim

* [A Byte of Vim](http://www.swaroopch.com/notes/vim/)
* [Learn Vim Progressively](http://yannesposito.com/Scratch/en/blog/Learn-Vim-Progressively/)
* [Learn Vimscript the Hard Way](http://learnvimscriptthehardway.stevelosh.com)
* [Use Vim Like A Pro](https://leanpub.com/VimLikeAPro) *(Leanpub, by Tim Ottinger)*
* [Vi Improved -- Vim](http://www.truth.sk/vim/vimbook-OPL.pdf) - Steve Oualline (PDF)
* [Vim Recipes](http://ebooksgo.org) (PDF)
* [Vim Regular Expressions 101](http://vimregex.com)

### Visual Basic

* [Visual Basic Essentials](http://www.techotopia.com/index.php/Visual_Basic_Essentials)

### Visual Prolog

* [A Beginners' Guide to Visual Prolog](http://wiki.visual-prolog.com/index.php?title=A_Beginners_Guide_to_Visual_Prolog)
* [Visual Prolog for Tyros](http://wiki.visual-prolog.com/index.php?title=Visual_Prolog_for_Tyros)

### Web Services

* [RESTful Web Services](http://restfulwebapis.org/RESTful_Web_Services.pdf) (PDF)

### Windows 8

* [Programming Windows 8 Apps with HTML, CSS, and JavaScript (v1)](http://blogs.msdn.com/b/microsoft_press/archive/2012/10/29/free-ebook-programming-windows-8-apps-with-html-css-and-javascript.aspx)
* [Programming Windows 8 Apps with HTML, CSS, and JavaScript (v2, incomplete)](http://blogs.msdn.com/b/microsoft_press/archive/2013/10/29/free-ebook-programming-windows-store-apps-with-html-css-and-javascript-second-edition-second-preview.aspx)

### Windows Phone

* [Developing An Advanced Windows Phone 7.5 App That Connects To The Cloud](http://coolthingoftheday.blogspot.co.uk/2012/05/free-ebook-guidance-advanced-windows.html)
* [Windows Phone 8 Development Succinctly](https://www.syncfusion.com/resources/techportal/ebooks/windowsphone8) - Matteo Pagani (PDF)
* [Windows Phone 8.1 Development for Absolute Beginners](http://channel9.msdn.com/Series/Windows-Phone-8-1-Development-for-Absolute-Beginners)
* [Windows Phone Programming Blue Book](http://www.robmiles.com/c-yellow-book/)

### Workflow

* [Declare Peace on Virtual Machines. A guide to simplifying vm-based development on a Mac](https://leanpub.com/declarepeaceonvms)

### xBase (dBase / Clipper / Harbour)

* [Application Development with Harbour](https://en.wikibooks.org/wiki/Application_Development_with_Harbour)
* [CA-Clipper 5.2 Norton Guide](http://www.ousob.com/ng/clguide/)
* [Clipper Tutorial: a Guide to Open Source Clipper(s)](https://en.wikibooks.org/wiki/Clipper_Tutorial%3A_a_Guide_to_Open_Source_Clipper(s))";s:11:"post_parent";s:1:"0";s:4:"guid";s:25:"http://reactvn.net/?p=621";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}i:9;O:8:"stdClass":23:{s:2:"ID";s:3:"625";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2016-08-17 10:11:39";s:13:"post_date_gmt";s:19:"2016-08-17 03:11:39";s:12:"post_content";s:9919:"<p class="qtext_para">I would like to offer some <b>books</b> which would help you dive into user experience field. They are really simple to read and understand. I read them all so it really helped me at the beginning.</p>

<ol>
    <li>Design of everyday things (<span class="qlink_container"><a class="external_link" href="http://books.google.cz/books/about/The_Design_of_Everyday_Things.html?id=w8pM72p_dpoC&amp;redir_esc=y" target="_blank" rel="noopener nofollow">http://books.google.cz/b<wbr />ooks/abo...</a></span>) - great book from Don Norman about usability and design. This book should be the first, which you will read.</li>
    <li>Don't make me think (<span class="qlink_container"><a class="external_link" href="http://www.amazon.com/Think-Common-Sense-Approach-Usability/dp/0789723107" target="_blank" rel="noopener nofollow">http://www.amazon.com/Th<wbr />ink-Comm...</a></span>) - Great book about usability and design. Read this book as the second.</li>
    <li>UX Project (<span class="qlink_container"><a class="external_link" href="http://projectuxd.com/" target="_blank" rel="noopener nofollow">http://projectuxd.com/</a></span>) - it would help you to understand basic about UX field - deliverables, constraints and useful methods</li>
    <li>Selling usability (<span class="qlink_container"><a class="external_link" href="http://www.amazon.com/Selling-Usability-Experience-Infiltration-Tactics/dp/1442103736" target="_blank" rel="noopener nofollow">http://www.amazon.com/Se<wbr />lling-Us...</a></span>) - this book will help you managing and comunication user experience with project managers, clients, etc.</li>
    <li>What makes them click (<span class="qlink_container"><a class="external_link" href="http://www.whatmakesthemclick.net/" target="_blank" rel="noopener nofollow">http://www.whatmakesthem<wbr />click.net/</a></span>) - interesting book about people thinking and human behavior on the web, It will help you with how to motivate people to perform click or be focused on what you say.</li>
    <li>Neuro web design (<span class="qlink_container"><a class="external_link" href="http://www.amazon.com/Neuro-Web-Design-Makes-Click/dp/0321603605" target="_blank" rel="noopener nofollow">http://www.amazon.com/Ne<wbr />uro-Web-...</a></span>) - another book about human motivation to perform clicks</li>
    <li>Web Form Design (<span class="qlink_container"><a class="external_link" href="http://rosenfeldmedia.com/books/webforms/" target="_blank" rel="noopener nofollow">http://rosenfeldmedia.co<wbr />m/books/...</a></span>) - Do you want to design websites? This is the indispensable book which help you with the most problematic piece of the web - online forms!</li>
</ol>

<p class="qtext_para">I offer this list to everyone new in user experience field. Seriously, there is a lot of great books what helps you understand opportunities and contraints of user experience field.</p>

<p class="qtext_para">There are great <b>online courses</b> too so if you want to dive into UX faster, try:</p>

<ol>
    <li>online HCI course on Standford university - <span class="qlink_container"><a class="external_link" href="https://www.coursera.org/course/hci" target="_blank" rel="noopener nofollow">https://www.coursera.org/<wbr />course/hci</a></span>!</li>
    <li>YouTube Channel of Standford HCI - <span class="qlink_container"><a class="external_link" href="http://www.youtube.com/playlist?list=PLF4A01617834A0FB6" target="_blank" rel="noopener">Lecture Collection | Human-Computer Interaction Seminar (2009-2010)</a></span></li>
    <li>Interaction Design Foundation - it offers many online articles, books and great courses, see <span class="qlink_container"><a class="external_link" href="http://interaction-design.org/" target="_blank" rel="noopener nofollow">Interaction Design Foundation: a global UX learning community</a></span>.</li>
</ol>

<p class="qtext_para">But it could not be about books only. There are great <b>online magazines</b> what will help you too:</p>

<ol>
    <li><span class="qlink_container"><a class="external_link" href="http://www.alistapart.com/" target="_blank" rel="noopener nofollow">http://www.alistapart.com<wbr />/</a></span> - great online magazine about user experience and web design</li>
    <li><span class="qlink_container"><a class="external_link" href="http://uxmag.com/" target="_blank" rel="noopener nofollow">http://uxmag.com/</a></span></li>
    <li><span class="qlink_container"><a class="external_link" href="http://www.uxbooth.com/" target="_blank" rel="noopener nofollow">http://www.uxbooth.com/</a></span></li>
</ol>

<p class="qtext_para">When you would like to get advanced resource, leave me a message and i will recommend another resources.</p>

<div class="info_wrapper">
<div class="info" style="text-align: right;"><span class="feed_item_answer_user"><span id="RgrFhu"><strong><a id="__w2_rEpey65_link" class="user" href="https://www.quora.com/profile/Michal-Ma%C5%88%C3%A1k" target="_blank">Michal Maňák</a></strong><span id="__w2_Bboew4V_bio" class="IdentitySig ActorNameSig IdentityNameSig"><strong>, </strong><span id="__w2_Bboew4V_link"><span id="__w2_Bboew4V_sig" class="IdentitySig ActorNameSig IdentityNameSig"><span id="__w2_FpcHx1U_text_snip" class="expanded_q_text"><span id="__w2_FpcHx1U_text_snip_content"><span class="rendered_qtext"><strong>Experienced with client-side and server-side languages</strong>.</span></span></span></span></span></span></span></span></div>
<div class="info" style="text-align: right;"></div>
<div class="info" style="text-align: left;">So I sort of fell into UX Design when I discovered a few years ago that what I was most passionate about was defining products and creating good, intuitive experiences that not only delighted users, but met product/business goals. My answer probably goes a bit more in depth than just learning the basics of UX design.

Here's a rough path to how I "picked up" UX design:</div>
<ol>
    <li class="info" style="text-align: left;">Read a few UX books such as Designing for the Digital Age, Don't Make Me Think, and The Inmates are Running the Asylum  (this is a good way to learn just the very basics of UX. Don't Make Me Think is pretty much the "bible" of user experience design).</li>
    <li class="info" style="text-align: left;">My daily/weekly readings would consist of UX blogs such as Boxes and Arrows (also a good way of picking up the basic understandings of user experience design).</li>
    <li class="info" style="text-align: left;">I took a class on User Experience just to get the fundamentals/basics down - this class actually didn't teach me a lot since much of it was stuff I was doing already.</li>
    <li class="info" style="text-align: left;">Probably the most powerful method of practicing/picking up UX design skills is just by doing UX design. For fun, I would look at the websites of products/services I used then redesign them in Illustrator or Photoshop. My goal was to improve the experience while also lightly guiding the user towards actions that met whatever the goal was.</li>
    <li class="info" style="text-align: left;">Do user tests and user studies to see how people interact with products, and also to understand that what may be obvious to you or a product team isn't necessarily obvious to the end user. This is a good way to get a sense of how people interact with products - and also a good way to constantly remind yourself that you are not the target demographic. Real users think differently than those creating the products. Before design and, more specifically, user experience, was getting as much attention as it is now, I was doing user studies and user testing. At the time, I didn't know that what I was doing was user experience research until I attended an event where Karlyn Neel (Quora is being really slow right now and won't let me tag anything or anyone, sorry), lead designer of eBay's mobile app, spoke. When she spoke about design and creating for the user, I had an epiphany of sorts, in that, what I wanted to do was define products and delight users. So every step I'd taken after that was to become a design product manager - which brings me to</li>
    <li class="info" style="text-align: left;">If you want to pursue UX, then just start doing it even if you're in a position that's not technically in product or design. Example: I was working in the marketing department for a mid-stage startup where I owned the website. I treated the marketing site (the product was an API) like a product. I wasn't super passionate about Marketing beyond how I could get more visitors on our site to convert into leads, so I left and joined a gaming company as a design product manager. Now I'm a design product manager, or, product designer as we are more commonly known as.</li>
</ol>
Basically, what was once a hobby is now something I get paid for - except, it doesn't feel like just a job because I genuinely love doing what I'm doing. So if you're genuinely passionate about user experience and design, just start doing it and you'll learn the basics, and then some, as you go along.
<div class="info" style="text-align: left;">
<div class="info_wrapper">
<div class="info" style="text-align: right;"><strong><span class="feed_item_answer_user"><span id="OuSpmk"><a id="__w2_AxZWk4e_link" class="user" href="https://www.quora.com/profile/Samihah-Azim" target="_blank">Samihah Azim</a><span id="__w2_Dw1m8RC_bio" class="IdentitySig ActorNameSig IdentityNameSig">, <span id="__w2_Dw1m8RC_link"><span id="__w2_Dw1m8RC_sig" class="IdentitySig ActorNameSig IdentityNameSig"><span id="__w2_zFyfcqK_text_snip" class="expanded_q_text"><span id="__w2_zFyfcqK_text_snip_content"><span class="rendered_qtext">Design Product Manager at BizeeBee - previously lead designer and design prod...</span></span></span></span></span></span></span></span></strong></div>
</div>
</div>
</div>";s:10:"post_title";s:50:"What are good resources to learn the basics of UX?";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:49:"what-are-good-resources-to-learn-the-basics-of-ux";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2016-08-17 10:11:39";s:17:"post_modified_gmt";s:19:"2016-08-17 03:11:39";s:21:"post_content_filtered";s:9925:"<p class="qtext_para">I would like to offer some <b>books</b> which would help you dive into user experience field. They are really simple to read and understand. I read them all so it really helped me at the beginning.</p>

<ol>
 	<li>Design of everyday things (<span class="qlink_container"><a class="external_link" href="http://books.google.cz/books/about/The_Design_of_Everyday_Things.html?id=w8pM72p_dpoC&amp;redir_esc=y" target="_blank" rel="noopener nofollow">http://books.google.cz/b<wbr />ooks/abo...</a></span>) - great book from Don Norman about usability and design. This book should be the first, which you will read.</li>
 	<li>Don't make me think (<span class="qlink_container"><a class="external_link" href="http://www.amazon.com/Think-Common-Sense-Approach-Usability/dp/0789723107" target="_blank" rel="noopener nofollow">http://www.amazon.com/Th<wbr />ink-Comm...</a></span>) - Great book about usability and design. Read this book as the second.</li>
 	<li>UX Project (<span class="qlink_container"><a class="external_link" href="http://projectuxd.com/" target="_blank" rel="noopener nofollow">http://projectuxd.com/</a></span>) - it would help you to understand basic about UX field - deliverables, constraints and useful methods</li>
 	<li>Selling usability (<span class="qlink_container"><a class="external_link" href="http://www.amazon.com/Selling-Usability-Experience-Infiltration-Tactics/dp/1442103736" target="_blank" rel="noopener nofollow">http://www.amazon.com/Se<wbr />lling-Us...</a></span>) - this book will help you managing and comunication user experience with project managers, clients, etc.</li>
 	<li>What makes them click (<span class="qlink_container"><a class="external_link" href="http://www.whatmakesthemclick.net/" target="_blank" rel="noopener nofollow">http://www.whatmakesthem<wbr />click.net/</a></span>) - interesting book about people thinking and human behavior on the web, It will help you with how to motivate people to perform click or be focused on what you say.</li>
 	<li>Neuro web design (<span class="qlink_container"><a class="external_link" href="http://www.amazon.com/Neuro-Web-Design-Makes-Click/dp/0321603605" target="_blank" rel="noopener nofollow">http://www.amazon.com/Ne<wbr />uro-Web-...</a></span>) - another book about human motivation to perform clicks</li>
 	<li>Web Form Design (<span class="qlink_container"><a class="external_link" href="http://rosenfeldmedia.com/books/webforms/" target="_blank" rel="noopener nofollow">http://rosenfeldmedia.co<wbr />m/books/...</a></span>) - Do you want to design websites? This is the indispensable book which help you with the most problematic piece of the web - online forms!</li>
</ol>
<p class="qtext_para">I offer this list to everyone new in user experience field. Seriously, there is a lot of great books what helps you understand opportunities and contraints of user experience field.</p>
<p class="qtext_para">There are great <b>online courses</b> too so if you want to dive into UX faster, try:</p>

<ol>
 	<li>online HCI course on Standford university - <span class="qlink_container"><a class="external_link" href="https://www.coursera.org/course/hci" target="_blank" rel="noopener nofollow">https://www.coursera.org/<wbr />course/hci</a></span>!</li>
 	<li>YouTube Channel of Standford HCI - <span class="qlink_container"><a class="external_link" href="http://www.youtube.com/playlist?list=PLF4A01617834A0FB6" target="_blank" rel="noopener">Lecture Collection | Human-Computer Interaction Seminar (2009-2010)</a></span></li>
 	<li>Interaction Design Foundation - it offers many online articles, books and great courses, see <span class="qlink_container"><a class="external_link" href="http://interaction-design.org/" target="_blank" rel="noopener nofollow">Interaction Design Foundation: a global UX learning community</a></span>.</li>
</ol>
<p class="qtext_para">But it could not be about books only. There are great <b>online magazines</b> what will help you too:</p>

<ol>
 	<li><span class="qlink_container"><a class="external_link" href="http://www.alistapart.com/" target="_blank" rel="noopener nofollow">http://www.alistapart.com<wbr />/</a></span> - great online magazine about user experience and web design</li>
 	<li><span class="qlink_container"><a class="external_link" href="http://uxmag.com/" target="_blank" rel="noopener nofollow">http://uxmag.com/</a></span></li>
 	<li><span class="qlink_container"><a class="external_link" href="http://www.uxbooth.com/" target="_blank" rel="noopener nofollow">http://www.uxbooth.com/</a></span></li>
</ol>
<p class="qtext_para">When you would like to get advanced resource, leave me a message and i will recommend another resources.</p>

<div class="info_wrapper">
<div class="info" style="text-align: right;"><span class="feed_item_answer_user"><span id="RgrFhu"><strong><a id="__w2_rEpey65_link" class="user" href="https://www.quora.com/profile/Michal-Ma%C5%88%C3%A1k" target="_blank">Michal Maňák</a></strong><span id="__w2_Bboew4V_bio" class="IdentitySig ActorNameSig IdentityNameSig"><strong>, </strong><span id="__w2_Bboew4V_link"><span id="__w2_Bboew4V_sig" class="IdentitySig ActorNameSig IdentityNameSig"><span id="__w2_FpcHx1U_text_snip" class="expanded_q_text"><span id="__w2_FpcHx1U_text_snip_content"><span class="rendered_qtext"><strong>Experienced with client-side and server-side languages</strong>.</span></span></span></span></span></span></span></span></div>
<div class="info" style="text-align: right;"></div>
<div class="info" style="text-align: left;">So I sort of fell into UX Design when I discovered a few years ago that what I was most passionate about was defining products and creating good, intuitive experiences that not only delighted users, but met product/business goals. My answer probably goes a bit more in depth than just learning the basics of UX design.

Here's a rough path to how I "picked up" UX design:</div>
<ol>
 	<li class="info" style="text-align: left;">Read a few UX books such as Designing for the Digital Age, Don't Make Me Think, and The Inmates are Running the Asylum  (this is a good way to learn just the very basics of UX. Don't Make Me Think is pretty much the "bible" of user experience design).</li>
 	<li class="info" style="text-align: left;">My daily/weekly readings would consist of UX blogs such as Boxes and Arrows (also a good way of picking up the basic understandings of user experience design).</li>
 	<li class="info" style="text-align: left;">I took a class on User Experience just to get the fundamentals/basics down - this class actually didn't teach me a lot since much of it was stuff I was doing already.</li>
 	<li class="info" style="text-align: left;">Probably the most powerful method of practicing/picking up UX design skills is just by doing UX design. For fun, I would look at the websites of products/services I used then redesign them in Illustrator or Photoshop. My goal was to improve the experience while also lightly guiding the user towards actions that met whatever the goal was.</li>
 	<li class="info" style="text-align: left;">Do user tests and user studies to see how people interact with products, and also to understand that what may be obvious to you or a product team isn't necessarily obvious to the end user. This is a good way to get a sense of how people interact with products - and also a good way to constantly remind yourself that you are not the target demographic. Real users think differently than those creating the products. Before design and, more specifically, user experience, was getting as much attention as it is now, I was doing user studies and user testing. At the time, I didn't know that what I was doing was user experience research until I attended an event where Karlyn Neel (Quora is being really slow right now and won't let me tag anything or anyone, sorry), lead designer of eBay's mobile app, spoke. When she spoke about design and creating for the user, I had an epiphany of sorts, in that, what I wanted to do was define products and delight users. So every step I'd taken after that was to become a design product manager - which brings me to</li>
 	<li class="info" style="text-align: left;">If you want to pursue UX, then just start doing it even if you're in a position that's not technically in product or design. Example: I was working in the marketing department for a mid-stage startup where I owned the website. I treated the marketing site (the product was an API) like a product. I wasn't super passionate about Marketing beyond how I could get more visitors on our site to convert into leads, so I left and joined a gaming company as a design product manager. Now I'm a design product manager, or, product designer as we are more commonly known as.</li>
</ol>
Basically, what was once a hobby is now something I get paid for - except, it doesn't feel like just a job because I genuinely love doing what I'm doing. So if you're genuinely passionate about user experience and design, just start doing it and you'll learn the basics, and then some, as you go along.
<div class="info" style="text-align: left;">
<div class="info_wrapper">
<div class="info" style="text-align: right;"><strong><span class="feed_item_answer_user"><span id="OuSpmk"><a id="__w2_AxZWk4e_link" class="user" href="https://www.quora.com/profile/Samihah-Azim" target="_blank">Samihah Azim</a><span id="__w2_Dw1m8RC_bio" class="IdentitySig ActorNameSig IdentityNameSig">, <span id="__w2_Dw1m8RC_link"><span id="__w2_Dw1m8RC_sig" class="IdentitySig ActorNameSig IdentityNameSig"><span id="__w2_zFyfcqK_text_snip" class="expanded_q_text"><span id="__w2_zFyfcqK_text_snip_content"><span class="rendered_qtext">Design Product Manager at BizeeBee - previously lead designer and design prod...</span></span></span></span></span></span></span></span></strong></div>
</div>
</div>
</div>";s:11:"post_parent";s:1:"0";s:4:"guid";s:25:"http://reactvn.net/?p=625";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}}s:8:"col_info";a:23:{i:0;O:8:"stdClass":13:{s:4:"name";s:2:"ID";s:7:"orgname";s:2:"ID";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:3;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:49699;s:4:"type";i:8;s:8:"decimals";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:11:"post_author";s:7:"orgname";s:11:"post_author";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:49193;s:4:"type";i:8;s:8:"decimals";i:0;}i:2;O:8:"stdClass":13:{s:4:"name";s:9:"post_date";s:7:"orgname";s:9:"post_date";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:16513;s:4:"type";i:12;s:8:"decimals";i:0;}i:3;O:8:"stdClass":13:{s:4:"name";s:13:"post_date_gmt";s:7:"orgname";s:13:"post_date_gmt";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:129;s:4:"type";i:12;s:8:"decimals";i:0;}i:4;O:8:"stdClass":13:{s:4:"name";s:12:"post_content";s:7:"orgname";s:12:"post_content";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:163645;s:6:"length";i:4294967295;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:5;O:8:"stdClass":13:{s:4:"name";s:10:"post_title";s:7:"orgname";s:10:"post_title";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:50;s:6:"length";i:262140;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:6;O:8:"stdClass":13:{s:4:"name";s:12:"post_excerpt";s:7:"orgname";s:12:"post_excerpt";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:262140;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:7;O:8:"stdClass":13:{s:4:"name";s:11:"post_status";s:7:"orgname";s:11:"post_status";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:7;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:16385;s:4:"type";i:253;s:8:"decimals";i:0;}i:8;O:8:"stdClass":13:{s:4:"name";s:14:"comment_status";s:7:"orgname";s:14:"comment_status";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:4;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:9;O:8:"stdClass":13:{s:4:"name";s:11:"ping_status";s:7:"orgname";s:11:"ping_status";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:4;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:10;O:8:"stdClass":13:{s:4:"name";s:13:"post_password";s:7:"orgname";s:13:"post_password";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:11;O:8:"stdClass":13:{s:4:"name";s:9:"post_name";s:7:"orgname";s:9:"post_name";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:49;s:6:"length";i:800;s:9:"charsetnr";i:45;s:5:"flags";i:16393;s:4:"type";i:253;s:8:"decimals";i:0;}i:12;O:8:"stdClass":13:{s:4:"name";s:7:"to_ping";s:7:"orgname";s:7:"to_ping";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:262140;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:13;O:8:"stdClass":13:{s:4:"name";s:6:"pinged";s:7:"orgname";s:6:"pinged";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:84;s:6:"length";i:262140;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:14;O:8:"stdClass":13:{s:4:"name";s:13:"post_modified";s:7:"orgname";s:13:"post_modified";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:129;s:4:"type";i:12;s:8:"decimals";i:0;}i:15;O:8:"stdClass":13:{s:4:"name";s:17:"post_modified_gmt";s:7:"orgname";s:17:"post_modified_gmt";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:129;s:4:"type";i:12;s:8:"decimals";i:0;}i:16;O:8:"stdClass":13:{s:4:"name";s:21:"post_content_filtered";s:7:"orgname";s:21:"post_content_filtered";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:136115;s:6:"length";i:4294967295;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:17;O:8:"stdClass":13:{s:4:"name";s:11:"post_parent";s:7:"orgname";s:11:"post_parent";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:49193;s:4:"type";i:8;s:8:"decimals";i:0;}i:18;O:8:"stdClass":13:{s:4:"name";s:4:"guid";s:7:"orgname";s:4:"guid";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:25;s:6:"length";i:1020;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:19;O:8:"stdClass":13:{s:4:"name";s:10:"menu_order";s:7:"orgname";s:10:"menu_order";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:11;s:9:"charsetnr";i:63;s:5:"flags";i:32769;s:4:"type";i:3;s:8:"decimals";i:0;}i:20;O:8:"stdClass":13:{s:4:"name";s:9:"post_type";s:7:"orgname";s:9:"post_type";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:4;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:16393;s:4:"type";i:253;s:8:"decimals";i:0;}i:21;O:8:"stdClass":13:{s:4:"name";s:14:"post_mime_type";s:7:"orgname";s:14:"post_mime_type";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:400;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:22;O:8:"stdClass":13:{s:4:"name";s:13:"comment_count";s:7:"orgname";s:13:"comment_count";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:32769;s:4:"type";i:8;s:8:"decimals";i:0;}}s:8:"num_rows";i:10;s:10:"return_val";i:10;}