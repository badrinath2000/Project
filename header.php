<?php require_once("lockc.php"); ?>
<nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"></a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-right">
				
			    <li class="dropdown">
				<?php if($userpic=="") { ?>
	        		<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="images/1.png" alt=""/><span class="badge"></span></a>
				<?php } else { ?>
					<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="uploads/<?php echo $userpic; ?>" alt=""/><span class="badge">9</span></a>
				<?php } ?>
	        		<ul class="dropdown-menu">
						
						<li class="m_2"><a href="logout.php?logout=true"><i class="fa fa-lock"></i> Logout</a></li>	
	        		</ul>
	      		</li>
			</ul>
			
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw nav_icon"></i>Dashboard</a>
                        </li>
                        
                    </ul>
					<ul class="nav" id="side-menu">
                        <li>
                            <a href="vwcmpnyz.php"><i class="fa fa-dashboard fa-fw nav_icon"></i>View companies</a>
                        </li>
                        
                    </ul>
					 <ul class="nav" id="side-menu">
                        <li>
                            <a href="home.php"><i class="fa fa-dashboard fa-fw nav_icon"></i>Home</a>
                        </li>
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>