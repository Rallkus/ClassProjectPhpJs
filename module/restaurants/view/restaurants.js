var Api_key="b_jBXyyQ8t_HDQU7p567hGraMA2sSOB3PMNiiXsbSHmiYkqngfA-LIH-I30UX2gOON74M-uTQGy1FTQr0oE7cyCsTlqFL8oknp_Iy6BkUdi7bPzObW2et0-8TqVPWXYx";
$(document).ready(function () {
$.ajax({
  //type: "GET",
  url: "https://api.yelp.com/v3/businesses/north-india-restaurant-san-francisco/reviews",
  headers:{
    "Authorization" : "Bearer "+Api_key
  },
  success: function(data){
    console.log(data);
  }
});
})
