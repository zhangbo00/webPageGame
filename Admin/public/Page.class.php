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
			if (empty($url)) {
				$url = $_SERVER['REQUEST_URI'];
				$url = parse_url($url);
			}
			$query='';
			if (!empty($url['query'])) {
				$query='&'.$url['query'];
			}
			$page_html='';
			$page_html .= "<nav><ul class='pagination'>";
			$page_html .= '<li><a href='.$url['path'].'?page=1><span><span aria-hidden=true>&laquo;</span></span></a></li>';
			for ($i=1; $i <=$this->total_page; $i++) {
				if ($this->num_page==$i) {
					$page_html .= '<li class=active><a href='.$url['path'].'?page='.$i.''.$query.'><span>'.$i.'<span class=sr-only>'.$i.'</span></span></a></li>';
				}
				else {
					$page_html .= '<li><a href='.$url['path'].'?page='.$i.''.$query.'><span>'.$i.'<span class=sr-only>'.$i.'</span></span></a></li>';
				}
			}
			$page_html .= '<li><a href='.$url['path'].'?page='.$this->total_page.''.$query.'><span><span aria-hidden=true>&raquo;</span></span></a></li>';
			$page_html .= '</ul></nav>';
			return $page_html;
		}
	}