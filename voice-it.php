<?php
/*
Plugin Name: voice-it
Plugin Script: voice-it
Plugin URI: http://www.voice-it.biz/
Description: Voice-it allows you to record voice messages from your website and send them to you as mp3 email attachments. Voice-it is free and easy to install!
Version: 2.0
Author: Kumbe s.r.l.
Author URI: http://www.kumbe.it
Template by: http://web.forret.com/tools/wp-plugin.asp

=== RELEASE NOTES ===
2009-08-31 - v1.0 - first version
2009-09-02 - v2.0 - checked compatibiluty with newest version

*/

// uncomment next line if you need functions in external PHP script;
// include_once(dirname(__FILE__).'/some-library-in-same-folder.php');

/***
 * @param $PARAM_localization language
 * @param $PARAM_cliversion type of client
 */
function voice_it_showhtml($PARAM_localization="en-EN",$PARAM_cliversion="website2") {

$server_name = $_SERVER['SERVER_NAME'];
	
$html='
<div id="voiceit_container">
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.#version=10,0,0,0" height="163" width="233">
<param name="movie" value="http://www.voice-it.biz/files/getbyname/VOICE-IT.swf?PARAM_host='.$server_name.'&PARAM_cliversion='.$PARAM_cliversion.'&PARAM_localization='.$PARAM_localization.'"><param name="id" value="movie"><param name="quality" value="best"><param name="play" value="true"><param name="wmode" value="transparent"><embed height="163" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" src="http://www.voice-it.biz/files/getbyname/VOICE-IT.swf?PARAM_host='.$server_name.'&PARAM_cliversion='.$PARAM_cliversion.'&PARAM_localization='.$PARAM_localization.'" type="application/x-shockwave-flash" width="233" quality="best" name="movie" id="movie"  wmode="transparent">
</object>
</div>
';

return $html;
}



?>