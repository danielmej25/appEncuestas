<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UserTests Model
 *
 * @method \App\Model\Entity\UserTest get($primaryKey, $options = [])
 * @method \App\Model\Entity\UserTest newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\UserTest[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UserTest|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UserTest saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UserTest patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\UserTest[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\UserTest findOrCreate($search, callable $callback = null, $options = [])
 */
class UserTestsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('user_tests');
        $this->setDisplayField('id_user_test');
        $this->setPrimaryKey('id_user_test');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id_user_test')
            ->allowEmptyString('id_user_test', null, 'create');

        $validator
            ->scalar('url_page')
            ->maxLength('url_page', 500)
            ->requirePresence('url_page', 'create')
            ->notEmptyString('url_page');

        $validator
            ->dateTime('max_date')
            ->requirePresence('max_date', 'create')
            ->notEmptyDateTime('max_date');

        $validator
            ->integer('id_test')
            ->requirePresence('id_test', 'create')
            ->notEmptyString('id_test');

        $validator
            ->scalar('username')
            ->maxLength('username', 255)
            ->requirePresence('username', 'create')
            ->notEmptyString('username');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['username']));

        return $rules;
    }
}
