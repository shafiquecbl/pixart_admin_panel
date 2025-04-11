<?php

namespace Database\Seeders;

use App\Models\Account;
use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    public function run(): void
    {
        $accounts = [
            [
                'account_name' => 'Tech Innovations',
                'account_type' => 'Business Account',
                'contact_person' => 'John Doe',
                'email' => 'john.doe@tech.com',
                'status' => 'Active',
            ],
            [
                'account_name' => 'GreenWorld Ltd.',
                'account_type' => 'Corporate Account',
                'contact_person' => 'Sarah Green',
                'email' => 'sarah.green@world.com',
                'status' => 'On Hold',
            ],
            [
                'account_name' => 'EduPro Services',
                'account_type' => 'Small Business',
                'contact_person' => 'Michael Brown',
                'email' => 'michael@edupro.com',
                'status' => 'Inactive',
            ],
            [
                'account_name' => 'Creative Designs',
                'account_type' => 'Enterprise Account',
                'contact_person' => 'Lisa Smith',
                'email' => 'lisa@creative.com',
                'status' => 'Active',
            ],
            [
                'account_name' => 'Global Partners',
                'account_type' => 'Business Account',
                'contact_person' => 'James Wilson',
                'email' => 'james@global.com',
                'status' => 'Active',
            ],
        ];

        foreach ($accounts as $account) {
            Account::create($account);
        }
    }
}
