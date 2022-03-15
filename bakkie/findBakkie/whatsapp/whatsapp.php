<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Contact Form Tutorial by Bootstrapious.com</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="./../../images/logo.png" type="image/x-icon">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
        <link href='custom.css' rel='stylesheet' type='text/css'>
        <script src="./../../asset/js/jQuery-v3.5.1.js"></script>
        <script>
            var cellnumber = "<?php if(isset($_GET['cellnumber'])) echo $_GET['cellnumber']; ?>";
            //email = document.getElementsByClassName("sender-div").value;
            $( document ).ready(function() {
                $('#r_cellnumber').val(cellnumber);
            });             
            
        </script>
        <?php
            // Check if the user is logged in, if not then redirect him to login page
            if(!isset($_SESSION['eu_info'])){
                header("location: ./../../index.php");
                exit;
            }
        ?>
    </head>
    <body>

        <div class="container">

            <div class="row">

                <div class="col-lg-8 col-lg-offset-2">

                    <h1 style="margin-top: 30px;">Send Whatsapp Message</a></h1>

                    <form id="contact-form" method="post" action="sender.php" role="form">

                        <div class="messages"></div>

                        <div class="controls">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="sender-div form-group">
                                        <label for="r_cellnumber">Receiver</label>
                                        <input id="r_cellnumber" type="number" name="r_cellnumber" class="form-control" required="required" data-error="Sender's name is required." value="" readonly>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <!-- <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_lastname">Lastname *</label>
                                        <input id="form_lastname" type="number" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div> -->
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="form_message">Message *</label>
                                        <textarea id="form_message" name="message" class="form-control" placeholder="Message" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" class="btn btn-success btn-send" value="Send message">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group" style="display: flex;">
                                        <label for="s_name" class="col col-md-6" style="padding-top: 5px;">My name is </label>
                                        <input id="s_name" type="text" name="s_name" class="col-md-6 form-control" placeholder="Please enter your phone" value="<?php echo $_SESSION['eu_info']['name'] ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" style="display: flex;">
                                        <label for="s_cellnumber" class="col col-md-6" style="padding-top: 5px;">Cell number is</label>
                                        <input id="s_cellnumber" type="number" name="s_cellnumber" class="col-md-6 form-control" placeholder="Please enter your email *" value="<?php echo $_SESSION['eu_info']['cellnumber'] ?>">
                                    </div>
                                </div>
                                
                            </div>
                            <div class="row" style="margin-top: 20px; background-color: lightgrey;">
                                <h4 style="color: grey; text-align: center;">Your name and cellnumber is included in message. If you never want it, please delete it!</h4>
                            </div>
                        </div>

                    </form>

                </div><!-- /.8 -->

            </div> <!-- /.row-->

        </div> <!-- /.container-->

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js" integrity="sha256-dHf/YjH1A4tewEsKUSmNnV05DDbfGN3g7NMq86xgGh8=" crossorigin="anonymous"></script>
        <!-- <script src="contact-3.js"></script> -->
    </body>
</html>
