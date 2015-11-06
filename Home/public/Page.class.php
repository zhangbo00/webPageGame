<?php
	require_once('../public/mysql_pdo.php');
	/**
	* 
	*/
	class Page
	{
		private $page_size;
		private $last_page;
		private $total_page;
		private $nums;
		private $num_page=1;
		function __construct($page_size,$nums)
		{
			$this->page_size = $page_size;
			$this->nums = $nums;
			$this->total_page = ceil($this->nums/$this->page_size);
			if (!empty($_GET['page'])) {
				$this->num_page = $_GET['page'];
				if (!is_int($this->num_page)) $this->num_page=(int)$this->num_page;
				if ($this->num_page<1) $this->num_page = 1;
				if ($this->num_page>$this->total_page) $this->num_page = $this->total_page; 
			}
		}
		function show_page_result($select)
		{
			global $pdo;
			$row_num = ($this->num_page-1) * $this->page_size;
			$limit = 'limit '.$row_num.','.$this->page_size;
			$query = "select $select $limit";
			$result = $pdo->query($query);
			if ($result) {
				$res = $result->fetchAll();
				return $res;
			}
			return false;
		}
		function show_page()
		{
			$url = $_SERVER['REQUEST_URI'];
			$url = parse_url($url);
			$page_html='';
			$page_html .= "<nav><ul class='pagination'>";
			for ($i=1; $i <=$this->total_page; $i++) {
				if ($this->total_page == 1) {
					$page_html .= "<li class='disabled'><span><span aria-hidden='true'>&laquo;</span></span></li>";
					$page_html .= "<li class='active'><span>1 <span class='sr-only'>$i</span></span></li>";
					$page_html .= "<li class='disabled'><span><span aria-hidden='true'>&raquo;</span></span></li>";
				} 
				else {
					$page_html .= "<li><span>1 <span class='sr-only'>&laquo;</span></span></li>";
					if ($this->num_page==$i) {
						$page_html .= "<li class='active'><span>1 <span class='sr-only'>$i</span></span></li>";
					}
					else {
						$page_html .= "<li><span>1 <span class='sr-only'>$i</span></span></li>";
					}
					$page_html .= "<li><span>1 <span class='sr-only'>&raquo;</span></span></li>";
				}
			}
			$page_html .= "</ul></nav>";
			return $page_html;
		}
	}