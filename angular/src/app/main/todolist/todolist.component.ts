import { Component } from '@angular/core';

@Component({
  selector: 'app-todolist',
  templateUrl: './todolist.component.html',
  styleUrls: ['./todolist.component.css']
})
export class TodolistComponent {
  isOpentOption = false;
  openOption(){
    this.isOpentOption = !this.isOpentOption;
  }
}
