<?php snippet( 'head') ?>
<?php snippet( 'header') ?>
<div class="wrapper-about">
 <div class="about">
  <div class="hesign-logo">
   <img src="<?= $page->hesign()->image()->toFiles() ?>">   
  </div>
  <div>
   <?= $page->description()->blocks()?>
  </div>
 </div>
  <div class="link">
  <?php foreach ($page->link()->toStructure() as $link): ?>
   <div class="item">
    <a href=" <?= $link->url() ?>">                  
     <img src="<?= $link->image()->toFiles() ?>">                       
    </a>
   </div>
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