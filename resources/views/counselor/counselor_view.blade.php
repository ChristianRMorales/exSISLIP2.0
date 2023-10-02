<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('Student DashBoard')</title>
    @vite(['resources/css/app.css', 'resources/scss/home.scss', 'resources/js/app.js'])
</head>
<body class="bg-image">
<header>
        <nav class="inline-navbar">
 <ul> 
        <div class="logo"></div>
        <div class="sis">
            <span class="yellow">Ex</span>
            <span class="White">Sis</span>
            <span class="yellow">Slip</span>
            

            <div class="nav-right">
                <a href="#"><i class="fas fa-home"></i></a>
                <a href="http://127.0.0.1:8000/" onclick="event.preventDefault();">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
                
            </div>
            

                        
                    </div>
            </nav>
        </div>
        <nav class="yellow-navbar">
</ul>

</header>
<div class="sidebar">
    <div class="profile-container">
        <div class="profile-image"></div>
        <div class="profile-name">Ms. Maam Counselor</div>
        <div class="profile-name">Counselor</div>
        <div class="profile-name">SCS , SED , SBM</div>


    </div>
    <div class="divider"></div>
    <div class="divider"></div>
    <div class="navmenu"><ul>
        <li><span>menu</span></li>
        <li>AttendanceSlip</li>
    </ul></div>    </div>

<div class="main-container">
    <div class="container-fluid">
    <div class="container-fluid"></div>
    <div class="container">
        @yield('content')</div>

            <div class="excuse-slip-section">
                <h1>Excuse Slip Details</h1>
                <div class="excuse-slip-table">
                    <div class="excuse-card">
                        <div class="student-profile">
                            <div class="profile-image"></div> <!-- You can display the actual profile image here -->
                            <div class="student-id">Student ID: </div>
                        </div>
                        <div class="student-details">
                            <h2>Andro Orat</h2>
                            <p>Yr Level Course: </p>
                            <p>Student Course: </p>
                            <p>Excuse Slip ID: </p>
                        </div>
                        <div class="action-buttons">
                            <button class="approve-button"><i class="fas fa-check"></i> Approve</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <style>
    .excuse-slip-section {
    border: 1px solid #ccc; /* Add a border around the section */
    border-radius: 20px; /* Add border-radius to create rounded corners */
    padding: 20px;
    width: 150vh;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Add a box shadow for depth */
}</style>