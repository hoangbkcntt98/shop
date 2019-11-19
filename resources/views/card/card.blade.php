<section id="cart_items">
		
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="description">User</td>
							<td class="description">CCV</td>
							<td class="description">Expiration Date</td>
							<td class="description">Card Number</td>
                            <td class="description"></td>

							<td></td>
						</tr>
					</thead>
					<tbody>
						@foreach($cards as $card)
                        <tr>
							<td class="cart_description">
								<h4><a href="">{{$user->name}}</a></h4>
							</td>
							<td class="cart_description">
                            <h4><a href="">{{$card->ccv}}</a></h4>
							</td>
							<td class="cart_description">
                            <h4><a href="">{{ \Carbon\Carbon::parse($card->expiration_date)->format('d/m/Y')}}</a></h4>
							</td>
                            <td class="cart_description">
								<h4><a href="">{{$card->card_number}}</a></h4>
							</td>
                            <td>
								<div >
									<button class = "btn btn-default"><a href="/card/{{$card->card_id}}/edit">Edit</a></button>
									
								</div>
							</td>
							<td >
							{!! Form::open(['action' => ['CardController@destroy',$card->card_id],'method'=>'POST']) !!}
									{{Form::hidden('_method','DELETE')}}
									{{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                                    {!! Form::close() !!}
							</td>
						</tr>
                        @endforeach
					</tbody>
				</table>
			</div>
		
	</section> <!--/#cart_items-->