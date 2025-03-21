<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\database\seeders\CustomrFactory ;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::factory(30)->create();
    }
}
