<?php
 
require_once('vendor/autoload.php');

use PHPUnit\Framework\TestCase;
use Math\Math;

class MathTest extends TestCase {
	protected $sample;

	protected function setUp() {
		$this->sample = new Math();
	}
	
    public function test_add() {
		$this->assertEquals(10, $this->sample->Add(5, 5));
    }
 
    public function test_sub() {
		$this->assertEquals(1, $this->sample->Sub(5, 4));
    }
}
