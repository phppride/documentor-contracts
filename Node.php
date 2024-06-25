<?php

declare(strict_types=1);

namespace Phppride\Documentor\Contracts;

use Phppride\Documentor\Contracts\Common\Contentable;
use Phppride\Documentor\Contracts\Common\Nodeable;

/**
 * Abstract node interface
 */
interface Node extends Contentable, Nodeable
{
    /**
     * @return int      Offset of node relative to document content
     */
    public function offset(): int;

    /**
     * @return Node|Documentable    Parent element
     */
    public function parent(): Node|Documentable;
}
