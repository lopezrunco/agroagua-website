<?php
$contact_data = file_get_contents('config/contact.json');
$json_contact_data = json_decode($contact_data, true);
?>

<svg class="bottom-curvy-border" viewBox="0 0 1440 184">
    <g>
        <path class="f-bg-wave"
            d="M1285.4,81.2c-34,12.5-98.3,33.1-186.9,39.8c-230.8,17.6-274.8-85-472.8-71.3 c-182,12.6-219.4,104.5-345.3,65.2C237.9,101.6,177,70.7,91.6,81.2c-31.7,4-62.6,13-91.6,26.6V184h1440V0 C1392.2,33.7,1340.3,61,1285.4,81.2z"
            fill='#120d48'></path>
    </g>
</svg>
<div class='bottom'>
    <div class='container'>
        <div class='row content-wrapper'>
            <?php
            foreach ($json_contact_data as $contact_info_item) {
                echo '
                    <div class="col-lg-3 item-wrapper">
                        <a href="' . $contact_info_item['link'] . '" target="_blank" rel="noreferrer">
                            <i class="' . $contact_info_item['iconclass'] . ' icon"></i> <p>' . $contact_info_item['text'] . '</p>
                        </a>
                    </div>';
            }
            ?>
        </div>
    </div>
</div>