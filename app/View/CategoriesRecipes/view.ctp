<div class="categoriesRecipes view">
<h2><?php  echo __('Categories Recipe'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($categoriesRecipe['CategoriesRecipe']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Categorie Id'); ?></dt>
		<dd>
			<?php echo h($categoriesRecipe['CategoriesRecipe']['categorie_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Recipe Id'); ?></dt>
		<dd>
			<?php echo h($categoriesRecipe['CategoriesRecipe']['recipe_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Categories Recipe'), array('action' => 'edit', $categoriesRecipe['CategoriesRecipe']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Categories Recipe'), array('action' => 'delete', $categoriesRecipe['CategoriesRecipe']['id']), null, __('Are you sure you want to delete # %s?', $categoriesRecipe['CategoriesRecipe']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories Recipes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categories Recipe'), array('action' => 'add')); ?> </li>
	</ul>
</div>
