<?php
session_start();

if (isset($_GET['logout']) && $_GET["logout"] === 'true') {
    $_SESSION['logged_in'] = false;
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
if ($_SESSION['logged_in'] === true) {
    echo "je bent ingelogd. " . '<a href="'. $_SERVER['PHP_SELF'] . '?logout=true"> Loguit </a>';
} else {
?>
<form action="<?php echo $_SERVER['PHP_SELF'] ; ?>" method="post">
    <input type="text" name="username" placeholder="username">
    <input type="password" name="password" placeholder="password">

    <button type="submit" name="submit">Go!</button>
</form>
<?php } ?>


</body>
</html>


<?php



if ($_SESSION['logged_in'] === true) {
    exit();
}

if (!isset($_POST['submit'])) {
    exit("<p>Welkom. login.</p>");
}

if (!isset($_POST['username'])) {
    echo 'Oeps er gaat iets fout';
}

if (!isset($_POST['password'])){
    echo 'oeps er gaat iets fout';
}

if (empty($_POST['username'])) {
    echo 'je bent vergeten username intevullen';
}

if (empty($_POST['password'])) {
    exit("oops, vul alles in.");
}

$username = $_POST['username'];
$password = $_POST['password'];



$users = [
  [
      "username" => "Joey",
      "password" => "1234"
  ],
  [
      "username" => "Hensley",
      "password" => "5678"
  ],
  [
      "username" => "Piet",
      "password" => "doetje123"
  ]
];


foreach ($users as $user) {
    if ($user['username'] === $username && $user['password'] === $password) {
        $_SESSION['logged_in'] = true;
        header("Location: ". $_SERVER['PHP_SELF']);
    }

}