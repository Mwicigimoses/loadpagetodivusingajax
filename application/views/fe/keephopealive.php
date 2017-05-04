               <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3 style="text-align: center">Keep Hope Alive <small>Post an Article</small></h3>
                </div> 
                      <div class="clearfix"></div>
                        <div class="row">
                          <div class="col-md-12 col-sm-12 col-xs-12">          
                            <div class="col-md-6 col-xs-12">                          
                              <div class="x_panel">
                                <div class="x_title">
                                  <h2>Keep Hope Alive Article  Form </h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                                          <li class="dropdown">
                                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                          <ul class="dropdown-menu" role="menu">
                                          <li><a href="#">Settings 1</a></li>
                                          <li><a href="#">Settings 2</a></li>
                                          </ul>
                                          </li>
                                          <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                                    </ul>
                                  <div class="clearfix"></div>
                               </div>

                            <div class="x_content">
                              <!-- start form for validation -->
                                <form id="registration_form">
                                    <label for="fullname">Keep Hope Alive Title * :</label>
                                    <label id="keephopealivetitle" style="color: red"></label>
                                    <input type="text" name="keephopealive_title"  id="keephopealive_title" class="form-control" />
                                    <br/>
                                    <label for="email">Keep Hope Alive Author * :</label>
                                    <label id="keephopealiveauthor" style="color: red"></label>
                                    <input type="text" id="keephopealive_author" class="form-control" name="keephopealive_author" />
                                    <br/>
                                    <label for="email">Keep Hope Alive Date * :</label>
                                    <label id="keephopealivedate" style="color: red"></label>
                                    <input type="text" id="keephopealive_date" class="form-control" name="keephopealive_date" />
                                                  
                                    <br/>   
                                    <label for="fullname">Keep Hope Alive Image Location * :</label>
                                    <label id="keephopealiveimage" style="color: red"></label>
                                    <input type="text" id="keephopealive_image" class="form-control" name="keephopealive_image" />
                                  </div>
                                </div>
                              </div>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="x_panel">
                                    <div class="x_title">
                                      <h2>Text areas<small>Sessions</small></h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                                            <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Settings 1</a></li>
                                            <li><a href="#">Settings 2</a></li>
                                            </ul>
                                            </li>
                                            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                                            </ul>
                                            <div class="clearfix"></div>
                                      </div>
                                            <label id="keephopealivecontent" ></label>
                                            <br/>
                                            <textarea style="height: 170px; width: 100%" name="keephopealive_content" id="keephopealive_content"></textarea>
                                            <br/>
                                            <div class="ln_solid"></div>
                                    <div style="text-align: center;">                       
                                            <label id="success" style="color: red"></label>
                                            <label id="error" style="color: red"></label>
                                            <div class="ln_solid"></div>                                           
                                            <input  type="submit" id="submit_enquiry" name="submit_enquiry" value="Submit Enquiry"/>
                                    </div>
                                  <div class="ln_solid"></div>                                       
                              </div>
                            </div>
                          </form>

                          <script type="text/javascript">
                            //alert('when clicked');
                              $(function(){
                                $( "#submit_enquiry" ).click(function(event)
                                  {
                                    //alert('when clicked'); 
                                    event.preventDefault();//prevent auto submit data
                                        var keephopealive_title= $("#keephopealive_title").val();
                                        var keephopealive_author= $("#keephopealive_author").val();
                                        var keephopealive_date= $("#keephopealive_date").val();
                                        var keephopealive_image= $("#keephopealive_image").val();
                                        var keephopealive_content= $("#keephopealive_content").val();

                                        //assign our rest of variables
                                        if (keephopealive_title == "" || keephopealive_title == null)
                                          {
                                                document.getElementById("keephopealivetitle").innerHTML="Enter the Title";
                                            (keephopealive_author == "" || keephopealive_author == null)
                                          } 
                                        else if( keephopealive_author == "" || keephopealive_author == null)
                                          { 
                                                  document.getElementById("keephopealiveauthor").innerHTML="Enter the author name";
                                          }
                                        else if (keephopealive_date == "" || keephopealive_date == null)
                                          {
                                                  document.getElementById("keephopealivedate").innerHTML="Enter the Date";
                                          }
                                        else if (keephopealive_image == "" || keephopealive_image == null){
                                                  document.getElementById("keephopealiveimage").innerHTML="Enter the image link";
                                          }
                                        else if (keephopealive_content == "" || keephopealive_content == null){
                                                  document.getElementById("keephopealivecontent").innerHTML="Enter the content";
                                          }
                                        else{         
                                          $.ajax({
                                          type:"post",
                                          url: base_url + "home/insert_keephopealive",//URL changed 
                                          data:{ 
                                            'keephopealive_title':keephopealive_title, 
                                            'keephopealive_author':keephopealive_author,
                                            'keephopealive_date':keephopealive_date,
                                            'keephopealive_image':keephopealive_image,
                                            'keephopealive_content':keephopealive_content},

                                      success:function(data){   
                                                 

                                                     if(data.status == 'SUCCESS'){
                                                            document.getElementById("success").innerHTML="Saving Failed !!";
                                                          }

                                                      else{ 
                                                            document.getElementById("error").innerHTML="Saved Successfully";
                                                          }
                                                        } 
                                                      }); 
                                                    $('#registration_form').each(function(){
                                                      this.reset();
                                                    });
                                                    $("#keephopealive_content").val('');
                                                }
                                              });
                                          });
                          </script> 


                              <div class="clearfix"></div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                  <div class="x_panel">
                                    <div class="x_content">
                                      <p style="text-align: center;"><code>The Topics are designed to appear from the latest.</code></p>
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
                                              <?php foreach ($keephopealive as $row):?>
                                                <tbody style="font-size: 11px">
                                                  <tr class="even pointer">
                                                    <td class="a-center ">
                                                      <input type="checkbox" class="flat" name="table_records">
                                                      </td>                             
                                                      <td class=" "><?php echo $row->no;?></td>
                                                      <td class=" "><?php echo $row->keephopealive_title;?></td>
                                                      <td class=" "><?php echo $row->keephopealive_author;?> </td>
                                                      <td class=" "><?php echo $row->keephopealive_date;?></td>
                                                      <td class=" "><?php echo $row->keephopealive_image;?></td>
                                                      <td class="a-right a-right "><?php echo word_limiter($row->keephopealive_content, 5);?></td>
                                                      <td class=" last"><a href="#">View</a>                        
                                                    </td>                            
                                                  <tr>
                                                </tbody>
                                              <?php endforeach?>
                                            </table>                       
                                           </div>  
                                         </div>
                                       </div>
                                     </div>