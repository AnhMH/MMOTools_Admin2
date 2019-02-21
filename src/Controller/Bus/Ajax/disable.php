<?php

use App\Lib\Api;
use App\Lib\Log\AppLog;

$param = $this->request->data;
$controller = $param['controller'];
if (in_array($controller, array('autocommentpages'))) {
    $controller = 'autocomments';
}
$apiUrl = "{$controller}/disable";
$result = Api::call($apiUrl, $param);
if (empty($result) || Api::getError()) {
    AppLog::warning("Can not update", __METHOD__, $param);
    echo __('error');
}