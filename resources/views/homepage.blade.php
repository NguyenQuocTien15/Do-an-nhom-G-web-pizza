<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- favicon -->
    <!-- <link href=".public/img/favicon.ico" rel="shortcut icon"> -->
    <!-- Bootstrap core CSS -->
    <link href="../storage/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
    <link href="../storage/css/tobii.min.css" type="text/css" rel="stylesheet" />
    <link href="../storage/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <link href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" rel="stylesheet">
    <link href="../storage/css/animate.min.css" rel="stylesheet">
    <!-- Custom  Css -->
    <link href="../storage/css/style.min.css" rel="stylesheet" type="text/css" id="theme-opt" />
</head>

<body>
    <!-- Start Hero -->
    <section class="bg-home d-flex align-items-center w-100"
        style="background: url('../storage/img/FoodVVD.png') center center;" id="home">
        <div class="bg-overlay opacity-1"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-heading">
                       
                       
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End Hero -->

    <!-- Start -->
    <section class="section" id="service">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 mb-4 pb-2">
                    <div class="section-title text-center">
                        <h4 class="title mb-4 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">Chào mừng các bạn đến với cửa hàng của chúng tôi.<br> Dưới đây là các món có lượt mua nhiều nhất.</h4>
                        <p class="text-muted para-desc mx-auto mb-0 wow animate__animated animate__fadeInUp"
                            data-wow-delay=".3s">Nhanh tay đặt đồ ăn về nào!</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row position-relative z-index-1">
                @foreach($productBestSale as $item)
                <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2 wow animate__animated animate__fadeInUp"
                    data-wow-delay=".5s">
                    <div class="features feature-primary shadow p-4 rounded-md text-center bg-white">
                        <div class="icons text-center">
                            <img class="hv-size" style="width: 100px; height: 100px; " src="{{asset('storage/img/'.$item->image)}}" alt="">
                        </div>

                        <div class="content mt-4 pt-2">
                            <a href="" class="title text-dark h5">{{$item->name}}</a>
                            <p class="text-muted mt-3">{{$item->description}}</p>

                            <div class="mt-4 pt-2">
                                <a href="#" class="btn btn-link primary">Mua ngay <i
                                        class="uil uil-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
                @endforeach
                

            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End -->

    <!-- Start -->
    <section class="section bg-light overflow-hidden" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0 wow animate__animated animate__fadeInUp"
                    data-wow-delay=".1s">
                    <div class="position-relative">
                        <img src="{{asset('storage/img/'.$productBestSale[1]->image)}}" class="rounded-md img-fluid mx-auto d-block" alt="" style="width:350px; height:400px;">
                        <div class="play-icon">
                            <a href="#!" data-type="youtube" data-id="yba7hPeTSjk" class="play-btn lightbox">
                                <i class="mdi mdi-play text-primary rounded-circle bg-white shadow"></i>
                            </a>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-7 col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <div class="section-title ms-lg-5">
                        <h4 class="title mb-4 wow animate__animated animate__fadeInUp" data-wow-delay=".3s">Món giảm giá duy nhất trong hôm nay.  Chỉ còn 99 phần</h4>
                        <p class="text-muted para-desc mb-0 wow animate__animated animate__fadeInUp"
                            data-wow-delay=".3s">{{$productBestSale[1]->description}}</p>

                        <div class="d-inline-flex rounded-md shadow p-4 bg-white mt-4 wow animate__animated animate__fadeInUp"
                            data-wow-delay=".5s">
                            <i class="uil uil-shop display-4 mb-0 opacity-5"></i>

                            <div class="content ms-3">
                                <h5>Mở danh sách món ăn nào</h5>
                                <p class="text-muted">Siêu rẻ chỉ còn 99.000VND </p>
                                <a href="" class="btn btn-primary">Mua ngay</a>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

        
    </section><!--end section-->
    <!-- End -->


    <!-- Start -->
    <section class="section" id="price">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 mb-4 pb-2">
                    <div class="section-title text-center">
                        <h4 class="title mb-4 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">Các combo giá cực rẻ
                            <br> & Giá siêu ưu đãi</h4>
                        <p class="text-muted para-desc mx-auto mb-0 wow animate__animated animate__fadeInUp"
                            data-wow-delay=".3s">Dưới đây là các gói ưu đãi chỉ có ở cửa hàng chúng tôi. Mọi người nhanh tay nào!</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row position-relative z-index-1">
                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 wow animate__animated animate__fadeInUp"
                    data-wow-delay=".5s">
                    <div class="pricing pricing-primary shadow rounded-md text-center bg-white">
                        <div class="border-bottom p-4">
                            <div class="icons text-center mb-4">
                                <i
                                    class="uil uil-trees text-white d-flex align-items-center justify-content-center rounded-pill h3 mb-0 mx-auto"></i>
                            </div>

                            <h3 class="text-gradient-primary">Gói nhỏ</h3>

                            <div class="d-flex justify-content-center mb-0">
                                <span class="price h1 mb-0">99</span>
                                <span class="h4 mb-0 mt-2">VND</span>
                                <span class="h4 align-self-end mb-1">/Phần</span>
                            </div>
                        </div>

                        <div class="p-4 text-start">
                            <h5>Pricing Features:</h5>

                            <ul class="list-unstyled mb-0 ps-0">
                                <li class="text-muted mb-0"><span class="icon h5 me-2"><i
                                            class="uil uil-check-circle align-middle"></i></span>Full Access</li>
                                <li class="text-muted mb-0"><span class="icon h5 me-2"><i
                                            class="uil uil-check-circle align-middle"></i></span>Source Files</li>
                                <li class="text-muted mb-0"><span class="icon h5 me-2"><i
                                            class="uil uil-check-circle align-middle"></i></span>Free Appointments</li>
                                <li class="text-muted mb-0"><span class="icon h5 me-2"><i
                                            class="uil uil-check-circle align-middle"></i></span>Enhanced Security</li>
                            </ul>

                            <a href="" class="btn btn-primary w-100 mt-4">Get Started</a>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 wow animate__animated animate__fadeInUp"
                    data-wow-delay=".7s">
                    <div class="pricing pricing-primary shadow rounded-md text-center bg-white">
                        <div class="border-bottom p-4">
                            <div class="icons text-center mb-4">
                                <i
                                    class="uil uil-shield text-white d-flex align-items-center justify-content-center rounded-pill h3 mb-0 mx-auto"></i>
                            </div>

                            <h3 class="text-gradient-primary">Gói vừa</h3>

                            <div class="d-flex justify-content-center mb-0">
                            <span class="price h1 mb-0">199</span>
                                <span class="h4 mb-0 mt-2">VND</span>
                                <span class="h4 align-self-end mb-1">/Phần</span>
                            </div>
                        </div>

                        <div class="p-4 text-start">
                            <h5>Pricing Features:</h5>

                            <ul class="list-unstyled mb-0 ps-0">
                                <li class="text-muted mb-0"><span class="icon h5 me-2"><i
                                            class="uil uil-check-circle align-middle"></i></span>Full Access</li>
                                <li class="text-muted mb-0"><span class="icon h5 me-2"><i
                                            class="uil uil-check-circle align-middle"></i></span>Source Files</li>
                                <li class="text-muted mb-0"><span class="icon h5 me-2"><i
                                            class="uil uil-check-circle align-middle"></i></span>Free Appointments</li>
                                <li class="text-muted mb-0"><span class="icon h5 me-2"><i
                                            class="uil uil-check-circle align-middle"></i></span>Enhanced Security</li>
                            </ul>

                            <a href="" class="btn btn-primary w-100 mt-4">Get Started</a>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 wow animate__animated animate__fadeInUp"
                    data-wow-delay=".9s">
                    <div class="pricing pricing-primary shadow rounded-md text-center bg-white">
                        <div class="border-bottom p-4">
                            <div class="icons text-center mb-4">
                                <i
                                    class="uil uil-rocket text-white d-flex align-items-center justify-content-center rounded-pill h3 mb-0 mx-auto"></i>
                            </div>

                            <h3 class="text-gradient-primary">Gói lớn</h3>

                            <div class="d-flex justify-content-center mb-0">
                            <span class="price h1 mb-0">299</span>
                                <span class="h4 mb-0 mt-2">VND</span>
                                <span class="h4 align-self-end mb-1">/Phần</span>
                            </div>
                        </div>

                        <div class="p-4 text-start">
                            <h5>Pricing Features:</h5>

                            <ul class="list-unstyled mb-0 ps-0">
                                <li class="text-muted mb-0"><span class="icon h5 me-2"><i
                                            class="uil uil-check-circle align-middle"></i></span>Full Access</li>
                                <li class="text-muted mb-0"><span class="icon h5 me-2"><i
                                            class="uil uil-check-circle align-middle"></i></span>Source Files</li>
                                <li class="text-muted mb-0"><span class="icon h5 me-2"><i
                                            class="uil uil-check-circle align-middle"></i></span>Free Appointments</li>
                                <li class="text-muted mb-0"><span class="icon h5 me-2"><i
                                            class="uil uil-check-circle align-middle"></i></span>Enhanced Security</li>
                            </ul>

                            <a href="" class="btn btn-primary w-100 mt-4">Get Started</a>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End -->

    <!-- Start -->
    <section class="section bg-light" id="blog">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 mb-4 pb-2">
                    <div class="section-title text-center">
                        <h4 class="title mb-4 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">Các món ăn mới ra mắt <br> </h4>
                        <p class="text-muted para-desc mx-auto mb-0 wow animate__animated animate__fadeInUp"
                            data-wow-delay=".3s">Với công thức chế biến mới, chúng tôi ra mắt một số món cực ngon.</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                @foreach($productsLLatest as $item)
                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 wow animate__animated animate__fadeInUp"
                    data-wow-delay=".5s">
                    <div class="blog blog-primary">
                        <img src="{{asset('storage/img/'.$item->image)}}" class="img-fluid rounded-md shadow" alt="" style="height:300px; width:100%;">
                        <div class="p-4 pb-0">
                            <a href="" class="title text-dark h5">{{$item->name}}</a>

                            <p class="text-muted mt-3 mb-0">{{$item->description}}</p>

                            <!-- <div class="mt-3">
                                <a href="" class="btn btn-link primary">Mua ngay <i
                                        class="uil uil-arrow-right"></i></a>
                            </div> -->
                        </div>
                    </div>
                </div><!--end col-->
                @endforeach
                

                
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End -->

  

    
</body>

</html>