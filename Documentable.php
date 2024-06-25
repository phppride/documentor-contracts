<?php

declare(strict_types=1);

namespace Phppride\Documentor\Contracts;

use Phppride\Documentor\Contracts\Common\Contentable;

/**
 * Abstraction for a document
 */
interface Documentable extends Contentable
{
    /**
     * @return array    List of contained nodes
     */
    public function nodes(): array;
}
