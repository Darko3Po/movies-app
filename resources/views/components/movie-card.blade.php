 <div class="mt-8">
        <a href="{{ route('movies.show', $movie['id'])  }}">
            <img src="https://image.tmdb.org/t/p/w500/{{ $movie['poster_path']  }}" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
        </a>
        <div class="mt-2">
            <a href="{{ route('movies.show', $movie['id']) }}" class="text-lg mt-2 hover:text-gray-400 text-sm mt-1">{{ $movie['title']  }} </a>
            <div class="flex items-center text-gray-400">
                <svg class="w-4 h-4 text-yellow-500 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                </svg>
                <span class="ml-1">{{ round($movie['vote_average'], 1) * 10 . '%' }}</span>
                <span class="mx-2">|</span>
                <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('D M Y')  }}</span>
            </div>
            <div class="text text-gray-400 text-sm">
                @foreach($movie['genre_ids'] as $genre)
                    {{ $genres->get($genre) }} @if(!$loop->last),@endif
                @endforeach
            </div>
        </div>
    </div>

