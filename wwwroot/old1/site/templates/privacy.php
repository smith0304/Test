<?php snippet( 'head') ?>
<div class="header">
 <?= $page->title()?>
</div>
<div class="text">
 <?= $page->description()->blocks()?>
</div>
<?php echo js('public/js/main.js') ?> 
</body>
</html> 