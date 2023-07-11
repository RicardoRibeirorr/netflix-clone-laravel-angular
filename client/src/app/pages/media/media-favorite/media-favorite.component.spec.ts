import { ComponentFixture, TestBed } from '@angular/core/testing';

import { MediaFavoriteComponent } from './media-favorite.component';

describe('MediaFavoriteComponent', () => {
  let component: MediaFavoriteComponent;
  let fixture: ComponentFixture<MediaFavoriteComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ MediaFavoriteComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(MediaFavoriteComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
