<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>Clasez - App</title>

    <meta name="description" content="Codebase - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Codebase - Bootstrap 5 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="Codebase">
    <meta property="og:description" content="Codebase - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{asset('assets/media/favicons/favicon.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('assets/media/favicons/favicon-192x192.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/media/favicons/apple-touch-icon-180x180.png')}}">
    <!-- END Icons -->

    <!-- Stylesheets -->

    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{asset('assets/js/plugins/slick-carousel/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/js/plugins/slick-carousel/slick-theme.css')}}">

    <!-- Codebase framework -->
    <link rel="stylesheet" id="css-main" href="{{asset('assets/css/codebase.min.css')}}">
    <link rel="stylesheet" id="css-chat" href="{{asset('assets/css/message.css')}}">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
    <!-- END Stylesheets -->
</head>

<body>

    <!-- Page Container -->
    <!--
      Available classes for #page-container:
    
      GENERIC
    
        'remember-theme'                            Remembers active color theme and dark mode between pages using localStorage when set through
                                                    - Theme helper buttons [data-toggle="theme"],
                                                    - Layout helper buttons [data-toggle="layout" data-action="dark_mode_[on/off/toggle]"]
                                                    - ..and/or Codebase.layout('dark_mode_[on/off/toggle]')
    
      SIDEBAR & SIDE OVERLAY
    
        'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
        'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
        'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
        'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
        'sidebar-dark'                              Dark themed sidebar
    
        'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
        'side-overlay-o'                            Visible Side Overlay by default
    
        'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens
    
        'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)
    
      HEADER
    
        ''                                          Static Header if no class is added
        'page-header-fixed'                         Fixed Header
    
      HEADER STYLE
    
        ''                                          Classic Header style if no class is added
        'page-header-modern'                        Modern Header style
        'page-header-dark'                          Dark themed Header (works only with classic Header style)
        'page-header-glass'                         Light themed Header with transparency by default
                                                    (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
        'page-header-glass page-header-dark'        Dark themed Header with transparency by default
                                                    (absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)
    
      MAIN CONTENT LAYOUT
    
        ''                                          Full width Main Content if no class is added
        'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
        'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)
    
      DARK MODE
    
        'sidebar-dark page-header-dark dark-mode'   Enable dark mode (light sidebar/header is not supported with dark mode)
    -->
    <div id="page-container" class="enable-page-overlay side-scroll page-header-modern main-content-narrow">

        <!-- END Header -->

        <!-- Main Container -->
        <main id="main-container">
            <!-- Page Content -->
            <div class="block block-rounded shadow-none mb-0">
                <div class="block-header block-header-default">
                    <div class="d-flex ">
                        <div>
                            <img class="img-avatar-feed" src="{{asset('assets/media/avatars/avatar17.png')}}" alt="" style="border-radius:  50%!important; height: 40px; width:40px;">
                        </div>
                        <div style="margin-left: 15px;">
                            <div class="fs-xs fw-semibold mb-1">{{App\Models\User::user($photo->user_id)->name}}</div>
                            <div class="fs-xs text-muted">{{$photo->location}}</div>
                        </div>
                    </div>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                            <i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content fs-sm" style="padding: 0px;">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="img-fluid block-content block-content-full bg-image" style="background-image: url('{{ asset('images/'.$photo->image) }}'); z-index:10; border-radius: 0 0 0 15px;">
                                <img class="img-fluid bg-image" src="{{ asset('images/'.$photo->image) }}" style="visibility: hidden;">
                            </div>
                        </div>
                        <div class="col-md-4 block block-rounded shadow-none mb-0">
                            <div class="d-flex block-content">
                                <div>
                                    <img class="img-avatar-feed" src="{{asset('assets/media/avatars/avatar17.png')}}" alt="" style="border-radius:  50%!important; height: 40px; width:40px;">
                                </div>
                                <div>
                                    <div class="fs-xs fw-semibold mb-1">{{App\Models\User::user($photo->user_id)->name}} </div>

                                    <p class="justify-content">Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                                </div>
                            </div>
                            @php
                            $cs = App\Models\Comment::comment($photo->id)
                            @endphp

                            @foreach($cs as $c)
                            <div class="d-flex block-content">
                                <div>
                                    <img class="img-avatar-feed" src="{{asset('assets/media/avatars/avatar17.png')}}" alt="" style="border-radius:  50%!important; height: 40px; width:40px;">
                                </div>
                                <div>
                                    <div class="fs-xs fw-semibold mb-1">{{App\Models\Comment::name($c->user_id)->name}} </div>

                                    <div class="dropdown dropend push">
                                        <i class="fa fa-ellipsis" id="dropdown-dropright-outline-primary" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="pointer:cursor;"></i>
                                        <div class="dropdown-menu fs-sm" aria-labelledby="dropdown-dropright-outline-primary" style="">
                                            <a class="dropdown-item" href="javascript:void(0)">Laporkan</a>
                                            @if($c->user_id == Auth::user()->id)
                                            <a class="dropdown-item" href="{{route('people.feed.comment.delete', App\Models\Comment::id($c->id)->id)}}">Delete</a>
                                            @endif
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="javascript:void(0)">Cancel</a>
                                        </div>
                                    </div>

                                    <p class="justify-content">{{$c->comment}}</p>

                                    <div class="fs-sm text-muted mb-3">{{ App\Models\Comment::getCreatedAtAttribute($c->created_at)}}</div>
                                </div>
                            </div>
                            @endforeach
                            <div class="block-content  block-content-sm text-end border-top">
                                <form class="row row-cols-lg-auto g-3 align-items-center" action="{{route('people.feed.comment', $photo->id)}}" method="POST">
                                    @csrf
                                    <div class="col-12">
                                        <input type="text" class="form-control" id="comment" name="comment" placeholder="Comment">
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-primary"><i class="far fa-paper-plane"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Page Content -->
        </main>
        <!-- END Main Container -->

        <!-- Footer -->

        <!-- END Footer -->
    </div>
    <!-- END Page Container -->

    <!--
        Codebase JS
    
        Core libraries and functionality
        webpack is putting everything together at assets/_js/main/app.js
    -->
    <script src="{{asset('assets/js/codebase.app.min.js')}}"></script>

    <!-- jQuery (required for Slick Slider plugin) -->
    <script src="{{asset('assets/js/lib/jquery.min.js')}}"></script>

    <!-- Page JS Plugins -->
    <script src="{{asset('assets/js/plugins/slick-carousel/slick.min.js')}}"></script>

    <!-- Page JS Helpers (Slick Slider Plugin) -->
    <script>
        Codebase.helpersOnLoad(['jq-slick']);
    </script>
    @yield('js')
</body>

</html>