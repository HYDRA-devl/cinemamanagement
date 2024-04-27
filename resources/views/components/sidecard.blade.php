@props(['imageurl','date','seance','nomfilm','nomcinema'])
<div class="sidecard">
<div style="position: relative ;height: 45%">
    <img src={{$imageurl}} style="width: 100%;height: 100%" alt="">
    <p style="color: white ;font-family:sans-serif; position: absolute ;top: 50% ;right: 25%;margin: 0%;font-size: 25px;font-weight: 800">{{$nomfilm}}</p> 
</div>
<div style="height:55%;display: flex;flex-direction: column;justify-content: start  ">
<div class="info">
    <p>{{$date}}</p>
</div>
<div class="info">
    <p>{{$seance}}</p>
</div>
<div class="info">
    <p>{{$nomcinema}}</p>
</div>
</div>
</div>
<style>

    .sidecard{

 height: 100%;
 width: 30%;
 display: flex;
 flex-direction: column;
 justify-content: space-between;
 box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
  z-index: 20;

    }
    .info{
      width: 100%;
      height: 40%;
      background-color: #1c2129;
      border-bottom: 1px solid grey;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: sans-serif;
      font-size: 16px;
      font-weight: 700;
      color: white;



    }
  
    

</style>