<?php
/**
 * @package     Joomla.Plugin
 * @subpackage  Fields.Cfivoox
 */

defined('_JEXEC') or die;

use Joomla\CMS\Extension\PluginInterface;
use Joomla\CMS\Factory;
use Joomla\CMS\Plugin\PluginHelper;
use Joomla\DI\Container;
use Joomla\DI\ServiceProviderInterface;
use Joomla\Event\DispatcherInterface;
use SergioIglesias\Plugin\Fields\Cfivoox\Extension\Cfivoox;

return new class implements ServiceProviderInterface {
    public function register(Container $container)
    {
        $container->set(
            PluginInterface::class,
            function (Container $container) {
                $plugin = new Cfivoox(
                    $container->get(DispatcherInterface::class),
                    (array) PluginHelper::getPlugin('fields', 'cfivoox')
                );

                $plugin->setApplication(Factory::getApplication());

                return $plugin;
            }
        );
    }
};

