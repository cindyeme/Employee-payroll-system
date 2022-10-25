<?php include('db_connect.php') ?>
<style>
   #card{
		padding: 1.5rem 3rem;
		text-align: center;
		border-radius: 8px;
		color: #fff;
	 }
	 .card1{
		/* background: #2f1e4a; */
		background: #554e6b;
	 }
	 .card2{
		background: #2f1e4a;
	 }
	 .ico{
		margin-bottom: 20px;
		font-size: 30px;
	 }
	 h2.title, h1{
		font-weight: 700;
	 }
	 h2.title{
		margin-top: 25px;
	 }
</style>

<div class="container-fluid mt-5">

	<div class="row">
		<div class="col-lg-12">
			
		</div>
	</div>

	<div class="row mt-3 ml-3 mr-3">
			<div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                    <?php echo "Welcome back ". $_SESSION['login_name']."!"  ?>
                                        
                    </div>
                    
                </div>
            </div>
					<div class="mt-5 ml-3 col-lg-4 col-md-6 card1" id="card">
						<!-- <span class='icon-field ico'><i class="fa fa-user-tie"></i></span> -->
						
						<h1>
						<?php 
							$qry = mysqli_query($conn, "SELECT * FROM employee") or die(mysql_error());
	 						$nrows = mysqli_num_rows($qry);
	 						echo $nrows;
						 ?>
						 </h1>
						 <h2 class="text-white title">Employees</h2>
					</div>
					<div class="mt-5 ml-3 col-lg-4 col-md-6 card2" id="card">
						<!-- <span class='icon-field ico'><i class="fa fa-user-tie"></i></span> -->
						
						<h1>
						<?php 
							$qry = mysqli_query($conn, "SELECT * FROM department") or die(mysql_error());
	 						$nrows = mysqli_num_rows($qry);
	 						echo $nrows;
						 ?>
						 </h1>
						 <h2 class="text-white title">Departments</h2>
					</div>
	</div>

</div>
<script>
	
</script>