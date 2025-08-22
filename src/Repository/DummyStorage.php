<?php

namespace phpbergen\app\Repository;

readonly class DummyStorage implements Storage
{

    public function __construct(private array $storage)
    {
        sleep(1);
    }

    public function save(string $value): bool
    {
        sleep(1);
        return true;
    }

    public function load(): array
    {
        sleep(1);
        return $this->storage;
    }

}
