<?php 
    include './partials/header.php';
    
 ?>

<div class="site-main-container">
			
			<!-- Start contact-page Area -->
			<section class="contact-page-area pt-50 pb-120">
				<div class="container">
					<div class="row contact-wrap">
						<div class="col-lg-3 d-flex flex-column address-wrap">
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-home"></span>
								</div>
								<div class="contact-details">
									<h5>Dakar Medina, ESP</h5>
									<p>
										Université Cheick Anta Diop
									</p>
								</div>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-phone-handset"></span>
								</div>
								<div class="contact-details">
									<h5>77 842 28 10</h5>
									<p>Du lundi au vendredi de 9h à 18h</p>
								</div>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-envelope"></span>
								</div>
								<div class="contact-details">
									<h5>contact@sitenews.com</h5>
									<p>Envoyez nous votre requête</p>
								</div>
							</div>
						</div>
						<div class="col-lg-9">
							<form class="form-area contact-form text-right" id="myForm" action="#" method="post">
								<div class="row">
									<div class="col-lg-6">
										<input name="name" placeholder="Entrez votre nom" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Entrez votre nom'" class="common-input mb-20 form-control" type="text">
										
										<input name="email" placeholder="Votre adresse mail" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Votre adresse mail'" class="common-input mb-20 form-control" required="" type="email">
										<input name="subject" placeholder="Entrez l'objet de votre mail" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter subject'" class="common-input mb-20 form-control" type="text">
									</div>
									<div class="col-lg-6">
										<textarea class="common-textarea form-control" name="message" placeholder="Enter Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Votre message'" required=""></textarea>
									</div>
									<div class="col-lg-12">
										<div class="alert-msg" style="text-align: left;"></div>
										<button class="primary-btn primary alert-btn" style="float: right;">Envoyer</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>
			<!-- End contact-page Area -->
		</div>

        <?php include './partials/footer.php'; ?>

       