<?php

use App\Form\UpdatePostForm;
use App\Lib\Api;
use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;

// Load detail
$data = null;
if (!empty($id)) {
    // Edit
    $param['id'] = $id;
    $data = Api::call(Configure::read('API.url_autocomments_detail'), $param);
    $this->Common->handleException(Api::getError());
    if (empty($data)) {
        return $this->Flash->error(__('MESSAGE_DATA_NOT_EXIST'));
    }
    
    $data['fb_postid'] = !empty($data['fb_id']) ? $data['fb_id'] : '';
    $pageTitle = __('LABEL_FB_AUTO_COMMENT_UPDATE');
} else {
    // Create new
    $pageTitle = __('LABEL_ADD_NEW');
}

// Create breadcrumb
$listPageUrl = h($this->BASE_URL . '/autocomments');
$this->Breadcrumb->setTitle($pageTitle)
    ->add(array(
        'link' => $listPageUrl,
        'name' => __('LABEL_FB_AUTO_COMMENT_LIST'),
    ))
    ->add(array(
        'name' => $pageTitle,
    ));

// Create Update form 
$form = new UpdatePostForm();
$this->UpdateForm->reset()
    ->setModel($form)
    ->setData($data)
    ->setAttribute('autocomplete', 'off')
    ->addElement(array(
        'id' => 'id',
        'type' => 'hidden',
        'label' => __('id'),
    ))
    ->addElement(array(
        'id' => 'type',
        'label' => __('LABEL_TYPE'),
        'options' => Configure::read('Config.autoCommentTypes')
    ))
    ->addElement(array(
        'id' => 'fb_postid',
        'label' => __('LABEL_FB_TARGET_ID'),
        'type' => 'text'
    ))
    ->addElement(array(
        'id' => 'content',
        'label' => __('LABEL_CONTENT'),
        'type' => 'textarea',
        'rows' => 10
    ))
    ->addElement(array(
        'id' => 'is_repeat',
        'label' => __('LABEL_IS_REPEAT'),
        'options' => Configure::read('Config.noYes')
    ))
    ->addElement(array(
        'id' => 'time_repeat',
        'label' => __('LABEL_TIME_REPEAT'),
        'options' => Configure::read('Config.timeRepeat')
    ))
    ->addElement(array(
        'type' => 'submit',
        'value' => __('LABEL_SAVE'),
        'class' => 'btn btn-primary',
    ))
    ->addElement(array(
        'type' => 'submit',
        'value' => __('LABEL_CANCEL'),
        'class' => 'btn',
        'onclick' => "return back();"
    ));

// Valdate and update
if ($this->request->is('post')) {
    // Trim data
    $data = $this->request->data();
    foreach ($data as $key => $value) {
        if (is_scalar($value)) {
            $data[$key] = trim($value);
        }
    }
    // Validation
    if ($form->validate($data)) {
        // Call API
        $id = Api::call(Configure::read('API.url_autocomments_addupdate'), $data);
        $error = Api::getError();
        if (!empty($id) && !$error) {            
            $this->Flash->success(__('MESSAGE_SAVE_OK'));
            return $this->redirect("{$this->BASE_URL}/{$this->controller}");
        } else {
            return $this->Flash->error(__('MESSAGE_SAVE_NG'));
        }
    }
}