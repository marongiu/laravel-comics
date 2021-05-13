@extends('layouts.app')

@section('main')

  <section id="current_series">
    <div class="container">
      <div class="title">
        <h2>CURRENT SERIES</h2>
      </div>


{{-- Box card --}}
      <div class="box-card">
        @foreach($comics as $index => $comic)
          <div class="card">
            {{-- Inserisco tutto in a per portare al link --}}
            <a href="{{ route('detail', ['id' => $index]) }}">
              {{-- Immagine card --}}
              <div class="card-image">
                <img src="{{ $comic["thumb"] }}">
              </div>
              {{-- Titolo card --}}
              <div class="card-title">
                <h4>
                  {{ $comic["series"] }}
                </h4>
              </div>
            </a>
          </div>

        @endforeach
      </div>
{{-- Bottone caricamento --}}
      <div class="button_load">
        <a href="#">Load More</a>
      </div>
    </div>

      {{-- Lista info --}}
      <div class="info">
        <div class="container">
          <ul>
            <li>
              <img src="/images/buy-comics-digital-comics.png" alt="img DC">
              <a href="#">digital comics</a>
            </li>
            <li>
              <img src="/images/buy-comics-merchandise.png" alt="img DC">
              <a href="#">DC merchandise</a>
            </li>
            <li>
              <img src="/images/buy-comics-subscriptions.png" alt="img DC">
              <a href="#">subscription</a>
            </li>
            <li>
              <img src="/images/buy-comics-shop-locator.png" alt="img DC">
             <a href="#">comic shop locator</a>
            </li>
            <li>
              <img src="/images/buy-dc-power-visa.svg" alt="img DC">
              <a href="#">dc power visa</a>
            </li>
          </ul>
        </div>
      </div>
  </section>
@endsection
