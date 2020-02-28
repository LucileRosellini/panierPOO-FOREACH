<?php


// Faire un echo: 
 echo "Hello, World!";
//------------------------------------
//------------------------------------

//Definir une variable:
$x = 1;
$y = "foo";
$z = True;

//------------------------------------
//------------------------------------

//Attribuer une valeur à une variable:
$name = "Jake";
echo "Your name is $name";    // prints out Your name is Jake
//------------------------------------
//------------------------------------

//Additionner deux variables
$x = 195793;
$y = 256836;
$sum = $x + $y;

echo "The sum of $x and $y is $sum."

//------------------------------------
//------------------------------------

//Utiliser les variables d'un tableau: 

$odd_numbers = [1,3,5,7,9];
$first_odd_number = $odd_numbers[0];
$second_odd_number = $odd_numbers[1];

echo "The first odd number is $first_odd_number\n";
echo "The second odd number is $second_odd_number\n";

//---> Pour ajouter de nouvelles variable à l'aide d'un index: 

$odd_numbers = [1,3,5,7,9];
$odd_numbers[5] = 11;
print_r($odd_numbers);

//--->/!/ L'index d'un tableau est [0] 

//---> Pour supprimer un element d'un tableau il faut utiliser "unset"

$odd_numbers = [1,3,5,7,9];
unset($odd_numbers[2]); // will remove the 3rd item (5) from the list
print_r($odd_numbers);

//------------------------------------
//------------------------------------

//Les fonctions utiles!:

//----> count()
$odd_numbers = [1,3,5,7,9];
echo count($odd_numbers);

//---> count () ---> Peut aussi servir à obtenir le nombre d'élement dans une liste. Puis être utilisé pour faire référence au dernier membre d'un tableau. (Le -1 vient du dernier index qu'on soustrait puisque les indices demarrent à 0)
$odd_numbers = [1,3,5,7,9];
$last_index = count($odd_numbers) - 1;
$last_item = $odd_numbers[$last_index];
echo $last_item;


//----> reset()---> Il permet d'obtenir le premier membre du tableau. (Il reinitialise également le pointeur d'itération interne)
$odd_numbers = [1,3,5,7,9];
$first_item = reset($odd_numbers);
echo $first_item;

//----> Syntaxe d'index pour obtenir le premier membre du tableau:
$odd_numbers = [1,3,5,7,9];
$first_item = $odd_numbers[0];
echo $first_item;

//---->end()---> Obtenir le dernier membre du tableau.
$odd_numbers = [1,3,5,7,9];
$last_item = end($odd_numbers);
echo $last_item;

//------------------------------------
//------------------------------------

//Fonction de pile et de file d'attente: 

//---->array_push() ---> Permet de pousser un membre à la fin d'un tableau.
$numbers = [1,2,3];
array_push($numbers, 4); // now array is [1,2,3,4];

// print the new array
print_r($numbers);

//---->array_pop ---> Permet de faire apparaître un membre à la fin d'une fonction.
$numbers = [1,2,3,4];
array_pop($numbers); // now array is [1,2,3];

// print the new array
print_r($numbers);

//---->array_unshift() ---> Permet de pousser un membre du tableau au debut.
$numbers = [1,2,3];
array_unshift($numbers, 0); // now array is [0,1,2,3];

// print the new array
print_r($numbers);


//---->array_shift() ---> Permet de faire apparaître un membre du tableau au debut.
$numbers = [0,1,2,3];
array_shift($numbers); // now array is [1,2,3];

// print the new array
print_r($numbers);

//------------------------------------
//------------------------------------

//Concaténation de deux tableaux:

//--->array_merge()--->pour concaténer entre deux tableaux:
$odd_numbers = [1,3,5,7,9];
$even_numbers = [2,4,6,8,10];
$all_numbers = array_merge($odd_numbers, $even_numbers);
print_r($all_numbers);

//------------------------------------
//------------------------------------

