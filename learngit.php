<?php

class foo
{
    protected $bar;

    function __construct() {
    	$this->bar = 0;
    }

    function doit() {
    	$this->bar++;
    }

	function getBar() {
		return $this->$bar;
	}

	function setBar($val) {
		$this->bar = $val;
	}
}
?>
