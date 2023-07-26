import { Component } from '@angular/core';
import { FormBuilder, FormGroup } from '@angular/forms';

@Component({
  selector: 'app-header',
  templateUrl: './header.component.html',
  styleUrls: ['./header.component.css']
})
export class HeaderComponent {
  toDoModel = false;
  openToDoModel(){
    this.toDoModel = !this.toDoModel;
  }
  listForm: FormGroup;
  onSubmit(){
    if (this.listForm.valid) {
      console.log(this.listForm.value)
    }
  }
  constructor(private _listform: FormBuilder){
    this.listForm = this._listform.group({
      todolist: '',
      category: '',
      note: '',
      date: '',
      time: '',
    });
  }
}
