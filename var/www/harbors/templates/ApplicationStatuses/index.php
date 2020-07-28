<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ApplicationStatus[]|\Cake\Collection\CollectionInterface $applicationStatuses
 */
?>
<div class="applicationStatuses index content">
    <?= $this->Html->link(__('New Application Status'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Application Statuses') ?></h3>
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
                <?php foreach ($applicationStatuses as $applicationStatus): ?>
                <tr>
                    <td><?= $this->Number->format($applicationStatus->id) ?></td>
                    <td><?= h($applicationStatus->name) ?></td>
                    <td><?= h($applicationStatus->created_by) ?></td>
                    <td><?= h($applicationStatus->modified_by) ?></td>
                    <td><?= h($applicationStatus->created) ?></td>
                    <td><?= h($applicationStatus->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $applicationStatus->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $applicationStatus->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $applicationStatus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $applicationStatus->id)]) ?>
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
