<?php
include('connect_db.php');
include('tabgen_php_functions.php');
session_start();
/*if(isset($_SESSION['user_details'])){
	$user_details = json_decode($_SESSION['user_details']);
	$created_by = $user_details->username;*/
	$ou_specific_tab=$_GET['ou_specific_tab'];
	$org=$_GET['org'];
	$ou = $_GET['ou'];
	$role_id = $_GET['role_id'];
	$flag = $ou_specific_tab=="true"?1:0;
	//echo $role_id." ".$ou." ".$org." ".$flag;
	if($conn){
			//$role_id = findRoleId($conn,$ou,$role_name);
			$query = "SELECT Tab.*,TabTemplate.Name as Template_Name 
						FROM Tab,TabTemplate
						where Tab.TabTemplate=TabTemplate.Id and
							Tab.OU_Specific='$flag' and
							Tab.Id not in(select TabId from RoleTabAsson where 
										RoleId='$role_id') and
							Tab.DeleteAt=0
						order by Tab.CreateAt desc";
			$res = $conn->query($query);
			while($row = $res->fetch(PDO::FETCH_ASSOC)){
				if($row['Template_Name']=="Latest News Template" || $row['Template_Name']=="News Template"){
					$news_details=getNewsDetails($conn,$row['Name'])==null?"Enter news here":getNewsDetails($conn,$row['Name']);
					$output[]=array("Id"=>$row['Id'],"CreateAt"=>$row['CreateAt'],"UpdateAt"=>$row['UpdateAt'],
						"DeleteAt"=>$row['DeleteAt'],"Name"=>$row['Name'],"RoleName"=>$row['RoleName'],"CreatedBy"=>$row['CreatedBy'],
						"TabTemplate"=>$row['TabTemplate'],"RoleId"=>$row['RoleId'],"OU_Specific"=>$row['OU_Specific'],
						"RoleName"=>getRoleNamebyId($conn,$row['RoleId']),
						"Template_Name"=>$row['Template_Name'],
						"news_details"=>$news_details,
						"Org"=>$row['Organisation'],
						"OU"=>$row['OrganisationUnit']);
						//"OU"=>getOUbyRole($conn,$row['RoleId']));
				}
				else{
					$output[]=array("Id"=>$row['Id'],"CreateAt"=>$row['CreateAt'],"UpdateAt"=>$row['UpdateAt'],
					"DeleteAt"=>$row['DeleteAt'],"Name"=>$row['Name'],"RoleName"=>$row['RoleName'],"CreatedBy"=>$row['CreatedBy'],
					"TabTemplate"=>$row['TabTemplate'],"RoleId"=>$row['RoleId'],"OU_Specific"=>$row['OU_Specific'],
					"RoleName"=>getRoleNamebyId($conn,$row['RoleId']),
					"Template_Name"=>$row['Template_Name'],
					"news_details"=>" ",
					"Org"=>$row['Organisation'],
					"OU"=>$row['OrganisationUnit']);
					//"OU"=>getOUbyRole($conn,$row['RoleId']));
				}
				//$row;''
			}
			if(sizeof($output)==0)
				echo "null";
			else
				echo json_encode($output);
	}
	else echo "false";
/*}
else 
	echo "Sesssion_expired";*/



?>
