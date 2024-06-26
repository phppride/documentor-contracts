<?php

declare(strict_types=1);

namespace Phppride\Documentor\Contracts\Common;

/**
 * Common interface of objects with the content
 */
interface Contentable
{
    /**
     * @return string   Content of object
     */
    public function content(): string;

    /**
     * @return int      Number of characters of the content
     */
    public function length(): int;
}
