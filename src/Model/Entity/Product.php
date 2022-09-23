<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int|null $store_id
 * @property string $nome
 * @property string $descricao
 * @property string $slug
 * @property bool $status
 * @property string|null $images
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Store $store
 * @property \App\Model\Entity\Preco $preco
 */
class Product extends Entity
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
        'user_id' => true,
        'store_id' => true,
        'nome' => true,
        'descricao' => true,
        'slug' => true,
        'status' => true,
        'images' => true,
        'category_id' => true,
        'max_parcelas' => true,
        'quantity' => true,
        'product_information_id' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'store' => true,
        'preco' => true,
        'product_information' => true
    ];
}
