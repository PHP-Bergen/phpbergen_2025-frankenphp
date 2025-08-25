# Why

FrankenPHP is a modern app server for PHP written in Go, built on top of Caddy and bundling a PHP runtime.

Operating in classic mode, FrankenPHP can be a drop-in replacement for PHP-FPM that combines a web server (Caddy) and PHP runtime into one, with the option to run PHP in a persistent, event-driven way.
In worker mode, Boot your application once and keep it in memory. FrankenPHP will handle incoming requests in a few milliseconds.

In either mode, FrankenPHP reduces complexity and overhead previously experienced with running a webserver, FastCGI and php-fpm by providing a single binary that can be deployed anywhere.
