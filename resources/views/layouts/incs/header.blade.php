<!-- نوار ناوبری -->
<nav class="navbar navbar-expand-lg navbar-light bg-white flex-column border-0">
    <div class="container-fluid">
        <div class="w-100">
            <div class="d-flex justify-content-between align-items-center flex-wrap">

                <!-- لوگو -->
                <a class="navbar-brand fw-bold fs-3 m-0 p-0 flex-shrink-0 order-0" href="index.blade.php">
                    <div class="d-flex align-items-center">
                        <svg class="f-w-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 77.53 72.26">
                            <path d="M10.43,54.2h0L0,36.13,10.43,18.06,20.86,0H41.72L10.43,54.2Zm67.1-7.83L73,54.2,68.49,62,45,48.47,31.29,72.26H20.86l-5.22-9L52.15,0H62.58l5.21,9L54.06,32.82,77.53,46.37Z" fill="currentColor" fill-rule="evenodd"/>
                        </svg>
                    </div>
                </a>
                <!-- / لوگو -->

                <!-- آیکون‌های ناوبری -->
                <ul class="list-unstyled mb-0 d-flex align-items-center order-1 order-lg-2 nav-sidelinks">

                    <!-- پشتیبان ناوبری موبایل -->
                    <li class="d-lg-none">
                        <span class="nav-link text-body d-flex align-items-center cursor-pointer" data-bs-toggle="collapse"
                              data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                              aria-label="Toggle navigation"><i class="ri-menu-line ri-lg me-1"></i> منو</span>
                    </li>
                    <!-- /پشتیبان ناوبری موبایل -->

                    <!-- جستجوی ناوبری -->
                    <li class="d-none d-sm-block">
                        <span class="nav-link text-body search-trigger cursor-pointer">جستجو</span>

                        <!-- افزودن جستجو به ناوبری -->
                        <div class="navbar-search d-none">
                            <div class="input-group mb-3 h-100">
                                    <span class="input-group-text px-4 bg-transparent border-0"><i
                                            class="ri-search-line ri-lg"></i></span>
                                <input type="text" class="form-control text-body bg-transparent border-0"
                                       placeholder="ترم‌های جستجو خود را وارد کنید...">
                                <span
                                    class="input-group-text px-4 cursor-pointer disable-child-pointer close-search bg-transparent border-0"><i
                                        class="ri-close-circle-line ri-lg"></i></span>
                            </div>
                        </div>
                        <div class="search-overlay"></div>
                        <!-- / افزودن جستجو به ناوبری -->

                    </li>
                    <!-- /جستجوی ناوبری -->

                    <!-- ورود به حساب ناوبری -->
                    <li class="ms-1 d-none d-lg-inline-block">
                        <a class="nav-link text-body" href="./login.html">
                            حساب
                        </a>
                    </li>
                    <!-- /ورود به حساب ناوبری -->

                    <!-- نماد سبد ناوبری -->
                    <li class="ms-1 d-inline-block position-relative dropdown-cart">
                        <button class="nav-link me-0 disable-child-pointer border-0 p-0 bg-transparent text-body"
                                type="button">
                            سبد (2)
                        </button>
                        <div class="cart-dropdown dropdown-menu">

                            <!-- هدر سبد -->
                            <div class="d-flex justify-content-between align-items-center border-bottom pt-3 pb-4">
                                <h6 class="fw-bolder m-0">خلاصه سبد (2 مورد)</h6>
                                <i class="ri-close-circle-line text-muted ri-lg cursor-pointer btn-close-cart"></i>
                            </div>
                            <!-- / هدر سبد -->

                            <!-- محصولات سبد -->
                            <div>

                                <!-- محصول سبد -->
                                <div class="row mx-0 py-4 g-0 border-bottom">
                                    <div class="col-2 position-relative">
                                        <picture class="d-block ">
                                            <img class="img-fluid" src="{{asset('assets/images/products/product-cart-1.jpg')}}" alt="قالب HTML بوت‌استرپ توسط Pixel Rocket">
                                        </picture>
                                    </div>
                                    <div class="col-9 offset-1">
                                        <div>
                                            <h6 class="justify-content-between d-flex align-items-start mb-2">
                                                Nike Air VaporMax 2021
                                                <i class="ri-close-line ms-3"></i>
                                            </h6>
                                            <span class="d-block text-muted fw-bolder text-uppercase fs-9">سایز: 9 / تعداد: 1</span>
                                        </div>
                                        <p class="fw-bolder text-end text-muted m-0">$85.00</p>
                                    </div>
                                </div>
                                <!-- /محصول سبد -->
                                <div class="row mx-0 py-4 g-0 border-bottom">
                                    <div class="col-2 position-relative">
                                        <picture class="d-block ">
                                            <img class="img-fluid" src="{{asset('assets/images/products/product-cart-2.jpg')}}" alt="قالب HTML بوت‌استرپ توسط Pixel Rocket">
                                        </picture>
                                    </div>
                                    <div class="col-9 offset-1">
                                        <div>
                                            <h6 class="justify-content-between d-flex align-items-start mb-2">
                                                Nike ZoomX Vaporfly
                                                <i class="ri-close-line ms-3"></i>
                                            </h6>
                                            <span class="d-block text-muted fw-bolder text-uppercase fs-9">سایز: 11 / تعداد: 1</span>
                                        </div>
                                        <p class="fw-bolder text-end text-muted m-0">$125.00</p>
                                    </div>
                                </div>
                            </div>
                            <!-- /محصولات سبد -->

                            <!-- خلاصه سبد -->
                            <div>
                                <div class="pt-3">
                                    <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-start mb-4 mb-md-2">
                                        <div>
                                            <p class="m-0 fw-bold fs-5">جمع کل</p>
                                            <span class="text-muted small">با مالیات فروش 45.89 دلار</span>
                                        </div>
                                        <p class="m-0 fs-5 fw-bold">$422.99</p>
                                    </div>
                                </div>
                                <a href="./cart.html" class="btn btn-outline-dark w-100 text-center mt-4" role="button">مشاهده سبد</a>
                                <a href="./checkout.html" class="btn btn-dark w-100 text-center mt-2" role="button">پرداخت به صورت نهایی</a>
                            </div>
                            <!-- / خلاصه سبد -->
                        </div>


                    </li>
                    <!-- /نماد سبد ناوبری -->

                </ul>
                <!-- /آیکون‌های ناوبری -->

                <!-- ناوبری اصلی -->
                <div class="flex-shrink-0 collapse navbar-collapse navbar-collapse-light w-auto flex-grow-1 order-2 order-lg-1"
                     id="navbarNavDropdown">

                    <!-- منو -->
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown dropdown position-static">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                مردان
                            </a>
                            <!-- منوی کشیدن لباس مردانه -->
                            <div class="dropdown-menu dropdown-megamenu">
                                <div class="container-fluid">
                                    <div class="row g-0 g-lg-3">
                                        <!-- بخش لینک‌های منوی کشیدن لباس مردانه -->
                                        <div class="col col-lg-8 py-lg-5">
                                            <div class="row py-3 py-lg-0 flex-wrap gx-4 gy-6">
                                                <!-- ردیف منو -->
                                                <div class="col">
                                                    <h6 class="dropdown-heading">کت و جاکت</h6>
                                                    <ul class="list-unstyled">
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">جاکت ضدآب</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">جاکت های عایق</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">جاکت‌های پایینی</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">جاکت‌های نرم</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">جاکت‌های اسپرت</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">جاکت‌های مقاوم در برابر باد</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">جاکت‌های تنفسی</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">تمیز کردن و ضدآب کردن</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item dropdown-link-all" href="./category.html">مشاهده همه</a></li>
                                                    </ul>
                                                </div>
                                                <!-- / ردیف منو -->

                                                <!-- ردیف منو -->
                                                <div class="col">
                                                    <h6 class="dropdown-heading">عایق</h6>
                                                    <ul class="list-unstyled">
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">جاکت‌های عایق</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">بادبندی</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">پارکا</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">لباس‌های زیر و حرارتی</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">کلاه زمستانی</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">شال و گردن</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">دستکش و میتن</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">لوازم جانبی</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item dropdown-link-all" href="./category.html">مشاهده همه</a></li>
                                                    </ul>
                                                </div>
                                                <!-- / ردیف منو -->

                                                <!-- ردیف منو -->
                                                <div class="d-none d-xxl-block col">
                                                    <h6 class="dropdown-heading">کفش</h6>
                                                    <ul class="list-unstyled">
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">زندگی روزمره و اسپرت</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">کفش‌های پیاده‌روی</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">کفش‌های دویدن</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">کفش‌های نظامی</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">کفش‌های پارچه‌ای پیاده‌روی</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">کفش‌های چرمی پیاده‌روی</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">کفش‌های ب</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item text-danger" href="./category.html">Accessories</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item text-danger dropdown-link-all" href="./category.html">View All</a></li>
                                                    </ul>
                                                </div>
                                                <!-- / menu row-->
                                            </div>

                                            <div class="align-items-center justify-content-between mt-5 d-none d-lg-flex">
                                                <div class="me-5 f-w-20">
                                                    <a class="d-block" href="./category.html">
                                                        <picture>
                                                            <img class="img-fluid d-table mx-auto" src="./assets/images/logos/logo-1.svg" alt="">
                                                        </picture>
                                                    </a>
                                                </div>
                                                <div class="me-5 f-w-20">
                                                    <a class="d-block" href="./category.html">
                                                        <picture>
                                                            <img class="img-fluid d-table mx-auto" src="{{asset('assets/images/logos/logo-2.svg')}}" alt="">
                                                        </picture>
                                                    </a>
                                                </div>
                                                <div class="me-5 f-w-20">
                                                    <a class="d-block" href="./category.html">
                                                        <picture>
                                                            <img class="img-fluid d-table mx-auto" src="{{asset('assets/images/logos/logo-3.svg')}}" alt="">
                                                        </picture>
                                                    </a>
                                                </div>
                                                <div class="me-5 f-w-20">
                                                    <a class="d-block" href="./category.html">
                                                        <picture>
                                                            <img class="img-fluid d-table mx-auto" src="{{asset('assets/images/logos/logo-4.svg')}}" alt="">
                                                        </picture>
                                                    </a>
                                                </div>
                                                <div class="me-5 f-w-20">
                                                    <a class="d-block" href="./category.html">
                                                        <picture>
                                                            <img class="img-fluid d-table mx-auto" src="{{asset('assets/images/logos/logo-5.svg')}}" alt="">
                                                        </picture>
                                                    </a>
                                                </div>
                                                <div class="me-5 f-w-20">
                                                    <a class="d-block" href="./category.html">
                                                        <picture>
                                                            <img class="img-fluid d-table mx-auto" src={{asset('/assets/images/logos/logo-6.svg')}} alt="">
                                                        </picture>
                                                    </a>
                                                </div>
                                            </div>                  </div>
                                        <!-- /Menswear Dropdown Menu Links Section-->

                                        <!-- Menswear Dropdown Menu Images Section-->
                                        <div class="col-lg-4 d-none d-lg-block">
                                            <div class="vw-50 border-start h-100 position-absolute"></div>
                                            <div class="py-lg-5 position-relative z-index-10 px-lg-4">
                                                <div class="row g-4">
                                                    <div class="col-12 col-md-6">
                                                        <div class="card justify-content-center d-flex align-items-nter bg-transparent">
                                                            <picture class="w-100 d-block mb-2 mx-auto">
                                                                <img class="w-100 rounded" title="" src="{{asset('assets/images/banners/banner-12.jpg')}}" alt="HTML Bootstrap Template by Pixel Rocket">
                                                            </picture>
                                                            <a class="fw-bolder link-cover" href="./category.html">Latest Arrivals</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="card justify-content-center d-flex align-items-center bg-transparent">
                                                            <picture class="w-100 d-block mb-2 mx-auto">
                                                                <img class="w-100 rounded" title="" src="{{asset('assets/images/banners/banner-13.jpg')}}" alt="HTML Bootstrap Template by Pixel Rocket">
                                                            </picture>
                                                            <a class="fw-bolder link-cover" href="./category.html">Accessories</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="card justify-content-center d-flex align-items-center bg-transparent">
                                                            <picture class="w-100 d-block mb-2 mx-auto">
                                                                <img class="w-100 rounded" title="" src="{{asset('assets/images/banners/banner-14.jpg')}}" alt="HTML Bootstrap Template by Pixel Rocket">
                                                            </picture>
                                                            <a class="fw-bolder link-cover" href="./category.html">T-Shirts</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="card justify-content-center d-flex align-items-center bg-transparent">
                                                            <picture class="w-100 d-block mb-2 mx-auto">
                                                                <img class="w-100 rounded" title="" src="{{asset('assets/images/banners/banner-15.jpg')}}" alt="HTML Bootstrap Template by Pixel Rocket">
                                                            </picture>
                                                            <a class="fw-bolder link-cover" href="./category.html">Jackets</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="./category.html" class="btn btn-link p-0 fw-bolder text-link-border mt-5 text-dark mx-auto d-table">Visit Mens Section</a>
                                            </div>
                                        </div>
                                        <!-- Menswear Dropdown Menu Images Section-->
                                    </div>
                                </div>
                            </div>
                            <!-- / Menswear dropdown menu-->
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Women
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="./category.html">Tops</a></li>
                                <li><a class="dropdown-item" href="./category.html">Bottoms</a></li>
                                <li><a class="dropdown-item" href="./category.html">Jeans</a></li>
                                <li><a class="dropdown-item" href="./category.html">T-Shirts</a></li>
                                <li><a class="dropdown-item" href="./category.html">Shoes</a></li>
                                <li><a class="dropdown-item" href="./category.html">Accessories</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./category.html" role="button">
                                Kids
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./category.html" role="button">
                                Sale
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Pages
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="index.blade.php">Homepage</a></li>
                                <li><a class="dropdown-item" href="./category.html">Category</a></li>
                                <li><a class="dropdown-item" href="./product.html">Product</a></li>
                                <li><a class="dropdown-item" href="./cart.html">Cart</a></li>
                                <li><a class="dropdown-item" href="./checkout.html">Checkout</a></li>
                                <li><a class="dropdown-item" href="./login.html">Login</a></li>
                                <li><a class="dropdown-item" href="./register.html">Register</a></li>
                                <li><a class="dropdown-item" href="./forgotten-password.html">Forgotten Password</a></li>
                            </ul>
                        </li>
                    </ul>                    <!-- / Menu-->

                </div>
                <!-- / Main Navigation-->

            </div>
        </div>
    </div>
</nav>
<!-- / Navbar-->    <!-- / Navbar-->
