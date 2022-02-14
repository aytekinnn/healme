<?php
include 'header.php';
include 'hizli-link.php';
?>

<!--//quick links-->
<div class="page-content">
	<!--section-->
	<div class="section mt-0">
		<div class="breadcrumbs-wrap">
			<div class="container">
				<div class="breadcrumbs">
					<a href="index">Домой</a>
					<span>Комментарии</span>
				</div>
			</div>
		</div>
	</div>
	<!--//section-->
	<div class="section page-content-first">
		<div class="container">
			<div class="text-center mb-2  mb-md-3 mb-lg-4">
				<div class="h-sub theme-color">Отзывы наших пациентов о нас</div>
				<h1>Комментарии</h1>
				<div class="h-decor"></div>
			</div>
		</div>
		<div class="container">
			<div class="rating-box">
				<div class="rating-number">5</div>
				<div class="star-rating"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></div>
				<div>Средний балл, присвоенный нашими пациентами.</div>
			</div>
			<div class="text-center mb-3 mb-md-4 max-900">
				<p> Вы также можете связаться с нами через WhatsApp, нажав на ссылку ниже обо всех ваших жалобах, запросах и вашей болезни.</p>
				<p><a href="contact-us" class="btn btn-hover-fill js-wrire-review"><i class="icon-right-arrow"></i><span>Связаться с нами</span><i class="icon-right-arrow"></i></a></p>
			</div>
			<div class="row">
				<div class="col-sm">
					<div class="testimonial-wrap">
						<div class="testimonial text-center">
							<div class="testimonial-photo">
								<img src="images/content/testimonials-author-1-1.jpg" alt="">
								<img src="images/content/testimonials-author-1-2.jpg" alt="">
							</div>
							<div class="testimonial-title">Aytekin Bağcı</div>
							<div class="star-rating"><span class="txt-gradient"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></div>
							<div class="testimonial-text">
								<p>
									«Я годами избегала стоматологов из-за неудачного опыта. Затем мне пришлось записаться на экстренную встречу с Heal Me Tour из-за моего гингивита. С тех пор я влюблена в их сервис. Мой стоматолог очень обнадеживает и очень помогает.» </p>
							</div>
						</div>
					</div>
					<div class="testimonial-wrap">
						<div class="testimonial testimonial-bg1 text-center">
							<div class="testimonial-photo">
								<img src="images/content/testimonials-author-2-1.jpg" alt="">
								<img src="images/content/testimonials-author-2-2.jpg" alt="">
							</div>
							<div class="testimonial-title">Ayşe Sucu</div>
							<div class="star-rating"><span class="txt-gradient"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></div>
							<div class="testimonial-text">
								<p>
								«Я очень рекомендую Heal Me Tour после того, как у меня были имплантаты.  Мой врач с самого начала успокоил меня, очень подробно, но очень ясно объяснив, какую работу необходимо выполнить.  Это долгая процедура (около года), но мой доктор и его команда были информативны, заботливы и очень профессиональны на протяжении всего лечения.  Честно могу сказать, что никакой боли я не почувствовала, кроме небольшого дискомфорта на следующий день после нанесения.»</p>
							</div>
						</div>
					</div>

				</div>
				<div class="col-sm">
					<div class="testimonial-wrap">
						<div class="testimonial testimonial-bg2 text-center">
							<div class="testimonial-photo">
								<img src="images/content/testimonials-author-5-1.jpg" alt="">
								<img src="images/content/testimonials-author-5-2.jpg" alt="">
							</div>
							<div class="testimonial-title">Aykut Arslan</div>
							<div class="star-rating"><span class="txt-gradient"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></div>
							<div class="testimonial-text">
								<p>
								«Мое лечение было отличным.  За исключением одного момента, я не чувствовал особого дискомфорта и абсолютно никакой боли.  Было очень приятно услышать комментарии моего врача о его компетентности.  Как будто мы все были в одной команде и победили.»
								</p>
							</div>
						</div>
					</div>

				</div>
			</div>
			<!-- <ul class="pagination justify-content-center">
				<li class="page-item active"><a class="page-link" href="#">1</a></li>
				<li class="page-item"><a class="page-link" href="#">2</a></li>
				<li class="page-item"><a class="page-link" href="#">3</a></li>
				<li class="page-item"><span class="page-link">...</span></li>
				<li class="page-item"><a class="page-link" href="#">15</a></li>
			</ul> -->
			<div class="mt-5 mt-md-8" id="writeReview">
				<h3>Оставить комментарий</h3>
				<div class="review-form-wrap opened mt-lg-3">
					<form class="contact-form pb-0" id="reviewForm" method="post" novalidate="novalidate">
						<div class="row align-items-center">
							<div class="col-auto">
								<label>Ставка</label>
							</div>
							<fieldset class="review-rating">
								<input type="radio" id="star5" name="rating" value="5">
								<label class="full" for="star5" title="5 yıldız"></label>
								<input type="radio" id="star4half" name="rating" value="4 and a half">
								<label class="half" for="star4half" title="4.5 yıldız"></label>
								<input type="radio" id="star4" name="rating" value="4">
								<label class="full" for="star4" title="4 yıldız"></label>
								<input type="radio" id="star3half" name="rating" value="3 and a half">
								<label class="half" for="star3half" title="3.5 yıldız"></label>
								<input type="radio" id="star3" name="rating" value="3">
								<label class="full" for="star3" title="3 yıldız"></label>
								<input type="radio" id="star2half" name="rating" value="2 and a half">
								<label class="half" for="star2half" title="2.5 yıldız"></label>
								<input type="radio" id="star2" name="rating" value="2">
								<label class="full" for="star2" title="2 yıldız"></label>
								<input type="radio" id="star1half" name="rating" value="1 and a half">
								<label class="half" for="star1half" title="1.5 yıldız"></label>
								<input type="radio" id="star1" name="rating" value="1">
								<label class="full" for="star1" title="1 star"></label>
								<input type="radio" id="starhalf" name="rating" value="half">
								<label class="half" for="starhalf" title="0.5 yıldız"></label>
							</fieldset>
						</div>
						<div class="row mt-1 mb-8">
							<div class="col-lg-8">
								<input type="text" class="form-control" name="name" placeholder="Имя Фамилия*">

								<div class="mt-15">
									<textarea class="form-control" name="review" placeholder="Комментарий"></textarea>
								</div>
								<div class="mt-3">
									<button type="submit" class="btn btn-hover-fill"><i class="icon-right-arrow"></i><span>Отправить комментарий</span><i class="icon-right-arrow"></i></button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!--//section-->
</div>
<?php include 'footer.php' ?>