
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Resume Website Template Free Download</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Resume Website Template Free Download" name="keywords">
        <meta content="Resume Website Template Free Download" name="description">

        <!-- Favicon -->
       @include('frontend.includes.style')
    </head>

    <body data-spy="scroll" data-target=".navbar" data-offset="51">
        <div class="wrapper">
            <div class="sidebar">
                <div class="sidebar-header">
                    <img src="{{asset('/frontend/assets/')}}/img/shu.png" alt="Image">
                </div>
                <div class="sidebar-content">
                    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                        <a href="#" class="navbar-brand">Navigation</a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarCollapse">
                            <ul class="nav navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#header">Home<i class="fa fa-home"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#about">About<i class="fa fa-address-card"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#experience">Experience<i class="fa fa-star"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#service">Service<i class="fa fa-tasks"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#portfolio">Portfolio<i class="fa fa-file-archive"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#contact">Contact<i class="fa fa-envelope"></i></a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="sidebar-footer">
                    <a class="btn" href="https://github.com/shuvohal" target="_blank">
                    <i class="fab fa-github"></i>
                    </a>
                    <a href="https://www.facebook.com/shuvo.halder.9847/"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.linkedin.com/in/shuvo-halder-588817302/"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="content">
                <!-- Header Start -->
                <div class="header" id="header">
                    <div class="content-inner">
                        <p>I'm</p>
                        <h1>Shuvo Halder(SH)</h1>
                        <h2></h2>
                        <div class="typed-text"> Web Developer, Front End Developer, Backend Devloper,working Laravel base project</div>
                    </div>
                </div>
                <!-- Header End -->
                
                <!-- Large Button Start -->
                <div class="large-btn">
                    <div class="content-inner">
                        <a class="btn" href=""><i class="fa fa-download"></i>Resume</a>
                        <a class="btn" href="#"><i class="fa fa-hands-helping"></i>Hire Me</a>
                    </div>
                </div>
                <!-- Large Button End -->
                
                <!-- About Start -->
                @include('frontend.includes.about')
                <!-- About End -->
                
                <!-- Education Start -->
                @include('frontend.includes.education')
                <!-- Education Start -->
                
                <!-- Experience Start -->
                @include('frontend.includes.experiance')
                <!-- Experience Start -->
                
                <!-- Service Start -->
                @include('frontend.includes.service')
                <!-- Service Start -->
                
                <!-- Portfolio Start -->
                @include('frontend.includes.protfolilo')
                <!-- Portfolio Start -->
                
                <!-- Review Start -->
                @include('frontend.includes.review')
                <!-- Review End -->
                
                <!-- Contact Start -->
                @include('frontend.includes.contact')
                <!-- Contact End -->
                
                <!-- Footer Start -->
                @include('frontend.includes.footer')
                <!-- Footer Start -->
            </div>
        </div>
        
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-angle-double-up"></i></a>
        
        <!-- JavaScript Libraries -->
         @include('frontend.includes.script')
    </body>
</html>
