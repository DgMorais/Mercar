<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;

/**
 * User Entity
 *
 * @property int $id
 * @property string|null $nome
 * @property string|null $sobrenome
 * @property string|null $slug
 * @property \Cake\I18n\FrozenDate|null $data_nascimento
 * @property string $email
 * @property string $password
 * @property bool $status
 * @property int|null $group_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property string|null $cpf
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int|null $modified_by
 * @property string|null $token
 * @property \Cake\I18n\FrozenTime|null $token_expires
 * @property \Cake\I18n\FrozenTime|null $last_login
 * @property string|null $avatar
 * @property string|null $genero
 * @property string|null $telefone
 * @property string|null $celular
 *
 * @property \App\Model\Entity\Group $group
 */
class User extends Entity
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
        'nome' => true,
        'sobrenome' => true,
        'slug' => true,
        'data_nascimento' => true,
        'email' => true,
        'password' => true,
        'status' => true,
        'group_id' => true,
        'created' => true,
        'cpf' => true,
        'modified' => true,
        'modified_by' => true,
        'token' => true,
        'token_expires' => true,
        'last_login' => true,
        'avatar' => true,
        'genero' => true,
        'telefone' => true,
        'celular' => true,
        'group' => true,
    ];

    protected $_virtual = [
        'full_name',
        'group_name'
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
        'token',
    ];

    protected function _setPassword(string $password) : ?string
    {
        if (strlen($password) > 0) {
            return (new DefaultPasswordHasher())->hash($password);
        }
    }

    protected function _getFullName()
    {
        if (isset($this->_fields['nome']) && isset($this->_fields['sobrenome'])) {
            return $this->_fields['nome'] . ' ' . $this->_fields['sobrenome'];
        }
    }

    protected function _getGroupName()
    {
        if (isset($this->_fields['group_id'])) {
            if ($this->_fields['group_id'] == 1) {
                return 'client';
            } elseif ($this->_fields['group_id'] == 2) {
                return 'seller';
            } elseif ($this->_fields['group_id'] == 3) {
                return 'admin';
            }
        }
    }
}
