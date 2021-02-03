<?php
    function nav_item(string $lien, string $titre, string $LinkClass = ''): string 
    {
      $classe = 'nav-item';
      if($_SERVER['SCRIPT_NAME'] === $lien) {
        $classe = $classe . ' active';
      }
      return <<<HTML
                 <li class="$classe"><a class="LinkClass" href="$lien" accesskey="1" title="">$titre</a></li>
HTML;
 } 

function nav_menu(string $LinkClass = ''): string {
    return 
       nav_item('../public/index.php', 'Accueil', $LinkClass) .
       nav_item('../public/chauffage.php', 'Chauffage', $LinkClass) .
       nav_item('../public/plomberie.php', 'Plomberie', $LinkClass) .
       nav_item('../public/realisation.php', 'Réalisations', $LinkClass) .
       nav_item('../public/contact.php', 'Contact', $LinkClass) . 
       nav_item('../admin/login.php', 'Connexion', $LinkClass);
       
}




function checkbox(string $name, string $value, array $data): string {
  $attributes = '';
  if(isset($data[$name]) && in_array($value, $data[$name])) {
    $attributes .= 'checked';
  }
  return <<<HTML
  <input type="checkbox" name="{$name}[]" value="$value" $attributes>
HTML;  
}


function radio(string $name, string $value, array $data): string {
  $attributes = '';
  if(isset($data[$name]) && $value === $data[$name]) {
    $attributes .= 'checked';
  }
  return <<<HTML
  <input type="radio" name="{$name}" value="$value" $attributes>
HTML;  
}

function select (string $name, $value, array $options): string {
  $html_options = [];
   foreach($options as $k => $option) {
      $attributes = $k == $value ? 'selected' : '';
      $html_options[] = "<option value='$k' $attributes>$option</option>";
   }
   return "<select class='form-control' name='$name'>" . implode($html_options) . "</select>";
}

function dump ($variable) {
   echo '<pre>';
   var_dump($variable);
   echo '</pre>';
}

/*HEURE*/
function creneaux_html (array $creneaux) {
  if (empty($creneaux)) {
    return 'Fermé';
  }
  $phrases = [];
  foreach ($creneaux as $creneau) {
    $phrases[] = " de <strong>{$creneau[0]}h</strong> / <strong>{$creneau[1]}h</strong>";
  }
  return 'Ouvert ' . implode(" et ", $phrases);
}

function in_creneaux (int $heure, array $creneaux): bool
{
  foreach($creneaux as $creneau) {
    $debut = $creneau[0];
    $fin = $creneau[1];
    if($heure >= $debut && $heure < $fin) {
      return true;
    }
  }
  return false;
}