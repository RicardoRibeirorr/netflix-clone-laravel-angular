import { Component, OnInit } from '@angular/core';
import { iMedia } from 'src/app/core/interfaces/iMedia.interface';
import { MediaService } from 'src/app/core/services/media.service';

@Component({
  templateUrl: './media-favorite.component.html',
  styleUrls: ['./media-favorite.component.scss']
})
export class MediaFavoriteComponent implements OnInit {
    // Data request
    favoriteData:Array<iMedia>|[]=[];
    mediaRequest:any;
  
    // Control Variables
    favoriteLoaded:boolean=false;
    moreFavoriteLoaded:boolean=true;
    
    constructor(private mediaService:MediaService) { }
  
    ngOnInit(): void {
      // favorite
      this.mediaService.httpIndexFavorites().subscribe((i:any)=>{
        if(i){
          this.mediaRequest = i;
          this.favoriteData = i.data;
        }
        this.favoriteLoaded=true;
      })
    }
  
  
    onScrollingFinished(){
      if(this.moreFavoriteLoaded && this.mediaRequest && this.mediaRequest.next_page_url){
        this.moreFavoriteLoaded = false;
        this.mediaService.httpIndexPaginate(this.mediaRequest.next_page_url).subscribe((i:any)=>{
          this.mediaRequest = i;
          this.favoriteData = this.favoriteData.concat(i.data);
          this.moreFavoriteLoaded = true;
        });
      }
    }
  }