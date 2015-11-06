<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Financial Statement'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="financialStatement index large-9 medium-8 columns content">
    <h3><?= __('Financial Statement') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('emiten_code') ?></th>
                <th><?= $this->Paginator->sort('period') ?></th>
                <th><?= $this->Paginator->sort('cash_and_sti') ?></th>
                <th><?= $this->Paginator->sort('account_receivable') ?></th>
                <th><?= $this->Paginator->sort('inventory') ?></th>
                <th><?= $this->Paginator->sort('prepaid_expenses') ?></th>
                <th><?= $this->Paginator->sort('other_current_assets') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($financialStatement as $financialStatement): ?>
            <tr>
                <td><?= h($financialStatement->emiten_code) ?></td>
                <td><?= h($financialStatement->period) ?></td>
                <td><?= h($financialStatement->cash_and_sti) ?></td>
                <td><?= h($financialStatement->account_receivable) ?></td>
                <td><?= h($financialStatement->inventory) ?></td>
                <td><?= h($financialStatement->prepaid_expenses) ?></td>
                <td><?= h($financialStatement->other_current_assets) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $financialStatement->emiten_code]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $financialStatement->emiten_code]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $financialStatement->emiten_code], ['confirm' => __('Are you sure you want to delete # {0}?', $financialStatement->emiten_code)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
