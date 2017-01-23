<?php

namespace Arjf;

class FooBar extends AbstractHandler
{
    /**
     * @inheritdoc
     */
    public function handle($no) {
        if ($this->isFooBar($no) === true)
        {
            return 'FooBar';
        }

        return $this->successor->handle($no);
    }
}