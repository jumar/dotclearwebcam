<?php
if (!defined('DC_RC_PATH')) { return; }
 
require dirname(__FILE__).'/_widgets.php';
 
class publicWebcamWidget
{
	public static function webcamWidget(&$w)
	{

		global $core;
		if ($w->homeonly && $core->url->type != 'default') {
			return;
		}

	    	$url=$w->url;
	    	$img='<img id="camImage" onError="serverDown()" src="'.$url.'?+ Math.random()" width="200" height="150" alt="Le lit d\'Antonin">';
	    	$start='<input type="button" id="startBt" value="On" onclick="startCam()"/>';
	    	$stop='<input type="button" id="stopBt" value="Off" onclick="stopCam()"/>';
		$link='<a href='.$w->source.'>Agrandir</a>';
		$script='<script type="text/javascript">
				document.getElementById("stopBt").disabled=true;
				var interval = 0;
				function serverDown()
				{
					var webcamContentDiv = document.getElementById("webcamContent");
					webcamContentDiv.innerHTML="<b><br/>Unavailable<b>"; 
				}

				function startCam()
				{
					interval = setInterval ( "getPic()", parseFloat('.$w->freq.'*1000) );
					document.getElementById("startBt").disabled=true;
					document.getElementById("stopBt").disabled=false;
				}

				function stopCam()
				{
					clearInterval(interval);
					document.getElementById("stopBt").disabled=true;
					document.getElementById("startBt").disabled=false;
				}

				function getPic()
				{
					document.getElementById("camImage").src="'.$w->url.'?"+ Math.random();
				}	
			</script>';
		return '<div class="webcam"><h2>'.$w->title.'</h2><div id="webcamContent"><br/>'.$img.'<br/>'.$start.$stop.'&nbsp;'.$link.$script.'</div></div>';
	}
}
?>
