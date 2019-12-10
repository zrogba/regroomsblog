<?php include("path.php") ?>
<?php include(ROOT_PATH . '/app/controllers/users.php'); 


if (isset($_GET['id'])); {
    $post = selectOne('posts', ['id' => $_GET['id']]);

}
$topics = selectAll('topics');
$posts = selectAll('posts', ['published' => 1]);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://kit.fontawesome.com/a6b8ab29aa.js"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet">

    <!--Font Awesome-->
    <link rel="stylesheet"
        href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" 
        integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" 
        crossorigin="anonymous">

    <!-- Custom Styling -->
    <link rel="stylesheet" href="assets/css/style.css">

    <title><?php echo $post['title']; ?> | ZeeInspires</title>
</head>

<body>

    <!-- Facebook Page PLugin SDK -->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v4.0">
    </script>


<?php include(ROOT_PATH . "/app/includes/header.php"); ?>

    <!-- Page Wrapper -->
    <div class="page-wrapper">

        <!-- Content -->
        <div class="content clearfix">

            <!-- Main Content Wrapper -->
            <div class="main-content-wrapper">
                <div class="main-content single">
                    <h1 class="post-title"><?php echo $post['title']; ?></h1>

                    <div class="post-content">
                       <?php echo html_entity_decode($post['body']); ?>

                    </div>

                </div>
            </div>

            <!-- // Main Content Wrapper -->

            <!-- Sidebar -->
            <div class="sidebar single">

                <div class="fb-page" data-href="https://www.facebook.com/Prettie-trends-1869103190049540/"data-tabs="timeline" data-width="" data-height="" data-small-header="false"data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/Prettie-trends-1869103190049540/"
                        class="fb-xfbml-parse-ignore">
                        <a href="https://www.facebook.com/Prettie-trends-1869103190049540/">Prettie-trends</a>
                    </blockquote>
                </div>
                
                
               <!-- Popular Posts -->
                <div class="section popular">
                    <h2 class="section-title">Popular</h2>

                    <?php foreach ($posts as $p): ?>
                     <div class="post clearfix">
                        <img src="<?php echo BASE_URL . '/assets/images/' . $p['image']; ?>" alt="">
                        <a href="" class="title">
                            <h4><?php echo $p['title'] ?></h4>
                        </a>
                    </div>
                <?php endforeach; ?>

                   
				
                <div class="section topics">
                    <h2 class="section-title">Topics</h2>
                    <ul>
                        <?php foreach ($topics as $topic): ?>
                        <li><a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name='. $topic['name'] ?>" ><?php echo $topic['name']; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>

            </div>
        </div>
        <!-- // Sidebar -->
		</div>
     
        <!-- // Content -->
		
    
        <!-- // Page Wrapper -->

        <?php include("app/includes/footer.php"); ?>

        <!-- JQuery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Slick Carousel -->
        <script type="text/javascript"
            src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

        <!--Custom Script -->
        <script src="assets/js/scripts.js"></script>

</body>

</html>