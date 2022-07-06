***Httpful***

[Github](https://github.com/nategood/httpful)

Httpful is a simple Http Client library for PHP 7.2+. There is an emphasis of readability, simplicity, and flexibility – basically provide the features and flexibility to get the job done and make those features really easy to use.

Features

* Readable HTTP Method Support (GET, PUT, POST, DELETE, HEAD, PATCH and OPTIONS)
* Custom Headers
* Automatic "Smart" Parsing
* Automatic Payload Serialization
* Basic Auth
* Client Side Certificate Auth
* Request "Templates"

----

***Requests***

[Github](https://github.com/rmccue/Requests)

Requests is a HTTP library written in PHP, for human beings. It is roughly based on the API from the excellent Requests Python library. Requests is ISC Licensed (similar to the new BSD license) and has no dependencies, except for PHP 5.6.20+.

Despite PHP's use as a language for the web, its tools for sending HTTP requests are severely lacking. cURL has an interesting API, to say the least, and you can't always rely on it being available. Sockets provide only low level access, and require you to build most of the HTTP response parsing yourself.

We all have better things to do. That's why Requests was born.

Requests allows you to send HEAD, GET, POST, PUT, DELETE, and PATCH HTTP requests. You can add headers, form data, multipart files, and parameters with basic arrays, and access the response data in the same way. Requests uses cURL and fsockopen, depending on what your system has available, but abstracts all the nasty stuff out of your way, providing a consistent API.

Features
* International Domains and URLs
* Browser-style SSL Verification
* Basic/Digest Authentication
* Automatic Decompression
* Connection Timeouts

----

***Unirest PHP***

[Github](https://github.com/Kong/unirest-php)


Unirest is a set of lightweight HTTP libraries available in multiple languages, built and maintained by Mashape, who also maintain the open-source API Gateway Kong.

Features
* Utility methods to call GET, HEAD, POST, PUT, DELETE, CONNECT, OPTIONS, TRACE, PATCH requests
* Supports form parameters, file uploads and custom body entities
* Supports gzip
* Supports Basic, Digest, Negotiate, NTLM Authentication natively
* Customizable timeout
* Customizable default headers for every request (DRY)
* Automatic JSON parsing into a native object for JSON responses

----

***Unirest PHP***

[Github](https://github.com/voku/httpful/)

Forked some years ago from nategood/httpful + added support for parallel request and implemented many PSR Interfaces: A Chainable, REST Friendly Wrapper for cURL with many "PSR-HTTP" implemented inferfaces.

Features

* Readable HTTP Method Support (GET, PUT, POST, DELETE, HEAD, PATCH and OPTIONS)
* Custom Headers
* Automatic "Smart" Parsing
* Automatic Payload Serialization
* Basic Auth
* Client Side Certificate Auth (SSL)
* Request "Download"
* Request "Templates"
* Parallel Request (via curl_multi)
* PSR-3: Logger Interface
* PSR-7: HTTP Message Interface
* PSR-17: HTTP Factory Interface
* PSR-18: HTTP Client Interface