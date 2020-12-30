<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Questionlist Entity
 *
 * @property int $id
 * @property int $userdetail_id
 * @property int $question_id
 * @property string $answer
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Userdetail $userdetail
 * @property \App\Model\Entity\Question $question
 */
class Questionlist extends Entity
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
