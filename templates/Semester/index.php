<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Semester> $semester
 */
?><div class="row">
<div class="column">
    <aside class="side-nav">
        <h4 class="heading"><?= __('Actions') ?></h4>
       
              <?= $this->Html->link(__('List division'), ['controller' => 'division','action' => 'index'], ['class' => 'side-nav-item']) ?>
              <?= $this->Html->link(__('List semester'), ['controller' => 'semester','action' => 'index'], ['class' => 'side-nav-item']) ?>
              <?= $this->Html->link(__('List state'), ['controller' => 'state','action' => 'index'], ['class' => 'side-nav-item']) ?>
              <?= $this->Html->link(__('List student'), ['controller' => 'student','action' => 'index'], ['class' => 'side-nav-item']) ?>
              <?= $this->Html->link(__('List subject'), ['controller' => 'subject','action' => 'index'], ['class' => 'side-nav-item']) ?>
              <?= $this->Html->link(__('List faculty'), ['controller' => 'faculty','action' => 'index'], ['class' => 'side-nav-item']) ?>
              <?= $this->Html->link(__('List city'), ['controller' => 'city','action' => 'index'], ['class' => 'side-nav-item']) ?>
              <?= $this->Html->link(__('List branch'), ['controller' => 'branch','action' => 'index'], ['class' => 'side-nav-item']) ?>        </div>
</aside>
<div class="column-responsive column-80">
<div class="semester index content">
    <?= $this->Html->link(__('New Semester'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Semester') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('branch_id') ?></th>
                    <th><?= $this->Paginator->sort('sem_number') ?></th>
                    <th><?= $this->Paginator->sort('year') ?></th>
                    <th><?= $this->Paginator->sort('fees') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($semester as $semester): ?>
                <tr>
                    <td><?= $this->Number->format($semester->id) ?></td>
                    <td><?= h($semester->branch->Branch_name) ?></td>
                    <td><?= $this->Number->format($semester->sem_number) ?></td>
                    <td><?= $this->Number->format($semester->year) ?></td>
                    <td><?= $this->Number->format($semester->fees) ?></td>
                    <td><?= h($semester->created) ?></td>
                    <td><?= h($semester->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $semester->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $semester->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $semester->id], ['confirm' => __('Are you sure you want to delete # {0}?', $semester->id)]) ?>
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
