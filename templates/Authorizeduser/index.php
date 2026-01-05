<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\AuthorizedUser> $authorizedUser
 */
?>
<div class="authorizedUser index content">
    <?= $this->Html->link(__('New Authorized User'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Authorized User') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('created_at') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($authorizedUser as $authorizedUser): ?>
                <tr>
                    <td><?= $this->Number->format($authorizedUser->id) ?></td>
                    <td><?= h($authorizedUser->email) ?></td>
                    <td><?= $this->Number->format($authorizedUser->created_at) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $authorizedUser->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $authorizedUser->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $authorizedUser->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $authorizedUser->id),
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