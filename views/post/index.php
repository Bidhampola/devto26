<?php
/** @var yii\web\View $this */
?>

<div class="row">
    <div class="col-sm-3" style>
        <h5>Test</h5>
        <h5>Latest</h5>
    </div>

   
    
    <div class="col-sm-6">
         <?php
            foreach($data as $val) { ?>
            <div>
                <img src="data:image/png;base64,<?= $val['image'] ?>" alt="Image">
                <!-- title -->
                <h2><?= $val['title'] ?></h2>

                <!-- desc  -->
                <p>
                    <?= $val['body'] ?>
                </p>

                <a href="">More details</a>
            </div>

            <hr>
    <?php } ?>

    </div>


    <div class="col-sm-3">
        <h5>Test</h5>
        <h5>Latest</h5>
    </div>

</div>
