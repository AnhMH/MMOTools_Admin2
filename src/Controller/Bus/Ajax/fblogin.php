<?php

use App\Lib\Api;
use App\Lib\Log\AppLog;
use Cake\Core\Configure;

header('Content-Type: application/json');

$param = $this->request->data;
$id = Api::call(Configure::read('API.url_fbaccounts_gettokenurl'), $param);

$result = array(
    'status' => 'OK',
    'data' => ''
);
if (empty($id) || Api::getError()) {
    $result = array(
        'status' => 'ERROR',
        'data' => ''
    );
} else {
    $result['data'] = $id;
}

echo json_encode($result);
exit();