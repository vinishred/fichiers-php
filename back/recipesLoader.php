<?php
function loadRecipes(): array
{
  return json_decode(base64_decode('WyJHYXRlYXUgYXUgY2hvY29sYXQiLDQwLDEsIkZsYW4gcGF0aXNzaWVyIiw2MCwyXQ'), true);
}


function getRecipes (): array {
  $recipes = loadRecipes();
  $recipesCount = count ($recipes);
  $formatedRecipes = [];

  for ($i=0; $i < $recipesCount; $i += 3)
    {
      $formatRecipes[] = [
        'title' => $loadRecipes[$i],
        'time' => $loadRecipes[$i +1],
        'difficulty' => $loadRecipes[$i + 2]
      ];
    }
  return $formatRecipes;
}
  
