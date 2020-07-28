<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\InflowRoute[]|\Cake\Collection\CollectionInterface $inflowRoutes
 */
?>
<div class="inflowRoutes index content">
    <?= $this->Html->link(__('New Inflow Route'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Inflow Routes') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('created_by') ?></th>
                    <th><?= $this->Paginator->sort('modified_by') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($inflowRoutes as $inflowRoute): ?>
                <tr>
                    <td><?= $this->Number->format($inflowRoute->id) ?></td>
                    <td><?= h($inflowRoute->name) ?></td>
                    <td><?= h($inflowRoute->created_by) ?></td>
                    <td><?= h($inflowRoute->modified_by) ?></td>
                    <td><?= h($inflowRoute->created) ?></td>
                    <td><?= h($inflowRoute->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $inflowRoute->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $inflowRoute->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $inflowRoute->id], ['confirm' => __('Are you sure you want to delete # {0}?', $inflowRoute->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
