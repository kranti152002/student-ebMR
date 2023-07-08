<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * State Model
 *
 * @property \App\Model\Table\CityTable&\Cake\ORM\Association\HasMany $City
 * @property \App\Model\Table\CollegeTable&\Cake\ORM\Association\HasMany $College
 * @property \App\Model\Table\FacultyTable&\Cake\ORM\Association\HasMany $Faculty
 * @property \App\Model\Table\StudentTable&\Cake\ORM\Association\HasMany $Student
 *
 * @method \App\Model\Entity\State newEmptyEntity()
 * @method \App\Model\Entity\State newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\State[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\State get($primaryKey, $options = [])
 * @method \App\Model\Entity\State findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\State patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\State[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\State|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\State saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\State[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\State[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\State[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\State[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class StateTable extends Table
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

        $this->setTable('state');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('City', [
            'foreignKey' => 'state_id',
        ]);
        $this->hasMany('College', [
            'foreignKey' => 'state_id',
        ]);
        $this->hasMany('Faculty', [
            'foreignKey' => 'state_id',
        ]);
        $this->hasMany('Student', [
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
            ->scalar('state_name')
            ->maxLength('state_name', 20)
            ->requirePresence('state_name', 'create')
            ->notEmptyString('state_name');

        $validator
            ->integer('state_code')
            ->requirePresence('state_code', 'create')
            ->notEmptyString('state_code');

        $validator
            ->scalar('abbreviation')
            ->maxLength('abbreviation', 2)
            ->requirePresence('abbreviation', 'create')
            ->notEmptyString('abbreviation');

        return $validator;
    }
}
