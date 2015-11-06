<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Emiten'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="emiten form large-9 medium-8 columns content">
    <?= $this->Form->create($emiten) ?>
    <fieldset>
        <legend><?= __('Add Emiten') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('market_cap');
            echo $this->Form->input('stock_price');
            echo $this->Form->input('r2006');
            echo $this->Form->input('r2007');
            echo $this->Form->input('r2008');
            echo $this->Form->input('r2009');
            echo $this->Form->input('r2010');
            echo $this->Form->input('r2011');
            echo $this->Form->input('r2012');
            echo $this->Form->input('r2013');
            echo $this->Form->input('r2014');
            echo $this->Form->input('r2015');
            echo $this->Form->input('per');
            echo $this->Form->input('pbv');
            echo $this->Form->input('peg');
            echo $this->Form->input('valuation');
            echo $this->Form->input('close');
            echo $this->Form->input('open');
            echo $this->Form->input('high');
            echo $this->Form->input('low');
            echo $this->Form->input('bid');
            echo $this->Form->input('offer');
            echo $this->Form->input('prev_close');
            echo $this->Form->input('beta');
            echo $this->Form->input('div_yield');
            echo $this->Form->input('avg_vol');
            echo $this->Form->input('shares_outstanding');
            echo $this->Form->input('free_float');
            echo $this->Form->input('free_floatp');
            echo $this->Form->input('net_profit_margin');
            echo $this->Form->input('eps_growth');
            echo $this->Form->input('cfps');
            echo $this->Form->input('bvps');
            echo $this->Form->input('roa');
            echo $this->Form->input('roe');
            echo $this->Form->input('der');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
