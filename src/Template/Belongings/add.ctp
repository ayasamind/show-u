<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $belonging
 */
?>
<div class="belongings form large-9 medium-8 columns content">
    <?= $this->Form->create($belonging, ['type' => 'file']) ?>
        <label>持ち物名</label>
        <?= $this->Form->control('name', [
            'type' => 'text',
            'label' => false
        ]) ?>
        <label>カテゴリー</label>
        <?= $this->Form->control('category_id', [
            'type' => 'select',
            'options' => $category,
            'empty' => true,
            'label' => false
        ])?>
        <label>詳細</label>
        <?= $this->Form->control('description', [
            'type' => 'textarea',
            'label' => false
        ])?>
        <label>画像</label>
        <?= $this->Form->input('img', [
            'type' => 'file',
            'label' => false
        ]); ?>
        <?= $this->ContentsFile->contentsFileHidden($belonging->contents_file_img, 'contents_file_img'); ?>
        <?php if (!empty($belonging->contents_file_img)): ?>
            <?= $this->ContentsFile->image($belonging->contents_file_img) ?>
            <?= $this->Form->input('delete_img', ['type' => 'checkbox', 'label' => 'delete']) ?>
        <?php endif ?>
    </div>
    <?= $this->Form->button('登録', [
        'class' => 'ui primary button'
    ]) ?>
    <?= $this->Form->end() ?>
</div>
