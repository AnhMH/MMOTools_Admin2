<?php if (!empty($data)): ?>
<?php foreach ($data as $val): ?>
<option value="<?php echo $val['id'];?>"><?php echo $val['name'];?></option>
<?php endforeach; ?>
<?php else: ?>
<option value="">-- Không có page nào --</option>
<?php endif; ?>


