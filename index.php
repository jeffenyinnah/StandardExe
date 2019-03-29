<?php include('server.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Standard Bank</title>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <section class="col-lg-3">
          <div class="container">
            <img src="img/img1.jpg" class="img-responsive" alt="standard bank">
          </div>
        </section>
      <section id="content" class="col-lg-9">
        <h4>Ola</h4>
        <h4>Pronto para encontrar a sua máquina ?</h4>
        <p>Por favor preencha os seus dados pessoais</p>
        <div class="container-fluid">
              <form method="post" action="index.php">
                  <?php include('errors.php'); ?>
                  <div class="form-group">
                    <input type="text" name="username" class="form-control" id="name" placeholder="Nome Completo" value="<?php echo $username; ?>">
                  </div>

                  <div class="form-group">
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="examplo@gmail.com" value="<?php echo $email; ?>">
                  </div>

                  <div class="form-group">
                    <input type="tel" name="tel" class="form-control" id="pNumber" max="9" placeholder="Contacto" value="<?php echo $tel; ?>">
                  </div>

                  <div class="form-group">
                    <input type="number" name="amount" class="form-control" id="Montante" min="100000" placeholder="Montante disponivel" value="<?php echo $amount; ?>">
                  </div>
                  <label class="form-check-label" for="exampleCheck1">Modalidade de Pagamento</label><br>
                  <div class="form-group form-check-inline">
                    <input type="checkbox" name="chk1" value="Completo" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Pagemento Directo</label>
                  </div><!-- 
                  <div class="form-group form-check-inline">
                    <input type="checkbox" name="chk1" value="Leasing" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Leasing</label>
                  </div> <br> -->
                  <div class="form-group form-check-inline">
                      <button type="submit" class="btn btn-primary" name="submit">Pesquisar</button>
                  </div>
                  <div class="form-group form-check-inline">
                      <button  class="btn btn-danger">Limpar</button>
                  </div>
                
              </form>
        </div>
      </section>
      </div>
    </div>


  



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>