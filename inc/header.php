<?php
if (!isset($_COOKIE['refrar_page'])) {
    if (isset($_SERVER['HTTP_REFERER'])) {
        $ref = $_SERVER['HTTP_REFERER'];
    } else {
        $ref = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    }
    setcookie('refrar_page', $ref, time() + (86400 * 1), "/");
}
if (!isset($_COOKIE['entrypage'])) {
    $ref = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    setcookie('entrypage', $ref, time() + (86400 * 1), "/");
}
?>
<!--<div class="header-top">
<img src="img/header-top.jpg" class="img-responsive">
</div>-->
<nav id="heder" class="navbar navbar-default bootsnav" style="position:relative; width:100%; z-index:1;">
  <div class="container">
	<!-- Start Header Navigation -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"> <i class="fa fa-bars"></i> </button>
      <a class="navbar-brand" href="#"><img src="" class="logo" alt=""></a> </div>
    <!-- End Header Navigation --> 
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbar-menu">
	
	
      <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Select Course </a>
          <ul class="dropdown-menu mega-menu">
          <div class="col-md-4 col-lg-4 col-sm-4 col-md-4 padding0">
		  <ul class="mega-menulist">
                 <a href="https://www.janbasktraining.com/online-salesforce-training"><li>Salesforce</li></a>
                  <a href="https://www.janbasktraining.com/online-sql-server-training"><li>SQL Server</li></a>
                 <a href="https://www.janbasktraining.com/online-qa-training"><li>QA Testing</li></a>
                <a href="https://www.janbasktraining.com/devops-certification-training"><li>DevOps</li></a>
                 <a href="https://www.janbasktraining.com/online-java-training"><li>Java</li></a>
                 <a href="https://www.janbasktraining.com/dotnet-training"><li>.NET</li></a>
                 <a href="https://www.janbasktraining.com/online-python-training"><li>Python</li></a>
                  <a href="https://www.janbasktraining.com/blockchain-certification-training"><li>Blockchain</li></a>
                 <a href="https://www.janbasktraining.com/oracle-dba-training"><li>Oracle DBA</li></a>
                <a href="https://www.janbasktraining.com/iphone-application-training"><li>iOS Developer</li></a>
				  </ul>
                </div>
				
				<div class="col-md-4 col-lg-4 col-sm-4 col-md-4 padding0">
                  <ul class="mega-menulist mega-menulist2">
                <a href="https://www.janbasktraining.com/business-analyst-training"><li>Business Analyst</li></a>
                <a href="https://www.janbasktraining.com/aws-training"><li>AWS</li></a>
				<a href="https://www.janbasktraining.com/hadoop-big-data-analytics"><li>Hadoop</li></a>
                 <a href="https://www.janbasktraining.com/data-science"> <li>Data Science</li></a>
                 <a href="https://www.janbasktraining.com/data-analytics-training"> <li>Data Analytics</li></a>
                 <a href="https://www.janbasktraining.com/digital-marketing-training"> <li>Digital Marketing</li></a>
                  
                 <a href="https://www.janbasktraining.com/android-training"> <li>Android Developer</li></a>
                 <a href="https://www.janbasktraining.com/vmware-training"> <li>VMWare</li></a>
                 <a href="https://www.janbasktraining.com/tableau-online-training"> <li>Tableau</li></a>
                 <a href="https://www.janbasktraining.com/ai-certification-training-online"> <li>Artificial Intelligence</li></a>
                </ul>
                </div>
				<div class="col-md-4 col-lg-4 col-sm-4 col-md-4 padding0">
                  
                </div>
               
            
          </ul>
        </li>
		<li class=""><a href="#" class="" style="border: 0px;" >Resources</a></li>
		<li class=""><a href="#" class="" style="border: 0px;" >About Us</a></li>
		
		<ul class="phone-strip">
	<li class="signline">Sign Up</li>
	<li class="">Login</li>
	</ul>
		
	<li class="mob-btn">+91 9910207821</li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- End Side Menu --> 
</nav>
