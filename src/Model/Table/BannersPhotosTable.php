<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BannersPhotos Model
 *
 * @property \App\Model\Table\BannersTable|\Cake\ORM\Association\BelongsTo $Banners
 *
 * @method \App\Model\Entity\BannersPhoto get($primaryKey, $options = [])
 * @method \App\Model\Entity\BannersPhoto newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\BannersPhoto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\BannersPhoto|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BannersPhoto|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BannersPhoto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\BannersPhoto[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\BannersPhoto findOrCreate($search, callable $callback = null, $options = [])
 */
class BannersPhotosTable extends Table
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

        $this->setTable('banners_photos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Banners', [
            'foreignKey' => 'banners_id'
        ]);
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
            ->nonNegativeInteger('id')
            ->allowEmpty('id', 'create');

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

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['banners_id'], 'Banners'));

        return $rules;
    }
}
