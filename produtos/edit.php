<?php
include_once("../_db.php"); 
include_once("../header.php");  

	$id = $_GET['id'];
	// faz a seleção do dados na Tabela	
		$query = mysqli_query($connect, "SELECT * FROM produtos WHERE id = '$id' LIMIT 1");
		$result = mysqli_fetch_assoc($query);
		
	

?>

        <div class="main-panel">
          <div class="content-wrapper">





            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span>   Produtos
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>
           
			
            <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <form method="POST" action="produtos/editQuery.php"  class="form-sample">
					<input type="hidden" name="id" value="<?php echo $result['id']; ?>">
                      <p class="card-description">  </p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Codigo</label>
                            <div class="col-sm-9">
                              <input type="text" name = "cod" value="<?php echo $result['cod']; ?>" class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nome</label>
                            <div class="col-sm-9">
                              <input type="text" name = "name" value="<?php echo $result['name']; ?>" class="form-control" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Preco</label>
							<input type="number" name = "price" value="<?php echo $result['price']; ?>"  class="form-control" />
                          </div>
                        </div>
                        <div class="col-md-6">
                        
                        </div>
                      </div>
                     
					  <button type="submit" class="btn btn-sm btn-primary"> Editar</button>



                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
</div>







		 </div>
			
           
					







		

<?php
include_once("../footer.php");  ?>