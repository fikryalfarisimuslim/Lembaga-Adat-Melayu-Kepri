<?php
    if(isset($data["error"]) && count($data["error"]) > 0) {
?>
<div class="alert alert-danger" role="alert">
    <ul class="list-square">
        <?php
            foreach($data["error"] as $error) {
        ?>
        <li>
            <?php echo $error; ?>
        </li>
        <?php } ?>

    </ul>
</div>
<?php

    }else if(isset($data["success"])) {
?>

    <div class="alert alert-success">
        <?php echo $data["success"]; ?>
    </div>

<?php } ?>


				<!--Breadcrumb Section Start Here-->
				<div class="breadcrumb-section">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<h1>Kontak</h1>
								<ul class="breadcrumb">
									<li>
										<a href="">Laman Utama</a>
									</li>
									<li class="active">
										Kontak
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!--Breadcrumb Section End Here-->
				<div class="content-wrapper container" id="page-info">
					<div class="row">
						<div class="col-xs-12 col-sm-6 contact-form">
							<div class="col-xs-12" id="success"></div>
							<h2>Send us Message</h2>
							<form role="form" method="post" action="<?php echo POSITION_URL; ?>">
								<div class="row">
									<div class="form-group col-xs-12 col-sm-6">
										<label for="name">Nama<span>*</span></label>
										<input type="text" name="name" class="form-control" id="name">
									</div>
									<div class="form-group col-xs-12 col-sm-6">
										<label for="email">Email<span>*</span></label>
										<input type="email" name="email" class="form-control" id="email">
									</div>
								</div>
								<div class="form-group">
									<label for="website">Website<span>*</span></label>
									<input type="url" class="form-control" name="website" placeholder="http://" id="website" >
								</div>
								<div class="form-group">
									<label for="pwd">Isi</label>
									<textarea class="form-control" name="comment" id="comment"></textarea>
								</div>

								<button type="button" class="btn btn-default" id="submit">
									Submit
								</button>
							</form>
						</div>
						<div class="col-xs-12 col-sm-5 col-sm-offset-1 contact-address">
							<h2>Get in touch</h2>
							<address>
								<span> <strong>Address :</strong> <span>A-105, Sector-82,
										<br>
										Agra, 282001, India</span> </span>
								<span> <strong>E-Mail :</strong> <span><a href="mailto:contact@charity.com">contact@charity.com</a></span> </span>
								<span> <strong>Tel :</strong> <span><a href="tel:+17079217269">+1 123 456 7890</a></span> </span>
								<span> <strong>Fax :</strong> <span>+1 123 456 7890</span> </span>
							</address>
						</div>
					</div>
				</div>