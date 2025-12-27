<div class="container">
    <form action="" method="post">
           <h1>Вы хотите арендовать</h1>
    <?php 
        foreach ($result as $row){
           echo 'Велосипед №' .$row['id_drive'];
           echo'<br>';
            echo   $id_user = $_SESSION['id_user'];
        }

    ?> 
    <button type="submit">арендовать</button>
    </form>

</div>