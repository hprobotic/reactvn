]�W<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:50:"SELECT * FROM reactvn_posts WHERE ID = 604 LIMIT 1";s:11:"last_result";a:1:{i:0;O:8:"stdClass":23:{s:2:"ID";s:3:"604";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2016-08-12 11:54:05";s:13:"post_date_gmt";s:19:"2016-08-12 04:54:05";s:12:"post_content";s:68158:"<div class="span12">

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
<div class="row"></div>";s:11:"post_parent";s:1:"0";s:4:"guid";s:25:"http://reactvn.net/?p=604";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}}s:8:"col_info";a:23:{i:0;O:8:"stdClass":13:{s:4:"name";s:2:"ID";s:7:"orgname";s:2:"ID";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:3;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:49699;s:4:"type";i:8;s:8:"decimals";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:11:"post_author";s:7:"orgname";s:11:"post_author";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:49193;s:4:"type";i:8;s:8:"decimals";i:0;}i:2;O:8:"stdClass":13:{s:4:"name";s:9:"post_date";s:7:"orgname";s:9:"post_date";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:16513;s:4:"type";i:12;s:8:"decimals";i:0;}i:3;O:8:"stdClass":13:{s:4:"name";s:13:"post_date_gmt";s:7:"orgname";s:13:"post_date_gmt";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:129;s:4:"type";i:12;s:8:"decimals";i:0;}i:4;O:8:"stdClass":13:{s:4:"name";s:12:"post_content";s:7:"orgname";s:12:"post_content";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:68158;s:6:"length";i:4294967295;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:5;O:8:"stdClass":13:{s:4:"name";s:10:"post_title";s:7:"orgname";s:10:"post_title";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:17;s:6:"length";i:262140;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:6;O:8:"stdClass":13:{s:4:"name";s:12:"post_excerpt";s:7:"orgname";s:12:"post_excerpt";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:262140;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:7;O:8:"stdClass":13:{s:4:"name";s:11:"post_status";s:7:"orgname";s:11:"post_status";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:7;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:16385;s:4:"type";i:253;s:8:"decimals";i:0;}i:8;O:8:"stdClass":13:{s:4:"name";s:14:"comment_status";s:7:"orgname";s:14:"comment_status";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:4;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:9;O:8:"stdClass":13:{s:4:"name";s:11:"ping_status";s:7:"orgname";s:11:"ping_status";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:4;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:10;O:8:"stdClass":13:{s:4:"name";s:13:"post_password";s:7:"orgname";s:13:"post_password";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:11;O:8:"stdClass":13:{s:4:"name";s:9:"post_name";s:7:"orgname";s:9:"post_name";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:17;s:6:"length";i:800;s:9:"charsetnr";i:45;s:5:"flags";i:16393;s:4:"type";i:253;s:8:"decimals";i:0;}i:12;O:8:"stdClass":13:{s:4:"name";s:7:"to_ping";s:7:"orgname";s:7:"to_ping";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:262140;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:13;O:8:"stdClass":13:{s:4:"name";s:6:"pinged";s:7:"orgname";s:6:"pinged";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:262140;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:14;O:8:"stdClass":13:{s:4:"name";s:13:"post_modified";s:7:"orgname";s:13:"post_modified";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:129;s:4:"type";i:12;s:8:"decimals";i:0;}i:15;O:8:"stdClass":13:{s:4:"name";s:17:"post_modified_gmt";s:7:"orgname";s:17:"post_modified_gmt";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:129;s:4:"type";i:12;s:8:"decimals";i:0;}i:16;O:8:"stdClass":13:{s:4:"name";s:21:"post_content_filtered";s:7:"orgname";s:21:"post_content_filtered";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:69122;s:6:"length";i:4294967295;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:17;O:8:"stdClass":13:{s:4:"name";s:11:"post_parent";s:7:"orgname";s:11:"post_parent";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:49193;s:4:"type";i:8;s:8:"decimals";i:0;}i:18;O:8:"stdClass":13:{s:4:"name";s:4:"guid";s:7:"orgname";s:4:"guid";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:25;s:6:"length";i:1020;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:19;O:8:"stdClass":13:{s:4:"name";s:10:"menu_order";s:7:"orgname";s:10:"menu_order";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:11;s:9:"charsetnr";i:63;s:5:"flags";i:32769;s:4:"type";i:3;s:8:"decimals";i:0;}i:20;O:8:"stdClass":13:{s:4:"name";s:9:"post_type";s:7:"orgname";s:9:"post_type";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:4;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:16393;s:4:"type";i:253;s:8:"decimals";i:0;}i:21;O:8:"stdClass":13:{s:4:"name";s:14:"post_mime_type";s:7:"orgname";s:14:"post_mime_type";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:400;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:22;O:8:"stdClass":13:{s:4:"name";s:13:"comment_count";s:7:"orgname";s:13:"comment_count";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:32769;s:4:"type";i:8;s:8:"decimals";i:0;}}s:8:"num_rows";i:1;s:10:"return_val";i:1;}