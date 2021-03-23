<?php

$sql = "SELECT Id, Image, Title FROM product";
$result = mysqli_query($conn, $sql);

?>

<!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Portfólio</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
								<?php
									while($row = mysqli_fetch_assoc($result)):
								?>
								
									<div class="col-sm-4 portfolio-item">
											<a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
													<div class="caption">
															<div class="caption-content">
																	<i class="fa fa-search-plus fa-3x"></i>
															</div>
													</div>
													<img src="img/portfolio/<?= $row["Image"] ?>" class="img-responsive" alt="<?= $row["Title"] ?>">
											</a>
									</div>
									
								<?php
									endwhile;
								?>
            </div>
        </div>
    </section>