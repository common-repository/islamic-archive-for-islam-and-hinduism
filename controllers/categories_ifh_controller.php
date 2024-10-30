<?php
/**
 * 
 */
class categories_ifh_controller extends app_ifh_controlers {
	
	function __construct() {
		parent::__construct();
		$this->loadView('categories');
	}
}


?>