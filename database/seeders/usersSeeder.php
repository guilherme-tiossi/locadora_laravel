<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\AluguelFilmeModel;
use Illuminate\Support\Facades\Hash;

class usersSeeder extends Seeder
{
    public function run(){
        $data = array(
            [
                'name' => 'admin@admin',
                'email' => 'admin@admin',
                'password' => Hash::make('admin@admin'),
                'adm' => 1,
            ],
            [
                'name' => 'usuario@comum',
                'email' => 'usuario@comum',
                'password' => Hash::make('usuario@comum'),
                'adm' => 0,
                
            ],
        );
        foreach ($data as $d){
            $users = new User();
            $users->name =$d['name'];
            $users->email =$d['email'];
            $users->password =$d['password'];
            $users->adm = $d['adm'];
            $users->save();
        }
    }
}
