@extends('inc.site.main')
<?php $item = htmlspecialchars(config('app.name'));?>
@section('title', 'Groupe Ed-Wd | '.$item)

@section('style')

@endsection

@section('content')
   <div id="app">
      <router-view></router-view>
   </div>
@endsection

@section('script')

@endsection
