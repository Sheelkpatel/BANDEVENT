// FOR CARAOUSEL

let currentSlide = 0;

  function moveSlide(step) {
      const items = document.querySelectorAll('.carousel-item');
      const totalSlides = items.length;
      
      // Calculate the new slide index
      currentSlide = (currentSlide + step + totalSlides) % totalSlides;
      
      // Move the carousel
      const carousel = document.querySelector('.carousel');
      carousel.style.transform = `translateX(-${currentSlide * 100}%)`;
  }

  // Automatically move slide every 3 seconds
  setInterval(() => {
    moveSlide(1); // Move to next slide
  }, 3000);



// FOR TICKET POPUP
const tours = [
    {
      city: "Ahmedabad",
      date: "Fri 27 Nov 2016",
      image: "Assets/kankaria-carnival.jpg",
      modalId: "openModal",
      price: 500,
      eventName: "Kankaria Carnival",
      description: "Experience the colorful Kankaria Carnival with cultural shows, fireworks, and local food delights at Kankaria Lake."
    },
    {
      city: "Vadodara",
      date: "Sat 28 Nov 2016",
      image: "Assets/navratri-vadodara.jpeg",
      modalId: "openModal1",
      price: 500,
      eventName: "Navratri Garba",
      description: "Join the world-famous Navratri Garba at the University Ground in Vadodara – the true spirit of Gujarat's folk dance."
    },
    {
      city: "Surat",
      date: "Sun 29 Nov 2016",
      image: "Assets/kite-festival.jpg",
      modalId: "openModal2",
      price: 500,
      eventName: "International Kite Festival",
      description: "Celebrate Uttarayan, the International Kite Festival, with sky-filled kites, traditional snacks, and vibrant energy."
    },
    {
      city: "Dwarka",
      date: "Sat 28 Nov 2016",
      image: "Assets/janmashtami-dwarka.jpeg",
      modalId: "openModal4",
      price: 500,
      eventName: "Janmashtami Festival",
      description: "Celebrate Janmashtami in the holy city of Dwarka with bhajans, temple rituals, and spiritual festivity."
    },
    {
      city: "Gandhinagar",
      date: "Sun 29 Nov 2016",
      image: "Assets/science-city-event.jpeg",
      modalId: "openModal5",
      price: 500,
      eventName: "Science City Fair",
      description: "Explore Gujarat Science City’s event day with interactive science exhibitions, robotics, and laser shows for all ages."
    },
    {
      city: "Gir Forest",
      date: "Fri 27 Nov 2016",
      image: "Assets/gir-safari.jpeg",
      modalId: "openModal6",
      price: 500,
      eventName: "Gir Lion Safari",
      description: "Go on an adventurous Lion Safari at Gir National Park and witness the Asiatic lions in their natural habitat."
    },
    {
      city: "Bhuj",
      date: "Sat 28 Nov 2016",
      image: "Assets/handicraft-bhuj.jpeg",
      modalId: "openModal7",
      price: 500,
      eventName: "Bhuj Handicraft Festival",
      description: "Visit Bhuj’s Handicraft Festival – a celebration of Kutchi art, embroidery, leatherwork, and vibrant traditions."
    },
    {
        city: "Patan",
        date: "Mon 30 Nov 2016",
        image: "Assets/rani-ki-vav-festival.jpeg",
        modalId: "openModal8",
        price: 500,
        eventName: "Rani Ki Vav",
        description: "Explore the historic stepwell at the Rani Ki Vav Festival in Patan, featuring folk dance, music, and architectural tours."
      }
  ];
  

  const container = document.getElementById("tourContainer");

// Generate tour cards dynamically
tours.forEach((tour, index) => {
container.innerHTML += `
<div class="tech9" style="background-color:white;">
<img src="${tour.image}" class="tech10" alt="${tour.city}">
<div class="tech11">
  <p><b>${tour.eventName}</b></p>
  <br>
  <p class="tech12">${tour.date}</p>
  <br>
  <p class="para">${tour.description}</p>
  <br>
  <button class="tech13" data-modalid="${tour.modalId}" data-index="${index}">Buy Tickets</button>
</div>
</div>
`;
});

const modal = document.getElementById("ticketModal");
const closeBtn = document.querySelector(".close");

const eventNameElem = document.getElementById("eventName");
const eventDateElem = document.getElementById("eventDate");
const eventDesc = document.getElementById("eventDesc");
const priceInput = document.getElementById("price");
const ticketCountInput = document.getElementById("ticketCount");
const eventPlace = document.getElementById("eventPlace");
let currentPrice = 0;

// Open modal with data
document.addEventListener("click", (e) => {
if (e.target.classList.contains("tech13") && e.target.dataset.index) {
const index = parseInt(e.target.dataset.index);
const tour = tours[index];

// Populate modal
eventNameElem.textContent = tour.eventName;
eventDateElem.textContent = tour.date;
eventDesc.textContent= tour.description;
eventPlace.textContent=tour.city;
currentPrice = tour.price;

// Reset ticket count
ticketCountInput.value = 1;
priceInput.value = currentPrice  +(currentPrice* 0.10);

// Show modal
modal.style.display = "block";
}
});

// Update price on ticket count change
ticketCountInput.addEventListener("input", () => {
const count = parseInt(ticketCountInput.value) || 1;
const baseTotal = currentPrice * count;
const tax = baseTotal * 0.10;
const finalTotal = baseTotal + tax;
priceInput.value = finalTotal.toFixed(2); // rounded to 2 decimal places
});

// Close modal logic
closeBtn.onclick = () => modal.style.display = "none";
window.onclick = (e) => {
if (e.target === modal) modal.style.display = "none";
};






  