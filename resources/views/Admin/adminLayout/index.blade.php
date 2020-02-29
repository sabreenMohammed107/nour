<!DOCTYPE html>
<html lang="en">

<head>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Time Mall</title>
  <!-- Iconic Fonts -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="vendors/iconic-fonts/font-awesome/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="vendors/iconic-fonts/flat-icons/flaticon.css">
  <link rel="stylesheet" href="vendors/iconic-fonts/cryptocoins/cryptocoins.css">
  <link rel="stylesheet" href="vendors/iconic-fonts/cryptocoins/cryptocoins-colors.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
   <!-- Date picker -->
   <link rel="stylesheet" href="css/datepicker.css">
  <!-- jQuery UI -->
  <link href="css/jquery-ui.min.css" rel="stylesheet">
  <!-- Page Specific CSS (Slick Slider.css) -->
  <link href="css/datatables.min.css" rel="stylesheet">
  <link href="css/slick.css" rel="stylesheet">
    <link href="css/select2.min.css" rel="stylesheet">
    <!--sweeter-->
    <link rel="stylesheet" href="css/sweetalert2.min.css">
    <!--rich text-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/site.css">
    <link rel="stylesheet" href="css/richtext.min.css">
  <!-- Mystic styles -->
  <link href="css/style.css" rel="stylesheet">
  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="img/85055897_2290538387910995_9008169895875051520_n.png">

