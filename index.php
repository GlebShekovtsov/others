<?php>
    require_once 'include/header.php';
    
?>
    <div class="wrapper">
        <div class="container">
            <form action="include/function.php" class="main-form" method="POST">
                <div class="main-form__form-input">
                    <span class="span-title">Введите свою фамилию</span>
                    <input type="text" class="input-form" name="name1" placeholder="Иванов" required >
                </div>
                <div class="main-form__form-input">
                    <span class="span-title">Введите свое имя</span>
                    <input type="text" class="input-form" name="name2" placeholder="Иван" required >
                </div>
                <div class="main-form__form-input">
                    <span class="span-title">Введите свое отчество</span>
                    <input type="text" class="input-form" name="name3" placeholder="Иванович" required >
                </div>
                <div class="main-form__form-input">
                    <input type="submit" name="save" value="Отправить" class="saveBtn">
                </div>
                <div class="main-form__form-input">
                    <a href="/views.php" class="link_views">Просмотреть список</a>
              </div>
            </form>
        </div>
    </div>
<?php>
    require_once 'include/footer.php';
?>