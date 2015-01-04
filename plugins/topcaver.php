<?php
function get_weibo_profile_img($username){
	// Get the cached profile image.
    $cache = IS_CATEGORY ? '.' : '';
    $array = split('/category/', $_SERVER['REQUEST_URI']);
    $array = split('/', $array[1]);
    if(count($array)!=1) $cache .= './.';
    $cache .= './cache/';
	$profile_image = $cache.$username.'.jpg';

	// Cache the image if it doesn't already exist.
	if (!file_exists($profile_image)) {
	    $image_url = 'http://dropplets.com/profiles/?id='.$username.'';
	    $image = file_get_contents($image_url);
	    file_put_contents($cache.$username.'.jpg', $image);
	}
	
	// Return the image URL.
	return $profile_image;
}

function get_default_profile_img(){
	return "./templates/topcaver/topcaver.jpg";
}