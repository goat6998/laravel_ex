<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    //
    public function index()
    {
        //エロクアント、リレーションやスコープ機能が便利。
        $values = Test::all();
        // dd($values);
        //$values = Test::where('text', '=', 'aaa');
        //$test = Test::where('text', '=', 'bbb')->get();

        //クエリビルダは、エロクアントより若干速度が早い
        // $test = DB::table('tests')->where('text', '=', 'aaa')->get();
        // dd($test);
        //dd($values, $test);

        return view('tests.test', compact('values'));
    }
}
