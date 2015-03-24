<?php
/**
 * File CSS extender 
 * 
 * @package ElggFile
 */
?>
.file-photo {
	text-align: center;
	margin-bottom: 15px;
}
.file-gallery-item {
	text-align: center;
	width: 165px;
}

.video-wrapper {
	width: 600px;
	max-width: 100%;
}

.video-container {
	position: relative;
	padding-bottom: 56.25%;
	padding-top: 30px;
	height: 0;
	overflow: hidden;
}

.video-container iframe,  
.video-container object,  
.video-container embed {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
}