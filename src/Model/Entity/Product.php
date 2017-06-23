<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity
 *
 * @property int $id
 * @property string $nome
 * @property float $preco_custo
 * @property float $preco_venda
 * @property float $peso_bruto
 * @property float $peso_liquido
 * @property int $id_categoria
 * @property int $id_fornecedor
 * @property int $quantiade
 * @property string $foto
 * @property string $informacoes_adicionais
 * @property \Cake\I18n\FrozenDate $data_cadastro
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
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
