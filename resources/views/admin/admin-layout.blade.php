<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Popsi Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">
    <link href="{{asset('css/pixeladmin.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/widgets.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/muffin-theme.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css">
    <script src="https://use.fontawesome.com/daa2b1f496.js"></script>
    <link rel="stylesheet" href="{{asset('css/admin.css')}}"> @yield('optional-styles')
</head>
<body>
    <div style="min-height: 300px; overflow: hidden;" class="clearfix">
        <nav class="px-nav px-nav-left " id="px-nav-no-tooltips-left">
            <button type="button" class="px-nav-toggle" data-toggle="px-nav">
                    <span class="px-nav-toggle-arrow"></span>
                    <span class="navbar-toggle-icon"></span>
                    <span class="px-nav-toggle-label" style="font-size: 11px;">HIDE MENU</span>
                  </button>
            <ul class="px-nav-content">
                <li class="px-nav-item px-nav-dropdown  @if($view == 'category') active px-open @endif ">
                    <a href=""><i class="px-nav-icon fa fa-hand-grab-o"></i><span class="px-nav-label">Категории</span></a>
                    <ul class="px-nav-dropdown-menu">
                        <li class="px-nav-item"><a href="/admin/categories/create"><span class="px-nav-label">Додади</span></a></li>
                        <li class="px-nav-item"><a href="/admin/categories"><span class="px-nav-label">Промени</span></a></li>
                    </ul>
                </li>
                <li class="px-nav-item">
                    <a href="#"><i class="px-nav-icon fa fa-hand-paper-o"></i><span class="px-nav-label">Link3</span></a>
                </li>
                <li class="px-nav-item px-nav-dropdown">
                    <a href="#"><i class="px-nav-icon fa fa-hand-peace-o"></i><span class="px-nav-label">Dropdown2</span></a>
                    <ul class="px-nav-dropdown-menu">
                        <li class="px-nav-item"><a href="#"><span class="px-nav-label">Link3</span></a></li>
                        <li class="px-nav-item"><a href="#"><span class="px-nav-label">Link4</span></a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <nav class="navbar px-navbar">
            <div class="navbar-header"><a class="navbar-brand" href="#">Brand</a></div>
            <button type="button" class="navbar-toggle collapsed"><i class="navbar-toggle-icon"></i></button>
            <div class="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            {{auth()->user()->name}} <i class="ion-arrow-down-b"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="/logout"><i class="ion-power"></i> Log out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            
        </nav>
        <div class="px-content">
            @yield('content')
        </div>
    </div>














    <!-- Content -->

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
    <script src="{{asset('js/pixeladmin.min.js')}}"></script>
    <script>
        $(function() {
              $('#px-nav-no-tooltips-left').pxNav({
                storeState: false,
                enableTooltips: false,
              });
            });
    </script>
</body>
</html>