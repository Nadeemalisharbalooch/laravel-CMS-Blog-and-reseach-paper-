<?php

namespace Database\Seeders;

use App\Models\tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tagseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags=['php','laravel','javascript'];
       
        foreach($tags as $tag){    
            tag::create([
                'name'=>$tag
            ]);
        }
    }
}
