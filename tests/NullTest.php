<?php

require_once 'PHPUnit/Framework/TestCase.php';
require_once __DIR__.'/../lib/Ladybug.php';

class NullTest extends PHPUnit_Framework_TestCase
{
    public function testNullVariableGetsNull() {
        $var = NULL;
        
        $this->assertEquals(strip_tags(ladybug_dump_return($var)), 'NULL');
    }
}
