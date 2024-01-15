<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class SearchDropdown extends Component
{
    /*
<<<<<<< HEAD
      * This os logic for Search, data use API search form themoviedborg
      * */
=======
     * This os logic for Search, data use API search form themoviedborg
     * */
>>>>>>> 114067ddcf5ce0dd30af8f49bc886f3016e998b9
    public $search = '';

    public function render()
    {
<<<<<<< HEAD

=======
>>>>>>> 114067ddcf5ce0dd30af8f49bc886f3016e998b9
        $searchResults = [];
        /*
         * Logic for the search frontend, where it outputs results based on the first 2 letters
         * */
        if (strlen($this->search)>2){
            // A variable in which a series of files for search is placed
            $searchResults = Http::withToken(config('services.tmdb.token'))
                ->get('https://api.themoviedb.org/3/search/movie?query='.$this->search)
                ->json()['results'];
        }

        $searchResults = array_slice($searchResults,0,7);

        //dump($searchResults);

        return view('livewire.search-dropdown', compact('searchResults'));
    }
}
