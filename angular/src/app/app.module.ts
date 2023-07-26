import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { HeaderComponent } from './layouts/header/header.component';
import { FooterComponent } from './layouts/footer/footer.component';
import { StudentComponent } from './student/student.component';
import { HttpClientModule } from '@angular/common/http';
import { FormsModule } from '@angular/forms';
import { SidebarComponent } from './layouts/sidebar/sidebar.component';
import { ReactiveFormsModule } from '@angular/forms';
import { TodolistComponent } from './main/todolist/todolist.component';
import { DetaillistComponent } from './main/detaillist/detaillist.component';
import { PaginationComponent } from './layouts/pagination/pagination.component';

@NgModule({
  declarations: [
    AppComponent,
    HeaderComponent,
    FooterComponent,
    StudentComponent,
    SidebarComponent,
    TodolistComponent,
    DetaillistComponent,
    PaginationComponent,
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    HttpClientModule,
    FormsModule,
    ReactiveFormsModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
