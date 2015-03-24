<?php
	/**
	* Pubmed plugin - Delete metadata
	* 
	* @package Pubmed plugin
	* @author M.R.A. Welkers
	* @copyright M.R.A. Welkers 2010
	* @link http://www.fautloos.nl
	*/
	
	$button = elgg_view("input/submit", array("internalname"=>"submitButton", "value"=>elgg_echo("pubmed:stats:clear"), "js" => "OnClick='return confirm(\"" . elgg_echo("pubmed:stats:confirm") . "\");'"));
	$form = elgg_view("input/form", array("internalname" => "resetForm", "method" => "post", "action" => $vars['url'] . "action/pubmed/reset", "body" => $button));
?>
<div class="contentWrapper user_settings">
<h3><?php echo elgg_echo('pubmed:stats:title'); ?></h3>
<table>
    <tr>
        <td style='vertical-align:middle;' width=100%>
		<?php echo sprintf(elgg_echo('pubmed:stats:warning')); ?>
		</td> 
        <td style='vertical-align:middle;'>
		<?php echo $form; ?>
		</td>

    </tr>
</table>
</div>