<?php

declare(strict_types=1);

namespace Phppride\Documentor\Contracts;

interface Elementable extends Node
{
    public function getName(): string;

    public function getType(): string;
}
