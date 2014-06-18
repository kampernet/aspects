<?php

class ExampleAspect {

	/**
	 * @match beforeAspecteeDoThisThing
	 */
	public function sayHi() {

		echo "hello from ExampleAspect\n";
	}
} 