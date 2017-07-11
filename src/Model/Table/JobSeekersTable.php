<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * JobSeekers Model
 *
 * @property \App\Model\Table\JobSeekerRowsTable|\Cake\ORM\Association\HasMany $JobSeekerRows
 *
 * @method \App\Model\Entity\JobSeeker get($primaryKey, $options = [])
 * @method \App\Model\Entity\JobSeeker newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\JobSeeker[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\JobSeeker|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\JobSeeker patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\JobSeeker[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\JobSeeker findOrCreate($search, callable $callback = null, $options = [])
 */
class JobSeekersTable extends Table
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

        $this->setTable('job_seekers');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('JobSeekerRows', [
            'foreignKey' => 'job_seeker_id'
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

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->requirePresence('password', 'create')
            ->notEmpty('password');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->requirePresence('mobile_no', 'create')
            ->notEmpty('mobile_no');

        $validator
            ->requirePresence('located_city', 'create')
            ->notEmpty('located_city');

        $validator
            ->requirePresence('skill_set', 'create')
            ->notEmpty('skill_set');

        $validator
            ->requirePresence('job_profile', 'create')
            ->notEmpty('job_profile');

        $validator
            ->requirePresence('profile_document', 'create')
            ->notEmpty('profile_document');

         

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
        $rules->add($rules->isUnique(['email']));

        return $rules;
    }
}
