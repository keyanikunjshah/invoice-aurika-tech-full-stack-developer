<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <form action="billing&shipping.php" method="post">
    <div class="container">
        <div class="card">
            <div class="card-header">
              <h4>Invoice  1/4</h4>
            </div>
            <div class="card-body">
                <h5>Seller Details</h5>
            <div class="row">
                    <div class="col-7">
                          <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Name</span>
                            <input type="text" class="form-control" placeholder="Name" aria-label="Username" aria-describedby="basic-addon1" name="S_name" required>
                           </div>
                    
                       <div class="input-group mb-3">

                        <span class="input-group-text" id="basic-addon1">Address line 1</span>
                        <input type="text" class="form-control" placeholder="Address" aria-label="Username" aria-describedby="basic-addon1" name="S_address" required>
                       </div>

                       <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Address line 2</span>
                        <input type="text" class="form-control" placeholder="Address" aria-label="Username" aria-describedby="basic-addon1">

                       </div>

                       <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Place of Supply </span>
                        <input type="text" class="form-control" placeholder="Place of Supply " aria-label="Username" aria-describedby="basic-addon1"  name="S_poc" required>
                       </div>

                       </div>

                       




                    
                        <div class="col-5">
                       <div class="input-group mb-3">
                       <span class="input-group-text" id="basic-addon1">City</span>
                       <input type="text" class="form-control" placeholder="City" aria-label="Username" aria-describedby="basic-addon1"  name="S_city" required>
                      </div>

                      <div class="input-group mb-3">
                      <span class="input-group-text" id="basic-addon1">Zipcode</span>
                       <input type="text" class="form-control" placeholder="Zipcode" aria-label="Username" aria-describedby="basic-addon1"  name="S_zipcode" required>
                      </div>
                      <div>

                      <select class="form-select form-select-md" aria-label="Small select example" name="S_state">
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
                        <h5>Pan and GST details</h5>

                    <div class="col-6">

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">PAN No.</span>
                            <input type="text" class="form-control" placeholder="Pan No." aria-label="Username" aria-describedby="basic-addon1"  name="S_pan" required >
                           </div>
                            
                           <div class="input-group mb-3">
                             <span class="input-group-text" id="basic-addon1">GST Registration No.</span>
                             <input type="text" class="form-control" placeholder="GST Registration No." aria-label="Username" aria-describedby="basic-addon1" name="S_gst" required>
                            </div>

                           

                        </div>
                            
                    </div>
                    
                  </div>

                  <div class="row">

                    <div class="col-12">

                    <button type="submit" class="btn btn-primary" style="margin-left: 400px;" name="form_submit1">Save and Next</button>
                    
                        </div>
                        </div>
      
                        </form>
            
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>