<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Domain> $domain
 */
?><div class="row">
<div class="column">
    <aside class="side-nav">
        <h4 class="heading"><?= __('Actions') ?></h4>
        <?= $this->Html->link(__('List college'), ['controller' => 'college','action' => 'index'], ['class' => 'side-nav-item']) ?>
              <?= $this->Html->link(__('List division'), ['controller' => 'division','action' => 'index'], ['class' => 'side-nav-item']) ?>
              <?= $this->Html->link(__('List semester'), ['controller' => 'semester','action' => 'index'], ['class' => 'side-nav-item']) ?>
              <?= $this->Html->link(__('List state'), ['controller' => 'state','action' => 'index'], ['class' => 'side-nav-item']) ?>
              <?= $this->Html->link(__('List student'), ['controller' => 'student','action' => 'index'], ['class' => 'side-nav-item']) ?>
              <?= $this->Html->link(__('List subject'), ['controller' => 'subject','action' => 'index'], ['class' => 'side-nav-item']) ?>
              <?= $this->Html->link(__('List faculty'), ['controller' => 'faculty','action' => 'index'], ['class' => 'side-nav-item']) ?>
              <?= $this->Html->link(__('List city'), ['controller' => 'city','action' => 'index'], ['class' => 'side-nav-item']) ?>
              <?= $this->Html->link(__('List branch'), ['controller' => 'branch','action' => 'index'], ['class' => 'side-nav-item']) ?>   
              <?= $this->Html->link(__('List examm'), ['controller' => 'examm','action' => 'index'], ['class' => 'side-nav-item']) ?>            </div>
</aside>
<div class="column-responsive column-80">
<div class="domain index content">
    <?= $this->Html->link(__('New Domain'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Domain') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('college_id') ?></th>
                    <th><?= $this->Paginator->sort('Domain_name') ?></th>
                    <th><?= $this->Paginator->sort('Duration') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($domain as $domain): ?>
                <tr>
                    <td><?= $this->Number->format($domain->id) ?></td>
                    <td><?= h($domain->college->college_name) ?></td>
                    <td><?= h($domain->Domain_name) ?></td>
                    <td><?= $this->Number->format($domain->Duration) ?></td>
                    <td> <?php if($college->status == 1):
                         echo("Active");
                      else:
                        echo("Inactive");
                      endif;
                      ?></td>
                    <td><?= h($domain->created) ?></td>
                    <td><?= h($domain->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $domain->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $domain->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $domain->id], ['confirm' => __('Are you sure you want to delete # {0}?', $domain->id)]) ?>
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
