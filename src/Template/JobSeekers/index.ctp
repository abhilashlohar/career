<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\JobSeeker[]|\Cake\Collection\CollectionInterface $jobSeekers
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Job Seeker'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Job Seeker Rows'), ['controller' => 'JobSeekerRows', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Job Seeker Row'), ['controller' => 'JobSeekerRows', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="jobSeekers index large-9 medium-8 columns content">
    <h3><?= __('Job Seekers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mobile_no') ?></th>
                <th scope="col"><?= $this->Paginator->sort('located_city') ?></th>
                <th scope="col"><?= $this->Paginator->sort('skill_set') ?></th>
                <th scope="col"><?= $this->Paginator->sort('job_profile') ?></th>
                <th scope="col"><?= $this->Paginator->sort('profile_document') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_on') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($jobSeekers as $jobSeeker): ?>
            <tr>
                <td><?= $this->Number->format($jobSeeker->id) ?></td>
                <td><?= h($jobSeeker->email) ?></td>
                <td><?= h($jobSeeker->password) ?></td>
                <td><?= h($jobSeeker->name) ?></td>
                <td><?= h($jobSeeker->mobile_no) ?></td>
                <td><?= h($jobSeeker->located_city) ?></td>
                <td><?= h($jobSeeker->skill_set) ?></td>
                <td><?= h($jobSeeker->job_profile) ?></td>
                <td><?= h($jobSeeker->profile_document) ?></td>
                <td><?= h($jobSeeker->created_on) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $jobSeeker->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $jobSeeker->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $jobSeeker->id], ['confirm' => __('Are you sure you want to delete # {0}?', $jobSeeker->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
