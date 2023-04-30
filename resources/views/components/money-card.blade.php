@php
$id = (string) rand(1,250);
@endphp
<div class="flex flex-col items-center gap-y-2 p-4 rounded-lg bg-white shadow-md">
    <p>{{$cardTitle}}</p>
    <p class="flex items-start">
        <span class="self-end">R$</span>
        @if (!$active)
        <span class="text-xl">--</span>
        @else
        <span id="money{{$id}}" class="text-5xl">{{number_format($money, 0, ',', '.')}}</span>
        @endif
        <span class="text-sm">{{$active ? ',': ''}}</span>
        @if (!$active)
        <span class="text-sm"></span>
        @else
        <span id="cents{{$id}}" class="text-sm">{{$cents}}</span>
        @endif
    </p>
    <script>
        let money{{$id}} = document.querySelector('#money{{$id}}');
        let cents{{$id}} = document.querySelector('#cents{{$id}}');

        increment{{$id}}(money{{$id}}, {{$money * .1}}, {{$money}});
        increment{{$id}}(cents{{$id}}, {{$cents * .1}}, {{$cents}});
        
        function increment{{$id}}(el, i, max){
            if(i >= max) {
                money{{$id}}.innerText = new Intl.NumberFormat('pt-BR').format({{$money}});
                cents{{$id}}.innerText = {{$cents}};
                return;
            }
            setTimeout(function(){
                el.innerText = Math.trunc(i);
                increment{{$id}}(el, i+(max * .05), max);
            },50);
        }
    </script>
</div>