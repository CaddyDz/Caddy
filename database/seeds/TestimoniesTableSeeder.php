<?php

use Illuminate\Database\Seeder;
use Caddy\Testimony;
use Illuminate\Support\Facades\Storage;

class TestimoniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Storage::disk('public')->deleteDirectory('testimonies');
        Storage::disk('public')->makeDirectory('testimonies');
        factory(Testimony::class, 3)->create();
    }
}
