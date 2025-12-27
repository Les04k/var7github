<div class="container">
       <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
  <?php 
  foreach($result as $row){
    echo '
            <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">'.$row['name'].'</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">₽'.$row['price'].'<small class="text-body-secondary fw-light">/час</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Тип велосипеда: '.$row['name'].'</li>
              <li>Возрастная категорий: '.$row['name'].'</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-outline-primary">Арендовать</button>
          </div>
        </div>
      </div>
    ';
  }
  ?>
    </div>

</div>