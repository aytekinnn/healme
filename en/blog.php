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
						<span>Blog Posts</span>
					</div>
				</div>
			</div>
		</div>
		<!--//section-->
		<!--section-->
		<div class="section page-content-first">
			<div class="container">
				<div class="text-center mb-2  mb-md-3 mb-lg-4">
					<h1>Blog Post Isotop</h1>
					<div class="h-decor"></div>
				</div>
			</div>
			<div class="container">
				<div class="blog-isotope">
					<div class="blog-post">
						<div class="post-image">
							<a href="blog-post-page.html"><img src="images/blog/blog-post-img-1.jpg" alt=""></a>
						</div>
						<div class="blog-post-info">
							<div class="post-date">17<span>JAN</span></div>
							<div>
								<h2 class="post-title"><a href="blog-post-page.html">How to Choose the Best Toothbrush</a></h2>
								<div class="post-meta">
									<div class="post-meta-author">by <a href="#"><i>admin</i></a></div>
									<div class="post-meta-social">
										<a href="#"><i class="icon-facebook-logo"></i></a>
										<a href="#"><i class="icon-twitter-logo"></i></a>
										<a href="#"><i class="icon-google-logo"></i></a>
										<a href="#"><i class="icon-instagram"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="post-teaser">Oral hygiene is essential for your overall wellbeing, not just your oral health. In fact, gum disease is a major risk factor for developing certain dangerous health conditions, such as diabetes and heart disease […]</div>
						<div class="mt-2"><a href="blog-post-page.html" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read more</span><i class="icon-right-arrow"></i></a></div>
					</div>
					<div class="blog-post bg-grey">
						<div class="post-image">
							<div class="post-video">
								<iframe src="https://player.vimeo.com/video/1710363?title=0&byline=0&portrait=0" allowfullscreen></iframe>
							</div>
						</div>
						<div class="blog-post-info">
							<div class="post-date">17<span>JAN</span></div>
							<div>
								<h2 class="post-title"><a href="blog-post-page.html">FREE Dental Screening & X-Rays</a></h2>
								<div class="post-meta">
									<div class="post-meta-author">by <a href="#"><i>admin</i></a></div>
									<div class="post-meta-social">
										<a href="#"><i class="icon-facebook-logo"></i></a>
										<a href="#"><i class="icon-twitter-logo"></i></a>
										<a href="#"><i class="icon-google-logo"></i></a>
										<a href="#"><i class="icon-instagram"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="post-teaser">It’s okay to not brush my teeth tonight. A thought that has crossed almost everyone’s minds at least once or twice. Well, it’s time to stop […]</div>
						<div class="mt-2"><a href="blog-post-page.html" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read more</span><i class="icon-right-arrow"></i></a></div>
					</div>
					<div class="blog-post">
						<div class="post-image">
							<div class="slider-gallery post-carousel js-post-carousel">
								<a href="#"><img src="images/blog/blog-post-img-2.jpg" alt=""></a>
								<a href="#"><img src="images/blog/blog-post-img-2-1.jpg" alt=""></a>
								<a href="#"><img src="images/blog/blog-post-img-2-2.jpg" alt=""></a>
							</div>
						</div>
						<div class="blog-post-info">
							<div class="post-date">17<span>JAN</span></div>
							<div>
								<h2 class="post-title"><a href="blog-post-page.html">How to Choose the Best Toothbrush</a></h2>
								<div class="post-meta">
									<div class="post-meta-author">by <a href="#"><i>admin</i></a></div>
									<div class="post-meta-social">
										<a href="#"><i class="icon-facebook-logo"></i></a>
										<a href="#"><i class="icon-twitter-logo"></i></a>
										<a href="#"><i class="icon-google-logo"></i></a>
										<a href="#"><i class="icon-instagram"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="post-teaser">Oral hygiene is essential for your overall wellbeing, not just your oral health. In fact, gum disease is a major risk factor for developing certain dangerous health conditions, such as diabetes and heart disease […]</div>
						<div class="mt-2"><a href="blog-post-page.html" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read more</span><i class="icon-right-arrow"></i></a></div>
					</div>
					<div class="blog-post bg-grey">
						<div class="blog-post-info">
							<div class="post-date">17<span>JAN</span></div>
							<div>
								<h2 class="post-title"><a href="blog-post-page.html">Are you brushing your teeth correctly?</a></h2>
								<div class="post-meta">
									<div class="post-meta-author">by <a href="#"><i>admin</i></a></div>
									<div class="post-meta-social">
										<a href="#"><i class="icon-facebook-logo"></i></a>
										<a href="#"><i class="icon-twitter-logo"></i></a>
										<a href="#"><i class="icon-google-logo"></i></a>
										<a href="#"><i class="icon-instagram"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="post-teaser">
							<p>Becoming a dentist can result in an abundance of professional possibilities. Besides private practice options, dental school graduates can teach future dentists, travel with international.</p>
							<div class="quote">
								<p>There are over 65 dental schools in the United States accredited by the ADA’s Commission on Dental Accreditation. Each program is meticulously assessed to ensure compliance with quality and content standards. Typically, DMD and DDS programs take four years to complete. Additional years are necessary for dental specialties such as Pediatric Dentistry and Oral and Maxillofacial Surgery.</p>
							</div>
						</div>
						<div class="mt-2"><a href="blog-post-page.html" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read more</span><i class="icon-right-arrow"></i></a></div>
					</div>
					<div class="blog-post">
						<div class="post-image">
							<a href="blog-post-page.html"><img src="images/blog/blog-post-img-3.jpg" alt=""></a>
							<div class="post-link-wrapper">
								<div class="vert-wrap">
									<div class="vert"> <a href="#" class="post-link"><i class="icon-link-symbol"></i>www.dentalcliniclink.com</a> </div>
								</div>
							</div>
						</div>
						<div class="blog-post-info">
							<div class="post-date">17<span>JAN</span></div>
							<div>
								<div>
									<h2 class="post-title"><a href="blog-post-page.html">The Benefits of Using a Tongue Scraper</a></h2>
									<div class="post-meta">
										<div class="post-meta-author">by <a href="#"><i>admin</i></a></div>
										<div class="post-meta-social">
											<a href="#"><i class="icon-facebook-logo"></i></a>
											<a href="#"><i class="icon-twitter-logo"></i></a>
											<a href="#"><i class="icon-google-logo"></i></a>
											<a href="#"><i class="icon-instagram"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="post-teaser">You probably think that as long as you brush and floss every day your oral health should be fine. While brushing and flossing is critical for […]</div>
						<div class="mt-2"><a href="blog-post-page.html" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read more</span><i class="icon-right-arrow"></i></a></div>
					</div>
					<div class="blog-post bg-grey">
						<div class="post-image">
							<div class="post-music">
								<iframe src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/9913211&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
							</div>
						</div>
						<div class="blog-post-info">
							<div class="post-date">17<span>JAN</span></div>
							<div>
								<h2 class="post-title"><a href="blog-post-page.html">How to Choose the Best Toothbrush</a></h2>
								<div class="post-meta">
									<div class="post-meta-author">by <a href="#"><i>admin</i></a></div>
									<div class="post-meta-social">
										<a href="#"><i class="icon-facebook-logo"></i></a>
										<a href="#"><i class="icon-twitter-logo"></i></a>
										<a href="#"><i class="icon-google-logo"></i></a>
										<a href="#"><i class="icon-instagram"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="post-teaser">Oral hygiene is essential for your overall wellbeing, not just your oral health. In fact, gum disease is a major risk factor for developing certain dangerous health conditions, such as diabetes and heart disease […]</div>
						<div class="mt-2"><a href="blog-post-page.html" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read more</span><i class="icon-right-arrow"></i></a></div>
					</div>
				</div>
				<div class="clearfix"></div>
				<ul class="pagination justify-content-center">
					<li class="page-item active"><a class="page-link" href="#">1</a></li>
					<li class="page-item"><a class="page-link" href="#">2</a></li>
					<li class="page-item"><a class="page-link" href="#">3</a></li>
					<li class="page-item"><span class="page-link">...</span></li>
					<li class="page-item"><a class="page-link" href="#">15</a></li>
				</ul>
			</div>
		</div>
	</div>
	<!--//section-->
	<?php include 'footer.php' ?>