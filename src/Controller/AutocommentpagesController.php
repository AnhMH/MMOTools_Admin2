<?php

namespace App\Controller;

use Cake\Event\Event;

/**
 * Autocomments page
 */
class AutocommentpagesController extends AppController {
    
    /**
     * Autocomments page
     */
    public function index() {
        include ('Bus/Autocommentpages/index.php');
    }
    
    /**
     * Add/update info
     */
    public function update($id = '') {
        include ('Bus/Autocommentpages/update.php');
    }
    
    /**
     * Add/update info
     */
    public function detail($id = '') {
        include ('Bus/Autocommentpages/detail.php');
    }
}
