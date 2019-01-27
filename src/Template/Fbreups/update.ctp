<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-body">
                <div class="form-group">
                    <label><?php echo __('LABEL_SOURCE');?></label>
                    <input class="form-control" id="reupSource" value=""/>
                </div>
                <div class="form-group">
                    <label><?php echo __('LABEL_TYPE');?></label>
                    <select class="form-control" id="reupType">
                        <?php if (!empty($reupTypes)): ?>
                        <?php foreach ($reupTypes as $k => $v): ?>
                        <option value="<?php echo $k; ?>"><?php echo $v;?></option>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label><?php echo __('LABEL_LIMIT');?></label>
                    <select class="form-control" id="reupLimit">
                        <?php if (!empty($limitConfig)): ?>
                        <?php foreach ($limitConfig as $k => $v): ?>
                        <option value="<?php echo $v; ?>"><?php echo $v;?></option>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </select>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" id="reupSearch"><?php echo __('LABEL_SEARCH');?></button>
                </div>
            </div>
        </div>
        
        <div class="box">
            <div class="box-header">
                <h4><?php echo __('LABEL_RESULT');?></h4>
            </div>
            <div class="box-body" id="reupSearchResult">
                
            </div>
        </div>
        
        <div class="box">
            <div class="box-body">
                <div class="form-group">
                    <label><?php echo __('LABEL_ACCOUNT');?></label>
                    <select class="form-control" id="fbAccountSelect">
                        <option value=""><?php echo __('LABEL_ALL');?></option>
                        <?php if (!empty($fbAccounts)): ?>
                        <?php foreach ($fbAccounts as $fb): ?>
                        <option value="<?php echo $fb['id']; ?>"><?php echo $fb['name'];?></option>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label><?php echo __('LABEL_PAGE');?></label>
                    <select class="form-control" id="fbPageSelect">
                        <?php if (!empty($fbPages)): ?>
                        <?php foreach ($fbPages as $fb): ?>
                        <option value="<?php echo $fb['id']; ?>"><?php echo $fb['name'];?></option>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </select>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" id="reupSubmit"><?php echo __('LABEL_SUBMIT');?></button>
                </div>
            </div>
        </div>
    </div>
</div>
