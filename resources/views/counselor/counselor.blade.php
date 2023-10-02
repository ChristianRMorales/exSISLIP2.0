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
       
        <div class="excuse-slip-table">
                <table>
                    <thead>
                        <tr>
                            <th>Student Name</th>
                            <th>Yr Level Course</th>
                            <th>Student Course</th>
                            <th>Excuse Slip ID</th>
                            <th>Student ID</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John Doe</td>
                            <td>BSIT-4</td>
                            <td>Computer Science</td>
                            <td>123456</td>
                            <td>987654</td>
                            <td>
                                <a href="/counselor_view" class="view-button">
                                <i class="fas fa-eye"></i>View
                                </a>
                                <button class="approve-button"><i class="fas fa-check"></i> Approve</button>
                            </td>
                        </tr>
                        <td>John Doe</td>
                            <td>BSIT-4</td>
                            <td>Computer Science</td>
                            <td>123456</td>
                            <td>987654</td>
                            <td>
                                <button class="view-button"><i class="fas fa-eye"></i> View</button>
                                <button class="approve-button"><i class="fas fa-check"></i> Approve</button>
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


.excuse-slip-section {
    width: 45%;
    margin-top: 50px;
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

