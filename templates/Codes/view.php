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
            <?= $this->Html->link(__('Edit Code'), ['action' => 'edit', $code->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Code'), ['action' => 'delete', $code->id], ['confirm' => __('Are you sure you want to delete # {0}?', $code->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Codes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Code'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="codes view content">
            <h3><?= h($code->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($code->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($code->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