//Tri des tableaux:

//--->sort() / resort () ---> Permettent de trier les fonctions 
$numbers = [4,2,3,1,5];
sort($numbers);
print_r($numbers);

//------------------------------------
//------------------------------------

//Tableaux avancés: 

//--->array_slice()--->renvoie un nouveau tableau qui contient une certaine partie d'un tableau spécifique à partir d'un décalage.
//Par exemple, si nous voulons supprimer les 3 premiers éléments d'un tableau, nous pouvons procéder comme suit:

$numbers = [1,2,3,4,5,6];
print_r(array_slice($numbers, 3));

//---> OU prendre seulement deux éléments!
$numbers = [1,2,3,4,5,6];
print_r(array_slice($numbers, 3, 2));

//--->array_splice()---> Fait exactement la même chose sauf qu'elle supprime les tranches renvoyée par le tableau!
$numbers = [1,2,3,4,5,6];
print_r(array_splice($numbers, 3, 2));
print_r($numbers);

//------------------------------------
//------------------------------------

//Les tableaux avec clés:


//---> Dans les tableaux: Un compteur basé sur zéro est utilisé pour définir les clés. Chaque élément ajouté au tableau incrémente l'index suivant de 1.

$phone_numbers = [
  "Alex" => "415-235-8573",
  "Jessica" => "415-492-4856",
];

print_r($phone_numbers);
echo "Alex's phone number is " . $phone_numbers["Alex"] . "\n";
echo "Jessica's phone number is " . $phone_numbers["Jessica"] . "\n";

//---> Ajouter une clef à un tableau.

$phone_numbers = [
  "Alex" => "415-235-8573",
  "Jessica" => "415-492-4856",
];

$phone_numbers["Michael"] = "415-955-3857";

print_r($phone_numbers);

//--->array_key_exists---> Permet de vérifier si une clé existe dans un tableau.

$phone_numbers = [
  "Alex" => "415-235-8573",
  "Jessica" => "415-492-4856",
];

if (array_key_exists("Alex", $phone_numbers)) {
    echo "Alex's phone number is " . $phone_numbers["Alex"] . "\n";
} else {
    echo "Alex's phone number is not in the phone book!";
}

if (array_key_exists("Michael", $phone_numbers)) {
    echo "Michael's phone number is " . $phone_numbers["Michael"] . "\n";
} else {
    echo "Michael's phone number is not in the phone book!";
}

//---> array_keys---> Permet d'extraire uniquement les clés d'un tableau. 

$phone_numbers = [
  "Alex" => "415-235-8573",
  "Jessica" => "415-492-4856",
];

print_r(array_keys($phone_numbers));

//---->array_values --->permet d'obtenir uniquement les valeurs d'un tableau.
$phone_numbers = [
  "Alex" => "415-235-8573",
  "Jessica" => "415-492-4856",
];

print_r(array_values($phone_numbers));

//---------------------------------------------
//---------------------------------------------

//Les cordes: 

//Les chaînes sont des variables qui contiennent du texte. Par exemple, une chaîne qui contient un nom est définie comme suit:

$name = "John";
echo $name;
//Nous pouvons facilement formater des chaînes à l'aide de variables. Par exemple:

$name = "John";
$introduction = "Hello $name";
echo $introduction;
//Nous pouvons également concaténer des chaînes en utilisant l' .opérateur point . Par exemple:

$first_name = "John";
$last_name = "Doe";
$name = $first_name . " " . $last_name;
echo $name;
//Pour mesurer la longueur d'une chaîne, nous utilisons la strlenfonction:

$string = "The length of this string is 43 characters.";
echo strlen($string);
//Pour couper une partie d'une chaîne et la renvoyer en tant que nouvelle chaîne, nous pouvons utiliser la substrfonction:

$filename = "image.png";
$extension = substr($filename, strlen($filename) - 3);
echo "The extension of the file is $extension";

//---------------------------------------------
//---------------------------------------------

