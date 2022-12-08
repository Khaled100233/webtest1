<?php 

function userLogin($username,$password)
{
	//1 - 
	$connection  = mysqli_connect(SERVER,DBUSER,DBPASS,DBNAME);
	if(!$connection)
		exit("ERROR : ".mysqli_error($connection));
	//2- query
	$query = mysqli_query($connection,"SELECT * FROM `users` WHERE `username`='$username' AND `password`='$password'");
	
	if(mysqli_num_rows($query)>0)
	{
		$_SESSION['username'] = $username;
		mysqli_close($connection);
		return true;
	}
	else
	{
		mysqli_close($connection);
		return false;
	}

}
function adminLogin($username,$password)
{
	//1 - 
	$connection  = mysqli_connect(SERVER,DBUSER,DBPASS,DBNAME);
	if(!$connection)
		exit("ERROR : ".mysqli_error($connection));
	//2- query
	$query = mysqli_query($connection,"SELECT * FROM `admins` WHERE `username`='$username' AND `password`='$password'");
	
	if(mysqli_num_rows($query)>0)
	{
		$_SESSION['National_ID'] = $National_ID;
		mysqli_close($connection);
		return true;
	}
	else
	{
		mysqli_close($connection);
		return false;
	}

}
/**
 * add new client
 * @param $username
 * @param $password
 * @param $email
 * @param $address
 * @param $phone
 * @return bool
 */
function addUser($username, $password, $email, $address, $phone)
{
    //1-connection
    $connection = mysqli_connect(SERVER,DBUSER,DBPASS,DBNAME);
    if(!$connection)
        exit("Error : ".mysqli_error($connection));

    //2-query
    $query = mysqli_query($connection,"INSERT INTO `users`(`username`, `password`, `email`, `address`,`phone`) VALUES ('$username', '$password', '$email', '$address', '$phone')");
    echo $query;
    if(mysqli_affected_rows($connection) >0)
    {
        //3- close
        mysqli_close($connection);
        return true;
    }
    //3- close
    mysqli_close($connection);
    return false;
}

function checkLogin()
{
	if(isset($_SESSION['username']))
		return true;
	else
		return false;
}

function logout()
{
	session_destroy();
}