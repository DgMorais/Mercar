<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ResponseQueue Entity
 *
 * @property int $id
 * @property int $payment_id
 * @property string $data_raw
 * @property string $redirect
 * @property int $status
 * @property int $tries
 * @property \Cake\I18n\FrozenTime|null $begin
 * @property \Cake\I18n\FrozenTime|null $end
 * @property string|null $erros
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime|null $modified
 */
class ResponseQueue extends Entity
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
        'payment_id' => true,
        'data_raw' => true,
        'redirect' => true,
        'status' => true,
        'tries' => true,
        'begin' => true,
        'end' => true,
        'erros' => true,
        'created' => true,
        'modified' => true,
    ];
}
