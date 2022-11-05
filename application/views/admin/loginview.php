 <?php include 'application\views\partials\header.php' ;

?> 
<div class="container">
    <div class="row " style="margin-top:20%">
   
    <div class="col-md-2"></div>

        <div class="col-md-8">
                <form action="<?php  echo base_url(). 'admin/login/login_post'?>"  method="POST">

                <?php
                    if($error != "NO_ERROR")
                    {
                        echo '<div class="alert alert-danger" role="alert">';
                        echo "$error";
                        echo '</div>';
                    }
                ?>
                    <h2>Please Sign In</h2>
                        <div class="form-group">
                            <label for="UserName">UserName</label>
                            <input type="text" name="username" class="form-control" id="uname" placeholder="User name">
                        </div>
                        <div class="form-group">
                            <label for="inputPassword">Password</label>
                            <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label class="form-check-label"><input type="checkbox"> Remember me</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Sign in</button>
            </form>
        </div>

    <div class="col-md-2"></div>
    </div>
</div>


<?php include 'application\views\partials\footer.php' ?> 