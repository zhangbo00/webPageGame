<?php
	class database
	{
		private $hostname;
		private $user;
		private $pass;
		private $dbname;
		private $linkflg; 
		private $charset;

		function __construct($dbconfig)
		{
			$this->hostname = $dbconfig['hostname'];
			$this->user = $dbconfig['user'];
			$this->pass = $dbconfig['pass'];
			$this->dbname = $dbconfig['dbname'];
			$this->linkflg = $dbconfig['linkflg'];
			$this->charset = $dbconfig['charset'];
			$this->linkflag = mysql_connect($this->hostname, $this->user, $this->dbname);
			mysql_select_db($this->dbname,$this->linkflag) or die($this->error());
			mysql_query('set name '.$this->charset);
		}
		function __set($property_name, $value)
		{
			return $this->$property_name = $value;
		}
		
		function __get($property_name)
		{
			if (isset($this->$property_name)) {
				return $this->$property_name;
			}
			else return null;
		}

		function __call($value='')
		{
			echo "<br><font color=#ff0000>你所调用的方法$function_name不存在</font><br>\n";
		}

		function query($sql)
		{
			$res = mysql_query($sql) or die($this->error());
			return $res;
		}

		function fetch_array($res)
		{
			return mysql_fetch_array($res);
		}

		function fetch_object($res)
		{
			return mysql_fetch_object();
		}

		function fetch_obj_arr($sql)
		{
			$obj_arr = array();
			$res = $this->query($sql);
			while ($row = mysql_fetch_object($res)) {
				$obj_arr[] = $row;
			}
			return $obj_arr;
		}

		function error()
		{
			if($this->linkflag)
			{
				return mysql_error($this->linkflag);
			}
			else return mysql_error();
		}

		function errno()
		{
			if($this->linkflag)
			{
				return mysql_errno($this->linkflag);
			}
			else return mysql_errno();
		}

		function affected_rows()
		{
			return mysql_affected_rows($this->linkflag);
		}

		function num_rows()
		{
			$res = $this->execute($sql);
			return mysql_num_rows($this->linkflag);
		}
		/**
		 * mysql_num_fields() 
		 * @param  [type] $res [description]
		 * @return 函数返回结果集中字段的数。如果失败，则返回 false。
		 */
		function num_fields($res)
		{
			return mysql_num_fields($res);
		}
		/**
		 * mysql_insert_id() 返回上一步 INSERT 操作产生的 ID
		 * @return 返回上一步 INSERT 操作产生的 ID。如果上一查询没有产生 AUTO_INCREMENT 的 ID，则 mysql_insert_id() 返回 0。
		 */
		function insert_id()
		{
			$previous_id = mysql_insert_id($this->linkflag);

		}
		/**
		 * mysql_result() 函数返回结果集中一个字段的值。
		 * 如果成功，则该函数返回字段值。如果失败，则返回 false。
		 * @param  [type] $res   [description]
		 * @param  [type] $row   [description]
		 * @param  [type] $field [description]
		 * @return [type]        [description]
		 */
		function result($res, $row, $field=null)
		{
			if ($field === null) {
				$res = mysql_result($res, $row);
			}
		}
		/**
		 * mysql_get_server_info() 函数返回 MySQL 服务器的信息。
		 * 如果成功，则返回 MySQL 服务器的版本号，如果失败，则返回 false。
		 * @return [type] [description]
		 */
		function version()
		{
			return mysql_get_server_info($this->linkflag);
		}
		/**
		 * mysql_data_seek() 将 data 参数指定的 MySQL 结果内部的行指
		 * 针移动到指定的行号。接着调用 mysql_fetch_row() 将返回那一行。
		 * row 从 0 开始。row 的取值范围应该从 0 到 mysql_num_rows - 1。
		 * 但是如果结果集为空（mysql_num_rows() == 0），
		 * 要将指针移动到 0 会失败并发出 E_WARNING 级的错误，
		 * mysql_data_seek() 将返回 false。
		 * @param  [type] $res    [description]
		 * @param  [type] $rowNum [description]
		 * @return [type]         [description]
		 */
		function data_seek($res,$rowNum)
		{
			return mysql_data_seek($res, $rowNum);
		}

		function __destruct()
		{
			mysql_close($this->linkfalg);
		}

	}

?>