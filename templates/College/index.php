<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\College> $college
 */

use Cake\Controller\Controller;

?>
<div class="row">
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
                  <?= $this->Html->link(__('List branch'), ['controller' => 'branch','action' => 'index'], ['class' => 'side-nav-item']) ?>
                  <?= $this->Html->link(__('List examm'), ['controller' => 'examm','action' => 'index'], ['class' => 'side-nav-item']) ?>               </div>
    </aside>
    <div class="column-responsive column-80">
    
   <div class="college index content">
    <?= $this->Html->link(__('New College'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('College') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('college_name') ?></th>
                    <th><?= $this->Paginator->sort('principal_name') ?></th>
                    <th><?= $this->Paginator->sort('phone_number') ?></th>
                    <th><?= $this->Paginator->sort('address') ?></th>
                    <th><?= $this->Paginator->sort('city_id') ?></th>
                    <th><?= $this->Paginator->sort('state_id') ?></th>
                    <th><?= $this->Paginator->sort('postalcode') ?></th>
                    <th><?= $this->Paginator->sort('website') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($college as $college):
                
                     ?>
                <tr>
                    <td><?= $this->Number->format($college->id) ?></td>
                    <td><?= h($college->college_name) ?></td>
                    <td><?= h($college->principal_name) ?></td>
                   
                    <td><?= $this->Number->format($college->phone_number) ?></td>
                   
                    <td><?= h($college->address) ?></td>
                    <td><?= h($college->city->city_name) ?></td>                    
                    <td><?= h($college->state->state_name) ?></td>
                    <td><?= $this->Number->format($college->postalcode) ?></td>
                    <td><?= h($college->website) ?></td>
                    <td>
                
                      <?php if($college->status == 1):
                         echo("Active");
                      else:
                        echo("Inactive");
                      endif;
                      ?> </td>
                    <td><?= h($college->created) ?></td>
                    <td><?= h($college->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $college->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $college->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $college->id], ['confirm' => __('Are you sure you want to delete # {0}?', $college->id)]) ?>
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
    </div></div>
