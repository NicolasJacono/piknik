<?php
App::uses('AppController', 'Controller');
/**
 * CategoriesUsers Controller
 *
 * @property CategoriesUser $CategoriesUser
 */
class CategoriesUsersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CategoriesUser->recursive = 0;
		$this->set('categoriesUsers', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CategoriesUser->exists($id)) {
			throw new NotFoundException(__('Invalid categories user'));
		}
		$options = array('conditions' => array('CategoriesUser.' . $this->CategoriesUser->primaryKey => $id));
		$this->set('categoriesUser', $this->CategoriesUser->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CategoriesUser->create();
			if ($this->CategoriesUser->save($this->request->data)) {
				$this->Session->setFlash(__('The categories user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The categories user could not be saved. Please, try again.'));
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
		if (!$this->CategoriesUser->exists($id)) {
			throw new NotFoundException(__('Invalid categories user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CategoriesUser->save($this->request->data)) {
				$this->Session->setFlash(__('The categories user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The categories user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CategoriesUser.' . $this->CategoriesUser->primaryKey => $id));
			$this->request->data = $this->CategoriesUser->find('first', $options);
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
		$this->CategoriesUser->id = $id;
		if (!$this->CategoriesUser->exists()) {
			throw new NotFoundException(__('Invalid categories user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CategoriesUser->delete()) {
			$this->Session->setFlash(__('Categories user deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Categories user was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->CategoriesUser->recursive = 0;
		$this->set('categoriesUsers', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->CategoriesUser->exists($id)) {
			throw new NotFoundException(__('Invalid categories user'));
		}
		$options = array('conditions' => array('CategoriesUser.' . $this->CategoriesUser->primaryKey => $id));
		$this->set('categoriesUser', $this->CategoriesUser->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->CategoriesUser->create();
			if ($this->CategoriesUser->save($this->request->data)) {
				$this->Session->setFlash(__('The categories user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The categories user could not be saved. Please, try again.'));
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
		if (!$this->CategoriesUser->exists($id)) {
			throw new NotFoundException(__('Invalid categories user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CategoriesUser->save($this->request->data)) {
				$this->Session->setFlash(__('The categories user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The categories user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CategoriesUser.' . $this->CategoriesUser->primaryKey => $id));
			$this->request->data = $this->CategoriesUser->find('first', $options);
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
		$this->CategoriesUser->id = $id;
		if (!$this->CategoriesUser->exists()) {
			throw new NotFoundException(__('Invalid categories user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CategoriesUser->delete()) {
			$this->Session->setFlash(__('Categories user deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Categories user was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
