

<?php

require_once("config.php");

if (isset($_POST['form_submit2'])) {
    $B_Name = trim($_POST['B_name']);
    $B_Address = trim($_POST['B_address']);
    $B_City = trim($_POST['B_city']);
    $B_Zipcode = trim($_POST['B_zipcode']);
    $B_State = trim($_POST['B_state']);
    $Ship_Name = trim($_POST['Ship_name']);
    $Ship_Address = trim($_POST['Ship_address']);
    $Ship_City = trim($_POST['Ship_city']);
    $Ship_Zipcode = trim($_POST['Ship_zipcode']);
    $Ship_State = trim($_POST['Ship_state']);
    $Ship_pod = trim($_POST['Ship_pod']);

    // Insert into billing_details table
    $sql = "INSERT INTO billing_deatils(B_Name, B_Address, B_City, B_Zipcode, B_State)
            VALUES (:B_Name, :B_Address, :B_City, :B_Zipcode, :B_State)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':B_Name', $B_Name, PDO::PARAM_STR);
    $stmt->bindParam(':B_Address', $B_Address, PDO::PARAM_STR);
    $stmt->bindParam(':B_City', $B_City, PDO::PARAM_STR);
    $stmt->bindParam(':B_Zipcode', $B_Zipcode, PDO::PARAM_STR);
    $stmt->bindParam(':B_State', $B_State, PDO::PARAM_STR);
    $stmt->execute();

    // Insert into shipping_details table
    $sql = "INSERT INTO shipping_details(Ship_Name, Ship_Address, Ship_City, Ship_Zipcode, Ship_State, Ship_pod)
            VALUES (:Ship_Name, :Ship_Address, :Ship_City, :Ship_Zipcode, :Ship_State, :Ship_pod)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':Ship_Name', $Ship_Name, PDO::PARAM_STR);
    $stmt->bindParam(':Ship_Address', $Ship_Address, PDO::PARAM_STR);
    $stmt->bindParam(':Ship_City', $Ship_City, PDO::PARAM_STR);
    $stmt->bindParam(':Ship_Zipcode', $Ship_Zipcode, PDO::PARAM_STR);
    $stmt->bindParam(':Ship_State', $Ship_State, PDO::PARAM_STR);
    $stmt->bindParam(':Ship_pod', $Ship_pod, PDO::PARAM_STR);
    $stmt->execute();
}
?>

<!doctype htm>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <form action="items.php" method="post">
    <div class="container">
        <div class="card">
            <div class="card-header">
              <h4>Invoice 3/4</h4>
            </div>
            <div class="card-body">
                <h5>Order Details</h5>
                <div class="row">
                    <div class="col-12">
                          <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Order No.</span>
                            <input type="text" class="form-control" placeholder="Order No." aria-label="Username" aria-describedby="basic-addon1" name="orderno" required>
                           </div>
                    
                    <div class="input-group mb-3">

                        <span class="input-group-text" id="basic-addon1">Order Date</span>
                        <input type="date" class="form-control" placeholder="Order Date" aria-label="Username" aria-describedby="basic-addon1" name="orderdate" required>
                       </div>
                       </div>

                       


                    




                    
                

                         <div class="row"> 
                            <h5>Invoice details </h5>
                    <div class="col-12">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Invoice No.</span>
                            <input type="text" class="form-control" placeholder="Invoice No." aria-label="Username" aria-describedby="basic-addon1" name="invoiceno" required>
                           </div>

                           <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Invoice Date</span>
                            <input type="date" class="form-control" placeholder="Invoice Date" aria-label="Username" aria-describedby="basic-addon1" name="invoicedate" required>
                           </div>
                          
                           <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Invoice Details</span>
                            <input type="text" class="form-control" placeholder="Invoice Details" aria-label="Username" aria-describedby="basic-addon1" name="invoicedetails" required>
                           </div>


                       </div>



                       

                    




                    
       




                         


     
                      
                  <div class="row">

                    <div class="col-12">

                    
                    <button type="submit" class="btn btn-primary" style="margin-left: 400px;" name="form_submit3">Save and Next</button>
                    
                        </div>
                        </div>
      
                        </form>



                                
          
            </div>
            </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>