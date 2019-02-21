<?php

namespace App\Controller;

use Cake\Event\Event;

/**
 * Autocomments page
 */
class AutocommentsController extends AppController {
    
    /**
     * Autocomments page
     */
    public function index() {
        include ('Bus/Autocomments/index.php');
    }
    
    /**
     * Add/update info
     */
    public function update($id = '') {
        include ('Bus/Autocomments/update.php');
    }
    
    /**
     * Add/update info
     */
    public function detail($id = '') {
        include ('Bus/Autocomments/detail.php');
    }
    
    /**
     * Add/update multi
     */
    public function updatemulti() {
        include ('Bus/Autocomments/updatemulti.php');
    }
}
