<?php
class Kategori extends CI_Model {

	/**  
		* rule of models and function 
		* @author firmanjs
	*/

	public function __construct(){
		$this->load->database();
	}

	public function list()
	{
		return $this->db->get('kategori');
	}

	/**  
		* rule of models function listByParam($where)
		* $where must be array
		* @author firmanjs
	*/
	public function listByParam($where)
	{
		$this->db->where($where);
		return $this->db->get('kategori');
	}

	/**  
		* rule of models function save($body)
		* $body must be array of objects
		* @author firmanjs
	*/
	public function save($body)
	{
		return $this->db->insert('kategori', $body);
	}

	/**  
		* rule of models function update($where, $body)
		* $where must be array
		* $body must be array of objects
		* @author firmanjs
	*/
	public function update($where, $body){
		$this->db->where($where);
		return $this->db->update('kategori', $body);
	}

	/**  
		* rule of models function delete($where)
		* $where must be array
		* @author firmanjs
	*/
	public function delete($where){
		$this->db->where($where); 
		$this->db->delete('kategori');
		return ($this->db->affected_rows()!=1)?false:true;
	}

}

?>
