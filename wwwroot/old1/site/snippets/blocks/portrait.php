<div class="portrait">
    <?php  
    $gallery2 = $data->images2()->toFiles();
    $total = $gallery2->count();
    foreach($gallery2 as $image2): ?>
    <div class="slide">
        <?php if($image2->type() == 'image'): ?>
        <img class="lazy-load" src="<?= $image2->url() ?>" alt="" />
        <?php endif ?>
        <?php if($image2->type() == 'video'): ?>
        <video controls autoplay muted>
            <source src="<?= $image2->url() ?>" alt="" />
        </video>
        <?php endif ?>
        <figcaption>
            <div style="display:flex;flex-direction:row;">
            <div style="width:fit-content;">  <?= $gallery2->indexOf($image2) + 1 . "/" . $total;?> </div>
            <div><?= $image2->caption()->kt() ?></div>
            </div>
            <div class="prize">
            <?php
$files =  $image2->prize()->toFiles();
foreach($files as $file): ?>
  <img src="<?= $file->url() ?>" alt="">
<?php endforeach ?>
                <!-- <?php if($file = $image2->prize()->toFiles()): ?>
                <?= $file ?>
                <?php endif ?> -->
            </div>
        </figcaption>
    </div>
    <?php endforeach ?>
</div>






