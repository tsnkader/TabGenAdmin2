<?php
/* function for creating tabs */
function createTabs($conn,$start,$no_of_tabs,$org_unit,$role_name,$createdBy){
	for($i=$start;$i<=$no_of_tabs;$i++){
		$tab_name = strtolower($org_unit)."_".strtolower($role_name)."_tab".$i;
		$id = randId(26);//creating unique id
		$role_id = findRoleId($conn,$org_unit,$role_name);
		$ou_id = findOUId($conn,$org_unit);
		$createAt = time();
		if($ou_id!=null){
			if($role_id!=null){
				$timestamp = time();
				$query="INSERT INTO Tab(Id,CreateAt,UpdateAt,DeleteAt,Name,RoleName,CreatedBy,RoleId)
						values('$id','$createAt','$timestamp',0,'$tab_name','$role_name','$createdBy','$role_id')";
				try{
					$result = $conn->query($query);
					if($result){
						echo $tab_name." Saved successfully.<br/>";
					}
					else echo $tab_name." Could not be saved.<br/>";
				}
				catch(Exception $e){
					echo $tab_name." Could not be saved: ".$e->getMessage()."<br/>";
				}
			}
			else echo $tab_name." failed to create, it seems role does not exist. Create it first.<br/>";
		}else echo $tab_name." Organisation Unit does not exist, create it first.<br/>";
	}
}
//to update user role
function updateUserRole($userId,$con,$role){
	$query="UPDATE Users SET Roles='$role' WHERE Id='$userId'";
	if($con->query($query)){
		echo "true";
	}
	else echo "Role ".$role." could not be updated";;
}
//function to set either the user has access right accross all other OU or not
function userUniversalAccess($conn,$user_id,$yes_no){
	$id = randId(26);
	$query="INSERT INTO UserUniversalAccessibility(Id,UserId,UniversalAccess) values('$id','$user_id',$yes_no)";
	$conn->query($query);
}
// function to test whether the user has Universal access right
function isUserUniversalAccessRight($conn,$user_id){
	$query="select * from UserUniversalAccessibility where UserId='$user_id'";
	$result = $conn->query($query);
	$row = $result->fetch(PDO::FETCH_ASSOC);
	$flag = (int)$row['UniversalAccess'];
	if($flag==1)
		return true;
	else
		return false;
}
	
function randId($length){
	$id = md5(uniqid());
	$char = str_shuffle($id);
	for($i = 0, $rand = '', $l = strlen($char) - 1; $i < $length; $i ++) {
		$rand .= $char{mt_rand(0, $l)};
	}
	return $rand;
}
	/* function to find number of tabs of a particular role*/
