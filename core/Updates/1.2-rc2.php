<?php
/**
 * Piwik - Open source web analytics
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 * @category Piwik
 * @package Updates
 */

namespace Piwik\Updates;

use Piwik\Updates;

/**
 * @package Updates
 */
class Updates_1_2_rc2 extends Updates
{
    static function update()
    {
        try {
            \Piwik\PluginsManager::getInstance()->activatePlugin('CustomVariables');
        } catch (\Exception $e) {
        }
    }
}

