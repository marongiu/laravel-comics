@extends('layouts.app')

@section('main')
  <div class="bar_blue">
    <div class="container-fluid">
      <div class="content-image">
        <span>{{ $comic['type']}}</span>
        <img src="{{ $comic["thumb"] }}" alt="">
      </div>
    </div>
  </div>
  <div class="card_description">
    <div class="container-fluid">
      <div class="description_title">
        <h3>{{$comic['title']}}</h3>
      </div>
      <div class="description_content">
        <div class="description_price">
          <span>U.S. Price:{{$comic['price']}}</span>
          <span>AVAILABLE</span>
        </div>
        <div class="price_check">
          <p>Check Availability</p>
        </div>
      </div>
    </div>

    <div class="card_paragraph">
      <div class="container-fluid">
        <p>{{$comic['description']}}</p>
      </div>
    </div>
  </div>
@endsection
