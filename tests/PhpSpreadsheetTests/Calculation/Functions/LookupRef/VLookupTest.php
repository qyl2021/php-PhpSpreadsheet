<?php

namespace PhpOffice\PhpSpreadsheetTests\Calculation\Functions\LookupRef;

use PhpOffice\PhpSpreadsheet\Calculation\Functions;
use PhpOffice\PhpSpreadsheet\Calculation\LookupRef;
use PHPUnit\Framework\TestCase;

class VLookupTest extends TestCase
{
    protected function setUp(): void
    {
        Functions::setCompatibilityMode(Functions::COMPATIBILITY_EXCEL);
    }

    /**
     * @dataProvider providerVLOOKUP
     *
     * @param mixed $expectedResult
     */
    public function testVLOOKUP($expectedResult, ...$args)
    {
        $result = LookupRef::VLOOKUP(...$args);
        $this->assertEquals($expectedResult, $result);
    }

    public function providerVLOOKUP()
    {
        return require 'tests/data/Calculation/LookupRef/VLOOKUP.php';
    }
}