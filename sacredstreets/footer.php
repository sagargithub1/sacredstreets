  <section>
      <div class="container-fluid">
          <div class="row" style="height:100%; background-color:black;">
              <div class="col-12 col-sm-4">
                  <img class="d-flex justify-content-center align-items-center" href="index.php"
                      src="assets/images/logo.png" width="100%" id="logo">
              </div>

              <div class="col-12 col-sm-4 d-flex align-items-center flex-column">
                  <h4 class="mt-3" style="color:white;">Follow me on </h4>
                  <div>
                      <a class="btn btn-primary" href=""><i class="fa fa-twitter"></i></a>
                      <a class="btn btn-primary" href=""><i class="fa fa-facebook"></i></a>
                      <a class="btn btn-primary" href=""><i class="fa fa-instagram"></i></a>
                      <a class="btn btn-primary" href=""><i class="fa fa-whatsapp"></i></a>
                  </div>
              </div>
              <div class="col-12 col-sm-4 mt-4">
              <h5 style="color:white;">Sagar Sharma</h5>

                  <h5 style="color:white;">connectsagar01@gmail.com</h5>
                 <h5 style="color:white;">+918090217167</h5>


              </div>
          </div>

          <div class="row" style="height:30px; background-color:black; border-top:2px;">
              <span class=" col-12 col-sm-12 d-flex justify-content-center align-items-center">Created By :- Sagar
                  Sharma</span>
          </div>
      </div>
  </section>
  </body>
  <!-- Coding End -->

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script>
function openmodal(templename, templedesc, url) {

    $("#templename").html("");
    $("#templedesc").html("");
    $("#templename").html(templename);
    $("#templedesc").html(templedesc);
    $("#temple").modal("show");
    $("#knowmorebutton").prop('href', url);
}
  </script>

  </html>