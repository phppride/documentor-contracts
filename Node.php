<?php

declare(strict_types=1);

namespace Phppride\Documentor\Contracts;

use Phppride\Documentor\Contracts\Common\Contentable;

/**
 * Abstract node interface
 */
interface Node extends Contentable, Tokenable
{
    /**
     * @return int      Offset of node relative to document content
     */
    public function offset(): int;
}
