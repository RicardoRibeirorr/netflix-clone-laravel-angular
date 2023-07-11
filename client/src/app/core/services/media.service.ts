import { Injectable } from '@angular/core';
import mediaMock from '../../../assets/mocks/media.mock.json';
import { HttpService } from './http.service';
import { Observable, of } from 'rxjs';
import { iMedia } from '../interfaces/iMedia.interface';

@Injectable({
  providedIn: 'root'
})
export class MediaService {
  private prefix = '/media';

  constructor(private httpService:HttpService) { }


  httpIndexPaginate(route:string):Observable<Array<iMedia>|[]|any> {
    return this.httpService.get(`${route}`);
  }
  httpIndex():Observable<Array<iMedia>|[]|any> {
    return this.httpService.index(`${this.prefix}/search`);
  }
  httpIndexFavorites():Observable<Array<iMedia>|[]|any> {
    return this.httpService.index(`${this.prefix}/favorites`);
  }
  httpIndexLatest():Observable<Array<iMedia>|[]|any> {
    return this.httpService.index(`${this.prefix}/latest`);
  }
  httpIndexWatched():Observable<Array<iMedia>|[]|any> {
    return this.httpService.index(`${this.prefix}/watched`);
  }
  httpIndexSimilar():Observable<Array<iMedia>|[]|any> {
    return this.httpService.index(`${this.prefix}/similar`);
  }
  httpIndexHot():Observable<iMedia|any> {
   return this.httpService.show(`${this.prefix}/hot`);
  }
  

  httpShow(id:string|number):Observable<iMedia|any> {
    return this.httpService.show(`${this.prefix}/show/${id}`);
  }

  
  httpShowTop():Observable<iMedia|any> {
    return this.httpService.show(`${this.prefix}/top`);
  }
}
