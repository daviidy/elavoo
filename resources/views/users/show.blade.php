@extends('layouts.menu-dashboard')

@section('title', 'A propos de '.$user->name)


@section('description', 'A propos de '.$user->name)


@section('content')


<style media="screen">
/*! CSS Used from: Embedded */
::-ms-clear{display:none;}
/*! CSS Used from: Embedded */
._1c60e1ac{background-color:#ffffff;position:absolute;width:120px;height:60px;top:-60px;border-top-left-radius:60px;border-top-right-radius:60px;box-shadow:0px 0px 6px 0px #0000001a;z-index:0;}
@media (max-width: 699px){
._1c60e1ac{width:100px;height:50px;top:-50px;border-top-left-radius:50px;border-top-right-radius:50px;}
}
._2279adf0{display:flex;flex-flow:column;width:100%;}
._271fc7df{cursor:pointer;margin-top:-1px;}
._29a1369d{margin-bottom: 0 !important;max-width:550px;width:100%;margin: 5rem auto;box-shadow:0px 2px 12px #0000001a;background-color:#ffffff;border-radius:8px;padding-left:40px;padding-right:40px;box-sizing:border-box;}
@media (max-width: 699px){
._29a1369d{margin-bottom:25px;margin-top:70px;padding-left:20px;padding-right:20px;}
}
._2a71a91a{width:100%;height:6px;border-radius:4px;background-color:#f9fafe;}
._2f2b8f08{display:flex;padding:20px 0px 20px 0px;}
._3524233a{display:flex;justify-content:space-between;color:#9798a9;font-size:15px;}
@media (max-width: 699px){
._3524233a{font-size:13px;}
}
._3b061060{width:100%;}
._3c5c7879{position:relative;}
._46d018fd{font-size:24px;font-family:FibraOne-SemiBold, Gotham Rounded A, Gotham Rounded B, Segoe UI, Roboto, Oxygen, Ubuntu, Droid Sans, Helvetica Neue, sans-serif;text-overflow:ellipsis;overflow:hidden;}
@media (max-width: 699px){
._46d018fd{font-size:18px;}
}
@media (max-width: 499px){
._46d018fd{font-size:14px;}
}
._79b488e7{display:block;border-radius:4px;width:8.333333333333332%;height:100%;transition:width 300ms 0ms ease-in;background-color:#62d76b;}
._871ba54{font-size:16px;color:#9798a9;font-family:FibraOne-Regular, Gotham Rounded A, Gotham Rounded B, Segoe UI, Roboto, Oxygen, Ubuntu, Droid Sans, Helvetica Neue, sans-serif;text-overflow:ellipsis;overflow:hidden;}
@media (max-width: 499px){
._871ba54{font-size:12px;}
}
._9364c7ba{display:block;border-radius:4px;width:0%;height:100%;transition:width 300ms 0ms ease-in;background-color:#62d76b;}
._a46a6e7c{display:flex;flex-flow:column;align-items:center;margin-bottom:20px;}
@media (max-width: 699px){
._a46a6e7c{margin-bottom:7px;}
}
._b54a5bae{display:flex;padding:20px 0px 20px 0px;border-bottom:1px solid #f9fafe;}
._b95e502f{border-bottom:1px solid #f9fafe;}
._c1aa0724{position:relative;height:133px;width:133px;margin-top:-60px;border-radius:50%;background-color:#ffffff;border:10px solid #ffffff;background-image:url(/images/users/{{$user->image}});background-size:contain;z-index:1;}
@media (max-width: 699px){
._c1aa0724{height:80px;width:80px;margin-top:-50px;}
}
._d0bac9c1{margin-top:10px;margin-bottom:29px;font-size:24px;width:100%;text-align:center;}
@media (max-width: 699px){
._d0bac9c1{margin-top:5px;margin-bottom:18px;}
}
._e9a607fa{height:72px;min-width:120px;border-radius:4px;align-self:center;}
@media (max-width: 699px){
._e9a607fa{height:72px;min-width:120px;}
}
._f4075a84{font-size:20px;font-family:FibraOne-SemiBold, Gotham Rounded A, Gotham Rounded B, Segoe UI, Roboto, Oxygen, Ubuntu, Droid Sans, Helvetica Neue, sans-serif;}
@media (max-width: 699px){
._f4075a84{font-size:16px;}
}
._fd0d06e2{display:flex;flex-direction:column;justify-content:space-around;padding-left:18px;width:100%;}

</style>




<div class="_29a1369d">
    <div class="_a46a6e7c">
        <div class="_3c5c7879">
            <div class="_c1aa0724"></div>
            <div class="_1c60e1ac"></div>
        </div>
        <div class="_d0bac9c1">
            <div class="_46d018fd">{{$user->name}}
                @if($user->type == "default")
                (client)
                @elseif($user->type == "admin")
                (admin)
                @elseif($user->type == "deliver")
                (livreur)
                @else
                (pressing)
                @endif
            </div>
            <div class="_871ba54">{{$user->email}}</div>
        </div><span class="_3b061060">
            <div class="_b95e502f"></div>
        </span>
        <div class="_2279adf0">
            @if($user->isDeliver())
            <div class="_271fc7df">
                <div class="_b54a5bae">
                    <div class="_fd0d06e2">
                        <span class="_f4075a84">Statut: {{$user->status}}</span>
                    </div>
                </div>
            </div>
            @endif

        </div>
    </div>
</div>





@endsection
