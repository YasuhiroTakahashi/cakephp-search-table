<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * ApplicationStatuses seed.
 */
class ApplicationStatusesSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $date = new DateTime();
        $data = [
            [
                'name' => '新規申込',
                'created_by' => 'test@test.com',
                'modified_by' => 'test@test.com',
                'created' => $date->format('Y-m-d H:i:s'),
                'modified' => $date->format('Y-m-d H:i:s')
            ],
            [
                'name' => '審査中',
                'created_by' => 'test@test.com',
                'modified_by' => 'test@test.com',
                'created' => $date->format('Y-m-d H:i:s'),
                'modified' => $date->format('Y-m-d H:i:s')
            ],
            [
                'name' => '審査済（会員）',
                'created_by' => 'test@test.com',
                'modified_by' => 'test@test.com',
                'created' => $date->format('Y-m-d H:i:s'),
                'modified' => $date->format('Y-m-d H:i:s')
            ],
            [
                'name' => '審査済（不可）',
                'created_by' => 'test@test.com',
                'modified_by' => 'test@test.com',
                'created' => $date->format('Y-m-d H:i:s'),
                'modified' => $date->format('Y-m-d H:i:s')
            ],
        ];

        $table = $this->table('application_statuses');
        $table->insert($data)->save();
    }
}
