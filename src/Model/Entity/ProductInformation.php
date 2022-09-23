<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ProductInformation Entity
 *
 * @property int $id
 * @property int $product_id
 * @property string|null $weight
 * @property string|null $dimension
 * @property string|null $other_informations
 * @property string|null $more_informations
 *
 * @property \App\Model\Entity\Product[] $products
 */
class ProductInformation extends Entity
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
        'weight' => true,
        'dimension' => true,
        'other_informations' => true,
        'more_informations' => true,
        'products' => true,
    ];
}
