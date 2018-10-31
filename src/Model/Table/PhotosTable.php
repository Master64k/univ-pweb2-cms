<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Photos Model
 *
 * @property \App\Model\Table\PagesTable|\Cake\ORM\Association\BelongsTo $Pages
 * @property \App\Model\Table\NewsTable|\Cake\ORM\Association\BelongsTo $News
 * @property \App\Model\Table\BannersTable|\Cake\ORM\Association\BelongsTo $Banners
 * @property \App\Model\Table\BannersTable|\Cake\ORM\Association\BelongsToMany $Banners
 * @property \App\Model\Table\NewsTable|\Cake\ORM\Association\BelongsToMany $News
 * @property \App\Model\Table\PagesTable|\Cake\ORM\Association\BelongsToMany $Pages
 *
 * @method \App\Model\Entity\Photo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Photo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Photo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Photo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Photo|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Photo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Photo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Photo findOrCreate($search, callable $callback = null, $options = [])
 */
class PhotosTable extends Table
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

        $this->setTable('photos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Pages', [
            'foreignKey' => 'page_id'
        ]);
        $this->belongsTo('News', [
            'foreignKey' => 'news_id'
        ]);
        $this->belongsTo('Banners', [
            'foreignKey' => 'banners_id'
        ]);
        $this->belongsToMany('Banners', [
            'foreignKey' => 'photo_id',
            'targetForeignKey' => 'banner_id',
            'joinTable' => 'banners_photos'
        ]);
        $this->belongsToMany('News', [
            'foreignKey' => 'photo_id',
            'targetForeignKey' => 'news_id',
            'joinTable' => 'news_photos'
        ]);
        $this->belongsToMany('Pages', [
            'foreignKey' => 'photo_id',
            'targetForeignKey' => 'page_id',
            'joinTable' => 'pages_photos'
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
            ->scalar('photo_name')
            ->maxLength('photo_name', 255)
            ->requirePresence('photo_name', 'create')
            ->notEmpty('photo_name');

        $validator
            ->scalar('photo_title')
            ->maxLength('photo_title', 45)
            ->requirePresence('photo_title', 'create')
            ->notEmpty('photo_title');

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
        $rules->add($rules->existsIn(['page_id'], 'Pages'));
        $rules->add($rules->existsIn(['news_id'], 'News'));
        $rules->add($rules->existsIn(['banners_id'], 'Banners'));

        return $rules;
    }
}
