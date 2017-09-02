<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Request; //tambahkan include request

class SiswaServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $halaman = '';
        if (Request::segment(2) == 'siswa') { //secment = almat untuk (admin/siswa)
            $halaman = 'siswa';
        }
        view()->share('halaman', $halaman);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
