<?php
    abstract class pegawai {
        public $no;
        public $nama;
        public $ttl;
        public $jenis_kelamin;
        public $tingkatan;
        public $status;
        public $gaji;

    abstract public function get_name();
    abstract public function set_name($nama);
    } 

    class full_time extends pegawai{
        public $status = "full_time";

        public function get_name(){
            return $this->nama;
        }

        public function set_name($nama){
            $this->nama = $nama;
        }

        function __construct ($no, $nama, $ttl, $jenis_kelamin, $tingkatan){
            $this->no = $no;
            $this->nama = $nama;
            $this->ttl = $ttl;
            $this->jenis_kelamin = $jenis_kelamin;
            $this->tingkatan = $tingkatan;

            if ($this->tingkatan == "junior"){
                $this->gaji = 2000000;
            }

            elseif ($this->tingkatan == "amateur") {
                $this->gaji = 3500000;
            }

            else {
                $this->gaji = 5000000;
            }
        } 
    }

    class part_time extends pegawai{
        public $status = "part_time";

        public function get_name(){
            return $this->nama;
        }

        public function set_name($nama){
            $this->nama = $nama;
        }

        function __construct ($no, $nama, $ttl, $jenis_kelamin, $tingkatan){
            $this->no = $no;
            $this->nama = $nama;
            $this->ttl = $ttl;
            $this->jenis_kelamin = $jenis_kelamin;
            $this->tingkatan = $tingkatan;

            if ($this->tingkatan == "junior"){
                $this->gaji = 2000000/2;
            }

            elseif ($this->tingkatan == "amature") {
                $this->gaji = 3500000/2;
            }

            else {
                $this->gaji = 5000000/2;
            }
        } 
    }

    $arr = array();

    ///array_pegawai
    $arr[0] = new full_time(1, "Gusion", "Papua 13, April 1980", "Laki Laki", "senior");
    $arr[1] = new full_time(2, "Jett", "Korea 1, Juli 2001", "Perempuan", "junior");
    $arr[2] = new part_time(3, "Reyna", "Mexico 5, Mei 2000", "Perempuan", "amature");
    $arr[3] = new part_time(4, "Killjoy", "Jerman 10, Februari 2003", "Perempuan", "amature");
    $arr[4] = new part_time(5, "Badang", "Binjai 2, Oktober 1945", "Laki Laki", "Senior");
    $arr[5] = new full_time(6, "IndraKenz", "Medan 29, April 1990", "Laki Laki", "Senior");
    
?>

<!DOCTYPE html>
<html style="background-color:#222222;">


<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">

    <style>
        *{
            font-family: 'Playfair Display', serif;
            color: white;
        }
    </style>
    
</head>

<body>

<h2 style="text-align:left;">List Pegawai</h2>


    <table class="father" border='2px solid white' style="border-radius:10px;" style="margin-left: auto;" width= 70%;>
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Tempat Tanggal Lahir</td>
            <td>Jenis Kelamin</td>
            <td>Tingkatan</td>
            <td>Status</td>
            <td>Gaji</td>
        </tr>

        <?php for ($i=0; $i < 6; $i++) { ?>
        
        <tr>
            <td> <?php echo $arr[$i]->no; ?> </td>
            <td> <?php echo $arr[$i]->nama; ?> </td>
            <td> <?php echo $arr[$i]->ttl; ?> </td>
            <td> <?php echo $arr[$i]->jenis_kelamin; ?> </td>
            <td> <?php echo $arr[$i]->tingkatan; ?> </td>
            <td> <?php echo $arr[$i]->status; ?> </td>
            <td> <?php echo $arr[$i]->gaji; ?> </td>
        </tr>

        <?php } ?>   


    </table>
</body>
</html> 