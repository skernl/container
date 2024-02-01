<?php
declare(strict_types=1);

namespace Skernl\Container;

use Skernl\Container\Annotation\AnnotationTrigger;
use Skernl\Container\Annotation\Mount;

/**
 * @Mount
 * @\Skernl\Di\Mount
 */
#[Mount]
class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'annotations' => [
                AnnotationTrigger::class,
            ],
        ];
    }
}