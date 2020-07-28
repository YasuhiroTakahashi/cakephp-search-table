<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ApplicationUsers Model
 *
 * @method \App\Model\Entity\ApplicationUser newEmptyEntity()
 * @method \App\Model\Entity\ApplicationUser newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ApplicationUser[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ApplicationUser get($primaryKey, $options = [])
 * @method \App\Model\Entity\ApplicationUser findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ApplicationUser patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ApplicationUser[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ApplicationUser|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ApplicationUser saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ApplicationUser[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ApplicationUser[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ApplicationUser[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ApplicationUser[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ApplicationUsersTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('application_users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('service_category')
            ->maxLength('service_category', 255)
            ->requirePresence('service_category', 'create')
            ->notEmptyString('service_category');

        $validator
            ->scalar('accept_terms')
            ->maxLength('accept_terms', 255)
            ->requirePresence('accept_terms', 'create')
            ->notEmptyString('accept_terms');

        $validator
            ->scalar('address_1')
            ->maxLength('address_1', 255)
            ->requirePresence('address_1', 'create')
            ->notEmptyString('address_1');

        $validator
            ->scalar('address_2')
            ->maxLength('address_2', 255)
            ->allowEmptyString('address_2');

        $validator
            ->dateTime('application_date')
            ->requirePresence('application_date', 'create')
            ->notEmptyDateTime('application_date');

        $validator
            ->scalar('application_status')
            ->maxLength('application_status', 255)
            ->requirePresence('application_status', 'create')
            ->notEmptyString('application_status');

        $validator
            ->scalar('billing_email')
            ->maxLength('billing_email', 255)
            ->allowEmptyString('billing_email');

        $validator
            ->scalar('billing_name')
            ->maxLength('billing_name', 255)
            ->allowEmptyString('billing_name');

        $validator
            ->scalar('billing_method')
            ->maxLength('billing_method', 255)
            ->allowEmptyString('billing_method');

        $validator
            ->scalar('company')
            ->maxLength('company', 255)
            ->allowEmptyString('company');

        $validator
            ->scalar('contract_status')
            ->maxLength('contract_status', 255)
            ->requirePresence('contract_status', 'create')
            ->notEmptyString('contract_status');

        $validator
            ->scalar('contract_type')
            ->maxLength('contract_type', 255)
            ->requirePresence('contract_type', 'create')
            ->notEmptyString('contract_type');

        $validator
            ->scalar('contract_period')
            ->maxLength('contract_period', 255)
            ->requirePresence('contract_period', 'create')
            ->notEmptyString('contract_period');

        $validator
            ->scalar('contractor_name')
            ->maxLength('contractor_name', 255)
            ->requirePresence('contractor_name', 'create')
            ->notEmptyString('contractor_name');

        $validator
            ->scalar('contractor_name_kana')
            ->maxLength('contractor_name_kana', 255)
            ->requirePresence('contractor_name_kana', 'create')
            ->notEmptyString('contractor_name_kana');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        $validator
            ->scalar('inflow_route')
            ->maxLength('inflow_route', 255)
            ->allowEmptyString('inflow_route');

        $validator
            ->boolean('is_only_invoice_registration')
            ->notEmptyString('is_only_invoice_registration');

        $validator
            ->scalar('representative')
            ->maxLength('representative', 255)
            ->allowEmptyString('representative');

        $validator
            ->scalar('phone_number')
            ->maxLength('phone_number', 255)
            ->requirePresence('phone_number', 'create')
            ->notEmptyString('phone_number');

        $validator
            ->scalar('tel')
            ->maxLength('tel', 255)
            ->allowEmptyString('tel');

        $validator
            ->scalar('postal_code')
            ->maxLength('postal_code', 255)
            ->requirePresence('postal_code', 'create')
            ->notEmptyString('postal_code');

        $validator
            ->scalar('note')
            ->maxLength('note', 255)
            ->allowEmptyString('note');

        $validator
            ->dateTime('start_date_use')
            ->requirePresence('start_date_use', 'create')
            ->notEmptyDateTime('start_date_use');

        $validator
            ->scalar('created_by')
            ->maxLength('created_by', 255)
            ->requirePresence('created_by', 'create')
            ->notEmptyString('created_by');

        $validator
            ->scalar('modified_by')
            ->maxLength('modified_by', 255)
            ->requirePresence('modified_by', 'create')
            ->notEmptyString('modified_by');

        return $validator;
    }
}
