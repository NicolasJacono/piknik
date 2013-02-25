<div class="categoriesUsers view">
<h2><?php  echo __('Categories User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($categoriesUser['CategoriesUser']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cat Id'); ?></dt>
		<dd>
			<?php echo h($categoriesUser['CategoriesUser']['cat_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($categoriesUser['CategoriesUser']['user_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Categories User'), array('action' => 'edit', $categoriesUser['CategoriesUser']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Categories User'), array('action' => 'delete', $categoriesUser['CategoriesUser']['id']), null, __('Are you sure you want to delete # %s?', $categoriesUser['CategoriesUser']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categories User'), array('action' => 'add')); ?> </li>
	</ul>
</div>
