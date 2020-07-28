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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $applicationUser->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $applicationUser->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Application Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="applicationUsers form content">
            <?= $this->Form->create($applicationUser) ?>
            <fieldset>
                <legend><?= __('Edit Application User') ?></legend>
                <?php
                    echo $this->Form->control('service_category');
                    echo $this->Form->control('accept_terms');
                    echo $this->Form->control('address_1');
                    echo $this->Form->control('address_2');
                    echo $this->Form->control('application_date');
                    echo $this->Form->control('application_status');
                    echo $this->Form->control('billing_email');
                    echo $this->Form->control('billing_name');
                    echo $this->Form->control('billing_method');
                    echo $this->Form->control('company');
                    echo $this->Form->control('contract_status');
                    echo $this->Form->control('contract_type');
                    echo $this->Form->control('contract_period');
                    echo $this->Form->control('contractor_name');
                    echo $this->Form->control('contractor_name_kana');
                    echo $this->Form->control('email');
                    echo $this->Form->control('inflow_route');
                    echo $this->Form->control('is_only_invoice_registration');
                    echo $this->Form->control('representative');
                    echo $this->Form->control('phone_number');
                    echo $this->Form->control('tel');
                    echo $this->Form->control('postal_code');
                    echo $this->Form->control('note');
                    echo $this->Form->control('start_date_use');
                    echo $this->Form->control('created_by');
                    echo $this->Form->control('modified_by');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
