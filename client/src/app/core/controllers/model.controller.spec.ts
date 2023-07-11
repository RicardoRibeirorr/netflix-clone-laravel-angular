import { TestBed } from '@angular/core/testing';

import { ModelController } from './model.controller';

describe('ModelController', () => {
  let service: ModelController;

  beforeEach(() => {
    TestBed.configureTestingModule({});
    service = TestBed.inject(ModelController);
  });

  it('should be created', () => {
    expect(service).toBeTruthy();
  });
});
