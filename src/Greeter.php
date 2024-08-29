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

function add_num(int $a, int $b): int {
	return $a + $b;
}

$result = add_num("10",20);
