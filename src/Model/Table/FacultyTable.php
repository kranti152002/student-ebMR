<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Faculty Model
 *
 * @property \App\Model\Table\DivisionTable&\Cake\ORM\Association\HasMany $Division
 *
 * @method \App\Model\Entity\Faculty newEmptyEntity()
 * @method \App\Model\Entity\Faculty newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Faculty[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Faculty get($primaryKey, $options = [])
 * @method \App\Model\Entity\Faculty findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Faculty patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Faculty[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Faculty|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Faculty saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Faculty[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Faculty[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Faculty[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Faculty[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class FacultyTable extends Table
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

        $this->setTable('faculty');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Division', [
            'foreignKey' => 'faculty_id',
        ]);
        $this->belongsTo('Subject', [
            'foreignKey' => 'subject_id',
        ]);

        $this->belongsTo('City' ,[
            'forighnKey' => 'city_id',
        ]);

        $this->belongsTo('State' ,[
            'forighnKey' => 'state_id',
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
            ->integer('subject_id')
            ->requirePresence('subject_id', 'create')
            ->notEmptyString('subject_id');

        $validator
            ->scalar('faculty_name')
            ->maxLength('faculty_name', 20)
            ->requirePresence('faculty_name', 'create')
            ->notEmptyString('faculty_name');

        $validator
            ->scalar('faculty_address')
            ->maxLength('faculty_address', 50)
            ->requirePresence('faculty_address', 'create')
            ->notEmptyString('faculty_address');

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
            ->integer('semester_id')
            ->requirePresence('semester_id', 'create')
            ->notEmptyString('semester_id');

        $validator
            ->integer('phone_number')
            ->requirePresence('phone_number', 'create')
            ->notEmptyString('phone_number');

        $validator
            ->integer('experience')
            ->requirePresence('experience', 'create')
            ->notEmptyString('experience');

        $validator
            ->scalar('gender')
            ->maxLength('gender', 1)
            ->requirePresence('gender', 'create')
            ->notEmptyString('gender');

        $validator
            ->scalar('qualification')
            ->maxLength('qualification', 20)
            ->requirePresence('qualification', 'create')
            ->notEmptyString('qualification');

        $validator
            ->integer('salary')
            ->requirePresence('salary', 'create')
            ->notEmptyString('salary');

        $validator
            ->requirePresence('status', 'create')
            ->notEmptyString('status');

        return $validator;
    }
}
