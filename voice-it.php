<?php
/*
Plugin Name: voice-it-record-and-send-voice
Plugin Script: voice-it
Plugin URI: http://www.voice-it.biz/
Description: Voice-it allows you to record voice messages from your website and send them to you as mp3 email attachments. Voice-it is free and easy to install!
Version: 3.0
Author: Kumbe s.r.l.
Author URI: http://www.kumbe.it
Template by: http://web.forret.com/tools/wp-plugin.asp

=== RELEASE NOTES ===
= 1.0 =
* 2009-08-31
* Released the firs stable version.
= 2.0 =
* 2009-09-02
* checked compatibility with version 2.8.4
= 3.0 =
* 2009-09-11
* added the possibility to add voice comments to all comments in your blog !!!!!
* added support for en-EN, it-IT, es-ES
* added the possibility to customize some labels
*/

/**********************************************************/
/**************   HERE YOU CAN CUSTOMIZE  *****************/
/**********************************************************/

$voice_it_settings=array(
	"language"=>"en-EN",
	"leave_a_message"=>addslashes("Leave a voice comment"),
	"listen_a_message"=>addslashes("Listen the voice comment"),
	"download_a_message"=>addslashes("download and share"),
	"listen_a_message_or"=>addslashes("Listen an audio comment or"),
	"info_after_message"=>addslashes("You can save your comment, if you want you can add some more text, but be careful to don't remove or change [voice_it]....[/voice_it] tags"),
	);
	
/**********************************************************/
/**************   HERE YOU CAN CUSTOMIZE  *****************/
/**********************************************************/

/**********************************************************/
/**************   DO NOT CHANGE ANYTHING ******************/
/**********************************************************/
	
function voice_it_record_and_send_voice_init(){
	
	global $voice_it_settings;
	
	$result='
	<script type="text/javascript">
		var voice_it_record_and_send_voice_language="'.$voice_it_settings["language"].'";
	
		var voice_it_labels=new Array();
	
		voice_it_labels["leave_a_message"]="'.$voice_it_settings["leave_a_message"].'";
		voice_it_labels["listen_a_message"]="'.$voice_it_settings["listen_a_message"].'";
		voice_it_labels["download_a_message"]="'.$voice_it_settings["download_a_message"].'";
		voice_it_labels["info_after_message"]="'.$voice_it_settings["info_after_message"].'";
		voice_it_labels["listen_a_message_or"]="'.$voice_it_settings["listen_a_message_or"].'";
	
	</script>
			';
	$result.='<script type="text/javascript" src="http://www.voice-it.biz/files/getbyname/voice-it-record-and-send-voice.js"></script>';
	$result.='<script type="text/javascript" src="http://www.voice-it.biz/files/getbyname/anarchy.js"></script>';
		
	echo $result;
	
}

function voice_it_record_and_send_voice_comment_text($comment = '') {
	global $voice_it_settings;
	
    if($comment!=''){
		$matches=array();
    	$pattern = '/\[voice_it\](.*)\[\/voice_it\]/';
        preg_match_all($pattern, $comment, $matches);
        
        if(isset($matches[1])){
        	foreach($matches[1] as $token){
        		$pattern = '/\[voice_it\]' . $token . '\[\/voice_it\]/';
            	$download_url = '
            	<div class="voice_it_download_audio">
					<p>'.$voice_it_settings["listen_a_message_or"].'<a target="_blank" class="download" href="http://www.voice-it.biz/TEMPLATE/HOSTING_MEX/homepage?'.$token.'">'.$voice_it_settings["download_a_message"].'</a></p>
					<p>
						<a target="_blank" class="listen" href="http://audio.voice-it.biz/download/'.$token.'.mp3">'.$voice_it_settings["listen_a_message"].'</a>
					</p>
				</div>
				';
            	$comment = preg_replace($pattern, $download_url, $comment);
        	}
        }
    }
    return $comment;
}

add_filter('wp_head', 'voice_it_record_and_send_voice_init');
add_filter('admin_head', 'voice_it_record_and_send_voice_init');
add_filter('comment_text', 'voice_it_record_and_send_voice_comment_text'); 


?>