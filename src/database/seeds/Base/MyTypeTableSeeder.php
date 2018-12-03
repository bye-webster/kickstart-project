<?php

# database/seeds/MyTypeTableSeeder.php

use App\Models\Base\MyType;
use Illuminate\Database\Seeder;

class MyTypeTableSeeder extends Seeder
{
    public function run()
    {
        MyType::create([ 'type_id' => 'BOT_PERSON','type_name' => 'BOT','table_id' => 'registration_person','sequence_id' => '10001','description' => 'BOT']);
        MyType::create([ 'type_id' => 'EXTERNAL_MEDIA','type_name' => 'External media','table_id' => 'media','sequence_id' => '10002','description' => 'External media']);
        MyType::create([ 'type_id' => 'ORIGINAL_MEDIA','type_name' => 'Original media','table_id' => 'media','sequence_id' => '10001','description' => 'Original media']);
        MyType::create([ 'type_id' => 'WEB_PAGE','type_name' => 'Web Page','table_id' => 'my_page','sequence_id' => '10001','description' => 'Page for Web']);

        //... add more my_type if you want!
    }
}
