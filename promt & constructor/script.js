// var name=document.getElementById("name").value;
// var age=document.getElementById("age").value;
// var marks=document.getElementById("marks").value;

var name,age,marks;
class Student {
  constructor(name, age, marks) {
    this.name = name;
    this.age = age;
    this.marks = marks;
  }
}
let studentsArray = [];
 let numStudents = prompt("Enter the number of students:");
//let numStudents=document.createElement('input');

for (let i = 0; i < numStudents; i++) {
    let name=document.createElement('input');
    name.type="text";
    name.placeholder="Input Name";
    let age=document.createElement('input');
    age.type="number";
    age.placeholder="Input Age";
    let marks=document.createElement('input');
    marks.type="number";
    marks.placeholder="Give Marks";

    var button = document.createElement("button");
    button.id="btn";
    button.onclick="submitNow()";
    button.textContent = "Submit";

    var id = document.getElementById("container");
    id.appendChild(name);
    id.appendChild(age);
    id.appendChild(marks);
    id.appendChild(button);
  //let name = prompt("Enter the name of student " + (i + 1) + ":");
//   let age = prompt("Enter the age of student " + (i + 1) + ":");
//   let marks = prompt("Enter the marks of student " + (i + 1) + ":");
  
  let student = new Student(name, age, marks);
  studentsArray.push(student);
}
for (let i = 0; i < studentsArray.length; i++) {
    if(studentsArray[i].marks>=80){
        alert("Student " + (i + 1) + " - Name: " + studentsArray[i].name + ", Age: " + studentsArray[i].age + ", Grade: A+"  );
    }
    else if(studentsArray[i].marks>=75 && studentsArray[i].marks<80){
        alert("Student " + (i + 1) + " - Name: " + studentsArray[i].name + ", Age: " + studentsArray[i].age + ", Grade: A"  );
    }
    else if(studentsArray[i].marks>=70 && studentsArray[i].marks<75){
        alert("Student " + (i + 1) + " - Name: " + studentsArray[i].name + ", Age: " + studentsArray[i].age + ", Grade: A-"  );
    }
    else if(studentsArray[i].marks>=65 && studentsArray[i].marks<70){
        alert("Student " + (i + 1) + " - Name: " + studentsArray[i].name + ", Age: " + studentsArray[i].age + ", Grade: B+"  );
    }
    else if(studentsArray[i].marks>=60 && studentsArray[i].marks<65){
        alert("Student " + (i + 1) + " - Name: " + studentsArray[i].name + ", Age: " + studentsArray[i].age + ", Grade: B"  );
    }
    else if(studentsArray[i].marks>=55 && studentsArray[i].marks<60){
        alert("Student " + (i + 1) + " - Name: " + studentsArray[i].name + ", Age: " + studentsArray[i].age + ", Grade: B-"  );
    }
    

    }


  



