const person = {
	firstName:"Smith",
	lastName: "John",
	age: 24,
	
	sibblings: {brother: "Mark", sister: "Mary"},
	salary: 50000,
	fullname: function() {
		return "Full Name is " + this.firstName + " " + this.lastName;
	}
};
/*person.prototype.job = function() {
	return "ENgineer";
}; */
document.write(person.firstName, "<br>");
document.write(person["lastName"], "<br>");
document.write(person.sibblings.brother, "<br>");
document.write(person.sibblings.sister, "<br>");
document.write(person["sibblings"]["sister"], "<br>");
document.write(person.fullname(),"<br>");
document.write("<br>", "-----------------------------------------");

var emp = new Object();
emp.id = 001;
emp.fName = "Malar";
emp.lName = "Nathan";
document.write(emp.id, "  ", emp["fName"]);
document.write("<br>", "-----------------------------------------<br>");
function Employee(id, name, age) {
	this.id = id;
	this.name = name;
	this.age = age;
}



let emp1 = new Employee(100, "Malar", 24);
let emp2 = new Employee(103, "Smith", 23);
let emp3 = new Employee(107, "Hill", 21);

console.log(Employee);
console.log(emp1);
console.log(emp2);
console.log(emp3.toString());
console.log(emp3.toString());


let p1 = Object.create({name:"Hill", age:27});
document.write(p1.name);
console.log(p1);

Person = ["aa", "bb", "cc"];
var x = prompt("Enter the element to search");
let loc = -1;
for(let i=0; i < Person.length; i++) {
	if(Person[i] == x) {
		loc = i;
		break;
	} 
}
document.write("Location:"+ loc);





