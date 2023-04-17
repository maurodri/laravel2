<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Todosseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
$useradmin=User::create([
'name'=> 'admin paula',
'email'=> 'admin@gmail.com',
'password'=>Hash::make('admin'),
'fullacces'=>'yes',
'codigo'=>'adm1',
        ]);
$user1=User::create([
    'name'=> 'ausuario marcos',
    'email'=> 'marcos@gmail.com',
    'password'=>Hash::make('marcos'),
    'fullacces'=>'no',
    'codigo'=>'casa1',
]);
$user2=User::create([
    'name'=> 'ausuario Luis',
    'email'=> 'luis@gmail.com',
    'password'=>Hash::make('luis'),
    'fullacces'=>'no',
    'codigo'=>'casa2',
]);
    }
}
