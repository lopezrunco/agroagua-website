<?php
$work_data = file_get_contents('config/works.json');
$json_work_data = json_decode($work_data, true);
?>

<section class='lasts-works-grid'>
    <div class='container'>
        <div class='row'>
            <div class='col-12'>
                <div class='section-title'>
                    <h2 class='title'>Últimos trabajos</h2>
                    <div class='separator'></div>
                </div>
            </div>
        </div>
        <div class='row content-wrapper'>
            <?php
            foreach ($json_work_data as $work_item) {
                if ($work_item['id'] < 6) {
                    echo '<div class="col-lg-4 last-work-item-wrapper">
                            <img src="' . $work_item['imgUrl'] . '" alt="Agroagua trabajos" />
                        </div>';
                } else {
                    echo '<div class="col-12 last-work-item-wrapper">
                        <img src="' . $work_item['imgUrl'] . '" alt="Agroagua trabajos" />
                    </div>';
                }
            }
            ?>
        </div>
    </div>
</section>