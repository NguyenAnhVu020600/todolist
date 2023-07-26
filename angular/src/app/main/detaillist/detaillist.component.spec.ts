import { ComponentFixture, TestBed } from '@angular/core/testing';

import { DetaillistComponent } from './detaillist.component';

describe('DetaillistComponent', () => {
  let component: DetaillistComponent;
  let fixture: ComponentFixture<DetaillistComponent>;

  beforeEach(() => {
    TestBed.configureTestingModule({
      declarations: [DetaillistComponent]
    });
    fixture = TestBed.createComponent(DetaillistComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
