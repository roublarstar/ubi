<div id="<?php echo $key; ?>Message" class="alert <?php echo !empty($params['class']) ? $params['class'] : 'alert-info'; ?>">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <?php echo $message; ?>
</div>