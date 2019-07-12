<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class search extends Controller
{
   /* public function agents()
    {
        $look = DB::select('select * from agents where ');
    }*/

    public function members(Request $request)
    {
        $finds = DB::table('members')-> where ('district', '=', [$request->search])
                                     -> orwhere ('enrolled_by', '=', [$request->search])
                                     ->get();

        return view('memberssearch')->with('finds',$finds);

    }
}
