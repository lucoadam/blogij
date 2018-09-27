<style>
    #nav{
        background: #000 !important;
        position:relative;
    }

</style>
<?php

include_once('admin/includes/connection.php');
include_once('admin/includes/article.php');
include_once ('header.php');
?>
<section id="blog" class="no-padding">
		<!-- Content -->
		<div class="container no-margin-top">
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
                $stmt = $pdo->query('SELECT * FROM blog_post ORDER BY id DESC');
                while($blog=$stmt->fetch()){


                ?>
				<article class="post post-item col-lg-4 col-sm-6 col-xs-12 mfp-align-top" style="float:none !important;width:33%;display:inline-block;vertical-align:top;">
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
		</div>
	</section>
	<!-- Section - Latest Posts / End -->
<?php include_once('footer.php'); ?>
<script>
    $(window).on("scroll",function(){
        console.log("hey");
        if($(window).scrollTop()>10){
            $('#nav').css("position","fixed");
        }
        else{
            $('#nav').css("position","relative");
        }

    });
</script>

