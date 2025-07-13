<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) exit;
if ( ! class_exists( 'Mybestplugin' ) ) :

	/**
	 * Main Mybestplugin Class.
	 *
	 * @package		MYBESTPLUG
	 * @subpackage	Classes/Mybestplugin
	 * @since		1.0.0
	 * @author		javier
	 */
	final class Mybestplugin {

		/**
		 * The real instance
		 *
		 * @access	private
		 * @since	1.0.0
		 * @var		object|Mybestplugin
		 */
		private static $instance;

		/**
		 * MYBESTPLUG helpers object.
		 *
		 * @access	public
		 * @since	1.0.0
		 * @var		object|Mybestplugin_Helpers
		 */
		public $helpers;

		/**
		 * MYBESTPLUG settings object.
		 *
		 * @access	public
		 * @since	1.0.0
		 * @var		object|Mybestplugin_Settings
		 */
		public $settings;

		/**
		 * Throw error on object clone.
		 *
		 * Cloning instances of the class is forbidden.
		 *
		 * @access	public
		 * @since	1.0.0
		 * @return	void
		 */
		public function __clone() {
			_doing_it_wrong( __FUNCTION__, __( 'You are not allowed to clone this class.', 'mybestplugin' ), '1.0.0' );
		}

		/**
		 * Disable unserializing of the class.
		 *
		 * @access	public
		 * @since	1.0.0
		 * @return	void
		 */
		public function __wakeup() {
			_doing_it_wrong( __FUNCTION__, __( 'You are not allowed to unserialize this class.', 'mybestplugin' ), '1.0.0' );
		}

		/**
		 * Main Mybestplugin Instance.
		 *
		 * Insures that only one instance of Mybestplugin exists in memory at any one
		 * time. Also prevents needing to define globals all over the place.
		 *
		 * @access		public
		 * @since		1.0.0
		 * @static
		 * @return		object|Mybestplugin	The one true Mybestplugin
		 */
		public static function instance() {
			if ( ! isset( self::$instance ) && ! ( self::$instance instanceof Mybestplugin ) ) {
				self::$instance					= new Mybestplugin;
				self::$instance->base_hooks();
				self::$instance->includes();
				self::$instance->helpers		= new Mybestplugin_Helpers();
				self::$instance->settings		= new Mybestplugin_Settings();

				//Fire the plugin logic
				new Mybestplugin_Run();

				/**
				 * Fire a custom action to allow dependencies
				 * after the successful plugin setup
				 */
				do_action( 'MYBESTPLUG/plugin_loaded' );
			}

			return self::$instance;
		}

		/**
		 * Include required files.
		 *
		 * @access  private
		 * @since   1.0.0
		 * @return  void
		 */
		private function includes() {
			require_once MYBESTPLUG_PLUGIN_DIR . 'core/includes/classes/class-mybestplugin-helpers.php';
			require_once MYBESTPLUG_PLUGIN_DIR . 'core/includes/classes/class-mybestplugin-settings.php';

			require_once MYBESTPLUG_PLUGIN_DIR . 'core/includes/classes/class-mybestplugin-run.php';
		}

		/**
		 * Add base hooks for the core functionality
		 *
		 * @access  private
		 * @since   1.0.0
		 * @return  void
		 */
		private function base_hooks() {
			add_action( 'plugins_loaded', array( self::$instance, 'load_textdomain' ) );
		}

		/**
		 * Loads the plugin language files.
		 *
		 * @access  public
		 * @since   1.0.0
		 * @return  void
		 */
		public function load_textdomain() {
			load_plugin_textdomain( 'mybestplugin', FALSE, dirname( plugin_basename( MYBESTPLUG_PLUGIN_FILE ) ) . '/languages/' );
		}

	}

endif; // End if class_exists check.