<?php
App::uses('AppController', 'Controller');
/**
 * CategoriesRecipes Controller
 *
 * @property CategoriesRecipe $CategoriesRecipe
 */
class CategoriesRecipesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CategoriesRecipe->recursive = 0;
		$this->set('categoriesRecipes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CategoriesRecipe->exists($id)) {
			throw new NotFoundException(__('Invalid categories recipe'));
		}
		$options = array('conditions' => array('CategoriesRecipe.' . $this->CategoriesRecipe->primaryKey => $id));
		$this->set('categoriesRecipe', $this->CategoriesRecipe->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CategoriesRecipe->create();
			if ($this->CategoriesRecipe->save($this->request->data)) {
				$this->Session->setFlash(__('The categories recipe has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The categories recipe could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CategoriesRecipe->exists($id)) {
			throw new NotFoundException(__('Invalid categories recipe'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CategoriesRecipe->save($this->request->data)) {
				$this->Session->setFlash(__('The categories recipe has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The categories recipe could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CategoriesRecipe.' . $this->CategoriesRecipe->primaryKey => $id));
			$this->request->data = $this->CategoriesRecipe->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CategoriesRecipe->id = $id;
		if (!$this->CategoriesRecipe->exists()) {
			throw new NotFoundException(__('Invalid categories recipe'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CategoriesRecipe->delete()) {
			$this->Session->setFlash(__('Categories recipe deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Categories recipe was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->CategoriesRecipe->recursive = 0;
		$this->set('categoriesRecipes', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->CategoriesRecipe->exists($id)) {
			throw new NotFoundException(__('Invalid categories recipe'));
		}
		$options = array('conditions' => array('CategoriesRecipe.' . $this->CategoriesRecipe->primaryKey => $id));
		$this->set('categoriesRecipe', $this->CategoriesRecipe->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->CategoriesRecipe->create();
			if ($this->CategoriesRecipe->save($this->request->data)) {
				$this->Session->setFlash(__('The categories recipe has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The categories recipe could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->CategoriesRecipe->exists($id)) {
			throw new NotFoundException(__('Invalid categories recipe'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CategoriesRecipe->save($this->request->data)) {
				$this->Session->setFlash(__('The categories recipe has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The categories recipe could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CategoriesRecipe.' . $this->CategoriesRecipe->primaryKey => $id));
			$this->request->data = $this->CategoriesRecipe->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->CategoriesRecipe->id = $id;
		if (!$this->CategoriesRecipe->exists()) {
			throw new NotFoundException(__('Invalid categories recipe'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CategoriesRecipe->delete()) {
			$this->Session->setFlash(__('Categories recipe deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Categories recipe was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
