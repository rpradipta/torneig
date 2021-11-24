<!DOCTYPE html>
<html class="no-js">

<head>
    <!-- meta charset -->
    <meta charset="utf-8">
    <!-- site title -->
    <title>Phantom | Personal Resume Template</title>
    <!-- meta description -->
    <meta name="description" content="">
    <!-- mobile viwport meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- fevicon -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

    <!-- ================================
        CSS Files
        ================================= -->
        <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i|Open+Sans:400,600,700,800"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/themefisher-fonts.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/main.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/dark.css')}}">  
</head>

<body class="dark">

    <!-- <div class="preloader">
            <div class="loading-mask"></div>
            <div class="loading-mask"></div>
            <div class="loading-mask"></div>
            <div class="loading-mask"></div>
            <div class="loading-mask"></div>
        </div> -->
    <section class="site-wrapper">
        <div class="pt-table">
            <div class="pt-tablecell page-services relative">
                <a href="./" class="page-close"><i class="tf-ion-close"></i></a>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-lg-offset-1 col-lg-10">
                            <div class="page-title text-center">
                                <h2>Awesome <span class="primary">Services</span> <span class="title-bg">Services</span>
                                </h2>
                                <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium
                                    lectorum. Mirum est notare quam littera gothica,quam nunc putamus parum claram
                                    anteposuerit.</p>
                            </div>

                            <div class="hexagon-menu services clear">
                                @foreach($data as $data)
                                <a href="./{{$data['id']}}">                                    
                                    <div class="service-hex">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 372 424.5" style="enable-background:new 0 0 372 424.5;"
                                            xml:space="preserve">
                                            <g>
                                                <polygon class="st0"
                                                    points="359.9,314.1 186.9,414 14,314.1 14,114.4 186.9,14.6 359.9,114.4" />
                                                <polygon class="st1"
                                                    points="331.2,297.6 186.9,380.9 42.6,297.6 42.6,131 186.9,47.6 331.2,131" />
                                            </g>
                                        </svg>
                                        <div class="content">
                                            <div class="icon">
                                                <i class="et-line icon-hotairballoon"></i>
                                            </div>
                                            <h4>{{$data['name']}}</h4>
                                            <!-- <img src="{{$data['logos']['dark']}}"> -->
                                        </div>
                                    </div>
                                </a>
                                @endforeach

                            </div>

                        </div> <!-- /.col-xs-12 -->

                    </div> <!-- /.row -->
                </div> <!-- /.container -->
                <!-- /.container -->

            </div> <!-- /.pt-tablecell -->
        </div> <!-- /.pt-table -->
    </section> <!-- /.site-wrapper -->

    <!-- ================================
        JavaScript Libraries
        ================================= -->
    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery-validation.min.js"></script>
    <script src="js/form.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>