</head>
<body class="ms-body   ms-primary-theme ms-has-quickbar">

  <!-- Pre LOADER -->
  <div id="LoaderWrapper">
      <div class="spinner spinner-4">
          <div class="cube1"></div>
          <div class="cube2"></div>
        </div>
  </div>
  <!-- /Pre LOADER -->


  <!-- Overlays -->
  <div class="ms-aside-overlay ms-overlay-left ms-toggler" data-target="#ms-side-nav" data-toggle="slideLeft"></div>
  <div class="ms-aside-overlay ms-overlay-right ms-toggler" data-target="#ms-recent-activity" data-toggle="slideRight"></div>
      <!-- Sidebar Navigation Left -->
      <aside id="ms-side-nav" class="side-nav fixed ms-aside-scrollable ms-aside-left">

        <!-- Logo -->
        <div class="logo-sn ms-d-block-lg">
          <a class="pl-0 ml-0 text-center" href="index.html"> <img src="img/85055897_2290538387910995_9008169895875051520_n.png" alt="logo"> </a>
        </div>
      
        <!-- Navigation -->
        <ul class="accordion ms-main-aside fs-14" id="side-nav-accordion">
            <!-- Home -->
            <li class="menu-item ">
                <a class=" active" href="index.html">
                    <span><i class="material-icons fs-16">home</i>Home </span>
                </a>
               
            </li>
            <!-- /Home -->
             <!-- Shop  -->
             <li class="menu-item">
              <a href="#" class="has-chevron" data-toggle="collapse" data-target="#create" aria-expanded="false" aria-controls="tables">
                <span><i class="material-icons fs-16">build</i>Shop</span>
              </a>
              <ul id="create" class="collapse" aria-labelledby="tables" data-parent="#side-nav-accordion">
                <li> <a href="home-slider.html">Shop data</a> </li>
                <li> <a href="Products.html">Shop Products</a> </li>
                <!-- <li> <a href="subCat.html">sub_Categories</a> </li>
                <li> <a href="courses.html">Courses</a> </li>
                <li> <a href="rounds.html">Rounds</a> </li>
                <li> <a href="bts_numbers.html">BTS_numbers</a> </li>
                <li> <a href="clients.html">Clients</a> </li>
                <li> <a href="parteners.html">Parteners</a> </li>
                <li> <a href="branches.html">Branches </a> </li> -->
              </ul>
          </li>
          <!--  Setup  -->
            
          <!-- Sending  -->
          <!-- <li class="menu-item">
              <a href="#" class="has-chevron" data-toggle="collapse" data-target="#basic-elements" aria-expanded="false" aria-controls="basic-elements">
              <span><i class="material-icons fs-16">backup</i>Sending</span>
            </a>
              <ul id="basic-elements" class="collapse" aria-labelledby="basic-elements" data-parent="#side-nav-accordion">
                <li> <a href="send_mail.html">Sending mail</a> </li>
                <li> <a href="send_sms.html">sending sms</a> </li>
              </ul>
            </li> -->
          <!--  Sending  -->
          <!-- Clients  -->
          <!-- <li class="menu-item">
              <a href="#" class="has-chevron" data-toggle="collapse" data-target="#contactsdropdown" aria-expanded="false" aria-controls="contactsdropdown">
              <span><i class="material-icons fs-16">assignment</i>Clients</span>
            </a>
              <ul id="contactsdropdown" class="collapse" aria-labelledby="basic-elements" data-parent="#side-nav-accordion">
                <li> <a href="contacts.html">Clients</a> </li>
               
              </ul>
            </li> -->
          <!--  Clients  -->
          <!-- Leads  -->
          <!-- <li class="menu-item">
              <a href="#" class="has-chevron" data-toggle="collapse" data-target="#callsdropdown" aria-expanded="false" aria-controls="callsdropdown">
              <span><i class="material-icons fs-16">call</i>Leads</span>
            </a>
              <ul id="callsdropdown" class="collapse" aria-labelledby="basic-elements" data-parent="#side-nav-accordion">
                <li> <a href="calls.html">Leads</a> </li>
               
              </ul>
            </li> -->
          <!--  Leads  -->
          <!-- Users  -->
          <!-- <li class="menu-item">
              <a href="#" class="has-chevron" data-toggle="collapse" data-target="#Usersdropdown" aria-expanded="false" aria-controls="Usersdropdown">
              <span><i class="material-icons fs-16">assignment_ind</i>Users</span>
            </a>
              <ul id="Usersdropdown" class="collapse" aria-labelledby="basic-elements" data-parent="#side-nav-accordion">
                <li> <a href="users.html">Users</a> </li>
               
              </ul>
            </li> -->
          <!--  Users  -->
          <!-- <li class="menu-item ">
            <a class="" href="companies.html">
                <span><i class="material-icons fs-16">assignment</i>Companies </span>
            </a>
           
        </li>
            -->
          
          
        </ul>
      
      
      </aside>
 <!-- Main Content -->
 <main class="body-content">
      <nav class="navbar ms-navbar">

        <div class="ms-aside-toggler ms-toggler pl-0" data-target="#ms-side-nav" data-toggle="slideLeft">
          <span class="ms-toggler-bar bg-primary"></span>
          <span class="ms-toggler-bar bg-primary"></span>
          <span class="ms-toggler-bar bg-primary"></span>
        </div>
  
        <div class="logo-sn logo-sm ms-d-block-sm">
          <a class="pl-0 ml-0 text-center navbar-brand mr-0" href="index.html"><img src="img/85055897_2290538387910995_9008169895875051520_n.png" alt="logo"> </a>
        </div>
  
        <ul class="ms-nav-list ms-inline mb-0" id="ms-nav-options">
          <!-- <li class="ms-nav-item  quick-call  mt-2">
            <a href="bulk-search.html" class="">
              <span class="text-dark"><i class="material-icons fs-16">search</i><b>MSearch</b></span>
            </a>
          </li> -->
          <!-- <li class="ms-nav-item  quick-call  mt-2">
            <a href="Qkcall.html" class="">
              <span class="text-dark"><i class="material-icons fs-16">call</i><b>QkCall</b></span>
            </a>
          </li> -->
          <li class="ms-nav-item dropdown ms-search-form">
            <!-- <form class="ms-form" method="post">
              <div class="ms-form-group my-0 mb-0 has-icon fs-14">
                <input type="search" class="ms-form-input" id="quickCallSearch" name="search" placeholder="Search here..." value="">
                <!-- <button type="submit" class="search-btn"><i class="flaticon-search text-disabled"></i></button> -->
             <!-- </div>
            </form> -->
            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="mailDropdown" id="quickCall_List"> 
             
              <li class="ms-scrollable ms-dropdown-list ps">
                <a class="media p-2" href="profile.html">
                  <div class=" ms-chat-img mr-2 align-self-center">
                    <img src="https://via.placeholder.com/270x270" class="ms-img-round" alt="people">
                  </div>
                  <div class="media-body">
                    <span>xxxxx .</span>
                  </div>
                </a>
                <a class="media p-2" href="profile.html">
                  <div class=" ms-chat-img mr-2 align-self-center">
                    <img src="https://via.placeholder.com/270x270" class="ms-img-round" alt="people">
                  </div>
                  <div class="media-body">
                    <span>xxxxx .</span>
                  </div>
                </a>
                <a class="media p-2" href="profile.html">
                  <div class=" ms-chat-img mr-2 align-self-center">
                    <img src="https://via.placeholder.com/270x270" class="ms-img-round" alt="people">
                  </div>
                  <div class="media-body">
                    <span>xxxxx .</span>
                  </div>
                </a>
                <a class="media p-2" href="profile.html">
                  <div class=" ms-chat-img mr-2 align-self-center">
                    <img src="https://via.placeholder.com/270x270" class="ms-img-round" alt="people">
                  </div>
                  <div class="media-body">
                    <span>xxxxx .</span>
                  </div>
                </a>
                <a class="media p-2" href="profile.html">
                  <div class=" ms-chat-img mr-2 align-self-center">
                    <img src="https://via.placeholder.com/270x270" class="ms-img-round" alt="people">
                  </div>
                  <div class="media-body">
                    <span>xxxxx .</span>
                  </div>
                </a>
           
              
               
              <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></li>
            </ul>
          </li>
          <li class="ms-nav-item  mt-2">
            <div class="switch">
              <div class="quality">
                <input checked="" id="q1" name="q" type="radio" value="q1">
                <label for="q1">EN</label>
              </div>
              <div class="quality">
                <input id="q2" name="q" type="radio" value="q2">
                <label for="q2">AR</label>
              </div>
            </div>
          </li>
         
          <li class="ms-nav-item dropdown mt-2">
            <!-- <a href="#" class="text-disabled ms-has-notification" id="mailDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span>10</span>
              <i class="flaticon-speech-bubble"></i></a> -->
            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="mailDropdown">
              <li class="dropdown-menu-header">
                <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Messages</span></h6><span class="badge badge-pill badge-success">3 New</span>
              </li>
              <li class="dropdown-divider"></li>
              <li class="ms-scrollable ms-dropdown-list ps">
                <a class="media p-2" href="chat.html">
                  <div class="ms-chat-status ms-status-offline ms-chat-img mr-2 align-self-center">
                    <img src="https://via.placeholder.com/270x270" class="ms-img-round" alt="people">
                  </div>
                  <div class="media-body">
                    <span>Hey man, looking forward to your new project.</span>
                    <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 30 seconds ago</p>
                  </div>
                </a>
                <a class="media p-2" href="chat.html">
                  <div class="ms-chat-status ms-status-online ms-chat-img mr-2 align-self-center">
                    <img src="https://via.placeholder.com/270x270" class="ms-img-round" alt="people">
                  </div>
                  <div class="media-body">
                    <span>Dear John, I was told you bought Mystic! Send me your feedback</span>
                    <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 28 minutes ago</p>
                  </div>
                </a>
                <a class="media p-2" href="chat.html">
                  <div class="ms-chat-status ms-status-offline ms-chat-img mr-2 align-self-center">
                    <img src="https://via.placeholder.com/270x270" class="ms-img-round" alt="people">
                  </div>
                  <div class="media-body">
                    <span>How many people are we inviting to the dashboard?</span>
                    <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 6 hours ago</p>
                  </div>
                </a>
              <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></li>
              <li class="dropdown-menu-footer text-center">
                <a href="chat.html">View all messages</a>
              </li>
            </ul>
          </li>
  
          <li class="ms-nav-item dropdown mt-2">
            <!-- <a href="#" class="text-disabled ms-has-notification" id="notificationDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span>36</span>
              <i class="flaticon-bell"></i></a> -->
            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="notificationDropdown">
              <li class="dropdown-menu-header">
                <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Notifications</span></h6><span class="badge badge-pill badge-info">4 New</span>
              </li>
              <li class="dropdown-divider"></li>
              <li class="ms-scrollable ms-dropdown-list ps">
                <a class="media p-2" href="#">
                  <div class="media-body">
                    <span>12 ways to improve your crypto dashboard</span>
                    <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 30 seconds ago</p>
                  </div>
                </a>
                <a class="media p-2" href="#">
                  <div class="media-body">
                    <span>You have newly registered users</span>
                    <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 45 minutes ago</p>
                  </div>
                </a>
                <a class="media p-2" href="#">
                  <div class="media-body">
                    <span>Your account was logged in from an unauthorized IP</span>
                    <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 2 hours ago</p>
                  </div>
                </a>
                <a class="media p-2" href="#">
                  <div class="media-body">
                    <span>An application form has been submitted</span>
                    <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 1 day ago</p>
                  </div>
                </a>
              <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></li>
              <li class="dropdown-divider"></li>
              <li class="dropdown-menu-footer text-center">
                <a href="notifications.html">View all Notifications</a>
              </li>
            </ul>
          </li>
  
          <li class="ms-nav-item ms-nav-user dropdown">
            <a href="#" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img class="ms-user-img ms-img-round float-left" src="https://via.placeholder.com/270x270" alt="people">
              <span class="float-right">User</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-right user-dropdown" aria-labelledby="userDropdown">
              <li class="dropdown-menu-header">
                <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Welcome, User</span></h6>
              </li>
              <li class="dropdown-divider"></li>
              <li class="ms-dropdown-list">
                <a class="media fs-14 p-2" href="profile.html"> <span><i class="flaticon-user mr-2"></i> Profile</span>
                </a>
              </li>
              <li class="dropdown-divider"></li>
  
              <li class="dropdown-menu-footer">
                <a class="media fs-14 p-2" href="login.html"> <span><i class="flaticon-shut-down mr-2"></i> Logout</span>
                </a>
              </li>
            </ul>
          </li>
        </ul>
  
        <div class="ms-toggler ms-d-block-sm pr-0 ms-nav-toggler" data-toggle="slideDown" data-target="#ms-nav-options">
          <span class="ms-toggler-bar bg-primary"></span>
          <span class="ms-toggler-bar bg-primary"></span>
          <span class="ms-toggler-bar bg-primary"></span>
        </div>
  
      </nav>
        <!-- Body Content Wrapper -->
    <div class="ms-content-wrapper">
      <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html"><i class="material-icons"></i> Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Shop screen</li>
          </ol>
        </nav>
    

        <div class="row">

            <div class="col-md-12">
    
    
    
              <div class="ms-panel">
                <div class="ms-panel-header d-flex justify-content-between">
                  <h6>Shop</h6>
                  <a href="#" class="btn btn-dark" data-toggle="modal" data-target="#addShop"> add Shop </a>
                </div>
                <div class="ms-panel-body">
                  <div class="table-responsive">
                    <table id="courseEval" class="dattable table table-striped thead-dark  w-100">
                      <thead>
                        <th>img</th>
                        
                        <th>Shop En-Name </th>
                        <th>Shop Ar-Name </th>
                        <th>slogan </th>
                        <th>Business type</th>
                        <th>Description</th>

                        
                        <th></th>
                      </thead>
                      <tbody>
    
                        <tr>
                          <td><img src="img/category/almaghrabtoda.jpg" alt=""></td>
                          <td>Shop -1</td>
                          <td>مستحضرات تجميل </td>
                          <td>To Be Beauty Woman </td>
                          <td>cosmatics </td>
                          <td>great team still requires more than one outstanding player. </td>
                          
                          <td>
                            <a href="editShop.html" class="btn btn-info d-inline-block" >edit</a>
                          <a href="#" onclick="delette('Shop')" class="btn d-inline-block btn-danger">delete</a>
                          </td>
                        </tr>
    
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
    
    
    
    
            </div>
    
          </div>
        </div>
    
      </main>
      
      <!--  Setup  -->
      <!-- Add Shop Modal -->
    <div class="modal fade" id="addShop" tabindex="-1" role="dialog" aria-labelledby="addShop">
        <div class="modal-dialog modal-lg " role="document">
          <div class="modal-content">
            <button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">X
             
            </button>
            <h3>Add Shop</h3>
          
            <div class="modal-body">
    
             
              <div class="ms-auth-container row no-gutters">
                <div class="col-12 p-3">
                  <form action="">
                    <div class="ms-auth-container row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="exampleInputPassword1" for="exampleCheck1">Logo </label>
                                <div id="uploadLogo" class="img-upload">
                                  <img src="img/eog-icon.png" alt="">
                                  <div class="upload-icon">
                                    <input type="file" name="pic" class="upload">
                                    <i class="fas fa-camera    "></i>
                                  </div>
                                </div>
                              </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                    <label class="exampleInputPassword1" for="exampleCheck1">Home Img </label>
                                    <div id="uploadHome" class="img-upload">
                                      <img src="img/eog-icon.png" alt="">
                                      <div class="upload-icon">
                                        <input type="file" name="pic" class="upload">
                                        <i class="fas fa-camera    "></i>
                                      </div>
                                    </div>
                                  </div>
                                  </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="exampleInputPassword1" for="exampleCheck1">Slogan </label>
                              <input type="text"  class="form-control">
                            </div>
                          </div>
                        <div class="col-md-6">
                            <div class="form-group">
                              <label class="exampleInputPassword1" for="exampleCheck1">En-Name</label>
                              <input type="text" class="form-control">
                            </div>
                          </div>
                    
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="exampleInputPassword1" for="exampleCheck1">Ar-Name</label>
                          <input type="text"  class="form-control">
                        </div>
                      </div>
                     
                      <div class="col-md-6">
                        <div class="form-group">
                            <label class="exampleInputPassword1" for="exampleCheck1">Business Type </label>
                            <input type="text"  class="form-control">
                        </div>
                      </div>
                     
                      <div class="col-md-3">
                        <div class="form-group">
                          <div id="uploadOne" class="img-upload">
                            <img src="img/category/Shopping-icon.png" alt="">
                            <div class="upload-icon">
                              <input type="file" name="pic" class="upload">
                              <i class="fas fa-camera    "></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <div id="uploadTwo" class="img-upload">
                            <img src="img/category/Shopping-icon.png" alt="">
                            <div class="upload-icon">
                              <input type="file" name="pic" class="upload">
                              <i class="fas fa-camera    "></i>
                            </div>
                          </div>
                    </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                          <div id="uploadThree" class="img-upload">
                              <img src="img/category/Shopping-icon.png" alt="">
                              <div class="upload-icon">
                                <input type="file" name="pic" class="upload">
                                <i class="fas fa-camera    "></i>
                              </div>
                            </div>
                      </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <div id="uploadFour" class="img-upload">
                              <img src="img/category/Shopping-icon.png" alt="">
                              <div class="upload-icon">
                                <input type="file" name="pic" class="upload">
                                <i class="fas fa-camera    "></i>
                              </div>
                            </div>
                      </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="exampleInputPassword1" for="exampleCheck1">Block 1 text </label>
                          <input type="text"  class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="exampleInputPassword1" for="exampleCheck1">Block 2 text </label>
                          <input type="text"  class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="exampleInputPassword1" for="exampleCheck1">Block 3 text </label>
                          <input type="text"  class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="exampleInputPassword1" for="exampleCheck1">Block 4 text </label>
                          <input type="text"  class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <i class="fab fa-whatsapp"></i>
                          <input type="text"  class="form-control" placeholder="whatsapp num " >
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <i class="fa fa-facebook "></i>
                          <input type="text"  class="form-control" placeholder="facebook url">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <i class="fab fa-twitter"></i>
                          <input type="url"  class="form-control" id="url-type-styled-input" placeholder="twitter url">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <i class="fab fa-instagram"></i>
                          <input type="text"  class="form-control" placeholder="instagram url">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>default currency</label>
                          <select name="" class="form-control" id="">
                            <option value="">select....</option>
                            <option value="doller">$</option>
                            <option value="egypt">lE</option>
                            <option value="uro">uro</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="example">EN Descpription</label>
                          <div class="form-group">
                              <textarea class="content" name="example"></textarea>
                          </div>
                        </div>
                      </div>
  
                      <div class="col-md-12">
                          <div class="form-group">
                            <label for="example2"> Ar Descpription</label>
                            <div class="form-group">
                                <textarea class="content" name="example2"></textarea>
                            </div>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="custom-control custom-checkbox">
                            <label class="custom-control-label" for="customCheck">User Active</label>
                            <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                          </div>
                        </div>
                      
                    </form>
                  </div>
                  <div class="input-group d-flex justify-content-end text-center">
                    <input type="button" value="Cancel" class="btn btn-dark mx-2" data-dismiss="modal" aria-label="Close">
                    <input type="submit" value="Add" class="btn btn-success ">
                  </div>
                  </form>
                </div>
              </div>
            </div>
      
          </div>
        </div>
        </div>
  <!-- /Add Sub Modal -->
        
    <!-- SCRIPTS -->
  <!-- Global Required Scripts Start -->
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/perfect-scrollbar.js"> </script>
  <script src="js/jquery-ui.min.js"> </script>
  <!-- Global Required Scripts End -->

  <!-- Page Specific Scripts Start -->
  <script src="js/slick.min.js"> </script>
  <script src="js/moment.js"> </script>
  <script src="js/jquery.webticker.min.js"></script>
  <script src="js/Chart.bundle.min.js"> </script>
  <script src="js/Chart.Financial.js"> </script>
  <!-- <script src="js/cryptocurrency.js"> </script> -->
  <!-- Page Specific Scripts Finish -->
 <!-- Date picker -->
 <script src="js/datepicker.min.js"></script>
    <script src="js/select2.min.js"></script>

  
  <!-- Page Specific Scripts Start -->
  <script src="js/datatables.min.js"> </script>
  <script src="js/data-tables.js"> </script>
  <!-- Page Specific Scripts End -->
<!-- Circular Progress Bar -->
<script src="vendors/jquery-circle-progress/dist/circle-progress.min.js"></script>
  <!-- Mystic core JavaScript -->
  <script src="js/framework.js"></script>
<!--sweeter-->
<script src="js/sweetalert2.min.js"></script>
 <!--rich text-->
 <script  src="js/jquery.richtext.js"></script>
  <!-- Settings -->
  <script src='js/main.js'></script>
  <!-- <script src="js/settings.js"></script> -->
</body>
</html>