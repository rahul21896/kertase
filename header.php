<?php
 require 'vendor/autoload.php';
?>
<style>
    .open_mobile_menu{
        left: 0 !important;
    }
</style>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light main-navbar fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#0">
                <img src="assets/image/keralogo1.png" alt="" style="width: 100px;">
            </a>
            <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button> -->
            <a class="btn m-cart-btn " href="#0">
                <img src="assets/image/search.webp">
            </a>
            <a id="m_cart_counter_tag" class="btn m-cart-btn mar-left
                  human-heart " href="#0">
                <img id="m_cart_heart_img" src="assets/image/heart.webp">
                <div class="m-count-badge" id="m_cart_counter" style="background-color:  #000000 ;">0</div>
            </a>
            <button class="navbar-toggler" type="button" id="toggle2">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item <?=($page== 'home') ? 'active' : '';?>">
                        <a class="nav-link" href="<?=get_url()?>">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item <?=($page== 'about') ? 'active' : '';?>">
                        <a class="nav-link" href="<?=get_url('about')?>">About</a>
                    </li>
                    <li class="nav-item dropdown <?=($page == 'product') ? 'active' : ''; ?>">
                        <a class="nav-link dropdown-toggle" href="#0" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Products
                        </a>
                        <div class="dropdown-menu products-dropdown" aria-labelledby="navbarDropdown">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5>By Collection</h5>
                                        <ul>
                                            <li style="border-color:#FFB6C1;">
                                                <a href="<?=get_url('product_detail')?>">Genesis</a>
                                            </li>
                                            <li style="border-color:#d47400;">
                                                <a href="<?=get_url('product_detail')?>">Elixir Ultime</a>
                                            </li>
                                            <li style="border-color:#eb2f00;">
                                                <a href="<?=get_url('product_detail')?>">Nutritive</a>
                                            </li>
                                            <li style="border-color:#e4866e;">
                                                <a href="<?=get_url('product_detail')?>">Discipline</a>
                                            </li>
                                            <li style="border-color:#d03f9b;">
                                                <a href="#0">Reflection Chromatique</a>
                                            </li>
                                            <li style="border-color:#27a8a9;">
                                                <a href="<?=get_url('product_detail')?>">Resistance</a>
                                            </li>
                                            <li style="border-color:#f3ede3;">
                                                <a href="<?=get_url('product_detail')?>">Densifique</a>
                                            </li>
                                            <li style="border-color:#939594;">
                                                <a href="<?=get_url('product_detail')?>">Specifique</a>
                                            </li>
                                            <li style="border-color:#cecece;">
                                                <a href="<?=get_url('product_detail')?>">Initialiste</a>
                                            </li>
                                            <li style="border-color:#000;">
                                                <a href="<?=get_url('product_detail')?>">Chronologiste</a>
                                            </li>
                                            <li style="border-color:#3d0000;">
                                                <a href="<?=get_url('product_detail')?>">Aura Botanica</a>
                                            </li>
                                            <li style="border-color:#8386dd;">
                                                <a href="<?=get_url('product_detail')?>">Blond Absolu</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>By Concern</h5>
                                        <ul>
                                            <li>
                                                <a href="<?=get_url('product_detail')?>">Dull, lack-lustre hair</a>
                                            </li>
                                            <li>
                                                <a href="<?=get_url('product_detail')?>">Frizzy, unmanageable hair</a>
                                            </li>
                                            <li>
                                                <a href="<?=get_url('product_detail')?>">Colour-treated hair</a>
                                            </li>
                                            <li>
                                                <a href="<?=get_url('product_detail')?>">Thinning hair</a>
                                            </li>
                                            <li>
                                                <a href="<?=get_url('product_detail')?>">Normal - dry hair</a>
                                            </li>
                                            <li>
                                                <a href="<?=get_url('product_detail')?>">Weak, brittle &amp; damaged hair</a>
                                            </li>
                                            <li>
                                                <a href="<?=get_url('product_detail')?>">Rebellious, thick hair</a>
                                            </li>
                                            <li>
                                                <a href="<?=get_url('product_detail')?>">Hair breakage</a>
                                            </li>
                                            <li>
                                                <a href="<?=get_url('product_detail')?>">Scalp concerns</a>
                                            </li>
                                            <li>
                                                <a href="<?=get_url('product_detail')?>">Improved hair quality</a>
                                            </li>
                                            <li>
                                                <a href="<?=get_url('product_detail')?>">Prelightened / naturally grey hair</a>
                                            </li>
                                            <li>
                                                <a href="<?=get_url('product_detail')?>">Hair in need of rejuvenation</a>
                                            </li>
                                            <li>
                                                <a href="<?=get_url('product_detail')?>">Natural-origin Haircare</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item <?=($page == 'services') ? 'active' : ''; ?>">
                        <a class="nav-link" href="<?=get_url('services') ?>">Services</a>
                    </li>
                    <li class="nav-item bl-1-ddd position-relative ">
                        <a id="cart_counter_tag" data-toggle="tooltip" data-placement="bottom" title="View" class="nav-link nav-icon ml-15  human-heart " href="#0">
                            <div class="count-badge" id="cart_counter" style="background-color:  #000000 ;">0</div>
                            <div class="heart">
                                <img id="cart_heart_img" style="opacity:1!important" src="assets/image/heart.webp">
                            </div>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link nav-icon" href="#0">
                            <img src="assets/image/search.webp">
                        </a>
                    </li>
                </ul>
            </div>
            <div class="mobile-menu">
                <ul class="m-menu">
                    <li class="m-menu-item">
                        <a class="m-menu-link m-menu-lbl">Menu</a>
                        <div class="ml-auto close-menu2" style="padding: 10px 20px 10px 10px;font-size: 16px;color: #000;position: absolute;right: 0;top: 0;">
                            <i class="fa fa-times"></i>
                        </div>
                    </li>
                    <!-- <li class="text-right m-menu-item">
                       <div class="close-menu">
                           <i class="fa fa-times"></i>
                       </div>
                       </li> -->
                    <li class="m-menu-item <?=($page == 'home') ? 'active' : '';?>">
                        <a class="m-menu-link" href="<?=get_url('')?>">Home</a>
                        <i class="fa fa-angle-right m-menu-arrow"></i>
                    </li>
                    <li class="m-menu-item <?=($page == 'about') ? 'active' : '';?>">
                        <a class="m-menu-link" href="<?=get_url('about')?>">About</a>
                        <i class="fa fa-angle-right m-menu-arrow"></i>
                    </li>
                    <li class="m-menu-item <?=($page == 'product') ? 'active' : '';?>">
                        <a class="m-menu-link" data-toggle="collapse" data-target="#m-products-menu">Products </a>
                        <i class="fa fa-angle-right m-menu-arrow m-product-arrow"></i>
                        <div id="m-products-menu" class="collapse m-products-menu">
                            <div class="m-menu-dd" data-toggle="collapse" data-target="#by-collection">By
                                Collection <i class="fa fa-angle-down"></i>
                            </div>
                            <div class="m-m-menu collapse" id="by-collection">
                                <a class="m-m-menu-collection" style="border-color:#FFB6C1;" href="<?=get_url('product_detail')?>">Genesis</a>
                                <a class="m-m-menu-collection" style="border-color:#d47400;" href="<?=get_url('product_detail')?>">Elixir Ultime</a>
                                <a class="m-m-menu-collection" style="border-color:#eb2f00;" href="<?=get_url('product_detail')?>">Nutritive</a>
                                <a class="m-m-menu-collection" style="border-color:#e4866e;" href="<?=get_url('product_detail')?>">Discipline</a>
                                <a class="m-m-menu-collection" style="border-color:#d03f9b;" href="<?=get_url('product_detail')?>">Reflection Chromatique</a>
                                <a class="m-m-menu-collection" style="border-color:#27a8a9;" href="<?=get_url('product_detail')?>">Resistance</a>
                                <a class="m-m-menu-collection" style="border-color:#f3ede3;" href="<?=get_url('product_detail')?>">Densifique</a>
                                <a class="m-m-menu-collection" style="border-color:#939594;" href="<?=get_url('product_detail')?>">Specifique</a>
                                <a class="m-m-menu-collection" style="border-color:#cecece;" href="<?=get_url('product_detail')?>">Initialiste</a>
                                <a class="m-m-menu-collection" style="border-color:#000;" href="<?=get_url('product_detail')?>">Chronologiste</a>
                                <a class="m-m-menu-collection" style="border-color:#3d0000;" href="<?=get_url('product_detail')?>">Aura Botanica</a>
                                <a class="m-m-menu-collection" style="border-color:#8386dd;" href="<?=get_url('product_detail')?>">Blond Absolu</a>
                            </div>
                            <div class="m-menu-dd" data-toggle="collapse" data-target="#by-concern">By Concern
                                <i class="fa fa-angle-down"></i>
                            </div>
                            <div class="m-m-menu collapse" id="by-concern">
                                <a class="m-m-menu-concern" href="<?=get_url('product_detail')?>">Dull, lack-lustre hair</a>
                                <a class="m-m-menu-concern" href="<?=get_url('product_detail')?>">Frizzy, unmanageable hair</a>
                                <a class="m-m-menu-concern" href="<?=get_url('product_detail')?>">Colour-treated hair</a>
                                <a class="m-m-menu-concern" href="<?=get_url('product_detail')?>">Thinning hair</a>
                                <a class="m-m-menu-concern" href="<?=get_url('product_detail')?>">Normal - dry hair</a>
                                <a class="m-m-menu-concern" href="<?=get_url('product_detail')?>">Weak, brittle &amp; damaged hair</a>
                                <a class="m-m-menu-concern" href="<?=get_url('product_detail')?>">Rebellious, thick hair</a>
                                <a class="m-m-menu-concern" href="<?=get_url('product_detail')?>">Hair breakage</a>
                                <a class="m-m-menu-concern" href="<?=get_url('product_detail')?>">Scalp concerns</a>
                                <a class="m-m-menu-concern" href="<?=get_url('product_detail')?>">Improved hair quality</a>
                                <a class="m-m-menu-concern" href="<?=get_url('product_detail')?>">Prelightened / naturally grey hair</a>
                                <a class="m-m-menu-concern" href="<?=get_url('product_detail')?>">Hair in need of rejuvenation</a>
                                <a class="m-m-menu-concern" href="<?=get_url('product_detail')?>">Natural-origin Haircare</a>
                            </div>
                        </div>
                    </li>
                    <li class="m-menu-item <?=($page == 'service') ? 'active' : '';?>">
                        <a class="m-menu-link " href="<?=get_url('services')?>">Services</a>
                        <i class="fa fa-angle-right m-menu-arrow"></i>
                    </li>
                    <li class="m-menu-item">
                        <a class="m-menu-link" data-toggle="modal" data-target="#exampleModalCenter">Contact
                            Salon</a>
                        <i class="fa fa-angle-right m-menu-arrow"></i>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Facebook Pixel Code -->
    <!-- End Facebook Pixel Code -->
</header>
