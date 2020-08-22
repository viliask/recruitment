<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Code[]|\Cake\Collection\CollectionInterface $codes
 */
?>
<div class="codes index content">
    <h3><?= __('Codes') ?></h3>
    <?= $this->Html->link(__('New zones from csv'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Codes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?php echo $this->Html->link( "Orders", ['controller' => 'orders', 'action' => 'index']); ?>
        </div>
    </aside>

    <div class="column-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($codes as $code): ?>
                <tr>
                    <td><?= $this->Number->format($code->id) ?></td>
                    <td><?= h($code->name) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $code->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $code->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $code->id], ['confirm' => __('Are you sure you want to delete # {0}?', $code->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
