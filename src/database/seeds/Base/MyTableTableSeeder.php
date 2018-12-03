<?php

# database/seeds/MyTableTableSeeder.php

use App\Models\Base\MyTable;
use Illuminate\Database\Seeder;

class MyTableTableSeeder extends Seeder
{
    public function run()
    {
        MyTable::create([ 'table_id' => 'city', 'table_definition_id' => 'Entity', 'table_log_name' => null, 'description' => 'Entity For All city']);
        MyTable::create([ 'table_id' => 'maya_page', 'table_definition_id' => 'Entity', 'table_log_name' => null, 'description' => 'Entity For All maya_page']);
        MyTable::create([ 'table_id' => 'my_status', 'table_definition_id' => 'Entity', 'table_log_name' => null, 'description' => 'Entity For All my_status']);
        MyTable::create([ 'table_id' => 'my_table', 'table_definition_id' => 'Entity', 'table_log_name' => null, 'description' => 'Entity For All my_table']);
        MyTable::create([ 'table_id' => 'my_table_definition', 'table_definition_id' => 'Entity', 'table_log_name' => null, 'description' => 'Entity For All my_table_definition']);
        MyTable::create([ 'table_id' => 'my_type', 'table_definition_id' => 'Entity', 'table_log_name' => null, 'description' => 'Entity For All my_type']);
        MyTable::create([ 'table_id' => 'media', 'table_definition_id' => 'Entity', 'table_log_name' => null, 'description' => 'Entity For All media']);
        MyTable::create([ 'table_id' => 'party', 'table_definition_id' => 'Entity', 'table_log_name' => null, 'description' => 'Entity For All party']);
        MyTable::create([ 'table_id' => 'party_address', 'table_definition_id' => 'EntityBridge', 'table_log_name' => null, 'description' => 'Entity Bridge For party and address']);
        MyTable::create([ 'table_id' => 'party_email', 'table_definition_id' => 'EntityBridge', 'table_log_name' => null, 'description' => 'Entity Bridge For party and email']);
        MyTable::create([ 'table_id' => 'party_media', 'table_definition_id' => 'EntityBridge', 'table_log_name' => null, 'description' => 'Entity Bridge For party and media']);
        MyTable::create([ 'table_id' => 'party_phone', 'table_definition_id' => 'EntityBridge', 'table_log_name' => null, 'description' => 'Entity Bridge For party and phone']);
        MyTable::create([ 'table_id' => 'party_user_login', 'table_definition_id' => 'EntityBridge', 'table_log_name' => null, 'description' => 'Entity Bridge For party and user_login']);
        MyTable::create([ 'table_id' => 'person', 'table_definition_id' => 'Entity', 'table_log_name' => null, 'description' => 'Entity For All person']);
        MyTable::create([ 'table_id' => 'province', 'table_definition_id' => 'Entity', 'table_log_name' => null, 'description' => 'Entity For All province']);
        MyTable::create([ 'table_id' => 'registration_person', 'table_definition_id' => 'Entity', 'table_log_name' => null, 'description' => 'Entity For All pre-registration']);
        MyTable::create([ 'table_id' => 'security_group', 'table_definition_id' => 'Entity', 'table_log_name' => null, 'description' => 'Entity For All security group']);
        MyTable::create([ 'table_id' => 'security_group_permission', 'table_definition_id' => 'EntityBridge', 'table_log_name' => null, 'description' => 'Entity Bridge For All security_group_permission']);
        MyTable::create([ 'table_id' => 'security_permission', 'table_definition_id' => 'Entity', 'table_log_name' => null, 'description' => 'Entity For All permission']);
        MyTable::create([ 'table_id' => 'status_type', 'table_definition_id' => 'Entity', 'table_log_name' => null, 'description' => 'Entity For All status_type']);
        MyTable::create([ 'table_id' => 'user_login', 'table_definition_id' => 'Entity', 'table_log_name' => null, 'description' => 'Entity For All user_login']);
        MyTable::create([ 'table_id' => 'user_login_history', 'table_definition_id' => 'EntityBridge', 'table_log_name' => null, 'description' => 'Entity Bridge For All user_login_history']);
        MyTable::create([ 'table_id' => 'user_login_security', 'table_definition_id' => 'EntityBridge', 'table_log_name' => null, 'description' => 'Entity Bridge For All user_login_security_group']);
        MyTable::create([ 'table_id' => 'country', 'table_definition_id' => 'Entity', 'table_log_name' => null, 'description' => 'Entity Bridge For All party and party']);

        //... add more my_table if you want!
    }
}
