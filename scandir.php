<?
	if(!isset($_FILES["photo"]["tmp_name"])){
	$mas = scandir("files",1);
	foreach($mas as $file){
		echo $file."<br>";
	}
}
echo "string";
print_r ($sumfile = count ($mas)- 2);


for ($i=0; $i <= $sumfile; $i++){
	Echo 
	'  <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
              <a href="public/images/6.jpg" target="_blank">
                <img src="public/images/6.jpg" alt="Фото автомобиля" width="100%" height="225" background="#55595c" color="#eceeef" class="card-img-top" text="Thumbnail">
              </a>
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>



	';
}