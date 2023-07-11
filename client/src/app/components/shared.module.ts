import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { ModalMediaShowComponent } from './modals/modal-media-show/modal-media-show.component';
import { MediaItemComponent } from './items/media-item/media-item.component';
import { NavbarComponent } from './layouts/navbar/navbar.component';



@NgModule({
  declarations: [
    ModalMediaShowComponent,
    MediaItemComponent,
    NavbarComponent
  ],
  exports: [
    ModalMediaShowComponent,
    MediaItemComponent,
    NavbarComponent
  ],
  imports: [
    CommonModule
  ]
})
export class SharedModule { }
