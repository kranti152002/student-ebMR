<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Faculty $faculty
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Faculty'), ['action' => 'edit', $faculty->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Faculty'), ['action' => 'delete', $faculty->id], ['confirm' => __('Are you sure you want to delete # {0}?', $faculty->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Faculty'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Faculty'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="faculty view content">
            <h3><?= h($faculty->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Faculty Name') ?></th>
                    <td><?= h($faculty->faculty_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Faculty Address') ?></th>
                    <td><?= h($faculty->faculty_address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Gender') ?></th>
                    <td><?= h($faculty->gender) ?></td>
                </tr>
                <tr>
                    <th><?= __('Qualification') ?></th>
                    <td><?= h($faculty->qualification) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($faculty->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Subject Id') ?></th>
                    <td><?= $this->Number->format($faculty->subject_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('City Id') ?></th>
                    <td><?= $this->Number->format($faculty->city_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('State Id') ?></th>
                    <td><?= $this->Number->format($faculty->state_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Postalcode') ?></th>
                    <td><?= $this->Number->format($faculty->postalcode) ?></td>
                </tr>
                <tr>
                    <th><?= __('Semester Id') ?></th>
                    <td><?= $this->Number->format($faculty->semester_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone Number') ?></th>
                    <td><?= $this->Number->format($faculty->phone_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Experience') ?></th>
                    <td><?= $this->Number->format($faculty->experience) ?></td>
                </tr>
                <tr>
                    <th><?= __('Salary') ?></th>
                    <td><?= $this->Number->format($faculty->salary) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $this->Number->format($faculty->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($faculty->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($faculty->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Division') ?></h4>
                <?php if (!empty($faculty->division)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Faculty Id') ?></th>
                            <th><?= __('Strength') ?></th>
                            <th><?= __('Branch Id') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($faculty->division as $division) : ?>
                        <tr>
                            <td><?= h($division->id) ?></td>
                            <td><?= h($division->faculty_id) ?></td>
                            <td><?= h($division->strength) ?></td>
                            <td><?= h($division->branch_id) ?></td>
                            <td><?= h($division->status) ?></td>
                            <td><?= h($division->created) ?></td>
                            <td><?= h($division->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Division', 'action' => 'view', $division->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Division', 'action' => 'edit', $division->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Division', 'action' => 'delete', $division->id], ['confirm' => __('Are you sure you want to delete # {0}?', $division->id)]) ?>
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
