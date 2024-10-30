<?php
$opicifh_categories_lang = array();
$opicifh_lang_list = [
	"eng" =>[
		"title"=> "English",
		"link" => "https://www.islam-hinduism.com",
	],
	"mal" =>[
		"title"=> "Malayalam",
		"link" => "https://mal.islam-hinduism.com",
	],
	"tel" =>[
		"title"=> "Telugu",
		"link" => "https://tel.islam-hinduism.com",
	],
	"ta" =>[
		"title"=> "Tamil",
		"link" => "https://ta.islam-hinduism.com",
	],
];


// ======================   Titles ==============================
												
$ifhcategories["islam_for_hindus"] 		= array(
													'title'=>"Islam and Hinduism",
													'url'=>"https://www.islam-hinduism.com",
													'logo'=>"islam_for_hindus.png",
												);

// =================== English ===========================
if($opicifh_lang_list)
{
	foreach ($opicifh_lang_list as $key => $value) {
		$opicifh_categories_lang[$key]['islam_for_hindus']['url']				=  $value["link"];
		$opicifh_categories_lang[$key]['islam_for_hindus']['cat'] 				=  $value["link"].'/api/get_category_index/';
		$opicifh_categories_lang[$key]['islam_for_hindus']['importurl'] 		=  $value["link"].'/api/get_category_posts/?slug=';
	}
}


?>