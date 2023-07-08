<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Student Model
 *
 * @method \App\Model\Entity\Student newEmptyEntity()
 * @method \App\Model\Entity\Student newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Student[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Student get($primaryKey, $options = [])
 * @method \App\Model\Entity\Student findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Student patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Student[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Student|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Student saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Student[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Student[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Student[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Student[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class StudentTable extends Table
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

        $this->setTable('student');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
        $this->belongsTo('Division', [
            'foreignKey' => 'division_id',
        ]);
        $this->belongsTo('Branch', [
            'foreignKey' => 'branch_id',
        ]);
        $this->belongsTo('Semester', [
            'foreignKey' => 'semester_id',
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
            ->integer('division_id')
            ->requirePresence('division_id', 'create')
            ->notEmptyString('division_id');

        $validator
            ->integer('branch_id')
            ->requirePresence('branch_id', 'create')
            ->notEmptyString('branch_id');

        $validator
            ->integer('semester_id')
            ->requirePresence('semester_id', 'create')
            ->notEmptyString('semester_id');

        $validator
            ->scalar('student_name')
            ->maxLength('student_name', 30)
            ->requirePresence('student_name', 'create')
            ->notEmptyString('student_name');

        $validator
            ->scalar('student_address')
            ->maxLength('student_address', 50)
            ->requirePresence('student_address', 'create')
            ->notEmptyString('student_address');

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
            ->integer('phone_number')
            ->requirePresence('phone_number', 'create')
            ->notEmptyString('phone_number');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        $validator
            ->scalar('gender')
            ->maxLength('gender', 1)
            ->requirePresence('gender', 'create')
            ->notEmptyString('gender');

        $validator
            ->scalar('image')
            ->maxLength('image', 100)
            ->requirePresence('image', 'create')
            ->notEmptyString('image');

        $validator
            ->boolean('status')
            ->requirePresence('status', 'create')
            ->notEmptyString('status');

        return $validator;
    }
}
