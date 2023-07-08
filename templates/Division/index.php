<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Division> $division
 */
?><div class="row">
<div class="column">
    <aside class="side-nav">
        <h4 class="heading"><?= __('Actions') ?></h4>
     <?= $this->Html->link(__('List Domain'), ['controller' => 'domain','action' => 'index'], ['class' => 'side-nav-item']) ?>

              <?= $this->Html->link(__('List College'), ['controller' => 'college','action' => 'index'], ['class' => 'side-nav-item']) ?>
              <?= $this->Html->link(__('List semester'), ['controller' => 'semester','action' => 'index'], ['class' => 'side-nav-item']) ?>
              <?= $this->Html->link(__('List state'), ['controller' => 'state','action' => 'index'], ['class' => 'side-nav-item']) ?>
              <?= $this->Html->link(__('List student'), ['controller' => 'student','action' => 'index'], ['class' => 'side-nav-item']) ?>
              <?= $this->Html->link(__('List subject'), ['controller' => 'subject','action' => 'index'], ['class' => 'side-nav-item']) ?>
              <?= $this->Html->link(__('List faculty'), ['controller' => 'faculty','action' => 'index'], ['class' => 'side-nav-item']) ?>
              <?= $this->Html->link(__('List city'), ['controller' => 'city','action' => 'index'], ['class' => 'side-nav-item']) ?>
              <?= $this->Html->link(__('List branch'), ['controller' => 'branch','action' => 'index'], ['class' => 'side-nav-item']) ?> 
              <?= $this->Html->link(__('List examm'), ['controller' => 'examm','action' => 'index'], ['class' => 'side-nav-item']) ?>              </div>
              </aside>
<div class="column-responsive column-80">
<div class="division index content">
    <?= $this->Html->link(__('New Division'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Division') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('faculty_id') ?></th>
                    <th><?= $this->Paginator->sort('division_number') ?></th>
                    <th><?= $this->Paginator->sort('strength') ?></th>
                    <th><?= $this->Paginator->sort('branch_id') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($division as $division): ?>
                <tr>
                    <td><?= $this->Number->format($division->id) ?></td>
                    <td><?= h($division->faculty->faculty_name) ?></td>
                    <td><?= $this->Number->format($division->division_number) ?></td>
                    <td><?= $this->Number->format($division->strength) ?></td>
                    
                    <td><?= h($division->branch->Branch_name) ?></td>
                    
                    <td> <?php if($college->status == 1):
                         echo("Active");
                      else:
                        echo("Inactive");
                      endif;
                      ?></td>
                    <td><?= h($division->created) ?></td>
                    <td><?= h($division->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $division->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $division->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $division->id], ['confirm' => __('Are you sure you want to delete # {0}?', $division->id)]) ?>
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
