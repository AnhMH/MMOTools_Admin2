<?php
use App\Form\UpdatePostForm;
use App\Lib\Api;
use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;

// Create breadcrumb
$pageTitle = __('LABEL_FB_REUP_UPDATE');
$listPageUrl = h($this->BASE_URL . '/fbreups');
$this->Breadcrumb->setTitle($pageTitle)
    ->add(array(
        'link' => $listPageUrl,
        'name' => __('LABEL_FB_REUP_LIST'),
    ))
    ->add(array(
        'name' => $pageTitle,
    ));

$fbAccounts = Api::call(Configure::read('API.url_fbaccounts_all'), array(
    'is_live' => 1
));
$reupTypes = array(
    '1' => 'Youtube Keyword',
    '11' => 'Youtube Channel',
    '111' => 'Youtube Video',
    '2' => 'Facebook Page ID',
    '22' => 'Facebook Video',
    '3' => 'Dailymotion'
);
$limitConfig = array(
    10,
    20,
    30,
    50
);

$fbPages = Api::call(Configure::read('API.url_fbpages_all'), array());

$this->set(compact(
    'fbAccounts',
        'fbPages',
        'reupTypes',
        'limitConfig'
));