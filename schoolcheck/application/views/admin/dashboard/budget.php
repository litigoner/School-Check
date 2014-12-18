
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">School Check</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> KIST College of Management &nbsp; <a href="<?php echo site_url('admin/user/logout');?>" class="btn btn-primary square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                

       <?php $this->load->view('admin/component/sidemenu');?>


        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2> 'शान्तिपुर गुल्मी, नेपाल' </h2>   
                        <h5>Gulmi Nepal </h5>
                    </div>
                </div>              
                



               


                 <!-- /. ROW  -->
                <div class="row" >
                    
                    <div class="col-md-12 col-sm-12 col-xs-12">
                  <?php $this->load->view('admin/component/budget');?>
            
                    
                    </div>
                </div>
                 <!-- /. ROW  -->
                
                   
                </div>     
                 <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="<?php echo base_url('themes/assets/js/jquery-1.10.2.js');?>"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php echo base_url('themes/assets/js/bootstrap.min.js');?>"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?php echo base_url('themes/assets/js/jquery.metisMenu.js');?>"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="<?php echo base_url('themes/assets/js/morris/raphael-2.1.0.min.js');?>"></script>
    <script src="<?php echo base_url('themes/assets/js/morris/morris.js');?>"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src=" <?php echo base_url('themes/assets/js/custom.js');?>"></script>
    
   
</body>
</html>
