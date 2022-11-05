<?php include 'header.php' ;

?> 


<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-5 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div>
      </div>


    
      <h2>View Blog</h2>
     
      <form action="<?php echo base_url().'admin/blog/addblogpost'?>" method="POST">

            <div class="form-group">
             <input type="text"  class="form-control" name="blog_title" placeholder="Title">
            </div>

            <div class="form-group">
             <textarea class="form-control"  name="desc" placeholder="description"></textarea>
            </div>

            <div class="form-group">
             <input type="file" class="form-control"  name="file" >
            </div>

            <button type="submit" class="btn btn-primary">Add Blog</button>
    </form>
    </main>
  </div>
</div>

<?php include 'footer.php' ?> 