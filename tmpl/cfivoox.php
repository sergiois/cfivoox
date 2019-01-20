<?php
/**
 * @package     Joomla.Plugin
 * @subpackage  Fields.Ivoox
 *
 * @copyright   Copyright (C) 2019 SergioIglesiasNET
 * @license     GNU General Public License v2.0
 * @author 		Sergio Iglesias (@sergiois)
 */

 defined('_JEXEC') or die;

if (!$field->value || $field->value == '-1')
{
	return;
}

$value = $field->value;

switch($field->fieldparams->get('player', 'default')){
	case 'html5':
	?>
	<iframe style="width:100%; height:200px;" class="cfivoox" frameborder="0" allowfullscreen="" scrolling="no" src="https://www.ivoox.com/player_ej_<?php echo $value; ?>_2_1.html"></iframe>
	<?php
	break;

	case 'html5mini':
	?>
	<iframe style="width:100%; height:48px;" class="cfivoox" frameborder="0" allowfullscreen="" scrolling="no" src="https://www.ivoox.com/player_ek_<?php echo $value; ?>_2_1.html"></iframe>
	<?php
	break;

	case 'default':
	default:
	?>
	<iframe id="audio_<?php echo $value; ?>" frameborder="0" allowfullscreen="" scrolling="no" style="width:100%; height:200px; border:1px solid #EEE; box-sizing:border-box;" class="cfivoox" src="https://www.ivoox.com/player_ej_<?php echo $value; ?>_4_1.html?c1=<?php echo str_replace('#','',$field->fieldparams->get('colorivoox', '#ff6600')); ?>"></iframe>
	<?php
	break;
}
?>