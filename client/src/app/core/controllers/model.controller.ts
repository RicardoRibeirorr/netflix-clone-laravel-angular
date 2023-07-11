import { Injectable } from '@angular/core';
import { BehaviorSubject, Observable } from 'rxjs';
import { iMedia } from '../interfaces/iMedia.interface';

@Injectable({
  providedIn: 'root'
})
export class ModelController {
  modelItemSelected:BehaviorSubject<iMedia|null> = new BehaviorSubject<iMedia|null>(null);

  constructor() { }


  setModelItem(item:iMedia){
    this.modelItemSelected.next(item);
  }

  getActiveItem():Observable<iMedia|null>{
    return this.modelItemSelected;
  }
}
