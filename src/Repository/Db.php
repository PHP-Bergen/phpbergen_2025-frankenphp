<?php

namespace phpbergen\Repository;

class Db {
    public function __construct(private \Storage $storage)
    {
    }

    public function save(string $value): bool
    {
        return $this->storage->save($value);
    }

}
