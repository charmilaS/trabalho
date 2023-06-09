<?php
include_once("../_db.php");
include_once("../header.php"); ?>

<div class="main-panel">
          <div class="content-wrapper">





            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> Dashboard
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>

               
                </ul>
              </nav>
            </div>
           
			
			<div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Lista de Produtos</h4>
                    <a href="produtos/add.php"><button class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">Add Produtos</button></a>
                    <table class="table table-bordered" id="myTable">
                      <thead>
                        <tr>
                          <th> # </th>
                          <th> Codigo </th>
                          <th> Nome </th>
                          <th> Preco </th>
                          <th> Acccao</th>
                        </tr>
                      </thead>

                      <?php

                      $data = mysqli_query($connect, "SELECT * FROM produtos");

                      while($value = mysqli_fetch_array($data)) {
                        ?>
                      <tbody>
                        <tr class="table-info">
                          <td> <?php echo $value ['id'] ?> </td>
                          <td> <?php echo $value ['cod'] ?> </td>
                          <td> <?php echo $value ['name'] ?></td>
                          <td> <?php echo $value ['price'] ?> </td>
                          <td>
							<a class="btn btn-sm btn-info " href="produtos/edit.php?id=<?php echo $value['id']; ?>">Editar </a> - 
							<a class="btn btn-sm btn-danger " href="produtos/deleteQuery.php?id=<?php echo $value['id']; ?>" onclick="return confirma()"><i class="fas fa-trash"></i> Apagar</a>
						  </td>
                   
                          
                        </tr>
                        <?php    }?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
			







		 </div>
			

<?php
include_once("../footer.php");  ?>