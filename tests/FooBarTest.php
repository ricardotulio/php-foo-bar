<?php

namespace App;

use PHPUnit\Framework\TestCase;

class FooBarTest extends TestCase
{
    use FooBarDataProvider;

    protected $fooBar;

    public function setUp()
    {
        $this->fooBar = new FooBar();
    }

    /**
     * @test
     * @dataProvider numbersThatShouldNotBePrinted
     */
    public function mustReturnFalseIfIsNotNecesaryToPrintNumber($number)
    {
        $this->assertFalse($this->fooBar->shouldPrintNumber($number));
    }

    /**
     * @test
     * @dataProvider numbersThatShouldBePrinted
     */
    public function mustReturnTrueIfIsNecessaryToPrintNumber($number)
    {
        $this->assertTrue($this->fooBar->shouldPrintNumber($number));
    }

    /**
     * @test
     * @dataProvider numbersThatShouldNotBeReplacedByFoo
     */
    public function mustReturnFalseIfIsNotNecessaryToPrintFoo($number)
    {
        $this->assertFalse($this->fooBar->shouldPrintFoo($number));
    }

    /**
     * @test
     * @dataProvider numbersThatShouldBeReplacedByFoo
     */
    public function mustReturnTrueIfIsNecessaryToPrintFoo($number)
    {
        $this->assertTrue($this->fooBar->shouldPrintFoo($number));
    }

    /**
     * @test
     * @dataProvider numbersThatShouldNotBeReplacedByBar
     */
    public function mustReturnFalseIfIsNotNecessaryToPrintBar($number)
    {
        $this->assertFalse($this->fooBar->shouldPrintBar($number));
    }

    /**
     * @test
     * @dataProvider numbersThatShouldBeReplacedByBar
     */
    public function mustReturnTrueIfIsNecessaryToPrintBar($number)
    {
        $this->assertTrue($this->fooBar->shouldPrintBar($number));
    }

    /**
     * @test
     * @dataProvider numbersAndRespectValuesToBePrinted
     */
    public function mustReturnTheCorrectValueToBePrinted(
        $number,
        $expectedString
    ) {
        $this->assertEquals(
            $expectedString,
            $this->fooBar->findAndReturnValueFor($number)
        );
    }
}
