<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental Invoice</title>
    <link rel="stylesheet" href="invoice.css">
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
            <h1>INVOICE</h1>
                <?php
                $date = date('Y-m-d');
                $invoiceNumber = 'INV' . date('Ymd') . rand(1000, 9999);
                echo "<div class='invoice-info'><span class='number'>Invoice Number: $invoiceNumber</span><span class='date'>Date: $date</span></div>";
                ?>
        <div class="com_d">        
        <div class="car-details">
                    <p>Car Model: Tesla Model</p>
                    <p>Car Color: Blue</p>
                    <p>License Plate: WB 64 6106</p>
                    <p>Rental Period: 2023-05-01 to 2023-05-10</p>
                </div>

            <div class="company-details">
                    <p>Safar Co.</p>
                    <p> Hakimpara, Siliguri, 734001</p>
                    <p>Phone: (+91) 98565-87452</p>
                    <p>Email: <a href= "mailto: safar@gmail.com">safar@gmail.com</a></p>
                </div>
                
        </div>        
        </div>
        <section class="customer-details">
            <h2>Customer Details</h2>
            <p>Name: John Doe</p>
            <p>Address: Dagapur, Siliguri, WB, 736156</p>
            <p>Phone: (+91) 98565-96586</p>
            <p>Email: <a href= "mailto: john24@gmail.com">john24@gmail.com</a></p>
        </section>
        <section class="rental-details">
            <h2>Rental Details</h2>
            <table>
                <tr>
                    <th>Car</th>
                    <th>Quantity</th>
                    <th>Rental Date</th>
                    <th>Return Date</th>
                    <th>Daily Rate</th>
                    <th>Total Days</th>
                    <th>Total Cost</th>
                </tr>
                <tr>
                    <td>Toyota Camry </td>
                    <td>1</td>
                    <td>2024-05-20</td>
                    <td>2024-05-23</td>
                    <td>RS 500.00</td>
                    <td>3</td>
                    <td>RS 1500.00</td>
                </tr>
                <tr>
                    <td><br><br><br><br><br></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </section>
        <section class="payment-details">
            <h2>Payment Details</h2>
            <p><strong>Mode of Payment- Card</strong></p>
            <p>Security Deposit(Refundable): 3000.00
            <p>Subtotal: RS 4500.00</p>
            <p>Tax (10%): RS 45.00</p>
            <P>CGST (5%) & SGST (5%) </P>
            <p>Advance Payment:RS 2000.00(Excluding Security Fee)</p>
            <p>Due Payment: RS 2500.00</p>
            <p><strong>Total: RS 4545.00</strong></p>
        </section>
        <footer class="invoice-footer">
            <div class="footer-content">
                <div class="dealer-signature">
                    <p>Dealer Signature with Date:</p>
                    <p>_________________________________</p>
                </div>
                <div class="dealer-address">
                    <p>Hakimpara, Siliguri, WB, 734001</p>
                    <p>Raju Bista</p>
                    <p>Siliguri, WB</p>
                    <p>Phone: (+91) 65445-32210</p>
                    <p>Email: <a href= "mailto: safar@gmail.com">safar@gmail.com</a></p>
                </div>
            </div>
            <br>
            <br>
            <P>**THANK YOU VISIT AGAIN**</P>
            <br><br><br>
            <p><h5>** Printing hardcopy will consider original</h5></p>
        </footer>
    </div>
    <div class="print-button-container">
        <button onclick="printInvoice()">Print Invoice</button>
    </div>
</body>
</html>

