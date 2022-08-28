<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Preco Entity
 *
 * @property int $id
 * @property int $product_id
 * @property string|null $preco_de
 * @property string $preco_por
 * @property bool $status
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Product[] $products
 */
class Preco extends Entity
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
        'product_id' => true,
        'preco_de' => true,
        'preco_por' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'products' => true,
    ];

    protected $_virtual = [
        'porcentagem_desconto'
    ];

    protected function _getPorcentagemDesconto()
    {
        if (!empty($this->_fields['preco_de'])) {
            $valor_desconto = $this->_fields['preco_de'] - $this->_fields['preco_por'];
            return round($this->_fields['preco_por'] / $valor_desconto, 1);
        }
    }
}
