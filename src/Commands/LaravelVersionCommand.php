<?php

namespace Daerentis\LaravelVersion\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class LaravelVersionCommand extends Command
{
    public $signature = 'laravel-version';

    public $description = 'Send the current Laravel version to the api endpoint';

    public function handle(): int
    {
        $lockFile = File::json(base_path('composer.lock'));

        # search for 'laravel/framework' in composer.lock file
        $laravel = collect($lockFile['packages'])->firstWhere('name', 'laravel/framework');
        $laravelVersion = Str::remove('v', $laravel['version']);

        # Send the Laravel version to the api endpoint
        Http::post(config('laravel-version.endpoint'), [
            'application' => config('app.name'),
            'version' => $laravelVersion,
        ]);

        return self::SUCCESS;
    }
}
