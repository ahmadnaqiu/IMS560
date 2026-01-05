<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Clas> $class
 */
?>
<div class="class index content">
    <?= $this->Html->link(__('New Clas'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Class') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('class_id') ?></th>
                    <th><?= $this->Paginator->sort('class_name') ?></th>
                    <th><?= $this->Paginator->sort('lecturer_id') ?></th>
                    <th><?= $this->Paginator->sort('academic_year') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($class as $clas): ?>
                <tr>
                    <td><?= $this->Number->format($clas->class_id) ?></td>
                    <td><?= h($clas->class_name) ?></td>
                    <td><?= $this->Number->format($clas->lecturer_id) ?></td>
                    <td><?= $this->Number->format($clas->academic_year) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $clas->class_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $clas->class_id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $clas->class_id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $clas->class_id),
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