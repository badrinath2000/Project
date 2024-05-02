<?php
	require_once('dbconfig.php');
	class TPO
	{
		private $con;
		public function __construct()
		{
			$database=new Database();
			$db=$database->dbconnection();
			$this->con=$db;
		}
		public function runQuery($sql)
		{
			$stmt=$this->con->prepare($sql);
			return $stmt;
		}
		public function check($tponame)
		{
			try
			{
			$stmt=$this->con->prepare("SELECT * FROM tpo WHERE tpo_name=:tponame");
			$stmt->execute(array(':tponame'=>$tponame));
			$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
			if($stmt->rowcount()==1)
			{
				return false;
			}
			else
			{
				return true;
			}
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}
		}	
		public function updatesalt($salt,$tpoid)
		{
			try
			{
				$stmt=$this->con->prepare("UPDATE tpo SET tpo_salt=:salt WHERE tpo_id=:tpoid");
				$stmt->bindparam(":salt",$salt);
				$stmt->bindparam(":tpoid",$tpoid);
				$stmt->execute();
				return $stmt;
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}
		}
		public function redirect($url)
		{
			header("Location:$url");
		}
		public function doLogin($tponame,$tpass)
		{
			try
			{
				$stmt=$this->con->prepare("SELECT * FROM tpo WHERE tpo_name=:tponame");
				$stmt->execute(array(':tponame'=>$tponame));
				$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
				if($stmt->rowcount()== 1)
				{
					$password=MD5($tpass);
					if($password==$userRow['tpo_pass'])
					{
						//$_COOKIE['c_user']=$userRow['a_id'];
						$salt=hash("sha512",rand().rand().rand());
						setcookie("tpo_user",hash("sha512",$tponame),strtotime('+30 days'),'/');
						setcookie("tpo_salt",$salt,strtotime('+30 days'),'/');
						$tpo_id=$userRow['tpo_id'];
						return array("tpo_id"=>$tpo_id, "salt"=>$salt);
					}
					else
					{
						return false;
					}
				}
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}
		}
		public function dologout()
		{
				$tuser = $_COOKIE['tpo_user'];
				$salt = $_COOKIE['tpo_salt'];
				setcookie("tpo_user",$tuser, time()- 24 * 60 * 60,"/");
				setcookie("tpo_salt",$salt, time()- 24 * 60 * 60,"/");
				return true;
			
		}
		public function is_loggedin()
		{
			if(isset($_COOKIE['tpo_user'])&& isset($_COOKIE['tpo_salt']))
			{
				return true;
			}
		}
		public function chkuser($salt)
		{
			try
			
			{
				$stmt=$this->con->prepare("SELECT * FROM user WHERE u_salt=:salt");
				$stmt->execute(array(':salt'=>$salt));
				$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
				return $userRow;
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}
		}
		// lock function
		public function chktpo($salt)
		{
			try
			
			{
				$stmt=$this->con->prepare("SELECT * FROM user WHERE u_salt=:salt");
				$stmt->execute(array(':salt'=>$salt));
				$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
				return $userRow;
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}
		} 
		public function fetchusers($f)
		{
			try
			
			{
				$stmt=$this->con->prepare("SELECT * FROM user WHERE flag=:f");
				$stmt->execute(array(':f'=>$f));
				$userRow=$stmt->fetchAll(PDO::FETCH_ASSOC);
				return $userRow;
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}
		}
		public function fetchudetails($uid)
		{
			try
			
			{
				$stmt=$this->con->prepare("SELECT * FROM user WHERE u_id=:uid");
				$stmt->execute(array(':uid'=>$uid));
				$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
				return $userRow;
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}
		}
		public function fetchedetails($uid)
		{
			try
			
			{
				$stmt=$this->con->prepare("SELECT * FROM education WHERE u_id=:uid");
				$stmt->execute(array(':uid'=>$uid));
				$userRow=$stmt->fetchAll(PDO::FETCH_ASSOC);
				return $userRow;
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}
		}
		public function fetchexpdetails($uid)
		{
			try
			
			{
				$stmt=$this->con->prepare("SELECT * FROM experience WHERE u_id=:uid");
				$stmt->execute(array(':uid'=>$uid));
				$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
				return $userRow;
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}
		}
		
		public function del_c($cid)
		{
			try
			{
				$stmt = $this->con->prepare("DELETE FROM cmpny WHERE c_id=:cid");
				$stmt->execute(array(':cid' => $cid));
			//	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
				return $result;
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}	
		}
		public function srchbyskill($q,$f)
		{
			try
			{
				$stmt = $this->con->prepare("SELECT * FROM user WHERE keyskills LIKE :search AND flag=:f");
				$stmt->execute(array(':search' => '%'.$q.'%', ':f' => $f));
				$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
				return $result;
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}	
		}
		public function srchbystatus($q,$f)
		{
			try
			{
				$stmt = $this->con->prepare("SELECT * FROM user WHERE status LIKE :search AND flag=:f");
				$stmt->execute(array(':search' => $q.'%', ':f' => $f));
				$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
				return $result;
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}	
		}
		public function srchbyperc($q,$f)
		{
			try
			{
				$stmt = $this->con->prepare("SELECT DISTINCT u.* FROM user u, education e WHERE u.u_id = e.u_id AND u.flag=:f AND e.percentage >= :search");
				$stmt->execute(array(':search' => $q.'%', ':f' => $f));
				$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
				return $result;
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}	
		}
		public function srchbynmcont($q)
		{
			try
			{
				$stmt = $this->con->prepare("SELECT * FROM user WHERE (u_name LIKE :search OR u_contact LIKE :search) AND flag=4");
				$stmt->execute(array(':search' => $q.'%'));
				$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
				return $result;
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}	
		}
		public function svcmpnyd($compny,$address,$post,$salery,$criteria,$f)
		{
			try
			{
				$stmt=$this->con->prepare("INSERT INTO cmpny(c_name, c_address, c_positn, c_salary, c_criteria, c_flag) VALUES(:compny,:address,:post,:salery,:criteria,:f)");
				$stmt->bindparam(":compny",$compny);
				$stmt->bindparam(":address",$address);
				$stmt->bindparam(":post",$post);
				$stmt->bindparam(":salery",$salery);
				$stmt->bindparam(":criteria",$criteria);
				$stmt->bindparam(":f",$f);
				$stmt->execute();
				//$last=$this->con->lastInsertId();
				return $stmt;
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}
		}
		public function fetchcmpnyz()
		{
			try
			{
				$stmt = $this->con->prepare("SELECT * FROM cmpny WHERE c_flag=1");
				$stmt->execute();
				$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
				return $result;
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}	
		}
		public function fetchselected()
		{
			try
			{
				$stmt = $this->con->prepare("SELECT u.*,c.*,r.* FROM user u, cmpny c, report r WHERE u.flag=5 AND u.u_id=r.u_id AND r.c_id=c.c_id");
				$stmt->execute();
				$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
				return $result;
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}	
		}
		public function svselectedst($uid,$company,$comment,$tm)
		{
			try
			{
				$stmt=$this->con->prepare("INSERT INTO report(u_id, c_id, comment, r_time) VALUES(:uid,:company,:comment,:tm)");
				$stmt->bindparam(":uid",$uid);
				$stmt->bindparam(":company",$company);
				$stmt->bindparam(":comment",$comment);
				$stmt->bindparam(":tm",$tm);
				$stmt->execute();
				//$last=$this->con->lastInsertId();
				return $stmt;
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}
		}
		public function updateflag($f,$uid)
		{
			try
			{
				$stmt=$this->con->prepare("UPDATE user SET flag=:f WHERE u_id=:uid");
				$stmt->bindparam(":f",$f);
				$stmt->bindparam(":uid",$uid);
				$stmt->execute();
				return $stmt;
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}
		}
	}	
?>