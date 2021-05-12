@extends('layouts.app')

@section('main')

  <section id="current_series">
    <div class="container">
      <div class="title">
        <h2>CURRENT SERIES</h2>
      </div>


{{-- Box card --}}
      <div class="box-card">
        @foreach($cards as $card)
          <div class="card">
            {{-- Inserisco tutto in a per portare al link --}}
            <a href="#">
              {{-- Immagine card --}}
              <div class="card-image">
                <img src="{{ $card["thumb"] }}">
              </div>
              {{-- Titolo card --}}
              <div class="card-title">
                <h4>
                  {{ $card["series"] }}
                </h4>
              </div>
            </a>
          </div>

        @endforeach
      </div>
{{-- Bottone caricamento --}}
      <div class="button_load">

      </div>
    </div>
  </section>
@endsection
