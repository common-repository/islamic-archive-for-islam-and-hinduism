<?php
/**
 * APP Helpers
 */
class app_ifh_helpers {
	var $class_lang;
	var $langList;
	public function __construct() {
		global $opicifh_lang;
		global $opicifh_lang_list;
		$this->langList = $opicifh_lang_list;
		$this->loadLang();
	}
	public function loadLang()
	{
		global $opicifh_lang;
		$this->class_lang =  $opicifh_lang;
	
	}
	
	public function getLang($key='')
	{
		if(isset($this->class_lang[$key])){
			return $this->class_lang[$key];
		}
		return $key;
	}
	public function getLangList()
	{
		$result = [];
		if(isset($this->langList) && is_array($this->langList))
		{
			foreach ($this->langList as $key => $value):
				$result[$key] = $value["title"];
			endforeach;
		}
		return $result;
	}
	public function MainContent($mainViewFile) {
		if (file_exists($mainViewFile)) {
			include_once $mainViewFile;
		}

	}
	
	function opic_admin_tabs($current = 'language') {
		 
		global $opicifh_categories_lang,$ifhcategories;
		 
		$cat_tab_list = [];
		
        if(isset($opicifh_categories_lang[get_option(OPICIFH_Input_SLUG.'language')]))
        {
          $cat_tab_list = $opicifh_categories_lang[get_option(OPICIFH_Input_SLUG.'language')]; 
        }
		
		 
		if(isset($_GET['page'])){
			$get_slug = sanitize_text_field($_GET['page']);
		}else{
			$get_slug = '';
		}

		if (!empty($_GET['tab'])) {
			$current = sanitize_text_field($_GET['tab']);
		};
		$tabs = array('language' => $this->getLang('tab-language'),'options' => $this->getLang('tab-options'));
		echo '<div id="icon-themes" class="icon32"><br></div>';
		echo '<h2 class="nav-tab-wrapper">';
		foreach ($tabs as $tab => $name) {
			$class = ($tab == $current) ? ' nav-tab-active' : '';
			$logo = NULL;
		 
			echo "<a class='nav-tab$class' href='?page=" . $get_slug . "&tab=$tab'>$logo $name</a>";
		}
		 
		if(isset($cat_tab_list) && is_array($cat_tab_list) && count($cat_tab_list) > 0){
			foreach ($cat_tab_list as $tab => $name) {
			if(isset($_GET['cat_slug'])){
				$_current = sanitize_text_field($_GET['cat_slug']);
			}else{
				$_current = '';	
			}
			$class = ($current == 'categories' && $_current == $tab) ? ' nav-tab-active' : '';
			echo "<a class='nav-tab$class' href='?page=" . $get_slug . "&tab=categories&cat_slug=$tab'><img ?>".$this->getLang($tab)."</a>";
		}		
		}
		echo '</h2>';
	}
	
}
?>