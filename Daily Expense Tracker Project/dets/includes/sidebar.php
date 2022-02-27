<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>


<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="profile-sidebar">
        <div class="profile-userpic">
            <img src="https://scontent.fvii1-1.fna.fbcdn.net/v/t1.6435-9/106589837_2740187412906108_8735697526277552729_n.jpg?_nc_cat=103&ccb=1-5&_nc_sid=174925&_nc_ohc=iZxAgXiV_fsAX9EgJHS&_nc_ht=scontent.fvii1-1.fna&oh=00_AT-HKeSPbPcW0m2EAXRQjQxUQXhb2pRPRHbC7_YMu5JQig&oe=62409497" class="img-responsive" alt="">
        </div>
        <div class="profile-usertitle">
            <?php
$uid=$_SESSION['detsuid'];
$ret=mysqli_query($con,"select FullName from tbluser where ID='$uid'");
$row=mysqli_fetch_array($ret);
$name=$row['FullName'];

?>
            <div class="profile-usertitle-name"><?php echo $name; ?></div>
            <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="divider"></div>

    <ul class="nav menu">
        <li class="active"><a href="dashboard.php"><em class="fa fa-dashboard">&nbsp;</em>Trang Chủ</a></li>



        <li class="parent "><a data-toggle="collapse" href="#sub-item-1">
                <em class="fa fa-navicon">&nbsp;</em>Chi Phí <span data-toggle="collapse" href="#sub-item-1"
                    class="icon pull-right"><em class="fa fa-plus"></em></span>
            </a>
            <ul class="children collapse" id="sub-item-1">
                <li><a class="" href="add-expense.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> Thêm Chi Phí
                    </a></li>
                <li><a class="" href="manage-expense.php">
                        <span class="fa fa-arrow-right">&nbsp;</span>Quản Lý Chi Phí
                    </a></li>

            </ul>

        </li>

        <li class="parent "><a data-toggle="collapse" href="#sub-item-2">
                <em class="fa fa-navicon">&nbsp;</em>Báo Cáo Chi Tiêu <span data-toggle="collapse" href="#sub-item-1"
                    class="icon pull-right"><em class="fa fa-plus"></em></span>
            </a>
            <ul class="children collapse" id="sub-item-2">
                <li><a class="" href="expense-datewise-reports.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> Chi Phí Hàng Ngày
                    </a></li>
                <li><a class="" href="expense-monthwise-reports.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> Chi Phí Hàng Tháng
                    </a></li>
                <li><a class="" href="expense-yearwise-reports.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> Chi Phí Hàng Năm
                    </a></li>

            </ul>
        </li>





        <li><a href="user-profile.php"><em class="fa fa-user">&nbsp;</em> Thông tin cá nhân</a></li>
        <li><a href="change-password.php"><em class="fa fa-clone">&nbsp;</em> Thay Đổi Thông Tin</a></li>
        <li><a href="logout.php"><em class="fa fa-power-off">&nbsp;</em> Đăng Xuất</a></li>

    </ul>
</div>