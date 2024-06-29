<?php  
require_once("config.php");

if (isset($_POST['form_submit3'])) {
    $Order_No = trim($_POST['orderno']);
    $Order_Date = trim($_POST['orderdate']);
    $Invoice_No = trim($_POST['invoiceno']);
    $Invoice_Details = trim($_POST['invoicedetails']);
    $Invoice_Date = trim($_POST['invoicedate']);

    // Insert into order_details table
    $sql = "INSERT INTO order_details (Order_No, Order_Date) VALUES (:Order_No, :Order_Date)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':Order_No', $Order_No, PDO::PARAM_STR);
    $stmt->bindParam(':Order_Date', $Order_Date, PDO::PARAM_STR);
    $stmt->execute();

    // Insert into invoice_details table
    $sql = "INSERT INTO invoice_details (Invoice_No, Invoice_Date, Invoice_Details) VALUES (:Invoice_No, :Invoice_Date, :Invoice_Details)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':Invoice_No', $Invoice_No, PDO::PARAM_STR);
    $stmt->bindParam(':Invoice_Details', $Invoice_Details, PDO::PARAM_STR);
    $stmt->bindParam(':Invoice_Date', $Invoice_Date, PDO::PARAM_STR);
    $stmt->execute();
}
?>


<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  </head>
  <body>

    <script>


      function Getprint(){
        window.print();
      }

      function Additems(){
        var v=$("#Addrow").clone().appendTo("#tbody");
        $(v).find("input").val('');
        $(v).removeClass("d-none");
        $(v).find("input[name='unitprice'], input[name='Quantity'], input[name='Discount'] , input[name='tax'],input[name='amt']").change(function() {
        Calc(this);
    });
     

      }
      function Deleteitems(v){
        $(v).parent().parent().remove();
        
        

      }

      function Calc(v){
        var index=$(v).parent().parent().index();
        var qty=document.getElementsByName("Quantity")[index].value;
        var price=document.getElementsByName("unitprice")[index].value;
        var Discount=document.getElementsByName("Discount")[index].value;
        var tax=document.getElementsByName("tax")[index].value;
        

        var amt=(price*qty)-Discount
        document.getElementsByName("amt")[index].value=amt;

        var tax=amt*(tax/100);
        document.getElementsByName("tax")[index].value=tax;

        var total= amt+tax;
        document.getElementsByName("total")[index].value=total

      



      }



    </script>
      <form action="form_action.php" method="post">
    <div class="container">
            <div class="card-header">
              <h4>Invoice  4/4</h4>
            </div>
            <div class="card-body">
                <h5>Item Details</h5>
                <table class="table table-bordered">
                  <thead class="table-dark"> 
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col" class="text-end">Description</th>
                      <th scope="col"  class="text-end">Unit Price</th>
                      <th scope="col"  class="text-end">Quantity</th>
                      <th scope="col" class="text-end">Discount</th>
                      <th scope="col"  class="text-end">Net Amount</th>
                      <th scope="col"  class="text-end">Tax Rate(18%)</th>

                      <th scope="col"  class="text-end">Total Amount</th>
                      <th scope="col"  class="text-end"><button type="button" class="btn btn-success" onclick="Additems();">+</button></th>

                    </tr>
                  </thead>
                  <tbody id="tbody">
                    <tr id="Addrow"> 
                      <th scope="row">1</th>
                      <td><input type="text" class="form-control"  aria-label="Username" aria-describedby="basic-addon1" name="description"></td>
                      <td><input type="number" class="form-control text-end"  aria-label="Username" aria-describedby="basic-addon1" name="unitprice"  onchange="Calc(this);" step="any"></td>
                      <td><input type="number" class="form-control text-end"  aria-label="Username" aria-describedby="basic-addon1" name="Quantity"  onchange="Calc(this);"></td>
                      <td><input type="number" class="form-control text-end"  aria-label="Username" aria-describedby="basic-addon1" name="Discount" onchange="Calc(this);" step="any"></td>
                      <td><input type="number" class="form-control text-end"  aria-label="Username" aria-describedby="basic-addon1" name="amt" id="amt" onchange="Calc(this);" step="any"></td>
                      <td><input type="number" class="form-control text-end"  aria-label="Username" aria-describedby="basic-addon1" name="tax" id="tax" onchange="Calc(this);" step="any"></td>
                      <td><input type="number" class="form-control text-end"  aria-label="Username" aria-describedby="basic-addon1" name="total" id="total" step="any" ></td>
                      <td><button type="button" class="btn btn-danger" onclick="Deleteitems(this);">X</button></td>
                    </tr>
                    <tr>
                     
                  </tbody>
                </table>
            

                  <div class="row">

                    <div class="col-12">

                      <button type="submit" class="btn btn-primary" style="margin-left: 400px;" name="form_submit4">Submit</button>
                    
                    </div>
                    </div>
  
                    </form>
      
          
            
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>


