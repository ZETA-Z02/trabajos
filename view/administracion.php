<?php include("header.php") ;
session_start();
require "../model/consultas.model.php";

$consulta = new Consulta();

$personal = $consulta->verPersonal();
$cargo = $consulta->todosCargos();
$login = $consulta->todosLogin();


?>

    <div class="col-md-8">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th> nombre </th>
                    <th> apellido </th>
                    <th> sexo </th>
                    <th> dni </th>
                    <th> telefono </th>
                    <th> direccion </th>
                    <th> ciudad </th>
                    <th> cargo </th>
                    <th> edit </th>
                    <th> delete </th>
                </tr>
            </thead>
            
            <tbody>
                <?php
                
                while($row = mysqli_fetch_array($personal)) {?>
                    <tr>
                        <td><?php echo $row['nombre']?> </td>
                        <td><?php echo $row['apellido']?> </td> 
                        <td><?php echo $row['sexo']?> </td>
                        <td><?php echo $row['dni']?> </td>
                        <td><?php echo $row['telefono']?> </td>
                        <td><?php echo $row['direccion']?> </td>
                        <td><?php echo $row['ciudad']?> </td>
                        <td><?php echo $row['cargo']?> </td>
                        <td>
                            <a href="">
                                edit
                            </a>
                        </td>
                        <td>
                            <a href="../controllers/editar.controller.php?id=<?php echo $row['id_personal'];?>">
                                delete
                            </a>
                        </td>
                    </tr>                   
                <?php }?>                  
            </tbody>      
        </table>
    </div>

    <div class="col-md-8">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th> id_cargo </th>
                    <th> cargo </th>
                    <th> pago_hora </th>
                    <th> planilla </th>
                    <th> nivel_usuario </th>
                    <th> turno </th>
                    <th> horas_trabajo </th>
                    <th> edit </th>
                    <th> delete </th>
                </tr>
            </thead>
            
            <tbody>
                <?php
                
                while($row = mysqli_fetch_array($cargo)) {?>
                    <tr>
                        <td><?php echo $row['id_cargo']?> </td>
                        <td><?php echo $row['cargo']?> </td> 
                        <td><?php echo $row['pago_hora']?> </td>
                        <td><?php echo $row['planilla']?> </td>
                        <td><?php echo $row['nivel_usuario']?> </td>
                        <td><?php echo $row['turno']?> </td>
                        <td><?php echo $row['horas_trabajo']?> </td>
                        
                        <td>
                            <a href="">
                                edit
                            </a>
                        </td>
                        <td>
                            <a href="../controllers/editar.controller.php?id=<?php echo $row['id_cargo'];?>">
                                delete
                            </a>
                        </td>
                    </tr>                   
                <?php }?>                  
            </tbody>      
        </table>
    </div>

    <div class="col-md-8">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th> id_login </th>
                    <th> id_personal </th>
                    <th> usuario </th>
                    <th> contrasena </th>
                    <th> edit </th>
                    <th> delete </th>
                </tr>
            </thead>
            
            <tbody>
                <?php
                
                while($row = mysqli_fetch_array($login)) {?>
                    <tr>
                        <td><?php echo $row['id_login']?> </td>
                        <td><?php echo $row['id_personal']?> </td> 
                        <td><?php echo $row['usuario']?> </td>
                        <td><input type="password" value = '<?php echo $row['contraseña']?>' disabled ></td>
                                                
                        <td>
                            <a href="">
                                edit
                            </a>
                        </td>
                        <td>
                            <a href="../controllers/editar.controller.php?id=<?php echo $row['id_cargo'];?>">
                                delete
                            </a>
                        </td>
                    </tr>                   
                <?php }?>                  
            </tbody>      
        </table>
    </div>
        
    
<?php include("footer.php");

?>






