<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>MasterSafari</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap"
    rel="stylesheet">
    
    <link rel='stylesheet' type='text/css' media='screen' href='styles/styleGen.css'>
   <link rel='stylesheet' type='text/css' media='screen' href='styles/styleAccomodation.css'>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   

</head>

<body>

<?php require "includes/header.php" ?>

 <main>
 <div class="options-wrapper">
    <div class="container">

      <div class="component-box">
           <h5>Price/Night</h5>
           <input type="range" min="0" max="100" value="0" class="slider" id="Range">
           <p1>Value: <span id ="demo"></span></p1>
      </div>
    
      <div class="component-box">
          <h5>Check in</h5>
          <input type="date">
       </div>

      <div class="component-box">
           <h5>No of Guests</h5>
           <div class="guest-wrapper">
           <div class="dec button">-</div>
           <input type="text" name="qty" id="1" value="0" class="input-field">
           <div class="inc button">+</div>
           </div> 
      </div>

      <div class="component-box">
            <h5>No of Rooms</h5>
            <div class="guest-wrapper">
            <div class="dec button">-</div>
            <input type="text" name="qty" id="2" value="0" class="input-field">
            <div class="inc button">+</div>
            </div> 
       </div>
       
       <div class="component-box">
        <a href="#" class="button-search">Search</a>
       </div>
    

    </div>
  </div>
  

  <div class="hotels-wrapper">
     
     <div class="slider-container">
      <div class="left-slide">
       <div>
        <h2>Jetwing Yala</h2>
        <span class="star-container">
          <span class="fa fa-star fa-1x checked"></span>
          <span class="fa fa-star fa-1x checked"></span>
          <span class="fa fa-star fa-1x ">       </span>
          <span class="fa fa-star fa-1x ">       </span>
          <span class="fa fa-star fa-1x ">       </span>

        </span>
        <p>Spread across 38 acres of land, Jetwing Yala features an outdoor pool, a business centre and luxurious rooms located on the borders of Yala National Park.
           Operating a 24-hour front desk, it provides free parking and offers complimentary Wi-Fi access throughout the property.<br>
           Fitted with parquet flooring and four-poster beds, spacious air-conditioned rooms are furnished with a wardrobe, in-room safe, a flat-screen cable TV and sofa seating area.<br>
           The large en suite bathroom comes equipped with a hairdryer and hot/cold shower.</p><br>
             <b>Most popular facilities:</b>
              <li>Outdoor swimming pool</li>
              <li> Airport shuttle </li>
              <li>Facilities for disabled guests</li>
              <li>Bar</li>
              <li>Room service</li>
              
              <h3>20$</h3>
              <button class="button-reserve"> Reserve </button>
       </div>

       <div >
        <h2>Tea Garden Eco Villas Kanneliya</h2>
        <span class="star-container">
          <span class="fa fa-star fa-1x checked"></span>
          <span class="fa fa-star fa-1x checked"></span>
          <span class="fa fa-star fa-1x ">       </span>
          <span class="fa fa-star fa-1x ">       </span>
          <span class="fa fa-star fa-1x ">       </span>
          
        </span>
        <p> Tea Garden Eco Villas features accommodation with an outdoor swimming pool, free private parking, a garden and a shared lounge.
           Boasting room service, this property also has a restaurant and a terrace. The hotel has family rooms. <br><br>
            At Tea Garden Eco Villas, the rooms have air conditioning and a flat-screen TV.
            Guests at the accommodation can enjoy an Asian breakfast.
            The area is popular for hiking, and car hire is available at Tea Garden Eco Villas.</p><br>
        <b>Most popular facilities:</b>
        <li>Outdoor swimming pool</li>
        <li> Non-smoking rooms</li>
        <li> Free parking</li>
        <li>Room service</li>
        
        
        <h3>40$</h3>
        <button class="button-reserve"> Reserve </button>
       </div>




       <div>
        <h2>Jasper Leopard Wilpaththu</h2>
        <span class="star-container">
          <span class="fa fa-star fa-1x checked"></span>
          <span class="fa fa-star fa-1x checked"></span>
          <span class="fa fa-star fa-1x">        </span>
          <span class="fa fa-star fa-1x ">       </span>
          <span class="fa fa-star fa-1x ">       </span>
        </span>

        <p>The air-conditioned holiday home consists of 2 bedrooms, a living room, a fully equipped kitchen with an oven and a kettle, and 2 bathrooms with a walk-in shower.
           Guests can take in the views of the garden from the terrace, which also has outdoor furniture. <br><br>
           The holiday home offers bed linen, towels and daily maid service.
           À la carte and continental breakfast options with warm dishes, local specialities and fruits are available every morning at the holiday home.</p><br>
        <b>Most popular facilities:</b>
           <li>Non-smoking rooms</li>
            <li> Family rooms</li>
            <li> Breakfast</li>
            <li> Free parking</li>
            <li>Room service</li>
            <li>Free WiFi</li>
          
        
        <h3>35$</h3>
        <button class="button-reserve"> Reserve </button>
       </div>


       <div>
        <h2>Rainforest Lodge Kanneliya</h2>
        <span class="star-container">
          <span class="fa fa-star fa-1x checked"></span>
          <span class="fa fa-star fa-1x checked"></span>
          <span class="fa fa-star fa-1x  ">      </span>
          <span class="fa fa-star fa-1x  ">      </span>
          <span class="fa fa-star fa-1x ">       </span>
          
        </span>
        <p>Offers fan-cooled rooms with a balcony and free WiFi in its common areas. 
          A spa, restaurant and free private parking are available at this lodge.
          Each room comes with a seating area and private bathroom with shower and free toiletries.<br><br>
          All units in the hotel are equipped with a kettle. At Rainforest Nest every room has a flat-screen TV, a private bathroom, and a balcony with a mountain view.
           Guests have access to a shared kitchen and hot tub. Other available include a tour desk, luggage storage and laundry facilities.</p><br>
        <b>Most popular facilities:</b>
        <li>Free parking</li>
         <li>Free WiFi</li>
        <li> Spa and wellness centre</li>
        <li>Room service</li>
       
        
        <h3>93$</h3>
        <button class="button-reserve"> Reserve </button>
       </div>



       <div>
        <h2>Mahoora - Wilpaththu by Eco Team</h2>
        <span class="star-container">
          <span class="fa fa-star fa-1x checked"></span>
          <span class="fa fa-star fa-1x checked"></span>
          <span class="fa fa-star fa-1x checked"></span>
          <span class="fa fa-star fa-1x checked"></span>
          <span class="fa fa-star fa-1x checked"></span>
          
        </span>
        <p>Mahoora - Wilpaththu by Eco Team provides tented accommodations at the border of Wilpaththu National Park, the largest national park in Sri Lanka and famous for its leopards.<br>
          Fitted with carpeted flooring, all tents come with an outdoor living area and a private bathroom with hot-water showers.<br><br>
           umbrellas and mosquito nets are included. Free WiFi is available in the public areas of the property.
           Couples particularly like the location</p><br>
        <b>Most popular facilities:</b>
        <li>Free parking</li>
        <li> Free WiFi</li>
        <li>Family rooms</li>
        <li>Breakfast</li>
        <li>Room service</li>
        
        
        <h3>83$</h3>
        <button class="button-reserve"> Reserve </button>
       </div>




       <div>
        <h2>Miracle Resorts & Villas Minneriya</h2>
        <span class="star-container">
          <span class="fa fa-star fa-1x checked"></span>
          <span class="fa fa-star fa-1x ">       </span>
          <span class="fa fa-star fa-1x ">       </span>
          <span class="fa fa-star fa-1x ">       </span>
          <span class="fa fa-star fa-1x ">       </span>
          
        </span>
        <p>Featuring family rooms, this property also provides guests with a sun terrace.
           The accommodation offers a 24-hour front desk, a tour desk and currency exchange for guests.<br>
          The hotel will provide guests with air-conditioned rooms offering a desk, a kettle, a fridge, a minibar, a safety deposit box, a flat-screen TV, a balcony and a private bathroom with a shower. <br>
          Breakfast is available every morning, and includes à la carte, Full English/Irish and Asian options.</p> <br>
        <b>Most popular facilities:</b>
        <li>Facilities for disabled guests</li>
          <li> Family rooms</li>
            <li>Restaurant</li>
              <li>Tea/coffee maker in all room</li>
       
        
        <h3>70$</h3>
        <button class="button-reserve"> Reserve </button>
       </div>



       <div>
        <h2>Hotel Le Green Udawalawe</h2>
        <span class="star-container">
          <span class="fa fa-star fa-1x checked"></span>
          <span class="fa fa-star fa-1x checked"></span>
          <span class="fa fa-star fa-1x ">       </span>
          <span class="fa fa-star fa-1x ">       </span>
          <span class="fa fa-star fa-1x ">       </span>
          
        </span>
        <p>Situated in Udawalawe, 8.4 km from Udawalawe National Park, Hotel Le Green Udawalawe features accommodation with free bikes, free private parking, an outdoor swimming pool and a garden.<br><br>
           Among the facilities of this property are a restaurant, a shared lounge and room service, along with free WiFi.
            The accommodation offers airport transfers, while a car rental service is also available.<br>
          The hotel offers a Full English/Irish or Asian breakfast.</p>
          <br>
        <b>Most popular facilities:</b>
        <li>Breakfast</li>
        <li>Outdoor swimming pool</li>
        <li>Free parking</li>
        <li>Restaurant</li>
        <li>Tea/coffee maker in all room</li>

        
        <h3>85$</h3>
        <button class="button-reserve"> Reserve </button>
       </div>




       <div>
        <h2>Aggressor Safari Lodge Wilpaththu</h2>
       
        <span class="star-container">
          <span class="fa fa-star fa-1x checked"></span>
          <span class="fa fa-star fa-1x checked"></span>
          <span class="fa fa-star fa-1x  checked"></span>
          <span class="fa fa-star fa-1x checked"></span>
          <span class="fa fa-star fa-1x checked"></span>
        </span>
          <p>This 5-star hotel has air-conditioned rooms with a private bathroom. 
            Nature Park Anuradhapura is 41 km from the hotel and Anuradhapura Railway Station is 41 km away.
            At the hotel, all rooms come with a wardrobe.<br><br> 
            Rooms include a safety deposit box and certain rooms are fitted with pool views. 
            The rooms will provide guests with a desk and a kettle.
           Guests at Aggressor Safari Lodge can enjoy a continental or an Asian breakfast.</p><br>
          <b>Most popular facilities:</b>
          <li>Outdoor swimming pool</li>
          <li> Room service</li>
          <li> Free parking</li>
          <li> Breakfast</li>
          <li>Tea/coffee maker in all room</li>
       
          
          <h3>65$</h3>
          <button class="button-reserve"> Reserve </button>

       </div>


       <div>
        <h2>Lavenro Hotel & Resort Kanneliya</h2>
        <span class="star-container">
          <span class="fa fa-star fa-1x checked"></span>
          <span class="fa fa-star fa-1x ">       </span>
          <span class="fa fa-star fa-1x ">       </span>
          <span class="fa fa-star fa-1x ">       </span>
          <span class="fa fa-star fa-1x ">       </span>
          
        </span>
        <p>Among the facilities of this property are a restaurant, a 24-hour front desk and room service, along with free WiFi throughout the property.
           At the hotel, all rooms include a desk. Each room is fitted with a kettle and a private bathroom, while some rooms include a balcony. 
           All guest rooms will provide guests with a fridge.<br>
          A continental, buffet or Full English/Irish breakfast is available each morning at the property.</p><br>
        <b>Most popular facilities:</b>
        <li>Outdoor swimming pool</li>
        <li> Non-smoking rooms</li>
        <li> Free parking</li>
        <li> Free WiFi</li>
        <li>Spa and wellness centre</li>
        
      
        
        <h3>25$</h3>
        <button class="button-reserve"> Reserve </button>
       </div>



       <div>
        <h2>Leopard Trails Yala</h2>
        <span class="star-container">
          <span class="fa fa-star fa-1x checked"></span>
          <span class="fa fa-star fa-1x checked"></span>
          <span class="fa fa-star fa-1x ">       </span>
          <span class="fa fa-star fa-1x ">       </span>
          <span class="fa fa-star fa-1x ">       </span>
          
        </span>
        <p>Nestled amidst forest and lake bordering the national park and close to the quieter Katagamuwa gate, Leopard Trails tented camp allows guests to experience the wilderness in comfortable air conditioned deluxe tents or in larger suites with plunge pools.<br><br>
           Expert naturalists lead shared game drives, nature walks, give an introduction to stargazing, and also host guests for drinks around the campfire, before dining by candlelight!
          An approximate 4 hours drive from the Colombo city and the Bandaranaike International Airport.</p>
          <br>
        <b>Most popular facilities:</b>
        <li>Family rooms</li>
        <li>Airport shuttle</li>
        <li>Bar</li>
        <li>Non-smoking rooms</li>
        
        <h3>55$</h3>
        <button class="button-reserve"> Reserve </button>
       </div>



       <div>
        <h2>The Deer Park Hotel Minneriya</h2>
        <span class="star-container">
          <span class="fa fa-star fa-1x checked"></span>
          <span class="fa fa-star fa-1x checked"></span>
          <span class="fa fa-star fa-1x checked"></span>
          <span class="fa fa-star fa-1x  checked"></span>
          <span class="fa fa-star fa-1x checked">       </span>
          
        </span>
        <p>The Deer Park Hotel is located on the banks of Giritale Reservoir, 10 km from Polonnaruwa Wihara.
           The stylish 5-star hotel offers an outdoor pool, 4 dining options and free parking.<br>
          Spacious guestrooms are fitted with a work desk, tea/coffee making facilities and a TV with satellite channels. 
          The living area comes with a day bed.<br>
           The tour desk can help to arrange hot air balloon and safari trips. Laundry and dry cleaning services are offered.</p><br>
        <b>Most popular facilities:</b>
        <li>Spa and wellness centre</li>
        <li>Pool - outdoor (kids)</li>
        <li>Tea/coffee maker in all rooms</li>
        <li>Breakfast</li>
        
        <h3>90$</h3>
        <button class="button-reserve"> Reserve </button>
       </div>



       <div>
        <h2>Muwan Palassa Resort Minneriya</h2>
        <span class="star-container">
          <span class="fa fa-star fa-1x checked"></span>
          <span class="fa fa-star fa-1x checked"></span>
          <span class="fa fa-star fa-1x checked"></span>
          <span class="fa fa-star fa-1x checked">       </span>
          <span class="fa fa-star fa-1x ">       </span>
          
        </span>
        <p>Set in Minneriya, 42 km from Pidurangala Rock, Muwan Palassa Resort offers accommodation with an outdoor swimming pool, free private parking, a garden and a shared lounge.
           Featuring a terrace, the 4-star resort has air-conditioned rooms with free WiFi, each with a private bathroom.<br>
            The accommodation provides room service and a 24-hour front desk for guests.<br>
             At the resort, every room includes a desk. Certain rooms will provide you with a kitchenette with a fridge, a microwave and a minibar.</p><br>
        <b>Most popular facilities:</b>
        <li>Free parking</li>
        <li>  Restaurant</li>
        <li> Tea/coffee maker in all rooms</li>
          
        
        
        <h3>45$</h3>
        <button class="button-reserve"> Reserve </button>
       </div>



       <div>
        <h2>Jungle Paradise Udawalawe</h2>
        <span class="star-container">
          <span class="fa fa-star fa-1x checked"></span>
          <span class="fa fa-star fa-1x ">       </span>
          <span class="fa fa-star fa-1x ">       </span>
          <span class="fa fa-star fa-1x ">       </span>
          <span class="fa fa-star fa-1x ">       </span>
          
        </span>
        <p>Set in Udawalawe, 11 km from Udawalawe National Park, Jungle Paradise offers accommodation with free bikes, free private parking, an outdoor swimming pool and a garden.<br>
           Boasting a 24-hour front desk, this property also has a restaurant and a terrace. The hotel also features free WiFi as well as a paid airport shuttle service.<br>
          All guest rooms in the hotel are fitted with air conditioning, a seating area, a flat-screen TV with satellite channels.</p><br>
        <b>Most popular facilities:</b>
        <li>Tea/coffee maker in all rooms</li>
        <li>Non-smoking rooms</li>
        <li>Restaurant</li>
        <li>Family rooms</li>
        <li>Bar</li>
        <li>Spa and wellness centre</li>

        <h3>30$</h3>
        <button class="button-reserve"> Reserve </button>
        
       </div>
       
       
       <div>
        <h2>Olivi Palace Udawalawe</h2>
        <span class="star-container">
          <span class="fa fa-star fa-1x checked">       </span>
          <span class="fa fa-star-half-o fa-1x checked"></span>
          <span class="fa fa-star fa-1x ">              </span>
          <span class="fa fa-star fa-1x ">              </span>
          <span class="fa fa-star fa-1x ">              </span>
          
        </span>
        <p>All guest rooms in the hotel are fitted with air conditioning, a seating area, a flat-screen TV with satellite channels, a safety deposit box and a private bathroom with a bidet. All rooms have a kettle, while selected rooms also offer a kitchen with a fridge and an oven.
           At Jungle Paradise rooms have bed linen and towels.<br><br>
           Breakfast is available every morning, and includes à la carte, continental and Asian options.
           Guests at the accommodation will be able to enjoy activities in and around Udawalawe, like hiking.</p><br>
        <b>Most popular facilities:</b>
        <li>Breakfast</li>
        <li>Bar</li>
        <li>Spa and wellness centre</li>
        <li>Airport shuttle</li>
        <li>Free parking</li>
        
        <h3>60$</h3>
        <button class="button-reserve"> Reserve </button>
       </div>


       <div>
        <h2>Wild Trails Yala by Suri</h2>
        <span class="star-container">
          <span class="fa fa-star fa-1x checked"></span>
          <span class="fa fa-star fa-1x checked"></span>
          <span class="fa fa-star fa-1x checked"></span>
          <span class="fa fa-star fa-1x ">       </span>
          <span class="fa fa-star fa-1x ">       </span>
        </span>

        <p>Boasting a garden and views of garden, Wild Trails Yala by Suri is a sustainable luxury tent situated in Yala, 14 km from Tissa Wewa. 
          This property offers access to a terrace and free private parking.<br>
          At the luxury tent, units have a desk. Each unit has a private bathroom with a walk-in shower, a hair dryer and free toiletries. <br>
          À la carte and continental breakfast options with local specialities, fresh pastries and fruits are available each morning at the luxury tent. 
          At Wild Trails Yala by Suri, the family-friendly restaurant is open for dinner and lunch and specialises in local cuisine.</p><br>
         <b> Most popular facilities:</b>
            
              <li>Free parking</li>
              <li>Non-smoking rooms</li>
              <li>Restaurant</li>
              <li>Breakfast</li>
              
              <h3>80$</h3>
              <button class="button-reserve"> Reserve </button>
          
       </div>
      </div>




      <div class="right-slide">
        <div style ="background-image: url(images/h15.jpg);"></div>
        <div style ="background-image: url(images/h2.jpg);"></div>
        <div style ="background-image: url(images/h3.jpg);"></div>
        <div style ="background-image: url(images/h13.jpg);"></div>
        <div style ="background-image: url(images/h4.jpg);"></div>
        <div style ="background-image: url(images/h6.jpg);"></div>
        <div style ="background-image: url(images/h7.jpg);"></div>
        <div style ="background-image: url(images/h8.jpg);"></div>
        <div style ="background-image: url(images/h9.jpg);"></div>
        <div style ="background-image: url(images/h10.jpg);"></div>
        <div style ="background-image: url(images/h12.jpeg);"></div>
        <div style ="background-image: url(images/h5.jpg);"></div>
        <div style ="background-image: url(images/h11.jpg);"></div>
        <div style ="background-image: url(images/h14.jpg);"></div>
        <div style ="background-image: url(images/h1.webp);"></div>
        
      </div>

        <div class="action-buttons">

          <button class="up-button">
            <img src="images/up.png" alt="btn">
          </button>

          <button class="down-button">
            <img src="images/down.png" alt="btn">
          </button>

        </div>

     </div>


     </div>

     
<?php include "includes/footer.php" ?>

<script src='scripts/scriptGen.js'></script>
<script src='scripts/scriptAccomodation.js'></script>

</body>

</html>