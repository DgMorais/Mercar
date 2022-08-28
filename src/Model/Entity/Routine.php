<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Routine Entity
 *
 * @property int $id
 * @property string $command
 * @property string|null $parameters
 * @property int $status
 * @property int $tries
 * @property \Cake\I18n\FrozenTime|null $begin
 * @property \Cake\I18n\FrozenTime|null $end
 * @property string|null $erros
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime|null $modified
 */
class Routine extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'command' => true,
        'parameters' => true,
        'status' => true,
        'tries' => true,
        'begin' => true,
        'end' => true,
        'erros' => true,
        'created' => true,
        'modified' => true,
    ];
}
