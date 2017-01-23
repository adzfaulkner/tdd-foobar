<?php

namespace Arjf;

class Foo extends AbstractHandler
{
    /**
     * @param int $no
     * @return mixed|string
     */
    public function handle($no) {
        if ($this->isFoo($no) === true)
        {
            return 'Foo';
        }

        return $this->successor->handle($no);
    }
}