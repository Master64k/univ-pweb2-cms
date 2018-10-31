<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Faqs Model
 *
 * @method \App\Model\Entity\Faq get($primaryKey, $options = [])
 * @method \App\Model\Entity\Faq newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Faq[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Faq|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Faq|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Faq patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Faq[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Faq findOrCreate($search, callable $callback = null, $options = [])
 */
class FaqsTable extends Table
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

        $this->setTable('faqs');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('question')
            ->maxLength('question', 255)
            ->requirePresence('question', 'create')
            ->notEmpty('question');

        $validator
            ->scalar('answer')
            ->maxLength('answer', 255)
            ->requirePresence('answer', 'create')
            ->notEmpty('answer');

        $validator
            ->dateTime('created_at')
            ->requirePresence('created_at', 'create')
            ->notEmpty('created_at');

        $validator
            ->dateTime('updated_at')
            ->allowEmpty('updated_at');

        $validator
            ->requirePresence('active', 'create')
            ->notEmpty('active');

        return $validator;
    }
}
