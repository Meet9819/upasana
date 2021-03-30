<?php include "allcss.php"; ?> 
<body>
   
 <?php include "header2.php"; ?>   
    
    <section class="row page-header">
        <div class="container">
            <h4>contact us</h4>
        </div>
    </section>
    
    <section class="row contact-content page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h3 class="contact_page_title">have an idea to help us ? - contact us</h3>
                    <p class="contact_page_para">Pellentesque mollis eros quis massa interdum porta et vel nisi. Duis vel viverra quamam molesvulputate femy contenteu.</p>
                    <form action="contact_process.php" class="row m0 contact-form" id="contactForm">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                        <textarea name="message" id="message" placeholder="Message" class="form-control"></textarea>
                        <input type="submit" value="submit" class="btn-primary">
                    </form>
                    <h3 class="contact_page_title map-title">find us on map</h3>
                    <div style="text-decoration:none; overflow:hidden;max-width:100%;width:100%;height:400px;"><div id="mymap-canvas" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Pranay+Nagar+CHS,+Pranay+Nagar,+Koliwada,+Vazira,+Borivali+West,+Mumbai,+Maharashtra+400091&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe></div><a class="codefor-googlemap" rel="nofollow" href="https://www.embed-map.com" id="get-mapdata">https://www.embed-map.com</a><style>#mymap-canvas .text-marker{}.map-generator{max-width: 100%; max-height: 100%; background: none;</style></div>
                </div>
                <div class="col-md-4 contact-sidebar">
                    <div class="row m0 address_box">
                        <div class="inner row">
                            <h3>new york</h3>
                            <address>
                                40 mainu Street, <br>
                                Suite 330, New York, <br>
                                NY 10013. <br>
                                <br>
                                tel. 9769727057 / 7045127770 <br>
                                
                                <br>
                                <a href="#">Need help? Have questions? Check out our Help Center.</a>
                            </address>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    
 <?php include "footer.php"; ?>

    
 
  <?php include "allscript.php"; ?>