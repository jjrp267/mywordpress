<?php
/**
 * MyBestPlugin
 *
 * @package       MYBESTPLUG
 * @author        javier
 * @license       gplv2
 * @version       1.0.0
 *
 * @wordpress-plugin
 * Plugin Name:   MyBestPlugin
 * Plugin URI:    http://localhost/miwordpress
 * Description:   my best plugin
 * Version:       1.0.0
 * Author:        javier
 * Author URI:    http://localhost
 * Text Domain:   mybestplugin
 * Domain Path:   /languages
 * License:       GPLv2
 * License URI:   https://www.gnu.org/licenses/gpl-2.0.html
 *
 * You should have received a copy of the GNU General Public License
 * along with MyBestPlugin. If not, see <https://www.gnu.org/licenses/gpl-2.0.html/>.
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) exit;
// Plugin name
define( 'MYBESTPLUG_NAME',			'MyBestPlugin' );

// Plugin version
define( 'MYBESTPLUG_VERSION',		'1.0.0' );

// Plugin Root File
define( 'MYBESTPLUG_PLUGIN_FILE',	__FILE__ );

// Plugin base
define( 'MYBESTPLUG_PLUGIN_BASE',	plugin_basename( MYBESTPLUG_PLUGIN_FILE ) );

// Plugin Folder Path
define( 'MYBESTPLUG_PLUGIN_DIR',	plugin_dir_path( MYBESTPLUG_PLUGIN_FILE ) );

// Plugin Folder URL
define( 'MYBESTPLUG_PLUGIN_URL',	plugin_dir_url( MYBESTPLUG_PLUGIN_FILE ) );

/**
 * Load the main class for the core functionality
 */
require_once MYBESTPLUG_PLUGIN_DIR . 'core/class-mybestplugin.php';

/**
 * The main function to load the only instance
 * of our master class.
 *
 * @author  javier
 * @since   1.0.0
 * @return  object|Mybestplugin
 */
function MYBESTPLUG() {
	return Mybestplugin::instance();
}

MYBESTPLUG();
