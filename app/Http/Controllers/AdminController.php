<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AdminController extends Controller
{
    public function index(){

        return view('admin.pages.main');
    }

    public function showTable($table){
        $tableContent = DB::table($table)->get();
        return view('admin.pages.table',['tableContent'=>$tableContent,'tableName'=>$table]);
    }
}
