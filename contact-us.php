<!DOCTYPE html>
<?php include_once 'header.php'; ?>

<body>

    <!--Header-->
     <?php include_once 'nav.php'; ?>
    <!-- /header -->

    <section class="no-margin">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3580.167259528446!2d-80.1163215856102!3d26.19123679708157!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d90213ec80a67d%3A0x98d91715321b3c40!2s5301+N+Federal+Hwy%2C+Fort+Lauderdale%2C+FL+33308%2C+USA!5e0!3m2!1sen!2spe!4v1508871745634"  width="100%" height="300"  scrolling="no" marginheight="0" marginwidth="0"  frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>

    <section id="contact-page" class="container">
        <div class="row-fluid">

            <div class="span8">
                <h4>Contact Form</h4>
                <div class="status alert alert-success" style="display: none"></div>

                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                  <div class="row-fluid">
                    <div class="span5">
                        <label>First Name</label>
                        <input type="text" class="input-block-level" required="required" placeholder="Your First Name">
                        <label>Last Name</label>
                        <input type="text" class="input-block-level" required="required" placeholder="Your Last Name">
                        <label>Email Address</label>
                        <input type="text" class="input-block-level" required="required" placeholder="Your email address">
                    </div>
                    <div class="span7">
                        <label>Message</label>
                        <textarea name="message" id="message" required="required" class="input-block-level" rows="8"></textarea>
                    </div>

                </div>
                <button type="submit" class="btn btn-primary btn-large pull-right">Send Message</button>
                <p> </p>

            </form>
        </div>

        <div class="span3">
            <h4>Our Address</h4>
            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
            <p>
                <i class="icon-map-marker pull-left"></i>5301 N Federal Hwy<br>
                Fort Lauderdale, FL, USA
            </p>
            <p>
                <i class="icon-envelope"></i> &nbsp;info@sinobecresources.com
            </p>
            <p>
                <i class="icon-phone"></i> &nbsp;+1 (561) 409 2205
            </p>
            <p>
                <i class="icon-globe"></i> &nbsp;www.sinobecresources.com
            </p>
        </div>

    </div>

</section>

<!--Bottom-->
<?php include_once 'footer.php'; ?>
</body>
</html>
