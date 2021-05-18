<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index(Request $request)
    {
        $games = DB::table('games')->get();

        return view('blog.list', ['games' => $games, 'message' => $request->session()->get('message')]);
    }

    public function bestGames()
    {
        $games = DB::table('games')->get();

        return view('blog.bestGames', ['games' => $games]);
    }

    public function create(Request $request)
    {
        $createdGame = [
            'title' => $request->input('title'),
            'genre' => $request->input('genre'),
            'publisher' => $request->input('publisher'),
            'publicate_date' => $request->input('date'),
            'platform' => $request->input('ps3') . ' ' .
                $request->input('ps4') . ' ' .
                $request->input('ps5') . ' ' .
                $request->input('x360') . ' ' .
                $request->input('xone') . ' ' .
                $request->input('xsx/s') . ' ' .
                $request->input('pc') . ' ',
            'description' => $request->input('description'),
        ];

        DB::table('games')->insertOrIgnore($createdGame);

        $request->session()->flash('message', 'Dodano nową grę');

        return redirect('/');
    }

    public function show(int $gameId)
    {
        $game = DB::table('games')->where('id', $gameId)->get();

        return view('blog.show', ['game' => $game]);
    }

    public function search(Request $request)
    {
        $searchGames = DB::table('games')->where('title', 'like', $request->input('search') . '%')->get();

        $countResults = DB::table('games')->where('title', 'like', $request->input('search') . '%')->count();

        return view('blog.search', ['searchGames' => $searchGames ?? [], 'countResults' => $countResults]);
    }

    public function edit($id)
    {
    }

    public function destroy($id)
    {
    }
}
