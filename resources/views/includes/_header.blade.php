<nav class="navbar navbar-expand-lg navbar-dark   ">
    <!-- Brand -->
    <a class="navbar-brand" href="/">
        <img src="{{asset('assets/img/logo.png')}}">

    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
      <!-- data target: is the items that you wanted in the slider-->
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Links -->
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav">
            <li class="nav-item items">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item items">
                <a class="nav-link" href="/games">Games</a>
            </li>

            <li class="nav-item items">
                <a class="nav-link" href="/ContactUs">Support</a>
            </li>



            <li class="nav-item items">
                <a class="nav-link" href="/Features">Features</a>
            </li>
            <li class="nav-item items">
                <a class="nav-link" href="/about">About Us</a>
            </li>


            <li class="nav-item ml-auto"><a href="../signup" id="loginBtn" class="nav-link">Login / Sign up</a></li>
            <li id="searchBtn" class="nav-item">
                <a class="nav-link" style="font-size: 20px"><i class="fas fa-search"></i></a>
                <form action="/search" method="get">
                    <input id="navText" name="search" placeholder="Search..." class="defult" type="text">
                </form>

            </li>
        </ul>
    </div>
</nav>

<script>
    const searchBtn = document.getElementById("searchBtn");
    const navText = document.getElementById("navText");
    searchBtn.addEventListener('click', () => {
        console.log("en")
        navText.classList.add("onHoverScale")
        navText.focus()
    })
    navText.addEventListener("focusout", () => {
        navText.classList.remove("onHoverScale")
    })
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js" integrity="sha256-lPE3wjN2a7ABWHbGz7+MKBJaykyzqCbU96BJWjio86U=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TimelineMax.min.js" integrity="sha256-fIkQKQryItPqpaWZbtwG25Jp2p5ujqo/NwJrfqAB+Qk=" crossorigin="anonymous"></script>
{{-- <script src="../../assets/javascripts/js.js"></script> --}}