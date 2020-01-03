<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="col-md-3 left_col menu_fixed">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="<?php echo site_url('admin'); ?>" class="site_title">
                <center>
                <span class="logo-lg">
                <img style="margin-top: -5px; width:45%;height:45%;" src="<?php echo base_url('assets/img/logo.png'); ?>"
                     class="user-image" alt="Logo"/> 
                 </center>
            </a>

        </div>
        <div class="clearfix"></div>
        <br/>
        <?php
         $user = $this->db->query('SELECT b.role_id as role 
                                    FROM data_user a 
                                    JOIN data_role b ON b.role_id = a.role_id 
                                    WHERE a.user_id=' . $this->session->userdata('useradmin'))->row();
        ?>
        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <?php if($user->role != 4) { ?> 
            <div class="menu_section">
                <h3>Data Master</h3>
                <ul class="nav side-menu">
                    <!--   <li><a href="<?php echo site_url('admin/role'); ?>"><i class="fa fa-fw fa-user"></i> Data Role</a></li> -->
                    <li><a href="<?php echo site_url('admin/user'); ?>"><i class="fa fa-fw fa-user"></i> Data User</a></li>
                    <li><a href="<?php echo site_url('admin/pelanggan'); ?>"><i class="fa fa-fw fa-users"></i> Data Pelanggan</a></li>
                    <li><a href="<?php echo site_url('admin/ac'); ?>"><i class="fa fa-fw fa-tag"></i> Data AC</a></li>
                    <li><a href="<?php echo site_url('admin/harga'); ?>"><i class="fa fa-fw fa-tag"></i> Data Harga</a></li>
                    <li><a href="<?php echo site_url('admin/teknisi'); ?>"><i class="fa fa-fw fa-users"></i> Data Teknisi</a></li>
                    <li><a href="<?php echo site_url('admin/jadwal'); ?>"><i class="fa fa-fw fa-users"></i> Data Jadwal AC</a></li>
                </ul>
            </div>
            <?php } ?> 
            <?php if($user->role != 4) { ?> 
            <div class="menu_section">
                <h3>Transaksi</h3>
                <ul class="nav side-menu">
                    <li><a href="<?php echo site_url('admin/reminder'); ?>"><i class="fa fa-fw fa-file"></i>Reminder</a></li>
                    <li><a href="<?php echo site_url('admin/spk_draft'); ?>"><i class="fa fa-fw fa-file"></i>Draft SPK</a></li>
                    <li><a href="<?php echo site_url('admin/spk_final'); ?>"><i class="fa fa-fw fa-file"></i> SPK Final</a></li>
                    <li><a href="<?php echo site_url('admin/pembayaran'); ?>"><i class="fa fa-fw fa-file"></i> Pembayaran</a></li>
                </ul>
            </div>
            <?php } ?> 
            <?php if($user->role == 4) { ?> 
            <div class="menu_section">
                <h3>Transaksi</h3>
                <ul class="nav side-menu">
                    <li><a href="<?php echo site_url('admin/spk_final_teknisi'); ?>"><i class="fa fa-fw fa-file"></i> SPK Final</a></li>
                </ul>
            </div>
            <?php } ?> 
            <?php if($user->role != 4) { ?> 
            <div class="menu_section">
                <h3>Laporan</h3>
                <ul class="nav side-menu">
                    <li><a href="<?php echo site_url('admin/lap_jadwal'); ?>"><i class="fa fa-fw fa-file"></i> Laporan Jadwal Teknisi</a></li>
                    <li><a href="<?php echo site_url('admin/lap_penjualan'); ?>"><i class="fa fa-fw fa-file"></i> Laporan Penjualan</a></li>
                    <li><a href="<?php echo site_url('admin/lap_history'); ?>"><i class="fa fa-fw fa-file"></i> Laporan History AC</a></li>
                    <li><a href="<?php echo site_url('admin/lap_performa'); ?>"><i class="fa fa-fw fa-file"></i> Laporan Performa Teknisi</a></li>
                </ul>
            </div>
            <?php } ?> 
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
