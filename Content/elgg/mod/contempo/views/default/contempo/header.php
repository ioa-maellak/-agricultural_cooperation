<?php
if (elgg_is_logged_in()) {
    $logged_in = 1;
} else {
    $logged_in = 0;
}
echo "</div>";
?>
<div id="shading"></div>
<div id="contempoHeader">
    <div class="elgg-inner">
	<?php
	if (elgg_is_logged_in()) {
	    echo elgg_view('contempo/loggedInHeader');
	} else {
	    echo elgg_view('contempo/loggedOutHeader');
	}
	?>
	<div class="tag">Login/Register</div>
    </div>
</div>
<?php echo "<div class='elgg-inner'>"; $current_lang_id = get_current_language();?>
<script>
    (function(){
	var logged_in = "<?php echo $logged_in; ?>";
	var mylang = "<?php echo $current_lang_id; ?>";
	if (logged_in == 0) {
	    $(".tag").html('Login/Register');
	}
	if (logged_in == 1) {
		if (mylang == 'en')
		{
	    $(".tag").html('Your Account');
		}
		if (mylang == 'el')
		{
	    $(".tag").html('&Omicron; &Lambda;&omicron;&gamma;&alpha;&rho;&iota;&alpha;&sigma;&mu;&omicron;&sigmaf; &sigma;&alpha;&sigmaf;');
		}	
		if (mylang == 'nl')
		{
	    $(".tag").html('Llogaria juaj');
		}		
	}
	$(".tag").toggle(function(){
	    $("#contempoHeader").animate({'top':'+=409'}); /* KostasS; original was +=409 */
	    $("#shading").fadeIn('slow');
	},function(){
	    $("#contempoHeader").animate({'top':'-=409'}); /* KostasS; original was -=409 */
	    $("#shading").fadeOut('slow');
	});
    })();
</script>