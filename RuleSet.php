<?php

declare(strict_types=1);

namespace Phppride\Documentor\Contracts;

interface RuleSet
{
    public function getRules(string $type): array;
}
