<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Examm $examm
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Examm'), ['action' => 'edit', $examm->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Examm'), ['action' => 'delete', $examm->id], ['confirm' => __('Are you sure you want to delete # {0}?', $examm->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Examm'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Examm'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="examm view content">
            <h3><?= h($examm->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($examm->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('College Id') ?></th>
                    <td><?= $this->Number->format($examm->college_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Student Id') ?></th>
                    <td><?= $this->Number->format($examm->student_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Subject Id') ?></th>
                    <td><?= $this->Number->format($examm->subject_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Semester Id') ?></th>
                    <td><?= $this->Number->format($examm->semester_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Marks') ?></th>
                    <td><?= $this->Number->format($examm->marks) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
