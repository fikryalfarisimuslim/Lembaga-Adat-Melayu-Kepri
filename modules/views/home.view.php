


<!-- Latest News Section Start Here -->
				<section class="latest-news ">
					<div class="container anim-section">
						<div class="row">
							<div class="col-xs-12">
								<header class="page-header section-header clearfix">
									<h2><strong>Berita Terbaru</strong></h2>
								</header>

								<div class="article-list row">
								<?php
								foreach($data["artikel"] as $artikel) {
								?>
									<div class="items zoom col-xs-12 col-sm-4">
										<a href="#" class="img-thumb">
											<figure>
											<img src="public/images/artikel/<?php echo $artikel->images; ?>" alt="">
											</figure>
											</a>
										<h3><?php echo $artikel->judul; ?></h3>
										<span class="date"><?php echo $artikel->waktu; ?> - <?php echo date("d/m/Y", strtotime($artikel->tanggal)); ?></span><span class="posted-in">Posted In : category</span>
										<p>
											<?php echo substr(strip_tags($artikel->isi), 0,250); ?>
										</p>
										<a href="<?php echo SITE_URL; ?>?page=Artikel&&action=detail&&id=<?php echo $artikel->id_artikel; ?>" class="btn btn-default">Baca Selanjutnya</a>
									</div>
								<?php
								}
								?>

								</div>
							</div>
						</div>
					</div>
				</section>
	<!-- Latest News Section End Here -->
