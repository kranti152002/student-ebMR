<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Subject> $subject
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
<div class="subject index content">
    <?= $this->Html->link(__('New Subject'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Subject') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('semester_id') ?></th>
                    <th><?= $this->Paginator->sort('subject_name') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($subject as $subject): ?>
                <tr>
                    <td><?= $this->Number->format($subject->id) ?></td>
                    <td><?= $this->Number->format($subject->semester_id) ?></td>
                    <td><?= h($subject->subject_name) ?></td>
                    <td><?= h($subject->created) ?></td>
                    <td><?= h($subject->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $subject->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $subject->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $subject->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subject->id)]) ?>
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
