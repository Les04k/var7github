<div class="container">
    <h1 class="text-center">Ваши аренды</h1>
</div>
<div class="container">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Велосипед</th>
      <th scope="col">ваше ФИО</th>
    </tr>
  </thead>
  <tbody>
   
        <?php
        foreach($result as $row){
            echo '
             <tr>
      <th scope="row">'.$row['id_order'].'</th>
      <td>'.$row['name'].'</td>
      <td>'.$row['fio'].'</td>
        </tr>
            ';
        }
        ?>

  
  </tbody>
</table>
</div>