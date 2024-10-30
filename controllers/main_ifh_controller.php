<?php
/**
 *
 */
class IslamforHindusMaincontroller extends app_ifh_controlers {

	function __construct() {
		parent::__construct();
		add_action('admin_menu', array($this, 'ifh_admin_menu'));
	}

	function ifh_admin_menu() {
		add_options_page('Islamic Archive For Islam and Hinduism', 'Islamic Archive For Islam and Hinduism', 'manage_options',OPICIFH_Page_SLUG, array($this, 'ifhsettings_page'));
	}

	function ifhsettings_page() {
		if(isset($_GET['tab'])){
			$tab = strip_tags($_GET['tab']);
		}else{
			$tab = '';
		}
		switch ($tab) {
			case 'options':
				$this->loadController('options');
				break;
			case 'language':
				$this->loadController('language');
				break;
			case 'categories':
				echo $this->loadController('categories');
				break;
			default:
				$this->loadController('language');
				break;
		}
	}

}
new IslamforHindusMaincontroller();
?>