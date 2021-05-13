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


  <div class="card_detail">
    <div class="container-fluid">
      <div class="detail_table">
        <div class="detail_talent">
          <h3>Talent</h3>
          <div class="">
            <span><h5>Art by</h5></span>
            <span>
              @foreach ($comic['artists'] as $artist)
                <span>{{$artist}}</span>
              @endforeach
            </span>
          </div>
          <div class="">
            <span><h5>Written by</h5></span>
            <span>
              @foreach ($comic['writers'] as $writer)
                <span>{{$writer}}</span>
              @endforeach
            </span>
          </div>
        </div>
        <div class="detail_specs">
          <h3>Specs</h3>
          <div class="">

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
