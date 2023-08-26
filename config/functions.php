<?php

include "conn.php";

// MySQL INSERT statement
function InsertData($table_name, $cols, $values){
    global $conn;
    $query = "INSERT INTO $table_name ($cols) VALUES ($values)";
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    return $result;
}

//SELECT
function SelectData($TableName, $moresql){
	global $conn;
	$sql = "SELECT * FROM $TableName $moresql";
	$select = mysqli_query($conn, $sql);
	return $select;
}

//update data
function UpdateData($table_name, $more){
	global $conn;
	$sql = "UPDATE {$table_name} SET {$more} ";
	$update = mysqli_query($conn,$sql);
	return $update;
}

//Home Page
function About_Us($col_name){
    $row = mysqli_fetch_array(SelectData('about_us',""));
    return $row[$col_name];
}

//catagory
function postcate($col_name, $id){
    $row = mysqli_fetch_array(SelectData('blog_catagory',"WHERE blog_cata_id='$id'"));
    return $row[$col_name];
}


//Course catagory
function cours_tcate($col_name, $id){
    $row = mysqli_fetch_array(SelectData('catagory', "WHERE cat_id ='$id'"));
    return $row[$col_name];
}

//category ID
function cateid($cat_name){
    $row = mysqli_fetch_array(SelectData('blogs_category',"WHERE category_name='$cat_name'"));
    return $row['cat_id'];
}

//category perent ID
function perent_id($cat_name){
    $row = mysqli_fetch_array(SelectData('blogs_category',"WHERE category_name='$cat_name'"));
    return $row['perent_id'];
}


//UserData
function UserData(){
    $row = mysqli_fetch_array(SelectData('users8r6',"WHERE user_name='{$_SESSION['admin_user']}'"));
    return $row['user_name'];
}

//settings
function settings($U_data){
    $row = mysqli_fetch_array(SelectData('settings',""));
    return html_entity_decode($row[$U_data]);
}

//header_menu
function header_menu($data){
    $row = mysqli_fetch_array(SelectData('header_menu',""));
    return $row[$data];
}

//Sub_menu
function sub_menu($data){
    $row = mysqli_fetch_array(SelectData('sub_menu',""));
    return $row[$data];
}

//text_color_settings
function text_color_settings($U_data, $h_name){
    $row = mysqli_fetch_array(SelectData('text_color_settings',"WHERE text_name='$h_name' "));
    return $row[$U_data];
}

//color code to color name
function color_code_to_name($color_id, $color_name){
    $row = mysqli_fetch_array(SelectData('color_settings',"WHERE color_id='$color_id' "));
    return $row[$color_name];
}


//reconect
function Reconect($url){
	echo "<script> location.replace('".$url."')</script>";
}


//Login Required
function If_Not_Login($url){
	if (!isset($_SESSION['user'])) {
		Reconect($url);
	}
}


//If_Login
function If_Login($url){
	if (isset($_SESSION['user'])) {
		Reconect($url);
	}
}



function rowcount($TableName, $moresql){
    global $conn;
    $sql = "SELECT * FROM $TableName $moresql";
    $select = mysqli_query($conn, $sql);
    $row_count = mysqli_num_rows($select);
    return $row_count;
}




//Get user data country and city
function user_from($u_info)
{
    // Check if the HTTP_X_FORWARDED_FOR header exists
    if (isset($_SERVER['HTTP_X_FORWARDED_FOR']) && !empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        // Use the first IP address in the list (actual client IP)
        $ipAddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        // Use the default REMOTE_ADDR (might be a proxy's IP)
        $ipAddress = $_SERVER['REMOTE_ADDR'];
    }


    $ch = curl_init();
    $url = "https://ipgeolocation.abstractapi.com/v1/?api_key=5f5922796be340b8b5c7531f1ee64270&ip_address=".$ipAddress;
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    $data = curl_exec($ch);
    curl_close($ch);
    $usercun = json_decode($data, true);
    return $usercun["$u_info"];
    // $usercun['country_code'];
    // $usercun['ip_address'];
}


//pagination
function pagelimit($getpagenumber, $limit){                
    global $get_page;
    if (isset($getpagenumber)) { $get_page = $getpagenumber; }
    if ($get_page=="" || $get_page=="1" ) { $traget_page = "0";
    }else{ $traget_page = ($get_page*$limit)-$limit;}
    return($traget_page);
}

function pagnation($tablename, $perpage){
    
    global $conn;
    $sql1="SELECT * FROM {$tablename}";
    $query2 = mysqli_query($conn,$sql1);
    $count = mysqli_num_rows($query2);
    $pageNumber=ceil($count/$perpage);
    return($pageNumber);
}


?>