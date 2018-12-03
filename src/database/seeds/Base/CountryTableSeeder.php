<?php

# database/seeds/CountryTableSeeder.php

use App\Models\Base\Country;
use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder  
{
    public function run()
    {
        Country::create([ 'country_id' => '10010', 'country_name' => 'Indonesia', 'type_id' => NULL, 'status_id' => NULL, 'description' => NULL]);

        //... add more country if you want!
    }
}
