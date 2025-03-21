/*
var name = "Kartavya";
let age = 20;
const country = "India";

console.log("Name:", name);
console.log("Age:", age);
console.log("Country:", country);
*/


/*
const readlineSync = require('readline-sync');

const name = readlineSync.question("Enter you name: ");
const age = readlineSync.question("Enter you age: ");
const country = readlineSync.question("Enter you country: ");

console.log("Name:", name);
console.log("Age:", age);
console.log("Country:", country);
*/


/*
if(true){
    let blockLet = "I exist inside this block";
    const blockConst = "Me too";
    var blockVar = "Lets check for var";

    console.log(blockLet);
    console.log(blockConst);
    console.log(blockVar);
}

// console.log(blockLet);       // let and const have block scope while var has global scope
// console.log(blockConst);
console.log(blockVar);
*/



/*
const globalVar = "I am global";
function test(){
    console.log(globalVar);
}

test();
console.log(globalVar);
*/


/*
Hoisting: Var will not give error even when declared above the initialization

console.log(b);
var b = 20;
*/


/*
x += 5; console.log("x += 5 ->", x);
x -= 3; console.log("x -= 3 ->", x);
x *= 2; console.log("x *= 2 ->", x);
x /= 2; console.log("x /= 2 ->", x);
x %= 2; console.log("x %= 3 ->", x);
x **= 2; console.log("x **= 2 ->", x);
console.log("\n");

// 3. Comparison Operators

console.log("Comparison Operators: ");
console.log("10 == '10' ->", 10 == '10');
console.log("10 === '10' ->", 10 === '10');
console.log("10 != '10' ->", 10 != '10');
console.log("10 == '10' ->", 10 == '10');
console.log("10 == '10' ->", 10 == '10');
*/


const readlineSync = require("readline-sync");

/*
let number = readlineSync.question("Enter a number: ");
number = Number(number);
if (number > 0) console.log("Number is positive");
else if (number < 0) console.log("Number is negative");
else console.log("Number is zero");



a = Number(readlineSync.question("enter A: "));
b = Number(readlineSync.question("Enter b: "));
const add = function (a, b) {
    return a + b;
};

const multiply = (a,b) => a*b; //Arrow Function in JavaScript
console.log(add(a, b));
console.log(multiply(a,b));
*/




/* Functions :-

function isValidUser(username,password){
    if(username=="" || password=="") return false;
    return true;
}
username= readlineSync.question("Enter your username: ");
password=readlineSync.question("Enter your password: ");
console.log(isValidUser(username,password));



function isEligibleforDiscount(age,isMember){
    if(isMember==true && age>=60){
        return true;
    }
    return false;
}
age = Number(readlineSync.question("Enter your age: "));
isMember = readlineSync.question("Enter you eligibility: ");
console.log(isEligibleforDiscount(age, isMember));



function isBetween(x, min, max){
    if(x>min && x<max){
        return true;
    }
    else{
        return false;
    }
}
x = Number(readlineSync.question("Enter the value of x: "));
min = Number(readlineSync.question("Enter the value of min: "));
max = Number(readlineSync.question("Enter the value of max: "));
console.log(isBetween(x, min, max));
*/


/* Object Constructor :-

const car = new Object();
car.brand = "Toyota";
car.model = "Corolla";
car.year = 2022;

car.getDetails = function(){
    return `${this.brand} ${this.model} ${this.year}`;
}

// console.log(car.brand);
// console.log(car.model);
// console.log(car.year);
console.log(car.getDetails());
*/



/* Second Method of creating an Object (similar to class in Cpp)
*/
const person = {
    firstName: "Kartavya",
    lastName: "Shrivastav",
    age: 20,

    fullname: function(){
        return this.firstName + " " + this.lastName;
    },

    greet: function(){
        return ("Hello, my name is " + this.fullname());
    }
};

console.log(person.firstName);
console.log(person["lastName"]);
console.log(person.fullname());
console.log(person.greet());

person.age = 31;
console.log(person.age);

person.occupation = "Engineer";
console.log(person.occupation);





