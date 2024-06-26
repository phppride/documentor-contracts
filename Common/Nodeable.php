<?php

declare(strict_types=1);

namespace Phppride\Documentor\Contracts\Common;

/**
 * Common interface of node.
 */
interface Nodeable
{
    /**
     * @return mixed        Parent element
     */
    public function parent(): mixed;

    /**
     * @return array|null   List of child elements or null
     */
    public function children(): ?array;
}
