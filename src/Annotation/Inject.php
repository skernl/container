<?php
declare(strict_types=1);

namespace Skernl\Container\Annotation;

use Attribute;

/**
 * @Handler
 * @\Skernl\Di\Annotation\Handler
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class Inject
{
    public function __construct(
        public null|string $value = null,
        public bool        $require = true,
        public bool        $lazy = false,
    )
    {
    }
}