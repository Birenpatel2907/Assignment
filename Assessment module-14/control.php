<?php

include_once('model.php'); // step 1

class control extends model   // step 2
{
    function __construct()
	{
		session_start();
		model::__construct(); // step 3
		
		$url=$_SERVER['PATH_INFO'];
        
        switch($url)
        {
            case '/dashboard':
				include_once('deshbord.php');
				break;
			
			

             case '/add-employee':
				if(isset($_REQUEST['submit']))
					{
						$fname=$_REQUEST['fname'];
						$lname=$_REQUEST['lname'];
						$email=$_REQUEST['email'];
						$mobile=$_REQUEST['mobile'];
						$gender=$_REQUEST['gender'];
						$address=$_REQUEST['address'];
						$password=$_REQUEST['password'];
						$enc_password=md5($password);
						$con_password=$_REQUEST['con_password'];
						$enc_con_password=md5($con_password);
						

						$data=array("fname"=>$fname,"lname"=>$lname,"email"=>$email,"mobile"=>$mobile,"gender"=>$gender,"address"=>$address,
						"password"=>$enc_password, "con_password"=>$enc_con_password);

						$res=$this->insert('employee',$data);
						if($res)
						{
							echo "'<script>
							alert('Employee Added Successfully');
							window.location='manage-employee';
							</script>";

						}
						else
						{
							echo "Not Success";
						}    
					}
                include_once('add_employee.php');
                break;

			case '/editemployee':
				if(isset($_REQUEST['btnedit']))
				{
					$emp_id=$_REQUEST['btnedit'];
					$where=array("emp_id"=>$emp_id);
					$run=$this->select_where('employee',$where);
					$fetch=$run->fetch_object();
						
					if(isset($_REQUEST['submit']))
					{
						$fname=$_REQUEST['fname'];
						$lname=$_REQUEST['lname'];
						$email=$_REQUEST['email'];
						$mobile=$_REQUEST['mobile'];
						$gender=$_REQUEST['gender'];
						$address=$_REQUEST['address'];
						$password=$_REQUEST['password'];
						$enc_password=md5($password);
						$con_password=$_REQUEST['con_password'];
						$enc_con_password=md5($con_password);
						

						$data=array("fname"=>$fname,"lname"=>$lname,"email"=>$email,"mobile"=>$mobile,"gender"=>$gender,"address"=>$address,
						"password"=>$enc_password);
						
                        
							$res=$this->update('employee',$data,$where);    
							if($res)
							{
								echo "<script>
								alert('Update Success');
								window.location='manage-employee';
								</script>";
							}
							else{
								echo "<script>
								alert('Update Failed');
								</script>";
							}				
					}						
				}
				include_once('editemployee.php');
				break;

            case '/manage-employee':
                $employee_arr=$this->select('employee');
                include_once('manage_employee.php');
                break;



			case '/delete':
				case '/delete':
				if(isset($_REQUEST['delemp_idbtn']))
				{
					$emp_id=$_REQUEST['delemp_idbtn'];
					$where=array("emp_id"=>$emp_id);
					
					// img del
					$res=$this->select_where('employee',$where);
					$fetch=$res->fetch_object();
					$old_file=$fetch->file;
					
					$run=$this->delete('employee',$where);
					if($run)
					{
						unlink('../website/images/upload/employee/'.$old_file);	
						echo "<script>
							alert('Delete Success');
							window.location='manage-employee';
							</script>";
					}
				}
			
				
            case '/header':
                include_once('header.php');
                break;

            case '/footer':
                include_once('footer.php');
                break;
                



            default:
            include_once('index.php');
        }
    }
}

$obj=new control;
?>