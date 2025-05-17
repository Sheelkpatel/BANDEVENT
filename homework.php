<!DOCTYPE html>
<html>
    <head>
        <title>
            EVENT
        </title>
        <link rel="stylesheet" href="homework.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
    </head>
    <body>
        
        <div class="navbar">
          
          <a href="#">HOME</a>
          <a href="#cultural">CULTURAL</a>
        <a href="#tour">TOUR</a>
        <a href="#contact">CONTACT</a>
        <a href="#search" class="css"><i class="fa fa-search fa-rotate-90"></i> </a>
       
      </div>

    

      <div class="gfa" >
        <div class="carousel">
            <div class="carousel-item active">
                <img src="Assets/ahmedabad.jpg" class="carousel-img">
                <div class="carousel-text">
                    <h3>Ahmedabad </h3>
                    <p>
                      A UNESCO World Heritage city known for its vibrant culture, textiles, and Sabarmati Ashram.
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="Assets/vadodara.jpg" class="carousel-img">
                <div class="carousel-text">
                    <h3>Vadodara </h3>
                    <p>
                      Famous for its grand Navratri celebrations, royal palaces, and rich Maratha heritage.
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="Assets/surat.jpg" class="carousel-img">
                <div class="carousel-text">
                    <h3>Surat</h3>
                    <p>
                      A bustling diamond and textile hub known for its modern infrastructure and delicious street food.
</p>
                </div>
            </div>
        </div>
        <!-- Carousel Controls -->
        <button class="carousel-control prev" onclick="moveSlide(-1)">&#10094;</button>
        <button class="carousel-control next" onclick="moveSlide(1)">&#10095;</button>
    </div>
    




    <div id="cultural">
      <div class="future">
        <br><br><br><br><br>
        <span class="future1">EXPLORE GUJARAT</span>
        <br><br><br>
        <span class="future2">Culture • Music • Celebration</span>
        <br><br>
        <div class="future3">
          <p>Welcome to the vibrant land of Gujarat! Home to a rich cultural heritage, Gujarat hosts grand festivals like the Rann Utsav, Navratri Garba, and the Modhera Dance Festival. These events are filled with traditional music, folk dances, and colorful displays that captivate visitors from around the world. Experience the energy of Dandiya nights, the grace of classical dance at the sun temple, and the peace of desert moonlight camps. Discover Gujarat through its culture, food, music, and unmatched spirit.
            From intricate handicrafts and handwoven textiles to mouthwatering local cuisine like Dhokla, Fafda, and Undhiyu, every corner of Gujarat offers something unique. Visit the bustling markets, sacred temples, historic palaces, and serene beaches that reflect the region’s diversity. Take part in camel rides, cultural workshops, and local storytelling sessions that enrich your journey. Whether you're exploring the salty expanse of the Rann of Kutch or swaying to Garba beats under the full moon, Gujarat promises unforgettable memories. 
            It’s more than a destination — it's a celebration of life, tradition, and timeless joy..</p>
        </div>
    
        <div class="future4">
          <div class="name">
            <center>WHITE RANN</center>
            <br>
            <img src="Assets/rannutsav.jpg" class="log" alt="Rann Utsav">
          </div>
          <div class="name">
            <center>FOLK VIBES</center>
            <br>
            <img src="Assets/navratri.jpg" class="log" alt="Navratri Garba">
          </div>
          <div class="name">
            <center>LIGHT SHOW</center>
            <br>
            <img src="Assets/modhera.jpg" class="log" alt="Modhera Dance Festival">
          </div>
        </div>
        <br><br><br><br><br><br>
      </div>
    </div>
    

        <div class="tech1" id="tour" >
          <div class="tech2">TOURS AND EVENTS DATES</div>
          <div class="tech3"><i>Remember to book your tickets!</i></div>
          
          <div class="tech4">
              <div class="tech5">September <span class="tech6">Sold out</span></div>
              <div class="tech5">October <span class="tech6">Sold out</span></div>
              <div class="tech5">November <span class="tech7">8</span></div>
          </div>
      
          <div class="tech8" id="tourContainer"></div>

          <!-- Modal Structure -->
         
