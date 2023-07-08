<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Semester $semester
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Semester'), ['action' => 'edit', $semester->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Semester'), ['action' => 'delete', $semester->id], ['confirm' => __('Are you sure you want to delete # {0}?', $semester->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Semester'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Semester'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="semester view content">
            <h3><?= h($semester->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($semester->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Branch Id') ?></th>
                    <td><?= $this->Number->format($semester->branch_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sem Number') ?></th>
                    <td><?= $this->Number->format($semester->sem_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('year') ?></th>
                    <td><?= $this->Number->format($semester->year) ?></td>
                </tr>

                <tr>
                    <th><?= __('Fees') ?></th>
                    <td><?= $this->Number->format($semester->fees) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($semester->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($semester->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Faculty') ?></h4>
                <?php if (!empty($semester->faculty)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Subject Id') ?></th>
                            <th><?= __('Faculty Name') ?></th>
                            <th><?= __('Faculty Address') ?></th>
                            <th><?= __('City Id') ?></th>
                            <th><?= __('State Id') ?></th>
                            <th><?= __('Postalcode') ?></th>
                            <th><?= __('Semester Id') ?></th>
                            <th><?= __('Phone Number') ?></th>
                            <th><?= __('Experience') ?></th>
                            <th><?= __('Gender') ?></th>
                            <th><?= __('Qualification') ?></th>
                            <th><?= __('Salary') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($semester->faculty as $faculty) : ?>
                        <tr>
                            <td><?= h($faculty->id) ?></td>
                            <td><?= h($faculty->subject_id) ?></td>
                            <td><?= h($faculty->faculty_name) ?></td>
                            <td><?= h($faculty->faculty_address) ?></td>
                            <td><?= h($faculty->city_id) ?></td>
                            <td><?= h($faculty->state_id) ?></td>
                            <td><?= h($faculty->postalcode) ?></td>
                            <td><?= h($faculty->semester_id) ?></td>
                            <td><?= h($faculty->phone_number) ?></td>
                            <td><?= h($faculty->experience) ?></td>
                            <td><?= h($faculty->gender) ?></td>
                            <td><?= h($faculty->qualification) ?></td>
                            <td><?= h($faculty->salary) ?></td>
                            <td><?= h($faculty->status) ?></td>
                            <td><?= h($faculty->created) ?></td>
                            <td><?= h($faculty->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Faculty', 'action' => 'view', $faculty->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Faculty', 'action' => 'edit', $faculty->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Faculty', 'action' => 'delete', $faculty->id], ['confirm' => __('Are you sure you want to delete # {0}?', $faculty->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Student') ?></h4>
                <?php if (!empty($semester->student)) : ?>
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
                        <?php foreach ($semester->student as $student) : ?>
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
            <div class="related">
                <h4><?= __('Related Subject') ?></h4>
                <?php if (!empty($semester->subject)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Semester Id') ?></th>
                            <th><?= __('Subject Name') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($semester->subject as $subject) : ?>
                        <tr>
                            <td><?= h($subject->id) ?></td>
                            <td><?= h($subject->semester_id) ?></td>
                            <td><?= h($subject->subject_name) ?></td>
                            <td><?= h($subject->created) ?></td>
                            <td><?= h($subject->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Subject', 'action' => 'view', $subject->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Subject', 'action' => 'edit', $subject->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Subject', 'action' => 'delete', $subject->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subject->id)]) ?>
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
