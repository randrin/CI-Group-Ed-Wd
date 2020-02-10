@extends('inc.site.main')
<?php $item = htmlspecialchars(config('app.name'));?>
@section('title', 'Technicians services to particulars | '.$item)

@section('style')
@endsection

@section('init')
    <!-- Site wrapper -->
@endsection

@section('content')
    <div id="app">
        <router-view></router-view>
    </div>
@endsection

@section('script')

@endsection
