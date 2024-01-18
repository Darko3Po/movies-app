@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4 pt-16">
        {{-- section popular TV  --}}
        <div class="popular-tv">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Popular Shows</h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
            @foreach($popular_tv as  $tvshow)
                <div class="mt-8">
                    <a href="{{ route('tv.show', $tvshow['id'])  }}">
                        <img src="https://image.tmdb.org/t/p/w500/{{ $tvshow['poster_path']  }}" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="{{ route('tv.show', $tvshow['id']) }}" class="text-lg mt-2 hover:text-gray-400 text-sm mt-1">{{ $tvshow['name']  }} </a>
                        <div class="flex items-center text-gray-400">
                            <svg class="w-4 h-4 text-yellow-500 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                            </svg>
                            <span class="ml-1">{{ round($tvshow['vote_average']) }}</span>
                            <span class="mx-2">|</span>
                            <span>{{ $tvshow['first_air_date'] }}</span>
                        </div>
                        <div class="text text-gray-400 text-sm">
                            {{--            @foreach($tvshow['genre_ids'] as $genre)--}}
                            {{--                {{ $genres->get($genre) }} @if(!$loop->last),@endif--}}
                            {{--            @endforeach--}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!--End popular TV section-->

        {{-- section Top Rated Shows   --}}
        <div class="popular-tv mt-12">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Top Rated Shows </h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">

        </div>
        <!--End Top Rated Shows section-->

    </div>
@endsection
