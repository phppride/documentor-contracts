<?php

declare(strict_types=1);

namespace Phppride\Documentor\Contracts;

interface Factory
{
    public function create(Token $token): Node;
}
