<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * InflowRoutes Model
 *
 * @method \App\Model\Entity\InflowRoute newEmptyEntity()
 * @method \App\Model\Entity\InflowRoute newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\InflowRoute[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\InflowRoute get($primaryKey, $options = [])
 * @method \App\Model\Entity\InflowRoute findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\InflowRoute patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\InflowRoute[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\InflowRoute|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\InflowRoute saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\InflowRoute[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\InflowRoute[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\InflowRoute[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\InflowRoute[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class InflowRoutesTable extends Table
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

        $this->setTable('inflow_routes');
        $this->setDisplayField('name');
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
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

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
