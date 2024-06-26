<?php

declare(strict_types=1);

namespace Phppride\Documentor\Contracts;

/**
 * Factory Abstraction
 */
interface Factory
{
    /**
     * @param Token $token      Token for processing
     * @return Node             Document node for subsequent processing
     */
    public function create(Token $token): Node;
}
