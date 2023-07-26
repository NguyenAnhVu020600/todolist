import { Component, NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { DetaillistComponent } from './main/detaillist/detaillist.component';
import { TodolistComponent } from './main/todolist/todolist.component';

const routes: Routes = [
  {'path': '', component: TodolistComponent},
  {'path': 'detaillist', component: DetaillistComponent}
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
