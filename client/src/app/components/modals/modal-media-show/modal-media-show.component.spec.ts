import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ModalMediaShowComponent } from './modal-media-show.component';

describe('ModalMediaShowComponent', () => {
  let component: ModalMediaShowComponent;
  let fixture: ComponentFixture<ModalMediaShowComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ ModalMediaShowComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(ModalMediaShowComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
