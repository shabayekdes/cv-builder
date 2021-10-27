<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>JobHunt | Profile - Esmail</title>

    <link rel="shortcut icon" href="/profile/images/fav.jpg">
    <link rel="stylesheet" href="/profile/css/bootstrap.min.css">
    <link rel="stylesheet" href="/profile/css/fontawsom-all.min.css">
    <link rel="stylesheet" type="text/css" href="/profile/css/style.css" />
</head>

<body>
    <div class="container-fluid overcover">
        <div class="container profile-box">
            <div class="row">
                <div class="col-md-4 left-co">
                    <div class="left-side">
                        <div class="profile-info">
                            <img src="{{ $candidate->profile_photo_path }}" alt="">
                            <h3>{{ $candidate->name }}</h3>
                            <span>Web Designer</span>
                        </div>
                        <h4 class="ltitle">Contact</h4>
                        <div class="contact-box pb0">
                            <div class="icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="detail">
                                +123 8767 5465 <br>
                                +122 2345 3763
                            </div>
                        </div>
                        <div class="contact-box pb0">
                            <div class="icon">
                                <i class="fas fa-globe-americas"></i>
                            </div>
                            <div class="detail">
                                info@smarteyeapps.com <br>
                                www.smarteyeapps.com
                            </div>
                        </div>
                        <div class="contact-box">
                            <div class="icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="detail">
                                First Floor,Vincent Plaza, Toranto, Canada
                            </div>
                        </div>
                        <h4 class="ltitle">Contact</h4>
                        <ul class="row social-link no-margin">
                            <li><i class="fab fa-facebook-f"></i></li>
                            <li><i class="fab fa-twitter"></i></li>
                            <li><i class="fab fa-google-plus-g"></i></li>
                            <li><i class="fab fa-linkedin-in"></i></li>
                            <li><i class="fab fa-github"></i></li>
                        </ul>
                        <h4 class="ltitle">Referencess</h4>

                        <div class="refer-cov">
                            <b>Jonney Smith</b>
                            <p>CEO Casinocarol</p>
                            <span>p +00 890 1232 8767</span>
                        </div>
                        <div class="refer-cov">
                            <b>Jonney Smith</b>
                            <p>System Administrator</p>
                            <span>p +00 890 1232 8767</span>
                        </div>
                        <h4 class="ltitle">Hobbies</h4>
                        <ul class="hoby row no-margin">
                            <li><i class="fas fa-pencil-alt"></i> <br> Writing</li>
                            <li><i class="fas fa-bicycle"></i> <br> Cycling</li>
                            <li><i class="fas fa-futbol"></i> <br> Football</li>
                            <li><i class="fas fa-film"></i><br> Movies</li>
                            <li><i class="fas fa-plane-departure"></i> <br>Travel</li>
                            <li><i class="fas fa-gamepad"></i> <br> Games</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8 rt-div">
                    <div class="rit-cover">
                        <div class="hotkey">
                            <h1 class="">{{ $candidate->name }}</h1>
                            <small>Web Designer</small>
                        </div>
                        <h2 class="rit-titl"><i class="far fa-user"></i> Profile</h2>
                        <div class="about">
                            <p>{{ $candidate->bio }}</p>
                            <div class="btn-ro row no-margin">
                                <ul class="btn-link">
                                    <li>
                                        <a href=""><i class="fas fa-paper-plane"></i> Hire Me</a>
                                    </li>
                                    <li>
                                        <a href=""><i class="fas fa-cloud-download-alt"></i> Download Resume</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <h2 class="rit-titl"><i class="fas fa-briefcase"></i> Work Experiance</h2>
                        @foreach ($candidate->works as $work)
                            <div class="work-exp">
                                <h6>{{ $work->title }} <span>2008-2011</span></h6>
                                <i>{{ $work->company_name }}</i>
                                <p>{{ $work->description }}</p>
                                {{-- <ul>
                                    <li><i class="far fa-hand-point-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. </li>
                                    <li><i class="far fa-hand-point-right"></i> Sorem dolor sit amet, consectetur. </li>
                                    <li><i class="far fa-hand-point-right"></i> Porem ipsum sit amet, consectetur adipiscing </li>
                                </ul> --}}
                            </div>
                        @endforeach


                        <h2 class="rit-titl"><i class="fas fa-graduation-cap"></i> Education</h2>
                        <div class="education">
                            <ul class="row no-margin">
                                <li class="col-md-6"><span>2013-2015</span> <br>
                                    Master Degree - Cambridg University</li>
                                <li class="col-md-6"><span>2013-2015</span> <br>
                                    Master Degree - Cambridg University</li>
                                <li class="col-md-6"><span>2013-2015</span> <br>
                                    Master Degree - Cambridg University</li>
                                <li class="col-md-6"><span>2013-2015</span> <br>
                                    Master Degree - Cambridg University</li>
                            </ul>
                        </div>

                        <h2 class="rit-titl"><i class="fas fa-users-cog"></i> Skills</h2>
                        <div class="profess-cover row no-margin">
                            <div class="col-md-6">
                                <div class=" prog-row row">
                                    <div class="col-sm-6">
                                        Photoshop
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row prog-row">
                                    <div class="col-sm-6">
                                        PHP
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="row prog-row">
                                    <div class="col-sm-6">
                                        Web Design
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row prog-row">
                                    <div class="col-sm-6">
                                        Web Development
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>






                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="/profile/js/jquery-3.2.1.min.js"></script>
<script src="/profile/js/popper.min.js"></script>
<script src="/profile/js/bootstrap.min.js"></script>
<script src="/profile/js/script.js"></script>


</html>