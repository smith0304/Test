
<div class="index">
<?php foreach( $row->shuffle() as $media): ?>
   <div class="column lazy-load">
    <a href=" <?= $media->myfield()->toLinkObject()?>">  </a>
    <?= $media->image() ?>
  </div>
<?php endforeach ?>
</div>
<?php echo js('public/js/main.js') ?> 