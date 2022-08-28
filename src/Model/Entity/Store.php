<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Store Entity
 *
 * @property int $id
 * @property int $user_id
 * @property string $nome
 * @property string $razao_social
 * @property string|null $descricao
 * @property string|null $cnpj
 * @property string|null $cep
 * @property string|null $rua
 * @property int|null $numero
 * @property string|null $complemento
 * @property string|null $bairro
 * @property string|null $cidade
 * @property string|null $estado
 * @property string $slug
 * @property bool $status
 * @property string|null $images
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Preco[] $precos
 * @property \App\Model\Entity\Product[] $products
 */
class Store extends Entity
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
        'nome' => true,
        'razao_social' => true,
        'descricao' => true,
        'cnpj' => true,
        'cep' => true,
        'rua' => true,
        'numero' => true,
        'complemento' => true,
        'bairro' => true,
        'cidade' => true,
        'estado' => true,
        'slug' => true,
        'status' => true,
        'images' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'precos' => true,
        'products' => true,
    ];
}
