<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index()
    {
        $games = DB::table('games')->get();

        return view('blog.list', ['games' => $games]);
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
            'platform' => $request->input('platform'),
            'description' => $request->input('description'),
        ];

        DB::table('games')->insertOrIgnore($createdGame);

        return $this->index();
    }

    public function show(int $gameId)
    {
        $game = DB::table('games')->where('id', $gameId)->get();

        return view('blog.show', ['game' => $game]);
    }

    public function edit($id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
