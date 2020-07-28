<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ApplicationUser $applicationUser
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Application User'), ['action' => 'edit', $applicationUser->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Application User'), ['action' => 'delete', $applicationUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $applicationUser->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Application Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Application User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="applicationUsers view content">
            <h3><?= h($applicationUser->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Service Category') ?></th>
                    <td><?= h($applicationUser->service_category) ?></td>
                </tr>
                <tr>
                    <th><?= __('Accept Terms') ?></th>
                    <td><?= h($applicationUser->accept_terms) ?></td>
                </tr>
                <tr>
                    <th><?= __('Address 1') ?></th>
                    <td><?= h($applicationUser->address_1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Address 2') ?></th>
                    <td><?= h($applicationUser->address_2) ?></td>
                </tr>
                <tr>
                    <th><?= __('Application Status') ?></th>
                    <td><?= h($applicationUser->application_status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Billing Email') ?></th>
                    <td><?= h($applicationUser->billing_email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Billing Name') ?></th>
                    <td><?= h($applicationUser->billing_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Billing Method') ?></th>
                    <td><?= h($applicationUser->billing_method) ?></td>
                </tr>
                <tr>
                    <th><?= __('Company') ?></th>
                    <td><?= h($applicationUser->company) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contract Status') ?></th>
                    <td><?= h($applicationUser->contract_status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contract Type') ?></th>
                    <td><?= h($applicationUser->contract_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contract Period') ?></th>
                    <td><?= h($applicationUser->contract_period) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contractor Name') ?></th>
                    <td><?= h($applicationUser->contractor_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contractor Name Kana') ?></th>
                    <td><?= h($applicationUser->contractor_name_kana) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($applicationUser->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Inflow Route') ?></th>
                    <td><?= h($applicationUser->inflow_route) ?></td>
                </tr>
                <tr>
                    <th><?= __('Representative') ?></th>
                    <td><?= h($applicationUser->representative) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone Number') ?></th>
                    <td><?= h($applicationUser->phone_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tel') ?></th>
                    <td><?= h($applicationUser->tel) ?></td>
                </tr>
                <tr>
                    <th><?= __('Postal Code') ?></th>
                    <td><?= h($applicationUser->postal_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Note') ?></th>
                    <td><?= h($applicationUser->note) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created By') ?></th>
                    <td><?= h($applicationUser->created_by) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified By') ?></th>
                    <td><?= h($applicationUser->modified_by) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($applicationUser->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Application Date') ?></th>
                    <td><?= h($applicationUser->application_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Start Date Use') ?></th>
                    <td><?= h($applicationUser->start_date_use) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($applicationUser->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($applicationUser->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Is Only Invoice Registration') ?></th>
                    <td><?= $applicationUser->is_only_invoice_registration ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
