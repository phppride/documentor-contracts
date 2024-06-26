<?php

declare(strict_types=1);

namespace Phppride\Documentor\Contracts;

use Phppride\Documentor\Contracts\Common\Contentable;
use Phppride\Documentor\Contracts\Common\Nameable;

/**
 * Abstract token interface
 */
interface Token extends Contentable, Nameable
{
    /**
     * @return bool     Has the token been processed or not
     */
    public function isProcessed(): bool;

    /**
     * @return void     Set flag that token processing is complete
     */
    public function complete(): void;
}
