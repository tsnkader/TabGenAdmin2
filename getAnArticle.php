<?php
include('tabgen_php_functions.php');
include('connect_db.php');

if(empty($_GET['article_id'])){
	echo json_encode(array("status"=>false,"message"=>"Please send article ID"));
}
else{
	$id = $_GET['article_id'];
	if($conn){
		$output=null;
		$query = "select Id,CreateAt,DeleteAt,UpdateAt,Name,Textual_content,Images,Links as external_link_url,Active 
			from Article where Id='$id'";
		$res=$conn->query($query);
		if($res){
			while($row=$res->fetch(PDO::FETCH_ASSOC)){
				$row['CreateAt']=(double)$row['CreateAt'];
				$row['DeleteAt']=(double)$row['DeleteAt'];
				$row['UpdateAt']=(double)$row['UpdateAt'];
				$row['Name']=str_replace("''","'",$row['Name']);
				$row['Textual_content']=str_replace("''","'",$row['Textual_content']);
				$row['Images']=($row['Images']==null)?"":$row['Images'];
				$row['images_url']=($row['Images']==null)?"http://128.199.111.18/TabGenAdmin/img/noimage.jpg":
				"http://128.199.111.18/TabGenAdmin/".$row['Images'];
				$row['Filenames']=getAttatchment($conn,$row['Id']);
				$output[] = $row;
			}
			echo json_encode(array("status"=>true,"response"=>$output));
		}
		else {
			echo json_encode(array("status"=>false,"message"=>"Sorry, unable to get result."));
		}
		
	}
	else{
		echo json_encode(array("status"=>false,"message"=>"Sorry, unable to connect database."));
	}
}
function getAttatchment($conn,$article_id){
	$query = "select Id,caption,file_name from ArticleFiles where article_id='$article_id'";
	$res = $conn->query($query);
	$files_output=array();
	while($row = $res->fetch(PDO::FETCH_ASSOC)){
		$row['file_type']=getFileType($row['file_name']);
		$row['file_name']=substr($row['file_name'],strpos($row['file_name'],"/")+1);
		$row['attachment_url']="http://128.199.111.18/TabGenAdmin/".$row['file_name'];
		$row['caption']=($row['caption']==null)?"":$row['caption'];
		$files_output[]=$row;
	}
	return $files_output;
}

function getFileType($filename){
	$ext = pathinfo($filename, PATHINFO_EXTENSION);
	$file_type="";
	switch($ext){
		case "gif": 
		case "jpeg":
		case "png":	
		case "bmp":
		case "jpg":	$file_type="image";
					break;
		case "pdf": $file_type="pdf";
					break;
		case "docx":
		case "doc":	$file_type="word";
					break;
		case "pptx":
		case "ppt":	$file_type="power_point";
					break;	
		case "mkv":
		case "mpeg":
		case "mp4":	$file_type="video";
					break;
		default: 	$file_type="others";	
	}
	return $file_type;
}
?>
