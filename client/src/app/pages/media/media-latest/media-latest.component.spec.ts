import { ComponentFixture, TestBed } from '@angular/core/testing';

import { MediaLatestComponent } from './media-latest.component';

describe('MediaLatestComponent', () => {
  let component: MediaLatestComponent;
  let fixture: ComponentFixture<MediaLatestComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ MediaLatestComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(MediaLatestComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
