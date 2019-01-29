<?php

class a {
	public $val = 10;
}

function renderVal (a $a) {
	return $a->$val;
}

echo renderVal (new a);

