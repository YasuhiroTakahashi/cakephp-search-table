<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ApplicationStatus $applicationStatus
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $applicationStatus->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $applicationStatus->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Application Statuses'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="applicationStatuses form content">
            <?= $this->Form->create($applicationStatus) ?>
            <fieldset>
                <legend><?= __('Edit Application Status') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('created_by');
                    echo $this->Form->control('modified_by');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
