var a = prompt("What is the value of 'a'? \n","");
var b = prompt("What is the value of 'b'? \n", "");
var c = prompt("What is the value of 'c'? \n", "");
//Compute the square root and denominator of the result
var root_part = Math.sqrt(b * b - 4.0 * a * c);
var denominator = 2.0 * a;
//Compute and display the 2 roots
var root1 = (-b + root_part)/denominator;
var root2 = (-b - root_part)/denominator;
document.write("The first root is ", root1, "<br />");
document.write("The second root is ", root2, "<br />");