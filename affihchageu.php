<?php
include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, intitial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel = "preconnect" href = "https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Responsive hmlt tablee</html></title>
    <link rel="stylesheet" href="des1.css">

</head>
<header>
        <a href="#" class="logo"><span>R</span>econnaissance et <span>I</span>ndexation du <span>D</span>ocuments <span>É</span>rit</a>
    </header>
<body>
    
    <main class="table">

        <section class="table__header">

        <?php $numEquipe=$_GET['numEquipe'];
         $sql="Select * from `equipe` where numero = $numEquipe";
                    $rst=mysqli_query($con, $sql);
                    $row1=mysqli_fetch_assoc($rst);
                    $teamname=$row1['intitule_DEquipe']; ?>
            <h2><span>T</span>EAM <span>M</span>EMBERS</h2>
             <h3><?php echo $teamname; ?></h3>
            
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        
                        <th> numEquipe </th>
                        <th> Name </th>
                        <th> Last Name  </th>
                        <th> Birth Date </th>
                        <th> Sex </th>
                        <th> epouse de </th>
                        <th> Last Diploma </th>
                        <th> Diploma Year </th>
                        <th> Grade </th>
                        <th> Grade Year </th>
                        <th> Status </th>
                        <th> Main Domain </th>
                        <th> connecting structure </th>
                        <th> Email </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $numEquipe=$_GET['numEquipe'];

                    $sql="Select * from `chercheur` where num_dEquipe = $numEquipe";
                    $result=mysqli_query($con,$sql);
                    if ($result){
                        while($row=mysqli_fetch_assoc($result)){
                            
                            $numEquipe=$row['num_dEquipe'];
                            $name=$row['nom'];
                            $lastname=$row['prenom'];
                            $datenaiss=$row['date_de_naissance'];
                            $sex=$row['sex'];
                            $epousede=$row['epouse_de'];
                            $lastdiplome=$row['dernier_diplome'];
                            $diplomeyear=$row['an_obt_diplome'];
                            $grade=$row['grade'];
                            $gradeyear=$row['an_obt_grade'];
                            $status=$row['statut'];
                            $domaine=$row['domaine_principal'];
                            $structure=$row['Structure_de_rattachement'];
                            $email=$row['email'];
                            $be=null;

                            echo ' <tr>
                            
                            <td> '.$numEquipe.' </td>
                            <td> '.$name.' </td>
                            <td> '.$lastname.' </td>
                            <td> '.$datenaiss.' </td>
                            <td> '.$sex.' </td>
                            <td> '.$epousede.' </td>
                            <td>  '.$lastdiplome.'</td>
                            <td> '.$diplomeyear.' </td>
                            <td> '.$grade.' </td>
                            <td> '.$gradeyear.' </td>
                            <td> '.$status.' </td>
                            <td> '.$domaine.' </td>
                            <td> '.$structure.' </td>
                            <td> '.$email.' </td>
                           
                        </tr ';

                        }
                        
                    }


                    
                    
                    
                    
                    ?>

                    
                    
                </tbody>
            </table>
            <?php   $dd = "SELECT * FROM equipe WHERE numero= '$numEquipe'  ";
                    $dds = mysqli_query($con,$dd);
                    $row = mysqli_fetch_assoc($dds);
                    $descrip=$row['description_scientifique'];
                    $adequation=$row['adequation'];
                    $enivron=$row['environnement_et_contraint'];
                    $trv=$row['traveaux_en_cours'];
                    
                    echo ' 
                     <br>                     
                           <br><h1>Description</h1>   <p>'.$descrip.'</p>
                           <h1>Adequation</h1>   <p>'.$adequation.'</p>
                           <h1>Environement et contraint</h1>   <p>'.$enivron.'</p>
                           <h1>Traveaux en cours </h1>   <p>'.$trv.'</p>';?>




    </main>
</body>
</html>