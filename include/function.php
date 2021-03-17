<?php
require_once 'db.php';

?>
<?php
function addUser()
{
    global $connection;
    if(isset($_POST['save']))
    {
        $name1 = $_POST['name1'];
        $name2 = $_POST['name2'];
        $name3 = $_POST['name3'];
        $query ="INSERT INTO users (id, name1, name2,name3) VALUES(NULL, '$name1', '$name2', '$name3')";
        $result = mysqli_query($connection,$query); // обработчик скрипта
        if (!$result)
        {
            die("Ошибка в добавлении данных" . mysqli_error($connection));
        }
        else
        {
         header("Location: ../index.php");    
        }
    }
    
}
addUser();
//функция вывода из БД
function showUsers()
{
    global $connection;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection,$query);
    while($row = mysqli_fetch_object($result))
    {
      
        echo "<h1 class='title'>{$row -> name1}</h1>";
        echo "<h1 class='title'>{$row -> name2}</h1>";
        echo "<h1 class='title'>{$row -> name3}</h1>";
        
    }
}
?>