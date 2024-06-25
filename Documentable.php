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
     * @return iterable     List of contained nodes
     */
    public function nodes(): \Iterable;
}
