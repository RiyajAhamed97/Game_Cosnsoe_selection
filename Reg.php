
<?php
require __DIR__ . '/consumer/users/users.php';

$user = [
    'id' => '',
    'name' => '',
    'username' => '',
    'email' => '',
    'phone' => '',
    'Password' => ''
];

$errors = [
    'name' => "",
    'username' => "",
    'email' => "",
    'phone' => "",
    'Password' => ""
];
$isValid = true;


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = array_merge($user, $_POST);

    $isValid = validateUser($user, $errors);

    if ($isValid) {
        $user = createUser($_POST);

        uploadImage($_FILES['picture'], $user);

        header("Location: index.php");
    }
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Game Console</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/style.css" rel="Stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>

<body>
	<div class="container">
	<div  class="header_fixed">
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
			<ul class="navbar-nav">
				<li class="nav-item active"><a class="nav-link" href="index.php">Home</a>
				</li>
			
				<li class="nav-item"><a class="nav-link disabled" href="#">Disabled</a>
				</li>
			</ul>
		</nav>

</div
	


<?php include 'consumer/_form.php' ?>

</body>

</html>