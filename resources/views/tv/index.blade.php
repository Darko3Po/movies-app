@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4 pt-16">
        {{-- section popular Movies  --}}
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Popular Shows</h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">

        </div>
        <!--End popular movies section-->

        {{-- section playing Movies  --}}
        <div class="popular-movies mt-12">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Top Rated Shows </h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">

        </div>
        <!--End playing movies section-->

    </div>
@endsection
