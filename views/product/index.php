       <div class="product">
           <h2 class="product__title"><?= $this->title ?></h2>
           <div class="product__text">

                 <!-- Хлебные крошки -->
        <nav class="breadcrumbs">
            <a href="#" class="breadcrumbs__link"><?= $this->global_category ?></a>
            <span class="breadcrumbs__separator">›</span>
            <a href="/<?= $this->global_category_link ?>/<?= $this->subcategory_link ?>" class="breadcrumbs__link">
                <?= $this->category_sub ?></a>
            <span class="breadcrumbs__separator">›</span>
            <span class="breadcrumbs__current"><?= $this->title ?></span>
        </nav>

               <!--<div class="product__img">
                   <img src=" $this->images[0] " alt="">           
               </div>-->
                  <!-- Галерея изображений -->
            <div class="product-gallery">
                <!-- Большое изображение -->
                <div class="product-gallery__main">
                    <a id='link_fancybox' href='<?= $this->image ?>' data-fancybox = 'gallery' data-caption = ''>
                    <img id="main-image" src="<?= $this->images[0] ?>" alt="Диван «Лира»" class="product-gallery__image">
                    </a>
                </div>

                <!-- Миниатюры -->
                <div class="product-gallery__thumbnails">
                    <?php foreach($this->images as $item): ?>
                    <img src="<?= $item ?>" alt="" class="thumbnail" data-large="<?= $item ?>">                 
                <?php endforeach; ?>
                </div>
            </div>

               <!--<div class="product__descrimbe">
             <?php foreach($this->images as $item): ?>   
                   <img src="<?= $item ?>" alt="">
              <?php endforeach ?>
               </div>-->

               <div class="product__describe">
               <?= $this->text ?>
               </div><!--product__describe-->
               <div class="product__price"><?= $this->price ?></div>
               <div class="product__sales"> Скидка <span>5%</span></div>
               <button class="product__button">Заказать</button>
           </div><!--product__text-->

           <div class="product__border"></div>
       </div><!--product-->