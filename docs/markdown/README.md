# PHP Bergen - FrankenPHP

## Why

FrankenPHP is a modern app server for PHP written in Go, built on top of Caddy and bundling a PHP runtime.

Operating in classic mode, FrankenPHP can be a drop-in replacement for PHP-FPM that combines a web server (Caddy) and PHP runtime into one, with the option to run PHP in a persistent, event-driven way.
In worker mode, Boot your application once and keep it in memory. FrankenPHP will handle incoming requests in a few milliseconds.

In either mode, FrankenPHP reduces complexity and overhead previously experienced with running a webserver, FastCGI and php-fpm by providing a single binary that can be deployed anywhere.

## Installation and basic usage

[How to Install](install.md)

## Highlighted Features

- **Easy deploy:** Only one service, only one binary. No need for i.e a webserver + php-fpm.
- **Extensible:** PHP 8.2+ and most PHP extensions natively supported
- **Worker mode:** Boot your application once and keep it in memory. FrankenPHP will handle incoming requests in a few milliseconds.
- **103 Early Hints:** A modern way to make web pages load faster.
- **HTTP/2 & HTTP/3:** Native support for HTTP 1.1/2/3
- **First class HTTPS support:** Automatic HTTPS certificates generation and renewal (Let's Encrypt or ZeroSSL)
- **Prometheus metrics and traces:** Caddy exposes an HTTP endpoint that responds in the Prometheus exposition format. (OpenMetrics also available if negotiated)
- **Self-executable PHP apps as standalone binaries:** FrankenPHP has the ability to embed the source code and assets of PHP applications in a static, self-contained binary.
- **Performance:** Out of the box, FrankenPHP try to offer a good compromise between performance and ease of use - if needed it is possible to tweak the configuration to significantly improve on performance.

## Early hints

[Early hints](early_hints.md)

## Scaling FrankenPHP

[Scaling FrankenPHP](scaling.md)
 
## The future
