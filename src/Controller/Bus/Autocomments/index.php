<?php
use App\Lib\Api;
use Cake\Core\Configure;

$this->doGeneralAction();
$pageSize = Configure::read('Config.PageSize');

// Create breadcrumb
$pageTitle = __('LABEL_FB_AUTO_COMMENT_LIST');
$this->Breadcrumb->setTitle($pageTitle)
        ->add(array(
            'name' => $pageTitle,
        ));

// Create search form
$fbAccounts = $this->Common->arrayKeyValue(Api::call(Configure::read('API.url_fbaccounts_all'), array()), 'id', 'name');
$languageType = Configure::read('Config.languageType');
$param = $this->getParams(array(
    'limit' => $pageSize,
    'disable' => 0,
    'language_type' => 1
));
$dataSearch = array(
    'limit' => $pageSize
);
$this->SearchForm
        ->setAttribute('type', 'get')
        ->setData($dataSearch)
        ->addElement(array(
            'id' => 'fb_account_id',
            'label' => __('LABEL_FB_ACCOUNT'),
            'options' => $fbAccounts,
            'empty' => 'All'
        ))
        ->addElement(array(
            'id' => 'limit',
            'label' => __('LABEL_LIMIT'),
            'options' => Configure::read('Config.searchPageSize'),
        ))
        ->addElement(array(
            'type' => 'submit',
            'value' => __('LABEL_SEARCH'),
            'class' => 'btn btn-primary',
        ));

$result = Api::call(Configure::read('API.url_autocomments_list'), $param);
$total = !empty($result['total']) ? $result['total'] : 0;
$data = !empty($result['data']) ? $result['data'] : array();

// Show data
$this->SimpleTable
        ->setDataset($data)
        ->addColumn(array(
            'id' => 'item',
            'name' => 'items[]',
            'type' => 'checkbox',
            'value' => '{id}',
            'width' => 20,
        ))
        ->addColumn(array(
            'id' => 'id',
            'title' => __('ID'),
            'type' => 'link',
            'href' => $this->BASE_URL . '/' . $this->controller . '/update/{id}',
            'empty' => ''
        ))
        ->addColumn(array(
            'id' => 'fb_id',
            'title' => __('LABEL_FB_TARGET_ID'),
            'type' => 'link',
            'href' => 'https://facebook.com/'.'{fb_id}',
            'target' => '_blank',
            'empty' => ''
        ))
        ->addColumn(array(
            'id' => 'fb_account_name',
            'title' => __('LABEL_FB_ACCOUNT'),
            'type' => 'link',
            'href' => 'https://facebook.com/'.'{fb_account_fb_id}',
            'target' => '_blank',
            'empty' => ''
        ))
        ->addColumn(array(
            'id' => 'is_repeat',
            'title' => __('LABEL_IS_REPEAT'),
            'rules' => Configure::read('Config.noYes')
        ))
        ->addColumn(array(
            'id' => 'time_repeat',
            'title' => __('LABEL_TIME_REPEAT'),
            'empty' => ''
        ))
        ->addColumn(array(
            'id' => 'is_comment',
            'title' => __('LABEL_IS_COMMENT'),
            'rules' => Configure::read('Config.noYes'),
            'empty' => 'No'
        ))
        ->addColumn(array(
            'id' => 'total_comment',
            'title' => __('LABEL_TOTAL_COMMENT'),
            'empty' => '0'
        ))
        ->addColumn(array(
            'id' => 'type',
            'title' => __('LABEL_TYPE'),
            'rules' => Configure::read('Config.autoCommentTypes'),
            'empty' => '-'
        ))
        ->addColumn(array(
            'id' => 'created',
            'type' => 'dateonly',
            'title' => __('LABEL_CREATED'),
            'width' => 100,
            'empty' => '',
        ))
        ->addColumn(array(
            'id' => 'disable',
            'type' => 'checkbox',
            'title' => __('LABEL_DELETE'),
            'toggle' => true,
            'toggle-onstyle' => "primary",
            'toggle-offstyle' => "danger",
            'toggle-options' => array(
                "data-on" => __("LABEL_ENABLE"),
                "data-off" => __("LABEL_DELETE"),
            ),
            'rules' => array(
                '0' => '',
                '1' => 'checked'
            ),
            'empty' => 0,
            'width' => 50,
        ))
        ->addButton(array(
            'type' => 'submit',
            'value' => __('LABEL_ADD_NEW'),
            'class' => 'btn btn-success btn-addnew',
        ))
        ->addButton(array(
            'type' => 'submit',
            'value' => __('LABEL_ADD_NEW_MULTI'),
            'class' => 'btn btn-success btn-addnew-multi',
        ))
        ->addButton(array(
            'type' => 'submit',
            'value' => __('LABEL_DELETE'),
            'class' => 'btn btn-danger btn-disable',
        ));

$this->set('pageTitle', $pageTitle);
$this->set('total', $total);
$this->set('param', $param);
$this->set('limit', $param['limit']);
$this->set('data', $data);
