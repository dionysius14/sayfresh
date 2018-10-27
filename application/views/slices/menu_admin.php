<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="col-md-3 left_col menu_fixed">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="<?php echo site_url('admin'); ?>" class="site_title">&nbsp;&nbsp;<span style="font-size: 18px;">Web Admin</span></a>
        </div>
        <div class="clearfix"></div>
        <br/>
        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                    <!--<li><a href="<?php echo site_url('admin/dashboard'); ?>"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a></li>-->
                    <li><a href="<?php echo site_url('admin/profile'); ?>"><i class="fa fa-fw fa-user"></i> Profile</a></li>
                    <li><a href="<?php echo site_url('admin/kategori'); ?>"><i class="fa fa-fw fa-tag"></i> Kategori</a></li>
                    <li><a href="<?php echo site_url('admin/produk'); ?>"><i class="fa fa-fw fa-tag"></i> Produk</a></li>
                    <li><a href="<?php echo site_url('admin/kontak'); ?>"><i class="fa fa-fw fa-envelope"></i> Data Kontak</a></li>
                    <!-- <li><a href="<?php echo site_url('admin/chat'); ?>"><i class="fa fa-fw fa-users"></i> Online Chat</a></li> -->
                    <li><a href="<?php echo site_url('admin/slider'); ?>"><i class="fa fa-fw fa-image"></i> Slider</a></li>
                    <li><a href="<?php echo site_url('admin/testimonial'); ?>"><i class="fa fa-fw fa-users"></i> Testimonial</a></li>
                    <li><a href="<?php echo site_url('admin/news'); ?>"><i class="fa fa-fw fa-envelope"></i> News/Event</a></li>
                    <li><a href="<?php echo site_url('admin/faq'); ?>"><i class="fa fa-fw fa-question"></i> FAQ</a></li>
                    <li><a href="<?php echo site_url('admin/howto'); ?>"><i class="fa fa-fw fa-question"></i> How to Order</a></li>
                </ul>
                <br/>
            </div>
        </div>
        <!-- /sidebar menu -->
    </div>
</div>
<!-- top navigation -->
<div class="top_nav">
    <div class="nav_menu">
        <nav class="" role="navigation">
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <!--<img src="<?php echo base_url('assets/img/icons/favicon-32.png'); ?>" alt="">-->
                        Welcome, <strong><?php echo $this->session->userdata('username'); ?></strong>&nbsp;<span class="fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                        <li><a href="<?php echo site_url('admin/password'); ?>"><i class="fa fa-fw fa-key"></i> Change Password</a></li>
                        <li><a href="<?php echo site_url('admin/logout'); ?>"><i class="fa fa-fw fa-sign-out"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>
