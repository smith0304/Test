<nav class="nav lazy-load">  
      <ul class="menu">
           <li class="list works">
           <span class="list-link" style="cursor:pointer">Works</span>
           <ul class="submenu">
           <li <?= param('tag')=== null ? 'class="active"' : '' ?> class="tag" ><a href="<?= page('library')->url() ?>" class="tag-link" id="underline">all</a></li>
           <?php foreach($tags as $tag): ?>
           <li <?= param('tag') == $tag ? 'class="active"' : '' ?> class="tag">
           <a href="<?= url(page('library')->url(), ['params' => ['tag' => $tag]]) ?>" class="tag-link" id="underline">
           <?= html($tag) ?></a>
           </li>
           <?php endforeach ?>
           </ul>
           </li>
           <li class="list" >
           <a href="<?= $site->children()->findByURI('about')->url()?>" class="list-link">About</a>
           </li>
           <li class="list" >
           <a href="<?= $site->children()->findByURI('contact')->url()?>" class="list-link">Contact</a>
           </li>
           <li class="list" >
           <a href="<?= $site->children()->findByURI('shop')->url()?>" class="list-link">Shop</a>
           </li>
      </ul> 
</nav>
