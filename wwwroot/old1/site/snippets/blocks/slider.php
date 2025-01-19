<div class="slider">
    <?php  
    $gallery = $data->images()->toFiles();
    $total = $gallery->count();
    foreach($gallery as $image): ?>

    <div class="slide">

        <?php if($image->type() == 'image'): ?>
        <img class="lazy-load" src="<?= $image->url() ?>" alt="" />
        <?php endif ?>
        <?php if($image->type() == 'video'): ?>
        <video controls autoplay muted>
            <source src="<?= $image->url() ?>" alt="" />
        </video>
        <?php endif ?>

        <figcaption>
        <div style="display:flex;flex-direction:row;">
            <div style="width:fit-content;"> <?= $gallery->indexOf($image) + 1 . "/" . $total;?> </div>
            <div><?= $image->caption()->kt() ?></div>
            </div>
            <div class="prize">
                <?php
                $files =  $image->prize()->toFiles();      
                foreach($files as $file): ?>
                <img src="<?= $file->url() ?>" alt="">
                <?php endforeach ?>
            </div>
        </figcaption>

    </div>
    <?php endforeach ?>
</div>






