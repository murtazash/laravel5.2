@extends('layout')

@section('content')
  <div class="container">
      <div class="content">
          <div class="title">Laravel 5</div>
          @foreach($People as $Person)
            <li>{{ $Person }}</li>
          @endforeach
      </div>
  </div>
@stop