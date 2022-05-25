<?php

class Dosen extends Database{

    //menampilkan data dosen ke index.php
    public function index(){
        $datadosen = mysqli_query($this->koneksi, 
            "select * from dosen"
    );

        return $database;
    }

    public function create($nipd,$nama,$mata_kuliah){

        mysqli_query($this->koneksi, 
            "insert into dosen values (null,'$nipd','$nama','$mata_kuliah')"

    );

    }

    public function edit($id){
        $datadosen = mysqli_query($this->koneksi, 
            "select * from dosen where id='$id'"
    
    );

    }
    public function update(){
        mysqli_query($this->koneksi, 
            "update dosen set nipd='$nipd',nama='$nama',mata_kuliah'$mata_kuliah' where id='$id'"
    );
    
    }

    public function show(){
        $datadosen = mysqli_query($this->koneksi, 
            "select * from dosen where id='$id'"
    );
    return $database;
    }

    public function delete(){
        mysli_query($this->koneksi,
            "delete from dosen where id='$id'"  
    );
    }
}

?>
