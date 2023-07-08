<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Domain $domain
 *  @var \App\Model\Entity\College $college
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Domain'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="domain form content">
            <?= $this->Form->create($domain) ?>
            <fieldset>
                <legend><?= __('Add Domain') ?></legend>
                <?php
                    echo $this->Form->control('college_id',['options' => $college]);
                    echo $this->Form->control('Domain_name');
                    echo $this->Form->control('Duration');
                    echo $this->Form->control('status');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>s
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
