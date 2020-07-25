@extends('inc.site.main')
@section('title', 'Profil de | '.$user->name)

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
