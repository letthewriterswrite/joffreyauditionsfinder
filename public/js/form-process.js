//Chris doesn't want city anymore
//document.getElementById("selectCity").addEventListener("click",geocoderCustom);
document.getElementById("selectState").addEventListener("click",setState);
document.getElementById("findaudition-btn").addEventListener("click",slideNav)


//Useless
//document.getElementById("findAudition").addEventListener("click",geocoderCustom);
//document.getElementById("auditionForm").addEventListener("submit",geocoderCustom);

function slideNav()
{
    if(document.getElementById("joffrey-sidenav").className=="joffrey-sidenav"){
        document.getElementById("joffrey-sidenav").className="joffrey-sidenav-active";
        document.getElementById("auditionForm").className="transparent-active";
    }else{
        document.getElementById("joffrey-sidenav").className = "joffrey-sidenav";
        document.getElementById("auditionForm").className = "transparent";
    }
}

function geocoderCustom (){
    var city = document.getElementById("city").value;

    
    var geocoder =  new google.maps.Geocoder();
    geocoder.geocode( { 'address': city}, function(results, status) {
          if (status == google.maps.GeocoderStatus.OK) {
              document.getElementById("tribe-bar-geoloc-lat").value = results[0].geometry.location.lat();
              document.getElementById("tribe-bar-geoloc-lng").value = results[0].geometry.location.lng();
            //alert("location : " + results[0].geometry.location.lat() + " " +results[0].geometry.location.lng()); 
          } /*else {
            alert("Something got wrong " + status);
          }*/
        });
    nextPre();
    return true;
}

function setState ()
{
   var stateID = findStateID(document.getElementById("state").value);
    document.getElementById("tribe_state").value = stateID;
    document.getElementById("auditionForm").submit();
    //Removed the genre step so not needed for now.
    //nextPre();
    
    return true;
}

function findStateID (state)
{
    for(var i =0; i< addresses.length; i++)
        {
            if(addresses[i].text == state) {
                return addresses[i].id;
            }
        }
}
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";



}

function nextPre () {
    var x = document.getElementsByClassName("tab");
    x[currentTab].style.display = "none";
    currentTab++;
    showTab(currentTab);
}

