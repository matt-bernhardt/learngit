<?php
/**
 * Class foo
 *
 * @author Matt Bernhardt
 * @link   https://github.com/matt-bernhardt/learngit
 */

class foo
{
	protected $bar;

	function __construct() {
		$this->bar = 0;
	}

	function doit() {
		$this->bar++;
	}

	function undoit() {
		$this->bar--;
	}

	function getBar() {
		return $this->$bar;
	}

	function setBar($val) {
		$this->bar = $val;
	}
}
?>
