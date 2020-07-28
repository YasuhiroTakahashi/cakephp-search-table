<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * ApplicationUsers seed.
 */
class ApplicationUsersSeed extends AbstractSeed
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
        $table = $this->table('application_users');
        for($i=0;$i<100;$i++) {
            $switchFlag = ($i % 2) === 0 ? true : false;
            $prefix = 'test' . $i;
            $date = new DateTimeImmutable('2020-01-01');
            $data = [
                'service_category' => $switchFlag ? 'バーチャルオフィス' : 'コワーキング',
                'accept_terms' => '同意する',
                'address_1' => $prefix . '県',
                'address_2' => $prefix . '市',
                'application_date' => $date->modify('+' . $i . ' days')->format('Y-m-d H:i:s'),
                'application_status' => $this->getApplicationStatus($i),
                'billing_email' => $prefix . 'billing@test.com',
                'billing_name' => $prefix . '請求太郎',
                'billing_method' => '',
                'company' => $prefix . '会社',
                'contract_status' => '契約手続中',
                'contract_type' => $switchFlag ? '個人' : '法人',
                'contract_period' => '6',
                'contractor_name' => $prefix . '太郎',
                'contractor_name_kana' => $prefix . 'タロウ',
                'email' => $prefix . 'test@test.com',
                'inflow_route' => $this->getInflowRoute($i),
                'is_only_invoice_registration' => 0,
                'representative' => $prefix . '代表者',
                'phone_number' => '090-1234-5678',
                'tel' => '080-1234-5678',
                'postal_code' => '123-4567',
                'note' => $prefix . 'note',
                'start_date_use' => $date->modify('+' . $i . ' days')->format('Y-m-d H:i:s'),
                'created_by' => 'test@test.com',
                'modified_by' => 'test@test.com',
                'created' => $date->format('Y-m-d H:i:s'),
                'modified' => $date->format('Y-m-d H:i:s')
            ];
            $table->insert($data)->save();
        } 
    }
    public function getApplicationStatus(int $i) {
        if (($i % 3) === 0) {
            return '審査済（会員）';
        }
        if (($i % 5) === 0) {
            return '審査済（不可）';
        }
        if (($i % 2) === 0) {
            return '審査中';
        }
        return '新規申込';
    }
    public function getInflowRoute(int $i) {
        $str = [];
        if (($i % 3) === 0) {
            $str[] = 'Facebookの広告';
        }
        if (($i % 5) === 0) {
            $str[] = 'Twitterの広告';
        }
        if (($i % 2) === 0) {
            $str[] =  'チラシ';
        }
        $str[] = 'Google 検索';
        return implode(',', $str);
    }
}
