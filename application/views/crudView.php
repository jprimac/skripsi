<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <title>CodeIgniter CRUD </title>
  </head>
  <body>
    <!-- As a link -->
    <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Sistem Informasi Laporan Kegiatan Dosen/Dekan FTIS</a>
    </nav>

    <div class="container">
    <br>
    <br>

      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#exampleModal">
        Add
      </button>
          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Add Data</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              <div class="modal-body">
                    <form method="post" action="<?php echo base_url();?>create">
                      <div class="form-group">
                        <label for="exampleInputPassword1">nama</label>
                        <input type="text" class="form-control" name="nama" aria-describedby="emailHelp" placeholder="Enter name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">npm</label>
                        <input type="number" class="form-control" name="npm" aria-describedby="emailHelp" placeholder="Enter npm">
                      </div>

                      <button type="submit" class="btn btn-primary" value="save">Submit</button>
                    </form>
                </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
              </div>
          </div>
          </div>
      <br>
      <br>
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">nama</th>
            <th scope="col">npm</th>
          </tr>
        </thead>
        <tbody>
          <?php  $iterator = 1;  foreach($result as $row){?>
          <tr>
            <td><?php echo $row->nama; ?></td>
            <td><?php echo $row->npm; ?></td>


            <td class="text-center">
              <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#<?php echo $iterator;?>">
                Edit
              </button>
            </td>
            <div class="modal fade" id="<?php echo $iterator;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                <div class="modal-body">
                      <form method="post" action="<?php echo base_url();?>edit">
                        <div class="form-group">
                          <label for="exampleInputPassword1"><?php echo $row->nama; ?></label>
                          <input type="text" class="form-control" name="nama" aria-describedby="emailHelp" placeholder="Enter name">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1"><?php echo $row->npm; ?></label>
                          <input type="number" class="form-control" name="npm" aria-describedby="emailHelp" placeholder="Enter npm">
                        </div>

                        <button type="submit" class="btn btn-primary" value="save">Submit</button>
                      </form>
                  </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close tes</button>
                </div>
                </div>
            </div>
            </div>

          </tr>
          <?php  $iterator++; } ?>

        </tbody>
      </table>
    </div>

  </body>
</html>
