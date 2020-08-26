<?php
require_once('./PreloaderClass.php');

(new PreloaderClass())
    ->paths('/var/www/html/vendor/laravel')
    ->ignore(
        \Illuminate\Filesystem\Cache::class,
        \Illuminate\Log\LogManager::class,
        \Illuminate\Http\Testing\File::class,
        \Illuminate\Http\UploadedFile::class,
        \Illuminate\Support\Carbon::class,
    )
    ->load();
