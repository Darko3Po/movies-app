<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class ViewMoveTest extends TestCase
{
    /**
     * A  test for correct information from API.
     *
     */
    public function the_maain_page_shows_correct_info()
    {
        Http::fake([
            'https://api.themoviedb.org/3/movie/popular' => $this->fakePopularMovies(),
            'https://api.themoviedb.org/3/movie/popular' => $this->fakeNowPlayingMovies(),
            'https://api.themoviedb.org/3/movie/popular' => $this->fakeGenres(),
        ]);

        $response = $this->get(route('movies.index'));

        $response->assertSuccessful();
        $response->assertSee('Popular Movies');
    }

    public function fakePopularMovies()
    {

    }

}
