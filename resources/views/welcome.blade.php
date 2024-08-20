@extends('layouts/template')

@section('content')

    <div class="home-hero">
        <div class="hero-text-wrap">
            <p>
                <b>A woman’s name raises doubts
                <br/>
                until her work is seen.</b>
                <br/>
                - Artemisia Gentileschi -
            </p>
        </div>
    </div>

    <div class="full-width powder-bg">
        <div class="full-width-wrap">
            <img class="one-third" src="{{ asset('img/laptop.png') }}" alt="" />
            <div class="two-thirds">
                <h2>What is A Space of Their Own?</h2>
                <p>
                    A Space of Their Own is a comprehensive online resource that documents the lives and careers of women artists.
                </p>
                <p>
                    Fully integrated into the curatorial departments at the Eskenazi Museum of Art, A Space of Their Own features records about these important and often overlooked women artists. With details about their training, careers, important works, and circles of influence, this resource preserves and advances the contributions of women artists to the history of art.
                </p>
                <p>
                    A Space of Their Own is made possible by the Jane Fortune Fund for Virtual Advancement of Women Artists. Additional support was provided by the Samuel H. Kress Foundation.
                </p>
            </div>
        </div>
    </div>

    <div class="full-width">
        <div class="full-width-wrap">
            <h2>Explore</h2>
            <a href="/space-of-their-own/artists"><img class="one-third" src="{{ asset('img/artist-tile.jpg') }}" alt="Artists"/></a>
            <a href="/space-of-their-own/artworks"><img class="one-third" src="{{ asset('img/artwork-tile.jpg') }}" alt="Artworks"/></a>
            <a href="/space-of-their-own/essays"><img class="one-third" src="{{ asset('img/essay-tile.jpg') }}" alt="Essay"/></a>
        </div>
    </div>
@endsection