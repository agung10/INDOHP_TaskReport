<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $d = new \App\User;
        $d->name = "Romadhan";
        $d->email = "romadhanedy@gmail.com";
        $d->password = Hash::make("123321");
        $d->phone_number = "12345678901";
        $d->save();
    }
}
