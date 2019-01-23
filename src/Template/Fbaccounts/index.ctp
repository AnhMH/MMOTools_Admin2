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
                            <th><?php echo __('LABEL_IMAGE'); ?></th>
                            <th><?php echo __('LABEL_NAME'); ?></th>
                            <th><?php echo __('LABEL_TOKEN'); ?></th>
                            <th><?php echo __('LABEL_EMAIL'); ?></th>
                            <th><?php echo __('LABEL_CREATED'); ?></th>
                            <th><?php echo __('LABEL_STATUS'); ?></th>
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
                                    <td><img src="https://graph.facebook.com/<?php echo $val['fb_id']; ?>/picture?type=large" width="110"></td>
                                    <td><?php echo $val['name']; ?></td>
                                    <td><?php echo $this->Common->shortString($val['token'], 25) . '...'; ?></td>
                                    <td><?php echo $val['email']; ?></td>
                                    <td><?php echo date('Y-m-d H:i', $val['created']); ?></td>
                                    <td><?php echo !empty($val['is_live']) ? "<span class='label label-success'>Live</span>" : "<span class='label label-danger'>Die</span>";?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
                <div class="btn-group">
                    <button type="button" class="btn btn-info btn-addnew"><?php echo __('LABEL_ADD_NEW');?></button>
                </div>
                <div class="btn-group">
                    <button type="button" class="btn btn-primary btn-get-token"><?php echo __('LABEL_GET_TOKEN');?></button>
                </div>
                <div class="btn-group">
                    <button type="button" class="btn btn-success btn-check-live"><?php echo __('LABEL_CHECK_LIVE');?></button>
                </div>
                <div class="btn-group">
                    <button type="button" class="btn btn-danger btn-disable-custom"><?php echo __('LABEL_DELETE');?></button>
                </div>
            </div>
        </div>
    </div>
</div>
