<main class="main-wrapper">
    <!-- Start Breadcrumb Area  -->
    <div class="axil-breadcrumb-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-8">
                    <div class="inner">
                        <!-- <ul class="axil-breadcrumb">
                                <li class="axil-breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="separator"></li>
                                <li class="axil-breadcrumb-item active" aria-current="page">Clothes</li>
                            </ul> -->
                    </div>
                </div>
                <div class="col-lg-6 col-md-4">
                    <div class="inner">
                        <div class="bradcrumb-thumb">
                            <img style="height: 150px; width: 150px;" src="../assets/images/logo/logo.png" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Area  -->
    <!-- Start Shop Area  -->
    <div class="axil-shop-area axil-section-gap bg-color-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="axil-shop-top">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="category-select">

                                    <!-- Start Single Select  -->
                                    <select class="single-select">
                                        <option>Type</option>
                                        <option>T-Shirt</option>
                                        <option>Sport</option>
                                        <option>Sandal</option>
                                        <option>Belt</option>
                                        <option>Shoes</option>                                        
                                    </select>
                                    <!-- End Single Select  -->

                                    <!-- Start Single Select  -->
                                    <select class="single-select">
                                        <option>Brand</option>
                                        <option>Coolmate</option>
                                        <option>Bitis</option>
                                        <option>Adidas</option>
                                        <option>Nike</option>
                                    </select>
                                    <!-- End Single Select  -->

                                    <!-- Start Single Select  -->
                                    <select class="single-select">
                                        <option>Price Range</option>
                                        <option>100.000đ - 500.000đ</option>
                                        <option>500.000đ - 1.000.000đ</option>
                                        <option>1.000.000đ - 3.000.000đ</option>
                                        <option>3.000.000đ - 10.000.000đ</option>
                                        <option>>10.000.000đ</option>
                                    </select>
                                    <!-- End Single Select  -->

                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="category-select mt_md--10 mt_sm--10 justify-content-lg-end">
                                    <!-- Start Single Select  -->
                                    <select class="single-select">
                                        <option>Sort by Sale</option>
                                        <option>Sort by Name</option>
                                        <option>Sort by Price</option>
                                    </select>
                                    <!-- End Single Select  -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row--15">
                <?php
                    foreach($catalog_product as $pd)
                    {
                        if($pd['view']==1){
                            echo '
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="axil-product product-style-one has-color-pick mt--40">
                                    <div class="thumbnail">
                                        <a href="fashionApp.php?act=detail_product&id='.$pd['id_product'].'">
                                            <img class="conform-img" src="../uploads/'.$pd['product_img'].'" alt="Product Images">
                                        </a>
                                        <div class="product-hover-action">
                                            <ul class="cart-action">
                                                <li class="wishlist"><a href="fashionApp.php?act=detail_product&id='.$pd['id_product'].'"><i class="far fa-heart"></i></a></li>
                                                <li class="select-option"><a  href="fashionApp.php?act=detail_product&id='.$pd['id_product'].'">Buy product</a></li>
                                                <li class="quickview"><a href="fashionApp.php?act=detail_product&id='.$pd['id_product'].'"><i class="far fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="inner">
                                            <h5 class="title"><a href="fashionApp.php?act=detail_product&id='.$pd['id_product'].'">'.$pd['product_name'].'</a></h5>
                                            <div class="product-price-variant">
                                                <span class="price current-price">'.number_format($pd['product_prices']).'đ</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ';
                        }
                    }
                    ?>
                <!-- End Single Product  -->