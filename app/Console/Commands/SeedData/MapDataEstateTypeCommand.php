<?php

namespace App\Console\Commands\SeedData;

use App\Models\EstateType;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Str;

class MapDataEstateTypeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'estate:type';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $datas = [
            'Cho thuê',
            'Mua bán',
            'Sang nhượng'
        ];

        foreach ($datas as $item)
        {
            $this->info("Name: ". $item);
            EstateType::create([
                'et_name' => $item,
                'et_slug' => Str::slug($item),
                'created_at' => Carbon::now()
            ]);
        }
    }
}
