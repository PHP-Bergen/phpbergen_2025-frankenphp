<?php

namespace phpbergen\app;

use phpbergen\app\Repository\DummyStorage;
use phpbergen\app\Repository\Storage;

readonly class Bootstrap {

    public Storage $storage;

    public function __construct()
    {
        $this->storage = new DummyStorage([1, 2, 3]);
    }
}