//Joindre et diviser

//Nous pouvons joindre des tableaux pour former des chaînes, ou diviser des chaînes en tableaux de chaînes.
//Par exemple, pour diviser une chaîne avec une liste de fruits séparés par une virgule, nous utilisons la explodefonction:

$fruits = "apple,banana,orange";
$fruit_list = explode(",", $fruits);
echo "The second fruit in the list is $fruit_list[1]";
//Pour joindre à nouveau un tableau à une seule chaîne séparée par des virgules, nous utilisons la implodefonction:

$fruit_list = ["apple","banana","orange"];
$fruits = implode(",", $fruit_list);
echo "The fruits are $fruits";

//---------------------------------------------
//---------------------------------------------

//Les boucles

//--->For ---->  pour par exemple parcourir un tableau.

$odd_numbers = [1,3,5,7,9];
for ($i = 0; $i < count($odd_numbers); $i=$i+1) {
    $odd_number = $odd_numbers[$i];
    echo $odd_number . "\n";
}

//--->Foreach --->
$odd_numbers = [1,3,5,7,9];
foreach ($odd_numbers as $odd_number) {
  echo $odd_number . "\n";
}
//------------------> Possible de combiner avec les clefs 
$phone_numbers = [
    "Alex" => "415-235-8573",
    "Jessica" => "415-492-4856",
  ];
  
  foreach ($phone_numbers as $name => $number) {
    echo "$name's number is $number.\n";
  }

//---> while --->La différence entre les boucles for et les boucles while est que les boucles for sont utilisées pour itérer sur un tableau ou un objet, et qu'une boucle while s'exécutera un nombre de fois inconnu, en fonction de conditions variables.
  $counter = 0;

while ($counter < 10) {
    $counter += 1;
    echo "Executing - counter is $counter.\n";
}
//------------------> break; et continue; dans boucle while permet de remonter en haut de la boucle ou quitter la boucle. C'est une façon de faire verifier au programme si la condition de boucle est respectée. 
//------------------> Dans l'exemple ci dessous la verification verifie si le nombre est pair. Si c'est le cas, le programme l'ignore pour n'imprimer qie les chiffres impairs. 
$counter = 0;

while ($counter < 10) {
    $counter += 1;

    if ($counter % 2 == 0) {
        echo "Skipping number $counter because it is even.\n";
        continue;
    }

    echo "Executing - counter is $counter.\n";
}
//-----------------> Dans cet exemple ci le test verifie si la variable de compteur n'est pas supérieure à 8. Si c'est le cas, nous aimerions arrêter la boucle. Dans ce cas, le numéro 9 ne sera pas imprimé.
$counter = 0;

while ($counter < 10) {
    $counter += 1;

    if ($counter > 8) {
        echo "counter is larger than 8, stopping the loop.\n";
        break;
    }

    if ($counter % 2 == 0) {
        echo "Skipping number $counter because it is even.\n";
        continue;
    }

    echo "Executing - counter is $counter.\n";
}

//---------------------------------------------
//---------------------------------------------

//Les fonctions

//Une fonction reçoit une liste d'arguments séparés par des virgules. 
//Chaque argument n'existe que dans le contexte de la fonction, ce qui signifie qu'ils deviennent des variables à l'intérieur du bloc fonction, 
//mais ne sont pas définis à l'extérieur de ce bloc fonction.

// define a function called `sum` that will
// receive a list of numbers as an argument.
function sum($numbers) {
    // initialize the variable we will return
    $sum = 0;

    // sum up the numbers
    foreach ($numbers as $number) {
        $sum += $number;
    }

    // return the sum to the user
    return $sum;
}

// Example usage of sum
echo sum([1,2,3,4,5,6,7,8,9,10]);


// Pour appeller une fonction il faut inserer un fichier appellé: 
include("sum.php");
// Example usage of sum
echo sum([1,2,3,4,5,6,7,8,9,10]);

