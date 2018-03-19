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
        factory(App\Models\BillDetail::class,50)->create();
    }
}