var addresses = [{"text":"Alabama","id":"12229-14492","value":"12229,14492"},{"text":"Alberta","id":"12284-27079-12219","value":"12284,27079,12219"},{"text":"Ancona","id":"13081","value":"13081"},{"text":"Arizona","id":"12275-14493","value":"12275,14493"},{"text":"Arkansas","id":"27086","value":"27086"},{"text":"Belo Horizonte","id":"17907-33066","value":"17907,33066"},{"text":"Benito Ju\u00e1rez","id":"30839","value":"30839"},{"text":"British Columbia","id":"12234","value":"12234"},{"text":"Buenos Aires","id":"26153","value":"26153"},{"text":"CO","id":"27082","value":"27082"},{"text":"Caba","id":"12540","value":"12540"},{"text":"California","id":"12227-12231-12235-12241-12268-12277-12283-14494-27238-27083-27090","value":"12227,12231,12235,12241,12268,12277,12283,14494,27238,27083,27090"},{"text":"Cascade","id":"17913","value":"17913"},{"text":"Caserta","id":"13092","value":"13092"},{"text":"Colorado","id":"12223-12278","value":"12223,12278"},{"text":"Connecticut","id":"12236-12248-12282-12288-27077","value":"12236,12248,12282,12288,27077"},{"text":"DC","id":"12294","value":"12294"},{"text":"Dublin","id":"13756","value":"13756"},{"text":"England","id":"13748","value":"13748"},{"text":"Florida","id":"12204-12214-12222-12249-12255-12285-12287-14487-22908-22920-22913-28767-30444","value":"12204,12214,12222,12249,12255,12285,12287,14487,22908,22920,22913,28767,30444"},{"text":"Genova","id":"13733","value":"13733"},{"text":"Georgia","id":"12194-12196-12209-12232-12266-27073-27095-27098","value":"12194,12196,12209,12232,12266,27073,27095,27098"},{"text":"Guayaquil","id":"26190","value":"26190"},{"text":"Illinois","id":"12211","value":"12211"},{"text":"Indiana","id":"12670","value":"12670"},{"text":"Iowa","id":"12197-12261-15034","value":"12197,12261,15034"},{"text":"Jalisco","id":"17939","value":"17939"},{"text":"Kansas","id":"12290","value":"12290"},{"text":"Kentucky","id":"12200","value":"12200"},{"text":"Lecce","id":"26843","value":"26843"},{"text":"Louisiana","id":"12280","value":"12280"},{"text":"MO","id":"30497","value":"30497"},{"text":"Madrid","id":"29508","value":"29508"},{"text":"Maine","id":"12205","value":"12205"},{"text":"Maryland","id":"12239","value":"12239"},{"text":"Massachusetts","id":"12216-12293-13657-27074","value":"12216,12293,13657,27074"},{"text":"Melbourne","id":"11642-26341","value":"11642,26341"},{"text":"Mexico City","id":"18095-18086-26177-26182-33570","value":"18095,18086,26177,26182,33570"},{"text":"Michigan","id":"12202-12221-12257","value":"12202,12221,12257"},{"text":"Milan","id":"13738","value":"13738"},{"text":"Minnesota","id":"12243-27085","value":"12243,27085"},{"text":"Missouri","id":"12264-27088","value":"12264,27088"},{"text":"Montana","id":"27087","value":"27087"},{"text":"Montevideo","id":"12408","value":"12408"},{"text":"NV","id":"30533","value":"30533"},{"text":"Nevada","id":"27076-27089-27096","value":"27076,27089,27096"},{"text":"New Mexico","id":"12208-12247","value":"12208,12247"},{"text":"New South Wales","id":"11638","value":"11638"},{"text":"New York","id":"12259-12295","value":"12259,12295"},{"text":"North Carolina","id":"12203-12265","value":"12203,12265"},{"text":"OH","id":"27080","value":"27080"},{"text":"Odense C","id":"18106","value":"18106"},{"text":"Ohio","id":"12237-12253-12263-12267","value":"12237,12253,12263,12267"},{"text":"Oklahoma","id":"14489","value":"14489"},{"text":"Ontario","id":"12210","value":"12210"},{"text":"Oregon","id":"12279","value":"12279"},{"text":"Panama City","id":"26039","value":"26039"},{"text":"Pennsylvania","id":"12198-12212-12218-12273","value":"12198,12212,12218,12273"},{"text":"Port of Spain","id":"26243","value":"26243"},{"text":"Quebec","id":"12272","value":"12272"},{"text":"Queensland","id":"11567","value":"11567"},{"text":"Roma","id":"13743","value":"13743"},{"text":"San Jose del Cabo","id":"17927","value":"17927"},{"text":"Sao Paulo","id":"17902","value":"17902"},{"text":"South Carolina","id":"13668-27084","value":"13668,27084"},{"text":"Stockholm","id":"18100","value":"18100"},{"text":"Sydney","id":"26473","value":"26473"},{"text":"Tennessee","id":"12207-12258","value":"12207,12258"},{"text":"Texas","id":"25897-12199-12206-12215-12226-12240-12260-12271-12276-27094-27099","value":"25897,12199,12206,12215,12226,12240,12260,12271,12276,27094,27099"},{"text":"Utah","id":"27081","value":"27081"},{"text":"Valencia","id":"30845","value":"30845"},{"text":"Verona","id":"13701","value":"13701"},{"text":"Virginia","id":"12201-12228-12254-12256","value":"12201,12228,12254,12256"},{"text":"Washington","id":"12238-12270-12292","value":"12238,12270,12292"},{"text":"West Virginia","id":"12224","value":"12224"},{"text":"Wisconsin","id":"12274","value":"12274"},{"text":"Yucatan","id":"33560","value":"33560"}];