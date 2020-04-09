<?php
    include "connection.php";        
    $sql = "SELECT mahasiswa.id, mahasiswa.nama, nim, dosen_wali.nama AS nama_dosen FROM mahasiswa INNER JOIN dosen_wali ON mahasiswa.id_doswal = dosen_wali.id";
    $result = $conn->query($sql);   
    
    if ($result->num_rows > 0){
        // output data of each row
            while($row = $result->fetch_assoc()) { ?>   
                <ul class="list-group list-group-horizontal-sm">                 
                    <li class="list-group-item item"><?php echo $row["id"]?></li>
                    <li class="list-group-item"><?php echo $row["nama"]?></li>
                    <li class="list-group-item"><?php echo $row["nim"]?></li>
                    <li class="list-group-item"><?php echo $row["nama_dosen"]?></li>     
                    <li class="list-group-item buton">
                        <span class="edit">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                        </span>
                        <span class="trash">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </span>
                    </li>     
                </ul>
    <?php   }
        }            
        $conn->close();  ?> 