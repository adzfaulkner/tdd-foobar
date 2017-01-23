<?php

namespace Arjf;

class Bar extends AbstractHandler
{
    /**
     * @inheritdoc
     */
    public function handle($no) {
        if ($this->isBar($no) === true)
        {
            return 'Bar';
        }

        return $this->successor->handle($no);
    }
}