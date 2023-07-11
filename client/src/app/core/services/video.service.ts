import { Injectable } from '@angular/core';
import { Observable, of } from 'rxjs';
import { HttpService } from './http.service';

@Injectable({
  providedIn: 'root'
})
export class VideoService {
  prefix:string = 'video';

  constructor(private httpService:HttpService) { }

  
  httpShow(id:string|number):Observable<any> {
    return this.httpService.index(`/${this.prefix}/show/${id}`); //return of(mediaMock[0]);  //this.httpService.index(`${this.prefix}`);
  }
  httpWatch(id:string|number):Observable<any> {
    return this.httpService.index(`/${this.prefix}/watch/${id}`);  //this.httpService.index(`${this.prefix}`);
  }
  httpWatchMedia(id:string|number):Observable<any> {
    return this.httpService.index(`/${this.prefix}/watch/media/${id}`);  //this.httpService.index(`${this.prefix}`);
  }
}