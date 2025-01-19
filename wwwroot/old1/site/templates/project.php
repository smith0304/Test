<?php snippet( 'head') ?>
<?php snippet( 'header') ?>
<div class="info">
 <div class="info-item">
  <div class="category">Year</div>
  <div class="data"><?= $page->year()?></div>
 </div>
 <div class="info-item">
  <div class="category">Media</div>
  <div class="data"><?= $page->tags()?></div>
 </div>
 <div class="info-item">
  <div class="category">Project</div>
  <div class="data"><?= $page->title() ?></div>
 </div>
 <div class="info-item">
  <div class="category">Client</div>
  <div class="data"><?= $page->client() ?></div>
 </div>
</div>

<div class="container-gallery">
 <?php
 foreach($page->builder()->toBuilderBlocks() as $block):
 snippet('blocks/' . $block->_key(), array('data' => $block));
 endforeach;
 ?>

</div>

<div class="description-project">
 <?= $page->description()->blocks()?>
</div>
<?php echo js('public/js/main.js') ?> 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
<script>
var $slider = $('.slider');
var $portrait = $('.portrait');

$slider.slick({
   infinite: true,
   arrows:true,
   fade:true,
   slidesToShow: 1,
   centerMode: false,
          variableWidth: false,
          focusOnSelect: true,
        
});
$portrait.slick({
   infinite: true,
   arrows:true,
   fade:true,
   slidesToShow: 1,
   centerMode: false,
          variableWidth: false,
          focusOnSelect: true,
        
});

$(window).on('resize orientationchange', function() {
  $('.slider').slick('resize');
});
$(window).on('resize orientationchange', function() {
  $('.portrait').slick('resize');
});
</script>
</body>
</html>