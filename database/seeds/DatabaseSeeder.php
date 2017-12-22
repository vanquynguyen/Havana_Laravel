<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategorySeeder::class);
       	$this->call(UserSeeder::class);
       	$this->call(BillSeeder::class);
    	$this->call(PostSeeder::class);
    	$this->call(BillDetailSeeder::class);
    	$this->call(ProductSeeder::class);
    	$this->call(SizeSeeder::class);
    	$this->call(ImageSeeder::class);
    }
}
