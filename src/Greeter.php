<?php
namespace App;

class Greeter {
	public function greet(string $name = null):string {
		if($name) {
			return "Hello, $name!";
		}

		return "Hello!";
	}
}

function addNum(int $a, int $b): int {
	return $a + $b;
}

$result = addNum("10",20);
