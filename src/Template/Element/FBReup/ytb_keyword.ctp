<table class="table table-bordered table-striped table-data">
    <thead>
        <tr>
            <th class="checkbox_item">
                <input type="checkbox" onclick="checkAll('items[]', this.checked ? 1 : 0)">
            </th>
            <th><?php echo __('LABEL_IMAGE'); ?></th>
            <th><?php echo __('LABEL_TITLE'); ?></th>
            <th><?php echo __('LABEL_CHANNEL_ID'); ?></th>
            <th><?php echo __('LABEL_DESCIPTION'); ?></th>
            <th><?php echo __('LABEL_CREATED'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($data['items'])): ?>
            <?php foreach ($data['items'] as $key => $val): ?>
            <?php
                $_id = $val['id']['videoId'];
                $_image = $val['snippet']['thumbnails']['high']['url'];
                $_channelId = $val['snippet']['channelId'];
                $_title = $val['snippet']['title'];
                $_channelTitle = $val['snippet']['channelTitle'];
                $_description = $val['snippet']['description'];
                $_created = $val['snippet']['publishedAt'];
                $_videoUrl = 'https://www.youtube.com/watch?v='.$_id;
                $_channelUrl = 'https://www.youtube.com/channel/'.$_channelId;
            ?>
                <tr>
                    <td>
                        <div class="td_input_checkbox">
                            <input name="items[]" value="<?php echo $_id; ?>" type="checkbox" id="item">
                        </div>
                    </td>
                    <td><img src="<?php echo $_image;?>" width="110"></td>
                    <td><a href="<?php echo $_videoUrl;?>" target="_blank"><?php echo $_title; ?></a></td>
                    <td><a href="<?php echo $_channelUrl;?>" target="_blank"><?php echo $_channelTitle; ?></a></td>
                    <td><?php echo $this->Common->shortString($_description, 100); ?></td>
                    <td><?php echo $_created; ?></td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </tbody>
</table>
