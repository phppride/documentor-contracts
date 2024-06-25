<?php

declare(strict_types=1);

namespace Phppride\Documentor\Contracts\Common;

/**
 * Common interface of builder
 */
interface Builderable
{
    /**
     * @return mixed    Finished object of building
     */
    public function build(): mixed;
}
