 <!DOCTYPE html>
 <html lang="fr">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiche Etudiant</title>
    <link rel="stylesheet" href="style.css">
 </head>
 <body>
    <?php
 $nom="Hakiri Salma";
 $filiere="Info";
 $moyenne=17;//moyenne mahouch chaine
 $estboursier="false";
 $anneeEtude=2;
 ?>
 <?php
  if($moyenne>=10)
    {$statut="Admis(e)";}
  else{$statut="Non admis(e)";}
  ?>
  <p>
    statut : <?php echo $statut ; ?>
  </p>
<?php
 switch($filiere)
 {
    case "Info" :
        $labelfiliere = "Informatique";
        $classeBadge = "badge-info";
        break;
    case "Elec" :
         $labelfiliere = "Electronique";
        $classeBadge = "badge-elec";
        break;
    default:
        $labelfiliere = "Filiere inconnue";
        $classeBadge = "Badge-defaut";
        
 }
 ?>
 <p> Filiere : <?php echo $labelfiliere; ?> </p>
<div class="fiche">
    <h1><?php echo $nom ; ?></h1>
    <span class="badge <?php echo $classeBadge ; //lena l echo mouch affichage juste bech taati esem l variable l code html bech yaaref et selon heya couleur du filiere?>"> 
    <?php echo $labelfiliere; ?>
    </span>
    <p><?php echo " Année $anneeEtude -Moyenne : $moyenne /20";?></p>
    <p><?php echo $statut; ?></p>
    <?php if ($estboursier) { ?>
      <p>🎓 Boursier</p>
    <?php } ?>
  </div>


    
 </body>
 </html>



