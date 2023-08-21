<?php
$hero_data = file_get_contents('config/hero.json');
$services_data = file_get_contents('config/services.json');
$about_data = file_get_contents('config/about.json');

$json_hero_data = json_decode($hero_data, true);
$json_services_data = json_decode($services_data, true);
$json_about_data = json_decode($about_data, true);
?>

<!-- Hero section / Slider -->
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

<!-- Preview services section -->
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

<!-- About us section -->
<section class='about-home'>
    <div class='container'>
        <div class='row content-wrapper'>
            <div class='col-lg-6 item-wrapper'>
                <div class='section-title'>
                    <?php
                    echo '
                        <h2 class="title">' . $json_about_data['title'] . '</h2>
                        <h3 class="subtitle">' . $json_about_data['subtitle'] . '</h3>
                    '
                        ?>
                </div>
                <p class='featured-text'>
                    <span class='featured-text-mark'> | </span>
                    <?php
                    echo $json_about_data['text']
                        ?>
                </p>
            </div>
            <div class='col-lg-6 item-wrapper'>
                <img src='./assets/about.jpg' alt='Agro agua' />
            </div>
        </div>
    </div>
</section>