@props(['datetime'])



<div class="DTcontainer">
   <div class="datecontainer" >
      
    

@foreach(array_keys($datetime) as $date)

   @php 
   $dayOfMonth = date('d', strtotime($date));
   $month = date('F', strtotime($date));
   $dayOfWeek = date('l', strtotime($date));

   
   @endphp
    <x-date jour={{$dayOfWeek}} nombre={{$dayOfMonth}} mois={{$month}}/>
@endforeach
       

   </div>
<div class="timecontainer">
    {{-- @foreach($projections as $projection)
        
        @foreach ($projection["times"] as $time )
            <x-heureprojection heure={{$time}} typesalle="IMAX" langue="FR"/>
        @endforeach
    @endforeach --}}
      

   </div>
</div>
<style>
.DTcontainer{
    background-color: #f7f7f7;
   width: 100%;
   height: 30rem;
   display: flex;
   flex-direction: column;
   justify-content: flex-start;
}
.datecontainer{
    display: flex;
      justify-content: start;
      gap: 2rem;
      align-items: center;
      height: 50%;
      padding-left: 2rem;
      overflow-x:scroll; 
      width: 1000px ;
      
      
      
}
.timecontainer{
    display: flex;
      justify-content: start;
      gap: 2rem;
      align-items: center;
      height: 50%;
      padding-left: 2rem;
      overflow-x:scroll; 
      width: 1000px ;
      
      
      
}
.datecontainer::-webkit-scrollbar {
        width: 0;  
    }
 .timecontainer::-webkit-scrollbar {
        width: 0;  
    }
</style>
<script>
        const datetime = {!! json_encode($datetime) !!};
        console.log(datetime);

</script>