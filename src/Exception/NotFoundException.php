<?php
declare(strict_types=1);

namespace Skernl\Container\Exception;

use Exception;
use Psr\Container\NotFoundExceptionInterface;

/**
 * @NotFoundException
 * @\Skernl\Container\Exception\NotFoundException
 */
class NotFoundException extends Exception implements NotFoundExceptionInterface
{
    /**
     * Gets a string representation of the thrown object
     * @link https://php.net/manual/en/throwable.tostring.php
     * @return string <p>Returns the string representation of the thrown object.</p>
     * @since 7.0
     */
    public function __toString(): string
    {
        return $this->getMessage();
    }
}