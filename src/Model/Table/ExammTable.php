<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Examm Model
 *
 * @method \App\Model\Entity\Examm newEmptyEntity()
 * @method \App\Model\Entity\Examm newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Examm[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Examm get($primaryKey, $options = [])
 * @method \App\Model\Entity\Examm findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Examm patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Examm[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Examm|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Examm saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Examm[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Examm[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Examm[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Examm[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ExammTable extends Table
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

        $this->setTable('examm');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('College', [
            'foreignKey' => 'college_id',
        ]);

        $this->belongsTo('Student', [
            'foreignKey' => 'student_id',
        ]);
        $this->belongsTo('Subject', [
            'foreignKey' => 'subject_id',
        ]);
        $this->belongsTo('Semester', [
            'foreignKey' => 'semester_id',
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
        ->integer('college_id')
        ->requirePresence('college_id', 'create')
        ->notEmptyString('college_id');

        $validator
            ->integer('student_id')
            ->requirePresence('student_id', 'create')
            ->notEmptyString('student_id');

        $validator
            ->integer('subject_id')
            ->requirePresence('subject_id', 'create')
            ->notEmptyString('subject_id');

        $validator
            ->integer('marks')
            ->requirePresence('marks', 'create')
            ->notEmptyString('marks');

            $validator
            ->integer('semester_id')
            ->requirePresence('semester_id', 'create')
            ->notEmptyString('semester_id');

        return $validator;
    }
}
