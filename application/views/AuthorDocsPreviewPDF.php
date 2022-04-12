<?php
echo "<!DOCTYPE html>";
echo "<html>";
echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=Windows-1252\">";
echo "<body style='font-family: Times New Roman'>";
echo "<div class='row' style='margin-left: 68px; margin-right: 8px;'>";
    echo "<header>";
        echo "<p style='text-align: right; font-style: italic; color:gray; font-size: 13px'>
            8th International Conference on Water and Flood Management (ICWFM 2021)</br><br>
            29-31 March 2021, Dhaka, Bangladesh.
        </p>";
  echo "</header>";
  echo "<h1 style='text-align: center; font-weight: bold; color: #000; font-size: 18.5px; margin-top: 30px; text-transform: uppercase'>".$audoc[0]->titleofabstract."</h1>";
  if($audoc[0]->authfname_box1!=''||audoc[0]->authmname_box1!=''||$audoc[0]->authlname_box1!=''){
     echo "<p style='text-align: center; color: #000; font-size: 16px'><span>".$audoc[0]->authfname_box1.' '.$audoc[0]->authmname_box1.' '.$audoc[0]->authlname_box1. "<sup>1</sup>";
  }
  if($audoc[0]->authfname2!=''||$audoc[0]->authmname2!=''||$audoc[0]->authlname2!=''){
     echo ', '.$audoc[0]->authfname2.' '.$audoc[0]->authmname2.' '.$audoc[0]->authlname2. "<sup>2</sup>";
  }
  if($audoc[0]->authfname3!=''||$audoc[0]->authmname3!=''||$audoc[0]->authlname3!=''){
     echo ', '.$audoc[0]->authfname3.' '.$audoc[0]->authmname3.' '.$audoc[0]->authlname3. "<sup>3</sup>"; 
  }
  if($audoc[0]->authfname4!=''||$audoc[0]->authmname4!=''||$audoc[0]->authlname4!=''){
     echo ', '.$audoc[0]->authfname4.' '.$audoc[0]->authmname4.' '.$audoc[0]->authlname4. "<sup>4</sup>";
  }
  if($audoc[0]->authfname5!=''||$audoc[0]->authmname5!=''||$audoc[0]->authlname5!=''){
     echo ', '.$audoc[0]->authfname5.' '.$audoc[0]->authmname5.' '.$audoc[0]->authlname5. "<sup>5</sup>";
  }
  if($audoc[0]->authfname6!=''||$audoc[0]->authmname6!=''||$audoc[0]->authlname6!=''){
     echo ', '.$audoc[0]->authfname6.' '.$audoc[0]->authmname6.' '.$audoc[0]->authlname6. "<sup>6</sup>";
  }
    if($audoc[0]->authfname7!=''||$audoc[0]->authmname7!=''||$audoc[0]->authlname7!=''){
     echo ', '.$audoc[0]->authfname7.' '.$audoc[0]->authmname7.' '.$audoc[0]->authlname7. "<sup>7</sup>";
  }
    if($audoc[0]->authfname8!=''||$audoc[0]->authmname8!=''||$audoc[0]->authlname8!=''){
     echo ', '.$audoc[0]->authfname8.' '.$audoc[0]->authmname8.' '.$audoc[0]->authlname8. "<sup>8</sup>";
  }
    if($audoc[0]->authfname9!=''||$audoc[0]->authmname9!=''||$audoc[0]->authlname9!=''){
     echo ', '.$audoc[0]->authfname9.' '.$audoc[0]->authmname9.' '.$audoc[0]->authlname9. "<sup>9</sup>";
  }
    if($audoc[0]->authfname10!=''||$audoc[0]->authmname10!=''||$audoc[0]->authlname10!=''){
     echo ', '.$audoc[0]->authfname10.' '.$audoc[0]->authmname10.' '.$audoc[0]->authlname10.  "<sup>10</sup>". "</span></p>"; 
  }
   
    if($audoc[0]->affiliation_box1!=''){
     echo "<p style='color: #000; font-size: 14.5px; font-style: italic;'><span>" ."<sup>1</sup>" .$audoc[0]->affiliation_box1.'.<br>';
  }
  
 if($audoc[0]->affiliation2!=''){
     echo '' ."<sup>2</sup>" .$audoc[0]->affiliation2.'.<br>';
  }
   if($audoc[0]->affiliation3!=''){
     echo '' ."<sup>3</sup>" .$audoc[0]->affiliation3.'.<br>';
  }
   if($audoc[0]->affiliation4!=''){
     echo '' ."<sup>4</sup>" .$audoc[0]->affiliation4.'.<br>';
  }
   if($audoc[0]->affiliation5!=''){
     echo ''."<sup>5</sup>" .$audoc[0]->affiliation5.'.<br>';
  }
   if($audoc[0]->affiliation6!=''){
     echo '' ."<sup>6</sup>" .$audoc[0]->affiliation6.'.<br>';
  }
   if($audoc[0]->affiliation7!=''){
     echo '' ."<sup>7</sup>"  .$audoc[0]->affiliation7.'.<br>';
  }
   if($audoc[0]->affiliation8!=''){
     echo '' ."<sup>8</sup>" .$audoc[0]->affiliation8.'.<br>';
  }
   if($audoc[0]->affiliation9!=''){
     echo '' ."<sup>9</sup>" .$audoc[0]->affiliation9.'.<br>';
  }
   if($audoc[0]->affiliation10!=''){
     echo '' ."<sup>10</sup>" .$audoc[0]->affiliation10.'.<br>';
  }
  
 echo "</span></p>";
echo  "<p style='font-weight: bold; margin-top: 45px'>Abstract</p>";
echo "<p style='font-size: 16px; text-align: justify;'>".$audoc[0]->abstractword."</p>";

echo  "<span style='font-style: italic; font-weight: bold;margin-bottom: 50px'>Keyword: </span>";
 echo "<span>".$audoc[0]->fivekeywords."</span>";
 

     
    echo "</div>";

 echo "</body>";
echo "</html>";
?>

