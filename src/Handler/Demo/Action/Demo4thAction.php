<?php

namespace Gzhegow\Pipeline\Handler\Demo\Action;

class Demo4thAction
{
    public function __invoke($input = null, $context = null, $state = null) // : mixed
    {
        echo __METHOD__ . PHP_EOL;

        return __METHOD__ . ' result.';
    }
}