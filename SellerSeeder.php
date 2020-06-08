<?php

use Illuminate\Database\Seeder;

class SellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 5 - admin   4 - business  3 - seller  2 - buyer  1 - authenticator
     *
     * @return void
     */
    public function run()
    {
        $users = App\User::where('priority', 3)->get();

        foreach($users as $user) {
            factory(App\Seller::class)->create(['user_id' => $user->id]);
        }

    }
}
