<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="{{asset('images/play.png')}}" />
    <title>Playmarket</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <style>
        #sidebar ul li.active > a, a[aria-expanded="true"] {
            background-color: #6d00cc
        }
        .panel-image img.panel-image-preview {
            min-height: 200px;
            max-height: 200px;
        }
        p{
            display: block;
            display: -webkit-box;
            -webkit-line-clamp:5;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    </style>
</head>
<body>

<div class="wrapper">
    <!-- Sidebar Holder -->
    <nav id="sidebar">
        <div class="sidebar-header text-center">
           <a href="{{ route('index') }}"> <img style="max-width: 100%;" class="text-center" src="{{asset('images/play-button.png')}}"></a>
        </div>

        <ul class="list-unstyled components">
            <h3>Categories</h3>
            @foreach($categories as $category)
                <li category="{{$category->id}}" class="category {{$category->name == Session::get('category') ? "active" : "" }}" >
                    <a href="#">{{ $category->name }}</a>
                </li>
            @endforeach
        </ul>

    </nav>

    <!-- Page Content Holder -->
    <div id="content" style="width: 100%">

        <nav class="navbar navbar-default">
            <div class="container-fluid">

                <div class="navbar-header">
                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>

                </div>


                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        @auth
                            @if(Auth::user()->developper)<li><a href="{{ route('users.userapps') }}">Apps</a></li>@endif
                            <li><a href="{{ route('users.settings') }}">Settings</a></li>
                            <li >
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                            @else
                                <li><a href="{{ route('login') }}">Login</a></li>
                                <li><a href="{{route('register')}}">Register</a></li>
                            @endauth

                    </ul>
                    <div class="col-sm-6 col-md-6">
                        <form id="find" class="navbar-form" action="{{route('applications.search')}}" method="POST" role="search">
                            @csrf
                            <div style="width: 100%;" class="input-group">
                                <input  type="text" class="form-control" value="{{Session::get('search')}}" placeholder="Search" name="find">
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>
</div>

<!-- Bootstrap Js CDN -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="{{asset('js/starrr.js')}}"></script>
<script src="{{asset('js/jquery.form.js')}}"></script>

<script type="text/javascript">
    $(document).ready(function () {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
            $(this).toggleClass('active');
        });

        var $s2input = $('.star2_input');
        $('.star2').starrr({
            max: 5,
            rating: $s2input.val(),
            change: function(e, value){
                $(this).find('input').val(value).trigger('input');
                console.log( $(this).find('input').val());
            }
        });

        $('.category').on('click',function (e) {
            e.preventDefault();
            var iid = $(this).attr('category');
            $.ajax({
                type: "POST",
                url: '{{route("category.set")}}',
                data: { id: "" + iid},
                success: function (data) {
                    console.log(data);
                    $('#find').submit();
                },
                error: function (data, textStatus, errorThrown) {
                    console.log(data);
                },
            });

        });
    });
</script>
</body>
</html>
