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

$rawValue = trim((string) $field->value);
$value = null;

if (preg_match('~(?:go\.ivoox\.com/rf/|_rf_|player_ej_|player_ek_)([0-9]+)~i', $rawValue, $match))
{
	$value = $match[1];
}
elseif (preg_match('~^[0-9]+$~', $rawValue))
{
	$value = $rawValue;
}

if (!$value)
{
	return;
}

$plugin = Joomla\CMS\Plugin\PluginHelper::getPlugin('fields', 'cfivoox');
$pluginParams = new Joomla\Registry\Registry($plugin ? $plugin->params : '{}');
$defaultColor = (string) $pluginParams->get('default_colorivoox', '#ff6600');
$defaultPlayer = (string) $pluginParams->get('default_player', 'default');

$value = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
$fieldColor = trim((string) $field->fieldparams->get('colorivoox', ''));
$color = preg_replace('/[^a-fA-F0-9]/', '', $fieldColor !== '' ? $fieldColor : $defaultColor);
$color = preg_match('/^([a-fA-F0-9]{3}|[a-fA-F0-9]{6})$/', $color) ? $color : 'ff6600';
$fieldPlayer = (string) $field->fieldparams->get('player', 'global');
$player = $fieldPlayer === 'global' || $fieldPlayer === '' ? $defaultPlayer : $fieldPlayer;

switch ($player)
{
	case 'html5':
		$src = 'https://www.ivoox.com/player_ej_' . $value . '_2_1.html?c1=' . $color;
		$style = 'width:100%; height:200px; border:0; box-sizing:border-box;';
		break;

	case 'html5mini':
		$src = 'https://www.ivoox.com/player_ek_' . $value . '_2_1.html?c1=' . $color;
		$style = 'width:100%; height:48px; border:0; box-sizing:border-box;';
		break;

	case 'simplelink':
		?>
		<p class="cfivoox cfivoox-link">
			<a href="https://go.ivoox.com/rf/<?php echo $value; ?>" target="_blank" rel="noopener noreferrer">
				<?php echo htmlspecialchars(Joomla\CMS\Language\Text::_('PLG_FIELDS_CFIVOOX_AUDIO_LINK_LABEL'), ENT_QUOTES, 'UTF-8'); ?>
			</a>
		</p>
		<?php
		return;

	case 'default':
	default:
		$src = 'https://www.ivoox.com/player_ej_' . $value . '_6_1.html?c1=' . $color;
		$style = 'width:100%; height:200px; border:1px solid #EEE; box-sizing:border-box;';
		break;
}
?>
<iframe title="iVoox audio player" id="audio_<?php echo $value; ?>" frameborder="0" allowfullscreen="" scrolling="no" loading="lazy" style="<?php echo $style; ?>" class="cfivoox" src="<?php echo $src; ?>"></iframe>
