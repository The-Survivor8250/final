<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental Invoice</title>
    <link rel="stylesheet" href="invoice.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <script>
        function printInvoice() {
            window.print();
        }
    </script>
</head>
<body>
<div class="main">    
    <header class="navbar">
        <a id="logo" href="/html/index.html">SAFAR</a>
        <a href="/html/cars.html">Cars</a>
        <a href="/html/about_us.html">About Us</a>
        <a href="/html/security_p.html">Security Policy</a>
        <button><a href="/html/signup.html">Login/Signup</a></button>
    </header> <hr>
    <div class="invoice-container">
        <div class="invoice-header">
            <h1>Car Rental Invoice</h1>
                <?php
                $date = date('Y-m-d');
                $invoiceNumber = 'INV' . date('Ymd') . rand(1000, 9999);
                echo "<div class='invoice-info'><span class='number'>Invoice Number: $invoiceNumber</span><span class='date'>Date: $date</span></div>";
                ?>
        <div class="com_d">        
        <div class="car-details">
                    <p>Car Model: Tesla Model 3</p>
                    <p>Car Color: White</p>
                    <p>License Plate: XYZ 1234</p>
                    <p>Rental Period: 2023-05-01 to 2023-05-10</p>
                </div>

            <div class="company-details">
                    <p>CarRental Co.</p>
                    <p>1234 Main St, Anytown, USA</p>
                    <p>Phone: (123) 456-7890</p>
                    <p>Email: info@carrental.com</p>
                </div>
                
        </div>        
        </div>
        <section class="customer-details">
            <h2>Customer Details</h2>
            <p>Name: John Doe</p>
            <p>Address: 5678 Elm St, Somecity, USA</p>
            <p>Phone: (987) 654-3210</p>
            <p>Email: johndoe@example.com</p>
        </section>
        <section class="rental-details">
            <h2>Rental Details</h2>
            <table>
                <tr>
                    <th>Car</th>
                    <th>Rental Date</th>
                    <th>Return Date</th>
                    <th>Daily Rate</th>
                    <th>Total Days</th>
                    <th>Total Cost</th>
                </tr>
                <tr>
                    <td>Toyota Camry</td>
                    <td>2024-05-20</td>
                    <td>2024-05-23</td>
                    <td>$50.00</td>
                    <td>3</td>
                    <td>$150.00</td>
                </tr>
            </table>
        </section>
        <section class="payment-details">
            <h2>Payment Details</h2>
            <p>Subtotal: $150.00</p>
            <p>Tax (10%): $15.00</p>
            <p><strong>Total: $165.00</strong></p>
        </section>
        <footer class="invoice-footer">
            <div class="footer-content">
                <div class="dealer-signature">
                    <p>Dealer Signature with Date:</p>
                    <p>_______________________</p>
                </div>
                <div class="dealer-address">
                    <p>Dealer Address:</p>
                    <p>Dealer Name</p>
                    <p>5678 Elm St, Anytown, USA</p>
                    <p>Phone: (987) 654-3210</p>
                    <p>Email: dealer@carrental.com</p>
                </div>
            </div>
        </footer>
    </div>
    <div class="print-button-container">
        <button onclick="printInvoice()">Print Invoice</button>
    </div>
</body>
</html>

