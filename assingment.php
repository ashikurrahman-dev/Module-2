
<?php



//  Task 1: Looping with Increment using a Function
/*
Write a PHP function that uses a for loop to print all even numbers from 1 to 20, but with a
step of 2. In other words, you should print 2, 4, 6, 8, 10, 12, 14, 16, 18, 20. The function
should take the arguments like start as 1, end as 20 and step as 2. You must call the
function to print.
Also do the same using while loop and do-while loop also. 
*/

// for loop
function print_even_numbers_for($start, $end, $step){
    for ($i = $start; $i <= $end; $i += $step) {
        if ($i % 2 != 0) {
            echo $i+1 . " ";
        }
    }
}

print_even_numbers_for( 1, 20, 2);
echo "\n";

// while loop
function print_even_numbers_while($start, $end, $step) {
    $i = $start;
    while ($i <= $end) {
      if ($i % 2 != 0) {
        echo $i+1 . " ";
    }
      $i += $step;
    }
  }
  
  print_even_numbers_while(1, 20, 2);
  echo "\n";

// do_while loop
  function print_even_numbers_do_while($start, $end, $step) {
    $i = $start;
    do {
      if ($i % 2 != 0) {
        echo $i+1 . " ";
    }
      $i += $step;
    } while ($i <= $end);
  }
  
  print_even_numbers_do_while(1, 20, 2);
  
  echo "\n";

// Task 2: Skip Multiples of 5
/*
Create a PHP script that prints numbers from 1 to 50 using a for loop. However, when the
loop encounters a multiple of 5, it should skip that number using the continue statement and
continue to the next iteration.
*/

for($i=1;$i<=50;$i++){
    if($i%5==0){
        continue;
    }
    echo $i." ";
}
echo "\n";

// Task 3: Break on Condition
/*
Write a PHP program that calculates and prints the first 10 Fibonacci numbers. But, if a
Fibonacci number is greater than 100, break out of the loop using the break statement.
*/

$firstNum = 1;
$secondNum = 7;

echo "Fibonacci Numbers: ";

for ($i = 0; $i < 10; $i++) {
    if ($firstNum > 100) {
        break;
    }

    echo $firstNum." ";
    $nextNum = $firstNum + $secondNum;
    $firstNum = $secondNum;
    $secondNum = $nextNum;
}
echo "\n";


// Task 4: Fibonacci Series printing using a Function
/*
Write a PHP function to print the first 15 numbers in the Fibonacci series. You should take
this 15 as an argument of a function and use a for loop to generate these numbers and print
them by calling the function.
*/

function FibonacciSeries($number){
    $first = 0;
    $second = 1;

    echo "Fibonacci Series: ";

    for ($i = 0; $i < $number; $i++) {
        echo $first . " ";

        $next = $first + $second;
        $first = $second;
        $second = $next;
    }
}

FibonacciSeries(15);




?>