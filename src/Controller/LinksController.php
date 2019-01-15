<?php

namespace App\Controller;

use Cake\Event\Event;

/**
 * Links page
 */
class LinksController extends AppController {
    
    /**
     * Links page
     */
    public function index() {
        include ('Bus/Links/index.php');
    }
    
    /**
     * Add/update info
     */
    public function update($id = '') {
        include ('Bus/Links/update.php');
    }
}
