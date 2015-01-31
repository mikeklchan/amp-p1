<?php
class Piccount_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}
	public function getcount()
	{
		$sql = 'select AMP_PROJECT.PROJECT,AMP_PROJECT.PROJECT_ID,p.num  from AMP_PROJECT left join (select count(1) as num, PROJECT_ID from AMP_PICTURE group by PROJECT_ID) p on AMP_PROJECT.PROJECT_ID=p.PROJECT_ID order by AMP_PROJECT.PROJECT_ID ';
		$query = $this->db->query($sql);
		return $query->result_array;
	}
}