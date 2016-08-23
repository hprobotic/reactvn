]�W<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:50:"SELECT * FROM reactvn_posts WHERE ID = 589 LIMIT 1";s:11:"last_result";a:1:{i:0;O:8:"stdClass":23:{s:2:"ID";s:3:"589";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2016-08-12 11:34:31";s:13:"post_date_gmt";s:19:"2016-08-12 04:34:31";s:12:"post_content";s:9844:"Whether it's technically RESTful or not (according to the six constraints mentioned previously), here are a few recommended REST-like concepts. These six quick tips will result in better, more usable services.

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
<p style="text-align: right;"><strong>restapitutorial.com</strong></p>";s:11:"post_parent";s:1:"0";s:4:"guid";s:25:"http://reactvn.net/?p=589";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}}s:8:"col_info";a:23:{i:0;O:8:"stdClass":13:{s:4:"name";s:2:"ID";s:7:"orgname";s:2:"ID";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:3;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:49699;s:4:"type";i:8;s:8:"decimals";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:11:"post_author";s:7:"orgname";s:11:"post_author";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:49193;s:4:"type";i:8;s:8:"decimals";i:0;}i:2;O:8:"stdClass":13:{s:4:"name";s:9:"post_date";s:7:"orgname";s:9:"post_date";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:16513;s:4:"type";i:12;s:8:"decimals";i:0;}i:3;O:8:"stdClass":13:{s:4:"name";s:13:"post_date_gmt";s:7:"orgname";s:13:"post_date_gmt";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:129;s:4:"type";i:12;s:8:"decimals";i:0;}i:4;O:8:"stdClass":13:{s:4:"name";s:12:"post_content";s:7:"orgname";s:12:"post_content";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:9844;s:6:"length";i:4294967295;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:5;O:8:"stdClass":13:{s:4:"name";s:10:"post_title";s:7:"orgname";s:10:"post_title";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:20;s:6:"length";i:262140;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:6;O:8:"stdClass":13:{s:4:"name";s:12:"post_excerpt";s:7:"orgname";s:12:"post_excerpt";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:262140;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:7;O:8:"stdClass":13:{s:4:"name";s:11:"post_status";s:7:"orgname";s:11:"post_status";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:7;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:16385;s:4:"type";i:253;s:8:"decimals";i:0;}i:8;O:8:"stdClass":13:{s:4:"name";s:14:"comment_status";s:7:"orgname";s:14:"comment_status";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:4;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:9;O:8:"stdClass":13:{s:4:"name";s:11:"ping_status";s:7:"orgname";s:11:"ping_status";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:4;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:10;O:8:"stdClass":13:{s:4:"name";s:13:"post_password";s:7:"orgname";s:13:"post_password";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:11;O:8:"stdClass":13:{s:4:"name";s:9:"post_name";s:7:"orgname";s:9:"post_name";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:800;s:9:"charsetnr";i:45;s:5:"flags";i:16393;s:4:"type";i:253;s:8:"decimals";i:0;}i:12;O:8:"stdClass":13:{s:4:"name";s:7:"to_ping";s:7:"orgname";s:7:"to_ping";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:262140;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:13;O:8:"stdClass":13:{s:4:"name";s:6:"pinged";s:7:"orgname";s:6:"pinged";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:262140;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:14;O:8:"stdClass":13:{s:4:"name";s:13:"post_modified";s:7:"orgname";s:13:"post_modified";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:129;s:4:"type";i:12;s:8:"decimals";i:0;}i:15;O:8:"stdClass":13:{s:4:"name";s:17:"post_modified_gmt";s:7:"orgname";s:17:"post_modified_gmt";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:129;s:4:"type";i:12;s:8:"decimals";i:0;}i:16;O:8:"stdClass":13:{s:4:"name";s:21:"post_content_filtered";s:7:"orgname";s:21:"post_content_filtered";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:9828;s:6:"length";i:4294967295;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:17;O:8:"stdClass":13:{s:4:"name";s:11:"post_parent";s:7:"orgname";s:11:"post_parent";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:49193;s:4:"type";i:8;s:8:"decimals";i:0;}i:18;O:8:"stdClass":13:{s:4:"name";s:4:"guid";s:7:"orgname";s:4:"guid";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:25;s:6:"length";i:1020;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:19;O:8:"stdClass":13:{s:4:"name";s:10:"menu_order";s:7:"orgname";s:10:"menu_order";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:11;s:9:"charsetnr";i:63;s:5:"flags";i:32769;s:4:"type";i:3;s:8:"decimals";i:0;}i:20;O:8:"stdClass":13:{s:4:"name";s:9:"post_type";s:7:"orgname";s:9:"post_type";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:4;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:16393;s:4:"type";i:253;s:8:"decimals";i:0;}i:21;O:8:"stdClass":13:{s:4:"name";s:14:"post_mime_type";s:7:"orgname";s:14:"post_mime_type";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:400;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:22;O:8:"stdClass":13:{s:4:"name";s:13:"comment_count";s:7:"orgname";s:13:"comment_count";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:32769;s:4:"type";i:8;s:8:"decimals";i:0;}}s:8:"num_rows";i:1;s:10:"return_val";i:1;}