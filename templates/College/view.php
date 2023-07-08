<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\College $college
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit College'), ['action' => 'edit', $college->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete College'), ['action' => 'delete', $college->id], ['confirm' => __('Are you sure you want to delete # {0}?', $college->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List College'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New College'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="college view content">
            <h3><?= h($college->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('College Name') ?></th>
                    <td><?= h($college->college_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Principal Name') ?></th>
                    <td><?= h($college->principal_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Address') ?></th>
                    <td><?= h($college->address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Website') ?></th>
                    <td><?= h($college->website) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($college->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone Number') ?></th>
                    <td><?= $this->Number->format($college->phone_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('City Id') ?></th>
                    <td><?= $this->Number->format($college->city_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('State Id') ?></th>
                    <td><?= $this->Number->format($college->state_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Postalcode') ?></th>
                    <td><?= $this->Number->format($college->postalcode) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($college->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($college->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $college->status ? __('
                    active') : __('inactive'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Domain') ?></h4>
                <?php if (!empty($college->domain)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('College Id') ?></th>
                            <th><?= __('Domain Name') ?></th>
                            <th><?= __('Duration') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($college->domain as $domain) : ?>
                        <tr>
                            <td><?= h($domain->id) ?></td>
                            <td><?= h($domain->college_id) ?></td>
                            <td><?= h($domain->Domain_name) ?></td>
                            <td><?= h($domain->Duration) ?></td>
                            <td><?= h($domain->status) ?></td>
                            <td><?= h($domain->created) ?></td>
                            <td><?= h($domain->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Domain', 'action' => 'view', $domain->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Domain', 'action' => 'edit', $domain->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Domain', 'action' => 'delete', $domain->id], ['confirm' => __('Are you sure you want to delete # {0}?', $domain->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
