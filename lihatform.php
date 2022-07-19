<?php 
echo "<head><title>Form Penyewa</title></head>";
$fp = fopen("penyewa.txt", "r");

echo "<table border='1' align='center'>";

while ($isi = fgets($fp)) {
    $pisah = explode('|', $isi);

    echo "<tr><td>Nama </td><td>: $pisah[0] </td></tr>";
    echo "<tr><td>Alamat </td><td>: $pisah[1] </td></tr>";
    echo "<tr><td>no.telp penyewa </td><td>: $pisah[2] </td></tr>";
    echo "<tr><td>no.telp wali </td><td>: $pisah[3] </td></tr>";
    echo "<tr><td>Tipe Kamar </td><td>: $pisah[4] </td></tr>";
    echo "<tr><td><br></td><td><br></td></tr>";
}

echo "</table>";
echo "<a href='index.php'> Isi Form Penyewa </a>";

?>


    
    
    
    
    



