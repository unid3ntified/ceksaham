<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Emiten'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="emiten index large-9 medium-8 columns content">
    <h3><?= __('Emiten') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('market_cap') ?></th>
                <th><?= $this->Paginator->sort('stock_price') ?></th>
                <th><?= $this->Paginator->sort('r2006') ?></th>
                <th><?= $this->Paginator->sort('r2007') ?></th>
                <th><?= $this->Paginator->sort('r2008') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($emiten as $emiten): ?>
            <tr>
                <td><?= h($emiten->id) ?></td>
                <td><?= h($emiten->name) ?></td>
                <td><?= h($emiten->market_cap) ?></td>
                <td><?= h($emiten->stock_price) ?></td>
                <td><?= h($emiten->r2006) ?></td>
                <td><?= h($emiten->r2007) ?></td>
                <td><?= h($emiten->r2008) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $emiten->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $emiten->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $emiten->id], ['confirm' => __('Are you sure you want to delete # {0}?', $emiten->id)]) ?>
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
