<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Lecturer> $lecturer
 */
?>
<div class="lecturer index content">
    <?= $this->Html->link(__('New Lecturer'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Lecturer') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('lecturer_id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('faculty') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lecturer as $lecturer): ?>
                <tr>
                    <td><?= $this->Number->format($lecturer->lecturer_id) ?></td>
                    <td><?= h($lecturer->name) ?></td>
                    <td><?= h($lecturer->email) ?></td>
                    <td><?= h($lecturer->faculty) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $lecturer->lecturer_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $lecturer->lecturer_id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $lecturer->lecturer_id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $lecturer->lecturer_id),
                            ]
                        ) ?>
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