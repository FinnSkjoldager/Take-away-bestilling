<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AllSeeder extends Seeder
{
    public function run()
    {
       $i = new ItemSeeder();
       $i->doRun();
       $i = new CustomerSeeder();
       $i->doRun();
       $i = new OrderSeeder();
       $i->doRun();
    }
}