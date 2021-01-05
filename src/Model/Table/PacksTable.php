<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Packs Model
 *
 * @method \App\Model\Entity\Pack get($primaryKey, $options = [])
 * @method \App\Model\Entity\Pack newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Pack[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pack|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pack saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pack patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Pack[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pack findOrCreate($search, callable $callback = null, $options = [])
 */
class PacksTable extends Table
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

        $this->setTable('packs');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->allowEmptyString('id', null, 'create');

        $validator
            ->numeric('amount')
            ->requirePresence('amount', 'create')
            ->notEmptyString('amount');

        $validator
            ->scalar('ProductName')
            ->maxLength('ProductName', 30)
            ->requirePresence('ProductName', 'create')
            ->notEmptyString('ProductName');

        $validator
            ->integer('pack_length')
            ->requirePresence('pack_length', 'create')
            ->notEmptyString('pack_length');

        $validator
            ->scalar('unit')
            ->maxLength('unit', 30)
            ->requirePresence('unit', 'create')
            ->notEmptyString('unit');

        $validator
            ->scalar('period')
            ->requirePresence('period', 'create')
            ->notEmptyString('period');

        return $validator;
    }
}
