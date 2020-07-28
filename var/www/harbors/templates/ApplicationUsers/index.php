<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ApplicationUser[]|\Cake\Collection\CollectionInterface $applicationUsers
 */
?>
<div class="applicationUsers index content">
    <?= $this->Html->link(__('New Application User'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Application Users') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('service_category') ?></th>
                    <th><?= $this->Paginator->sort('accept_terms') ?></th>
                    <th><?= $this->Paginator->sort('address_1') ?></th>
                    <th><?= $this->Paginator->sort('address_2') ?></th>
                    <th><?= $this->Paginator->sort('application_date') ?></th>
                    <th><?= $this->Paginator->sort('application_status') ?></th>
                    <th><?= $this->Paginator->sort('billing_email') ?></th>
                    <th><?= $this->Paginator->sort('billing_name') ?></th>
                    <th><?= $this->Paginator->sort('billing_method') ?></th>
                    <th><?= $this->Paginator->sort('company') ?></th>
                    <th><?= $this->Paginator->sort('contract_status') ?></th>
                    <th><?= $this->Paginator->sort('contract_type') ?></th>
                    <th><?= $this->Paginator->sort('contract_period') ?></th>
                    <th><?= $this->Paginator->sort('contractor_name') ?></th>
                    <th><?= $this->Paginator->sort('contractor_name_kana') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('inflow_route') ?></th>
                    <th><?= $this->Paginator->sort('is_only_invoice_registration') ?></th>
                    <th><?= $this->Paginator->sort('representative') ?></th>
                    <th><?= $this->Paginator->sort('phone_number') ?></th>
                    <th><?= $this->Paginator->sort('tel') ?></th>
                    <th><?= $this->Paginator->sort('postal_code') ?></th>
                    <th><?= $this->Paginator->sort('note') ?></th>
                    <th><?= $this->Paginator->sort('start_date_use') ?></th>
                    <th><?= $this->Paginator->sort('created_by') ?></th>
                    <th><?= $this->Paginator->sort('modified_by') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($applicationUsers as $applicationUser): ?>
                <tr>
                    <td><?= $this->Number->format($applicationUser->id) ?></td>
                    <td><?= h($applicationUser->service_category) ?></td>
                    <td><?= h($applicationUser->accept_terms) ?></td>
                    <td><?= h($applicationUser->address_1) ?></td>
                    <td><?= h($applicationUser->address_2) ?></td>
                    <td><?= h($applicationUser->application_date) ?></td>
                    <td><?= h($applicationUser->application_status) ?></td>
                    <td><?= h($applicationUser->billing_email) ?></td>
                    <td><?= h($applicationUser->billing_name) ?></td>
                    <td><?= h($applicationUser->billing_method) ?></td>
                    <td><?= h($applicationUser->company) ?></td>
                    <td><?= h($applicationUser->contract_status) ?></td>
                    <td><?= h($applicationUser->contract_type) ?></td>
                    <td><?= h($applicationUser->contract_period) ?></td>
                    <td><?= h($applicationUser->contractor_name) ?></td>
                    <td><?= h($applicationUser->contractor_name_kana) ?></td>
                    <td><?= h($applicationUser->email) ?></td>
                    <td><?= h($applicationUser->inflow_route) ?></td>
                    <td><?= h($applicationUser->is_only_invoice_registration) ?></td>
                    <td><?= h($applicationUser->representative) ?></td>
                    <td><?= h($applicationUser->phone_number) ?></td>
                    <td><?= h($applicationUser->tel) ?></td>
                    <td><?= h($applicationUser->postal_code) ?></td>
                    <td><?= h($applicationUser->note) ?></td>
                    <td><?= h($applicationUser->start_date_use) ?></td>
                    <td><?= h($applicationUser->created_by) ?></td>
                    <td><?= h($applicationUser->modified_by) ?></td>
                    <td><?= h($applicationUser->created) ?></td>
                    <td><?= h($applicationUser->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $applicationUser->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $applicationUser->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $applicationUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $applicationUser->id)]) ?>
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
