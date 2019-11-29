<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$hook['post_controller_constructor'] = array(
    'class'    => 'LanguageLoader',
    'function' => 'initialize',
    'filename' => 'LanguageLoader.php',
    'filepath' => 'hooks'
);
