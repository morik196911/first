 <div class="main">
     <h2 class="main__title">Заголовок</h2>
     <div class="main__text">
         Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi sit
         facere quam accusamus vero sed, eos aut illo iste deserunt dolorem
         repudiandae distinctio aliquid modi
         fugiat laborum culpa eligendi libero.
         Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eum
         suscipit aliquid hic temporibus adipisci aperiam repellendus, pariatur
         debitis, sequi inventore animi voluptatum fugit assumenda! Magni ipsa
         error sapiente doloribus fugit, vel blanditiis culpa eligendi porro
         quidem totam dolorum numquam deserunt debitis expedita sequi nisi
         sunt harum unde cupiditate vitae.
     </div><!--main__text-->
     <div class="main__border"></div>


     <div class="row main__images-wrapper">
    <?php foreach($this->images as $item): ?>
         <div class="col-md-4">
           
             <img class="main__foto img-fluid mx-auto d-block rounded"
                 src="<?= $item['img']?>" alt="<?= $item['title'] ?>">
         </div>
      <?php endforeach ; ?>
       
       
     </div><!--row main__images-wrapper-->

 </div><!--main-->