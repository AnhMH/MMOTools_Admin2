<?php

namespace App\Controller;

use Cake\Event\Event;

/**
 * Fbaccounts page
 */
class FbaccountsController extends AppController {
    
    /**
     * Fbaccounts page
     */
    public function index() {
        include ('Bus/Fbaccounts/index.php');
    }
    
    /**
     * Add/update info
     */
    public function update($id = '') {
        include ('Bus/Fbaccounts/update.php');
    }
    
    /**
     * Get token
     */
    public function gettoken() {
        include ('Bus/Fbaccounts/gettoken.php');
    }
    
    /**
     * Fb login
     */
    public function fblogin() {
        include ('Bus/Fbaccounts/fblogin.php');
    }
}
