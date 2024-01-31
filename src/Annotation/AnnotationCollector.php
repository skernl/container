<?php
declare(strict_types=1);

namespace Skernl\Container\Annotation;

use Skernl\Container\Collector\AbstractMetadataCollector;

/**
 * @AnnotationCollector
 * @\Skernl\Di\Annotation\AnnotationCollector
 */
class AnnotationCollector extends AbstractMetadataCollector
{
    /**
     * @param string $class
     * @param string $annotation
     * @param mixed $value
     * @return void
     */
    static public function collect(
        string $annotation,
        string $class,
        mixed  $value
    ): void
    {
        self::$storageRoom [self::$annotation] [$annotation] [$class] = $value;
    }
}