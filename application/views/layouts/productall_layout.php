<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>
<html lang="en">
    <head>
        <?php echo $head; ?>
    </head>
    <?php $this->load->view('slices/header'); ?>
    <body class="category-product">
        <div class="back-home animsition">
            <?php echo $content ?>
        </div>
    </body>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbEveT4siq_zM3C60vhXyXjshygaM4qqM&callback=initMap"></script>
    <?php $this->load->view('slices/footer'); ?>
</html>