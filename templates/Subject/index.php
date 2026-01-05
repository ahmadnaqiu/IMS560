<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Subject> $subject
 */
?>
<div class="subject index content">
    <?= $this->Html->link(__('New Subject'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Subject') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('subject_id') ?></th>
                    <th><?= $this->Paginator->sort('subject_name') ?></th>
                    <th><?= $this->Paginator->sort('lecturer_id') ?></th>
                    <th><?= $this->Paginator->sort('class_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($subject as $subject): ?>
                <tr>
                    <td><?= $this->Number->format($subject->subject_id) ?></td>
                    <td><?= h($subject->subject_name) ?></td>
                    <td><?= $this->Number->format($subject->lecturer_id) ?></td>
                    <td><?= $this->Number->format($subject->class_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $subject->subject_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $subject->subject_id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $subject->subject_id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $subject->subject_id),
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