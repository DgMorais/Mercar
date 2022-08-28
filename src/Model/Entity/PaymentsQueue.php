<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PaymentsQueue Entity
 *
 * @property int $id
 * @property int $sale_id
 * @property string $data_raw
 * @property \Cake\I18n\FrozenTime|null $begin
 * @property \Cake\I18n\FrozenTime|null $end
 * @property int $status
 * @property int $tries
 * @property string|null $erros
 * @property string|null $response
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Sale[] $sales
 */
class PaymentsQueue extends Entity
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
        'sale_id' => true,
        'data_raw' => true,
        'begin' => true,
        'end' => true,
        'status' => true,
        'tries' => true,
        'erros' => true,
        'response' => true,
        'created' => true,
        'modified' => true,
        'sales' => true,
    ];
}
