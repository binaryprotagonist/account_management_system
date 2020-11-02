<?php

App::uses('AppController', 'Controller');
App::import('Controller', 'Users');

class ItemsController extends AppController {
	public $components = array('Session', 'Auth');
    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('add');
    }

    public function index() {
        $this->Item->recursive = 0;
        $this->set('items', $this->paginate());
    }

    public function view($id = null) {
        $this->Item->id = $id;
        if (!$this->Item->exists()) {
            throw new NotFoundException(__('Invalid Item'));
        }
        $this->set('Item', $this->Item->findById($id));
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->Item->create();
            if ($this->Item->save($this->request->data)) {
                $this->Flash->success(__('The Item has been saved'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(
                __('The Item could not be saved. Please, try again.')
            );
        }
    }

    public function edit($id = null) {
        $this->Item->id = $id;
        if (!$this->Item->exists()) {
            throw new NotFoundException(__('Invalid Item'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
        	//print_r($this->request->data); die;
            if ($this->Item->save($this->request->data)) {
                $this->Flash->success(__('The Item has been saved'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(
                __('The Item could not be saved. Please, try again.')
            );
        } else {
            $this->request->data = $this->Item->findById($id);
        }
    }

    public function delete($id = null) {

        $this->Item->id = $id;
        if (!$this->Item->exists()) {
            throw new NotFoundException(__('Invalid Item'));
        }
        if ($this->Item->delete()) {
            $this->Flash->success(__('Item deleted'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Flash->error(__('Item was not deleted'));
        return $this->redirect(array('action' => 'index'));
    }

    public function logout() {
        $this->redirect($this->Auth->logout());
    }

}

?>