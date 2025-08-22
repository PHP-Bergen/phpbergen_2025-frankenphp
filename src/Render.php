<?php

namespace phpbergen\app;

final class Render {
    public function __construct()
    {
    }

    public function render(string $markup, string $message): string
    {
        return "<$markup>$message</$markup>";
    }
}
