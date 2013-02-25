<?php
App::uses('AppController', 'Controller');
/**
 * Moods Controller
 *
 * @property Mood $Mood
 */
class MoodsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Mood->recursive = 0;
		$this->set('moods', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Mood->exists($id)) {
			throw new NotFoundException(__('Invalid mood'));
		}
		$options = array('conditions' => array('Mood.' . $this->Mood->primaryKey => $id));
		$this->set('mood', $this->Mood->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Mood->create();
			if ($this->Mood->save($this->request->data)) {
				$this->Session->setFlash(__('The mood has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mood could not be saved. Please, try again.'));
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
		if (!$this->Mood->exists($id)) {
			throw new NotFoundException(__('Invalid mood'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Mood->save($this->request->data)) {
				$this->Session->setFlash(__('The mood has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mood could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Mood.' . $this->Mood->primaryKey => $id));
			$this->request->data = $this->Mood->find('first', $options);
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
		$this->Mood->id = $id;
		if (!$this->Mood->exists()) {
			throw new NotFoundException(__('Invalid mood'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Mood->delete()) {
			$this->Session->setFlash(__('Mood deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Mood was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Mood->recursive = 0;
		$this->set('moods', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Mood->exists($id)) {
			throw new NotFoundException(__('Invalid mood'));
		}
		$options = array('conditions' => array('Mood.' . $this->Mood->primaryKey => $id));
		$this->set('mood', $this->Mood->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Mood->create();
			if ($this->Mood->save($this->request->data)) {
				$this->Session->setFlash(__('The mood has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mood could not be saved. Please, try again.'));
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
		if (!$this->Mood->exists($id)) {
			throw new NotFoundException(__('Invalid mood'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Mood->save($this->request->data)) {
				$this->Session->setFlash(__('The mood has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mood could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Mood.' . $this->Mood->primaryKey => $id));
			$this->request->data = $this->Mood->find('first', $options);
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
		$this->Mood->id = $id;
		if (!$this->Mood->exists()) {
			throw new NotFoundException(__('Invalid mood'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Mood->delete()) {
			$this->Session->setFlash(__('Mood deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Mood was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
