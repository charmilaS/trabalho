<?php
include_once("../_db.php"); 
include_once("../header.php");  

	$id = $_GET['id'];
	// faz a seleção do dados na Tabela	
		$query = mysqli_query($connect, "SELECT * FROM users WHERE id = '$id' LIMIT 1");
		$result = mysqli_fetch_assoc($query);
		
		/*PDO 
		$stmt = $pdo_conn->prepare("SELECT * FROM posts where id=" . $_GET["id"]);
		$stmt->execute();
		$result = $stmt->fetchAll();
		*/

?>

        <div class="main-panel">
          <div class="content-wrapper">





            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> Usuarios
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
                    <form method="POST" action="users/editQuery.php"  class="form-sample">
					<input type="hidden" name="id" value="<?php echo $result['id']; ?>">
                      <p class="card-description">  </p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nome</label>
                            <div class="col-sm-9">
                              <input type="text" name = "name" value="<?php echo $result['name']; ?>" class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Contacto</label>
                            <div class="col-sm-9">
                              <input type="text" name = "contact" value="<?php echo $result['contact']; ?>" class="form-control" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">email</label>
							<input type="email" name = "email" value="<?php echo $result['email']; ?>"  class="form-control" />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">username</label>
                            <div class="col-sm-9">
                              <input  type = "text" class="form-control" value="<?php echo $result['username']; ?>" name ="username"  disabled />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Password</label>
                            <input type="text" class="form-control" value="<?php echo $result['password']; ?>" name ="password" />
                          </div>
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