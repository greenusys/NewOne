import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root'
})
export class EmployeeService {

  constructor() { }
  getEmployees(){
    return [
      {"id":1,"name":"Rahul","age":24},
      {"id":2,"name":"Brandon","age":23},
      {"id":3,"name":"Elina","age":25}
    ];
  }
}
