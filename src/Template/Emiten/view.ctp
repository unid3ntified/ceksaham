<nav class="large-2 medium-3 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Emiten'), ['action' => 'edit', $emiten->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Emiten'), ['action' => 'delete', $emiten->id], ['confirm' => __('Are you sure you want to delete # {0}?', $emiten->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Emiten'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Emiten'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="emiten view large-9 medium-8 columns content">
    <h3><?= h($emiten->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= h($emiten->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($emiten->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Market Cap') ?></th>
            <td><?= h($emiten->market_cap) ?></td>
        </tr>
        <tr>
            <th><?= __('Stock Price') ?></th>
            <td><?= h($emiten->stock_price) ?></td>
        </tr>
        <tr>
            <th><?= __('R2006') ?></th>
            <td><?= h($emiten->r2006) ?></td>
        </tr>
        <tr>
            <th><?= __('R2007') ?></th>
            <td><?= h($emiten->r2007) ?></td>
        </tr>
        <tr>
            <th><?= __('R2008') ?></th>
            <td><?= h($emiten->r2008) ?></td>
        </tr>
        <tr>
            <th><?= __('R2009') ?></th>
            <td><?= h($emiten->r2009) ?></td>
        </tr>
        <tr>
            <th><?= __('R2010') ?></th>
            <td><?= h($emiten->r2010) ?></td>
        </tr>
        <tr>
            <th><?= __('R2011') ?></th>
            <td><?= h($emiten->r2011) ?></td>
        </tr>
        <tr>
            <th><?= __('R2012') ?></th>
            <td><?= h($emiten->r2012) ?></td>
        </tr>
        <tr>
            <th><?= __('R2013') ?></th>
            <td><?= h($emiten->r2013) ?></td>
        </tr>
        <tr>
            <th><?= __('R2014') ?></th>
            <td><?= h($emiten->r2014) ?></td>
        </tr>
        <tr>
            <th><?= __('R2015') ?></th>
            <td><?= h($emiten->r2015) ?></td>
        </tr>
        <tr>
            <th><?= __('Per') ?></th>
            <td><?= h($emiten->per) ?></td>
        </tr>
        <tr>
            <th><?= __('Pbv') ?></th>
            <td><?= h($emiten->pbv) ?></td>
        </tr>
        <tr>
            <th><?= __('Peg') ?></th>
            <td><?= h($emiten->peg) ?></td>
        </tr>
        <tr>
            <th><?= __('Valuation') ?></th>
            <td><?= h($emiten->valuation) ?></td>
        </tr>
        <tr>
            <th><?= __('Close') ?></th>
            <td><?= h($emiten->close) ?></td>
        </tr>
        <tr>
            <th><?= __('Open') ?></th>
            <td><?= h($emiten->open) ?></td>
        </tr>
        <tr>
            <th><?= __('High') ?></th>
            <td><?= h($emiten->high) ?></td>
        </tr>
        <tr>
            <th><?= __('Low') ?></th>
            <td><?= h($emiten->low) ?></td>
        </tr>
        <tr>
            <th><?= __('Bid') ?></th>
            <td><?= h($emiten->bid) ?></td>
        </tr>
        <tr>
            <th><?= __('Offer') ?></th>
            <td><?= h($emiten->offer) ?></td>
        </tr>
        <tr>
            <th><?= __('Prev Close') ?></th>
            <td><?= h($emiten->prev_close) ?></td>
        </tr>
        <tr>
            <th><?= __('Beta') ?></th>
            <td><?= h($emiten->beta) ?></td>
        </tr>
        <tr>
            <th><?= __('Div Yield') ?></th>
            <td><?= h($emiten->div_yield) ?></td>
        </tr>
        <tr>
            <th><?= __('Avg Vol') ?></th>
            <td><?= h($emiten->avg_vol) ?></td>
        </tr>
        <tr>
            <th><?= __('Shares Outstanding') ?></th>
            <td><?= h($emiten->shares_outstanding) ?></td>
        </tr>
        <tr>
            <th><?= __('Free Float') ?></th>
            <td><?= h($emiten->free_float) ?></td>
        </tr>
        <tr>
            <th><?= __('Free Floatp') ?></th>
            <td><?= h($emiten->free_floatp) ?></td>
        </tr>
        <tr>
            <th><?= __('Net Profit Margin') ?></th>
            <td><?= h($emiten->net_profit_margin) ?></td>
        </tr>
        <tr>
            <th><?= __('Eps Growth') ?></th>
            <td><?= h($emiten->eps_growth) ?></td>
        </tr>
        <tr>
            <th><?= __('Cfps') ?></th>
            <td><?= h($emiten->cfps) ?></td>
        </tr>
        <tr>
            <th><?= __('Bvps') ?></th>
            <td><?= h($emiten->bvps) ?></td>
        </tr>
        <tr>
            <th><?= __('Roa') ?></th>
            <td><?= h($emiten->roa) ?></td>
        </tr>
        <tr>
            <th><?= __('Roe') ?></th>
            <td><?= h($emiten->roe) ?></td>
        </tr>
        <tr>
            <th><?= __('Der') ?></th>
            <td><?= h($emiten->der) ?></td>
        </tr>
    </table>
</div>
