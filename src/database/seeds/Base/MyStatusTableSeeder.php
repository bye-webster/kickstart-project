<?php

# database/seeds/MyStatusTableSeeder.php

use App\Models\Base\MyStatus;
use Illuminate\Database\Seeder;

class MyStatusTableSeeder extends Seeder
{
    public function run()
    {
        //... add more my_status if you want!

        MyStatus::create([ 'status_id' => 'MDA_ACTIVE', 'status_type_id' => 'media', 'status_code' => NULL, 'sequence_id' => '10002', 'description' => 'Active']);
        MyStatus::create([ 'status_id' => 'MDA_ACTIVE_NOT', 'status_type_id' => 'media', 'status_code' => NULL, 'sequence_id' => '10003', 'description' => 'Not Active']);
        MyStatus::create([ 'status_id' => 'MDA_CREATED', 'status_type_id' => 'media', 'status_code' => NULL, 'sequence_id' => '10001', 'description' => 'Created']);
        MyStatus::create([ 'status_id' => 'PRS_NO_USRLOGIN', 'status_type_id' => 'person', 'status_code' => NULL, 'sequence_id' => '10001', 'description' => 'No UserLogin']);
        MyStatus::create([ 'status_id' => 'PRS_USRLOGIN_ENABLED', 'status_type_id' => 'person', 'status_code' => NULL, 'sequence_id' => '10002', 'description' => 'Enabled UserLogin']);
        MyStatus::create([ 'status_id' => 'PRS_USRLOGIN_SUSPEND', 'status_type_id' => 'person', 'status_code' => NULL, 'sequence_id' => '10003', 'description' => 'Suspended UserLogin']);
        MyStatus::create([ 'status_id' => 'PTYMDA_ACTIVE', 'status_type_id' => 'party_media', 'status_code' => NULL, 'sequence_id' => '10002', 'description' => 'Active']);
        MyStatus::create([ 'status_id' => 'PTYMDA_ACTIVE_NOT', 'status_type_id' => 'party_media', 'status_code' => NULL, 'sequence_id' => '10003', 'description' => 'Not Active']);
        MyStatus::create([ 'status_id' => 'PTYMDA_CREATED', 'status_type_id' => 'party_media', 'status_code' => NULL, 'sequence_id' => '10001', 'description' => 'Created']);
        MyStatus::create([ 'status_id' => 'PTY_ACTIVE', 'status_type_id' => 'party', 'status_code' => NULL, 'sequence_id' => '10002', 'description' => 'Active']);
        MyStatus::create([ 'status_id' => 'PTY_ACTIVE_NOT', 'status_type_id' => 'party', 'status_code' => NULL, 'sequence_id' => '10003', 'description' => 'Not Active']);
        MyStatus::create([ 'status_id' => 'PTY_CREATED', 'status_type_id' => 'party', 'status_code' => NULL, 'sequence_id' => '10001', 'description' => 'Created']);
        MyStatus::create([ 'status_id' => 'PTY_SUSPEND', 'status_type_id' => 'party', 'status_code' => NULL, 'sequence_id' => '10004', 'description' => 'Active']);
        MyStatus::create([ 'status_id' => 'REG_APPROVED', 'status_type_id' => 'registration_review', 'status_code' => NULL, 'sequence_id' => '10003', 'description' => 'Registration Has Been Approved']);
        MyStatus::create([ 'status_id' => 'REG_BLOCKED', 'status_type_id' => 'registration_review', 'status_code' => NULL, 'sequence_id' => '10004', 'description' => 'Registration Has Been Blocked']);
        MyStatus::create([ 'status_id' => 'REG_NEED_APPROVAL', 'status_type_id' => 'registration_review', 'status_code' => NULL, 'sequence_id' => '10004', 'description' => 'Registration Need Approval']);
        MyStatus::create([ 'status_id' => 'REG_STILL_IN_PROGRESS', 'status_type_id' => 'registration_review', 'status_code' => NULL, 'sequence_id' => '10004', 'description' => 'Registration Still In Progress']);
        MyStatus::create([ 'status_id' => 'REG_SUSPENDED', 'status_type_id' => 'registration_review', 'status_code' => NULL, 'sequence_id' => '10004', 'description' => 'Registration Has Been Suspended']);

    }
}
