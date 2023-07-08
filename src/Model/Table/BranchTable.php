<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Branch Model
 *
 * @property \App\Model\Table\DivisionTable&\Cake\ORM\Association\HasMany $Division
 * @property \App\Model\Table\SemesterTable&\Cake\ORM\Association\HasMany $Semester
 * @property \App\Model\Table\StudentTable&\Cake\ORM\Association\HasMany $Student
 *
 * @method \App\Model\Entity\Branch newEmptyEntity()
 * @method \App\Model\Entity\Branch newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Branch[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Branch get($primaryKey, $options = [])
 * @method \App\Model\Entity\Branch findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Branch patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Branch[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Branch|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Branch saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Branch[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Branch[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Branch[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Branch[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class BranchTable extends Table
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

        $this->setTable('branch');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Division', [
            'foreignKey' => 'branch_id',
        ]);
        $this->hasMany('Semester', [
            'foreignKey' => 'branch_id',
        ]);
        $this->hasMany('Student', [
            'foreignKey' => 'branch_id',
        ]);
        $this->belongsTo('Domain', [
            'foreignKey' => 'domain_id',
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
            ->integer('Domain_id')
            ->requirePresence('Domain_id', 'create')
            ->notEmptyString('Domain_id');

        $validator
            ->scalar('Branch_name')
            ->maxLength('Branch_name', 10)
            ->requirePresence('Branch_name', 'create')
            ->notEmptyString('Branch_name');

        $validator
            ->boolean('status')
            ->requirePresence('status', 'create')
            ->notEmptyString('status');

        return $validator;
    }
}