<div id="ticketModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h2 id="modalTitle">Buy Tickets</h2>
    <p id="modalSubtitle">Select your preferred date and proceed to purchase your tickets.</p>
    <div class="text">
    <div><strong>Event:</strong> <span id="eventName"></span></div>
    <div><strong>Place:</strong> <span id="eventPlace"></span></div>
    <div><strong>Date:</strong> <span id="eventDate"></span></div>
    </div>
   
    <p><strong>Description:</strong> <span id="eventDesc"></span></p>
    
    <form id="ticketForm">
      <div class="text2">
      <div class="txt">
      <label for="name">Name:</label><br>
      <input type="text" id="name" name="name" placeholder="Your Name" required><br><br>
       </div>
       <div class="txt">
      <label for="email">Email:</label><br>
      <input type="email" id="email" name="email" placeholder="Your Email" required><br><br>
      </div>
      </div> 
      <label for="mobile">Mobile No:</label><br>
      <input type="tel" id="mobile" name="mobile" placeholder="Your Mobile Number" required><br><br>

      <label for="address">Address:</label><br>
      <textarea id="address" name="address" placeholder="Your Address" required></textarea><br><br>
      <div class="text2">
      <div class="txt">
      <label for="ticketCount">No. of Tickets:</label><br>
      <input type="number" id="ticketCount" name="ticketCount" min="1" value="1" required><br><br>
     </div>
    <div class="txt">
      <label for="price">Total Price (INR):</label><br>
      <input type="text" id="price" name="price" readonly><br><br>
       </div>
       </div> 

      <button type="button" id="razorpayBtn" class="tech13" style="background-color:#02a437; color:white;">
        Pay with Razorpay
      </button>
    </form>
  </div>
</div>
</div>

          
      

      
         
          



<form action="contact.php" method="POST">
  <div class="mac1" id="contact">
    <h2 class="mac2">CONTACT</h2> <br>
    <p class="mac3"><i>Fan? Drop a note!</i></p>
    
    <div class="mac4">
      <div class="mac5">
        <i class="fa fa-map-marker" id="mac6"></i> Vadodara, Gujarat<br>
        <i class="fa fa-phone" id="mac6"></i> Phone: +91 9537904494<br>
        <i class="fa fa-envelope" id="mac6"></i> Email: gujarattourism@gmail.com<br>
      </div>
      
      <div class="mac7">
        <div class="mac8">
          <div class="mac9">
            <input class="mac" type="text" placeholder="Name" required name="name">
          </div>
          <div class="mac9">
            <input class="mac10" type="email" placeholder="Email" required name="email">
          </div>
        </div>
        <textarea class="mac11" placeholder="Message" required name="message"></textarea>
        <button class="mac12" type="submit">SEND</button>
      </div>
    </div>
  </div>
</form>


           <div class="mac13" >
          <img src="Assets/map.jpeg" >
           </div>
  

           <footer class="book1" >
            <i class="fa fa-facebook-official" class="book2"></i>
            <i class="fa fa-instagram  " class="book2"></i>
            <i class="fa fa-snapchat"  class="book2"></i>
            <i class="fa fa-pinterest-p " class="book2"></i>
            <i class="fa fa-twitter " class="book2"></i>
            <i class="fa fa-linkedin " class="book2"></i>
            <p class="book3">Powered by <a href="#" target="_blank">SHEELPATEL</a></p>
          </footer>
         
      
      
         


        <script src="homework.js"></script>
        <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
document.getElementById("razorpayBtn").addEventListener("click", function () {
    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const mobile = document.getElementById("mobile").value.trim();
    const address = document.getElementById("address").value.trim();
    const ticketCount = parseInt(document.getElementById("ticketCount").value);
    const totalPrice = parseFloat(document.getElementById("price").value);
    const eventName = document.getElementById("eventName").textContent;
    const eventPlace = document.getElementById("eventPlace").textContent;

    if (!name || !email || !mobile || !address || !ticketCount) {
        alert("Please fill all fields.");
        return;
    }

    const options = {
        key: "rzp_test_2j0M68nTS51x3T", // Replace with your Razorpay Key ID
        amount: totalPrice * 100,
        currency: "INR",
        name: "Event Tickets",
        description: `Tickets for ${eventName}`,
        handler: function (response) {
            // On payment success, send data to backend
            fetch("http://localhost/BANDEVENT/ticket_process.php", {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify({
                    razorpay_payment_id: response.razorpay_payment_id,
                    name,
                    email,
                    mobile,
                    address,
                    ticketCount,
                    totalPrice,
                    eventName,
                    eventPlace
                })
            })
            .then(res => res.text())
            .then(data => {
                alert(data);
                modal.style.display = "none";
            })
            .catch(err => {
                alert("Error saving ticket: " + err);
            });
        }
    };

    const rzp = new Razorpay(options);
    rzp.open();
});
</script>

        </body>
        </html>