<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container body">
    <div class="main_container">
        <?php echo $menu_admin; ?>
        <!-- page content -->
        <div class="right_col" role="main">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="page-title">
                        <div class="title_left">
                            <h3><strong><?php echo $subtitle; ?></strong></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="form-div">
                        <?php
                        $attributes = array('class' => 'form-login', 'id' => 'form-login');
                        echo form_open('pswebadmin/password');
                        ?>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <p id="username"><?php echo $this->session->userdata('username');?></p>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input required id="password" class="form-control" name="password" type="password" placeholder="Password"/>
                        </div>
                        <div class="form-group">
                            <label for="new-password">Password Baru</label>
                            <input required id="new-password" class="form-control" name="new-password" type="password" placeholder="Re-Type Password"/>
                        </div>
                        <div class="form-group">
                            <label for="re-password">Re-Type Password Baru</label>
                            <input required id="re-password" class="form-control" name="re-password" type="password" placeholder="Re-Type Password"/>
                        </div>
                        <div class="form-group">
                            <?php
                            if ($false_password == 1) {
                                ?>
                                <p style="color: red;"><i>Password Baru yang dimasukkan tidak cocok!</i></p>
                                <?php
                            }
                            ?>
                        </div>
                        <div class="form-group">
                            <button style="width: 100%" class="btn btn-success" name="login" type="submit"><i class="fa fa-fw fa-upload"></i> UPDATE</button>
                        </div>
                        <div class="form-group">
                            <?php
                            if ($false == 1) {
                                ?>
                                <p style="color: red;"><i>Password yang dimasukkan salah!</i></p>
                                <?php
                            }
                            ?>
                        </div>
                        <?php echo form_close(); ?>    
                    </div>
                </div>
            </div>
            <div style="height: 200px;"></div>
        </div>
        <!-- /page content -->
        <!-- footer content -->
        <?php echo $footer_admin; ?>
        <!-- /footer content -->
    </div>
</div>
<?php
echo add_js('admin/default-theme/bootstrap.min');
echo add_js('admin/default-theme/jquery.mCustomScrollbar.concat.min');
echo add_js('admin/default-theme/custom');
?>