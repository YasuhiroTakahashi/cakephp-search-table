<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateApplicationUsers extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('application_users');
        // サービスカテゴリ（今回新しく追加）
        $table->addColumn('service_category', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        // 規約同意
        $table->addColumn('accept_terms', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        // 住所１
        $table->addColumn('address_1', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        // 住所２（Nullable）
        $table->addColumn('address_2', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);
        // 申込日
        $table->addColumn('application_date', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        // 申込ステータス
        $table->addColumn('application_status', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        // 請求先メールアドレス（Nullable）
        $table->addColumn('billing_email', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);
        // 請求先氏名（Nullable）
        $table->addColumn('billing_name', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);
        // 請求方法（Nullable）
        $table->addColumn('billing_method', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);
        // 会社名（Nullable）
        $table->addColumn('company', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);
        // 契約ステータス
        $table->addColumn('contract_status', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        // 契約種別
        $table->addColumn('contract_type', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        // 契約期間
        $table->addColumn('contract_period', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        // 契約者氏名
        $table->addColumn('contractor_name', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        // 契約者氏名カナ
        $table->addColumn('contractor_name_kana', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        // メールアドレス
        $table->addColumn('email', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        // 流入経路（Nullable）
        $table->addColumn('inflow_route', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);
        // インボイス登録のみフラグ
        $table->addColumn('is_only_invoice_registration', 'boolean', [
            'default' => false,
            'null' => false,
        ]);
        // 代表者名（Nullable）
        $table->addColumn('representative', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);
        // 携帯電話番号
        $table->addColumn('phone_number', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        // 電話番号（Nullable）
        $table->addColumn('tel', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);
        // 郵便番号
        $table->addColumn('postal_code', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        // ノート（Nullable）
        $table->addColumn('note', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);
        // 利用開始日
        $table->addColumn('start_date_use', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        // 作成者
        $table->addColumn('created_by', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        // 更新者
        $table->addColumn('modified_by', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        // 作成日時
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        // 更新日時
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();
    }
}
