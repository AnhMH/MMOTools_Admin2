<?php
use App\Lib\Api;
use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;

// Load detail
$data = null;
if (!empty($id)) {
    // Edit
    $param = array(
        'id' => $id,
        'get_list_comment' => 1
    );
    $data = Api::call(Configure::read('API.url_autocomments_detail'), $param);
    $this->Common->handleException(Api::getError());
    if (empty($data)) {
        return $this->Flash->error(__('MESSAGE_DATA_NOT_EXIST'));
    }
    
    $data['fb_postid'] = !empty($data['fb_id']) ? $data['fb_id'] : '';
    $pageTitle = __('LABEL_DETAIL');
} else {
    // Create new
    die();
}

// Create breadcrumb
$listPageUrl = h($this->BASE_URL . '/autocommentpages');
$this->Breadcrumb->setTitle($pageTitle)
    ->add(array(
        'link' => $listPageUrl,
        'name' => __('LABEL_FB_AUTO_COMMENT_LIST'),
    ))
    ->add(array(
        'name' => $pageTitle,
    ));

$this->set('data', $data);

//echo '<pre>';
//print_r($data);
//die();