@props(["url","movietitle"])

<div style="display: flex; flex-direction: column; justify-content: center; height: 100%;">
    <img src="{{ $url }}" style="height:202px;" alt="">
    <p style="color: grey; text-align: center; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif ;  font-weight: 100;font-size: 14px">{{ $movietitle }}</p>
</div>
