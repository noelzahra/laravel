<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Vuebnb</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
  <script type="text/javascript">
    window.vuebnb_listing_model = "{!! addslashes(json_encode($model)) !!}"
  </script>
</head>
<body>
<div id="toolbar">
<img class="icon" src="{{ asset('images/logo.png')}}">
  <h1>vuebnb</h1>
</div>
<div id="app">
  <!-- Vue controls this node and children nodes -->
  <div class="header">
    <div class="header-img" 
         v-bind:style="headerImageStyle"
         v-on:click="modalOpen = true"
    >
    <button class="view-photos">View photos</button>
    </div>
  </div>
  <div class="container">
    <div class="heading">
        <h1>@{{title}}</h1>
        <p>@{{address}}</p>
    </div>
    <hr>
    <div class="about">
      <h3>About this listing</h3>
        <p v-bind:class="{ contracted:contracted }">@{{about}}</p>
        <button class="more" v-if = "contracted" v-on:click = "contracted = false">+ More</button>
    </div>
    <div class="lists">
      <hr>
      <div class="amenities list">
        <div class="title">Amenities</div>
          <div class="content">
              <div class="list-item" v-for="amenity in amenities">
                <i class="fa fa-lg" v-bind:class="amenity.icon"></i><span>@{{ amenity.title }}</span>
                </div>
            </div>
      </div>
      <hr>
      <div class="prices list">
        <div class="title">Prices</div>
        <div class="content">
          <div class="list-item" v-for="price in prices">@{{ price.title }}: <span class="bold">@{{ price.value }}</span></div>
        </div>
      </div>
    </div>
  </div>
  <div id="modal" v-bind:class="{ show:modalOpen }">
    <button v-on:keyup.esc="modalOpen = false" class="modal-close">&times;</button>
    <div class="modal-content">
        <image-carousel v-bind:images="images"></image-carousel>
    </div>
  </div>
</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>