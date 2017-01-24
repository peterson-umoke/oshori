<div class="login-box">
  <div class="login-logo">
    <a href="<?php echo site_url("backoffice"); ?>"">The <b>Back</b>Office</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <?php if (empty($message) && !isset($message)) ?><p class="login-box-msg">Sign in to start your session</p> 
    <div id="infoMessage"><?php echo $message;?></div>

    <form action="<?php echo site_url(uri_string()); ?>" method="post">
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="identity">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox" name="remember" id="remember"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat"><?php echo lang('login_submit_btn'); ?></button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <a href="<?php echo site_url("/"); ?>" 	class="text-center btn btn-default btn-flat"><i class="fa fa-arrow-left"></i> <?php echo lang("back_to_site"); ?></a>
    <div class="pull-right">
	    <a href="<?php echo site_url("backoffice/account/forgot_password"); ?>" style="padding-right:0;"  class="text-center btn btn-link"><?php echo lang('login_forgot_password'); ?></a>
    </div>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- Bootstrap 3.3.6 -->
<script src="<?php echo js_uri('bootstrap.min'); ?>"></script>
<!-- iCheck -->
<script src="<?php echo plugins_uri('iCheck/icheck.min.js'); ?>"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>