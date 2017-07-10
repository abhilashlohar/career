<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * JobSeekerRows Model
 *
 * @property \App\Model\Table\JobSeekersTable|\Cake\ORM\Association\BelongsTo $JobSeekers
 *
 * @method \App\Model\Entity\JobSeekerRow get($primaryKey, $options = [])
 * @method \App\Model\Entity\JobSeekerRow newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\JobSeekerRow[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\JobSeekerRow|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\JobSeekerRow patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\JobSeekerRow[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\JobSeekerRow findOrCreate($search, callable $callback = null, $options = [])
 */
class JobSeekerRowsTable extends Table
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

        $this->setTable('job_seeker_rows');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('JobSeekers', [
            'foreignKey' => 'job_seeker_id',
            'joinType' => 'INNER'
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
            ->integer('id')
            ->allowEmpty('id', 'create');

       /* $validator
            ->requirePresence('degree_type', 'create')
            ->notEmpty('degree_type');

        $validator
            ->requirePresence('degree_name', 'create')
            ->notEmpty('degree_name');

        $validator
            ->requirePresence('institute_name', 'create')
            ->notEmpty('institute_name');

        $validator
            ->requirePresence('location', 'create')
            ->notEmpty('location');

        $validator
            ->decimal('percentage_cgpa')
            ->requirePresence('percentage_cgpa', 'create')
            ->notEmpty('percentage_cgpa');

        $validator
            ->integer('passed_out_year')
            ->requirePresence('passed_out_year', 'create')
            ->notEmpty('passed_out_year');
*/
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
        $rules->add($rules->existsIn(['job_seeker_id'], 'JobSeekers'));

        return $rules;
    }
}
