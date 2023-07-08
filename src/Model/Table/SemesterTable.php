<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Semester Model
 *
 * @property \App\Model\Table\FacultyTable&\Cake\ORM\Association\HasMany $Faculty
 * @property \App\Model\Table\StudentTable&\Cake\ORM\Association\HasMany $Student
 * @property \App\Model\Table\SubjectTable&\Cake\ORM\Association\HasMany $Subject
 *
 * @method \App\Model\Entity\Semester newEmptyEntity()
 * @method \App\Model\Entity\Semester newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Semester[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Semester get($primaryKey, $options = [])
 * @method \App\Model\Entity\Semester findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Semester patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Semester[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Semester|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Semester saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Semester[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Semester[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Semester[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Semester[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SemesterTable extends Table
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

        $this->setTable('semester');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Faculty', [
            'foreignKey' => 'semester_id',
        ]);
        $this->hasMany('Student', [
            'foreignKey' => 'semester_id',
        ]);
        $this->hasMany('Subject', [
            'foreignKey' => 'semester_id',
        ]);
        $this->belongsTo('Branch', [
            'foreignKey' => 'branch_id',
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
            ->integer('branch_id')
            ->requirePresence('branch_id', 'create')
            ->notEmptyString('branch_id');

        $validator
            ->integer('sem_number')
            ->requirePresence('sem_number', 'create')
            ->notEmptyString('sem_number');
            
        $validator
        ->integer('year')
        ->requirePresence('year', 'create')
        ->notEmptyString('year');

        $validator
            ->integer('fees')
            ->requirePresence('fees', 'create')
            ->notEmptyString('fees');

        return $validator;
    }
}
