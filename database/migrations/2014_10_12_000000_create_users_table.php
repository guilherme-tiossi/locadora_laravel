<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->tinyInteger('adm')->default(0);
            $table->rememberToken();
            $table->timestamps();
        });

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

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
