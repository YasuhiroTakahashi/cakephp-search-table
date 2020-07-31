<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ApplicationUser[]|\Cake\Collection\CollectionInterface $applicationUsers
 * @var $search_form_data
 */
?>
<div class="applicationUsers index content">
    <h3><?= __('申込一覧') ?></h3>
    <?= $this->Form->create(null, ['url' => ['action' => 'search'], 'type' => 'get'])?>
    <div class="row">
        <div class="column">
            <small style="position: absolute; margin: 0 0.5rem; padding: 0 0.5rem; background-color: white;">契約者氏名</small>
            <input style="margin-top: 1rem" name="contractor_name" value="<?= $search_form_data['contractor_name'] ?>" />
        </div>
        <div class="column">
            <small style="position: absolute; margin: 0 0.5rem; padding: 0 0.5rem; background-color: white;">会社名</small>
            <input style="margin-top: 1rem" name="company" value="<?= $search_form_data['company'] ?>" />
        </div>  
    </div>
    <div class="row">
        <div class="column">
            <small style="position: absolute; margin: 0 0.5rem; padding: 0 0.5rem; background-color: white;">申込みステータス</small>
            <small style="position: absolute; margin: 0 0.5rem; padding: 0 0.5rem; background-color: white;">申込みステータス</small>
            <select style="margin-top: 1rem" name="application_status">
                <option value=""></option>
                <?php foreach ($applicationStatuses as $applicationStatus): ?>
                    <?php if($applicationStatus->name === $search_form_data['application_status']): ?>
                        <option value="<?= $applicationStatus->name ?>" selected><?= $applicationStatus->name ?></option>
                    <?php else: ?>
                        <option value="<?= $applicationStatus->name ?>"><?= $applicationStatus->name ?></option>
                    <?php endif; ?>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="column">
            <small style="position: absolute; margin: 0 0.5rem; padding: 0 0.5rem; background-color: white;">サービスカテゴリ</small>
            <select style="margin-top: 1rem" name="service_category">
            　　<option value=""></option>
            <?php foreach ($serviceCategories as $serviceCategory): ?>
                    <?php if($serviceCategory->name === $search_form_data['service_category']): ?>
                        <option value="<?= $serviceCategory->name ?>" selected><?= $serviceCategory->name ?></option>
                    <?php else: ?>
                        <option value="<?= $serviceCategory->name ?>"><?= $serviceCategory->name ?></option>
                    <?php endif; ?>
                <?php endforeach; ?>
            </select>
        </div>  
    </div>
    <div class="row">
        <div class="column">
            <small style="position: absolute; margin: 0 0.5rem; padding: 0 0.5rem; background-color: white;">流入経路</small>
            <select style="margin-top: 1rem" name="inflow_route">
            　　<option value=""></option>
            <?php foreach ($inflowRoutes as $inflowRoute): ?>
                    <?php if($inflowRoute->name === $search_form_data['inflow_route']): ?>
                        <option value="<?= $inflowRoute->name ?>" selected><?= $inflowRoute->name ?></option>
                    <?php else: ?>
                        <option value="<?= $inflowRoute->name ?>"><?= $inflowRoute->name ?></option>
                    <?php endif; ?>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="column">
            <small style="position: absolute; margin: 0 0.5rem; padding: 0 0.5rem; background-color: white;">申込日</small>
            <input style="margin-top: 1rem" type="date" name="application_date" value="<?= $search_form_data['application_date'] ?>" />
        </div> 
        <div class="column">
            <small style="position: absolute; margin: 0 0.5rem; padding: 0 0.5rem; background-color: white;">利用開始日</small>
            <input style="margin-top: 1rem" type="date" name="start_date_use" value="<?= $search_form_data['start_date_use'] ?>"/>
        </div> 
    </div>
    <?= $this->Form->button(__('Search')) ?>
    <?= $this->Form->end() ?>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th style="background-color: #bdbdbd;">契約者氏名</th>
                    <th style="background-color: #bdbdbd;">会社名</th>
                    <th style="background-color: #bdbdbd;">申込みステータス</th>
                    <th style="background-color: #bdbdbd;">サービスカテゴリ</th>
                    <th style="background-color: #bdbdbd;">流入経路</th>
                    <th style="background-color: #bdbdbd;">申込日</th>
                    <th style="background-color: #bdbdbd;">利用開始日</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($applicationUsers as $applicationUser): ?>
                <tr>
                    <td><?= h($applicationUser->contractor_name) ?></td>
                    <td><?= h($applicationUser->company) ?></td>
                    <td><?= h($applicationUser->application_status) ?></td>
                    <td><?= h($applicationUser->service_category) ?></td>
                    <td><?= h($applicationUser->inflow_route) ?></td>
                    <td><?= h($applicationUser->application_date) ?></td>
                    <td><?= h($applicationUser->start_date_use) ?></td>
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
