<?php namespace App\Database\Seeds;
class AdminSeeder extends \CodeIgniter\Database\Seeder{
    public function run()
    {
        $data = [
            'username'  => 'admin',
            'name'      => 'Admin',
            'email'     => 'cahyoyoga640@gmail.com',
            'password'  => '130321',
            'status'    => 'Active',
            'level'     => 'Admin'
        ];
        $this->db->table('users')->insert($data);
    }
}