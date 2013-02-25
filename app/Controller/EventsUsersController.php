<?php
App::uses('AppController', 'Controller');
/**
 * EventsUsers Controller
 *
 * @property EventsUser $EventsUser
 */
class EventsUsersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->EventsUser->recursive = 0;
		$this->set('eventsUsers', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->EventsUser->exists($id)) {
			throw new NotFoundException(__('Invalid events user'));
		}
		$options = array('conditions' => array('EventsUser.' . $this->EventsUser->primaryKey => $id));
		$this->set('eventsUser', $this->EventsUser->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EventsUser->create();
			if ($this->EventsUser->save($this->request->data)) {
				$this->Session->setFlash(__('The events user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The events user could not be saved. Please, try again.'));
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
		if (!$this->EventsUser->exists($id)) {
			throw new NotFoundException(__('Invalid events user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->EventsUser->save($this->request->data)) {
				$this->Session->setFlash(__('The events user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The events user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('EventsUser.' . $this->EventsUser->primaryKey => $id));
			$this->request->data = $this->EventsUser->find('first', $options);
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
		$this->EventsUser->id = $id;
		if (!$this->EventsUser->exists()) {
			throw new NotFoundException(__('Invalid events user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->EventsUser->delete()) {
			$this->Session->setFlash(__('Events user deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Events user was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->EventsUser->recursive = 0;
		$this->set('eventsUsers', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->EventsUser->exists($id)) {
			throw new NotFoundException(__('Invalid events user'));
		}
		$options = array('conditions' => array('EventsUser.' . $this->EventsUser->primaryKey => $id));
		$this->set('eventsUser', $this->EventsUser->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->EventsUser->create();
			if ($this->EventsUser->save($this->request->data)) {
				$this->Session->setFlash(__('The events user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The events user could not be saved. Please, try again.'));
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
		if (!$this->EventsUser->exists($id)) {
			throw new NotFoundException(__('Invalid events user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->EventsUser->save($this->request->data)) {
				$this->Session->setFlash(__('The events user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The events user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('EventsUser.' . $this->EventsUser->primaryKey => $id));
			$this->request->data = $this->EventsUser->find('first', $options);
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
		$this->EventsUser->id = $id;
		if (!$this->EventsUser->exists()) {
			throw new NotFoundException(__('Invalid events user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->EventsUser->delete()) {
			$this->Session->setFlash(__('Events user deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Events user was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
