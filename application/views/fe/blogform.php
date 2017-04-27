        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3 style="text-align: center">Blog <small>Post an Article</small></h3>
              </div>            


        <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
               

            <div class="row">
              <div class="col-md-6 col-xs-12">                          
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Blog Article  Form </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <!-- start form for validation -->
                    <form method="post" action="Home/save" id="demo-form" data-parsley-validate >
                      <?php if (isset($success)): ?>
                        <div class="alert alert-success">
                          <?php echo $success; ?>
                        </div>
                      <?php endif; ?>
                      <?php if (isset($error)): ?>
                        <div class="alert alert-danger">
                          <?php echo $error; ?>
                        </div>
                      <?php endif; ?>

                      <label for="fullname">Article Title * :</label>
                      <input type="text" id="fullname" class="form-control" name="article_title" required />
                      <br/>
                      <label for="email">Article Author * :</label>
                      <input type="text" id="fullname" class="form-control" name="article_author" data-parsley-trigger="change" required />
                      <br/>
                      <label for="email">Article Date * :</label>
                      <input type="text" id="fullname" class="form-control" name="article_date" data-parsley-trigger="change" required />
                       
                      <br/>   
                      <label for="fullname">Article Image Location * :</label>
                      <input type="text" id="fullname" class="form-control" name="article_image" required />
                       <br/>  
                            <label> Enter content on text area</label> 
                          
                      </div>
                    </div>
                  </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=8wrmo9p29ylsrzjhd9sbrji0yu4g9ruj70e9c3xd6q9ntaxs"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
            
            <textarea style="height: 300px"></textarea>
            </div>  
            <br />
            
            <div class="x_panel">
              <div class="x_title">
                <h2>Form Input Grid <small>form input </small></h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Settings 1</a>
                      </li>
                      <li><a href="#">Settings 2</a>
                      </li>
                    </ul>
                  </li>
                  <li><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              </div>
            </div>

            </form>

             

              <div class="clearfix"></div>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Published Articles</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                    <p style="text-align: center;"><code>The Topics are designed to appear from the oldest.</code> </p>

                    <div class="table-responsive">
                     
                      <table class="table table-striped jambo_table bulk_action">

                        <thead>
                          <tr class="headings">
                            <th>
                              <input type="checkbox" id="check-all" class="flat">
                            </th>
                            <th class="column-title">No.</th>
                            <th class="column-title">Title </th>
                            <th class="column-title">Updated </th>
                            <th class="column-title">Name </th>
                            <th class="column-title">Location </th>
                            <th class="column-title">Content</th>
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>
                          <?php foreach ($blog as $row):?>
                        <tbody style="font-size: 11px">
                          <tr class="even pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>                             
                            <td class=" "><?php echo $row->no;?></td>
                            <td class=" "><?php echo $row->article_title;?></td>
                            <td class=" "><?php echo $row->article_author;?> </td>
                            <td class=" "><?php echo $row->article_date;?></td>
                            <td class=" "><?php echo $row->article_image;?></td>
                            <td class="a-right a-right "><?php echo word_limiter($row->article_content, 5);?></td>
                            <td class=" last"><a href="#">View</a>                        
                            </td>                            
                          </tr>
                        </tbody>
                        <?php endforeach?>
                      </table>                       
                    </div>
              
            
                  </div>
                </div>
              </div>