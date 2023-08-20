<?php
$hero_data = file_get_contents('config/hero.json');
$services_data = file_get_contents('config/services.json');

$json_hero_data = json_decode($hero_data, true);
$json_services_data = json_decode($services_data, true);
?>

<div class="hero-section">
    <div class='overcolor'>
        <div class="container f-column">
            <div class="content-wrapper f-column">
                <?php
                echo '
                    <h1>' . $json_hero_data['title'] . '<span>' . $json_hero_data['titleSpan'] . '</span></h1>
                    <p>' . $json_hero_data['text'] . '</p>
                '
                ?>
                <div class='button-group'>
                    <?php
                    echo '
                        <a class="button button-lg primary-button" href=' . $json_hero_data['mainButtonLink'] . '>' . $json_hero_data['mainButton'] . '</a>
                        <a class="button button-lg secondary-button" href=' . $json_hero_data['secondaryButtonLink'] . '>' . $json_hero_data['secondaryButton'] . '</a>
                    ';
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class='hero-curvy-border'>
    <img src='./assets/border-hero-img.png' alt='Agro agua' />
</div>

<section class='services-home-grid'>
    <div class='container'>
        <div class='row content-wrapper'>
            <?php
            foreach ($json_services_data as $service_item) {
                if ($service_item['id'] < 3) {
                    echo '
                        <div class="col-lg-4">
                            <div class="item-wrapper">
                                <i class="' . $service_item['iconClass'] . ' icon"></i>
                                <h5>' . $service_item['title'] . '</h5>
                                <p>' . $service_item['text'] . '</p>
                            </div>
                        </div>
                    ';
                }
            }
            ?>
        </div>
    </div>
</section>