<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .main{
            padding: 100px;
        }  
        li{            
            width: 267px;
        } 
        .myBtn{
            padding: 20px 0px;
        }
        .judul{
            width: 267px; 
        }
        .item{
            width: 80px;
        }
        .buton{
            width: 100px;
        }
        .edit{
            position: absolute;
            right: 0;
            top: 0;
            padding: 16px 18px;
        }   
        .trash{
            left: 0;            
            position: absolute;            
            top: 0;
            padding: 16px 18px;
        }  

        .edit:hover, .trash:hover{
            background-color: royalblue;
        }
        @media (min-width: 576px){
            .modal-dialog {
                max-width: 55%;
                margin: 1.75rem auto;
            }
        }
    </style>

    <title>Data Mahasiswa</title>
  </head>
  <body>    
    <div class="main">
        <div class="myBtn">           
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-dark">Tambah Mahasiswa</button>

        </div>
        <ul class="list-group list-group-horizontal-sm">
            <li class="list-group-item item">ID</li>
            <li class="list-group-item judul">Nama</li>
            <li class="list-group-item judul">NIM</li>
            <li class="list-group-item judul">Dosen Wali</li>
            <li class="list-group-item buton">Aksi</li>     
        </ul>
        <?php include "my.php";?>
            <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Mahasiswa</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                <input type="input" class="form-control" name="Nama">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">NIM</label>
                                <div class="col-sm-10">
                                <input type="input" class="form-control" name="Nim">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Jenis kelamin</label>
                                <div class="form-check form-check-inline">                        
                                    <input class="form-check-input" type="radio" name="Jk" id="inlineRadio1" value="1">
                                    <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="Jk" id="inlineRadio2" value="0">
                                    <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                                </div>
                            </div>   
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Dosen Wali</label>
                                <select class="custom-select custom-select-lg col-md-6">
                                    <option selected>Pilih Dosen Wali</option> 
                                <?php include "dosen.php";?>                                         
                                </select>
                            </div>
                            <div class="form-group row">                        
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>               
                </div>
            </div>
        </div>
    </div>   
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    
  </body>
</html>