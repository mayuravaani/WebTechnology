const person = {
	firstName: "Smith",
	lastName: "Hill",
	Age: 26,
	salary: 40000,
	sibblings: {brother: "John", sister: "Elsa" },
	fullName: function() {8
		return "Full Name=" + this.firstName;
	},
	getbonus: function() {
		return 0.4;
	},
	getSalary: function() {
		return this.getbonus()*this.salary;
	}
};
console.log(person.getSalary());
console.log(person);
console.log(person.toString());
console.log(person.toLocaleString());
console.log(person.constructor());
console.log(person.Age);
console.log(person["Age"]);
console.log(person.sibblings);
console.log(person.sibblings.brother);
console.log(person.fullName());

var emp= new Object();
	emp.id=001;
	emp.name="Jhon";
	emp.salary=50000;
	emp.bonus = function() {
		return this.salary+3000;
	}

	console.log(emp);
	console.log(emp.id + "" + emp.name + "" + emp.salary);
	console.log(emp.bonus())	;

function Student(fn, ln) {
	this.firstName = fn;
	this.lastName = ln;
	this.fullName = function() {
		return this.firstName + " " + this.lastName;
	}
}
let s1 = new Student("Raj", "Vimal");
let s2 = new Student("Kamal", "Nila");
console.log(s1);

console.log(s1.firstName);
console.log(s2.firstName);
console.log(s1.fullName);
console.log(s2.fullName);


	var a = [1, 2, 3, 4, 5,8];
	a.splice(3,1, "a");
	alert(a);

	var colour = "Orange";
	console.log("start index is" + colour.indexOf("ran" ));
	console.log("start index is" + colour.indexOf("ran",0 ));
	class Circle { 
		constructor(radius) { 
			this.r = radius; 
		} 
		findArea() { 
			return Math.PI * this.r * this.r; 
		} 
		circumference() { 
			return 2 * Math.PI * this.r;
		 } 
	}

const cir = new Circle(1);
console.log(cir.findArea());
console.log(cir.circumference());
/*
var emp1 = ["a", "b", "c"];
for(let i=0; i < emp1.length; i++) {
if(emp1[i] != "b"){
	emp2[0] = 
}
}
document.write(emp1);*/
