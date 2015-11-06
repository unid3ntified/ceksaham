<?php
namespace App\Model\Table;

use App\Model\Entity\FinancialStatement;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FinancialStatement Model
 *
 */
class FinancialStatementTable extends Table
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

        $this->table('financial_statement');
        $this->displayField('emiten_code');
        $this->primaryKey(['emiten_code', 'period']);

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
            ->allowEmpty('emiten_code', 'create');

        $validator
            ->allowEmpty('period', 'create');

        $validator
            ->allowEmpty('cash_and_sti');

        $validator
            ->allowEmpty('account_receivable');

        $validator
            ->allowEmpty('inventory');

        $validator
            ->allowEmpty('prepaid_expenses');

        $validator
            ->allowEmpty('other_current_assets');

        $validator
            ->allowEmpty('total_current_assets');

        $validator
            ->allowEmpty('property_plant_equipment');

        $validator
            ->allowEmpty('goodwill');

        $validator
            ->allowEmpty('intangibles');

        $validator
            ->allowEmpty('long_term_investments');

        $validator
            ->allowEmpty('note_receivable');

        $validator
            ->allowEmpty('other_lta');

        $validator
            ->allowEmpty('total_assets');

        $validator
            ->allowEmpty('account_payable');

        $validator
            ->allowEmpty('accrued_expenses');

        $validator
            ->allowEmpty('notes_payable');

        $validator
            ->allowEmpty('current_portion_ltd');

        $validator
            ->allowEmpty('other_current_liabilities');

        $validator
            ->allowEmpty('total_current_liabilities');

        $validator
            ->allowEmpty('long_term_debt');

        $validator
            ->allowEmpty('total_debt');

        $validator
            ->allowEmpty('deferred_income_tax');

        $validator
            ->allowEmpty('minority_interest');

        $validator
            ->allowEmpty('other_liabilities');

        $validator
            ->allowEmpty('total_liabilities');

        $validator
            ->allowEmpty('common_stocks');

        $validator
            ->allowEmpty('add_paidin_capital');

        $validator
            ->allowEmpty('retained_earnings');

        $validator
            ->allowEmpty('treasury_stock');

        $validator
            ->allowEmpty('unrealized_gain');

        $validator
            ->allowEmpty('other_equity');

        $validator
            ->allowEmpty('total_equity');

        $validator
            ->allowEmpty('common_shares_outstanding');

        $validator
            ->allowEmpty('treasury_shares');

        $validator
            ->allowEmpty('bvps');

        $validator
            ->allowEmpty('net_revenue');

        $validator
            ->allowEmpty('cost_of_revenue');

        $validator
            ->allowEmpty('gross_profit');

        $validator
            ->allowEmpty('selling_general_adm_expenses');

        $validator
            ->allowEmpty('depreciation_amortization');

        $validator
            ->allowEmpty('unusual_expense');

        $validator
            ->allowEmpty('other_operating_expenses');

        $validator
            ->allowEmpty('total_operating_expenses');

        $validator
            ->allowEmpty('operating_income');

        $validator
            ->allowEmpty('other_income_net');

        $validator
            ->allowEmpty('before_income_tax');

        $validator
            ->allowEmpty('the_income_tax_net');

        $validator
            ->allowEmpty('after_income_tax');

        $validator
            ->allowEmpty('non_controlling_interest');

        $validator
            ->allowEmpty('extraordinary_items');

        $validator
            ->allowEmpty('net_income');

        $validator
            ->allowEmpty('basic_eps');

        $validator
            ->allowEmpty('diluted_eps');

        $validator
            ->allowEmpty('dps');

        $validator
            ->allowEmpty('pro_forma_income');

        $validator
            ->allowEmpty('interest_expense');

        $validator
            ->allowEmpty('depreciation');

        $validator
            ->allowEmpty('special_items');

        $validator
            ->allowEmpty('normalized_income_before_tax');

        $validator
            ->allowEmpty('effect_sp_items_on_income_tax');

        $validator
            ->allowEmpty('income_tax_exc_sp_items');

        $validator
            ->allowEmpty('normalized_income_after_tax');

        $validator
            ->allowEmpty('normalized_income');

        $validator
            ->allowEmpty('nasic_normalized_eps');

        $validator
            ->allowEmpty('diluted_normalized_eps');

        $validator
            ->allowEmpty('cash_taxes_paid');

        $validator
            ->allowEmpty('cash_interest_paid');

        $validator
            ->allowEmpty('changes_in_working_capital');

        $validator
            ->allowEmpty('total_cash_operations');

        $validator
            ->allowEmpty('capital_expenditures');

        $validator
            ->allowEmpty('other_investing_and_cfi');

        $validator
            ->allowEmpty('total_cash_investing');

        $validator
            ->allowEmpty('financing_cash_flow_items');

        $validator
            ->allowEmpty('total_cash_dividends_paid');

        $validator
            ->allowEmpty('issuance_of_stock_net');

        $validator
            ->allowEmpty('issuance_of_debt_net');

        $validator
            ->allowEmpty('total_cash_financing');

        $validator
            ->allowEmpty('forex_effects');

        $validator
            ->allowEmpty('net_change_in_cash');

        $validator
            ->allowEmpty('net_cash_begin_balance_for_future');

        $validator
            ->allowEmpty('net_cash_end_balance_for_future');

        $validator
            ->allowEmpty('roic');

        $validator
            ->allowEmpty('roe');

        $validator
            ->allowEmpty('roa');

        $validator
            ->allowEmpty('asset_turnover');

        $validator
            ->allowEmpty('der');

        $validator
            ->allowEmpty('current_ratio');

        $validator
            ->allowEmpty('gross_margin');

        $validator
            ->allowEmpty('operating_margin');

        $validator
            ->allowEmpty('inventory_turnover');

        $validator
            ->allowEmpty('days_sales_of_inventory');

        $validator
            ->allowEmpty('receivable_days');

        $validator
            ->allowEmpty('interest_coverage');

        $validator
            ->allowEmpty('free_cash_flow');

        $validator
            ->allowEmpty('free_cash_flow_to_equity');

        $validator
            ->allowEmpty('dsri');

        $validator
            ->allowEmpty('gmi');

        $validator
            ->allowEmpty('aqi');

        $validator
            ->allowEmpty('sgi');

        $validator
            ->allowEmpty('depi');

        $validator
            ->allowEmpty('sgai');

        $validator
            ->allowEmpty('lvgi');

        $validator
            ->allowEmpty('tata');

        $validator
            ->allowEmpty('five_variable_version');

        $validator
            ->allowEmpty('seven_variable_version');

        return $validator;
    }
}
