<?php

interface IHuman {
	function fetchName();
}

class WonderWoman implements IHuman {

	protected $firstname;
	protected $lastname;
	protected $middlename;
	protected $fullname;

	public function fetchName(){
		$this->fullname = $this->firstname . ' ' . $this->middlename . ' ' . $this->lastname . ' ';
		return strtoupper( $this->fullname );
	}
}

$womanObj = new WonderWoman();
$womanObj->firstname = 'Rhea';
$womanObj->lastname = 'Bonifacio';
$womanObj->middlename = 'Angeles';
print_r( $womanObj->fetchName());

?>
