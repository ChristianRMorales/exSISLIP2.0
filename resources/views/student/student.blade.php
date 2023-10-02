<x-layout>
<div class="main-container">
    <div class="container-fluid">
    <div class="container-fluid"></div>
    <div class="container">
        @yield('content')</div>
        <div class="excuse-slip-section">
            <a href="/create"><button class="add-excuse-button"><i class="fas fa-plus"></i> Add Excuse Slip</button></a>
        </div>
        <div class="excuse-slip-table">
            <h3>Current Excuse Slips</h3>
            <table>
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2023-08-16</td>
                        <td class="pending-status">Pending</td>
                    </tr>
                    <tr>
                        <td>2023-08-15</td>
                        <td class="approved-status">Approved</td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
    </div>
</div>
</x-layout>
        
</body>




<style>



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
</style>

