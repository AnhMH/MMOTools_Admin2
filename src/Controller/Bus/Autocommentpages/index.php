<?php
use App\Lib\Api;
use Cake\Core\Configure;

$this->doGeneralAction();

// Create breadcrumb
$pageTitle = __('LABEL_FB_AUTO_COMMENT_LIST');
$this->Breadcrumb->setTitle($pageTitle)
        ->add(array(
            'name' => $pageTitle,
        ));

// Create search form
$param = $this->getParams(array(
    'disable' => 0,
    'type' => 2
));

$result = Api::call(Configure::read('API.url_autocomments_list'), $param);
$total = !empty($result['total']) ? $result['total'] : 0;
$data = !empty($result['data']) ? $result['data'] : array();

$this->set('pageTitle', $pageTitle);
$this->set('param', $param);
$this->set('data', $data);
