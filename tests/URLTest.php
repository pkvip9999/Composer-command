<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use App\URL;

class URLTest extends TestCase
{
    /**
     * @param string $originalString String to be sluggified
     * @param string $expectedResult What we expect our slug result to be
     *
     * @dataProvider providerTestSluggifyReturnsSluggifiedString
     */
    public function testSluggifyReturnsSluggifiedString($originalString, $expectedResult)
    {
        $url = new URL();

        $result = $url->sluggify($originalString);

        $this->assertEquals($expectedResult, $result);
    }
    public function providerTestSluggifyReturnsSluggifiedString()
    {
        return [
            ['This string will be sluggified', 'this-string-will-be-sluggified'],
            ['THIS STRING WILL BE SLUGGIFIED', 'this-string-will-be-sluggified'],
            ['This1 string2 will3 be 44 sluggified10', 'this1-string2-will3-be-44-sluggified10'],
            ['This! @string#$ %$will ()be "sluggified', 'this-string-will-be-sluggified'],
            ["Tänk efter nu – förr'n vi föser dig bort", 'tank-efter-nu-forrn-vi-foser-dig-bort'],
            ['', ''],
        ];
    }
    public function test()
    {
        $a=true;
        $this->assertTrue($a);
    }
}
