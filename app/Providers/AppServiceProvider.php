<?php

namespace App\Providers;

use App\Http\Controllers\MainController;
use App\Models\MenusModel;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();
        $menu = MenusModel::all();
        View::share('menu',$menu);
        $tables = DB::select('SHOW TABLES');
        foreach ($tables as $table) {
            foreach ($table as $key => $value) {
                $tableNames[] = $value;
            }
        }
        View::share('adminSideTables',$tableNames);
    }
}
