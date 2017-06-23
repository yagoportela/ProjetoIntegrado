<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Products Model
 *
 * @method \App\Model\Entity\Product get($primaryKey, $options = [])
 * @method \App\Model\Entity\Product newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Product[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Product|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Product patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Product[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Product findOrCreate($search, callable $callback = null, $options = [])
 */
class ProductsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('products');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('nome', 'create')
            ->notEmpty('nome');

        $validator
            ->numeric('preco_custo')
            ->requirePresence('preco_custo', 'create')
            ->notEmpty('preco_custo');

        $validator
            ->numeric('preco_venda')
            ->requirePresence('preco_venda', 'create')
            ->notEmpty('preco_venda');

        $validator
            ->numeric('peso_bruto')
            ->requirePresence('peso_bruto', 'create')
            ->notEmpty('peso_bruto');

        $validator
            ->numeric('peso_liquido')
            ->requirePresence('peso_liquido', 'create')
            ->notEmpty('peso_liquido');

        $validator
            ->integer('id_categoria')
            ->requirePresence('id_categoria', 'create')
            ->notEmpty('id_categoria');

        $validator
            ->integer('id_fornecedor')
            ->requirePresence('id_fornecedor', 'create')
            ->notEmpty('id_fornecedor');

        $validator
            ->integer('quantiade')
            ->allowEmpty('quantiade');

        $validator
            ->allowEmpty('foto');

        $validator
            ->allowEmpty('informacoes_adicionais');

        $validator
            ->date('data_cadastro')
            ->allowEmpty('data_cadastro');

        return $validator;
    }
}
