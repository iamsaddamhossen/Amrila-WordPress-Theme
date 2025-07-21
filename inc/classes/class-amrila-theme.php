<?php
/**
 * Bootstraps the Theme.
 *
 * @package Amrila
 */

namespace AMRILA_THEME\Inc;

use AMRILA_THEME\Inc\Traits\Singleton;

class AMRILA_THEME {
    use Singleton;

    protected function __construct() {
        // load class.

        wp_die('Hello');
        $this->set_hooks();
    }

    protected function set_hooks() {
        // actions AND filters. 
        
    }   
}