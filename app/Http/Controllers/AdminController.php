<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AdminController extends Controller
{
    public function index(){
        $logs = DB::table('log')
            ->join('log_type','log.logType_id','=','log_type.id')
            ->join('users_dva','log.user_id','=','users_dva.id')
           ->select('users_dva.id as user_id','users_dva.name as user_name','log.value as log','log.created_at as desiloSe')
            ->get();

        return view('admin.pages.main',['logs'=>$logs]);
    }

    public function showTable($table){
        $tableContent = DB::table($table)->get();
        return view('admin.pages.table',['tableContent'=>$tableContent,'tableName'=>$table]);
    }
}
