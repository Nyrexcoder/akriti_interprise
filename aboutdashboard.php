<?php 
     session_start();
     if(!isset($_SESSION['user']))
     {
     header('location:./adminlogin.php');
     }
        include('includes/header1.php');
        // include('includes/footer1.php');
?>
 <style>
  .ck-editor__editable[role="textbox"] {
                /* editing area */
                min-height: 250px;
            }


 </style>


       <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-2"></div>
          <div class="col-sm-4 float-sm-right">
            <h1>About us</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#" class="">Admin</a></li>
               <li class="breadcrumb-item "><a href="#" class="">About us</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


<div class="content-wrapper">
    <div class="container d-flex justify-content-center   w-100  my-2 p-2 " id="form" style="flex-direction:column;">
        <h4 class="my-3">About us</h4>
        <hr/>
        <form class="w-100" action="<?php echo ($_SERVER['PHP_SELF']); ?> " method="Post" enctype="multipart/form-data">
          <!-- Category input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="form4Example1">Image</label>
            <input type="file" id="form4Example1" class="form-control" name="image"  placeholder="upload image" required  />
          </div>
          <!-- Message input -->
          <div class="form-outline mb-4">
              <label class="form-label" for="editor">About Description</label>
              <textarea class="form-control" id="editor"  name='aboutdescription' ></textarea>
          </div>
          <!-- Submit button -->
          <button type="submit" name="submit" class="btn btn-primary btn-block mb-2 mx-auto w-25" style="height:40px;">Submit</button>
        </form>

        
    </div>
</div>



<?php
      include('includes/footer1.php');
?>
<script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
      <script>
          ClassicEditor
              .create( document.querySelector( '#editor' ) )
              .catch( error => {
                  console.error( error );
              } );
      </script>


<?php
 if(isset($_POST['submit']))
 {

    include('./db/database.php');

       $directory='uploadedimages/';
       $fileName=$_FILES['image']['name'];
       $temName=$_FILES['image']['tmp_name'];
       $fileSize=$_FILES['image']['size'];
       $filetype=$_FILES['image']['type'];

       $image = $directory.$fileName;
       $result2 = move_uploaded_file($temName, $image);
       if (!$result2)
        {
           echo "";
           exit;
       }
      $description=$_POST['aboutdescription'];  


      // $query=mysqli_query($con,"Insert into about (about_image,about_description) values('$image','$description')");
      $query=mysqli_query($con,"UPDATE about SET `about_image`='$image', `about_description`='$description' WHERE about_id='1'");

      if($query)
      {
         echo "<script>alert('Successfully inserted')</script>";
      }
      else{
        echo "<script>alert('did not inserted data')</script>";
      }

 }

?>
