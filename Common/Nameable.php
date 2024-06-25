<?php

declare(strict_types=1);

namespace Phppride\Documentor\Contracts\Common;

/**
 * Common interface of objects with the name
 */
interface Nameable
{
    /**
     * @return string       Name of object
     */
    public function name(): string;
}
