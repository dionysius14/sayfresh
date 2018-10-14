<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<div class="contact-us">
        <div class="container">
            <div class="page-header">
                <h1>Contact Us</h1>
            </div>
            <div class="sidebar">
                <div class="location-sidebar"><span>Contact Us</span></div>
                <div class="form-sidebar"><span>Contact Form</span></div>
            </div>
            <div class="content location">
                <div>
                    <div class="headoffice">
                        <span>Head Office:</span>
                        <p><?php echo $profile->headoffice ?> </p>
                    </div>
                    <div class="cities">
                    <ul>
                        <?php foreach($branch as $bc){ ?>
                        <li>
                            <p>
                                <strong><?php echo $bc->branch_nama; ?></strong> 
                                <div id="alamat"><?php echo $bc->branch_alamat; ?></div>
                                <div id="map-wa">
                                    <a target="blank" href="<?php echo "http://maps.google.com?q=".$bc->latitute.",".$bc->longitude.""; ?>" >
                                        <img src="<?php echo base_url(); ?>assets/css/public/default/img/map.png ">
                                    </a>
                                    <a target="blank" href="<?php echo $bc->link_wa; ?>" >
                                        <img src="<?php echo base_url(); ?>assets/css/public/default/img/whatsapp.png ">

                                    </a>
                                </div>
                            </p>
                        </li>
                        <?php } ?>
                    </ul>
                    </div>
                </div>
            </div>
            <div class="content form">
                <div class="page-header">
                    <h3>Contact Form</h3>
                </div>
                <p>Please enter your contact details and a short message below and I will try to answer your query as soon as possible.</p>
                <?php echo form_open('contact/insertcontact', 'id="form_add"'); ?> 
                <ul>
                    <li>
                        <label>Name</label>
                        <input type="text" id="kontak_nama" name="kontak_nama" required>
                    </li>
                    <li>
                        <label>Email</label>
                        <input type="email" id="kontak_email" name="kontak_email" required>
                    </li>
                    <li>
                        <label>Phone</label>
                        <input type="text" id="kontak_phone" name="kontak_phone" required>
                    </li>
                    <li>
                        <label>Message</label>
                        <textarea rows="4" cols="50" id="kontak_keterangan" name="kontak_keterangan" required style="vertical-align: top;"></textarea>
                    </li>
                    <div class="g-recaptcha" data-sitekey="6LcNYloUAAAAALbqUieM3LzBsYE56gpWPxEUeWdQ"></div>
                </ul>
                <input type="submit" id="button" name="kirim" value="Send"  class="btn btn-success" />
                <?php echo form_close(); ?> 
                <div id="map"></div>
            </div>
        </div> 
    </div>
</div>
<script type="text/javascript">
    function initMap() {
        // The location of GB
        var gb = {lat: 0.4920993, lng: 101.4842535};
        // The map, centered at GB
        var map = new google.maps.Map(
            document.getElementById('map'), {zoom: 18, center: gb, mapTypeId: google.maps.MapTypeId.ROADMAP});
        // The marker, positioned at GB
        //var iconBase = '<?//= base_url() . 'assets/theme/default/images/'?>//';
        var marker = new google.maps.Marker({
            position: gb,
            map: map,
            // icon: iconBase + 'marker1.png',
            title: "Nurani Jaya"
        });

        var content = '<div>' +
            '<div class="map-title"><strong>CV Nurani Jaya</strong></div>' +
            '<div class="map-content"><span>JL. BUKIT BARISAN NO 20, TENAYAN RAYA, TANGKERANG TIMUR, PEKANBARU RIAU 28131 (DEPAN SMU NEGERI 10 PEKANBARU) </span></div>' +
            '</div>';

        var infowindow = new google.maps.InfoWindow({
            content: content,
            maxWidth: 350
        });
        // When this event is fired the Info Window is opened.
        google.maps.event.addListener(marker, 'click', function () {
            infowindow.open(map, marker);
        });

        google.maps.event.addListener(map, 'click', function () {
            infowindow.close();
        });
        infowindow.open(map, marker);
        google.maps.event.addDomListener(window, 'load', initMap);
    }

</script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery(".location-sidebar").click(function() {
            jQuery(".content.location").show();
            jQuery(".content.form").hide();
        });
        jQuery(".form-sidebar").click(function() {
            jQuery(".content.form").show();
            jQuery(".content.location").hide();
        });
    });
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA7sMs4pf-OWid7m8jPSrlcAMDzd2kOc6s&callback=initMap"
        type="text/javascript"></script>
<style>
    #map {
        margin: 0;
        padding: 0;
        height: 500px;
        max-width: none;
    }

    #map img {
        max-width: none !important;
    }
</style>