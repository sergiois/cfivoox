<?php defined('_JEXEC') or die;

if (!$field->value || $field->value == '-1')
{
	return;
}

// get the folder name in images directory
$value = $field->value;
?>
<iframe id="audio_<?php echo $value; ?>" frameborder="0" allowfullscreen="" scrolling="no" style="height:200px; border:1px solid #EEE; box-sizing:border-box; width:100%;" class="cfivoox" src="https://www.ivoox.com/player_ej_<?php echo $value; ?>_4_1.html?c1=ff6600"></iframe>