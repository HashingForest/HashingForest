@extends('layouts.minimal')

@section('title', 'Hashing Forest')

@section('content')

    @include('blocks.home.header')

    <section class="Section">
        <div class="container-tablet">
            @php
            $colors = ['primary', 'highlight', 'gray'];
            $versions = ['-lightest', '-lighter', '-light', '', '-dark', '-darker', '-darkest'];
            @endphp

            @foreach($colors as $color)
                @foreach($versions as $version)
                    <h2 class="Color color-{{ $color . $version }}">
                        <span class="text">{{ ucfirst($color) . ($version ? ucfirst(str_replace('-', ' ', $version)) : '') }}</span>
                        <span class="bar background-{{ $color . $version }}"></span>
                    </h2>
                @endforeach
                <hr>
            @endforeach
        </div>
    </section>

@endsection