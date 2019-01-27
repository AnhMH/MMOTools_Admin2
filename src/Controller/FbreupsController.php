<?php

namespace App\Controller;

use Cake\Event\Event;

/**
 * Fbreups page
 */
class FbreupsController extends AppController {
    
    /**
     * Fbreups page
     */
    public function index() {
        include ('Bus/Fbreups/index.php');
    }
    
    /**
     * Add/update info
     */
    public function update($id = '') {
        include ('Bus/Fbreups/update.php');
    }
}
