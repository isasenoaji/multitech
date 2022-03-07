

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name'=>'Hardi',
            'password'=>Hash::make('sebuahPassword'),
            'email'=>'hardi.mte@gmail.com'
        ]);
    }
}
