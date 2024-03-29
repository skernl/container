<?php
declare(strict_types=1);

namespace Skernl\Container\Annotation;

use Attribute;

#[Attribute(Attribute::TARGET_CLASS)]
class AnnotationTrigger
{
    public function __construct(public string $annotation)
    {
    }
}