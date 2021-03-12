<?php
ob_start();

use App\Controller\ItemController;


require __DIR__ . '/vendor/autoload.php';
$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : '';
$itemController = new ItemController();

?>

<<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="index.php?page=item-list"> Danh sach sp</a>
<a href="index.php?page=item-add"> Them san pham</a>
<form method="post">
    <input type="search" placeholder="Nhập ten hang hoa" aria-label="Search"
           name="search">
    <button class="btn btn-outline-success" type="submit">Search</button>
</form>

<?php
switch ($page) {
    case 'item-infor':
        $id = $_REQUEST['id'];
        $itemController->itemList();
        break;

    case 'item-add':
        $itemController->itemAdd();
        break;
    case 'item-update':
        $id =$_REQUEST['id'];
        $itemController->itemUpdate($id);
        break;

    case 'item-delete':
        $id = $_REQUEST['id'];
        $itemController->delete($id);
        break;

    default :
        $itemController->itemList();
        break;
}
ob_end_flush();
?>
</body>
</html>


