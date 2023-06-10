<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;
use CodeIgniter\Database\Seeder;

class Contact extends Seeder
{
    public function run()
    {

        
        $faker = \Faker\Factory::create('id_ID');
        for ($i = 0; $i < 40; $i++) {
            $data = [
                'nama_contact' => $faker->name,
                'nama_alias'    => $faker->firstName,
                'phone'    => $faker->phoneNumber,
                'email'    => $faker->email,
                'address'    => $faker->address,
                'info_contact'    => $faker->realText($maxNbChars = 200, $indexSize = 2),
                'id_group' => 1,
                'created_at' => Time::createFromTimestamp($faker->unixTime()),
                'updated_at' => Time::now()
            ];
            $this->db->table('contacts')->insert($data);
        }
    }
}
