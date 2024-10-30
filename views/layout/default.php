<form method="post" action="<?php echo admin_url( 'options-general.php?page='.OPICIFH_Page_SLUG ); ?>">
<?php
	echo wp_nonce_field(OPICIFH_Input_SLUG,OPICIFH_Input_SLUG."-settings-page");
	
	$IFHHtmlHelper = new html_ifh_helper();
	$IFHHtmlHelper->opic_admin_tabs();
	$IFHHtmlHelper->MainContent($mainViewFile);
?>
 
      <?php submit_button($IFHHtmlHelper->getLang('btn-updatesetting')); ?>
      <input type="hidden" name="ilc-settings-submit" value="Y" />
 
</form>