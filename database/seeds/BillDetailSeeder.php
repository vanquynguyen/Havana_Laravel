<?php

use Illuminate\Database\Seeder;

class BillDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\BillDetail::class,100)->create();
    }
}
