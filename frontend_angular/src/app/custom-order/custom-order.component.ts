import { Component, OnInit } from '@angular/core';
import { OrderService } from '../shared/order.service';

@Component({
  selector: 'app-custom-order',
  templateUrl: './custom-order.component.html',
  styleUrls: ['./custom-order.component.css']
})
export class CustomOrderComponent implements OnInit {
  orderList;
  constructor(private service: OrderService){ }

  ngOnInit() {
    this.refreshList();
  }
  refreshList() {
    this.service.getOrderList().then(res => this.orderList = res);
  }
}
