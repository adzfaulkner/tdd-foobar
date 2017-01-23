<?php

namespace Arjf\Tests;

use Arjf\Handle;
use Doctrine\Instantiator\Exception\InvalidArgumentException;

class HelloWorldTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @dataProvider provider
     */
    public function should_be_creatable($expected, $subject)
    {
        $a = new Handle();
        $this->assertEquals($expected, $a->exe($subject));
    }

    /**
     * @test
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage Illegal Number
     */
    public function should_throw_exception ()
    {
        $a = new Handle();
        $a->exe('a');
    }

    public function provider()
    {
        $nos = range(1, 100);

        $ret = [];

        foreach ($nos as $no) {
            $expected = '';

            if (($no % 3) === 0) {
                $expected .= 'Foo';
            }

            if (($no % 5) === 0) {
                $expected .= 'Bar';
            }

            if (preg_match('/3/', $no)) {
                $expected = 'Foo';
            }

            if (empty($expected) === true) {
                $expected = $no;
            }

            $ret[] = [$expected, $no];
        }

        return $ret;
    }
}
