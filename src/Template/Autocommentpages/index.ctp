<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-body">
                <table class="table table-bordered table-striped table-data">
                    <thead>
                        <tr>
                            <th class="checkbox_item">
                                <input type="checkbox" onclick="checkAll('items[]', this.checked ? 1 : 0)">
                            </th>
                            <th><?php echo __('LABEL_TITLE'); ?></th>
                            <th><?php echo __('LABEL_PAGE_ID'); ?></th>
                            <th><?php echo __('LABEL_TOTAL_COMMENT'); ?></th>
                            <th><?php echo __('LABEL_TIME_REPEAT'); ?></th>
<!--                            <th><?php echo __('LABEL_TIME_START'); ?></th>
                            <th><?php echo __('LABEL_TIME_END'); ?></th>-->
                            <th><?php echo __('LABEL_CREATED'); ?></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($data)): ?>
                            <?php foreach ($data as $key => $val): ?>
                                <tr>
                                    <td>
                                        <div class="td_input_checkbox">
                                            <input name="items[]" value="<?php echo $val['id']; ?>" type="checkbox" id="item">
                                        </div>
                                    </td>
                                    <td><?php echo $val['title']; ?></td>
                                    <td><a href="https://facebook.com//<?php echo $val['fb_id']; ?>/" target="_blank"><?php echo $val['fb_id']; ?></a></td>
                                    <td><?php echo $val['total_comment']; ?></td>
                                    <td><?php echo $val['time_repeat']; ?></td>
<!--                                    <td><?php echo !empty($val['time_start']) ? date('Y-m-d H:i', $val['time_start']) : '-'; ?></td>
                                    <td><?php echo !empty($val['time_end']) ? date('Y-m-d H:i', $val['time_end']) : '-'; ?></td>-->
                                    <td><?php echo !empty($val['created']) ? date('Y-m-d H:i', $val['created']) : '-'; ?></td>
                                    <td><a href="<?php echo $BASE_URL.'/autocommentpages/detail/'.$val['id'];?>"><span class="label label-primary"><?php echo __('LABEL_DETAIL');?></span></a></td>
                                    <td><a href="<?php echo $BASE_URL.'/autocommentpages/update/'.$val['id'];?>"><span class="label label-info"><?php echo __('LABEL_EDIT');?></span></a></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
                <div class="btn-group">
                    <button type="button" class="btn btn-info btn-addnew"><?php echo __('LABEL_ADD_NEW');?></button>
                </div>
                <div class="btn-group">
                    <button type="button" class="btn btn-danger btn-disable-custom"><?php echo __('LABEL_DELETE');?></button>
                </div>
            </div>
        </div>
    </div>
</div>
