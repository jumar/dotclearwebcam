<?php
if (!defined('DC_RC_PATH')) { return; }
 
$core->addBehavior('initWidgets',
	array('webcamWidgetBehaviors','initWidgets'));
 
class webcamWidgetBehaviors
{
	public static function initWidgets(&$w)
	{
		$w->create('WebcamWidget',__('Webcam'),
			array('publicWebcamWidget','webcamWidget'));

		$w->WebcamWidget->setting('title',__('Title:'),
			'default value','text');
 
		$w->WebcamWidget->setting('url',__('Image URL:'),
			'www.example.com/webcam','text');
 
		$w->WebcamWidget->setting('freq',__('Update frequency (seconds):'),
			'0.5', 'text');
		
		$w->WebcamWidget->setting('source',__('Larger view url:'),
			'www.example.com/webcam', 'text');
		$w->WebcamWidget->setting('homeonly',__('Home page only'),
			1, 'check');
	}
}
?>
