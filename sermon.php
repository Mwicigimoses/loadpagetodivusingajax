        <div class="" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3 style="text-align: center">Sermon <small>Post an Article</small></h3>
              </div>            


        <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
               

            <div class="row">
              <div class="col-md-6 col-xs-12">                          
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Sermon Form </h2>
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
                    <form method="post" action="Home/save_sermon" id="demo-form" data-parsley-validate >
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

                      <label for="fullname">Sermon Title * :</label>
                      <input type="text" id="fullname" class="form-control" name="sermon_title" required />
                      <br/>
                      <label for="email">Sermon Author * :</label>
                      <input type="text" id="fullname" class="form-control" name="sermon_author" data-parsley-trigger="change" required />
                      <br/>
                      <label for="email">Sermon Date * :</label>
                      <input type="text" id="fullname" class="form-control" name="sermon_date" data-parsley-trigger="change" required />
                       
                      <br/>   
                      <label for="fullname">Sermon Image Location * :</label>
                      <input type="text" id="fullname" class="form-control" name="sermon_image" required />
                       <br/>  
                            <label> Enter content on text area</label> 
                          
                      </div>
                    </div>
                  </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Text areas<small>Sessions</small></h2>
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
                <br/>
                <textarea name="sermon_content"></textarea>
                  <br />

                  <div class="ln_solid"></div>
                     
                          <div style="text-align: center;">

                          <button class="btn btn-primary" type="button">Cancel</button>

              <button class="btn btn-primary" type="reset">Reset</button>

                          <button type="submit" class="btn btn-success">Submit</button>
                          </div>
                          <div class="ln_solid"></div>
                   
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
                          <?php foreach ($sermon as $row):?>
                        <tbody style="font-size: 11px">
                          <tr class="even pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>                             
                            <td class=" "><?php echo $row->no;?></td>
                            <td class=" "><?php echo $row->sermon_title;?></td>
                            <td class=" "><?php echo $row->sermon_author;?> </td>
                            <td class=" "><?php echo $row->sermon_date;?></td>
                            <td class=" "><?php echo $row->sermon_image;?></td>
                            <td class="a-right a-right "><?php echo word_limiter($row->sermon_content, 5);?></td>
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
            </div>
          </div>
        </div>
        <!-- /page content -->

        