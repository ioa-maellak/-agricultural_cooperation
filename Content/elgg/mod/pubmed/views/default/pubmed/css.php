<?php
 
     /**
	 * Elgg Pubmed CSS
	 *
	 * Author M.R.A. Welkers <m_welkers@hotmail.com>
	 * Copyright Fautloos 2010
	 * Homepage http://www.fautloos.nl
	 */
     
?>

#pubmed_widget {
    margin:0 10px 0 10px;
}

#pubmed_widget ul {
	margin:0;
	padding:0;
}

#pubmed_widget li {
	background: url(<?php echo $vars['url']; ?>mod/pubmed/graphics/thewire_speech_bubble.gif) no-repeat right bottom;
	list-style-image:none;
	list-style-position:outside;
	list-style-type:none;
	margin:0 0 5px 0;
	padding:0;
	overflow-x: hidden;
}

#pubmed_widget li span {
	color:#666666;
	background:white;
	-webkit-border-radius: 8px; 
	-moz-border-radius: 8px;
	padding:5px;
	display:block;
}

.pubmed_widget_item {
	padding: 2px;
	margin: 5px 0 0 0;
}

.pubmed_widget_icon {
    background: url(<?php echo $vars['url']; ?>mod/pubmed/graphics/pubmed2.png) no-repeat left;
    padding: 0 0 0 20px;
    margin: 0;
}

.journal_pubmed {
	font-weight: bold; 
}

#pubmed_widget li a {
	display:block;
	margin:0 0 0 4px;
}

#pubmed_widget li span a {
	display:inline !important;
}