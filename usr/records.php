<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SafeComm | Reducing Drug Misuse</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header style="padding-right: 100px;">
        <div class="mainlogo">
            <a href="#">SafeComm</a>
        </div>
        <div class="mobile-menu">
            <ul class="menu-items">
                <li><a href="./index.html">Home</a></li>
                <li><a href="../index.html">Logout</a></li>
            </ul>
        </div>
    </header>

    <main>
        <div class="mpgtitl">Munyendiza Kalisa Drug Consumption</div>
        <table id="tables" style="">
            <tr>
                <th>User ID</th>
                <th>Order Date</th>
                <th>Store Name</th>
                <th>Location</th>
                <th>Order Status</th>
                <th>Drugs Ordered</th>
                <th>Total Cost</th>
                <th>Details</th>
            </tr>
            <tr>
                <td>001</td>
                <td>2023-09-18</td>
                <td>The Green Dispensary</td>
                <td>Kigali</td>
                <td>Delivered</td>
                <td>
                    <ul>
                        <li>Tobacco (x1 pack)</li>
                    </ul>
                </td>
                <td>$45.75</td>
                <td><button onclick="displayOrderDetails()" class="modalBtn">View Details</button></td>
            </tr>
            <tr>
                <td>002</td>
                <td>2023-09-19</td>
                <td>The Liquor Stop</td>
                <td>Kigali</td>
                <td>Processing</td>
                <td>
                    <ul>
                        <li>Alcohol (x3 bottles)</li>
                    </ul>
                </td>
                <td>$36.50</td>
                <td><button onclick="displayOrderDetails()" class="modalBtn">View Details</button></td>
            </tr>
            
            <tr>
                <td>003</td>
                <td>2023-09-20</td>
                <td>High Times Dispensary</td>
                <td>Kigali</td>
                <td>Delivered</td>
                <td>
                    <ul>
                        <li>Marijuana (x5 grams)</li>
                    </ul>
                </td>
                <td>$75.00</td>
                <td><button onclick="displayOrderDetails()" class="modalBtn">View Details</button></td>
            </tr>
            
            <tr>
                <td>004</td>
                <td>2023-09-21</td>
                <td>The Smoke Shop</td>
                <td>Kigali</td>
                <td>Delivered</td>
                <td>
                    <ul>
                        <li>Tobacco (x2 packs)</li>
                    </ul>
                </td>
                <td>$30.25</td>
                <td><button onclick="displayOrderDetails()" class="modalBtn">View Details</button></td>
            </tr>
            
            <tr>
                <td>005</td>
                <td>2023-09-22</td>
                <td>The Brew House</td>
                <td>Kigali</td>
                <td>Processing</td>
                <td>
                    <ul>
                        <li>Beer (x6 bottles)</li>
                    </ul>
                </td>
                <td>$18.75</td>
                <td><button onclick="displayOrderDetails()" class="modalBtn">View Details</button></td>
            </tr>
            
            <tr>
                <td>006</td>
                <td>2023-09-23</td>
                <td>The Vape Emporium</td>
                <td>Kigali</td>
                <td>Delivered</td>
                <td>
                    <ul>
                        <li>E-cigarettes (x2 sets)</li>
                    </ul>
                </td>
                <td>$55.50</td>
                <td><button onclick="displayOrderDetails()" class="modalBtn">View Details</button></td>
            </tr>
            
            <tr>
                <td>007</td>
                <td>2023-09-24</td>
                <td>Green Leaf Dispensary</td>
                <td>Kigali</td>
                <td>Processing</td>
                <td>
                    <ul>
                        <li>Marijuana (x3 grams)</li>
                    </ul>
                </td>
                <td>$45.00</td>
                <td><button onclick="displayOrderDetails()" class="modalBtn">View Details</button></td>
            </tr>
            
            <tr>
                <td>008</td>
                <td>2023-09-25</td>
                <td>The Wine Cellar</td>
                <td>Kigali</td>
                <td>Delivered</td>
                <td>
                    <ul>
                        <li>Wine (x4 bottles)</li>
                    </ul>
                </td>
                <td>$68.25</td>
                <td><button onclick="displayOrderDetails()" class="modalBtn">View Details</button></td>
            </tr>
            
            <tr>
                <td>009</td>
                <td>2023-09-26</td>
                <td>The Cigar Lounge</td>
                <td>Kigali</td>
                <td>Processing</td>
                <td>
                    <ul>
                        <li>Cigars (x10)</li>
                    </ul>
                </td>
                <td>$120.00</td>
                <td><button onclick="displayOrderDetails()" class="modalBtn">View Details</button></td>
            </tr>
            
            <tr>
                <td>010</td>
                <td>2023-09-27</td>
                <td>The Brew House</td>
                <td>Kigali</td>
                <td>Delivered</td>
                <td>
                    <ul>
                        <li>Beer (x8 bottles)</li>
                    </ul>
                </td>
                <td>$25.50</td>
                <td><button onclick="displayOrderDetails()" class="modalBtn">View Details</button></td>
            </tr>
            
        </table>
        
    </main>

    <footer>
        <div class="mainfooter">
            <div class="fboxes">
                <div class="fbox fbox-1">
                    <div class="mainlogo">
                        <a href="#">SafeComm</a>
                    </div>

                    <p>SafeComm is a project aimed at curbing drug misuse among youth in Rwanda through technology-driven identification and verification systems. It seeks to ensure that underage individuals are denied access. This technology-driven initiative fosters a safer environment and empowers both shopkeepers and law enforcement.</p>
                </div>
                <div class="fbox fbox-2">
                    <div class="ftitle">Navigation Links</div>
                    <ul class="ftlinks">
                        <li><a href="#">Home</a></li>
                        <li><a href="./pgs/about.html">About-Us</a></li>
                        <li><a href="./pgs/guide.html">Guide To Use</a></li>
                        <li><a href="./pgs/parenting.html">Parenting Control</a></li>
                        <li><a href="./pgs/apply.html">Apply As A Store</a></li>
                        <li><a href="./pgs/apply.html">Rules &and; Privacy</a></li>
                    </ul>
                </div>
                <div class="fbox fbox-3">
                    <div class="ftitle">Navigation Links</div>
                    <ul class="ftlinks">
                        <li><a href="">Partners</a></li>
                        <li><a href="">Health</a></li>
                        <li><a href="">Effects Of Drugs</a></li>
                        <li><a href="">Utilities</a></li>
                        <li><a href="">Report A case</a></li>
                    </ul>
                </div>
                <div class="fbox fbox-4">
                    <div class="ftitle">Follow Us</div>
                    <ul class="ftlinks">
                        <li><a href="">Facebook</a></li>
                        <li><a href="">Instagram</a></li>
                        <li><a href="">YouTube</a></li>
                        <li><a href="">TikTok</a></li>
                        <li><a href="">Twitter</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="secondaryfooter">
            <p>&copy; 2023 copyright <b>SafeComm</b> By Dositha</p>
        </div>
    </footer>
</body>
</html>