@extends('layouts.main')

@section('content')
   <div class="container mx-auto px-4 pt-16">
        {{-- section popular Movies  --}}
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Popular Movies</h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
            @foreach($popular_movies as  $movie)
               <x-movie-card :movie="$movie" :genres="$genres" />
            @endforeach
        </div>
       <!--End popular movies section-->

       {{-- section playing Movies  --}}
       <div class="popular-movies mt-12">
           <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Now Playing </h2>
       </div>
       <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
           @foreach($now_playing_movies as  $movie)
               <x-movie-card :movie="$movie" :genres="$genres" />
           @endforeach
       </div>
       <!--End playing movies section-->

   </div>
@endsection
