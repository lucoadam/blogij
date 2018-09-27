<style>
    #nav{
        background: #000 !important;
        position: relative;

    }
</style>

<?php

include_once('admin/includes/connection.php');
include_once('admin/includes/article.php');

$article = new Article;

if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $data = $article->fetch_data($id);
    ?>

    <?php include_once('header.php');?>
    <div class="container" style="position:relative;">
            <div class="text-center">

                <h3 class="dark text-center"><strong class="blog-p"><?php echo $data['title'];
                        ?></strong></h3>
                <p class="subtitle"> posted on <?php echo date('l jS', $data['timestamp']); ?></p>

            </div>

        <img class="center-block img-responsive" src="<?php echo 'admin/img/blog/'.$data['image']; ?>" alt="postimage"/>

        <p>
            <?php echo $data['content_full'];
            ?>
        </p>
        <a class="simple-button" style="margin-bottom:10px;" href="index.php#blog">&larr; Back</a>
    </div>

    <?php include_once('footer.php');


}
else{
    header('Location: index.php');
    exit();
}

?>

