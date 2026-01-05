<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AuthorizedUser $authorizedUser
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Authorized User'), ['action' => 'edit', $authorizedUser->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Authorized User'), ['action' => 'delete', $authorizedUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $authorizedUser->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Authorized User'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Authorized User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="authorizedUser view content">
            <h3><?= h($authorizedUser->email) ?></h3>
            <table>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($authorizedUser->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($authorizedUser->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= $this->Number->format($authorizedUser->created_at) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>