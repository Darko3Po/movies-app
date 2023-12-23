@extends('layouts.main')

@section('content')
    <div class="movie-info b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex">
            <img src="img/parasite.jpg" alt="parasite" class="w-96">
            <div class="ml-24">
               <h2 class="text-4xl font-semibold">Parasite (2019)</h2>
                <div class="flex items-center text-gray-400">
                    <svg class="w-4 h-4 text-yellow-500 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                    </svg>
                    <span class="ml-1">92%</span>
                    <span class="mx-2">|</span>
                    <span>Feb 20, 2020</span>
                    <span class="mx-2">|</span>
                    <span class="mx-2">Action, Drama</span>
                </div>

                <p class="text-gray-300 mt-8">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci alias aliquam distinctio dolorem earum est eveniet excepturi fugiat fugit labore magnam magni non odit omnis pariatur quisquam saepe, sequi, tempora velit voluptatibus? Commodi consectetur doloremque excepturi illum labore natus, pariatur placeat quaerat quibusdam sapiente? Corporis dolor porro possimus sed sequi.
                </p>

                <div class="mt-12">
                    <h4 class="text-white font-semibold"> Featured Cast</h4>
                    <div class="flex mt-4">
                        <div>
                            <div>Han Jin-won</div>
                            <div class="text-sm text-gray-400">Screenplay, Director, Story </div>
                        </div>
                        <div class="ml-8">
                            <div>Han Jin-won</div>
                            <div class="text-sm text-gray-400">Screenplay</div>
                        </div>
                    </div>
                </div>

                <div class="mt-12">
                     <button class="flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-600 transition ease-in-out duration-150" >
                         <svg class="w-6 fill-current" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M10 16.5l6-4.5-6-4.5v9zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/></svg>
                         <span class="ml-2">Play Trailer</span>
                     </button>
                </div>

            </div>
        </div>
    </div><!--End movie info ection-->


@endsection
