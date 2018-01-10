<?php
/*
 * 2007-2018 PrestaShop
 * 
 * NOTICE OF LICENSE
 * 
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 * 
 * DISCLAIMER
 * 
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 * 
 *  @author PrestaShop SA <contact@prestashop.com>
 *  @copyright  2007-2018 PrestaShop SA
 *  @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 *  International Registered Trademark & Property of PrestaShop SA
 */

namespace PrestaShop\Module\AutoUpgrade\Parameters;

class UpgradeConfigurationStorage extends FileConfigurationStorage
{
    /**
     * UpgradeConfiguration loader.
     *
     * @param string $configFilePath
     * @return \PrestaShop\Module\AutoUpgrade\Parameters\UpgradeConfiguration
     */
    public static function load($configFilePath = '')
    {
        return new UpgradeConfiguration(parent::load($configFilePath));
    }

    /**
     *
     * @param \PrestaShop\Module\AutoUpgrade\Parameters\UpgradeConfiguration $config
     * @param string $configFilePath Destination path of the onfig file
     * @return boolean
     */
    public static function save($config, $configFilePath)
    {
        if (!$config instanceof UpgradeConfiguration) {
            throw new \InvalidArgumentException('Config is not a instance of UpgradeConfiguration');
        }
        return parent::save($config->toArray(), $configFilePath);
    }
}