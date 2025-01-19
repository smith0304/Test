<?php snippet( 'head') ?>
<?php snippet( 'header') ?>
<div class="gallery">
    <div class="gallery__wrapper">
        <?php foreach( page('home')->children()->shuffle() as $media): ?>
        <div class="gallery__slide">
         <div class="gallery__figure">
         <div class="gallery__img">
                <?php foreach($media->files() as $file): ?>
                <?php if($file->type() == 'image'): ?>
                <img src="<?= $file->url() ?>" alt="<?= $page->title()->html() ?>" /> 
                <?php endif ?>
                <?php if($file->type() == 'video'): ?>
                <video autoplay muted loop>
                    <source src="<?= $file->url() ?>" alt="<?= $page->title()->html() ?>" />
                </video>
                <?php endif ?>
                <?php endforeach ?>
            </div>
         </div>
        </div>
        <?php endforeach ?>
    </div>
    <div class="gallery__pagination gallery__pagination--prev" tabindex="0" role="button" aria-label="Previous slide">
        <div class="
              gallery__pagination__cursor gallery__pagination__cursor--prev
            ">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="512px" height="411.2px"
                viewBox="0 0 512 411.2" style="enable-background: new 0 0 512 411.2" xml:space="preserve">
                <polygon
                    points="507.1,184.4 89.1,184.4 240.8,30.9 209.5,0 5.4,206.4 209.5,411.2 240.7,380.2 89.4,228.3 507.1,228.3 ">
                </polygon>
            </svg>
        </div>
    </div>
    <div class="gallery__pagination gallery__pagination--next" tabindex="0" role="button" aria-label="Next slide">
        <div class="
              gallery__pagination__cursor gallery__pagination__cursor--next
            " style="opacity: 0; left: 465px; top: 524px">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="512px" height="411.2px"
                viewBox="0 0 512 411.2" style="enable-background: new 0 0 512 411.2" xml:space="preserve">
                <polygon
                    points="5.4,226.9 423.5,226.9 271.8,380.3 303.1,411.2 507.1,204.8 303,0 271.9,31 423.2,182.9 5.4,182.9 ">
                </polygon>
            </svg>
        </div>
    </div>
</div>
</body>
<?php echo js('public/js/main.js') ?> 
<script>

const images = document.querySelectorAll(".gallery__slide "),
next = document.querySelector(".gallery__pagination--next"),
prev = document.querySelector(".gallery__pagination--prev");

let current = 0;
let time = 6000; // default time for auto slideshow


const changeImage = (startPos, index) => {
  for (let i = startPos; i < images.length; i++) {
    images[i].style.display = "none";
  }
  images[index].style.display = "flex";
};

changeImage(1, 0);

prev.addEventListener("click", function(){
  current <= 0 ? current = images.length-1 : current--;
  changeImage(0,current);
});

next.addEventListener("click", function(){
  current >= images.length-1 ? current = 0 : current++;
  changeImage(0,current);
});

const startAutoSlide = () => {
  setInterval(() => {
    current >= images.length-1 ? current = 0 : current++;
    changeImage(0,current);
  }, time);
};

startAutoSlide(); // Start the slideshow

document.querySelectorAll('.gallery__pagination').forEach(area => {
        area.addEventListener('mouseenter', e => {
          area.querySelector('.gallery__pagination__cursor').style.opacity = 1
        })
        area.addEventListener('mouseleave', e => {
          area.querySelector('.gallery__pagination__cursor').style.opacity = 0
        })
        area.addEventListener('mousemove', e => {
          area.querySelector('.gallery__pagination__cursor').style.left = e.clientX + 'px'
          area.querySelector('.gallery__pagination__cursor').style.top = e.clientY + 'px'
        })
      })
</script>
