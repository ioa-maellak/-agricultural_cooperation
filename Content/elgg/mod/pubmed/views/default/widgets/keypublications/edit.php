<?php

     /**
	 * Elgg Key publications edit page
	 *
	 * Author Fautloos <m_welkers@hotmail.com>
	 * Copyright Fautloos 2009
	 */

?>
	<p>
		<?php echo elgg_echo("pubmed:widget:keypublications:edit:PMID1"); ?>
		<br />
		<input type="text" name="params[pmid_1]" value="<?php echo htmlentities($vars['entity']->pmid_1); ?>" />	
		<br />
		<?php echo elgg_echo("pubmed:widget:keypublications:edit:PMID2"); ?>
		<br />
		<input type="text" name="params[pmid_2]" value="<?php echo htmlentities($vars['entity']->pmid_2); ?>" />	
		<br />
		<?php echo elgg_echo("pubmed:widget:keypublications:edit:PMID3"); ?>
		<br />
		<input type="text" name="params[pmid_3]" value="<?php echo htmlentities($vars['entity']->pmid_3); ?>" />	

    </p>