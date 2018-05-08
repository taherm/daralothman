@extends('layouts.master')
@section('content')

<br><br>
				<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
				<div class="container">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27821.97628056004!2d48.00309303955079!3d29.348408500000012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3fcf9c954bc134bf%3A0xd61dc71d2af95114!2sDar+AlOthman!5e0!3m2!1sen!2skw!4v1525588741096" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>

				<div class="container">

					<div class="row">
						<div class="col-lg-6">

							<div class="alert alert-success d-none mt-4" id="contactSuccess">
								<strong>Success!</strong> Your message has been sent to us.
							</div>

							<div class="alert alert-danger d-none mt-4" id="contactError">
								<strong>Error!</strong> There was an error sending your message.
								<span class="text-1 mt-2 d-block" id="mailErrorMessage"></span>
							</div>

						
							<form id="contactForm" action="" method="POST">
								<div class="form-row">
									<div class="form-group col-lg-6">
										<label>أسمك الكريم (مطلوب)</label>
										<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
									</div>
									<div class="form-group col-lg-6">
										<label>بريدك الإلكتروني (مطلوب)</label>
										<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<label>العنوان</label>
										<input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<label>رسالتك</label>
										<textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" id="message" required></textarea>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col text-center">
										<input type="submit" style="background-color:goldenrod;color:black;border:black;" value="إرسال" class="btn btn-primary btn-lg" data-loading-text="Loading...">
									</div>
								</div>
							</form>
						</div>
						<div class="col-lg-6 text-center">
						<h2 class="mb-3 mt-2"><strong>للتواصل</strong></h2>
						<br>
						<h2 class="mb-3 mt-2"><p>الكويت , الشعب، ق ٤، ش ٤٠، م ٢٦</p></h2>
							<br>
							<h2 class="mb-3 mt-2">	<p> :تلفون22 654254 – 22 654 054 </p></h2>
							<br>
							<h2 class="mb-3 mt-2">	<p> الخط الساخن :94458655</p></h2>
							<br>
							<h2 class="mb-3 mt-2">	<p> فاكس :22 654354</p></h2>
							
						</div>

					</div>

				</div>

			@endsection

		