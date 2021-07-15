<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font Family -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="{{asset("assets/css/style.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/bootstrap/bootstrap.css")}}">
    <title>Company Name</title>
</head>
<body>
        <!-- Header section -->
        <section id="navbar_section">
            <div class="container">
                <nav class="navbar justify-content-between">
                    <a class="logo" href="">Company Name</a>
                    <div class="navbar-toggler">
                        <img class="mobile-manu-icon" src="{{asset("assets/icons/mobile-menu-icon.svg")}}" alt="">
                    </div>
                  
                    <div class="navbar-nav">
                        <ul class="nav-list">
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{URL::to("/")}}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="{{URL::to("/contact")}}">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="{{URL::to("/about")}}">About</a>
                            </li>
                        </ul>
                        @if(Route::has("login"))
                            @auth
                                <a href="{{url("/home")}}">Dashboard</a>
                            @else
                                <div class="actions d-flex">
                                    <a href="{{route("login")}}" class="login-btn">Login</a>
                                </div>
                            @endauth
                        @endif
                    </div>
                </nav>
            </div>
        </section>

        @yield('content')
        <!-- Footer Section -->
        <section id="footer">
            <div class="container">
                <div class="row" style="margin: 20px 0;">
                    <div class="col-md-8 mb-5 mb-md-0">
                        <h3>Company Name</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis doloremque doloribus atque officia? Minus, obcaecati natus esse praesentium harum laudantium, quos, architecto inventore numquam porro quidem error illo cum tempore.</p>
                        <div class="d-flex">
                            <input type="text" placeholder="Your email">
                            <button class="btn subscribe">Join us</button>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Links</h4>
                                <ul class="p-0">
                                    <li><a href="#"> Home</a></li>
                                    <li><a href="">About</a></li>
                                    <li><a href="">Contact</a></li>
                                    <li><a href="">Login</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="bottom">
                        <div class="container">
                            <div class="row mt-3">
                                <div class="col-md-6 copyright d-flex">
                                    <p>© 2021 Company name. All Rights Reserved.</p>
                                </div>
                                <ul class="col-md-6 d-flex justify-content-end">
                                    <li>
                                        <button class="btn social-icon" href="">
                                            <svg class="facebook" width="34" height="34" viewBox="0 0 34 34" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="34" height="34" rx="8" fill="#00B586" fill-opacity="0.1"/>
                                                <path d="M21.1722 8.75343L19.0892 8.75C16.7491 8.75 15.2368 10.3438 15.2368 12.8107V14.6829H13.1425C12.9615 14.6829 12.815 14.8336 12.815 15.0195V17.7322C12.815 17.9181 12.9617 18.0686 13.1425 18.0686H15.2368V24.9136C15.2368 25.0995 15.3834 25.25 15.5644 25.25H18.2968C18.4778 25.25 18.6244 25.0993 18.6244 24.9136V18.0686H21.0731C21.2541 18.0686 21.4006 17.9181 21.4006 17.7322L21.4016 15.0195C21.4016 14.9303 21.367 14.8448 21.3057 14.7816C21.2444 14.7184 21.1608 14.6829 21.0739 14.6829H18.6244V13.0958C18.6244 12.333 18.8013 11.9457 19.7687 11.9457L21.1718 11.9452C21.3527 11.9452 21.4992 11.7945 21.4992 11.6087V9.08988C21.4992 8.90432 21.3528 8.75378 21.1722 8.75343Z" fill="currentColor"/>
                                            </svg>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="btn social-icon" href="">
                                            <svg class="twitter" width="34" height="34" viewBox="0 0 34 34" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="34" height="34" rx="8" fill="#00B586" fill-opacity="0.1"/>
                                                <path d="M24.875 12.3295C24.2953 12.5754 23.6733 12.7422 23.0198 12.8167C23.6871 12.4341 24.1979 11.8272 24.44 11.1063C23.814 11.4606 23.1231 11.7179 22.3869 11.8574C21.7974 11.2552 20.9589 10.8801 20.0288 10.8801C18.2445 10.8801 16.7977 12.2654 16.7977 13.973C16.7977 14.2152 16.8262 14.4517 16.8814 14.6779C14.1965 14.5488 11.8158 13.3171 10.2224 11.4455C9.94382 11.9017 9.78537 12.4331 9.78537 13.0005C9.78537 14.0739 10.3562 15.0209 11.2223 15.575C10.6928 15.5581 10.1948 15.4186 9.75881 15.1868V15.2254C9.75881 16.7238 10.8729 17.9743 12.3502 18.2589C12.0795 18.3287 11.7941 18.3673 11.4989 18.3673C11.2902 18.3673 11.0885 18.3475 10.8906 18.3098C11.302 19.5396 12.4949 20.4339 13.9082 20.4585C12.8029 21.2878 11.4093 21.7806 9.89562 21.7806C9.63482 21.7806 9.37793 21.7655 9.125 21.7382C10.555 22.6175 12.2528 23.1301 14.0775 23.1301C20.021 23.1301 23.2698 18.4163 23.2698 14.3283L23.259 13.9278C23.8938 13.4943 24.4429 12.9496 24.875 12.3295Z" fill="currentColor"/>
                                            </svg>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="btn social-icon" href="">
                                            <svg class="instagram" width="34" height="34" viewBox="0 0 34 34" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="34" height="34" rx="8" fill="#00B586" fill-opacity="0.1"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.5 17C9.5 15.1395 9.5 14.2092 9.72279 13.4505C10.2501 11.6546 11.6546 10.2501 13.4505 9.72279C14.2092 9.5 15.1395 9.5 17 9.5C18.8605 9.5 19.7908 9.5 20.5495 9.72279C22.3454 10.2501 23.7499 11.6546 24.2772 13.4505C24.5 14.2092 24.5 15.1395 24.5 17C24.5 18.8605 24.5 19.7908 24.2772 20.5495C23.7499 22.3454 22.3454 23.7499 20.5495 24.2772C19.7908 24.5 18.8605 24.5 17 24.5C15.1395 24.5 14.2092 24.5 13.4505 24.2772C11.6546 23.7499 10.2501 22.3454 9.72279 20.5495C9.5 19.7908 9.5 18.8605 9.5 17ZM17 13.0294C14.8072 13.0294 13.0294 14.8073 13.0294 17C13.0294 19.1928 14.8072 20.9706 17 20.9706C19.1928 20.9706 20.9706 19.1928 20.9706 17C20.9706 14.8073 19.1928 13.0294 17 13.0294ZM17 19.4816C15.6321 19.4816 14.5184 18.3679 14.5184 17C14.5184 15.6312 15.6321 14.5184 17 14.5184C18.3679 14.5184 19.4816 15.6312 19.4816 17C19.4816 18.3679 18.3679 19.4816 17 19.4816ZM21.7975 12.7316C21.7975 13.0238 21.5606 13.2607 21.2684 13.2607C20.9762 13.2607 20.7393 13.0238 20.7393 12.7316C20.7393 12.4394 20.9762 12.2025 21.2684 12.2025C21.5606 12.2025 21.7975 12.4394 21.7975 12.7316Z" fill="currentColor"/>
                                            </svg>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <script src="{{asset("assets/js/main.js")}}"></script>
</body>
</html>

<style>
    .active{
        background-color: #00B586;
        color: white !important;
    }
</style>