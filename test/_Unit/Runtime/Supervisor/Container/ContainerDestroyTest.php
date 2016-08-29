<?php

namespace Kraken\_Unit\Runtime\Supervisor;

use Exception;
use Kraken\_Unit\Runtime\_T\TSolver;
use Kraken\Runtime\Supervisor\Container\ContainerDestroy;

class ContainerDestroyTest extends TSolver
{
    /**
     * @var string
     */
    protected $class = ContainerDestroy::class;

    /**
     *
     */
    public function testApiHandler_InvokesProperAction()
    {
        $ex = new Exception();
        $params = [];

        $solver = $this->createSolver();
        $runtime = $this->createRuntime([ 'destroy' ]);
        $runtime
            ->expects($this->once())
            ->method('destroy');

        $this->assertSame(
            null,
            $this->callProtectedMethod(
                $solver, 'handler', [ $ex, $params ]
            )
        );
    }
}
