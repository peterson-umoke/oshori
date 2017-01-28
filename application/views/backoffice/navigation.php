<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
  <!-- Sidebar user panel -->
  <div class="user-panel">
    <div class="pull-left image">
      <img src="<?php echo images_uri('user2-160x160.jpg'); ?>" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
      <p>
        <?php echo $user->first_name ." ". $user->last_name; ?>
      </p>
      <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
  </div>
  <!-- search form -->
  <form action="#" method="get" class="sidebar-form">
    <div class="input-group">
      <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
          </span>
    </div>
  </form>
  <!-- /.search form -->
  <!-- sidebar menu: : style can be found in sidebar.less -->
  <ul class="sidebar-menu">
    <li class="header">MAIN NAVIGATION</li>
    <li class="<?php echo show_current_class("index","active treeview"); ?>">
      <a href="#">
        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li class="<?php echo show_current_class("index"); ?>"><a href="<?php echo site_url("backoffice/dashboard/welcome"); ?>"><i class="fa fa-pie-chart"></i> Overview</a></li>
        <li class="<?php echo show_current_class("site_stats"); ?>">
          <a href="<?php echo site_url("backoffice/dashboard/site_stats"); ?>"><i class="fa fa-line-chart"></i> Site Stats</a></li>
        <li class="<?php echo show_current_class("activity_log"); ?>">
          <a href="<?php echo site_url("backoffice/dashboard/activity_log"); ?>"><i class="fa fa-area-chart"></i> Activity Log</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-edit"></i>
        <span>Blog</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="http://www.blog.oshori.com/wp-admin" target="_blank"><i class="fa fa-edit"></i> Log Unto the Blog</a></li>
        <li><a href="http://www.blog.oshori.com" target="_blank"><i class="fa fa-link"></i> View Blog</a></li>
      </ul>
    </li>
    <li class="treeview <?php show_current_class("all_pages") || show_current_class("add_new_page") ||show_current_class("edit_page") ; ?>">
      <a href="#">
        <i class="fa fa-pagelines"></i> <span>Pages</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li class="<?php show_current_class("all_pages") || show_current_class("edit_page"); ?>"><a href="<?php echo site_url("backoffice/pages/all_pages"); ?>"><i class="fa fa-pagelines"></i> All Pages</a></li>
        <li class="<?php echo show_current_class("add_new_page"); ?>"><a href="<?php echo site_url("backoffice/pages/add_new_page"); ?>"><i class="fa fa-pencil"></i> Add a new Page</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-music"></i>
        <span>Music</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="<?php echo site_url("backoffice/music/all_songs"); ?>"><i class="fa fa-music"></i> All Songs</a></li>
        <li><a href="<?php echo site_url("backoffice/music/add_new_song"); ?>"><i class="fa fa-plus-square"></i> Add New Song</a></li>
        <li><a href="<?php echo site_url("backoffice/music/song_categories"); ?>"><i class="fa fa-tags"></i> Song Categories</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-film"></i>
        <span>Videos</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="<?php echo site_url("backoffice/video/all_songs"); ?>"><i class="fa fa-film"></i> All Videos</a></li>
        <li><a href="<?php echo site_url("backoffice/video/add_new_video"); ?>"><i class="fa fa-plus-square"></i> Add New Video</a></li>
        <li><a href="<?php echo site_url("backoffice/video/video_categories"); ?>"><i class="fa fa-tags"></i> Video Categories</a></li>
      </ul>
    </li>
    <li class="treeview <?php show_current_class("all_users") || show_current_class("add_new_user") || show_current_class("add_group") || show_current_class("edit_user") ; ?>">
      <a href="#">
        <i class="fa fa-group"></i> <span>Users</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li class="<?php show_current_class("all_users") || show_current_class("edit_user"); ?>"><a href="<?php echo site_url("backoffice/account/all_users"); ?>"><i class="fa fa-group"></i> All Users</a></li>
        <li class="<?php echo show_current_class("add_new_user"); ?>"><a href="<?php echo site_url("backoffice/account/add_new_user"); ?>"><i class="fa fa-user-plus"></i> Add New User</a></li>
        <li class="<?php echo show_current_class("add_group"); ?>"><a href="<?php echo site_url("backoffice/account/add_group"); ?>"><i class="fa fa-object-group"></i> Add User Group</a></li>
      </ul>
    </li>
    <li class="treeview <?php show_current_class("general_settings") || show_current_class("profile_settings") || show_current_class("appearance_settings") || show_current_class("site_settings") || show_current_class("maintenance_settings") || show_current_class("theme_settings") || show_current_class("dashboard_settings"); ?>">
      <a href="#">
        <i class="fa fa-cog"></i> <span>Settings</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li class="<?php echo show_current_class("general_settings"); ?>"><a href="<?php echo site_url("backoffice/settings/general_settings"); ?>"><i class="fa fa-cogs"></i> General Settings</a></li>
        <li class="<?php echo show_current_class("profile_settings"); ?>"><a href="<?php echo site_url("backoffice/settings/profile_settings"); ?>"><i class="fa fa-user"></i> Profile Settings</a></li>
        <li class="<?php echo show_current_class("appearance_settings"); ?>"><a href="<?php echo site_url("backoffice/settings/appearance_settings"); ?>"><i class="fa fa-paint-brush"></i> Appearance Settings</a></li>
        <li class="<?php echo show_current_class("site_settings"); ?>"><a href="<?php echo site_url("backoffice/settings/site_settings"); ?>"><i class="fa fa-circle-o"></i> Site Settings</a></li>
        <li class="<?php echo show_current_class("maintenance_settings"); ?>"><a href="<?php echo site_url("backoffice/settings/maintenance_settings"); ?>"><i class="fa fa-newspaper-o"></i> Maintenance Page</a></li>
        <li class="<?php echo show_current_class("dashboard_settings"); ?>"><a href="<?php echo site_url("backoffice/settings/dashboard_settings"); ?>"><i class="fa fa-life-buoy"></i> Dashboard Settings</a></li>
      </ul>
    </li>
    <li class="header">Site Information</li>
    <li class="<?php echo show_current_class("site_info"); ?>"> <a href="<?php echo site_url("backoffice/site/site_info"); ?>"><i class="fa fa-circle-o text-red"></i> <span>Site Information</span></a></li>
    <li class="<?php echo show_current_class("php_info"); ?>"> <a href="<?php echo site_url("backoffice/site/php_info"); ?>"><i class="fa fa-circle-o text-yellow"></i> <span>PHP Information</span></a></li>
    <li class="<?php echo show_current_class("server_info"); ?>"> <a href="<?php echo site_url("backoffice/site/server_info"); ?>"><i class="fa fa-circle-o text-aqua"></i> <span>Server Information</span></a></li>
  </ul>
</section>
<!-- /.sidebar -->
</aside>