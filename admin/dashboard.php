<?php include("../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/posts.php"); 
adminOnly();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://kit.fontawesome.com/a6b8ab29aa.js"></script>

    <!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Candal | Lora" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet"
        href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" 
        integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" 
        crossorigin="anonymous">
        
    <!-- Custom Styling -->
    <link rel="stylesheet" href="../assets/css/style.css">

    <!-- Admin Styling -->
    <link rel="stylesheet" href="../assets/css/admin.css">

    <title>Admin Section - Dashboard</title>
</head>

<body>

<?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>

    <!-- Admin Page Wrapper -->
    <div class="admin-wrapper">
    
    <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>
        
        
        <!-- Admin Content -->
        <div class="admin-content">
            

            <div class="content">

                <h2 class="page-title">Dashboard</h2>


                <?php include(ROOT_PATH . '/app/includes/messages.php'); ?>

               
                
                </div>
                
                </div>
        <!-- // Admin Content -->
    
    </div>
    <!-- // Page Wrapper -->



        <!-- JQuery -->
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
       
        <!-- Ckeditor -->  
        <script
            src="https://cdn.ckeditor.com/ckeditor5/12.4.0/classic/ckeditor.js"></script>
        <!-- Custom Script -->
        <script src="../assets/js/scripts.js"></script>

    </body>

</html>