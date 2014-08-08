<?php
class UserSeeder extends Seeder {
    public function run() {
        User::create([
            'username'=>'firebat',
            'password'=>Hash::make('12345')
        ]);
        User::create([
            'username'=>'marine',
            'password'=>Hash::make('12345')
        ]);
    }
}
