<header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" name="search" action="search-visitor.php" method="post">
                                <input class="au-input au-input--xl" type="text" name="searchdata" id="searchdata" placeholder="Search by names &amp; mobile number..." />
                                <button class="au-btn--submit" type="submit" name="search" style="background-color:#CC6699">
                                    <i class="zmdi zmdi-search" ></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                 <?php
$adminid=$_SESSION['avmsaid'];
$ret=mysqli_query($con,"select AdminName from tbladmin where ID='$adminid'");
$row=mysqli_fetch_array($ret);
$name=$row['AdminName'];

?>   
                                    
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-2.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="admin-profile.php" style="color:#CC6699"><?php echo $name; ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image" style="color:#CC6699">
                                                    <a href="#">
                                                        <img src="images/icon/avatar-2.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#" style="color:#CC6699"><?php echo $name; ?></a>
                                                    </h5>
                                                   
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="admin-profile.php" style="color:#CC6699">
                                                        <i class="zmdi zmdi-account" style="color:#CC6699"></i>Admin Profile</a>
                                                </div>
                                                <div class="account-dropdown__item" >
                                                    <a href="change-password.php" style="color:#CC6699">
                                                        <i class="zmdi zmdi-settings" style="color:#CC6699"></i>Change Password</a>
                                                </div>
                                               
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="logout.php" style="color:#CC6699">
                                                    <i class="zmdi zmdi-power" style="color:#CC6699"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>