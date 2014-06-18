<?php
include __DIR__ . "/../vendor/autoload.php";

include "Aspectee.php";
include "ExampleAspect.php";

use Kampernet\Aspect\Aspect;

class AspectTest {

	public function testAspects() {

		/**
		 * @var Aspectee $aspected
		 */
		$aspected = Aspect::getAspectedInstance('Aspectee');
		$aspected->doThisThing();

//		echo $aspected->getCompiledCode();
	}
}

$test = new AspectTest();
$test->testAspects();