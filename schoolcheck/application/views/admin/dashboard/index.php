
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
                  <hr />
                    

                  <?php $this->load->view('admin/component/notifications');?>
                 <!-- /. ROW  -->
                <hr />   


                  <?php $this->load->view('admin/component/studentstatistics');?>

               


                 <!-- /. ROW  -->
                <div class="row" >
                    
                    <div class="col-md-12 col-sm-12 col-xs-12">
                  <?php $this->load->view('admin/component/teacherattendance');?>
            
                    
                    </div>
                </div>
                 <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                   
                    <div class="chat-panel panel panel-default chat-boder chat-panel-head" >
                        <div class="panel-heading">
                            <i class="fa fa-comments fa-fw"></i>
                            Chat Box

                        </div>

                        <div class="panel-body">
                            <ul class="chat-box">
                                <li class="left clearfix">
                                    <span class="chat-img pull-left">
                                        <img src="assets/img/1.png" alt="User" class="img-circle" />
                                    </span>
                                    <div class="chat-body">                                        
                                            <strong >Nabina Kafle</strong>
                                            <small class="pull-right text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i>12 mins ago
                                            </small>                                      
                                        <p>
                                            Teachers are really cheaters in this school. They dont work as per they need to do
                                        </p>
                                    </div>
                                </li>

                                <li class="left clearfix">
                                    <span class="chat-img pull-left">
                                         <img src="assets/img/3.png" alt="Narvesh Pradhan" class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">
                                        
                                            <strong >Narvesh Pradhan</strong>
                                            <small class="pull-right text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i>14 mins ago</small>
                                        
                                        <p>
                                            No, Actaually Teachers are hardworking but the administration is not good. Administration should be actually punished rather than Teachers.
                                        </p>
                                    </div>
                                </li>
                                
                                    <li class="left clearfix">
                                    <span class="chat-img pull-left">
                                        <img src="<?php echo site_url('themes/assets/img/1.png');?>" alt="Anil Chitrakar" class="img-circle" />
                                    </span>
                                    <div class="chat-body">                                        
                                            <strong >Anil Chitrakar</strong>
                                            <small class="pull-right text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i>12 mins ago
                                            </small>                                      
                                        <p>
                                            Yes, Narvesh is right. Actually administration is supposed to carry out this not the teachers
                                        </p>
                                    </div>
                                </li>

                            </ul>
                        </div>

                        <div class="panel-footer">
                            <div class="input-group">
                                <input id="btn-input" type="text" class="form-control input-sm" placeholder="Your valuable feedbackd..." />
                                <span class="input-group-btn">
                                    <button class="btn btn-warning btn-sm" id="btn-chat">
                                        Give Feedbacks
                                    </button>
                                </span>
                            </div>
                        </div>

                    </div>
                    
                </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                      
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Publics Vote: 
                            </div>
                            <div class="panel-body">
                                <div id="morris-donut-chart"></div>
                            </div>
                        </div>
                      
                    </div>
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
