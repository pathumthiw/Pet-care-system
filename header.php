<div class="navbar">
        <nav>
            <img src="../images/logo.jpg">
            <a href="Home">Home</a>
            <a href="../About US/about.html">About Us</a>
            <a href="../services/service.html">Services</a>
            <a href="#">Team</a>
            <a href="../contact/contact.html">Contact Us</a>
            <a href="../staff/staff.html">Staff Details</a>
            <a href="#">Blog</a>
            <div class="icon">
                <a href="../profile/profile.html"><i class="ri-hand-heart-fill"></i></a>&nbsp;&nbsp;
                <a href="#"><i class="ri-user-fill"></i></a>
                <a href="../staff-dash/staff-dash.html"><i class="ri-dashboard-fill"></i></a>

            </div>
           
        </nav>
    </div>
<style>
    .navbar img{
    width:60px;
    height:50px;
    }
    nav{
        display:flex;
        justify-content: space-between;
        font-size: 15px;
        padding:  4px 350px;
        align-items:center;
        padding-right: 10px;
        
        
    }
    nav a{
        position: relative;
        text-decoration: none;
        font-size: 20px;
        padding: 6px 10px 12px 5px;
        padding-left: 30px;
    }
    .navbar{
        background-color:aquamarine;
    }
    a::after{
        content:"";
        position:absolute;
        background-color: black;
        height: 3px;
        width: 0px;
        left:0px;
        bottom: 1px;
        transition: 0.5s;
    }
    a:hover::after{
        width: 100%;
    }

    .profile img{
        float: right;
        padding-left: 100px;
    }
    nav .icon{
        padding-left: 75px;
        gap:50;
    }
</style>