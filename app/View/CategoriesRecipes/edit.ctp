<div class="categoriesRecipes form">
<?php echo $this->Form->create('CategoriesRecipe'); ?>
	<fieldset>
		<legend><?php echo __('Edit Categories Recipe'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('categorie_id');
		echo $this->Form->input('recipe_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CategoriesRecipe.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('CategoriesRecipe.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Categories Recipes'), array('action' => 'index')); ?></li>
	</ul>
</div>
