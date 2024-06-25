<?php

declare(strict_types=1);

namespace Phppride\Documentor\Contracts;

/**
 * Document Builder Abstraction
 */
interface Builderable
{
    /**
     * @return Documentable     Object of finished document for further manipulations (saving, editing, etc.)
     */
    public function build(): Documentable;
}
