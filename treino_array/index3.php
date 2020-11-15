            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Document</title>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            </head>
            <body>

            <!DOCTYPE html>
            <html lang="en">
            <head>
              <title>Bootstrap Example</title>
              <meta charset="utf-8">
              <meta name="viewport" content="width=device-width, initial-scale=1">
              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            </head>
            <body>

            <div class="container">
            
              <h2>Form control: checkbox</h2>

              <form action="" id="form">
                <div class="form-check">
                  <label class="form-check-label" for="check1">
                    <input type="text" class="form-check-input" id="check1" name="nome[]" value="valor" data-key="0" >Option 1
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label" for="check2">
                    <input type="text" class="form-check-input" id="check2" name="nome[]" value="valor2" checked>Option 2
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="text" class="form-check-input" disabled  name="nome[]" value="valor3">Option 3
                  </label>
                </div>

                <div class="form-check" style="display:none;"  id="sumida0">
                  <label class="form-check-label" for="check2">
                    <input type="text" class="form-check-input" id="sumida" name="sumida" value="valor3">
                    Option 2
                  </label>
                </div>
                <button type="submit" class="btn btn-primary enviar">Submit</button>
              </form>

              <hr/>

              <button class="ADD">Add</button>
            <div id="outro">
            </div>
            </div>



            <script>

            var teste  = document.querySelectorAll("input");

      

                
              $(document).on("click", ".enviar", function() {

                event.preventDefault();
              var datastring = $('#form').serialize();
              $.ajax({
                type: "POST",
                url: "request.php",
                data: datastring,
                dataType: "json",
                success: function(data) {
                    console.log(data);
                },
              });
            });

            $(document).on("click",$("#form>div:nth-child(3)> label"), function() {

                event.preventDefault();
              var datastring = $('#form2').serialize();
              $.ajax({
                type: "POST",
                url: "request.php",
                data: datastring,
                dataType: "json",
                success: function(data) {
                    console.log(data);
                },
              });
            });

            $(document).on("click", ":checkbox", function() {
                var id  =   $(this).attr("data-key");
                checar(id);
            })



                $(document).on("click", ".remove", function() {

                var id =       $(this).attr("data-key");
                $('.teste'+id).remove();



            });
            var count = 0;
         


 



            </script>
            </body>
            </html>
