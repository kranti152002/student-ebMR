<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Faculty> $faculty
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
<div class="faculty index content">
    <?= $this->Html->link(__('New Faculty'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Faculty') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('subject_id') ?></th>
                    <th><?= $this->Paginator->sort('faculty_name') ?></th>
                    <th><?= $this->Paginator->sort('faculty_address') ?></th>
                    <th><?= $this->Paginator->sort('city_id') ?></th>
                    <th><?= $this->Paginator->sort('state_id') ?></th>
                    <th><?= $this->Paginator->sort('postalcode') ?></th>
                    <th><?= $this->Paginator->sort('semester_id') ?></th>
                    <th><?= $this->Paginator->sort('phone_number') ?></th>
                    <th><?= $this->Paginator->sort('experience') ?></th>
                    <th><?= $this->Paginator->sort('gender') ?></th>
                    <th><?= $this->Paginator->sort('qualification') ?></th>
                    <th><?= $this->Paginator->sort('salary') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($faculty as $faculty): ?>
                <tr>
                    <td><?= $this->Number->format($faculty->id) ?></td>
                    <td><?= h($faculty->subject->subject_name) ?></td>
                    <td><?= h($faculty->faculty_name) ?></td>
                    <td><?= h($faculty->faculty_address) ?></td>
                    <td><?= h($faculty->city->city_name) ?></td>
                    <td><?= h($faculty->state->state_name) ?></td>
                    
                    <td><?= $this->Number->format($faculty->postalcode) ?></td>
                    <td><?= $this->Number->format($faculty->semester_id) ?></td>
                    <td><?= $this->Number->format($faculty->phone_number) ?></td>
                    <td><?= $this->Number->format($faculty->experience) ?></td>
                    <td><?= h($faculty->gender) ?></td>
                    <td><?= h($faculty->qualification) ?></td>
                    <td><?= $this->Number->format($faculty->salary) ?></td>
                    <td> <?php if($college->status == 1):
                         echo("Active");
                      else:
                        echo("Inactive");
                      endif;
                      ?></td>
                    <td><?= h($faculty->created) ?></td>
                    <td><?= h($faculty->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $faculty->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $faculty->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $faculty->id], ['confirm' => __('Are you sure you want to delete # {0}?', $faculty->id)]) ?>
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
