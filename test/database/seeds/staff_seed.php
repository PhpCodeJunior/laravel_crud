<?php

use Illuminate\Database\Seeder;

class staff_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("staff")->delete();

        $staff = array(
            array(
               "tittle"=>"POST PHP",
                "descriptions"=>"MORAS ZNATI PHP"
            )
        );

       DB::table("staff")->insert($staff);
    }
}
