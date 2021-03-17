<?php
    require_once 'include/header.php';
?>

<div class="wrapper">
    <div class="container">
        <div class="row">
          <h1 class="title">Ваши записи</h1>
          <div class="main-list">
               <?php showUsers(); ?>
          </div>
            <div class="main-form__form-input">
                    <a href="/index.php" class="link_views">Вернуться обратно</a>
            </div>
        </div>
    </div>
</div>

  
  
  
<?php
    require_once 'include/footer.php';
?>