<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Branch $branch
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Branch'), ['action' => 'edit', $branch->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Branch'), ['action' => 'delete', $branch->id], ['confirm' => __('Are you sure you want to delete # {0}?', $branch->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Branch'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Branch'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="branch view content">
            <h3><?= h($branch->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Branch Name') ?></th>
                    <td><?= h($branch->Branch_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($branch->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Domain Id') ?></th>
                    <td><?= $this->Number->format($branch->Domain_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($branch->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($branch->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $branch->status ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Division') ?></h4>
                <?php if (!empty($branch->division)) : ?>
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
                        <?php foreach ($branch->division as $division) : ?>
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
            <div class="related">
                <h4><?= __('Related Semester') ?></h4>
                <?php if (!empty($branch->semester)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Branch Id') ?></th>
                            <th><?= __('Sem Number') ?></th>
                            <th><?= __('Fees') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($branch->semester as $semester) : ?>
                        <tr>
                            <td><?= h($semester->id) ?></td>
                            <td><?= h($semester->branch_id) ?></td>
                            <td><?= h($semester->sem_number) ?></td>
                            <td><?= h($semester->fees) ?></td>
                            <td><?= h($semester->created) ?></td>
                            <td><?= h($semester->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Semester', 'action' => 'view', $semester->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Semester', 'action' => 'edit', $semester->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Semester', 'action' => 'delete', $semester->id], ['confirm' => __('Are you sure you want to delete # {0}?', $semester->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Student') ?></h4>
                <?php if (!empty($branch->student)) : ?>
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
                        <?php foreach ($branch->student as $student) : ?>
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
