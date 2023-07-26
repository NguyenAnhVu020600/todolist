import { Component } from '@angular/core';

@Component({
  selector: 'app-sidebar',
  templateUrl: './sidebar.component.html',
  styleUrls: ['./sidebar.component.css']
})
export class SidebarComponent {
  sidenav: boolean = false;
  toggleSidebar(){
    this.sidenav = !this.sidenav;
    console.log(this.sidenav);
  }
}
