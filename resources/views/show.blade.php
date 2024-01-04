@extends('layouts.main')

@section('content')
    <div class="movie-info b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <img src="https://image.tmdb.org/t/p/w500/{{ $movie['poster_path']  }}" alt="parasite" class="w-64 md:w-96">
            <div class="md:ml-24">
               <h2 class="text-4xl font-semibold">{{ $movie['title']  }} </h2>
                <div class="flex flex-wrap items-center text-gray-400">
                    <svg class="w-4 h-4 text-yellow-500 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                    </svg>
                    <span class="ml-1">{{ round($movie['vote_average'], 1) * 10 . '%' }}</span>
                    <span class="mx-2">|</span>
                    <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('D M Y')  }}</span>
                    <span class="mx-2">|</span>
                    {{-- Section for genres name--}}
                    <span class="mx-2">
                        @foreach($movie['genres'] as $genre)
                            {{ $genre['name'] }} @if(!$loop->last),@endif
                        @endforeach
                    </span>
                </div>
                {{-- Section for name movie from DB--}}
                <p class="text-gray-300 mt-8">
                    {{ $movie['overview']  }}
                </p>
                {{-- Section for Direcotr name and postion --}}
                <div class="mt-12">
                    <h4 class="text-white font-semibold"> Featured Crew</h4>
                    <div class="flex mt-4">
                        @foreach($movie['credits']['crew'] as $crew )
                            @if($loop->index<2)
                                <div class="mr-8">
                                    <div>{{ $crew['original_name'] }}</div>
                                    <div class="text-sm text-gray-400">{{$crew['job']}} </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                {{--Section for added URL button for YT trailer video--}}
                @if($movie['videos']['results'] > 0)
                    <div class="mt-12">
                        <a href="https://youtube.com/watch?v={{$movie['videos']['results'][0]['key']}}">
                             <button class="flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-600 transition ease-in-out duration-150" >
                                 <svg class="w-6 fill-current" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M10 16.5l6-4.5-6-4.5v9zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/></svg>
                                 <span class="ml-2"> Play Trailer </span>
                             </button>
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div><!--End movie info ection-->

    {{-- playing movies section--}}
    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Cast</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($movie['credits']['cast'] as $cast)
                    <div class="mt-8">
                        <a href="{{ route('actors.show', $cast['id']) }}">
                            <img src="{{ $cast['profile_path'] }}" alt="actor1" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="mt-2">
                            <a href="{{ route('actors.show', $cast['id']) }}" class="text-lg mt-2 hover:text-gray:300">{{ $cast['name'] }}</a>
                            <div class="text-sm text-gray-400">
                                {{ $cast['character'] }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!--End playing movies section-->


@endsection
