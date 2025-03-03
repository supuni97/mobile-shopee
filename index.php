<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Mobile Shopee</title>

  <!-- Bootstrap CDN -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />

  <!--OWL carousel CDN-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
  <!--font-awesome CDN-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

  <!--Custom css file-->
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <!--start header-->
  <header id="header">
    <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
      <p class="font-size-12 text-black-50 m-0">
        Part street, Upper road, Colombo 07, Sri Lanka (+94) 123 456 789
      </p>
      <div class="font-size-14">
        <a href="#" class="px-3 border-right border-left text-dark">Login</a>
        <a href="#" class="px-3 border-right text-dark">Wishlist (0)</a>
      </div>
    </div>
    <!--primary navigation-->
    <nav class="navbar navbar-expand-lg" style="background: #00a5c4;">
      <a class="navbar-brand" href="#" style="color: white;">Mobile Shopee</a>
      <button class="navbar-toggler bg-white text-primary" type="button" data-toggle="collapse"
        data-target="#navbarSupportedContent">
        <i class="fas fa-bars"></i>
      </button>


      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav m-auto">
          <li class="nav-item active">
            <a style="color: white;" class="nav-link" href="#">On Sale</a>
          </li>
          <li class="nav-item">
            <a style="color: rgb(238, 252, 255);" class="nav-link" href="#">Category<i
                class="fas fa-chevron-down"></i></a>
          </li>
          <li class="nav-item">
            <a style="color: white;" class="nav-link" href="#">Products<i class="fas fa-chevron-down"></i></a>
          </li>
          <li class="nav-item">
            <a style="color: white;" class="nav-link" href="#">Blog</a>
          </li>
          <li class="nav-item">
            <a style="color: white;" class="nav-link" href="#">Coming Soon</a>
          </li>
          </li>

        </ul>
        <form action="#" class="font-size-14">
          <a href="#" class="d-inline-flex align-items-center py-0 px-0 rounded-pill bg-dark">
            <span class="font-size-14 text-white ml-2"><i class="fas fa-shopping-cart"></i></span>
            <span class="px-3 py-1 ml-2 rounded-pill text-dark bg-light">0</span>
          </a>
        </form>



      </div>
    </nav>
  </header>
  <!--end header-->

  <!--start main site-->
  <main id="main-site">

    <!--Owl carousel-->
    <section id="banner-area">
      <div class="owl-carousel owl-theme">
        <div class="item">
          <img src="./assets//Banner1.png" alt="banner1">
        </div>
        <div class="item">
          <img src="./assets/Banner2.png" alt="banner2">
        </div>
      </div>

    </section>
    <!--Owl carousel-->

    <!--Top sales-->
    <section id="top-sale">
      <div class="container py-5">
        <h4 class="" style="font-size: 34; color: #003859;">Top Sales</h4>
        <hr>
        <!--Owl carousel-->
        <div class="owl-carousel owl-theme">
          <div class="item py-2 bg-light">
            <div class="product">
              <a href="#"><img src="./assets/products/1.png" alt="product1" class="img-fluid"></a>
              <div class="text-center">
                <h6>Samsung Galaxy1</h6>
                <div class="rating text-warning font-size-12">
                  <span>
                    <i class="fas fa-star"></i>
                  </span>
                  <span>
                    <i class="fas fa-star"></i>
                  </span>
                  <span>
                    <i class="fas fa-star"></i>
                  </span>
                  <span>
                    <i class="fas fa-star"></i>
                  </span>
                  <span>
                    <i class="far fa-star"></i>
                  </span>
                </div>
                <div class="price py-2">
                  <span>$152</span>
                </div>
                <button class="btn btn-warning font-size-12" type="submit">Add to Cart</button>
              </div>
            </div>
          </div>
          <div class="item py-2 bg-light">
            <div class="product ">
              <a href="#"><img src="./assets/products/2.png" alt="product2" class="img-fluid"></a>
              <div class="text-center">
                <h6>Samsung Galaxy2</h6>
                <div class="rating text-warning font-size-12">
                  <span>
                    <i class="fas fa-star"></i>
                  </span>
                  <span>
                    <i class="fas fa-star"></i>
                  </span>
                  <span>
                    <i class="fas fa-star"></i>
                  </span>
                  <span>
                    <i class="fas fa-star"></i>
                  </span>
                  <span>
                    <i class="far fa-star"></i>
                  </span>
                </div>
                <div class="price py-2">
                  <span>$152</span>
                </div>
                <button class="btn btn-warning font-size-12" type="submit">Add to Cart</button>
              </div>
            </div>
          </div>
          <div class="item py-2 bg-light">
            <div class="product ">
              <a href="#"><img src="./assets/products/3.png" alt="product3" class="img-fluid"></a>
              <div class="text-center">
                <h6>Samsung Galaxy4</h6>
                <div class="rating text-warning font-size-12">
                  <span>
                    <i class="fas fa-star"></i>
                  </span>
                  <span>
                    <i class="fas fa-star"></i>
                  </span>
                  <span>
                    <i class="fas fa-star"></i>
                  </span>
                  <span>
                    <i class="fas fa-star"></i>
                  </span>
                  <span>
                    <i class="far fa-star"></i>
                  </span>
                </div>
                <div class="price py-2">
                  <span>$152</span>
                </div>
                <button class="btn btn-warning font-size-12" type="submit">Add to Cart</button>
              </div>
            </div>
          </div>
          <div class="item py-2 bg-light">
            <div class="product ">
              <a href="#"><img src="./assets/products/4.png" alt="product4" class="img-fluid"></a>
              <div class="text-center">
                <h6>Samsung Galaxy6</h6>
                <div class="rating text-warning font-size-12">
                  <span>
                    <i class="fas fa-star"></i>
                  </span>
                  <span>
                    <i class="fas fa-star"></i>
                  </span>
                  <span>
                    <i class="fas fa-star"></i>
                  </span>
                  <span>
                    <i class="fas fa-star"></i>
                  </span>
                  <span>
                    <i class="far fa-star"></i>
                  </span>
                </div>
                <div class="price py-2">
                  <span>$152</span>
                </div>
                <button class="btn btn-warning font-size-12" type="submit">Add to Cart</button>
              </div>
            </div>
          </div>
          <div class="item py-2 bg-light">
            <div class="product ">
              <a href="#"><img src="./assets/products/5.png" alt="product5" class="img-fluid"></a>
              <div class="text-center">
                <h6>Samsung Galaxy9</h6>
                <div class="rating text-warning font-size-12">
                  <span>
                    <i class="fas fa-star"></i>
                  </span>
                  <span>
                    <i class="fas fa-star"></i>
                  </span>
                  <span>
                    <i class="fas fa-star"></i>
                  </span>
                  <span>
                    <i class="fas fa-star"></i>
                  </span>
                  <span>
                    <i class="far fa-star"></i>
                  </span>
                </div>
                <div class="price py-2">
                  <span>$152</span>
                </div>
                <button class="btn btn-warning font-size-12" type="submit">Add to Cart</button>
              </div>
            </div>
          </div>
          <div class="item py-2 bg-light">
            <div class="product ">
              <a href="#"><img src="./assets/products/6.png" alt="product6" class="img-fluid"></a>
              <div class="text-center">
                <h6>Samsung Galaxy10</h6>
                <div class="rating text-warning font-size-12">
                  <span>
                    <i class="fas fa-star"></i>
                  </span>
                  <span>
                    <i class="fas fa-star"></i>
                  </span>
                  <span>
                    <i class="fas fa-star"></i>
                  </span>
                  <span>
                    <i class="fas fa-star"></i>
                  </span>
                  <span>
                    <i class="far fa-star"></i>
                  </span>
                </div>
                <div class="price py-2">
                  <span>$152</span>
                </div>
                <button class="btn btn-warning font-size-12" type="submit">Add to Cart</button>
              </div>
            </div>
          </div>
          <div class="item py-2 bg-light">
            <div class="product ">
              <a href="#"><img src="./assets/products/8.png" alt="product8" class="img-fluid"></a>
              <div class="text-center">
                <h6>Samsung Galaxy11</h6>
                <div class="rating text-warning font-size-12">
                  <span>
                    <i class="fas fa-star"></i>
                  </span>
                  <span>
                    <i class="fas fa-star"></i>
                  </span>
                  <span>
                    <i class="fas fa-star"></i>
                  </span>
                  <span>
                    <i class="fas fa-star"></i>
                  </span>
                  <span>
                    <i class="far fa-star"></i>
                  </span>
                </div>
                <div class="price py-2">
                  <span>$152</span>
                </div>
                <button class="btn btn-warning font-size-12" type="submit">Add to Cart</button>
              </div>
            </div>
          </div>
        </div>
        <!--Owl carousel-->
      </div>
    </section>
    <!--Top sales-->

    <!--special price-->
    <section id="special-price">
      <div class="container">
        <h4 style="font-size:34; color: #003859;">Special Price</h4>
        <div id="filters" class="button-group text-right font-size-16">
          <button class="btn is-checked" data-filter="*">All</button>
          <button class="btn" data-filter=".Apple">Apple</button>
          <button class="btn" data-filter=".Samsung">Samsung</button>
          <button class="btn" data-filter=".Redmi">Redmi</button>
        </div>

        <div class="grid">
          <div class="grid-item Apple border">
            <div class="item py-2" style="width: 200px;">
              <div class="product">
                <a href="#"><img src="./assets/products/1.png" alt="product1" class="img-fluid"></a>
                <div class="text-center">
                  <h6>Apple iPhone 10</h6>
                  <div class="rating text-warning font-size-12">
                    <span>
                      <i class="fas fa-star"></i>
                    </span>
                    <span>
                      <i class="fas fa-star"></i>
                    </span>
                    <span>
                      <i class="fas fa-star"></i>
                    </span>
                    <span>
                      <i class="fas fa-star"></i>
                    </span>
                    <span>
                      <i class="far fa-star"></i>
                    </span>
                  </div>
                  <div class="price py-2">
                    <span>$152</span>
                  </div>
                  <button class="btn btn-warning font-size-12" type="submit">Add to Cart</button>
                </div>
              </div>
            </div>
          </div>
          <div class="grid-item Samsung border">
            <div class="item py-2" style="width: 200px;">
              <div class="product">
                <a href="#"><img src="./assets/products/2.png" alt="product2" class="img-fluid"></a>
                <div class="text-center">
                  <h6>Samsung mobile</h6>
                  <div class="rating text-warning font-size-12">
                    <span>
                      <i class="fas fa-star"></i>
                    </span>
                    <span>
                      <i class="fas fa-star"></i>
                    </span>
                    <span>
                      <i class="fas fa-star"></i>
                    </span>
                    <span>
                      <i class="fas fa-star"></i>
                    </span>
                    <span>
                      <i class="far fa-star"></i>
                    </span>
                  </div>
                  <div class="price py-2">
                    <span>$152</span>
                  </div>
                  <button class="btn btn-warning font-size-12" type="submit">Add to Cart</button>
                </div>
              </div>
            </div>
          </div>
          <div class="grid-item Redmi border">
            <div class="item py-2" style="width: 200px;">
              <div class="product">
                <a href="#"><img src="./assets/products/3.png" alt="product13" class="img-fluid"></a>
                <div class="text-center">
                  <h6>Redmi Note 10</h6>
                  <div class="rating text-warning font-size-12">
                    <span>
                      <i class="fas fa-star"></i>
                    </span>
                    <span>
                      <i class="fas fa-star"></i>
                    </span>
                    <span>
                      <i class="fas fa-star"></i>
                    </span>
                    <span>
                      <i class="fas fa-star"></i>
                    </span>
                    <span>
                      <i class="far fa-star"></i>
                    </span>
                  </div>
                  <div class="price py-2">
                    <span>$152</span>
                  </div>
                  <button class="btn btn-warning font-size-12" type="submit">Add to Cart</button>
                </div>
              </div>
            </div>
          </div>
          <div class="grid-item Apple border">
            <div class="item py-2" style="width: 200px;">
              <div class="product">
                <a href="#"><img src="./assets/products/4.png" alt="product4" class="img-fluid"></a>
                <div class="text-center">
                  <h6>Apple iPhone 11</h6>
                  <div class="rating text-warning font-size-12">
                    <span>
                      <i class="fas fa-star"></i>
                    </span>
                    <span>
                      <i class="fas fa-star"></i>
                    </span>
                    <span>
                      <i class="fas fa-star"></i>
                    </span>
                    <span>
                      <i class="fas fa-star"></i>
                    </span>
                    <span>
                      <i class="far fa-star"></i>
                    </span>
                  </div>
                  <div class="price py-2">
                    <span>$152</span>
                  </div>
                  <button class="btn btn-warning font-size-12" type="submit">Add to Cart</button>
                </div>
              </div>
            </div>
          </div>
          <div class="grid-item Samsung border">
            <div class="item py-2" style="width: 200px;">
              <div class="product">
                <a href="#"><img src="./assets/products/5.png" alt="product5" class="img-fluid"></a>
                <div class="text-center">
                  <h6>Samsung mobile 3</h6>
                  <div class="rating text-warning font-size-12">
                    <span>
                      <i class="fas fa-star"></i>
                    </span>
                    <span>
                      <i class="fas fa-star"></i>
                    </span>
                    <span>
                      <i class="fas fa-star"></i>
                    </span>
                    <span>
                      <i class="fas fa-star"></i>
                    </span>
                    <span>
                      <i class="far fa-star"></i>
                    </span>
                  </div>
                  <div class="price py-2">
                    <span>$152</span>
                  </div>
                  <button class="btn btn-warning font-size-12" type="submit">Add to Cart</button>
                </div>
              </div>
            </div>
          </div>
          <div class="grid-item Apple border">
            <div class="item py-2" style="width: 200px;">
              <div class="product">
                <a href="#"><img src="./assets/products/6.png" alt="product6" class="img-fluid"></a>
                <div class="text-center">
                  <h6>Apple iPhone 12</h6>
                  <div class="rating text-warning font-size-12">
                    <span>
                      <i class="fas fa-star"></i>
                    </span>
                    <span>
                      <i class="fas fa-star"></i>
                    </span>
                    <span>
                      <i class="fas fa-star"></i>
                    </span>
                    <span>
                      <i class="fas fa-star"></i>
                    </span>
                    <span>
                      <i class="far fa-star"></i>
                    </span>
                  </div>
                  <div class="price py-2">
                    <span>$152</span>
                  </div>
                  <button class="btn btn-warning font-size-12" type="submit">Add to Cart</button>
                </div>
              </div>
            </div>
          </div>
          <div class="grid-item Samsung border">
            <div class="item py-2" style="width: 200px;">
              <div class="product">
                <a href="#"><img src="./assets/products/13.png" alt="product13" class="img-fluid"></a>
                <div class="text-center">
                  <h6>Samsung mobile 07</h6>
                  <div class="rating text-warning font-size-12">
                    <span>
                      <i class="fas fa-star"></i>
                    </span>
                    <span>
                      <i class="fas fa-star"></i>
                    </span>
                    <span>
                      <i class="fas fa-star"></i>
                    </span>
                    <span>
                      <i class="fas fa-star"></i>
                    </span>
                    <span>
                      <i class="far fa-star"></i>
                    </span>
                  </div>
                  <div class="price py-2">
                    <span>$152</span>
                  </div>
                  <button class="btn btn-warning font-size-12" type="submit">Add to Cart</button>
                </div>
              </div>
            </div>
          </div>
          <div class="grid-item Redmi border">
            <div class="item py-2" style="width: 200px;">
              <div class="product">
                <a href="#"><img src="./assets/products/8.png" alt="product8" class="img-fluid"></a>
                <div class="text-center">
                  <h6>Redmi Note 11</h6>
                  <div class="rating text-warning font-size-12">
                    <span>
                      <i class="fas fa-star"></i>
                    </span>
                    <span>
                      <i class="fas fa-star"></i>
                    </span>
                    <span>
                      <i class="fas fa-star"></i>
                    </span>
                    <span>
                      <i class="fas fa-star"></i>
                    </span>
                    <span>
                      <i class="far fa-star"></i>
                    </span>
                  </div>
                  <div class="price py-2">
                    <span>$152</span>
                  </div>
                  <button class="btn btn-warning font-size-12" type="submit">Add to Cart</button>
                </div>
              </div>
            </div>
          </div>
          <div class="grid-item Apple border">
            <div class="item py-2" style="width: 200px;">
              <div class="product">
                <a href="#"><img src="./assets/products/10.png" alt="product10" class="img-fluid"></a>
                <div class="text-center">
                  <h6>Apple iPhone 6</h6>
                  <div class="rating text-warning font-size-12">
                    <span>
                      <i class="fas fa-star"></i>
                    </span>
                    <span>
                      <i class="fas fa-star"></i>
                    </span>
                    <span>
                      <i class="fas fa-star"></i>
                    </span>
                    <span>
                      <i class="fas fa-star"></i>
                    </span>
                    <span>
                      <i class="far fa-star"></i>
                    </span>
                  </div>
                  <div class="price py-2">
                    <span>$152</span>
                  </div>
                  <button class="btn btn-warning font-size-12" type="submit">Add to Cart</button>
                </div>
              </div>
            </div>
          </div>
          <div class="grid-item Samsung border">
            <div class="item py-2" style="width: 200px;">
              <div class="product">
                <a href="#"><img src="./assets/products/11.png" alt="product11" class="img-fluid"></a>
                <div class="text-center">
                  <h6>Samsung mobile 2</h6>
                  <div class="rating text-warning font-size-12">
                    <span>
                      <i class="fas fa-star"></i>
                    </span>
                    <span>
                      <i class="fas fa-star"></i>
                    </span>
                    <span>
                      <i class="fas fa-star"></i>
                    </span>
                    <span>
                      <i class="fas fa-star"></i>
                    </span>
                    <span>
                      <i class="far fa-star"></i>
                    </span>
                  </div>
                  <div class="price py-2">
                    <span>$152</span>
                  </div>
                  <button class="btn btn-warning font-size-12" type="submit">Add to Cart</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--special price-->

    <!--Banner ads-->
    <section id="banner-ads">
      <div class="container py-5 text-center">
        <img src="/assets/banner1-cr-500x150.jpg" alt="banner1" class="img-fluid">
        <img src="/assets/banner2-cr-500x150.jpg" alt="banner2" class="img-fluid">
      </div>
    </section>
    <!--Banner ads-->

    <!--new phones section-->
    <section id="new-phones">
      <div class="container py-5">
        <h4 style="font-size: 34; color: #003859;">New Phones</h4>
        <hr>
        <!--Owl carousel-->
        <div class="owl-carousel owl-theme">
          <div class="item py-2 bg-light">
            <div class="product">
              <a href="#"><img src="./assets/products/1.png" alt="product1" class="img-fluid"></a>
              <div class="text-center">
                <h6>Samsung Galaxy1</h6>
                <div class="rating text-warning font-size-12">
                  <span>
                    <i class="fas fa-star"></i>
                  </span>
                  <span>
                    <i class="fas fa-star"></i>
                  </span>
                  <span>
                    <i class="fas fa-star"></i>
                  </span>
                  <span>
                    <i class="fas fa-star"></i>
                  </span>
                  <span>
                    <i class="far fa-star"></i>
                  </span>
                </div>
                <div class="price py-2">
                  <span>$152</span>
                </div>
                <button class="btn btn-warning font-size-12" type="submit">Add to Cart</button>
              </div>
            </div>
          </div>
          <div class="item py-2 bg-light">
            <div class="product ">
              <a href="#"><img src="./assets/products/2.png" alt="product2" class="img-fluid"></a>
              <div class="text-center">
                <h6>Samsung Galaxy2</h6>
                <div class="rating text-warning font-size-12">
                  <span>
                    <i class="fas fa-star"></i>
                  </span>
                  <span>
                    <i class="fas fa-star"></i>
                  </span>
                  <span>
                    <i class="fas fa-star"></i>
                  </span>
                  <span>
                    <i class="fas fa-star"></i>
                  </span>
                  <span>
                    <i class="far fa-star"></i>
                  </span>
                </div>
                <div class="price py-2">
                  <span>$152</span>
                </div>
                <button class="btn btn-warning font-size-12" type="submit">Add to Cart</button>
              </div>
            </div>
          </div>
          <div class="item py-2 bg-light">
            <div class="product ">
              <a href="#"><img src="./assets/products/3.png" alt="product3" class="img-fluid"></a>
              <div class="text-center">
                <h6>Samsung Galaxy4</h6>
                <div class="rating text-warning font-size-12">
                  <span>
                    <i class="fas fa-star"></i>
                  </span>
                  <span>
                    <i class="fas fa-star"></i>
                  </span>
                  <span>
                    <i class="fas fa-star"></i>
                  </span>
                  <span>
                    <i class="fas fa-star"></i>
                  </span>
                  <span>
                    <i class="far fa-star"></i>
                  </span>
                </div>
                <div class="price py-2">
                  <span>$152</span>
                </div>
                <button class="btn btn-warning font-size-12" type="submit">Add to Cart</button>
              </div>
            </div>
          </div>
          <div class="item py-2 bg-light">
            <div class="product ">
              <a href="#"><img src="./assets/products/4.png" alt="product4" class="img-fluid"></a>
              <div class="text-center">
                <h6>Samsung Galaxy6</h6>
                <div class="rating text-warning font-size-12">
                  <span>
                    <i class="fas fa-star"></i>
                  </span>
                  <span>
                    <i class="fas fa-star"></i>
                  </span>
                  <span>
                    <i class="fas fa-star"></i>
                  </span>
                  <span>
                    <i class="fas fa-star"></i>
                  </span>
                  <span>
                    <i class="far fa-star"></i>
                  </span>
                </div>
                <div class="price py-2">
                  <span>$152</span>
                </div>
                <button class="btn btn-warning font-size-12" type="submit">Add to Cart</button>
              </div>
            </div>
          </div>
          <div class="item py-2 bg-light">
            <div class="product ">
              <a href="#"><img src="./assets/products/5.png" alt="product5" class="img-fluid"></a>
              <div class="text-center">
                <h6>Samsung Galaxy9</h6>
                <div class="rating text-warning font-size-12">
                  <span>
                    <i class="fas fa-star"></i>
                  </span>
                  <span>
                    <i class="fas fa-star"></i>
                  </span>
                  <span>
                    <i class="fas fa-star"></i>
                  </span>
                  <span>
                    <i class="fas fa-star"></i>
                  </span>
                  <span>
                    <i class="far fa-star"></i>
                  </span>
                </div>
                <div class="price py-2">
                  <span>$152</span>
                </div>
                <button class="btn btn-warning font-size-12" type="submit">Add to Cart</button>
              </div>
            </div>
          </div>
          <div class="item py-2 bg-light">
            <div class="product ">
              <a href="#"><img src="./assets/products/6.png" alt="product6" class="img-fluid"></a>
              <div class="text-center">
                <h6>Samsung Galaxy10</h6>
                <div class="rating text-warning font-size-12">
                  <span>
                    <i class="fas fa-star"></i>
                  </span>
                  <span>
                    <i class="fas fa-star"></i>
                  </span>
                  <span>
                    <i class="fas fa-star"></i>
                  </span>
                  <span>
                    <i class="fas fa-star"></i>
                  </span>
                  <span>
                    <i class="far fa-star"></i>
                  </span>
                </div>
                <div class="price py-2">
                  <span>$152</span>
                </div>
                <button class="btn btn-warning font-size-12" type="submit">Add to Cart</button>
              </div>
            </div>
          </div>
          <div class="item py-2 bg-light">
            <div class="product ">
              <a href="#"><img src="./assets/products/8.png" alt="product8" class="img-fluid"></a>
              <div class="text-center">
                <h6>Samsung Galaxy11</h6>
                <div class="rating text-warning font-size-12">
                  <span>
                    <i class="fas fa-star"></i>
                  </span>
                  <span>
                    <i class="fas fa-star"></i>
                  </span>
                  <span>
                    <i class="fas fa-star"></i>
                  </span>
                  <span>
                    <i class="fas fa-star"></i>
                  </span>
                  <span>
                    <i class="far fa-star"></i>
                  </span>
                </div>
                <div class="price py-2">
                  <span>$152</span>
                </div>
                <button class="btn btn-warning font-size-12" type="submit">Add to Cart</button>
              </div>
            </div>
          </div>
        </div>
        <!--Owl carousel-->
      </div>
    </section>
    <!--new phones section-->

    <!--blog section-->
    <section id="blogs">
      <div class="container py-4">
        <h4 class="" style="font-size: 34; color: #003859;">Latest Blogs</h4>
        <hr>
        <div class="owl-carousel owl-theme">
          <div class="item">
            <div class="card border-0 mr-5" style="width: 18rem;">
              <h5 class="card-title font-size-16">Upcoming Mobiles</h5>
              <img src="/assets/blog/blog1.jpg" alt="cart image" class="card-img-top">
              <p class="card-text font-size-16 text-black-80 py-1">Lorem ipsum dolor sit amet consectetur adipisicing
                elit. Distinctio autem tenetur quae. Nemo sit,
                assumenda voluptatem minus similique qui vitae.</p>
              <a href="#" class="color-secondary">Go somewhere</a>
            </div>
          </div>
          <div class="item">
            <div class="card border-0 mr-5" style="width: 18rem;">
              <h5 class="card-title font-size-16">Upcoming Mobiles</h5>
              <img src="/assets/blog/blog2.jpg" alt="cart image" class="card-img-top">
              <p class="card-text font-size-16 text-black-80 py-1">Lorem ipsum dolor sit amet consectetur adipisicing
                elit. Distinctio autem tenetur quae. Nemo sit,
                assumenda voluptatem minus similique qui vitae.</p>
              <a href="#" class="color-secondary">Go somewhere</a>
            </div>
          </div>
          <div class="item">
            <div class="card border-0 mr-5" style="width: 18rem;">
              <h5 class="card-title font-size-16">Upcoming Mobiles</h5>
              <img src="/assets/blog/blog3.jpg" alt="cart image" class="card-img-top">
              <p class="card-text font-size-16 text-black-80 py-1">Lorem ipsum dolor sit amet consectetur adipisicing
                elit. Distinctio autem tenetur quae. Nemo sit,
                assumenda voluptatem minus similique qui vitae.</p>
              <a href="#" class="color-secondary">Go somewhere</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--blog section-->

  </main>
  <!--end main site-->

  <!--start footer-->
  <footer id="footer" class="bg-dark text-white py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-12">
          <h4 class="font-size-20">Mobile Shopee</h4>
          <p class="font-size-14 text-white-50">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio, fugit.
          </p>
        </div>
        <div class="col-lg-4 col-12">
          <h4 class="font-size-20">Newsletter</h4>
          <form class="form-row">
            <div class="col">
              <input type="email" class="form-control" placeholder="Email" required>
            </div>
            <div class="col">
              <button type="submit" class="btn btn-primary mb-2">Subscribe</button>
            </div>
          </form>
        </div>
        <div class="col-lg-2 col-12">
          <h4 class="font-size-20">Information</h4>
          <div class="d-flex flex-column flex-wrap">
            <a href="#" class="font-size-14 text-white-50 pb-1">About Us</a>
            <a href="#" class="font-size-14 text-white-50 pb-1">Delivery Information</a>
            <a href="#" class="font-size-14 text-white-50 pb-1">Privacy Policy</a>
            <a href="#" class="font-size-14 text-white-50 pb-1">Terms & Conditions</a>

          </div>
        </div>
        <div class="col-lg-2 col-12">
          <h4 class="font-size-20">Account</h4>
          <div class="d-flex flex-column flex-wrap">
            <a href="#" class="font-size-14 text-white-50 pb-1">My Account</a>
            <a href="#" class="font-size-14 text-white-50 pb-1">Order History</a>
            <a href="#" class="font-size-14 text-white-50 pb-1">Wishlist</a>
            <a href="#" class="font-size-14 text-white-50 pb-1">Newsletters</a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <div class="copyright text-center bg-dark text-white py-2">
    <p class="font-size-14">&copy; Copyrights 2025. Design By S. S. Bandara</p>
  </div>
  <!--end footer-->

  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>
  <script src="index.js"></script>

  <script>
    document.querySelectorAll(".navbar-nav .nav-item").forEach(item => {
      item.addEventListener("click", function () {
        document.querySelector(".nav-item.active")?.classList.remove("active");
        this.classList.add("active");
      });
    });
  </script>
</body>

</html>