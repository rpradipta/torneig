<!DOCTYPE html>
<html class="no-js" lang="">

<head>
    <!-- meta charset -->
    <meta charset="utf-8">
    <!-- site title -->
    <title>Toernig</title>
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
    <link rel="stylesheet" href="{{ URL::asset('css/table.css')}}">
</head>

<body class="dark">

    <main class="site-wrapper">
        <div class="pt-table">
            <div class="pt-tablecell page-welcome relative">
                <!-- .close -->
                <a href="./" class="page-close"><i class="tf-ion-close"></i></a>
                <!-- /.close -->

               

                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-md-6 col-lg-7">
                            <div class="page-title">
                                <h2>{{$name}}</h2>
                                <div class="author-image-large">
                                    <img src="{{$logo}}" >
                                </div>
                                @if(isset($league['data']['standings']))
                                <table class="table align-middle table-bordered table-responsive table-hover rounded">
                                    <thead class="point-table-head">
                                        <tr>
                                            <th class="text-left">No</th>
                                            <th class="text-left">TEAM</th>
                                            <th class="text-center">P</th>
                                            <th class="text-center">W</th>
                                            <th class="text-center">D</th>
                                            <th class="text-center">L</th>
                                            <th class="text-center">GS</th>
                                            <th class="text-center">GA</th>
                                            <th class="text-center">+/-</th>
                                            <th class="text-center">PTS</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        @foreach($league['data']['standings'] as $standings)
                                        <tr>
                                            <td class="text-left number">{{$loop->index+1}}</td>
                                            <td class="text-left">
                                                @if(isset($standings['team']['logos'][0]['href']))
                                                <img src="{{$standings['team']['logos'][0]['href']}}">

                                                @else
                                                <img src="{{ URL::asset('img/teamlogoplaceholder.png')}}">
                                                @endif
                                                <span>{{$standings['team']['name']}}</span>
                                            </td>
                                            <td>{{$standings['stats'][3]['displayValue']}}</td>
                                            <td>{{$standings['stats'][0]['displayValue']}}</td>
                                            <td>{{$standings['stats'][2]['displayValue']}}</td>
                                            <td>{{$standings['stats'][1]['displayValue']}}</td>
                                            <td>{{$standings['stats'][4]['displayValue']}}</td>
                                            <td>{{$standings['stats'][5]['displayValue']}}</td>
                                            <td>{{$standings['stats'][3]['displayValue']}}</td>
                                            <td>{{$standings['stats'][9]['displayValue']}}</td>
                                        </tr>
                                        @endforeach                                        
                                        @else
                                        <h1>EMPTY</h1>
                                        
                                    </tbody>
                                </table>
                                @endif
                            </div>
                        </div>
                    </div> <!-- /.row -->
                </div> <!-- /.container -->
                <!-- /.container -->

            </div> <!-- /.pt-tablecell -->
        </div> <!-- /.pt-table -->
    </main> <!-- /.site-wrapper -->

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