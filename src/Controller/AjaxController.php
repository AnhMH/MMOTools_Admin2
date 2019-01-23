<?php

/* 
 * Ajax process
 */

namespace App\Controller;

class AjaxController extends AppController {
    
    public function initialize() {
        parent::initialize();
       // $this->autoRender = false;
    }
    
    /**
     * Disable action
     */
    public function disable() {
        $this->autoRender = false;
        include ('Bus/Ajax/disable.php');
    }
    
    /**
     * FB check token
     */
    public function fbchecktoken() {
        $this->autoRender = false;
        include ('Bus/Ajax/fbchecktoken.php');
    }
    
    /**
     * FB login
     */
    public function fblogin() {
        $this->autoRender = false;
        include ('Bus/Ajax/fblogin.php');
    }
    
    /**
     * FB update page
     */
    public function fbupdatepages() {
        $this->autoRender = false;
        include ('Bus/Ajax/fbupdatepage.php');
    }
}
