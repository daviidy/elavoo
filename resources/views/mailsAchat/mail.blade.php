@extends('layouts.mail')
@section('content')
		      <td class="bg_white">
		        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
		          <tr>
		            <td class="bg_white email-section">
		            	<div class="heading-section" style="text-align: center; padding: 0 30px;">
		              	<h2>Détails la commande</h2>
		              	<p>Prix total = X FCFA</p>
		            	</div>

		            	<table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
		            		<tr>
                    @foreach ($bill->orders->chunk($bills->orders->count()/2) as $chunk)
                      <td valign="top" width="50%">
                        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                            @foreach ($chunk as $order)
                            @foreach($items as $item)
                            @if($item->name == $order->name_item)
                          <tr>
                            <td style="padding-top: 20px; padding-right: 10px;">
                              <a href="#"><img src="/images/items/{{$item->image}}" alt="" style="width: 100%; max-width: 600px; height: auto; margin: auto; display: block;"></a>
                              <div class="text-project" style="text-align: center;">
                              	<h3><a href="#">{{$order->name_item}}</a></h3>
                              	<span>Quantité: {{$order->quantity}}</span>
                              </div>
                            </td>
                          </tr>
                          @endif
                          @endforeach
                          @endforeach

                        </table>
                      </td>
                    @endforeach




                    </tr>
		            	</table>
                        @endforeach
		            </td>
		          </tr><!-- end: tr -->

		        </table>

		      </td>
		    </tr><!-- end:tr -->
      <!-- 1 Column Text + Button : END -->
      </table>

@endsection
