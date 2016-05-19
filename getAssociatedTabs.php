<?php 
	include('connect_db.php');
	include('tabgen_php_functions.php');// all the function/ methodes are in this php file
	$ou_name = $_GET['ou_name'];
	$role_name = $_GET['role_name'];
	if($conn){
		$role_id = findRoleId($conn,$ou_name,$role_name);
					
		$query="select Tab.*,TabTemplate.Name as Template_Name 
				from RoleTabAsson,Tab,TabTemplate 
				where Tab.Id=TabId and
					Tab.TabTemplate=TabTemplate.Id and
					RoleTabAsson.RoleId='$role_id'
				order by Tab.CreateAt desc";
		$res = $conn->query($query);
		if($res){
			$count=0;
			while($row=$res->fetch(PDO::FETCH_ASSOC)){
				$output[]=array("Id"=>$row['Id'],"CreateAt"=>$row['CreateAt'],"UpdateAt"=>$row['UpdateAt'],
				"DeleteAt"=>$row['DeleteAt'],"Name"=>$row['Name'],"RoleName"=>$row['RoleName'],"CreatedBy"=>$row['CreatedBy'],
				"TabTemplate"=>$row['TabTemplate'],"RoleId"=>$row['RoleId'],"OU_Specific"=>$row['OU_Specific'],
				"RoleName"=>getRoleNamebyId($conn,$row['RoleId']),
				"Template_Name"=>$row['Template_Name'],
				"OU"=>getOUbyRole($conn,$row['RoleId']));
				$count++;
			}
			if($count>0)
				echo json_encode($output);
			else
				echo "null";
		}
		else
			echo "problem";
	}
	else
		echo "problem";
	
?>
