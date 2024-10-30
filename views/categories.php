<?php
$IFHHtml = new html_ifh_helper();
global $ifhcategories,$opicifh_categories_lang;
 
$category_slug = esc_attr($_GET['cat_slug']);

$opicifh_lang = get_option(OPICIFH_Input_SLUG.'language');
$link = $opicifh_categories_lang[$opicifh_lang][$category_slug]['url'];
$jsoncaturl = $opicifh_categories_lang[$opicifh_lang][$category_slug]['cat'];
$slug = $category_slug.'_'.$opicifh_lang;
$cat_options = $IFHHtml->categoryFromTransient($jsoncaturl,$slug);
 
?>
<div class="category-head">
	<table width="100%">
		<tr>
			<td width="80px"><span class="category-logo"><?php echo opicifh_cat_logo($category_slug,array('width'=>'80px','class'=>$category_slug)) ?></span></td>
			<td><h1 class="category-title"><a target="_blank" href="<?php echo $link; ?>"><?php echo $this->getLang($category_slug); ?></a></h1></td>
		</tr>
	</table>

</div>
<hr />
<?php
	echo $IFHHtml->Input('checkbox',array('name'=>'category_'.$opicifh_lang.'_'.$category_slug.'[]','options'=>$cat_options));
?>
