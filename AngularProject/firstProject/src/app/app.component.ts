import { Component } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'firstProject';
  public name = 'Data transfered by Parent to Child';
  public message = "";
  public date = new Date(); 
}
