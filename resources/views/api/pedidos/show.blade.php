@extends('layouts.app')
@section('content')
 
<div class="container">
   

   
        {{-- table with order info --}}
        <table class="table table-striped table-bordered">
           {{--  @foreach ($order as $item)     --}}            
                <tr>
                    <th>Código</th>
                    <td>
                        {{ $order->id }}
                    </td>
                </tr>
                <tr>
                    <th>Cliente</th>
                    <td>
                        @php
                            $shipping = json_decode($order->shipping);
                            echo $shipping->first_name.' '.$shipping->last_name;                                                            
                        @endphp
                      {{-- {{ $order->shipping->first_name }} {{ $order->shipping->last_name }} --}}
                    </td>
                </tr>
                <tr>
                    <th>Fecha de creacion</th>
                    <td>
                        
                        {{ date('d/m/Y', strtotime($order->date_created)) }}
                    </td>
                </tr>
                <tr>
                    <th>Estado</th>
                    <td>
                        @if ($order->status == 'on-hold')
                                                
                        <span class="badge badge-primary"> En Espera</span>          
                            @elseif($order->status == 'processing')
                                <span class="badge badge-info"> En Proceso</span>
                            @elseif($order->status == 'completed')
                                <span class="badge badge-success"> Completado</span>   
                            @elseif($order->status == 'cancelled')
                                <span class="badge badge-danger"> Cancelado</span>
                            @elseif($order->status == 'on-hold')
                                <span class="badge badge-warning"> En Espera</span>
                            @endif
                    </td>
                </tr>
                <tr>
                    <th>Productos en la orden</th>
                    <td>
                       {{--  @php
                             $product = json_decode($order->line_items);
                            foreach ($product as $key => $value) {
                                echo $value->name.'<br>';

                            }
                        @endphp --}}
                        @foreach (json_decode($order->line_items) as $item)
                            <ul class="list-group">
                                <li class="list-group-item">
                                   <strong>Producto: </strong> {{ $item->name }} <br>
                                   <strong>Cantidad: </strong>  {{ $item->quantity }} <br>
                                  <strong> Precio: </strong> {{ number_format($item->price,2,',','.') }}  €	<br>
                                   <strong>Total: </strong> {{ number_format($item->total,2,',','.') }}  €	<br>
                                </li>
                            </ul>
                         
                            
                        @endforeach
                        
                    </td>
                </tr>
                <tr>
                    <th>Fecha de la ultima actualización</th>
                    <td>
                        {{ date('d/m/Y', strtotime($order->date_modified)) }}
                        
                    </td>
                </tr>
                <tr>
                    <th>Metodo de pago</th>
                    <td>
                        {{ $order->payment_method_title }}
                    </td>
                </tr>
                <tr>
                    <th>Total</th>
                    <td>
                        {{ number_format($order->total,2,',','.') }} €
                    </td>
                </tr>
               {{--  <tr>
                    <th>Ver en portal</th>
                    <td>
                        <a href="{{ $order->payment_url }}" target="_blank" class="btn btn-primary">Ver</a>
                    </td>
                </tr> --}}
           {{--  @endforeach --}}

        </table>


        {{-- button volver --}}
        <div class="form-group text-center mt-2">
            <a href="{{ route('admin.pedidos.api') }}" class="btn btn-primary">Volver</a>
        </div>
        


    

</div>


@endsection