import { Injectable } from '@angular/core';
import { HttpService } from './http.service';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class ApplicationService {

  constructor(private httpService:HttpService) { }

  httpToogleFavorite():Observable<any>{
    return new Observable;
  }
}
