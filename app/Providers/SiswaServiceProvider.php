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

        if (Request::segment(1) =='/') {
            $halaman = 'home';
        }

        if (Request::segment(2) == 'siswa') { //segment = almat untuk (admin/siswa)
            $halaman = 'siswa';
        }

        if (Request::segment(1) =='about') {
            $halaman = 'about';
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
