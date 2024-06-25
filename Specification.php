<?php

declare(strict_types=1);

namespace Phppride\Documentor\Contracts;

/**
 * Abstract interface of specification. Specification must know which elements a document can
 * consist of, contain rules for construction and interaction of elements with each other
 */
interface Specification
{
    /**
     * @return string       Pattern of building document elements
     */
    public function pattern(): string;

    /**
     * @return string       Name of specification
     */
    public function getName(): string;

    /**
     * @return array        List of supported document elements
     */
    public function getElements(): array;

    /**
     * @param string $name      Name of element
     * @return array            List of element rules
     */
    public function elementRules(string $name): array;

    /**
     * @return bool         Are elements not specified in specification supported?
     */
    public function supportUserElements(): bool;
}
