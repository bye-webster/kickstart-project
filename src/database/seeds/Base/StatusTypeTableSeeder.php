<?php

# database/seeds/StatusTypeTableSeeder.php

use App\Models\Base\StatusType;
use Illuminate\Database\Seeder;

class StatusTypeTableSeeder extends Seeder  
{
    public function run()
    {

        StatusType::create([ 'status_type_id' => 'my_type', 'parent_type_id' => null, 'has_table' => 'Y', 'description' => null ]); 
        StatusType::create([ 'status_type_id' => 'media', 'parent_type_id' => null, 'has_table' => 'Y', 'description' => null ]); 
        StatusType::create([ 'status_type_id' => 'party', 'parent_type_id' => null, 'has_table' => 'Y', 'description' => null ]); 
        StatusType::create([ 'status_type_id' => 'party_media', 'parent_type_id' => null, 'has_table' => 'Y', 'description' => null ]); 
        StatusType::create([ 'status_type_id' => 'person', 'parent_type_id' => null, 'has_table' => 'Y', 'description' => null ]);
        StatusType::create([ 'status_type_id' => 'country', 'parent_type_id' => null, 'has_table' => 'Y', 'description' => null ]);

        //... add more status_type if you want!
    }
}
