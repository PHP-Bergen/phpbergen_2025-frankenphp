# FrankenPHP Worker Mode

* A single boostrap for repeating and expensive tasks.
* Out the box support for framework as [Laravel Octane](https://laravel.com/docs/12.x/octane), [Symfony](https://symfony.com/) and [Yii](https://www.yiiframework.com/).
* Use ZTS (Zen Thread Safe) compiled PHP.

## What about globals?

Clears out superglobals to prevent 

<img src="../images/globals.jpg" width="600" alt="Globals are evil">

## Some internals

* FrankenPHP uses POSIX threads and GoRoutines (GoRoutines also use threads)
* Using threads requires a thread-safe (ZTS) build of PHP and of PHP extensions
* PHP extensions must be compatible with non-thread-safe (NTS) and thread-safe
(ZTS) builds of PHP

## Example application runnig in worker mode

```
/public_worker/index.php
```

---
<img src="../images/elephant_footer.svg" alt="FrankenPHP" width="100" height="100" />
