=== Plugin Name ===
Contributors: voice-it
Donate link: http://www.voice-it.biz
Tags: voice,mp3,audio,feedback,audio comment,audio post,voice comment
Requires at least: 2.0
Tested up to: 2.8.4
Stable tag: 3.3

Voice-it allows you to record voice comments related to your blog and listen them directly into your blog.

== Description ==

Voice-it allows you to record voice comments related to your blog and listen them directly into your blog.
It's also possible to record voice messages and send it to you or your friends by mail as mp3 attachments.
You can use it in your website, on facebook or download the widget for other platform.
Try it and send us your message, or send a voice messages to your friend! Isn't easy?

Possible usage:

    * for who is tyred to write text messages
    * to receive feedback, comments or suggestion by web site.
    * to receive and publish dedication
    * to create a Podcast of fans.
    * to vote a "singer of the week" ah ah
    * to record lessons and publish it later
    * to record events, speeches and publish it later
    * to scream out your opinions
    * to tell a jocke to your friends
    * to convert a text to mp3 format
    * to send a MEMO
    * voicemail from your website
    * support archive ticket

Activation

To have a working copy of the voice-it plugin you have to go to [Voice-it](http://www.voice-it.biz/homepage "Voice-it web site") , and register a new user using your website hostname.

Be careful, the name of the host must bu without / and any http as without any file name.

To help you here there are some examples:

http://www.miosito.com/wordpress.php became -> www.miosito.com

https://wordpress.test.foo/ became -> wordpress.test.foo 

== Installation ==

= version 3.0 and newest = 
* download the plugin from [Voice-it plugin](http://www.voice-it.biz/wordpress "Voice-it plugin")
* unzip the file voice-it.zip into the folder (your_wordpress_dir)/wp-content/plugins/
* go into wordpress admin area menu plugin -> select voice-it and activate it
* if you want to customize the language or simply change some labels, you can open the plugin using the editor (or edit the file voice-it.php) and there you find
   
$voice_it_settings=array(
	"language"=>"en-EN",
	"leave_a_message"=>addslashes("Leave a voice comment"),
	"listen_a_message"=>addslashes("Listen the voice comment"),
	"download_a_message"=>addslashes("download and share"),
	"listen_a_message_or"=>addslashes("Listen an audio comment or"),
	"info_after_message"=>addslashes("You can save your comment, if you want you can add some more text, but be careful to don't remove or change [voice_it]....[/voice_it] tags"),
	);
	
	
	You can add your changes, supported languages are  en-EN, it-IT, es-ES
	
Activation

To have a working copy of the voice-it plugin you have to go to [Voice-it](http://www.voice-it.biz/homepage "Voice-it web site") , and register a new user using your website hostname.

Be careful, the name of the host must bu without / and any http as without any file name.

To help you here there are some examples:

http://www.miosito.com/wordpress.php became -> www.miosito.com

https://wordpress.test.foo/ became -> wordpress.test.foo 

= version 2.0 and older = 
* download the plugin from [Voice-it plugin](http://www.voice-it.biz/wordpress "Voice-it plugin")
* unzip the file voice-it.zip into the folder (your_wordpress_dir)/wp-content/plugins/
* go into wordpress admin area menu plugin -> select voice-it and activate it
* put the following code into your template where you want:

echo voice\_it\_showhtml("en-EN");


Activation

To have a working copy of the voice-it plugin you have to go to [Voice-it](http://www.voice-it.biz/homepage "Voice-it web site") , and register a new user using your website hostname.

Be careful, the name of the host must bu without / and any http as without any file name.

To help you here there are some examples:

http://www.miosito.com/wordpress.php became -> www.miosito.com

https://wordpress.test.foo/ became -> wordpress.test.foo 

== Frequently Asked Questions ==

FAQ and help are available at [Voice-it](http://www.voice-it.biz/homepage "Voice-it web site")

== Screenshots ==

Screenshots,video and demo are available at [Voice-it](http://www.voice-it.biz/homepage "Voice-it web site")

== Changelog ==

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
= 3.1 =
* default label listen_a_message_or changed 
= 3.2 =
* some updates at the readme.txt
