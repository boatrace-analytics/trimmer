<?php

namespace Boatrace\Analytics\Tests;

use Boatrace\Analytics\MainTrimmer;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;

/**
 * @author shimomo
 */
class MainTrimmerTest extends PHPUnitTestCase
{
    /**
     * @var \Boatrace\Analytics\MainTrimmer
     */
    protected $trimmer;

    /**
     * @return void
     */
    public function setUp(): void
    {
        $this->trimmer = new MainTrimmer;
    }

    /**
     * @return void
     */
    public function testTrim(): void
    {
        $this->assertNull($this->trimmer->trim());
        $this->assertNull($this->trimmer->trim(null));
        $this->assertSame('競艇', $this->trimmer->trim(' 競艇 '));
    }

    /**
     * @return void
     */
    public function testLtrim(): void
    {
        $this->assertNull($this->trimmer->ltrim());
        $this->assertNull($this->trimmer->ltrim(null));
        $this->assertSame('競艇 ', $this->trimmer->ltrim(' 競艇 '));
    }

    /**
     * @return void
     */
    public function testRtrim(): void
    {
        $this->assertNull($this->trimmer->rtrim());
        $this->assertNull($this->trimmer->rtrim(null));
        $this->assertSame(' 競艇', $this->trimmer->rtrim(' 競艇 '));
    }
}
