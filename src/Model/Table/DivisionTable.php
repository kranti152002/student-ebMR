<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Division Model
 *
 * @property \App\Model\Table\StudentTable&\Cake\ORM\Association\HasMany $Student
 *
 * @method \App\Model\Entity\Division newEmptyEntity()
 * @method \App\Model\Entity\Division newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Division[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Division get($primaryKey, $options = [])
 * @method \App\Model\Entity\Division findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Division patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Division[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Division|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Division saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Division[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Division[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Division[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Division[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DivisionTable extends Table
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

        $this->setTable('division');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Student', [
            'foreignKey' => 'division_id',
        ]);
        
        $this->belongsTo('Branch', [
            'foreignKey' => 'branch_id',
        ]);

        $this->belongsTo('Faculty', [
            'foreignKey' => 'faculty_id',
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
            ->integer('faculty_id')
            ->requirePresence('faculty_id', 'create')
            ->notEmptyString('faculty_id');

        $validator
            ->integer('division_number')
            ->requirePresence('division_number', 'create')
            ->notEmptyString('division_number');

        $validator
            ->integer('strength')
            ->requirePresence('strength', 'create')
            ->notEmptyString('strength');

        $validator
            ->integer('branch_id')
            ->requirePresence('branch_id', 'create')
            ->notEmptyString('branch_id');

        $validator
            ->boolean('status')
            ->requirePresence('status', 'create')
            ->notEmptyString('status');

        return $validator;
    }
}
