<?php 
class Assetsupdata_model extends CI_Model{
	
	function __construct()
	{
		$this->load->database();
	}
	
	public function view_updata($brand_id,$frombarr)
	{
		$this->db->where('BRAND_ID',$brand_id); 
		$fuid=$this->db->update('AMP_BRAND',$frombarr);
		return $fuid;
	}
	
	public function view_domain_updata($site_id,$frombarr)
	{
		/*+++++++++++++++++++++++++++++
		 * 这个是无形资产中的网站/域名修改
		*
		* */
		
		$this->db->where('SITE_ID',$site_id);
		$fuid=$this->db->update('AMP_SITE',$frombarr);
		return $fuid;
	}
	
	public function view_patent_updata($patent_id,$frombarr)
	{
		/*+++++++++++++++++++++++++++++
		 * 这个是无形资产中的专利修改
		*
		* */
	
		$this->db->where('PATENT_ID',$patent_id);
		$fuid=$this->db->update('AMP_PATENT',$frombarr);
		return $fuid;
	}
	
	public function view_copyright_updata($patent_id,$frombarr)
	{
		/*+++++++++++++++++++++++++++++
		 * 这个是无形资产中的著作权修改
		*
		* */
	
		$this->db->where('COPYRIGHT_ID',$patent_id);
		$fuid=$this->db->update('AMP_COPYRIGHT',$frombarr);
		return $fuid;
	}
	
	
}

?>