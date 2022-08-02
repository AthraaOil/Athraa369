<?php

namespace Database\Seeders;

use App\Models\Coupon;
use Brick\Math\BigInteger;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CouponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Coupon::table('users')->insert([
            'active_code' => BigInteger::randomBits(4)
        ]);
    }
}
