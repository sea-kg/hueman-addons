<?php
class HA_Shortcodes {
  static $instance;
  function __construct() {
      self::$instance =& $this;
      add_action( 'wp', array($this, 'ha_shortcodes_actions') );
  }

  function ha_shortcodes_actions() {
    load_template( HA_BASE_PATH . 'inc/shortcodes/shortcodes.php' );
  }
}//end of class