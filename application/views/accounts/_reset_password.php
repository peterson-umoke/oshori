<!-- Automatic element centering -->
<div class="lockscreen-wrapper">
  <div class="lockscreen-logo">
    <a href='<?php echo site_url('backoffice'); ?>'>The <b>Back</b>Office</a>
  </div>
  <!-- User name -->
  <div class="lockscreen-name"><?php echo lang('forgot_password_heading'); ?> </div>

  <!-- START LOCK SCREEN ITEM -->
  <div class="lockscreen-item">

    <!-- <div class="lockscreen-image">
    </div> -->

    <!-- lockscreen credentials (contains the form) -->
    <form class="lockscreen-credentials" style="margin-left:0px;" method="post" action="<?php echo site_url(uri_string()); ?>">
      <div class="input-group">
        <input type="email" class="form-control" placeholder="Email Address" name="identity" style="padding:15px;">

        <div class="input-group-btn">
          <button type="button" class="btn"><i class="fa fa-arrow-right text-muted"></i></button>
        </div>
      </div>
      <div class="input-group">
        <input type="email" class="form-control" placeholder="Email Address" name="identity" style="padding:15px;">

        <div class="input-group-btn">
          <button type="button" class="btn"><i class="fa fa-arrow-right text-muted"></i></button>
        </div>
      </div>
    </form>
    <!-- /.lockscreen credentials -->

  </div>
  <!-- /.lockscreen-item -->
  <div class="help-block text-center">
    <?php echo sprintf(lang('forgot_password_subheading'), $identity_label);?>
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