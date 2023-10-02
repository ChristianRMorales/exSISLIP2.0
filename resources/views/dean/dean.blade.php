<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('Student DashBoard')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

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
        <div class="profile-name">Ms. Maam Dean</div>
        <div class="profile-name">DEAN</div>
        <div class="profile-name">SCHOOL OF COMPUTER-STUDIES</div>


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
       
        <div class="excuse-slip-table"> 
                <table>
                    <thead>
                        <tr>
                            <th>Student Name</th>
                            <th>Yr Level Course</th>
                            <th>Student Course</th>
                            <th>Excuse Slip ID</th>
                            <th>Student ID</th>
                            <th>Requested Excuse Slip</th>
                            <th>Councilor Feedback</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Mark Y. Ligo</td>
                            <td>BSIT-4</td>
                            <td>Computer Science</td>
                            <td>123456</td>
                            <td>987654</td>
                            <td>
                                <button class="view-button"><i class="fas fa-eye"></i> View</button>
                            </td>
                            <td>
                                <button class="view-button"><i class="fas fa-eye"></i> View</button>
                            </td>
                        </tr>
                        <td>Andro Love Orat</td>
                            <td>BSIT-4</td>
                            <td>Computer Science</td>
                            <td>123456</td>
                            <td>987654</td>
                            <td>
                                <button class="view-button"><i class="fas fa-eye"></i> View</button>
                            </td>
                            <td>
                                <button class="view-button"><i class="fas fa-eye"></i> View</button>
                            </td>
                        <!-- Add more rows for each excuse slip -->
                    </tbody>
                </table>
            </div>



            
        </div>
    </div>
</div>

        
</body>


</html>
<style>

.main-container {
    width: calc(200% - 210px);
    margin:  30px 260px;
    transition: 0.3s;
    
}


.main.container .container-fluid{
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}


.navmenu > ul > li:first-child {
    background: rgba(13, 62, 32, 0.98);
    width: 100%;
    list-style-type: none;
}

.navmenu > ul > li:first-child {
    padding: 15px 10px;
    border: none;
    font-weight: bold;
    font-size: 1.2em;
    font-family: 'Custom Fonts', sans-serif;
    border-radius: 3px 3px 0 0;
    -moz-border-radius: 3px 3px 0 0;
    -webkit-border-radius: 3px 3px 0 0;
    text-align: left;
    color: #fff;
}

.inline-navbar {
    z-index: 1;
    background-color: rgba(13,62,32,0.98);
    background-image: linear-gradient(to right, rgba(13,62,32,0.98), rgba(2,28,2,.98));
    width: calc(100% - 0%);
    height: 100px;
    display: flex;
    top: 0;
    position: static;

    
}

.yellow-navbar{
    background-color: rgba(254,192,57);
    height: 30px;
    margin-top: 0px;

}

.bg-image {
    background-image: url('bg.png'); /* Update this path */
    background-repeat: no-repeat fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    width: calc(100% - 0%);
    /* Add more styles as needed */
}



.logo {
    background-image: url(usjr_trans.png);
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center;
    margin-top: 1px;
    position: absolute;
    height: 120px;
    width: 140px;
    z-index: 1;
    padding: 20px;
    


}

.sis {
    display: flex;
    font-size: larger;
    align-items: center;
    /* background-color: rgba(13,62,32,0.98); */
    padding: 40px 150px;

}

.sis .yellow {
    color: #FFD700; /* Yellow color */
    font-weight: bold;
    padding: 5px;
    font-size: xx-large;
}

.sis .White {
    color: whitesmoke; /* White color */
    font-weight: bold;
    padding: 0px;
    font-size: large;

}

.navigation a {
    color: white; /* White color for links */
    text-decoration: none;
    padding: 10p 200px;
    margin-left: 10px;
}

.navigation a:hover {
    text-decoration: none; /* Underline on hover */
    display: flex;
    align-items: center;
    padding: 10px 100px;
}

.sidebar {
    z-index: 0;
    background: #fec039;
    position: absolute;
    top: 90;
    width: 250px;
    height: calc(100% - 9%);
    /* opacity: .9; */
    transition: 0.3s;
    transition-property: width;
    overflow-y: auto;
        }

        .profile-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 30px;
            margin-top:50px;
        }

        .profile-image {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-color: #fff;
            margin-bottom: 10px;
        }

        .profile-name {
            font-size: 18px;
            font-weight: bold;
        }

        .divider{
            height: 0;
            margin: .5rem 0;
            overflow: hidden;
            border-top: 1px solid #e9ecef;

        }
        .nav-right{
            padding: 0 900px;
            ;
        }

        .excuse-slip-section {
    width: 45%;
    margin-top: 50px;
}

.add-excuse-button {
    padding: 10px 20px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

.add-excuse-button:hover {
    background-color: #0056b3;
}

.excuse-slip-table {
    width: 45%;
    margin-top: 50px;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

table th, table td {
    border: 1px solid #ccc;
    padding: 8px;
    text-align: center;
}

.pending-status {
    color: orange;
}

.approved-status {
    color: green;
}

.excuse-slip-table {
            margin-top: 20px;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
        }
        
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        th {
            background-color: #f2f2f2;
        }
        
        .view-button,
        .approve-button {
            padding: 5px 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }
        
        .view-button:hover,
        .approve-button:hover {
            background-color: #0056b3;
        }
</style>

