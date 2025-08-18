<?php

namespace phpbergen;

use phpbergen\Repository\DummyStorage;
use phpbergen\Repository\Storage;

readonly class Boostrap {

    public Storage $storage;

    public function __construct()
    {
        $this->storage = new DummyStorage([1, 2, 3]);
    }
}
