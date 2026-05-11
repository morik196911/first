          <div class="category">
              <h2 class="category__title"><?= $this->category_title ?></h2>


              <div class="category__text">
        <?php
        use App\Core\Validate;
        $validate = new Validate();
        foreach($this->products as $item): ?>
                  <div class="card ">
                      <img src="<?= explode(',', $item['images'])[0] ?>" class="card__img" alt="...">
                      <div class="card__body">
                          <h4 class="card__title"> <?= $item['title'] ?> </h4>
<p class="card__text"><?= $validate->truncateWordsWithPunctuation($item['text'], 10)  ?></p>
                          <p class="card__price">Цена <span><?= $item['price'] ?></span></p>
                          <p class="card__link">
            <a href="/product/<?= $this->subcategory_link ?>/<?= $item['id'] ?>">Подробнее</a>
</p>
                      </div><!--card-body-->
                  </div><!--card-->
        <?php endforeach ?>
    
              </div><!--category__text-->
              <div class="category__border"></div>

          </div><!--category-->