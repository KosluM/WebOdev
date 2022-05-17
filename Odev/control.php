<?

$username = $_POST['email'];
$password = $_POST['password'];

if (isset($_POST['giris']) && !empty($username) && !empty($password))
{


	if ($username == "1@gmail.com" && $password == "1") {

		header("Location: hakkinda.html");
		
	} else {
		header("refresh:0.5;url=index.html");
		
	}
}
?>