<?php  require_once("config.php");
if(isset($_POST['form_submit1']))
{
    $S_Name= trim($_POST['S_name']);
    $S_Address= trim($_POST['S_address']);
    $S_city= trim($_POST['S_city']);
    $S_Zipcode= trim($_POST['S_zipcode']);
    $S_State= trim($_POST['S_state']);
    $poc= trim($_POST['S_poc']);
    $S_Gst= trim($_POST['S_gst']);
    $S_Pan= trim($_POST['S_pan']);

}

$sql="INSERT INTO seller_details(S_Name,S_Address,S_city,S_Zipcode,S_State,poc,S_Gst,S_Pan)
VALUES(:S_Name,:S_Address,:S_city,:S_Zipcode,:S_State,:poc,:S_Gst,:S_Pan)";

$stmt = $db->prepare($sql);
$stmt->bindParam(':S_Name',$S_Name,PDO::PARAM_STR);
$stmt->bindParam(':S_Address',$S_Address,PDO::PARAM_STR);
$stmt->bindParam(':S_city',$S_city,PDO::PARAM_STR);
$stmt->bindParam(':S_Zipcode',$S_Zipcode,PDO::PARAM_STR);
$stmt->bindParam(':S_State',$S_State,PDO::PARAM_STR);
$stmt->bindParam(':poc',$poc,PDO::PARAM_STR);
$stmt->bindParam(':S_Gst',$S_Gst,PDO::PARAM_STR);
$stmt->bindParam(':S_Pan',$S_Pan,PDO::PARAM_STR);
$stmt->execute();


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <form action="order+invoice.php" method="post">
    <div class="container">
        <div class="card">
            <div class="card-header">
              <h4>Invoice 2/4</h4>
            </div>
            <div class="card-body">
                <h5>Billing Details</h5>
                <div class="row">
                    <div class="col-7">
                          <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Name</span>
                            <input type="text" class="form-control" placeholder="Name" aria-label="Username" aria-describedby="basic-addon1" name="B_name" required>
                           </div>
                    
                    <div class="input-group mb-3">

                        <span class="input-group-text" id="basic-addon1">Address line 1</span>
                        <input type="text" class="form-control" placeholder="Address" aria-label="Username" aria-describedby="basic-addon1" name="B_address" required>
                       </div>

                       <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Address line 2</span>
                        <input type="text" class="form-control" placeholder="Address" aria-label="Username" aria-describedby="basic-addon1">
                       </div>
                       </div>


                    




                    <div class="col-5">

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">City</span>
                            <input type="text" class="form-control" placeholder="City" aria-label="Username" aria-describedby="basic-addon1" name="B_city" required>
                           </div>
     
                           <div class="input-group mb-3">
                           <span class="input-group-text" id="basic-addon1">Zipcode</span>
                            <input type="text" class="form-control" placeholder="Zipcode" aria-label="Username" aria-describedby="basic-addon1" name="B_zipcode" required>
                           </div>
                           <div>
     
                           <select class="form-select form-select-md" aria-label="Small select example" name="B_state">
                             <option selected>State</option>
                             <option value="Andhra Pradesh">Andhra Pradesh</option>
                             <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                             <option value="Assam">Assam</option>
                             <option value="Bihar">Bihar</option>
                             <option value="Chhattisgarh">Chhattisgarh</option>
                             <option value="Goa">Goa</option>
                             <option value="Gujarat">Gujarat</option>
                             <option value="Haryana">Haryana</option>
                             <option value="Himachal Pradesh">Himachal Pradesh</option>
                             <option value="Jharkhand">Jharkhand</option>
                             <option value="Karnataka">Karnataka</option>
                             <option value="Kerala">Kerala</option>
                             <option value="Madhya Pradesh">Madhya Pradesh</option>
                             <option value="Maharashtra">Maharashtra</option>
                             <option value="Manipur">Manipur</option>
                             <option value="Meghalaya">Meghalaya</option>
                             <option value="Mizoram">Mizoram</option>
                             <option value="Nagaland">Nagaland</option>
                             <option value="Odisha">Odisha</option>
                             <option value="Punjab">Punjab</option>
                             <option value="Rajasthan">Rajasthan</option>
                             <option value="Sikkim">Sikkim</option>
                             <option value="Tamil Nadu">Tamil Nadu</option>
                             <option value="Telangana">Telangana</option>
                             <option value="Tripura">Tripura</option>
                             <option value="Uttar Pradesh">Uttar Pradesh</option>
                             <option value="Uttarakhand">Uttarakhand</option>
                             <option value="West Bengal">West Bengal</option>
                           </select>
     
                         </div>
                         </div>

                         <div class="row"> 
                            <h5>Shipping details </h5>
                    <div class="col-7">
                          <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Name</span>
                            <input type="text" class="form-control" placeholder="Name" aria-label="Username" aria-describedby="basic-addon1" name="Ship_name" required>
                           </div>
                    
                    <div class="input-group mb-3">

                        <span class="input-group-text" id="basic-addon1">Address line 1</span>
                        <input type="text" class="form-control" placeholder="Address" aria-label="Username" aria-describedby="basic-addon1" name="Ship_address" required>
                       </div>

                       <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Address line 2</span>
                        <input type="text" class="form-control" placeholder="Address" aria-label="Username" aria-describedby="basic-addon1">
                       </div>
                       
                       <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Place of delivery</span>
                        <input type="text" class="form-control" placeholder="Place of delivery" aria-label="Username" aria-describedby="basic-addon1" name="Ship_pod" required>
                       </div>


                       </div>

                       

                    




                    <div class="col-5">

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">City</span>
                            <input type="text" class="form-control" placeholder="City" aria-label="Username" aria-describedby="basic-addon1" name="Ship_city" required>
                           </div>
     
                           <div class="input-group mb-3">
                           <span class="input-group-text" id="basic-addon1">Zipcode</span>
                            <input type="text" class="form-control" placeholder="Zipcode" aria-label="Username" aria-describedby="basic-addon1"name="Ship_zipcode" required>
                           </div>
                           <div>
     
                           <select class="form-select form-select-md" aria-label="Small select example" name="Ship_state">
                             <option selected>State</option>
                             <option value="Andhra Pradesh">Andhra Pradesh</option>
                             <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                             <option value="Assam">Assam</option>
                             <option value="Bihar">Bihar</option>
                             <option value="Chhattisgarh">Chhattisgarh</option>
                             <option value="Goa">Goa</option>
                             <option value="Gujarat">Gujarat</option>
                             <option value="Haryana">Haryana</option>
                             <option value="Himachal Pradesh">Himachal Pradesh</option>
                             <option value="Jharkhand">Jharkhand</option>
                             <option value="Karnataka">Karnataka</option>
                             <option value="Kerala">Kerala</option>
                             <option value="Madhya Pradesh">Madhya Pradesh</option>
                             <option value="Maharashtra">Maharashtra</option>
                             <option value="Manipur">Manipur</option>
                             <option value="Meghalaya">Meghalaya</option>
                             <option value="Mizoram">Mizoram</option>
                             <option value="Nagaland">Nagaland</option>
                             <option value="Odisha">Odisha</option>
                             <option value="Punjab">Punjab</option>
                             <option value="Rajasthan">Rajasthan</option>
                             <option value="Sikkim">Sikkim</option>
                             <option value="Tamil Nadu">Tamil Nadu</option>
                             <option value="Telangana">Telangana</option>
                             <option value="Tripura">Tripura</option>
                             <option value="Uttar Pradesh">Uttar Pradesh</option>
                             <option value="Uttarakhand">Uttarakhand</option>
                             <option value="West Bengal">West Bengal</option>
                           </select>
     
       



                         </div>
                         </div>

                         


     
                      
                  <div class="row">

                    <div class="col-12">
                    <button type="submit" class="btn btn-primary" style="margin-left: 400px;" name="form_submit2">Save and Next</button>
                    
                    </div>
                    </div>
  
                    </form>



                                
          
            </div>
            </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

