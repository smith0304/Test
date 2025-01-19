<?php snippet( 'head') ?>
<?php snippet( 'header') ?>
<div class="header">
 <?= $page->title()?>
</div>
<div class="text">
 <?= $page->description()->blocks()?>
</div>
<?php echo js('public/js/main.js') ?> 
</body>
</html>