import { Injectable } from '@angular/core';
import { HttpClient, HttpErrorResponse, HttpHeaders } from '@angular/common/http';
import { Router } from '@angular/router';
import { environment } from '../../../environments/environment';
import { throwError } from 'rxjs';
import { catchError } from 'rxjs/operators';
// import { AlertService } from './alert.service';

@Injectable({
  providedIn: 'root',
})
export class HttpService {
  private apiUrl: string;
  private _headers = new HttpHeaders().set('Access-Control-Allow-Origin', '*');
  private _fileHeaders = new HttpHeaders()
    // .set('content-type', 'application/*')
    .set('Access-Control-Allow-Origin', '*');

  private headers = this._headers;
  private fileHeaders = this._fileHeaders;
  constructor(
    private httpClient: HttpClient,
    private route: Router
  ) {
    this.apiUrl = environment.apiUrl;
  }

  /**
   * Get a list of a model
   * @param route
   * @returns
   */
  get(route: string, body: any = {}) {
    return this.httpClient
      .get(`${route}`, { params: body, headers: this.headers })
      .pipe(catchError(this.handleMessage.bind(this)));
  }


  /**
   * Get a list of a model
   * @param route
   * @returns
   */
  index(route: string, body: any = {}) {
    return this.httpClient
      .get(`${this.apiUrl}${route}`, { params: body, headers: this.headers })
      .pipe(catchError(this.handleMessage.bind(this)));
  }

  /**
   * Get one specific model
   * @param route
   * @returns
   */
  show(route: string) {
    return this.httpClient
      .get(`${this.apiUrl}${route}`, { headers: this.headers })
      .pipe(catchError(this.handleMessage.bind(this)));
  }

  
  /**
   * Create a model
   * @param route
   * @returns
   */
  store(route: string = '/', body: any = {}, options = {}) {
    return this.httpClient
      .post(`${this.apiUrl}${route}`, body, { headers: this.headers, ...options })
      .pipe(catchError(this.handleMessage.bind(this)));
  }

  
  /**
   * Update a model
   * @param route
   * @returns
   */
  update(route: string = '/', body: any = {}, options = {}) {
    return this.httpClient
      .put(`${this.apiUrl}${route}`, body, { headers: this.headers, ...options })
      .pipe(catchError(this.handleMessage.bind(this)));
  }

  
  addHeader(name: string, value: string) {
    this.headers = this.headers.append(name, value);
    this.fileHeaders = this.fileHeaders.append(name, value);
  }

  clearHeaders() {
    this.headers = new HttpHeaders().set('Access-Control-Allow-Origin', '*');
    this.fileHeaders = new HttpHeaders()
      .set('Access-Control-Allow-Origin', '*')
      .set('Access-Control-Allow-Methods', 'GET, POST, OPTIONS, PUT, DELETE, PATCH');
  }



  /**
   * Handle http error
   * @param error
   * @returns
   */
  handleMessage(error: HttpErrorResponse) {
    let errorMessage = 'UNKNOWN_ERROR';

    if (error.error instanceof ErrorEvent) {
      // Client-side errors
      errorMessage = `CLIENT_ERROR`;
    } else if (error && error.error && error.error.message_type) {
      errorMessage = error.error.message_type;
    } else {
      errorMessage = String(error.status);
      if (errorMessage === '401') this.route.navigate(['auth/logout']);
    }
    // this.alertService.error('httpErrors.' + errorMessage, {});
    return throwError(() => errorMessage);
  }
}
