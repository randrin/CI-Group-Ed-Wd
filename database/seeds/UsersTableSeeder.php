<?php

use App\Model\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class UsersTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->addDefaultUtenti();

        if (config('app.env') !== 'production') {
            $this->addTestUtenti();
        }
    }

    private function addDefaultUtenti()
    {
        // Truncate table
        Schema::disableForeignKeyConstraints();
        User::truncate();
        Schema::enableForeignKeyConstraints();

        User::create([
            'username' =>'bokino12',
            'name' =>'Boclair Temgoua',
            'status_user' => 'active',
            'email' => "temgoua2012@gmail.com",
            "password" => bcrypt('0000000'),
            'created_at' => now(),
            'email_verified_at' => now(),
        ]);

        User::create([
            'username' =>'randrino17',
            'name' =>'Nzeukang',
            'status_user' => 'active',
            'email' => "nzeukangrandrin@gmail.com",
            "password" => bcrypt('123456789'),
            'created_at' => now(),
            'email_verified_at' => now(),
        ]);
    }

    private function addTestUtenti()
    {
        // Seeds
        User::create([
            'username' =>'patrick96',
            'name' =>'Darry',
            'status_user' =>'active',
            'email' => "darrytafeng@gmail.com",
            "password" => bcrypt('0000000'),
            'created_at' => now(),
            'email_verified_at' => now(),
        ]);

        // Output
        $this->command->info('Test data added.');
    }
}
