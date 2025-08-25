<?php

namespace phpbergen\app;

use phpbergen\app\Repository\DummyStorage;
use phpbergen\app\Repository\Storage;

readonly class Bootstrap {

    public Storage $storage;

    public function __construct()
    {
        sleep(1);
        $this->storage = new DummyStorage([1, 2, 3]);
    }

    public function handle(... $globals): string
    {
        return "Hello World! " . var_dump($globals);
    }

    public function terminate() {}

    public function shutdown() {}

}
