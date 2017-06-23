<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Addres Entity
 *
 * @property int $id
 * @property string $cep
 * @property string $tipo_logradouro
 * @property string $logradouro
 * @property string $numero
 * @property string $complemento
 * @property string $bairro
 * @property string $cidade
 * @property string $uf
 * @property int $id_cliente
 * @property int $id_fornecedor
 */
class Addres extends Entity
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
        '*' => true,
        'id' => false
    ];
}
