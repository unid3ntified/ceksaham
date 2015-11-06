<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Financial Statement'), ['action' => 'edit', $financialStatement->emiten_code]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Financial Statement'), ['action' => 'delete', $financialStatement->emiten_code], ['confirm' => __('Are you sure you want to delete # {0}?', $financialStatement->emiten_code)]) ?> </li>
        <li><?= $this->Html->link(__('List Financial Statement'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Financial Statement'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="financialStatement view large-9 medium-8 columns content">
    <h3><?= h($financialStatement->emiten_code) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Emiten Code') ?></th>
            <td><?= h($financialStatement->emiten_code) ?></td>
        </tr>
        <tr>
            <th><?= __('Period') ?></th>
            <td><?= h($financialStatement->period) ?></td>
        </tr>
        <tr>
            <th><?= __('Cash And Sti') ?></th>
            <td><?= h($financialStatement->cash_and_sti) ?></td>
        </tr>
        <tr>
            <th><?= __('Account Receivable') ?></th>
            <td><?= h($financialStatement->account_receivable) ?></td>
        </tr>
        <tr>
            <th><?= __('Inventory') ?></th>
            <td><?= h($financialStatement->inventory) ?></td>
        </tr>
        <tr>
            <th><?= __('Prepaid Expenses') ?></th>
            <td><?= h($financialStatement->prepaid_expenses) ?></td>
        </tr>
        <tr>
            <th><?= __('Other Current Assets') ?></th>
            <td><?= h($financialStatement->other_current_assets) ?></td>
        </tr>
        <tr>
            <th><?= __('Total Current Assets') ?></th>
            <td><?= h($financialStatement->total_current_assets) ?></td>
        </tr>
        <tr>
            <th><?= __('Property Plant Equipment') ?></th>
            <td><?= h($financialStatement->property_plant_equipment) ?></td>
        </tr>
        <tr>
            <th><?= __('Goodwill') ?></th>
            <td><?= h($financialStatement->goodwill) ?></td>
        </tr>
        <tr>
            <th><?= __('Intangibles') ?></th>
            <td><?= h($financialStatement->intangibles) ?></td>
        </tr>
        <tr>
            <th><?= __('Long Term Investments') ?></th>
            <td><?= h($financialStatement->long_term_investments) ?></td>
        </tr>
        <tr>
            <th><?= __('Note Receivable') ?></th>
            <td><?= h($financialStatement->note_receivable) ?></td>
        </tr>
        <tr>
            <th><?= __('Other Lta') ?></th>
            <td><?= h($financialStatement->other_lta) ?></td>
        </tr>
        <tr>
            <th><?= __('Total Assets') ?></th>
            <td><?= h($financialStatement->total_assets) ?></td>
        </tr>
        <tr>
            <th><?= __('Account Payable') ?></th>
            <td><?= h($financialStatement->account_payable) ?></td>
        </tr>
        <tr>
            <th><?= __('Accrued Expenses') ?></th>
            <td><?= h($financialStatement->accrued_expenses) ?></td>
        </tr>
        <tr>
            <th><?= __('Notes Payable') ?></th>
            <td><?= h($financialStatement->notes_payable) ?></td>
        </tr>
        <tr>
            <th><?= __('Current Portion Ltd') ?></th>
            <td><?= h($financialStatement->current_portion_ltd) ?></td>
        </tr>
        <tr>
            <th><?= __('Other Current Liabilities') ?></th>
            <td><?= h($financialStatement->other_current_liabilities) ?></td>
        </tr>
        <tr>
            <th><?= __('Total Current Liabilities') ?></th>
            <td><?= h($financialStatement->total_current_liabilities) ?></td>
        </tr>
        <tr>
            <th><?= __('Long Term Debt') ?></th>
            <td><?= h($financialStatement->long_term_debt) ?></td>
        </tr>
        <tr>
            <th><?= __('Total Debt') ?></th>
            <td><?= h($financialStatement->total_debt) ?></td>
        </tr>
        <tr>
            <th><?= __('Deferred Income Tax') ?></th>
            <td><?= h($financialStatement->deferred_income_tax) ?></td>
        </tr>
        <tr>
            <th><?= __('Minority Interest') ?></th>
            <td><?= h($financialStatement->minority_interest) ?></td>
        </tr>
        <tr>
            <th><?= __('Other Liabilities') ?></th>
            <td><?= h($financialStatement->other_liabilities) ?></td>
        </tr>
        <tr>
            <th><?= __('Total Liabilities') ?></th>
            <td><?= h($financialStatement->total_liabilities) ?></td>
        </tr>
        <tr>
            <th><?= __('Common Stocks') ?></th>
            <td><?= h($financialStatement->common_stocks) ?></td>
        </tr>
        <tr>
            <th><?= __('Add Paidin Capital') ?></th>
            <td><?= h($financialStatement->add_paidin_capital) ?></td>
        </tr>
        <tr>
            <th><?= __('Retained Earnings') ?></th>
            <td><?= h($financialStatement->retained_earnings) ?></td>
        </tr>
        <tr>
            <th><?= __('Treasury Stock') ?></th>
            <td><?= h($financialStatement->treasury_stock) ?></td>
        </tr>
        <tr>
            <th><?= __('Unrealized Gain') ?></th>
            <td><?= h($financialStatement->unrealized_gain) ?></td>
        </tr>
        <tr>
            <th><?= __('Other Equity') ?></th>
            <td><?= h($financialStatement->other_equity) ?></td>
        </tr>
        <tr>
            <th><?= __('Total Equity') ?></th>
            <td><?= h($financialStatement->total_equity) ?></td>
        </tr>
        <tr>
            <th><?= __('Common Shares Outstanding') ?></th>
            <td><?= h($financialStatement->common_shares_outstanding) ?></td>
        </tr>
        <tr>
            <th><?= __('Treasury Shares') ?></th>
            <td><?= h($financialStatement->treasury_shares) ?></td>
        </tr>
        <tr>
            <th><?= __('Bvps') ?></th>
            <td><?= h($financialStatement->bvps) ?></td>
        </tr>
        <tr>
            <th><?= __('Net Revenue') ?></th>
            <td><?= h($financialStatement->net_revenue) ?></td>
        </tr>
        <tr>
            <th><?= __('Cost Of Revenue') ?></th>
            <td><?= h($financialStatement->cost_of_revenue) ?></td>
        </tr>
        <tr>
            <th><?= __('Gross Profit') ?></th>
            <td><?= h($financialStatement->gross_profit) ?></td>
        </tr>
        <tr>
            <th><?= __('Selling General Adm Expenses') ?></th>
            <td><?= h($financialStatement->selling_general_adm_expenses) ?></td>
        </tr>
        <tr>
            <th><?= __('Depreciation Amortization') ?></th>
            <td><?= h($financialStatement->depreciation_amortization) ?></td>
        </tr>
        <tr>
            <th><?= __('Unusual Expense') ?></th>
            <td><?= h($financialStatement->unusual_expense) ?></td>
        </tr>
        <tr>
            <th><?= __('Other Operating Expenses') ?></th>
            <td><?= h($financialStatement->other_operating_expenses) ?></td>
        </tr>
        <tr>
            <th><?= __('Total Operating Expenses') ?></th>
            <td><?= h($financialStatement->total_operating_expenses) ?></td>
        </tr>
        <tr>
            <th><?= __('Operating Income') ?></th>
            <td><?= h($financialStatement->operating_income) ?></td>
        </tr>
        <tr>
            <th><?= __('Other Income Net') ?></th>
            <td><?= h($financialStatement->other_income_net) ?></td>
        </tr>
        <tr>
            <th><?= __('Before Income Tax') ?></th>
            <td><?= h($financialStatement->before_income_tax) ?></td>
        </tr>
        <tr>
            <th><?= __('The Income Tax Net') ?></th>
            <td><?= h($financialStatement->the_income_tax_net) ?></td>
        </tr>
        <tr>
            <th><?= __('After Income Tax') ?></th>
            <td><?= h($financialStatement->after_income_tax) ?></td>
        </tr>
        <tr>
            <th><?= __('Non Controlling Interest') ?></th>
            <td><?= h($financialStatement->non_controlling_interest) ?></td>
        </tr>
        <tr>
            <th><?= __('Extraordinary Items') ?></th>
            <td><?= h($financialStatement->extraordinary_items) ?></td>
        </tr>
        <tr>
            <th><?= __('Net Income') ?></th>
            <td><?= h($financialStatement->net_income) ?></td>
        </tr>
        <tr>
            <th><?= __('Basic Eps') ?></th>
            <td><?= h($financialStatement->basic_eps) ?></td>
        </tr>
        <tr>
            <th><?= __('Diluted Eps') ?></th>
            <td><?= h($financialStatement->diluted_eps) ?></td>
        </tr>
        <tr>
            <th><?= __('Dps') ?></th>
            <td><?= h($financialStatement->dps) ?></td>
        </tr>
        <tr>
            <th><?= __('Pro Forma Income') ?></th>
            <td><?= h($financialStatement->pro_forma_income) ?></td>
        </tr>
        <tr>
            <th><?= __('Interest Expense') ?></th>
            <td><?= h($financialStatement->interest_expense) ?></td>
        </tr>
        <tr>
            <th><?= __('Depreciation') ?></th>
            <td><?= h($financialStatement->depreciation) ?></td>
        </tr>
        <tr>
            <th><?= __('Special Items') ?></th>
            <td><?= h($financialStatement->special_items) ?></td>
        </tr>
        <tr>
            <th><?= __('Normalized Income Before Tax') ?></th>
            <td><?= h($financialStatement->normalized_income_before_tax) ?></td>
        </tr>
        <tr>
            <th><?= __('Effect Sp Items On Income Tax') ?></th>
            <td><?= h($financialStatement->effect_sp_items_on_income_tax) ?></td>
        </tr>
        <tr>
            <th><?= __('Income Tax Exc Sp Items') ?></th>
            <td><?= h($financialStatement->income_tax_exc_sp_items) ?></td>
        </tr>
        <tr>
            <th><?= __('Normalized Income After Tax') ?></th>
            <td><?= h($financialStatement->normalized_income_after_tax) ?></td>
        </tr>
        <tr>
            <th><?= __('Normalized Income') ?></th>
            <td><?= h($financialStatement->normalized_income) ?></td>
        </tr>
        <tr>
            <th><?= __('Nasic Normalized Eps') ?></th>
            <td><?= h($financialStatement->nasic_normalized_eps) ?></td>
        </tr>
        <tr>
            <th><?= __('Diluted Normalized Eps') ?></th>
            <td><?= h($financialStatement->diluted_normalized_eps) ?></td>
        </tr>
        <tr>
            <th><?= __('Cash Taxes Paid') ?></th>
            <td><?= h($financialStatement->cash_taxes_paid) ?></td>
        </tr>
        <tr>
            <th><?= __('Cash Interest Paid') ?></th>
            <td><?= h($financialStatement->cash_interest_paid) ?></td>
        </tr>
        <tr>
            <th><?= __('Changes In Working Capital') ?></th>
            <td><?= h($financialStatement->changes_in_working_capital) ?></td>
        </tr>
        <tr>
            <th><?= __('Total Cash Operations') ?></th>
            <td><?= h($financialStatement->total_cash_operations) ?></td>
        </tr>
        <tr>
            <th><?= __('Capital Expenditures') ?></th>
            <td><?= h($financialStatement->capital_expenditures) ?></td>
        </tr>
        <tr>
            <th><?= __('Other Investing And Cfi') ?></th>
            <td><?= h($financialStatement->other_investing_and_cfi) ?></td>
        </tr>
        <tr>
            <th><?= __('Total Cash Investing') ?></th>
            <td><?= h($financialStatement->total_cash_investing) ?></td>
        </tr>
        <tr>
            <th><?= __('Financing Cash Flow Items') ?></th>
            <td><?= h($financialStatement->financing_cash_flow_items) ?></td>
        </tr>
        <tr>
            <th><?= __('Total Cash Dividends Paid') ?></th>
            <td><?= h($financialStatement->total_cash_dividends_paid) ?></td>
        </tr>
        <tr>
            <th><?= __('Issuance Of Stock Net') ?></th>
            <td><?= h($financialStatement->issuance_of_stock_net) ?></td>
        </tr>
        <tr>
            <th><?= __('Issuance Of Debt Net') ?></th>
            <td><?= h($financialStatement->issuance_of_debt_net) ?></td>
        </tr>
        <tr>
            <th><?= __('Total Cash Financing') ?></th>
            <td><?= h($financialStatement->total_cash_financing) ?></td>
        </tr>
        <tr>
            <th><?= __('Forex Effects') ?></th>
            <td><?= h($financialStatement->forex_effects) ?></td>
        </tr>
        <tr>
            <th><?= __('Net Change In Cash') ?></th>
            <td><?= h($financialStatement->net_change_in_cash) ?></td>
        </tr>
        <tr>
            <th><?= __('Net Cash Begin Balance For Future') ?></th>
            <td><?= h($financialStatement->net_cash_begin_balance_for_future) ?></td>
        </tr>
        <tr>
            <th><?= __('Net Cash End Balance For Future') ?></th>
            <td><?= h($financialStatement->net_cash_end_balance_for_future) ?></td>
        </tr>
        <tr>
            <th><?= __('Roic') ?></th>
            <td><?= h($financialStatement->roic) ?></td>
        </tr>
        <tr>
            <th><?= __('Roe') ?></th>
            <td><?= h($financialStatement->roe) ?></td>
        </tr>
        <tr>
            <th><?= __('Roa') ?></th>
            <td><?= h($financialStatement->roa) ?></td>
        </tr>
        <tr>
            <th><?= __('Asset Turnover') ?></th>
            <td><?= h($financialStatement->asset_turnover) ?></td>
        </tr>
        <tr>
            <th><?= __('Der') ?></th>
            <td><?= h($financialStatement->der) ?></td>
        </tr>
        <tr>
            <th><?= __('Current Ratio') ?></th>
            <td><?= h($financialStatement->current_ratio) ?></td>
        </tr>
        <tr>
            <th><?= __('Gross Margin') ?></th>
            <td><?= h($financialStatement->gross_margin) ?></td>
        </tr>
        <tr>
            <th><?= __('Operating Margin') ?></th>
            <td><?= h($financialStatement->operating_margin) ?></td>
        </tr>
        <tr>
            <th><?= __('Inventory Turnover') ?></th>
            <td><?= h($financialStatement->inventory_turnover) ?></td>
        </tr>
        <tr>
            <th><?= __('Days Sales Of Inventory') ?></th>
            <td><?= h($financialStatement->days_sales_of_inventory) ?></td>
        </tr>
        <tr>
            <th><?= __('Receivable Days') ?></th>
            <td><?= h($financialStatement->receivable_days) ?></td>
        </tr>
        <tr>
            <th><?= __('Interest Coverage') ?></th>
            <td><?= h($financialStatement->interest_coverage) ?></td>
        </tr>
        <tr>
            <th><?= __('Free Cash Flow') ?></th>
            <td><?= h($financialStatement->free_cash_flow) ?></td>
        </tr>
        <tr>
            <th><?= __('Free Cash Flow To Equity') ?></th>
            <td><?= h($financialStatement->free_cash_flow_to_equity) ?></td>
        </tr>
        <tr>
            <th><?= __('Dsri') ?></th>
            <td><?= h($financialStatement->dsri) ?></td>
        </tr>
        <tr>
            <th><?= __('Gmi') ?></th>
            <td><?= h($financialStatement->gmi) ?></td>
        </tr>
        <tr>
            <th><?= __('Aqi') ?></th>
            <td><?= h($financialStatement->aqi) ?></td>
        </tr>
        <tr>
            <th><?= __('Sgi') ?></th>
            <td><?= h($financialStatement->sgi) ?></td>
        </tr>
        <tr>
            <th><?= __('Depi') ?></th>
            <td><?= h($financialStatement->depi) ?></td>
        </tr>
        <tr>
            <th><?= __('Sgai') ?></th>
            <td><?= h($financialStatement->sgai) ?></td>
        </tr>
        <tr>
            <th><?= __('Lvgi') ?></th>
            <td><?= h($financialStatement->lvgi) ?></td>
        </tr>
        <tr>
            <th><?= __('Tata') ?></th>
            <td><?= h($financialStatement->tata) ?></td>
        </tr>
        <tr>
            <th><?= __('Five Variable Version') ?></th>
            <td><?= h($financialStatement->five_variable_version) ?></td>
        </tr>
        <tr>
            <th><?= __('Seven Variable Version') ?></th>
            <td><?= h($financialStatement->seven_variable_version) ?></td>
        </tr>
    </table>
</div>
