<?php
declare(strict_types=1);

namespace Skernl\Container;

use Skernl\Container\Annotation\Mount;
use Skernl\Container\Definition\DefinitionSourceInterface;

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
            DefinitionSourceInterface::class => DefinitionSource::class,
        ];
    }
}