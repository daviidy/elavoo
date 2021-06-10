<button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="fa fa-bell"></i>
    @isset($notifications)
    <span class="btn btn-danger" style="border-radius: 50%" id="number_notifications" data-number="{{count($notifications)}}">{{count($notifications)}}</span>
    @else
    <span class="btn btn-danger" style="border-radius: 50%" id="number_notifications" data-number="0">0</span>
    @endisset
</button>
<div class="dropdown-menu" style="padding:10px;width:500px" id="notifications">
    @isset($notifications)
        @if (count($notifications)>0)
            @foreach ($notifications as $notif)
                @switch($notif['data']['type'])
                    @case('assign_pressing')
                        <div class="notif-div" style="width: 500px">
                            <span>
                                <b>
                                    Un nouveau colis pour vous : N° <a style="text-decoration: underline;color:blue" class="clickable-link" href="{{url('bills', $notif['data']['bill']['id'])}}?read={{$notif['id']}}">{{$notif['data']['bill']['trans_id']}}</a>
                                </b>
                            </span>
                            <br>
                            <small>
                                <b>{{Carbon\Carbon::parse($notif['created_at'])->toDateTimeString()}}</b> | Colis assigné par {{$notif['data']['assigner']['name']}}
                            </small>
                        </div>
                    @break
                    @case('assign_client')
                        <div class="notif-div" style="width: 500px">
                            <span>
                                <b>
                                    Votre colis a été envoyé au pressing : N° colis <a style="text-decoration: underline;color:blue" class="clickable-link" href="{{url('bills', $notif['data']['bill']['id'])}}?read={{$notif['id']}}">{{$notif['data']['bill']['trans_id']}}</a>
                                </b>
                            </span>
                            <br>
                            <small>
                                <b>{{Carbon\Carbon::parse($notif['created_at'])->toDateTimeString()}}</b>
                            </small>
                        </div>
                    @break
                    @case('assign_deliver')
                        <div class="notif-div" style="width: 500px">
                            <span>
                                <b>
                                    Un colis vous a été assigné pour livraison : N° colis <a style="text-decoration: underline;color:blue" class="clickable-link" href="{{url('bills', $notif['data']['bill']['id'])}}?read={{$notif['id']}}">{{$notif['data']['bill']['trans_id']}}</a>
                                </b>
                            </span>
                            <br>
                            <small>
                                <b>{{Carbon\Carbon::parse($notif['created_at'])->toDateTimeString()}}</b> | Colis assigné par {{$notif['data']['assigner']['name']}}
                            </small>
                        </div>
                    @break
                    @case('assign_deliver_client')
                        <div class="notif-div" style="width: 500px">
                            <span>
                                <b>
                                    Votre colis a été remis au livreur : N° colis <a style="text-decoration: underline;color:blue" class="clickable-link" href="{{url('bills', $notif['data']['bill']['id'])}}?read={{$notif['id']}}">{{$notif['data']['bill']['trans_id']}}</a>
                                </b>
                            </span>
                            <br>
                            <small>
                                <b>{{Carbon\Carbon::parse($notif['created_at'])->toDateTimeString()}}</b>
                            </small>
                        </div>
                    @break
                    @case('status_change')
                        <div class="notif-div" style="width: 500px">
                            <span>
                                <b>
                                    Colis {{$notif['data']['status']}} : N° colis <a style="text-decoration: underline;color:blue" class="clickable-link" href="{{url('bills', $notif['data']['bill']['id'])}}?read={{$notif['id']}}">{{$notif['data']['bill']['trans_id']}}</a>
                                </b>
                            </span>
                            <br>
                            <small>
                                <b>{{Carbon\Carbon::parse($notif['created_at'])->toDateTimeString()}}</b> | Statut changé par {{$notif['data']['assigner']['name']}}
                            </small>
                        </div>
                    @break
                    @case('new_order_to_admin')
                        <div class="notif-div" style="width: 500px">
                            <span>
                                <b>
                                    Nouvelle commande : N° <a style="text-decoration: underline;color:blue" class="clickable-link" href="{{url('bills', $notif['data']['bill']['id'])}}?read={{$notif['id']}}">{{$notif['data']['bill']['trans_id']}}</a>
                                </b>
                            </span>
                            <br>
                            <small>
                                <b>{{Carbon\Carbon::parse($notif['created_at'])->toDateTimeString()}}</b> | Commande effectuée par {{$notif['data']['client']['name']}}
                            </small>
                        </div>
                    @break

                    @default

                @endswitch
            @endforeach
        @else
            <div id="no-notification">
                <span>
                    <b>
                        Aucune notification
                    </b>
                </span>
            </div>
        @endif
    @endisset
</div>
