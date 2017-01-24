<!-- Automatic element centering -->
<div class="lockscreen-wrapper">
  <div class="lockscreen-logo">
    <a href='<?php echo site_url('backoffice'); ?>'>The <b>Back</b>Office</a>
  </div>
  <!-- User name -->
  <div class="lockscreen-name"><?php echo lang('forgot_password_heading'); ?> </div>

  <!-- START LOCK SCREEN ITEM -->
  <div class="lockscreen-item">

    <!-- lockscreen credentials (contains the form) -->
    <form class="lockscreen-credentials" style="margin-left:0px;" method="post" action="<?php echo site_url(uri_string()); ?>">
      <p>
            <?php echo lang('change_password_old_password_label', 'old_password');?> <br />
            <?php echo form_input($old_password);?>
      </p>

      <p>
            <label for="new_password"><?php echo sprintf(lang('change_password_new_password_label'), $min_password_length);?></label> <br />
            <?php echo form_input($new_password);?>
      </p>

      <p>
            <?php echo lang('change_password_new_password_confirm_label', 'new_password_confirm');?> <br />
            <?php echo form_input($new_password_confirm);?>
      </p>

      <?php echo form_input($user_id);?>
      <p><?php echo form_submit('submit', lang('change_password_submit_btn'));?></p>
    </form>
    <!-- /.lockscreen credentials -->

  </div>
  <!-- /.lockscreen-item -->
  <div class="help-block text-center">
    
  </div>
  <div class="text-center">
    <a href="<?php echo site_url("backoffice/login"); ?>">Or sign in as a different user</a>
  </div>
  <div class="lockscreen-footer text-center">
    Copyright &copy; 2016-<?php echo date("Y"); ?> <b><a href="http://github.com/peterson-umoke" class="text-black">Kwestion Apps</a></b><br>
    All rights reserved.
  </div>
</div>
<!-- /.center -->

<script src="<?php echo js_uri('bootstrap.min'); ?>"></script>