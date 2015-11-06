<?php
namespace App\Model\Table;

use App\Model\Entity\Emiten;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Emiten Model
 *
 */
class EmitenTable extends Table
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

        $this->table('emiten');
        $this->displayField('name');
        $this->primaryKey('id');

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
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('name');

        $validator
            ->allowEmpty('market_cap');

        $validator
            ->allowEmpty('stock_price');

        $validator
            ->allowEmpty('r2006');

        $validator
            ->allowEmpty('r2007');

        $validator
            ->allowEmpty('r2008');

        $validator
            ->allowEmpty('r2009');

        $validator
            ->allowEmpty('r2010');

        $validator
            ->allowEmpty('r2011');

        $validator
            ->allowEmpty('r2012');

        $validator
            ->allowEmpty('r2013');

        $validator
            ->allowEmpty('r2014');

        $validator
            ->allowEmpty('r2015');

        $validator
            ->allowEmpty('per');

        $validator
            ->allowEmpty('pbv');

        $validator
            ->allowEmpty('peg');

        $validator
            ->allowEmpty('valuation');

        $validator
            ->allowEmpty('close');

        $validator
            ->allowEmpty('open');

        $validator
            ->allowEmpty('high');

        $validator
            ->allowEmpty('low');

        $validator
            ->allowEmpty('bid');

        $validator
            ->allowEmpty('offer');

        $validator
            ->allowEmpty('prev_close');

        $validator
            ->allowEmpty('beta');

        $validator
            ->allowEmpty('div_yield');

        $validator
            ->allowEmpty('avg_vol');

        $validator
            ->allowEmpty('shares_outstanding');

        $validator
            ->allowEmpty('free_float');

        $validator
            ->allowEmpty('free_floatp');

        $validator
            ->allowEmpty('net_profit_margin');

        $validator
            ->allowEmpty('eps_growth');

        $validator
            ->allowEmpty('cfps');

        $validator
            ->allowEmpty('bvps');

        $validator
            ->allowEmpty('roa');

        $validator
            ->allowEmpty('roe');

        $validator
            ->allowEmpty('der');

        return $validator;
    }
}
