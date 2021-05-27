<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/loginsystem/welcome.php">LoginSystem</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item <?php if($page == 'home') {echo 'active';}?> ">
                <a class="nav-link" href="#"> Home <span class="sr-only">(current)</span> </a>
            </li>
            <li class="nav-item <?php if($page == 'aboutus') {echo 'active';}?>">
                <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item <?php if($page == 'contactus') {echo 'active';}?>">
                <a class="nav-link" href="#">Contacts</a>
            </li>
            <li class="nav-item <?php if($page == 'register') {echo 'active';}?>">
                <a class="nav-link" href="/Internship AkashPadhiyar/register.php">Register</a>
            </li>


        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>