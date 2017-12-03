<?php
declare(strict_types=1);

namespace App\Tests\Day;

use App\Day\DayThree;
use PHPUnit\Framework\TestCase;

class DayThreeTest extends TestCase
{
    public function testPartOne()
    {
        $dayThree = new DayThree(1);
        $this->assertEquals(0, $dayThree->partOne());

        $dayThree = new DayThree(12);
        $this->assertEquals(3, $dayThree->partOne());

        $dayThree = new DayThree(23);
        $this->assertEquals(2, $dayThree->partOne());

        $dayThree = new DayThree(1024);
        $this->assertEquals(31, $dayThree->partOne());
    }

    public function testPartTwo()
    {

    }
}
