console.log('date.js loaded');


let activeDateElement = null; // Variable to store the currently active date element
let selectedHour = null; // Variable to store the selected hour
let selectedDate = null;
var choosendate=null;
const movieId = window.location.pathname.split('/').pop();
console.log(movieId);
const dateElements = document.querySelectorAll('.datecard');
 
dateElements.forEach(dateElement => {
    dateElement.addEventListener('click', function () {
        if (activeDateElement !== null) {
          
            activeDateElement.classList.remove('active');
        }
       
        dateElement.classList.toggle('active');
        activeDateElement = dateElement;
        console.log(dateElement);
        const day = activeDateElement.querySelector('.day').innerText;
        const month = activeDateElement.querySelector('.month').innerText;
        const year = (new Date()).getFullYear();
        const paddedDay = day.padStart(2, '0');
        const paddedMonth = (new Date(Date.parse(month + ' 1, 2024'))).getMonth() + 1; // Convert month name to number
        const paddedMonthString = paddedMonth.toString().padStart(2, '0');
        const formattedDate = `${year}-${paddedMonthString}-${paddedDay}`;
        selectedDate =formattedDate;

        console.log(formattedDate); // Output: "2024-04-30"        console.log(selectedDate);
        const times = datetime[formattedDate];
        console.log(times);
        
        

   if (times){
    

    const timesContainer = document.querySelector('.timecontainer');
    timesContainer.innerHTML = ''; // Clear previous times
   
    if (times.length > 0) {
        const timesHtml = times.map(time => `<div class="hourcard">
   <p style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif ;margin: 0%">${time}</p>
   <p style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif ;font-weight: 900;margin: 0%">4D</p>
   <p style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;margin: 0%">FR</p>

</div>`).join('');
        
        timesContainer.innerHTML = timesHtml;
        
    } else {
        timesContainer.innerHTML = 'No projections available for this date';
    }


   }
    })
});
document.addEventListener('DOMContentLoaded', function() {
    const timesContainer = document.querySelector('.timecontainer');

    timesContainer.addEventListener('click', function(event) {
        const hourElement = event.target.closest('.hourcard');
        if (!hourElement) return; // If the clicked element is not an hourcard, exit

        const activeHourElement = document.querySelector('.hourcard.active');
        if (activeHourElement) {
            activeHourElement.classList.remove('active');
        }
        
        hourElement.classList.add('active');
        selectedHour = hourElement.querySelector('p').innerText;
        console.log(selectedHour);
        console.log(choosendate);
        
        console.log(selectedDate);
        const reservationUrl = `/movie/${movieId}/reservation?date=${selectedDate}&hour=${selectedHour}`;
        window.location.href = reservationUrl;

    });
});


