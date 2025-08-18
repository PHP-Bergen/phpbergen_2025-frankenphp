<?php

namespace phpbergen\Repository;

interface Storage
{

    public function save(string $value): bool;

    public function load(): array;

}
