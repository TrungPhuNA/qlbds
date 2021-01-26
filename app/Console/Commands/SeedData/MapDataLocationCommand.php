<?php

namespace App\Console\Commands\SeedData;

use App\Models\Location;
use Illuminate\Console\Command;


class MapDataLocationCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'seed:location';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Seed data locations';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $locations = file_get_contents(public_path().'/locations.json');
        $locations = json_decode($locations, true);
        foreach ($locations as $location)
        {
            $this->info("ID: ". $location['id']);
            Location::insert($location);
        }
    }
}
