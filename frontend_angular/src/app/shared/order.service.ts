import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Order } from './order.model';
import { OrderItem } from './order-item.model';
import { environment } from 'src/environments/environment';

@Injectable({
  providedIn: 'root'
})
export class OrderService {
  formData: Order;
  orderItems: OrderItem[];

  constructor(private http: HttpClient) { }

  saveOrUpdateOrder() {
    var body = {
      ...this.formData,
      OrderItems: this.orderItems
    };
    if (true){
    console.log("SAVE ORDER START");
    console.log(JSON.stringify(body));
    console.log("SAVE ORDER END");
    }
    return this.http.post(environment.apiURL + '/order', body);
  }

  getOrderList() {
    return this.http.get(environment.apiURL + '/order').toPromise();
  }

  getOrderByID(id:number):any {
    return this.http.get(environment.apiURL + '/order/'+id).toPromise();
  }

  deleteOrder(id:number) {
    return this.http.delete(environment.apiURL + '/order/'+id).toPromise();
  }
}
