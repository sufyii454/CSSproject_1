<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test project</title>
</head>

<body>
    <?php
    echo "<h5>PHP_SELF returns the filename = </h5>". $_SERVER['PHP_SELF']. "<br>";

    echo "<h5>SERVER_NAME returns the name of the server = </h5>" . $_SERVER['SERVER_NAME'] . "<br>";

    echo "<h5>HTTP_HOST returns the host header from the current request = </h5>" . $_SERVER['HTTP_HOST'] ."<br>";

    echo "<h5>HTTP_USER_AGENT = </h5>" . $_SERVER['HTTP_USER_AGENT'] . "<br>";

    echo "<h5>SCRIPT_NAME Returns the path of the current script = </h5>" .$_SERVER['SCRIPT_NAME'] . "<br>";

    echo "<h5>REMOTE_ADDR Returns the IP address from where the user is viewing the current page = </h5>" . $_SERVER['REMOTE_ADDR'] . "<br>";

    $x=234;
    function myfunction(){
        echo "<br>";
        global $x;
        
    }
    myfunction();
    echo $x;

    
?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Name: <input type="text" name="fname">
        <input type="submit">
    </form>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_REQUEST['fname']);
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}

//function argument
function myFunction2($fname,$year){
  echo "<br> $fname khan.Born in $year <br>";
}
myfunction2("salma",1963);
myfunction2("shah",1965);
myfunction2("safa",1993);
myfunction2("sana",1968);
myfunction2("saima",1973);

// default argument value
function myfunction3($minheight=30){
  echo "The Height is : $minheight  <br>";
}
myfunction3(34);
myfunction3();
myfunction3(12);
myfunction3(21);

// returning a function 
function sum($x, $y) {
  $z=$x+$y;
  return $z;
}
echo "sum (5 + 6)= " .(5 + 6) ;
echo "<br>";
echo "sum(3,2) = ". sum(3,2)."<br>" ;

// pass by reference argument
function add_five(&$value){
  $value += 5;
}
$num=2;
add_five($num);
echo "Applying pass by reference argument \n num(5+2) = ".$num . "<br>";

// sum my number
function sumofmyNumber(...$b){
  $n=0;
  $len=count($b);
  for($i = 0;$i< $len;$i++){
    $n += $b[$i];
  }
  return $n;
}
$a= sumofmyNumber(3,4,6,7,8,3,5);
echo $a ."<br>";

//last name should be same
function myname($lastname,...$firstname){
  $txt="";
  $len=count($firstname);
  for($i = 0; $i < $len; $i++){
    $txt= $txt."Hi! ".$firstname[$i]." ". $lastname ."<br>";
  }
  return $txt;
}
$c=myname("John","Nikil","Hary","Sam");
echo $c;

//conditional and booleans 
//____1
  $r="asdf";
  $a=true;
  if($a){
    $message = "I Got the Code '$r' ";
  }
  else{
    $message = "I didn't Got the Code $r";
  }
  echo $message ."<br>";
//_____2
  $r="asdf";
  $a=false;
  if($a){
    $message = "I Got the Code '$r' ";
  }
  else{
    $message = "I didn't Got the Code $r";
  }
  echo $message. "<br>";
//array

$arrays=["abc","def","ghi","jkl",1,45,67];

echo "Topic ARRAYS...<br>";

echo  "total number of elements in array is : " . count($arrays) ."<br>";

echo "array at position 3 is : ". $arrays[3] . "<br>";

var_dump($arrays);

echo "<br>";

// foreach loop
echo "<h4>foreach loop of array </h4><br>";
$cars=["BMW","Nano"," FARARI"];
foreach($cars as $car){
  
  echo "<b> $car </b>"."<br>";

}
// foreach loop for associative array
echo "<h4>foreach loop for associative array </h4><br>";
$things=[
  'red'=>'book',
  'orange' => 'fruit',
  'mango' => 'yellow'
];
foreach($things as $thing => $value){
  echo $thing ." :" . $value ."<br>";
}

//  associative array 

        $books = [
            [
                'name' => 'Do Androids Dream of Electric Sheep',
                'author' => 'Philip K. Dick',
                'releaseYear' => 1968,
                'purchaseUrl' => 'http://example.com'
            ],
            [
                'name' => 'Project Hail Mary',
                'author' => 'Andy Weir',
                'releaseYear' => 2021,
                'purchaseUrl' => 'http://example.com'
            ]
        ];
    ?>

    <ul>
        <?php foreach ($books as $book) : ?>
        <li>
            <a href="<?= $book['purchaseUrl'] ?>">
                <?= $book['name'] ?> (<?= $book['releaseYear'] ?>)
            </a>
        </li>
        <?php endforeach; ?>
    </ul>


    <?php
      $books= [
        [
          'namee'=>'harry portor season 1',
          'author'=>'Harry Portor',
          'linkurl'=>'www.harrymovie.com'
        ],
        [
          'namee'=>'harry portor season 2',
          'author'=>'Harry Portor',
          'linkurl'=>'www.harrymovie.com'
        ]
        ];
        echo $books[0]['namee'] ."<br>";
        echo $books[1]['namee'] ."<br>";
    ?>
    <!-- using for loop,foreach loop -->
    <?php
      $books= [
        [
          'namee'=>'harry portor PART 1',
          'author'=>'Harry Portor',
          'linkurl'=>'www.harrymovie.com'
        ],
        [
          'namee'=>'harry portor PART 2',
          'author'=>'Harry Portors brother',
          'linkurl'=>'www.harrymovie.com'
        ],
        [
          'namee'=>'harry portor PART 3',
          'author'=>'Harry Portors brother',
          'linkurl'=>'www.harrymovie.com'
        ]
        ];
?>
    <ol>
        <?php echo "using _for_ loop"?>
        <?php foreach ($books as $bk) : ?>

        <li>
            <?= $bk['namee'] . "<br>" ?>
        </li>
        <?php endforeach; ?>
    </ol>
    <!-- using if loop -->
    <ol>
        <?php echo "using _if_ loop"?>
        <?php foreach ($books as $bk) : ?>
        <?php if($bk['author'] == 'Harry Portors brother' ) : ?>

        <li>
            <?= $bk['namee'] . "<br>" ?>
        </li>
        <?php endif; ?>
        <?php endforeach; ?>
    </ol>
    <!-- using functions -->
    <?php echo "<h4>using Functions</h4>";
  function ghiFunction(){
    return 'gibberish <br>';
  }
  echo ghiFunction();
  $colors=[
    [
      'red'=>'apple',
      'yellow'=>'mango',
      'black'=>'board'
    ],
    [
      'red'=>'car',
      'yellow'=>'bat',
      'black'=>'laptop'
    ]
    ];
     foreach($colors as $color) : 
      if($color['yellow'] ):
        echo "we found mangoes <br>";
      else:
        echo "we did not found mangoes <br>";
      
      endif;
      return $color;
    endforeach;
    ?>

</body>

</html>/