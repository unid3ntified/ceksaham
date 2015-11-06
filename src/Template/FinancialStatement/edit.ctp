<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $financialStatement->emiten_code],
                ['confirm' => __('Are you sure you want to delete # {0}?', $financialStatement->emiten_code)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Financial Statement'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="financialStatement form large-9 medium-8 columns content">
    <?= $this->Form->create($financialStatement) ?>
    <fieldset>
        <legend><?= __('Edit Financial Statement') ?></legend>
        <?php
            echo $this->Form->input('cash_and_sti');
            echo $this->Form->input('account_receivable');
            echo $this->Form->input('inventory');
            echo $this->Form->input('prepaid_expenses');
            echo $this->Form->input('other_current_assets');
            echo $this->Form->input('total_current_assets');
            echo $this->Form->input('property_plant_equipment');
            echo $this->Form->input('goodwill');
            echo $this->Form->input('intangibles');
            echo $this->Form->input('long_term_investments');
            echo $this->Form->input('note_receivable');
            echo $this->Form->input('other_lta');
            echo $this->Form->input('total_assets');
            echo $this->Form->input('account_payable');
            echo $this->Form->input('accrued_expenses');
            echo $this->Form->input('notes_payable');
            echo $this->Form->input('current_portion_ltd');
            echo $this->Form->input('other_current_liabilities');
            echo $this->Form->input('total_current_liabilities');
            echo $this->Form->input('long_term_debt');
            echo $this->Form->input('total_debt');
            echo $this->Form->input('deferred_income_tax');
            echo $this->Form->input('minority_interest');
            echo $this->Form->input('other_liabilities');
            echo $this->Form->input('total_liabilities');
            echo $this->Form->input('common_stocks');
            echo $this->Form->input('add_paidin_capital');
            echo $this->Form->input('retained_earnings');
            echo $this->Form->input('treasury_stock');
            echo $this->Form->input('unrealized_gain');
            echo $this->Form->input('other_equity');
            echo $this->Form->input('total_equity');
            echo $this->Form->input('common_shares_outstanding');
            echo $this->Form->input('treasury_shares');
            echo $this->Form->input('bvps');
            echo $this->Form->input('net_revenue');
            echo $this->Form->input('cost_of_revenue');
            echo $this->Form->input('gross_profit');
            echo $this->Form->input('selling_general_adm_expenses');
            echo $this->Form->input('depreciation_amortization');
            echo $this->Form->input('unusual_expense');
            echo $this->Form->input('other_operating_expenses');
            echo $this->Form->input('total_operating_expenses');
            echo $this->Form->input('operating_income');
            echo $this->Form->input('other_income_net');
            echo $this->Form->input('before_income_tax');
            echo $this->Form->input('the_income_tax_net');
            echo $this->Form->input('after_income_tax');
            echo $this->Form->input('non_controlling_interest');
            echo $this->Form->input('extraordinary_items');
            echo $this->Form->input('net_income');
            echo $this->Form->input('basic_eps');
            echo $this->Form->input('diluted_eps');
            echo $this->Form->input('dps');
            echo $this->Form->input('pro_forma_income');
            echo $this->Form->input('interest_expense');
            echo $this->Form->input('depreciation');
            echo $this->Form->input('special_items');
            echo $this->Form->input('normalized_income_before_tax');
            echo $this->Form->input('effect_sp_items_on_income_tax');
            echo $this->Form->input('income_tax_exc_sp_items');
            echo $this->Form->input('normalized_income_after_tax');
            echo $this->Form->input('normalized_income');
            echo $this->Form->input('nasic_normalized_eps');
            echo $this->Form->input('diluted_normalized_eps');
            echo $this->Form->input('cash_taxes_paid');
            echo $this->Form->input('cash_interest_paid');
            echo $this->Form->input('changes_in_working_capital');
            echo $this->Form->input('total_cash_operations');
            echo $this->Form->input('capital_expenditures');
            echo $this->Form->input('other_investing_and_cfi');
            echo $this->Form->input('total_cash_investing');
            echo $this->Form->input('financing_cash_flow_items');
            echo $this->Form->input('total_cash_dividends_paid');
            echo $this->Form->input('issuance_of_stock_net');
            echo $this->Form->input('issuance_of_debt_net');
            echo $this->Form->input('total_cash_financing');
            echo $this->Form->input('forex_effects');
            echo $this->Form->input('net_change_in_cash');
            echo $this->Form->input('net_cash_begin_balance_for_future');
            echo $this->Form->input('net_cash_end_balance_for_future');
            echo $this->Form->input('roic');
            echo $this->Form->input('roe');
            echo $this->Form->input('roa');
            echo $this->Form->input('asset_turnover');
            echo $this->Form->input('der');
            echo $this->Form->input('current_ratio');
            echo $this->Form->input('gross_margin');
            echo $this->Form->input('operating_margin');
            echo $this->Form->input('inventory_turnover');
            echo $this->Form->input('days_sales_of_inventory');
            echo $this->Form->input('receivable_days');
            echo $this->Form->input('interest_coverage');
            echo $this->Form->input('free_cash_flow');
            echo $this->Form->input('free_cash_flow_to_equity');
            echo $this->Form->input('dsri');
            echo $this->Form->input('gmi');
            echo $this->Form->input('aqi');
            echo $this->Form->input('sgi');
            echo $this->Form->input('depi');
            echo $this->Form->input('sgai');
            echo $this->Form->input('lvgi');
            echo $this->Form->input('tata');
            echo $this->Form->input('five_variable_version');
            echo $this->Form->input('seven_variable_version');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
