<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<div class="contact-us">
        <div class="container">
            <div class="content form">
                <div class="page-header">
                    <h1>Leave a Message</h1>
                </div>
                <?php echo form_open('contact/insertcontact', 'id="form_add"'); ?> 
                <ul>
                    <li>
                        <input type="text" id="kontak_nama" name="kontak_nama" placeholder="Name" required>
                    </li>
                    <li>
                        <input type="email" id="kontak_email" name="kontak_email" placeholder="Email" required>
                    </li>
                    <li>
                        <input type="text" id="kontak_subject" name="kontak_subject" placeholder="Subject" required>
                    </li>
                    <li>
                        <textarea rows="4" cols="50" id="kontak_keterangan" placeholder="Message" name="kontak_keterangan" required style="vertical-align: top;"></textarea>
                    </li>
                    <div class="g-recaptcha" data-sitekey="6LcNYloUAAAAALbqUieM3LzBsYE56gpWPxEUeWdQ"></div>
                </ul>
                <input type="submit" id="button" name="kirim" value="Send"  class="btn btn-success" />
                <?php echo form_close(); ?> 
            </div>

            <div class="content location">
                <div class="page-header">
                    <h1>Get in Touch</h1>
                </div>
                <div class="boxes headoffice">
                    <div class="box">
                        <i class="icon-map-marker"></i>
                        <span>Our Location</span>
                        <p>PO Box 1025MNO Collins Street West Victoria</p>
                        <p>8007 New York</p>
                    </div>
                </div>
                <div class="boxes">
                    <div class="box hours">
                        <i class="icon-time"></i>
                        <span>Business Hours</span>
                        <p>Mon-Sat:9.00am to 8.00pm </p>
                        <p>Sunday Closed</p>
                    </div>
                </div>
                <div class="boxes">
                    <div class="box email">
                        <i class="icon-envelope"></i>
                        <span>Email Us</span>
                        <p>support@domain.com</p>
                        <p>faq@domain.com</p>
                    </div>
                </div>
                <div class="boxes">
                    <div class="box call">
                        <i class="icon-phone"></i>
                        <span>Call Us</span>
                        <p>+61-1234-567-980</p>
                        <p>+61-1234-567-999</p>
                    </div>
                </div>
            </div>


            <div id="map"></div>
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