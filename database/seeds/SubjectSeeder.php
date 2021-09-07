<?php

use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('subjects')->insert([
            'name'=>\Illuminate\Support\Str::random(10)
        ]);
        \Illuminate\Support\Facades\DB::table('subjects')->insert([
            'name'=>\Illuminate\Support\Str::random(10)
        ]);
        \Illuminate\Support\Facades\DB::table('subjects')->insert([
            'name'=>\Illuminate\Support\Str::random(10)
        ]);
        \Illuminate\Support\Facades\DB::table('subjects')->insert([
            'name'=>\Illuminate\Support\Str::random(10)
        ]);
    }
}