function existingNoOfTabs($roleName,$org_unit,$conn){
	$res = $conn->query("SELECT COUNT(*) AS NO_OF_TABS 
							FROM Tab,Role 
							where Tab.RoleName='$roleName' and 
							Tab.RoleId=Role.Id and 
							Role.OrganisationUnit='$org_unit'");
	$row = $res->fetch(PDO::FETCH_ASSOC);
	$no_of_tabs = (int)$row['NO_OF_TABS'];
	return $no_of_tabs;
}
	
//to get OU id
function findOUId($conn,$org_unit){
	$query_result = $conn->query("select Id from OrganisationUnit where OrganisationUnit='$org_unit'");
	$row_data = $query_result->fetch(PDO::FETCH_ASSOC);
	$ou_id = $row_data['Id'];
	if(isset($ou_id))
		return $ou_id;
	else return null;
}
// to get RoleId
function findRoleId($conn,$org_unit,$role_name){
	$query_result = $conn->query("select Id from Role where OrganisationUnit='$org_unit' and RoleName='$role_name'");
	$row_data = $query_result->fetch(PDO::FETCH_ASSOC);
	$role_id = $row_data['Id'];
	if(isset($role_id))
		return $role_id;
	else return null;
}

function mapUserwithOU($conn,$user_id,$ou_id){
	$query = "insert into User_OU_Mapping values('$user_id','$ou_id')";
	$conn->query($query);
}
//to get template Id
function findTemplateId($conn,$template_name){
	$query_result = $conn->query("SELECT Id,Name FROM TabTemplate where Name='$template_name'");
	$curr_row = $query_result->fetch(PDO::FETCH_ASSOC);
	$template_id = $curr_row['Id'];
	if(isset($template_id))
		return $template_id;
	else return null;
}
//for getting template name
function getTemplateName($conn,$template_id){
	//include('connect_db.php');
	$query_res = $conn->query("select TabTemplate.Name as Template_Name from TabTemplate where id='$template_id'");
	$result_row=$query_res->fetch(PDO::FETCH_ASSOC);
	return($result_row['Template_Name']);
}
//to check if the user role in an OU is a universal or not
function isUniversalRole($conn,$role_name,$orgunit){
	$resp = $conn->query("select * from Role where RoleName='$role_name' and OrganisationUnit='$orgunit'");
	if($resp){
		$row = $resp->fetch(PDO::FETCH_ASSOC);
		$universal_role = $row['UniversalRole'];
		if($universal_role=="true")
			return true;
		else return false;
	}
	return false;
}
//to get team_name
function getTeamName($conn,$team_id){
	$result = $conn->query("select * from Teams where Id='$team_id'");
	if($result){
		$row = $result->fetch(PDO::FETCH_ASSOC);
		$team_name = $row['Name'];
		return $team_name;
	}
	else
		return null;
}

//getting team id by username from the users table
function getTeamIdByUsername($conn,$user_name){
	$result = $conn->query("select * from Users where Username='$user_name'");
	if($result){
		$row = $result->fetch(PDO::FETCH_ASSOC);
		$team_id = $row['TeamId'];
		return $team_id;
	}
	else
		return null;
}
//function for getting parent OU Id for an organisation
function getParentOuId($conn,$ou_id){
	$query="select ParentOUId from OUHierarchy where OUId='$ou_id'";
	$res = $conn->query($query);
	$row = $res->fetch(PDO::FETCH_ASSOC);
	return $row['ParentOUId'];
}
// function to get OU Id (which the user belong) by providing user Id
function getOuIdByUserId($conn,$user_id){
	$query="select Users.Id as user_id,Users.Username,Teams.Id as Team_id,Teams.Name as team_name,OrganisationUnit.Id as org_unit_id,OrganisationUnit.OrganisationUnit
			from Users,Teams,OrganisationUnit
			where Teams.Id=Users.TeamId 
			and Teams.Name=OrganisationUnit.OrganisationUnit
			and Users.Id='$user_id'";
	$res = $conn->query($query);
	$row = $res->fetch(PDO::FETCH_ASSOC);
	return $row['org_unit_id'];
}
//function to get user role by providing user id
function getRoleByUserId($conn,$user_id){
	$query="select Roles from Users where Id='$user_id'";
	$res = $conn->query($query);
	$row = $res->fetch(PDO::FETCH_ASSOC);
	return $row['Roles'];
}
//function to concate two arrays
function concate_array($arr1,$arr2){
	$res_arr = array();
	$i=0;
	for($i=0;$i<sizeof($arr1);$i++){
		$res_arr[$i]=$arr1[$i];
	}
	$j=0;
	for($j=0;$j<sizeof($arr2);$j++){
		$res_arr[($i+$j)]=$arr2[$j];
	}
	return $res_arr; 	
}
//function to find list of Teams accessible by the user by providing user id
function getTeams($conn,$user_id){
	$output=null;
	if(isUserUniversalAccessRight($conn,$user_id)){//checks whether the user is universal access right
		$query="select Teams.Name as team_name from Teams,OrganisationUnit where Teams.Name=OrganisationUnit order by team_name";
		$res = $conn->query($query);
		if($res){
			while($row=$res->fetch(PDO::FETCH_ASSOC)){
				$output[]=$row;
			}
		}
	}
	else{		
		$ou_id = getOuIdByUserId($conn,$user_id);
		$my_team = getTeamByOUId($conn,$ou_id);	
		/*,array("team_name"=>$parent_team)
		$parent_ou_id=getParentOuId($conn,$ou_id);
		$parent_team =getTeamByOUId($conn,$parent_ou_id);*/	
		$output= array(array("team_name"=>$my_team));
	}
	return $output;
}

//function to find list of OUs accessible by the user by providing user id
function getOUs($conn,$user_id){
	$output=null;
	if(isUserUniversalAccessRight($conn,$user_id)){//checks whether the user is universal access right
		$query="select OrganisationUnit as team_name from OrganisationUnit order by team_name";
		$res = $conn->query($query);
		if($res){
			$count=0;
			while($row=$res->fetch(PDO::FETCH_ASSOC)){
				$output[]=$row;
				$count++;
			}
			$output[$count]['team_name']="Associated Tabs";
		}
	}
	else{		
		$my_ou = getOU_Byuser_Id($conn,$user_id);
		$output= array(array("team_name"=>$my_ou),array("team_name"=>"Associated Tabs"));
		//echo "OU: ".$my_ou;
	}
	return $output;
}

//function to get OU name by providing OU id
function getOU_Byuser_Id($conn,$user_id){
	$query = "SELECT OrganisationUnit
				FROM User_OU_Mapping,OrganisationUnit
				WHERE OU_id=OrganisationUnit.Id
				and user_id='$user_id'";
	$res = $conn->query($query);
	$row = $res->fetch(PDO::FETCH_ASSOC);
	return $row['OrganisationUnit'];
}

//function to get team name by providing OU id
function getTeamByOUId($conn,$ou_id){
	$query="select Teams.Name as team_name, OrganisationUnit as org_unit_name 
			from Teams,OrganisationUnit 
			where Teams.Name=OrganisationUnit and 
				OrganisationUnit.Id='$ou_id'";
	$res = $conn->query($query);
	$row = $res->fetch(PDO::FETCH_ASSOC);
	return $row['team_name'];
}

function renameChannel($conn,$team_id,$channel_name,$old_display_name){
	
	if($conn){
		$query="Update Channels set DisplayName='$channel_name',Name='$channel_name'
				where TeamId='$team_id' and DisplayName='$old_display_name'";
		$conn->query($query);
	}
}

function deleteChannel($conn,$team_id,$old_display_name){
	
	if($conn){
		$time = time();
		$query="Update Channels set DeleteAt='$time'
				where TeamId='$team_id' and DisplayName='$old_display_name'";
		$conn->query($query);
	}
}

//function to update role type
function updateRoleType($conn,$role_id,$role_type){
	if($conn){
		$query = "Update Role set RoleType='$role_type' where Id='$role_id'";
		$conn->query($query);
	}
}

//function to get role_type using role_name
function getRoleType($conn,$role_name){
	$query = "select RoleType from Role where RoleName='$role_name'";
	$res = $conn->query($query);
	$row = $res->fetch(PDO::FETCH_ASSOC);
	return $row['RoleType'];
}


//function to get users in a channel
function getUserInPrivateMessageChannel($conn,$channel_id,$my_id){
	$query = "select UserId, Username
				from ChannelMembers,Users
				where UserId=Users.Id and
				ChannelId='$channel_id' and
				UserId != '$my_id'";
	$res = $conn->query($query);
	$row = $res->fetch(PDO::FETCH_ASSOC);
	return $row['Username'];
}
//function to get name of an Organisation Unit by providing OU id
function getOUNameByOuId($conn,$ou_id){
	$query = "select * from OrganisationUnit
				where Id='$ou_id'";
	$res = $conn->query($query);
	$row = $res->fetch(PDO::FETCH_ASSOC);
	return $row['OrganisationUnit'];
}
//function to get team id by providing OU name
function getTeamId_by_OU_name($conn,$ou_name){
	$query = "select * from Teams where Name='$ou_name'";
	$res = $conn->query($query);
	$row = $res->fetch(PDO::FETCH_ASSOC);
	return $row['Id'];
}

//function to get channel details by using channel name
function getChannelByName($conn,$channel_name){
	$query = "select * from Channels where Name='$channel_name' and DeleteAt=0";
	$res = $conn->query($query);
	$count=0;
	while($row = $res->fetch(PDO::FETCH_ASSOC)){
		$output[]=$row;
		$count++;
	}
	if($count==1)
		return $output;
	else return null;	
}

//function to check if tab name already exists
function isTabExist($conn,$tab_name){
	$query = "select count(*) as count from Tab where Name='$tab_name'";
	$res = $conn->query($query);
	$row = $res->fetch(PDO::FETCH_ASSOC);
	if((int)$row['count']>0){
			return true;
	}
	else{
			return false;
	}
}

//function to extract token which was stored in session at the time of login
function get_token(){
		session_start();
		$token=null;
		if(isset($_SESSION['login_header_response'])){
			$connect = new ConnectAPI();
			$header = $_SESSION['login_header_response'];
			$header_array = $connect->http_parse_headers($header);
					
			foreach ($header_array as $name => $value) {
				//echo "The value of '$name' is '$value'<br>";
				if($name=="Token"){
					$token = $value;
					break;
				}
			}
		}
		else 
			$token=null;
											
		return $token;
}

//function to check if the tab is already associated to the specific role
	function isTabAlreadyAssociated($conn,$role_id,$tab_id){
		$query = "select count(*) as count from RoleTabAsson where RoleId='$role_id' and TabId='$tab_id'";
		$res = $conn->query($query);
		$row = $res->fetch(PDO::FETCH_ASSOC);
		$count = (int)$row['count'];
		if($count>0)
			return true;
		else 
			return false;
	}
?>
