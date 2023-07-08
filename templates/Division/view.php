<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Division $division
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Division'), ['action' => 'edit', $division->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Division'), ['action' => 'delete', $division->id], ['confirm' => __('Are you sure you want to delete # {0}?', $division->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Division'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Division'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="division view content">
            <h3><?= h($division->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($division->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Faculty Id') ?></th>
                    <td><?= $this->Number->format($division->faculty_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Division Number') ?></th>
                    <td><?= $this->Number->format($division->division_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Strength') ?></th>
                    <td><?= $this->Number->format($division->strength) ?></td>
                </tr>
                <tr>
                    <th><?= __('Branch Id') ?></th>
                    <td><?= $this->Number->format($division->branch_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($division->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($division->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $division->status ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Student') ?></h4>
                <?php if (!empty($division->student)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Division Id') ?></th>
                            <th><?= __('Branch Id') ?></th>
                            <th><?= __('Semester Id') ?></th>
                            <th><?= __('Student Name') ?></th>
                            <th><?= __('Student Address') ?></th>
                            <th><?= __('City Id') ?></th>
                            <th><?= __('State Id') ?></th>
                            <th><?= __('Postalcode') ?></th>
                            <th><?= __('Phone Number') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Gender') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($division->student as $student) : ?>
                        <tr>
                            <td><?= h($student->id) ?></td>
                            <td><?= h($student->division_id) ?></td>
                            <td><?= h($student->branch_id) ?></td>
                            <td><?= h($student->semester_id) ?></td>
                            <td><?= h($student->student_name) ?></td>
                            <td><?= h($student->student_address) ?></td>
                            <td><?= h($student->city_id) ?></td>
                            <td><?= h($student->state_id) ?></td>
                            <td><?= h($student->postalcode) ?></td>
                            <td><?= h($student->phone_number) ?></td>
                            <td><?= h($student->email) ?></td>
                            <td><?= h($student->gender) ?></td>
                            <td><?= h($student->status) ?></td>
                            <td><?= h($student->created) ?></td>
                            <td><?= h($student->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Student', 'action' => 'view', $student->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Student', 'action' => 'edit', $student->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Student', 'action' => 'delete', $student->id], ['confirm' => __('Are you sure you want to delete # {0}?', $student->id)]) ?>
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
