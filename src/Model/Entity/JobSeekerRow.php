<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * JobSeekerRow Entity
 *
 * @property int $id
 * @property int $job_seeker_id
 * @property string $degree_type
 * @property string $degree_name
 * @property string $institute_name
 * @property string $location
 * @property float $percentage_cgpa
 * @property int $passed_out_year
 *
 * @property \App\Model\Entity\JobSeeker $job_seeker
 */
class JobSeekerRow extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
