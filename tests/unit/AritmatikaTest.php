<?php
require ("function/Aritmatika.php");
class AritmatikaTest extends \PHPUnit\Framework\TestCase{
    public function testTambah()
        {
            $this->assertEquals(7, tambah("3", "4"));
        }
        public function testTypeDataTambah(){
            $this->assertIsNumeric(tambah("3","4"));
        }
}