<?php

namespace Database\Seeders;

use App\Models\category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class categoryseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void 
    {
        $categories=['science','sports','entertainmets'];
        foreach($categories as $category){
           
            category::create([
                'name'=>$category
                
            ]);
        }
       
    }
}
