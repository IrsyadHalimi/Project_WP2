<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $title; ?> | <?php echo get_store_name(); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

</head>

<body class="goto-here">
    <div class="py-1 bg-primary">
        <div class="container">
            <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
                <div class="col-lg-12 d-block">
                    <div class="row d-flex">
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                            <span class="text"><?php echo get_settings('store_phone_number'); ?></span>
                        </div>
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                            <span class="text"><?php echo get_settings('store_email'); ?></span>
                        </div>
                        <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
                            <span class="text"><?php echo get_settings('store_tagline'); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="<?php echo base_url(); ?>"><?php echo get_store_name(); ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="<?php echo base_url(); ?>" class="nav-link">Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item" href="<?php echo site_url('shop/cart'); ?>">Keranjang Belanja</a>
                            <a class="dropdown-item" href="<?php echo site_url('customer/payments/confirm'); ?>">Konfirmasi Pembayaran</a>
                        </div>
                    </li>
                    <li class="nav-item"><a href="<?php echo site_url('pages/about'); ?>" class="nav-link">Tentang Kami</a></li>
                    <li class="nav-item"><a href="<?php echo site_url('pages/contact'); ?>" class="nav-link">Kontak</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Akun</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown05">
                            <?php if (is_login() && is_customer()) : ?>
                                <a class="dropdown-item" href="<?php echo site_url('customer'); ?>">Akun saya</a>
                                <a class="dropdown-item" href="<?php echo site_url('customer/orders'); ?>">Order</a>
                                <div class="divider"></div>
                                <a class="dropdown-item" href="<?php echo site_url('auth/logout'); ?>">Logout</a>
                            <?php elseif (is_login() && is_admin()) : ?>
                                <a class="dropdown-item" href="<?php echo site_url('admin'); ?>">Dasbor</a>
                                <div class="divider"></div>
                                <a class="dropdown-item" href="<?php echo site_url('auth/logout'); ?>">Logout</a>
                            <?php else : ?>
                                <a class="dropdown-item" href="<?php echo site_url('auth/login'); ?>">Masuk Log</a>
                                <a class="dropdown-item" href="<?php echo site_url('auth/register'); ?>">Daftar</a>
                            <?php endif; ?>
                        </div>
                    </li>
                    <li class="nav-item cta cta-colored"><a href="<?php echo site_url('shop/cart'); ?>" class="nav-link"><span class="icon-shopping_cart"></span>[<span class="cart-item-total">0</span>]</a></li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->
    <?php
    defined('BASEPATH') or exit('No direct script access allowed');
    ?>
    <section id="home-section" class="hero">
        <div class="home-slider owl-carousel">
            <div class="slider-item" style="background-image: url(<?php echo get_theme_uri('images/bg_1.jpg'); ?>);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                        <div class="col-md-12 ftco-animate text-center">
                            <h1 class="mb-2">Kami Menjual Hanya Sayuran dan Buah Terbaik</h1>
                            <h2 class="subheading mb-4">Sayur dan Buah Segar Langsung dari Kebun</h2>
                            <p><a href="#products" class="btn btn-primary">Belanja Sekarang</a></p>
                        </div>

                    </div>
                </div>
            </div>

            <div class="slider-item" style="background-image: url(<?php echo get_theme_uri('images/bg_2.jpg'); ?>);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                        <div class="col-sm-12 ftco-animate text-center">
                            <h1 class="mb-2">100% Sayur dan Buah Segar</h1>
                            <h2 class="subheading mb-4">Sayur dan Buah Segar Langsung dari Kebun</h2>
                            <p><a href="#products" class="btn btn-primary">Belanja Sekarang</a></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section" id="products">
        <div class="container">
            <div class="row no-gutters ftco-services">
                <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services mb-md-0 mb-4">
                        <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
                            <span class="flaticon-shipped"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Gratis Ongkir</h3>
                            <span>Belanja minimal Rp <?php echo format_rupiah(get_settings('min_shop_to_free_shipping_cost')); ?></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services mb-md-0 mb-4">
                        <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
                            <span class="flaticon-diet"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Selalu Segar</h3>
                            <span>Dipetik Langsung dari Kebun</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services mb-md-0 mb-4">
                        <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
                            <span class="flaticon-award"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Kualitas Terbaik</h3>
                            <span>Kualitas dari Pertanian Terbaik</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services mb-md-0 mb-4">
                        <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
                            <span class="flaticon-customer-service"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Bantuan</h3>
                            <span>Bantuan 24/7 Selalu Online</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-3 pb-3">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span class="subheading">Produk Terbaru</span>
                    <h2 class="mb-4"><?php echo get_store_name(); ?></h2>
                    <p><?php echo get_settings('store_tagline'); ?></p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <?php if (count($products) > 0) : ?>
                    <?php foreach ($products as $product) : ?>
                        <div class="col-md-6 col-lg-3 ftco-animate">
                            <div class="product">
                                <a href="<?php echo site_url('shop/product/' . $product->id . '/' . $product->sku . '/'); ?>" class="img-prod">
                                    <img class="img-fluid" src="<?php echo base_url('assets/uploads/products/' . $product->picture_name); ?>" alt="<?php echo $product->name; ?>">
                                    <?php if ($product->current_discount > 0) : ?>
                                        <span class="status"><?php echo count_percent_discount($product->current_discount, $product->price, 0); ?>%</span>
                                    <?php endif; ?>
                                    <div class="overlay"></div>
                                </a>
                                <div class="text py-3 pb-4 px-3 text-center">
                                    <h3><a href="<?php echo site_url('shop/product/' . $product->id . '/' . $product->sku . '/'); ?>"><?php echo $product->name; ?></a></h3>
                                    <div class="d-flex">
                                        <div class="pricing">
                                            <p class="price">
                                                <?php if ($product->current_discount > 0) : ?>
                                                    <span class="mr-2 price-dc">Rp <?php echo format_rupiah($product->price); ?></span><span class="price-sale">Rp <?php echo format_rupiah($product->price - $product->current_discount); ?></span>
                                                <?php else : ?>
                                                    <span class="mr-2"><span class="price-sale">Rp <?php echo format_rupiah($product->price - $product->current_discount); ?></span>
                                                    <?php endif; ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="bottom-area d-flex px-3">
                                        <div class="m-auto d-flex">
                                            <a href="<?php echo site_url('shop/product/' . $product->id . '/' . $product->sku . '/'); ?>" class="buy-now d-flex justify-content-center align-items-center text-center">
                                                <span><i class="ion-ios-menu"></i></span>
                                            </a>
                                            <a href="#" class="add-to-chart add-cart d-flex justify-content-center align-items-center mx-1" data-sku="<?php echo $product->sku; ?>" data-name="<?php echo $product->name; ?>" data-price="<?php echo ($product->current_discount > 0) ? ($product->price - $product->current_discount) : $product->price; ?>" data-id="<?php echo $product->id; ?>">
                                                <span><i class="ion-ios-cart"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else : ?>
                <?php endif; ?>

            </div>
        </div>
    </section>

    <section class="ftco-section img" style="background-image: url(<?php echo get_theme_uri('images/bg_3.jpg'); ?>);">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-md-6 heading-section ftco-animate deal-of-the-day ftco-animate">
                    <span class="subheading">Produk dengan Harga Terbaik</span>
                    <h2 class="mb-4">Deal of the day</h2>
                    <p><?php echo $best_deal->description; ?></p>
                    <h3><a href="#"><?php echo $best_deal->name; ?></a></h3>
                    <span class="price">Rp <?php echo format_rupiah($best_deal->price); ?> <a href="#">sekarang hanya Rp <?php echo format_rupiah($best_deal->price - $best_deal->current_discount); ?></a></span>
                    <div id="timer" class="d-flex mt-5">
                        <div class="time pl-3">
                            <a href="#" class="btn btn-primary add-cart" data-sku="<?php echo $best_deal->sku; ?>" data-name="<?php echo $best_deal->name; ?>" data-price="<?php echo ($best_deal->current_discount > 0) ? ($best_deal->price - $best_deal->current_discount) : $best_deal->price; ?>" data-id="<?php echo $best_deal->id; ?>"><i class="ion-ios-cart"></i></a>
                        </div>
                        <div class="time pl-3">
                            <a class="btn btn-info" href="<?php echo site_url('shop/product/' . $product->id . '/' . $product->sku . '/'); ?>" class="buy-now d-flex justify-content-center align-items-center text-center">
                                <span><i class="ion-ios-menu text-white"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section testimony-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <span class="subheading">Testimony</span>
                    <h2 class="mb-4">Apa yang pelanggan kami katakan?</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel">
                        <?php if (count($reviews) > 0) : ?>
                            <?php foreach ($reviews as $review) : ?>
                                <div class="item">
                                    <div class="testimony-wrap p-4 pb-5">
                                        <div class="user-img mb-5" style="background-image: url(<?php echo base_url('assets/uploads/users/' . $review->profile_picture); ?>)">
                                            <span class="quote d-flex align-items-center justify-content-center">
                                                <i class="icon-quote-left"></i>
                                            </span>
                                        </div>
                                        <div class="text text-center">
                                            <p class="mb-5 pl-4 line"><?php echo $review->review_text; ?></p>
                                            <p class="name"><?php echo $review->name; ?></p>
                                            <span class="position"><?php echo get_formatted_date($review->review_date); ?></span>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php else : ?>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    defined('BASEPATH') or exit('No direct script access allowed');
    ?>
    <section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
        <div class="container py-4">

        </div>
    </section>
    <footer class="ftco-footer ftco-section">
        <div class="container">
            <div class="row">
                <div class="mouse">
                    <a href="#" class="mouse-icon">
                        <div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
                    </a>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2"><?php echo get_store_name(); ?></h2>
                        <p><?php echo get_settings('store_description'); ?></p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-5">
                        <h2 class="ftco-heading-2">Menu</h2>
                        <ul class="list-unstyled">
                            <li><a href="<?php echo site_url('pages/about'); ?>" class="py-2 d-block">Tentang Kami</a></li>
                            <li><a href="<?php echo site_url('pages/contact'); ?>" class="py-2 d-block">Hubungi Kami</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Bantuan</h2>
                        <div class="d-flex">
                            <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
                                <li><a href="<?php echo site_url('shop/cart'); ?>" class="py-2 d-block">Keranjang Belanja</a></li>
                                <li><a href="<?php echo site_url('customer/payments/confirm'); ?>" class="py-2 d-block">Konfirmasi Pembayaran</a></li>
                                <li><a href="<?php echo site_url('shop/testimonial'); ?>" class="py-2 d-block">Testimoni Pelanggan</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Punya Pertanyaan?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text"><?php echo get_settings('store_address'); ?></span></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span class="text"><?php echo get_settings('store_phone_number'); ?></span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span class="text"><?php echo get_settings('store_email'); ?></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | Made with <i class="icon-heart text-danger" aria-hidden="true"></i> for every people.
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>

    <script src="<?php echo get_theme_uri('js/popper.min.js'); ?>"></script>
    <script src="<?php echo get_theme_uri('js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo get_theme_uri('js/jquery.easing.1.3.js'); ?>"></script>
    <script src="<?php echo get_theme_uri('js/jquery.waypoints.min.js'); ?>"></script>
    <script src="<?php echo get_theme_uri('js/jquery.stellar.min.js'); ?>"></script>
    <script src="<?php echo get_theme_uri('js/owl.carousel.min.js'); ?>"></script>
    <script src="<?php echo get_theme_uri('js/jquery.magnific-popup.min.js'); ?>"></script>
    <script src="<?php echo get_theme_uri('js/aos.js'); ?>"></script>
    <script src="<?php echo get_theme_uri('js/jquery.animateNumber.min.js'); ?>"></script>
    <script src="<?php echo get_theme_uri('js/bootstrap-datepicker.js'); ?>"></script>
    <script src="<?php echo get_theme_uri('js/scrollax.min.js'); ?>"></script>
    <script src="<?php echo get_theme_uri('js/main.js'); ?>"></script>
    <script src="<?php echo base_url('assets/plugins/toastr/toastr.min.js'); ?>"></script>

    <script>
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }

        $.ajax({
            method: 'GET',
            url: '<?php echo site_url('shop/cart_api?action=cart_info'); ?>',
            success: function(res) {
                var data = res.data;

                var total_item = data.total_item;
                $('.cart-item-total').text(total_item);
            }
        });

        $('.add-cart').click(function(e) {
            e.preventDefault();

            var id = $(this).data('id');
            var sku = $(this).data('sku');
            var qty = $(this).data('qty');
            qty = (qty > 0) ? qty : 1;
            var price = $(this).data('price');
            var name = $(this).data('name');

            $.ajax({
                method: 'POST',
                url: '<?php echo site_url('shop/cart_api?action=add_item'); ?>',
                data: {
                    id: id,
                    sku: sku,
                    qty: qty,
                    price: price,
                    name: name
                },
                success: function(res) {
                    if (res.code == 200) {
                        var totalItem = res.total_item;

                        $('.cart-item-total').text(totalItem);
                        toastr.info('Item ditambahkan dalam keranjang');
                    } else {
                        console.log('Terjadi kesalahan');
                    }
                }
            });
        });
    </script>

</body>

</html>