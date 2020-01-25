<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Celebrities Model
 *
 * @property \App\Model\Table\CategoriesTable&\Cake\ORM\Association\BelongsTo $Categories
 *
 * @method \App\Model\Entity\Celebrity get($primaryKey, $options = [])
 * @method \App\Model\Entity\Celebrity newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Celebrity[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Celebrity|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Celebrity saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Celebrity patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Celebrity[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Celebrity findOrCreate($search, callable $callback = null, $options = [])
 */
class CelebritiesTable extends Table
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

        $this->setTable('celebrities');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Categories', [
            'foreignKey' => 'category_id',
            'joinType' => 'INNER',
        ]);
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
            ->scalar('names')
            ->maxLength('names', 60)
            ->requirePresence('names', 'create')
            ->notEmptyString('names');

        $validator
            ->requirePresence('phone_number', 'create')
            ->notEmptyString('phone_number');

        $validator
            ->scalar('Status')
            ->requirePresence('Status', 'create')
            ->notEmptyString('Status');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['category_id'], 'Categories'));

        return $rules;
    }
}
