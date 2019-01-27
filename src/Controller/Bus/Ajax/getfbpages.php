<?php

use App\Lib\Api;
use App\Lib\Log\AppLog;
use Cake\Core\Configure;

$param = $this->request->data;
$data = Api::call(Configure::read('API.url_fbpages_all'), $param);

$this->set('data', $data);