<?php  include("header.php") ?>
<br>
<br>


 <div class = "ccard-wrapper">
      <div class = "ccard">
        <!-- card left -->
        <div class = "product-imgs">
          <div class = "img-display" >
            <div class = "img-showcase" >
              <img src = "assets/img/5.jpg" alt = "hall image1" >
              <img src = "assets/img/6.png" alt = "hall image2">
              <img src = "assets/img/2.jpg" alt = "hall image3">
              <img src = "assets/img/5.png" alt = "hall image4">
            </div>
          </div>
          <div class = "img-select">
            <div class = "img-item">
              <a href = "#" data-id = "1">
                <img src = "assets/img/5.jpg" alt = "hall image1" height="80" width="100">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "2">
                <img src = "assets/img/6.png" alt = "hall image2" height="80" width="100">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "3">
                <img src = "assets/img/2.jpg" alt = "hall image3" height="80" width="100">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "4">
                <img src = "assets/img/5.png" alt = "hall image4" height="80" width="100">
              </a>
            </div>
          </div>
        </div>
        <!-- card right -->

        <div class = "product-content">
          <h2 class = "product-title">Shagun Lawn</h2>
          <a href = "#" class = "product-link">visit link</a>
          <div class = "product-rating">
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star-half-alt"></i>
            <span>4.7(21)</span>
          </div>

          <div class = "product-price">
            <p class = "last-price">Old Price: <span>$257.00per day</span></p>
            <p class = "new-price">New Price: <span>$249.00per day (5%)</span></p>
          </div>

          <div class = "product-detail">
            <h2>about this hall(description) :</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eveniet veniam tempora fuga tenetur placeat sapiente architecto illum soluta consequuntur, aspernatur quidem at sequi ipsa!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, perferendis eius. Dignissimos, labore suscipit. Unde.</p>
            <ul>
              <li>Color: <span>Black</span></li>
              <li>Available: <span>in stock</span></li>
              <li>Category: <span>Shoes</span></li>
              <li>Shipping Area: <span>All over the world</span></li>
              <li>Shipping Fee: <span>Free</span></li>
            </ul>
          </div>

          <div class = "purchase-info">Days:
            <input type = "number" min = "1" value = "1"><br>
            <button type = "button" class = "btn">
              Book Now </i>
            </button>
            <button type = "button" class = "btn">Compare</button>
          </div>

          <div class = "social-links">
            <p>Share At: </p>
            <a href = "#">
              <i class = "fab fa-facebook-f"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-twitter"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-instagram"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-whatsapp"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-pinterest"></i>
            </a>
          </div>
        </div>
      </div>
    </div>

    


  <script>
  const imgs = document.querySelectorAll('.img-select a');
const imgBtns = [...imgs];
let imgId = 1;

imgBtns.forEach((imgItem) => {
    imgItem.addEventListener('click', (event) => {
        event.preventDefault();
        imgId = imgItem.dataset.id;
        slideImage();
    });
});

function slideImage(){
    const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;

    document.querySelector('.img-showcase').style.transform = `translateX(${- (imgId - 1) * displayWidth}px)`;
}

window.addEventListener('resize', slideImage);
</script>

<?php include("footer.php")?>
