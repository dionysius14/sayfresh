<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<meta charset="utf-8">
<title><?php echo ucwords($title); ?></title>
<?php echo chrome_frame(); ?>
<link rel="icon" href="<?php echo base_url(); ?>/assets/img/icons/as.png" type="image/x-icon" />
<?php echo view_port(); ?>
<?php echo apple_mobile(); ?>
<?php
echo add_js('admin/default-theme/jquery.min');
if ($js_files != '') {
    foreach ($js_files as $file):
        echo add_js($file);
        ?>
                                                                                                                                                                                                                            <!--<script src="<?php echo $file; ?>"></script>-->
        <?php
    endforeach;
}
if ($js_files != '') {
    foreach ($css_files as $file):
        ?>
        <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
        <?php
    endforeach;
}
echo add_css('admin/default-theme/bootstrap.min');
echo add_css('admin/default-theme/font-awesome.min');
echo add_css('admin/default-theme/jquery.mCustomScrollbar.min');
echo add_css('admin/default-theme/custom');
?>
<script type="text/javascript">
    var theme = '<?php echo $this->session->userdata('theme'); ?>';
    if (theme == '1') {
        swal("Success!", "Your theme has been changed!", "success");
        '<?php echo $this->session->set_userdata('theme', '0'); ?>';
    }
</script>