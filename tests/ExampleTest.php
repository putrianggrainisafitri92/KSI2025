<?php

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testTambahAngka()
    {
        $hasil = 2 + 2;
        $this->assertEquals(4, $hasil, "Perhitungan salah");
    }

    public function testStringHello()
    {
        $this->assertEquals("hello", strtolower("HELLO"));
    }
}
