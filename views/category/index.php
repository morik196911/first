          <div class="category">
              <h2 class="category__title"><?= $this->category_title ?></h2>


              <div class="category__text">
        <?php foreach($this->products as $item): ?>
                  <div class="card ">
                      <img src="images/web/magazin_new1.jpg" class="card__img" alt="...">
                      <div class="card__body">
                          <h4 class="card__title"> <?= $item['title'] ?> </h4>
                          <p class="card__text"><?= $item['text'] ?></p>
                          <p class="card__price">Цена <span><?= $item['price'] ?></span></p>
                          <p class="card__link">
            <a href="<?= $this->category_link ?>/<?= $item['id'] ?>">Подробнее</a></p>
                      </div><!--card-body-->
                  </div><!--card-->
        <?php endforeach ?>
    
              </div><!--category__text-->
              <div class="category__border"></div>

          </div><!--category-->