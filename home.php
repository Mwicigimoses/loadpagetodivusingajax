<!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          
          <div class="row tile_count" style="text-align: center;">
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
             <?php foreach ($sermon as $row):?> 
              <span class="count_top"><i class="fa fa-user"></i> Total Sermon Articles</span>
              <div class="count"><?php echo $row->no;?></div>
              <span class="count_bottom"><i class="green">From </i>15th March 2017</span>
            <?php endforeach?>
            </div>
             <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
             <?php foreach ($blog as $row):?>
              <span class="count_top"><i class="fa fa-user"></i> Total Blog Articles</span>
              <div class="count"><?php echo $row->no;?></div>
              <span class="count_bottom"><i class="green">From </i> 15th March 2017</span>
              <?php endforeach?>
            </div>
             <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
             <?php foreach ($keephopealive as $row):?>
              <span class="count_top"><i class="fa fa-user"></i> Total Keephopealive Messages</span>
              <div class="count"><?php echo $row->no;?></div>
               <span class="count_bottom"><i class="green">From </i> 15th March 2017</span>
              <?php endforeach?>
            </div>
             <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
             <?php foreach ($blog as $row):?>
              <span class="count_top"><i class="fa fa-user"></i> Total Visitors</span>
              <div class="count"><a href="http://www.reliablecounter.com" target="_blank"><img src="http://www.reliablecounter.com/count.php?page=www.tgnfi.co.ke&digit=style/plain/28/&reloads=0" alt="www.reliablecounter.com" title="www.reliablecounter.com" border="0"></a><br /><a href="http://www.analogmix.com/studio.html" target="_blank" style="font-family: Geneva, Arial; font-size: 9px; color: #330010; text-decoration: none;"></a></div>
               <span class="count_bottom"><i class="green">From </i> 15th March 2017</span>
              <?php endforeach?>
            </div>
            
          </div>
        </div>
         