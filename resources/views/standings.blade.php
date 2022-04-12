<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toernig</title>
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css')}}">
    <script type="text/javascript" src="{{ URL::asset('js/bootstrap.bundle.min.js')}}"></script>
</head>


<body class="pt-5"
    style="background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/img/field.png'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
    <nav class="navbar navbar-dark fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">Torneig</a>
            <div class=" bg-secondary offcanvas offcanvas-start border rounded" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Torneig</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-start flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">League</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex" >
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
    <div class="card text-white bg-secondary my-5 border border-white rounded  table-responsive"
        style="margin-left: 25vw; margin-right: 25vw;">
        <img src="{{$logo}}" alt="Logo" class="pt-5 mx-auto d-block" style="max-width: 25%;">
        <div class="card-body">
            <div class="pb-4 dropdown">
                <button class="btn btn-secondary dropdown-toggle border rounded-pill" type="button"
                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    {{$name}}
                </button>
                <ul class="dropdown-menu bg-secondary" aria-labelledby="dropdownMenuButton1">
                    @foreach($list['data'] as $data)
                    @if($id == $data['id'])
                    <li><a class="dropdown-item text-white disabled">{{$data['name']}}</a></li>
                    @else
                    <li><a class="dropdown-item text-white" href="/league/{{$data['id']}}">{{$data['name']}}</a></li>
                    @endif
                    @endforeach
                </ul>                
            </div>    
            
                <div class="pb-4 dropdown">
                    <button class="btn btn-secondary dropdown-toggle border rounded-pill" type="button"
                        id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        @if(isset($league['data']['season']))
                        {{$league['data']['season']}}
                        @else
                        no data
                        @endif
                    </button>
                    <ul class="dropdown-menu bg-secondary" aria-labelledby="dropdownMenuButton1">
                        @for($i = 2021;$i > 2003; $i--)                        
                        <li><a class="dropdown-item text-white" href="/league/{{$id}}/{{$i}}">{{$i}}</a></li>                       
                        @endfor
                    </ul>                
                </div>  
                <div class="card-body"></div>
           
                
            <h2>{{$name}} Table</h2>
            <br>
            <table class="text-white table table-bordered table-hover">
                <thead">
                    <tr>
                        <th class="text-start">No</th>
                        <th class="text-center">TEAM</th>
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
                    @if(isset($league['data']['standings']))
                    <tbody class="text-center align-middle">
                        @foreach($league['data']['standings'] as $standings)
                        <tr>
                            <td class="text-start">{{$loop->index+1}}</td>
                            <td>
                                @if(isset($standings['team']['logos'][0]['href']))
                                <div class="d-flex align-items-start">
                                    <img src="{{$standings['team']['logos'][0]['href']}}"
                                        style="height: 50px; width: 50px;">
                                    <div class="align-self-center ms-2">
                                        <p class="my-0">{{$standings['team']['name']}}</p>
                                    </div>
                                </div>
                                @else
                                <div class="d-flex align-items-start">
                                    <img src="{{ URL::asset('img/teamlogoplaceholder.png')}}"
                                        style="height: 50px; width: 50px;">
                                    <div class="ms-2">
                                        <p>{{$standings['team']['name']}}</p>
                                    </div>
                                </div>
                                @endif

                            </td>
                            <td>{{$standings['stats'][3]['displayValue']}}</td>
                            <td>{{$standings['stats'][0]['displayValue']}}</td>
                            <td>{{$standings['stats'][2]['displayValue']}}</td>
                            <td>{{$standings['stats'][1]['displayValue']}}</td>
                            <td>{{$standings['stats'][4]['displayValue']}}</td>
                            <td>{{$standings['stats'][5]['displayValue']}}</td>
                            <td>{{$standings['stats'][9]['displayValue']}}</td>
                            <td>{{$standings['stats'][6]['displayValue']}}</td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td>NO DATA</td>
                        </tr>
                    </tbody>
            </table>
        </div>
    </div>

    @endif
</body>
<script>
    var nav = document.querySelector('nav');
    window.addEventListener('scroll', function () {
        if (window.pageYOffset > 100) {
            nav.classList.add('bg-secondary', 'shadow');
            nav.style.transitionDuration = "0.5s";
        }
        else {
            nav.classList.remove('bg-secondary', 'shadow');
        }
    })
</script>

</html>