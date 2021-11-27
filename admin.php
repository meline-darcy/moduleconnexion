<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP / MySQL</title>
        <meta charset="utf-8">

    </head>
    <body>
        <h1>Bases de données MySQL</h1>
        <?php
            $bdd = mysqli_connect("localhost","root","","moduleconnexion");


            $req= mysqli_query($bdd,"SELECT * FROM utilisateurs");  

            $res= mysqli_fetch_all($req, MYSQLI_ASSOC);  


        

            ?>

        <h1>Tableau</h1>
        <table>
            <thead>

                    <?php
                    echo '<tr>';                        
                    foreach($res[0] as $key => $value){        

                            echo "<th>$key</th>";          

                    }
                    echo '</tr>';
                    ?>
            </thead>
            <tbody>
                <tr>
            <?php



                foreach($res as $key => $value){ 

                    echo '<tr>';

                    foreach ($value as $key1 => $value1) 
                    {
                        echo "<td>$value1</td>";  
                    }

                        echo '</tr>'; 
                }



            ?>

            </tbody>
        </table>
    </body>
</html>