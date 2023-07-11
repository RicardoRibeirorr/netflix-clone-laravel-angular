
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';
import { map } from 'rxjs/operators';
import { Router } from '@angular/router';
import { HttpService } from './http.service';

@Injectable({
  providedIn: 'root'
})
export class UserService {
  private prefix: string = 'auth';
  private _isLoggedIn = false;
  private _token: string = "";
  private _user: any = undefined;

 constructor(private http: HttpClient, public router: Router, private httpService: HttpService) {
    this._init();
  }

  private _init() {
    // localStorage.setItem('token', this.tempToken);
    // localStorage.setItem('user', JSON.stringify(userMock.user));

    this.getUser();
    this.getToken();

    if (this._user && this._token && this._token !== "" && this._token !== "undefined") {
      this._isLoggedIn = true;
      this.httpService.clearHeaders();
      this.httpService.addHeader('Authorization', `Bearer ${this._token}`);
    } else {
      // this.logout();
    }
  }

  /**
   * Register a new user, without loggin in automatically,
   * since users will be created by administrators.
   * @param username 
   * @param email 
   * @param password 
   * @returns 
   */
  register(data: { name: string, email: string, phone: string, role: string, affiliates: Array<any> }) {
    return this.httpService.store(`${this.prefix}/register`, data);
  }

  /**
   * Request the reset of the password. An email with the code
   * will be sent to the user
   * @param email 
   * @returns 
   */
  requestResetPassword(email: string) {
    return this.httpService.store(`${this.prefix}/password-reset/request`, { email: email });
  }

  /**
   * Request the reset of the token. An email with the code
   * will be sent to the user
   * @param email
   * @param token
   * @returns 
   */
  checkResetToken(email: string, token: string) {
    return this.httpService.store(`${this.prefix}/password-reset/check-token`, { email: email, token: token });
  }

  /**
   * Reset the password, by introduzing the code sent to the email
   * and the new password.
   * @param id : To identify the user requesting
   * @param password : New password 
   * @returns 
   */
  resetPassword(id: number, password: string) {
    return this.httpService.update(`/user/${id}/password-reset`, { id: id, password: password });
  }

  /**
   * Login a user
   * @param email 
   * @param password 
   * @returns 
   */
  login(email: string, password: string): Observable<boolean> {
    return this.httpService.store(`/login`, { email: email, password: password })
      .pipe(
        map((result: any) => {
          debugger;
          localStorage.setItem('token', result.token);
          localStorage.setItem('user', JSON.stringify(result.user));
          this._init()
          return true;
        })
      );
  }


  /**
   * Log out a user and redirect to the login page
   */
  logout() {
    let removeToken = localStorage.removeItem('token');
    let removeUser = localStorage.removeItem('user');
    localStorage.clear();
    this.httpService.clearHeaders();
    this._isLoggedIn = false;
    this._user = undefined;
    debugger;

    if (removeToken == null && removeUser == null) {
      this.router.navigate(['auth/login']).then(() => {
        window.location.reload();
      });
    }
  }

  /**
   * Get the logged user, or redirect to the login page
   * @returns 
   */
  getUser() {
    if (!this._user) {
      //this._user = userMock[0];
      const json = localStorage.getItem('user');
      if (json && json !== 'undefined') this._user = JSON.parse(localStorage.getItem('user') || "{}");
    }
    return this._user || undefined;
  }

  /**
   * Get active token
   * @returns 
   */
  getToken() {
    this._token = this._token || localStorage.getItem('token') || "";
    return this._token || undefined;
  }


  /**
   * There is a loggin
   * @returns boolean
   */
  public get isLoggedIn(): boolean {
    return this._isLoggedIn;
  }
  isAuthenticated(): boolean {
    return this._isLoggedIn;
  }
}
