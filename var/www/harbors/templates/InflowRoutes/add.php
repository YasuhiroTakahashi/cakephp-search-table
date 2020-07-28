<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\InflowRoute $inflowRoute
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Inflow Routes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="inflowRoutes form content">
            <?= $this->Form->create($inflowRoute) ?>
            <fieldset>
                <legend><?= __('Add Inflow Route') ?></legend>
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
