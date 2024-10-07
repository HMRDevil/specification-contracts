<?php

declare(strict_types=1);

namespace SpecDoc\Specificator\Contracts\Specification;

/**
 * Specification must know which elements a document can consist of, contain rules
 * for construction and interaction of elements with each other.
 */
interface SpecificationInterface
{
    /**
     * Returns information about the specification.
     *
     * @return SpecificationInfoInterface
     */
    public function getInfo(): SpecificationInfoInterface;

    /**
     * Returns a list of supported document elements.
     *
     * @return array
     */
    public function getElements(): array;

    /**
     * @param string $name Name of element
     * @return array List of element rules
     */
    public function getRules(string $name): array;

    /**
     * @return bool Are elements not specified in specification supported?
     */
    public function supportUserElements(): bool;
}
