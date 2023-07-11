import { Component, OnInit, Input, Output, EventEmitter } from '@angular/core';
import { ModelController } from 'src/app/core/controllers/model.controller';
import { iMedia } from 'src/app/core/interfaces/iMedia.interface';

@Component({
  selector: 'app-media-item',
  templateUrl: './media-item.component.html',
  styleUrls: ['./media-item.component.scss']
})
export class MediaItemComponent implements OnInit {
  @Input() item:iMedia|null=null;

  // Control variables
  clicked:boolean=false;

  constructor(private modelController:ModelController) { }

  ngOnInit(): void {
  }


  onHandleOpenModel(){
    if(this.item)
    this.modelController.setModelItem(this.item);
  }

  onHandleToggleFavorite(){
    
  }

}
