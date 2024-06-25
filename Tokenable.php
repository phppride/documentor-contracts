<?php

declare(strict_types=1);

namespace Phppride\Documentor\Contracts;

use Phppride\Documentor\Contracts\Common\Contentable;

interface Tokenable extends Contentable
{
    public function name(): string;
}
