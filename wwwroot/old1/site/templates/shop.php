<?php snippet( 'head') ?>
<?php snippet( 'header') ?>
<div class="shop">
<?php foreach( $page->children() as $product): ?>
  <div class="product">
    <div class="lazy-load">  <?= $product->image()?> </div>
    <div class="text">
     <div class="product-title"><?= $product->name() ?></div>
     <div class="product-description"><?= $product->description()?></div>
     <div class="product-price">
     <div class="price"><?= $product->price()->blocks()?> </div>
     <div class="sale"><?= $product->sale()->blocks()?> </div>
    </div>
    <div class="product-link">
    <a href="<?= $product->link()?>"target="_blank"> Buy here</a>
    </div>
  </div>
  </div>
<?php endforeach ?>
</div>
<?php echo js('public/js/main.js') ?> 