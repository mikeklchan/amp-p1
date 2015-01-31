<?php 
class Assets_model extends CI_Model{
	
	function __construct()
	{
		$this->load->database();
	}
	
	public function count()
	{
		//获取这个AMP_BRAND表中的总条数
		$count = $this->db->query("SELECT COUNT(*) FROM AMP_BRAND");
		return $count;
	}
	
	public function count_domain()
	{
		//获取这个AMP_SITE表中的总条数
		$count = $this->db->query("SELECT COUNT(*) FROM AMP_SITE");
		return $count;
	}
	
	public function count_patent()
	{
		//获取这个AMP_PATENT表中的总条数
		$count = $this->db->query("SELECT COUNT(*) FROM AMP_PATENT");
		return $count;
	}
	
	public function count_copyright()
	{
		//获取这个AMP_COPYRIGHT表中的总条数
		$count = $this->db->query("SELECT COUNT(*) FROM AMP_COPYRIGHT");
		return $count;
	}
	
	
	
	public function assets_view($page)
	{
		/*+++++++++++++++++++++++
		 * 这个方法是无形资产中的商标列表页的数据库操作
		*+++++++++++++++++++++++
		*/
		$counts=$this->count();//获取数据的总条数
		$countnum=$counts->result_array[0]['COUNT(*)'];
		$prmm=$countnum/10;//获取数据一共有多少页
		$count=ceil($prmm);//把得到的总页数向上取整，得到正确的页数
		
		if (empty($page) || $page>$count) {
			 //当页码数为空或者是大于总页数的时候就取第一页
			$sql   = "SELECT * FROM (SELECT A.*, ROWNUM RN FROM (SELECT * FROM AMP_BRAND) A WHERE ROWNUM <= 50) where RN >= 1 order by AMP_CODE";
		}else {
		    $sql   = "SELECT * FROM (SELECT A.*, ROWNUM RN FROM (SELECT * FROM AMP_BRAND) A WHERE ROWNUM <= $page*50) where RN >= ($page-1)*50+1 order by AMP_CODE";
		}
		$count=$this->db->query($sql);
		$arrlist=$count->result_array();
		return $arrlist;
	}
	
	public function assets_details($brand_id)
	{
		/*+++++++++++++++++++++++
		 * 这个方法是无形资产中的商标详情页的数据库操作
		*+++++++++++++++++++++++
		*/
		$sql='SELECT * FROM AMP_BRAND WHERE BRAND_ID='.$brand_id;
		$count=$this->db->query($sql);
		$arrlist=$count->result_array();
		return $arrlist;
		
	}
	
	
	
	
	
	public function assets_view_domain($page){
		/*+++++++++++++++++++++++
		 * 这个方法是无形资产中的网站/域名列表页的数据库操作
		*+++++++++++++++++++++++
		*/
		
		$counts=$this->count_domain();//获取数据的总条数
		
		$countnum=$counts->result_array[0]['COUNT(*)'];
		$prmm=$countnum/10;//获取数据一共有多少页
		$count=ceil($prmm);//把得到的总页数向上取整，得到正确的页数

		if (empty($page) || $page>$count) {
			//当页码数为空或者是大于总页数的时候就取第一页
			$sql   = "SELECT * FROM (SELECT A.*, ROWNUM RN FROM (SELECT * FROM AMP_SITE) A WHERE ROWNUM <= 50) where RN >= 1 order by AMP_CODE";
		}else {
			$sql   = "SELECT * FROM (SELECT A.*, ROWNUM RN FROM (SELECT * FROM AMP_SITE) A WHERE ROWNUM <= $page*50) where RN >= ($page-1)*50+1 order by AMP_CODE";
		}
		$count=$this->db->query($sql);
		$arrlist=$count->result_array();
		
		return $arrlist;
		
	}
	public function assets_domain($site_id)
	{
		/*+++++++++++++++++++++++
		 * 这个方法是无形资产中的网站/域名详情页的数据库操作
		*+++++++++++++++++++++++
		*/
		$sql='SELECT * FROM AMP_SITE WHERE SITE_ID='.$site_id;
		$count=$this->db->query($sql);
		$arrlist=$count->result_array();
		return $arrlist;
	}
	
	
	
	
	
	
	public function assets_view_patent($page)
	{
		/*+++++++++++++++++++++++
		 * 这个方法是无形资产中的专利列表页的数据库操作
		*+++++++++++++++++++++++
		*/
		
		
		$counts=$this->count_patent();//获取数据的总条数
		$countnum=$counts->result_array[0]['COUNT(*)'];
		$prmm=$countnum/10;//获取数据一共有多少页
		$count=ceil($prmm);//把得到的总页数向上取整，得到正确的页数
		
		
		if (empty($page) || $page>$count) {
			//当页码数为空或者是大于总页数的时候就取第一页
			$sql   = "SELECT * FROM (SELECT A.*, ROWNUM RN FROM (SELECT * FROM AMP_PATENT) A WHERE ROWNUM <= 50) where RN >= 1 order by AMP_CODE";
		}else {
			$sql   = "SELECT * FROM (SELECT A.*, ROWNUM RN FROM (SELECT * FROM AMP_PATENT) A WHERE ROWNUM <= $page*50) where RN >= ($page-1)*50+1 order by AMP_CODE";
		}
		
		$count=$this->db->query($sql);
		$arrlist=$count->result_array();
	
		return $arrlist;
	}
	
	public function assets_paten($patent_id)
	{
		/*+++++++++++++++++++++++
		 * 这个方法是无形资产中的专利详情页的数据库操作
		*+++++++++++++++++++++++
		*/
		$sql='SELECT * FROM AMP_PATENT WHERE PATENT_ID='.$patent_id;
		$count=$this->db->query($sql);
		$arrlist=$count->result_array();
		return $arrlist;
	}
	
	
	
	
	
	
	public function assets_view_copyright($page)
	{
		/*+++++++++++++++++++++++
		 * 这个方法是无形资产中的著作权列表页的数据库操作
		*+++++++++++++++++++++++
		*/
		$counts=$this->count_copyright();//获取数据的总条数
		$countnum=$counts->result_array[0]['COUNT(*)'];
		$prmm=$countnum/10;//获取数据一共有多少页
		$count=ceil($prmm);//把得到的总页数向上取整，得到正确的页数
	
		if (empty($page) || $page>$count) {
			//当页码数为空或者是大于总页数的时候就取第一页
			$sql   = "SELECT * FROM (SELECT A.*, ROWNUM RN FROM (SELECT * FROM AMP_COPYRIGHT) A WHERE ROWNUM <= 50) where RN >= 1 order by AMP_CODE";
		}else {
			$sql   = "SELECT * FROM (SELECT A.*, ROWNUM RN FROM (SELECT * FROM AMP_COPYRIGHT) A WHERE ROWNUM <= $page*50) where RN >= ($page-1)*50+1 order by AMP_CODE";
		}
		$count=$this->db->query($sql);
		$arrlist=$count->result_array();
		return $arrlist;
	}
	
	public function assets_copyright($copyright_id)
	{
		/*+++++++++++++++++++++++
		 * 这个方法是无形资产中的著作权详情页的数据库操作
		*+++++++++++++++++++++++
		*/
		$sql='SELECT * FROM AMP_COPYRIGHT WHERE COPYRIGHT_ID='.$copyright_id;
		$count=$this->db->query($sql);
		$arrlist=$count->result_array();
		return $arrlist;
	}
	
	
}

?>