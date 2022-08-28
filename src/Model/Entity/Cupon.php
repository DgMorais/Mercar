<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cupon Entity
 *
 * @property int $id
 * @property int|null $category_id
 * @property int $tipo_desconto
 * @property string $codigo
 * @property string $valor_real
 * @property int $valor_porcentagem
 * @property int $qtd_usos
 * @property bool $status
 * @property \Cake\I18n\FrozenTime|null $validade
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Category $category
 */
class Cupon extends Entity
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
        'category_id' => true,
        'tipo_desconto' => true,
        'codigo' => true,
        'valor_real' => true,
        'valor_porcentagem' => true,
        'qtd_usos' => true,
        'status' => true,
        'validade' => true,
        'created' => true,
        'modified' => true,
        'category' => true,
    ];
}
