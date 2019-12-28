<?php
namespace Gosign;

class Hello {
	private $message = 'Hello!';

	public function __construct() {
        //
	}

	function say() {
		return $this->message;
	}
}
