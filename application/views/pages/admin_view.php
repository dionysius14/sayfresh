<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container body">
    <div class="main_container">
        <?php echo $menu_admin; ?>
        <!-- page content -->
        <div class="right_col" role="main" style="min-height: 1200px;">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="page-title">
                        <div class="title_left">
                            <h3><strong><?php echo strtoupper($subtitle); ?></strong></h3>
                            <?php echo $notes; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <?php echo $output; ?>
                </div>
            </div>
            <br/><br/><br/>
            <!-- /page content -->

            <!-- footer content -->
            <!--div class="container" style="text-align: right; padding: 10px 10px 5px 10px; box-shadow: 0px 0px 5px #000;">
                <p>Copyright &copy; <a href="#"></a> 2017</p>
            </div-->
            <!-- /footer content -->
        </div>
    </div>
</div>
<?php
echo add_js('admin/default-theme/bootstrap.min');
echo add_js('admin/default-theme/jquery.mCustomScrollbar.concat.min');
echo add_js('admin/default-theme/custom');
?>