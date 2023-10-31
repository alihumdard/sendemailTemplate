<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    protected $users;

    public function run()
    {
        $this->users = [
            [
                'name'            => 'Admin ',
                'email'           => 'admin@gmail.com',
                'role'            => 'Admin',
                'mail_host'       => 'mail.tspsolution.com',
                'mail_username'   => 'tspmailsuport@tspsolution.com',
                'mail_password'   => 'iewlUhe^nLkG',
                'mail_port'       => '465',
                'mail_encryption' => 'ssl',
                'password'        => bcrypt('12345678'),
            ],
            [
                'name'            => 'User',
                'email'           => 'user@gmail.com',
                'role'            => 'User',
                'mail_host'       => 'mail.tspsolution.com',
                'mail_username'   => 'clientsendmail@tspsolution.com',
                'mail_password'   => '{DChBA!aHRW0',
                'mail_port'       => '465',
                'mail_encryption' => 'ssl',
                'password'        => bcrypt('12345678'),
            ],
        ];

        User::insert($this->users);
    }
}
