import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { OrdersComponent } from './orders/orders.component';
import { OrderComponent } from './orders/order/order.component';
import { CustomOrderComponent } from './custom-order/custom-order.component';

const routes: Routes = [
 // {path:'',redirectTo:'customerlist',pathMatch:'full'},
  {path:'',redirectTo:'orders',pathMatch:'full'},
  {path:'orders',component:OrdersComponent},
  {path:'order',children:[
    {path:'',component:OrderComponent},  
    {path:'edit/:id',component:OrderComponent}
  ]},
  {path:'customerlist',component:CustomOrderComponent}
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
