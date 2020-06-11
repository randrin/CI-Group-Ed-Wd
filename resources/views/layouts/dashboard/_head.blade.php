
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
<meta name="author" content="{{ config('app.author') }}">
<meta name="keywords" content="{{ config('app.keywords') }}">
<meta name="description" content="{{ isset($description) ? $description : config('app.description') }}"/>
<meta name="csrf-token" content="{{ csrf_token()  }}">
<meta name="user-id" content="{{Auth::check() ? Auth::user()->id : '' }}">
<link rel="shortcut icon" type="image/png" href="/assets/site/images/img-logo.png"/>
<meta property="og:type" name="og:type" content="site"/>
<meta property="og:site_name" content="{{ config('app.name') }}"/>
<meta property="og:url" name="og:url" content="{{ request()->url() }}"/>
<meta property="og:caption" name="og:caption" content="{{ config('app.url') }}"/>
<meta property="fb:app_id" name="fb:app_id" content="{{ config('app.facebook_id') }}"/>
<meta property="og:title" name="og:title" content="{{ isset($title) ? $title : config('app.title') }}">
<meta property="og:description" name="og:description" content="{{ isset($description) ? $description : config('app.description') }}">
<meta property="og:image" name="og:image" content="{{ config('app.url') }}{{ isset($image) ? $image : '/assets/site/images/img-logo.png' }}">
<script>window.groupeEdWd = { csrfToken: '{{ csrf_token() }}' }; </script>

<script>
    window.user = {!! json_encode([
    'user' => auth()->user(),
    ]) !!}
</script>

<title>{{ config('app.name') }} @yield('title')</title>

<!-- Fonts and icons -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<!-- CSS Files -->
<link href="/assets/dashboard/css/bootstrap.min.css" rel="stylesheet" />
<link href="/assets/dashboard/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
<!-- CSS Just for demo purpose, don't include it in your project -->
<link href="/assets/dashboard/demo/demo.css" rel="stylesheet" />
<!-- Sweet Alert 2 plugin -->
<link rel="stylesheet" href="/assets/css/plugins/sweetalert2.css">
<link rel="stylesheet" href="/assets/css/plugins/animate.css">
<!-- Notify Alert plugin -->
<link rel="stylesheet" href="/assets/css/plugins/notify.css">
<link rel="stylesheet" href="/assets/css/plugins/toastr.min.css">
<!-- Styles Group Ed & Wd -->
<link rel="stylesheet" href="/assets/css/groupEdWd.css">

@section('style')

@show
