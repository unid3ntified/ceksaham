<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * FinancialStatement Entity.
 *
 * @property string $emiten_code
 * @property string $period
 * @property string $cash_and_sti
 * @property string $account_receivable
 * @property string $inventory
 * @property string $prepaid_expenses
 * @property string $other_current_assets
 * @property string $total_current_assets
 * @property string $property_plant_equipment
 * @property string $goodwill
 * @property string $intangibles
 * @property string $long_term_investments
 * @property string $note_receivable
 * @property string $other_lta
 * @property string $total_assets
 * @property string $account_payable
 * @property string $accrued_expenses
 * @property string $notes_payable
 * @property string $current_portion_ltd
 * @property string $other_current_liabilities
 * @property string $total_current_liabilities
 * @property string $long_term_debt
 * @property string $total_debt
 * @property string $deferred_income_tax
 * @property string $minority_interest
 * @property string $other_liabilities
 * @property string $total_liabilities
 * @property string $common_stocks
 * @property string $add_paidin_capital
 * @property string $retained_earnings
 * @property string $treasury_stock
 * @property string $unrealized_gain
 * @property string $other_equity
 * @property string $total_equity
 * @property string $common_shares_outstanding
 * @property string $treasury_shares
 * @property string $bvps
 * @property string $net_revenue
 * @property string $cost_of_revenue
 * @property string $gross_profit
 * @property string $selling_general_adm_expenses
 * @property string $depreciation_amortization
 * @property string $unusual_expense
 * @property string $other_operating_expenses
 * @property string $total_operating_expenses
 * @property string $operating_income
 * @property string $other_income_net
 * @property string $before_income_tax
 * @property string $the_income_tax_net
 * @property string $after_income_tax
 * @property string $non_controlling_interest
 * @property string $extraordinary_items
 * @property string $net_income
 * @property string $basic_eps
 * @property string $diluted_eps
 * @property string $dps
 * @property string $pro_forma_income
 * @property string $interest_expense
 * @property string $depreciation
 * @property string $special_items
 * @property string $normalized_income_before_tax
 * @property string $effect_sp_items_on_income_tax
 * @property string $income_tax_exc_sp_items
 * @property string $normalized_income_after_tax
 * @property string $normalized_income
 * @property string $nasic_normalized_eps
 * @property string $diluted_normalized_eps
 * @property string $cash_taxes_paid
 * @property string $cash_interest_paid
 * @property string $changes_in_working_capital
 * @property string $total_cash_operations
 * @property string $capital_expenditures
 * @property string $other_investing_and_cfi
 * @property string $total_cash_investing
 * @property string $financing_cash_flow_items
 * @property string $total_cash_dividends_paid
 * @property string $issuance_of_stock_net
 * @property string $issuance_of_debt_net
 * @property string $total_cash_financing
 * @property string $forex_effects
 * @property string $net_change_in_cash
 * @property string $net_cash_begin_balance_for_future
 * @property string $net_cash_end_balance_for_future
 * @property string $roic
 * @property string $roe
 * @property string $roa
 * @property string $asset_turnover
 * @property string $der
 * @property string $current_ratio
 * @property string $gross_margin
 * @property string $operating_margin
 * @property string $inventory_turnover
 * @property string $days_sales_of_inventory
 * @property string $receivable_days
 * @property string $interest_coverage
 * @property string $free_cash_flow
 * @property string $free_cash_flow_to_equity
 * @property string $dsri
 * @property string $gmi
 * @property string $aqi
 * @property string $sgi
 * @property string $depi
 * @property string $sgai
 * @property string $lvgi
 * @property string $tata
 * @property string $five_variable_version
 * @property string $seven_variable_version
 */
class FinancialStatement extends Entity
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
        'emiten_code' => false,
        'period' => false,
    ];
}
