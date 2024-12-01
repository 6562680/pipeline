<?php

namespace Gzhegow\Pipeline\Handler\Demo\Middleware;

use Gzhegow\Pipeline\Process\PipelineProcessInterface;


class Demo1stMiddleware
{
    public function __invoke(PipelineProcessInterface $pipeline, $input = null, $context = null, $state = null) // : mixed
    {
        $method = __METHOD__;

        echo "@before :: {$method}" . PHP_EOL;

        $result = $pipeline->next($input, $context);

        echo "@after :: {$method}" . PHP_EOL;

        return $result;
    }
}
