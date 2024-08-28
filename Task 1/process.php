<?php
session_start();

// Initialize the data array if not already set
if (!isset($_SESSION['data'])) {
    $_SESSION['data'] = [];
}

class Item {
    public $id;
    public $name;

    public function __construct($id, $name) {
        $this->id = $id;
        $this->name = $name;
    }
}
//$_Server is an array containing information about headers request scripts path and more
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //$_Post An associative array of variables passed to the current script via the HTTP POST method.
    $action = $_POST['action'];

    switch ($action) {
        case 'create':
            $name = $_POST['name'];
            //increasing the id by the local session
            $id = count($_SESSION['data']) + 1;
            $item = new Item($id, $name);
            $_SESSION['data'][] = $item;
            echo "Item created successfully! <a href='index.php'>Go back</a>";
            break;

        case 'read':
            echo "<h2>Items:</h2>";
            if (empty($_SESSION['data'])) {
                echo "No items found.";
            } else {
                foreach ($_SESSION['data'] as $item) {
                    echo "ID: $item->id, Name: $item->name<br>";
                }
            }
            echo "<br><a href='index.php'>Go back</a>";
            break;

        case 'update':
            $id = $_POST['id'];
            $name = $_POST['name'];
            foreach ($_SESSION['data'] as $item) {
                if ($item->id == $id) {
                    $item->name = $name;
                    echo "Item updated successfully! <a href='index.php'>Go back</a>";
                    break;
                }
            }
            break;

        case 'delete':
            $id = $_POST['id'];
            foreach ($_SESSION['data'] as $key => $item) {
                if ($item->id == $id) {
                    unset($_SESSION['data'][$key]);
                    echo "Item deleted successfully! <a href='index.php'>Go back</a>";
                    break;
                }
            }
            break;
    }
}
?>
