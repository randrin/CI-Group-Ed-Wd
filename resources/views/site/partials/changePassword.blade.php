@extends('inc.site.main')
<?php $username = htmlspecialchars($user->name); ?>
@section('title', 'Modification Mot de Passe | '.$username)

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
