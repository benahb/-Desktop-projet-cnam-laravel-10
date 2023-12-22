@extends('base')

@section('title' , 'menu')

@section('content')
    <section>
      <h2>Menu</h2>
    @foreach ($categories as $categorie)
      <div>
        <h3>{{ $categorie }}</h3>
        <ul class="plats">
          @for ($i = 0; $i< 5; $i++)
          <li>
            <img src="/images/george-zheng-0Kbjfwunink-unsplash (1).jpg" alt="ella esso">
            <h4>Lorem ipsum dolor .</h4>
            <span class="price">9.99 eur</span>
          </li>
          @endfor
        </ul>
      </div>
      @endforeach
    </section>
 @endsection