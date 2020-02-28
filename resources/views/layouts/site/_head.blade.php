

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

<link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"/>
<!-- Bootstrap -->
<link href="/assets/site/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:300,500" rel="stylesheet">
<link href="/assets/site/css/font-awesome.min.css" rel="stylesheet">
<link href="/assets/site/css/Pe-icon-7-stroke.css" rel="stylesheet">
<link href="/assets/site/css/owl.carousel.css" rel="stylesheet">
<link href="/assets/site/css/owl.theme.css" rel="stylesheet">
<link href="/assets/site/css/magnific-popup.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="/assets/site/css/style.min.css">
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
