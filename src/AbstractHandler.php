<?php

namespace Arjf;

abstract class AbstractHandler
{
    /**
     * @var AbstractHandler
     */
    protected $successor = null;

    /**
     * Sets a successor handler.
     *
     * @param self $handler
     */
    public function setSuccessor(self $handler)
    {
        $this->successor = $handler;
    }

    /**
     * @param $no
     * @return bool
     */
    protected function isFooBar($no)
    {
        return $this->containsThree($no) === false
        && $this->isFoo($no) === true
        && $this->isBar($no) === true;
    }

    /**
     * @param $no
     * @return bool
     */
    protected function isFoo($no)
    {
        return ($no % 3) === 0 || $this->containsThree($no);
    }

    /**
     * @param $no
     * @return bool
     */
    protected function isBar ($no)
    {
        return ($no % 5) === 0;
    }

    /**
     * @param $no
     * @return bool
     */
    protected function containsThree($no)
    {
        return preg_match('/3/', $no) !== 0;
    }

    /**
     * Handles the request and/or redirect the request
     * to the successor.
     *
     * @param int $no
     *
     * @return mixed
     */
    abstract public function handle($no);
}