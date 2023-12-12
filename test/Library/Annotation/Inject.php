<?php
declare(strict_types=1);

namespace Library\Annotation;

use Attribute;

#[Attribute]
class Inject
{
    public function __construct(protected bool $is)
    {

    }
}