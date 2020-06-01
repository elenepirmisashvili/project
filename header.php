<style>

    .header{
        width: 100%;
        padding-left: 15px;
        padding-right: 60px;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        z-index: 500;
    }
    .header_txt{
        justify-content: space-around;
        display: flex;
        align-items: center;
        font-weight: bold;
        font-family: sans-serif;
        font-size: 15px;
        margin-top: 15px;
    }
    nav{
        text-decoration: none;
        text-transform: uppercase;
    }
    .nav_link{
        position: relative;
        display: inline-block;
        vertical-align: top;
        margin:0 10px;
        text-decoration: none;
        color: #3a3a3a;
        transition: color 0.2s linear;
    }
    .nav_link:hover{
        color: #ebebeb;
    }
    .nav_link:after{
        content:"";
        display: block;
        position: absolute;
        opacity: 0;
        top: 100%;
        background-color: #ebebeb;
        width: 100%;
        height: 2px;
        transition: opacity 0.2s linear;
    }
    .nav_link:hover:after{
        opacity: 1;
    }
    .nav2{
        right: 0;
    }
</style>
<div class="cont_heder">
<header class="header">
        <div class="header_txt">
            <nav class="nav1">
                <a class="nav_link"  href="index.php">home</a>
                <a class="nav_link"  href="fastfood.php">Fast food</a>
                <a class="nav_link"  href="Restaurant.php">restaurant</a>
                <a class="nav_link"  href="cafe.php">Cafe bar</a>
                <a class="nav_link"  href="relax.php">Relax time</a>
                <a class="nav_link"  href="index.php">about us</a>
            </nav>
            <nav class="nav2">
                <a class="nav_link"  href="login.php">Login</a>
                <a class="nav_link"  href="registration.php">Register</a>
            </nav>
        </div>
</header>
</div>