<?php

declare(strict_types=1);

namespace Phppride\Documentor\Contracts;

use Phppride\Documentor\Contracts\Common\Builderable;

/**
 * Document Builder Abstraction
 */
interface DocumentBuilder extends Builderable
{
    /**
     * @return Documentable     Object of finished document for further manipulations (saving, editing, etc.)
     */
    public function build(): Documentable;
}
