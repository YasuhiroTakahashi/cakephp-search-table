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
            <?= $this->Html->link(__('Edit Inflow Route'), ['action' => 'edit', $inflowRoute->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Inflow Route'), ['action' => 'delete', $inflowRoute->id], ['confirm' => __('Are you sure you want to delete # {0}?', $inflowRoute->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Inflow Routes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Inflow Route'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="inflowRoutes view content">
            <h3><?= h($inflowRoute->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($inflowRoute->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created By') ?></th>
                    <td><?= h($inflowRoute->created_by) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified By') ?></th>
                    <td><?= h($inflowRoute->modified_by) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($inflowRoute->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($inflowRoute->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($inflowRoute->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
