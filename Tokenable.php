<?php

declare(strict_types=1);

namespace Phppride\Documentor\Contracts;

interface Tokenable extends Contentable
{
    public function name(): string;
}
