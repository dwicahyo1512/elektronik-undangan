<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        // 1 data
        // $data = [
        //     'nama_panggilan' => 'Administrator',
        //     'email_user' => 'dwi.cahyo0808@gmail.com',
        //     'password_user' => password_hash('12345', PASSWORD_BCRYPT),
        // ];
        // $this->db->table('users')->insert($data);

        //multi data
        $data = [
            [
                'nama_panggilan' => 'berana',
                'email_user' => 'dwi.cahyo0808@gmail.com',
                'password_user' => password_hash('12345', PASSWORD_BCRYPT),
            ],
            [
                'nama_panggilan' => 'm. junaidi Faruq',
                'email_user' => 'mdwicahyo0808@gmail.com',
                'password_user' => password_hash('12345', PASSWORD_BCRYPT),
            ],
        ];
        $this->db->table('users')->insertBatch($data);
    }
}
