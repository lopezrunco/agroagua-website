<?php
$services_data = file_get_contents('config/services.json');
$clients_data = file_get_contents('config/clients.json');

$json_services_data = json_decode($services_data, true);
$json_clients_data = json_decode($clients_data, true);
?>

<!-- Services section -->
<section class='services-grid'>
    <div class='container'>
        <div class='row'>
            <div class='col-12 section-title'>
                <h2 class='title'>Nuestros servicios</h2>
                <div class='separator'></div>
            </div>
        </div>
        <div class='row content-wrapper'>
            <?php
            foreach ($json_services_data as $service_item) {
                echo '
                    <div class="col-lg-4">
                        <div class="item-wrapper">
                            <div class="icon-wrapper">
                                <i class="' . $service_item['iconClass'] . ' icon"></i>
                            </div>
                            <h5>' . $service_item['title'] . '</h5>
                            <p>' . $service_item['text'] . '</p>
                        </div>
                    </div>
                ';
            }
            ?>
        </div>
    </div>
</section>

<!-- Clients section -->
<div class='clients'>
    <div class='container'>
        <div class='row'>
            <div class='section-title'>
                <h2 class='title'>Nuestros clientes</h2>
                <div class='separator'></div>
            </div>
        </div>
        <div class='row'>
            <?php
            foreach ($json_clients_data as $client) {
                echo '
                    <div class="col-lg-4 mb-4">
                        <a class="item-wrapper" target="_blank" rel="noreferrer" href=' . $client['link'] . '> 
                            <img src="' . $client['imgUrl'] . '" alt="' . $client['name'] . '" />
                        </a>
                    </div>';
            }
            ?>
        </div>
    </div>
</div>