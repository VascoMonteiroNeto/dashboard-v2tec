<?php

class MantisBTModernThemePlugin extends MantisPlugin {

  function register() {
    $this->name        = 'MantisBT Modern Theme';
    $this->description = 'A clean theme for MantisBT.';

    $this->version     = '1.0.1';
    $this->requires    = array(
      'MantisCore'       => '2.0.0',
    );

    $this->author      = 'Pol Maresma';
    $this->contact     = 'pol@polnetwork.com';
    $this->url         = 'http://www.polnetwork.com';
  }

  function hooks() {
    return array(
        'EVENT_LAYOUT_RESOURCES' => 'add_css'
    );
  }

  function add_css($p_event) {
      echo '<link rel="stylesheet" type="text/css" href="' . plugin_file('ModernTheme.css') . '" />' . "\n";
      echo '<link rel="stylesheet" type="text/css" href="' . plugin_file('fonts/css/ibm-plex.min.css') . '" />' . "\n";

  }

}