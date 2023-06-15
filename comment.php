<!DOCTYPE HTML>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    

    <?php include 'layout/header.php' ?>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  </head>

  <body>
    <?php
      $cmt = "";
      $cmt = $_POST["text_area"];
    ?>
    <?php include 'layout/navbar.php' ?>

        <main style="width: 100%; justify-content:center; align-items: center;">

              <div class = "comment_wall">
                <h1>Comments Wall </h1>
                <div class="comment">
                  <p><?php echo $cmt ?></p>
                  <p> <b>--<?php echo $array["email"]; ?> </b> <i> <?php echo " at " .date("Y-m-d")."  ".date("H:i:s") ; ?> </i> </p>
                </div>
              </div>

              <div class = "leave_comment">
                <h2>Leave Comment</h2>

                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                  <textarea class="txt_area" name="text_area" rows="4" cols="120"></textarea><br>
                  <!-- <input type="submit" name="submit" value = "comment" > -->
                  <button type = "submit" class="cmt_btn" >
                    <i class="fas fa-comment"></i> Comment
                  </button>
                </form>
              </div>

            </div>
            
        </main>
    


  </body>

</html>
