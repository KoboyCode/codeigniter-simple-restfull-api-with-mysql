<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

	/**  
		* rule of Controller and function 
		* @author firmanjs
	*/

	/**  
		* function response
		* fungsi ini berguna untuk membuat response yang dipakai berulang
		* dengan parameter $code=number, $message=string, $response=array atau array of object
		* @author firmanjs
	*/
	public function response($code, $message, $response){
		$json = array(
			'code'          => $code,
			'message'       => $message,
			'status'       => 'success',
			'response' => $response
		);
		$this->output->set_status_header($code)
					->set_content_type('application/json')
					->set_output(json_encode($json));
	}

	public function index()
	{
		$this->response(200, 'hello', []);
	}

	public function __construct()
	{
	  parent::__construct();
	  $this->load->model('Kategori', 'Kategori');
	  $this->body = json_decode(file_get_contents('php://input'), true);
	}

	public function create()
	{
		$save = $this->Kategori->save(($this->body));
		$this->response(200, 'create data', $save);
	}

	public function get()
	{
		$this->response(200, 'list data', $this->Kategori->list()->result_array());
	}

	public function getByParam($id)
	{
		$param = array('id' => $id);
		$this->response(200, 'get data by param '.$id, $this->Kategori->listByParam($param)->row_array());
	}

	public function update($id)
	{
		$param = array('id' => $id);
		$save = $this->Kategori->update($param, ($this->body));
		$this->response(200, 'update data', $save);
	}

	public function delete($id)
	{
		$param = array('id' => $id);
		$this->response(200, 'delete data by param '.$id, $this->Kategori->delete($param));
	}

}

{
	"nama":"kategori 1",
	"status": 1,
	"jumlah": 2
}
