<?php
add_filter('bp_get_activity_content_body','bp_embed_img', 9);
add_filter('bp_get_activity_content','bp_embed_img', 9);
add_filter('bp_get_the_topic_post_content','bp_embed_img', 9);
function bp_embed_img($content) {

	// Fix needed to remove "bp_activity_make_nofollow_filter"

if (stripos($content, 'https') !== FALSE) {

 	$pattern = '!https://([a-z0-9\-\.\/\_]+\.(?:jpe?g|png|gif))!Ui';
    $replace='<img src="https://$1">';    
    return preg_replace($pattern,$replace,$content);

}

else {

 	$pattern = '!http://([a-z0-9\-\.\/\_]+\.(?:jpe?g|png|gif))!Ui';
    $replace='<img src="http://$1">';    
    return preg_replace($pattern,$replace,$content);

}
		

}
?>
