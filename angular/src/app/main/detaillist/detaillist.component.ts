import { Component, ElementRef, OnInit, Renderer2, ViewChild } from '@angular/core';
import { AbstractControl, FormArray, FormBuilder, FormControl, FormGroup } from '@angular/forms';

@Component({
  selector: 'app-detaillist',
  templateUrl: './detaillist.component.html',
  styleUrls: ['./detaillist.component.css'],
})
export class DetaillistComponent implements OnInit {
  listForm: FormGroup;
  isFocus: boolean[] = [];
  constructor(private formBuilder: FormBuilder) {
    this.listForm = this.formBuilder.group({
      sidequests: this.formBuilder.array([
        this.formBuilder.control(null),
      ])
    });
    
  }
  showFocus(index:any){
    this.isFocus[index] = true;
  }
  hideFocus(index:any){
    this.isFocus[index] = false;
  }
  

  ngOnInit() {

  }
  
  getSideQuest(): AbstractControl[] {
    return (<FormArray> this.listForm.get('sidequests')).controls
  }

  addSideQuest(){
    (this.listForm.get('sidequests') as FormArray).push(
      this.formBuilder.control(null)
    );
  }

  deleteSideQuest(index:any,event: Event){
    event.stopPropagation();
    (this.listForm.get('sidequests') as FormArray).removeAt(index);
  }
}
