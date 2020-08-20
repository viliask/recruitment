<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Code $code
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Codes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="codes form content">
            <?= $this->Form->create() ?>
            <fieldset>
                <legend><?= __('Add Codes') ?></legend>
            </fieldset>
            <?= $this->Form->button(__('Load data from CSV')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
