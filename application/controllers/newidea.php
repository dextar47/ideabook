<?php 

class Newidea extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	
	//
	//
	
	public function index()
	{
		$data = array();
		$this->load->model('newideamodel');
		$data['categories'] = $this->newideamodel->getCategories();
		$data['inserted'] = '';
		$data['error'] = '';
		$this->load->view('newidea',$data);
	}
	public function addIdea(){
		$this->load->model('newideamodel');
		$data = array();
		//print_r($this->input->post());
		if($this->input->post('submit')){
			$formdata['title'] = $this->input->post('newidea_title');
			$formdata['description'] = $this->input->post('newidea_idea');
			$formdata['category_id'] = $this->input->post('newidea_category');
			$formdata['keywords'] = $this->input->post('newidea_keywords');
			$formdata['tags'] = $this->input->post('newidea_tags');
			
			if($this->newideamodel->addIdea($formdata)){
				$data['inserted'] = 'idea inserted';
			} else {
				$data['error'] = 'idea NOT inserted';
			}
			$data['categories'] = $this->newideamodel->getCategories();
			$this->load->view('newidea',$data);
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */