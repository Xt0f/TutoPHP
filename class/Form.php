<?php
class Form {
  // __construct absent car la méthode est statique.

  public static $class = "form-control";
  
  public static function checkbox(string $nom, string $valeur=null, array $donnees=[]): string
  {
      $attributs='';
      if (isset($donnees[$nom]) && in_array($valeur, $donnees[$nom])) {
          $attributs .= 'checked';
      }
      $class = self::$class;
      return <<<HTML
      <input type="checkbox" name="{$nom}[]" value="$valeur" $attributes class="{$class}">
HTML;
  }
}