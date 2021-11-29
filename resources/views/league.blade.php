<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ URL::asset('css/hexagon.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css')}}">    
    <script src="{{ URL::asset('js/bootstrap.min.js')}}"></script>
    <link href='https://fonts.googleapis.com/css?family=Raleway:300' rel='stylesheet' type='text/css'>
</head>

<body class="bg-dark">
    <div class="min-vh-100 d-flex justify-content-center align-items-center">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown button
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
        </div>
        <ul id="hexGrid">
            @foreach($data as $data)
            <li class="hex">
                <div class="hexIn">
                    <a class="hexLink" href="/league/{{$data['id']}}">
                        @if(isset($data['logos']['dark']))
                        <img src="{{$data['logos']['dark']}}" alt="" />
                        @else
                        <img src="https://farm9.staticflickr.com/8461/8048823381_0fbc2d8efb.jpg" alt="" />
                        @endif
                        <h1>{{$data['name']}}</h1>
                        <p>{{$data['name']}}</p>
                    </a>
                </div>
            </li>
            @endforeach

        </ul>
    </div>

</body>

</html>