<?php include 'product.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>you choose</title>
    <link rel="website icon" type="png" href="logo2.png">
    <!--font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="home.css" class="rel">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <script src="index.js" defer></script>
</head>
<body>
    <nav class="nav">
        <div class="logo">
            <img src="logo3.png" alt="">
        </div>
        
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">about</a></li>
                <li><a href="../Contact/Conctact.html">contact</a></li>
                <li><a href="../cart/index.php">shop</a></li>
            </ul>
            
        <div>
           <div class="header-icons">
            <span class="shopping-cart shopping"><i class="fas fa-shopping-cart"></i><span class="quantity">0</span></span>
            <a class="mobile-hide search-bar-icon" href="#"></a>
        </div>
        </div>
        <div id="hamburger-icon" onclick="toggleMobileMenu(this)">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
            <ul class="mobile-menu">
              <li><a href="/home">Home</a></li>
              <li><a href="/products">about</a></li>
              <li><a href="/about">About</a></li>
              <li id="login"><a href="/login" >contact</a></li>
              <li id="signup"><a href="/signup">news</a></li>
              <li id="signup"><a href="/signup">shop</a></li>
            </ul>
          </div>        
    </nav>
    <!--hedi-->
    <div class="Support-Periode title2">
        <h1>Shopping</h1>
      </div>
      
    <div class="containerAll">
    <div class="container">
    <i class="fas fa-search"></i><input type="text" id="myinput" onkeyup="filtrage()"  placeholder="search by names">
        <div class="list" id="list">
          <?php 
          $arraySize=count($produits);
          $nb=0;
          $keyLast=1;
          foreach ($produits as $key => $value) {
            //add to producte into list in js
            echo'<script>products.push({
                id: '. $key . ',
                name: "'. $value->name . '",
                image: "'. $value->image . '",
                price: '. $value->price . '
                })</script>';
                //add to html item
            $newDiv = "<div class='item'>";
            $newDiv.='<img style="width:10rem;height:10rem;" src="image/' . $value->image . '">';
            $newDiv.='<div class="title productName">' . $value->name . '</div>';
            $newDiv.='<div class="price">' . $value->price . '</div>';
            $newDiv.='<button class="button-77" onclick="addToCard(' . $key . ')">Add To Card</button>';
            $newDiv.="</div>";
            echo $newDiv;
            $keyLast=$key+1;
            if($nb===8){
                break;
            }
            $nb++;
        }
          ?>
        </div>
    </div>
    <div class="card">
        <h1>Card</h1>
        <ul class="listCard">
        </ul>
        <div class="checkOut">
            <div class="total">0</div>
            <div class="closeShopping">Close</div>
        </div>
    </div>
    </div>
 <!--footer-->
        <div class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-box about-widget">
                            <h2 class="widget-title">About us</h2>
                            <p>Ut enim ad minim veniam perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-box get-in-touch">
                            <h2 class="widget-title">Get in Touch</h2>
                            <ul>
                                <li>34/8, East Hukupara, Gifirtok, Sadan.</li>
                                <li>support@fruitkha.com</li>
                                <li>+00 111 222 3333</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-box pages">
                            <h2 class="widget-title">Pages</h2>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="services.html">Shop</a></li>
                                <li><a href="news.html">News</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-box subscribe">
                            <h2 class="widget-title">Subscribe</h2>
                            <p>Subscribe to our mailing list to get the latest updates.</p>
                            <form action="index.html">
                                <input type="email" placeholder="Email">
                                <button type="submit"><i class="fas fa-paper-plane"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    	<div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <p>Copyrights &copy; 2019 - <a href="https://imransdesign.com/">Imran Hossain</a>,  All Rights Reserved.<br>
                            Distributed By - <a href="https://themewagon.com/">Themewagon</a>
                        </p>
                    </div>
                    <div class="col-lg-6 text-right col-md-12">
                        <div class="social-icons">
                            <ul>
                                <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<script>
function toggleMobileMenu(menu) {
    menu.classList.toggle('open');
}
window.addEventListener('scroll', function() {
  var nav = document.querySelector('nav');
  if (window.scrollY > 0) {
    nav.style.backgroundColor = '#051922'; // remplacez 'gray' par la couleur de votre choix
    nav.style.top=0;
  } else {
    nav.style.backgroundColor = ''; // remettez la couleur d'origine ici si besoin
  }
});

</script>
<script src="index.js" defer></script>
<script src="index.js"></script>
</body>
<script src="app.js"></script>
<?php
foreach ($produits as $key => $value) {
echo'<script>products.push({
    id: '. $key . ',
    name: "'. $value->name . '",
    image: "'. $value->image . '",
    price: '. $value->price . '
    })</script>';}
                ?>
</html>
