<?php

namespace Database\Seeders;

use App\Models\Local;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class LocalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $local = new Local();
        $local->name = 'Local 1';
        $local->save();

        $local = new Local();
        $local->name = 'Local 2';
        $local->save();

        $local = new Local();
        $local->name = 'Local 3';
        $local->save();
    }
}
