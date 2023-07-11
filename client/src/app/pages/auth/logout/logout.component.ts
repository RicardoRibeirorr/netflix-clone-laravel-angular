import { Component, OnInit } from '@angular/core';
import { UserService } from './../../../core/services/user.service';

@Component({
  templateUrl: './logout.component.html',
  styleUrls: ['./logout.component.scss']
})
export class LogoutComponent implements OnInit {


  constructor(private userService:UserService){}

  ngOnInit(): void {
    this.userService.logout();
  }

}
