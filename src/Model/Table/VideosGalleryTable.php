<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * VideosGallery Model
 *
 * @property \App\Model\Table\NewsTable|\Cake\ORM\Association\BelongsTo $News
 *
 * @method \App\Model\Entity\VideosGallery get($primaryKey, $options = [])
 * @method \App\Model\Entity\VideosGallery newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\VideosGallery[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\VideosGallery|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\VideosGallery|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\VideosGallery patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\VideosGallery[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\VideosGallery findOrCreate($search, callable $callback = null, $options = [])
 */
class VideosGalleryTable extends Table
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

        $this->setTable('videos_gallery');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('News', [
            'foreignKey' => 'news_id'
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
            ->scalar('name')
            ->maxLength('name', 45)
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->dateTime('created_at')
            ->requirePresence('created_at', 'create')
            ->notEmpty('created_at');

        $validator
            ->dateTime('updated_at')
            ->allowEmpty('updated_at');

        $validator
            ->integer('active')
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
        $rules->add($rules->existsIn(['news_id'], 'News'));

        return $rules;
    }
}
