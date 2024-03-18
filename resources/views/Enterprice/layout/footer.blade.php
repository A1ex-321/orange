    <footer class="bg-dark text-light">
        <!-- Fixed Shape -->

        <!-- Fixed Shape -->
        <div class="container">
            <div class="f-items default-padding">
                <div class="row">
                    <div class="col-lg-4 col-md-6 item">
                        <div class="f-item about">
                            <img src="{{ asset('public/Enterprice/assets/img/newlogo1.png') }}" alt="Logo" style="width: 250px;" id="logo2">

                            <p>
                                Feel free to adjust and customize this text to better reflect the specific qualities and
                                services offered by Priyanka Enterprises.
                            </p>

                            <ul id="add1">
                                <!-- <li>
                                    <strong>Address:</strong><br>
                                    No.3/80H,Gandhi Road,Ponnai,Katpadi TK,Vellore Dist-632514.<br>
                                </li> -->
                                <!-- <li>
                                    <i class="fas fa-phone"></i>+91 99808 10233<br>

                                    <i class="fas fa-phone"></i>+91 63816 30360
                                </li> -->
                            </ul>

                        </div>
                    </div>
                    <div class="" style="position: fixed; left: 0px; bottom: 7%; z-index: 999;">
                        <div class="text-center">
                            <div style="display: flex; flex-direction: column;">
                                <a id="whatsapplink" href="whatsapp://send?phone=" target="_blank">
                                    <img src="{{ asset('public/Enterprice/assets/img/th-removebg-preview.png') }}" alt="WhatsApp Image" style="height: 60px; width: 60px;">
                                </a>
                                <a id="phonelink">
                                    <img src="{{ asset('public/Enterprice/assets/img/th__1_-removebg-preview.png') }}" alt="Phone Image" style="height: 55px; width: 50px;">
                                </a>

                            </div>
                        </div>

                    </div>
                    <div class="col-lg-2 col-md-6 item">
                        <div class="f-item link">
                            <h4 class="widget-title">Quick Links</h4>
                            <ul>
                                <!-- <li>
                                    <a href="{{ url('/') }}">Home</a>
                                </li> -->
                                <li>
                                    <a href="{{ url('/about') }}">About Us</a>
                                </li>
                                <li>
                                    <a href="{{ url('/service') }}">Services</a>
                                </li>
                                <li>
                                    <a href="{{ url('/ceiling') }}">False Ceiling</a>
                                </li>
                                <li>
                                    <a href="{{ url('/product') }}">Products</a>
                                </li>
                                <li>
                                    <a href="{{ url('/port') }}">Portfolio</a>
                                </li>
                                <li>
                                    <a href="{{ url('/blog') }}">Blog</a>
                                </li>
                                <li>
                                    <a href="{{ url('/contact') }}">Contact</a>
                                </li>

                            </ul>
                        </div>
                    </div>


                    <div class="col-lg-3 col-md-6 item">
                        <div class="f-item recent-post">
                            <h4 class="widget-title">Our Services</h4>
                            <ul id="add3">


                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 item">
                        <div class="f-item">
                            <h4 class="widget-title">Contact Info</h4>
                            <div class="address">
                                <ul>

                                    <li>
                                        <strong>Address:</strong>
                                        Walaja Road, Paraimedu(GS Battrey Opp), Sholinghur TK,Ranipet Dist-631102.
                                    </li>
                                    <li>
                                        <strong>Address:</strong>
                                        Ponnai Main Road, (Opp Malar Hospital),Laiapet, Ranipet Dist-632405.
                                    </li>


                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>Copyright &copy; 2024. Designed by <a href="#">OrangeMegaSoftware</a></p>
                    </div>
                    <div class="col-md-6 text-right link">
                        <!-- <ul>
                            <li>
                                <a href="#">Terms</a>
                            </li>
                            <li>
                                <a href="#">Privacy</a>
                            </li>
                            <li>
                                <a href="#">Support</a>
                            </li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            // Fetch the logo from the server and update
            function fetchAndUpdateLogo() {
                // Fetch the logo from the server
                $.ajax({
                    url: '/header', // Your route URL
                    type: 'GET',
                    success: function(response) {
                        if (response.image) {
                            // Update the logo
                            updateLogo(response.image);
                            // Store the new logo URL in local storage
                            localStorage.setItem('logo', response.image);
                        } else {
                            console.error('No image found');
                        }
                    },
                    error: function(error) {
                        console.error('Error fetching logo:', error.responseText);
                    }
                });
            }

            // Update the logo with the provided URL
            function updateLogo(imageUrl) {
                $('#logo1').attr('src', imageUrl);
                $('#logo2').attr('src', imageUrl);
                $('link[rel="shortcut icon"]').attr('href', imageUrl); // Update favicon
            }

            // Fetch logo from local storage if available
            var storedLogoUrl = localStorage.getItem('logo');
            if (storedLogoUrl) {
                updateLogo(storedLogoUrl);
            } else {
                // Fetch and update the logo from the server
                fetchAndUpdateLogo();
            }

            // Set up an interval to periodically check for logo updates
            setInterval(fetchAndUpdateLogo, 15000); // Adjust the interval as needed
        });

        $(document).ready(function() {
            $.ajax({
                url: '/getservice',
                type: 'GET',
                dataType: 'json',
                success: function(services) {
                    // Clear existing list items
                    $('#add3').empty();

                    // Slice the array to get only the first 6 services
                    var slicedServices = services.slice(0, 6);

                    // Loop through each service and append to the list
                    $.each(slicedServices, function(index, service) {
                        $('#add3').append('<li>' + service.machinetitle + '</li>'); // Make sure 'title' matches your column name
                    });
                },
                error: function(xhr, status, error) {
                    console.error("An error occurred: " + error);
                }
            });
        });
        $(document).ready(function() {
            $.ajax({
                url: '/profile',
                type: 'GET',
                dataType: 'json',
                success: function(services) {
                    // Clear existing list items
                    $('#add2').empty();

                    // Loop through each service and append to the list
                    $.each(services, function(index, service) {
                        // Append service information to list items
                        $('#add2').append('<li><i class="fas fa-envelope-open"></i> ' + service.mail + '</li>');
                        $('#add2').append('<li><i class="fas fa-phone"></i> ' + service.wnumber + '</li>');
                    });
                    $('#add1').empty();

                    // Loop through each service and append to the list
                    $.each(services, function(index, service) {
                        // Append service information to list items
                        $('#add1').append('<li><i class="fas fa-envelope-open"></i> ' + service.mail + '</li>');
                        $('#add1').append('<li><i class="fas fa-phone"></i> ' + service.dnumber + '</li>');
                        $('#add1').append('<li><i class="fas fa-phone"></i> ' + service.address + '</li>');

                        // Update WhatsApp link with dynamic number
                        $('#whatsapplink').attr('href', 'whatsapp://send?phone=' + service.wnumber);

                        // Update Phone link with dynamic number
                        $('#phonelink').attr('href', 'tel:' + service.dnumber);
                    });


                },
                error: function(xhr, status, error) {
                    console.error("An error occurred: " + error);
                }
            });

        });
    </script>