<?php
declare(strict_types=1);

namespace Tests\Dojo;

use Dojo\Greeter;
use Symfony\Bundle\FrameworkBundle\Tests\TestCase;

class GreeterTest extends TestCase
{

    public function testCallWithNullParamsOnlySaysHello(){

        $sut = new Greeter();

        $text = $sut->greet(null, null);
        $this->assertEquals('Hello', $text);
    }

}
