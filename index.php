<?php if(isset($_POST['submit'])) {
        $units=$_POST['units'];
        if($units<=100){
            $amt=0;
        }
        elseif($units>100&&$units<=200){
            $units=$units-100;
            $amt=$units*1.50+20;
        }   
        elseif($units>200&&$units<=500){
            $units=$units-200;
            $amt=$units*3+30+200;
        }
        elseif($units>500){
            $units=$units-500;
            $amt=$units*6.60+50+1380+350;
        }
    } 
    else{
        $amt="...";
    }  
       ?>
<html>
<head>
<link rel="shortcut icon" href="https://techmaniac.in/proxy/favicon.png" type="image/x-icon">

<title>TN Domestic EB Bill Generator</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css" />
</head>

<body style="background-image: url('bg.jpg'); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
<div class="container-fluid text-center">
    <h1 class="display-4">TN Domestic EB Bill Generator</h1>
    <div class="center">    
        <br><br>    
        <form method="post">
            <div class="input-group mb-3">
            <input name="units" type="number" min="1" max="10000" required class="form-control" placeholder="Enter Bi-Monthly Units" >
            <div class="input-group-append">
                <button class="btn btn-danger" name="submit" type="submit" >Calculate</button>
            </div>
            </div>
        
        <br><br>
        <input id="output"  class="form-control" type="text" readonly value="Your Bill Amount is <?php echo $amt; ?>">
        <br><br><br><br>
        

            </form>
    </div>

</div>
<div class="footer">
<div class="p-3 mb-2 bg-dark text-white"> This Generator is based on the official Tarrif rate from TANGEDCO which can be found <a href="http://www.tnerc.gov.in/orders/Tariff%20Order%202009/2019/SubsidyOrder-2019-20.pdf" target="blank">here</a><br>
 By Using these services you agree to our<a href="https://proxy.techmaniac.in/terms.html"> <u><i>Terms and Conditions</i></u> </a> and <a href="https://proxy.techmaniac.in/privacy.html" > <u><i>Privacy Policy</i></u> </a>
           <br>Designed with ❤️ By <a href="https://techmaniac.in"> Tech Maniac</a>
           </div>
</div>
</body>

</html>