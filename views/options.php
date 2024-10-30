
<div class="category-head">
		<table width="100%">
		<tr>
			<td width="80px">
				<span class="category-logo"><?php echo opicifh_icon_logo('options.png',array('width'=>'80px')) ?></span>
				</td>
			<td>
				<h1 class="category-title"><?php echo $this->getLang('control-options') ?></h1>
				</td>
		</tr>
	</table>	
	
</div>
<hr />
<?php
$IFHHtml = new html_ifh_helper();

$timeList['']                 = $this->getLang('label-select');
$timeList['everyhour']        = $this->getLang('label-hourly');
$timeList['everysixhours']    = $this->getLang('label-every_six_hours');
$timeList['everytwelvehours'] = $this->getLang('label-every_twelve_hours');
$timeList['everyday']         = $this->getLang('label-daily');
$timeList['everytwodays']     = $this->getLang('label-two_days');
$timeList['weakly']           = $this->getLang('label-weakly');


echo $IFHHtml -> Input('select', array('name' => 'cronjobtime', 'options' => $timeList, 'label' =>$this->getLang('label-import_data_time')));
echo $IFHHtml->Input('text',array('name' => 'source', 'label' => $this->getLang('label-source')));
?>