<?php snippet( 'head') ?>
<?php snippet( 'header') ?>

<div class="wrapper-contact">

  <div class="berlin">
   <h1>BERLIN</h1>
   <div><?= $page->berlin()->kt()?></div>
   <div><?= html::email($page->email1())?></div>
   <div><?= $page->phone1()?></div>
  </div>

  <div class="hangzhou">
  <h1>HANGZHOU</h1>
  <div> <?= $page->hangzhou()->kt()?></div>
  <div> <?= html::email($page->email2())?></div>
  <div> <?= $page->phone2()?></div>
 </div>

 <div class="platform">
  <?php foreach ($page->social()->toStructure() as $social): ?>
  <div><?= html::a($social->url(), $social->platform()) ?></div>
  <?php endforeach ?>
 </div>

</div>

 <div class="footer">  
 <div class="list-impressum" >
  <a href="<?= $site->children()->findByURI('legal')->url()?>" class="list-link-impressum" >Legal Notice</a>
 </div>
 <div class="list-impressum" >
  <a href="<?= $site->children()->findByURI('privacy')->url()?>" class="list-link-impressum" >Privacy Policy</a>
 </div>
 </div>
 <?php echo js('public/js/main.js') ?> 
</body>
</html>