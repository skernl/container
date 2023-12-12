<?php
declare(strict_types=1);

namespace Library;

use Library\Annotation\Inject;

#[
    Inject(is: false)
]
class TokenLibrary
{
    private int $action = 1;

    protected array $briny = [];

    public object|null $case = null;


    public function __construct()
    {

    }

    public function set(string $a)
    {

    }
}