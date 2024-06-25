<?php

declare(strict_types=1);

namespace Phppride\Documentor\Contracts;

use Phppride\Documentor\Contracts\Common\Contentable;
use Phppride\Documentor\Contracts\Common\Nodeable;

/**
 * Document Abstraction
 */
interface Document extends Contentable, Nodeable {}
