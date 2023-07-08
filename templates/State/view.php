<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\State $state
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit State'), ['action' => 'edit', $state->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete State'), ['action' => 'delete', $state->id], ['confirm' => __('Are you sure you want to delete # {0}?', $state->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List State'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New State'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="state view content">
            <h3><?= h($state->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('State Name') ?></th>
                    <td><?= h($state->state_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Abbreviation') ?></th>
                    <td><?= h($state->abbreviation) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($state->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('State Code') ?></th>
                    <td><?= $this->Number->format($state->state_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($state->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($state->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related City') ?></h4>
                <?php if (!empty($state->city)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('State Id') ?></th>
                            <th><?= __('City Name') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($state->city as $city) : ?>
                        <tr>
                            <td><?= h($city->id) ?></td>
                            <td><?= h($city->state_id) ?></td>
                            <td><?= h($city->city_name) ?></td>
                            <td><?= h($city->status) ?></td>
                            <td><?= h($city->created) ?></td>
                            <td><?= h($city->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'City', 'action' => 'view', $city->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'City', 'action' => 'edit', $city->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'City', 'action' => 'delete', $city->id], ['confirm' => __('Are you sure you want to delete # {0}?', $city->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related College') ?></h4>
                <?php if (!empty($state->college)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('College Name') ?></th>
                            <th><?= __('Phone Number') ?></th>
                            <th><?= __('Address') ?></th>
                            <th><?= __('City Id') ?></th>
                            <th><?= __('State Id') ?></th>
                            <th><?= __('Postalcode') ?></th>
                            <th><?= __('Website') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($state->college as $college) : ?>
                        <tr>
                            <td><?= h($college->id) ?></td>
                            <td><?= h($college->college_name) ?></td>
                            <td><?= h($college->phone_number) ?></td>
                            <td><?= h($college->address) ?></td>
                            <td><?= h($college->city_id) ?></td>
                            <td><?= h($college->state_id) ?></td>
                            <td><?= h($college->postalcode) ?></td>
                            <td><?= h($college->website) ?></td>
                            <td><?= h($college->status) ?></td>
                            <td><?= h($college->created) ?></td>
                            <td><?= h($college->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'College', 'action' => 'view', $college->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'College', 'action' => 'edit', $college->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'College', 'action' => 'delete', $college->id], ['confirm' => __('Are you sure you want to delete # {0}?', $college->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Faculty') ?></h4>
                <?php if (!empty($state->faculty)) : ?>
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
                        <?php foreach ($state->faculty as $faculty) : ?>
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
                <?php if (!empty($state->student)) : ?>
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
                        <?php foreach ($state->student as $student) : ?>
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
