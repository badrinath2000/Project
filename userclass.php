<?php
	require_once('dbconfig.php');
	class USER
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
		
		public function check($uname,$umail)
		{
			try
			{
			$stmt=$this->con->prepare("SELECT * FROM user WHERE u_name=:uname OR u_email=:umail");
			$stmt->execute(array(':uname'=>$uname,':umail'=>$umail));
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
		
		public function register($uname,$umail,$pass,$contact,$enroll,$dob)
		{
			try
			{
				$f=1;
				$new_password=password_hash($pass,PASSWORD_DEFAULT);
				$stmt=$this->con->prepare("INSERT INTO user(u_name,u_email,u_pass,u_contact,enroll,dob) VALUES(:username,:uemail,:upass,:contact,:enroll,:dob)");
				$stmt->bindparam(":username",$uname);
				$stmt->bindparam(":uemail",$umail);
				$stmt->bindparam(":upass",$new_password);
				$stmt->bindparam(":contact",$contact);
				$stmt->bindparam(":enroll",$enroll);
				$stmt->bindparam(":dob",$dob);
				$stmt->execute();
				//$last=$this->con->lastInsertId();
				return $stmt;
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}
		}
	
		public function updatesalt($uid,$salt)
		{
			try
			{
				$stmt=$this->con->prepare("UPDATE user SET u_salt=:salt WHERE u_id=:uid");
				$stmt->bindparam(":salt",$salt);
				$stmt->bindparam(":uid",$uid);
				$stmt->execute();
				return $stmt;
			}
			catch(PDOException $e)
			{
				echo $e->getMessage;
			}
		}
		public function redirect($url)
		{
			header("Location:$url");
		}
		public function doLogin($uname,$umail,$upass)
		{
			try
			{
				$stmt=$this->con->prepare("SELECT * FROM user WHERE u_name=:uname OR u_email=:umail");
				$stmt->execute(array(':uname'=>$uname,':umail'=>$umail));
				$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
				if($stmt->rowcount()==1)
				{
					if(password_verify($upass,$userRow['u_pass']))
					{
						//$_COOKIE['c_user']=$userRow['a_id'];
						$salt=hash("sha512",rand().rand().rand());
						setcookie("u_user",hash("sha512",$uname),strtotime('+30 days'),'/');
						setcookie("u_salt",$salt,strtotime('+30 days'),'/');
						$u_id=$userRow['u_id'];
						return array("u_id"=>$u_id, "salt"=>$salt);
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
				$auser = $_COOKIE['c_user'];
				$salt = $_COOKIE['c_salt'];
				setcookie("u_user",$auser, time()- 24 * 60 * 60,"/");
				setcookie("u_salt",$salt, time()- 24 * 60 * 60,"/");
				return true;
			
		}
		public function is_loggedin()
		{
			if(isset($_COOKIE['u_user'])&& isset($_COOKIE['u_salt']))
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
		public function chkuserv($salt)
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
		public function insertresume($email,$location,$mobileno,$keyskills,$status,$resu,$photo,$f,$user_id)
		{
			try
			{
				$stmt=$this->con->prepare("UPDATE user SET u_email2=:email, location=:location, mobno=:mobileno, keyskills=:keyskills, status=:status, resume=:resu, photo=:photo, flag=:f WHERE u_id=:user_id");
				$stmt->bindparam(":email",$email);
				$stmt->bindparam(":location",$location);
				$stmt->bindparam(":mobileno",$mobileno);
				$stmt->bindparam(":keyskills",$keyskills);
				$stmt->bindparam(":status",$status);
				$stmt->bindparam(":resu",$resu);
				$stmt->bindparam(":photo",$photo);
				$stmt->bindparam(":f",$f);
				$stmt->bindparam(":user_id",$user_id);
				$stmt->execute();
				return $stmt;
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}
		}
		public function insertexprnc($user_id,$compny,$dignity,$years,$salery,$excerti)
		{
			try
			{
				$stmt=$this->con->prepare("INSERT INTO experience(u_id, compny, dignity, years, salery, excerti) VALUES(:user_id,:compny,:dignity,:years,:salery,:excerti)");
				$stmt->bindparam(":user_id",$user_id);
				$stmt->bindparam(":compny",$compny);
				$stmt->bindparam(":dignity",$dignity);
				$stmt->bindparam(":years",$years);
				$stmt->bindparam(":salery",$salery);
				$stmt->bindparam(":excerti",$excerti);
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
		
		public function insert12th($uid,$std,$uni,$college,$marks,$percentage,$result)
		{
			try
			{
				$stmt=$this->con->prepare("INSERT INTO education(u_id,std,university,college,marks,percentage,result) VALUES(:uid,:std,:uni,:college,:marks,:percentage,:result)");
				$stmt->bindparam(":uid",$uid);
				$stmt->bindparam(":std",$std);
				$stmt->bindparam(":uni",$uni);
				$stmt->bindparam(":college",$college);
				$stmt->bindparam(":marks",$marks);
				$stmt->bindparam(":percentage",$percentage);
				$stmt->bindparam(":result",$result);
				$stmt->execute();
				return $stmt;
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}
		}
		public function insertBE($uid,$std,$uni,$college,$marks,$percentage,$result)
		{
			try
			{
				$stmt=$this->con->prepare("INSERT INTO education(u_id,std,university,college,marks,percentage,result) VALUES(:uid,:std,:uni,:college,:marks,:percentage,:result)");
				$stmt->bindparam(":uid",$uid);
				$stmt->bindparam(":std",$std);
				$stmt->bindparam(":uni",$uni);
				$stmt->bindparam(":college",$college);
				$stmt->bindparam(":marks",$marks);
				$stmt->bindparam(":percentage",$percentage);
				$stmt->bindparam(":result",$result);
				$stmt->execute();
				return $stmt;
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}
		}
		
		public function insert10th($uid,$std,$uni,$school,$marks,$percentage,$result)
		{
			try
			{
				$stmt=$this->con->prepare("INSERT INTO education(u_id,std,university,college,marks,percentage,result) VALUES(:uid,:std,:uni,:school,:marks,:percentage,:result)");
				$stmt->bindparam(":uid",$uid);
				$stmt->bindparam(":std",$std);
				$stmt->bindparam(":uni",$uni);
				$stmt->bindparam(":school",$school);
				$stmt->bindparam(":marks",$marks);
				$stmt->bindparam(":percentage",$percentage);
				$stmt->bindparam(":result",$result);
				$stmt->execute();
				return $stmt;
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
		public function fetchexp($uid)
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
		
		public function fetchreport($u_id)
		{
			try
			{
				$stmt = $this->con->prepare("SELECT r.*,c.* FROM report r, cmpny c WHERE c.c_id=r.c_id AND r.u_id=:u_id");
				$stmt->execute(array(':u_id'=>$u_id));
				$result = $stmt->fetch(PDO::FETCH_ASSOC);
				return $result;
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}	
		}
	}
		
?>