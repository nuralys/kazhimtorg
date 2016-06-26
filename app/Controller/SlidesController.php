<?php

class SlidesController extends AppController{

	public function admin_index(){
		$data = $this->Slide->find('all');
		$title_for_layout = 'Slide';
		$this->set(compact('data', 'title_for_layout'));
	}

	public function admin_add(){
		if($this->request->is('post')){
			$this->Slide->create();
			$data = $this->request->data['Slide'];
			// debug($this->request->data);
			// debug($data);
			// die();

			if($this->Slide->save($data)){
				$this->Session->setFlash('Saved', 'default', array(), 'good');
				// debug($data);
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Error', 'default', array(), 'bad');
			}
		}
		$title_for_layout = 'Add new slide';
		$this->set(compact('title_for_layout'));
	}

	public function admin_edit($id){
		if(is_null($id) || !(int)$id || !$this->Slide->exists($id)){
			throw new NotFoundException('Not found...');
		}
		$data = $this->Slide->findById($id);
		if(!$id){
			throw new NotFoundException('Not found...');
		}
		if($this->request->is(array('post', 'put'))){
			$this->Slide->id = $id;
			$data1 = $this->request->data['Slide'];
			if(!isset($data1['img']['name']) || !$data1['img']['name']){
				unset($data1['img']);
			}
			if($this->Slide->save($data1)){
				$this->Session->setFlash('Saved', 'default', array(), 'good');
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Error', 'default', array(), 'bad');
			}
		}
		//Заполняем данные в форме
		if(!$this->request->data){
			$this->request->data = $data;
			$title_for_layout = 'Editing material';
			$this->set(compact('id', 'data', 'title_for_layout'));
		}
	}

	public function admin_delete($id){
		if (!$this->Slide->exists($id)) {
			throw new NotFounddException('This material is not');
		}
		if($this->Slide->delete($id)){
			$this->Session->setFlash('Deleted', 'default', array(), 'good');
		}else{
			$this->Session->setFlash('Error', 'default', array(), 'bad');
		}
		return $this->redirect($this->referer());
	}
}