<?php
$contact_data = file_get_contents('config/contact.json');
$hours_data = file_get_contents('config/hours.json');

$json_contact_data = json_decode($contact_data, true);
$json_hours_data = json_decode($hours_data, true);
?>

<!-- Google form -->
<section class="container">
    <div class='row'>
        <div class='section-title'>
            <h2 class='title'>Contacto</h2>
            <div class='separator'></div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 d-flex justify-content-start">
            <div class='contact-form d-flex justify-content-start'>
                <iframe
                    src="https://docs.google.com/forms/d/e/1FAIpQLSd0GFk6HKB2izpisEgs5ipG3sGTvKTkuHZMK2DZpPRKCo1UmA/viewform?embedded=true"
                    width="100%" height="820" frameBorder="0" marginHeight="0" marginWidth="0">Cargando…</iframe>
            </div>
        </div>
        <div class="col-lg-6">

            <!-- Contact info -->
            <section class='contact-info'>
                <div class='row'>
                    <div class='col-12 content-wrapper'>
                        <div class='item-wrapper'>
                            <h4><span class='featured-text-mark'>| </span>Datos de contacto</h4>
                            <?php
                            foreach ($json_contact_data as $contact_info_item) {
                                echo '
                                    <a href="' . $contact_info_item['link'] . '" target="_blank" rel="noreferrer">
                                        <i class="' . $contact_info_item['iconclass'] . ' icon"></i> <p>' . $contact_info_item['text'] . '</p>
                                    </a>';
                            }
                            ?>
                        </div>
                        <div class='item-wrapper'>
                            <h4><span class='featured-text-mark'>| </span>Horarios</h4>
                            <?php
                            foreach ($json_hours_data as $hour_item) {
                                echo '
                                    <p>' . $hour_item['day'] . ': <span>' . $hour_item['hours'] . '</span></p>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
    <div class='row'>
        <div class='col-12'>
            <div class="row">
                <div class="col-12">
                    <div class='section-title'>
                        <h2 class='title'>Dónde estamos</h2>
                        <div class="separator"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14004.265305062554!2d-56.227943936948165!3d-34.080618773946064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95a11d46f6f53a03%3A0xab2b868c5d312abc!2sAgroagua!5e0!3m2!1ses-419!2sin!4v1652013776619!5m2!1ses-419!2sin"
                            width="100%" height="450" allowFullScreen="yes" loading="lazy"
                            referrerPolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>