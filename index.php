<?php
    include('header.php');
    $stmt = $pdo->query('SELECT * FROM home');
    while ($home = $stmt->fetch())
    {
    if($home['id']==1){
        ?>
        <!-- ===== Start Main Section ===== -->
        <section id="home" class="jarallax" style="margin: 0 10px;background-image:url('img/bgs1.jpg')">
            <div class="overlay">
                <div class="container">
                    <div class="table">
                        <div class="table-cell">
                            <div class="container">
                                <h3 class="no-margin-top"><?php echo $home['name'];?></h3>
                                <h4 class="subtitle inline-block margin-right"><?php echo $home['position'];?></h4>
                            </div>
                            <div class="container">
                                <a href="index.php#contact" class="simple-button smoothScroll"><span class="fa fa-envelope">&nbsp;</span> Contact Me </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php }} ?>
    <!-- ===== End Main Section ===== -->
<!-- ===== Start About Section ===== -->

	<section id="about" >
		<div class="container wow fadeInUp" data-wow-delay="0.4s">
			<div class="row">
                <?php
                $stmt = $pdo->query('SELECT * FROM about');
                while ($about = $stmt->fetch())
                { ?>
				<div class="col-md-4">
					<div class="profile-img">
                        <img class="img-responsive" alt="profile-img" src="<?php echo 'admin/img/about/'.$about['image']; ?>"/>
					</div>
				</div>
                    <?php } ?>
				<div class="col-md-8">
					<div class="about-info">

						<h2><span>Hello I'm </span><strong class="blog-p">
                            <?php
                            $stmt = $pdo->query('SELECT name FROM home');
                            while ($name = $stmt->fetch())
                            {
                                    echo $name['name'];
                                } ?>
                            </strong></h2>
						<!-- Edit -->
						<h4 class="about-subtitle">
                            <?php
                            $stmt = $pdo->query('SELECT position FROM home');
                            while ($position = $stmt->fetch())
                            {
                                echo $position['position'];
                            } ?>
                        </h4>
						<p>
							I'm <?php
                            $stmt = $pdo->query('SELECT name FROM home');
                            while ($name = $stmt->fetch())
                            {
                                echo $name['name'];
                            } ?> . <?php
                            $stmt = $pdo->query('SELECT position FROM home');
                            while ($positon = $stmt->fetch())
                            {
                                echo $position['position'];
                            } ?>
							<!-- Edit -->
                            <?php
                            $stmt = $pdo->query('SELECT * FROM about');
                            while($about=$stmt->fetch()){
                                echo $about['content'];
                            ?>
						</p>
						<div class="info">
							<div class="col-md-6 no-padding-left">
								<ul>
									<li>
										<p class="info-title">Age </p>
										<span class="info-details"><?php echo $about['age']; ?><span>
										<!-- Edit -->
									</li>
									<li>
										<p class="info-title">Address </p>
										<span class="info-details"><?php echo $about['address']; ?></span>
										<!-- Edit -->
									</li>
									<li>
										<p class="info-title">Email </p>
										<span class="info-details"> <?php echo $about['email']; ?></span>
										<!-- Edit -->
									</li>
								</ul>
							</div>
							<div class="col-md-6 no-padding-left">
								<ul>
									<li>
										<p class="info-title">Phone </p>
										<span class="info-details"> <?php echo $about['phone']; ?></span>
										<!-- Editr -->
									</li>
									<li>
										<p class="info-title">Website </p>
										<span class="info-details"> <?php echo $about['website']; ?></span>
										<!-- Edit -->
									</li>
									<li>
										<p class="info-title">Country </p>
										<span class="info-details"> <?php echo $about['country']; ?></span>
										<!-- Edit -->
									</li>
								</ul>
							</div>
							<div class="col-md-12 no-padding-left">
								<ul>
									<li class="social-media">
										<p class="info-title">Social Links</p>
									</li>
									<li class="social-media icons">
										<a href="<?php echo $about['fb_link']; ?>" target="_blank"><i class="fa fa-facebook"></i></a>
									</li>
									<!-- put your link insteed of # for ex : href="http://facebook.com/yourname" -->
									<li class="social-media icons">
										<a href="<?php echo $about['twitter_link']; ?>" target="_blank"><i class="fa fa-twitter"></i></a>
									</li>
									<!-- put your link insteed of # for ex : href="http://twitter.com/yourname" -->
									<li class="social-media icons">
										<a href="<?php echo $about['googleplus_link']; ?>" target="_blank"><i class="fa fa-google-plus"></i></a>
									</li>
									<!-- put your link insteed of # for ex : href="http://google.com/yourname" -->
									<li class="social-media icons">
										<a href="<?php echo $about['instagram_link']; ?>" target="_blank"><i class="fa fa-linkedin"></i></a>
									</li>
									<!-- put your link insteed of # for ex : href="http://flinkedin.com/yourname" -->
									<li class="social-media icons">
										<a href="<?php echo $about['be_link']; ?>" target="_blank"><i class="fa fa-behance"></i></a>
									</li>
									<!-- put your link insteed of # for ex : href="http://behance.com/yourname" -->
									<li class="social-media icons">
										<a href="<?php echo $about['ball_link']; ?>" target="_blank"><i class="fa fa-dribbble"></i></a>
									</li>
									<!-- put your link insteed of # for ex : href="http://dribbble.com/yourname" -->
									<li class="social-media icons">
										<a href="<?php echo $about['pinintrest_link']; ?>" target="_blank"><i class="fa fa-pinterest"></i></a>
									</li>
									<li class="social-media icons reversed">
										<a href="downloads/cv.php"><i class="fa fa-download"></i> Download CV</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ===== End About Section ===== -->
<!-- Post blog -->
    <?php } ?>
    <section id="blog">
    <!-- Content -->
        <div class="container">
            <div class="row">
                <h3 class="dark text-center"><strong class="blog-p">Latest</strong> News</h3>
                <?php $stmt = $pdo->query('SELECT * FROM blog');
                while($blog=$stmt->fetch()){
                    if($blog['id']==1){?>
                        <p class="text-center subtitle">
                            <?php echo $blog['sub_head'] ?>
                            <!-- Edit -->
                        </p>
                    <?php }} ?>
            </div>

            <div class="row margin-top">
                <!-- Post -->

                <?php
                $stmt = $pdo->query('SELECT * FROM blog_post ORDER BY id DESC LIMIT 3');
                while($blog=$stmt->fetch()){


                    ?>
                    <article class="post post-item col-lg-4 col-sm-6 col-xs-12 mfp-align-top" style="display:inline;vertical-align:top;">
                        <div class="post-photo">
                            <img src="<?php echo 'admin/img/blog/'.$blog['image'];?>" alt="...">
                        </div>
                        <div class="post-content wow fadeInUp" data-wow-delay=".4s">
                            <div class="meta">
                                <span><i class="fa fa-comment"></i><a href="#">4</a></span>
                                <span><i class="fa fa-user"></i><a href="#"><?php echo $blog['blogby']; ?></a></span>
                                <span><i class="fa fa-tag"></i><a href="#"><?php echo $blog['post'];?></a></span>
                            </div>
                            <div class="date"><?php echo date('l jS', $blog['timestamp']); ?></div>
                            <h2><a href="#"><?php echo $blog['title']; ?></a></h2>
                            <p><?php echo $blog['content_full']; ?> </p>
                            <a href="article.php?id=<?php echo $blog['id'];?>" class="simple-button"><span>Read more</span></a>
                        </div>
                    </article>
                <?php }
                ?>
            </div>
            <div class="row margin-top">
                <a class="simple-button" href="posts.php">More Post</a>
            </div>
        </div>
    </section>
    <!-- Section - Latest Posts / End -->

	<!-- ===== Start Services section ===== -->
	<section id="services" class="services-area">
		<div class="container">
			<div class="row">
				<h3 class="text-center"><strong class="blog-p">What</strong> I do</h3>
                <?php
                $stmt = $pdo->query('SELECT * FROM services');
                while($services=$stmt->fetch()){
                    if($services['id']=1){?>
				<p class="text-center subtitle">
					<?php echo $services['work']; ?>
				</p>
                <?php } } ?>
			</div>

			<div class="row margin-top">
                <?php
                $stmt = $pdo->query('SELECT * FROM services');
                while($services=$stmt->fetch()){ ?>
				<div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                    <a  href="services.php/id?<?php echo $services['id'];?>">
					<div class="single-service">
						<i class=""><img class="img-responsive" src="<?php echo "admin/img/services/".$services['img_src'] ?>"alt="img"></i>

                        <h2><?php echo $services['title'] ?></h2>
						<p><?php echo $services['content'] ?></p>
					</div>
                    </a>
				</div>
                <?php } ?>
	</section>
	<!-- ===== End Services Section ===== -->


	<!-- ===== Start Portfolio Section ===== -->
	<section id="portfolio">
		<div class="container">
			<div class="row">
				<h3 class="dark text-center">My <strong class="blog-p">Awesome</strong> Work</h3>
                <?php
                $stmt = $pdo->query('SELECT * FROM portfolio WHERE id=1');
                while($portfolio=$stmt->fetch()){ ?>
				<p class="text-center subtitle">
                    This is the content
					<?php echo $portfolio['subhead'];?>

					<!-- Edit -->
				</p>
                 <?php  } ?>
			</div>
			<!-- Filter -->
			<div class="folio-filter text-center">
				<ul>
					<li data-filter="*">All</li>
					<li data-filter=".books">Books and Reports</li>
					<li data-filter=".articles">Articles</li>
					<li data-filter=".songs_poem">Songs and Poems</li>
					<li data-filter=".photos">Photos</li>
					<li data-filter=".videos">Videos</li>
				</ul>
			</div>
			<div class="row margin-top wow fadeInUp" data-wow-delay=".5s">
				<!-- Begin Gallery -->
				<ul class="folio-list folio-items">
					<!-- Project 1 -->
                    <?php
                    $stmt = $pdo->query('SELECT * FROM portfolio');
                    while($portfolio=$stmt->fetch()){?>
					<li class="col-md-4 col-sm-6 col-xs-12 item <?php echo $portfolio['content'];?>">
						<a class="lightbox" href="<?php echo 'admin/pages/image/uploads/'.$portfolio['images'];?>">
							<div class="atvImg">
								<img src="<?php echo 'admin/pages/image/uploads/'.$portfolio['images'];?>" class="img-responsive" alt="portfolio">

								<div class="atvImg-layer" data-img="<?php echo 'admin/pages/image/uploads/'.$portfolio['images'];?>">This is div</div>
							</div>
						</a>
					</li>
                     <?php } ?>

				</ul>
				<!-- END Gallery -->
			</div>
		</div>
	</section>
	<!-- ===== End Portfolio ===== -->

	<!-- ===== Start Testimonials Section ===== -->
	<section id="testimonials">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="text-center">

						<h3 class="dark text-center"><strong class="blog-p">My</strong> Clients</h3>
						<p class="subtitle">They are the clients</p>

					</div>
				</div>
			</div>
			<div class="row margin-top">
				<div class="col-sm-12">
					<div id="owl-demo" class="owl-carousel">
                        <?php $stmt = $pdo->query('SELECT * FROM testimonials_content');
                        while($testimonial=$stmt->fetch()){?>
						<div class="text-center testi_boxes mx-auto">
							<div style="margin-top:.5rem !important">
								<div>
									<img src="<?php echo 'admin/img/people/'.$testimonial['image'] ?>" alt="" class="mx-auto img-thumbnail img-fluid d-block img-circle">
								</div>
								<p class="client_review font-italic mt-4 text-center text-muted">"<?php echo $testimonial['content_short'] ?>"</p>
								<p class="client_name text-center">- <?php echo $testimonial['name']; ?></p>
							</div>
						</div>
                         <?php } ?>
				</div>
			</div>
		</div>
	</section>
	<!-- ===== End Testimonials Section ===== -->

	<!-- ===== Hire Me Section =====
	<div id="workwithus" class="jarallax" style="background-color:#111">
		<div class="overlay">
			<div class="container text-center">
				<div class="row">
					<div class="content-wrapper">
						<p>I'm avaiable for freelance hire</p>
						<h3> <strong>Let's</strong> Work <strong>Together</strong> </h3>
						<a class="simple-button smoothScroll" href="#contact"><i class="fa fa-envelop"></i> Hire Me</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	-->
	<!-- ===== End Hire Me ===== -->


	<!-- ===== Start Contact Section ===== -->
	<section id="contact" style="margin: 0 10px;background-image:url('img/contact.jpg')">
		<div class="container">
			<div class="row margin-top">
				<h3><strong>Get</strong> in touch</h3>
				<div class="contact-form col-md-6 no-padding">

					<form method="post">
						<div class="no-padding">
							<div class="col-md-6 no-padding">
								<input id="fullname" type="text" name="fullname" autocomplete="name" placeholder="Name" />
							</div>
							<div class="col-md-6 no-padding">
								<input id="email" type="email" name="email" autocomplete="email" placeholder="Email" />
							</div>
							<textarea id="message" placeholder="Message" name="message"></textarea>
							<div onclick="submit_form();" class="btn">
								<span><i class="fa fa-location-arrow"></i> Send Message</span>
							</div>
						</div>
					</form>
					<div id="response_brought"></div>
				</div>
                <?php $stmt = $pdo->query('SELECT * FROM contact');
                while($contact=$stmt->fetch()){
                if($contact['id']==1){?>
				<div class="col-md-6 no-padding">
					<div class="col-md-6 no-padding">
						<div class="info-box-wrapper">
							<div class="icon-box">
								<i class="fa fa-envelope"></i>
							</div>
							<div class="support-box">
								<strong> Email:</strong> <a href="mailto:support@blog.com"><?php echo $contact['email']; ?></a>
								<!-- Edit -->
							</div>
						</div>
					</div>

					<div class="col-md-6 no-padding">
						<div class="info-box-wrapper">
							<div class="icon-box">
								<i class="fa fa-phone"></i>
							</div>
							<div class="phone-box">
								<strong> Phone:</strong> <a><?php echo $contact['phone']; ?></a>
								<!-- Edit -->
							</div>
						</div>
					</div>

					<div class="col-md-6 no-padding">
						<div class="info-box-wrapper">
							<div class="icon-box location">
								<i class="fa fa-map-marker"></i>
							</div>
							<div class="location-box">
								<strong> Location:</strong> <a><?php echo $contact['location']; ?></a>
								<!-- Edit -->
							</div>
						</div>
					</div>

					<div class="col-md-6 no-padding">
						<div class="info-box-wrapper">
							<div class="icon-box location">
								<i class="fa fa-map-marker"></i>
							</div>
							<div class="location-box">
								<strong> Location:</strong> <a><?php echo $contact['location2']; ?></a>
								<!-- Edit -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
        <?php }} ?>

	</section>
	<!-- ===== End Contact Section ===== -->

<?php include('footer.php'); ?>
<style>
    $(window).on("load",function(){
        $('#nav').removeClass('scroll1');
    });
</style>
