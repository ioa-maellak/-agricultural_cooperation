<?php

     /**
	 * Elgg Pubmed edit page
	 *
	 * Author Fautloos <m_welkers@hotmail.com>
	 * Copyright Fautloos 2009
	 */

?>
	<p>
		<?php echo elgg_echo("pubmed:widget:pubmed:edit:disclaimer"); ?>
		<br />
        <br />
		<?php echo elgg_echo("pubmed:widget:pubmed:edit:username"); ?>
		<br />
		<input type="text" name="params[pubmed_username]" value="<?php echo htmlentities($vars['entity']->pubmed_username); ?>" />	
		<br />
		<?php echo elgg_echo("pubmed:widget:pubmed:edit:term"); ?>
		<input type="text" name="params[pubmed_term]" value="<?php echo htmlentities($vars['entity']->pubmed_term); ?>" />	
		<br />
		<?php echo elgg_echo("pubmed:widget:pubmed:edit:number"); ?>
		<br />
		<select name="params[pubmed_num]">
		    <option value="1" <?php if($vars['entity']->pubmed_num == 1) echo "selected='selected'"; ?>>1</option>
		    <option value="2" <?php if($vars['entity']->pubmed_num == 2) echo "selected='selected'"; ?>>2</option>
		    <option value="3" <?php if($vars['entity']->pubmed_num == 3) echo "selected='selected'"; ?>>3</option>
		    <option value="4" <?php if($vars['entity']->pubmed_num == 4) echo "selected='selected'"; ?>>4</option>
		    <option value="5" <?php if($vars['entity']->pubmed_num == 5) echo "selected='selected'"; ?>>5</option>
		    <option value="6" <?php if($vars['entity']->pubmed_num == 6) echo "selected='selected'"; ?>>6</option>
		    <option value="7" <?php if($vars['entity']->pubmed_num == 7) echo "selected='selected'"; ?>>7</option>
		    <option value="8" <?php if($vars['entity']->pubmed_num == 8) echo "selected='selected'"; ?>>8</option>
		</select>
		<br />
        <br />
		<?php echo elgg_echo(""); ?>
		<?php echo elgg_echo("Associated metadata can be deleted <a href='".$CONFIG->wwwroot."pg/settings/statistics/".$_SESSION['user']->username."'. target='_blank'>here.</a>"); ?>
</p>
