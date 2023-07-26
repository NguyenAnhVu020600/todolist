import { Component, OnInit } from '@angular/core';
import { StudentdataService } from '../services/studentdata.service';
import { Student } from './student.model';


@Component({
  selector: 'app-student',
  templateUrl: './student.component.html',
  styleUrls: ['./student.component.css']
})
export class StudentComponent implements OnInit {
  constructor(private studentDataService: StudentdataService,){ }

  studentData: any = [];
  studentObj = new Student();

  ngOnInit(): void {
    this.showStudentApi();
  }
  
  showStudentApi(){
    this.studentDataService.getStudentFromAPI().subscribe(students =>{
       this.studentData = students;
       console.log(this.studentData);
    });
  }
  deleteStudent(id: any){
    this.studentDataService.deleteStudent(id).subscribe({
      next: () => {
        this.showStudentApi();
      }
    })
  }

  onSubmit(){
    this.studentDataService.addStudent(this.studentObj).subscribe({
      next: (res) => {
        // Thêm dữ liệu mới vào vị trí 1 trong mảng studentData
        this.showStudentApi();
      },
      error: (err) => {
        console.error("Error while adding student:", err);
      }
    })
  }
}
