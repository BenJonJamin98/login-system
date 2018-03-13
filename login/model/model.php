<?php
session_start();

function getConnection(){
    try{
       $conn = new PDO('mysql:host=localhost;dbname=u1655703', 'u1655703', '08may98');
    }
    catch (PDOException $exception) 
    {
        exit("Oh no, there was a problem" . $exception->getMessage());
    }
    return $conn;
};
function closeConnection($conn)
{
	$conn=null;
};

function userLogin($username, $password)
{
    $conn = getConnection();
    $query="SELECT * FROM pass WHERE username = :username AND password =: password";
    $stmt = $conn->prepare($query);
    $stmt->bindValue(':username',$username);
    $stmt->bindValue(':password',$password);
    $affected_row = $stmt->execute();
 
    closeConnection($conn);
    if($affected_row == 1){
		return true;
	}else{
	return false; 
    };
};

function getAllPatients()
{
	$conn = getConnection();
	$query = "SELECT * FROM patients";
	$resultset = $conn->query($query);
	$patients = $resultset->fetchAll();
	closeConnection($conn);
	return $patients;
};

function getPatientById($patientId)
{
	$conn = getConnection();
    $query = "SELECT * FROM patients WHERE patients.id = :id";
	$stmt = $conn->prepare($query);
	$stmt->bindValue(':id',$patientId);
	$stmt->execute();
	$patient=$stmt->fetch();
	closeConnection($conn);
	return $patient;
};


?>