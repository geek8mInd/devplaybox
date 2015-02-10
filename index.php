<?php
/**
 * The SuperClass for WonderWoman with the application of OOP concepts and principkes
 *
 * author: Rhea A. Bonifacio
 * version: 1.0
 * date: 2015 Feb 9
 */

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

/* End of file: index.php */
?>
