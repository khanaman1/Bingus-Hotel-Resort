
<!--Author : Aman Khan
    CSCI426 
    Date:04/21/2021 -->

    <!--this section is for the get in touch --> 
<html>
    <head>
        <title>Get in Touch</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
        <link href='custom.css' rel='stylesheet' type='text/css'>
         <link rel="stylesheet" href="contact.css">
    </head>
    <body>

         <body style="background-color:orange;">

<!--for the container section-->
        <div class="container">

            <div class="row">

                <div class="col-lg-8 col-lg-offset-2">
                   <center> <img src="logo.png"style="width:500px;height:400px;"></center>

                   <center><h1 style="background-color: green;">Get in Touch </h1></center>
                   

                    <center><p style="background-color:black;"class="lead">Please fill out the form and we will be in touch with lightening speed</p></center>

                    <!--this sectio is for the contact-form-->
                    <form id="contact-form" method="post" role="form">
                        <!--for the message section-->
                        <div class="messages"></div>

                        <div class="controls">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <!--for the First name-->
                                        <label for="form_name">First Name *</label>
                                        <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your good name *" required="required" data-error="Firstname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <!-- this section is for the last name-->
                                        <label for="form_lastname">Last Name *</label>
                                        <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your Last Name *" required="required" data-error="Lastname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <!--for the email section-->
                                        <label for="form_email">Email *</label>
                                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Your Email Please *" required="required" data-error="Valid email is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <!--for the phone section-->
                                        <label for="form_phone">Phone</label>
                                        <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Your phone Please">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <!-- for the message section-->
                                        <label for="form_message">Message *</label>
                                        <textarea id="form_message" name="message" class="form-control" placeholder="Your Message or Query Please " rows="4" required="required" data-error="Please,leave us a message."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" name="ok" class="btn btn-success btn-send" value="Send Now">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- this section validates the required input that need to be typed-->
                                    <p class="text-muted"><strong>*</strong> These fields are required </p>
                                </div>
                            </div>
                        </div>

                    </form>
            <?php 
            if(isset($_POST['ok'])){
                include_once 'function.php';// fetches the functio file
                $obj=new Contact();
                $res=$obj->contact_us($_POST);
                if($res==true){//if the entered data is correct,following message is displayed by the localhost
                    echo "<script>alert('Query successfully Submitted.Thank you! We will Get Back to You Soon')</script>";
                }else{//otherwise the local host will display the error in the input
                    echo "<script>alert('Something Went wrong!!')</script>";
                }
            }
            ?>

                </div><!-- /.8 -->

            </div> <!-- /.row-->

        </div> <!-- /.container-->

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="validator.js"></script>
        <script src="contact.js"></script>
    </body>
</html>
