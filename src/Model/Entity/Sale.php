<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\ORM\Query;

/**
 * Sale Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int|null $address_id
 * @property string $valor
 * @property int|null $cupom_id
 * @property string $desconto
 * @property string $valor_final
 * @property string|null $destinatario
 * @property string|null $forma_pagamento
 * @property int|null $parcelas
 * @property bool $liberado
 * @property string|null $status_pagseguro
 * @property string|null $id_pagseguro
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\UserRequest[] $user_requests
 * @property \App\Model\Entity\Endereco $endereco
 * @property \App\Model\Entity\Cupon $cupon
 * @property \App\Model\Entity\PaymentsQueue $payments_queue
 */
class Sale extends Entity
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
        'address_id' => true,
        'valor' => true,
        'cupom_id' => true,
        'desconto' => true,
        'valor_final' => true,
        'destinatario' => true,
        'forma_pagamento' => true,
        'parcelas' => true,
        'liberado' => true,
        'status_pagseguro' => true,
        'id_pagseguro' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'user_requests' => true,
        'endereco' => true,
        'cupon' => true,
        'payments_queue' => true,
    ];

    protected $_virtual = [
        'status_pagamento'
    ];

    public function _getStatusPagamento()
    {
        switch ($this->_fields['status_pagseguro']) {
            case 'AUTHORIZED': //Cobrança está pré-autorizada.
                return 'Pré Autorizado';
                break;
            case 'PAID': //Indica que a cobrança está paga (capturada).
                return 'Pago';
                break;
            case 'IN_ANALYSIS': //O PagSeguro está analisando o risco da transação.
                return 'Em análise';
                break;
            case 'DECLINED': //Cobrança foi negada pelo PagSeguro ou Emissor.
                return 'Pagamento Negado';
                break;
            case 'CANCELED': //Cobrança foi cancelada.
                return 'Cobrança Cancelada';
                break;
            default:
                return 'Aguardando Pagamento';
        }
    }
}
