import { Injectable } from '@angular/core';
import { HttpClient, HttpParams } from '@angular/common/http';
import { environment } from '../../environments/environment';
import { Observable } from 'rxjs';
@Injectable({
  providedIn: 'root'
})
export class StudentdataService {

  constructor(private http:HttpClient) { }
  private API_URL = environment.API_URL;
  studentData: any;
  getStudentFromAPI():Observable<any[]>{
    const params = new HttpParams()
      .set('sort_by', 'created_at')
      .set('order', 'desc');
    return this.http.get<any[]>(this.API_URL + 'student', { params });
  } 
  
  addStudent(data: any) {
    return this.http.post(this.API_URL+ 'addstudent', data );
  }
  deleteStudent(id: any) {
    return this.http.delete(this.API_URL+ 'deletestudent' + '/' + id );
  }
}
