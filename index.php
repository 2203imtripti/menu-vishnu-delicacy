<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- font awesome -->
    <script src="js/all.js"></script>
    <title>Vishnu delicacy</title>
    <style></style>
  </head>

  <body>
    <!-- header -->
    <header>
      <!-- navbar  -->
      <!-- 
https://www.iconfinder.com/icons/2427887/dessert_donut_doughnut_fat_sweets_icon
Creative Commons (Attribution 3.0 Unported);
https://www.iconfinder.com/korawan_m
     -->
      <nav class="navbar navbar-expand-lg px-4">
        <a class="navbar-brand" href="#"><img src="img/logo.svg" alt="" /></a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#myNav"
        >
          <span class="toggler-icon"><i class="fas fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="myNav">
          <ul class="navbar-nav mx-auto text-capitalize">
            <li class="nav-item active">
              <a class="nav-link" href="#">home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">about</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">store</a>
            </li>
          </ul>
          <div class="nav-info-items d-none d-lg-flex">
            <!-- single info -->
            <div
              class="nav-info align-items-center d-flex justify-content-between mx-lg-5"
            >
              <span class="info-icon mx-lg-3"
                ><i class="fas fa-phone"></i
              ></span>
              <p class="mb-0"></p>
            </div>
            <!-- end of single info -->
            <!-- single info -->
            <div
              id="cart-info"
              class="nav-info align-items-center cart-info d-flex justify-content-between mx-lg-5"
            >
              <span class="cart-info__icon mr-lg-3"
                ><i class="fas fa-shopping-cart"></i
              ></span>
              <p class="mb-0 text-capitalize">
                <span id="item-count">2 </span> items - $<span
                  class="item-total"
                  >10.49</span
                >
              </p>
            </div>
            <!-- end of single info -->
          </div>
        </div>
      </nav>
      <!-- end of nav -->
      <!-- banner  -->
      <div class="container-fluid">
        <div class="row max-height justify-content-center align-items-center">
          <div class="col-10 mx-auto banner text-center">
            <h1 class="text-capitalize">
              welcome to <strong class="banner-title">Vishnu Delicacy</strong>
            </h1>
            <a href="#store" class="btn banner-link text-uppercase my-2"
              >Order now</a
            >
          </div>
          <div id="cart" class="cart">
            <!-- cart item -->
            <div
              class="cart-item d-flex justify-content-between text-capitalize my-3"
            >
              <img
                src="img/small-sweets-1.jpeg"
                class="img-fluid rounded-circle"
                id="item-img"
                alt=""
              />
              <div class="item-text">
                <p id="cart-item-title" class="font-weight-bold mb-0">
                  cart item
                </p>
                <p id="cart-item-price" class="mb-0">10.99</p>
              </div>
              <a href="#" id="cart-item-remove" class="cart-item-remove">
                <i class="fas fa-trash"></i>
              </a>
            </div>
            <!--end of  cart item -->
            <!-- cart item -->
            <div
              class="cart-item d-flex justify-content-between text-capitalize my-3"
            >
              <img
                src="img/small-cake-2.jpeg"
                class="img-fluid rounded-circle"
                id="item-img"
                alt=""
              />
              <div class="cart-item-text">
                <p id="cart-item-title" class="font-weight-bold mb-0">
                  cart item
                </p>
                <p id="cart-item-price" class="mb-0">10.99</p>
              </div>
              <a href="#" id="cart-item-remove" class="cart-item-remove">
                <i class="fas fa-trash"></i>
              </a>
            </div>
            <!--end of  cart item -->
            <!-- cart total -->
            <div
              class="cart-total-container d-flex justify-content-around text-capitalize mt-5"
            >
              <h5>total</h5>
              <h5>
                $
                <strong id="cart-total" class="font-weight-bold">10.00</strong>
              </h5>
            </div>
            <!--end cart total -->
            <!-- cart buttons -->
            <div
              class="cart-buttons-container mt-3 d-flex justify-content-between"
            >
              <a
                href="#"
                id="clear-cart"
                class="btn btn-outline-secondary btn-black text-uppercase"
                >clear cart</a
              >
              <a
                href="#"
                class="btn btn-outline-secondary text-uppercase btn-pink"
                >checkout</a
              >
            </div>
            <!--end of  cart buttons -->
            <!--  -->
          </div>
        </div>
      </div>

      <!--end of  banner  -->
    </header>
    <!-- header -->
    <!-- about us -->
    <section class="about py-5" id="about">
      <div class="container">
        <div class="row">
          <div class="col-10 mx-auto col-md-6 my-5">
            <h1 class="text-capitalize">
              about <strong class="banner-title">us</strong>
            </h1>
            <p class="my-4 text-muted w-75">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit,
              aliquam voluptas beatae vitae expedita consectetur nesciunt quia
              deserunt asperiores facere fuga dicta fugiat corrupti et omnis
              porro at dolorum! Ad!
            </p>
            <a
              href="#"
              class="btn btn-outline-secondary btn-black text-uppercase"
              >explore</a
            >
          </div>
          <div class="col-10 mx-auto col-md-6 align-self-center my-5">
            <div class="about-img__container">
              <img src="img/p14.jpg" class="img-fluid" alt="" />
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- end of about us -->

    <!-- store -->
    <section id="store" class="store py-5">
      <div class="container">
        <!-- section title -->
        <div class="row">
          <div class="col-10 mx-auto col-sm-6 text-center">
            <h1 class="text-capitalize">
              our <strong class="banner-title">Menu</strong>
            </h1>
          </div>
        </div>
        <!-- end of section title -->
        <!--filter buttons -->
        <div class="row">
          <div
            class="col-10 mx-auto col-sm-6 d-flex justify-content-around my-5 sortBtn"
          >
            <a
              href="#"
              class="btn btn-outline-secondary btn-black text-uppercase filter-btn"
              data-filter=""
            >
              all</a
            >
            <a
              href="#"
              class="btn btn-outline-secondary btn-black text-uppercase filter-btn"
              data-filter=""
              >Veg</a
            >
            <a
              href="#"
              class="btn btn-outline-secondary btn-black text-uppercase filter-btn"
              data-filter=""
              >Nonveg</a
            >
            <a
              href="#"
              class="btn btn-outline-secondary btn-black text-uppercase filter-btn"
              data-filter=""
              >deserts</a
            >
          </div>
        </div>
        <!--end of filter buttons -->
        <!-- store  items-->
        <div class="row" id="store-items">
          <!-- single item -->
          <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item">
            <div class="card">
              <div class="img-container">
                <img
                  src="img/cake-1.jpeg"
                  class="card-img-top store-img"
                  alt=""
                />
                <div
                  class="store-icons d-flex justify-content-around align-items-center"
                >
                  <a href="#" class="store-icon"
                    ><i class="fas fa-heart fa-fw"></i
                  ></a>
                  <a href="#" class="store-icon"
                    ><i class="fas fa-search fa-fw"></i
                  ></a>
                  <a href="#" class="store-icon" data-id=""
                    ><i class="fas fa-shopping-cart fa-fw"></i
                  ></a>
                </div>
              </div>
              <div class="card-body">
                <div
                  class="card-text d-flex justify-content-between text-capitalize"
                >
                  <h5 id="store-item-name">item name</h5>
                  <h5 class="store-item-value">
                    $
                    <strong id="store-item-price" class="font-weight-bold"
                      >10</strong
                    >
                  </h5>
                </div>
              </div>
            </div>
          </div>
          <!-- end of store item-->
          <!-- single item -->
          <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item">
            <div class="card">
              <div class="img-container">
                <img
                  src="img/cupcake-1.jpeg"
                  class="card-img-top store-img"
                  alt=""
                />
                <div
                  class="store-icons d-flex justify-content-around align-items-center"
                >
                  <a href="#" class="store-icon"
                    ><i class="fas fa-heart fa-fw"></i
                  ></a>
                  <a href="#" class="store-icon"
                    ><i class="fas fa-search fa-fw"></i
                  ></a>
                  <a href="#" class="store-icon" data-id=""
                    ><i class="fas fa-shopping-cart fa-fw"></i
                  ></a>
                </div>
              </div>
              <div class="card-body">
                <div
                  class="card-text d-flex justify-content-between text-capitalize"
                >
                  <h5 id="store-item-name">item name</h5>
                  <h5 class="store-item-value">
                    $
                    <strong id="store-item-price" class="font-weight-bold"
                      >10</strong
                    >
                  </h5>
                </div>
              </div>
            </div>
          </div>
          <!-- end of store item-->
        </div>
      </div>
    </section>
    <!--end of store items -->

    <!-- jquery -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- script js -->
    <script src="js/app.js"></script>
  </body>
</html>
