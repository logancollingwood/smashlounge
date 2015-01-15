function QueryRankingByRegion(region) {

  $.getJSON("http://api.garpr.com/" + region + "/rankings", function( data ) {
    var rankings = data['ranking'];
    for (var i = 0; i < rankings.length; i++) {
      var name = rankings[i]['name'];
      var rank = rankings[i]['rank'];
        $('#'+region+' tr:last').after('<tr><td>' + name + '</td><td>' + rank + '</td></tr>');
        console.log(rankings[i]);
    }  

  });
}

$(document).ready(function(){
  QueryRankingByRegion("norcal");
  QueryRankingByRegion("austin"); 
  QueryRankingByRegion("nyc");
  QueryRankingByRegion("newengland");
  QueryRankingByRegion("newjersey");
});