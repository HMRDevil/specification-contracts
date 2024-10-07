<?php

declare(strict_types=1);

namespace SpecDoc\Specificator\Contracts\Specification;

/**
 * Contains the type and version of the specification.
 */
interface SpecificationInfoInterface
{
    /**
     * Returns the type of the specification.
     *
     * @return string
     */
    public function getType(): string;

    /**
     * Returns the version of the specification.
     *
     * @return string
     */
    public function getVersion(): string;
}
