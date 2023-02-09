<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use League\CommonMark\Util\SpecReader;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PermissionSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(WritersSeeder::class);
        $this->call(DesignersSeeder::class);
        //SEEDER DE CATALOGOS
        $this->call(SpecialtiesSeeder::class);
        $this->call(CountriesSeeder::class);
        $this->call(StatesSeeder::class);
        $this->call(CitiesSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(ObjectivesSeeder::class);
        $this->call(SubObjectivesSeeder::class);
        $this->call(TargetsSeeder::class);
        $this->call(ThematicsSeeder::class);
        $this->call(DiseasesSeeder::class);
        $this->call(ServicesSeeder::class);
        $this->call(SymptomsSeeder::class);
        $this->call(OrgansSeeder::class);
    }
}
