<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * College Model
 *
 * @property \App\Model\Table\DomainTable&\Cake\ORM\Association\HasMany $Domain
 *
 * @method \App\Model\Entity\College newEmptyEntity()
 * @method \App\Model\Entity\College newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\College[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\College get($primaryKey, $options = [])
 * @method \App\Model\Entity\College findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\College patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\College[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\College|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\College saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\College[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\College[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\College[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\College[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CollegeTable extends Table
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

        $this->setTable('college');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Domain', [
            'foreignKey' => 'college_id',
        ]);
        $this->belongsTo('City', [
            'foreignKey' => 'city_id',
        ]);
        $this->belongsTo('State', [
            'foreignKey' => 'state_id',
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
            ->scalar('college_name')
            ->maxLength('college_name', 20)
            ->requirePresence('college_name', 'create')
            ->notEmptyString('college_name');



        $validator
            ->integer('phone_number')
            ->requirePresence('phone_number', 'create')
            ->notEmptyString('phone_number');

        $validator
            ->scalar('address')
            ->maxLength('address', 40)
            ->requirePresence('address', 'create')
            ->notEmptyString('address');

        $validator
            ->integer('city_id')
            ->requirePresence('city_id', 'create')
            ->notEmptyString('city_id');

        $validator
            ->integer('state_id')
            ->requirePresence('state_id', 'create')
            ->notEmptyString('state_id');

        $validator
            ->integer('postalcode')
            ->requirePresence('postalcode', 'create')
            ->notEmptyString('postalcode');

        $validator
            ->scalar('website')
            ->maxLength('website', 50)
            ->requirePresence('website', 'create')
            ->notEmptyString('website');

        $validator
            ->scalar('status')
            ->requirePresence('status', 'create')
            ->notEmptyString('status');

        return $validator;
    }
}
