<?php

	require 'dao.php';
	require 'model.php';

	$d = new dao();
	$m = new model();
	extract($_POST);
	if (isset($_POST) && !empty($_POST)) 
	{

		if (isset($_POST['txtsubmit'])) 
		{
			
			$m->set_data("tname" , $tname);
			$m->set_data("tmail" , $tmail);
			$m->set_data("tno" , $tno);
			$m->set_data("tgen" , $tgen);
			$m->set_data("tdob",$tdob);
			$m->set_data("tadd" , $tadd);
			$m->set_data("tcon" , $tcon);
			$hobby = implode(',', $_POST["in"]);
			$m->set_data("hobby" , $hobby);
			

			$a = array( 'name'=>$m->get_data(test_input('tname')),
						'email'=>$m->get_data(test_input('tmail')),
						'phone'=>$m->get_data(test_input('tno')),
						'gender'=>$m->get_data(test_input('tgen')),
						'dob'=>$m->get_data(test_input('tdob')),
						'address'=>$m->get_data(test_input('tadd')),
						'country'=>$m->get_data(test_input('tcon')),
						'interest'=>$m->get_data(test_input('hobby'))
					  );

			$q = $d->insert("register",$a);

			if ($q > 0) 
				{
					header("Location:day9.php");
				}
			else{
				echo "something is wrong";
			}

		}
		
	}

	if(isset($_POST['btnUpdate']))
			{
				$m->set_data("tname" , $tname);
				$m->set_data("tmail" , $tmail);
				$m->set_data("tno" , $tno);
				$m->set_data("tgen" , $tgen);
				$m->set_data("tadd" , $tadd);
				$m->set_data("tcon" , $tcon);
				$hobby = implode(',', $_POST["in"]);
				$m->set_data("hobby" , $hobby);
			

				$a = array( 'name'=>$m->get_data(test_input('tname')),
							'email'=>$m->get_data(test_input('tmail')),
							'phone'=>$m->get_data(test_input('tno')),
							'gender'=>$m->get_data(test_input('tgen')),
							'address'=>$m->get_data(test_input('tadd')),
							'country'=>$m->get_data(test_input('tcon')),
							'interest'=>$m->get_data(test_input('hobby'))
					  	  );
				//print_r($a);
				//exit();
				$q=$d->update("register",$a,"id='$id'");
				if($q>0)
				{
					header("Location:Database_view.php");

				}
				else
				{
					Echo "failed to update data";
				}
			}

		if(isset($_GET['id']))
		{	
			
			$q=$d->delete("register","id='$_GET[id]'");
			if($q>0)
			{
			//$_SESSION['msg']="Room Deleted.";
			header("Location:Database_view.php");
			}
			else
			{
			//$_SESSION['msg1']="Something wrong";
			header("Location:Database_view.php");
			}
		}

?>