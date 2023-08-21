<?php
$hero_data = file_get_contents('config/hero.json');
$services_data = file_get_contents('config/services.json');
$about_data = file_get_contents('config/about.json');
$wapp_data = file_get_contents('config/whatsapp.json');
$works_data = file_get_contents('config/works.json');

$json_hero_data = json_decode($hero_data, true);
$json_services_data = json_decode($services_data, true);
$json_about_data = json_decode($about_data, true);
$json_wapp_data = json_decode($wapp_data, true);
$json_works_data = json_decode($works_data, true);
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

<!-- Whatsapp link -->
<svg class="curvy-border-top" viewBox="0 0 1440 125">
    <g>
        <path
            d="M1256 11.76C1237.2 17.26 1209.4 27.56 1170 25.76C1127.2 23.86 1125.3 10.16 1087 7.75998C1026.9 3.95998 1015 36.56 959 29.76C920.1 25.06 921.3 8.85998 884 7.75998C841.3 6.55998 834.4 27.66 790 27.76C749.8 27.86 748.5 10.66 707 9.75998C662.5 8.75998 658.2 28.46 611 31.76C563.1 35.06 560 15.26 504 13.76C452.5 12.36 450 28.96 396 29.76C336.7 30.56 332.6 9.35998 279.1 10.76C216.3 12.36 202.3 40.36 146 43.76C112.8 45.76 63 41.96 0 10.76V124.6H1440V10.76C1353.8 -7.34002 1294.8 0.459979 1256 11.76Z"
            fill='#f6fafe'></path>
    </g>
</svg>

<section class='wapp-link-home'>
    <div class='container'>
        <div class='row content-wrapper'>
            <div class='col-12 item-wrapper'>
                <h1>
                    <?php echo '<span>' . $json_wapp_data['title'] . '</span>' . $json_wapp_data['number'] . '' ?>
                </h1>
                <p>
                    <?php echo $json_wapp_data['text'] ?>
                </p>
                <a class='button button-lg primary-button' href=<?php echo $json_wapp_data['link'] ?> target='_blank'
                    rel="noreferrer">
                    <?php echo $json_wapp_data['button'] ?>
                </a>
            </div>
        </div>
    </div>
</section>

<svg class="curvy-border-bottom" viewBox="0 0 1440 125">
    <g>
        <path
            d="M1256 11.76C1237.2 17.26 1209.4 27.56 1170 25.76C1127.2 23.86 1125.3 10.16 1087 7.75998C1026.9 3.95998 1015 36.56 959 29.76C920.1 25.06 921.3 8.85998 884 7.75998C841.3 6.55998 834.4 27.66 790 27.76C749.8 27.86 748.5 10.66 707 9.75998C662.5 8.75998 658.2 28.46 611 31.76C563.1 35.06 560 15.26 504 13.76C452.5 12.36 450 28.96 396 29.76C336.7 30.56 332.6 9.35998 279.1 10.76C216.3 12.36 202.3 40.36 146 43.76C112.8 45.76 63 41.96 0 10.76V124.6H1440V10.76C1353.8 -7.34002 1294.8 0.459979 1256 11.76Z"
            fill='#f6fafe'></path>
    </g>
</svg>

<!-- Lasts works -->
<section class='lasts-works-home-grid'>
    <div class='container'>
        <div class='row'>
            <div class='col-12'>
                <div class='section-title'>
                    <h2 class='title'>Últimos trabajos</h2>
                    <h3 class='subtitle'>¿Qué hacemos?</h3>
                </div>
            </div>
        </div>
        <div class='row content-wrapper'>
            <?php
            foreach ($json_works_data as $work_item) {
                if ($work_item['id'] < 3) {
                    echo '<div class="col-lg-4 last-work-item-wrapper">
                            <img src="' . $work_item['imgUrl'] . '" alt="Agroagua trabajos" />
                        </div>';
                }
            }
            ?>
        </div>
    </div>
</section>