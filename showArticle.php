<!DOCTYPE html>
<html lang="en">
<head>
  <title>Display Articles</title>
    <!-- Custom Style   -->
    <link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="css/addArticle.css" />

    <style>
    *{
        text-decoration:none;
    }
     
        h3{
           font-weight: 40;
         font-family: 'Times New Roman', Times, serif;
           color: grey;
        }
       </style>
</head>

<body>


<script type="text/javascript">
    function displayCommentSec(articleNo){
        //alert("Dispaly comments for  "+articleNo);
       
        //document.getelementById('commentSection').style.display = 'block' ;

        var x = document.getElementById("commentSection");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
    }
</script>

<?php
   $conn = mysqli_connect("127.0.0.1", "u955232666_travelvj", "0536282554aB$", "u955232666_TravelVJ");
   //$conn = mysqli_connect("localhost", "root", "", "localtravelvj");
    // Check connection
    if($conn === false){
      die("ERROR: Could not connect. ". mysqli_connect_error());
  } 

  $articleNo = mysqli_real_escape_string($conn, $_GET['articleNo']);
 
  $select = mysqli_query($conn, "SELECT * FROM `articleList` WHERE articleNo = '$articleNo' ") or die('query failed');
  if(mysqli_num_rows($select) > 0){
    $row = mysqli_fetch_assoc($select);
    
  
  ?>

      
   <div class="post">
            <div class="post-top">
              
            
            <div class="post-content" >
                    
                <p><b><h1 style="font-size:15.9px;"> <?php echo $row['title']; ?> <br><br>  </h1></p>
               
                <p class="displayImage">
                   <?php echo '<img src="https://travelvj.com/uploaded_img/'.$row['articlePhoto'].'">';  ?> 
                </p>  
                <br><br>   
                <h3><?php echo nl2br($row['content']); ?></h3></p>
                
            </div>
        </div>
        
        <div class="post-bottom">
                    <div class="action">
                        <i class="far fa-thumbs-up"></i>
                        <span>Like</span>
                    </div>
     <?php
            $conn = mysqli_connect("127.0.0.1", "u955232666_travelvj", "0536282554aB$", "u955232666_TravelVJ");
            //$conn = mysqli_connect("localhost", "root", "", "localtravelvj");
            // Check connection
                if($conn === false){
                    die("ERROR: Could not connect. ". mysqli_connect_error());
                } 
                session_start();
                $articleNo = mysqli_real_escape_string($conn, $_GET['articleNo']);
            //   echo ' $articleNo--'. $articleNo;
            
                $sql = "select * from commentforarticle where articleId = $articleNo order by articleId desc"; 
                
                $result = mysqli_query($conn, $sql);  
                /* Get the number of rows in the result set */
            $row_cnt = mysqli_num_rows($result);
      
      ?>              
                    <div class="action">
                        <i class="far fa-comment"></i>
                        <a href="javascript:displayCommentSec(<?php echo $row['articleNo']; ?>);">
                    
                        <span>Comment (<?php echo $row_cnt; ?>)</span> </a>
                    </div> 
       <div class="action">

            <a href="whatsapp://send?text=<<https://travelvj.com/showArticle.php?articleNo=<?php echo $row['articleNo']; ?> >>" data-action="share/whatsapp/share" >
            <i class="fa fa-share"></i>
            <span>Share</span>
            </a>
        </div>
    </div>

    <?php } ?>
    
    
<div id="commentSection"  style="display:none;" style="height:200px, width:30%">
    <div id="respond">
    <p class="commentsheader">Earlier Comments </p>
<?php
   

    while($commentRow = mysqli_fetch_assoc($result)) 
    {
?>
         <div class="post-info">
           
            <p class="commentstext"><?php echo $commentRow['userName']; ?>  ----
            <?php echo $commentRow['commentMessage']; ?>   </p>
        </div>
 <?php  }  ?>       
    </div>
    
    <div id="respond">
    <p class="commentsheader">Leave a Comment</p>
      
        <form action="commentsForArticle.php" method="post" id="commentform">


<?php  
     if( !isset($_SESSION))       {
      session_start();
    }
    
?>
    <input type="hidden" name="articleId" value="<?php echo $row['articleNo']; ?>" id="articleId" />

            <textarea name="commentMessage" id="commentMessage" rows="2" tabindex="4"  required="required"></textarea>
    <br>

    <?php if( isset($_SESSION['user_id']) && $_SESSION['user_id'] !=null  ) {  ?>
    
    <input type="hidden" name="userLoggedIn" value="<?php echo $_SESSION['user_id']; ?>" id="userLoggedIn" />
    <input type="hidden" name="comment_author" value="<?php echo $_SESSION['user_name'];  ?>" id="comment_author" />
<br>
    <input name="submit" type="submit" value="Submit comment" />
<?php } else { ?>
    
    <a  href='login.php' class="btn profile-edit-btn">Log in to add comments</a>
       
<?php } ?>
        </form>
    </div>
    </div>


</div>    

</body>
</html>