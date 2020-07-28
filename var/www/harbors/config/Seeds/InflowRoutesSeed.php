<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * InflowRoutes seed.
 */
class InflowRoutesSeed extends AbstractSeed
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
                'name' => 'Facebookの広告',
                'created_by' => 'test@test.com',
                'modified_by' => 'test@test.com',
                'created' => $date->format('Y-m-d H:i:s'),
                'modified' => $date->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Twitterの広告',
                'created_by' => 'test@test.com',
                'modified_by' => 'test@test.com',
                'created' => $date->format('Y-m-d H:i:s'),
                'modified' => $date->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'チラシ',
                'created_by' => 'test@test.com',
                'modified_by' => 'test@test.com',
                'created' => $date->format('Y-m-d H:i:s'),
                'modified' => $date->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Google 検索',
                'created_by' => 'test@test.com',
                'modified_by' => 'test@test.com',
                'created' => $date->format('Y-m-d H:i:s'),
                'modified' => $date->format('Y-m-d H:i:s')
            ],
        ];

        $table = $this->table('inflow_routes');
        $table->insert($data)->save();
    }
}
