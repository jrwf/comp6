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
//require './vendor/autoload.php';
$loader = new Nette\Loaders\RobotLoader();
$loader->addDirectory(__DIR__ . './src');
//    $loader->addDirectory(__DIR__ . '/app');
$loader->addDirectory(__DIR__ . '/libs');
$loader->setTempDirectory(__DIR__ . '/temp');
$loader->setAutoRefresh(true);
$loader->register();
//    $home = new Wolf\Comp6\HomepageController();
//    var_dump($home);
//    echo $home->index();
//echo 'test';
$contact = new jrwf\ContactController();
var_dump($contact);
echo $contact->index();

$user = new jrwf\User\UserController();
var_dump($user);
echo $user->show();

$login = new jrwf\User\LoginController();
var_dump($login);
echo $login->index();

$gallery = new jrwf\GalleryController();
var_dump($gallery);
echo $gallery->index();

$http = new GuzzleHttp\Client();
$response = $http->request('GET', 'https://jw.cz');
$content = $response->getBody()->getContents();
echo $content;

$email = new PHPMailer\PHPMailer\PHPMailer();
try {
    $email->setFrom('jiri.wolf@jw.cz', 'Jiri Wolf');
} catch (\PHPMailer\PHPMailer\Exception $e) {
}
?>
</body>
</html>