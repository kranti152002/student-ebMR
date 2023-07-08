<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subject $subject
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h1 class="heading"><?= __('  Actions') ?></h1>
           <h4> <?= $this->Html->link(__('  Edit Subject'), ['action' => 'edit', $subject->id], ['class' => 'side-nav-item']) ?>  &#160;
            <?= $this->Form->postLink(__('  Delete Subject'), ['action' => 'delete', $subject->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subject->id), 'class' => 'side-nav-item']) ?>  &#160;
            <?= $this->Html->link(__('  List Subject'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>  &#160;
            <?= $this->Html->link(__('  New Subject'), ['action' => 'add'], ['class' => 'side-nav-item']) ?></h4>
        </div>
    </aside><section class="content">
      <div class="row">
       
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Subject data</h3>
            </div>
            <!-- /.box-header -->
            
    <div class="column-responsive column-80">
        <div class="subject view content">
        
              
            <h3><?= h($subject->id) ?></h3>
            <table class="table table-bordered">
            <div class="row">
        <div class="col-md-6">
          
            <div class="box-header with-border">
                <tr>
                    <th><?= __('Subject Name') ?></th>
                    <td><?= h($subject->subject_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($subject->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Semester Id') ?></th>
                    <td><?= $this->Number->format($subject->semester_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($subject->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($subject->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Faculty') ?></h4>
                <?php if (!empty($subject->faculty)) : ?>
                <div class="table-responsive">
                  <table class="table table-bordered">
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
                        <?php foreach ($subject->faculty as $faculty) : ?>
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
        </div>
    </div>
</div>
