<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use jeremykenedy\LaravelBlocker\App\Models\BlockedType;

class BlockedTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
         * Blocked Types
         *
         */
        $BlockedTypes = [

            [
                'slug' => 'user',
                'name' => 'User',
            ],

        ];

        /*
         * Add Blocked Types
         *
         */
        if (config('laravelblocker.seedPublishedBlockedTypes')) {
            foreach ($BlockedTypes as $BlockedType) {
                $newBlockedType = BlockedType::where('slug', '=', $BlockedType['slug'])
                    ->withTrashed()
                    ->first();
                if ($newBlockedType === null) {
                    $newBlockedType = BlockedType::create([
                        'slug' => $BlockedType['slug'],
                        'name' => $BlockedType['name'],
                    ]);
                }
            }
        }
        echo "\e[32mSeeding:\e[0m BlockedTypeTableSeeder\r\n";
    }
}
