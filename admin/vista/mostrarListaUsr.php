<?php 
$inicio = false;
include  '../includes/templates/header.php';

?>
<main class="contenedor seccion">
        <h1>Lista de Usuarios</h1>
        
        <table class="table table-striped">
            <thead>
                <th> Email </th>
                <th> Rol </th>
            </thead>
            <tbody>
            <?php
while($reg=mysqli_fetch_array($res)){
    echo "<tr>".$reg.['email'];
}

            ?>

            </tbody>
        </table>
    </main>

<?php
    include ('../includes/templates/footer.php');
?>

