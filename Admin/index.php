<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    <div class="headers">
        <h3>Welcome to Staffs</h3>
    </div>
    <!-- <p>Sokrong, I Love You.</p> -->
    
    <div class="container">
        <form action="" class="upl">
            <div class="frm">
                <label for="">ID:</label> </br>
                <input type="text" name="id" id="txt-id" disabled> </br>
                <label for="">First Name:</label> </br>
                <input type="text" name="firstName" id="txt-firstName"> </br>
                <label for="">Last Name:</label></br>
                <input type="text" name="lastName" id="txt-lastName"> </br>
                <label for="">Phone:</label></br>
                <input type="number" name="phone" id="txt-phone">
                <div class="btn">
                    <button type='button' class="btn-post">Post</button>
                </div>
            </div>
        </form>
    </div>
</body>
<script>
    $(document).ready(function(){
        // const id = $("#txt-id");
        const firstName = $("#txt-firstName");
        const lastName = $("#txt-lastName");
        const phone = $("#txt-phone");
        $(".btn-post").click(function(){
            // alert("Sokrong, I Love You.");
            var eThis = $(this);
            if(firstName.val() == ""){
                alert("Please, Entry first name");
                firstName.focus();
                return;
            }else if(lastName.val() == ""){
                alert("Please, Entry last name.");
                lastName.focus();
                return;
            }else if(phone.val() == ""){
                alert("Please, Entry phone.");
                phone.focus();
                return;
            }
            var frm = eThis.closest('form.upl');
            var frm_data = new FormData(frm[0]);
            $.ajax({
                url:'save.php',
                type:'POST',
                data:frm_data,
                contentType:false,
                cache:false,
                processData:false,
                // dataType:"json",
                beforeSend:function(){
                        //work before success  
                    eThis.html("wait..."); 
                       
                },
                success:function(data){   
                    //work after success
                    alert("success");  
                        firstName.val("");
                    lastName.val("");
                    phone.val(null);
                    firstName.focus();  
                         
                }				
            }); 
        });
        
    });
</script>
</html>