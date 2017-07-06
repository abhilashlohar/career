<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\CorporateUser $corporateUser
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Corporate User'), ['action' => 'edit', $corporateUser->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Corporate User'), ['action' => 'delete', $corporateUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $corporateUser->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Corporate Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Corporate User'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="corporateUsers view large-9 medium-8 columns content">
    <h3><?= h($corporateUser->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Full Name') ?></th>
            <td><?= h($corporateUser->full_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Corporate Name') ?></th>
            <td><?= h($corporateUser->corporate_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($corporateUser->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($corporateUser->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($corporateUser->id) ?></td>
        </tr>
    </table>
</div>
