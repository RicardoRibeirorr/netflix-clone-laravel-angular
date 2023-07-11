

import { Component, OnInit } from '@angular/core';
import { iMedia } from 'src/app/core/interfaces/iMedia.interface';
import { MediaService } from 'src/app/core/services/media.service';

@Component({
  templateUrl: './media-search.component.html',
  styleUrls: ['./media-search.component.scss']
})
export class MediaSearchComponent implements OnInit {
  // Data request
  mediaData:Array<iMedia>|[]=[];
  mediaRequest:any;

  // Control Variables
  mediaLoaded:boolean=false;
  moreMediaLoaded:boolean=true;
  
  constructor(private mediaService:MediaService) { }

  ngOnInit(): void {
    // media
    this.mediaService.httpIndex().subscribe((i:any)=>{
      if(i){
        this.mediaRequest = i;
        this.mediaData = i.data;
      }
      this.mediaLoaded=true;
    })
  }


  onScrollingFinished(){
    if(this.moreMediaLoaded && this.mediaRequest && this.mediaRequest.next_page_url){
      this.moreMediaLoaded = false;
      this.mediaService.httpIndexPaginate(this.mediaRequest.next_page_url).subscribe((i:any)=>{
        this.mediaRequest = i;
        this.mediaData = this.mediaData.concat(i.data);
        this.moreMediaLoaded = true;
      });
    }
  }
}
