<?php
$status = array(
    0 => "<span class='label label-info'>Đang xử lý</span>",
    1 => "<span class='label label-success'>Thành công</span>",
    2 => "<span class='label label-danger'>Lỗi</span>",
);
?>
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th style="width:30%"><?php echo __('LABEL_TITLE');?>:</th>
                                <td><?php echo $data['title'];?></td>
                            </tr>
                            <tr>
                                <th><?php echo __('LABEL_CONTENT');?>:</th>
                                <td><textarea style="padding:10px;" cols="80" rows="10" disabled><?php echo $data['content'];?></textarea></td>
                            </tr>
                            <tr>
                                <th><?php echo __('LABEL_FB_TARGET_ID');?>:</th>
                                <td><a href="https://facebook.com/<?php echo $data['fb_id'];?>" target="_blank"><?php echo $data['fb_id'];?></a></td>
                            </tr>
                            <tr>
                                <th><?php echo __('LABEL_TOTAL_COMMENT');?>:</th>
                                <td><?php echo $data['total_comment'];?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="box-header">
                <h4>Danh sach comment</h4>
            </div>
            <div class="box-body">
                <table class="table table-bordered table-striped table-data">
                    <thead>
                        <tr>
                            <th><?php echo __('LABEL_IMAGE'); ?></th>
                            <th><?php echo __('LABEL_NAME'); ?></th>
                            <th><?php echo __('LABEL_FB_TARGET_ID'); ?></th>
                            <th><?php echo __('LABEL_CONTENT'); ?></th>
                            <th><?php echo __('LABEL_CREATED'); ?></th>
                            <th><?php echo __('LABEL_STATUS'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($data['posts'])): ?>
                            <?php foreach ($data['posts'] as $key => $val): ?>
                                <tr>
                                    <td><img src="https://graph.facebook.com/<?php echo $val['fb_account_fb_id']; ?>/picture?type=large" width="110"></td>
                                    <td><?php echo $val['fb_account_name']; ?></td>
                                    <td><a href="https://facebook.com/<?php echo $val['fb_post_id'];?>" target="_blank"><?php echo $val['fb_post_id'];?></a></td>
                                    <td><?php echo $val['content']; ?></td>
                                    <td><?php echo date('Y-m-d H:i', $val['time_start']); ?></td>
                                    <td><?php echo $status[$val['status']]; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>