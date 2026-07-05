<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Operational\Doctor;
use App\Models\ManagementAccess\DetailUser;
use App\Models\ManagementAccess\RoleUser;
use Illuminate\Support\Facades\Hash;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $doctors = [
            [
                'name'          => 'Dr. Andi Pratama',
                'email'         => 'andi.pratama@mail.com',
                'password'      => 'Doctor@12345',
                'specialist_id' => 2, // Dentist
                'fee'           => '450000',
                'contact'       => '081234567890',
                'address'       => 'Jl. Melati No. 12, Jakarta Pusat',
                'gender'        => 1, // 1 = Laki-laki
                'age'           => 38,
                'photo'         => 'assets/frontsite/images/doctor-1.png',
            ],
            [
                'name'          => 'Dr. Siti Nurhaliza',
                'email'         => 'siti.nurhaliza@mail.com',
                'password'      => 'Doctor@12345',
                'specialist_id' => 1, // Dermatology
                'fee'           => '250000',
                'contact'       => '081298765432',
                'address'       => 'Jl. Mawar No. 45, Bandung',
                'gender'        => 2, // 2 = Perempuan
                'age'           => 35,
                'photo'         => 'assets/frontsite/images/doctor-2.png',
            ],
            [
                'name'          => 'Dr. Budi Santoso',
                'email'         => 'budi.santoso@mail.com',
                'password'      => 'Doctor@12345',
                'specialist_id' => 6, // Orthodontics
                'fee'           => '900000',
                'contact'       => '085612345678',
                'address'       => 'Jl. Anggrek No. 78, Surabaya',
                'gender'        => 1, // 1 = Laki-laki
                'age'           => 42,
                'photo'         => 'assets/frontsite/images/doctor-3.png',
            ],
            [
                'name'          => 'Dr. Dewi Lestari',
                'email'         => 'dewi.lestari@mail.com',
                'password'      => 'Doctor@12345',
                'specialist_id' => 7, // Pediatric Dentistry
                'fee'           => '300000',
                'contact'       => '087812349876',
                'address'       => 'Jl. Kenanga No. 23, Yogyakarta',
                'gender'        => 2, // 2 = Perempuan
                'age'           => 31,
                'photo'         => 'assets/frontsite/images/doctor-4.png',
            ],
        ];

        foreach ($doctors as $data) {
            // 1. Create User
            $user = User::create([
                'name'     => $data['name'],
                'email'    => $data['email'],
                'password' => Hash::make($data['password']),
            ]);

            // 2. Create DetailUser (type_user_id = 2 for "Dokter")
            DetailUser::create([
                'user_id'      => $user->id,
                'type_user_id' => 2,
                'contact'      => $data['contact'],
                'address'      => $data['address'],
                'gender'       => $data['gender'],
                'age'          => $data['age'],
            ]);

            // 3. Create Doctor
            Doctor::create([
                'user_id'       => $user->id,
                'specialist_id' => $data['specialist_id'],
                'name'          => $data['name'],
                'fee'           => $data['fee'],
                'photo'         => $data['photo'],
            ]);

            // 4. Assign role "Doctor" (role_id = 4)
            RoleUser::create([
                'role_id' => 4,
                'user_id' => $user->id,
            ]);
        }
    }
}
