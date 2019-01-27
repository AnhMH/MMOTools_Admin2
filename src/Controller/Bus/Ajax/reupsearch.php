<?php

use App\Lib\Api;
use App\Lib\Log\AppLog;
use Cake\Core\Configure;

$param = $this->request->data;
$data = Api::call(Configure::read('API.url_fbaccounts_reupsearch'), $param);

$this->set('data', $data);
$this->set('param', $param);