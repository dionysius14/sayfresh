<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container body">
    <div class="main_container">
        <?php echo $menu_admin; ?>
        <!-- page content -->
        <div class="right_col" role="main" style="min-height: 1200px;">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-title">
                        <div class="text-center">
                            <br/><br/>
                            <h1>Dashboard</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php echo $footer_admin; ?>
    </div>
    <!-- /page content -->
</div> 
<?php
echo add_js('admin/default-theme/bootstrap.min');
echo add_js('admin/default-theme/jquery.mCustomScrollbar.concat.min');
echo add_js('admin/default-theme/custom');
?>