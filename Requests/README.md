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