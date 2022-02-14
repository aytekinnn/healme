<?php 
include 'header.php';
?>
	<!--//header-->
	<!--quick links-->
	<div class="quickLinks-wrap js-quickLinks-wrap-d d-none d-lg-flex">
		<div class="quickLinks js-quickLinks">
			<div class="container">
				<div class="row no-gutters">
					<div class="col">
						<a href="#" class="link">
							<i class="icon-placeholder"></i><span>Location</span></a>
						<div class="link-drop p-0">
							<div id="googleMapDrop" class="google-map"></div>
						</div>
					</div>
					<div class="col">
						<a href="#" class="link">
							<i class="icon-clock"></i><span>Working Time</span>
						</a>
						<div class="link-drop">
							<h5 class="link-drop-title"><i class="icon-clock"></i>Working Time</h5>
							<table class="row-table">
								<tr>
									<td><i>Mon-Thu</i></td>
									<td>08:00 - 20:00</td>
								</tr>
								<tr>
									<td><i>Friday</i></td>
									<td> 07:00 - 22:00</td>
								</tr>
								<tr>
									<td><i>Saturday</i></td>
									<td>08:00 - 18:00</td>
								</tr>
								<tr>
									<td><i>Sunday</i></td>
									<td>Closed</td>
								</tr>
							</table>
						</div>
					</div>
					<div class="col">
						<a href="#" class="link">
							<i class="icon-pencil-writing"></i><span>Request Form</span>
						</a>
						<div class="link-drop">
							<h5 class="link-drop-title"><i class="icon-pencil-writing"></i>Request Form</h5>
							<form id="requestForm" method="post" novalidate>
								<div class="successform">
									<p>Your message was sent successfully!</p>
								</div>
								<div class="errorform">
									<p>Something went wrong, try refreshing and submitting the form again.</p>
								</div>
								<div class="input-group">
									<span>
											<i class="icon-user"></i>
										</span>
									<input name="requestname" type="text" class="form-control" placeholder="Your Name" />
								</div>
								<div class="row row-sm-space mt-1">
									<div class="col">
										<div class="input-group">
											<span>
													<i class="icon-email2"></i>
												</span>
											<input name="requestemail" type="text" class="form-control" placeholder="Your Email" />
										</div>
									</div>
									<div class="col">
										<div class="input-group">
											<span>
													<i class="icon-smartphone"></i>
												</span>
											<input name="requestphone" type="text" class="form-control" placeholder="Your Phone" />
										</div>
									</div>
								</div>
								<div class="selectWrapper input-group mt-1">
									<span>
											<i class="icon-tooth"></i>
										</span>
									<select name="requestservice" class="form-control">
										<option selected="selected" disabled="disabled">Select Service</option>
										<option value="Cosmetic Dentistry">Cosmetic Dentistry</option>
										<option value="General Dentistry">General Dentistry</option>
										<option value="Orthodontics">Orthodontics</option>
										<option value="Children`s Dentistry">Children`s Dentistry</option>
										<option value="Dental Implants">Dental Implants</option>
										<option value="Dental Emergency">Dental Emergency</option>
									</select>
								</div>
								<div class="row row-sm-space mt-1">
									<div class="col-sm-6">
										<div class="input-group flex-nowrap">
											<span>
														<i class="icon-calendar2"></i>
													</span>
											<div class="datepicker-wrap">
												<input name="requestdate" type="text" class="form-control datetimepicker" placeholder="Date" readonly>
											</div>
										</div>
									</div>
									<div class="col-sm-6 mt-1 mt-sm-0">
										<div class="input-group flex-nowrap">
											<span>
															<i class="icon-clock"></i>
													</span>
											<div class="datepicker-wrap">
												<input name="requesttime" type="text" class="form-control timepicker" placeholder="Time" readonly>
											</div>
										</div>
									</div>
								</div>
								<div class="text-right mt-2">
									<button type="submit" class="btn btn-sm btn-hover-fill">Request</button>
								</div>
							</form>
						</div>
					</div>
					<div class="col">
						<a href="#" class="link">
							<i class="icon-calendar"></i><span>Doctors Timetable</span>
						</a>
						<div class="link-drop">
							<h5 class="link-drop-title"><i class="icon-calendar"></i>Doctors Timetable</h5>
							<p>This simply works as a guide and helps you to connect with dentists of your choice. Please confirm the doctor’s availability before leaving your premises.</p>
							<p class="text-right"><a href="schedule.html" class="btn btn-sm btn-hover-fill">Details</a></p>
						</div>
					</div>
					<div class="col">
						<a href="#" class="link">
							<i class="icon-price-tag"></i><span>Calculator</span>
						</a>
						<div class="link-drop">
							<h5 class="link-drop-title"><i class="icon-price-tag"></i>Quick Pricing</h5>
							<table class="row-table">
								<tr>
									<td>Initial Consultation</td>
									<td>$10</td>
								</tr>
								<tr>
									<td>Dental check-up</td>
									<td>$15</td>
								</tr>
								<tr>
									<td>Routine Exam (no xrays)</td>
									<td>$50</td>
								</tr>
								<tr>
									<td>Simple Removal of a tooth</td>
									<td>$122</td>
								</tr>
								<tr>
									<td>Teeth cleaning</td>
									<td>$50 - $75</td>
								</tr>
								<tr>
									<td>X-ray image</td>
									<td>$10</td>
								</tr>
							</table>
							<p class="text-right mt-15"><a href="prices.html" class="btn btn-sm btn-hover-fill">Calculator</a><a href="prices.html" class="btn btn-sm btn-hover-fill">Details</a></p>
						</div>
					</div>
					<div class="col">
						<a href="#" class="link">
							<i class="icon-emergency-call"></i><span>Emergency Case</span></a>
						<div class="link-drop">
							<h5 class="link-drop-title"><i class="icon-emergency-call"></i>Emergency Case</h5>
							<p>Emergency dental care may be needed if you have had a blow to the face, lost a filling, or cracked a tooth. </p>
							<ul class="icn-list">
								<li><i class="icon-telephone"></i><span class="phone">1-800-267-0000<br>1-800-267-0001</span>
								</li>
								<li><i class="icon-black-envelope"></i><a href="mailto:info@besthotel-email.com">info@besthotel-email.com</a></li>
							</ul>
							<p class="text-right mt-2"><a href="contact.html" class="btn btn-sm btn-hover-fill">Our Contacts</a></p>
						</div>
					</div>
					<div class="col col-close"><a href="#" class="js-quickLinks-close"><i class="icon-top" data-toggle="tooltip" data-placement="top" title="Close panel"></i></a></div>
				</div>
			</div>
			<div class="quickLinks-open js-quickLinks-open"><span data-toggle="tooltip" data-placement="left" title="Open panel">+</span></div>
		</div>
	</div>
	<!--//quick links-->
	<div class="page-content">
		<!--section-->
		<div class="section mt-0">
			<div class="breadcrumbs-wrap">
				<div class="container">
					<div class="breadcrumbs">
						<a href="index.html">Home</a>
						<span>Our Specialists</span>
					</div>
				</div>
			</div>
		</div>
		<!--//section-->
		<!--section-->
		<div class="section page-content-first">
			<div class="container">
				<div class="text-center mb-2  mb-md-3 mb-lg-4">
					<div class="h-sub theme-color">Meet the Team</div>
					<h1>Our Specialists</h1>
					<div class="h-decor"></div>
				</div>
			</div>
			<div class="container">
				<div class="text-center mb-2 mb-md-3">
					<p>At Medin Dental Clinic we strive to give you the best possible treatment and experience to help<br>you achieve your dental goals</p>
				</div>
				<div class="filters-by-category mb-2">
					<ul class="option-set justify-content-center" data-option-key="filter">
						<li><a href="#filter" data-option-value="*" class="selected">All</a></li>
						<li><a href="#filter" data-option-value=".category1">Endodontics</a></li>
						<li><a href="#filter" data-option-value=".category2">General dentistry</a></li>
						<li><a href="#filter" data-option-value=".category3">Oral medicine</a></li>
						<li><a href="#filter" data-option-value=".category4">Oral surgery</a></li>
						<li><a href="#filter" data-option-value=".category5">Orthodontics</a></li>
						<li><a href="#filter" data-option-value=".category6">Periodontics</a></li>
						<li><a href="#filter" data-option-value=".category7">Prosthodontics</a></li>
					</ul>
				</div>
				<div class="gallery-specialist gallery-isotope" id="gallery-specialist">
					<div class="gallery-item category1">
						<div class="doctor-box text-center">
							<div class="doctor-box-photo">
								<a href="doctor-page.html"><img src="images/content/doctor-01.jpg" class="img-fluid" alt=""></a>
							</div>
							<h5 class="doctor-box-name"><a href="doctor-page.html">Dr. Frank Bigham</a></h5>
							<div class="doctor-box-position">Associate Dentist</div>
							<div class="doctor-box-text">
								<p>Dr. Frank Bigham has been in practice for almost 20 years graduating BDS from the University of Manchester, UK in 1997</p>
							</div>
							<div class="doctor-box-bottom">
								<div class="doctor-box-phone"><i class="icon-telephone"></i><a href="tel:+1-248-715-8767">1-248-715-8767</a></div>
								<div class="doctor-box-social">
									<a href="https://www.facebook.com/" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
									<a href="mailto:info@dentco.net" class="hovicon"><i class="icon-black-envelope"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="gallery-item category2 category7">
						<div class="doctor-box text-center">
							<div class="doctor-box-photo">
								<a href="doctor-page.html"><img src="images/content/doctor-02.jpg" class="img-fluid" alt=""></a>
							</div>
							<h5 class="doctor-box-name"><a href="doctor-page.html">Dr. Pamela Knaack</a></h5>
							<div class="doctor-box-position">Dental Hygienist</div>
							<div class="doctor-box-text">
								<p>Having graduated in 1990 with an R.D.H, Pamela worked in and shared ownership of a very successful dental practice.</p>
							</div>
							<div class="doctor-box-bottom">
								<div class="doctor-box-phone"><i class="icon-telephone"></i><a href="tel:+1-816-941-7259">1-816-941-7259</a></div>
								<div class="doctor-box-social">
									<a href="https://www.facebook.com/" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
									<a href="mailto:info@dentco.net" class="hovicon"><i class="icon-black-envelope"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="gallery-item category3 category6">
						<div class="doctor-box text-center">
							<div class="doctor-box-photo">
								<a href="doctor-page.html"><img src="images/content/doctor-03.jpg" class="img-fluid" alt=""></a>
							</div>
							<h5 class="doctor-box-name"><a href="doctor-page.html">Dr. Gerald Gleaves</a></h5>
							<div class="doctor-box-position">General Dentist</div>
							<div class="doctor-box-text">
								<p>Gerald graduated from the University of Adelaide in 2004 being awarded the Dental School Dean’s Award in his final clinical year </p>
							</div>
							<div class="doctor-box-bottom">
								<div class="doctor-box-phone"><i class="icon-telephone"></i><a href="tel:+1-262-374-3970">1-262-374-3970</a></div>
								<div class="doctor-box-social">
									<a href="https://www.facebook.com/" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
									<a href="mailto:info@dentco.net" class="hovicon"><i class="icon-black-envelope"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="gallery-item category5 category7">
						<div class="doctor-box text-center">
							<div class="doctor-box-photo">
								<a href="doctor-page.html"><img src="images/content/doctor-04.jpg" class="img-fluid" alt=""></a>
							</div>
							<h5 class="doctor-box-name"><a href="doctor-page.html">Dr. Lillian Sparks</a></h5>
							<div class="doctor-box-position">Prosthodontist</div>
							<div class="doctor-box-text">
								<p>In 2015 Dr Sparks was accepted as a Fellow in the International Congress of Oral Implantologists (ICOI)</p>
							</div>
							<div class="doctor-box-bottom">
								<div class="doctor-box-phone"><i class="icon-telephone"></i><a href="tel:+1-281-341-4654">1-281-341-4654</a></div>
								<div class="doctor-box-social">
									<a href="https://www.facebook.com/" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
									<a href="mailto:info@dentco.net" class="hovicon"><i class="icon-black-envelope"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="gallery-item category1 category2">
						<div class="doctor-box text-center">
							<div class="doctor-box-photo">
								<a href="doctor-page.html"><img src="images/content/doctor-05.jpg" class="img-fluid" alt=""></a>
							</div>
							<h5 class="doctor-box-name"><a href="doctor-page.html">Dr. Dennis Dulaney</a></h5>
							<div class="doctor-box-position">Orthodontist</div>
							<div class="doctor-box-text">
								<p>Dennis completed his Bachelor of Oral Health from the University of Sydney in 2012 and was awarded in his final year.</p>
							</div>
							<div class="doctor-box-bottom">
								<div class="doctor-box-phone"><i class="icon-telephone"></i><a href="tel:+1-608-253-2915">1-608-253-2915</a></div>
								<div class="doctor-box-social">
									<a href="https://www.facebook.com/" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
									<a href="mailto:info@dentco.net" class="hovicon"><i class="icon-black-envelope"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="gallery-item category3 category4">
						<div class="doctor-box text-center">
							<div class="doctor-box-photo">
								<a href="doctor-page.html"><img src="images/content/doctor-06.jpg" class="img-fluid" alt=""></a>
							</div>
							<h5 class="doctor-box-name"><a href="doctor-page.html">Dr. Jennifer Foster</a></h5>
							<div class="doctor-box-position">Oral Health Therapist</div>
							<div class="doctor-box-text">
								<p>Dr. Jennifer Foster has been in practice for almost 20 years graduating BDS from the University of Manchester, UK in 1997</p>
							</div>
							<div class="doctor-box-bottom">
								<div class="doctor-box-phone"><i class="icon-telephone"></i><a href="tel:+1-219-756-6567">1-219-756-6567</a></div>
								<div class="doctor-box-social">
									<a href="https://www.facebook.com/" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
									<a href="mailto:info@dentco.net" class="hovicon"><i class="icon-black-envelope"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="gallery-item category2 category6">
						<div class="doctor-box text-center">
							<div class="doctor-box-photo">
								<a href="doctor-page.html"><img src="images/content/doctor-07.jpg" class="img-fluid" alt=""></a>
							</div>
							<h5 class="doctor-box-name"><a href="doctor-page.html">Dr. William Gardner</a></h5>
							<div class="doctor-box-position">Implantologist</div>
							<div class="doctor-box-text">
								<p>Dr William Gardner completed her undergraduate dental degree at the University of Western Australia in 2003</p>
							</div>
							<div class="doctor-box-bottom">
								<div class="doctor-box-phone"><i class="icon-telephone"></i><a href="tel:+1-212-857-8103">1-212-857-8103</a></div>
								<div class="doctor-box-social">
									<a href="https://www.facebook.com/" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
									<a href="mailto:info@dentco.net" class="hovicon"><i class="icon-black-envelope"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="gallery-item category3 category7">
						<div class="doctor-box text-center">
							<div class="doctor-box-photo">
								<a href="doctor-page.html"><img src="images/content/doctor-08.jpg" class="img-fluid" alt=""></a>
							</div>
							<h5 class="doctor-box-name"><a href="doctor-page.html">Dr. Mayra Hastings</a></h5>
							<div class="doctor-box-position">Orthodontist</div>
							<div class="doctor-box-text">
								<p>With years of experience she prides herself on providing minimally invasive periodontal care for patients</p>
							</div>
							<div class="doctor-box-bottom">
								<div class="doctor-box-phone"><i class="icon-telephone"></i><a href="tel:+1-816-941-7259">1-816-941-7259</a></div>
								<div class="doctor-box-social">
									<a href="https://www.facebook.com/" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
									<a href="mailto:info@dentco.net" class="hovicon"><i class="icon-black-envelope"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="gallery-item category1 category5">
						<div class="doctor-box text-center">
							<div class="doctor-box-photo">
								<a href="doctor-page.html"><img src="images/content/doctor-09.jpg" class="img-fluid" alt=""></a>
							</div>
							<h5 class="doctor-box-name"><a href="doctor-page.html">Dr. Billy Logan</a></h5>
							<div class="doctor-box-position">Cosmetic Dentist</div>
							<div class="doctor-box-text">
								<p>Working over the past 18 years in both private practice and teaching at the universities inspired an interest in Oral Medicine </p>
							</div>
							<div class="doctor-box-bottom">
								<div class="doctor-box-phone"><i class="icon-telephone"></i><a href="tel:+1-262-374-3970">1-262-374-3970</a></div>
								<div class="doctor-box-social">
									<a href="https://www.facebook.com/" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
									<a href="mailto:info@dentco.net" class="hovicon"><i class="icon-black-envelope"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--//section-->
		<!--section-->
		<div class="section">
			<div class="container">
				<div class="title-wrap text-center">
					<h2 class="h1">Specialist Dental Practice</h2>
					<div class="h-decor"></div>
				</div>
				<div class="text-center">
					<p class="max-900">Our dentists are committed to improving your general dental health and restoring your smile. We are a specialist dental practice also offering the best and most affordable dental implants for your oral health and rehabilitation. Make a FREE dental implants consultation and assessment for a personal treatment plan and meet our friendly and professional staff.</p>
					<a href="#" class="btn mt-3" data-toggle="modal" data-target="#modalBookingForm"><i class="icon-right-arrow"></i><span>Booking a visit</span><i class="icon-right-arrow"></i></a>
				</div>
			</div>
		</div>
		<!--//section-->
	</div>
	<?php include 'footer.php' ?>