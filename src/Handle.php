<?php

namespace Arjf;

class Handle
{

    /**
     * @param mixed $no
     * @return mixed
     */
    public function exe($no)
    {
        return $this->handle($no);
    }

    /**
     * @param $no
     * @return mixed
     */
    private function handle($no)
    {
        if (preg_match('/[^\d]/', $no)) {
            throw new \InvalidArgumentException('Illegal Number');
        }

        $fooBarHandler = new FooBar();
        $fooHandler = new Foo();
        $barHandler = new Bar();
        $defaultHandler = new Number();

        $fooBarHandler->setSuccessor($fooHandler);
        $fooHandler->setSuccessor($barHandler);
        $barHandler->setSuccessor($defaultHandler);

        return $fooBarHandler->handle($no);
    }

}
